<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = [];
        $producto1= [];
        $producto1['id'] = 1;
        $producto1['name'] = "Uno";
        $producto1['description'] = "Productos";
        $producto1['image'] = "{{ asset('img/game.png') }}";
        $producto1['price'] = "Productos";
        $products["1"] = $producto1;
        $producto2= [];
        $producto2['id'] = 2;
        $producto2['name'] = "Productos";
        $producto2['description'] = "Productos";
        $producto2['image'] = "Productos";
        $producto2['price'] = "Productos";
        $producto2["2"] = $producto1;
        $producto3= [];
        $producto3['id'] = 3;
        $producto3['name'] = "Productos";
        $producto3['description'] = "Productos";
        $producto3['image'] = "Productos";
        $producto3['price'] = "Productos";
        $producto3["3"] = $producto1;
        $producto4= [];
        $producto4['id'] = 4;
        $producto4['name'] = "Productos";
        $producto4['description'] = "Productos";
        $producto4['image'] = "Productos";
        $producto4['price'] = "Productos";
        $producto4["4"] = $producto1;
        return view('product.index')->with("viewData", $products);
    }

    public function products() {
        $viewData = [];
        $viewData['id'] = "Productos";
        return view('product.index')->with("viewData", $viewData);
    }
}
