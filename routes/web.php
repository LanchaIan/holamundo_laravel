<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $viewData = [];
    $viewData["titulo"] = "Página principal - Tienda online";
    $now = now();
    $viewData["footer"] = $now;
    return view('home.index')->with("viewData", $viewData);
});

Route::get('/about', function () {
    $viewData = [];
    $viewData["title"] = "Página principal - Tienda online";
    return view('home.about')->with("viewData", $viewData);
});

Route::get('/crear-cuenta', [HomeController::class, 'index']);
