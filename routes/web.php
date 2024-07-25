<?php

use Illuminate\Support\Facades\Route;


Route::resource('servicios','App\Http\Controllers\ServiciosController')->names('servicios')->middleware('auth');
Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');


Auth::routes(['register' => true]);


