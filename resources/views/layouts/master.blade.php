<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     @include('layouts.head')

    @livewireStyles
</head>

<body class="font-sans antialiased ">

	<!-- BEGIN #app -->
	<div id="app" class="app">
	
		
        @include('layouts.header')
		@include('layouts.sidebar')

		<!-- BEGIN mobile-sidebar-backdrop -->
		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
		<!-- END mobile-sidebar-backdrop -->
	 @yield('content')

		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="bi bi-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
        	@include('layouts.them_color')
	</div>
	<!-- END #app -->
	@include('layouts.footer')
    @livewireScripts
</body>

</html>
