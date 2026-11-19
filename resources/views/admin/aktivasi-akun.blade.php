@extends('layouts.admin')

@section('title', 'Kelola Status Akun Pengguna - ROZWIA Islamic Travel')

@section('content')
    <!-- Header Card: Kelola Status Akun Pengguna -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-7 sm:p-8 shadow-sm space-y-2">
        <h1 class="text-2xl sm:text-3xl font-[800] font-['Abhaya_Libre']">
            Kelola Status Akun Pengguna
        </h1>
        <p class="text-xs sm:text-sm text-emerald-100/80 font-sans">
            Aktivasi setiap akun pengguna
        </p>
    </div>

    <!-- 2 Kartu Statistik Ringkasan (Atas) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Kartu 1: Akun Active -->
        <div class="bg-white rounded-[32px] p-7 border border-stone-200 shadow-sm space-y-3">
            <div class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-800 flex items-center justify-center text-lg">
                <span class="material-symbols-outlined">group</span>
            </div>
            <div class="space-y-1">
                <span class="text-xs text-stone-500 font-sans block">Akun Active</span>
                <h2 class="text-3xl sm:text-4xl font-[800] text-stone-900 font-['Abhaya_Libre']">36 Akun</h2>
            </div>
        </div>

        <!-- Kartu 2: Akun Inactive -->
        <div class="bg-white rounded-[32px] p-7 border border-stone-200 shadow-sm space-y-3">
            <div class="w-10 h-10 rounded-full bg-rose-50 text-rose-700 flex items-center justify-center text-lg">
                <span class="material-symbols-outlined">group</span>
            </div>
            <div class="space-y-1">
                <span class="text-xs text-stone-500 font-sans block">Akun Inactive</span>
                <h2 class="text-3xl sm:text-4xl font-[800] text-stone-900 font-['Abhaya_Libre']">20 Akun</h2>
            </div>
        </div>

    </div>

    <!-- 3. Tabel Data & Filter Pencarian -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 border border-stone-200 shadow-sm space-y-6">
        
        <!-- Bagian Filter & Search Bar -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div class="space-y-0.5">
                <h3 class="text-base font-[800] font-['Abhaya_Libre'] text-stone-900">Daftar Akun Jamaah</h3>
                <span class="text-xs text-stone-500 font-sans">Menampilkan 56 dari 56 akun</span>
            </div>

            <div class="flex items-center gap-3 w-full sm:w-auto">
                <!-- Search Input -->
                <div class="relative flex-1 sm:w-72">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-stone-400">
                        <span class="material-symbols-outlined">search</span>
                    </span>
                    <input type="text" placeholder="Cari Nama Akun Jamaah" class="w-full bg-white border border-stone-200 rounded-2xl pl-10 pr-4 py-2.5 text-xs text-stone-800 focus:outline-none focus:border-emerald-800 transition shadow-xs font-sans">
                </div>

                <!-- Dropdown Filter Status -->
                <div class="relative shrink-0">
                    <button class="bg-white border border-stone-200 rounded-2xl px-4 py-2.5 text-xs font-[700] text-stone-800 flex items-center gap-3 hover:bg-stone-50 transition shadow-xs font-sans cursor-pointer">
                        <span class="flex items-center gap-2"> Semua Status</span>
                        <span class="text-stone-400 text-[10px]"><span class="material-symbols-outlined">dropdown_menu</span></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tabel Data Akun Jamaah -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-stone-200 text-[11px] font-[700] text-stone-400 uppercase tracking-wider font-sans">
                        <th class="py-3 px-4">Nama Akun</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">No Telepon</th>
                        <th class="py-3 px-4">Total Jamaah</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-xs font-sans">
                    
                    <!-- Baris 1 (Inactive) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0812312312123</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">4 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Inactive
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-[#0B3B24] text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition shadow-xs cursor-pointer">
                                <span>Active</span>
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 2 (Active) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0182312939183</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">10 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Active
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition cursor-pointer">
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                                <span>Inactive</span>
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 3 (Inactive) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0812312312123</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">4 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Inactive
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-[#0B3B24] text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition shadow-xs cursor-pointer">
                                <span>Active</span>
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 4 (Active) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0182312939183</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">10 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Active
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition cursor-pointer">
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                                <span>Inactive</span>
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 5 (Inactive) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0812312312123</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">4 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Inactive
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-[#0B3B24] text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition shadow-xs cursor-pointer">
                                <span>Active</span>
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 6 (Active) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0182312939183</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">10 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Active
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition cursor-pointer">
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                                <span>Inactive</span>
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 7 (Inactive) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0812312312123</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">4 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Inactive
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-[#0B3B24] text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition shadow-xs cursor-pointer">
                                <span>Active</span>
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 8 (Active) -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-mono">0182312939183</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">10 Orang</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Active
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="toggleStatus(this)" class="bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 transition cursor-pointer">
                                <span class="w-3 h-3 bg-white rounded-full inline-block"></span>
                                <span>Inactive</span>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Bagian Bawah: Info Halaman & Navigasi Pagination -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 pt-4 border-t border-stone-100 text-xs font-sans">
            <span class="text-stone-500">Halaman 1 dari 8</span>

            <div class="flex items-center gap-1.5">
                <!-- Tombol Prev -->
                <button class="w-9 h-9 rounded-xl border border-stone-200 flex items-center justify-center text-stone-600 hover:bg-stone-50 transition cursor-pointer">
                    ‹
                </button>
                <!-- Angka Halaman -->
                <button class="w-9 h-9 rounded-xl bg-[#0B3B24] text-white font-bold flex items-center justify-center shadow-xs">
                    1
                </button>
                <button class="w-9 h-9 rounded-xl border border-stone-200 hover:bg-stone-50 font-bold flex items-center justify-center text-stone-700 transition">
                    2
                </button>
                <button class="w-9 h-9 rounded-xl border border-stone-200 hover:bg-stone-50 font-bold flex items-center justify-center text-stone-700 transition">
                    3
                </button>
                <span class="px-1 text-stone-400 font-bold">...</span>
                <button class="w-9 h-9 rounded-xl border border-stone-200 hover:bg-stone-50 font-bold flex items-center justify-center text-stone-700 transition">
                    8
                </button>
                <!-- Tombol Next -->
                <button class="w-9 h-9 rounded-xl border border-stone-200 flex items-center justify-center text-stone-600 hover:bg-stone-50 transition cursor-pointer">
                    ›
                </button>
            </div>
        </div>

    </div>

    <!-- Script interaktif sederhana untuk tombol toggle status -->
    <script>
        function toggleStatus(btn) {
            let row = btn.closest('tr');
            let statusSpan = row.querySelector('td:nth-child(5) span');
            
            if (btn.classList.contains('bg-[#0B3B24]')) {
                // Ubah ke Inactive
                btn.classList.remove('bg-[#0B3B24]', 'text-white');
                btn.classList.add('bg-stone-200', 'text-stone-700');
                btn.innerHTML = '<span class="w-3 h-3 bg-white rounded-full inline-block"></span><span>Inactive</span>';
                
                statusSpan.className = 'inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full';
                statusSpan.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Inactive';
            } else {
                // Ubah ke Active
                btn.classList.remove('bg-stone-200', 'text-stone-700');
                btn.classList.add('bg-[#0B3B24]', 'text-white');
                btn.innerHTML = '<span>Active</span><span class="w-3 h-3 bg-white rounded-full inline-block"></span>';
                
                statusSpan.className = 'inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full';
                statusSpan.innerHTML = '<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Active';
            }
        }
    </script>
@endsection