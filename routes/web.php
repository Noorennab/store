<?php

// three main -----------------------------------------
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');


Route::get('/about','HomeController@about');

Route::get('/mystore', function () {
    return view('stores.mystore');
});

//reg and login ---------------------------------

Auth::routes();
//
Route::get('product',function (){
    return view('products.show');
});

Route::resource('products','ProductController');



Route::get('/contact', function () {
    return view('contact');
});


Route::get('/profile', function () {
    return view('profile');
});

//---------------------------------------------------

Route::get('/card', function () {
    return view('card');
});

Route::get('/slider', function () {
    return view('slider');
});

Route::get('/search-pro', function () {
    return view('search-pro');
});


Route::get('/search','SearchController@search');

Route::prefix('/dashboard')->middleware(['Admin'])->group(function(){
    Route::get('/',function (){
        return view('admin.index');
    });
});