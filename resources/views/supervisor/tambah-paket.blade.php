@extends('layouts.supervisor')

@section('title', 'Kelola Paket & Jadwal - Supervisor ROZWIA')

@section('supervisor_content')
<div class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-8 max-w-5xl">
    
    <div class="space-y-1">
        <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL KELOLA PAKET & JADWAL</span>
        <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Form Tambah Paket Perjalanan</h1>
        <p class="text-stone-600 text-sm">Input data paket lengkap beserta detail layanan, tipe kamar, dan jadwal keberangkatan.</p>
    </div>

    <form onsubmit="event.preventDefault(); alert('Paket dan Jadwal Keberangkatan Berhasil Disimpan!');" class="space-y-8 pt-2">
        
        <!-- BAGIAN 1: INFORMASI UTAMA PAKET -->
        <div class="space-y-4 p-6 bg-stone-50/70 rounded-2xl border border-stone-200/60">
            <h3 class="text-sm font-bold uppercase tracking-wider text-[#0B3B24] border-b border-stone-200 pb-2">1. Informasi Utama Paket</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nama Paket</label>
                    <input type="text" placeholder="Cth: Umroh Plus Turki Bintang 5" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Kategori Paket</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white">
                        <option value="umroh">Paket Umroh</option>
                        <option value="haji">Paket Haji</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Status Paket</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white">
                        <option value="tersedia">Aktif / Tersedia</option>
                        <option value="segera">Segera Dibuka</option>
                        <option value="penuh">Penuh</option>
                    </select>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">URL Gambar Utama</label>
                    <input type="text" placeholder="Cth: https://images.unsplash.com/..." class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
            </div>

            <div class="space-y-1.5">
                <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Deskripsi Program</label>
                <textarea rows="3" placeholder="Tulis deskripsi ringkas fasilitas dan program perjalanan..." class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required></textarea>
            </div>
        </div>


        <!-- BAGIAN 2: DETAIL LAYANAN & BIAYA -->
        <div class="space-y-4 p-6 bg-stone-50/70 rounded-2xl border border-stone-200/60">
            <h3 class="text-sm font-bold uppercase tracking-wider text-[#0B3B24] border-b border-stone-200 pb-2">2. Jenis Layanan, Harga & Kamar</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Jenis Layanan</label>
                    <input type="text" placeholder="Cth: Reguler / Furoda / VIP" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Harga Dasar (Rp)</label>
                    <input type="number" placeholder="Cth: 34500000" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nama Tipe Kamar</label>
                    <input type="text" placeholder="Cth: Quad (1 Kamar 4 Orang)" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Biaya Tambahan / Upgrade</label>
                    <input type="text" placeholder="Cth: Upgrade Kamar Double (+Rp 3.500.000)" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white">
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Kapasitas / Kuota Paket</label>
                    <input type="number" placeholder="Cth: 45" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
            </div>
        </div>


        <!-- BAGIAN 3: DETAIL JADWAL KEBERANGKATAN & AKomodasi -->
        <div class="space-y-4 p-6 bg-stone-50/70 rounded-2xl border border-stone-200/60">
            <h3 class="text-sm font-bold uppercase tracking-wider text-[#0B3B24] border-b border-stone-200 pb-2">3. Jadwal Keberangkatan & Akomodasi Hotel/Maskapai</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nama Hotel Makkah / Madinah</label>
                    <input type="text" placeholder="Cth: Fairmont Makkah (Bintang 5)" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Alamat Hotel</label>
                    <input type="text" placeholder="Cth: Pelataran Masjidil Haram" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nama Maskapai & Penerbangan</label>
                    <input type="text" placeholder="Cth: Saudi Airlines (SV-816)" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Tanggal Berangkat</label>
                    <input type="date" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Tanggal Pulang</label>
                    <input type="date" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white" required>
                </div>
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Status Jadwal</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white">
                        <option value="tersedia">Tersedia</option>
                        <option value="penuh">Penuh</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="pt-2 flex justify-end">
            <button type="submit" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-sm px-8 py-4 rounded-xl shadow-md transition cursor-pointer">
                Simpan & Publikasikan Paket & Jadwal
            </button>
        </div>

    </form>
</div>
@endsection