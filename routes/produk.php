<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::middleware(['auth'])->group(function () 
{
    Route::get('/produk/index', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}/update', [ProdukController::class, 'update'])->name('produk.update');
    Route::get('/produk/{id}/delete', [ProdukController::class, 'delete'])->name('produk.delete');
    Route::delete('/produk/{id}/destroy', [ProdukController::class, 'destroy'])->name('produk.destroy');
});