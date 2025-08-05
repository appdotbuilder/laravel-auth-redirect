<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ResepsionisController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/health-check', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toISOString(),
    ]);
})->name('health-check');

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

// Role-based routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.dashboard');
Route::get('/resepsionis', [ResepsionisController::class, 'index'])->name('resepsionis.dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
