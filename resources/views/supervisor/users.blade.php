@extends('layouts.supervisor')

@section('title', 'Daftar Akun Pengguna - Supervisor ROZWIA')

@section('content')
<div class="space-y-6 font-serif">
    <div class="space-y-1">
        <h1 class="text-3xl font-bold text-[#0B3B24]">Daftar Akun Pengguna</h1>
        <p class="text-xs text-stone-600 font-sans">Kelola dan pantau seluruh akun jamaah yang terdaftar di sistem.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 font-serif">
        <div class="bg-white p-6 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Total Akun</span>
            <h3 class="text-3xl font-bold text-[#0B3B24]">56</h3>
        </div>
        <div class="bg-white p-6 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Akun Aktif</span>
            <h3 class="text-3xl font-bold text-emerald-900">40</h3>
        </div>
        <div class="bg-white p-6 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-700">Akun Nonaktif</span>
            <h3 class="text-3xl font-bold text-rose-900">16</h3>
        </div>
    </div>

    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6 font-sans">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <div>
                <h3 class="text-base font-bold text-[#0B3B24] font-serif">Daftar Akun Jamaah</h3>
                <p class="text-[11px] text-stone-400">Menampilkan 56 dari 56 akun</p>
            </div>
            <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto">
                <input type="text" placeholder="Cari Nama Akun Jamaah" class="px-4 py-2.5 rounded-full bg-stone-50 border border-stone-300 text-xs focus:outline-none focus:border-[#0B3B24] sm:w-72">
                <button onclick="alert('Mengunduh laporan Excel...')" class="bg-white hover:bg-stone-50 text-[#0B3B24] border border-[#0B3B24] font-bold text-xs py-2.5 px-5 rounded-full transition cursor-pointer flex items-center gap-2 shadow-xs">
                    <span class="material-symbols-outlined">save_as</span> Download Laporan (Excel)
                </button>
            </div>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-stone-200">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-stone-100 text-stone-700 font-serif border-b border-stone-200">
                        <th class="p-3.5 font-semibold">Nama Pengguna</th>
                        <th class="p-3.5 font-semibold">Email</th>
                        <th class="p-3.5 font-semibold">No Telepon</th>
                        <th class="p-3.5 font-semibold">Paket</th>
                        <th class="p-3.5 font-semibold text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-stone-700">
                    <tr>
                        <td class="p-3.5 font-bold text-stone-900">Talita Azaria</td>
                        <td class="p-3.5 text-stone-600">talita@gmail.com</td>
                        <td class="p-3.5 text-stone-600">081575588582</td>
                        <td class="p-3.5">Umrah Blessed Journey</td>
                        <td class="p-3.5 text-center"><span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-3 py-1 rounded-full">Aktif</span></td>
                    </tr>
                    <tr>
                        <td class="p-3.5 font-bold text-stone-900">Rinzani</td>
                        <td class="p-3.5 text-stone-600">ririn1212@gmail.com</td>
                        <td class="p-3.5 text-stone-600">08563749223</td>
                        <td class="p-3.5">Umrah Sacred Journey</td>
                        <td class="p-3.5 text-center"><span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-3 py-1 rounded-full">Nonaktif</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection