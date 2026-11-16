<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ----------------------------------------------------
// DATA DUMMY PAKET (Lengkap untuk Umroh & Haji)
// ----------------------------------------------------
$packagesData = [
    // --- KELOMPOK UMROH (ID 1 - 8) ---
    1 => [
        'id' => 1,
        'name' => 'January Umroh & Istanbul',
        'type' => 'Umroh',
        'duration' => '9 Hari',
        'badge' => 'Terlaris',
        'image' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=600',
        'description' => 'Paket umroh eksklusif digabungkan dengan wisata religi ke Istanbul, Turki. Fasilitas hotel bintang 5 tepat di pelataran Masjidil Haram.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 5', 'Visa Umroh & Turki', 'Manasik 3 Kali', 'Pembimbing Ibadah (Muthawif)', 'Handling & Zamzam 5L'],
        'jadwal' => '20 Januari - 28 Januari 2026',
        'airline' => 'Saudi Airlines (Direct)',
        'hotel_makkah' => 'Fairmont Makkah (Bintang 5)',
        'hotel_madinah' => 'Anwar Al Madinah Mövenpick',
        'price' => 'Rp 34.500.000'
    ],
    2 => [
        'id' => 2,
        'name' => 'Sacred Journey',
        'type' => 'Umroh',
        'duration' => '9 Hari',
        'badge' => 'Reguler',
        'image' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=600',
        'description' => 'Perjalanan Umroh yang nyaman dan terencana untuk meraih keberkahan di Tanah Suci.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 4', 'Visa Umroh', 'Manasik'],
        'jadwal' => '10 Desember 2026',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Sheraton Makkah',
        'hotel_madinah' => 'Crowne Madinah',
        'price' => 'Rp 30.000.000'
    ],
    3 => [
        'id' => 3,
        'name' => 'Serenity Journey',
        'type' => 'Umroh',
        'duration' => '12 Hari',
        'badge' => 'Favorit',
        'image' => 'https://images.unsplash.com/photo-1565552420067-1d6741972754?auto=format&fit=crop&q=80&w=600',
        'description' => 'Luangkan lebih banyak waktu untuk beribadah dan menikmati ketenangan di Makkah serta Madinah.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 5', 'Visa Umroh'],
        'jadwal' => '20 Desember 2026',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Swissôtel Makkah',
        'hotel_madinah' => 'Oberoi Madinah',
        'price' => 'Rp 35.000.000'
    ],
    4 => [
        'id' => 4,
        'name' => 'Graceful Journey',
        'type' => 'Umroh',
        'duration' => '12 Hari',
        'badge' => '',
        'image' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=600',
        'description' => 'Perjalanan Umroh dengan waktu lebih leluasa untuk memperdalam pengalaman spiritual.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 4', 'Visa Umroh'],
        'jadwal' => '05 Januari 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Sheraton Makkah',
        'hotel_madinah' => 'Crowne Madinah',
        'price' => 'Rp 40.000.000'
    ],
    5 => [
        'id' => 5,
        'name' => 'Spiritual Journey',
        'type' => 'Umroh',
        'duration' => '15 Hari',
        'badge' => '',
        'image' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=600',
        'description' => 'Perjalanan ibadah yang lebih panjang untuk menikmati setiap momen berharga di Tanah Suci.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 4', 'Visa Umroh'],
        'jadwal' => '10 Januari 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Sheraton Makkah',
        'hotel_madinah' => 'Crowne Madinah',
        'price' => 'Rp 45.000.000'
    ],
    6 => [
        'id' => 6,
        'name' => 'Barakah Journey',
        'type' => 'Umroh',
        'duration' => '15 Hari',
        'badge' => '',
        'image' => 'https://images.unsplash.com/photo-1565552420067-1d6741972754?auto=format&fit=crop&q=80&w=600',
        'description' => 'Rasakan perjalanan penuh keberkahan dengan waktu ibadah yang lebih leluasa.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 4', 'Visa Umroh'],
        'jadwal' => '15 Januari 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Sheraton Makkah',
        'hotel_madinah' => 'Crowne Madinah',
        'price' => 'Rp 48.000.000'
    ],
    7 => [
        'id' => 7,
        'name' => 'Faith & Discovery',
        'type' => 'Umroh',
        'duration' => '12 Hari',
        'badge' => 'Umroh Plus',
        'image' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=600',
        'description' => 'Perjalanan ibadah Umroh yang dilengkapi wisata ke Turki. Kunjungi keindahan Istanbul dan Hagia Sophia.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 4', 'Tour Turki'],
        'jadwal' => '20 Januari 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Sheraton Makkah',
        'hotel_madinah' => 'Crowne Madinah',
        'price' => 'Rp 50.000.000'
    ],
    8 => [
        'id' => 8,
        'name' => 'Explore & Worship',
        'type' => 'Umroh',
        'duration' => '12 Hari',
        'badge' => 'Umroh Plus',
        'image' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=600',
        'description' => 'Padukan perjalanan ibadah di Tanah Suci dengan pengalaman menjelajahi Dubai dan gurun pasir.',
        'fasilitas' => ['Tiket Pesawat PP', 'Hotel Bintang 5', 'Tour Dubai'],
        'jadwal' => '25 Januari 2027',
        'airline' => 'Emirates',
        'hotel_makkah' => 'Swissôtel Makkah',
        'hotel_madinah' => 'Oberoi Madinah',
        'price' => 'Rp 56.000.000'
    ],

    // --- KELOMPOK HAJI (ID 101 - 105) ---
    101 => [
        'id' => 101,
        'name' => 'Perjalanan Haji Penuh Makna',
        'type' => 'Haji',
        'duration' => '40 Hari',
        'badge' => 'Reguler 2025',
        'image' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=600',
        'description' => 'Wujudkan niat suci menuju Baitullah melalui penyelenggaraan Haji Reguler dengan rangkaian ibadah yang terencana sesuai ketentuan pemerintah.',
        'fasilitas' => ['Visa Haji Resmi', 'Maktab Pemerintah', 'Tenda Armuzna', 'Konsumsi 3x Sehari'],
        'jadwal' => '10 Juni 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Transit Standard Makkah',
        'hotel_madinah' => 'Standard Madinah',
        'price' => 'Rp 53.543.779'
    ],
    102 => [
        'id' => 102,
        'name' => 'Mabrur Hajj Journey',
        'type' => 'Haji',
        'duration' => '± 25 Hari',
        'badge' => '2025',
        'image' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=600',
        'description' => 'Nikmati perjalanan ibadah Haji dengan layanan khusus dan pendampingan yang dirancang untuk memberikan kenyamanan selama berada di Tanah Suci.',
        'fasilitas' => ['Visa Haji Plus', 'Maktab Khusus', 'Hotel Bintang 5'],
        'jadwal' => '10 Juni 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Sheraton Makkah',
        'hotel_madinah' => 'Crowne Madinah',
        'price' => 'Rp 255.000.000'
    ],
    103 => [
        'id' => 103,
        'name' => 'Blessed Hajj Experience',
        'type' => 'Haji',
        'duration' => '± 25 Hari',
        'badge' => '2025',
        'image' => 'https://images.unsplash.com/photo-1565552420067-1d6741972754?auto=format&fit=crop&q=80&w=600',
        'description' => 'Perjalanan istimewa untuk menunaikan ibadah Haji dengan fasilitas dan pelayanan sesuai pilihan program.',
        'fasilitas' => ['Visa Haji Plus', 'Maktab VIP', 'Hotel Bintang 5'],
        'jadwal' => '18 Juni 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Fairmont Makkah',
        'hotel_madinah' => 'Oberoi Madinah',
        'price' => 'Rp 310.000.000'
    ],
    104 => [
        'id' => 104,
        'name' => 'Exclusive Hajj Journey',
        'type' => 'Haji',
        'duration' => '± 26 Hari',
        'badge' => '2027',
        'image' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=600',
        'description' => 'Perjalanan Haji melalui jalur visa undangan dari Pemerintah Arab Saudi, dengan layanan perjalanan eksklusif.',
        'fasilitas' => ['Visa Furoda Resmi', 'Maktab VIP Armuzna', 'Hotel Bintang 5 Plt Haram'],
        'jadwal' => '18 Juni 2027',
        'airline' => 'Saudia Airlines',
        'hotel_makkah' => 'Swissôtel Makkah',
        'hotel_madinah' => 'Oberoi Madinah',
        'price' => 'Rp 365.000.000'
    ],
    105 => [
        'id' => 105,
        'name' => 'Royal Hajj Journey',
        'type' => 'Haji',
        'duration' => '± 30 Hari',
        'badge' => '2027',
        'image' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=600',
        'description' => 'Rasakan perjalanan ibadah yang berkesan dengan pendampingan dan layanan VVIP penuh menuju Baitullah.',
        'fasilitas' => ['Visa Furoda VVIP', 'Maktab Royal', 'Hotel Bintang 5', 'Private Transport'],
        'jadwal' => '20 Juni 2027',
        'airline' => 'Emirates',
        'hotel_makkah' => 'Fairmont Makkah',
        'hotel_madinah' => 'Oberoi Madinah',
        'price' => 'Rp 450.000.000'
    ],
];

// ----------------------------------------------------
// 1. HALAMAN PUBLIK (Tanpa Login)
// ----------------------------------------------------

Route::get('/', function () use ($packagesData) {
    return view('pages.home', ['packages' => $packagesData]);
})->name('home');

Route::view('/tentang-kami', 'pages.tentang')->name('tentang.kami');

Route::get('/paket-umroh', function () use ($packagesData) {
    $umroh = array_filter($packagesData, fn($p) => $p['type'] === 'Umroh');
    return view('pages.umroh', ['packages' => $umroh]);
})->name('paket.umroh');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/paket-haji', function () use ($packagesData) {
    $haji = array_filter($packagesData, fn($p) => $p['type'] === 'Haji');
    return view('pages.haji', ['packages' => $haji]);
})->name('paket.haji');

Route::get('/paket/detail/{id}', function ($id) use ($packagesData) {
    $package = $packagesData[$id] ?? $packagesData[1]; 
    
    // Jika tipe paket adalah Haji, lempar ke view haji-detail dengan membawa data $package
    if (isset($package['type']) && $package['type'] === 'Haji') {
        return view('pages.detail-haji', compact('package'));
    }

    return view('pages.detail-paket', compact('package'));
})->name('paket.detail');


// ----------------------------------------------------
// 2. HALAMAN AUTENTIKASI & USER
// ----------------------------------------------------
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/lupa-password', 'auth.lupa-password')->name('lupa.password');

Route::post('/login/submit', function (\Illuminate\Http\Request $request) {
    $role = $request->input('role');
    if ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($role === 'supervisor') {
        return redirect()->route('supervisor.dashboard');
    } else {
        return redirect()->route('user.dashboard');
    }
})->name('login.submit');

Route::get('/paket/registrasi/{id}', function ($id) use ($packagesData) {
    $package = $packagesData[$id] ?? $packagesData[1];
    return view('user.registrasi', ['paketId' => $id, 'package' => $package]);
})->name('user.registrasi');

Route::post('/paket/registrasi/submit', function (\Illuminate\Http\Request $request) {
    return redirect()->route('user.registrasi', ['id' => 1])->with('success', 'Data registrasi berhasil dikirim!');
})->name('user.registrasi.submit');

Route::prefix('user')->name('user.')->group(function () {
    Route::view('/dashboard', 'user.dashboard')->name('dashboard');
    Route::view('/formulir-dp', 'user.formulir-dp')->name('formulir.dp');
    Route::view('/dokumen', 'user.dokumen')->name('dokumen');
    Route::view('/status-tracking', 'user.status-tracking')->name('tracking');
});


// ====================================================
// AREA SUPERVISOR
// ====================================================
Route::prefix('supervisor')->name('supervisor.')->group(function () {
    Route::get('/login', function () {
        return view('supervisor.login');
    })->name('login');

    Route::post('/login', function (\Illuminate\Http\Request $request) {
        if ($request->email === 'supervisor@rozwia.com' && $request->password === 'password123') {
            session(['supervisor_logged_in' => true]);
            return redirect()->route('supervisor.dashboard');
        }
        return back()->withErrors(['email' => 'Email atau password supervisor salah.']);
    })->name('login.submit');

    Route::post('/logout', function () {
        session()->forget('supervisor_logged_in');
        return redirect()->route('supervisor.login');
    })->name('logout');

    Route::group(['middleware' => function ($request, $next) {
        if (!session('supervisor_logged_in')) {
            return redirect()->route('supervisor.login');
        }
        return $next($request);
    }], function () {
        Route::view('/dashboard', 'supervisor.dashboard')->name('dashboard');
        Route::view('/perusahaan', 'supervisor.perusahaan')->name('perusahaan');
        Route::view('/paket/tambah', 'supervisor.tambah-paket')->name('paket.tambah');
        Route::view('/akun', 'supervisor.akun-aktif')->name('akun');
        Route::view('/manifest', 'supervisor.manifest')->name('manifest');
    });
});