    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HUD | @yield('title','Dashboard')</title>

<!-- ================== BEGIN core-css ================== -->
<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />
<!-- ================== END core-css ================== -->

<!-- ================== BEGIN page-css ================== -->
<link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet" />
<!-- ================== END page-css ================== -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('custom/override-css.css') }}">
