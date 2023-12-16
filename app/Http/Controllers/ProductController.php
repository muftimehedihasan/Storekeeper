<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
   public function index(){
    // Retive all products
    $products = DB::table('products')->get();

    //    return view('products.index');
    return view('products.index', ['products' => $products]);
   }
}
