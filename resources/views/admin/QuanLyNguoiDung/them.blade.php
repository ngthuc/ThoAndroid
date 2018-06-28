<!-- Page Content -->
@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Thêm tài khoản</h3>
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
                <center>
                    <div class="frame">
                    <form action="them" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />

                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Họ và tên</span>
                            <input type="text" name="tennguoidung" class="form-control" >
                        </div>
                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Tài khoản</span>
                            <input type="text" name="txtten" class="form-control" required>
                        </div>
                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Mật khẩu</span>
                            <input type="text" name="txtmatkhau" class="form-control" required>
                        </div>
                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Phòng ban</span>
                            <select class="form-control" name = "txtphongban">
                                @foreach($unitsModel as $bra)
                                    <option
                                            value="{{$bra->UN_ID}}">{{$bra->UN_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Quyền truy cập</span>
                            <select class="form-control" name = "vaitro">
                                @foreach($userToRoleModel as $emp)
                                    <option
                                            value="{{$emp->RO_ID}}">{{$emp->RO_NAME}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Số điện thoại</span>
                            <input type="number" name="dienthoai" class="form-control">
                        </div>
                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Email</span>
                            <input type="email"  name="email" class="form-control">
                        </div>
                        <div class="col-md-12 form-group input-group">
                            <div class="col-md-6 form-group input-group" style="float:left;margin-left:27px;">
                                <span class="input-group-addon">Ngày sinh</span>
                                <input name="ngaysinh"  type="date" style="width:160px;" class="form-control" max="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="col-md-4 form-group input-group" style="float:left;margin-left:3px;">
                                <span class="input-group-addon">Giới tính</span>
                                <select name="gioitinh" class="form-control" style="width:100px;" required>
                                    <option selected>Chọn</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-11 form-group input-group">
                            <span class="input-group-addon">Địa chỉ</span>
                            <input type="text" name="diachi" class="form-control">
                        </div>
                        <div class="col-md-11 text-right">
                            <a href="{{url('admin/QuanLyNguoiDung/danhsach')}}"><button type="button" class="btn btn-danger col align-self-center ">Hủy</button></a>
                            <button type="submit" class="btn btn-primary custom-button-width .navbar-right" name="xn">Xác nhận</button>
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

