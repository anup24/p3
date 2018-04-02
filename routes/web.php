<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'BMIController@index');

Route::get('/show', 'BMIController@show');