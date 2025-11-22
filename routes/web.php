<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Mkubwa\AdminController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ContactController,
    DegreeController,
    InstitutionController,
    PractitionerController,
    RoleController,
    UserController,
    VerificationController,
    HomeController,
    QualificationController,
    SettingController,
    SpecialityController,
    SubspecialityController,
    StatusController
};

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

// Resource Routes
Route::resource('practitioners', PractitionerController::class);
Route::resource('contacts', ContactController::class);
Route::resource('qualifications', QualificationController::class);
Route::resource('status', StatusController::class);
Route::resource('specialities', SpecialityController::class);
Route::resource('subspecialities', SubspecialityController::class);
Route::resource('institutions', InstitutionController::class);
Route::resource('degrees', DegreeController::class);
Route::resource('settings', SettingController::class);

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
