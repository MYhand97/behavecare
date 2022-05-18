<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SearchContentController;

// Controller BackEnd Places
use App\Http\Controllers\inputPlacesController;
use App\Http\Controllers\inputReviewsController;
use App\Http\Controllers\inputCapturesController;


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

Route::get('/', [HomeController::class, 'create']);

Route::get('/content/outdoor', [ContentController::class, 'create'])->name('outdoor');
Route::get('/content/outdoor/{id}', [ContentController::class, 'show'])->name('outdoor');
Route::get('/content/seni', [ContentController::class, 'create'])->name('seni');
Route::get('/content/seni/{id}', [ContentController::class, 'show'])->name('seni');
Route::get('/content/musik', [ContentController::class, 'create'])->name('musik');
Route::get('/content/musik/{id}', [ContentController::class, 'show'])->name('musik');
Route::get('/content/olahraga', [ContentController::class, 'create'])->name('olahraga');
Route::get('/content/olahraga/{id}', [ContentController::class, 'show'])->name('olahraga');
Route::get('/content/meetandplay', [ContentController::class, 'create'])->name('meetandplay');
Route::get('/content/meetandplay/{id}', [ContentController::class, 'show'])->name('meetandplay');
Route::get('/content/sosial', [ContentController::class, 'create'])->name('sosial');
Route::get('/content/sosial/{id}', [ContentController::class, 'show'])->name('sosial');
Route::get('/content/other', [ContentController::class, 'create'])->name('other');
Route::get('/content/other/{id}', [ContentController::class, 'show'])->name('other');

Route::get('/aboutus', [AboutUsController::class, 'create']);

Route::get('/buy/content/{id}/error', [ContentController::class, 'errorGuest'])->name('error');
Route::get('/buy/content/{id}', [ContentController::class, 'booking'])->name('book');
Route::post('/buy/confirmpayment/content/{id}', [BuyController::class, 'confirmPayment'])->name('confirm');

Route::get('/search', [SearchContentController::class, 'index'])->name('search');

// Route User Account
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('/update', [UpdateController::class, 'create']);
Route::post('/update', [UpdateController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);
//================================================================================================
// Route CRUD Places
Route::get('/input_places', [inputPlacesController::class, 'create'])->name('index');
Route::get('/input_places/{id}', [inputPlacesController::class, 'show'])->name('show');
Route::post('/input_places', [inputPlacesController::class, 'store'])->name('create');
Route::post('/input_places/{id}', [inputPlacesController::class, 'update'])->name('update');
Route::get('/input_places/{id}/delete', [inputPlacesController::class, 'delete'])->name('delete');
//================================================================================================
// Route CRUD Comments
Route::get('/input_comment', [inputReviewsController::class, 'create'])->name('index');
Route::get('/input_comment/{id}', [inputReviewsController::class, 'show'])->name('show');
Route::post('/input_comment', [inputReviewsController::class, 'store'])->name('create');
Route::post('/input_comment/{id}', [inputReviewsController::class, 'update'])->name('update');
Route::get('/input_comment/{id}/delete', [inputReviewsController::class, 'delete'])->name('delete');
//================================================================================================
// Route CRUD Captures
Route::get('/input_captures', [inputCapturesController::class, 'create'])->name('index');
Route::get('/input_captures/{id}', [inputCapturesController::class, 'show'])->name('show');
Route::post('/input_captures', [inputCapturesController::class, 'store'])->name('create');
Route::post('/input_captures/{id}', [inputCapturesController::class, 'update'])->name('update');
Route::get('/input_captures/{id}/delete', [inputCapturesController::class, 'delete'])->name('delete');
//================================================================================================
// Route Google Maps
Route::get('google-autocomplete', [GoogleController::class, 'index']);
//================================================================================================