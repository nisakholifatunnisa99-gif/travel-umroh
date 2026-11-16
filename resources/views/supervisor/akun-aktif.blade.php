@extends('layouts.supervisor')

@section('title', 'Manajemen Akun & Detail Jamaah - Supervisor ROZWIA')

@section('supervisor_content')
<div class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6" x-data="{ selectedJamaah: null }">
    
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="space-y-1">
            <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL MANISPEST & AKUN JAMAAH</span>
            <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Daftar Akun & Detail Jamaah</h1>
            <p class="text-stone-600 text-sm">Monitor data profil lengkap, status akun, dan verifikasi dokumen persyaratan jamaah.</p>
        </div>
        <div>
            <button onclick="alert('Memproses File Excel... Data Akun dan Total Biaya Keseluruhan Berhasil Diunduh!')" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-emerald-950 font-bold text-xs sm:text-sm px-6 py-3 rounded-xl shadow-xs transition cursor-pointer">
                <span>📊</span> Download Data Excel
            </button>
        </div>
    </div>

    <!-- Filter Status -->
    <div class="flex flex-wrap items-center gap-3 pt-2 pb-4 border-b border-stone-100">
        <span class="text-xs font-bold text-stone-500 uppercase tracking-wider">Filter Status:</span>
        <button class="bg-[#0B3B24] text-white text-xs font-semibold px-4 py-2 rounded-full shadow-xs cursor-pointer">Semua Status</button>
        <button class="bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold px-4 py-2 rounded-full transition cursor-pointer">Aktif</button>
        <button class="bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold px-4 py-2 rounded-full transition cursor-pointer">Pending</button>
    </div>

    <!-- Tabel Data Akun & Jamaah -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-stone-200 text-stone-500 text-xs uppercase tracking-wider font-serif">
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">Nama Jamaah & NIK</th>
                    <th class="py-3 px-4">Kontak / Rombongan</th>
                    <th class="py-3 px-4">Info Penerbangan / Bus</th>
                    <th class="py-3 px-4">Status Akun</th>
                    <th class="py-3 px-4 text-center">Aksi Detail</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100 text-xs sm:text-sm text-stone-700 font-serif">
                <tr>
                    <td class="py-4 px-4 font-medium">1</td>
                    <td class="py-4 px-4">
                        <p class="font-bold text-[#0B3B24]">Rafid Alfaritsi</p>
                        <p class="text-[11px] text-stone-500">NIK: 3271012345670001</p>
                    </td>
                    <td class="py-4 px-4">
                        <p class="font-medium">081234567890</p>
                        <p class="text-[11px] text-amber-800">Rombongan: Keluarga Alfaritsi</p>
                    </td>
                    <td class="py-4 px-4">
                        <p class="text-xs">Seat: 12A | Room: Quad</p>
                        <p class="text-[11px] text-stone-500">Bus: Bus 03 (Kloter 1)</p>
                    </td>
                    <td class="py-4 px-4">
                        <span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-3 py-1 rounded-full">Aktif</span>
                    </td>
                    <td class="py-4 px-4 text-center">
                        <button @click="selectedJamaah = 1" class="bg-[#0B3B24] hover:bg-emerald-900 text-white px-3 py-1.5 rounded-xl text-xs font-bold transition cursor-pointer">
                            🔍 Detail Profil & Dokumen
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- MODAL DETAIL JAMAAH (Profil Lengkap & Keterangan Dokumen) -->
    <div x-show="selectedJamaah !== null" style="display: none;" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-xs px-4">
        
        <div class="bg-white rounded-3xl p-8 max-w-3xl w-full shadow-2xl border border-stone-100 space-y-6 max-h-[90vh] overflow-y-auto">
            
            <div class="flex items-center justify-between border-b border-stone-200 pb-4">
                <div>
                    <span class="text-xs font-bold text-amber-800 uppercase tracking-widest">Detail Lengkap Jamaah</span>
                    <h2 class="text-xl font-bold text-[#0B3B24] font-serif">Rafid Alfaritsi</h2>
                </div>
                <button @click="selectedJamaah = null" class="w-8 h-8 rounded-full bg-stone-100 hover:bg-stone-200 flex items-center justify-center text-stone-700 font-bold cursor-pointer">
                    ✕
                </button>
            </div>

            <!-- Bagian 1: Data Profil Jamaah -->
            <div class="space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-[#0B3B24]">1. Informasi Profil & Manifest</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 bg-stone-50 p-4 rounded-2xl text-xs">
                    <div>
                        <span class="text-stone-500 block">Tempat / Tanggal Lahir</span>
                        <span class="font-bold text-stone-800">Jakarta, 15 Januari 1990</span>
                    </div>
                    <div>
                        <span class="text-stone-500 block">Jenis Kelamin</span>
                        <span class="font-bold text-stone-800">Laki-laki</span>
                    </div>
                    <div>
                        <span class="text-stone-500 block">Email Aktif</span>
                        <span class="font-bold text-stone-800">rafid@email.com</span>
                    </div>
                    <div>
                        <span class="text-stone-500 block">Nomor Paspor</span>
                        <span class="font-bold text-stone-800">C1234567</span>
                    </div>
                    <div>
                        <span class="text-stone-500 block">Nomor Seat & Room</span>
                        <span class="font-bold text-stone-800">Seat 12A | Room Quad</span>
                    </div>
                    <div>
                        <span class="text-stone-500 block">Manifest Bus & Tracking</span>
                        <span class="font-bold text-stone-800">Bus 03 | Proses Dokumen</span>
                    </div>
                </div>
                <div class="bg-stone-50 p-4 rounded-2xl text-xs">
                    <span class="text-stone-500 block">Alamat Domisili</span>
                    <span class="font-bold text-stone-800">Jl. Margonda Raya No. 10, Depok, Jawa Barat</span>
                </div>
            </div>

            <!-- Bagian 2: Keterangan Dokumen Persyaratan -->
            <div class="space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-[#0B3B24]">2. Verifikasi Dokumen Persyaratan</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="bg-stone-100 text-stone-600 font-serif">
                                <th class="p-3 rounded-l-xl">Tipe Dokumen</th>
                                <th class="p-3">File Path / Berkas</th>
                                <th class="p-3">Admin Notes</th>
                                <th class="p-3 rounded-r-xl">Status Dokumen</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            <tr>
                                <td class="p-3 font-bold text-stone-800">Scan Paspor</td>
                                <td class="p-3 text-blue-600 underline cursor-pointer">paspor_rafid.pdf</td>
                                <td class="p-3 text-stone-500">Jelas & Berlaku > 6 Bulan</td>
                                <td class="p-3"><span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2.5 py-1 rounded-full">Diverif</span></td>
                            </tr>
                            <tr>
                                <td class="p-3 font-bold text-stone-800">Sertifikat Vaksin Meningitis</td>
                                <td class="p-3 text-blue-600 underline cursor-pointer">vaksin_meningitis.pdf</td>
                                <td class="p-3 text-stone-500">-</td>
                                <td class="p-3"><span class="bg-amber-100 text-amber-800 text-[10px] font-bold px-2.5 py-1 rounded-full">Menunggu Verif</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="pt-2 flex justify-end">
                <button @click="selectedJamaah = null" class="bg-[#0B3B24] text-white px-6 py-2.5 rounded-xl font-bold text-xs cursor-pointer">
                    Tutup Detail
                </button>
            </div>

        </div>
    </div>

</div>
@endsection