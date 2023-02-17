<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\JsonResponse;

class apiController extends Controller
{
    public function Index(){
        try {
            $productos = Product::all();
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message'=>$e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    
        return response()->json([
            'data' => $productos,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    
       }
}
