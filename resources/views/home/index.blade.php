@extends('layout.app')
@section('titulo', $viewData['titulo'])
@section('contenido')
<div class="row">
	<div class="col-md-6 col-lg-4 mb-2">
		<img src={{ asset('img/game.png') }} class="img-fluid rounded">
	</div>
	<div class="col-md-6 col-lg-4 mb-2">
		<img src={{ asset('img/safe.png')}} class="img-fluid rounded">
	</div>
	<div class="col-md-6 col-lg-4 mb-2">
		<img src={{ asset('img/submarine.png')}} class="img-fluid rounded">
	</div>
</div>
@endsection