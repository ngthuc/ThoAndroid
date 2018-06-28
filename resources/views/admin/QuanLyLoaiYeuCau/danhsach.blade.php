@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <h1 style="text-align: center;" class="page-header">Quản lý Loại yêu cầu

                </h1>
            </div>
            {{--Định dạng css cho thẻ h1--}}
            <style type="text/css">
                th {
                    text-align: center;
                }
                #mota{

                    max-height:50px;
                    max-width: 600px;
                    overflow-y: auto;
                }
            </style>

                <!-- abc -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center" >

                        <th class="table-th">ID Loại</th>
                        <th class="table-th">Tên loại yêu cầu</th>
                        <th class="table-th">Thuộc phòng ban</th>
                        <th class="table-th">Thuộc tính</th>
                        <th class="table-th">Sửa / Xóa</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php
                            $i=0;
                        ?>
                        @foreach ($data as $value)
                            <?php
                                $i++;
                            ?>
                            <tr class="odd gradeX" align="center">
                            <td>{{$value->RT_ID}}</td>
                            <td>{{$value->RT_NAME}}</td>

                            <td class="center" data-toggle="modal" data-target="#detail{{$i}}">
                                <a href="#"><button class="btn btn-primary btn-sm"> <i class="fa fa-users fa-fw"></i>Phòng ban</button></a>
                                <div id="detail{{$i}}" class="modal " tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Danh sách phòng ban được: {{$value->RT_NAME}}</h5>
                                                <button type="button" class="close" data-dismiss="detail{{$i}}" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                    $count = 0;
                                                    foreach ($us as $check){
                                                        if($check->RT_ID == $value->RT_ID){
                                                            $count++;
                                                        }
                                                    }
                                                ?>
                                                @if($count ==0)
                                                    <b>Danh sách rỗng</b>
                                                @else
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                        <tr align="center" >
                                                            <th class="table-th">ID Phòng Ban</th>
                                                            <th class="table-th">Tên Phòng Ban</th>
                                                        </tr>
                                                        <tbody>
                                                        <?php
                                                            $j=0;
                                                        ?>
                                                        @foreach ($us as $acc)
                                                            @if ($acc->RT_ID == $value->RT_ID)
                                                                <?php
                                                                    $j++;
                                                                ?>
                                                                <tr class="odd gradeX" align="center">

                                                                    <td>{{$acc->UN_ID}}</td>
                                                                    <td>{{$acc->UN_NAME}}</td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                        </tbody>
                                                        </thead>
                                                    </table>
                                                @endif
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="detail{{$i}}">Đóng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <!-- td mới  -->
                            <td>
                                <a href="thuoctinh/{{$value->RT_ID}}">
                                    <button type="button" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                    </button>
                                </a>

                                <a href="thuoctinh/them/{{$value->RT_ID}}"><button type="button" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-plus-sign"></span>
                                </button></a>
                            </td>
                            <td class="center">
                                <a href="sua/{{$value->RT_ID}}">
                                    <button type="button" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </a>
                                <a href="xoa/{{$value->RT_ID}}">
                                    <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xóa ')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
