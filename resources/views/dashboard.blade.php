@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <!-- Welcome Header -->
            <div class="card mb-4">
                <div class="card-body text-center bg-gradient" style="background: linear-gradient(135deg, #2563eb, #059669);">
                    <h1 class="text-white display-6 mb-3">
                        🎉 Selamat Datang, {{ Auth::user()->name }}!
                    </h1>
                    <p class="text-white-50 mb-0">
                        Anda masuk sebagai: <span class="badge bg-light text-dark">{{ ucfirst(Auth::user()->role ?? 'Pengguna') }}</span>
                    </p>
                </div>
            </div>

            <!-- Role-based Content -->
            @if(Auth::user()->role === 'admin')
                <!-- Admin Dashboard -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">👑</div>
                                <h5 class="card-title text-primary">Panel Admin</h5>
                                <p class="card-text text-muted">Kelola seluruh sistem klinik</p>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">
                                    <i class="bi bi-gear"></i> Buka Panel Admin
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">👥</div>
                                <h5 class="card-title text-success">Manajemen Pengguna</h5>
                                <p class="card-text text-muted">Kelola akun dokter dan resepsionis</p>
                                <button class="btn btn-success" disabled>
                                    <i class="bi bi-people"></i> Kelola Pengguna
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">📊</div>
                                <h5 class="card-title text-info">Laporan Sistem</h5>
                                <p class="card-text text-muted">Lihat statistik dan laporan</p>
                                <button class="btn btn-info" disabled>
                                    <i class="bi bi-graph-up"></i> Lihat Laporan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            @elseif(Auth::user()->role === 'dokter')
                <!-- Doctor Dashboard -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">👨‍⚕️</div>
                                <h5 class="card-title text-success">Panel Dokter</h5>
                                <p class="card-text text-muted">Akses panel khusus dokter</p>
                                <a href="{{ route('dokter.dashboard') }}" class="btn btn-success">
                                    <i class="bi bi-clipboard2-pulse"></i> Buka Panel Dokter
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">🏥</div>
                                <h5 class="card-title text-primary">Data Pasien</h5>
                                <p class="card-text text-muted">Kelola data dan riwayat pasien</p>
                                <button class="btn btn-primary" disabled>
                                    <i class="bi bi-person-lines-fill"></i> Kelola Pasien
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">💊</div>
                                <h5 class="card-title text-warning">Resep Obat</h5>
                                <p class="card-text text-muted">Tulis dan kelola resep obat</p>
                                <button class="btn btn-warning" disabled>
                                    <i class="bi bi-prescription2"></i> Kelola Resep
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            @elseif(Auth::user()->role === 'resepsionis')
                <!-- Receptionist Dashboard -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">📋</div>
                                <h5 class="card-title text-info">Panel Resepsionis</h5>
                                <p class="card-text text-muted">Akses panel resepsionis</p>
                                <a href="{{ route('resepsionis.dashboard') }}" class="btn btn-info">
                                    <i class="bi bi-clipboard-check"></i> Buka Panel
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">📅</div>
                                <h5 class="card-title text-primary">Jadwal Dokter</h5>
                                <p class="card-text text-muted">Kelola jadwal praktik dokter</p>
                                <button class="btn btn-primary" disabled>
                                    <i class="bi bi-calendar-week"></i> Kelola Jadwal
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center">
                                <div class="display-4 mb-3">📝</div>
                                <h5 class="card-title text-success">Registrasi Pasien</h5>
                                <p class="card-text text-muted">Daftarkan pasien baru</p>
                                <button class="btn btn-success" disabled>
                                    <i class="bi bi-person-plus"></i> Registrasi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                <!-- Default Dashboard -->
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center py-5">
                                <div class="display-4 mb-4">🏥</div>
                                <h3 class="mb-3">Selamat Datang di Sistem Klinik</h3>
                                <p class="text-muted mb-4">
                                    Anda berhasil masuk ke sistem. Silakan hubungi administrator untuk mendapatkan akses yang sesuai.
                                </p>
                                <div class="alert alert-info">
                                    <i class="bi bi-info-circle"></i>
                                    Jika Anda tidak memiliki peran yang tepat, silakan hubungi administrator sistem.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Quick Actions -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">
                                <i class="bi bi-lightning"></i> Aksi Cepat
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-3 mb-3">
                                    <button class="btn btn-outline-primary w-100" disabled>
                                        <i class="bi bi-person-check d-block mb-2" style="font-size: 2rem;"></i>
                                        Lihat Profil
                                    </button>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <button class="btn btn-outline-success w-100" disabled>
                                        <i class="bi bi-calendar-plus d-block mb-2" style="font-size: 2rem;"></i>
                                        Jadwal Hari Ini
                                    </button>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <button class="btn btn-outline-info w-100" disabled>
                                        <i class="bi bi-bell d-block mb-2" style="font-size: 2rem;"></i>
                                        Notifikasi
                                    </button>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <button class="btn btn-outline-warning w-100" disabled>
                                        <i class="bi bi-question-circle d-block mb-2" style="font-size: 2rem;"></i>
                                        Bantuan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection