@extends('layout.app')
@section('titulo')
Pagina de Ian Santana
@endsection
@section('contenido')
	<div class="row">
		<div class="col-md-6 col-lg-4 mb-2">
			<img src={{ asset('img/game.pmg')}} alt="">
			<link rel="stylesheet" href={{ asset('img/game.pmg') }}>
		</div>
		<div class="col-md-6 col-lg-4 mb-2">
			<link rel="stylesheet" href={{ asset('img/game.png') }}>
		</div>
		<div class="col-md-6 col-lg-4 mb-2">
			<link rel="stylesheet" href={{ asset('img/safe.png') }}>
		</div>
		<div class="col-md-6 col-lg-4 mb-2">
			<link rel="stylesheet" href={{ asset('submarine/game.png') }}>
		</div>
	</div>
@endsection