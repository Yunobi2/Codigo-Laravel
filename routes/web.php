<?php

use Illuminate\Support\Facades\Route;

// DB::listen(function($query){
//     var_dump($query->sql);
// });
Route::resource('servicios','App\Http\Controllers\ServiciosController')->names('servicios')->middleware('auth');
Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');
Route::get('categorias/{category}', 'App\Http\Controllers\CategoryController@show')->name('categories.show');

Auth::routes(['register' => true]);


