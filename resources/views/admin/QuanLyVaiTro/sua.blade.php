<!-- Page Content -->
@extends('layouts.app')
@section('content')

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
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Sửa vai trò</h3>
            </div>
        </div>
        <center>
        <div class="frame">
                <!-- /.col-lg-12 -->
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

                    <form action="{{$roleModel->RO_ID}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />

                        <div class="form-group input-group">
                            <span class="input-group-addon">Tên vai trò</span>
                            <input class="form-control" name="txtten" value="{{$roleModel->RO_NAME}}"/>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" rows="4">Mô tả</span>
                            <input class="form-control" name="txtmota" value="{{$roleModel->RO_DESCRIPTION}}"/>
                        </div>
                        <div class="col-md-11 text-right">
                            <a href="{{url('admin/QuanLyVaiTro/danhsach')}}"><button type="button" class="btn btn-danger col align-self-center ">Hủy</button></a>
                            <button type="submit" class="btn btn-primary custom-button-width .navbar-right" name="xn">Xác nhận</button>
                        </div>
                    </form>
        </div>
        </center>

    </div>
@endsection
<!-- /#page-wrapper -->