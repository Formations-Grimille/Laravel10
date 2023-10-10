<?php

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

Route::prefix('/hello')->group(function() {
    Route::prefix('/world')->group(function() {
        Route::get('/', [HelloController::class, 'sayHello'])->name('hello.home');
        Route::get('/{firstname}', [HelloController::class, 'sayHelloName'])->name('hello.user')->where('firstname', '[A-Za-z]+');
    });
});


Route::resource('/posts', PostController::class);
Route::resource('/products', ProductController::class);
Route::get('/products/search/{search}', [ProductController::class, 'search']);
Route::get('/products/advanced-search/specific', [ProductController::class, 'specificSearch']);