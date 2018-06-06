<?php

// three main -----------------------------------------
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about','HomeController@about');

Route::get('/seller', function () {
    return view('seller');
});

//reg and login ---------------------------------

Auth::routes();

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
    Route::get('/','Admin\DashboardController@index')->name('dashboard');
    Route::DELETE('/doctors/{doctor}/avatardestroy','Admin\DoctorController@avatarDestroy')->name('dashboard.doctors.avatardestroy');
    Route::resource('/doctors','Admin\DoctorController');
    Route::DELETE('/doctors/{doctor}','Admin\DoctorController@destroy')->name('dashboard.doctors.destroy');

    Route::resource('/facilities','Admin\FacilityController');
    Route::resource('/specialties','Admin\SpecialtyController');
    Route::resource('/devices','Admin\DeviceController');
    Route::resource('/types','Admin\TypeController');
    Route::resource('/users','Admin\UserController');
});