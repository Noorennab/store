<?php

// three main -----------------------------------------
Route::get('welcome', function () {

    return view('welcome');
});

Route::get('/about','HomeController@about');

Route::get('/seller', function () {
    return view('seller');
});
//reg and login ---------------------------------
Route::post('/register/submit', 'RegisterController@create');

Auth::routes();

Route::get('/add-pro', function () {
    return view('add-pro');
});

Route::get('/add-pro1', function () {
    return view('add-pro1');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home-s', function () {
    return view('home-s');
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

Route::resource('products','ProductController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
