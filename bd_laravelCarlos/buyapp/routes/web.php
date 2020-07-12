<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users','UserController@index');

Route::get('/products', 'ProductController@index');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/list', 'ProductController@list');
Route::get('/products/show_car', 'ProductController@showCar');
Route::post('/products', 'ProductController@store');
Route::put('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');

Route::get('/purchases/create', 'PurchaseController@create');






