<!doctype html>
<html lang="en"> 
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@include('layouts.components.css')
		<title>{{$title}}</title>
	</head> 
	<body> 
		<div class="wrapper"> 
			@include('layouts.components.sidebar') 
			@include('layouts.components.header') 
			@yield('content')   
			<div class="search-overlay"></div>
			<div class="overlay toggle-icon"></div> 
			<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a> 
			@include('layouts.components.footer') 
		</div> 
		{{-- @include('layouts.components.switcher')  --}}
		@include('layouts.components.js')
	</body> 
</html>