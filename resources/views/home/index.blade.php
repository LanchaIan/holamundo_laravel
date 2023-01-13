@extends('layout.app')
@section('titulo')
Pagina de Ian Santana
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6 col-lg-4 mb-2">
			<link rel="stylesheet" href={{ asset('img/game.css') }}>
		</div>
		<div class="col-md-6 col-lg-4 mb-2">
			<link rel="stylesheet" href={{ asset('img/safe.css') }}>
		</div>
		<div class="col-md-6 col-lg-4 mb-2">
			<link rel="stylesheet" href={{ asset('submarine/game.css') }}>
		</div>
	</div>
@endsection