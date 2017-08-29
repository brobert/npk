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
                    <span class="figure"><i class="ico-lock3"></i></span>
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
                </ul>
                <!--/ END 2nd Level Menu -->
            </li>
        </ul>
        <!--/ END Template Navigation/Menu -->
    </section>
    <!--/ END Sidebar Container -->
</aside>