<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/brands', [\App\Http\Controllers\BrandController::class, 'index'])->name('brands.index');
Route::get('/cars', [\App\Http\Controllers\CarController::class, 'index'])->name('cars.index');
//Route::get('/brands/create', 'BrandController@create')->name('brands.create');
//Route::post('/brands', 'BrandController@store')->name('brands.store');
Route::get('/brands/{id}', [\App\Http\Controllers\BrandController::class, 'show'])->name('brands.show');
Route::get('/cars/{id}', [\App\Http\Controllers\CarController::class, 'show'])->name('cars.show');
//Route::get('/brands/{brand}/edit', 'BrandController@edit')->name('brands.edit');
//Route::patch('/brands/{brand}', 'BrandController@update')->name('brands.update');
//Route::delete('/brands/{brand}', 'BrandController@destroy')->name('brands.destroy');

Route::get('/quotations', [\App\Http\Controllers\QuotationController::class, 'viewForm'])->name('quotations.form');
Route::post('/quotations/create', [\App\Http\Controllers\QuotationController::class, 'store'])->name('quotations.store');

Route::post('/clients', [\App\Http\Controllers\ClientController::class, 'store'])->name('clients.store');
Route::get('/clients', [\App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [\App\Http\Controllers\ClientController::class, 'viewCreate'])->name('clients.create');
