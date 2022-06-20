<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/product/{product:slug}',[ProductController::class,'show'])->name('product');

Route::get('/search',[ProductController::class,'search'])->name('search');

Route::get('/register',[SessionController::class,'create'])->name('register');
Route::post('/register',[SessionController::class,'store'])->name('create-user');

Route::get('/login',[SessionController::class,'show'])->name('login');
Route::post('/login',[SessionController::class,'attempt'])->name('login');

Route::post('/product/{product:slug}/comment',CommentController::class)->name('create-comment');

Route::get('/logout',[SessionController::class,'destroy'])->name('logout');