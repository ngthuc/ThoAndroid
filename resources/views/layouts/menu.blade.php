<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li><div style="width:100%;">
                    <img src="https://i.imgur.com/unWpUU0.jpg" width="100%">
                </div>
            </li>



            {{--<li>--}}
                {{--<a href="{{ url('/admin') }}"><i class="fa fa-dashboard fa-fw"></i>  Bảng điều khiển</a>--}}
            {{--</li>--}}

            @if(Auth::user()->RO_ID==1)
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> QUẢN LÝ VAI TRÒ<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin/QuanLyVaiTro/danhsach')}}"> Danh sách</a>
                        </li>
                        <li>
                            <a href="{{url('admin/QuanLyVaiTro/them')}}"> Thêm mới</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(Auth::user()->RO_ID==1)
                <li>
                    <a href="#"><i class="fa fa-bank fa-fw"></i> QUẢN LÝ PHÒNG BAN<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin/QuanLyPhongBan/danhsach')}}"> Danh sách</a>
                        </li>
                        <li>
                            <a href="{{url('admin/QuanLyPhongBan/them')}}"> Thêm mới</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            @endif

            @if(Auth::user()->RO_ID==1)
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> QUẢN LÝ NGƯỜI DÙNG<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('admin/QuanLyNguoiDung/danhsach')}}"> Danh sách</a>
                    </li>
                    <li>
                        <a href="{{url('admin/QuanLyNguoiDung/them')}}"> Thêm mới</a>
                    </li>
                </ul>
            </li>
            @endif

            @if(Auth::user()->RO_ID==1)
            <li>
                <a href="#"><i class="fa fa-calendar-o fa-fw"></i> QUẢN LÝ LOẠI YÊU CẦU<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('admin/QuanLyLoaiYeuCau/danhsach')}}"> Danh sách</a>
                    </li>
                    <li>
                        <a href="{{url('admin/QuanLyLoaiYeuCau/them')}}"> Thêm mới</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif


            @if(Auth::user()->RO_ID==1 || Auth::user()->RO_ID==2 || Auth::user()->RO_ID==3)
            <li>
                <a href="#"><i class="fa fa-edit fa-fw"></i> TRUY XUẤT YÊU CẦU<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('admin/QuanLyTruyXuatYC/xemlichsu')}}"> Lịch sử yêu cầu</a>
                    </li>
                    <li>
                        <a href="{{url('admin/QuanLyTruyXuatYC/them')}}"> Gửi yêu cầu mới</a>
                    </li>
                </ul>
            </li>
            @endif



            @if(Auth::user()->RO_ID==1 || Auth::user()->RO_ID==2)
                <li>
                    <a href="{{url('admin/DuyetYeuCau/duyet')}}"><i class="fa fa-edit fa-fw"></i> Duyệt yêu cầu<span class="fa arrow"></span></a>
                </li>
            @endif

            @if(Auth::user()->RO_ID==1)
                <li>
                    <a href="{{url('admin/ThongKe/thongke')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Thống kê<span class="fa arrow"></span></a>

                    <!-- /.nav-second-level -->
                </li>
            @endif

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>