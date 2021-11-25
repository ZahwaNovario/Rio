<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/master', function () {
    return view('main.master');
});
Route::get('/produk', [ProdukController::class, 'index'])
->name('produk');

Route::get('/produk/tambah', [ProdukController::class, 'create'])
->name('tambahProduk');

Route::post('/produk/store', [ProdukController::class, 'store'])
->name('storeProduk');

Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])
->name('hapusProduk');

Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])
->name('editProduk');

Route::post('/produk/update/{id}', [ProdukController::class, 'update'])
->name('updateProduk');


?>