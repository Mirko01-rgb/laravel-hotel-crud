<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'TestController@home')
       -> name('home');

Route::get('/employee/{id}', 'TestController@employee')
      -> name('employee');

Route::get('/create', 'TestController@create')
      -> name('create');

Route::post('/store', 'TestController@store')
      -> name('store');

Route::get('destroy/{id}', 'TestController@destroy')
      -> name('destroy');
