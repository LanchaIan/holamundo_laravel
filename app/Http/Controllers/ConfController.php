<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfController extends Controller
{
        /**
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function change(Request $request)
    {
        $request->session()->pull('color');
        $request->session()->pull('letra');
        $request->session()->put('color', $request->input('color'));
        $request->session()->put('letra', $request->input('letra'));
    }
}
