<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['titulo'] = "Admin page";
        return view('admin.home.index')->with("viewData", $viewData);
    }
}
