<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/tasks', function () {
//
//    $tasks =\App\Task::all();
//
//    return view('tasks/index',compact('tasks'));
//});
//
//
//Route::get('/tasks/{task}', function ($id) {
//
//
//    $task = \App\Task::find($id);
//
//    return view('tasks/show',compact('task'));
//});


// three main -----------------------------------------
Route::get('welcome', function () {

    return view('welcome');
});

Route::get('/about','HomeController@about');

Route::get('/seller', function () {

    return view('seller');
});

//reg and login ---------------------------------

Route::get('/register', function () {

    return view('register');
});


Route::get('/login-form', function () {

    return view('login-form');
});

//   -------------------------------------------------


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



Auth::routes();
Route::resource('products','ProductController');
Route::get('/home', 'HomeController@index')->name('home');
