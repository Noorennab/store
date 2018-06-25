<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        $products=Product::all();
        $brands=Brand::all();

        if(!is_null(request('brand_id'))){
            $brand_id=request('brand_id');
            $cars= $products->filter(function($car)use ($brand_id){
                return $car->brand_id==$brand_id;
            });
        }

        if(!is_null(request('status_id'))){
            $status_id=request('status_id');
            $products= $products->filter(function($car)use ($status_id){
                return $car->status_id==$status_id;
            });
        }

        if(!is_null(request('type_id'))){
            $type_id=request('type_id');
            $products= $products->filter(function($car)use ($type_id){
                return $car->type_id=$type_id;
            });
        }

        if(!is_null(request('color_id'))){
            $color_id=request('color_id');
            $products= $products->filter(function($car)use ($color_id){
                return $car->color_id=$color_id;
            });
        }

        if(!is_null(request('size_id'))){
            $size_id=request('size_id');
            $products= $products->filter(function($car)use ($size_id){
                return $car->size_id=$size_id;
            });
        }

        if(!is_null(request('from'))){
            $from=request('from');
            $products= $products->filter(function($car)use ($from){
                return $car->first_bid >=$from;
            });

        }

        if(!is_null(request('to'))){
            $to=request('to');
            $products= $products->filter(function($car)use ($to){
                return $car->first_bid <=$to;
            });
        }



        return view('home',compact('products'));
    }
}
