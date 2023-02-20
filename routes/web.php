<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttorneyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\PracticingAreaController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\MudaIndonesia\AboutMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\AttorneyMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\ContactMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\DashboardMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\ExperienceMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\HeaderMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\OurServiceMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\PracticingAreaMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\PublicationMudaIndonesiaController;
use App\Http\Controllers\MudaIndonesia\SocialMediaMudaIndonesiaController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\{Route, Auth};


//TODO: User Route
Route::get('/', [HomeController::class, 'index'])->name('home');

//TODO: Publication Law Office
Route::get('/publication', [PublicationController::class, 'more'])->name('more-publication');
Route::get('/publication/{category}', [PublicationController::class, 'moreCategory'])->name('more-category-publication');
Route::get('/publication/{category}/{slug}', [PublicationController::class, 'detail'])->name('detail-publication');

Route::prefix('alchemist-muda-indonesia')
    ->group(
        function () {
            Route::get('/', [HomeController::class, 'alchemistMudaIndonesia'])->name('alchemist-muda-indonesia');

            //TODO: Publication Muda Indonesia
            Route::get('/publication', [PublicationMudaIndonesiaController::class, 'more'])->name('ami-more-publication');
            Route::get('/publication/article/judul', [PublicationMudaIndonesiaController::class, 'detail'])->name('ami-detail-publication');
        }
    );

//TODO: Authentication
Route::get('/system/auth/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/system/auth/login', [LoginController::class, 'login']);
Auth::routes([
    'register' => false,
    'login' => false,
]);

//TODO: Admin Route
Route::prefix('admin')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () {
        //TODO: Law Office
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // CRUD Admin
        Route::resource('admin', AdminController::class);

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

        // Update Publication
        Route::get('/publication', [PublicationController::class, 'index'])->name('publication');
        Route::put('/publication/{id}', [PublicationController::class, 'updatePublication'])->name('update-publication');
        // CRUD List Publication
        Route::get('/publication/create', [PublicationController::class, 'create'])->name('create-publication');
        Route::post('/publication/create', [PublicationController::class, 'store'])->name('store-publication');
        Route::get('/publication/edit/{id}', [PublicationController::class, 'edit'])->name('edit-publication');
        Route::put('/publication/edit/{id}', [PublicationController::class, 'updateListPublication'])->name('update-list-publication');
        Route::delete('/publication/{id}', [PublicationController::class, 'destroy'])->name('delete-publication');

        // Update Contact
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::put('/contact/{id}', [ContactController::class, 'update'])->name('update-contact');

        // Update Social Media
        Route::get('/social-media', [SocialMediaController::class, 'index'])->name('social-media');
        Route::put('/social-media/{id}', [SocialMediaController::class, 'update'])->name('update-social-media');

        //TODO: Muda Indonesia
        Route::prefix('alchemist-muda-indonesia')
            ->group(function () {
                // Muda Indonesia
                Route::get('/', [DashboardMudaIndonesiaController::class, 'index'])->name('dashboard-muda-indonesia');

                // Update Header
                Route::get('/header', [HeaderMudaIndonesiaController::class, 'index'])->name('header-muda-indonesia');
                Route::put('/header/{id}', [HeaderMudaIndonesiaController::class, 'update'])->name('update-header-muda-indonesia');

                // Update About
                Route::get('/about', [AboutMudaIndonesiaController::class, 'index'])->name('about-muda-indonesia');
                Route::put('/about/{id}', [AboutMudaIndonesiaController::class, 'update'])->name('update-about-muda-indonesia');

                // Update Our Service
                Route::get('/our-service', [OurServiceMudaIndonesiaController::class, 'index'])->name('our-service-muda-indonesia');
                Route::put('/our-service/{id}', [OurServiceMudaIndonesiaController::class, 'updateOurService'])->name('update-our-service-muda-indonesia');
                // CRUD List Our Service
                Route::get('/our-service/create', [OurServiceMudaIndonesiaController::class, 'create'])->name('create-our-service-muda-indonesia');
                Route::post('/our-service/create', [OurServiceMudaIndonesiaController::class, 'store'])->name('store-our-service-muda-indonesia');
                Route::get('/our-service/edit/{id}', [OurServiceMudaIndonesiaController::class, 'edit'])->name('edit-our-service-muda-indonesia');
                Route::put('/our-service/edit/{id}', [OurServiceMudaIndonesiaController::class, 'updateListOurService'])->name('update-list-our-service-muda-indonesia');
                Route::delete('/our-service/{id}', [OurServiceMudaIndonesiaController::class, 'destroy'])->name('delete-our-service-muda-indonesia');

                // Update Experience
                Route::get('/experience', [ExperienceMudaIndonesiaController::class, 'index'])->name('experience-muda-indonesia');
                Route::put('/experience/{id}', [ExperienceMudaIndonesiaController::class, 'updateExperience'])->name('update-experience-muda-indonesia');
                // CRUD List Experience
                Route::get('/experience/create', [ExperienceMudaIndonesiaController::class, 'create'])->name('create-experience-muda-indonesia');
                Route::post('/experience/create', [ExperienceMudaIndonesiaController::class, 'store'])->name('store-experience-muda-indonesia');
                Route::get('/experience/edit/{id}', [ExperienceMudaIndonesiaController::class, 'edit'])->name('edit-experience-muda-indonesia');
                Route::put('/experience/edit/{id}', [ExperienceMudaIndonesiaController::class, 'updateListExperience'])->name('update-list-experience-muda-indonesia');
                Route::delete('/experience/{id}', [ExperienceMudaIndonesiaController::class, 'destroy'])->name('delete-experience-muda-indonesia');

                // Update Practicing Area
                Route::get('/practicing-area', [PracticingAreaMudaIndonesiaController::class, 'index'])->name('practicing-area-muda-indonesia');
                Route::put('/practicing-area/{id}', [PracticingAreaMudaIndonesiaController::class, 'updatePracticingArea'])->name('update-practicing-area-muda-indonesia');
                // CRUD List Practicing Area
                Route::get('/practicing-area/create', [PracticingAreaMudaIndonesiaController::class, 'create'])->name('create-practicing-area-muda-indonesia');
                Route::post('/practicing-area/create', [PracticingAreaMudaIndonesiaController::class, 'store'])->name('store-practicing-area-muda-indonesia');
                Route::get('/practicing-area/edit/{id}', [PracticingAreaMudaIndonesiaController::class, 'edit'])->name('edit-practicing-area-muda-indonesia');
                Route::put('/practicing-area/edit/{id}', [PracticingAreaMudaIndonesiaController::class, 'updateListPracticingArea'])->name('update-list-practicing-area-muda-indonesia');
                Route::delete('/practicing-area/{id}', [PracticingAreaMudaIndonesiaController::class, 'destroy'])->name('delete-practicing-area-muda-indonesia');

                // Update Attorney
                Route::get('/attorney', [AttorneyMudaIndonesiaController::class, 'index'])->name('attorney-muda-indonesia');
                Route::put('/attorney/{id}', [AttorneyMudaIndonesiaController::class, 'updateAttorney'])->name('update-attorney-muda-indonesia');
                // CRUD List Attorney
                Route::get('/attorney/create', [AttorneyMudaIndonesiaController::class, 'create'])->name('create-attorney-muda-indonesia');
                Route::post('/attorney/create', [AttorneyMudaIndonesiaController::class, 'store'])->name('store-attorney-muda-indonesia');
                Route::get('/attorney/edit/{id}', [AttorneyMudaIndonesiaController::class, 'edit'])->name('edit-attorney-muda-indonesia');
                Route::put('/attorney/edit/{id}', [AttorneyMudaIndonesiaController::class, 'updateListAttorney'])->name('update-list-attorney-muda-indonesia');
                Route::delete('/attorney/{id}', [AttorneyMudaIndonesiaController::class, 'destroy'])->name('delete-attorney-muda-indonesia');

                // Update Publication
                Route::get('/publication', [PublicationMudaIndonesiaController::class, 'index'])->name('publication-muda-indonesia');
                Route::put('/publication/{id}', [PublicationMudaIndonesiaController::class, 'updatePublication'])->name('update-publication-muda-indonesia');
                // CRUD List Publication

                // Update Contact
                Route::get('/contact', [ContactMudaIndonesiaController::class, 'index'])->name('contact-muda-indonesia');
                Route::put('/contact/{id}', [ContactMudaIndonesiaController::class, 'update'])->name('update-contact-muda-indonesia');

                // Update Social Media
                Route::get('/social-media', [SocialMediaMudaIndonesiaController::class, 'index'])->name('social-media-muda-indonesia');
                Route::put('/social-media/{id}', [SocialMediaMudaIndonesiaController::class, 'update'])->name('update-social-media-muda-indonesia');
            });
    });
