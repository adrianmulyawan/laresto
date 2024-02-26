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
    Route::post('/catering/info/store', [CateringInfoController::class, 'store'])->name('store-catering-info');
    Route::get('/catering/info/edit/{id}', [CateringInfoController::class, 'edit'])->name('edit-catering-info');
    Route::put('/catering/info/update/{id}', [CateringInfoController::class, 'update'])->name('update-catering-info');

    Route::get('/catering/advantage', [OurAdvantagesController::class, 'index'])->name('advantage');
    Route::get('/catering/advantage/add', [OurAdvantagesController::class, 'create'])->name('add-advantage');
    Route::post('/catering/advantage/store', [OurAdvantagesController::class, 'store'])->name('store-advantage');
    Route::get('/catering/advantage/edit/{id}', [OurAdvantagesController::class, 'edit'])->name('edit-advantage');
    Route::put('/catering/advantage/update/{id}', [OurAdvantagesController::class, 'update'])->name('update-advantage');
    Route::delete('/catering/advantage/delete/{id}', [OurAdvantagesController::class, 'destroy'])->name('delete-advantage');

    Route::get('/catering/history', [OurHistoryController::class, 'index'])->name('history');
    Route::get('/catering/history/add', [OurHistoryController::class, 'create'])->name('add-history');
    Route::post('/catering/history/store', [OurHistoryController::class, 'store'])->name('store-history');
    Route::get('/catering/history/edit/{id}', [OurHistoryController::class, 'edit'])->name('edit-history');
    Route::put('/catering/history/update/{id}', [OurHistoryController::class, 'update'])->name('update-history');
    Route::delete('/catering/history/delete/{id}', [OurHistoryController::class, 'destroy'])->name('delete-history');

    Route::get('/catering/gallery', [OurGalleryController::class, 'index'])->name('gallery');
    Route::get('/catering/gallery/add', [OurGalleryController::class, 'create'])->name('add-gallery');
    Route::post('/catering/gallery/store', [OurGalleryController::class, 'store'])->name('store-gallery');
    Route::get('/catering/gallery/edit/{id}', [OurGalleryController::class, 'edit'])->name('edit-gallery');
    Route::put('/catering/gallery/update/{id}', [OurGalleryController::class, 'update'])->name('update-gallery');
    Route::delete('/catering/gallery/delete/{id}', [OurGalleryController::class, 'destroy'])->name('delete-gallery');

    Route::get('/catering/banner', [BannerController::class, 'index'])->name('banner');
    Route::post('/catering/banner/store', [BannerController::class, 'store'])->name('store-banner');
    Route::get('/catering/banner/edit/{id}', [BannerController::class, 'edit'])->name('edit-banner');
    Route::put('/catering/banner/update/{id}', [BannerController::class, 'update'])->name('update-banner');
    Route::delete('/catering/banner/delete/{id}', [BannerController::class, 'destroy'])->name('delete-banner');

    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('store-service');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('edit-service');
    Route::put('/service/update/{id}', [ServiceController::class, 'update'])->name('update-service');
    Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('delete-service');

    Route::get('/package', [PackageCateringController::class, 'index'])->name('package-catering');
    Route::get('/package/add', [PackageCateringController::class, 'create'])->name('add-package-catering');
    Route::post('/package/store', [PackageCateringController::class, 'store'])->name('store-package-catering');
    Route::get('/package/edit/{id}', [PackageCateringController::class, 'edit'])->name('edit-package-catering');
    Route::put('/package/update/{id}', [PackageCateringController::class, 'update'])->name('update-package-catering');
    Route::delete('/package/delete/{id}', [PackageCateringController::class, 'destroy'])->name('delete-package-catering');

    Route::get('/category', [CategoryMenuController::class, 'index'])->name('category-catering');
    Route::post('/category/store', [CategoryMenuController::class, 'store'])->name('store-category-catering');
    Route::get('/category/edit/{id}', [CategoryMenuController::class, 'edit'])->name('edit-category-catering');
    Route::put('/category/update/{id}', [CategoryMenuController::class, 'update'])->name('update-category-catering');
    Route::delete('/category/delete/{id}', [CategoryMenuController::class, 'destroy'])->name('delete-category-catering');

    Route::get('/menu', [ListMenuController::class, 'index'])->name('menu-catering');
    Route::get('/menu/add', [ListMenuController::class, 'create'])->name('add-menu-catering');
    Route::post('/menu/store', [ListMenuController::class, 'store'])->name('store-menu-catering');
    Route::get('/menu/edit/{id}', [ListMenuController::class, 'edit'])->name('edit-menu-catering');
    Route::put('/menu/update/{id}', [ListMenuController::class, 'update'])->name('update-menu-catering');
    Route::delete('/menu/delete/{id}', [ListMenuController::class, 'destroy'])->name('delete-menu-catering');

    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::post('/client/store', [ClientController::class, 'store'])->name('store-client');
    Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('edit-client');
    Route::put('/client/update/{id}', [ClientController::class, 'update'])->name('update-client');
    Route::delete('/client/delete/{id}', [ClientController::class, 'destroy'])->name('delete-client');

    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('store-testimonial');
    Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('edit-testimonial');
    Route::put('/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('update-testimonial');
    Route::delete('/testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->name('delete-testimonial');

    Route::get('/blog', [AdminBlogController::class, 'index'])->name('blog-dashboard');
    Route::get('/blog/add', [AdminBlogController::class, 'create'])->name('add-blog-dashboard');
    Route::post('/blog/store', [AdminBlogController::class, 'store'])->name('store-blog-dashboard');
    Route::get('/blog/edit/{id}', [AdminBlogController::class, 'edit'])->name('edit-blog-dashboard');
    Route::put('/blog/update/{id}', [AdminBlogController::class, 'update'])->name('update-blog-dashboard');
    Route::delete('/blog/delete/{id}', [AdminBlogController::class, 'destroy'])->name('delete-blog-dashboard');

    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('store-faq');
    Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('edit-faq');
    Route::put('/faq/update/{id}', [FaqController::class, 'update'])->name('update-faq');
    Route::delete('/faq/delete/{id}', [FaqController::class, 'destroy'])->name('delete-faq');

    Route::get('/question', [UserQuestionController::class, 'index'])->name('question');
    Route::get('/question/detail/{id}', [UserQuestionController::class, 'show'])->name('show-question');

    Route::get('/profile', [SettingAccountController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [SettingAccountController::class, 'updateProfile'])->name('update-profile');

    Route::get('/change-password', [SettingAccountController::class, 'changePassword'])->name('change-password');
    Route::put('/change-password/update', [SettingAccountController::class, 'updatePassword'])->name('update-password');
});
