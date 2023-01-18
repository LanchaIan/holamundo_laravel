@extends('layout.app')
@section('titulo', $viewData['titulo'])
@section('subtitulo', $viewData['subtitulo'])
@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-lg-4 ms-auto">
				<p class="lead">{{ $viewData['description'] }}</p>
			</div>
			<div class="col-lg-4 me-auto">
				<p class="lead">{{ $viewData['author'] }}</p>
			</div>
		</div>
	</div>
@endsection