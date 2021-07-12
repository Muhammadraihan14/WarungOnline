<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Produkcontroller;




Route::get('/', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('template.base');
});



Route::get('beranda', [Homecontroller::class, 'showBeranda']);
Route::get('katagori', [Homecontroller::class, 'showKatagori']);
Route::get('promo', [Homecontroller::class, 'showPromo']);
Route::get('login', [Authcontroller::class, 'showLogin']);

Route::get('produk', [Produkcontroller::class, 'index']);
Route::get('produk/create', [Produkcontroller::class, 'create']);
Route::post('produk', [Produkcontroller::class, 'store']);
Route::get('produk/{produk}', [Produkcontroller::class, 'show']);
Route::get('produk/{produk}/edit', [Produkcontroller::class, 'edit']);
Route::put('produk/{produk}', [Produkcontroller::class, 'update']);
Route::delete('produk/{produk}', [Produkcontroller::class, 'destroy']);


















