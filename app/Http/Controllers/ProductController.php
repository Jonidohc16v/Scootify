<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request){

        $products = Product::all();
        return view('plans', compact('products'));
    }

    public function checkout(){
        
    }
};