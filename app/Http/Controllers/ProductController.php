<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {
        $productos = Product::all();
        return view('products.index')->with("productos", $productos);
    }

    public function show($id) {
        $producto = Product::find($id);
            return view('products.show')->with("producto", $producto);
    }
}
