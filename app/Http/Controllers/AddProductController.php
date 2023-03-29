<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AddProductController extends Controller
{
    function addproduct(Request $req)
    {
$AddProduct = new Product;
$AddProduct->name=$req->name;
$AddProduct->description=$req->description;
$AddProduct->price=$req->price;
$AddProduct->quantity=$req->quantity;
$AddProduct->category=$req->category;
$AddProduct->save();
return redirect('products');
    }
}
