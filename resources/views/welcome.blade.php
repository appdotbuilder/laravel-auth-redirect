@extends('layouts.app')

@section('content')
<div class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="text-center text-lg-start">
                    <h1 class="display-4 fw-bold gradient-text mb-4">
                        🏥 Sistem Manajemen Klinik
                    </h1>
                    <p class="lead text-muted mb-5">
                        Platform terpadu untuk mengelola operasional klinik dengan efisien dan aman
                    </p>

                    <!-- Features -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card feature-card h-100 border-0 bg-primary bg-opacity-10">
                                <div class="card-body text-center">
                                    <div class="display-6 mb-3">👨‍⚕️</div>
                                    <h5 class="card-title text-primary">Panel Dokter</h5>
                                    <p class="card-text text-muted">Kelola data pasien dan riwayat medis dengan mudah</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card feature-card h-100 border-0 bg-info bg-opacity-10">
                                <div class="card-body text-center">
                                    <div class="display-6 mb-3">📋</div>
                                    <h5 class="card-title text-info">Panel Resepsionis</h5>
                                    <p class="card-text text-muted">Atur jadwal dan registrasi pasien secara efisien</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card feature-card h-100 border-0 bg-success bg-opacity-10">
                                <div class="card-body text-center">
                                    <div class="display-6 mb-3">🔐</div>
                                    <h5 class="card-title text-success">Panel Admin</h5>
                                    <p class="card-text text-muted">Kontrol penuh sistem dan manajemen pengguna</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card feature-card h-100 border-0 bg-warning bg-opacity-10">
                                <div class="card-body text-center">
                                    <div class="display-6 mb-3">🛡️</div>
                                    <h5 class="card-title text-warning">Keamanan Terjamin</h5>
                                    <p class="card-text text-muted">Akses berbasis peran untuk setiap pengguna</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    @guest
                        <div class="text-center text-lg-start">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 py-3">
                                <i class="bi bi-rocket-takeoff"></i> Mulai Sekarang
                            </a>
                        </div>
                    @endguest
                </div>
            </div>

            <!-- Right Visual -->
            <div class="col-lg-6">
                <div class="card border-0 bg-gradient" style="background: linear-gradient(135deg, #dbeafe, #dcfce7);">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <div class="display-1 mb-3">🏥</div>
                            <h3 class="fw-bold text-dark">Alur Kerja Terintegrasi</h3>
                        </div>
                        
                        <div class="d-grid gap-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-4 me-3">1️⃣</div>
                                        <div>
                                            <h6 class="mb-1 fw-semibold">Login Sesuai Peran</h6>
                                            <small class="text-muted">Admin, Dokter, atau Resepsionis</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-4 me-3">2️⃣</div>
                                        <div>
                                            <h6 class="mb-1 fw-semibold">Akses Dashboard</h6>
                                            <small class="text-muted">Sesuai hak akses pengguna</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-4 me-3">3️⃣</div>
                                        <div>
                                            <h6 class="mb-1 fw-semibold">Kelola Data</h6>
                                            <small class="text-muted">Pasien, jadwal, dan riwayat medis</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Demo Accounts Info -->
        @guest
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-header bg-light text-center">
                        <h5 class="mb-0">🔑 Akun Demo untuk Pengujian</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="p-3 border rounded">
                                    <h6 class="fw-bold text-primary">👑 Admin</h6>
                                    <p class="mb-1"><strong>Email:</strong> admin@klinik.com</p>
                                    <p class="mb-0 text-muted">Akses penuh sistem</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-3 border rounded">
                                    <h6 class="fw-bold text-success">👨‍⚕️ Dokter</h6>
                                    <p class="mb-1"><strong>Email:</strong> dokter@klinik.com</p>
                                    <p class="mb-0 text-muted">Kelola pasien & rekam medis</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-3 border rounded">
                                    <h6 class="fw-bold text-info">📋 Resepsionis</h6>
                                    <p class="mb-1"><strong>Email:</strong> resepsionis@klinik.com</p>
                                    <p class="mb-0 text-muted">Registrasi & jadwal pasien</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p class="mb-0">
                                <i class="bi bi-key"></i> 
                                <strong>Password untuk semua akun:</strong> 
                                <code class="bg-light px-2 py-1 rounded">password</code>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endguest
    </div>
</div>
@endsection