@extends('layouts.admin')

@section('title', 'Verifikasi Dokumen - Admin ROZWIA')

@section('content')
<div class="space-y-6 font-serif">
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-2">
        <h2 class="text-2xl font-bold text-[#0B3B24]">Jadwal dan Manifest</h2>
        <p class="text-xs text-stone-600 font-sans">Kirim jadwal dan manifest ke jamaah melalui Gmail, lalu pantau status pengirimannya.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 font-sans">
        <div class="md:col-span-8 bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4">
            <h3 class="font-bold text-[#0B3B24] text-sm">Pesan Jamaah (Gmail)</h3>
            <div class="bg-stone-50 p-4 rounded-2xl border border-stone-200 text-xs space-y-2">
                <p class="font-bold text-amber-800">Subjek: Jadwal dan Manifest Tour Umroh Januari 2027</p>
                <p class="text-stone-600 leading-relaxed font-serif">
                    Assalamu'alaikum Bapak/Ibu, Alhamdulillah jadwal perjalanan dan manifest keberangkatan anda telah kami siapkan. Silahkan unduh lampiran pada email ini dan baca dengan teliti...
                </p>
            </div>
            <div class="flex flex-wrap gap-3 pt-2">
                <button onclick="alert('Email berhasil dikirim!')" class="bg-amber-500 hover:bg-amber-400 text-emerald-950 font-bold px-5 py-3 rounded-xl text-xs transition cursor-pointer">
                    ✉ Kirim Semua Jamaah via Gmail
                </button>
                <button onclick="alert('Email uji terkirim!')" class="border border-[#0B3B24] text-[#0B3B24] font-bold px-5 py-3 rounded-xl text-xs transition cursor-pointer hover:bg-stone-50">
                    Kirim Email Uji ke Saya
                </button>
            </div>
        </div>

        <div class="md:col-span-4 bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-8 shadow-md space-y-4">
            <h3 class="font-bold text-[#E5D3B3] text-sm">Status Pengiriman</h3>
            <div class="space-y-2.5 text-xs text-emerald-100">
                <div class="flex justify-between items-center bg-emerald-900/60 p-3 rounded-xl border border-emerald-800">
                    <span>Rinzani Kholifah</span>
                    <span class="bg-amber-400 text-emerald-950 font-bold px-2.5 py-0.5 rounded-full text-[10px]">Terkirim</span>
                </div>
                <div class="flex justify-between items-center bg-emerald-900/60 p-3 rounded-xl border border-emerald-800">
                    <span>Wildan Rafid</span>
                    <span class="bg-stone-500 text-white font-bold px-2.5 py-0.5 rounded-full text-[10px]">Belum dikirim</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection