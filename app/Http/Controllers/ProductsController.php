<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getAllProducts()
    {
        $products =  \App\Models\Products::all();
        return response()->json($products);
    }
}
