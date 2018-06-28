@extends('layouts.app')
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Gửi yêu cầu</h3>
            </div>
        </div>
        <div class="col-md-8  col-md-offset-2">
            <form action="{{route('themchitet')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="col-md-11 form-group input-group">
                    <span class="input-group-addon">Tiêu đề</span>
                    <input type="text" name="RQ_TITTLE" class="form-control" placeholder="Nhập tiêu đề" required>
                </div>

                <div class="col-md-11 form-group input-group">
                    <span class="input-group-addon">Loại yêu cầu</span>
                    <select class="form-control" id="inputGroupSelect01" pl name="RT_ID" required>
                    @foreach($data as $key => $value)
                        <option value="{{$value->RT_ID}}">{{$value->RT_NAME}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="col-md-11 form-group input-group">
                    <span class="input-group-addon" rows="4">Ghi chú</span>
                    <textarea class="form-control" rows="4" name="RQ_NOTE"></textarea>
                </div>
                <div class="col-md-11 text-right">
                    {{--<a href="{{url('admin/QuanLyTruyXuatYC/themchitet')}}">--}}
                        <button type="submit" class="btn btn-primary custom-button-width navbar-right" name="xn" style="margin-left:10px;">Tiếp tục</button>
                    {{--</a>--}}
                    <a href="{{url('admin/QuanLyTruyXuatYC/them')}}"> <button type="button" class="btn btn-danger custom-button-width .navbar-left" >Hủy</button></a>
                </div>

            </form>
        </div>
    </div>

@endsection