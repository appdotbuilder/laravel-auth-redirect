<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ResepsionisController extends Controller
{
    /**
     * Display the resepsionis dashboard.
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role !== 'resepsionis') {
            abort(403, 'Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        return Inertia::render('resepsionis/dashboard', [
            'user' => auth()->user()
        ]);
    }
}