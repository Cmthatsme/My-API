<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CurrencyConverter', function () {
    return view('CurrencyConverter');
});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::get('/amazon', function () {
    return view('amazon');
});