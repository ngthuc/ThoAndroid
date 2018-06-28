<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\requirementtypeModel;
use App\propertiesModel;



class propertiesController extends Controller {

    public function getDanhSach($ma){
      try{

        $ma1 = $ma;
        $propertiesModel = propertiesModel::where('RT_ID', $ma1)->get();
        if($propertiesModel){
          return view('admin.QuanLyThuocTinh.danhsach',['propertiesModel'=>$propertiesModel]);
        }else{
          return response([
            'error'   => $propertiesModel == null,
            'message' => (!$propertiesModel?
                    "Không tìm thấy Khachhang[{$ma1}]":
                    $propertiesModel->toJson())
          ], 200);

        }
        } catch(QueryException $ex) {
      return response([
          'error'   => true,
          'message' => $ex->getMessage()
        ], 200);
    } catch (PDOException  $ex) {
      return response([
          'error'   => true,
          'message' => $ex->getMessage()
        ], 200);
    }



    }
    public function getSua($ma){
      $ma1 = (integer)$ma;
      $propertiesModel = propertiesModel::find($ma1);
      return view('admin.QuanLyThuocTinh.sua',['propertiesModel'=>$propertiesModel]);
    }
    public function postSua(Request $req, $ma){
        $ma1 = (integer)$ma;
        $propertiesModel = propertiesModel::find($ma1);
        $this->validate($req,
            [
                'txtten' => 'required:PP_NAME|min:1|max:100'
            ],
            [

                'txtten.required'=>'bạn chưa nhập tên thuộc tính',
                'txtten.min'=>'Tên quá ngắn',
                'txtten.max'=>'Tên quá dài'
            ]
        );
          $propertiesModel->PP_NAME = $req->txtten;
          $propertiesModel->PP_MEASURE= $req->txtdonvi;
          $propertiesModel->save();
        return redirect('admin/QuanLyLoaiYeuCau/danhsach')->with('thongbao','sửa thành công');

    }
    public function getThem($ma){
      return view('admin.QuanLyThuocTinh.them');

    }
    public function postThem(Request $req,$ma){
      $this->validate($req,
          [
              'txtTen' => 'propertiesModel,year|min:1|max:100'
          ],
          [

              'txtTen.min'=>'Tên quá ngắn',
              'txtTen.max'=>'Tên quá dài'
          ]
      );

      $propertiesModel = new propertiesModel();
      $propertiesModel->RT_ID = $ma;
      $propertiesModel->PP_NAME = $req->txtten;
      $propertiesModel->PP_MEASURE = $req->txtmota;
      $propertiesModel->save();
      return redirect('admin/QuanLyLoaiYeuCau/danhsach')->with('thongbao','thêm thành công');

    }
    public function getXoa($ma){
      $ma1 = (integer)$ma;
      $propertiesModel = propertiesModel::find($ma1);
      $propertiesModel->Delete();
      return redirect('admin/QuanLyLoaiYeuCau/danhsach')->with('thongbao','Xóa thành công');
    }


}
