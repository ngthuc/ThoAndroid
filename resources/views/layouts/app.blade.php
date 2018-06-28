<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quản lý bán hàng">
    <meta name="author" content="">
    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('giaodien/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('giaodien/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('giaodien/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('giaodien/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">

    {{--<!-- Css giao diện -->--}}
    <link href="{{url('giaodien/dist/css/css.css')}}" rel="stylesheet"
          type="text/css">

    {{--<link href="{{url('giaodien/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}"--}}
          {{--rel="stylesheet">--}}

    {{--<!-- DataTables Responsive CSS -->--}}
    {{--<link href="{{url('giaodien/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet')}}">--}}
<!-- Select2 -->
    <link rel="stylesheet" href="{{url('giaodien/bower_components/font-awesome/css/select2.min.css')}}">
</head>

<body>

<div id="wrapper">

@include('layouts.header')
<!-- Page Content -->
@yield('content')
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{url('giaodien/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('giaodien/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{url('giaodien/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{url('giaodien/dist/js/sb-admin-2.js')}}"></script>

<!-- DataTables JavaScript -->
<script src="{{url('giaodien/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('giaodien/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" language="javascript" src="{{url('giaodien/ckeditor/ckeditor.js')}}" ></script>
<script type="text/javascript" language="javascript" src="{{url('giaodien/bower_components/font-awesome/css/select2.full.min.js')}}" ></script>

<!-- code để phân trang và tìm kiếm -->
<script language="javascript">
    $(document).ready(function() {
        var table = $('#dataTables-example').DataTable( {
            responsive: true,
            "lengthMenu": [[8, 10, 15, 20, 25, 30, -1],[8, 10, 15, 20, 25, 30, "Tất cả"]]
        });
        new $.fn.dataTable.FixedHeader( table );
    });
</script>

<script src="{{url('/giaodien/datatables/js/js.js')}}"></script>
<script src="{{url('/giaodien/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{url('/giaodien/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>

<!-- code để phân trang và tìm kiếm loại 2-->
{{--<script>--}}
{{--$(document).ready(function () {--}}
    {{--$('#dataTables-example').DataTable({--}}
    {{--responsive: true--}}
    {{--});--}}
    {{--});--}}
{{--</script>--}}

@include('layouts.messages')

@include('layouts.footer')

</body>
@yield('script')
</html>
