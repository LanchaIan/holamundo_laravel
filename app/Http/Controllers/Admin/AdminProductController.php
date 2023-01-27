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

    public function store(){
        
    }
}
