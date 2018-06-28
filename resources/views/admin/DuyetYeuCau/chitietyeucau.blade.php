<!-- Page Content -->
@extends('layouts.app')
@section('content')
    <div id="page-wrapper" style="overflow-y: auto;">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Cập nhật yêu cầu</h3>
            </div>
        </div>
        <div class="col-md-8  col-md-offset-2">
            <form action="{{route('post_duyet')}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <input type="hidden" name="RQ_ID" value="{{$data->RQ_ID}}" />

                <div class="col-md-12 form-group input-group">

                    <table class="table table-hover">
                        <tr>
                            <th>Loại yêu cầu</th>
                            <td><input type="text" class="form-control" value="{{$data->RT_NAME}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Tiêu đề</th>
                            <td><input type="text" class="form-control" value="{{$data->RQ_TITTLE}}" readonly></td>
                        </tr>
                        <tr>
                            <th>Người gửi</th>
                            <td><input type="text" class="form-control" value="{{$data->UC_FULLNAME}}" readonly></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                        </tr>

                    </table>

                </div>

                <div class="col-md-12 form-group input-group">
                    <div class="panel panel-default" style="">
                        <div class="panel-heading" style="" id="lg">
                            <h3 class="panel-title text-left">Thông tin cần thiết</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                @foreach($array as $key => $value)
                                    <tr>
                                        <td>{{$value->PP_NAME}}</td>
                                        <td><input type="text" class="form-control" value="{{$value->DT_VALUE}}" readonly></td>
                                        <td>{{$value->MEASURE ?  $value->MEASURE : ''}}</td>
                                    </tr>
                                @endforeach
                                {{--<tr>--}}
                                    {{--<td>Tên thuộc tính</td>--}}
                                    {{--<td><input type="text" class="form-control" value="adadadad" readonly></td>--}}
                                    {{--<td>Đơn vị</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Tên thuộc tính</td>--}}
                                    {{--<td><input type="text" class="form-control" value="adadadad" readonly></td>--}}
                                    {{--<td>Đơn vị</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Tên thuộc tính</td>--}}
                                    {{--<td><input type="text" class="form-control" value="adadadad" readonly></td>--}}
                                    {{--<td>Đơn vị</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Tên thuộc tính</td>--}}
                                    {{--<td><input type="text" class="form-control" value="adadadad" readonly></td>--}}
                                    {{--<td>Đơn vị</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Tên thuộc tính</td>--}}
                                    {{--<td><input type="text" class="form-control" value="adadadad" readonly></td>--}}
                                    {{--<td>Đơn vị</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Tên thuộc tính</td>--}}
                                    {{--<td><input type="text" class="form-control" value="adadadad" readonly></td>--}}
                                    {{--<td>Đơn vị</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>Tên thuộc tính</td>--}}
                                    {{--<td><input type="text" class="form-control" value="adadadad" readonly></td>--}}
                                    {{--<td>Đơn vị</td>--}}
                                {{--</tr>--}}
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group input-group">
                    <span class="input-group-addon" rows="4">Miêu tả</span>
                    <textarea style="width:470px;" class="form-control" rows="4" name="mota"></textarea>
                </div>

                <div class="col-md-12 text-right">
                    <button type="submit" name="action" value="xacnhan" class="btn btn-primary custom-button-width navbar-right" style="margin-left:4px;">Xác nhận</button>
                    <a href="{{url('admin/DuyetYeuCau/duyet')}}"><button type="button" class="btn btn-danger col align-self-center ">Hủy</button></a>
                    <button type="submit" name="action" value="tuchoi" class="btn btn-danger custom-button-width .navbar-left" >Từ chối</button>
                </div>

            </form>
        </div>
    </div>
@endsection
<!-- /#page-wrapper -->