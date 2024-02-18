<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoryMenuController;
use App\Http\Controllers\Admin\CateringInfoController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ListMenuController;
use App\Http\Controllers\Admin\OurAdvantagesController;
use App\Http\Controllers\Admin\OurGalleryController;
use App\Http\Controllers\Admin\OurHistoryController;
use App\Http\Controllers\Admin\PackageCateringController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingAccountController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserQuestionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DetailBlogController;
use App\Http\Controllers\DetailMenuController;
use App\Http\Controllers\DetailPackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/masuk', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/masuk', [AuthController::class, 'loginProcess'])->middleware('guest')->name('login.process');
Route::post('/keluar', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/menu', MenuController::class)->name('menu');
Route::get('/menu/detail/{slug}', DetailMenuController::class)->name('detail-menu');
Route::get('/package', PackageController::class)->name('package');
Route::get('/package/detail/{slug}', DetailPackageController::class)->name('detail-package');
Route::get('/blog', BlogController::class)->name('blog');
Route::get('/blog/detail/{slug}', DetailBlogController::class)->name('detail-blog');

// ==========================================================================================

Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::get('/catering/info', [CateringInfoController::class, 'index'])->name('catering-info');
    Route::get('/catering/info/add', [CateringInfoController::class, 'create'])->name('add-catering-info');

    Route::get('/catering/advantage', [OurAdvantagesController::class, 'index'])->name('advantage');
    Route::get('/catering/advantage/add', [OurAdvantagesController::class, 'create'])->name('add-advantage');

    Route::get('/catering/history', [OurHistoryController::class, 'index'])->name('history');
    Route::get('/catering/history/add', [OurHistoryController::class, 'create'])->name('add-history');

    Route::get('/catering/gallery', [OurGalleryController::class, 'index'])->name('gallery');
    Route::get('/catering/gallery/add', [OurGalleryController::class, 'create'])->name('add-gallery');

    Route::get('/catering/banner', [BannerController::class, 'index'])->name('banner');

    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    // Route::get('/service/add', [ServiceController::class, 'create'])->name('add-service');

    Route::get('/package', [PackageCateringController::class, 'index'])->name('package-catering');
    Route::get('/package/add', [PackageCateringController::class, 'create'])->name('add-package-catering');

    Route::get('/category', [CategoryMenuController::class, 'index'])->name('category-catering');

    Route::get('/menu', [ListMenuController::class, 'index'])->name('menu-catering');
    Route::get('/menu/add', [ListMenuController::class, 'create'])->name('add-menu-catering');

    Route::get('/client', [ClientController::class, 'index'])->name('client');

    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

    Route::get('/blog', [AdminBlogController::class, 'index'])->name('blog-dashboard');
    Route::get('/blog/add', [AdminBlogController::class, 'create'])->name('add-blog-dashboard');

    Route::get('/faq', [FaqController::class, 'index'])->name('faq');

    Route::get('/question', [UserQuestionController::class, 'index'])->name('question');

    Route::get('/profile', [SettingAccountController::class, 'profile'])->name('profile');
    Route::get('/change-password', [SettingAccountController::class, 'changePassword'])->name('change-password');
});
