@extends('layout.admin')
@section('titulo', $viewData['titulo'])
@section('contenido')
*** INICIO BLOQUE CONTENIDO ****
<div class="card mb-4">
  <div class="card-header">
    Crear productos
  </div>
  <div class="card-body">

  **** SI HA OCURRIDO ALGÚN ERROR DE VALIDACIÓN, MUÉSTRALO AQUÍ *****
    <form method="POST" action={{store}}>
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
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection