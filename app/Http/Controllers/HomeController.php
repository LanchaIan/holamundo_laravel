<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
       /**
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */

    public function index() {
        $viewData = [];
        $viewData['titulo'] = "titulo bueno";
        return view('home.index')->with("viewData", $viewData);
    }
    


    public function about() {
        $viewData['titulo'] = "Tienda online Ian";
        $viewData['subtitulo'] = "Subtitulos";
        $viewData['description'] = "Página de Ian";
        $viewData['author'] = "Ian Santana";
        return view('home.about')->with("viewData", $viewData);
}
}