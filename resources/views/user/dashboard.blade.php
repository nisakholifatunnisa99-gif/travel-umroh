@extends('layouts.app')

@section('title', 'Dashboard Jamaah - ROZWIA')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-24 pt-32 space-y-8">
    
    <!-- Welcome Header -->
    <div class="bg-[#0B3B24] text-white p-8 rounded-3xl shadow-md flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
        <div class="space-y-2">
            <span class="bg-amber-500 text-emerald-950 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Area Jamaah</span>
            <h1 class="text-2xl md:text-3xl font-bold font-serif">Selamat Datang, Rafid Alfaritsi</h1>
            <p class="text-emerald-100/80 text-sm max-w-xl">
                Pantau status pemesanan paket, rincian pembayaran DP, sisa tagihan pelunasan, dan kelengkapan dokumen perjalanan Anda di sini.
            </p>
        </div>
        <div class="bg-emerald-950/80 border border-emerald-800 p-4 rounded-2xl text-center min-w-[180px]">
            <span class="block text-xs text-amber-300 font-bold uppercase tracking-wider">Status Akun</span>
            <span class="text-lg font-bold text-white font-serif">🟢 Aktif</span>
        </div>
    </div>


    <!-- RINGKASAN KEUANGAN: TOTAL BIAYA, SUDAH DIBAYAR (DP), & SISA TAGIHAN -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        
        <div class="bg-white p-6 rounded-3xl border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Total Biaya Paket</span>
            <h3 class="text-xl font-bold text-[#0B3B24] font-serif">Rp 34.500.000</h3>
            <p class="text-[11px] text-stone-400">Umroh Plus Turki (Kamar Quad)</p>
        </div>

        <div class="bg-emerald-50 p-6 rounded-3xl border border-emerald-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800">Jumlah Telah Dibayar</span>
            <h3 class="text-xl font-bold text-emerald-950 font-serif">Rp 5.000.000</h3>
            <p class="text-[11px] text-emerald-700 font-medium">Status: DP Terverifikasi Admin</p>
        </div>

        <div class="bg-rose-50 p-6 rounded-3xl border border-rose-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-800">Sisa Tagihan Pelunasan</span>
            <h3 class="text-xl font-bold text-rose-950 font-serif">Rp 29.500.000</h3>
            <p class="text-[11px] text-rose-700 font-medium">Jatuh Tempo: 15 Desember 2026</p>
        </div>

    </div>


    <!-- INFORMASI PAKET & PROGRESS DOKUMEN -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <div class="lg:col-span-8 bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6">
            <h3 class="text-lg font-bold text-[#0B3B24] font-serif">Status Dokumen Persyaratan</h3>
            
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div>
                        <p class="font-bold text-sm text-stone-800">Scan Paspor (Valid > 6 Bulan)</p>
                        <p class="text-xs text-stone-500">File: paspor_rafid.pdf</p>
                    </div>
                    <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-3 py-1 rounded-full">Diverifikasi</span>
                </div>

                <div class="flex items-center justify-between p-4 rounded-2xl bg-stone-50 border border-stone-200">
                    <div>
                        <p class="font-bold text-sm text-stone-800">Sertifikat Vaksin Meningitis</p>
                        <p class="text-xs text-stone-500">File: vaksin_meningitis.pdf</p>
                    </div>
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-full">Menunggu Verifikasi</span>
                </div>
            </div>
        </div>

        <div class="lg:col-span-4 bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-4">
            <h3 class="text-lg font-bold text-[#0B3B24] font-serif">Bantuan & Invoice</h3>
            <p class="text-xs text-stone-600 leading-relaxed">
                Invoice pembayaran DP telah dikirimkan melalui WhatsApp. Jika Anda sudah melakukan pelunasan atau membutuhkan bantuan, silakan hubungi admin travel.
            </p>
            <a href="https://wa.me/" target="_blank" class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-serif font-bold text-xs py-3 rounded-xl shadow-md transition text-center block">
                💬 Hubungi Admin via WhatsApp
            </a>
        </div>

    </div>

</div>
@endsection