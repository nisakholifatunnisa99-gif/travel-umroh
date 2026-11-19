@extends('layouts.supervisor')

@section('title', 'Daftar Akun Pengguna - Supervisor ROZWIA')

@section('content')
<div class="space-y-6">
    
    <!-- Header Card: Daftar Akun Pengguna -->
    <div class="bg-white/80 backdrop-blur-md border border-stone-200/80 rounded-[32px] p-6 sm:p-7 shadow-xs space-y-1">
        <h1 class="text-2xl sm:text-3xl font-[800] font-['Abhaya_Libre'] text-stone-900">
            Daftar Akun Pengguna
        </h1>
        <p class="text-xs sm:text-sm text-stone-500 font-sans">
            Tracking dan pantau akun pengguna
        </p>
    </div>

    <!-- 3 Kartu Statistik Ringkasan -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 font-serif">
        <div class="bg-white p-6 sm:p-7 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-[700] uppercase tracking-wider text-stone-400 font-sans">Total Akun</span>
            <h3 class="text-3xl sm:text-4xl font-[800] text-stone-900 font-['Abhaya_Libre']">56</h3>
        </div>
        <div class="bg-white p-6 sm:p-7 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-[700] uppercase tracking-wider text-stone-400 font-sans">Akun Aktif</span>
            <h3 class="text-3xl sm:text-4xl font-[800] text-stone-900 font-['Abhaya_Libre']">40</h3>
        </div>
        <div class="bg-white p-6 sm:p-7 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-[700] uppercase tracking-wider text-stone-400 font-sans">Akun Nonaktif</span>
            <h3 class="text-3xl font-[800] text-stone-900 font-['Abhaya_Libre']">16</h3>
        </div>
    </div>

    <!-- Tabel & Filter Section -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6 font-sans">
        
        <!-- Bagian Atas Tabel: Judul, Search, Download, & Filter Status -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4">
            <div>
                <h3 class="text-base font-[800] text-stone-900 font-['Abhaya_Libre']">Daftar Akun Jamaah</h3>
                <p class="text-[11px] text-stone-400">Menampilkan 56 dari 56 akun</p>
            </div>

            <div class="flex flex-wrap items-center gap-3 w-full lg:w-auto">
                <!-- Search Input -->
                <div class="relative flex-1 sm:flex-initial">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-stone-400 text-sm"><span class="material-symbols-outlined">search</span></span>
                    <input type="text" placeholder="Cari Nama Akun Jamaah" class="w-full sm:w-64 pl-10 pr-4 py-2.5 rounded-full bg-white border border-stone-200 text-xs font-medium focus:outline-none focus:border-stone-400 shadow-xs">
                </div>

                <!-- Tombol Download Data Akun -->
                <button onclick="alert('Mengunduh data akun...')" class="bg-white hover:bg-stone-50 text-stone-800 border border-stone-200 font-[700] text-xs py-2.5 px-5 rounded-full transition cursor-pointer flex items-center gap-2 shadow-xs">
                    <span class="material-symbols-outlined">download_2</span> Download Data Akun
                </button>

                <!-- Filter "Semua Status" -->
                <div class="relative">
                    <select class="appearance-none bg-white border border-stone-200 text-stone-800 font-[700] text-xs py-2.5 pl-4 pr-10 rounded-full focus:outline-none focus:border-stone-400 cursor-pointer shadow-xs">
                        <option> Semua Status</option>
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select>
                    <span class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-stone-500 text-xs"><span class="material-symbols-outlined">arrow_drop_down</span></span>
                </div>
            </div>
        </div>

        <!-- Tabel Daftar Akun Pengguna -->
        <div class="overflow-x-auto rounded-2xl border border-stone-200">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-stone-100/80 text-stone-600 font-serif border-b border-stone-200">
                        <th class="p-3.5 font-[700]">Nama Pengguna</th>
                        <th class="p-3.5 font-[700]">Email</th>
                        <th class="p-3.5 font-[700]">No Telepon</th>
                        <th class="p-3.5 font-[700]">Paket</th>
                        <th class="p-3.5 font-[700]">Tgl Registrasi</th>
                        <th class="p-3.5 font-[700] text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-stone-700 font-medium">
                    
                    <!-- Row 1 -->
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="p-3.5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-bold flex items-center justify-center text-xs">TA</div>
                            <span class="font-bold text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="p-3.5 text-stone-600">talita@gmail.com</td>
                        <td class="p-3.5 text-stone-600">081575588582</td>
                        <td class="p-3.5 text-stone-800">Umrah Blessed Journey</td>
                        <td class="p-3.5 text-stone-600">1 November 2026</td>
                        <td class="p-3.5 text-center">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200/60 text-[10px] font-bold px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Aktif
                            </span>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="p-3.5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-bold flex items-center justify-center text-xs">I</div>
                            <span class="font-bold text-stone-900">Indira</span>
                        </td>
                        <td class="p-3.5 text-stone-600">indira@gmail.com</td>
                        <td class="p-3.5 text-stone-600">08364732933</td>
                        <td class="p-3.5 text-stone-800">Exclusive Haji Journey</td>
                        <td class="p-3.5 text-stone-600">10 April 2027</td>
                        <td class="p-3.5 text-center">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200/60 text-[10px] font-bold px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Aktif
                            </span>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="p-3.5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-bold flex items-center justify-center text-xs">RI</div>
                            <span class="font-bold text-stone-900">Raid Iftinan</span>
                        </td>
                        <td class="p-3.5 text-stone-600">raid123@gmail.com</td>
                        <td class="p-3.5 text-stone-600">01573648322</td>
                        <td class="p-3.5 text-stone-800">Mabrur Haji Journey</td>
                        <td class="p-3.5 text-stone-600">26 April 2027</td>
                        <td class="p-3.5 text-center">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200/60 text-[10px] font-bold px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Aktif
                            </span>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="p-3.5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-bold flex items-center justify-center text-xs">R</div>
                            <span class="font-bold text-stone-900">Rinzani</span>
                        </td>
                        <td class="p-3.5 text-stone-600">ririn1212@gmail.com</td>
                        <td class="p-3.5 text-stone-600">08563749223</td>
                        <td class="p-3.5 text-stone-800">Umrah Sacred Journey</td>
                        <td class="p-3.5 text-stone-600">10 November 2026</td>
                        <td class="p-3.5 text-center">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 text-rose-800 border border-rose-200/60 text-[10px] font-bold px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Nonaktif
                            </span>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="p-3.5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-bold flex items-center justify-center text-xs">R</div>
                            <span class="font-bold text-stone-900">Rafid</span>
                        </td>
                        <td class="p-3.5 text-stone-600">rafid875@gmail.com</td>
                        <td class="p-3.5 text-stone-600">08273295342</td>
                        <td class="p-3.5 text-stone-800">Umrah Blessed Journey</td>
                        <td class="p-3.5 text-stone-600">1 November 2026</td>
                        <td class="p-3.5 text-center">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200/60 text-[10px] font-bold px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Aktif
                            </span>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="p-3.5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-bold flex items-center justify-center text-xs">K</div>
                            <span class="font-bold text-stone-900">Kholifatunnisa</span>
                        </td>
                        <td class="p-3.5 text-stone-600">olipntik@gmail.com</td>
                        <td class="p-3.5 text-stone-600">08274394392</td>
                        <td class="p-3.5 text-stone-800">Umrah Serenity Journey</td>
                        <td class="p-3.5 text-stone-600">10 Desember 2026</td>
                        <td class="p-3.5 text-center">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200/60 text-[10px] font-bold px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Aktif
                            </span>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr class="hover:bg-stone-50/50 transition">
                        <td class="p-3.5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-bold flex items-center justify-center text-xs">W</div>
                            <span class="font-bold text-stone-900">Wildan</span>
                        </td>
                        <td class="p-3.5 text-stone-600">wildan875@gmail.com</td>
                        <td class="p-3.5 text-stone-600">08123721382</td>
                        <td class="p-3.5 text-stone-800">Umrah Blessed Journey</td>
                        <td class="p-3.5 text-stone-600">1 November 2026</td>
                        <td class="p-3.5 text-center">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-800 border border-emerald-200/60 text-[10px] font-bold px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Aktif
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Pagination Bawah -->
        <div class="flex flex-col sm:flex-row justify-between items-center pt-2 gap-4 text-xs text-stone-500">
            <span>Halaman 1 dari 8</span>
            <div class="flex items-center gap-1.5 font-bold">
                <button class="w-9 h-9 rounded-xl border border-stone-200 flex items-center justify-center text-stone-400 hover:bg-stone-50 transition cursor-pointer">‹</button>
                <button class="w-9 h-9 rounded-xl bg-[#0B3B24] text-white flex items-center justify-center shadow-xs">1</button>
                <button class="w-9 h-9 rounded-xl border border-stone-200 flex items-center justify-center text-stone-700 hover:bg-stone-50 transition cursor-pointer">2</button>
                <button class="w-9 h-9 rounded-xl border border-stone-200 flex items-center justify-center text-stone-700 hover:bg-stone-50 transition cursor-pointer">3</button>
                <span class="px-2 text-stone-400">...</span>
                <button class="w-9 h-9 rounded-xl border border-stone-200 flex items-center justify-center text-stone-700 hover:bg-stone-50 transition cursor-pointer">8</button>
                <button class="w-9 h-9 rounded-xl border border-stone-200 flex items-center justify-center text-stone-700 hover:bg-stone-50 transition cursor-pointer">›</button>
            </div>
        </div>

    </div>
</div>
@endsection