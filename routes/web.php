<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Product\ProductController;
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

Route::group(['middleware' => 'auth'], function() {
Route::get('/', [ArticleController::class,'index']);
Route::get('/articles',[ArticleController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/articles/detail/{id}',[ArticleController::class,'detail']);
Route::get('qrcode/{id}{name}', [ArticleController::class, 'generate'])->name('generate');
Route::get('/articles/add', [ArticleController::class, 'add']);
Route::post('/articles/add', [
    ArticleController::class,
    'create']);
    Route::get('/articles/delete/{id}', [ArticleController::class,'delete']);
    Route::get('/bookings/delete/{id}', [BookingController::class,'delete']);
    Route::get('/articles/edit/{id}', [ArticleController::class,'edit']);
    Route::post('/articles/edit/{id}', [ArticleController::class,'update']);
    Route::get('/generate-pdf/{id}', [ArticleController::class, 'generatePDF']);

    Route::get('/articles/search', [ArticleController::class, 'searcharticle'])->name('sale.article.search');
});
Route::get('/welcome', [BookingController::class, 'add']);
Route::post('/welcome', [BookingController::class, 'create']);
Route::get('/articles/detail/{id}/{first_product_no}/{first_vaccination_date}',[ArticleController::class,'detail']);
Route::get('/welcome',[ArticleController::class,'welcome']);
Route::get('/test',[ArticleController::class,'test']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
