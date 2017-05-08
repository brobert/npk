<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet/less" type="text/css" href="{{ asset('css/app.less') }}">

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <!-- Main Page -->
    <div id="app">
        <!-- Main Menu -->
        @include('layouts.partials.main_menu')
        <!-- /Main Menu -->

        <!-- Main Content -->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /Main Page -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- /Scripts -->
</body>
</html>
