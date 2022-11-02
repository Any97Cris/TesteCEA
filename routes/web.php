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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas Products

//Listar Produtos
Route::get('/produtos', [App\Http\Controllers\ProductController::class, 'index'])->name('produtos');
//Criar Produtos
Route::get('/produtos/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/produtos/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

//Upload Produtos
Route::get('/produtos/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/produtos/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

//Delete Produtos
Route::get('/produtos/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');
Route::post('/produtos/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');



//Rotas Users

//Listar Usuarios
Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('user');

//Criar Usuarios
Route::get('/usuarios/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/usuarios/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

//Upload Usuarios
Route::get('/usuarios/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

//Delete Usuarios
Route::get('/usuarios/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');
Route::post('/usuarios/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');