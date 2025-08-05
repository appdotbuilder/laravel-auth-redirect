@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <!-- Admin Header -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body text-center bg-primary text-white" style="background: linear-gradient(135deg, #2563eb, #1d4ed8) !important;">
                    <h1 class="display-6 mb-3">
                        👑 Panel Administator Klinik
                    </h1>
                    <p class="mb-0">
                        Selamat datang, {{ Auth::user()->name }}. Anda memiliki akses penuh ke sistem klinik.
                    </p>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-3">👥</div>
                            <h5 class="card-title">Total Pengguna</h5>
                            <h2 class="text-primary mb-0">25</h2>
                            <small class="text-muted">Aktif dalam sistem</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-success mb-3">👨‍⚕️</div>
                            <h5 class="card-title">Dokter</h5>
                            <h2 class="text-success mb-0">8</h2>
                            <small class="text-muted">Dokter terdaftar</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-info mb-3">📋</div>
                            <h5 class="card-title">Resepsionis</h5>
                            <h2 class="text-info mb-0">12</h2>
                            <small class="text-muted">Staff resepsionis</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-warning mb-3">🏥</div>
                            <h5 class="card-title">Pasien</h5>
                            <h2 class="text-warning mb-0">1,247</h2>
                            <small class="text-muted">Total pasien</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management Sections -->
            <div class="row g-4">
                <!-- User Management -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-people"></i> Manajemen Pengguna
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Kelola akun pengguna sistem klinik</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-person-plus"></i> Tambah Pengguna Baru
                                </button>
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-person-gear"></i> Kelola Hak Akses
                                </button>
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-person-check"></i> Verifikasi Akun
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Pengguna Terbaru:</h6>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">Dr. Sarah Putri</div>
                                            <small class="text-muted">Dokter - Terdaftar 2 hari lalu</small>
                                        </div>
                                        <span class="badge bg-success">Aktif</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">Andi Pratama</div>
                                            <small class="text-muted">Resepsionis - Terdaftar 1 minggu lalu</small>
                                        </div>
                                        <span class="badge bg-warning">Pending</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- System Settings -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-gear"></i> Pengaturan Sistem
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Konfigurasi dan pengaturan sistem klinik</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-building"></i> Pengaturan Klinik
                                </button>
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-calendar-week"></i> Pengaturan Jadwal
                                </button>
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-shield-check"></i> Keamanan Sistem
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Status Sistem:</h6>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-success">
                                                <i class="bi bi-check-circle"></i> Database
                                            </div>
                                            <small class="text-muted">Online</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-success">
                                                <i class="bi bi-check-circle"></i> Server
                                            </div>
                                            <small class="text-muted">Normal</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-warning">
                                                <i class="bi bi-exclamation-triangle"></i> Backup
                                            </div>
                                            <small class="text-muted">Perlu Update</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-success">
                                                <i class="bi bi-check-circle"></i> Security
                                            </div>
                                            <small class="text-muted">Aman</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reports -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-graph-up"></i> Laporan & Statistik
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Lihat laporan dan analisis sistem</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-file-earmark-bar-graph"></i> Laporan Harian
                                </button>
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-calendar-month"></i> Laporan Bulanan
                                </button>
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-download"></i> Export Data
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Statistik Hari Ini:</h6>
                                <div class="row g-2 text-center">
                                    <div class="col-4">
                                        <div class="p-2 bg-light rounded">
                                            <div class="fw-bold text-primary">42</div>
                                            <small class="text-muted">Kunjungan</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-2 bg-light rounded">
                                            <div class="fw-bold text-success">18</div>
                                            <small class="text-muted">Pasien Baru</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-2 bg-light rounded">
                                            <div class="fw-bold text-warning">7</div>
                                            <small class="text-muted">Dokter Aktif</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Log -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0">
                                <i class="bi bi-clock-history"></i> Log Aktivitas
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Aktivitas terbaru dalam sistem</p>
                            
                            <div class="timeline">
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                            <i class="bi bi-person-plus small"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="fw-semibold">Pengguna baru terdaftar</div>
                                        <small class="text-muted">Dr. Sarah Putri - 2 jam lalu</small>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                            <i class="bi bi-check-circle small"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="fw-semibold">Backup berhasil</div>
                                        <small class="text-muted">Database backup - 4 jam lalu</small>
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                            <i class="bi bi-exclamation-triangle small"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="fw-semibold">Login gagal</div>
                                        <small class="text-muted">IP: 192.168.1.100 - 6 jam lalu</small>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-3">
                                <button class="btn btn-outline-warning btn-sm" disabled>
                                    <i class="bi bi-eye"></i> Lihat Semua Log
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Dashboard -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali ke Dashboard Utama
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection