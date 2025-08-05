<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DokterController extends Controller
{
    /**
     * Display the dokter dashboard.
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role !== 'dokter') {
            abort(403, 'Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        return Inertia::render('dokter/dashboard', [
            'user' => auth()->user()
        ]);
    }
}