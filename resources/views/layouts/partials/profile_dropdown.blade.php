<li class="dropdown profile">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        <span class="meta">
            <span class="avatar"><img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" /></span>
            <span class="text hidden-xs hidden-sm pl5">{{Auth::user()->getFullName()}}</span>
        </span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <li><a href="{{route('user.edit')}}"><span class="icon"><i class="ico-user-plus2"></i></span>{{ trans('app.header_dd.user_setting') }}</a></li>
        <li class="divider"></li>
        <li><a href="{{route('logout')}}"><span class="icon"><i class="ico-exit"></i></span>{{ trans('app.header_dd.logout') }}</a></li>
    </ul>
</li>