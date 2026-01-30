<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

// Get: untuk mengambil data
// Post: untuk mengirim data

Route::get('/', [ProdukController::class, 'index'])->name('index.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('index.create');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('index.store');

Route::resource('produk', ProdukController::class, [
    'names' => [
        'index' => 'index.index',
        'create' => 'index.create',
        'store' => 'index.store',
        'show' => 'index.show',
        'edit' => 'index.edit',
        'update' => 'index.update',
        'destroy' => 'index.destroy',
    ]
]);