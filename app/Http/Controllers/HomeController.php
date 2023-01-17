<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('auth.register');}

    public function about() {
        $viewData = [];
        $viewData["title"] = "Tienda online";
        $viewData["subtitle"] = "Subtitlos";
        $viewData["description"] = "Página de Ian";
        $viewData["author"] = "Ian Santana";
        return view('home.about')->with("viewData", $viewData);
    }
}
