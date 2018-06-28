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
                            <th>Tên người gửi</th>
                            <th>Loại yêu cầu</th>
                            <th>Ngày gửi</th>
                            <th>Trạng thái</th>
                            <th>Duyệt</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key => $value)
                        <tr class="odd gradeX">
                            <td>{{$key+1}}</td>
                            <td>{{$value->RT_NAME}}</td>
                            <td>{{$value->RQ_TITTLE}}</td>
                            <td>{{$value->RQ_DATECREATE}}</td>
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

                            <td>
                                <button><a href="{{route('chitietduyetyeucau',['id' => $value->RQ_ID])}}"><span class="glyphicon glyphicon-pencil"></span></a></button>
                                @if(Auth::user()['RO_ID']==1)
                                    <button><a href="{{route('xoa',['id' => $value->RQ_ID])}}"><span class="glyphicon glyphicon-trash"></span></a></button>
                                @endif
                            </td>

                        </tr>
                        @endforeach
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>1</td>--}}
                            {{--<td>Loại 1</td>--}}
                            {{--<td>Loại 1</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Hoàn thành</td>--}}
                            {{--<td><button><a href="{{url('admin/DuyetYeuCau/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>2</td>--}}
                            {{--<td>Loại 2</td>--}}
                            {{--<td>Loại 2</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Chưa nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/DuyetYeuCau/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>3</td>--}}
                            {{--<td>Loại 3</td>--}}
                            {{--<td>Loại 3</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Đã nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/DuyetYeuCau/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>4</td>--}}
                            {{--<td>Loại 4</td>--}}
                            {{--<td>Loại 4</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Chưa nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/DuyetYeuCau/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>5</td>--}}
                            {{--<td>Loại 5</td>--}}
                            {{--<td>Loại 5</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Chưa nhận</td>--}}
                            {{--<td><button><a href="{{url('admin/DuyetYeuCau/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        {{--<tr class="odd gradeX">--}}
                            {{--<td>6</td>--}}
                            {{--<td>Loại 6</td>--}}
                            {{--<td>Loại 6</td>--}}
                            {{--<td>30/05/2018</td>--}}
                            {{--<td>Hoàn thành</td>--}}
                            {{--<td><button><a href="{{url('admin/DuyetYeuCau/chitietyeucau')}}"><span class="glyphicon glyphicon-pencil"></span></a></button></td>--}}
                        {{--</tr>--}}
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection