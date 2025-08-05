import { type SharedData } from '@/types';
import { Head, Link, usePage, router } from '@inertiajs/react';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    const handleLogout = () => {
        router.post(route('logout'));
    };

    return (
        <>
            <Head title="Sistem Manajemen Klinik">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
            </Head>
            <div className="flex min-h-screen flex-col items-center bg-gradient-to-br from-blue-50 to-green-50 p-6 text-gray-800 lg:justify-center lg:p-8">
                <header className="mb-6 w-full max-w-[335px] text-sm lg:max-w-4xl">
                    <nav className="flex items-center justify-end gap-4">
                        {auth.user ? (
                            <div className="flex gap-2">
                                <Link
                                    href={route('dashboard')}
                                    className="inline-block rounded-lg bg-blue-600 px-6 py-2.5 text-sm font-medium text-white shadow-md hover:bg-blue-700 transition-colors"
                                >
                                    Dashboard
                                </Link>
                                <button
                                    onClick={handleLogout}
                                    className="inline-block rounded-lg bg-red-600 px-6 py-2.5 text-sm font-medium text-white shadow-md hover:bg-red-700 transition-colors"
                                >
                                    Keluar
                                </button>
                            </div>
                        ) : (
                            <Link
                                href={route('login')}
                                className="inline-block rounded-lg bg-blue-600 px-6 py-2.5 text-sm font-medium text-white shadow-md hover:bg-blue-700 transition-colors"
                            >
                                Masuk
                            </Link>
                        )}
                    </nav>
                </header>
                <div className="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 lg:grow">
                    <main className="flex w-full max-w-[335px] flex-col lg:max-w-6xl lg:flex-row lg:gap-12">
                        {/* Left Content */}
                        <div className="flex-1 rounded-2xl bg-white p-8 shadow-xl lg:p-12">
                            <div className="text-center lg:text-left">
                                <div className="mb-6">
                                    <h1 className="mb-4 text-4xl font-bold text-gray-900 lg:text-5xl">
                                        🏥 Sistem Manajemen Klinik
                                    </h1>
                                    <p className="text-xl text-gray-600 lg:text-2xl">
                                        Platform terpadu untuk mengelola operasional klinik dengan efisien
                                    </p>
                                </div>

                                {/* Features */}
                                <div className="mb-8 grid gap-6 lg:grid-cols-2">
                                    <div className="rounded-lg bg-blue-50 p-4">
                                        <div className="mb-2 text-2xl">👨‍⚕️</div>
                                        <h3 className="font-semibold text-blue-900">Panel Dokter</h3>
                                        <p className="text-sm text-blue-700">Kelola data pasien dan riwayat medis</p>
                                    </div>
                                    <div className="rounded-lg bg-purple-50 p-4">
                                        <div className="mb-2 text-2xl">📋</div>
                                        <h3 className="font-semibold text-purple-900">Panel Resepsionis</h3>
                                        <p className="text-sm text-purple-700">Atur jadwal dan registrasi pasien</p>
                                    </div>
                                    <div className="rounded-lg bg-green-50 p-4">
                                        <div className="mb-2 text-2xl">🔐</div>
                                        <h3 className="font-semibold text-green-900">Panel Admin</h3>
                                        <p className="text-sm text-green-700">Kontrol penuh sistem klinik</p>
                                    </div>
                                    <div className="rounded-lg bg-orange-50 p-4">
                                        <div className="mb-2 text-2xl">🛡️</div>
                                        <h3 className="font-semibold text-orange-900">Keamanan Terjamin</h3>
                                        <p className="text-sm text-orange-700">Akses berbasis peran pengguna</p>
                                    </div>
                                </div>

                                {/* CTA */}
                                <div className="text-center">
                                    {!auth.user && (
                                        <Link
                                            href={route('login')}
                                            className="inline-block rounded-lg bg-gradient-to-r from-blue-600 to-green-600 px-8 py-4 text-lg font-semibold text-white shadow-lg hover:from-blue-700 hover:to-green-700 transform hover:scale-105 transition-all duration-200"
                                        >
                                            🚀 Mulai Sekarang
                                        </Link>
                                    )}
                                </div>
                            </div>

                            <footer className="mt-12 border-t pt-6 text-center text-sm text-gray-500">
                                <div className="space-y-3">
                                    <p>Sistem manajemen klinik yang mudah dan aman</p>
                                    <div className="text-xs bg-gray-50 p-3 rounded-lg">
                                        <p className="font-semibold mb-2">Akun Demo:</p>
                                        <div className="grid grid-cols-1 md:grid-cols-3 gap-2 text-left">
                                            <div>
                                                <p><strong>Admin:</strong></p>
                                                <p>admin@klinik.com</p>
                                            </div>
                                            <div>
                                                <p><strong>Dokter:</strong></p>
                                                <p>dokter@klinik.com</p>
                                            </div>
                                            <div>
                                                <p><strong>Resepsionis:</strong></p>
                                                <p>resepsionis@klinik.com</p>
                                            </div>
                                        </div>
                                        <p className="mt-2 text-center">Password: <code>password</code></p>
                                    </div>
                                    <p>Built with ❤️ menggunakan Laravel & React</p>
                                </div>
                            </footer>
                        </div>

                        {/* Right Visual */}
                        <div className="mt-8 flex-1 lg:mt-0">
                            <div className="rounded-2xl bg-gradient-to-br from-blue-100 to-green-100 p-8 shadow-xl">
                                <div className="space-y-6">
                                    <div className="text-center">
                                        <div className="text-6xl mb-4">🏥</div>
                                        <h2 className="text-2xl font-bold text-gray-800">Alur Kerja Terintegrasi</h2>
                                    </div>
                                    
                                    <div className="space-y-4">
                                        <div className="flex items-center gap-4 rounded-lg bg-white p-4 shadow-md">
                                            <div className="text-2xl">1️⃣</div>
                                            <div>
                                                <h4 className="font-semibold">Login Sesuai Peran</h4>
                                                <p className="text-sm text-gray-600">Admin, Dokter, atau Resepsionis</p>
                                            </div>
                                        </div>
                                        
                                        <div className="flex items-center gap-4 rounded-lg bg-white p-4 shadow-md">
                                            <div className="text-2xl">2️⃣</div>
                                            <div>
                                                <h4 className="font-semibold">Akses Dashboard</h4>
                                                <p className="text-sm text-gray-600">Sesuai hak akses pengguna</p>
                                            </div>
                                        </div>
                                        
                                        <div className="flex items-center gap-4 rounded-lg bg-white p-4 shadow-md">
                                            <div className="text-2xl">3️⃣</div>
                                            <div>
                                                <h4 className="font-semibold">Kelola Data</h4>
                                                <p className="text-sm text-gray-600">Pasien, jadwal, dan riwayat medis</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </>
    );
}