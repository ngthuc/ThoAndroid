@extends('layouts.app')
@section('content')

 <!-- Page Content -->
 <div id="page-wrapper">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <h1 style="text-align: center;" class="page-header">PHÒNG BAN

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
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class="alert alert-success">  
                            {{session('thongbao')}}
                            </div>
                    @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead class="odd gradeX" align="center">
                         <tr class="odd gradeX" align="center">
                             <th>ID</th>
                             <th>Tên phòng ban</th>
                             <th>Mô tả</th>
                             <th>Gán loại yêu cầu</th>
                             <th>Sửa / Xóa</th>
                         </tr>
                     </thead>
                        <tbody>
                            @foreach ($unitsModel as $rl)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{$rl->UN_ID}}</td>
                                <td>{{$rl->UN_NAME}}</td>
                                <td><div id="mota">{{$rl->UN_DESCRIPTION}}</div></td>
                                <td><a href="{{route('getloaiyeucau',['class_id' => $rl->UN_ID])}}"><button class="btn btn-primary btn-sm"> <i class="	glyphicon glyphicon-link"></i></button></a></td>
                                <td class="center">
                                        <a href="sua/{{$rl->UN_ID}}"><i class="fa fa-pencil fa-fw"></i></a>

                                        <a href="xoa/{{$rl->UN_ID}}"><i class="fa fa-trash-o  fa-fw"></i></a>
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