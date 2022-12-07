<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="" />
	<meta name="author" content="" />
    <title>HUD | @yield('title','Dashboard')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('custom/override-css.css')}}">
	<link href="{{asset('assets/plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet" />



    	<!-- ================== BEGIN core-css ================== -->
	<link href="{{asset('assets/css/vendor.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->