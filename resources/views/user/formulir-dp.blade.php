@extends('layouts.dashboard')

@section('title', 'Formulir Pemesanan & DP - Pangrango Berkah')
@section('header-title', 'Formulir Pemesanan & DP')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-emerald-100 space-y-6">
        <div>
            <span class="text-amber-600 font-semibold tracking-widest uppercase text-xs">Pemesanan Paket Suci</span>
            <h2 class="text-2xl font-bold text-emerald-950 font-serif mt-1">Formulir Konfirmasi Uang Muka (DP)</h2>
            <p class="text-stone-500 text-sm mt-1">Silakan lengkapi data pemesanan di bawah ini dan unggah bukti transfer DP Anda.</p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <!-- Pilihan Paket & Jadwal -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 bg-emerald-50/50 rounded-2xl border border-emerald-100">
                <div>
                    <label class="block text-xs font-semibold text-stone-700 uppercase tracking-wider mb-2">Pilih Paket Perjalanan</label>
                    <select name="paket_id" class="w-full bg-white border border-stone-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-800 focus:outline-none">
                        <option value="1">Umroh VIP Plus Turkiye - Rp 34.500.000</option>
                        <option value="2">Umroh Reguler Hemat - Rp 26.000.000</option>
                        <option value="3">Haji Khusus / Furoda Resmi - $18,500 USD</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-stone-700 uppercase tracking-wider mb-2">Pilih Tipe Kamar</label>
                    <select name="tipe_kamar" class="w-full bg-white border border-stone-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-emerald-800 focus:outline-none">
                        <option value="quad">Quad (1 Kamar 4 Orang)</option>
                        <option value="triple">Triple (1 Kamar 3 Orang)</option>
                        <option value="double">Double (1 Kamar 2 Orang)</option>
                    </select>
                </div>
            </div>

            <!-- Data Jamaah -->
            <div class="space-y-4">
                <h3 class="text-lg font-bold text-emerald-950 font-serif border-b pb-2">Data Jamaah Utama</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-stone-700 uppercase tracking-wider mb-1">Nama Lengkap (Sesuai Paspor)</label>
                        <input type="text" name="nama_jamaah" required placeholder="Ahmad Fauzi" class="w-full bg-stone-50 border border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-800">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-stone-700 uppercase tracking-wider mb-1">Nomor WhatsApp Aktif</label>
                        <input type="tel" name="whatsapp" required placeholder="081234567890" class="w-full bg-stone-50 border border-stone-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-800">
                    </div>
                </div>
            </div>

            <!-- Informasi Rekening & Nominal DP -->
            <div class="bg-amber-50/60 p-6 rounded-2xl border border-amber-200/60 space-y-3">
                <h4 class="font-bold text-amber-900 text-sm">Informasi Pembayaran Uang Muka (DP)</h4>
                <p class="text-xs text-stone-600 leading-relaxed">
                    Silakan transfer nominal DP minimal sebesar <strong class="text-amber-800">Rp 5.000.000</strong> ke rekening resmi perusahaan:
                </p>
                <div class="bg-white p-4 rounded-xl border border-amber-100 flex items-center justify-between text-sm">
                    <div>
                        <span class="block text-stone-500 text-xs">Bank Syariah Indonesia (BSI)</span>
                        <strong class="text-emerald-950 text-base">7123456789</strong>
                        <span class="block text-stone-500 text-xs">a.n. PT Pangrango Berkah Digital</span>
                    </div>
                    <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-3 py-1 rounded-lg">Resmi</span>
                </div>
            </div>

            <!-- Unggah Bukti Transfer -->
            <div>
                <label class="block text-xs font-semibold text-stone-700 uppercase tracking-wider mb-1">Unggah Bukti Transfer DP (JPG/PNG/PDF)</label>
                <input type="file" name="bukti_dp" required class="w-full bg-stone-50 border border-stone-200 rounded-xl px-4 py-3 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-emerald-800 file:text-white hover:file:bg-emerald-900 transition">
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-emerald-800 to-emerald-900 hover:from-emerald-900 hover:to-emerald-950 text-white font-bold py-3.5 rounded-2xl shadow-md transition transform hover:-translate-y-0.5 text-sm">
                Kirim Konfirmasi Pembayaran DP
            </button>
        </form>
    </div>
</div>
@endsection