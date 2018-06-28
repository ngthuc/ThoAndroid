<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\unitsModel;
use App\userToRoleModel;
use App\userModel;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function getDanhsach(){
    	$userModel = userModel::all();
    	return view('admin.QuanLyNguoiDung.danhsach',['userModel'=>$userModel]);
    }
    public function getXoa($ma){
        $ma1 = (integer)$ma;
        $userModel = userModel::find($ma1);
        $userModel->Delete();
        return redirect('admin/QuanLyNguoiDung/danhsach')->with('thongbao','Xóa thành công');
    }
    //
    // hàm để thêm
    public function getThem(){
        $unitsModel = unitsModel::all();
        $userToRoleModel = userToRoleModel::all();
        return view('admin.QuanLyNguoiDung.them',['unitsModel'=>$unitsModel,'userToRoleModel'=>$userToRoleModel]);
    }
    public function postThem(Request $req){
        $this->validate($req,
            [
                'txtTen' => 'userToRoleModel,year|min:1|max:100'
            ],
            [


                'txtTen.min'=>'Tên quá ngắn',
                'txtTen.max'=>'Tên quá dài'
            ]
        );

        $userModel = new userModel();
        $userModel->UN_ID = $req->txtphongban;
        $userModel->RO_ID = $req->vaitro;
        $userModel->username = $req->txtten;
        $userModel->password = Hash::make($req->txtmatkhau);
        $userModel->remember_token= md5(time());
        $userModel->UC_FULLNAME = $req->tennguoidung;
        $userModel->UC_PHONE = $req->dienthoai;
        $userModel->UC_EMAIL = $req->email;
        $userModel->US_GENDER = $req->gioitinh;
        $userModel->US_BIRTHDAY = $req->ngaysinh;
        $userModel->US_ADDRESS = $req->diachi;
        $userModel->save();
//       dd($userModel);
        return redirect('admin/QuanLyNguoiDung/them/')->with('thongbao','them thành công');
    }

// ham dung de xem
    public function getXem($ma){
        $ma1 = (integer)$ma;
        $userModel = userModel::find($ma1);
        $unitsModel = unitsModel::all();
        $userToRoleModel = userToRoleModel::all();
        return view('admin.QuanLyNguoiDung.xem',['userModel'=>$userModel,'unitsModel'=>$unitsModel,'userToRoleModel'=>$userToRoleModel]);
    }




//ham de sua
    public function getSua($ma){
        $ma1 = (integer)$ma;
    	$userModel = userModel::find($ma1);
        $unitsModel = unitsModel::all();
        $userToRoleModel = userToRoleModel::all();
    	return view('admin.QuanLyNguoiDung.sua',['userModel'=>$userModel,'unitsModel'=>$unitsModel,'userToRoleModel'=>$userToRoleModel]);
    }
    public function postSua(Request $req ,$ma){
        $ma1 = (integer)$ma;
        $userModel = userModel::find($ma1);
    	$this->validate($req,
    		[
    			'txtTen' => 'userModel,year|min:1|max:100'
    		],
    		[

    			'txtTen.min'=>'Tên quá ngắn',
    			'txtTen.max'=>'Tên quá dài'
    		]
    	);
        $userModel->UN_ID = $req->txtphongban;
        $userModel->RO_ID = $req->vaitro;
        $userModel->username = $req->txtten;
        $userModel->password = Hash::make($req->txtmatkhau);
        $userModel->UC_FULLNAME = $req->tennguoidung;
        $userModel->UC_PHONE = $req->dienthoai;
        $userModel->UC_EMAIL = $req->email;
        $userModel->US_GENDER = $req->gioitinh;
        $userModel->US_BIRTHDAY = $req->ngaysinh;
        $userModel->US_ADDRESS = $req->diachi;
        $userModel->save();

    	return redirect('admin/QuanLyNguoiDung/sua/'.$ma1)->with('thongbao','sửa thành công');
    }



}
