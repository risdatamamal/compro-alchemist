<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurServiceController;
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

        // Update Our Service
        Route::get('/our-service', [OurServiceController::class, 'index'])->name('our-service');
        Route::put('/our-service/{id}', [OurServiceController::class, 'updateOurService'])->name('update-our-service');
        Route::get('/our-service/create', [OurServiceController::class, 'create'])->name('create-our-service');
        Route::post('/our-service/create', [OurServiceController::class, 'store'])->name('store-our-service');
        Route::get('/our-service/edit/{id}', [OurServiceController::class, 'edit'])->name('edit-our-service');
        Route::put('/our-service/edit/{id}', [OurServiceController::class, 'updateListOurService'])->name('update-list-our-service');
        Route::delete('/our-service/{id}', [OurServiceController::class, 'destroy'])->name('delete-our-service');
    });
