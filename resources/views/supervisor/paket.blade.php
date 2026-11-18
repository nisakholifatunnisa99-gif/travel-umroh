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
        <button @click="openModal = true" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold text-xs py-3 px-6 rounded-full transition cursor-pointer font-sans shadow-md flex items-center gap-2">
            <span>Tambah Paket</span>
            <span class="w-4 h-4 rounded border border-white/60 flex items-center justify-center text-[10px]">+</span>
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

    <!-- ===================================================================== -->
    <!-- POP-UP MODAL: TAMBAH PAKET BARU (DIREVISI POSISI & SCROLLBARNYA)      -->
    <!-- ===================================================================== -->
    <div x-show="openModal" 
         style="display: none;" 
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-xs p-4">
        
        <!-- Kontainer Modal Utama dengan Sudut Membulat 32px & Overflow Hidden -->
        <div @click.away="openModal = false" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="bg-[#FAF8F5] rounded-[32px] w-full max-w-xl max-h-[85vh] flex flex-col shadow-2xl border border-stone-200 relative overflow-hidden my-auto">

            <!-- 1. Header Modal (Tetap di atas, tidak ikut scroll) -->
            <div class="px-6 sm:px-8 pt-6 pb-4 bg-[#FAF8F5] border-b border-stone-200 flex justify-between items-center shrink-0">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-stone-900 font-serif">Tambah Paket Baru</h2>
                    <p class="text-xs text-stone-600 mt-0.5">Isi detail paket perjalanan Haji atau Umrah</p>
                </div>
                <button @click="openModal = false" class="w-8 h-8 rounded-full bg-stone-200 hover:bg-stone-300 text-stone-700 flex items-center justify-center font-bold text-sm transition cursor-pointer">
                    &times;
                </button>
            </div>

            <!-- 2. Area Form yang bisa di-scroll di bagian tengah -->
            <form action="#" method="POST" @submit.prevent="alert('Paket berhasil ditambahkan!'); openModal = false;" class="p-6 sm:p-8 space-y-4 font-serif overflow-y-auto flex-1">
                @csrf

                <!-- Kategori (Umrah / Haji) -->
                <div class="space-y-1.5">
                    <label class="block text-sm font-bold text-stone-800">Kategori</label>
                    <div class="grid grid-cols-2 gap-3">
                        <!-- Pilihan Umrah -->
                        <div @click="kategori = 'Umrah'" 
                             :class="kategori === 'Umrah' ? 'bg-[#A7D7A9] border-[#0B3B24]' : 'bg-white border-stone-300 hover:bg-stone-50'"
                             class="border-2 rounded-2xl p-3.5 cursor-pointer transition flex items-center justify-between">
                            <div>
                                <span class="block text-base font-bold text-[#0B3B24]">Umrah</span>
                                <span class="block text-[11px] text-stone-700 font-sans">Reguler/Plus/Ramadhan</span>
                            </div>
                            <div x-show="kategori === 'Umrah'" class="w-6 h-6 rounded-full bg-[#0B3B24] text-white flex items-center justify-center text-xs">
                                ✓
                            </div>
                        </div>

                        <!-- Pilihan Haji -->
                        <div @click="kategori = 'Haji'" 
                             :class="kategori === 'Haji' ? 'bg-[#A7D7A9] border-[#0B3B24]' : 'bg-white border-stone-300 hover:bg-stone-50'"
                             class="border-2 rounded-2xl p-3.5 cursor-pointer transition flex items-center justify-between">
                            <div>
                                <span class="block text-base font-bold text-[#0B3B24]">Haji</span>
                                <span class="block text-[11px] text-stone-700 font-sans">Haji Khusus/Furoda</span>
                            </div>
                            <div x-show="kategori === 'Haji'" class="w-6 h-6 rounded-full bg-[#0B3B24] text-white flex items-center justify-center text-xs">
                                ✓
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="kategori" :value="kategori">
                </div>

                <!-- Nama Paket -->
                <div class="space-y-1">
                    <label class="block text-sm font-bold text-stone-800">Nama Paket</label>
                    <input type="text" name="nama_paket" required minlength="5" placeholder="Contoh: Umrah Plus Mei 12 Hari" 
                           class="w-full px-4 py-2.5 rounded-xl bg-white border-2 border-stone-300 text-sm font-sans focus:outline-none focus:border-[#0B3B24]">
                    <span class="block text-[11px] text-red-600 font-medium">Nama paket minimal 5 karakter</span>
                </div>

                <!-- Harga Paket & Durasi -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1">
                        <label class="block text-sm font-bold text-stone-800">Harga Paket(Rp)</label>
                        <input type="number" name="harga" value="35000000" min="1000000" required 
                               class="w-full px-4 py-2.5 rounded-xl bg-white border-2 border-stone-300 text-sm font-sans focus:outline-none focus:border-[#0B3B24]">
                        <span class="block text-[11px] text-red-600 font-medium">Harga minimal Rp 1.000.000</span>
                    </div>

                    <div class="space-y-1">
                        <label class="block text-sm font-bold text-stone-800">Durasi(hari)</label>
                        <input type="number" name="durasi" value="9" min="1" required 
                               class="w-full px-4 py-2.5 rounded-xl bg-white border-2 border-stone-300 text-sm font-sans focus:outline-none focus:border-[#0B3B24]">
                        <span class="block text-[11px] text-red-600 font-medium">Durasi minimal 1 hari</span>
                    </div>
                </div>

                <!-- Fasilitas (Multi-select Pills) -->
                <div class="space-y-1.5">
                    <label class="block text-sm font-bold text-stone-800">Fasilitas</label>
                    <div class="flex flex-wrap gap-2">
                        <template x-for="fasilitas in ['Tiket Pesawat', 'Akomodasi Hotel', 'Perlengkapan Ibadah', 'Konsumsi', 'Pendamping', 'Asuransi', 'Transportasi', 'Air Zamzam']">
                            <button type="button" 
                                    @click="toggleFasilitas(fasilitas)"
                                    :class="selectedFasilitas.includes(fasilitas) ? 'bg-[#0B3B24] text-white border-[#0B3B24]' : 'bg-white text-stone-800 border-stone-300 hover:bg-stone-50'"
                                    class="px-3.5 py-1.5 rounded-xl border-2 text-xs font-bold transition cursor-pointer"
                                    x-text="fasilitas">
                            </button>
                        </template>
                    </div>
                    <span class="block text-[11px] text-red-600 font-medium">Pilih minimal 1 pilihan</span>
                </div>

                <!-- Deskripsi Paket -->
                <div class="space-y-1">
                    <label class="block text-sm font-bold text-stone-800">Deskripsi Paket</label>
                    <textarea name="deskripsi" rows="2" minlength="20" required placeholder="Tuliskan deskripsi lengkap perjalanan paket..."
                              class="w-full px-4 py-2.5 rounded-xl bg-white border-2 border-stone-300 text-sm font-sans focus:outline-none focus:border-[#0B3B24]"></textarea>
                    <span class="block text-[11px] text-red-600 font-medium">Minimal 20 Karakter</span>
                </div>

                <!-- Status Paket -->
                <div class="space-y-1">
                    <label class="block text-sm font-bold text-stone-800">Status Paket</label>
                    <div class="relative w-full sm:w-2/3">
                        <select name="status" class="w-full appearance-none px-4 py-2.5 rounded-xl bg-white border-2 border-stone-300 text-sm font-serif focus:outline-none focus:border-[#0B3B24] pr-10">
                            <option value="aktif">Aktif -- dapat dipesan</option>
                            <option value="draft">Draft -- belum dipublikasi</option>
                            <option value="nonaktif">Nonaktif -- kuota penuh / selesai</option>
                        </select>
                        <span class="absolute right-3.5 top-3 text-stone-600 pointer-events-none text-xs">▼</span>
                    </div>
                </div>

                <!-- 3. Tombol Aksi (Batal & Simpan di bagian bawah dalam form yang bisa di-scroll) -->
                <div class="flex items-center justify-end gap-3 pt-4 border-t border-stone-200 mt-6">
                    <button type="button" @click="openModal = false" 
                            class="px-6 py-2.5 rounded-xl bg-white border-2 border-stone-400 text-stone-900 font-bold text-xs hover:bg-stone-100 transition cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-7 py-2.5 rounded-xl bg-[#0B3B24] hover:bg-emerald-900 text-white border-2 border-[#0B3B24] font-bold text-xs transition cursor-pointer shadow-md">
                        Simpan
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection