@extends('layout.app')
@section('contenido')
  <div class="row">
    @foreach ($productos as $producto)
      <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
          <img src="{{asset('storage/'.$producto['image'])}}" class="card-img-top img-card">
          <div class="card-body text-center">
            <a href="products/{{$producto['id']}}"
              class="btn bg-primary text-white">enlace</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection

