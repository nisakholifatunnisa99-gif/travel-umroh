@extends('layouts.admin')

@section('title', 'Verifikasi Dokumen - Admin ROZWIA')

@section('content')
<div x-data="{
        editHotelMode: null,
        maskapai: 'Garuda Indonesia',
        noPenerbangan: 'GA-902',
        tglPenerbangan: '2027-01-15',
        statusPerjalanan: 'Siap Berangkat',
        hotelMakkah: 'Sheraton Makkah',
        hotelMadinah: 'Crowne Plaza Madinah',
        selectedJamaahManifest: 'Rinzani Kholifah',
        kamarJamaah: 'Kamar 301',
        busJamaah: 'Bus 1'
     }"
     class="space-y-6 font-serif">
    
    <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="space-y-1">
            <h2 class="text-2xl font-bold text-[#0B3B24]">Administrasi Hotel dan Pesawat</h2>
            <p class="text-xs text-stone-600 font-sans">Kelola data penerbangan, hotel, serta pembagian kamar dan bus untuk setiap keberangkatan.</p>
        </div>
        <div class="bg-[#E5D3B3] text-[#0B3B24] px-4 py-2 rounded-2xl text-xs font-bold font-sans">
            Umrah Reguler • 10 Desember 2026
        </div>
    </div>

    <!-- Grid Utama: Konten Kiri & Form Kanan -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start font-sans">
        
        <!-- Kolom Kiri -->
        <div :class="editHotelMode ? 'lg:col-span-8' : 'lg:col-span-12'" class="space-y-6 transition-all duration-300">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kartu Penerbangan -->
                <div class="bg-white rounded-[32px] p-6 shadow-sm border border-stone-200 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <h3 class="font-bold text-[#0B3B24] text-base font-serif">Penerbangan</h3>
                        <div class="space-y-2 text-xs text-stone-600 divide-y divide-stone-100">
                            <div class="flex justify-between py-1"><span>Maskapai</span><strong class="text-stone-900" x-text="maskapai"></strong></div>
                            <div class="flex justify-between py-1"><span>Nomor Penerbangan</span><strong class="text-stone-900" x-text="noPenerbangan"></strong></div>
                            <div class="flex justify-between py-1"><span>Tanggal Penerbangan</span><strong class="text-stone-900" x-text="tglPenerbangan"></strong></div>
                            <div class="flex justify-between py-1"><span>Status Perjalanan</span><strong class="text-emerald-700" x-text="statusPerjalanan"></strong></div>
                        </div>
                    </div>
                    <button @click="editHotelMode = 'penerbangan'" class="w-full border border-[#0B3B24] text-[#0B3B24] hover:bg-[#0B3B24] hover:text-white px-4 py-2.5 rounded-full text-xs font-bold cursor-pointer transition">
                        Perbaharui Data Penerbangan
                    </button>
                </div>

                <!-- Kartu Hotel -->
                <div class="bg-white rounded-[32px] p-6 shadow-sm border border-stone-200 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <h3 class="font-bold text-[#0B3B24] text-base font-serif">Hotel</h3>
                        <div class="space-y-2.5 text-xs">
                            <div class="bg-[#E5D3B3]/40 p-3 rounded-2xl border border-[#E5D3B3]">
                                <div class="flex justify-between items-center">
                                    <strong class="text-[#0B3B24] text-sm font-serif" x-text="hotelMakkah"></strong>
                                    <span class="text-[10px] text-amber-700 font-bold">⭐⭐⭐⭐⭐</span>
                                </div>
                                <p class="text-[11px] text-stone-600 mt-0.5">Lokasi: Makkah</p>
                            </div>
                            <div class="bg-[#E5D3B3]/40 p-3 rounded-2xl border border-[#E5D3B3]">
                                <div class="flex justify-between items-center">
                                    <strong class="text-[#0B3B24] text-sm font-serif" x-text="hotelMadinah"></strong>
                                    <span class="text-[10px] text-amber-700 font-bold">⭐⭐⭐⭐⭐</span>
                                </div>
                                <p class="text-[11px] text-stone-600 mt-0.5">Lokasi: Madinah</p>
                            </div>
                        </div>
                    </div>
                    <button @click="editHotelMode = 'hotel'" class="w-full border border-[#0B3B24] text-[#0B3B24] hover:bg-[#0B3B24] hover:text-white px-4 py-2.5 rounded-full text-xs font-bold cursor-pointer transition">
                        Perbaharui Data Hotel
                    </button>
                </div>
            </div>

            <!-- Tabel Pembagian Kamar dan Bus -->
            <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-bold text-[#0B3B24] font-serif">Pembagian Kamar dan Bus</h3>
                    <button @click="alert('Seluruh perubahan manifest berhasil disimpan!')" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold px-4 py-2 rounded-full text-xs cursor-pointer transition">
                        Simpan Manifest
                    </button>
                </div>
                <div class="overflow-x-auto rounded-2xl border border-stone-200">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="bg-[#0B3B24] text-white">
                                <th class="p-3.5 font-semibold">Jamaah</th>
                                <th class="p-3.5 font-semibold">Tipe Kamar</th>
                                <th class="p-3.5 font-semibold">Kamar</th>
                                <th class="p-3.5 font-semibold">Bus</th>
                                <th class="p-3.5 font-semibold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-200 text-stone-700">
                            <tr class="hover:bg-stone-50">
                                <td class="p-3.5 font-bold">Rinzani Kholifah</td>
                                <td class="p-3.5">Double</td>
                                <td class="p-3.5"><span class="bg-[#E5D3B3] text-[#0B3B24] font-bold px-3 py-1 rounded-full" x-text="kamarJamaah"></span></td>
                                <td class="p-3.5"><span class="bg-[#E5D3B3] text-[#0B3B24] font-bold px-3 py-1 rounded-full" x-text="busJamaah"></span></td>
                                <td class="p-3.5 text-center">
                                    <button @click="editHotelMode = 'manifest'; selectedJamaahManifest = 'Rinzani Kholifah';" 
                                            class="bg-[#E5D3B3] hover:bg-amber-300 text-[#0B3B24] px-3.5 py-1.5 rounded-full font-bold text-[11px] cursor-pointer transition">
                                        Perbaharui
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <!-- Panel Kanan: Form Perbaharui -->
        <div x-show="editHotelMode !== null" x-transition.opacity.duration.300ms style="display: none;" class="lg:col-span-4 bg-white rounded-[32px] p-6 shadow-md border border-stone-200 space-y-5">
            
            <div class="flex items-center justify-between border-b border-stone-100 pb-3">
                <h3 class="text-lg font-bold text-[#0B3B24] font-serif">
                    <span x-show="editHotelMode === 'penerbangan'">Perbaharui Penerbangan</span>
                    <span x-show="editHotelMode === 'hotel'">Perbaharui Hotel</span>
                    <span x-show="editHotelMode === 'manifest'">Perbaharui Kamar & Bus</span>
                </h3>
                <button @click="editHotelMode = null" class="text-stone-400 hover:text-stone-700 font-bold text-sm cursor-pointer">✕</button>
            </div>

            <!-- FORM 1 -->
            <div x-show="editHotelMode === 'penerbangan'" class="space-y-3 text-xs">
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Maskapai</label>
                    <input type="text" x-model="maskapai" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Nomor Penerbangan</label>
                    <input type="text" x-model="noPenerbangan" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Tanggal Penerbangan</label>
                    <input type="date" x-model="tglPenerbangan" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Status Perjalanan</label>
                    <select x-model="statusPerjalanan" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                        <option value="Siap Berangkat">Siap Berangkat</option>
                        <option value="Menunggu Jadwal">Menunggu Jadwal</option>
                    </select>
                </div>
                <button @click="alert('Data penerbangan diperbarui!'); editHotelMode = null;" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold py-3 rounded-full mt-2 transition cursor-pointer">
                    Simpan Perubahan
                </button>
            </div>

            <!-- FORM 2 -->
            <div x-show="editHotelMode === 'hotel'" class="space-y-3 text-xs">
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Hotel Makkah</label>
                    <input type="text" x-model="hotelMakkah" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Hotel Madinah</label>
                    <input type="text" x-model="hotelMadinah" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <button @click="alert('Data hotel diperbarui!'); editHotelMode = null;" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold py-3 rounded-full mt-2 transition cursor-pointer">
                    Simpan Perubahan
                </button>
            </div>

            <!-- FORM 3 -->
            <div x-show="editHotelMode === 'manifest'" class="space-y-3 text-xs">
                <p class="text-stone-600">Jamaah: <strong class="text-[#0B3B24]" x-text="selectedJamaahManifest"></strong></p>
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Nomor Kamar</label>
                    <input type="text" x-model="kamarJamaah" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <div class="space-y-1">
                    <label class="font-bold text-[#0B3B24]">Nomor Bus</label>
                    <input type="text" x-model="busJamaah" class="w-full px-3.5 py-2.5 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <button @click="alert('Pembagian kamar & bus diperbarui!'); editHotelMode = null;" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold py-3 rounded-full mt-2 transition cursor-pointer">
                    Simpan Perubahan
                </button>
            </div>

        </div>

    </div>
</div>
@endsection