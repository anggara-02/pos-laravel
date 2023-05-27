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
    return view('pages.dashboard');
});

Route::get('/transaksi-offline', function () {
    return view('pages.offline.transaksi');
});

// Route::get('/input-produk', function () {
//     return view('pages.warehouse.input-produk');
// });

Route::get('/product-size', 'ProdukController@get_product_size')->name('product_size');

Route::resource('produk', ProdukController::class);

// Route::get('/lists-produk', 'ProdukController@index')->name('lists-produk');

// Route::post('/submit-produk', 'ProdukController@store')->name('submit-produk');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';