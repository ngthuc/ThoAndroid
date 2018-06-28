@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Danh sách yêu cầu</h3>
            </div>
        </div>
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Loại yêu cầu</th>
                            <th>Ngày gửi</th>
                            <th>Ngày xử lý</th>
                            <th>Thông tin phản hồi</th>
                            <th>Trạng thái</th>

                            <th>Chỉnh sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key => $value)
                            <tr class="odd gradeX">
                                <td>{{$key+1}}</td>
                                <td>{{$value->RQ_TITTLE}}</td>
                                <td>{{$value->RT_NAME}}</td>
                                <td>{{$value->RQ_DATECREATE}}</td>
                                <td>{{$value->RQ_DATEUPDATE}}</td>
                                <td>{{$value->RQ_REPLY}}</td>
                                @if($value->ST_ID==1)
                                <td>Đang chờ</td>
                                @endif
                                @if($value->ST_ID==2)
                                    <td>Đã xử lý</td>
                                @endif
                                @if($value->ST_ID==3)
                                    <td>Từ chối</td>
                                @endif
                                @if($value->ST_ID==4)
                                    <td>Hủy</td>
                                @endif
                                <td><button><a href="{{route('chitietyeucau',['id' => $value->RQ_ID])}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>
                            </tr>
                        @endforeach
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>1</td>--}}
                            {{--<td>Hư ổ cứng</td>--}}
                            {{--<td>Loại 1</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Phải thay ổ cứng khác</td>--}}
                            {{--<td>Hoàn thành</td>--}}
                            {{--<td><button><a href="{{url('admin/QuanLyTruyXuatYC/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>2</td>--}}
                            {{--<td>Cài hệ điều hành</td>--}}
                            {{--<td>Loại 2</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td></td>--}}
                            {{--<td>Chưa nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/QuanLyTruyXuatYC/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>3</td>--}}
                            {{--<td>Tạo tài khoản</td>--}}
                            {{--<td>Loại 3</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Vui long chờ xử lý</td>--}}
                            {{--<td>Đã nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/QuanLyTruyXuatYC/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>4</td>--}}
                            {{--<td>Máy tính bị hư</td>--}}
                            {{--<td>Loại 4</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td></td>--}}
                            {{--<td>Chưa nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/QuanLyTruyXuatYC/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>5</td>--}}
                            {{--<td>Bàn phím không nhấn được</td>--}}
                            {{--<td>Loại 5</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td style="max-width:20px;">Chưa biết </td>--}}
                            {{--<td>Chưa nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/QuanLyTruyXuatYC/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>6</td>--}}
                            {{--<td>Máy in bị hư</td>--}}
                            {{--<td>Loại 6</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>30/05/2018</td>--}}

                            {{--<td>Máy in đã được sửa chữa xong</td>--}}
                            {{--<td>Hoàn thành</td>--}}
                            {{--<td><button><a href="{{url('admin/QuanLyTruyXuatYC/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}


                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    @endsection