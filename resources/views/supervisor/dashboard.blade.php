@extends('layouts.supervisor')

@section('title', 'Dashboard Supervisor - ROZWIA Islamic Travel')

@section('content')
    <!-- Header: Tombol Notifikasi & Profil sejajar di kanan -->
    <div class="flex justify-end items-center gap-4">
        <div class="w-12 h-12 rounded-2xl bg-white border border-stone-200 shadow-xs flex items-center justify-center text-stone-600 text-xl cursor-pointer hover:bg-stone-50 transition relative">
            <span class="material-symbols-outlined">
notifications
</span>
        </div>
        <div class="bg-white border border-stone-200 rounded-full py-2 px-4 flex items-center gap-3 shadow-xs">
            <div class="w-9 h-9 rounded-full bg-stone-200 text-stone-800 font-bold flex items-center justify-center text-sm">
                <span class="material-symbols-outlined">
person
</span>
            </div>
            <div class="leading-tight">
                <strong class="block text-xs font-[800] text-stone-900">Rinzani</strong>
                <span class="text-[10px] text-stone-500 font-sans">Supervisor</span>
            </div>
        </div>
    </div>

    <!-- Banner Utama: Selamat Datang di Dashboard Supervisor -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-8 sm:p-10 shadow-sm flex flex-col md:flex-row items-center gap-8 relative overflow-hidden">
        <div class="w-24 h-24 rounded-2xl bg-emerald-950/80 border border-emerald-800/60 flex items-center justify-center shrink-0 p-4">
            <img src="{{ asset('img/logo-rozwia.png') }}" alt="Logo" class="w-full h-full object-contain">
        </div>
        <div class="space-y-2">
            <h1 class="text-2xl sm:text-3xl font-[800] font-['Abhaya_Libre'] flex items-center gap-2">
                Selamat Datang di Dashboard Supervisor <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 128 128">
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
            <p class="text-xs sm:text-sm text-emerald-100/90 leading-relaxed font-sans">
                Kelola seluruh proses perjalanan jamaah mulai dari pemantauan pendaftaran, verifikasi dokumen persyaratan, validasi bukti pembayaran, hingga pembaruan status jamaah. Pantau kesiapan paspor, setoran melalui rekening BSI & Mandiri, serta penerbitan e-Visa Saudi dalam satu dashboard terpadu.
            </p>
        </div>
    </div>

    <!-- 3 Kartu Statistik Ringkasan Atas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Kartu 1: Jumlah Paket Tersedia -->
        <div class="bg-white rounded-[32px] p-7 border border-stone-200 shadow-sm flex flex-col justify-between space-y-6">
            <div class="space-y-1">
                <span class="text-xs text-stone-500 font-sans block">Jumlah Paket Tersedia</span>
                <h3 class="text-3xl font-[800] text-stone-900 font-['Abhaya_Libre']">18 Paket</h3>
            </div>
            <div class="flex justify-between items-end border-t border-stone-100 pt-4">
                <span class="text-xs text-stone-600 font-bold">Kelola Paket</span>
                <div class="w-10 h-10 rounded-2xl bg-amber-50 text-amber-800 flex items-center justify-center text-sm font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<g fill="none">
		<path fill="#f3c07b" d="M15.35 2.143c.32-.19.71-.19 1.02 0l10.92 6.64c.26.16.42.45.42.75L15.86 17.5L4 9.632v-.1c0-.3.16-.59.42-.74z" />
		<path fill="#ffce7c" d="m15.856 16.246l11.36-6.9a.328.328 0 0 1 .496.282v12.34a1.73 1.73 0 0 1-.83 1.48l-10.64 6.46a.3.3 0 0 1-.087.03a.3.3 0 0 1-.083.011a.9.9 0 0 1-.682-.083h.006L13 19z" />
		<path fill="#e19747" d="M15.86 29.622v-13.37l-11.35-6.9a.331.331 0 0 0-.51.28v12.34c0 .61.32 1.17.83 1.48l10.57 6.42a.3.3 0 0 0 .46-.25" />
		<path fill="#d3d3d3" d="M14.5 26.782v-1.96c0-.23-.12-.44-.31-.56l-2.8-1.69c-.19-.11-.43.02-.43.24v1.96c0 .23.12.44.31.56l2.8 1.69c.19.11.43-.02.43-.24" />
		<path fill="#8c5543" d="M11.76 16.553v-4.56l-3.28-.22v3.16c0 .1.05.2.14.26l2.68 1.63c.2.11.46-.03.46-.27" />
		<path fill="#a56953" d="m20.34 4.563l-11.86 7.21l3.28 2l11.86-7.2z" />
	</g>
</svg>

                </div>
            </div>
        </div>

        <!-- Kartu 2: Jumlah Total Pendapatan -->
        <div class="bg-white rounded-[32px] p-7 border border-stone-200 shadow-sm flex flex-col justify-between space-y-6">
            <div class="space-y-1">
                <span class="text-xs text-stone-500 font-sans block">Jumlah Total Pendapatan</span>
                <h3 class="text-xl sm:text-2xl font-[800] text-stone-900 font-['Abhaya_Libre']">Rp 120.400.000.000</h3>
            </div>
            <div class="flex justify-between items-end border-t border-stone-100 pt-4">
                <span class="text-xs text-stone-600 font-bold">Lihat Pendapatan.</span>
                <div class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre'] shadow-xs">
                    Rp
                </div>
            </div>
        </div>

        <!-- Kartu 3: Daftar Akun Terdaftar -->
        <div class="bg-white rounded-[32px] p-7 border border-stone-200 shadow-sm flex flex-col justify-between space-y-6">
            <div class="space-y-1">
                <span class="text-xs text-stone-500 font-sans block">Daftar Akun Terdaftar</span>
                <h3 class="text-3xl font-[800] text-stone-900 font-['Abhaya_Libre']">95 Jamaah</h3>
            </div>
            <div class="flex justify-between items-end border-t border-stone-100 pt-4">
                <span class="text-xs text-stone-600 font-bold">Lihat Daftar Akun</span>
                <div class="w-10 h-10 rounded-full bg-amber-50 text-amber-800 flex items-center justify-center text-sm">
                    <span class="material-symbols-outlined">group</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Bagian Bawah: Grafik Pendaftaran & Status -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        
        <!-- Grafik Jumlah Pendaftaran Jamaah -->
        <div class="lg:col-span-7 bg-white rounded-[32px] p-6 sm:p-7 border border-stone-200 shadow-sm space-y-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined">group</span>
                    <h3 class="text-base font-[800] font-['Abhaya_Libre'] text-stone-900">Jumlah Pendaftaran Jamaah</h3>
                </div>
                
                <!-- Legenda -->
                <div class="flex items-center gap-4">
                    <div class="bg-[#F9F6F0] border border-stone-200/80 px-4 py-2 rounded-2xl flex items-center gap-4 text-xs font-[700] font-sans">
                        <span class="flex items-center gap-2 text-stone-800">
                            <span class="w-3 h-3 rounded-full bg-[#0B3B24] inline-block"></span> Umroh
                        </span>
                        <span class="flex items-center gap-2 text-stone-600">
                            <span class="w-3 h-3 rounded-full bg-[#659B81] inline-block"></span> Haji
                        </span>
                    </div>
                </div>
            </div>

            <!-- Visualisasi Grafik Batang -->
            <div class="pt-6 pb-2 space-y-4">
                <div class="h-56 border-b border-stone-300 relative flex justify-around items-end px-2 sm:px-6">
                    <div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-25">
                        <div class="border-b border-stone-400 w-full"></div>
                        <div class="border-b border-stone-400 w-full"></div>
                        <div class="border-b border-stone-400 w-full"></div>
                        <div class="border-b border-stone-400 w-full"></div>
                        <div class="border-b border-stone-400 w-full"></div>
                    </div>

                    <!-- Mei 2026 -->
                    <div class="flex flex-col items-center gap-1.5 h-full justify-end z-10">
                        <span class="text-[11px] font-bold text-stone-800 font-sans">5</span>
                        <div class="w-5 sm:w-6 bg-[#0B3B24] rounded-t-sm" style="height: 16%;"></div>
                        <span class="text-[11px] font-bold text-stone-800 font-sans">25</span>
                        <div class="w-5 sm:w-6 bg-[#659B81] rounded-t-sm" style="height: 80%;"></div>
                    </div>

                    <!-- Juni 2026 -->
                    <div class="flex flex-col items-center gap-1.5 h-full justify-end z-10">
                        <span class="text-[11px] font-bold text-stone-800 font-sans">10</span>
                        <div class="w-5 sm:w-6 bg-[#0B3B24] rounded-t-sm" style="height: 32%;"></div>
                        <span class="text-[11px] font-bold text-stone-800 font-sans">25</span>
                        <div class="w-5 sm:w-6 bg-[#659B81] rounded-t-sm" style="height: 80%;"></div>
                    </div>

                    <!-- Juli 2026 -->
                    <div class="flex flex-col items-center gap-1.5 h-full justify-end z-10">
                        <span class="text-[11px] font-bold text-stone-800 font-sans">15</span>
                        <div class="w-5 sm:w-6 bg-[#0B3B24] rounded-t-sm" style="height: 48%;"></div>
                        <span class="text-[11px] font-bold text-stone-800 font-sans">20</span>
                        <div class="w-5 sm:w-6 bg-[#659B81] rounded-t-sm" style="height: 64%;"></div>
                    </div>

                    <!-- Agustus 2026 -->
                    <div class="flex flex-col items-center gap-1.5 h-full justify-end z-10">
                        <span class="text-[11px] font-bold text-stone-800 font-sans">5</span>
                        <div class="w-5 sm:w-6 bg-[#0B3B24] rounded-t-sm" style="height: 16%;"></div>
                        <span class="text-[11px] font-bold text-stone-800 font-sans">30</span>
                        <div class="w-5 sm:w-6 bg-[#659B81] rounded-t-sm" style="height: 98%;"></div>
                    </div>

                    <!-- September 2026 -->
                    <div class="flex flex-col items-center gap-1.5 h-full justify-end z-10">
                        <span class="text-[11px] font-bold text-stone-800 font-sans">5</span>
                        <div class="w-5 sm:w-6 bg-[#0B3B24] rounded-t-sm" style="height: 16%;"></div>
                        <span class="text-[11px] font-bold text-stone-800 font-sans">25</span>
                        <div class="w-5 sm:w-6 bg-[#659B81] rounded-t-sm" style="height: 80%;"></div>
                    </div>

                    <!-- Oktober 2026 -->
                    <div class="flex flex-col items-center gap-1.5 h-full justify-end z-10">
                        <span class="text-[11px] font-bold text-stone-800 font-sans">5</span>
                        <div class="w-5 sm:w-6 bg-[#0B3B24] rounded-t-sm" style="height: 16%;"></div>
                        <span class="text-[11px] font-bold text-stone-800 font-sans">25</span>
                        <div class="w-5 sm:w-6 bg-[#659B81] rounded-t-sm" style="height: 80%;"></div>
                    </div>
                </div>

                <!-- Label Bulan -->
                <div class="flex justify-between items-center text-[10px] sm:text-xs text-stone-500 font-bold font-sans pt-2 px-1">
                    <span>Mei 2026</span>
                    <span>Juni 2026</span>
                    <span>Juli 2026</span>
                    <span>Agustus 2026</span>
                    <span>September 2026</span>
                    <span>Oktober 2026</span>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Status Paket & Status Akun -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm space-y-4">
                <div class="flex items-center gap-3 border-b border-stone-100 pb-3">
                    <div class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-800 flex items-center justify-center text-base"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<g fill="none">
		<path fill="#f3c07b" d="M15.35 2.143c.32-.19.71-.19 1.02 0l10.92 6.64c.26.16.42.45.42.75L15.86 17.5L4 9.632v-.1c0-.3.16-.59.42-.74z" />
		<path fill="#ffce7c" d="m15.856 16.246l11.36-6.9a.328.328 0 0 1 .496.282v12.34a1.73 1.73 0 0 1-.83 1.48l-10.64 6.46a.3.3 0 0 1-.087.03a.3.3 0 0 1-.083.011a.9.9 0 0 1-.682-.083h.006L13 19z" />
		<path fill="#e19747" d="M15.86 29.622v-13.37l-11.35-6.9a.331.331 0 0 0-.51.28v12.34c0 .61.32 1.17.83 1.48l10.57 6.42a.3.3 0 0 0 .46-.25" />
		<path fill="#d3d3d3" d="M14.5 26.782v-1.96c0-.23-.12-.44-.31-.56l-2.8-1.69c-.19-.11-.43.02-.43.24v1.96c0 .23.12.44.31.56l2.8 1.69c.19.11.43-.02.43-.24" />
		<path fill="#8c5543" d="M11.76 16.553v-4.56l-3.28-.22v3.16c0 .1.05.2.14.26l2.68 1.63c.2.11.46-.03.46-.27" />
		<path fill="#a56953" d="m20.34 4.563l-11.86 7.21l3.28 2l11.86-7.2z" />
	</g>
</svg>
</div>
                    <h4 class="text-sm font-[800] font-['Abhaya_Libre'] text-stone-900">Jumlah Paket Berdasarkan Status</h4>
                </div>
                <div class="space-y-3 text-xs font-sans">
                    <div class="flex justify-between items-center bg-stone-50 p-3 rounded-2xl border border-stone-100">
                        <span class="flex items-center gap-2 text-stone-700 font-bold">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-800"></span> Aktif
                        </span>
                        <strong class="text-stone-900">18 Paket</strong>
                    </div>
                    <div class="flex justify-between items-center bg-stone-50 p-3 rounded-2xl border border-stone-100">
                        <span class="flex items-center gap-2 text-stone-700 font-bold">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-600"></span> Non Aktif
                        </span>
                        <strong class="text-stone-900">0 Paket</strong>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm space-y-4">
                <div class="flex items-center gap-3 border-b border-stone-100 pb-3">
                    <div class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-800 flex items-center justify-center text-base"><span class="material-symbols-outlined">group</span></div>
                    <h4 class="text-sm font-[800] font-['Abhaya_Libre'] text-stone-900">Jumlah Akun Berdasarkan Status</h4>
                </div>
                <div class="space-y-3 text-xs font-sans">
                    <div class="flex justify-between items-center bg-stone-50 p-3 rounded-2xl border border-stone-100">
                        <span class="flex items-center gap-2 text-stone-700 font-bold">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-800"></span> Aktif
                        </span>
                        <strong class="text-stone-900">75 Akun</strong>
                    </div>
                    <div class="flex justify-between items-center bg-stone-50 p-3 rounded-2xl border border-stone-100">
                        <span class="flex items-center gap-2 text-stone-700 font-bold">
                            <span class="w-2.5 h-2.5 rounded-full bg-rose-600"></span> Non Aktif
                        </span>
                        <strong class="text-stone-900">20 Akun</strong>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection