@extends('layouts.dashboard')

@section('title', 'Status Tracking - Pangrango Berkah')
@section('header-title', 'Tracking Status Keberangkatan')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-emerald-100 space-y-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b pb-6">
            <div>
                <span class="text-amber-600 font-semibold tracking-widest uppercase text-xs">Real-Time Monitoring</span>
                <h2 class="text-2xl font-bold text-emerald-950 font-serif mt-1">Perkembangan Keberangkatan Anda</h2>
                <p class="text-stone-500 text-sm">Paket: <strong class="text-emerald-900">Umroh VIP Plus Turkiye (9 Hari)</strong></p>
            </div>
            <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-4 py-2 rounded-xl">Status: Dokumen Lengkap & Terverifikasi</span>
        </div>

        <!-- Timeline Progress -->
        <div class="space-y-8 relative before:absolute before:inset-0 before:left-5 before:w-0.5 before:bg-emerald-100">
            
            <!-- Step 1 (Selesai) -->
            <div class="relative flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-emerald-800 text-white flex items-center justify-center font-bold text-sm z-10 shadow-sm">✓</div>
                <div class="bg-emerald-50/60 p-5 rounded-2xl border border-emerald-100 flex-1">
                    <span class="text-xs text-amber-700 font-semibold">Tahap 1</span>
                    <h4 class="font-bold text-emerald-950 text-base">Pendaftaran & Pembayaran DP</h4>
                    <p class="text-xs text-stone-600 mt-1">Bukti transfer DP telah divalidasi oleh admin dan akun jamaah diaktifkan.</p>
                </div>
            </div>

            <!-- Step 2 (Selesai) -->
            <div class="relative flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-emerald-800 text-white flex items-center justify-center font-bold text-sm z-10 shadow-sm">✓</div>
                <div class="bg-emerald-50/60 p-5 rounded-2xl border border-emerald-100 flex-1">
                    <span class="text-xs text-amber-700 font-semibold">Tahap 2</span>
                    <h4 class="font-bold text-emerald-950 text-base">Verifikasi Berkas Dokumen (KTP, KK, Paspor)</h4>
                    <p class="text-xs text-stone-600 mt-1">Dokumen telah diperiksa dan disetujui oleh supervisor[cite: 4].</p>
                </div>
            </div>

            <!-- Step 3 (Sedang Berjalan) -->
            <div class="relative flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold text-sm z-10 shadow-md animate-pulse">⏳</div>
                <div class="bg-amber-50/70 p-5 rounded-2xl border border-amber-200 flex-1">
                    <span class="text-xs text-amber-700 font-semibold">Tahap 3 (Proses Saat Ini)</span>
                    <h4 class="font-bold text-emerald-950 text-base">Pengurusan Surat Rekomendasi Kemenag & Visa[cite: 4]</h4>
                    <p class="text-xs text-stone-600 mt-1">Dokumen sedang diajukan ke instansi terkait untuk penerbitan visa resmi.</p>
                </div>
            </div>

            <!-- Step 4 (Akan Datang) -->
            <div class="relative flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-stone-200 text-stone-500 flex items-center justify-center font-bold text-sm z-10">4</div>
                <div class="bg-stone-50 p-5 rounded-2xl border border-stone-200 flex-1">
                    <span class="text-xs text-stone-400 font-semibold">Tahap 4</span>
                    <h4 class="font-bold text-stone-700 text-base">Penerbitan Tiket Pesawat & Booking Hotel[cite: 4]</h4>
                    <p class="text-xs text-stone-500 mt-1">Jadwal maskapai dan kepastian kamar hotel bintang 5 akan dirilis.</p>
                </div>
            </div>

            <!-- Step 5 (Akan Datang) -->
            <div class="relative flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-stone-200 text-stone-500 flex items-center justify-center font-bold text-sm z-10">5</div>
                <div class="bg-stone-50 p-5 rounded-2xl border border-stone-200 flex-1">
                    <span class="text-xs text-stone-400 font-semibold">Tahap 5</span>
                    <h4 class="font-bold text-stone-700 text-base">Jadwal Manasik & Keberangkatan</h4>
                    <p class="text-xs text-stone-500 mt-1">Pelaksanaan bimbingan manasik sebelum bertolak ke Tanah Suci.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection