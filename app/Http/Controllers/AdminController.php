<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (auth()->user()->role !== 'admin') {
            abort(403, 'Akses ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        return Inertia::render('admin/dashboard', [
            'user' => auth()->user()
        ]);
    }
}