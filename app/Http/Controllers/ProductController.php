<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData['titulo'] = "Tienda online Ian";
        $viewData['subtitulo'] = "Subtitulos";
        $products = [];
        $producto1= [];
        $producto1['id'] = 1;
        $producto1['name'] = "Xmac";
        $producto1['description'] = "Consola de videojuegos";
        $producto1['image'] = "img/game.png";
        $producto1['price'] = "120";
        $products[] = $producto1;
        $producto2= [];
        $producto2['id'] = 2;
        $producto2['name'] = "Serma 120";
        $producto2['description'] = "Caja fuerte con seguridad B+";
        $producto2['image'] = "img/safe.png";
        $producto2['price'] = "2000";
        $products[] = $producto2;
        $producto3= [];
        $producto3['id'] = 3;
        $producto3['name'] = "Submarino";
        $producto3['description'] = "Pues es un submarino";
        $producto3['image'] = "img/submarine.png";
        $producto3['price'] = "25000";
        $products[] = $producto3;
        $producto4= [];
        $producto4['id'] = 4;
        $producto4['name'] = "Auriculares";
        $producto4['description'] = "Descripcion auriculares";
        $producto4['image'] = "img/auriculares.png";
        $producto4['price'] = "1120";
        $products[] = $producto4;
        $viewData['products'] = $products;
        return view('products.index')->with("viewData", $viewData);
    }

    public function show($id) {
        $products = [];
        $producto1= [];
        $producto1['id'] = "1";
        $producto1['name'] = "Xmac";
        $producto1['description'] = "Consola de videojuegos";
        $producto1['image'] = "img/game.png";
        $producto1['price'] = "120";
        $products[] = $producto1;
        $producto2= [];
        $producto2['id'] = "2";
        $producto2['name'] = "Serma 120";
        $producto2['description'] = "Caja fuerte con seguridad B+";
        $producto2['image'] = "img/safe.png";
        $producto2['price'] = "2000";
        $products[] = $producto2;
        $producto3= [];
        $producto3['id'] = "3";
        $producto3['name'] = "Submarino";
        $producto3['description'] = "Pues es un submarino";
        $producto3['image'] = "img/submarine.png";
        $producto3['price'] = "25000";
        $products[] = $producto3;
        $producto4= [];
        $producto4['id'] = "4";
        $producto4['name'] = "Auriculares";
        $producto4['description'] = "Descripcion auriculares";
        $producto4['image'] = "img/auriculares.png";
        $producto4['price'] = "1120";
        $products[] = $producto4;
        foreach($products as $producto) {
            if ($producto['id'] == $id) {
                return view('products.show')->with("producto", $producto);
            }
        }
    }
}
