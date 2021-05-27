<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'TestController@home')
       -> name('home');

Route::get('/employee/{id}', 'TestController@employee')
      -> name('employee');
