@extends('layouts.auth', [
    'title' => 'Masuk ke Akun Anda',
    'description' => 'Masukkan email dan kata sandi untuk mengakses sistem klinik'
])

@section('content')
<form method="POST" action="{{ route('login') }}">
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
            autocomplete="username"
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
        <div class="d-flex justify-content-between align-items-center">
            <label for="password" class="form-label">
                <i class="bi bi-lock"></i> Kata Sandi
            </label>
            @if (Route::has('password.request'))
                <a class="text-link small" href="{{ route('password.request') }}">
                    Lupa kata sandi?
                </a>
            @endif
        </div>
        <input 
            id="password" 
            class="form-control @error('password') is-invalid @enderror"
            type="password"
            name="password"
            required 
            autocomplete="current-password"
            placeholder="Masukkan kata sandi"
        >
        @error('password')
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-circle"></i> {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember" name="remember">
            <label class="form-check-label" for="remember">
                Ingat saya
            </label>
        </div>
    </div>

    <!-- Login Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg">
            <i class="bi bi-box-arrow-in-right"></i> Masuk
        </button>
    </div>

    <!-- Demo Accounts Info -->
    <div class="mt-4 p-3 bg-light rounded">
        <h6 class="text-center mb-3">
            <i class="bi bi-info-circle"></i> Gunakan Akun Demo
        </h6>
        <div class="row text-center small">
            <div class="col-4">
                <div class="text-primary fw-semibold">Admin</div>
                <div class="text-muted">admin@klinik.com</div>
            </div>
            <div class="col-4">
                <div class="text-success fw-semibold">Dokter</div>
                <div class="text-muted">dokter@klinik.com</div>
            </div>
            <div class="col-4">
                <div class="text-info fw-semibold">Resepsionis</div>
                <div class="text-muted">resepsionis@klinik.com</div>
            </div>
        </div>
        <div class="text-center mt-2 small">
            <span class="text-muted">Password: </span>
            <code>password</code>
        </div>
    </div>
</form>
@endsection