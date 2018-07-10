<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{


    public function show(Store $store)
    {

        return view('stores.show',compact('store'));
    }

    public function edit(Store $store)
    {
        return view('stores.edit',compact('store'));
    }

    public function update(Store $store)
    {

        $store->update([
            'name'=>\request('name'),
            'phone' => \request('phone'),
            'fb_page'=> \request('fb_page'),
            'store_locate' => \request('store_locate')
        ]);

//        return view('stores/edit/'.$store->id,compact('store'));
        return redirect('/stores/'.$store->id.'/edit');
    }

    public function suspend(Store $store)
    {

        $store->update([
            'suspended'=>\request('suspended')
        ]);
        return redirect()->back();
    }
}
