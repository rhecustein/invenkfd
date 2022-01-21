<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\KategoriController;



Route::group(['middleware' => 'auth'], function () {

    Route::get('/inven/inventoris', [InventarisController::class, 'index'])->name('inventoris');
    Route::get('/kategori/kategori', [KategoriController::class, 'index'])->name('kategori');
    // Route::get('/inven/create', [InventarisController::class], 'create')->name('inven.create');
    // Route::get('/inven/create', 'InventarisController@create')->name('inven.create');
    Route::get('/mutasi', [MutasiController::class, 'index'])->name('mutasi');

    Route::resource('inven', 'InventarisController');
    Route::resource('kategori', 'KategoriController');
});

Route::post('kategori.store', [KategoriController::class, 'store']);
// Route::post('kategori.store', 'KategoriController@store');

Route::post('store-data', [InventarisController::class, 'store']);
// Route::post('store-data', 'InventarisController@store');

Route::get('/create', function () {
    return view('inven.create');
})->middleware(['auth'])->name('create');

Route::get('/kategori.create', function () {
    return view('kategori.create');
})->middleware(['auth'])->name('kategori.create');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/kfd', function () {
    return view('kfd');
})->middleware(['auth'])->name('kfd');

require __DIR__ . '/auth.php';
