<!-- Esto es lo que debe contener el yield contenido de la plantilla de nuestra web cuando el usuario acceda a la vista "products" -->

<div class="row">
    <!-- Bucle con una iteración por cada producto -->
    @foreach ($viewData["products"] as $producto)
      <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
          <img src={{$image}} class="card-img-top img-card">
          <div class="card-body text-center">
            <a href="*** ENLACE A LA RUTA QUE MOSTRARÁ EL DETALLE DEL PRODUCTO ***"
              class="btn bg-primary text-white">{{$producto["name"]}}</a>
          </div>
        </div>
      </div>
      @endforeach
    <!-- FIN bucle con una iteración por cada producto -->
  </div>

