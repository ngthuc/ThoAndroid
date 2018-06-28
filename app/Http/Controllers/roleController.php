<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roleModel;

class roleController extends Controller
{


    //Hàm sửa vao trò
    public function getSua($ma){
        $ma1 = (integer)$ma;
    	$roleModel = roleModel::find($ma1);
    	return view('admin.QuanLyVaiTro.sua',['roleModel'=>$roleModel]);
    }
    public function postSua(Request $req ,$ma){
        $ma1 = (integer)$ma;
        $roleModel = roleModel::find($ma1);
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

        $roleModel->RO_NAME = $req->txtten;
        $roleModel->RO_DESCRIPTION = $req->txtmota;
        $roleModel->save();

        return redirect('admin/QuanLyVaiTro/sua/'.$ma1)->with('thongbao','sửa thành công');
    }

    //Hàm trả về danh sách Vai trò
    public function getDanhsach(){
        $roleModel = roleModel::all();
        return view('admin.QuanLyVaiTro.danhsach',['roleModel'=>$roleModel]);
    }

    //Hàm xóa Vai trò
    public function getXoa($ma){
    	$ma1 = (integer)$ma;
        $roleModel = roleModel::find($ma1);
    	$roleModel->Delete();
    	return redirect('admin/QuanLyVaiTro/danhsach')->with('thongbao','Xóa thành công');
    }
    public function getThem(){

    	return view('admin.QuanLyVaiTro.them');
    }
    public function postThem(Request $req){
        $this->validate($req,
            [
                'txtTen' => 'roleModel,year|min:1|max:100'
            ],
            [
                
                
                'txtTen.min'=>'Tên quá ngắn',
                'txtTen.max'=>'Tên quá dài'
            ]
        );
//         $id=md5(time());
        $roleModel = new roleModel();
//        $roleModel->RO_ID = md5(time());
        $roleModel->RO_NAME = $req->txtten;
        $roleModel->RO_DESCRIPTION = $req->txtmota;
        $roleModel->save();

        return redirect('admin/QuanLyVaiTro/them')->with('thongbao','thêm thành công');
    }
}
