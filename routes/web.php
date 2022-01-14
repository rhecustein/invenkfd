<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;



Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/inventoris', [InventarisController::class, 'index'])->name('inventoris');

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/kfd', function () {
    return view('kfd');
})->middleware(['auth'])->name('kfd');

require __DIR__.'/auth.php';
