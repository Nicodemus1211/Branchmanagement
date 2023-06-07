<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductemasController;
use App\Http\Controllers\ProductCPdepokController;
use App\Http\Controllers\ProductUPCjakartaController;
use App\Http\Controllers\CPbojongsariController;
use App\Http\Controllers\ProductGEmasController;
use App\Http\Controllers\FormKantorController;
use App\Http\Controllers\FormProdukcontroller;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\CPcisalakController;
use App\Http\Controllers\CPdepokController;
use App\Http\Controllers\CPkelapaduaController;
use App\Http\Controllers\CPpancoranmasController;
use App\Http\Controllers\UPCbejiController;
use App\Http\Controllers\UPCcinereController;
use App\Http\Controllers\UPCcitayamController;
use App\Http\Controllers\UPCgandulController;
use App\Http\Controllers\UPCgriyadepokasriController;
use App\Http\Controllers\UPCgrogolsawanganController;
use App\Http\Controllers\UPCitcdepokController;
use App\Http\Controllers\UPCkemakmuranController;
use App\Http\Controllers\UPCkotakembangController;
use App\Http\Controllers\UPCleuwinanggungController;
use App\Http\Controllers\UPCmargocityController;
use App\Http\Controllers\UPCpasaragungController;
use App\Http\Controllers\UPCpasarcitayamController;
use App\Http\Controllers\UPCpasarmusiController;
use App\Http\Controllers\UPCpasarpucungController;
use App\Http\Controllers\UPCratujayaController;
use App\Http\Controllers\UPCrayapitaraController;
use App\Http\Controllers\UPCsawanganController;
use App\Http\Controllers\UPCsukamajuController;
use App\Http\Controllers\UPCtaposController;
use App\Http\Controllers\DaftarKantorController;
use App\Http\Controllers\TableadminController;

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

Route::get('/Beranda', [IndexController::class, 'Beranda']) ->name('Beranda');
Route::get('/index', [AdminController::class, 'index']) ->name ('index');
Route::get('/productemas', [ProductemasController::class, 'productemas'])->name('productemas');
Route::get('/ProductupcJakarta', [ProductUPCjakartaController::class, 'ProductupcJakarta'])->name('ProductupcJakarta');
Route::get('/ProductcpDepok', [ProductCPdepokController::class, 'ProductcpDepok'])->name('ProductcpDepok');
Route::get('/CPbojongsari', [CPbojongsariController::class, 'cpbojongsari'])->name('cpbojongsari');
Route::get('/ProdukGEmas', [ProductGEmasController::class, 'productgadaiemas'])->name('productgadaiemas');
Route::get('/FormKantor', [FormKantorController::class, 'formkantor'])->name('formkantor');
Route::get('/FormProduk', [FormProdukController::class, 'fromproduk'])->name('fromrproduk');
Route::get('/tentangkami', [TentangKamiController::class, 'tentangkami'])->name('tentangkami');
Route::get('/cpcisalak', [CPcisalakController::class, 'cpcisalak'])->name('cpcisalak');
Route::get('/cpdepok', [CPdepokController::class, 'cpdepok'])->name('cpdepok');
Route::get('/cpkelapadua', [CPkelapaduaController::class, 'cpkelapadua'])->name('cpkelapadua');
Route::get('/cppancoranmas', [CPpancoranmasController::class, 'cppancoranmas'])->name('cppancoranmas');
Route::get('/upcbeji', [UPCbejiController::class, 'upcbeji'])->name('upcbeji');
Route::get('/upccinere', [UPCcinereController::class, 'upccinere'])->name('upccinere');
Route::get('/upccitayam', [UPCcitayamController::class, 'upccitayam'])->name('upccitayam');
Route::get('/upcgandul', [UPCgandulController::class, 'upcgandul'])->name('upcgandul');
Route::get('/upcgriyadepokasri', [UPCgriyadepokasriController::class, 'upcgriyadepokasri'])->name('upcgriyadepokasri');
Route::get('/upcgrogolsawangan', [UPCgrogolsawanganController::class, 'upcgrogolsawangan'])->name('upcgrogolsawangan');
Route::get('/upcitcdepok', [UPCitcdepokController::class, 'upcitcdepok'])->name('upcitcdepok');
Route::get('/upckemakmuran', [UPCkemakmuranController::class, 'upckemakmuran'])->name('upckemakmuran');
Route::get('/upckotakembang', [UPCkotakembangController::class, 'upckotakembang'])->name('upckotakembang');
Route::get('/upcleuwinanggung', [UPCleuwinanggungController::class, 'upcleuwinanggung'])->name('upcleuwinanggung');
Route::get('/upcmargocity', [UPCmargocityController::class, 'upcmargocity'])->name('upcmargocity');
Route::get('/upcpasaragung', [UPCpasaragungController::class, 'upcpasaragung'])->name('upcpasaragung');
Route::get('/upcpasarcitayam', [UPCpasarcitayamController::class, 'upcpasarcitayam'])->name('upcpasarcitayam');
Route::get('/upcpasarpucung', [UPCpasarpucungController::class, 'upcpasarpucung'])->name('upcpasarpucung');
Route::get('/upcpasarmusi', [UPCpasarmusiController::class, 'upcpasarmusi'])->name('upcpasarmusi');
Route::get('/upcratujaya', [UPCratujayaController::class, 'upcratujaya'])->name('upcratujaya');
Route::get('/upcrayapitara', [UPCrayapitaraController::class, 'upcrayapitara'])->name('upcrayapitara');
Route::get('/upcsawangan', [UPCsawanganController::class, 'upcsawangan'])->name('upcsawangan');
Route::get('/upcsukamaju', [UPCsukamajuController::class, 'upcsukamaju'])->name('upcsukamaju');
Route::get('/upctapos', [UPCtaposController::class, 'upctapos'])->name('upctapos');
Route::get('/daftarkantor', [DaftarKantorController::class, 'daftarkantor'])->name('daftarkantor');
Route::get('/tableadmin', [TableadminController::class, 'tableadmin'])->name('tableadmin');
