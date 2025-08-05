@extends('layouts.auth', [
    'title' => 'Reset Kata Sandi',
    'description' => 'Masukkan kata sandi baru untuk akun Anda'
])

@section('content')
<div class="mb-4 text-center">
    <div class="display-6 mb-3">🔑</div>
    <h4 class="mb-3">Reset Kata Sandi</h4>
    <p class="text-muted">
        Masukkan kata sandi baru untuk akun Anda.
    </p>
</div>

<form method="POST" action="{{ route('password.store') }}">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $token }}">

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
            value="{{ old('email', $email) }}" 
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

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">
            <i class="bi bi-lock"></i> Kata Sandi Baru
        </label>
        <input 
            id="password" 
            class="form-control @error('password') is-invalid @enderror"
            type="password"
            name="password"
            required
            placeholder="Masukkan kata sandi baru"
        >
        @error('password')
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-circle"></i> {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">
            <i class="bi bi-lock-fill"></i> Konfirmasi Kata Sandi
        </label>
        <input 
            id="password_confirmation" 
            class="form-control @error('password_confirmation') is-invalid @enderror"
            type="password"
            name="password_confirmation"
            required
            placeholder="Konfirmasi kata sandi baru"
        >
        @error('password_confirmation')
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-circle"></i> {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary btn-lg">
            <i class="bi bi-check-circle"></i> Reset Kata Sandi
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