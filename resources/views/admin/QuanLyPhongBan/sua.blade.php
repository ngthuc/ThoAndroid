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
                <h3 class="page-header">Sửa phòng ban</h3>
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

                    <form action="{{$unitsModel->UN_ID}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />

                        <div class="form-group input-group">
                            <span class="input-group-addon">Tên phòng ban</span>
                            <input class="form-control" name="txtten" value="{{$unitsModel->UN_NAME}}"/>
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" rows="4">Mô tả</span>
                            <textarea class="form-control" rows="4" name="txtmota" placeholder="Nhập mô tả vai trò"
                                      required>{{$unitsModel->UN_DESCRIPTION}}</textarea>
                        </div>
                        <div class="col-md-11 text-right">
                            <a href="{{url('admin/QuanLyPhongBan/danhsach')}}"><button type="button" class="btn btn-danger col align-self-center ">Hủy</button></a>
                            <button type="submit" class="btn btn-primary custom-button-width .navbar-right" name="xn">Xác nhận</button>
                        </div>
                    </form>
        </div>
        </center>

    </div>
@endsection
<!-- /#page-wrapper -->