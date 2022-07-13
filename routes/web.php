<?php

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/lentile', function () {
    return view('commande.lentille');
})->name('lentile');
Route::get('/nikon', function () {
    return view('commande.nikon');
})->name('nikon');
Route::get('/infinty', function () {
    return view('commande.infinty');
})->name('infinty');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
