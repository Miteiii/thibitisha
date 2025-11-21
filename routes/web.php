<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Mkubwa\AdminController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\RoleController;

use Illuminate\Support\Facades\Route;


Route::prefix('/')->name('pages.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/verify', [VerificationController::class, 'show'])->name('verify');
    Route::post('/verify{id}', [VerificationController::class, 'verifyDoctor'])->name('verify');

});

Route::prefix('admin')->name('admin.')->group(function(){
    // Admin routes can be defined here
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
});
// roles have a method(get/post) and a function
// Route::get('roles', function () {
//     return view('roles.index');

// });


/**
 * ROLE CONTROLLER
 * C R U D operations
 * create
 * store
 * edit
 * save
 * delete
 *  
 */
