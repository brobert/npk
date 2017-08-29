<!DOCTYPE html>
<html class="backend"  lang="{{ config('app.locale') }}">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> {{ config('app.name') }} - @yield('page_title')</title>
        <meta name="author" content="optimisticdesigns">
        <meta name="description" content="Lander.v2 Admin is a clean and flat backend built with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="../image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="../stylesheet/bootstrap.css">
        <link rel="stylesheet" href="../stylesheet/layout.css">
        <link rel="stylesheet" href="../stylesheet/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet -->
        <link rel="stylesheet" href="../stylesheet/themes/theme.css">
        <!--/ Theme stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="../plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
       <!-- START Template Header -->
        <header id="header" class="navbar">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span class="logo-figure"></span>
                    <span class="logo-text"></span>
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->

            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Sidebar shrink -->

                    <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas left -->

                </ul>
                <!--/ END Left nav -->

                <!-- START navbar form -->
                <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                    <form action="" role="search">
                        <div class="has-icon">
                            <input type="text" class="form-control" placeholder="Search application...">
                            <i class="ico-search form-control-icon"></i>
                        </div>
                    </form>
                </div>
                <!-- START navbar form -->

                <!-- START Right nav -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notification dropdown -->
                    @include('layouts.partials.notification_dropdown')
                    <!--/ Notification dropdown -->

                    <!-- Profile dropdown -->
                    @include('layouts.partials.profile_dropdown')
                    <!-- Profile dropdown -->
                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
            @include('layouts.partials.aside_left')
        <!--/ END Template Sidebar (Left) -->

        <!-- START Template Sidebar (right) -->
        @if(0)
            @include('layouts.partials.aside_right')
        @endif
        <!--/ END Template Sidebar (right) -->

       <!-- START Template Footer -->
            @include('layouts.partials.footer')
        <!--/ END Template Footer -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">{{ trans('pages.dashboard.title') }}</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="/">{{ trans('pages.names.home') }}</a></li>
                                <li class="active">With Footer</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- Main Page -->
                <div id="app">
                    <!-- Main Menu -->
                    @if(0)
                        @include('layouts.partials.main_menu')
                    @endif
                    <!-- /Main Menu -->

                    <!-- Main Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- /Main Content -->
                </div>
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="../javascript/vendor.js"></script>
        <script type="text/javascript" src="../javascript/core.js"></script>
        <script type="text/javascript" src="../javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="../javascript/pace.min.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>