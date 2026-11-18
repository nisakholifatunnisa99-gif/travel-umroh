@extends('layouts.admin') {{-- Sesuaikan dengan layout utama Anda --}}

@section('title', 'Dashboard Beranda - ROZWIA Islamic Travel')

@section('content')
<div class="space-y-6 font-serif">
    
    <!-- 1. Banner Sapaan Utama -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-10 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="flex items-center gap-6">
            <div class="w-20 h-20 rounded-2xl bg-white/10 border border-white/20 flex items-center justify-center shrink-0">
                <img src="{{ asset('images/logo-rozwia.png') }}" alt="Logo ROZWIA" class="w-12 h-12 object-contain" onerror="this.src='https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=200'">
            </div>
            <div class="space-y-2">
                <h1 class="text-2xl sm:text-3xl font-bold flex items-center gap-2">
                    Selamat Datang di Dashboard Admin <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 128 128">
	<path d="M0 0h128v128H0z" fill="none" />
	<path fill="#ffca28" d="M93.3 60c.2.3.7.1.7-.2c.6-5.4 2.2-20.3 12.8-23.5c3.4-1 6.8 1.4 7.2 4.5c.7 5-5 17.9-4.5 29.7c.1 1.9 3.3 22-5.2 33.9s-28.7 24-48.8 5.6c-10.4-9.5-10.4-13.3-23.3-26.6c-2.6-2.6-13-14-15.8-17.5c-3.7-4.7 2.2-10.9 6.7-7.7c2.1 1.5 20.7 17.1 21.4 17.8c1.4 1.2 3.1-.5 2.1-1.7c-11.4-15-22.4-28.5-25.4-33.7s4.2-10.8 8.4-6.3c2.9 3 24.4 28.1 25.4 29.2s2.7-.3 2.1-1.7c-.7-1.3-18.1-31.6-21.2-38.5c-2.7-6.1 6.3-11.8 10.5-5.5c3.4 5 22.4 36.6 23.1 37.7c.9 1.6 2.9.6 2.1-1.2C71 53 59.3 21 58.4 17.7c-1.6-5.8 6.7-10.6 10.6-4c5.3 9.1 15.8 36.9 24.3 46.3" />
	<defs>
		<path id="SVGz28WJcgm" d="M93.3 60c.2.3.7.1.7-.2c.6-5.4 2.2-20.3 12.8-23.5c3.4-1 6.8 1.4 7.2 4.5c.7 5-5 17.9-4.5 29.7c.1 1.9 3.3 22-5.2 33.9s-28.7 24-48.8 5.6c-10.4-9.5-10.4-13.3-23.3-26.6c-2.6-2.6-13-14-15.8-17.5c-3.7-4.7 2.2-10.9 6.7-7.7c2.1 1.5 20.7 17.1 21.4 17.8c1.4 1.2 3.1-.5 2.1-1.7c-11.4-15-22.4-28.5-25.4-33.7s4.2-10.8 8.4-6.3c2.9 3 24.4 28.1 25.4 29.2s2.7-.3 2.1-1.7c-.7-1.3-18.1-31.6-21.2-38.5c-2.7-6.1 6.3-11.8 10.5-5.5c3.4 5 22.4 36.6 23.1 37.7c.9 1.6 2.9.6 2.1-1.2C71 53 59.3 21 58.4 17.7c-1.6-5.8 6.7-10.6 10.6-4c5.3 9.1 15.8 36.9 24.3 46.3" />
	</defs>
	<clipPath id="SVGNiarLeAP">
		<use href="#SVGz28WJcgm" />
	</clipPath>
	<g fill="#faa700" clip-path="url(#SVGNiarLeAP)">
		<path d="M91.2 60.2c-12.4 10.1-17.9 24.5-7.7 39.5c.9 1.3 2.8.1 2-1.4c-4.2-7.5-7.3-21 7.2-35.1c1.7.8 3.7-.9 3.8-2.4c1.1-9.4 2.2-17.2 9.2-21.6c2.7-1.7 6.2-.5 6.4 3.6c0 0 2.2.2 3.1.3c.5-2.1 1.5-5.9 1.5-6s-11.8-4.5-11.8-4.5L94.6 42.8zm-20-4.1c1.4-.7 2.6-1.8 2-3.3c-.6-1.6-11.7-31.8-12.4-34.1c-1.4-4.2 2.1-7.5 5.2-6.1c1.7.8 2.5-1.9 1.6-2.3s-3-2.3-7.2-.2c-7.5 3.8-3.1 12.2-1.1 17.1s11.9 28.9 11.9 28.9m-14.5 7.5c1.7-1.2 3-2.2 1.5-4.6c-1-1.6-17.9-32.3-19.6-35.3c-2.5-4.3 2.7-8.1 5.6-5.4c1.3 1.2 3.3-1.4 2.3-2.4s-4.5-3.9-8.9-1s-4.5 6.4-3.9 7.9c.5 1.5 23 40.8 23 40.8m-10 12.3c1.2-1.8 2-2.7.3-5S25.1 42.2 24 40.7c-2.8-3.7 1.3-6.9 3.3-5.8c1.9 1.1 3-2 1.4-2.8s-4.2-1.7-6.6 0s-3.8 5.2-3.4 7.2c.3 2 28 36.6 28 36.6" />
		<path d="M92.8 113.6c-16.2 7.7-28.3 1.7-36.1-5.9c-8.9-8.7-13.1-16.7-19-22.1c-2-1.9-17.8-18.7-19.7-21.6c-1.5-2.4 1.5-6.5 4.8-4.2c2.1 1.4 3.1-1.6 1.7-2.4s-4.5-2.5-7.8 0c-3.3 2.4-3.4 6.7-2.6 8.1s49.4 57.2 49.4 57.2l19.8-.5l10.6-6.5z" />
	</g>
	<defs>
		<use href="#SVGz28WJcgm" id="SVGN2ejHeeZ" />
	</defs>
	<clipPath id="SVGBT5vpbfx">
		<use href="#SVGN2ejHeeZ" />
	</clipPath>
	<g fill="#b55e19" clip-path="url(#SVGBT5vpbfx)">
		<path d="M111.5 36c.5 1.3 1.1 3.6.5 6.7c-2.3 11.6-6.1 18.4-4.9 30.9c2.2 24-6.2 42.2-35.1 45.8c-2.9.4-2.1 2.6-.6 2.4c.7-.1 21.3-3.8 21.3-3.8s19.1-16.3 19.1-16.5s4.8-62.4 4.8-62.4zm-50-25.5c1.3.2 4.1 1.3 6.1 5.2s11.8 26.4 13.1 28.8s6.6 14.3 10.9 17.9c1.4 1.1 2.1-.8 2.1-.8l.1-3.1L70.6 5.7l-7.7.3zm9.7 45.6c-1.9.9-3.3 1.7-4.7-.5C65.6 54 55.9 37.4 43.7 18c-1-1.5-3.3-2.8-5.1-2.1c-1.8.8-2.2-1.5-1.3-2s6.5-3.6 10.3 2.8s23.6 39.4 23.6 39.4m-14.5 7.5c-1.5 1.1-3 2.5-4.9.2c-1.8-2.2-22.3-26.6-23.5-28.1s-3.7-2.8-5.6-1.6c-1.3.8-2.5-1.6-1.7-2.2s5.3-4.6 8.3-1.2s27.4 32.9 27.4 32.9m-10 12.3c-1.3 1.4-2.7 2.2-4.6.8S23.2 61 22.1 60s-4.3-2.5-6.7-.1c-.9.9-2.5-.6-1.6-1.5c.9-1 5.8-6 9.7-2.7s23.2 20.2 23.2 20.2" />
	</g>
	<path fill="#b0bec5" d="M10.6 81.3c3.1 9.2 7.8 14.9 15.5 20.1c1.4 1 .6 3-1 2.3c-7.2-2.9-15.2-9.3-17.1-22c-.3-1.7 2.1-2 2.6-.4m6-5.5c3.1 9.2 7.8 14.9 15.5 20.1c1.4 1 .6 3-1 2.3c-7.2-2.9-15.2-9.3-17.1-22c-.2-1.7 2.1-2 2.6-.4m76.9-41.2c-2.4-9.4-6.8-15.4-14.1-21c-1.4-1-.4-3 1.2-2.3c7 3.3 14.6 10.3 15.6 23.1c.1 1.7-2.3 1.9-2.7.2m6.5-4.8c-2.4-9.4-6.8-15.4-14.1-21c-1.4-1-.4-3 1.2-2.3c7 3.3 14.6 10.3 15.6 23.1c.1 1.6-2.2 1.8-2.7.2" />
</svg>

                </h1>
                <p class="text-xs sm:text-sm text-emerald-100/80 font-sans leading-relaxed max-w-2xl">
                    Kelola seluruh proses perjalanan jamaah mulai dari pemantauan pendaftaran, verifikasi dokumen persyaratan, validasi bukti pembayaran, hingga pembaruan status jamaah. Pantau kesiapan paspor, setoran melalui rekening BSI & Mandiri, serta penerbitan e-Visa Saudi dalam satu dashboard terpadu.
                </p>
            </div>
        </div>
    </div>

    <!-- 2. Tiga Kartu Antrean Cepat -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 font-sans">
        
        <!-- Kartu 1: Antrean Verifikasi Berkas -->
        <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-4">
            <div>
                <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block mb-1">Antrean Verifikasi Berkas</span>
                <div class="flex justify-between items-baseline">
                    <h3 class="text-3xl font-bold text-stone-900 font-serif">16 Berkas</h3>
                    <div class="w-10 h-10 rounded-2xl bg-[#F4EFE6] text-stone-800 flex items-center justify-center text-lg">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                </div>
            </div>
            <div class="pt-4 border-t border-stone-100 flex justify-between items-center text-xs">
                <span class="text-stone-500 font-medium">Butuh pemeriksaan lebih lanjut</span>
                <a href="#" class="font-bold text-[#0B3B24] hover:underline flex items-center gap-1">
                    Verifikasi &rarr;
                </a>
            </div>
        </div>

        <!-- Kartu 2: Antrean Aktivasi Akun -->
        <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-4">
            <div>
                <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block mb-1">Antrean Aktivasi Akun</span>
                <div class="flex justify-between items-baseline">
                    <h3 class="text-3xl font-bold text-stone-900 font-serif">18 Akun</h3>
                    <div class="w-10 h-10 rounded-2xl bg-[#E8F5E9] text-emerald-800 flex items-center justify-center text-lg">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                </div>
            </div>
            <div class="pt-4 border-t border-stone-100 flex justify-between items-center text-xs">
                <span class="text-stone-500 font-medium">Butuh Aktivasi Akun</span>
                <a href="#" class="font-bold text-[#0B3B24] hover:underline flex items-center gap-1">
                    Aktivasi &rarr;
                </a>
            </div>
        </div>

        <!-- Kartu 3: Kelola Status Jamaah -->
        <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-4">
            <div>
                <span class="text-[11px] font-bold text-stone-400 uppercase tracking-wider block mb-1">Kelola Status Jamaah</span>
                <div class="flex justify-between items-baseline">
                    <h3 class="text-3xl font-bold text-stone-900 font-serif">100 Jamaah</h3>
                    <div class="w-10 h-10 rounded-2xl bg-[#F4EFE6] text-amber-800 flex items-center justify-center text-lg">
                        <span class="material-symbols-outlined">group</span>
                    </div>
                </div>
            </div>
            <div class="pt-4 border-t border-stone-100 flex justify-between items-center text-xs">
                <span class="text-stone-500 font-medium">Kelola Status Jamaah</span>
                <a href="#" class="font-bold text-[#0B3B24] hover:underline flex items-center gap-1">
                    Kelola &rarr;
                </a>
            </div>
        </div>

    </div>

    <!-- 3. Bagian Bawah: Grafik Statistik & Rincian Status -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 font-sans">
        
        <!-- Grafik Jumlah Pendaftaran Jamaah (Col 7) -->
        <div class="lg:col-span-7 bg-white rounded-[32px] p-6 sm:p-8 border border-stone-200 shadow-sm space-y-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <h3 class="text-base font-bold text-stone-900 font-serif">Jumlah Pendaftaran Jamaah</h3>
                </div>
                <!-- Toggle Legend / Tab Umroh & Haji -->
                <div class="flex items-center gap-2 bg-[#F4EFE6] p-1 rounded-full text-xs font-semibold">
                    <span class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-white shadow-xs text-[#0B3B24]">
                        <span class="w-2 h-2 rounded-full bg-[#0B3B24]"></span> Umroh
                    </span>
                    <span class="flex items-center gap-1.5 px-3 py-1 rounded-full text-stone-600">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span> Haji
                    </span>
                </div>
            </div>

            <!-- Area Grafik Batang dengan Angka di Atasnya -->
            <div class="pt-6 pb-2 border-b border-stone-100">
                <div class="h-56 flex items-end justify-between gap-3 px-2 border-b border-stone-300 relative text-[10px] text-stone-400">
                    <!-- Garis bantu horizontal -->
                    <div class="absolute inset-x-0 top-0 border-t border-stone-100"></div>
                    <div class="absolute inset-x-0 top-1/4 border-t border-stone-100"></div>
                    <div class="absolute inset-x-0 top-2/4 border-t border-stone-100"></div>
                    <div class="absolute inset-x-0 top-3/4 border-t border-stone-100"></div>

                    <!-- Skala Angka Kiri (0 sampai 30) -->
                    <div class="absolute -left-6 inset-y-0 flex flex-col justify-between text-[10px] text-stone-500 font-sans pointer-events-none">
                        <span>30</span>
                        <span>25</span>
                        <span>20</span>
                        <span>15</span>
                        <span>10</span>
                        <span>5</span>
                        <span>0</span>
                    </div>

                    <!-- Batang 1: Mei 2026 -->
                    <div class="flex-1 flex flex-col items-center gap-1 h-full justify-end z-10">
                        <div class="w-full flex items-end justify-center gap-1.5 h-44">
                            <!-- Umroh: 5 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">5</span>
                                <div style="height: calc(5 / 30 * 100%);" class="w-3.5 bg-[#0B3B24] rounded-t-sm"></div>
                            </div>
                            <!-- Haji: 25 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">25</span>
                                <div style="height: calc(25 / 30 * 100%);" class="w-3.5 bg-emerald-600 rounded-t-sm"></div>
                            </div>
                        </div>
                        <span class="text-[11px] text-stone-700 font-medium mt-2">Mei 2026</span>
                    </div>

                    <!-- Batang 2: Juni 2026 -->
                    <div class="flex-1 flex flex-col items-center gap-1 h-full justify-end z-10">
                        <div class="w-full flex items-end justify-center gap-1.5 h-44">
                            <!-- Umroh: 10 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">10</span>
                                <div style="height: calc(10 / 30 * 100%);" class="w-3.5 bg-[#0B3B24] rounded-t-sm"></div>
                            </div>
                            <!-- Haji: 25 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">25</span>
                                <div style="height: calc(25 / 30 * 100%);" class="w-3.5 bg-emerald-600 rounded-t-sm"></div>
                            </div>
                        </div>
                        <span class="text-[11px] text-stone-700 font-medium mt-2">Juni 2026</span>
                    </div>

                    <!-- Batang 3: Juli 2026 -->
                    <div class="flex-1 flex flex-col items-center gap-1 h-full justify-end z-10">
                        <div class="w-full flex items-end justify-center gap-1.5 h-44">
                            <!-- Umroh: 15 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">15</span>
                                <div style="height: calc(15 / 30 * 100%);" class="w-3.5 bg-[#0B3B24] rounded-t-sm"></div>
                            </div>
                            <!-- Haji: 20 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">20</span>
                                <div style="height: calc(20 / 30 * 100%);" class="w-3.5 bg-emerald-600 rounded-t-sm"></div>
                            </div>
                        </div>
                        <span class="text-[11px] text-stone-700 font-medium mt-2">Juli 2026</span>
                    </div>

                    <!-- Batang 4: Agustus 2026 -->
                    <div class="flex-1 flex flex-col items-center gap-1 h-full justify-end z-10">
                        <div class="w-full flex items-end justify-center gap-1.5 h-44">
                            <!-- Umroh: 5 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">5</span>
                                <div style="height: calc(5 / 30 * 100%);" class="w-3.5 bg-[#0B3B24] rounded-t-sm"></div>
                            </div>
                            <!-- Haji: 30 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">30</span>
                                <div style="height: calc(30 / 30 * 100%);" class="w-3.5 bg-emerald-600 rounded-t-sm"></div>
                            </div>
                        </div>
                        <span class="text-[11px] text-stone-700 font-medium mt-2">Agustus 2026</span>
                    </div>

                    <!-- Batang 5: September 2026 -->
                    <div class="flex-1 flex flex-col items-center gap-1 h-full justify-end z-10">
                        <div class="w-full flex items-end justify-center gap-1.5 h-44">
                            <!-- Umroh: 5 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">5</span>
                                <div style="height: calc(5 / 30 * 100%);" class="w-3.5 bg-[#0B3B24] rounded-t-sm"></div>
                            </div>
                            <!-- Haji: 25 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">25</span>
                                <div style="height: calc(25 / 30 * 100%);" class="w-3.5 bg-emerald-600 rounded-t-sm"></div>
                            </div>
                        </div>
                        <span class="text-[11px] text-stone-700 font-medium mt-2">September</span>
                    </div>

                    <!-- Batang 6: Oktober 2026 -->
                    <div class="flex-1 flex flex-col items-center gap-1 h-full justify-end z-10">
                        <div class="w-full flex items-end justify-center gap-1.5 h-44">
                            <!-- Umroh: 5 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">5</span>
                                <div style="height: calc(5 / 30 * 100%);" class="w-3.5 bg-[#0B3B24] rounded-t-sm"></div>
                            </div>
                            <!-- Haji: 25 -->
                            <div class="flex flex-col items-center justify-end h-full">
                                <span class="text-[10px] font-bold text-stone-700 mb-1">25</span>
                                <div style="height: calc(25 / 30 * 100%);" class="w-3.5 bg-emerald-600 rounded-t-sm"></div>
                            </div>
                        </div>
                        <span class="text-[11px] text-stone-700 font-medium mt-2">Oktober 2026</span>
                    </div>

                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Jumlah Berkas Terkirim & Jumlah Akun Berdasarkan Status (Col 5) -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- Jumlah Berkas Terkirim -->
            <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-800 flex items-center justify-center text-lg">
                        <span class="material-symbols-outlined">folder_open</span>
                    </div>
                    <h3 class="text-sm font-bold text-stone-900 font-serif">Jumlah Berkas Terkirim</h3>
                </div>
                <div class="space-y-2.5">
                    <div class="flex justify-between items-center bg-[#FAF8F5] p-3 rounded-2xl text-xs">
                        <span class="flex items-center gap-2 font-medium text-stone-700">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#0B3B24]"></span> Berhasil Diverifikasi
                        </span>
                        <strong class="text-stone-900">20 Berkas</strong>
                    </div>
                    <div class="flex justify-between items-center bg-[#FAF8F5] p-3 rounded-2xl text-xs">
                        <span class="flex items-center gap-2 font-medium text-stone-700">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-600"></span> Butuh Perbaikan
                        </span>
                        <strong class="text-stone-900">10 Berkas</strong>
                    </div>
                    <div class="flex justify-between items-center bg-[#FAF8F5] p-3 rounded-2xl text-xs">
                        <span class="flex items-center gap-2 font-medium text-stone-700">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> Menunggu Diverifikasi
                        </span>
                        <strong class="text-stone-900">60 Berkas</strong>
                    </div>
                </div>
            </div>

            <!-- Jumlah Akun Berdasarkan Status -->
            <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-800 flex items-center justify-center text-lg">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <h3 class="text-sm font-bold text-stone-900 font-serif">Jumlah Akun Berdasarkan Status</h3>
                </div>
                <div class="space-y-2.5">
                    <div class="flex justify-between items-center bg-[#FAF8F5] p-3 rounded-2xl text-xs">
                        <span class="flex items-center gap-2 font-medium text-stone-700">
                            <span class="w-2.5 h-2.5 rounded-full bg-[#0B3B24]"></span> Aktif
                        </span>
                        <strong class="text-stone-900">78 Akun</strong>
                    </div>
                    <div class="flex justify-between items-center bg-[#FAF8F5] p-3 rounded-2xl text-xs">
                        <span class="flex items-center gap-2 font-medium text-stone-700">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-600"></span> Non Aktif
                        </span>
                        <strong class="text-stone-900">20 Akun</strong>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection