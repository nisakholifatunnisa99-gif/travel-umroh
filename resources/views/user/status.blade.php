@extends('layouts.dashboard')

@section('title', 'Status Perjalanan - ROZWIA Islamic Travel')

@section('content')
    <!-- Header Sambutan & Lonceng Notifikasi -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold font-serif text-stone-900">
                Status Perjalanan / Keberangkatan
            </h1>
            <p class="text-xs sm:text-sm text-stone-600 mt-1">
                Pantau jadwal, akomodasi, bimbingan manasik, dan rangkaian perjalanan ibadah Anda.
            </p>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-white border border-stone-200 shadow-xs flex items-center justify-center text-amber-600 text-xl cursor-pointer hover:bg-stone-50 transition relative">
            
            <span class="material-symbols-outlined">notifications</span>
        </div>
    </div>

    <!-- 1. Banner Utama: Countdown & Keberangkatan -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-8 shadow-sm flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
        <div class="space-y-2">
            <span class="inline-block bg-emerald-900/80 border border-emerald-700/50 text-emerald-200 font-semibold text-[10px] px-3 py-1 rounded-full uppercase tracking-wider">
                <span class="material-symbols-outlined">travel</span> Kloter 04 • Umrah Reguler Barakah 12 Hari
            </span>
            <h3 class="text-xl sm:text-2xl font-bold font-serif">
                Keberangkatan: Selasa, 15 Desember 2026
            </h3>
            <p class="text-xs text-emerald-100/80 max-w-xl leading-relaxed font-sans">
                Titik Kumpul Jamaah: Lounge Umrah Terminal 3 Bandar Udara Internasional Soekarno-Hatta (CGK), Pukul 07.30 WIB.
            </p>
        </div>

        <!-- Kotak Hitung Mundur (Countdown Box) -->
        <div class="bg-emerald-950/80 border border-emerald-800/60 rounded-2xl px-6 py-4 flex items-center gap-4 shrink-0 shadow-inner">
            <div class="text-center">
                <span class="block text-2xl sm:text-3xl font-bold font-serif text-amber-300">28</span>
                <span class="text-[9px] uppercase tracking-widest text-emerald-300/80 font-sans">HARI</span>
            </div>
            <span class="text-xl font-bold text-emerald-700">:</span>
            <div class="text-center">
                <span class="block text-2xl sm:text-3xl font-bold font-serif text-white">14</span>
                <span class="text-[9px] uppercase tracking-widest text-emerald-300/80 font-sans">JAM</span>
            </div>
            <span class="text-xl font-bold text-emerald-700">:</span>
            <div class="text-center">
                <span class="block text-2xl sm:text-3xl font-bold font-serif text-white">45</span>
                <span class="text-[9px] uppercase tracking-widest text-emerald-300/80 font-sans">MENIT</span>
            </div>
        </div>
    </div>

    <!-- 2. Grid Tiga Info Atas: Tiket Pesawat, Akomodasi Hotel, Pendamping Kloter -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Tiket Pesawat -->
        <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm space-y-4 flex flex-col justify-between">
            <div class="space-y-3">
                <div class="flex justify-between items-center border-b border-stone-100 pb-2.5">
                    <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider font-sans">TIKET PESAWAT</span>
                    <span class="bg-emerald-100 text-emerald-800 font-bold text-[10px] px-2.5 py-0.5 rounded-full">Confirmed</span>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-stone-900 font-serif">Saudia Airlines</h4>
                    <p class="text-[11px] text-stone-500 font-sans">SV-819 (Direct Flight Tanpa Transit)</p>
                </div>
                <!-- Box Rute Penerbangan -->
                <div class="bg-stone-50 border border-stone-200/70 rounded-2xl p-3.5 flex items-center justify-between text-xs">
                    <div>
                        <span class="text-[10px] text-stone-400 block font-sans">CGK (Jakarta)</span>
                        <strong class="text-stone-800 font-serif">11.30 WIB</strong>
                    </div>
                    <div class="text-center px-2">
                        <span class="text-[10px] text-stone-400 block font-sans">9j 45m</span>
                        <span class="material-symbols-outlined">travel</span>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] text-stone-400 block font-sans">JED (Jeddah)</span>
                        <strong class="text-stone-800 font-serif">17.15 AST</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Akomodasi Hotel -->
        <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm space-y-4 flex flex-col justify-between">
            <div class="space-y-3">
                <div class="flex justify-between items-center border-b border-stone-100 pb-2.5">
                    <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider font-sans">AKOMODASI HOTEL</span>
                    <span class="bg-amber-100 text-amber-900 font-bold text-[10px] px-2.5 py-0.5 rounded-full">Bintang 5</span>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-stone-900 font-serif">Makkah & Madinah</h4>
                    <p class="text-[11px] text-stone-500 font-sans">Tipe Kamar: Quad (Sekamar 4 Orang)</p>
                </div>
                <div class="space-y-2 text-xs">
                    <div class="flex justify-between items-start border-b border-stone-100 pb-2">
                        <div>
                            <span class="font-bold text-stone-900 block font-serif text-[11px]">Makkah: Pullman Zamzam Tower</span>
                            <span class="text-[10px] text-stone-500">Pelataran Masjidil Haram (50 meter)</span>
                        </div>
                        <span class="text-amber-700 font-bold text-[11px] shrink-0 text-right">5<br><span class="text-[9px] font-normal">Malam</span></span>
                    </div>
                    <div class="flex justify-between items-start pt-0.5">
                        <div>
                            <span class="font-bold text-stone-900 block font-serif text-[11px]">Madinah: Mekah Al Madinah Mövenpick</span>
                            <span class="text-[10px] text-stone-500">Depan Pintu Masjid Nabawi (80 meter)</span>
                        </div>
                        <span class="text-amber-700 font-bold text-[11px] shrink-0 text-right">4<br><span class="text-[9px] font-normal">Malam</span></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pendamping Kloter -->
        <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm space-y-4 flex flex-col justify-between">
            <div class="space-y-3">
                <div class="flex justify-between items-center border-b border-stone-100 pb-2.5">
                    <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider font-sans">PENDAMPING KLOTER</span>
                    <span class="bg-emerald-100 text-emerald-800 font-bold text-[10px] px-2.5 py-0.5 rounded-full">Resmi</span>
                </div>
                <div>
                    <h4 class="text-sm font-bold text-stone-900 font-serif">Ustadz & Muthawwif</h4>
                    <p class="text-[11px] text-stone-500 font-sans">Membimbing ibadah sesuai sunnah</p>
                </div>
                <!-- Card Profil Pembimbing -->
                <div class="bg-stone-50 border border-stone-200/70 rounded-2xl p-3.5 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-[#0B3B24] text-amber-300 font-bold flex items-center justify-center text-sm shadow-xs shrink-0 font-serif">
                        <span class="material-symbols-outlined">sentiment_satisfied</span>
                    </div>
                    <div>
                        <strong class="text-stone-900 font-serif text-xs block">Ust. Ahmad Syakir, Lc. M.A.</strong>
                        <span class="text-[11px] text-emerald-800 font-medium block"><span class="material-symbols-outlined">call</span> +966 50 123 4567</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- 3. Bagian Bawah: Dua Kolom (Jadwal Manasik & Rencana Perjalanan) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        
        <!-- KOLOM KIRI: Jadwal Bimbingan Manasik (Col 5) -->
        <div class="lg:col-span-5 bg-white rounded-[32px] p-6 sm:p-7 border border-stone-200 shadow-sm space-y-5">
            <div class="border-b border-stone-100 pb-3">
                <h3 class="text-base font-bold font-serif text-stone-900 flex items-center gap-2">
                    <span class="material-symbols-outlined">assignment_add</span> Jadwal Bimbingan Manasik
                </h3>
                <p class="text-xs text-stone-500 mt-0.5 font-sans">
                    Wajib dihadiri seluruh calon jemaah untuk pemahaman rukun, wajib, serta tata cara ihram.
                </p>
            </div>

            <!-- List Jadwal Manasik -->
            <div class="space-y-4 text-xs font-sans">
                
                <!-- Manasik 1 (Hadir) -->
                <div class="bg-emerald-50/70 border border-emerald-200 rounded-2xl p-4 space-y-1.5 relative">
                    <div class="flex justify-between items-center">
                        <strong class="text-xs font-bold text-emerald-950 font-serif">Manasik Teori 1</strong>
                        <span class="bg-emerald-100 text-emerald-800 font-bold text-[10px] px-2.5 py-0.5 rounded-full">Hadir</span>
                    </div>
                    <p class="text-stone-800 font-bold text-xs">Fiqih Ibadah Umrah & Niat</p>
                    <p class="text-[11px] text-stone-600">Sabtu, 08 Nov 2026 • Hotel Santika Premiere</p>
                </div>

                <!-- Manasik 2 (Berikutnya / Sedang Berjalan) -->
                <div class="bg-amber-50 border-2 border-amber-300 rounded-2xl p-4 space-y-1.5 relative shadow-xs">
                    <div class="flex justify-between items-center">
                        <strong class="text-xs font-bold text-amber-950 font-serif">Manasik Praktik 2 <span class="text-[10px] text-amber-800 font-normal">(Berikutnya)</span></strong>
                        <span class="bg-amber-500 text-white font-bold text-[10px] px-2.5 py-0.5 rounded-full">Mendatang</span>
                    </div>
                    <p class="text-stone-900 font-bold text-xs">Praktik Thawaf, Sa'i, & Tahalul</p>
                    <p class="text-[11px] text-stone-700">Ahad, 29 Nov 2026 • Asrama Haji Pondok Gede</p>
                    <p class="text-[11px] text-amber-800 font-medium pt-1 border-t border-amber-200/60">
                        Pukul 08.00 - 12.00 WIB (Bawa Kain Ihram)
                    </p>
                </div>

                <!-- Manasik 3 (Sesi 3) -->
                <div class="bg-stone-50 border border-stone-200 rounded-2xl p-4 space-y-1.5 opacity-80">
                    <div class="flex justify-between items-center">
                        <strong class="text-xs font-bold text-stone-700 font-serif">Pembekalan Akhir</strong>
                        <span class="bg-stone-200 text-stone-700 font-bold text-[10px] px-2.5 py-0.5 rounded-full">Sesi 3</span>
                    </div>
                    <p class="text-stone-800 font-bold text-xs">Koper & Teknis Keberangkatan</p>
                    <p class="text-[11px] text-stone-500">Sabtu, 12 Des 2026 • Zoom Online</p>
                </div>

            </div>

            <!-- Tombol Petunjuk Lokasi -->
            <button onclick="alert('Membuka peta lokasi manasik...')" class="w-full bg-stone-100 hover:bg-stone-200 text-stone-800 font-bold py-3 rounded-2xl text-xs transition cursor-pointer flex items-center justify-center gap-2 shadow-xs font-sans">
                <span class="material-symbols-outlined">location_on</span>Petunjuk Lokasi Manasik
            </button>
        </div>

        <!-- KOLOM KANAN: Rencana Rangkaian Perjalanan / Itinerary (Col 7) -->
        <div class="lg:col-span-7 bg-white rounded-[32px] p-6 sm:p-7 border border-stone-200 shadow-sm space-y-5">
            <div class="flex justify-between items-center border-b border-stone-100 pb-3">
                <h3 class="text-base font-bold font-serif text-stone-900 flex items-center gap-2">
                    <span class="material-symbols-outlined">map_search</span> Rencana Rangkaian Perjalanan (Itinerary 12 Hari)
                </h3>
                <span class="text-[11px] text-stone-500 font-sans">Rute: Jakarta - Madinah - Makkah - Jakarta</span>
            </div>

            <!-- Timeline Itinerary List -->
            <div class="space-y-6 relative pl-6 before:absolute before:left-2.5 before:top-2 before:bottom-2 before:w-0.5 before:bg-stone-200 text-xs font-sans">
                
                <!-- Hari 1 -->
                <div class="relative space-y-1.5">
                    <span class="absolute -left-[27px] top-1.5 w-3.5 h-3.5 rounded-full bg-amber-500 border-2 border-white ring-2 ring-amber-100"></span>
                    <div class="flex justify-between items-center">
                        <h4 class="text-xs font-bold text-stone-900 font-serif">Hari Ke-1: Keberangkatan Jakarta → Madinah Al-Munawwarah</h4>
                        <span class="text-[11px] font-bold text-amber-700 bg-amber-50 px-2.5 py-0.5 rounded-md border border-amber-200">15 Des 2026</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed text-[11px]">
                        Berkumpul di Bandara Soetta T3 pukul 07.30 WIB. Take off dengan SV-819 pukul 11.30 WIB, Tiba di Bandara Madinah (MED) sore hari, proses imigrasi dan check in Hotel Anwar Al Madinah. Shalat Maghrib & Isya berjamaah di Masjid Nabawi.
                    </p>
                </div>

                <!-- Hari 2 s.d 4 -->
                <div class="relative space-y-1.5 pt-2">
                    <span class="absolute -left-[27px] top-3.5 w-3.5 h-3.5 rounded-full bg-emerald-600 border-2 border-white ring-2 ring-emerald-100"></span>
                    <div class="flex justify-between items-center">
                        <h4 class="text-xs font-bold text-stone-900 font-serif">Hari Ke-2 s.d 4: Ziarah Madinah, Raudhah & Masjid Quba</h4>
                        <span class="text-[11px] font-bold text-stone-600 bg-stone-100 px-2.5 py-0.5 rounded-md">16 - 18 Des 2026</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed text-[11px]">
                        Ziarah Makam Rasulullah SAW & sahabat, tasreh resmi masuk ke Raudhah Syarif dipandu Muthawwif. Dilanjutkan city tour Kota Madinah (Masjid Quba, Jabal Uhud, Kebun Kurma, dan Masjid Qiblatain).
                    </p>
                </div>

                <!-- Hari 5 -->
                <div class="relative space-y-1.5 pt-2">
                    <span class="absolute -left-[27px] top-3.5 w-3.5 h-3.5 rounded-full bg-amber-500 border-2 border-white ring-2 ring-amber-100"></span>
                    <div class="flex justify-between items-center">
                        <h4 class="text-xs font-bold text-stone-900 font-serif">Hari Ke-5: Ambil Miqat Bir Ali → Makkah & Pelaksanaan Umrah 1</h4>
                        <span class="text-[11px] font-bold text-amber-700 bg-amber-50 px-2.5 py-0.5 rounded-md border border-amber-200">19 Des 2026</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed text-[11px]">
                        Mengenakan pakaian ihram dari hotel, menuju Bir Ali untuk niat umrah. Perjalanan ke Makkah menggunakan Kereta Cepat Haramain (HHR). Check-in Pullman Zamzam Makkah dan bersama-sama menunaikan Thawaf, Sa'i, dan Tahallul Umrah Wajib.
                    </p>
                </div>

                <!-- Hari 6 s.d 10 -->
                <div class="relative space-y-1.5 pt-2">
                    <span class="absolute -left-[27px] top-3.5 w-3.5 h-3.5 rounded-full bg-emerald-600 border-2 border-white ring-2 ring-emerald-100"></span>
                    <div class="flex justify-between items-center">
                        <h4 class="text-xs font-bold text-stone-900 font-serif">Hari Ke-6 s.d 10: Memperbanyak Ibadah di Masjidil Haram & Ziarah Makkah</h4>
                        <span class="text-[11px] font-bold text-stone-600 bg-stone-100 px-2.5 py-0.5 rounded-md">20 - 24 Des 2026</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed text-[11px]">
                        I'tikaf, thawaf sunnah, dan shalat fardhu di pelataran Ka'bah. City tour Jabal Tsur, Padang Arafah, Muzdalifah, Mina, dan Jabal Nur (Gua Hira). Kesempatan mengambil Miqat Umrah Sunnah di Ji'ranah bagi jemaah yang berkenan.
                    </p>
                </div>

                <!-- Hari 11 & 12 -->
                <div class="relative space-y-1.5 pt-2">
                    <span class="absolute -left-[27px] top-3.5 w-3.5 h-3.5 rounded-full bg-amber-500 border-2 border-white ring-2 ring-amber-100"></span>
                    <div class="flex justify-between items-center">
                        <h4 class="text-xs font-bold text-stone-900 font-serif">Hari Ke-11 & 12: Thawaf Wada' & Kepulangan ke Tanah Air</h4>
                        <span class="text-[11px] font-bold text-amber-700 bg-amber-50 px-2.5 py-0.5 rounded-md border border-amber-200">25 - 26 Des 2026</span>
                    </div>
                    <p class="text-stone-600 leading-relaxed text-[11px]">
                        Melaksanakan Thawaf Wada' (perpisahan). Menuju Bandara Internasional King Abdulaziz Jeddah. Terbang kembali menuju Jakarta dengan Saudia Airlines. Insya Allah tiba di Bandara Soekarno Hatta dengan selamat dan meraih predikat Umrah Maqbulah.
                    </p>
                </div>

            </div>
        </div>

    </div>
@endsection