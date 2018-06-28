<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/admin') }}"><b>Hệ Thống Quản Lý Yêu Cầu</b></a>
    </div>
    <!-- /.navbar-header -->
    <style>
        .navbar-top-links .dropdown-user {
            width: 220px;
        }
    </style>
    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>{{ Auth::user()->UC_FULLNAME }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a class="dropdown-item" href="{{ route('update_user',[Auth::user()->id]) }}">
                        <i class="fa fa-user fa-fw"></i>
                        {{ __('Cập nhật thông tin cá nhân') }}

                    </a>
                </li>
                {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>--}}
                <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                </li>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

@include('layouts.menu')
<!-- /.navbar-static-side -->
</nav>
