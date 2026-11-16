@extends('layouts.supervisor')

@section('title', 'Monitoring Manifest - Supervisor ROZWIA')

@section('supervisor_content')
<div class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6">
    <div class="space-y-1">
        <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL MANIFEST</span>
        <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Monitoring Manifest Keberangkatan</h1>
        <p class="text-stone-600 text-sm">Daftar jamaah yang siap berangkat dan jadwal manasik.</p>
    </div>

    <!-- Tabel Manifest -->
    <div class="overflow-x-auto pt-2">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-stone-200 text-stone-500 text-xs uppercase tracking-wider font-serif">
                    <th class="py-3 px-4">Kloter</th>
                    <th class="py-3 px-4">Nama Jamaah</th>
                    <th class="py-3 px-4">Paspor</th>
                    <th class="py-3 px-4">Jadwal Manasik</th>
                    <th class="py-3 px-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100 text-xs sm:text-sm text-stone-700 font-serif">
                <tr>
                    <td class="py-4 px-4 font-bold text-[#0B3B24]">Kloter 01 - JKG</td>
                    <td class="py-4 px-4">Rafid Alfaritsi</td>
                    <td class="py-4 px-4">C1234567</td>
                    <td class="py-4 px-4">15 November 2026</td>
                    <td class="py-4 px-4"><span class="bg-amber-100 text-amber-800 text-[11px] font-bold px-3 py-1 rounded-full">Siap Berangkat</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection