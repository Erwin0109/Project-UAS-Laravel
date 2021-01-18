<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;


// Client
Route::get('home', [HomeController::class, 'showHome']);
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
Route::get('produk', [HomeController::class, 'showProduk']);
Route::get('produk_detail/{produk}', [HomeController::class, 'showProdukDetail']);
Route::post('filter', [HomeController::class, 'filter']);
Route::get('test-collection', [HomeController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);


// Resource Router + Prefix Hanya Berguna Untuk CRUD
Route::prefix('admin')->middleware('auth')->group(function(){
	Route::resource('produk', ProdukController::class);
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::resource('kategori', KategoriController::class);
	Route::post('kategori/filter', [KategoriController::class, 'filter']);
	Route::resource('user', UserController::class);
	Route::post('user/filter', [UserController::class, 'filter']);
});
// Route::prefix('pembeli')->middleware('auth:pembeli')->group(function(){
// 	Route::resource('produk', ProdukController::class);
// 	Route::post('produk/filter', [ProdukController::class, 'filter']);
// 	Route::resource('kategori', KategoriController::class);
// 	Route::post('kategori/filter', [KategoriController::class, 'filter']);
// 	Route::resource('user', UserController::class);
// 	Route::post('user/filter', [UserController::class, 'filter']);
// });
// Route::prefix('penjual')->middleware('auth:penjual')->group(function(){
// 	Route::resource('produk', ProdukController::class);
// 	Route::post('produk/filter', [ProdukController::class, 'filter']);
// 	Route::resource('kategori', KategoriController::class);
// 	Route::post('kategori/filter', [KategoriController::class, 'filter']);
// 	Route::resource('user', UserController::class);
// 	Route::post('user/filter', [UserController::class, 'filter']);
// });
// Resource Router + Prefix

// Setting Auth
// login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
// logout
Route::get('logout', [AuthController::class, 'logout']);
// register
Route::get('/register', [AuthController::class, 'showRegister']);
// Setting Auth

// Setting
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);














// Setting Produk
// Route::get('produk', [ProdukController::class, 'index']);
// Route::get('produk/create', [ProdukController::class, 'create']);
// Route::post('produk', [ProdukController::class, 'store']);
// Route::get('produk/{produk}', [ProdukController::class, 'show']);
// Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
// // update
// Route::put('produk/{produk}', [ProdukController::class, 'update']);
// // delete
// Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
// setting produk

// Setting Kategori
// Route::get('kategori', [KategoriController::class, 'index']);
// Route::get('kategori/create', [KategoriController::class, 'create']);
// Route::post('kategori', [KategoriController::class, 'store']);
// Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
// Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
// // update
// Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
// // delete
// Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);
// Setting Kategori

// Setting User
// Route::get('user', [UserController::class, 'index']);
// Route::get('user/create', [UserController::class, 'create']);
// Route::post('user', [UserController::class, 'store']);
// Route::get('user/{user}', [UserController::class, 'show']);
// Route::get('user/{user}/edit', [UserController::class, 'edit']);
// // update
// Route::put('user/{user}', [UserController::class, 'update']);
// // delete
// Route::delete('user/{user}', [UserController::class, 'destroy']);
// setting User
