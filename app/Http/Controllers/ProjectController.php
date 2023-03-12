<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index(){
        $products=DB::table('products')->get();
        return view('index',['products'=>$products]);
    }

    function product(){
        $products=DB::table('products')->get();
        return view('products',['products'=>$products]);
    }
}
