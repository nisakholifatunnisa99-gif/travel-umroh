@extends('layouts.admin') {{-- Sesuaikan dengan layout admin Anda --}}

@section('title', 'Kelola Bukti Pembayaran Pengguna - ROZWIA Islamic Travel')

@section('content')
    <!-- Header Card: Kelola Bukti Pembayaran Pengguna -->
    <div class="bg-[#0B3B24] text-white rounded-[32px] p-7 sm:p-8 shadow-sm space-y-2">
        <h1 class="text-2xl sm:text-3xl font-[800] font-['Abhaya_Libre']">
            Kelola Bukti Pembayaran Pengguna
        </h1>
        <p class="text-xs sm:text-sm text-emerald-100/80 font-sans">
            Kelola data transaksi pembayaran pengguna
        </p>
    </div>

    <!-- 2 Kartu Statistik Ringkasan (Atas) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Kartu 1: Total Akun Terdaftar -->
        <div class="bg-white rounded-[32px] p-7 border border-stone-200 shadow-sm space-y-3">
            <div class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-800 flex items-center justify-center text-lg">
                <span class="material-symbols-outlined">group</span>
            </div>
            <div class="space-y-1">
                <span class="text-xs text-stone-500 font-sans block">Total Akun Terdaftar</span>
                <h2 class="text-3xl sm:text-4xl font-[800] text-stone-900 font-['Abhaya_Libre']">56</h2>
            </div>
        </div>

        <!-- Kartu 2: Total Sisa Bayar -->
        <div class="bg-white rounded-[32px] p-7 border border-stone-200 shadow-sm space-y-3">
            <div class="w-10 h-10 rounded-full bg-amber-50 text-amber-800 flex items-center justify-center text-lg font-bold font-['Abhaya_Libre']">
                Rp
            </div>
            <div class="space-y-1">
                <span class="text-xs text-stone-500 font-sans block">Total Sisa Bayar</span>
                <h2 class="text-2xl sm:text-3xl font-[800] text-stone-900 font-['Abhaya_Libre']">Rp 400.000.000</h2>
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
                        <span class="flex items-center gap-2">Semua Status</span>
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
                        <th class="py-3 px-4">Total Harga</th>
                        <th class="py-3 px-4">Sisa Bayar</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-xs font-sans">
                    
                    <!-- Baris 1 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 30.000.000</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="openModal('Talita Azaria', 'Rp 30.000.000')" class="bg-emerald-800 hover:bg-emerald-900 text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition shadow-xs cursor-pointer">
                                <span class="material-symbols-outlined">add</span> Uang Masuk
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 2 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 0</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="alert('Sudah Lunas')" class="bg-stone-100 hover:bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition cursor-pointer">
                                <span class="material-symbols-outlined">task_alt</span> Sudah Lunas
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 3 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 30.000.000</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="openModal('Talita Azaria', 'Rp 30.000.000')" class="bg-emerald-800 hover:bg-emerald-900 text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition shadow-xs cursor-pointer">
                                <span class="material-symbols-outlined">add</span> Uang Masuk
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 4 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 0</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="alert('Sudah Lunas')" class="bg-stone-100 hover:bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition cursor-pointer">
                                <span class="material-symbols-outlined">task_alt</span> Sudah Lunas
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 5 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 30.000.000</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="openModal('Talita Azaria', 'Rp 30.000.000')" class="bg-emerald-800 hover:bg-emerald-900 text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition shadow-xs cursor-pointer">
                                <span class="material-symbols-outlined">add</span> Uang Masuk
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 6 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 0</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="alert('Sudah Lunas')" class="bg-stone-100 hover:bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition cursor-pointer">
                                <span class="material-symbols-outlined">task_alt</span> Sudah Lunas
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 7 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-900 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                TA
                            </div>
                            <span class="font-[700] text-stone-900">Talita Azaria</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">talitacantik@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 30.000.000</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-rose-50 border border-rose-200 text-rose-700 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="openModal('Talita Azaria', 'Rp 30.000.000')" class="bg-emerald-800 hover:bg-emerald-900 text-white font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition shadow-xs cursor-pointer">
                                <span class="material-symbols-outlined">add</span> Uang Masuk
                            </button>
                        </td>
                    </tr>

                    <!-- Baris 8 -->
                    <tr class="hover:bg-stone-50/60 transition">
                        <td class="py-3.5 px-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre']">
                                I
                            </div>
                            <span class="font-[700] text-stone-900">Indira</span>
                        </td>
                        <td class="py-3.5 px-4 text-stone-600">indirauika@gmail.com</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 100.000.000</td>
                        <td class="py-3.5 px-4 text-stone-800 font-medium">Rp 0</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center gap-1.5 bg-emerald-50 border border-emerald-200 text-emerald-800 font-[700] text-[10px] px-3 py-1 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Belum Lunas
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-right">
                            <button onclick="alert('Sudah Lunas')" class="bg-stone-100 hover:bg-stone-200 text-stone-700 font-[700] text-[10px] px-3.5 py-1.5 rounded-full inline-flex items-center gap-1 transition cursor-pointer">
                                <span class="material-symbols-outlined">task_alt</span> Sudah Lunas
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

    <!-- ========================================== -->
    <!-- MODAL POP-UP TAMBAH UANG MASUK             -->
    <!-- ========================================== -->
    <div id="modalUangMasuk" class="fixed inset-0 bg-stone-950/50 backdrop-blur-xs z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-[32px] w-full max-w-xl p-8 shadow-2xl space-y-6 relative border border-stone-200 animate-in fade-in zoom-in duration-200">
            
            <!-- Tombol Silang / Close di Pojok Kanan Atas -->
            <button onclick="closeModal()" class="absolute top-6 right-6 w-9 h-9 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-600 flex items-center justify-center font-bold text-sm transition cursor-pointer">
                ✕
            </button>

            <!-- Judul Modal -->
            <div class="text-center space-y-1 pt-2">
                <h2 class="text-2xl sm:text-3xl font-[800] text-stone-900 font-['Abhaya_Libre']">
                    Tambah Uang Masuk
                </h2>
                <p class="text-xs text-stone-500 font-sans">
                    Lengkapi informasi di bawah ini untuk melanjutkan
                </p>
            </div>

            <!-- Kartu Form Dalam Modal -->
            <div class="bg-white rounded-[28px] border border-stone-200 p-6 sm:p-7 space-y-5 shadow-xs">
                
                <!-- Judul Bagian Bukti Pembayaran -->
                <div class="flex items-center gap-2 border-b border-stone-100 pb-3">
                    <span class="text-emerald-900 text-lg">📄</span>
                    <h3 class="text-sm font-[800] text-stone-900 font-['Abhaya_Libre']">Bukti Pembayaran</h3>
                </div>

                <!-- Input Row 1: Nama Akun & Sisa Bayar -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 font-sans">
                    <div class="space-y-1.5">
                        <label class="text-xs font-[700] text-stone-800 block">Nama Akun</label>
                        <input type="text" id="modalNamaAkun" readonly class="w-full bg-stone-50 border border-stone-200 rounded-2xl px-4 py-3 text-xs text-stone-800 font-medium focus:outline-none">
                    </div>
                    <div class="space-y-1.5">
                        <label class="text-xs font-[700] text-stone-800 block">Sisa Bayar</label>
                        <input type="text" id="modalSisaBayar" readonly class="w-full bg-stone-50 border border-stone-200 rounded-2xl px-4 py-3 text-xs text-stone-800 font-medium focus:outline-none">
                    </div>
                </div>

                <!-- Input Row 2: Nominal Pembayaran -->
                <div class="space-y-1.5 font-sans">
                    <label class="text-xs font-[700] text-stone-800 block">Nominal Pembayaran</label>
                    <input type="text" value="Rp 20.000.000" class="w-full bg-white border border-stone-200 rounded-2xl px-4 py-3 text-xs text-stone-800 font-medium focus:outline-none focus:border-emerald-800 shadow-xs">
                </div>

                <!-- Tombol Simpan -->
                <div class="pt-2">
                    <button onclick="alert('Data uang masuk berhasil disimpan!'); closeModal();" class="w-full sm:w-auto bg-[#0B3B24] hover:bg-emerald-900 text-white font-[700] text-xs px-6 py-3.5 rounded-2xl flex items-center justify-center gap-2 transition shadow-md cursor-pointer ml-auto font-sans">
                        <span>Simpan</span>
                        <span>💾</span>
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- Script JavaScript untuk Mengontrol Pop-up Modal -->
    <script>
        function openModal(nama, sisa) {
            document.getElementById('modalNamaAkun').value = nama;
            document.getElementById('modalSisaBayar').value = sisa;
            document.getElementById('modalUangMasuk').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalUangMasuk').classList.add('hidden');
        }
    </script>
@endsection