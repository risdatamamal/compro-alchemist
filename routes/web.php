<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\{Route, Auth};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('admin')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // CRUD Admin
        Route::resource('admin', AdminController::class);

        // Update Header
        Route::get('/header', [HeaderController::class, 'index'])->name('header');
        Route::put('/header/{id}', [HeaderController::class, 'update'])->name('update-header');

        // Update Header
        Route::get('/header', [HeaderController::class, 'index'])->name('header');
        Route::put('/header/{id}', [HeaderController::class, 'update'])->name('update-header');

        // Update About
        Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::put('/about/{id}', [AboutController::class, 'update'])->name('update-about');
    });
