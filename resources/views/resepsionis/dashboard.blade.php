@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <!-- Receptionist Header -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body text-center bg-info text-white" style="background: linear-gradient(135deg, #0ea5e9, #0284c7) !important;">
                    <h1 class="display-6 mb-3">
                        📋 Panel Resepsionis
                    </h1>
                    <p class="mb-0">
                        Selamat datang, {{ Auth::user()->name }}. Kelola registrasi dan jadwal pasien klinik.
                    </p>
                </div>
            </div>

            <!-- Today's Summary -->
            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-success mb-3">👥</div>
                            <h5 class="card-title">Pasien Hari Ini</h5>
                            <h2 class="text-success mb-0">42</h2>
                            <small class="text-muted">Total kunjungan</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-primary mb-3">📝</div>
                            <h5 class="card-title">Registrasi Baru</h5>
                            <h2 class="text-primary mb-0">18</h2>
                            <small class="text-muted">Pasien baru hari ini</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-warning mb-3">⏰</div>
                            <h5 class="card-title">Antrian</h5>
                            <h2 class="text-warning mb-0">7</h2>
                            <small class="text-muted">Sedang menunggu</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm text-center h-100">
                        <div class="card-body">
                            <div class="display-4 text-info mb-3">👨‍⚕️</div>
                            <h5 class="card-title">Dokter Aktif</h5>
                            <h2 class="text-info mb-0">5</h2>
                            <small class="text-muted">Sedang praktik</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Features -->
            <div class="row g-4">
                <!-- Patient Registration -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-person-plus"></i> Registrasi Pasien
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Daftarkan pasien baru dan kelola data pasien</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-person-plus-fill"></i> Daftar Pasien Baru
                                </button>
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-search"></i> Cari Data Pasien
                                </button>
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-pencil-square"></i> Update Data Pasien
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Registrasi Terbaru:</h6>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">Andi Wijaya</div>
                                            <small class="text-muted">No. RM: 2024001 - 09:15</small>
                                        </div>
                                        <span class="badge bg-success">Baru</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">Sari Indah</div>
                                            <small class="text-muted">No. RM: 2024002 - 10:30</small>
                                        </div>
                                        <span class="badge bg-primary">Terdaftar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Queue Management -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0">
                                <i class="bi bi-list-ol"></i> Manajemen Antrian
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Kelola antrian pasien dan panggilan</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-warning" disabled>
                                    <i class="bi bi-plus-circle"></i> Tambah ke Antrian
                                </button>
                                <button class="btn btn-outline-warning" disabled>
                                    <i class="bi bi-megaphone"></i> Panggil Pasien
                                </button>
                                <button class="btn btn-outline-warning" disabled>
                                    <i class="bi bi-eye"></i> Lihat Antrian
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Antrian Saat Ini:</h6>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">No. A001 - Budi Santoso</div>
                                            <small class="text-muted">Dr. Sarah - Ruang 1</small>
                                        </div>
                                        <span class="badge bg-success">Sedang Dilayani</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">No. A002 - Lina Dewi</div>
                                            <small class="text-muted">Dr. Sarah - Ruang 1</small>
                                        </div>
                                        <span class="badge bg-warning">Menunggu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Appointment Scheduling -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-calendar-week"></i> Penjadwalan
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Atur jadwal dokter dan janji temu pasien</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-calendar-plus"></i> Buat Janji Temu
                                </button>
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-calendar-check"></i> Lihat Jadwal Dokter
                                </button>
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-calendar-x"></i> Batalkan Janji
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Jadwal Hari Ini:</h6>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-success fw-bold">Dr. Sarah</div>
                                            <small class="text-muted">08:00-12:00</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-primary fw-bold">Dr. Ahmad</div>
                                            <small class="text-muted">13:00-17:00</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-warning fw-bold">Dr. Rina</div>
                                            <small class="text-muted">14:00-18:00</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-2 bg-light rounded text-center">
                                            <div class="text-muted fw-bold">Dr. Budi</div>
                                            <small class="text-muted">Libur</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Patient Information -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-info-circle"></i> Informasi Pasien
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Kelola informasi dan komunikasi dengan pasien</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-telephone"></i> Hubungi Pasien
                                </button>
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-envelope"></i> Kirim Notifikasi
                                </button>
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-printer"></i> Cetak Kartu Pasien
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Notifikasi Pending:</h6>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold">Reminder Kontrol</div>
                                            <small class="text-muted">2 pasien</small>
                                        </div>
                                        <small class="text-muted">Kontrol diabetes minggu depan</small>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold">Konfirmasi Janji</div>
                                            <small class="text-muted">5 pasien</small>
                                        </div>
                                        <small class="text-muted">Janji temu besok pagi</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reports -->
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-file-earmark-text"></i> Laporan Harian
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-muted mb-4">Ringkasan aktivitas resepsionis hari ini</p>
                                    
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <div class="text-center p-3 bg-light rounded">
                                                <div class="h4 text-success mb-0">42</div>
                                                <small class="text-muted">Total Pasien</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-center p-3 bg-light rounded">
                                                <div class="h4 text-primary mb-0">18</div>
                                                <small class="text-muted">Pasien Baru</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-center p-3 bg-light rounded">
                                                <div class="h4 text-warning mb-0">24</div>
                                                <small class="text-muted">Pasien Lama</small>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-center p-3 bg-light rounded">
                                                <div class="h4 text-info mb-0">15</div>
                                                <small class="text-muted">Janji Temu</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-secondary" disabled>
                                            <i class="bi bi-download"></i> Export Laporan
                                        </button>
                                        <button class="btn btn-outline-secondary" disabled>
                                            <i class="bi bi-printer"></i> Cetak Laporan
                                        </button>
                                        <button class="btn btn-outline-secondary" disabled>
                                            <i class="bi bi-graph-up"></i> Lihat Statistik
                                        </button>
                                    </div>
                                </div>
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