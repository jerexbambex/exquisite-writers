<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminTermsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('adminIndex');
    
    Route::patch('/mode/{user}', [AdminHomeController::class, 'mode'])->name('mode');

    // Terms
    Route::get('/terms', [AdminTermsController::class, 'index'])->name('adminTermsIndex');
    Route::post('/terms', [AdminTermsController::class, 'store'])->name('adminTermsStore');
    Route::get('/terms/create', [AdminTermsController::class, 'create'])->name('adminTermsCreate');
    Route::get('/terms/edit/{term}', [AdminTermsController::class, 'edit'])->name('adminTermsEdit');
    Route::patch('/terms/edit/{term}', [AdminTermsController::class, 'update'])->name('adminTermsUpdate');
});
