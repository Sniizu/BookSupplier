<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/book/{id}', [BookController::class, 'show'])->name('bookdetail');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category');
Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher');
Route::get('/publisher/{id}', [PublisherController::class, 'show'])->name('publisherdetail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
