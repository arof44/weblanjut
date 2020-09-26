<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale()) }}">
<body>

	<div id="app">
		@section('sidebar')
		ini adalah master sidebar
		@show
	</div>

	<main class="py-4">
		@yield('content')
	</main>

	<main class="py-4">
		<p align="center">
			Saya Muhammad Nur Arafah berasal dari Bontang Kalimantan Timur<br>
		</p>
	</main>

	<main class="py-4">
		<p align="left">
			<br><br><br><br><br><br>
			About : 
		</p>
		@extends('about')
	</main>
</body>
</html>