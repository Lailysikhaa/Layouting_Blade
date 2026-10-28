<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Landing Page Routes (6 Halaman)
|--------------------------------------------------------------------------
*/
Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('landing.index');
    Route::get('/about', 'about')->name('landing.about');
    Route::get('/service', 'service')->name('landing.service');
    Route::get('/menu', 'menu')->name('landing.menu');
    Route::get('/booking', 'booking')->name('landing.booking');
    Route::get('/team', 'team')->name('landing.team');
});

/*
|--------------------------------------------------------------------------
| Admin Routes (6 Halaman)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->controller(AdminController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
    Route::get('/sweet-alert', 'sweetAlert')->name('admin.sweet-alert');
    Route::get('/ui-elements', 'uiElements')->name('admin.ui-elements');
    Route::get('/forms', 'forms')->name('admin.forms');
    Route::get('/tables', 'tables')->name('admin.tables');
    Route::get('/profile', 'profile')->name('admin.profile');
});
