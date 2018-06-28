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
                <h3 class="page-header">Danh Sách các thuộc tính</h3>
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
                        <form method="POST">
                            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}" /> -->

                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Tên Thuộc tính </th>
                                  <th>Đơn vị tính</th>
                                  <th>Sửa / Xóa</th>
                                </tr>
                              </thead>

                              <tbody>
                                  @foreach ($propertiesModel as $rl)

                                <tr>

                                  <td>{{$rl->PP_NAME}}</td>
                                  <td>{{$rl->PP_MEASURE}}</td>

                                  <td align="center">
                                    <u><a href="sua/{{$rl->PP_ID}}"><i class="fa fa-pencil fa-fw"></i></a></u>
                                    <u><a href="xoa/{{$rl->PP_ID}}"><i class="fa fa-trash-o  fa-fw"></i></a></u>
                                  </td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>

                            <div class="col-md-11 text-right">
                                <a href="{{url('admin/QuanLyLoaiYeuCau/danhsach') }}"><button type="button" class="btn btn-danger col align-self-center ">Hủy</button></a>

                                <!-- <a href="{{url('admin/QuanLyThuocTinh/them')}}"><button type="button" class="btn btn-default col align-self-center ">Thêm</button></a> -->

                                <button type="submit" class="btn btn-primary custom-button-width .navbar-right" name="xn">Xác nhận</button>

                            </div>
                        </form>
            </div>
        </center>
    </div>
@endsection
<!-- /#page-wrapper -->
