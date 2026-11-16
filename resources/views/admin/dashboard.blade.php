@extends('layouts.admin')

@section('title', 'Dashboard Admin & Keuangan - ROZWIA')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">
    
    <!-- Welcome Header Admin -->
    <div class="bg-gradient-to-r from-emerald-900 to-emerald-950 text-white p-8 rounded-3xl shadow-md flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
        <div class="space-y-2">
            <span class="bg-amber-500 text-emerald-950 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Panel Admin Pengelola</span>
            <h1 class="text-2xl md:text-3xl font-bold font-serif">Dashboard Operasional & Keuangan</h1>
            <p class="text-emerald-100/80 text-sm max-w-xl">
                Kelola invoice yang dikirim via WhatsApp, verifikasi pembayaran DP jamaah, berikan password login, dan pantau sisa tagihan pelunasan secara real-time.
            </p>
        </div>
        <div class="bg-emerald-950/80 border border-emerald-800 p-4 rounded-2xl text-center min-w-[180px]">
            <span class="block text-xs text-amber-300 font-bold uppercase tracking-wider">Total Invoice Aktif</span>
            <span class="text-2xl font-bold text-white font-serif">48 Invoice</span>
        </div>
    </div>


    <!-- TABEL MANAJEMEN TAGIHAN & PEMBAYARAN -->
    <div class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6">
        
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="space-y-1">
                <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL KEUANGAN & PEMBAYARAN</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Daftar Tagihan & Status Pembayaran DP</h2>
                <p class="text-stone-600 text-xs sm:text-sm">Pantau jumlah yang sudah dibayar oleh jamaah dan sisa tagihan pelunasan.</p>
            </div>
            <div>
                <button onclick="alert('Fitur Buat Invoice Baru')" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold text-xs sm:text-sm px-5 py-3 rounded-xl shadow-xs transition cursor-pointer">
                    + Buat & Kirim Invoice WhatsApp
                </button>
            </div>
        </div>

        <!-- Tabel Transaksi Keuangan -->
        <div class="overflow-x-auto pt-2">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-stone-200 text-stone-500 text-xs uppercase tracking-wider font-serif">
                        <th class="py-3 px-4">Invoice #</th>
                        <th class="py-3 px-4">Nama Jamaah</th>
                        <th class="py-3 px-4">Total Paket</th>
                        <th class="py-3 px-4">Sudah Dibayar (DP)</th>
                        <th class="py-3 px-4">Sisa Tagihan</th>
                        <th class="py-3 px-4">Status & Aksi Admin</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-xs sm:text-sm text-stone-700 font-serif">
                    <tr>
                        <td class="py-4 px-4 font-bold text-[#0B3B24]">INV/2026/001</td>
                        <td class="py-4 px-4 font-bold">Rafid Alfaritsi</td>
                        <td class="py-4 px-4">Rp 34.500.000</td>
                        <td class="py-4 px-4 font-bold text-emerald-700">Rp 5.000.000 (DP)</td>
                        <td class="py-4 px-4 font-bold text-rose-700">Rp 29.500.000</td>
                        <td class="py-4 px-4 space-y-2">
                            <span class="bg-amber-100 text-amber-800 text-[11px] font-bold px-3 py-1 rounded-full inline-block">DP Lunas / Terverifikasi</span>
                            <div>
                                <button onclick="alert('Password sementara telah dikirim via WhatsApp kepada jamaah.')" class="text-xs bg-emerald-700 hover:bg-emerald-800 text-white font-bold px-3 py-1.5 rounded-lg transition cursor-pointer">
                                    🔑 Berikan Password Login
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 px-4 font-bold text-[#0B3B24]">INV/2026/002</td>
                        <td class="py-4 px-4 font-bold">Rinzani Putri</td>
                        <td class="py-4 px-4">Rp 38.500.000</td>
                        <td class="py-4 px-4 font-bold text-stone-400">Rp 0 (Belum Bayar)</td>
                        <td class="py-4 px-4 font-bold text-stone-800">Rp 38.500.000</td>
                        <td class="py-4 px-4 space-y-2">
                            <span class="bg-rose-100 text-rose-800 text-[11px] font-bold px-3 py-1 rounded-full inline-block">Menunggu Pembayaran DP</span>
                            <div>
                                <button onclick="alert('Menampilkan opsi verifikasi bukti transfer DP')" class="text-xs bg-amber-600 hover:bg-amber-700 text-white font-bold px-3 py-1.5 rounded-lg transition cursor-pointer">
                                    ✅ Verifikasi Bukti DP
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection