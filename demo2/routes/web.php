<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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


Route::get('/', [HelloController::class, 'hello'])->name('hello.home');
Route::get('/contact', [HelloController::class, 'contact'])->name('hello.contact');


Route::resource('/posts', PostController::class)->middleware('adult');
Route::resource('/products', ProductController::class);
Route::get('/products/search/{search}', [ProductController::class, 'search']);
Route::get('/products/advanced-search/specific', [ProductController::class, 'specificSearch']);

Route::prefix('/auth')->group(function() {
  Route::get('/register', [AuthController::class, 'registerForm'])->name('auth.registerForm');
  Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.loginForm');
  Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
  Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});