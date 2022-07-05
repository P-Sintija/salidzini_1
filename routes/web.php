<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');

Route::get('/admin/registration', [RegistrationController::class, 'index'])->name('admin.registration');
Route::post('/admin/registration', [RegistrationController::class, 'store'])->name('admin.registration.store');
