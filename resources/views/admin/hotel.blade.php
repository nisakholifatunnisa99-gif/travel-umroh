@extends('layouts.admin')

@section('title', 'Administrasi Hotel dan Pesawat - Admin ROZWIA')

@section('content')
<div class="space-y-6 font-serif">
    
    <!-- 1. Header Halaman -->
    <div class="space-y-1">
        <h1 class="text-3xl sm:text-4xl font-bold text-[#0B3B24]">Administrasi Hotel dan Pesawat</h1>
        <p class="text-xs sm:text-sm text-stone-600 font-sans">
            Kelola dan penerbangan, hotel, serta pembagian kamar dan bus untuk setiap keberangkatan.
        </p>
    </div>

    <!-- 2. Dua Banner Info Atas (Warna Emas/Kecokelatan Lembut) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 font-sans">
        
        <!-- Banner Kiri -->
        <div class="lg:col-span-7 bg-[#D4B996]/80 rounded-[24px] p-5 sm:p-6 flex items-center justify-between shadow-xs">
            <span class="text-stone-900 font-bold text-sm sm:text-base font-serif">Umrah Reguler &bull; 10 Desember 2026</span>
            <span class="w-7 h-7 rounded-full bg-stone-900 text-white flex items-center justify-center text-xs font-bold">&darr;</span>
        </div>

        <!-- Banner Kanan -->
        <div class="lg:col-span-5 bg-[#D4B996]/80 rounded-[24px] p-5 sm:p-6 flex items-center justify-between shadow-xs">
            <span class="text-stone-900 font-bold text-sm sm:text-base font-serif">Jadwal : tersedia</span>
            <span class="text-stone-900 font-bold text-sm sm:text-base">15 Jamaah Terdaftar</span>
        </div>

    </div>

    <!-- 3. Kotak Verifikasi Kesiapan Tiket Maskapai & Reservasi Hotel -->
    <div class="bg-white rounded-[24px] p-6 sm:p-7 border border-stone-200 shadow-sm flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 font-sans">
        <div class="space-y-1 max-w-xl">
            <h3 class="text-sm font-bold text-stone-900 font-serif">Verifikasi Kesiapan Tiket Maskapai & Reservasi Hotel Jamaah</h3>
            <p class="text-xs text-stone-500 leading-relaxed">
                Kelola status penerbangan tiket dan reservasi hotel per akun jamaah aktif. Admin dapat memverifikasi tiket pesawat dan kamar hotel dengan satu klik tombol status.
            </p>
        </div>
        <div class="w-full lg:w-72 space-y-1 shrink-0">
            <label class="block text-[10px] font-bold text-stone-400 uppercase">Pilih Paket & Tanggal</label>
            <div class="relative">
                <select class="w-full appearance-none px-4 py-2.5 rounded-xl bg-white border border-stone-300 text-xs font-serif text-stone-800 focus:outline-none focus:border-[#0B3B24] pr-10">
                    <option>Umrah Reguler &bull; 10 Desember 2026 (Kloter 01)</option>
                    <option>Umrah Plus Turki &bull; 5 Januari 2027 (Kloter 02)</option>
                </select>
                <span class="absolute right-3.5 top-3 text-stone-400 pointer-events-none text-xs">&darr;</span>
            </div>
        </div>
    </div>

    <!-- 4. Dua Kartu Detail Kloter (Maskapai & Akomodasi Hotel) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 font-sans">
        
        <!-- Kartu Maskapai Penerbangan Kloter -->
        <div class="bg-white rounded-[24px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-6">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-[11px] font-bold text-amber-800 uppercase tracking-wider">Maskapai Penerbangan Kloter</span>
                    <span class="bg-emerald-100 text-emerald-800 text-[10px] font-bold px-3 py-1 rounded-full">Terjadwal</span>
                </div>
                <div>
                    <h4 class="text-base font-bold text-stone-900 font-serif">Saudia Airlines (SV-819)</h4>
                    <p class="text-xs text-stone-500 mt-0.5">Rute: Jakarta (CGK) &rarr; Jeddah (JED) &bull; Direct Flight</p>
                </div>
            </div>
            <div class="pt-4 border-t border-stone-100 flex justify-between items-center text-xs">
                <span class="text-stone-500 font-medium">Keberangkatan: <strong class="text-stone-800">10 Des 2026, 11:30 WIB</strong></span>
                <a href="#" class="font-bold text-amber-800 hover:underline">Ubah Data Penerbangan</a>
            </div>
        </div>

        <!-- Kartu Akomodasi Hotel Kloter -->
        <div class="bg-white rounded-[24px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-6">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-[11px] font-bold text-amber-800 uppercase tracking-wider">Akomodasi Hotel Kloter</span>
                    <span class="text-amber-500 text-xs font-bold">Bintang &starf;&starf;&starf;&starf;&starf;</span>
                </div>
                <div>
                    <h4 class="text-base font-bold text-stone-900 font-serif">Pullman Zamzam (Makkah) & Mövenpick (Madinah)</h4>
                    <p class="text-xs text-stone-500 mt-0.5">Kapasitas Booking: Quad, Triple, & Double Room</p>
                </div>
            </div>
            <div class="pt-4 border-t border-stone-100 flex justify-between items-center text-xs">
                <span class="text-stone-500 font-medium">Status: <strong class="text-emerald-700">Terkonfirmasi</strong></span>
                <a href="#" class="font-bold text-amber-800 hover:underline">Ubah Data Hotel</a>
            </div>
        </div>

    </div>

    <!-- 5. Tabel Data Akun Jamaah Aktif & Status Kesiapan -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6 font-sans">
        
        <!-- Header Tabel & Search / Set Semua Ready -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h3 class="text-base font-bold text-stone-900 font-serif">Data Akun Jamaah Aktif & Status Kesiapan</h3>
                <p class="text-xs text-stone-500">Klik tombol status untuk memverifikasi kesiapan tiket penerbangan dan kamar hotel jamaah (Ready / Not Ready).</p>
            </div>
            <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto">
                <!-- Search Box -->
                <div class="relative flex-1 sm:w-64">
                    <span class="absolute left-3.5 top-3 text-stone-400 text-xs"><span class="material-symbols-outlined">search</span></span>
                    <input type="text" placeholder="Cari nama akun jamaah..." class="w-full pl-9 pr-4 py-2 rounded-full bg-stone-50 border border-stone-300 text-xs focus:outline-none focus:border-[#0B3B24]">
                </div>
                <!-- Tombol Set Semua Ready -->
                <button onclick="alert('Semua status diatur menjadi Ready!')" class="bg-white hover:bg-stone-50 text-[#0B3B24] border border-[#0B3B24] font-bold text-xs py-2 px-4 rounded-full transition cursor-pointer shadow-xs">
                    Set Semua Ready
                </button>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="overflow-x-auto rounded-2xl border border-stone-200">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-stone-100 text-stone-700 font-serif border-b border-stone-200">
                        <th class="p-4 font-semibold">NAMA AKUN</th>
                        <th class="p-4 font-semibold">TOTAL JAMAAH</th>
                        <th class="p-4 font-semibold">NAMA MASKAPAI</th>
                        <th class="p-4 font-semibold">NAMA HOTEL</th>
                        <th class="p-4 font-semibold">BINTANG HOTEL</th>
                        <th class="p-4 font-semibold">STATUS MASKAPAI</th>
                        <th class="p-4 font-semibold">STATUS HOTEL</th>
                        <th class="p-4 font-semibold text-right">AKSI</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-stone-700 font-serif">
                    
                    <!-- Baris 1 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 font-bold text-stone-900">Rinzani Fauziah</td>
                        <td class="p-4 text-stone-600 font-sans">3 Orang</td>
                        <td class="p-4 text-stone-800 font-sans">Saudia Airlines</td>
                        <td class="p-4 text-stone-800 font-sans">Sheraton Makkah</td>
                        <td class="p-4 text-amber-500 font-sans">Bintang 5<br><span class="text-xs">&starf;&starf;&starf;&starf;&starf;</span></td>
                        <td class="p-4 font-sans">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-amber-300 bg-amber-50/60 text-amber-800 text-[11px] font-bold">
                                <span class="material-symbols-outlined">hourglass_top</span> Not Ready
                            </span>
                        </td>
                        <td class="p-4 font-sans">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-amber-300 bg-amber-50/60 text-amber-800 text-[11px] font-bold">
                                <span class="material-symbols-outlined">hourglass_top</span> Not Ready
                            </span>
                        </td>
                        <td class="p-4 text-right font-sans">
                            <button class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-4 py-2 rounded-full transition shadow-xs flex items-center gap-1.5 ml-auto text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<path fill="#7cb342" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2m-1.667 22.143L6.92 16.73l3.293-3.293l4.12 4.107l7.455-7.44l3.294 3.293Z" />
</svg>
 Verifikasi Ready
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 2 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 font-bold text-stone-900">Kholifah Mansyur</td>
                        <td class="p-4 text-stone-600 font-sans">2 Orang</td>
                        <td class="p-4 text-stone-800 font-sans">Saudia Airlines</td>
                        <td class="p-4 text-stone-800 font-sans">Sheraton Makkah</td>
                        <td class="p-4 text-amber-500 font-sans">Bintang 5<br><span class="text-xs">&starf;&starf;&starf;&starf;&starf;</span></td>
                        <td class="p-4 font-sans">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-emerald-300 bg-emerald-50/60 text-emerald-800 text-[11px] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<path fill="#7cb342" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2m-1.667 22.143L6.92 16.73l3.293-3.293l4.12 4.107l7.455-7.44l3.294 3.293Z" />
</svg>
 Verifikasi Ready Ready
                            </span>
                        </td>
                        <td class="p-4 font-sans">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-emerald-300 bg-emerald-50/60 text-emerald-800 text-[11px] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<path fill="#7cb342" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2m-1.667 22.143L6.92 16.73l3.293-3.293l4.12 4.107l7.455-7.44l3.294 3.293Z" />
</svg>
 Verifikasi Ready Ready
                            </span>
                        </td>
                        <td class="p-4 text-right font-sans">
                            <button class="bg-stone-100 text-stone-700 border border-stone-300 font-bold px-4 py-2 rounded-full transition flex items-center gap-1.5 ml-auto text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<path fill="#7cb342" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2m-1.667 22.143L6.92 16.73l3.293-3.293l4.12 4.107l7.455-7.44l3.294 3.293Z" />
</svg>
  Sudah Lengkap
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 3 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="p-4 font-bold text-stone-900">Wildan Pratama</td>
                        <td class="p-4 text-stone-600 font-sans">4 Orang</td>
                        <td class="p-4 text-stone-800 font-sans">Saudia Airlines</td>
                        <td class="p-4 text-stone-800 font-sans">Pullman Zamzam</td>
                        <td class="p-4 text-amber-500 font-sans">Bintang 5<br><span class="text-xs">&starf;&starf;&starf;&starf;&starf;</span></td>
                        <td class="p-4 font-sans">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-amber-300 bg-amber-50/60 text-amber-800 text-[11px] font-bold">
                                <span class="material-symbols-outlined">hourglass_top</span> Not Ready
                            </span>
                        </td>
                        <td class="p-4 font-sans">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full border border-emerald-300 bg-emerald-50/60 text-emerald-800 text-[11px] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<path fill="#7cb342" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2m-1.667 22.143L6.92 16.73l3.293-3.293l4.12 4.107l7.455-7.44l3.294 3.293Z" />
</svg>
 Verifikasi Ready Ready
                            </span>
                        </td>
                        <td class="p-4 text-right font-sans">
                            <button class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-4 py-2 rounded-full transition shadow-xs flex items-center gap-1.5 ml-auto text-[11px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
	<path d="M0 0h32v32H0z" fill="none" />
	<path fill="#7cb342" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2m-1.667 22.143L6.92 16.73l3.293-3.293l4.12 4.107l7.455-7.44l3.294 3.293Z" />
</svg>
 Verifikasi Ready
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection