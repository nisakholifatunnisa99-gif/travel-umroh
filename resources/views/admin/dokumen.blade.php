@extends('layouts.admin')

@section('title', 'Verifikasi Dokumen - Admin ROZWIA')

@section('content')
<div class="space-y-6 font-serif">
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-2">
        <h2 class="text-2xl font-bold text-[#0B3B24]">Verifikasi Dokumen Pribadi</h2>
        <p class="text-xs text-stone-600 font-sans">Periksa dokumen yang diunggah jamaah, lalu verifikasi, minta perbaikan, atau tolak.</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-5 gap-4 font-sans">
        <div class="bg-white p-4 rounded-2xl border border-stone-200 text-center">
            <span class="text-[11px] text-stone-500 font-bold block">Menunggu Verifikasi</span>
            <span class="text-base font-bold text-[#0B3B24]">2 Jamaah</span>
        </div>
        <div class="bg-white p-4 rounded-2xl border border-stone-200 text-center">
            <span class="text-[11px] text-amber-700 font-bold block">Perlu Perbaikan</span>
            <span class="text-base font-bold text-amber-800">1 Jamaah</span>
        </div>
        <div class="bg-white p-4 rounded-2xl border border-stone-200 text-center">
            <span class="text-[11px] text-rose-700 font-bold block">Ditolak</span>
            <span class="text-base font-bold text-rose-800">0 Jamaah</span>
        </div>
        <div class="bg-white p-4 rounded-2xl border border-stone-200 text-center">
            <span class="text-[11px] text-stone-500 font-bold block">Kadaluwarsa</span>
            <span class="text-base font-bold text-stone-600">0 Jamaah</span>
        </div>
        <div class="bg-white p-4 rounded-2xl border border-stone-200 text-center">
            <span class="text-[11px] text-emerald-700 font-bold block">Diverifikasi</span>
            <span class="text-base font-bold text-emerald-800">3 Jamaah</span>
        </div>
    </div>

    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4 font-sans">
        <h3 class="text-base font-bold text-[#0B3B24]">Daftar Dokumen Masuk</h3>
        <div class="overflow-x-auto rounded-2xl border border-stone-200">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-[#0B3B24] text-white">
                        <th class="p-3.5 font-semibold">Nama Jamaah</th>
                        <th class="p-3.5 font-semibold">Tipe Dokumen</th>
                        <th class="p-3.5 font-semibold">Tanggal Unggah</th>
                        <th class="p-3.5 font-semibold text-center">Status</th>
                        <th class="p-3.5 font-semibold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-stone-700">
                    <tr>
                        <td class="p-3.5 font-bold">Rinzani Kholifah</td>
                        <td class="p-3.5">Pas Foto</td>
                        <td class="p-3.5">10 April 2026</td>
                        <td class="p-3.5 text-center"><span class="bg-amber-100 text-amber-900 text-[10px] font-bold px-3 py-1 rounded-full">Menunggu Verifikasi</span></td>
                        <td class="p-3.5 text-center"><button onclick="alert('Memeriksa dokumen')" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-4 py-1.5 rounded-lg text-[11px] cursor-pointer">Periksa</button></td>
                    </tr>
                    <tr>
                        <td class="p-3.5 font-bold">Wildan Rafid</td>
                        <td class="p-3.5">Paspor</td>
                        <td class="p-3.5">10 April 2026</td>
                        <td class="p-3.5 text-center"><span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-3 py-1 rounded-full">Diverifikasi</span></td>
                        <td class="p-3.5 text-center"><button onclick="alert('Memeriksa dokumen')" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-4 py-1.5 rounded-lg text-[11px] cursor-pointer">Periksa</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection