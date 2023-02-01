<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $productos = Product::all();
        $viewData['titulo'] = "Productos admin page";
        $viewData['productos'] = $productos;
        return view('admin.product.index')->with("viewData", $viewData);
    }

    function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "price" => "required|integer|min:0|not_in:0",
            "description" => "required"
        ]);

        $product = new Product();
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->image = "1.png";
        $product->price = $request["price"];
        $product->save();

        if ($request->hasFile('image')) {
            $imageName = $product->id . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product -> image = $imageName;
            $product -> save();
        }

        $viewData = [];
        $viewData['titulo'] = "Productos admin page";
        $viewData['productos'] = Product::all();

        return view('admin.product.index')
            ->with('sucess', 'Producto creado correctamente!')
            ->with("viewData", $viewData);;
    }
}
