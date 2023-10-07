<?php

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

Route::get('/hello/{firstname}/{lastname}/{premium}', function (string $firstname, string $lastname, string $premium) {
    $premium = filter_var($premium, FILTER_VALIDATE_BOOLEAN);
    $message = "Bonjour $firstname $lastname. ". ($premium ? "Merci d'être abonné à ce site un peu particulier 🔞" : "");

    return $message;
})->name('home')-> where('premium', 'true|false');


Route::prefix('auth')->group(function() {
    Route::post('/login', function() {
        return "Vous êtes connecté sur ce site bizarre.";
    })->name('auth.login');

    Route::post('/register', function() {
        return "Vous êtes bien inscrit sur ce site bizarre.";
    })->name('auth.register');
});