<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/pdf-storage', [PdfController::class, 'generatePdfSaveToStorage'])->name('generatePdfSaveToStorage');
    Route::get('/pdf-download', [PdfController::class, 'generatePdfAndDownload'])->name('generatePdfAndDownload');
    Route::get('/pdf-view', [PdfController::class, 'generatePdfView'])->name('generatePdfView');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
