@extends('layouts.supervisor')

@section('title', 'Kelola Paket - Supervisor ROZWIA')

@section('content')
<!-- State Alpine.js untuk kontrol Pop-up Modal & Form Interaktif -->
<div x-data="{ 
        openModal: false,
        kategori: 'Umrah',
        selectedFasilitas: ['Tiket Pesawat', 'Akomodasi Hotel'],
        toggleFasilitas(item) {
            if (this.selectedFasilitas.includes(item)) {
                this.selectedFasilitas = this.selectedFasilitas.filter(i => i !== item);
            } else {
                this.selectedFasilitas.push(item);
            }
        }
    }" class="space-y-6 font-serif">

    <!-- Header & Tombol Tambah Paket -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h1 class="text-3xl font-bold text-[#0B3B24]">Kelola Paket</h1>
            <p class="text-xs text-stone-600 font-sans">Kelola daftar paket umroh dan haji yang tersedia untuk jamaah.</p>
        </div>
        <!-- Tombol Pemicu Pop-up -->
       <!-- Tombol untuk Membuka Modal (Contoh diletakkan di halaman Kelola Paket) -->
<button onclick="openModalTambahPaket()" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-[700] text-xs px-5 py-3 rounded-2xl flex items-center gap-2 transition cursor-pointer shadow-md">
    <span>+ Tambah Paket</span>
</button>

    </div>

    <!-- Grid Kartu Paket -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 font-sans">
        
        <!-- Paket 1: Umrah Reguler (Aktif) -->
        <div class="bg-white rounded-[32px] overflow-hidden shadow-sm border border-stone-200 flex flex-col justify-between">
            <div class="bg-[#0B3B24] text-white p-6 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="bg-[#E5D3B3] text-[#0B3B24] text-[10px] font-bold px-3 py-1 rounded-full uppercase">Umrah</span>
                    <span class="bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[10px] font-bold px-2.5 py-0.5 rounded-full flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Aktif
                    </span>
                </div>
                <div>
                    <h3 class="text-lg font-bold font-serif">Umrah Reguler</h3>
                    <p class="text-amber-300 font-bold text-sm">Rp 34.500.000</p>
                </div>
            </div>
            <div class="p-6 space-y-4 flex-1 flex flex-col justify-between">
                <div class="flex flex-wrap gap-2 text-[13px] text-stone-500">
                    <span class="bg-stone-100 px-3 py-1 rounded-lg inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-base">timer</span> 
                        <span>9 Hari</span>
                    </span>
                    <span class="bg-stone-100 px-3 py-1 rounded-lg inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-base">calendar_month</span> 
                        <span>14 Januari 2027</span>
                    </span>
                </div>
                <p class="text-xs text-stone-600 leading-relaxed font-serif">
                    Paket umrah reguler dengan hotel dekat dengan Masjidil Haram dan Masjid Nabawi cocok untuk jamaah.
                </p>
                <div class="flex flex-wrap gap-1.5 text-[10px]">
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Transportasi</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Konsumsi</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Hotel</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Visa Umrah</span>
                </div>
                <div class="space-y-1.5 pt-2 border-t border-stone-100">
                    <div class="flex justify-between text-xs">
                        <span class="text-stone-500">👥 38/45 jamaah</span>
                        <strong class="text-[#0B3B24]">84%</strong>
                    </div>
                    <div class="w-full bg-stone-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-[#0B3B24] h-full rounded-full" style="width: 84%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket 2: Umrah Plus Turki 12 hari -->
        <div class="bg-white rounded-[32px] overflow-hidden shadow-sm border border-stone-200 flex flex-col justify-between">
            <div class="bg-[#0B3B24] text-white p-6 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="bg-[#E5D3B3] text-[#0B3B24] text-[10px] font-bold px-3 py-1 rounded-full uppercase">Umrah</span>
                    <span class="bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[10px] font-bold px-2.5 py-0.5 rounded-full flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Aktif
                    </span>
                </div>
                <div>
                    <h3 class="text-lg font-bold font-serif">Umrah Plus Turki 12 hari</h3>
                    <p class="text-amber-300 font-bold text-sm">Rp 45.900.000</p>
                </div>
            </div>
            <div class="p-6 space-y-4 flex-1 flex flex-col justify-between">
                <div class="flex flex-wrap gap-2 text-[11px] text-stone-500">
                    <span class="bg-stone-100 px-3 py-1 rounded-lg inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-base">timer</span> 
                        <span>9 Hari</span>
                    </span>
                    <span class="bg-stone-100 px-3 py-1 rounded-lg inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-base">calendar_month</span> 
                        <span>14 Januari 2027</span>
                    </span>
                </div>
                <p class="text-xs text-stone-600 leading-relaxed font-serif">
                    Perjalanan ibadah umrah dilengkapi wisata sejarah Islam Istanbul dan Bursa, Turki.
                </p>
                <div class="flex flex-wrap gap-1.5 text-[10px]">
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Transportasi</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Konsumsi</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Hotel</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Visa Umrah</span>
                </div>
                <div class="space-y-1.5 pt-2 border-t border-stone-100">
                    <div class="flex justify-between text-xs">
                        <span class="text-stone-500">👥 29/40 jamaah</span>
                        <strong class="text-[#0B3B24]">73%</strong>
                    </div>
                    <div class="w-full bg-stone-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-[#0B3B24] h-full rounded-full" style="width: 73%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paket 3: Haji Khusus 2027 -->
        <div class="bg-white rounded-[32px] overflow-hidden shadow-sm border border-stone-200 flex flex-col justify-between">
            <div class="bg-amber-600 text-white p-6 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="bg-white text-amber-900 text-[10px] font-bold px-3 py-1 rounded-full uppercase">Haji</span>
                    <span class="bg-emerald-500/20 text-emerald-100 border border-emerald-400/40 text-[10px] font-bold px-2.5 py-0.5 rounded-full flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-300"></span> Aktif
                    </span>
                </div>
                <div>
                    <h3 class="text-lg font-bold font-serif">Haji Khusus 2027</h3>
                    <p class="text-white font-bold text-sm">Rp 217.000.000</p>
                </div>
            </div>
            <div class="p-6 space-y-4 flex-1 flex flex-col justify-between">
                <div class="flex flex-wrap gap-2 text-[11px] text-stone-500">
                    <span class="bg-stone-100 px-3 py-1 rounded-lg inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-base">timer</span> 
                        <span>9 Hari</span>
                    </span>
                    <span class="bg-stone-100 px-3 py-1 rounded-lg inline-flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-base">calendar_month</span> 
                        <span>14 Januari 2027</span>
                    </span>
                </div>
                <p class="text-xs text-stone-600 leading-relaxed font-serif">
                    Program haji khusus resmi Kemenag dengan tenda mina VIP, pembimbing ibadah.
                </p>
                <div class="flex flex-wrap gap-1.5 text-[10px]">
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Transportasi</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Konsumsi</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Hotel</span>
                    <span class="bg-[#F4EFE6] text-stone-700 px-2.5 py-1 rounded-md font-medium">Visa Umrah</span>
                </div>
                <div class="space-y-1.5 pt-2 border-t border-stone-100">
                    <div class="flex justify-between text-xs">
                        <span class="text-stone-500">👥 24/30 jamaah</span>
                        <strong class="text-[#0B3B24]">80%</strong>
                    </div>
                    <div class="w-full bg-stone-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-amber-600 h-full rounded-full" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<!-- Modal Overlay (Background Gelap Transparan) -->
<div id="modalTambahPaket" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-xs hidden p-4">
    
    <!-- Kontainer Modal Utama (overflow-hidden agar scrollbar tidak keluar dari sudut rounded-[32px]) -->
    <div class="bg-white rounded-[32px] w-full max-w-xl shadow-2xl border border-stone-200 relative max-h-[90vh] flex flex-col overflow-hidden">
        
        <!-- Tombol Close (X) di Kanan Atas -->
        <button onclick="closeModalTambahPaket()" class="absolute top-6 right-6 w-9 h-9 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-600 flex items-center justify-center font-bold text-sm transition cursor-pointer z-20">
            ✕
        </button>

        <!-- BAGIAN 1: HEADER & STEPPER (Fixed di atas, tidak ikut ter-scroll) -->
        <div class="p-6 sm:p-8 pb-4 space-y-6 shrink-0 border-b border-stone-100">
            <div class="space-y-1">
                <h2 class="text-xl sm:text-2xl font-[800] font-['Abhaya_Libre'] text-stone-900">Tambah Paket</h2>
                <p class="text-xs text-stone-500 font-sans">Lengkapi informasi paket haji atau umroh di bawah ini.</p>
            </div>

            <!-- Stepper Indicator (1 - 2 - 3) -->
            <div class="flex items-center justify-center relative px-8">
                <!-- Garis Penghubung Background -->
                <div class="absolute left-16 right-16 top-5 h-0.5 bg-stone-200 z-0"></div>

                <!-- Step 1 -->
                <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="switchStep(1)">
                    <div id="step-indicator-1" class="w-10 h-10 rounded-full bg-[#0B3B24] text-white font-[800] text-sm flex items-center justify-center shadow-xs transition">1</div>
                    <span class="text-[11px] font-[700] text-stone-800 mt-1 font-sans">Informasi Paket</span>
                </div>

                <div class="flex-1"></div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="switchStep(2)">
                    <div id="step-indicator-2" class="w-10 h-10 rounded-full bg-stone-200 text-stone-600 font-[800] text-sm flex items-center justify-center shadow-xs transition">2</div>
                    <span class="text-[11px] font-[700] text-stone-400 mt-1 font-sans" id="label-step-2">Jadwal</span>
                </div>

                <div class="flex-1"></div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center relative z-10 cursor-pointer" onclick="switchStep(3)">
                    <div id="step-indicator-3" class="w-10 h-10 rounded-full bg-stone-200 text-stone-600 font-[800] text-sm flex items-center justify-center shadow-xs transition">3</div>
                    <span class="text-[11px] font-[700] text-stone-400 mt-1 font-sans" id="label-step-3">Hotel</span>
                </div>
            </div>
        </div>

        <!-- BAGIAN 2: AREA KONTEN FORM (Hanya bagian ini yang memiliki scrollbar di dalam modal) -->
        <div class="p-6 sm:p-8 pt-6 overflow-y-auto flex-1">
            <form action="#" method="POST" class="space-y-6 text-xs font-sans">
                @csrf

                <!-- ================= TAHAP 1: INFORMASI PAKET ================= -->
                <div id="form-step-1" class="space-y-4">
                    <!-- Nama Paket -->
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Nama Paket</label>
                        <input type="text" placeholder="" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6] focus:outline-none focus:border-stone-400 transition">
                        <span class="text-[10px] text-rose-600 font-medium">Nama paket minimal 5 karakter</span>
                    </div>

                    <!-- Kategori Paket -->
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Kategori Paket</label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center justify-between px-4 py-3 rounded-2xl bg-[#C8E6C9]/40 border border-emerald-800 cursor-pointer">
                                <span class="font-bold text-stone-900">Umroh</span>
                                <input type="radio" name="kategori" checked class="accent-[#0B3B24]">
                            </label>
                            <label class="flex items-center justify-between px-4 py-3 rounded-2xl bg-white border border-stone-200 cursor-pointer hover:bg-stone-50">
                                <span class="font-medium text-stone-700">Haji</span>
                                <input type="radio" name="kategori" class="accent-[#0B3B24]">
                            </label>
                        </div>
                    </div>

                    <!-- Jenis Layanan -->
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Jenis Layanan</label>
                        <select class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6] focus:outline-none focus:border-stone-400 transition cursor-pointer">
                            <option>Haji Reguler/Plus/VIP / Umrah 12/9/15 hari</option>
                            <option>Umrah Reguler</option>
                            <option>Umrah Plus Turkey</option>
                        </select>
                    </div>

                    <!-- Deskripsi Paket -->
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Deskripsi Paket</label>
                        <textarea rows="3" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6] focus:outline-none focus:border-stone-400 transition resize-none"></textarea>
                    </div>

                    <!-- Status Paket -->
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Status Paket</label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center justify-between px-4 py-3 rounded-2xl bg-[#C8E6C9]/40 border border-emerald-800 cursor-pointer">
                                <span class="font-bold text-stone-900">Aktif</span>
                                <input type="radio" name="status" checked class="accent-[#0B3B24]">
                            </label>
                            <label class="flex items-center justify-between px-4 py-3 rounded-2xl bg-white border border-stone-200 cursor-pointer hover:bg-stone-50">
                                <span class="font-medium text-stone-700">Non Aktif</span>
                                <input type="radio" name="status" class="accent-[#0B3B24]">
                            </label>
                        </div>
                    </div>

                    <!-- Harga Paket -->
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Harga Paket</label>
                        <select class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6] focus:outline-none focus:border-stone-400 transition cursor-pointer">
                            <option>30.000.000</option>
                            <option>35.000.000</option>
                            <option>40.000.000</option>
                        </select>
                    </div>

                    <!-- Fasilitas Paket -->
                    <div class="space-y-2">
                        <label class="font-[700] text-stone-800 block">Fasilitas Paket</label>
                        <div class="flex items-center gap-2">
                            <input type="text" value="Transportasi ...." class="flex-1 px-4 py-2.5 rounded-2xl bg-white border border-stone-200 text-stone-800 shadow-[0_4px_0_0_#DFD7C6]">
                            <button type="button" class="w-10 h-10 rounded-2xl bg-[#0B3B24] text-white font-bold flex items-center justify-center shadow-xs cursor-pointer">+</button>
                        </div>
                        <!-- Badge Fasilitas -->
                        <div class="flex flex-wrap gap-2 pt-1">
                            <span class="inline-flex items-center gap-2 bg-[#C8E6C9]/60 border border-emerald-800 text-stone-900 px-3 py-1.5 rounded-full font-bold text-[11px]">
                                Pendamping <button type="button" class="text-stone-500 hover:text-stone-800">×</button>
                            </span>
                            <span class="inline-flex items-center gap-2 bg-[#C8E6C9]/60 border border-emerald-800 text-stone-900 px-3 py-1.5 rounded-full font-bold text-[11px]">
                                Konsumsi <button type="button" class="text-stone-500 hover:text-stone-800">×</button>
                            </span>
                            <span class="inline-flex items-center gap-2 bg-[#C8E6C9]/60 border border-emerald-800 text-stone-900 px-3 py-1.5 rounded-full font-bold text-[11px]">
                                Akomodasi Hotel <button type="button" class="text-stone-500 hover:text-stone-800">×</button>
                            </span>
                            <span class="inline-flex items-center gap-2 bg-[#C8E6C9]/60 border border-emerald-800 text-stone-900 px-3 py-1.5 rounded-full font-bold text-[11px]">
                                Asuransi <button type="button" class="text-stone-500 hover:text-stone-800">×</button>
                            </span>
                            <span class="inline-flex items-center gap-2 bg-[#C8E6C9]/60 border border-emerald-800 text-stone-900 px-3 py-1.5 rounded-full font-bold text-[11px]">
                                Tiket Pesawat <button type="button" class="text-stone-500 hover:text-stone-800">×</button>
                            </span>
                            <span class="inline-flex items-center gap-2 bg-[#C8E6C9]/60 border border-emerald-800 text-stone-900 px-3 py-1.5 rounded-full font-bold text-[11px]">
                                Perlengkapan Ibadah <button type="button" class="text-stone-500 hover:text-stone-800">×</button>
                            </span>
                        </div>
                    </div>

                    <!-- Gambar Utama -->
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Gambar Utama</label>
                        <div class="border-2 border-dashed border-stone-300 rounded-2xl p-6 text-center bg-stone-50 hover:bg-stone-100 transition cursor-pointer">
                            <div class="flex flex-col items-center justify-center space-y-2 text-stone-500">
                                <span class="material-symbols-outlined">cloud_upload</span>
                                <span class="text-[11px] font-bold">Pilih atau seret foto ke sini</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi Step 1 -->
                    <div class="flex items-center justify-between pt-4 border-t border-stone-100">
                        <button type="button" class="px-5 py-2.5 rounded-2xl bg-rose-700 text-white font-[700] hover:bg-rose-800 transition cursor-pointer shadow-[0_4px_0_0_#7f1d1d]">
                            Hapus Gambar
                        </button>
                        <div class="flex items-center gap-2">
                            <button type="button" class="px-5 py-2.5 rounded-2xl bg-[#0B3B24] text-white font-[700] hover:bg-emerald-900 transition cursor-pointer shadow-[0_4px_0_0_#051d12]">
                                Simpan Gambar
                            </button>
                            <button type="button" onclick="switchStep(2)" class="px-5 py-2.5 rounded-2xl bg-[#0B3B24] text-white font-[700] hover:bg-emerald-900 transition cursor-pointer shadow-[0_4px_0_0_#051d12] flex items-center gap-1">
                                Selanjutnya →
                            </button>
                        </div>
                    </div>
                </div>


                <!-- ================= TAHAP 2: JADWAL ================= -->
                <div id="form-step-2" class="space-y-4 hidden">
                    <h3 class="text-sm font-[800] text-stone-900 font-['Abhaya_Libre']">Daftar Jadwal</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="font-[700] text-stone-800 block">Tanggal Mulai</label>
                            <input type="date" value="2026-11-17" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                        </div>
                        <div class="space-y-1.5">
                            <label class="font-[700] text-stone-800 block">Tanggal Pulang</label>
                            <input type="date" value="2026-12-17" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="font-[700] text-stone-800 block">Maskapai</label>
                            <select class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                                <option>Lion Air</option>
                                <option>Saudia Airlines</option>
                                <option>Garuda Indonesia</option>
                            </select>
                        </div>
                        <div class="space-y-1.5">
                            <label class="font-[700] text-stone-800 block">Nomor Penerbangan</label>
                            <input type="text" value="LA 123" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Kuota</label>
                        <input type="number" value="20" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="px-5 py-2 rounded-xl bg-[#0B3B24] text-white font-bold text-[11px] shadow-xs">Simpan Gambar</button>
                    </div>

                    <!-- Tabel Ringkasan Jadwal -->
<div class="overflow-x-auto border border-stone-200 rounded-2xl">
    <table class="w-full text-left text-[11px]" id="tabelJadwal">
        <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 font-bold">
            <tr>
                <th class="py-2.5 px-3">Tanggal Mulai</th>
                <th class="py-2.5 px-3">Tanggal Pulang</th>
                <th class="py-2.5 px-3">Maskapai</th>
                <th class="py-2.5 px-3">No. Penerbangan</th>
                <th class="py-2.5 px-3">Kuota</th>
                <th class="py-2.5 px-3 text-right">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-stone-100 font-medium text-stone-800">
            <tr id="row-1">
                <td class="py-2 px-3 t-mulai">17/11/2026</td>
                <td class="py-2 px-3 t-pulang">17/12/2026</td>
                <td class="py-2 px-3 t-maskapai">Lion Air</td>
                <td class="py-2 px-3 t-penerbangan">LA 123</td>
                <td class="py-2 px-3 t-kuota">20</td>
                <td class="py-2 px-3 text-right space-x-1">
                    <button type="button" onclick="editJadwal('row-1')" class="p-1 hover:bg-stone-100 rounded transition cursor-pointer" title="Edit"><span class="material-symbols-outlined">edit</span></button>
                    <button type="button" onclick="hapusJadwal('row-1')" class="p-1 hover:bg-rose-50 rounded transition cursor-pointer" title="Hapus"><span class="material-symbols-outlined">delete</span></button>
                </td>
            </tr>
            <tr id="row-2">
                <td class="py-2 px-3 t-mulai">17/11/2026</td>
                <td class="py-2 px-3 t-pulang">17/12/2026</td>
                <td class="py-2 px-3 t-maskapai">Lion Air</td>
                <td class="py-2 px-3 t-penerbangan">LA 254</td>
                <td class="py-2 px-3 t-kuota">20</td>
                <td class="py-2 px-3 text-right space-x-1">
                    <button type="button" onclick="editJadwal('row-1')" class="p-1 hover:bg-stone-100 rounded transition cursor-pointer" title="Edit"><span class="material-symbols-outlined">edit</span></button>
                    <button type="button" onclick="hapusJadwal('row-1')" class="p-1 hover:bg-rose-50 rounded transition cursor-pointer" title="Hapus"><span class="material-symbols-outlined">delete</span></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

                    <!-- Tombol Aksi Step 2 -->
                    <div class="flex items-center justify-between pt-4 border-t border-stone-100">
                        <button type="button" onclick="switchStep(1)" class="px-5 py-2.5 rounded-2xl border border-stone-300 bg-stone-100 text-stone-700 font-[700] hover:bg-stone-200 transition cursor-pointer">
                            ← Sebelumnya
                        </button>
                        <button type="button" onclick="switchStep(3)" class="px-5 py-2.5 rounded-2xl bg-[#0B3B24] text-white font-[700] hover:bg-emerald-900 transition cursor-pointer shadow-[0_4px_0_0_#051d12] flex items-center gap-1">
                            Selanjutnya →
                        </button>
                    </div>
                </div>


                <!-- ================= TAHAP 3: HOTEL & HARGA ================= -->
                <div id="form-step-3" class="space-y-4 hidden">
                    <h3 class="text-sm font-[800] text-stone-900 font-['Abhaya_Libre']">Daftar Jadwal & Hotel</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="font-[700] text-stone-800 block">Hotel Madinah</label>
                            <select class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                                <option>Crowne Plaza</option>
                                <option>Ritz Madinah</option>
                            </select>
                            <div class="h-24 bg-stone-100 rounded-2xl overflow-hidden border border-stone-200 mt-2">
                                <div class="w-full h-full bg-stone-300 flex items-center justify-center text-xs text-stone-600 font-bold">Foto Hotel Madinah</div>
                            </div>
                        </div>

                        <div class="space-y-1.5">
                            <label class="font-[700] text-stone-800 block">Hotel Makkah</label>
                            <select class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                                <option>Sherraton</option>
                                <option>Fairmont Makkah</option>
                            </select>
                            <div class="h-24 bg-stone-100 rounded-2xl overflow-hidden border border-stone-200 mt-2">
                                <div class="w-full h-full bg-stone-300 flex items-center justify-center text-xs text-stone-600 font-bold">Foto Hotel Makkah</div>
                            </div>
                        </div>
                    </div>

                    <!-- Input Harga Quad, Triple, Double -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="space-y-3">
                            <div class="space-y-1">
                                <label class="font-[700] text-stone-800 block">Harga Quad</label>
                                <input type="text" value="25.000.000" class="w-full px-4 py-2.5 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-[700] text-stone-800 block">Harga Triple</label>
                                <input type="text" value="30.000.000" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-[700] text-stone-800 block">Harga Double</label>
                                <input type="text" value="35.000.000" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="space-y-1">
                                <label class="font-[700] text-stone-800 block">Harga Quad</label>
                                <input type="text" value="30.000.000" class="w-full px-4 py-2.5 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-[700] text-stone-800 block">Harga Triple</label>
                                <input type="text" value="35.000.000" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-[700] text-stone-800 block">Harga Double</label>
                                <input type="text" value="40.000.000" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium shadow-[0_4px_0_0_#DFD7C6]">
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi Step 3 -->
                    <div class="flex items-center justify-between pt-4 border-t border-stone-100">
                        <button type="button" onclick="switchStep(2)" class="px-5 py-2.5 rounded-2xl border border-stone-300 bg-stone-100 text-stone-700 font-[700] hover:bg-stone-200 transition cursor-pointer">
                            ← Sebelumnya
                        </button>
                        <button type="submit" class="px-7 py-3 rounded-2xl bg-[#0B3B24] hover:bg-emerald-900 text-white font-[700] transition cursor-pointer shadow-[0_4px_0_0_#051d12]">
                            Simpan 
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>

<!-- Script Interaktif untuk Membuka, Menutup, dan Berpindah Tahap (Step) -->
<script>
    function openModalTambahPaket() {
        document.getElementById('modalTambahPaket').classList.remove('hidden');
    }

    function closeModalTambahPaket() {
        document.getElementById('modalTambahPaket').classList.add('hidden');
    }

    function switchStep(step) {
        // Sembunyikan semua form step
        document.getElementById('form-step-1').classList.add('hidden');
        document.getElementById('form-step-2').classList.add('hidden');
        document.getElementById('form-step-3').classList.add('hidden');

        // Reset semua indikator
        ['1', '2', '3'].forEach(i => {
            let ind = document.getElementById('step-indicator-' + i);
            ind.className = 'w-10 h-10 rounded-full bg-stone-200 text-stone-600 font-[800] text-sm flex items-center justify-center shadow-xs transition';
        });

        // Tampilkan step yang dipilih dan aktifkan indikatornya
        document.getElementById('form-step-' + step).classList.remove('hidden');
        
        let activeInd = document.getElementById('step-indicator-' + step);
        activeInd.className = 'w-10 h-10 rounded-full bg-[#0B3B24] text-white font-[800] text-sm flex items-center justify-center shadow-xs transition';
    }
</script>
@endsection