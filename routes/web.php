<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'home page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'reihan ariansyah', 'title' => 'about']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'blog']);
});
