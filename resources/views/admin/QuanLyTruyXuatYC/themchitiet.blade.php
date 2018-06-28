@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Gửi yêu cầu</h3>
            </div>
        </div>
        <center>
            <div class="fram">
                <form role="form" method="post" action="{{route('themyeucau')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <input type="hidden" name="RQ_TITTLE" value="{{$send->RQ_TITTLE}}" />
                    <input type="hidden" name="RT_ID" value="{{$send->RT_ID}}" />
                    <input type="hidden" name="RQ_NOTE" value="{{$send->RQ_NOTE}}" />
                    <div class="col-md-12 form-group input-group">
                        <div class="panel panel-default" style="">
                            <div class="panel-heading" style="" id="lg">
                                <h3 class="panel-title text-left">Thông tin cần thiết</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                @foreach($data as $key => $value)
                                        <tr>
                                            <td>{{$value->PP_NAME}}</td>
                                            <td><input type="text" name="DT_VALUE[]" class="form-control" required></td>
                                            <td><input type="hidden" name="PP_ID[]" value="{{$value->PP_ID}}" class="form-control"></td>
                                            <td>{{$value->PP_MEASURE}}</td>
                                        </tr>
                                @endforeach

                                    {{--<tr>--}}
                                        {{--<td>Thuộc tính hai</td>--}}
                                        {{--<td><input type="text" class="form-control"></td>--}}
                                        {{--<td>Đơn vị</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Thuộc tính ba</td>--}}
                                        {{--<td>--}}
                                            {{--<select class="form-control" id="inputGroupSelect01" required>--}}
                                                {{--<option selected disabled>Chọn</option>--}}
                                                {{--<option value="1">Loại 1</option>--}}
                                                {{--<option value="2">Loại 2</option>--}}
                                            {{--</select>--}}
                                        {{--</td>--}}
                                        {{--<td>Đơn vị</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Thuộc tính bốn</td>--}}
                                        {{--<td><input type="text" class="form-control"></td>--}}
                                        {{--<td>Đơn vị</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Thuộc tính năm</td>--}}
                                        {{--<td><input type="text" class="form-control"></td>--}}
                                        {{--<td>Đơn vị</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Thuộc tính sáu</td>--}}
                                        {{--<td><input type="text" class="form-control"></td>--}}
                                        {{--<td>Đơn vị</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Miêu tả thêm</td>--}}
                                        {{--<td colspan="2"><textarea class="form-control" rows="4"></textarea></td>--}}

                                    {{--</tr>--}}
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-13 text-right">
                        <a href="{{url('admin/QuanLyTruyXuatYC/them')}}"><button type="button" class="btn btn-danger custom-button-width .navbar-right" >Hủy</button></a>
                        <button type="submit" class="btn btn-primary custom-button-width .navbar-right" name="xn">Xác nhận</button>
                    </div>

                </form>
            </div>
        </center>
    </div>

@endsection