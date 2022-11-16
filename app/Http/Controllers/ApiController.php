<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function blogs(){
        $blogs = Blog::all();
        return response()->json($blogs,201);
    }
    public function products(){
        $products = Product::all();
        return response()->json(['Product' => $products,201]);
    }
}
