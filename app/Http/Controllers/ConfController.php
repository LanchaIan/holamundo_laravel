<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfController extends Controller
{
    function index(Request $request)
    {
        $headerColor = session('header', '#333');

        $fontType = session('letra', 'Arial');

        $viewData = [];
        $viewData["title"] = "Admin Page - Tienda online";

        return view('conf.index', [
        ])->with("viewData", $viewData);
    }

    function update(Request $request)
    {
        $headerColor = $request->input('header');
        $fontStyle = $request->input('letra');
    
        session(['header' => $headerColor]);
        session(['letra' => $fontStyle]);

        $viewData = [];
        $viewData["title"] = "Product Page - Tienda online";

        return redirect()->route('home.index')
            ->with('success', 'Configuración actualizada correctamente.')
            ->with("viewData", $viewData);
    }
}
