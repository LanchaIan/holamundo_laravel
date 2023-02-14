@extends('layout.app')
@section('contenido')
    <div class="card mb-3">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{asset('storage/'.$producto['image'])}}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">
                {{$producto['name']}}

            </h5>
            <p class="card-text">{{$producto['description']}}</p>
            <p class="card-text"><small class="text-muted">Añadir a la cesta</small></p>
            </div>
        </div>
        </div>
    </div>
@endsection