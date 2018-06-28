<!-- Page Content -->
@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Xem tài khoản</h3>
                    </div>
                </div>

                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <center>
                    <style type="text/css">
                        .input-group-addon{
                            width: 130px;
                            text-align: left;
                        }
                        .form-group.input-group .form-control{
                            width: 400px;
                        }
                        .frame{
                            width: 60%;
                        }
                    </style>
                    <div class="frame">
                        <form action="{{$userModel->US_ID}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />

                            <div class="col-md-11 form-group input-group">
                                <span class="input-group-addon">Họ và tên</span>
                                <input type="text" name="tennguoidung" value="{{$userModel->UC_FULLNAME}}" class="form-control" >
                            </div>
                            <div class="col-md-11 form-group input-group">
                                <span class="input-group-addon">Tài khoản</span>
                                <input type="text" name="txtten" value="{{$userModel->username}}" class="form-control" >
                            </div>
                            <div class="col-md-11 form-group input-group">
                                <span class="input-group-addon">Mật khẩu</span>
                                <input type="text" name="txtmatkhau" value="{{$userModel->password}}" class="form-control" required>
                            </div>

                            <div class="col-md-11 form-group input-group">
                                    <span class="input-group-addon">Phòng ban</span>
                                    <select class="form-control" name = "txtphongban">
                                        @foreach($unitsModel as $value)
                                            @if ($value->UN_ID == $userModel->UN_ID)
                                                <option value="{{$value->UN_ID}}" selected="selected">{{$value->UN_NAME}}</option>
                                            @else
                                                <option value="{{$value->UN_ID}}">{{$value->UN_NAME}}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-11 form-group input-group">
                                    <span class="input-group-addon">Quyền truy cập</span>
                                    <select class="form-control" name = "vaitro">
                                        @foreach($userToRoleModel as $value)
                                            @if ($value->RO_ID == $userModel->RO_ID)
                                                <option value="{{$value->RO_ID}}" selected="selected">{{$value->RO_NAME}}</option>
                                            @else
                                                <option value="{{$value->RO_ID}}">{{$value->RO_NAME}}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>

                            <div class="col-md-11 form-group input-group">
                                <span class="input-group-addon">Số điện thoại</span>
                                <input type="number" name="dienthoai" value="{{$userModel->UC_PHONE}}" class="form-control">
                            </div>
                            <div class="col-md-11 form-group input-group">
                                <span class="input-group-addon">Email</span>
                                <input type="email"  name="email" value="{{$userModel->UC_EMAIL}}"  class="form-control">
                            </div>

                            <div class="col-md-12 form-group input-group">
                                <div class="col-md-6 form-group input-group" style="float:left;margin-left:27px;">
                                    <span class="input-group-addon">Ngày sinh</span>
                                    <input type="date" name="ngaysinh" value="{{$userModel->US_BIRTHDAY}}" style="width:160px;" class="form-control" max="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-4 form-group input-group" style="float:left;margin-left:3px;">
                                    <span class="input-group-addon">Giới tính</span>
                                    <select name="gioitinh" class="form-control" style="width:100px;" required>
                                        @if($userModel->US_GENDER=='Nam'){
                                        <option value="Nam" selected="selected">Nam</option>;
                                        <option value="Nữ">Nữ</option>;
                                        }
                                        @else{
                                        <option value="Nam">Nam</option>;
                                        <option value="Nữ"  selected="selected">Nữ</option>;
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-11 form-group input-group">
                                <span class="input-group-addon">Địa chỉ</span>
                                <input type="text" name="diachi" value="{{$userModel->US_ADDRESS}}" class="form-control">
                            </div>
                            <div class="col-md-11 text-right">
                                <a href="{{url('admin/QuanLyNguoiDung/danhsach')}}"><button type="button" class="btn btn-danger col align-self-center ">Trở về</button></a>
                            </div>


                        </form>
                    </div>
                </center>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
<!-- /#page-wrapper -->

