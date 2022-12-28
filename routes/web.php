<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\WhyController;
use Illuminate\Support\Facades\{Route, Auth};

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes([
    'register' => false,
]);

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
        // CRUD List Our Service
        Route::get('/our-service/create', [OurServiceController::class, 'create'])->name('create-our-service');
        Route::post('/our-service/create', [OurServiceController::class, 'store'])->name('store-our-service');
        Route::get('/our-service/edit/{id}', [OurServiceController::class, 'edit'])->name('edit-our-service');
        Route::put('/our-service/edit/{id}', [OurServiceController::class, 'updateListOurService'])->name('update-list-our-service');
        Route::delete('/our-service/{id}', [OurServiceController::class, 'destroy'])->name('delete-our-service');

        // Update Why
        Route::get('/why', [WhyController::class, 'index'])->name('why');
        Route::put('/why/{id}', [WhyController::class, 'updateWhy'])->name('update-why');
        // CRUD List Why
        Route::get('/why/create', [WhyController::class, 'create'])->name('create-why');
        Route::post('/why/create', [WhyController::class, 'store'])->name('store-why');
        Route::get('/why/edit/{id}', [WhyController::class, 'edit'])->name('edit-why');
        Route::put('/why/edit/{id}', [WhyController::class, 'updateListWhy'])->name('update-list-why');
        Route::delete('/why/{id}', [WhyController::class, 'destroy'])->name('delete-why');
    });
