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
                <h3 class="page-header">Chọn loại yêu cầu cho: {{$unitsModel->UN_NAME}}</h3>
            </div>
        </div>
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

            <form action="{{route('postloaiyeucau',['class_id'=>$unitsModel->UN_ID])}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <label>Chọn loại yêu cầu</label>
                <div class="row">
                    @if(!empty($list_loai))
                        @foreach($list_loai as $key => $value)
                            <div class="col-md-6">
                                @if($value["check"])
                                    <input type="checkbox" name='checkboxvar[]' value="{{$key}}" aria-label="Checkbox for following text input" checked>
                                @else
                                    <input type="checkbox" name='checkboxvar[]' value="{{$key}}" aria-label="Checkbox for following text input">
                                @endif
                                <span>{{$value["name"]}} </span>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div style="margin-bottom: 54px;">

                </div>
                <div class="col-md-11 text-right">
                    <a href="{{url('admin/QuanLyPhongBan/danhsach')}}"><button type="button" class="btn btn-danger col align-self-center ">Hủy</button></a>
                    <button type="submit" class="btn btn-primary custom-button-width .navbar-right" name="xn">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<!-- /#page-wrapper -->