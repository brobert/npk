<nav class="navbar navbar-gray">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{config('app.name')}}</a>
    </div>

    @if( Auth::user() )
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="{{ Request::url() === route('messages.index')? 'active':'' }}">
            <a href="{{route('messages.index')}}">{{trans('menu.messages')}}
                @if( Request::url() === route('messages.index') )
                <span class="sr-only">(current)</span>
                @endif
            </a>
        </li>

        <li class="{{ Request::url() === route('payments.index')? 'active':'' }}">
            <a href="{{route('payments.index')}}">{{trans('menu.payments')}}
                @if( Request::url() === route('payments.index') )
                <span class="sr-only">(current)</span>
                @endif
            </a>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('menu.admin_actions')}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
                <a href="{{route('users.index')}}" class="inline">{{trans('menu.users')}}</a>
                <span class="badge">
                    <a href="{{route('users.create')}}">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                    </a>
                </span>
            </li>
            <li><a href="/">Another action</a></li>
            <li><a href="/">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>


      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>