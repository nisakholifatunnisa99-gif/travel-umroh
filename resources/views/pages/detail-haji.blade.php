@extends('layouts.app')

@section('title', $package['name'] . ' - Rozwia Islamic Travel')

@section('content')

<!-- CONTAINER UTAMA BACKGROUND FULL SE-LAYAR -->
<div class="w-full bg-[#F4EFE6] min-h-screen pt-32 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- ================= 1. HERO SECTION DETAIL HAJI ================= -->
        <div class="bg-[#0B3B24] rounded-[36px] overflow-hidden shadow-xl text-white p-6 sm:p-12 relative">
            <div class="absolute inset-0 opacity-20 bg-cover bg-center pointer-events-none" style="background-image: url('{{ $package['image'] }}')"></div>
            
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <!-- Kolom Kiri: Informasi Utama -->
                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-block bg-[#E5D3B3] text-emerald-950 font-serif text-xs font-bold px-3.5 py-1 rounded-full shadow-xs">
                        {{ $package['badge'] ?? 'PAKET HAJI' }}
                    </span>
                    
                    <div class="space-y-2">
                        <h1 class="text-3xl sm:text-5xl font-bold font-serif tracking-tight text-white">
                            {{ $package['name'] }}
                        </h1>
                        <p class="text-emerald-100/90 text-sm sm:text-base font-serif leading-relaxed">
                            {{ $package['description'] }}
                        </p>
                    </div>

                    <!-- Statistik Pill -->
                    <div class="grid grid-cols-3 gap-3 pt-2 max-w-lg">
                        <div class="bg-emerald-900/60 border border-emerald-700/50 rounded-2xl p-3 text-center">
                            <span class="block text-[10px] text-emerald-300 uppercase font-serif">Durasi</span>
                            <span class="text-sm font-bold font-serif text-white">{{ $package['duration'] }}</span>
                        </div>
                        <div class="bg-emerald-900/60 border border-emerald-700/50 rounded-2xl p-3 text-center">
                            <span class="block text-[10px] text-emerald-300 uppercase font-serif">Maskapai</span>
                            <span class="text-sm font-bold font-serif text-white truncate">{{ $package['airline'] }}</span>
                        </div>
                        <div class="bg-emerald-900/60 border border-emerald-700/50 rounded-2xl p-3 text-center">
                            <span class="block text-[10px] text-emerald-300 uppercase font-serif">Kuota</span>
                            <span class="text-sm font-bold font-serif text-amber-300">Tersedia</span>
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
                        <img src="{{ $package['image'] }}" alt="{{ $package['name'] }}" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>


        <!-- ================= 2. LAYOUT UTAMA (KIRI: KONTEN & KANAN: FORM STICKY) ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- KIRI: KONTEN DETAIL & INFORMASI (7 KOLOM) -->
            <div class="lg:col-span-7 space-y-12">
                
                <!-- Tentang Paket & Quote -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200/80 grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-7 space-y-3">
                        <h3 class="text-lg font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span>🏛️</span> Tentang Paket
                        </h3>
                        <p class="text-stone-600 text-xs sm:text-sm leading-relaxed font-serif">
                            {{ $package['description'] }}
                        </p>
                    </div>
                    <div class="md:col-span-5 bg-[#F4EFE6] p-4 rounded-2xl border border-stone-200 text-stone-700 text-xs font-serif italic">
                        "Menunaikan ibadah Haji dengan tenang, bersama ROZWIA."
                    </div>
                </div>

                <!-- TAMBAHAN: Jenis Layanan Haji (Sesuai Referensi Gambar) -->
                <div class="space-y-6">
                    <h3 class="text-xl font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                        <span>⭐</span> Jenis Layanan Haji
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="bg-white rounded-2xl p-4 shadow-sm border border-stone-200 space-y-2">
                            <div class="relative h-28 rounded-xl overflow-hidden mb-2">
                                <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=400" alt="Haji Reguler" class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-[#0B3B24] text-sm font-serif">Haji Reguler</h4>
                            <p class="text-[11px] text-stone-600 font-serif leading-relaxed">Program haji reguler dengan layanan standar pemerintah.</p>
                        </div>
                        <div class="bg-white rounded-2xl p-4 shadow-sm border border-stone-200 space-y-2">
                            <div class="relative h-28 rounded-xl overflow-hidden mb-2">
                                <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=400" alt="Haji Plus" class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-[#0B3B24] text-sm font-serif">Haji Plus</h4>
                            <p class="text-[11px] text-stone-600 font-serif leading-relaxed">Layanan haji dengan fasilitas lebih eksklusif.</p>
                        </div>
                        <div class="bg-white rounded-2xl p-4 shadow-sm border border-stone-200 space-y-2">
                            <div class="relative h-28 rounded-xl overflow-hidden mb-2">
                                <img src="https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=400" alt="Haji Furoda" class="w-full h-full object-cover">
                            </div>
                            <h4 class="font-bold text-[#0B3B24] text-sm font-serif">Haji Furoda</h4>
                            <p class="text-[11px] text-stone-600 font-serif leading-relaxed">Program haji khusus dengan kuota terbatas.</p>
                        </div>
                    </div>
                </div>

                <!-- Rangkaian Ibadah Haji (Timeline 7 Langkah) -->
                <div class="space-y-6">
                    <h3 class="text-xl font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                        <span>✈️</span> Rangkaian Ibadah Haji
                    </h3>
                    
                    <div class="space-y-4">
                        @php
                            $hajiSteps = [
                                ['num' => '1', 'title' => 'Keberangkatan dari Indonesia', 'desc' => 'Jamaah memulai perjalanan menuju Tanah Suci sesuai jadwal penerbangan yang telah ditentukan.'],
                                ['num' => '2', 'title' => 'Tiba di Arab Saudi', 'desc' => 'Jamaah tiba dan melanjutkan perjalanan menuju hotel untuk beristirahat serta mempersiapkan ibadah.'],
                                ['num' => '3', 'title' => 'Ihram dan Niat Haji', 'desc' => 'Jamaah mengenakan ihram dan melaksanakan niat Haji sesuai ketentuan.'],
                                ['num' => '4', 'title' => 'Wukuf di Arafah', 'desc' => 'Jamaah melaksanakan wukuf di Arafah pada tanggal 9 Dzulhijjah.'],
                                ['num' => '5', 'title' => 'Mabit di Muzdalifah', 'desc' => 'Jamaah bermalam di Muzdalifah setelah menyelesaikan wukuf.'],
                                ['num' => '6', 'title' => 'Mabit di Mina dan Melontar Jumrah', 'desc' => 'Jamaah menjalankan rangkaian Ibadah di Mina, termasuk melontar jumrah.'],
                                ['num' => '7', 'title' => 'Penyelesaian Ibadah Dan Kepulangan', 'desc' => 'Jamaah menyelesaikan rangkaian ibadah Haji dan kembali ke Indonesia sesuai jadwal.'],
                            ];
                        @endphp

                        @foreach($hajiSteps as $step)
                        <div class="bg-white rounded-2xl p-5 shadow-sm border border-stone-200/80 flex items-start gap-4">
                            <span class="w-8 h-8 rounded-full bg-[#0B3B24] text-white text-xs font-bold flex items-center justify-center shrink-0 font-serif">
                                {{ $step['num'] }}
                            </span>
                            <div class="space-y-1">
                                <h4 class="font-bold text-[#0B3B24] text-sm font-serif">{{ $step['title'] }}</h4>
                                <p class="text-xs text-stone-600 font-serif leading-relaxed">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pilihan Kamar dan Hotel -->
                <div class="space-y-6">
                    <h3 class="text-xl font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                        <span>🏨</span> Pilihan Kamar dan Hotel
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Hotel Makkah -->
                        <div class="bg-white rounded-3xl p-4 shadow-sm border border-stone-200/80 space-y-4 flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="relative h-44 rounded-2xl overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=600" alt="Hotel Makkah" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-[#0B3B24] font-serif">{{ $package['hotel_makkah'] }}</h4>
                                    <p class="text-xs text-stone-500 font-serif">Hotel Bintang 4 • ⭐⭐⭐⭐</p>
                                    <p class="text-xs text-stone-600 font-serif mt-1">Lokasi: Makkah</p>
                                </div>
                            </div>
                            <div class="border-t border-stone-200 pt-3 flex items-center justify-between text-xs text-stone-700 font-serif">
                                <span>🛏️ Quad / Triple / Double</span>
                                <span class="font-bold text-[#0B3B24]">📍 150 Meter</span>
                            </div>
                        </div>

                        <!-- Hotel Madinah -->
                        <div class="bg-white rounded-3xl p-4 shadow-sm border border-stone-200/80 space-y-4 flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="relative h-44 rounded-2xl overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&q=80&w=600" alt="Hotel Madinah" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-lg font-bold text-[#0B3B24] font-serif">{{ $package['hotel_madinah'] }}</h4>
                                    <p class="text-xs text-stone-500 font-serif">Hotel Bintang 4 • ⭐⭐⭐⭐</p>
                                    <p class="text-xs text-stone-600 font-serif mt-1">Lokasi: Madinah</p>
                                </div>
                            </div>
                            <div class="border-t border-stone-200 pt-3 flex items-center justify-between text-xs text-stone-700 font-serif">
                                <span>🛏️ Quad / Triple / Double</span>
                                <span class="font-bold text-[#0B3B24]">📍 100 Meter</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAMBAHAN: Fasilitas & Destinasi (Grid 2 Kolom) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Fasilitas Paket -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4">
                        <h4 class="text-base font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span>💼</span> Fasilitas Paket
                        </h4>
                        <ul class="space-y-2 text-xs font-serif text-stone-700">
                            @foreach($package['fasilitas'] as $fasilitas)
                            <li class="flex items-center gap-2">✔️ {{ $fasilitas }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Destinasi -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4">
                        <h4 class="text-base font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span>📍</span> Destinasi
                        </h4>
                        <div class="relative h-28 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=500" alt="Destinasi" class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-serif text-stone-700 font-semibold">Makkah, Madinah dan lokasi-lokasi utama ibadah haji</p>
                    </div>
                </div>

                <!-- TAMBAHAN: Ketentuan Paket & Dokumen Yang Disiapkan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Ketentuan Paket -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4">
                        <h4 class="text-base font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span>📜</span> Ketentuan Paket
                        </h4>
                        <ol class="space-y-2 text-xs font-serif text-stone-700 list-decimal list-inside">
                            <li>Pendaftaran dengan melengkapi dokumen sesuai ketentuan</li>
                            <li>Pembayaran DP dan pelunasan sesuai jadwal</li>
                            <li>Pembatalan mengikuti jadwal kebijakan travel</li>
                            <li>Harga dapat berubah sewaktu-waktu</li>
                        </ol>
                    </div>

                    <!-- Dokumen Yang Disiapkan -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4">
                        <h4 class="text-base font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                            <span>📁</span> Dokumen Yang Disiapkan
                        </h4>
                        <ul class="space-y-2 text-xs font-serif text-stone-700">
                            <li>✔️ Paspor</li>
                            <li>✔️ KTP</li>
                            <li>✔️ Kartu Keluarga</li>
                            <li>✔️ Akta Kelahiran</li>
                            <li>✔️ Buku Nikah</li>
                            <li>✔️ Pas Foto</li>
                            <li>✔️ Surat Keterangan Sehat</li>
                        </ul>
                    </div>
                </div>

                <!-- Jadwal Keberangkatan (Tabel) -->
                <div class="space-y-6">
                    <h3 class="text-xl font-bold text-[#0B3B24] font-serif flex items-center gap-2">
                        <span>📅</span> Jadwal Keberangkatan
                    </h3>

                    <div class="bg-white rounded-3xl shadow-sm border border-stone-200/80 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse text-xs font-serif">
                                <thead>
                                    <tr class="bg-[#0B3B24] text-white">
                                        <th class="p-4 font-semibold">Keberangkatan</th>
                                        <th class="p-4 font-semibold">Maskapai</th>
                                        <th class="p-4 font-semibold">Kuota</th>
                                        <th class="p-4 font-semibold text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-stone-200 text-stone-700">
                                    <tr>
                                        <td class="p-4 font-medium">{{ $package['jadwal'] }}</td>
                                        <td class="p-4">{{ $package['airline'] }}</td>
                                        <td class="p-4 font-bold">45</td>
                                        <td class="p-4 text-center">
                                            <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-3 py-1 rounded-full">Tersedia</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                                    <span class="block text-[9px] text-emerald-300">DOUBLE (2 ORANG)</span>
                                    <span class="block text-xs font-bold text-white mt-0.5">47.5 Jt</span>
                                </label>
                                <label class="cursor-pointer bg-emerald-900/80 border border-emerald-700 rounded-xl p-2.5 text-center transition hover:bg-emerald-800">
                                    <input type="radio" name="tipe_kamar" value="triple" class="sr-only peer">
                                    <span class="block text-[9px] text-emerald-300">TRIPLE (3 ORANG)</span>
                                    <span class="block text-xs font-bold text-white mt-0.5">43.5 Jt</span>
                                </label>
                                <label class="cursor-pointer bg-emerald-900/80 border border-emerald-700 rounded-xl p-2.5 text-center transition hover:bg-emerald-800">
                                    <input type="radio" name="tipe_kamar" value="quad" class="sr-only peer">
                                    <span class="block text-[9px] text-emerald-300">QUAD (5 ORANG)</span>
                                    <span class="block text-xs font-bold text-white mt-0.5">41.5 Jt</span>
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

                        <!-- Tombol Aksi Menumpuk Vertikal & WhatsApp Hijau -->
                        <div class="pt-2 space-y-3">
                            <button type="submit" class="w-full bg-amber-500 hover:bg-amber-400 text-emerald-950 font-bold py-3.5 px-4 rounded-xl shadow-md transition text-xs uppercase tracking-wider text-center">
                                Daftar Paket
                            </button>
                            <a href="https://wa.me/6289518829438?text=Assalamualaikum%20ROZWIA,%20saya%20ingin%20berkonsultasi%20mengenai%20paket%20{{ urlencode($package['name']) }}." target="_blank" class="w-full bg-[#25D366] hover:bg-[#20ba5a] text-white font-bold py-3.5 px-4 rounded-xl shadow-md transition text-xs flex items-center justify-center gap-2 text-center">
                                <span>💬</span> Chat Via WhatsApp
                            </a>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection