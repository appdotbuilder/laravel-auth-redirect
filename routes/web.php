<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ResepsionisController;
use Illuminate\Support\Facades\Route;

Route::get('/health-check', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toISOString(),
    ]);
})->name('health-check');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Profile routes
    Route::get('/profile', function () {
        return view('profile.edit');
    })->name('profile.edit');
    
    Route::patch('/profile', function () {
        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    })->name('profile.update');
    
    Route::put('/password', function () {
        return redirect()->route('profile.edit')->with('success', 'Kata sandi berhasil diubah.');
    })->name('password.update');
    
    Route::delete('/profile', function () {
        return redirect()->route('home')->with('success', 'Akun berhasil dihapus.');
    })->name('profile.destroy');
});

// Role-based routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.dashboard');
Route::get('/resepsionis', [ResepsionisController::class, 'index'])->name('resepsionis.dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
