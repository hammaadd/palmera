<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\ShortcodeController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\PalmeraSite\PalmeraSiteController;
use App\Http\Controllers\PalmeraSite\OurProductController;
use App\Http\Controllers\PalmeraSite\ContactUsController;
use App\Http\Controllers\admin\ContactUsdataController;
use App\Http\Controllers\PalmeraSite\NewsLaterController;
use App\Http\Controllers\admin\NewslaterDataController ;
use App\Http\Controllers\PalmeraSite\OurFarmsController;
;

use Illuminate\Support\Facades\Auth;


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

Route::get('/admin/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/site-content', [ContentController::class, 'content'])->name('site.content');
Route::get('/short-code', [ ShortCodeController::class, 'shortcode'])->name('short.code');
Route::post('/add-code', [ ShortCodeController::class, 'addcode'])->name('add.code');
Route::get('/edit-code/{shortQ}', [ ShortCodeController::class, 'editcode'])->name('edit.code');
Route::post('/update-code', [ ShortCodeController::class, 'updatecode'])->name('update.code');
Route::get('/delete-code/{id}', [ ShortCodeController::class, 'deletecode'])->name('delete.code');
Route::get('/messages', [ContactUsdataController::class, 'contactus_data'])->name('contactus.data');

Route::get('/profile-setting', [ProfileController::class, 'profileSetting'])->name('profile.setting');
Route::post('/update-password', [ProfileController::class, 'update_password'])->name('update.password');
Route::post('/update-profile', [ProfileController::class, 'update_profile'])->name('update.profile');
Route::get('/products', [ProductController::class, 'product'])->name('products');
Route::post('/add-product', [ProductController::class, 'add_product'])->name('add.product');
Route::get('/', [PalmeraSiteController::class, 'PalmeraMain'])->name('palmera.home');
Route::get('/our-product', [OurProductController::class, 'ProductView'])->name('our.product');
Route::get('/contact-us', [ContactUsController::class, 'contactus'])->name('contact.us');
Route::post('/submit-contactus', [ContactUsController::class, 'submit_contact_form'])->name('submit.contactus');
Route::get('/edit-product/{product}', [ProductController::class, 'edit_product'])->name('edit.product');
Route::post('/update-product/{image}', [ProductController::class, 'update_product'])->name('update.product');
Route::get('/delete-product/{id}', [ProductController::class, 'delete_product'])->name('delete.product');
Route::post('/news-later', [NewsLaterController::class, 'addnewslater'])->name('news.later');
Route::get('/newslater-data', [NewslaterDataController::class, 'newslater_data'])->name('newslater.data');
Route::get('/our-farms', [OurFarmsController::class, 'our_farms'])->name('our.farms');
