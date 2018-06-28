@extends('layouts.app')
@section('content')

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="text-align: center;" class="page-header">Người Dùng
                        </h1>
                    </div>
                    <style type="text/css">
                        th {
                            text-align: center;
                        }
                    </style>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class="alert alert-success">  
                            {{session('thongbao')}}
                            </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead class="odd gradeX" align="center">
                        <tr class="odd gradeX" align="center">

                                <th>User ID</th>
                                {{--<th>Phòng Ban</th>--}}
                                {{--<th>Vai Trò </th>--}}
                                <th>Tên Tài Khoản</th>
                                <th>Tên Người Dùng</th>
                                <th>Số Điện Thoại</th>
                                {{--<th>Email</th>--}}
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>

                                {{--<th>Địa Chỉ</th>--}}
                                <th>Sửa / Xóa</th>
                            </tr>
                        </thead>
                        <tbody ng-app>
                            @foreach ($userModel as $rl)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{$rl->id}}</td>
                                {{--<td>{{$rl->UN_ID}}</td>--}}
                                {{--<td>{{$rl->RO_ID}}</td>--}}
                                <td>{{$rl->username}} </td>
                                <td>{{$rl->	UC_FULLNAME}} </td>
                                <td>{{$rl->	UC_PHONE}} </td>
                                {{--<td>{{$rl->	UC_EMAIL}} </td>--}}
                                <td>{{$rl->	US_BIRTHDAY}} </td>
                                <td>{{$rl->	US_GENDER}} </td>
                                {{--<td>{{$rl->	US_ADDRESS}} </td>--}}
                                <td class="center">
                                    <a href="xem/{{$rl->id}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a href="sua/{{$rl->id}}"><i class="fa fa-pencil fa-fw"></i></a>
                                    <a href="xoa/{{$rl->id}}"><i class="fa fa-trash-o  fa-fw"></i></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<!-- /#page-wrapper -->
@endsection