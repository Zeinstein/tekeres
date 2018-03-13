<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}} - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
	{{ HTML::style('css/app.css')}}
	{{ HTML::style('css/custom.css')}}

	<!-- Scripts -->
	{{ HTML::script('js/app.js')}}
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="{{ asset('js/bootstrap-sortable.js') }}"></script>
	{{ HTML::script('js/index.js')}}
    </head>
    <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="/">Alsótekeresi gyermektábor</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarToggler">
		  <ul class="nav navbar-nav navbar-right ml-auto">
			<a class="nav-item nav-link navbar-right" href="#">Blog</a>
			<a class="nav-item nav-link navbar-right" href="#">Tudnivalók</a>
			<a class="nav-item nav-link navbar-right" href="#">Térkép</a>
		  </ul>
		</div>
	</nav>
	@yield('body')
    </body>
</html>
