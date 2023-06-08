<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageCategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoCategoryController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
    Route::get('/studio', [HomeController::class, 'studio'])->name('studio');
    Route::get('/p/{slug}', [HomeController::class, 'studio_detail'])->name('studio.detail');
    Route::get('/services', [HomeController::class, 'services'])->name('services');

    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
    Route::get('/video', [HomeController::class, 'video'])->name('video');

    Route::get('/foto', [HomeController::class, 'foto'])->name('foto');
    Route::get('/foto/{slug}', [HomeController::class, 'foto'])->name('foto.');
    Route::get('/projects/{slug}/{title}', [HomeController::class, 'foto_detail'])->name('foto.detail');

    Route::get('/project', [HomeController::class, 'project'])->name('project');
    Route::get('/kinefinity-cinema-camera', [HomeController::class, 'kinefinity'])->name('kinefinity');
    Route::get('/rental', [HomeController::class, 'rental'])->name('rental');
});


Route::group(["prefix"=>"go", 'middleware' => ['auth','web', 'admin']],function() {
    Route::get('/', [DashboardController::class, 'index'])->name('go');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::auto('/page', PageController::class);
    Route::auto('/pagecategory', PageCategoryController::class);
    Route::auto('/product', ProductController::class);
    Route::auto('/productcategory', ProductCategoryController::class);
    Route::auto('/blog', BlogController::class);
    Route::auto('/blog-categories', BlogCategoryController::class);
    Route::auto('/faq', FaqController::class);
    Route::auto('/faq-categories', FaqCategoryController::class);
    Route::auto('/service', ServiceController::class);
    Route::auto('/servicecategory', ServiceCategoryController::class);
    Route::auto('/gallery', GalleryController::class);
    Route::auto('/gallery-categories', GalleryCategoryController::class);
    Route::auto('/slider', SliderController::class);
    Route::auto('/video', VideoController::class);
    Route::auto('/video-categories', VideoCategoryController::class);
    Route::auto('/settings', SettingController::class);
    Route::auto('/contact', ContactController::class);
    Route::auto('/features', FeaturesController::class);
    Route::auto('/reference', ReferenceController::class);
});

require __DIR__.'/auth.php';
