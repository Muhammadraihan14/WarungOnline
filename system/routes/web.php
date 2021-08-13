<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Produkcontroller;
use App\Http\Controllers\Usercontroller;




Route::get('/', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('template.base');
});



Route::get('beranda', [Homecontroller::class, 'showBeranda']);
Route::get('katagori', [Homecontroller::class, 'showKatagori']);



Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('produk', Produkcontroller::class);

// Route::get('produk', [Produkcontroller::class, 'index']);
// Route::get('produk/create', [Produkcontroller::class, 'create']);
// Route::post('produk', [Produkcontroller::class, 'store']);
// Route::get('produk/{produk}', [Produkcontroller::class, 'show']);
// Route::get('produk/{produk}/edit', [Produkcontroller::class, 'edit']);
// Route::put('produk/{produk}', [Produkcontroller::class, 'update']);
// Route::delete('produk/{produk}', [Produkcontroller::class, 'destroy']);

Route::resource('user', Usercontroller::class);
// Route::get('user', [Usercontroller::class, 'index']);
// Route::get('user/create', [Usercontroller::class, 'create']);
// Route::post('user', [Usercontroller::class, 'store']);
// Route::get('user/{user}', [Usercontroller::class, 'show']);
// Route::get('user/{user}/edit', [Usercontroller::class, 'edit']);
// Route::put('user/{user}', [Usercontroller::class, 'update']);
// Route::delete('user/{user}', [Usercontroller::class, 'destroy']);

});


Route::get('login', [Authcontroller::class, 'showLogin'])->name('login');
Route::post('login', [Authcontroller::class, 'loginprocess']);
Route::get('logout', [Authcontroller::class, 'logout']);





















