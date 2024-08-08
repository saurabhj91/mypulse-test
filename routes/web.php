<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('saurabh');
});

Route::get('/welcome', function () {
    return view('welcome');
});
