<?php

namespace App\Http\Controllers;

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

        return view('resepsionis.dashboard');
    }
}