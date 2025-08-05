@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Profile Header -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body text-center bg-primary text-white" style="background: linear-gradient(135deg, #2563eb, #1d4ed8) !important;">
                    <h1 class="display-6 mb-3">
                        👤 Profil Pengguna
                    </h1>
                    <p class="mb-0">
                        Kelola informasi profil dan keamanan akun Anda
                    </p>
                </div>
            </div>

            <!-- Profile Form -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="bi bi-person-gear"></i> Informasi Profil
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                <i class="bi bi-person"></i> Nama Lengkap
                            </label>
                            <input 
                                id="name" 
                                class="form-control @error('name') is-invalid @enderror" 
                                type="text" 
                                name="name" 
                                value="{{ old('name', Auth::user()->name) }}" 
                                required 
                                autofocus
                            >
                            @error('name')
                                <div class="invalid-feedback">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope"></i> Alamat Email
                            </label>
                            <input 
                                id="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                type="email" 
                                name="email" 
                                value="{{ old('email', Auth::user()->email) }}" 
                                required 
                            >
                            @error('email')
                                <div class="invalid-feedback">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Role (Read Only) -->
                        <div class="mb-3">
                            <label for="role" class="form-label">
                                <i class="bi bi-shield-check"></i> Peran
                            </label>
                            <input 
                                id="role" 
                                class="form-control" 
                                type="text" 
                                value="{{ ucfirst(Auth::user()->role ?? 'Pengguna') }}" 
                                readonly
                            >
                            <div class="form-text">
                                Peran pengguna tidak dapat diubah. Hubungi administrator untuk perubahan.
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Change Password -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">
                        <i class="bi bi-key"></i> Ubah Kata Sandi
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('PUT')

                        <!-- Current Password -->
                        <div class="mb-3">
                            <label for="current_password" class="form-label">
                                <i class="bi bi-lock"></i> Kata Sandi Saat Ini
                            </label>
                            <input 
                                id="current_password" 
                                class="form-control @error('current_password') is-invalid @enderror" 
                                type="password" 
                                name="current_password" 
                                required
                            >
                            @error('current_password')
                                <div class="invalid-feedback">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- New Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="bi bi-key"></i> Kata Sandi Baru
                            </label>
                            <input 
                                id="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                type="password" 
                                name="password" 
                                required
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
                                <i class="bi bi-key-fill"></i> Konfirmasi Kata Sandi Baru
                            </label>
                            <input 
                                id="password_confirmation" 
                                class="form-control @error('password_confirmation') is-invalid @enderror" 
                                type="password" 
                                name="password_confirmation" 
                                required
                            >
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    <i class="bi bi-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Save Password Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-shield-lock"></i> Ubah Kata Sandi
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Delete Account -->
            <div class="card border-0 shadow-sm mt-4 border-danger">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-exclamation-triangle"></i> Zona Berbahaya
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Setelah akun Anda dihapus, semua sumber daya dan data akan dihapus secara permanen.
                        Sebelum menghapus akun, harap unduh data atau informasi yang ingin Anda simpan.
                    </p>
                    
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="bi bi-trash"></i> Hapus Akun
                    </button>
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mt-4">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle"></i> Konfirmasi Hapus Akun
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>
                    Apakah Anda yakin ingin menghapus akun Anda? 
                    Setelah akun dihapus, semua sumber daya dan data akan dihapus secara permanen.
                </p>
                
                <form method="POST" action="{{ route('profile.destroy') }}" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    
                    <div class="mb-3">
                        <label for="delete_password" class="form-label">
                            Masukkan kata sandi untuk konfirmasi:
                        </label>
                        <input 
                            id="delete_password" 
                            class="form-control" 
                            type="password" 
                            name="password" 
                            placeholder="Kata sandi Anda"
                            required
                        >
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" form="deleteForm" class="btn btn-danger">
                    <i class="bi bi-trash"></i> Ya, Hapus Akun
                </button>
            </div>
        </div>
    </div>
</div>
@endsection