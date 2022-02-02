<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SupportController;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/inven/inventaris', [InventarisController::class, 'index'])->name('inventaris');
    Route::get('/inven/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/mutasi', [MutasiController::class, 'index'])->name('mutasi');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/support', [SupportController::class, 'index'])->name('support');
    Route::get('/exportExcel', [LaporanController::class, 'exportExcel'])->name('exportExcel');
    Route::get('/trash', [InventarisController::class, 'trash_list'])->name('trash');
    Route::get('/trash/kategori', [KategoriController::class, 'trash_list'])->name('trash.kategori');
    Route::resource('inven', 'InventarisController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('user', 'UserController');
});

Route::get('restore/{id}', [InventarisController::class, 'restore']);

Route::get('restore/kategori/{id}', [KategoriController::class, 'restore']);

Route::get('delete-permanent/{id}', [InventarisController::class, 'delete_permanent']);

Route::get('delete-permanent/kategori/{id}', [KategoriController::class, 'delete_permanent']);

Route::post('kategori.store', [KategoriController::class, 'store']);

Route::post('store-data', [InventarisController::class, 'store']);

Route::get('kategori.edit/{id}', [KategoriController::class, 'edit']);

Route::put('update-kategori/{id}', [KategoriController::class, 'update']);

Route::get('kategori.delete/{id}', [KategoriController::class, 'destroy']);

Route::get('edit/{id}', [InventarisController::class, 'edit']);

Route::put('update-data/{id}', [InventarisController::class, 'update']);

Route::get('delete/{id}', [InventarisController::class, 'destroy']);

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
