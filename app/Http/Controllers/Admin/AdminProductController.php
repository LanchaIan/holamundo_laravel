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

<<<<<<< Updated upstream
    public function store(){
        
=======
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
            ->with("viewData", $viewData);
    }

    function delete($id){
        $producto_eliminar = Product::find($id);
        $producto_eliminar->delete();

        $imageName = $producto_eliminar -> image;
        Storage::disk('public')->delete($imageName);

        $viewData = [];
        $viewData['titulo'] = "Productos admin page";
        $viewData['productos'] = Product::all();

        return redirect()->route('admin.product.index')
            ->with('sucess', 'Producto eliminado correctamente!')
            ->with("viewData", $viewData);
    }

    function edit($id) {
        $producto = Product::find($id);
        $viewData = [];

        $viewData['titulo'] = "Productos admin page";
        $viewData['productos'] = Product::all();

        return view('admin.product.edit')
            ->with("viewData",$viewData)
            ->with("producto", $producto);
    }

    function update(Request $request, $id) {
        $request->validate([
            "name" => "required|max:255",
            "price" => "required|integer|min:0|not_in:0",
            "description" => "required"
        ]);

        $producto = Product::find($id);
        $producto->name = $request['name'];
        $producto->description = $request['description'];
        $producto->price = $request["price"];

        if ($request->hasFile('image')) {
            $imageName = $producto->id . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $producto -> image = $imageName;
            $producto -> save();
        }

        $viewData = [];
        $viewData['titulo'] = "Productos admin page";
        $viewData['productos'] = Product::all();

        return redirect()->route('admin.product.index')
            ->with('sucess', 'Producto editado correctamente!')
            ->with("viewData", $viewData);
>>>>>>> Stashed changes
    }
}
