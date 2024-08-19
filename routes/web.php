<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\product;
use Illuminate\Support\Facades\Route;



//? --------------------------------select Data--------------------------------------
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
//? ---------------------------------------------------------------------------------

// --------------------------------insert Data--------------------------------------
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
// ---------------------------------------------------------------------------------


//* --------------------------------update Data--------------------------------------
Route::get('/category/edit/{catId}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{catId}', [CategoryController::class, 'update'])->name('category.update');
//* ---------------------------------------------------------------------------------



//! --------------------------------Delete Data--------------------------------------
Route::delete('/category/{catId}', [CategoryController::class, 'destroy'])->name('category.destroy');
//! ---------------------------------------------------------------------------------

// ////////////////////////////////////////////////////////////////////////////////////////////////////

//? --------------------------------select Data--------------------------------------
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
//? ---------------------------------------------------------------------------------

// --------------------------------insert Data--------------------------------------
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
// ---------------------------------------------------------------------------------


//* --------------------------------update Data--------------------------------------
Route::get('/product/edit/{catId}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{catId}', [ProductController::class, 'update'])->name('product.update');
//* ---------------------------------------------------------------------------------



//! --------------------------------Delete Data--------------------------------------
// Route::delete('/category/{catId}', [CategoryController::class, 'destroy'])->name('category.destroy');
//! ---------------------------------------------------------------------------------


