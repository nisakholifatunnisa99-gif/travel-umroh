@extends('layouts.supervisor')

@section('title', 'Dashboard Supervisor - ROZWIA')

@section('content')
<!-- Container Utama dengan Alpine.js untuk Tab Dinamis -->
<div class="min-h-screen bg-[#FDFBF7] flex" x-data="{ tab: 'perusahaan' }">
    
    <!-- 1. SIDEBAR KIRI (Gaya Layout seperti Referensi Pangerango Berkah) -->
    <aside class="w-72 bg-[#0B3B24] text-white flex flex-col justify-between fixed inset-y-0 left-0 z-30 shadow-xl pt-24">
        
        <div class="px-6 space-y-8">
            <!-- Logo / Nama Brand di Sidebar -->
            <div class="space-y-1">
                <h2 class="text-xl font-extrabold font-serif tracking-wider text-white">ROZWIA</h2>
                <p class="text-[11px] text-amber-200/80 font-serif tracking-widest uppercase">ISLAMIC TRAVEL</p>
            </div>

            <!-- Menu Navigasi Vertikal -->
            <nav class="space-y-2 text-sm font-serif">
                <!-- Menu 1: Data Perusahaan -->
                <button @click="tab = 'perusahaan'" 
                    :class="tab === 'perusahaan' ? 'bg-emerald-950/80 text-amber-300 font-bold border-l-4 border-amber-400 pl-4' : 'text-stone-300 hover:bg-emerald-900/50 pl-5'"
                    class="w-full text-left py-3.5 rounded-r-xl transition flex items-center gap-3">
                    <span>🏢</span> Data Perusahaan
                </button>

                <!-- Menu 2: Tambah Paket -->
                <button @click="tab = 'tambah-paket'" 
                    :class="tab === 'tambah-paket' ? 'bg-emerald-950/80 text-amber-300 font-bold border-l-4 border-amber-400 pl-4' : 'text-stone-300 hover:bg-emerald-900/50 pl-5'"
                    class="w-full text-left py-3.5 rounded-r-xl transition flex items-center gap-3">
                    <span>➕</span> Tambah Paket
                </button>

                <!-- Menu 3: Akun Aktif & Excel -->
                <button @click="tab = 'akun-aktif'" 
                    :class="tab === 'akun-aktif' ? 'bg-emerald-950/80 text-amber-300 font-bold border-l-4 border-amber-400 pl-4' : 'text-stone-300 hover:bg-emerald-900/50 pl-5'"
                    class="w-full text-left py-3.5 rounded-r-xl transition flex items-center gap-3">
                    <span>👥</span> Akun Aktif & Excel
                </button>
            </nav>
        </div>

        <!-- Tombol Keluar / Logout di Bagian Bawah Sidebar -->
        <div class="p-6 border-t border-emerald-900/60">
            <form action="{{ route('supervisor.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 bg-rose-900/40 hover:bg-rose-900/70 text-rose-200 font-serif font-bold text-xs py-3 rounded-xl transition border border-rose-800/50">
                    <span>🚪</span> Keluar (Logout)
                </button>
            </form>
        </div>
    </aside>


    <!-- 2. KONTEN UTAMA DI SEBELAH KANAN -->
    <main class="flex-1 ml-72 p-8 lg:p-12 space-y-8 pt-32">
        
        <!-- TAB 1: MENGINPUT DATA PERUSAHAAN -->
        <div x-show="tab === 'perusahaan'" class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6 max-w-4xl">
            <div class="space-y-1">
                <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL SUPERVISOR</span>
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
                    <button type="submit" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-sm px-8 py-3.5 rounded-xl shadow-md transition">
                        Simpan Data Perusahaan
                    </button>
                </div>
            </form>
        </div>


        <!-- TAB 2: TAMBAH PAKET HAJI ATAU UMROH -->
        <div x-show="tab === 'tambah-paket'" style="display: none;" class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6 max-w-4xl">
            <div class="space-y-1">
                <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL SUPERVISOR</span>
                <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Form Tambah Paket Perjalanan</h1>
                <p class="text-stone-600 text-sm">Input paket baru yang akan langsung terupdate dan tampil di halaman pengguna.</p>
            </div>

            <form onsubmit="event.preventDefault(); alert('Paket Berhasil Ditambahkan & Dipublikasikan ke Sistem!');" class="space-y-6 pt-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Jenis Paket</label>
                        <select class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white">
                            <option value="umroh">Paket Umroh</option>
                            <option value="haji">Paket Haji</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nama Paket</label>
                        <input type="text" placeholder="Cth: Umroh Plus Turki Bintang 5" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Durasi Perjalanan</label>
                        <input type="text" placeholder="Cth: 12 Hari" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Harga (Rp)</label>
                        <input type="number" placeholder="Cth: 38500000" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
                    </div>
                </div>

                <div class="pt-2 flex justify-end">
                    <button type="submit" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-sm px-8 py-3.5 rounded-xl shadow-md transition">
                        Simpan & Publikasikan Paket
                    </button>
                </div>
            </form>
        </div>


        <!-- TAB 3: DAFTAR AKUN AKTIF & DOWNLOAD EXCEL -->
        <div x-show="tab === 'akun-aktif'" style="display: none;" class="bg-white rounded-3xl p-8 shadow-sm border border-stone-200/80 space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div class="space-y-1">
                    <span class="text-amber-800 font-semibold tracking-widest uppercase text-xs">MODUL SUPERVISOR</span>
                    <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Daftar Akun Pengguna Aktif</h1>
                    <p class="text-stone-600 text-sm">Monitor status akun dan unduh rekapitulasi data akun beserta total biaya keseluruhan.</p>
                </div>
                <div>
                    <!-- Tombol Download Excel -->
                    <button onclick="alert('Memproses File Excel... Data Akun dan Total Biaya Keseluruhan Berhasil Diunduh!')" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-emerald-950 font-bold text-xs sm:text-sm px-6 py-3 rounded-xl shadow-xs transition">
                        <span>📊</span> Download Data Excel
                    </button>
                </div>
            </div>

            <!-- Filter Status -->
            <div class="flex flex-wrap items-center gap-3 pt-2 pb-4 border-b border-stone-100">
                <span class="text-xs font-bold text-stone-500 uppercase tracking-wider">Filter Status:</span>
                <button class="bg-[#0B3B24] text-white text-xs font-semibold px-4 py-2 rounded-full shadow-xs">Semua Status</button>
                <button class="bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold px-4 py-2 rounded-full transition">Aktif</button>
                <button class="bg-stone-100 hover:bg-stone-200 text-stone-700 text-xs font-semibold px-4 py-2 rounded-full transition">Pending</button>
            </div>

            <!-- Tabel Data -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-stone-200 text-stone-500 text-xs uppercase tracking-wider font-serif">
                            <th class="py-3 px-4">No</th>
                            <th class="py-3 px-4">Nama Jamaah</th>
                            <th class="py-3 px-4">Paket Dipilih</th>
                            <th class="py-3 px-4">Total Biaya</th>
                            <th class="py-3 px-4">Status Akun</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 text-xs sm:text-sm text-stone-700 font-serif">
                        <tr>
                            <td class="py-4 px-4 font-medium">1</td>
                            <td class="py-4 px-4 font-bold text-[#0B3B24]">Rafid Alfaritsi</td>
                            <td class="py-4 px-4">Umroh Reguler</td>
                            <td class="py-4 px-4 font-bold text-stone-900">Rp 30.000.000</td>
                            <td class="py-4 px-4"><span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-3 py-1 rounded-full">Aktif</span></td>
                        </tr>
                        <tr>
                            <td class="py-4 px-4 font-medium">2</td>
                            <td class="py-4 px-4 font-bold text-[#0B3B24]">Rinzani Putri</td>
                            <td class="py-4 px-4">Umroh Plus Turki</td>
                            <td class="py-4 px-4 font-bold text-stone-900">Rp 38.500.000</td>
                            <td class="py-4 px-4"><span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-3 py-1 rounded-full">Aktif</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>
@endsection