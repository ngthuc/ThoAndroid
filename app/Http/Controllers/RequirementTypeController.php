<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\requirementtypeModel;
use App\unitsModel;


class RequirementTypeController extends Controller {

// Hàm này dùng trả ra danh sách
    public function api_list()
    {
        return [
            'status'=> true,
            'data' =>requirementtypeModel::all(),
            'mesage' => 'success'
        ];
    }
    public  function getDanhSach(){
        $data = json_decode($this->api_list()['data']);

       //join 2 bảng
        $us = unitsModel::join('unit_requirementtype','unit_requirementtype.UN_ID','=','units.UN_ID')
            ->join('requirement_type','requirement_type.RT_ID','=','unit_requirementtype.RT_ID')
            ->select('units.*', 'unit_requirementtype.RT_ID')
            ->get();

        return view('admin.QuanLyLoaiYeuCau.danhsach',     compact('data','us'));
    }
    //end danh sách

    public function getSua($ma){
      $ma1 = (integer)$ma;
      $requirementtypeModel = requirementtypeModel::find($ma1);
      return view('admin.QuanLyLoaiYeuCau.sua',['requirementtypeModel'=>$requirementtypeModel]);
    }

    public function postSua(Request $req, $ma){
      $ma1 = (integer)$ma;
      $requirementtypeModel = requirementtypeModel::find($ma1);
      $this->validate($req,
          [
              'txtten' => 'required:requirementtype,requirementtype_name|min:3|max:100'
          ],
          [

              'txtten.required'=>'bạn chưa nhập tên chủ đề',
              'txtten.min'=>'Tên quá ngắn',
              'txtten.max'=>'Tên quá dài'
          ]
      );
      $requirementtypeModel->RT_NAME = $req->txtten;
      $requirementtypeModel->RT_DESCRIPTION	 = $req->txtmota;
      $requirementtypeModel->save();

      return redirect('admin/QuanLyLoaiYeuCau/sua/'.$ma1)->with('thongbao','sửa thành công');
    }

    public function getThem(){

      return view('admin.QuanLyLoaiYeuCau.them');

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

      $requirementtypeModel = new requirementtypeModel();
      $requirementtypeModel->RT_NAME = $req->txtten;
      $requirementtypeModel->RT_DESCRIPTION = $req->txtmota;
      $requirementtypeModel->save();
      return redirect('admin/QuanLyLoaiYeuCau/them')->with('thongbao','thêm thành công');
    }

    public function getXoa($ma){
      $ma1 = (integer)$ma;
      $requirementtypeModel = requirementtypeModel::find($ma1);
      $requirementtypeModel->Delete();
      return redirect('admin/QuanLyLoaiYeuCau/danhsach')->with('thongbao','Xóa thành công');
    }
}
