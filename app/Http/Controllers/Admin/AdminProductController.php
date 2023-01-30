<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){
        $viewData = [];
        $productos = Product::all();
        $viewData['titulo'] = "Productos admin page";
        $viewData['productos'] = $productos;
        return view('admin.product.index')->with("viewData", $viewData);
    }

    function store (Request $request){
        $producto = [];
        $nombre = $request -> validate([  "name" => "required|max:255"]);
        $precio = $request -> validate([  "price" => "required|integer|min:0|not_in:0"]);
        $descripcion = $request -> validate([  "description" => "required"]);
        $imagen = 'image.png';
        $producto["nombre"] = $nombre;
        $producto['precio'] = $precio;
        $producto['descripcion'] = $descripcion;
        $producto['imagen'] = $imagen;

        Product::create([ "name" => $producto["nombre"],
        "price" => $producto["precio"],
        "description" => $producto["descripcion"],
        "image" => $producto["imagen"] ]);
    }
    
}
