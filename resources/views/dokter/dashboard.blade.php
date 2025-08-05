@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <!-- Doctor Header -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body text-center bg-success text-white" style="background: linear-gradient(135deg, #059669, #047857) !important;">
                    <h1 class="display-6 mb-3">
                        👨‍⚕️ Panel Dokter
                    </h1>
                    <p class="mb-0">
                        Selamat datang, Dr. {{ Auth::user()->name }}. Kelola pasien dan layanan medis Anda.
                    </p>
                </div>
            </div>

            <!-- Today's Schedule -->
            <div class="row g-4 mb-5">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">
                                <i class="bi bi-calendar-day"></i> Jadwal Hari Ini - {{ date('d F Y') }}
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-3 border rounded bg-light">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <strong class="text-primary">08:00 - 12:00</strong>
                                            <span class="badge bg-success">Aktif</span>
                                        </div>
                                        <div class="small text-muted">
                                            <i class="bi bi-geo-alt"></i> Ruang Praktik 1<br>
                                            <i class="bi bi-people"></i> 8 Pasien terjadwal
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 border rounded">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <strong class="text-warning">13:00 - 17:00</strong>
                                            <span class="badge bg-warning">Akan Datang</span>
                                        </div>
                                        <div class="small text-muted">
                                            <i class="bi bi-geo-alt"></i> Ruang Praktik 1<br>
                                            <i class="bi bi-people"></i> 6 Pasien terjadwal
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center mt-3">
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-calendar-week"></i> Lihat Jadwal Lengkap
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">
                                <i class="bi bi-graph-up"></i> Statistik Hari Ini
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-2 text-center">
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded">
                                        <div class="h4 text-success mb-0">12</div>
                                        <small class="text-muted">Pasien Diperiksa</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded">
                                        <div class="h4 text-primary mb-0">8</div>
                                        <small class="text-muted">Resep Ditulis</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded">
                                        <div class="h4 text-warning mb-0">3</div>
                                        <small class="text-muted">Rujukan</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded">
                                        <div class="h4 text-info mb-0">2</div>
                                        <small class="text-muted">Follow Up</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Features -->
            <div class="row g-4">
                <!-- Patient Management -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-person-lines-fill"></i> Manajemen Pasien
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Kelola data pasien dan riwayat medis</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-search"></i> Cari Pasien
                                </button>
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-person-plus"></i> Tambah Pasien Baru
                                </button>
                                <button class="btn btn-outline-info" disabled>
                                    <i class="bi bi-file-medical"></i> Riwayat Medis
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Pasien Terbaru:</h6>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">Budi Santoso</div>
                                            <small class="text-muted">Pemeriksaan rutin - 10:30</small>
                                        </div>
                                        <span class="badge bg-success">Selesai</span>
                                    </div>
                                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <div>
                                            <div class="fw-semibold">Siti Aminah</div>
                                            <small class="text-muted">Kontrol diabetes - 11:15</small>
                                        </div>
                                        <span class="badge bg-warning">Menunggu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medical Records -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-clipboard2-pulse"></i> Rekam Medis
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Akses dan kelola rekam medis pasien</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-file-earmark-medical"></i> Buat Rekam Medis
                                </button>
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-eye"></i> Lihat Riwayat
                                </button>
                                <button class="btn btn-outline-success" disabled>
                                    <i class="bi bi-printer"></i> Cetak Laporan
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Rekam Medis Terbaru:</h6>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold">Pemeriksaan Jantung</div>
                                            <small class="text-muted">2 jam lalu</small>
                                        </div>
                                        <small class="text-muted">Ahmad Rizki - Hasil normal</small>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold">Konsultasi Diabetes</div>
                                            <small class="text-muted">1 hari lalu</small>
                                        </div>
                                        <small class="text-muted">Maria Sari - Kontrol gula darah</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prescriptions -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0">
                                <i class="bi bi-prescription2"></i> Resep Obat
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Tulis dan kelola resep obat untuk pasien</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-warning" disabled>
                                    <i class="bi bi-plus-circle"></i> Tulis Resep Baru
                                </button>
                                <button class="btn btn-outline-warning" disabled>
                                    <i class="bi bi-list-ul"></i> Daftar Resep
                                </button>
                                <button class="btn btn-outline-warning" disabled>
                                    <i class="bi bi-capsule"></i> Database Obat
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Resep Hari Ini:</h6>
                                <div class="row g-2 text-center">
                                    <div class="col-4">
                                        <div class="p-2 bg-light rounded">
                                            <div class="fw-bold text-success">8</div>
                                            <small class="text-muted">Resep Baru</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-2 bg-light rounded">
                                            <div class="fw-bold text-warning">3</div>
                                            <small class="text-muted">Pending</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="p-2 bg-light rounded">
                                            <div class="fw-bold text-primary">11</div>
                                            <small class="text-muted">Total</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Appointments -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-calendar-check"></i> Jadwal Konsultasi
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Kelola jadwal dan janji temu dengan pasien</p>
                            
                            <div class="d-grid gap-2">
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-calendar-plus"></i> Buat Jadwal Baru
                                </button>
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-calendar-event"></i> Lihat Semua Jadwal
                                </button>
                                <button class="btn btn-outline-primary" disabled>
                                    <i class="bi bi-clock"></i> Atur Waktu Praktik
                                </button>
                            </div>

                            <div class="mt-4">
                                <h6 class="text-muted">Jadwal Mendatang:</h6>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold">Konsultasi Lanjutan</div>
                                            <small class="text-primary">13:30</small>
                                        </div>
                                        <small class="text-muted">Dewi Lestari - Kontrol hipertensi</small>
                                    </div>
                                    <div class="list-group-item px-0">
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold">Pemeriksaan Rutin</div>
                                            <small class="text-primary">14:15</small>
                                        </div>
                                        <small class="text-muted">Rudi Hartono - Check up tahunan</small>
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