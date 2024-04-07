<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brands', [\App\Http\Controllers\BrandController::class, 'index'])->name('brands.index');
//Route::get('/brands/create', 'BrandController@create')->name('brands.create');
//Route::post('/brands', 'BrandController@store')->name('brands.store');
Route::get('/brands/{brand}', [\App\Http\Controllers\BrandController::class, 'show'])->name('brands.show');
//Route::get('/brands/{brand}/edit', 'BrandController@edit')->name('brands.edit');
//Route::patch('/brands/{brand}', 'BrandController@update')->name('brands.update');
//Route::delete('/brands/{brand}', 'BrandController@destroy')->name('brands.destroy');
