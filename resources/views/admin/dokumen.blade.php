@extends('layouts.admin') {{-- Sesuaikan dengan layout utama Anda --}}

@section('title', 'Verifikasi Dokumen Pribadi - ROZWIA Islamic Travel')

@section('content')
<div class="space-y-6 font-serif">
    
    <!-- 1. Header Halaman -->
    <div class="space-y-1">
        <h1 class="text-3xl sm:text-4xl font-bold text-[#0B3B24]">Verifikasi Dokumen Pribadi</h1>
        <p class="text-xs sm:text-sm text-stone-600 font-sans">
            Periksa dokumen yang diunggah jamaah lalu verifikasi minta perbaikan atau tolak.
        </p>
    </div>

    <!-- 2. Empat Kartu Ringkasan Status Dokumen dengan Shadow Keemasan -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 font-sans">
        
        <!-- Kartu 1: Menunggu Verifikasi -->
        <div class="bg-white rounded-[24px] p-5 border border-stone-200 shadow-[4px_6px_0px_0px_#D4B996] space-y-1 relative overflow-hidden">
            <span class="text-[11px] font-bold text-amber-700 uppercase tracking-wider block">Menunggu Verifikasi</span>
            <div class="flex items-baseline justify-between">
                <h3 class="text-3xl font-bold text-stone-900 font-serif">14 <span class="text-xs font-normal text-stone-500 font-sans">Berkas Baru</span></h3>
            </div>
        </div>

        <!-- Kartu 2: Perlu Diperbaiki -->
        <div class="bg-white rounded-[24px] p-5 border border-stone-200 shadow-[4px_6px_0px_0px_#D4B996] space-y-1 relative overflow-hidden">
            <span class="text-[11px] font-bold text-stone-600 uppercase tracking-wider block">Perlu Diperbaiki</span>
            <div class="flex items-baseline justify-between">
                <h3 class="text-3xl font-bold text-stone-900 font-serif">3 <span class="text-xs font-normal text-stone-500 font-sans">Berkas</span></h3>
            </div>
        </div>

        <!-- Kartu 3: Ditolak -->
        <div class="bg-white rounded-[24px] p-5 border border-stone-200 shadow-[4px_6px_0px_0px_#D4B996] space-y-1 relative overflow-hidden">
            <span class="text-[11px] font-bold text-rose-700 uppercase tracking-wider block">Ditolak</span>
            <div class="flex items-baseline justify-between">
                <h3 class="text-3xl font-bold text-stone-900 font-serif">1 <span class="text-xs font-normal text-stone-500 font-sans">Berkas</span></h3>
            </div>
        </div>

        <!-- Kartu 4: Diverifikasi -->
        <div class="bg-white rounded-[24px] p-5 border border-stone-200 shadow-[4px_6px_0px_0px_#D4B996] space-y-1 relative overflow-hidden">
            <span class="text-[11px] font-bold text-emerald-800 uppercase tracking-wider block">Diverifikasi</span>
            <div class="flex items-baseline justify-between">
                <h3 class="text-3xl font-bold text-stone-900 font-serif">86 <span class="text-xs font-normal text-stone-500 font-sans">Selesai</span></h3>
            </div>
        </div>

    </div>

    <!-- 3. Filter Kategori Dokumen & Search Bar -->
    <div class="bg-white rounded-[32px] p-5 shadow-sm border border-stone-200 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4 font-sans text-xs">
        
        <!-- Tombol Filter Status / Kategori -->
        <div class="flex flex-wrap items-center gap-2">
            <button class="bg-[#0B3B24] text-white font-bold px-4 py-2 rounded-full shadow-xs transition">
                Semua (104)
            </button>
            <button class="bg-[#FAF8F5] hover:bg-stone-100 text-stone-700 font-medium px-4 py-2 rounded-full border border-stone-200 transition">
                Menunggu Verifikasi (14)
            </button>
            <button class="bg-[#FAF8F5] hover:bg-stone-100 text-stone-700 font-medium px-4 py-2 rounded-full border border-stone-200 transition">
                Perlu Diperbaiki (3)
            </button>
            <button class="bg-[#FAF8F5] hover:bg-stone-100 text-stone-700 font-medium px-4 py-2 rounded-full border border-stone-200 transition">
                Ditolak (1)
            </button>
            <button class="bg-[#FAF8F5] hover:bg-stone-100 text-stone-700 font-medium px-4 py-2 rounded-full border border-stone-200 transition">
                Kedaluwarsa (0)
            </button>
            <button class="bg-[#FAF8F5] hover:bg-stone-100 text-stone-700 font-medium px-4 py-2 rounded-full border border-stone-200 transition">
                Diverifikasi (86)
            </button>
        </div>

        <!-- Kolom Pencarian -->
        <div class="relative w-full lg:w-72">
            <span class="absolute left-3.5 top-3 text-stone-400 text-xs"><span class="material-symbols-outlined">
search
</span></span>
            <input type="text" placeholder="Cari Nama Akun Jamaah / Paspor..." class="w-full pl-9 pr-4 py-2.5 rounded-full bg-[#FAF8F5] border border-stone-300 text-xs focus:outline-none focus:border-[#0B3B24]">
        </div>

    </div>

    <!-- 4. Tabel Daftar Dokumen Jamaah -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6 font-sans">
        
        <div class="overflow-x-auto rounded-2xl border border-stone-200">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-stone-100/70 text-stone-700 font-serif border-b border-stone-200">
                        <th class="p-4 font-semibold w-12 text-center">No</th>
                        <th class="p-4 font-semibold">Jamaah</th>
                        <th class="p-4 font-semibold">Tipe Dokumen</th>
                        <th class="p-4 font-semibold">Diunggah</th>
                        <th class="p-4 font-semibold">Status</th>
                        <th class="p-4 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-stone-700 font-serif">
                    
                    <!-- Baris 1 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 text-center text-stone-500 font-sans">1</td>
                        <td class="p-4">
                            <strong class="block text-stone-900 text-sm">Rinzani Kholifah</strong>
                            <span class="text-[11px] text-stone-500 font-sans">ID: JMH-2026-0129 &bull; Kloter SUB-02</span>
                        </td>
                        <td class="p-4">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined">photo_camera_front</span>
                                <div>
                                    <strong class="block text-stone-900">Pas Foto 4&times;6 (Latar Putih)</strong>
                                    <span class="text-[11px] text-stone-500 font-sans">Format JPG &bull; 2.4 MB</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-stone-600 font-sans text-[11px]">
                            10-04-2026<br><span class="text-stone-400">09:14 WIB</span>
                        </td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-amber-300 bg-amber-50/50 text-amber-800 text-[11px] font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Menunggu Verifikasi
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            <a href="#" class="inline-flex items-center gap-1 bg-[#FAF8F5] hover:bg-stone-100 text-stone-800 border border-stone-300 font-bold px-4 py-2 rounded-xl transition shadow-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1200 1200">
	<path d="M0 0h1200v1200H0z" fill="none" />
	<path fill="currentColor" d="M779.843 599.925c0 95.331-80.664 172.612-180.169 172.612c-99.504 0-180.168-77.281-180.168-172.612c0-95.332 80.664-172.612 180.168-172.612c99.505-.001 180.169 77.281 180.169 172.612M600 240.521c-103.025.457-209.814 25.538-310.904 73.557C214.038 351.2 140.89 403.574 77.394 468.219C46.208 501.218 6.431 549 0 599.981c.76 44.161 48.13 98.669 77.394 131.763c59.543 62.106 130.786 113.018 211.702 154.179C383.367 931.674 487.712 958.015 600 959.48c103.123-.464 209.888-25.834 310.866-73.557c75.058-37.122 148.243-89.534 211.74-154.179c31.185-32.999 70.962-80.782 77.394-131.763c-.76-44.161-48.13-98.671-77.394-131.764c-59.543-62.106-130.824-112.979-211.74-154.141C816.644 268.36 712.042 242.2 600 240.521m-.076 89.248c156.119 0 282.675 120.994 282.675 270.251S756.043 870.27 599.924 870.27S317.249 749.275 317.249 600.02c0-149.257 126.556-270.251 282.675-270.251" />
</svg>
 Periksa
                            </a>
                        </td>
                    </tr>

                    <!-- Baris 2 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 text-center text-stone-500 font-sans">2</td>
                        <td class="p-4">
                            <strong class="block text-stone-900 text-sm">Wildan Rafid Raid</strong>
                            <span class="text-[11px] text-stone-500 font-sans">ID: JMH-2026-0130 &bull; Kloter JKG-08</span>
                        </td>
                        <td class="p-4">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined">passport</span>
                                <div>
                                    <strong class="block text-stone-900">Paspor Asli</strong>
                                    <span class="text-[11px] text-stone-500 font-sans">Format PDF &bull; No: C9812901</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-stone-600 font-sans text-[11px]">
                            10-04-2026<br><span class="text-stone-400">08:30 WIB</span>
                        </td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-emerald-300 bg-emerald-50/50 text-emerald-800 text-[11px] font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Diverifikasi
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            <a href="#" class="inline-flex items-center gap-1 bg-[#FAF8F5] hover:bg-stone-100 text-stone-800 border border-stone-300 font-bold px-4 py-2 rounded-xl transition shadow-xs">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1200 1200">
	<path d="M0 0h1200v1200H0z" fill="none" />
	<path fill="currentColor" d="M779.843 599.925c0 95.331-80.664 172.612-180.169 172.612c-99.504 0-180.168-77.281-180.168-172.612c0-95.332 80.664-172.612 180.168-172.612c99.505-.001 180.169 77.281 180.169 172.612M600 240.521c-103.025.457-209.814 25.538-310.904 73.557C214.038 351.2 140.89 403.574 77.394 468.219C46.208 501.218 6.431 549 0 599.981c.76 44.161 48.13 98.669 77.394 131.763c59.543 62.106 130.786 113.018 211.702 154.179C383.367 931.674 487.712 958.015 600 959.48c103.123-.464 209.888-25.834 310.866-73.557c75.058-37.122 148.243-89.534 211.74-154.179c31.185-32.999 70.962-80.782 77.394-131.763c-.76-44.161-48.13-98.671-77.394-131.764c-59.543-62.106-130.824-112.979-211.74-154.141C816.644 268.36 712.042 242.2 600 240.521m-.076 89.248c156.119 0 282.675 120.994 282.675 270.251S756.043 870.27 599.924 870.27S317.249 749.275 317.249 600.02c0-149.257 126.556-270.251 282.675-270.251" />
</svg>
 Periksa
                            </a>
                        </td>
                    </tr>

                    <!-- Baris 3 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 text-center text-stone-500 font-sans">3</td>
                        <td class="p-4">
                            <strong class="block text-stone-900 text-sm">Maryam Siti</strong>
                            <span class="text-[11px] text-stone-500 font-sans">ID: JMH-2026-0131 &bull; Kloter SUB-02</span>
                        </td>
                        <td class="p-4">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined">assignment</span>
                                <div>
                                    <strong class="block text-stone-900">Kartu Keluarga (KK)</strong>
                                    <span class="text-[11px] text-stone-500 font-sans">Format PDF &bull; 1.1 MB</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-stone-600 font-sans text-[11px]">
                            10-04-2026<br><span class="text-stone-400">09:55 WIB</span>
                        </td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-amber-300 bg-amber-50/50 text-amber-800 text-[11px] font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Menunggu Verifikasi
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            <a href="#" class="inline-flex items-center gap-1 bg-[#FAF8F5] hover:bg-stone-100 text-stone-800 border border-stone-300 font-bold px-4 py-2 rounded-xl transition shadow-xs">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1200 1200">
	<path d="M0 0h1200v1200H0z" fill="none" />
	<path fill="currentColor" d="M779.843 599.925c0 95.331-80.664 172.612-180.169 172.612c-99.504 0-180.168-77.281-180.168-172.612c0-95.332 80.664-172.612 180.168-172.612c99.505-.001 180.169 77.281 180.169 172.612M600 240.521c-103.025.457-209.814 25.538-310.904 73.557C214.038 351.2 140.89 403.574 77.394 468.219C46.208 501.218 6.431 549 0 599.981c.76 44.161 48.13 98.669 77.394 131.763c59.543 62.106 130.786 113.018 211.702 154.179C383.367 931.674 487.712 958.015 600 959.48c103.123-.464 209.888-25.834 310.866-73.557c75.058-37.122 148.243-89.534 211.74-154.179c31.185-32.999 70.962-80.782 77.394-131.763c-.76-44.161-48.13-98.671-77.394-131.764c-59.543-62.106-130.824-112.979-211.74-154.141C816.644 268.36 712.042 242.2 600 240.521m-.076 89.248c156.119 0 282.675 120.994 282.675 270.251S756.043 870.27 599.924 870.27S317.249 749.275 317.249 600.02c0-149.257 126.556-270.251 282.675-270.251" />
</svg>
 Periksa
                            </a>
                        </td>
                    </tr>

                    <!-- Baris 4 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 text-center text-stone-500 font-sans">4</td>
                        <td class="p-4">
                            <strong class="block text-stone-900 text-sm">Budi Santoso</strong>
                            <span class="text-[11px] text-stone-500 font-sans">ID: JMH-2026-0132 &bull; Kloter SOC-12</span>
                        </td>
                        <td class="p-4">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined">diagnosis</span>
                                <div>
                                    <strong class="block text-stone-900">Surat Keterangan Sehat</strong>
                                    <span class="text-[11px] text-stone-500 font-sans">Format JPG &bull; Puskesmas/RS</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-stone-600 font-sans text-[11px]">
                            10-04-2026<br><span class="text-stone-400">07:22 WIB</span>
                        </td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-orange-300 bg-orange-50/50 text-orange-800 text-[11px] font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span> Perlu Diperbaiki
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            <a href="#" class="inline-flex items-center gap-1 bg-[#FAF8F5] hover:bg-stone-100 text-stone-800 border border-stone-300 font-bold px-4 py-2 rounded-xl transition shadow-xs">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1200 1200">
	<path d="M0 0h1200v1200H0z" fill="none" />
	<path fill="currentColor" d="M779.843 599.925c0 95.331-80.664 172.612-180.169 172.612c-99.504 0-180.168-77.281-180.168-172.612c0-95.332 80.664-172.612 180.168-172.612c99.505-.001 180.169 77.281 180.169 172.612M600 240.521c-103.025.457-209.814 25.538-310.904 73.557C214.038 351.2 140.89 403.574 77.394 468.219C46.208 501.218 6.431 549 0 599.981c.76 44.161 48.13 98.669 77.394 131.763c59.543 62.106 130.786 113.018 211.702 154.179C383.367 931.674 487.712 958.015 600 959.48c103.123-.464 209.888-25.834 310.866-73.557c75.058-37.122 148.243-89.534 211.74-154.179c31.185-32.999 70.962-80.782 77.394-131.763c-.76-44.161-48.13-98.671-77.394-131.764c-59.543-62.106-130.824-112.979-211.74-154.141C816.644 268.36 712.042 242.2 600 240.521m-.076 89.248c156.119 0 282.675 120.994 282.675 270.251S756.043 870.27 599.924 870.27S317.249 749.275 317.249 600.02c0-149.257 126.556-270.251 282.675-270.251" />
</svg>
 Periksa
                            </a>
                        </td>
                    </tr>

                    <!-- Baris 5 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 text-center text-stone-500 font-sans">5</td>
                        <td class="p-4">
                            <strong class="block text-stone-900 text-sm">Hasan Basri</strong>
                            <span class="text-[11px] text-stone-500 font-sans">ID: JMH-2026-0133 &bull; Kloter JKS-03</span>
                        </td>
                        <td class="p-4">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined">auto_stories</span>
                                <div>
                                    <strong class="block text-stone-900">Buku Nikah / Akta Mahram</strong>
                                    <span class="text-[11px] text-stone-500 font-sans">Format PDF &bull; Halaman 1-4</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-stone-600 font-sans text-[11px]">
                            09-04-2026<br><span class="text-stone-400">16:40 WIB</span>
                        </td>
                        <td class="p-4">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-rose-300 bg-rose-50/50 text-rose-800 text-[11px] font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Ditolak
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            <a href="#" class="inline-flex items-center gap-1 bg-[#FAF8F5] hover:bg-stone-100 text-stone-800 border border-stone-300 font-bold px-4 py-2 rounded-xl transition shadow-xs">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1200 1200">
	<path d="M0 0h1200v1200H0z" fill="none" />
	<path fill="currentColor" d="M779.843 599.925c0 95.331-80.664 172.612-180.169 172.612c-99.504 0-180.168-77.281-180.168-172.612c0-95.332 80.664-172.612 180.168-172.612c99.505-.001 180.169 77.281 180.169 172.612M600 240.521c-103.025.457-209.814 25.538-310.904 73.557C214.038 351.2 140.89 403.574 77.394 468.219C46.208 501.218 6.431 549 0 599.981c.76 44.161 48.13 98.669 77.394 131.763c59.543 62.106 130.786 113.018 211.702 154.179C383.367 931.674 487.712 958.015 600 959.48c103.123-.464 209.888-25.834 310.866-73.557c75.058-37.122 148.243-89.534 211.74-154.179c31.185-32.999 70.962-80.782 77.394-131.763c-.76-44.161-48.13-98.671-77.394-131.764c-59.543-62.106-130.824-112.979-211.74-154.141C816.644 268.36 712.042 242.2 600 240.521m-.076 89.248c156.119 0 282.675 120.994 282.675 270.251S756.043 870.27 599.924 870.27S317.249 749.275 317.249 600.02c0-149.257 126.556-270.251 282.675-270.251" />
</svg>
 Periksa
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Footer / Paginasi & Info Prioritas -->
        <div class="flex flex-col sm:flex-row justify-between items-center pt-2 gap-4 text-xs text-stone-500 font-sans">
            <div class="flex items-center gap-3">
                <span>Menampilkan <strong>5</strong> dari <strong>104</strong> dokumen jamaah</span>
                <span class="bg-amber-100 text-amber-900 font-bold px-3 py-1 rounded-full text-[11px]">
                    &bull; Prioritas: 14 Menunggu Verifikasi
                </span>
            </div>

            <div class="flex items-center gap-1.5">
                <button class="px-3 py-2 rounded-xl border border-stone-300 text-stone-400 cursor-not-allowed">Sebelumnya</button>
                <button class="w-9 h-9 rounded-xl bg-[#0B3B24] text-white font-bold flex items-center justify-center shadow-xs">1</button>
                <button class="w-9 h-9 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">2</button>
                <button class="w-9 h-9 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">3</button>
                <span class="px-1 text-stone-400">...</span>
                <button class="w-9 h-9 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">21</button>
                <button class="px-3 py-2 rounded-xl border border-stone-300 text-stone-700 hover:bg-stone-100 transition cursor-pointer">Selanjutnya</button>
            </div>
        </div>

    </div>

</div>
@endsection