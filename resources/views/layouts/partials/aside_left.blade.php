<aside class="sidebar sidebar-left sidebar-menu">
	<!-- START Sidebar Content -->
    <section class="content slimscroll">
		<!-- START Template Navigation/Menu -->
        <ul class="topmenu topmenu-responsive" data-toggle="menu">
            <li>
                <a href="{{route('home')}}" data-target="#home" data-parent=".topmenu">
                    <span class="figure"><i class="ico-home2"></i></span>
                    <span class="text">{{trans('menu.home.title')}}</span>
                </a>
            </li>
			<li class="" >
                <a href="javascript:void(0);" data-toggle="submenu" data-target="#admin" data-parent=".topmenu">
                    <span class="figure"><i class="ico-grid"></i></span>
                    <span class="text">{{trans('menu.admin.title')}}</span>
                    <span class="arrow"></span>
                </a>
                <!-- START 2nd Level Menu -->
                <ul id="admin" class="submenu collapse">
                    <li class="submenu-header ellipsis">{{trans('menu.admin.users.title')}}</li>
                    <li >
                        <a href="{{route('admin.users')}}">
                            <span class="text">{{trans('menu.admin.users.list_title')}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="layout-with-footer.html">
                            <span class="text">With footer</span>
                            <span class="number"><span class="label label-success">N</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-reveal-header.html">
                            <span class="text">Reveal header</span>
                            <span class="number"><span class="label label-success">N</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-fixed-header.html">
                            <span class="text">Fixed header</span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-fixed-sidebar.html">
                            <span class="text">Fixed sidebar</span>
                        </a>
                    </li>
                    <li >
                        <a href="layout-navbar-collapse.html">
                            <span class="text">Navbar Collapse</span>
                        </a>
                    </li>
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
		</ul>
        <!--/ END Template Navigation/Menu -->
    </section>
    <!--/ END Sidebar Container -->
</aside>