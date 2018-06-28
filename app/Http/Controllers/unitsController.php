<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\unitsModel;
use App\requirementtypeModel;
use App\unitrequirementtypeModel;

class unitsController extends Controller
{

    //Hàm trả về danh sách Vai trò
    public function getDanhsach(){
        $unitsModel = unitsModel::all();
        return view('admin.QuanLyPhongBan.danhsach',['unitsModel'=>$unitsModel]);
    }



    public function getThem(){
        $requirementtypeModel = requirementtypeModel::all();
        return view('admin.QuanLyPhongBan.them',['requirementtypeModel'=>$requirementtypeModel]);
    }
    public function postThem(Request $req){
        $this->validate($req,
            [
                'txtTen' => 'unitsModel,year|min:1|max:100'
            ],
            [


                'txtTen.min'=>'Tên quá ngắn',
                'txtTen.max'=>'Tên quá dài'
            ]
        );
        $id = time();
        $unitsModel = new unitsModel();


        $unitsModel->UN_ID = $id;
        $unitsModel->UN_NAME = $req->txtten;
        $unitsModel->UN_DESCRIPTION = $req->txtmota;
        $unitsModel->save();


        unitrequirementtypeModel::insert(
            [


                'UN_ID' => $id,
                'RT_ID' => $req->loaiyeucau,
            ]
        );
        return redirect('admin/QuanLyPhongBan/them')->with('thongbao','thêm thành công');
    }




    //Hàm sửa vao trò
    public function getSua($ma){
        $ma1 = (integer)$ma;
    	$unitsModel = unitsModel::find($ma1);
    	return view('admin.QuanLyPhongBan.sua',['unitsModel'=>$unitsModel]);
    }
    public function postSua(Request $req ,$ma){
        $ma1 = (integer)$ma;
        $unitsModel = unitsModel::find($ma1);
        $this->validate($req,
            [
                'txtten' => 'required:role,role_name|min:3|max:100'
            ],
            [

                'txtten.required'=>'bạn chưa nhập tên chủ đề',
                'txtten.min'=>'Tên quá ngắn',
                'txtten.max'=>'Tên quá dài'
            ]
        );

        $unitsModel->UN_NAME = $req->txtten;
        $unitsModel->UN_DESCRIPTION	 = $req->txtmota;
        $unitsModel->save();

        return redirect('admin/QuanLyPhongBan/sua/'.$ma1)->with('thongbao','sửa thành công');
    }





    //Hàm xóa Vai trò
    public function getXoa($ma){
        if(!$this->check_admin()){
            abort(503);
        }
    	$ma1 = (integer)$ma;
        $unitsModel = unitsModel::find($ma1);
    	$unitsModel->Delete();
    	return redirect('admin/QuanLyPhongBan/danhsach')->with('thongbao','Xóa thành công');
    }

    //Hàm chọn loại yêu cầu
    public function getLoai($ma){
        $ma1 = (integer)$ma;
        $unitsModel = unitsModel::find($ma1);
        $list_loai = requirementtypeModel::all();
        $list_check = unitrequirementtypeModel::where('UN_ID',$ma)->get();
//        dd($list_loai);
//        dd($list_check);
        $list_data = array();
        foreach($list_loai as $key => $value){
            //Nếu mảng không rỗng thì for
            if(!empty($list_check->toArray())){
                foreach($list_check as $key_check => $value_check){
                    if($value->RT_ID == $value_check->RT_ID){
                        $list_data[$value->RT_ID] =
                            [
                                'name'=>$value->RT_NAME,
                                'check'=> true
                            ];
                        break;

                    }
                    else{
                        $list_data[$value->RT_ID]  = [
                            'name'=> $value->RT_NAME,
                            'check'=> false
                        ];
                    }
                }
            }
            //Nếu rỗng thì mặc định false
            else{
                $list_data[$value->RT_ID]  = [
                    'name'=> $value->RT_NAME,
                    'check'=> false
                ];
            }

        }
//        dd($list_data);
        return view('admin.QuanLyPhongBan.loaiyeucau',['unitsModel'=>$unitsModel,'list_loai'=>$list_data]);
    }
    public function postLoai(Request $req ,$ma){
//        dd($req->checkboxvar);
        unitrequirementtypeModel::where('UN_ID',$ma)->delete();
        if(!empty($req->checkboxvar)){
            foreach($req->checkboxvar as $key => $value){
                unitrequirementtypeModel::insert(
                    [
                        'UN_ID'=> (integer)$ma,
                        'RT_ID'=> $value
                    ]
                );
            }
        }


        return redirect('admin/QuanLyPhongBan/yeucau/'.$ma)->with('thongbao','Tùy chỉnh thành công');
    }

}
