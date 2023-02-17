@extends('layout.admin')
@section('titulo', $viewData['titulo'])
@section('contenido')
<div class="card mb-4">
  <div class="card-header">
    Crear productos
  </div>
  <div class="card-body">

    <form method="POST" action={{ route('admin.product.store') }}>
      @csrf
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="name"  type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="price" type="number" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="file" class="form-control" name="image" id="image">
      </div>
      <div class="mb-3">
        <label class="form-label">Especificaciones</label>
        <input type="file" class="form-control" name="especificaciones" id="especificaciones">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Panel de control de productos
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($viewData['productos'] as $producto)
            <thead>
            <tr>
              <th scope="col">{{$producto['id']}}</th>
              <th scope="col">{{$producto['name']}}</th>
              <th scope="col">{{$producto->id}}</th>
              <th scope="col">{{$producto->name}}</th>
              <th scope="col">
                <a href="{{ route('admin.product.edit', $producto->id)}}">
                  <button class="btn btn-info" type="submit">
                      Editar
                  </button>
                </a>
              </th>
              <th scope="col">
                <form action="{{ route('admin.product.delete', $producto->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">
                      Eliminar
                  </button>
              </form>
              </th>
            </tr>
          </thead>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection