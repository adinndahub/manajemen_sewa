<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentersController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'cek_login'])->name('cek_login');

// login
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('checkLogin')->group(function(){
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // user
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/create', [UserController::class, 'create'])->name('userCreate');
    Route::post('user/store', [UserController::class, 'store'])->name('userStore');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('userEdit');
    Route::post('user/update/{id}', [UserController::class, 'update'])->name('userUpdate');
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->name('userDestroy');

    // property
    Route::get('property', [PropertyController::class, 'index'])->name('property');
    Route::get('property/create', [PropertyController::class, 'create'])->name('propertyCreate');
    Route::post('property/store', [PropertyController::class, 'store'])->name('propertyStore');
    Route::get('property/edit/{id}', [PropertyController::class, 'edit'])->name('propertyEdit');
    Route::post('property/update/{id}', [PropertyController::class, 'update'])->name('propertyUpdate');
    Route::delete('property/destroy/{id}', [PropertyController::class, 'destroy'])->name('propertyDestroy');

    // renters
    Route::get('renters', [RentersController::class, 'index'])->name('renters');
});

