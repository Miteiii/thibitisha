<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/home', function () {
    return view('test.home');
});

Route::get('test/about', function () {
    return view('test.about');
});

Route::get('test/contact', function () {
    return view('test.contact');
});

Route::get('roles', function () {
    return view('roles.index');
});
