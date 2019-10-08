<?php

Route::view('/', 'home')->name('home');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/contacto', 'contacto')->name('contacto');

Route::resource('message', 'MessageController');
Route::resource('users', 'UserController');

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('logins');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
