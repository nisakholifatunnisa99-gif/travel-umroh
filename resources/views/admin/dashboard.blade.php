@extends('layouts.admin')

@section('title', 'Verifikasi Dokumen - Admin ROZWIA')

@section('content')
<div class="space-y-6">
        
    <!-- Header Sapaan Admin -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-8 shadow-md flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
        <div class="space-y-1 font-serif">
            <span class="bg-amber-500 text-emerald-950 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Area Administrator</span>
            <h1 class="text-2xl md:text-3xl font-bold">Dashboard Operasional & Keuangan</h1>
            <p class="text-emerald-100/80 text-xs sm:text-sm max-w-xl font-sans">
                Kelola invoice pembayaran, verifikasi DP, dan pantau tagihan pelunasan seluruh jamaah ROZWIA.
            </p>
        </div>
        <div class="bg-emerald-950/80 border border-emerald-800 p-4 rounded-2xl text-center min-w-[180px]">
            <span class="block text-xs text-amber-300 font-bold uppercase tracking-wider font-serif">Total Invoice Aktif</span>
            <span class="text-xl font-bold text-white font-serif">48 Invoice</span>
        </div>
    </div>

    <!-- Statistik Keuangan (3 Kartu) -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 font-serif">
        <div class="bg-white p-6 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Total Seluruh Jamaah</span>
            <h3 class="text-xl font-bold text-[#0B3B24]">48 Jamaah</h3>
            <p class="text-[11px] text-stone-400 font-sans">Terdaftar di berbagai paket</p>
        </div>

        <div class="bg-emerald-50 p-6 rounded-[32px] border border-emerald-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800">DP Terverifikasi</span>
            <h3 class="text-xl font-bold text-emerald-950">32 Jamaah</h3>
            <p class="text-[11px] text-emerald-700 font-medium font-sans">Status: Pembayaran Sah</p>
        </div>

        <div class="bg-rose-50 p-6 rounded-[32px] border border-rose-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-800">Menunggu Pembayaran</span>
            <h3 class="text-xl font-bold text-rose-950">16 Jamaah</h3>
            <p class="text-[11px] text-rose-700 font-medium font-sans">Belum verifikasi bukti DP</p>
        </div>
    </div>

    <!-- Tabel Tagihan Jamaah -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200/80 space-y-6 font-serif">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <span class="text-xs font-bold text-amber-700 uppercase tracking-wider">Modul Keuangan</span>
                <h3 class="text-xl font-bold text-[#0B3B24]">Daftar Tagihan & Pembayaran Jamaah</h3>
            </div>
            <button onclick="alert('Fitur Buat Invoice Baru')" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold text-xs py-3 px-5 rounded-xl transition cursor-pointer font-sans shadow-md">
                + Buat & Kirim Invoice
            </button>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-stone-200 font-sans">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-[#0B3B24] text-white">
                        <th class="p-3.5 font-semibold">No. Invoice</th>
                        <th class="p-3.5 font-semibold">Nama Jamaah</th>
                        <th class="p-3.5 font-semibold">Total Paket</th>
                        <th class="p-3.5 font-semibold">Sudah Dibayar</th>
                        <th class="p-3.5 font-semibold">Sisa Tagihan</th>
                        <th class="p-3.5 font-semibold text-center">Status</th>
                        <th class="p-3.5 font-semibold text-center">Aksi Admin</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-stone-700">
                    <tr class="hover:bg-stone-50">
                        <td class="p-3.5 font-bold text-[#0B3B24]">INV/2026/001</td>
                        <td class="p-3.5 font-semibold text-stone-900">Rafid Alfaritsi</td>
                        <td class="p-3.5">Rp 34.500.000</td>
                        <td class="p-3.5 text-emerald-700 font-semibold">Rp 5.000.000</td>
                        <td class="p-3.5 text-rose-700 font-semibold">Rp 29.500.000</td>
                        <td class="p-3.5 text-center">
                            <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-3 py-1 rounded-full">DP Terverifikasi</span>
                        </td>
                        <td class="p-3.5 text-center">
                            <button onclick="alert('Password sementara telah dikirim via WhatsApp.')" class="bg-amber-500 hover:bg-amber-400 text-emerald-950 font-bold px-3 py-1.5 rounded-lg text-[11px] cursor-pointer">
                                🔑 Kirim Password
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-stone-50">
                        <td class="p-3.5 font-bold text-[#0B3B24]">INV/2026/002</td>
                        <td class="p-3.5 font-semibold text-stone-900">Rinzani Putri</td>
                        <td class="p-3.5">Rp 38.500.000</td>
                        <td class="p-3.5 text-stone-500">Rp 0</td>
                        <td class="p-3.5 text-rose-700 font-semibold">Rp 38.500.000</td>
                        <td class="p-3.5 text-center">
                            <span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-3 py-1 rounded-full">Menunggu Pembayaran</span>
                        </td>
                        <td class="p-3.5 text-center">
                            <button onclick="alert('Membuka verifikasi bukti transfer')" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-3 py-1.5 rounded-lg text-[11px] cursor-pointer">
                                🔍 Verifikasi DP
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection