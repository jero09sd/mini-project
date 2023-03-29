<?php

namespace App\Http\Controllers;
use App\Models\Product;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function show(){

    $data = Product::all();
    return view('products', ['products' => $data]);
   }
   
   

}
