<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttorneyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\PracticingAreaController;
use App\Http\Controllers\SocialMediaController;
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


        // Update Experience
        Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
        Route::put('/experience/{id}', [ExperienceController::class, 'updateExperience'])->name('update-experience');
        // CRUD List Experience
        Route::get('/experience/create', [ExperienceController::class, 'create'])->name('create-experience');
        Route::post('/experience/create', [ExperienceController::class, 'store'])->name('store-experience');
        Route::get('/experience/edit/{id}', [ExperienceController::class, 'edit'])->name('edit-experience');
        Route::put('/experience/edit/{id}', [ExperienceController::class, 'updateListExperience'])->name('update-list-experience');
        Route::delete('/experience/{id}', [ExperienceController::class, 'destroy'])->name('delete-experience');


        // Update Practicing Area
        Route::get('/practicing-area', [PracticingAreaController::class, 'index'])->name('practicing-area');
        Route::put('/practicing-area/{id}', [PracticingAreaController::class, 'updatePracticingArea'])->name('update-practicing-area');
        // CRUD List Practicing Area
        Route::get('/practicing-area/create', [PracticingAreaController::class, 'create'])->name('create-practicing-area');
        Route::post('/practicing-area/create', [PracticingAreaController::class, 'store'])->name('store-practicing-area');
        Route::get('/practicing-area/edit/{id}', [PracticingAreaController::class, 'edit'])->name('edit-practicing-area');
        Route::put('/practicing-area/edit/{id}', [PracticingAreaController::class, 'updateListPracticingArea'])->name('update-list-practicing-area');
        Route::delete('/practicing-area/{id}', [PracticingAreaController::class, 'destroy'])->name('delete-practicing-area');

        // Update Attorney
        Route::get('/attorney', [AttorneyController::class, 'index'])->name('attorney');
        Route::put('/attorney/{id}', [AttorneyController::class, 'updateAttorney'])->name('update-attorney');
        // CRUD List Attorney
        Route::get('/attorney/create', [AttorneyController::class, 'create'])->name('create-attorney');
        Route::post('/attorney/create', [AttorneyController::class, 'store'])->name('store-attorney');
        Route::get('/attorney/edit/{id}', [AttorneyController::class, 'edit'])->name('edit-attorney');
        Route::put('/attorney/edit/{id}', [AttorneyController::class, 'updateListAttorney'])->name('update-list-attorney');
        Route::delete('/attorney/{id}', [AttorneyController::class, 'destroy'])->name('delete-attorney');

        // Update Contact
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::put('/contact/{id}', [ContactController::class, 'update'])->name('update-contact');

        // Update Social Media
        Route::get('/social-media', [SocialMediaController::class, 'index'])->name('social-media');
        Route::put('/social-media/{id}', [SocialMediaController::class, 'update'])->name('update-social-media');
    });
