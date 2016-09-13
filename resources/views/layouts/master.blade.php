<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
@include('includes.header')
<div class="container">
	@yield('content')
</div>



<script src="{{ asset('jquery/dist/jquery-3.1.0.js') }}"></script>

<script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>