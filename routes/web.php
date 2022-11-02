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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produtos', [App\Http\Controllers\ProductController::class, 'index'])->name('produtos');
Route::get('/produtos/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::post('/produtos/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
