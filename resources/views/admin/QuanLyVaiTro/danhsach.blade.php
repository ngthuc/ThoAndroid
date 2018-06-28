@extends('layouts.app')
@section('content')

 <!-- Page Content -->
 <div id="page-wrapper">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <h1 style="text-align: center;" class="page-header">Vai Trò

                 </h1>
             </div>
             {{--Định dạng css cho thẻ h1--}}
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
                             <th>ID</th>
                             <th>Tên vai trò</th>
                             <th>Mô tả</th>
                             <th>Sửa / Xóa</th>
                         </tr>
                     </thead>
                        <tbody>
                            @foreach ($roleModel as $rl)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{{$rl->RO_ID}}</td>
                                <td>{{$rl->RO_NAME}}</td>
                                <td>{{$rl->RO_DESCRIPTION}}</td>

                                <td class="center">
                                    <a href="sua/{{$rl->RO_ID}}"><i class="fa fa-pencil fa-fw"></i></a>
                                    <a href="xoa/{{$rl->RO_ID}}"><i class="fa fa-trash-o  fa-fw"></i></a>
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