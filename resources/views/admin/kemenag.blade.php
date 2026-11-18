@extends('layouts.admin')

@section('title', 'Verifikasi Dokumen - Admin ROZWIA')

@section('content')
<div x-data="{
        editKemenagOpen: false,
        selectedJamaah: 'Rinzani Kholifah',
        statusKemenag: 'Diproses',
        statusVisa: 'Belum Diajukan',
        nomorVisa: '',
        tanggalTerbit: ''
     }" 
     class="space-y-6 font-serif relative">
    
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-2">
        <h2 class="text-2xl font-bold text-[#0B3B24]">Status Surat Kemenag dan Visa</h2>
        <p class="text-xs text-stone-600 font-sans">Memantau proses surat Kemenag dan visa setiap jamaah, lalu perbarui statusnya secara langsung.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 font-serif">
        <div class="bg-white p-6 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Surat Kemenag Terbit</span>
            <h3 class="text-xl font-bold text-[#0B3B24]">18 Jamaah</h3>
        </div>
        <div class="bg-white p-6 rounded-[32px] border border-stone-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-stone-500">Visa Terbit</span>
            <h3 class="text-xl font-bold text-[#0B3B24]">14 Jamaah</h3>
        </div>
        <div class="bg-rose-50 p-6 rounded-[32px] border border-rose-200 shadow-sm space-y-1">
            <span class="text-xs font-bold uppercase tracking-wider text-rose-800">Perlu Tindakan</span>
            <h3 class="text-xl font-bold text-rose-950">4 Jamaah</h3>
        </div>
    </div>

    <!-- Tabel Pemantauan Dokumen Resmi (Lebar Penuh) -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4 font-sans">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-base font-bold text-[#0B3B24] font-serif">Daftar Pemantauan Dokumen Resmi</h3>
            <span class="text-xs bg-[#E5D3B3] text-[#0B3B24] font-bold px-3 py-1 rounded-full">Umrah Reguler • 10 Desember 2026</span>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-stone-200">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="bg-[#0B3B24] text-white">
                        <th class="p-3.5 font-semibold">Jamaah</th>
                        <th class="p-3.5 font-semibold">Paspor</th>
                        <th class="p-3.5 font-semibold">Surat Kemenag</th>
                        <th class="p-3.5 font-semibold">Visa</th>
                        <th class="p-3.5 font-semibold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-stone-700 font-serif">
                    <tr class="hover:bg-stone-50">
                        <td class="p-3.5 font-bold">Rinzani Kholifah</td>
                        <td class="p-3.5 font-sans"><span class="bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Diverifikasi</span></td>
                        <td class="p-3.5 font-sans"><span class="bg-amber-100 text-amber-900 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Diproses</span></td>
                        <td class="p-3.5 font-sans"><span class="bg-stone-100 text-stone-600 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Belum Diajukan</span></td>
                        <td class="p-3.5 text-center font-sans">
                            <button @click="editKemenagOpen = true; selectedJamaah = 'Rinzani Kholifah'; statusKemenag = 'Diproses'; statusVisa = 'Belum Diajukan';" 
                                    class="bg-[#E5D3B3] hover:bg-amber-300 text-[#0B3B24] px-3.5 py-1.5 rounded-full font-bold text-[11px] cursor-pointer transition shadow-xs">
                                Perbaharui
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-stone-50">
                        <td class="p-3.5 font-bold">Wildan Rafid</td>
                        <td class="p-3.5 font-sans"><span class="bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Diverifikasi</span></td>
                        <td class="p-3.5 font-sans"><span class="bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Terbit</span></td>
                        <td class="p-3.5 font-sans"><span class="bg-amber-100 text-amber-900 px-2.5 py-0.5 rounded-full text-[10px] font-bold">Diproses</span></td>
                        <td class="p-3.5 text-center font-sans">
                            <button @click="editKemenagOpen = true; selectedJamaah = 'Wildan Rafid'; statusKemenag = 'Terbit'; statusVisa = 'Diproses';" 
                                    class="bg-[#E5D3B3] hover:bg-amber-300 text-[#0B3B24] px-3.5 py-1.5 rounded-full font-bold text-[11px] cursor-pointer transition shadow-xs">
                                Perbaharui
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===================================================================== -->
    <!-- POP-UP MODAL: PERBAHARUI STATUS KEMENAG & VISA (SCROLL DI DALAM FORM) -->
    <!-- ===================================================================== -->
    <div x-show="editKemenagOpen" 
         style="display: none;" 
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-xs p-4">
        
        <!-- Kontainer Modal Utama (overflow-hidden agar scrollbar tidak keluar dari border radius 32px) -->
        <div @click.away="editKemenagOpen = false" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             class="bg-[#FAF8F5] rounded-[32px] w-full max-w-lg max-h-[85vh] flex flex-col shadow-2xl border border-stone-200 relative overflow-hidden my-auto font-serif">
            
            <!-- 1. Header Modal (Tetap Diam di Atas, Tidak Ikut Scroll) -->
            <div class="px-6 sm:px-8 pt-6 pb-4 bg-[#FAF8F5] border-b border-stone-200 flex items-center justify-between shrink-0">
                <div>
                    <h3 class="text-xl font-bold text-[#0B3B24]">Perbaharui Status</h3>
                    <p class="text-xs text-stone-600 font-sans mt-0.5">Jamaah: <strong class="text-[#0B3B24]" x-text="selectedJamaah"></strong></p>
                </div>
                <button @click="editKemenagOpen = false" class="w-8 h-8 rounded-full bg-stone-200 hover:bg-stone-300 text-stone-700 flex items-center justify-center font-bold text-sm transition cursor-pointer">✕</button>
            </div>

            <!-- 2. Area Form yang Bisa Di-scroll di Bagian Tengah Saja -->
            <div class="p-6 sm:p-8 space-y-4 overflow-y-auto flex-1 font-sans">
                
                <!-- Surat Kemenag -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold text-[#0B3B24]">Surat Kemenag</label>
                    <div class="grid grid-cols-2 gap-2 text-[11px]">
                        <template x-for="opt in ['Belum Diajukan', 'Diproses', 'Terbit', 'Ditolak']">
                            <button type="button" @click="statusKemenag = opt"
                                    :class="statusKemenag === opt ? 'bg-[#0B3B24] text-white font-bold' : 'bg-white text-stone-700 border border-stone-300 hover:bg-stone-50'"
                                    class="py-2.5 px-3 rounded-xl text-center transition cursor-pointer shadow-xs" x-text="opt"></button>
                        </template>
                    </div>
                </div>

                <!-- Visa -->
                <div class="space-y-2">
                    <label class="block text-xs font-bold text-[#0B3B24]">Visa</label>
                    <div class="grid grid-cols-2 gap-2 text-[11px]">
                        <template x-for="opt in ['Belum Diajukan', 'Diproses', 'Terbit', 'Ditolak']">
                            <button type="button" @click="statusVisa = opt"
                                    :class="statusVisa === opt ? 'bg-[#0B3B24] text-white font-bold' : 'bg-white text-stone-700 border border-stone-300 hover:bg-stone-50'"
                                    class="py-2.5 px-3 rounded-xl text-center transition cursor-pointer shadow-xs" x-text="opt"></button>
                        </template>
                    </div>
                </div>

                <!-- Input Nomor & Tanggal -->
                <div class="space-y-3 pt-1">
                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-[#0B3B24]">Nomor Visa</label>
                        <input type="text" x-model="nomorVisa" placeholder="Contoh: VSA-9928102" class="w-full px-4 py-2.5 rounded-xl bg-white border border-stone-300 text-xs focus:outline-none focus:border-[#0B3B24]">
                    </div>
                    <div class="space-y-1">
                        <label class="block text-xs font-bold text-[#0B3B24]">Tanggal Terbit</label>
                        <input type="date" x-model="tanggalTerbit" class="w-full px-4 py-2.5 rounded-xl bg-white border border-stone-300 text-xs focus:outline-none focus:border-[#0B3B24]">
                    </div>
                </div>

            </div>

            <!-- 3. Tombol Aksi di Bawah (Tetap Diam, Tidak Ikut Scroll) -->
            <div class="px-6 sm:px-8 py-4 bg-[#FAF8F5] border-t border-stone-200 flex items-center justify-end gap-3 shrink-0 font-sans">
                <button type="button" @click="editKemenagOpen = false" 
                        class="px-5 py-2.5 rounded-xl bg-white border border-stone-300 text-stone-700 font-bold text-xs hover:bg-stone-100 transition cursor-pointer">
                    Batal
                </button>
                <button @click="alert('Status untuk ' + selectedJamaah + ' berhasil disimpan!'); editKemenagOpen = false;" 
                        class="px-6 py-2.5 bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold rounded-xl text-xs transition cursor-pointer shadow-md">
                    Simpan Perubahan
                </button>
            </div>

        </div>
    </div>

</div>
@endsection