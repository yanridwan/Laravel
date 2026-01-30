<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'index'])->name('index.index');

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