<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

// Template E-Commerce

Route::get('/home', function () {
    return view('ecommerce.home');
});

Route::get('/about', function () {
    return view('ecommerce.about');
});

Route::get('/checkout', function () {
    return view('ecommerce.checkout');
});

Route::get('/contact', function () {
    return view('ecommerce.contact');
});

Route::get('/login', function () {
    return view('ecommerce.login');
});

Route::get('/register', function () {
    return view('ecommerce.register');
});

Route::get('/sales', function () {
    return view('ecommerce.sales');
});

Route::get('/single', function () {
    return view('ecommerce.single');
});

// template admin
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('user', [HomeController::class, 'showUser']);
Route::get('adminlogin', [AuthController::class, 'showLogin']);
Route::get('profile', [HomeController::class, 'showProfile']);




Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);