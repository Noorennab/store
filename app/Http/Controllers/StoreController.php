<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{


    public function show(Store $store){

        return view('stores.show',compact('store'));
    }
}
