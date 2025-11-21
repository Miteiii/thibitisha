<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

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
// roles have a method(get/post) and a function
// Route::get('roles', function () {
//     return view('roles.index');
// });

Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
