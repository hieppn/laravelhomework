<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return "Hello World";
});

Route::get('/books/create', "BookController@create");

Route::get('/books', "BookController@index");

Route::post('/books', "BookController@store");
Route::delete('/books/{id}', "BookController@destroy");
Route::get('/edit/{id}','BookController@edit');
Route::get('/update','BookController@update');
