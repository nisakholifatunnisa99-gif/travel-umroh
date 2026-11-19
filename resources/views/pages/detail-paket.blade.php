@extends('layouts.app')

@section('title', $package['name'] . ' - Rozwia Islamic Travel')

@section('content')

<!-- CONTAINER UTAMA BACKGROUND FULL SE-LAYAR -->
<div class="w-full bg-[#F4EFE6] min-h-screen pt-32 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- ================= 1. HERO SECTION DETAIL UMROH (TIDAK TABRAKAN) ================= -->
        <div class="bg-[#0B3B24] rounded-[36px] overflow-hidden shadow-xl text-white p-6 sm:p-12 relative">
            <div class="absolute inset-0 opacity-20 bg-cover bg-center pointer-events-none" style="background-image: url('http://127.0.0.1:8000/img/detail.jpg')"></div>
            
            
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Kolom Kiri: Informasi Utama -->
                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-block bg-[#E5D3B3] text-emerald-950 font-serif text-xs font-bold px-3.5 py-1 rounded-full shadow-xs">
                        {{ $package['badge'] ?? 'PAKET UMROH' }}
                    </span>
                    
                    <div class="space-y-2">
                        <h1 class="text-3xl sm:text-5xl font-bold font-serif tracking-tight text-white">
                            {{ $package['name'] }}
                        </h1>
                        <p class="text-emerald-100/90 text-sm sm:text-base font-serif leading-relaxed">
                            {{ $package['description'] }}
                        </p>
                    </div>

                    <!-- Statistik Pill yang Diperbaiki (Aman & Tidak Tabrakan) -->
                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-3 pt-2">
                        <!-- Durasi (3 Kolom) -->
                        <div class="sm:col-span-3 bg-emerald-900/60 border border-emerald-700/50 rounded-2xl p-3.5 flex flex-col justify-center">
                            <span class="block text-[10px] text-emerald-300 uppercase font-serif tracking-wider">Durasi</span>
                            <span class="text-sm font-bold font-serif text-white mt-0.5">{{ $package['duration'] }}</span>
                        </div>

                        <!-- Hotel Makkah (5 Kolom) -->
                        <div class="sm:col-span-5 bg-emerald-900/60 border border-emerald-700/50 rounded-2xl p-3.5 flex flex-col justify-center">
                            <span class="block text-[10px] text-emerald-300 uppercase font-serif tracking-wider">Hotel Makkah</span>
                            <span class="text-xs sm:text-sm font-bold font-serif text-white mt-0.5 leading-snug">
                                {{ $package['hotel_makkah'] }}
                            </span>
                        </div>

                        <!-- Hotel Madinah (4 Kolom) -->
                        <div class="sm:col-span-4 bg-emerald-900/60 border border-emerald-700/50 rounded-2xl p-3.5 flex flex-col justify-center">
                            <span class="block text-[10px] text-emerald-300 uppercase font-serif tracking-wider">Hotel Madinah</span>
                            <span class="text-xs sm:text-sm font-bold font-serif text-white mt-0.5 leading-snug">
                                {{ $package['hotel_madinah'] }}
                            </span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <span class="text-xs text-emerald-200 block font-serif uppercase tracking-wider">Mulai dari</span>
                        <div class="flex items-baseline gap-2">
                            <span class="text-2xl sm:text-4xl font-extrabold text-amber-400 font-serif">{{ $package['price'] }}</span>
                            <span class="text-xs text-emerald-200 font-serif">/ Jamaah</span>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Gambar Banner -->
                <div class="lg:col-span-5">
                    <div class="relative h-64 sm:h-80 rounded-3xl overflow-hidden shadow-2xl border-4 border-white/10">
                        <img src="{{ asset('img/detail.jpg') }}" alt="{{ $package['name'] }}" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>


        <!-- ================= 2. LAYOUT UTAMA (KIRI: KONTEN & KANAN: FORM STICKY) ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- KIRI: KONTEN DETAIL & INFORMASI (7 KOLOM) -->
            <div class="lg:col-span-7 space-y-12">
                
                @php
                    $selectedBulan = request('bulan', 'semua');
                    
                    // Dummy data jadwal keberangkatan dengan kategori bulan & hari
                    $jadwalList = [
                        ['bulan' => 'oktober', 'tgl' => '15 Oktober 2026', 'durasi' => '9 Hari', 'hari' => 'Rabu', 'harga' => 'Rp 28.500.000', 'status' => 'Tersedia'],
                        ['bulan' => 'oktober', 'tgl' => '28 Oktober 2026', 'durasi' => '9 Hari', 'hari' => 'Selasa', 'harga' => 'Rp 29.000.000', 'status' => 'Tersedia'],
                        ['bulan' => 'november', 'tgl' => '10 November 2026', 'durasi' => '12 Hari', 'hari' => 'Selasa', 'harga' => 'Rp 31.500.000', 'status' => 'Tersedia'],
                        ['bulan' => 'desember', 'tgl' => '05 Desember 2026', 'durasi' => '9 Hari', 'hari' => 'Sabtu', 'harga' => 'Rp 34.000.000', 'status' => 'Hampir Penuh'],
                    ];

                    $filteredJadwal = collect($jadwalList)->filter(function($j) use ($selectedBulan) {
                        if ($selectedBulan === 'semua') return true;
                        return $j['bulan'] === $selectedBulan;
                    });
                @endphp

                <!-- 1. JADWAL KEBERANGKATAN DI ATAS DENGAN FILTER BULAN & TABEL -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200/80 space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <h3 class="text-xl font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span class="material-symbols-outlined">date_range</span> Jadwal Keberangkatan
                        </h3>

                        <!-- Filter Bulan Pill -->
                        <div class="flex flex-wrap items-center gap-1.5">
                            <a href="{{ request()->fullUrlWithQuery(['bulan' => 'semua']) }}" class="{{ $selectedBulan === 'semua' ? 'bg-[#0B3B24] text-white' : 'bg-stone-100 text-stone-700 hover:bg-emerald-50' }} text-[11px] font-serif font-semibold px-3.5 py-1.5 rounded-full transition">Semua</a>
                            <a href="{{ request()->fullUrlWithQuery(['bulan' => 'oktober']) }}" class="{{ $selectedBulan === 'oktober' ? 'bg-[#0B3B24] text-white' : 'bg-stone-100 text-stone-700 hover:bg-emerald-50' }} text-[11px] font-serif font-semibold px-3.5 py-1.5 rounded-full transition">Oktober</a>
                            <a href="{{ request()->fullUrlWithQuery(['bulan' => 'november']) }}" class="{{ $selectedBulan === 'november' ? 'bg-[#0B3B24] text-white' : 'bg-stone-100 text-stone-700 hover:bg-emerald-50' }} text-[11px] font-serif font-semibold px-3.5 py-1.5 rounded-full transition">November</a>
                            <a href="{{ request()->fullUrlWithQuery(['bulan' => 'desember']) }}" class="{{ $selectedBulan === 'desember' ? 'bg-[#0B3B24] text-white' : 'bg-stone-100 text-stone-700 hover:bg-emerald-50' }} text-[11px] font-serif font-semibold px-3.5 py-1.5 rounded-full transition">Desember</a>
                        </div>
                    </div>

                    <div class="overflow-x-auto rounded-2xl border border-stone-200">
                        <table class="w-full text-left border-collapse text-xs font-serif">
                            <thead>
                                <tr class="bg-[#0B3B24] text-white">
                                    <th class="p-3.5 font-semibold">Keberangkatan</th>
                                    <th class="p-3.5 font-semibold">Durasi</th>
                                    <th class="p-3.5 font-semibold">Hari</th>
                                    <th class="p-3.5 font-semibold">Mulai Dari</th>
                                    <th class="p-3.5 font-semibold text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-200 text-stone-700">
                                @forelse($filteredJadwal as $jadwal)
                                <tr class="hover:bg-stone-50 transition">
                                    <td class="p-3.5 font-medium text-[#0B3B24]">{{ $jadwal['tgl'] }}</td>
                                    <td class="p-3.5">{{ $jadwal['durasi'] }}</td>
                                    <td class="p-3.5">{{ $jadwal['hari'] }}</td>
                                    <td class="p-3.5 font-bold text-amber-700">{{ $jadwal['harga'] }}</td>
                                    <td class="p-3.5 text-center">
                                        <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-1 rounded-full">{{ $jadwal['status'] }}</span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="p-6 text-center text-stone-500">Tidak ada jadwal pada bulan ini.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tentang Paket -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200/80 space-y-3">
                    <h3 class="text-lg font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                        <span class="material-symbols-outlined">box_edit</span> Tentang Paket
                    </h3>
                    <p class="text-stone-600 text-xs sm:text-sm leading-relaxed font-serif">
                        {{ $package['description'] }}
                    </p>
                </div>

                <!-- 2. GAMBARAN PERJALANAN (DIJADIKAN 1 TABEL) -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200/80 space-y-6">
                    <h3 class="text-xl font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                        <span class="material-symbols-outlined">travel</span> Gambaran Perjalanan
                    </h3>
                    
                    <div class="overflow-x-auto rounded-2xl border border-stone-200">
                        <table class="w-full text-left border-collapse text-xs font-serif">
                            <thead>
                                <tr class="bg-[#0B3B24] text-white">
                                    <th class="p-3.5 font-semibold w-16 text-center">Tahap</th>
                                    <th class="p-3.5 font-semibold">Agenda Perjalanan</th>
                                    <th class="p-3.5 font-semibold">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-200 text-stone-700">
                                <tr class="hover:bg-stone-50">
                                    <td class="p-3.5 text-center font-bold text-[#0B3B24]">1</td>
                                    <td class="p-3.5 font-semibold text-[#0B3B24]">Keberangkatan dari Indonesia</td>
                                    <td class="p-3.5 text-stone-600">Jamaah memulai perjalanan menuju Tanah Suci sesuai jadwal penerbangan yang telah ditentukan.</td>
                                </tr>
                                <tr class="hover:bg-stone-50">
                                    <td class="p-3.5 text-center font-bold text-[#0B3B24]">2</td>
                                    <td class="p-3.5 font-semibold text-[#0B3B24]">Tiba di Madinah / Makkah</td>
                                    <td class="p-3.5 text-stone-600">Jamaah tiba di Tanah Suci dan mempersiapkan diri untuk menjalankan rangkaian ibadah.</td>
                                </tr>
                                <tr class="hover:bg-stone-50">
                                    <td class="p-3.5 text-center font-bold text-[#0B3B24]">3</td>
                                    <td class="p-3.5 font-semibold text-[#0B3B24]">Pelaksanaan Ibadah Umrah</td>
                                    <td class="p-3.5 text-stone-600">Melaksanakan rangkaian ibadah Umrah sesuai tuntunan dengan pendampingan pembimbing.</td>
                                </tr>
                                <tr class="hover:bg-stone-50">
                                    <td class="p-3.5 text-center font-bold text-[#0B3B24]">4</td>
                                    <td class="p-3.5 font-semibold text-[#0B3B24]">Ziarah Tempat Bersejarah</td>
                                    <td class="p-3.5 text-stone-600">Mengunjungi tempat-tempat bersejarah Islam sesuai agenda perjalanan.</td>
                                </tr>
                                <tr class="hover:bg-stone-50">
                                    <td class="p-3.5 text-center font-bold text-[#0B3B24]">5</td>
                                    <td class="p-3.5 font-semibold text-[#0B3B24]">Kembali ke Tanah Air</td>
                                    <td class="p-3.5 text-stone-600">Perjalanan ibadah selesai dan jamaah kembali ke Indonesia sesuai jadwal kepulangan.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pilihan Kamar dan Hotel -->
                <div class="space-y-6">
                    <h3 class="text-xl font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                        <span class="material-symbols-outlined">night_shelter</span> Pilihan Kamar dan Hotel
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Hotel Makkah -->
                        <div class="bg-white rounded-3xl p-4 shadow-sm border border-stone-200/80 space-y-4 flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="relative h-44 rounded-2xl overflow-hidden">
                                    <img src="{{ asset('img/sheraton.jpg') }}" alt="Hotel Makkah" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-[#0B3B24] font-serif">{{ $package['hotel_makkah'] }}</h4>
                                    <p class="text-xs text-stone-500 font-serif">Hotel Bintang 5 • ⭐⭐⭐⭐⭐</p>
                                    <p class="text-xs text-stone-600 font-serif mt-1">Lokasi: Makkah (± 150 Meter dari Masjidil Haram)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Hotel Madinah -->
                        <div class="bg-white rounded-3xl p-4 shadow-sm border border-stone-200/80 space-y-4 flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="relative h-44 rounded-2xl overflow-hidden">
                                    <img src="{{ asset('img/crowne.jpg') }}" alt="Hotel Madinah" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-[#0B3B24] font-serif">{{ $package['hotel_madinah'] }}</h4>
                                    <p class="text-xs text-stone-500 font-serif">Hotel Bintang 5 • ⭐⭐⭐⭐⭐</p>
                                    <p class="text-xs text-stone-600 font-serif mt-1">Lokasi: Madinah (± 100 Meter dari Masjid Nabawi)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas & Ketentuan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4">
                        <h4 class="text-base font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span class="material-symbols-outlined">checked_bag</span> Fasilitas Paket
                        </h4>
                        <ul class="space-y-2 text-xs font-serif text-stone-700">
                        <li class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-700 text-base">check_circle</span>
                            <span>Tiket Pesawat</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-700 text-base">check_circle</span>
                            <span>Hotel Bintang 4</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-700 text-base">check_circle</span>
                            <span>Visa Umroh</span>
                        </li>
                        
                    </ul>
                    </div>

                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4">
                        <h4 class="text-base font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span class="material-symbols-outlined">edit_note</span> Ketentuan & Dokumen
                        </h4>
                        <ul class="space-y-2 text-xs font-serif text-stone-700">
                        <li class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-700 text-base">check_circle</span>
                            <span>Paspor yang masih berlaku min. 8 bulan</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-700 text-base">check_circle</span>
                            <span>Buku Vaksin Meningitis</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-700 text-base">check_circle</span>
                            <span>Pas Foto dan DP sesuai ketentuan putih</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <span class="material-symbols-outlined text-emerald-700 text-base">check_circle</span>
                            <span>Pendaftaran dan DP sesuai ketentuan travel</span>
                        </li>
                    </ul>
                    </div>
                </div>

            </div>


            <!-- KANAN: FORMULIR PENDAFTARAN STICKY (5 KOLOM) -->
            <div class="lg:col-span-5 lg:sticky lg:top-28 space-y-6">
                <div class="bg-[#0B3B24] rounded-3xl p-6 sm:p-8 shadow-xl border border-emerald-900 text-white space-y-6">
                    
                    <div class="space-y-2 border-b border-emerald-800 pb-4">
                        <h3 class="text-xl font-bold font-serif text-white">Daftar Sekarang</h3>
                        <p class="text-xs text-emerald-200 font-serif">Pilih tipe kamar dan lengkapi data jamaah untuk memesan <strong>{{ $package['name'] }}</strong>.</p>
                    </div>

                    <form action="#" method="POST" class="space-y-4 font-serif">
                        @csrf

                        <!-- Pilihan Tipe Kamar -->
                        <div class="space-y-2">
                            <label class="block text-xs font-semibold text-amber-300">Pilih tipe kamar yang sesuai</label>
                            <div class="grid grid-cols-3 gap-2">
                                <label class="cursor-pointer bg-emerald-900/80 border border-emerald-700 rounded-xl p-2.5 text-center transition hover:bg-emerald-800">
                                    <input type="radio" name="tipe_kamar" value="double" class="sr-only peer" checked>
                                    <span class="block text-[9px] text-emerald-300">DOUBLE</span>
                                    <span class="block text-xs font-bold text-white mt-0.5">Quad / Double</span>
                                </label>
                                <label class="cursor-pointer bg-emerald-900/80 border border-emerald-700 rounded-xl p-2.5 text-center transition hover:bg-emerald-800">
                                    <input type="radio" name="tipe_kamar" value="triple" class="sr-only peer">
                                    <span class="block text-[9px] text-emerald-300">TRIPLE</span>
                                    <span class="block text-xs font-bold text-white mt-0.5">Triple Room</span>
                                </label>
                                <label class="cursor-pointer bg-emerald-900/80 border border-emerald-700 rounded-xl p-2.5 text-center transition hover:bg-emerald-800">
                                    <input type="radio" name="tipe_kamar" value="quad" class="sr-only peer">
                                    <span class="block text-[9px] text-emerald-300">QUAD</span>
                                    <span class="block text-xs font-bold text-white mt-0.5">Quad Room</span>
                                </label>
                            </div>
                        </div>

                        <!-- Tanggal Keberangkatan -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-emerald-200">TANGGAL KEBERANGKATAN</label>
                            <input type="text" readonly value="{{ $package['jadwal'] }}" class="w-full bg-emerald-900/80 border border-emerald-700 text-white rounded-xl px-4 py-2.5 text-xs focus:outline-none">
                        </div>

                        <!-- Nama Anda -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-emerald-200">NAMA ANDA</label>
                            <input type="text" placeholder="Nama lengkap sesuai paspor" class="w-full bg-emerald-900/80 border border-emerald-700 text-white placeholder-emerald-400/60 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-amber-400">
                        </div>

                        <!-- Nomor WhatsApp -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-emerald-200">NOMOR WHATSAPP</label>
                            <input type="text" placeholder="+62812-xxx-xxx" class="w-full bg-emerald-900/80 border border-emerald-700 text-white placeholder-emerald-400/60 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-amber-400">
                        </div>

                        <!-- Email -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-emerald-200">EMAIL</label>
                            <input type="email" placeholder="nama@gmail.com" class="w-full bg-emerald-900/80 border border-emerald-700 text-white placeholder-emerald-400/60 rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-amber-400">
                        </div>

                        <!-- Jumlah Jamaah -->
                        <div class="space-y-1.5">
                            <label class="block text-xs font-semibold text-emerald-200">JUMLAH JAMAAH</label>
                            <input type="number" min="1" value="1" class="w-full bg-emerald-900/80 border border-emerald-700 text-white rounded-xl px-4 py-2.5 text-xs focus:outline-none focus:border-amber-400">
                        </div>

                        <!-- Tombol Aksi Pendaftaran & WhatsApp -->
                        <div class="pt-2 space-y-3">
                            <button type="submit" class="w-full bg-amber-500 hover:bg-amber-400 text-emerald-950 font-bold py-3.5 px-4 rounded-xl shadow-md transition text-xs uppercase tracking-wider text-center">
                                Daftar Paket Sekarang
                            </button>
                            <a href="https://wa.me/6289516889496?text=Assalamualaikum%20ROZWIA,%20saya%20ingin%20berkonsultasi%20mengenai%20paket%20{{ urlencode($package['name']) }}." target="_blank" class="w-full bg-[#25D366] hover:bg-[#20ba5a] text-white font-bold py-3.5 px-4 rounded-xl shadow-md transition text-xs flex items-center justify-center gap-2 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 258">
	                                <path d="M0 0h256v258H0z" fill="none" />
	                                    <defs>
		                                    <linearGradient id="SVGK3KZq49U" x1="50%" x2="50%" y1="100%" y2="0%">
			                                    <stop offset="0%" stop-color="#1faf38" />
			                                    <stop offset="100%" stop-color="#60d669" />
		                                    </linearGradient>
		                                        <linearGradient id="SVGefMkoEOd" x1="50%" x2="50%" y1="100%" y2="0%">
			                                    <stop offset="0%" stop-color="#f9f9f9" />
			                                    <stop offset="100%" stop-color="#fff" />
		                                    </linearGradient>
	                                    </defs>
	                                <path fill="url(#SVGK3KZq49U)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
	                                <path fill="url(#SVGefMkoEOd)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
	                                <path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                                </svg> Chat Via WhatsApp
                            </a>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection