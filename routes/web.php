<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/contact', function () {
    return view('contact');
});