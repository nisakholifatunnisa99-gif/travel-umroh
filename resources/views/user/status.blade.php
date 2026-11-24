@extends('layouts.dashboard')

@section('title', 'Status Perjalanan - ROZWIA Islamic Travel')

@section('content')
<div class="space-y-6 font-sans">
    
    <!-- Header Halaman -->
    <div class="bg-white/80 backdrop-blur-md border border-stone-200/80 rounded-[32px] p-6 sm:p-7 shadow-xs space-y-1">
        <h1 class="text-2xl sm:text-3xl font-[800] font-['Abhaya_Libre'] text-stone-900">
            Status Perjalanan Jamaah
        </h1>
        <p class="text-xs sm:text-sm text-stone-500">
            Pantau informasi tiket pesawat, akomodasi hotel, surat Kemenag, dan status visa Anda di sini.
        </p>
    </div>

    <!-- BAGIAN 1: TIKET PESAWAT & AKOMODASI HOTEL -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <!-- Card 1: Tiket Pesawat -->
        <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-5 relative overflow-hidden flex flex-col justify-between">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-[800] uppercase tracking-widest text-amber-800 bg-amber-50 px-3 py-1 rounded-full border border-amber-200/60">
                    ✈️ Tiket Pesawat
                </span>
                <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200 text-[10px] font-bold px-3 py-1 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span> Confirmed
                </span>
            </div>

            <div class="space-y-2">
                <h3 class="text-xl font-[800] font-['Abhaya_Libre'] text-stone-900">Saudia Airlines</h3>
                <p class="text-xs text-stone-500 font-medium">Nomor Penerbangan: <strong class="text-stone-800">SV-819 (CGK - JED)</strong></p>
            </div>

            <div class="pt-4 border-t border-stone-100 flex items-center justify-between text-xs text-stone-600">
                <span>Status Kursi: <strong class="text-emerald-700">Terkonfirmasi</strong></span>
                <span class="font-bold text-[#0B3B24]">Kelas: Ekonomi</span>
            </div>
        </div>

        <!-- Card 2: Akomodasi Hotel -->
        <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-5 relative overflow-hidden flex flex-col justify-between">
            <div class="flex items-center justify-between">
                <span class="text-[10px] font-[800] uppercase tracking-widest text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200/60">
                    🏨 Akomodasi Hotel
                </span>
                <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200 text-[10px] font-bold px-3 py-1 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span> Confirmed
                </span>
            </div>

            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-[800] font-['Abhaya_Libre'] text-stone-900">Makkah & Madinah</h3>
                    <span class="text-[10px] bg-amber-100 text-amber-900 font-bold px-2.5 py-1 rounded-xl">⭐ Bintang 5</span>
                </div>
                <p class="text-xs text-stone-500 font-medium">Tipe Kamar: <strong class="text-stone-800">Quad (Sekamar 4 Orang)</strong></p>
            </div>

            <!-- List Nama Hotel -->
            <div class="space-y-2 pt-2 border-t border-stone-100 text-xs">
                <div class="bg-stone-50 border border-stone-200/70 p-3 rounded-2xl flex justify-between items-center">
                    <span class="text-stone-500 font-medium">Hotel Makkah:</span>
                    <strong class="text-[#0B3B24]">Pullman Zamzam Tower</strong>
                </div>
                <div class="bg-stone-50 border border-stone-200/70 p-3 rounded-2xl flex justify-between items-center">
                    <span class="text-stone-500 font-medium">Hotel Madinah:</span>
                    <strong class="text-[#0B3B24]">Mekah Al Madinah Mövenpick</strong>
                </div>
            </div>
        </div>

    </div>


    <!-- BAGIAN 2: SURAT KEMENAG & STATUS VISA (GRID KARTU JAMAAH) -->
    <div class="space-y-4 pt-4">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-[800] font-['Abhaya_Libre'] text-stone-900">Dokumen Resmi & Visa Jamaah</h3>
            <span class="text-xs text-stone-500">Menampilkan status dokumen per jamaah terdaftar</span>
        </div>

        <!-- Grid Kartu Dokumen Jamaah -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Item Kartu Dokumen 1 -->
            <div class="bg-stone-100/70 border border-stone-200 rounded-[32px] p-6 shadow-sm space-y-4 relative">
                
                <!-- Identitas Jamaah di Kartu -->
                <div class="flex items-center justify-between pb-3 border-b border-stone-200">
                    <div>
                        <span class="text-[10px] uppercase font-bold text-stone-400 block">Nama Jamaah</span>
                        <h4 class="font-bold text-stone-900 text-sm">Ade Rohmani</h4>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] uppercase font-bold text-stone-400 block">Nomor Paspor</span>
                        <span class="font-bold text-stone-800 text-xs tracking-wider bg-white px-3 py-1 rounded-xl border border-stone-200">091108927279</span>
                    </div>
                </div>

                <!-- 2 Kotak Status (Surat Kemenag & Status Visa) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <!-- Box Surat Kemenag -->
                    <div class="bg-[#0B3B24] text-white rounded-2xl p-4 flex flex-col justify-between space-y-3 shadow-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-[10px] font-bold tracking-wider text-emerald-200 uppercase">Surat Kemenag</span>
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        </div>
                        <div class="text-center py-1">
                            <span class="bg-white text-[#0B3B24] font-[800] text-xs px-4 py-1.5 rounded-full shadow-xs inline-block">
                                Terbit ✅
                            </span>
                        </div>
                        <div class="border-t border-emerald-900/80 pt-2 text-[10px] flex justify-between text-emerald-100/80">
                            <span>No. Visa/Dok:</span>
                            <strong class="text-white">0192018979192</strong>
                        </div>
                    </div>

                    <!-- Box Status Visa -->
                    <div class="bg-[#0B3B24] text-white rounded-2xl p-4 flex flex-col justify-between space-y-3 shadow-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-[10px] font-bold tracking-wider text-emerald-200 uppercase">Status Visa</span>
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        </div>
                        <div class="text-center py-1">
                            <span class="bg-white text-[#0B3B24] font-[800] text-xs px-4 py-1.5 rounded-full shadow-xs inline-block">
                                Terbit ✅
                            </span>
                        </div>
                        <div class="border-t border-emerald-900/80 pt-2 text-[10px] flex justify-between text-emerald-100/80">
                            <span>Tgl Terbit:</span>
                            <strong class="text-white">18/09/2026</strong>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Item Kartu Dokumen 2 (Duplikasi untuk contoh jamaah kedua / anggota keluarga) -->
            <div class="bg-stone-100/70 border border-stone-200 rounded-[32px] p-6 shadow-sm space-y-4 relative">
                
                <div class="flex items-center justify-between pb-3 border-b border-stone-200">
                    <div>
                        <span class="text-[10px] uppercase font-bold text-stone-400 block">Nama Jamaah</span>
                        <h4 class="font-bold text-stone-900 text-sm">Siti Aminah</h4>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] uppercase font-bold text-stone-400 block">Nomor Paspor</span>
                        <span class="font-bold text-stone-800 text-xs tracking-wider bg-white px-3 py-1 rounded-xl border border-stone-200">091108927280</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <div class="bg-[#0B3B24] text-white rounded-2xl p-4 flex flex-col justify-between space-y-3 shadow-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-[10px] font-bold tracking-wider text-emerald-200 uppercase">Surat Kemenag</span>
                            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                        </div>
                        <div class="text-center py-1">
                            <span class="bg-amber-100 text-amber-900 font-[800] text-xs px-4 py-1.5 rounded-full shadow-xs inline-block">
                                Dalam Proses ⏳
                            </span>
                        </div>
                        <div class="border-t border-emerald-900/80 pt-2 text-[10px] flex justify-between text-emerald-100/80">
                            <span>No. Visa/Dok:</span>
                            <strong class="text-white">Menunggu</strong>
                        </div>
                    </div>

                    <div class="bg-[#0B3B24] text-white rounded-2xl p-4 flex flex-col justify-between space-y-3 shadow-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-[10px] font-bold tracking-wider text-emerald-200 uppercase">Status Visa</span>
                            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                        </div>
                        <div class="text-center py-1">
                            <span class="bg-amber-100 text-amber-900 font-[800] text-xs px-4 py-1.5 rounded-full shadow-xs inline-block">
                                Pending ⏳
                            </span>
                        </div>
                        <div class="border-t border-emerald-900/80 pt-2 text-[10px] flex justify-between text-emerald-100/80">
                            <span>Tgl Terbit:</span>
                            <strong class="text-white">-</strong>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection