@extends('layouts.dashboard')

@section('title', 'Dashboard Jamaah - ROZWIA Islamic Travel')

@section('content')

<!-- CONTAINER UTAMA DASHBOARD DENGAN ALPINE.JS TAB STATE -->
<div class="w-full min-h-screen bg-[#F4EFE6]" x-data="{ activeTab: 'beranda' }">
    <div class="grid grid-cols-1 lg:grid-cols-[280px_minmax(0,1fr)] min-h-screen">

        <!-- ================= SIDEBAR KIRI (3 KOLOM) ================= -->
        <aside class="w-full lg:fixed lg:left-0 lg:top-0 lg:bottom-0 lg:z-40 lg:w-[280px] bg-[#0B3B24] text-[#E5D3B3] rounded-none p-6 shadow-xl flex flex-col justify-between min-h-[auto] lg:h-screen lg:min-h-screen overflow-y-auto">
            
            <div class="space-y-8">
                <!-- Logo Header Sidebar -->
                <div class="flex items-center gap-3 pb-4 border-b border-emerald-800/80">
                    <span class="text-3xl">🕌</span>
                    <div class="leading-tight font-serif">
                        <span class="block tracking-widest text-lg font-bold text-white">ROZWIA</span>
                        <span class="block text-[9px] tracking-widest text-[#E5D3B3]">~ ISLAMIC TRAVEL ~</span>
                    </div>
                </div>

                <!-- Menu Navigasi Sidebar -->
                <nav class="space-y-2 font-serif text-sm">
                    <!-- 1. Beranda -->
                    <button @click="activeTab = 'beranda'" 
                            :class="activeTab === 'beranda' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                        
                        <span>Beranda</span>
                    </button>

                    <!-- 2. Booking Saya -->
                    <button @click="activeTab = 'booking'" 
                            :class="activeTab === 'booking' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                        
                        <span>Booking Saya</span>
                    </button>

                    <!-- 3. Pembayaran -->
                    <button @click="activeTab = 'pembayaran'" 
                            :class="activeTab === 'pembayaran' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                        
                        <span>Pembayaran</span>
                    </button>

                    <!-- 4. Dokumen -->
                    <button @click="activeTab = 'dokumen'" 
                            :class="activeTab === 'dokumen' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                        
                        <span>Dokumen</span>
                    </button>

                    <!-- 5. Status Perjalanan -->
                    <button @click="activeTab = 'perjalanan'" 
                            :class="activeTab === 'perjalanan' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                        
                        <span>Status Perjalanan</span>
                    </button>

                    <!-- 6. Notifikasi -->
                    <button @click="activeTab = 'notifikasi'" 
                            :class="activeTab === 'notifikasi' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                            class="w-full flex items-center justify-between px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                        <div class="flex items-center gap-3">
                            
                            <span>Notifikasi</span>
                        </div>
                        <span class="bg-rose-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">3</span>
                    </button>

                    <!-- 7. Profil -->
                    <button @click="activeTab = 'profil'" 
                            :class="activeTab === 'profil' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                        
                        <span>Profil</span>
                    </button>
                </nav>
            </div>

            <!-- Profil Singkat & Tombol Keluar di Bawah Sidebar -->
            <div class="pt-8 mt-8 border-t border-emerald-800/80 flex items-center gap-3 font-serif">
                <div class="w-10 h-10 rounded-full bg-emerald-800 border border-[#E5D3B3]/40 flex items-center justify-center text-lg shrink-0">
                    👤
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-bold text-white truncate">Rinzani Fauziah</p>
                    <form action="{{ route('logout') ?? '#' }}" method="POST">
                        @csrf
                        <button type="submit" class="text-xs text-rose-400 hover:text-rose-300 font-semibold transition cursor-pointer">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>

        </aside>


        <!-- ================= AREA KONTEN KANAN (9 KOLOM) ================= -->
        <main class="min-w-0 lg:col-start-2 space-y-6 px-4 py-8 sm:px-6 lg:px-8">

            <!-- ===================================================================== -->
            <!-- TAB 1: BERANDA (RINGKASAN UTAMA SESUAI GAMBAR REFERENSI)              -->
            <!-- ===================================================================== -->
            <div x-show="activeTab === 'beranda'" x-transition.opacity.duration.300ms class="space-y-6">
                
                <!-- Header Sapaan -->
                <div class="space-y-1">
                    <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Assalamu’alaikum, Rinzani Fauziah</h1>
                    <p class="text-xs sm:text-sm text-stone-600 font-serif">
                        Semoga persiapan ibadah Anda dimudahkan. Berikut perkembangan terbaru bookingan Anda.
                    </p>
                </div>

                <!-- Banner Langkah Berikutnya & Progress Bar Dokumen -->
                <div class="bg-[#0B3B24] text-white rounded-3xl p-6 sm:p-8 shadow-md space-y-4">
                    <div class="space-y-1">
                        <span class="text-xs text-[#E5D3B3] font-serif font-semibold">Langkah Anda Berikutnya</span>
                        <h2 class="text-lg sm:text-xl font-bold font-serif">Unggah Dokumen Persyaratan</h2>
                        <p class="text-xs text-emerald-100/80 font-serif max-w-2xl">
                            Lengkapi dokumen agar admin dapat memeriksa dan booking Anda berlanjut ke tahap pelunasan.
                        </p>
                    </div>

                    <!-- Progress Bar -->
                    <div class="space-y-1.5 pt-2">
                        <div class="flex justify-between text-xs font-serif">
                            <span class="text-[#E5D3B3]">Dokumen terkumpul</span>
                            <span class="font-bold text-white">[ 5 dari 8 ]</span>
                        </div>
                        <div class="w-full bg-emerald-950 rounded-full h-2.5 overflow-hidden border border-emerald-800">
                            <div class="bg-amber-500 h-2.5 rounded-full" style="width: 62.5%"></div>
                        </div>
                    </div>
                </div>

                <!-- Stepper Tahap Booking -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-4">
                    <h3 class="text-sm font-bold text-[#0B3B24] font-serif">Tahap Booking</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 items-center text-center font-serif">
                        <!-- Step 1: Selesai -->
                        <div class="flex flex-col items-center space-y-1.5">
                            <div class="w-9 h-9 rounded-full bg-[#0B3B24] text-white flex items-center justify-center font-bold text-xs shadow-sm">✓</div>
                            <span class="text-xs font-bold text-[#0B3B24]">1. Bayar DP</span>
                        </div>
                        <!-- Step 2: Sedang Berjalan -->
                        <div class="flex flex-col items-center space-y-1.5">
                            <div class="w-9 h-9 rounded-full bg-[#E5D3B3] text-[#0B3B24] border-2 border-[#0B3B24] flex items-center justify-center font-bold text-xs">2</div>
                            <span class="text-xs font-bold text-amber-800">2. Kumpulkan Dokumen</span>
                        </div>
                        <!-- Step 3: Belum -->
                        <div class="flex flex-col items-center space-y-1.5 opacity-60">
                            <div class="w-9 h-9 rounded-full bg-stone-100 text-stone-500 border border-stone-300 flex items-center justify-center font-bold text-xs">3</div>
                            <span class="text-xs text-stone-600">3. Pelunasan</span>
                        </div>
                        <!-- Step 4: Belum -->
                        <div class="flex flex-col items-center space-y-1.5 opacity-60">
                            <div class="w-9 h-9 rounded-full bg-stone-100 text-stone-500 border border-stone-300 flex items-center justify-center font-bold text-xs">4</div>
                            <span class="text-xs text-stone-600">4. Dikonfirmasi</span>
                        </div>
                    </div>
                </div>

                <!-- Grid 2 Kolom: Paket Saya & Pembayaran -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Kartu Paket Saya -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 flex flex-col justify-between space-y-4 font-serif">
                        <div class="space-y-3">
                            <div class="flex items-start justify-between">
                                <div>
                                    <span class="text-[11px] font-bold text-amber-700 uppercase tracking-wider">Paket Umroh</span>
                                    <h3 class="text-lg font-bold text-[#0B3B24]">January Umroh & Istanbul</h3>
                                </div>
                                <span class="bg-[#E5D3B3] text-[#0B3B24] text-[10px] font-bold px-3 py-1 rounded-full">Umroh Plus</span>
                            </div>

                            <div class="space-y-1.5 text-xs text-stone-600 pt-2 border-t border-stone-100">
                                <div class="flex justify-between">
                                    <span>Berangkat:</span>
                                    <span class="font-bold text-stone-800">15 Januari 2027</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Tipe Kamar:</span>
                                    <span class="font-bold text-stone-800">Quad Room</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Jumlah Jamaah:</span>
                                    <span class="font-bold text-stone-800">1 Orang</span>
                                </div>
                            </div>
                        </div>

                        <button @click="activeTab = 'booking'" class="w-full py-2.5 px-4 rounded-xl border border-[#0B3B24] text-[#0B3B24] hover:bg-[#0B3B24] hover:text-white text-xs font-bold transition cursor-pointer text-center">
                            Lihat Detail Booking
                        </button>
                    </div>

                    <!-- Kartu Pembayaran -->
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 flex flex-col justify-between space-y-4 font-serif">
                        <div class="space-y-3">
                            <div>
                                <span class="text-[11px] font-bold text-rose-700 uppercase tracking-wider">Sisa Tagihan Pelunasan</span>
                                <h3 class="text-xl font-bold text-[#0B3B24]">Rp 29.500.000</h3>
                            </div>

                            <!-- Progress Bar Pembayaran -->
                            <div class="space-y-1">
                                <div class="w-full bg-stone-200 rounded-full h-2 overflow-hidden">
                                    <div class="bg-[#0B3B24] h-2 rounded-full" style="width: 15%"></div>
                                </div>
                                <div class="flex justify-between text-[10px] text-stone-500">
                                    <span>Dibayar: Rp 5.000.000</span>
                                    <span>Total: Rp 34.500.000</span>
                                </div>
                            </div>

                            <div class="space-y-1.5 text-xs pt-2 border-t border-stone-100">
                                <div class="flex justify-between items-center">
                                    <span class="text-stone-600">Down Payment</span>
                                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Terverifikasi</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-stone-600">Pelunasan</span>
                                    <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Belum Lunas</span>
                                </div>
                            </div>
                        </div>

                        <button @click="activeTab = 'pembayaran'" class="w-full py-2.5 px-4 rounded-xl border border-[#0B3B24] text-[#0B3B24] hover:bg-[#0B3B24] hover:text-white text-xs font-bold transition cursor-pointer text-center">
                            Unggah Bukti Transfer
                        </button>
                    </div>
                </div>

                <!-- Kartu Ringkasan Dokumen Saya -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-4 font-serif">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-bold text-[#0B3B24]">Dokumen Saya</h3>
                        <button @click="activeTab = 'dokumen'" class="text-xs text-amber-700 font-bold hover:underline cursor-pointer">Kelola Semua &rarr;</button>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                        <div class="flex items-center justify-between bg-[#F4EFE6] px-4 py-2.5 rounded-xl">
                            <span class="font-bold text-stone-800">Paspor</span>
                            <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Disetujui</span>
                        </div>
                        <div class="flex items-center justify-between bg-[#F4EFE6] px-4 py-2.5 rounded-xl">
                            <span class="font-bold text-stone-800">Akta Kelahiran</span>
                            <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Disetujui</span>
                        </div>
                        <div class="flex items-center justify-between bg-[#F4EFE6] px-4 py-2.5 rounded-xl">
                            <span class="font-bold text-stone-800">Kartu Keluarga</span>
                            <span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Menunggu</span>
                        </div>
                        <div class="flex items-center justify-between bg-[#F4EFE6] px-4 py-2.5 rounded-xl">
                            <div>
                                <span class="font-bold text-stone-800 block">Pas Foto</span>
                                <span class="text-[9px] text-rose-600">Catatan: Latar harus putih</span>
                            </div>
                            <span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Perlu Perbaikan</span>
                        </div>
                        <div class="flex items-center justify-between bg-[#F4EFE6] px-4 py-2.5 rounded-xl">
                            <span class="font-bold text-stone-800">Buku Nikah</span>
                            <span class="bg-stone-200 text-stone-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Belum Unggah</span>
                        </div>
                        <div class="flex items-center justify-between bg-[#F4EFE6] px-4 py-2.5 rounded-xl">
                            <span class="font-bold text-stone-800">Surat Keterangan Sehat</span>
                            <span class="bg-stone-200 text-stone-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Belum Unggah</span>
                        </div>
                        <div class="flex items-center justify-between bg-[#F4EFE6] px-4 py-2.5 rounded-xl">
                            <span class="font-bold text-stone-800">KTP</span>
                            <span class="bg-stone-200 text-stone-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Belum Unggah</span>
                        </div>
                    </div>
                </div>

                <!-- Stepper Alur Perjalanan Singkat -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-3 font-serif">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-base font-bold text-[#0B3B24]">Alur Perjalanan Ibadah</h3>
                        <button @click="activeTab = 'perjalanan'" class="text-xs text-amber-700 font-bold hover:underline cursor-pointer">Detail Jadwal &rarr;</button>
                    </div>
                    <div class="space-y-2.5 text-xs">
                        <div class="flex items-center gap-3 bg-[#F4EFE6]/70 p-3 rounded-2xl border border-stone-200/60">
                            <span class="w-6 h-6 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">1</span>
                            <div>
                                <p class="font-bold text-[#0B3B24]">Keberangkatan dari Indonesia</p>
                                <p class="text-[11px] text-stone-600">Jamaah memulai perjalanan menuju Tanah Suci sesuai jadwal penerbangan yang ditentukan.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-[#F4EFE6]/70 p-3 rounded-2xl border border-stone-200/60">
                            <span class="w-6 h-6 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">2</span>
                            <div>
                                <p class="font-bold text-[#0B3B24]">Tiba di Madinah / Makkah</p>
                                <p class="text-[11px] text-stone-600">Jamaah tiba di Tanah Suci dan mempersiapkan diri untuk menjalankan rangkaian ibadah.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-[#F4EFE6]/70 p-3 rounded-2xl border border-stone-200/60">
                            <span class="w-6 h-6 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">3</span>
                            <div>
                                <p class="font-bold text-[#0B3B24]">Pelaksanaan Ibadah Umrah</p>
                                <p class="text-[11px] text-stone-600">Melaksanakan rangkaian ibadah Umrah sesuai tuntunan dengan pendampingan pembimbing.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-[#F4EFE6]/70 p-3 rounded-2xl border border-stone-200/60">
                            <span class="w-6 h-6 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">4</span>
                            <div>
                                <p class="font-bold text-[#0B3B24]">Ziarah Tempat Bersejarah</p>
                                <p class="text-[11px] text-stone-600">Mengunjungi tempat-tempat bersejarah Islam sesuai agenda perjalanan.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-[#F4EFE6]/70 p-3 rounded-2xl border border-stone-200/60">
                            <span class="w-6 h-6 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">5</span>
                            <div>
                                <p class="font-bold text-[#0B3B24]">Kembali ke Tanah Air</p>
                                <p class="text-[11px] text-stone-600">Perjalanan ibadah selesai dan jamaah kembali ke Indonesia sesuai jadwal kepulangan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid Bawah: Notifikasi Baru & Butuh Bantuan -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 font-serif">
                    <!-- Notifikasi Baru (7 Kolom) -->
                    <div class="md:col-span-7 bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-base font-bold text-[#0B3B24]">Notifikasi Baru</h3>
                            <button @click="activeTab = 'notifikasi'" class="text-xs text-amber-700 font-bold hover:underline cursor-pointer">Semua</button>
                        </div>
                        <ul class="space-y-3 text-xs">
                            <li class="flex items-start gap-3">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 mt-1 shrink-0"></span>
                                <span class="text-stone-700">Pembayaran DP Anda sudah diverifikasi admin.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2.5 h-2.5 rounded-full bg-rose-600 mt-1 shrink-0"></span>
                                <span class="text-stone-700">Pas Foto perlu diperbaiki, cek catatan admin di menu Dokumen.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500 mt-1 shrink-0"></span>
                                <span class="text-stone-700">Booking Anda berhasil dibuat, silakan lengkapi dokumen persyaratan.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Butuh Bantuan (5 Kolom) -->
                    <div class="md:col-span-5 bg-[#0B3B24] text-white rounded-3xl p-6 shadow-md flex flex-col justify-between space-y-4">
                        <div class="space-y-2">
                            <h3 class="text-base font-bold text-[#E5D3B3]">Butuh Bantuan?</h3>
                            <p class="text-xs text-emerald-100/85 leading-relaxed">
                                Tim ROZWIA siap membantu seputar pembayaran, dokumen, dan keberangkatan Anda.
                            </p>
                        </div>
                        <div class="space-y-2">
                            <a href="https://wa.me/6289518829438" target="_blank" class="w-full bg-[#25D366] hover:bg-[#20ba5a] text-white font-bold py-2.5 px-4 rounded-xl text-xs flex items-center justify-center gap-2 transition">
                                <span>💬</span> Chat Via WhatsApp
                            </a>
                            <a href="{{ route('faq') }}" class="w-full border border-[#E5D3B3]/50 hover:bg-emerald-900 text-[#E5D3B3] font-bold py-2 px-4 rounded-xl text-xs text-center block transition">
                                Lihat Pertanyaan Umum
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <!-- ===================================================================== -->
            <!-- TAB 2: BOOKING SAYA                                                   -->
            <!-- ===================================================================== -->
            <div x-show="activeTab === 'booking'" x-transition.opacity.duration.300ms style="display: none;" class="space-y-6 font-serif">
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold text-[#0B3B24]">Detail Booking Saya</h2>
                    <p class="text-xs text-stone-600">Informasi lengkap paket perjalanan yang telah Anda pesan.</p>
                </div>

                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-stone-100 pb-4">
                        <div>
                            <span class="text-xs text-amber-700 font-bold uppercase">Kode Booking: #RZW-2026-089</span>
                            <h3 class="text-xl font-bold text-[#0B3B24]">January Umroh & Istanbul (9 Hari)</h3>
                        </div>
                        <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3.5 py-1.5 rounded-full self-start">Menunggu Pelunasan & Dokumen</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-xs">
                        <div class="space-y-3">
                            <p class="text-stone-500">Nama Jamaah Utama: <strong class="text-stone-800 block text-sm">Rinzani Fauziah</strong></p>
                            <p class="text-stone-500">Tanggal Keberangkatan: <strong class="text-stone-800 block text-sm">15 Januari 2027</strong></p>
                            <p class="text-stone-500">Tipe Kamar: <strong class="text-stone-800 block text-sm">Quad Room (Sekamar Berempat)</strong></p>
                        </div>
                        <div class="space-y-3">
                            <p class="text-stone-500">Hotel Makkah: <strong class="text-stone-800 block text-sm">Fairmont Makkah (Bintang 5)</strong></p>
                            <p class="text-stone-500">Hotel Madinah: <strong class="text-stone-800 block text-sm">Anwar Al Madinah Mövenpick (Bintang 5)</strong></p>
                            <p class="text-stone-500">Total Biaya Paket: <strong class="text-[#0B3B24] block text-sm">Rp 34.500.000</strong></p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================================================================== -->
            <!-- TAB 3: PEMBAYARAN & UNGGAH BUKTI TRANSFER                             -->
            <!-- ===================================================================== -->
            <div x-show="activeTab === 'pembayaran'" x-transition.opacity.duration.300ms style="display: none;" class="space-y-6 font-serif">
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold text-[#0B3B24]">Riwayat & Konfirmasi Pembayaran</h2>
                    <p class="text-xs text-stone-600">Pantau status DP, pelunasan, dan unggah bukti transfer pelunasan Anda.</p>
                </div>

                <!-- Ringkasan Tagihan -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white p-5 rounded-3xl border border-stone-200">
                        <span class="text-[11px] text-stone-500 uppercase font-bold">Total Biaya</span>
                        <p class="text-lg font-bold text-[#0B3B24] mt-1">Rp 34.500.000</p>
                    </div>
                    <div class="bg-emerald-50 p-5 rounded-3xl border border-emerald-200">
                        <span class="text-[11px] text-emerald-800 uppercase font-bold">Sudah Dibayar</span>
                        <p class="text-lg font-bold text-emerald-950 mt-1">Rp 5.000.000</p>
                    </div>
                    <div class="bg-rose-50 p-5 rounded-3xl border border-rose-200">
                        <span class="text-[11px] text-rose-800 uppercase font-bold">Sisa Pelunasan</span>
                        <p class="text-lg font-bold text-rose-950 mt-1">Rp 29.500.000</p>
                    </div>
                </div>

                <!-- Form Upload Bukti Transfer -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4">
                    <h3 class="text-base font-bold text-[#0B3B24]">Unggah Bukti Transfer Pelunasan</h3>
                    <div class="bg-[#F4EFE6] p-4 rounded-2xl text-xs space-y-1 border border-stone-200">
                        <p class="font-bold text-[#0B3B24]">Rekening Resmi PT. ROZWIA ISLAMIC TRAVEL:</p>
                        <p>Bank Syariah Indonesia (BSI) : <strong>7123-4567-8900</strong> (a.n PT Rozwia Islamic Travel)</p>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4 pt-2 text-xs">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="font-bold text-stone-700">Nominal Transfer (Rp)</label>
                                <input type="number" placeholder="Contoh: 29500000" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-bold text-stone-700">File Bukti Transfer (JPG/PNG/PDF)</label>
                                <input type="file" class="w-full px-4 py-2 rounded-xl border border-stone-300 bg-stone-50">
                            </div>
                        </div>
                        <button type="submit" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-6 py-3 rounded-xl transition cursor-pointer">
                            Kirim Bukti Pembayaran
                        </button>
                    </form>
                </div>
            </div>


            <!-- ===================================================================== -->
            <!-- TAB 4: DOKUMEN PERSYARATAN                                            -->
            <!-- ===================================================================== -->
            <div x-show="activeTab === 'dokumen'" x-transition.opacity.duration.300ms style="display: none;" class="space-y-6 font-serif">
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold text-[#0B3B24]">Kelengkapan Dokumen Persyaratan</h2>
                    <p class="text-xs text-stone-600">Unggah dokumen dalam format PDF atau gambar yang jelas untuk verifikasi admin.</p>
                </div>

                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4 text-xs">
                    @php
                        $dokumenList = [
                            ['nama' => 'Paspor (Masa berlaku min. 8 bulan)', 'status' => 'Disetujui', 'badge' => 'bg-emerald-100 text-emerald-800', 'catatan' => 'Dokumen valid dan terverifikasi.'],
                            ['nama' => 'Akta Kelahiran', 'status' => 'Disetujui', 'badge' => 'bg-emerald-100 text-emerald-800', 'catatan' => 'Dokumen valid.'],
                            ['nama' => 'Kartu Keluarga (KK)', 'status' => 'Menunggu Verifikasi', 'badge' => 'bg-amber-100 text-amber-800', 'catatan' => 'Sedang diperiksa oleh tim administrasi.'],
                            ['nama' => 'Pas Foto (Background Putih 4x6)', 'status' => 'Perlu Perbaikan', 'badge' => 'bg-rose-100 text-rose-800', 'catatan' => 'Catatan Admin: Latar belakang foto harus putih polos (bukan biru/merah).'],
                            ['nama' => 'KTP (Kartu Tanda Penduduk)', 'status' => 'Belum Unggah', 'badge' => 'bg-stone-200 text-stone-600', 'catatan' => 'Silakan unggah scan KTP Anda.'],
                            ['nama' => 'Buku Nikah (Bagi suami-istri)', 'status' => 'Belum Unggah', 'badge' => 'bg-stone-200 text-stone-600', 'catatan' => 'Opsional jika berangkat sendiri.'],
                            ['nama' => 'Surat Keterangan Sehat & Vaksin Meningitis', 'status' => 'Belum Unggah', 'badge' => 'bg-stone-200 text-stone-600', 'catatan' => 'Wajib diunggah maksimal H-14 keberangkatan.'],
                        ];
                    @endphp

                    @foreach($dokumenList as $doc)
                    <div class="p-4 rounded-2xl bg-[#F4EFE6]/60 border border-stone-200 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-sm text-[#0B3B24]">{{ $doc['nama'] }}</span>
                                <span class="{{ $doc['badge'] }} text-[10px] font-bold px-2.5 py-0.5 rounded-full">{{ $doc['status'] }}</span>
                            </div>
                            <p class="text-[11px] text-stone-600">{{ $doc['catatan'] }}</p>
                        </div>
                        <div class="shrink-0">
                            <label class="cursor-pointer bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-4 py-2 rounded-xl inline-block transition">
                                <span>📤 Unggah File</span>
                                <input type="file" class="hidden">
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


            <!-- ===================================================================== -->
            <!-- TAB 5: STATUS PERJALANAN                                              -->
            <!-- ===================================================================== -->
            <div x-show="activeTab === 'perjalanan'" x-transition.opacity.duration.300ms style="display: none;" class="space-y-6 font-serif">
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold text-[#0B3B24]">Status & Agenda Perjalanan Ibadah</h2>
                    <p class="text-xs text-stone-600">Pantau jadwal keberangkatan, penerbangan, dan tahapan ibadah Anda.</p>
                </div>

                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6 text-xs">
                    <div class="bg-[#0B3B24] text-white p-5 rounded-2xl flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <span class="text-[10px] text-[#E5D3B3] uppercase tracking-wider">Jadwal Keberangkatan</span>
                            <h3 class="text-lg font-bold">15 Januari 2027 • Bandara Soekarno-Hatta (CGK)</h3>
                        </div>
                        <span class="bg-amber-500 text-emerald-950 font-bold px-3.5 py-1.5 rounded-full self-start">Persiapan Dokumen</span>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-stone-50 border border-stone-200">
                            <span class="w-8 h-8 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">1</span>
                            <div>
                                <h4 class="font-bold text-sm text-[#0B3B24]">Manasik Umrah & Pembagian Perlengkapan</h4>
                                <p class="text-stone-600 mt-1">Dilaksanakan 2 minggu sebelum keberangkatan di kantor pusat atau secara hybrid.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-stone-50 border border-stone-200">
                            <span class="w-8 h-8 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">2</span>
                            <div>
                                <h4 class="font-bold text-sm text-[#0B3B24]">Keberangkatan dari Indonesia menuju Madinah</h4>
                                <p class="text-stone-600 mt-1">Jamaah berkumpul di Terminal 3 Internasional 4 jam sebelum jadwal terbang.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-stone-50 border border-stone-200">
                            <span class="w-8 h-8 rounded-full bg-amber-500 text-white font-bold flex items-center justify-center shrink-0">3</span>
                            <div>
                                <h4 class="font-bold text-sm text-[#0B3B24]">Pelaksanaan Ibadah Umrah & Ziarah</h4>
                                <p class="text-stone-600 mt-1">Pendampingan penuh oleh Muthawif berpengalaman selama di Madinah, Makkah, dan Istanbul.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================================================================== -->
            <!-- TAB 6: NOTIFIKASI                                                     -->
            <!-- ===================================================================== -->
            <div x-show="activeTab === 'notifikasi'" x-transition.opacity.duration.300ms style="display: none;" class="space-y-6 font-serif">
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold text-[#0B3B24]">Pusat Notifikasi</h2>
                    <p class="text-xs text-stone-600">Pemberitahuan penting terkait status pembayaran dan kelengkapan berkas Anda.</p>
                </div>

                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200 space-y-4 text-xs">
                    <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 flex items-start gap-3">
                        <span class="w-3 h-3 rounded-full bg-rose-600 mt-1 shrink-0"></span>
                        <div class="space-y-1">
                            <p class="font-bold text-rose-950">Perbaikan Dokumen Pas Foto Diperlukan</p>
                            <p class="text-rose-800">Admin memberikan catatan: Latar belakang pas foto wajib berwarna putih polos. Silakan unggah ulang pada menu Dokumen.</p>
                            <span class="text-[10px] text-rose-600 block pt-1">Baru saja</span>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 flex items-start gap-3">
                        <span class="w-3 h-3 rounded-full bg-emerald-600 mt-1 shrink-0"></span>
                        <div class="space-y-1">
                            <p class="font-bold text-emerald-950">Pembayaran DP Terverifikasi</p>
                            <p class="text-emerald-800">Pembayaran Down Payment sebesar Rp 5.000.000 telah diterima dan diverifikasi oleh bagian keuangan.</p>
                            <span class="text-[10px] text-emerald-600 block pt-1">Kemarin, 14:20 WIB</span>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-stone-50 border border-stone-200 flex items-start gap-3">
                        <span class="w-3 h-3 rounded-full bg-amber-500 mt-1 shrink-0"></span>
                        <div class="space-y-1">
                            <p class="font-bold text-stone-800">Booking Paket Berhasil Dibuat</p>
                            <p class="text-stone-600">Selamat datang di ROZWIA Islamic Travel. Pendaftaran paket January Umroh & Istanbul Anda telah tercatat.</p>
                            <span class="text-[10px] text-stone-400 block pt-1">2 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ===================================================================== -->
            <!-- TAB 7: PROFIL PENGGUNA                                                -->
            <!-- ===================================================================== -->
            <div x-show="activeTab === 'profil'" x-transition.opacity.duration.300ms style="display: none;" class="space-y-6 font-serif">
                <div class="space-y-1">
                    <h2 class="text-2xl font-bold text-[#0B3B24]">Profil Jamaah</h2>
                    <p class="text-xs text-stone-600">Perbarui informasi kontak dan data diri Anda.</p>
                </div>

                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4 text-xs">
                    <form action="#" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="font-bold text-stone-700">Nama Lengkap (Sesuai Paspor)</label>
                                <input type="text" value="Rinzani Fauziah" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-bold text-stone-700">Nomor WhatsApp</label>
                                <input type="text" value="0812-3456-7890" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-bold text-stone-700">Alamat Email</label>
                                <input type="email" value="rinzani@gmail.com" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-bold text-stone-700">Password Baru (Opsional)</label>
                                <input type="password" placeholder="Kosongkan jika tidak ingin mengubah" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                            </div>
                        </div>
                        <div class="pt-2">
                            <button type="submit" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-6 py-3 rounded-xl transition cursor-pointer">
                                Simpan Perubahan Profil
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </main>

    </div>
</div>

@endsection