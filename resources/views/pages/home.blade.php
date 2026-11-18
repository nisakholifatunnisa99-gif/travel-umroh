@extends('layouts.app')

@section('title', 'Beranda - Rozwia Islamic Travel')

@section('content')

<div class="w-full space-y-24 pb-24">

    <!-- ================= HERO SECTION PROFESIONAL & ANIMATIF ================= -->
<div class="relative w-full bg-[#0B3B24] min-h-[85vh] flex items-center justify-center overflow-hidden pt-28 pb-20 px-4 sm:px-6 lg:px-8">
    
    <!-- Latar Belakang Gambar dengan Overlay Gradasi & Efek Depth -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/makkah-home.jpg') }}" alt="Background Masjidil Haram" class="w-full h-full object-cover opacity-20 transform scale-105 animate-pulse duration-10000">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0B3B24]/90 via-[#0B3B24]/70 to-[#0B3B24]"></div>
    </div>

    <!-- Dekorasi Cahaya / Glow Halus di Background -->
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Konten Utama Hero (Menggunakan Kelas Animasi animate-fade-in) -->
    <div class="relative z-10 max-w-4xl mx-auto text-center space-y-6 animate-fade-in">
        
        

        <!-- Judul Utama (Konsisten H1 & Font Serif) -->
     <h1 class="text-4xl sm:text-6xl font-bold font-serif text-white tracking-tight animate-fade-in">
    Satu Niat, Satu Tujuan, <br>
    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-amber-400 to-amber-200 animate-pulse">
        Menuju Baitullah.
    </span>
</h1>

        <!-- Deskripsi Singkat -->
        <p class="text-emerald-100/90 text-sm sm:text-base font-serif max-w-2xl mx-auto leading-relaxed">
            Awali perjalanan spiritual Anda bersama ROZWIA Islamic Travel. Ciptakan pengalaman ibadah yang khusyuk, amanah, dan berkesan dengan fasilitas terbaik.
        </p>

        <!-- Tombol Aksi (CTA) dengan Efek Hover & Transisi Halus -->
        <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('paket.umroh') }}" class="bg-amber-500 hover:bg-amber-400 text-emerald-950 font-serif font-bold text-xs sm:text-sm px-8 py-4 rounded-2xl shadow-xl transition transform hover:-translate-y-1 flex items-center gap-2">
                <span>Lihat Paket Perjalanan</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="https://wa.me/6289518829438?text=Assalamualaikum%20ROZWIA,%20saya%20ingin%20berkonsultasi%20mengenai%20perjalanan%20ibadah." target="_blank" class="bg-emerald-900/80 hover:bg-emerald-800 text-white border border-emerald-700/70 font-serif font-semibold text-xs sm:text-sm px-7 py-4 rounded-2xl backdrop-blur-md shadow-md transition transform hover:-translate-y-1 flex items-center gap-2">
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
                                </svg> Konsultasi Gratis
            </a>
        </div>

        <!-- Statistik Kecil di Bawah Hero (Menambah Kesan Profesional) -->
        <div class="grid grid-cols-3 gap-4 max-w-lg mx-auto pt-10 border-t border-emerald-800/60 text-white font-serif">
            <div class="text-center">
                <span class="block text-xl sm:text-2xl font-bold text-amber-400">100%</span>
                <span class="text-[11px] text-emerald-200/80">Berizin Kemenag</span>
            </div>
            <div class="text-center border-x border-emerald-800/60">
                <span class="block text-xl sm:text-2xl font-bold text-amber-400">Bintang 5</span>
                <span class="text-[11px] text-emerald-200/80">Hotel Dekat Haram</span>
            </div>
            <div class="text-center">
                <span class="block text-xl sm:text-2xl font-bold text-amber-400">24/7</span>
                <span class="text-[11px] text-emerald-200/80">Pendamping Tim</span>
            </div>
        </div>

    </div>
</div>


    <!-- 2. SECTION PILIHAN PAKET UMROH (POSISI DI ATAS) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <div class="space-y-2">
            <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs block">PAKET PERJALANAN</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-[#0B3B24] font-serif">Pilihan Paket Umroh</h2>
            <p class="text-stone-600 text-sm">Temukan pilihan paket dan jadwal keberangkatan umroh.</p>
            <div class="w-12 h-1 bg-amber-700/60 rounded-full mt-2"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Card 1: Umroh Reguler -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200/80 flex flex-col justify-between hover:shadow-md transition duration-300">
                <div class="space-y-6">
                    <div class="relative h-64 sm:h-72 rounded-2xl overflow-hidden shadow-xs">
                        <img src="{{ asset('img/pilihan-paket.jpg') }}" alt="Umroh Reguler" class="w-full h-full object-cover">
                    </div>

                    <div class="space-y-1">
                        <h3 class="text-2xl font-bold text-[#0B3B24] font-serif">Umroh Reguler</h3>
                        <p class="text-xs text-stone-500 font-medium">9 Hari . Makkah & Madinah</p>
                    </div>

                    <div class="text-2xl sm:text-3xl font-extrabold text-stone-900 font-serif">
                        Rp30.000.000
                    </div>

                    <div class="space-y-2 pt-2 border-t border-stone-100">
                        <span class="text-xs font-bold text-stone-700 block">Fasilitas:</span>
                        <ul class="text-xs text-stone-600 space-y-1">
                            <li>Hotel Makkah & Madinah</li>
                            <li>Tiket Pesawat</li>
                        </ul>
                    </div>
                </div>

                <div class="pt-8 mt-6 border-t border-stone-100 flex justify-end">
                    <a href="{{ route('paket.detail', 1) }}" class="bg-[#D4B996] hover:bg-[#c4a982] text-stone-900 font-bold text-xs px-6 py-3 rounded-xl shadow-xs transition transform hover:-translate-y-0.5">
                        Detail Paket
                    </a>
                </div>
            </div>

            <!-- Card 2: Umroh VIP -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200/80 flex flex-col justify-between hover:shadow-md transition duration-300">
                <div class="space-y-6">
                    <div class="relative h-64 sm:h-72 rounded-2xl overflow-hidden shadow-xs">
                        <img src="{{ asset('img/pilihan-paket.jpg') }}" alt="Umroh VIP" class="w-full h-full object-cover">
                    </div>

                    <div class="space-y-1">
                        <h3 class="text-2xl font-bold text-[#0B3B24] font-serif">Umroh VIP</h3>
                        <p class="text-xs text-stone-500 font-medium">12 Hari . Makkah & Madinah</p>
                    </div>

                    <div class="text-2xl sm:text-3xl font-extrabold text-stone-900 font-serif">
                        Rp45.000.000
                    </div>

                    <div class="space-y-2 pt-2 border-t border-stone-100">
                        <span class="text-xs font-bold text-stone-700 block">Fasilitas:</span>
                        <ul class="text-xs text-stone-600 space-y-1">
                            <li>Hotel Bintang 5</li>
                            <li>Transportasi Eksklusif</li>
                        </ul>
                    </div>
                </div>

                <div class="pt-8 mt-6 border-t border-stone-100 flex justify-end">
                    <a href="{{ route('paket.detail', 2) }}" class="bg-[#D4B996] hover:bg-[#c4a982] text-stone-900 font-bold text-xs px-6 py-3 rounded-xl shadow-xs transition transform hover:-translate-y-0.5">
                        Detail Paket
                    </a>
                </div>
            </div>

        </div>

        <div class="pt-4 flex justify-center">
            <a href="{{ route('paket.umroh') }}" class="bg-[#D4B996] hover:bg-[#c4a982] text-stone-900 font-bold text-sm px-8 py-4 rounded-2xl shadow-sm transition flex items-center gap-3">
                Lihat semua paket umroh 
                <span class="w-6 h-6 rounded-full bg-stone-900 text-white flex items-center justify-center text-xs">&rarr;</span>
            </a>
        </div>

    </section>
    <!-- ===================================================================== -->
    <!-- 3. SECTION PAKET HAJI KHUSUS ROZWIA (POSISI DI BAWAH PILIHAN UMROH)  -->
    <!-- ===================================================================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-[#F4EFE6] rounded-[40px] border border-stone-200/80 p-8 sm:p-12 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Kolom Kiri: Gambar dengan Bentuk Lengkung Unik & Tulisan Dream Haji -->
                <div class="lg:col-span-5 relative">
                    <div class="relative h-[420px] sm:h-[480px] w-full rounded-t-[180px] rounded-b-[32px] overflow-hidden shadow-md">
                        <img src="{{ asset('img/paket-haji.jpg') }}" alt="Paket Haji Khusus ROZWIA" class="w-full h-full object-cover">
                        <!-- Overlay tipis agar teks lebih kontras -->
                        <div class="absolute inset-0 bg-black/20"></div>
                        <!-- Teks Artistik 'Dream Haji' -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-white text-5xl sm:text-6xl italic tracking-wide drop-shadow-lg opacity-90 select-none" style="font-family: 'Abhaya Libre', serif; font-weight: 600;">
                                Dream Haji
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Konten Teks & Fitur Keunggulan -->
                <div class="lg:col-span-7 space-y-6" style="font-family: 'Abhaya Libre', serif;">
                    
                    <!-- Badge Program -->
                    <div>
                        <span class="inline-block border border-stone-300 text-stone-800 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wider bg-white/60 font-sans">
                            PROGRAM HAJI KHUSUS
                        </span>
                    </div>

                    <!-- Judul & Deskripsi -->
                    <div class="space-y-3">
                        <h2 class="text-3xl sm:text-4xl font-semibold text-[#0B3B24]" style="font-family: 'Abhaya Libre', serif;">
                            Paket Haji Khusus ROZWIA
                        </h2>
                        <p class="text-xs sm:text-sm text-stone-600 font-sans leading-relaxed">
                            Wujudkan perjalanan ibadah haji yang nyaman dan berkesan bersama ROZWIA dengan pelayanan serta pendamping selama perjalanan.
                        </p>
                    </div>

                    <!-- Info Pendaftaran -->
                    <p class="text-xs font-bold text-amber-800 font-sans tracking-wide">
                        Pendaftaran dibuka &bull; Keberangkatan 2027
                    </p>

                    <!-- Daftar Tombol / Fitur Keunggulan -->
                    <div class="space-y-3 font-sans pt-2">
                        <!-- Fitur 1 -->
                        <div class="bg-white rounded-2xl p-4 border border-stone-200 shadow-xs flex items-center gap-4 hover:border-amber-700/50 transition">
                            <span class="material-symbols-outlined text-amber-500">travel</span>
                            <span class="text-xs sm:text-sm font-bold text-stone-800">Jadwal keberangkatan</span>
                        </div>

                        <!-- Fitur 2 -->
                        <div class="bg-white rounded-2xl p-4 border border-stone-200 shadow-xs flex items-center gap-4 hover:border-amber-700/50 transition">
                           <span class="material-symbols-outlined text-amber-500">group</span>
                            <span class="text-xs sm:text-sm font-bold text-stone-800">Pendamping Jamaah</span>
                        </div>

                        <!-- Fitur 3 -->
                        <div class="bg-white rounded-2xl p-4 border border-stone-200 shadow-xs flex items-center gap-4 hover:border-amber-700/50 transition">
                            <span class="material-symbols-outlined text-amber-500">home</span>
                            <span class="text-xs sm:text-sm font-bold text-stone-800">Akomodasi Premiun</span>
                        </div>
                    </div>

                    <!-- Tombol Aksi Bawah -->
                    <div class="flex flex-wrap items-center gap-4 pt-4 font-sans">
                        <a href="{{ route('paket.detail', 3) }}" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold text-xs sm:text-sm px-7 py-3.5 rounded-full transition shadow-md">
                            Lihat Detail Haji
                        </a>
                        <a href="#" class="bg-[#D4B996]/60 hover:bg-[#D4B996] text-stone-900 border border-stone-300 font-bold text-xs sm:text-sm px-7 py-3.5 rounded-full transition shadow-xs">
                            Konsultasi Haji
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- 3. SECTION LAYANAN KAMI -->
    <section id="layanan-kami" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 border-t border-stone-200/70 space-y-10">
        
        <div class="space-y-2">
            <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs block">BERSAMA ROZWIA</span>
            <h2 class="text-3xl sm:text-5xl font-bold text-[#0B3B24] font-serif">Layanan Kami</h2>
            <p class="text-stone-600 text-sm sm:text-base">Rasakan pengalaman ibadah yang nyaman dan berkesan bersama ROZWIA</p>
            <div class="w-12 h-1 bg-amber-700/60 rounded-full mt-3"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            
            <!-- Card 01 -->
            <div class="bg-white rounded-3xl p-8 shadow-xs border border-stone-200/70 flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition duration-300 group">
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-700 shrink-0 group-hover:scale-110 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Pelayanan Ramah</h3>
                        <p class="text-stone-600 text-sm leading-relaxed">Pelayanan penuh perhatian untuk setiap jamaah sejak pendaftaran hingga kembali ke tanah air.</p>
                    </div>
                </div>
                <div class="pt-6 flex justify-end"><span class="text-xs font-bold text-amber-800/70">01</span></div>
            </div>

            <!-- Card 02 -->
            <div class="bg-white rounded-3xl p-8 shadow-xs border border-stone-200/70 flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition duration-300 group">
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-700 shrink-0 group-hover:scale-110 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Pendamping Jamaah</h3>
                        <p class="text-stone-600 text-sm leading-relaxed">Muthawif dan tim pendamping berpengalaman selama perjalanan ibadah dengan nyaman dan sesuai sunnah.</p>
                    </div>
                </div>
                <div class="pt-6 flex justify-end"><span class="text-xs font-bold text-amber-800/70">02</span></div>
            </div>

            <!-- Card 03 -->
            <div class="bg-white rounded-3xl p-8 shadow-xs border border-stone-200/70 flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition duration-300 group">
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-700 shrink-0 group-hover:scale-110 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Jadwal Terencana</h3>
                        <p class="text-stone-600 text-sm leading-relaxed">Informasi keberangkatan pasti dan susunan agenda ibadah yang teratur serta tidak terburu-buru.</p>
                    </div>
                </div>
                <div class="pt-6 flex justify-end"><span class="text-xs font-bold text-amber-800/70">03</span></div>
            </div>

            <!-- Card 04 -->
            <div class="bg-white rounded-3xl p-8 shadow-xs border border-stone-200/70 flex flex-col justify-between hover:shadow-md hover:-translate-y-1 transition duration-300 group">
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 border border-amber-200/60 flex items-center justify-center text-amber-700 font-serif font-extrabold text-lg shrink-0 group-hover:scale-110 transition">Rp</div>
                    <div class="space-y-2">
                        <h3 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Biaya Transparan</h3>
                        <p class="text-stone-600 text-sm leading-relaxed">Informasi rincian biaya dan fasilitas yang jelas sejak awal tanpa ada biaya tersembunyi.</p>
                    </div>
                </div>
                <div class="pt-6 flex justify-end"><span class="text-xs font-bold text-amber-800/70">04</span></div>
            </div>

        </div>

        <div class="bg-[#0B3B24] text-[#FDFBF7] px-7 py-4 rounded-2xl shadow-sm flex flex-col sm:flex-row items-center justify-between gap-2 text-xs sm:text-sm">
            <p class="font-medium">Lebih tenang mempersiapkan perjalanan, lebih fokus menjalankan ibadah.</p>
            <span class="text-[#D4B996] font-serif italic hidden sm:inline">~ Amanah & Sesuai Syariat ~</span>
        </div>

    </section>


    <!-- 4. SECTION TESTIMONI JAMAAH -->
    <section id="testimoni" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 border-t border-stone-200/70 space-y-12">
        
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8">
            <div class="space-y-4 max-w-2xl">
                <span class="inline-block bg-[#E5D3B3] border border-amber-700/30 text-emerald-950 font-serif font-semibold text-xs sm:text-sm px-6 py-2 rounded-full shadow-2xs">
                    Testimoni Jamaah
                </span>
                <h2 class="text-3xl sm:text-5xl font-bold text-stone-950 font-serif leading-tight">
                    Kata Mereka yang Berangkat Bersama ROZWIA
                </h2>
                <p class="text-stone-700 text-sm sm:text-base font-serif">
                    Cerita dan pengalaman jamaah yang telah menjalani ibadah bersama kami.
                </p>
            </div>

            <div class="bg-white px-7 py-4 rounded-full shadow-sm border border-stone-200/70 flex items-center gap-5 self-start lg:self-end">
                <span class="text-2xl sm:text-3xl font-extrabold text-emerald-950 font-serif tracking-tight">4,9</span>
                <div class="space-y-0.5">
                    <div class="flex items-center gap-1 text-amber-400 text-base sm:text-lg">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <p class="text-[11px] font-serif text-emerald-950 font-medium">Rating dan Ulasan dari Jamaah</p>
                </div>
            </div>
        </div>

        <div class="flex overflow-x-auto gap-6 pb-6 snap-x snap-mandatory scroll-smooth">
            <!-- Testimoni 1 -->
            <div class="min-w-[300px] sm:min-w-[340px] max-w-[340px] bg-white rounded-2xl p-7 shadow-xs border border-stone-200/70 flex flex-col justify-between snap-start">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-400 text-xl"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-stone-800 text-xs sm:text-sm font-serif leading-relaxed">Pembimbing dan tim yang sabar mendampingi, terutama orang tua atau jamaah lansia. Ini biasanya yang paling menenangkan calon jamaah.</p>
                </div>
                <div class="pt-6 mt-6 flex items-center gap-3.5">
                    <div class="w-11 h-11 rounded-full bg-amber-100 border border-amber-300 flex items-center justify-center text-lg shrink-0">👨🏻</div>
                    <div class="text-xs font-serif"><p class="font-bold text-stone-900">Rafid</p><p class="text-stone-600">Bogor . Haji (2022)</p></div>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="min-w-[300px] sm:min-w-[340px] max-w-[340px] bg-white rounded-2xl p-7 shadow-xs border border-stone-200/70 flex flex-col justify-between snap-start">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-400 text-xl"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-stone-800 text-xs sm:text-sm font-serif leading-relaxed">Hotel, jarak ke Masjidil Haram, makanan dan transportasi selama disana sangat terjamin. Calon jamaah tidak perlu khawatir soal kenyamanan.</p>
                </div>
                <div class="pt-6 mt-6 flex items-center gap-3.5">
                    <div class="w-11 h-11 rounded-full bg-emerald-100 border border-emerald-300 flex items-center justify-center text-lg shrink-0">🧔🏻</div>
                    <div class="text-xs font-serif"><p class="font-bold text-stone-900">Raid</p><p class="text-stone-600">Bogor . Umrah (2020)</p></div>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="min-w-[300px] sm:min-w-[340px] max-w-[340px] bg-white rounded-2xl p-7 shadow-xs border border-stone-200/70 flex flex-col justify-between snap-start">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-400 text-xl"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-stone-800 text-xs sm:text-sm font-serif leading-relaxed">Perjalanan berjalan sesuai rencana, informasi jelas, dan tidak ada kebingungan saat di tengah jalan. Semuanya terorganisir dengan sangat baik.</p>
                </div>
                <div class="pt-6 mt-6 flex items-center gap-3.5">
                    <div class="w-11 h-11 rounded-full bg-rose-100 border border-rose-300 flex items-center justify-center text-lg shrink-0">🧕🏻</div>
                    <div class="text-xs font-serif"><p class="font-bold text-stone-900">Rinzani</p><p class="text-stone-600">Jakarta . Umrah (2023)</p></div>
                </div>
            </div>

            <!-- Testimoni 4 -->
            <div class="min-w-[300px] sm:min-w-[340px] max-w-[340px] bg-white rounded-2xl p-7 shadow-xs border border-stone-200/70 flex flex-col justify-between snap-start">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-400 text-xl"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-stone-800 text-xs sm:text-sm font-serif leading-relaxed">Pengurusan visa dan dokumen dari awal keberangkatan sampai pulang sangat dibantu penuh oleh tim ROZWIA. Ibadah terasa jauh lebih khusyuk dan tenang.</p>
                </div>
                <div class="pt-6 mt-6 flex items-center gap-3.5">
                    <div class="w-11 h-11 rounded-full bg-amber-100 border border-amber-300 flex items-center justify-center text-lg shrink-0">👩🏻‍💼</div>
                    <div class="text-xs font-serif"><p class="font-bold text-stone-900">Olif</p><p class="text-stone-600">Bandung . Umrah (2024)</p></div>
                </div>
            </div>

            <!-- Testimoni 5 -->
            <div class="min-w-[300px] sm:min-w-[340px] max-w-[340px] bg-white rounded-2xl p-7 shadow-xs border border-stone-200/70 flex flex-col justify-between snap-start">
                <div class="space-y-4">
                    <div class="flex items-center gap-1 text-amber-400 text-xl"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-stone-800 text-xs sm:text-sm font-serif leading-relaxed">Fasilitas hotel bintang lima dekat pelataran membuat ibadah ke Masjidil Haram sangat mudah kapan saja. Muthawifnya ramah dan ilmunya sangat membimbing.</p>
                </div>
                <div class="pt-6 mt-6 flex items-center gap-3.5">
                    <div class="w-11 h-11 rounded-full bg-emerald-100 border border-emerald-300 flex items-center justify-center text-lg shrink-0">👨🏻‍💼</div>
                    <div class="text-xs font-serif"><p class="font-bold text-stone-900">Wildan</p><p class="text-stone-600">Depok . Haji Khusus (2025)</p></div>
                </div>
            </div>
        </div>

    </section>


    <!-- 5. SECTION BANNER BAWAH (SESUAI GAMBAR REFERENSI) -->
    <section id="cta-bawah" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4">
        <div class="bg-[#0B3B24] rounded-[32px] p-8 sm:p-14 shadow-xl border border-emerald-900 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
            
            <div class="space-y-3 max-w-xl">
                <h2 class="text-2xl sm:text-4xl font-serif font-bold text-white tracking-tight">
                    Siap Memulai Perjalanan Menuju Baitullah?
                </h2>
                <p class="text-emerald-100/85 text-sm sm:text-base font-serif leading-relaxed">
                    Jangan ragu untuk mengambil langkah pertama. Daftarkan diri Anda atau konsultasi kebutuhan perjalanan Umrah bersama tim ROZWIA.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-4 shrink-0">
                <a href="{{ route('paket.umroh') }}" class="bg-amber-500 hover:bg-amber-400 text-emerald-950 font-serif font-bold text-sm px-7 py-3.5 rounded-2xl shadow-md transition transform hover:-translate-y-0.5">
                    Daftar Paket
                </a>
                <a href="https://wa.me/6289518829438?text=Assalamualaikum%20ROZWIA,%20saya%20ingin%20bertanya%20mengenai%20jadwal%20keberangkatan%20dan%20paket%20perjalanan." target="_blank" class="bg-emerald-800 hover:bg-emerald-700 text-white font-serif font-bold text-sm px-7 py-3.5 rounded-2xl border border-emerald-600/50 shadow-md transition transform hover:-translate-y-0.5">
                    Chat Via WhatsApp
                </a>
            </div>

        </div>
    </section>

</div>

@endsection