<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show(Brand $brand)
    {

        $models = $brand
//            ->with('models')
//            ->get()
//            ->first()
            ->models
            ->toJson();
//        dd($models);
        if (\request()->expectsJson()){
            return $models;
        }
        return redirect('/');
    }

    public function create()
    {
        $items = Brand::all();

        return view('admin.brand.create', compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:brands'
        ]);

        Brand::create([
            'name' => $data['name']
        ]);

        return back();
    }

    public function update(Brand $brand, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:brands'
        ]);

        $brand->update([
            'name' => $data['name']
        ]);

        return back();
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return back();
    }
}
