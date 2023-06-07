<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductemasController;
use App\Http\Controllers\ProductCPdepokController;
use App\Http\Controllers\ProductUPCjakartaController;
use App\Http\Controllers\CPbojongsariController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductGEmasController;
use App\Http\Controllers\tabelController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [loginController::class, 'login']) -> name('login');
Route::get('/index', [AdminController::class, 'index']) ->name ('index');
Route::get('/Beranda', [IndexController::class, 'Beranda']) ->name('Beranda');
Route::get('/Tabel', [tabelController::class, 'Tabel']) -> name('Tabel');


Route::get('/productemas', [ProductemasController::class, 'productemas'])->name('productemas');
Route::get('/ProductupcJakarta', [ProductUPCjakartaController::class, 'ProductupcJakarta'])->name('ProductupcJakarta');
Route::get('/ProductcpDepok', [ProductCPdepokController::class, 'ProductcpDepok'])->name('ProductcpDepok');
Route::get('/CPbojongsari', [CPbojongsariController::class, 'cpbojongsari'])->name('cpbojongsari');
Route::get('/ProdukGEmas', [ProductGEmasController::class, 'productgadaiemas'])->name('productgadaiemas');
