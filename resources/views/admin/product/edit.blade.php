@extends('layout.admin')
@section('titulo', $viewData['titulo'])
@section('contenido')
<div class="card mb-4">
  <div class="card-header">
    Editar productos
  </div>
  <div class="card-body">


    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('admin.product.update',  ['id' => $producto->id])}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="name"  type="text" class="form-control" value={{$producto->name}}>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="price" type="number" class="form-control" value={{$producto->price}}>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" name="description" rows="3">{{$producto->description}}</textarea>
      </div>
      <div class="mb-3">
        <div class="mb-3">
          <label class="form-label">Imagen actual</label><br>
          <img src="{{ asset('storage/' . $producto->image) }}" alt="{{ $producto->name }}" width="200">
      </div>

      <div class="mb-3">
        <div class="mb-3">
          <label class="form-label">Especificaciones actuales actual</label><br>
          <img src="{{ asset('storage/' . $producto->especificaciones) }}" alt="{{ $producto->name }}" width="200">
      </div>
        <label class="form-label">Imagen</label>
        <input type="file" class="form-control" name="image" id="image">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>
@endsection