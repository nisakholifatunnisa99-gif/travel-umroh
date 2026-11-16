@extends('layouts.dashboard')

@section('title', 'Unggah Dokumen - Pangrango Berkah')
@section('header-title', 'Dokumen Persyaratan Jamaah')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-emerald-100 space-y-6">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <span class="text-amber-600 font-semibold tracking-widest uppercase text-xs">Legalitas & Pemberkasan</span>
                <h2 class="text-2xl font-bold text-emerald-950 font-serif mt-1">Unggah Dokumen Perjalanan</h2>
                <p class="text-stone-500 text-sm mt-1">Pastikan foto atau scan dokumen terlihat jelas (tidak terpotong) untuk proses visa dan manifest.</p>
            </div>
            <span class="bg-amber-100 text-amber-800 text-xs font-semibold px-3 py-1.5 rounded-xl">Status: Menunggu Unggahan</span>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Upload KTP -->
            <div class="p-6 bg-stone-50 rounded-2xl border border-stone-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="space-y-1">
                    <h4 class="font-bold text-emerald-950 text-sm">Scan / Foto KTP Asli</h4>
                    <p class="text-xs text-stone-500">Format JPG/PNG, maksimal 2MB.</p>
                </div>
                <div class="w-full sm:w-auto">
                    <input type="file" name="ktp" required class="text-xs text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:font-semibold file:bg-emerald-800 file:text-white hover:file:bg-emerald-900 transition">
                </div>
            </div>

            <!-- Upload KK -->
            <div class="p-6 bg-stone-50 rounded-2xl border border-stone-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="space-y-1">
                    <h4 class="font-bold text-emerald-950 text-sm">Scan Kartu Keluarga (KK)</h4>
                    <p class="text-xs text-stone-500">Format PDF atau gambar beresolusi tinggi.</p>
                </div>
                <div class="w-full sm:w-auto">
                    <input type="file" name="kk" required class="text-xs text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:font-semibold file:bg-emerald-800 file:text-white hover:file:bg-emerald-900 transition">
                </div>
            </div>

            <!-- Upload Paspor -->
            <div class="p-6 bg-stone-50 rounded-2xl border border-stone-200 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="space-y-1">
                    <h4 class="font-bold text-emerald-950 text-sm">Halaman Depan Paspor (Berlaku min. 7 bulan)</h4>
                    <p class="text-xs text-stone-500">Pastikan seluruh data diri di paspor terbaca jelas.</p>
                </div>
                <div class="w-full sm:w-auto">
                    <input type="file" name="paspor" required class="text-xs text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:font-semibold file:bg-emerald-800 file:text-white hover:file:bg-emerald-900 transition">
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-emerald-800 to-emerald-900 hover:from-emerald-900 hover:to-emerald-950 text-white font-bold py-3.5 rounded-2xl shadow-md transition transform hover:-translate-y-0.5 text-sm">
                Kirim Dokumen untuk Verifikasi Supervisor
            </button>
        </form>
    </div>
</div>
@endsection