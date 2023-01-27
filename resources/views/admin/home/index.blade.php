@extends('layout.admin')
@section('titulo', $viewData['titulo'])
@section('contenido')
<div class="card">
  <div class="card-header">
    Página principal del panel de control
  </div>
  <div class="card-body">
    Bienvenido/a al panel de control. Utiliza el menú lateral para navegar entre las diferentes opciones.
  </div>
</div>
@endsection