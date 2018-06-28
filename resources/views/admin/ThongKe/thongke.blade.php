@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Thống kê theo số lượng yêu cầu</h3>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="col-md-12 panel-heading">
                    <form action="{{route('excelExport')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="col-md-3" style="padding-left:0px;">
                            <div class="input-group">
                                <span class="input-group-addon">Từ ngày</span>
                                <input type="date" class="form-control" name="begin">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon" max="<?php echo date('Y-m-d'); ?>">Đến ngày</span>
                                <input type="date" class="form-control" name="end">
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <button type="submit" class="btn btn-primary ">Thống kê</button>
                        </div>

                    </form>
                </div>
                <div class="panel-body">
                    &nbsp;
                    <table class="table table-striped table-bordered table-hover " id="dataTables-examp">
                        <thead>
                        <tr>
                            <style>
                                th{
                                    text-align: center;
                                }
                            </style>
                            <th>Loại yêu cầu</th>
                            <th>Số lượng yêu cầu</th>
                            <th>Đang chờ</th>
                            <th>Hoàn Thành</th>
                            <th>Từ chối</th>
                            <th>Hủy bỏ</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key => $value)
                            <tr class="odd gradeX text-right">
                                <td class="text-left">{{$key}}</td>
                                <td>{{$value['all']}}</td>
                                <td>{{$value['cho']}}</td>
                                <td>{{$value['xuly']}}</td>
                                <td>{{$value['tuchoi']}}</td>
                                <td>{{$value['huy']}}</td>
                            </tr>
                        @endforeach

                        <thead >
                        <th>Tổng</th>
                        <th class="text-right">{{$sum['s_all']}}</th>
                        <th class="text-right">{{$sum['s_cho']}}</th>
                        <th class="text-right">{{$sum['s_xuly']}}</th>
                        <th class="text-right">{{$sum['s_tuchoi']}}</th>
                        <th class="text-right">{{$sum['s_huy']}}</th>
                        </thead>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection