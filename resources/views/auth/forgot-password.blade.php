@extends('layouts.auth', [
    'title' => 'Lupa Kata Sandi',
    'description' => 'Masukkan alamat email untuk mendapatkan tautan reset kata sandi'
])

@section('content')
<div class="mb-4 text-center">
    <div class="display-6 mb-3">🔐</div>
    <h4 class="mb-3">Lupa Kata Sandi?</h4>
    <p class="text-muted">
        Tidak masalah. Masukkan alamat email Anda dan kami akan mengirimkan tautan reset kata sandi.
    </p>
</div>

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Status Messages -->
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle"></i> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Email Address -->
    <div class="mb-3">
        <label for="email" class="form-label">
            <i class="bi bi-envelope"></i> Alamat Email
        </label>
        <input 
            id="email" 
            class="form-control @error('email') is-invalid @enderror" 
            type="email" 
            name="email" 
            value="{{ old('email') }}" 
            required 
            autofocus
            placeholder="email@contoh.com"
        >
        @error('email')
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-circle"></i> {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary btn-lg">
            <i class="bi bi-send"></i> Kirim Tautan Reset
        </button>
    </div>

    <!-- Back to Login -->
    <div class="text-center">
        <a href="{{ route('login') }}" class="text-link">
            <i class="bi bi-arrow-left"></i> Kembali ke Halaman Login
        </a>
    </div>
</form>
@endsection