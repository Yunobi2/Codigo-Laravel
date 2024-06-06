<?php

##use Illuminate\Support\Facades\Route;

##Route::get('/', function () {
##    return view('welcome');
##});

Route::resource('servicios','App\Http\Controllers\Servicios2Controller')->except('index','show');

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios.index');
Route::view('contacto','contacto')->name('contacto');
Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');
