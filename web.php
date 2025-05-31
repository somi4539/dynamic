<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/laptop', function () {
    return view('laptop');
});

Route::get('/copy', function () {
    return view('copy');
});






Route::get('/admin', function () {
    return view('admin');
});


