<?php

use Illuminate\Support\Facades\Route;

// ---- Controller Landing Page (template Restoran)
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ServiceController;
use App\Http\Controllers\Landing\MenuController;
use App\Http\Controllers\Landing\BookingController;
use App\Http\Controllers\Landing\TeamController;

// ---- Controller Admin (template Upcube)
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\FormElementController;
use App\Http\Controllers\Admin\DataTableController;
use App\Http\Controllers\Admin\SweetAlertController;
use App\Http\Controllers\Admin\LoginController;

/*
|--------------------------------------------------------------------------
| Landing Page  (layout: layouts/landing.blade.php)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('landing.home');
Route::get('/about', [AboutController::class, 'index'])->name('landing.about');
Route::get('/service', [ServiceController::class, 'index'])->name('landing.service');
Route::get('/menu', [MenuController::class, 'index'])->name('landing.menu');
Route::get('/booking', [BookingController::class, 'index'])->name('landing.booking');
Route::get('/team', [TeamController::class, 'index'])->name('landing.team');

/*
|--------------------------------------------------------------------------
| Admin  (layout: layouts/admin.blade.php)  -> prefix URL /admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/form-elements', [FormElementController::class, 'index'])->name('form-elements');
    Route::get('/tables-datatable', [DataTableController::class, 'index'])->name('tables-datatable');
    Route::get('/sweet-alert', [SweetAlertController::class, 'index'])->name('sweet-alert');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
});
