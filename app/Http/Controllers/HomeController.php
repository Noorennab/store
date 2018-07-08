<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Color;
use App\Product;
use App\Size;
use App\Status;
use App\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $products=Product::all();
        return view('home',compact('products'));
    }
}
