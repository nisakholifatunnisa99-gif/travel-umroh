@extends('layouts.supervisor')

@section('title', 'Report Total Biaya - Supervisor ROZWIA')

@section('content')
<div class="space-y-6 font-serif">
    
    <!-- 1. Judul Halaman -->
    <h1 class="text-3xl font-bold text-[#0B3B24]">Report Total Biaya</h1>

    <!-- 2. Banner Laporan Jamaah & Keuangan -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-8 shadow-sm flex items-center gap-6">
        <div class="w-16 h-16 rounded-2xl bg-emerald-900 border border-emerald-700 flex items-center justify-center text-3xl shrink-0">
            <span class="material-symbols-outlined text-2xl text-amber-500">mosque</span>
        </div>
        <div class="space-y-1">
            <h2 class="text-xl sm:text-2xl font-bold text-[#E5D3B3]">Laporan Jamaah & Keuangan</h2>
            <p class="text-xs sm:text-sm text-emerald-100/80 font-sans">
                Pusat informasi data jamaah, rekapitulasi, dan laporan keuangan.
            </p>
        </div>
    </div>

    <!-- 3. Filter Tanggal & Tombol Terapkan (Sudah Interaktif) -->
    <div class="bg-white rounded-[32px] p-4 sm:p-5 shadow-sm border border-stone-200 flex flex-col lg:flex-row items-center justify-between gap-4 font-sans text-xs">
        <form action="#" method="GET" class="flex flex-wrap items-center gap-3 w-full lg:w-auto">
            
            <!-- Input Tanggal Mulai -->
            <div class="flex items-center gap-2 bg-[#FAF8F5] border border-stone-300 rounded-2xl px-4 py-2 flex-1 sm:flex-initial">
                <span class="material-symbols-outlined">calendar_month</span>
                <div class="flex flex-col">
                    <label for="tanggal_mulai" class="text-[10px] text-stone-400 font-bold uppercase cursor-pointer">Tanggal Mulai</label>
                    <input type="date" id="tanggal_mulai" name="tanggal_mulai" value="2026-11-01" 
                           class="bg-transparent font-bold text-stone-800 text-xs focus:outline-none cursor-pointer">
                </div>
            </div>

            <!-- Input Tanggal Akhir -->
            <div class="flex items-center gap-2 bg-[#FAF8F5] border border-stone-300 rounded-2xl px-4 py-2 flex-1 sm:flex-initial">
                <span class="material-symbols-outlined">calendar_month</span>
                <div class="flex flex-col">
                    <label for="tanggal_akhir" class="text-[10px] text-stone-400 font-bold uppercase cursor-pointer">Tanggal Akhir</label>
                    <input type="date" id="tanggal_akhir" name="tanggal_akhir" value="2027-01-01" 
                           class="bg-transparent font-bold text-stone-800 text-xs focus:outline-none cursor-pointer">
                </div>
            </div>

            <!-- Tombol Terapkan -->
            <button type="submit" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-6 py-3 rounded-2xl transition cursor-pointer shadow-sm">
                Terapkan
            </button>
        </form>

        <!-- Keterangan Rentang Waktu Dinamis -->
        <div class="text-stone-500 font-medium px-2">
            Rentang Laporan Keuangan Aktif
        </div>
    </div>

    <!-- 4. Dua Kartu Statistik Utama -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 font-serif">
        <!-- Total Jamaah -->
        <div class="bg-white p-6 sm:p-8 rounded-[32px] border border-stone-200 shadow-sm space-y-2">
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-800 flex items-center justify-center text-lg">
                <span class="material-symbols-outlined">group</span>
            </div>
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500 font-sans block">Total Jamaah Terdaftar</span>
            <h3 class="text-4xl font-bold text-[#0B3B24]">56</h3>
        </div>

        <!-- Total Pembayaran -->
        <div class="bg-white p-6 sm:p-8 rounded-[32px] border border-stone-200 shadow-sm space-y-2">
            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-lg">
                <span class="material-symbols-outlined">money_bag</span>
            </div>
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500 font-sans block">Total Pembayaran</span>
            <h3 class="text-3xl sm:text-4xl font-bold text-[#0B3B24]">Rp 120.400.000.000</h3>
        </div>
    </div>

    <!-- 5. Tabel Ringkasan Data Paket & Keuangan -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6 font-sans">
        
        <!-- Header Tabel & Search / Download -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h3 class="text-base font-bold text-[#0B3B24] font-serif">Ringkasan Data Paket</h3>
                <p class="text-xs text-stone-400">Menampilkan 32 dari 32 paket</p>
            </div>
            <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto">
                <!-- Search Box -->
                <div class="relative flex-1 sm:w-64">
                    <span class="absolute left-3.5 top-3 text-stone-400 text-xs"><span class="material-symbols-outlined">
search
</span></span>
                    <input type="text" placeholder="Cari Nama Paket" class="w-full pl-9 pr-4 py-2.5 rounded-full bg-stone-50 border border-stone-300 text-xs focus:outline-none focus:border-[#0B3B24]">
                </div>
                <!-- Tombol Download Excel -->
                <button onclick="alert('Mengunduh laporan Excel...')" class="bg-white hover:bg-stone-50 text-[#0B3B24] border border-[#0B3B24] font-bold text-xs py-2.5 px-5 rounded-full transition cursor-pointer flex items-center gap-2 shadow-xs">
                    <span class="material-symbols-outlined">save_as</span> Download Laporan (Excel)
                </button>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="overflow-x-auto rounded-2xl border border-stone-200">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-stone-100 text-stone-700 font-serif border-b border-stone-200">
                        <th class="p-4 font-semibold">Paket</th>
                        <th class="p-4 font-semibold">Jumlah</th>
                        <th class="p-4 font-semibold">Total Bayar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-stone-700 font-serif">
                    <tr class="hover:bg-stone-50/60">
                        <td class="p-4 font-bold text-stone-900">Umrah Sacred journey</td>
                        <td class="p-4 text-stone-600">8</td>
                        <td class="p-4 font-semibold text-emerald-800">Rp 1.678.990.000</td>
                    </tr>
                    <tr class="hover:bg-stone-50/60">
                        <td class="p-4 font-bold text-stone-900">Umrah Serenity Journey</td>
                        <td class="p-4 text-stone-600">10</td>
                        <td class="p-4 font-semibold text-emerald-800">Rp 2.150.000.000</td>
                    </tr>
                    <tr class="hover:bg-stone-50/60">
                        <td class="p-4 font-bold text-stone-900">Umrah Blessed Journey</td>
                        <td class="p-4 text-stone-600">12</td>
                        <td class="p-4 font-semibold text-emerald-800">Rp 2.890.500.000</td>
                    </tr>
                    <tr class="hover:bg-stone-50/60">
                        <td class="p-4 font-bold text-stone-900">Mabrur Haji Journey</td>
                        <td class="p-4 text-stone-600">40</td>
                        <td class="p-4 font-semibold text-emerald-800">40.400.000.000</td>
                    </tr>
                    <!-- Baris Total -->
                    <tr class="bg-stone-50 font-bold border-t-2 border-stone-300">
                        <td class="p-4 text-stone-900">Total</td>
                        <td class="p-4 text-stone-900">70</td>
                        <td class="p-4 text-[#0B3B24]">Rp 47.119.490.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Paginasi / Navigasi Halaman Bawah -->
        <div class="flex flex-col sm:flex-row justify-between items-center pt-4 gap-4 text-xs text-stone-500 font-sans">
            <div>Halaman 1 dari 8</div>
            <div class="flex items-center gap-1.5">
                <button class="w-8 h-8 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">&lt;</button>
                <button class="w-8 h-8 rounded-xl bg-[#0B3B24] text-white font-bold flex items-center justify-center shadow-xs">1</button>
                <button class="w-8 h-8 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">2</button>
                <button class="w-8 h-8 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">3</button>
                <span class="px-1 text-stone-400">...</span>
                <button class="w-8 h-8 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">8</button>
                <button class="w-8 h-8 rounded-xl border border-stone-300 flex items-center justify-center hover:bg-stone-100 transition cursor-pointer">&gt;</button>
            </div>
        </div>

    </div>

</div>
@endsection