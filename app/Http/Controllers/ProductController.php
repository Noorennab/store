<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Color;
use App\Product;
use App\Size;
use App\Status;
use App\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['create','store','update','edit','destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();

        return view('products.index',compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        $statuses=Status::all();
        $sizes=Size::all();
        $types=Type::all();
        $colors=Color::all();

        return view('products.create',compact('brands','sizes','statuses','types','colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product=new Product();
        $product->name =request('name');
        $product->store_id =auth()->user()->stores->first()->id;
        $product->brand_id =request('brand_id');
        $product->type_id =request('type_id');
        $product->color_id =request('color_id');
        $product->size_id=request('size_id');
        $product->status_id=request('status_id');
        $product->price =request('price');
        $product->save();

        if (\request()->hasFile('images'))
        {
            foreach($request->file('images') as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        };


        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands=Brand::all();
        $statuses=Status::all();
        $sizes=Size::all();
        $types=Type::all();
        $colors=Color::all();

        return view('products.edit',compact('product','brands','sizes','statuses','types','colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        $product->name =request('name');
        $product->store_id =auth()->user()->stores->first()->id;
        $product->brand_id =request('brand_id');
        $product->type_id =request('type_id');
        $product->color_id =request('color_id');
        $product->size_id=request('size_id');
        $product->status_id=request('status_id');
        $product->price =request('price');
        $product->save();

        if (\request()->hasFile('images'))
        {
            foreach(request('images') as $image) {
                $product->addMedia($image)->toMediaCollection('images');
            }
        };

        return redirect('/mystore');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $product->delete();

        return redirect('/mystore');
    }
}
