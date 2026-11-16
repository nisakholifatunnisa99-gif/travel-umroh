@extends('layouts.supervisor')

@section('title', 'Data Perusahaan - Supervisor ROZWIA')

@section('supervisor_content')
<div class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6 max-w-4xl">
    <div class="space-y-1">
        <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL 1</span>
        <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Input Data Perusahaan</h1>
        <p class="text-stone-600 text-sm">Kelola informasi nama dan perizinan resmi perusahaan ROZWIA Islamic Travel.</p>
    </div>

    <form onsubmit="event.preventDefault(); alert('Data Perusahaan Berhasil Disimpan & Disinkronkan!');" class="space-y-6 pt-2">
        <div class="space-y-2">
            <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nama Perusahaan</label>
            <input type="text" value="PT. Rozwia Berkah Utama" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
        </div>

        <div class="space-y-2">
            <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nomor Izin Kemenag</label>
            <input type="text" value="SK U.123 / 2024" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm">
        </div>

        <div class="pt-2 flex justify-end">
            <button type="submit" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-sm px-8 py-3.5 rounded-xl shadow-md transition cursor-pointer">
                Simpan Data Perusahaan
            </button>
        </div>
    </form>
</div>
@endsection