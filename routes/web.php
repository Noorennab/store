<?php

// three main -----------------------------------------
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about','HomeController@about');

Route::get('/seller', function () {
    return view('seller');
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



Route::prefix('/dashboard')->middleware(['Admin'])->group(function(){
    Route::get('/',function (){
        return view('admin.index');
    });

    Route::resource('/doctors','Admin\DoctorController');
});