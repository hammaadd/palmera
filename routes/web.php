<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\ShortquoteController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\PalmeraSite\PalmeraSiteController;
use App\Http\Controllers\PalmeraSite\OurProductController;
use App\Http\Controllers\PalmeraSite\ContactUsController;
use App\Http\Controllers\admin\ContactUsdataController;

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

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/site-content', [ContentController::class, 'content'])->name('site.content');
Route::get('/short-qoute', [ShortquoteController::class, 'shortquote'])->name('short.quote');
Route::post('/add-qoute', [ShortquoteController::class, 'addquote'])->name('add.quote');
Route::get('/edit-qoute/{shortQ}', [ShortquoteController::class, 'editquote'])->name('edit.quote');
Route::post('/update-qoute', [ShortquoteController::class, 'updatequote'])->name('update.quote');
Route::get('/delete-qoute/{id}', [ShortquoteController::class, 'deletequote'])->name('delete.quote');
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
