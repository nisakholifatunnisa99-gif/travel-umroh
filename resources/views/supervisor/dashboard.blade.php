@extends('layouts.supervisor')

@section('title', 'Dashboard Supervisor - ROZWIA Islamic Travel')

@section('content')
<div class="space-y-6 font-serif">
    
    <!-- Header Sapaan Supervisor -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-8 shadow-md flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
        <div class="space-y-1">
            <span class="bg-amber-500 text-emerald-950 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Area Supervisor</span>
            <h1 class="text-2xl md:text-3xl font-bold">Dashboard Pengawasan & Operasional</h1>
            <p class="text-emerald-100/80 text-xs sm:text-sm max-w-xl font-sans">
                Pantau identitas perusahaan, kelola paket umroh/haji, verifikasi akun pengguna, serta tinjau laporan biaya secara terpusat.
            </p>
        </div>
        <div class="bg-emerald-950/80 border border-emerald-800 p-4 rounded-2xl text-center min-w-[180px]">
            <span class="block text-xs text-amber-300 font-bold uppercase tracking-wider">Total Akun Aktif</span>
            <span class="text-xl font-bold text-white">40 Akun</span>
        </div>
    </div>

    <!-- Statistik Ringkasan (3 Kartu) -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 font-serif">
        <div class="bg-white p-6 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Total Seluruh Paket</span>
            <h3 class="text-xl font-bold text-[#0B3B24]">5 Paket Tersedia</h3>
            <p class="text-[11px] text-stone-400 font-sans">Umroh & Haji Khusus</p>
        </div>

        <div class="bg-emerald-50 p-6 rounded-[32px] border border-emerald-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800">Total Pengguna Terdaftar</span>
            <h3 class="text-xl font-bold text-emerald-950">56 Pengguna</h3>
            <p class="text-[11px] text-emerald-700 font-medium font-sans">Jamaah & Staff</p>
        </div>

        <div class="bg-amber-50 p-6 rounded-[32px] border border-amber-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-800">Total Akun Nonaktif</span>
            <h3 class="text-xl font-bold text-amber-950">16 Akun</h3>
            <p class="text-[11px] text-amber-700 font-medium font-sans">Perlu tinjauan sistem</p>
        </div>
    </div>

    <!-- Menu Pintas Navigasi Supervisor -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6 font-serif">
        <div>
            <span class="text-xs font-bold text-amber-700 uppercase tracking-wider">Navigasi Cepat</span>
            <h3 class="text-xl font-bold text-[#0B3B24]">Pilih Modul Pengawasan Supervisor</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 font-sans">
            <!-- Modul 1 -->
            <a href="{{ route('supervisor.profile') }}" class="bg-[#F4EFE6] hover:bg-emerald-900 hover:text-white p-5 rounded-2xl border border-stone-200 transition group space-y-2 block">
                <span class="text-2xl block">📄</span>
                <h4 class="font-bold text-[#0B3B24] group-hover:text-white text-sm">Profile Perusahaan</h4>
                <p class="text-[11px] text-stone-600 group-hover:text-emerald-100">Kelola identitas & kontak travel.</p>
            </a>

            <!-- Modul 2 -->
            <a href="{{ route('supervisor.paket') }}" class="bg-[#F4EFE6] hover:bg-emerald-900 hover:text-white p-5 rounded-2xl border border-stone-200 transition group space-y-2 block">
                <span class="text-2xl block">📦</span>
                <h4 class="font-bold text-[#0B3B24] group-hover:text-white text-sm">Kelola Paket</h4>
                <p class="text-[11px] text-stone-600 group-hover:text-emerald-100">Atur jadwal, harga, & kuota.</p>
            </a>

            <!-- Modul 3 -->
            <a href="{{ route('supervisor.users') }}" class="bg-[#F4EFE6] hover:bg-emerald-900 hover:text-white p-5 rounded-2xl border border-stone-200 transition group space-y-2 block">
                <span class="text-2xl block">👤</span>
                <h4 class="font-bold text-[#0B3B24] group-hover:text-white text-sm">Daftar Akun Pengguna</h4>
                <p class="text-[11px] text-stone-600 group-hover:text-emerald-100">Pantau status aktif/nonaktif.</p>
            </a>

            <!-- Modul 4 -->
            <a href="{{ route('supervisor.biaya') }}" class="bg-[#F4EFE6] hover:bg-emerald-900 hover:text-white p-5 rounded-2xl border border-stone-200 transition group space-y-2 block">
                <span class="text-2xl block">💰</span>
                <h4 class="font-bold text-[#0B3B24] group-hover:text-white text-sm">Total Biaya</h4>
                <p class="text-[11px] text-stone-600 group-hover:text-emerald-100">Laporan rekapitulasi keuangan.</p>
            </a>
        </div>
    </div>

</div>
@endsection