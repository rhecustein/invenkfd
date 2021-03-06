<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\UploadController;
use App\Models\User;
Use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    Route::get('/inven/inventaris', [InventarisController::class, 'index'])->name('inventaris');

    Route::get('/inven/kategori', [KategoriController::class, 'index'])->name('kategori');

    // Route::get('/mutasi', [MutasiController::class, 'index'])->name('mutasi');

    // Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

    // Route::get('filter/tanggal', [LaporanController::class, 'laporanFilter'])->name('filter/tanggal');

    Route::get('/setting', [SettingController::class, 'index'])->name('setting');

    Route::get('/support', [SupportController::class, 'index'])->name('support');

    Route::get('/trash', [InventarisController::class, 'trash_list'])->name('trash');

    Route::get('/trash/kategori', [KategoriController::class, 'trash_list'])->name('trash.kategori');

    Route::get('trash/lokasi', [LokasiController::class, 'trash_list'])->name('trash.lokasi');

    Route::resource('inven', 'InventarisController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('lokasi', 'LokasiController');

    Route::get('restore/{id}', [InventarisController::class, 'restore']);

    Route::get('restore/kategori/{id}', [KategoriController::class, 'restore']);

    Route::get('restore/lokasi/{id}', [LokasiController::class, 'restore']);

    Route::get('delete-permanent/{id}', [InventarisController::class, 'delete_permanent']);

    Route::get('delete-permanent/kategori/{id}', [KategoriController::class, 'delete_permanent']);

    Route::get('delete-permanent/lokasi/{id}', [LokasiController::class, 'delete_permanent']);

    Route::get('destroy-role/{id}', [RoleController::class, 'destroy']);

    Route::post('kategori.store', [KategoriController::class, 'store']);

    Route::post('store-data', [InventarisController::class, 'store']);

    // Route::post('laporan_filter', [LaporanController::class, 'laporanFilter']);

    Route::get('kategori.edit/{id}', [KategoriController::class, 'edit']);

    Route::get('edit/{id}', [InventarisController::class, 'edit']);

    Route::get('role.edit/{id}', [RoleController::class, 'edit']);

    Route::get('lokasi.edit/{id}', [LokasiController::class, 'edit']);

    Route::put('update-kategori/{id}', [KategoriController::class, 'update']);

    Route::put('update-data/{id}', [InventarisController::class, 'update']);

    Route::put('update-role/{id}', [RoleController::class, 'update']);

    Route::put('update-lokasi/{id}', [LokasiController::class, 'update']);

    Route::get('kategori.delete/{id}', [KategoriController::class, 'destroy']);

    Route::get('delete/{id}', [InventarisController::class, 'destroy']);

    Route::get('lokasi.destroy/{id}', [LokasiController::class, 'destroy']);

    Route::post('/crop',[ProfileController::class, 'crop'])->name('user.crop');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function (){

    Route::get('/mutasi', [MutasiController::class, 'index'])->name('mutasi');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

    Route::get('filter/tanggal', [LaporanController::class, 'laporanFilter'])->name('filter/tanggal');

    Route::post('laporan_filter', [LaporanController::class, 'laporanFilter']);

    Route::get('/exportlaporan', [LaporanController::class, 'laporanExport'])->name('exportlaporan');

    Route::post('/importlaporan', [LaporanController::class, 'laporanImport'])->name('importlaporan');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/upload', [UploadController::class, 'upload'])->name('upload');

    Route::post('/upload/proses', [UploadController::class, 'proses_upload']);

});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {return view('dashboard'); })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/kfd', function () {
    return view('kfd');
})->middleware(['auth'])->name('kfd');

require __DIR__ . '/auth.php';
