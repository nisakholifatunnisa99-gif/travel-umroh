@extends('layouts.dashboard')

@section('title', 'Profil Jamaah - ROZWIA Islamic Travel')

@section('content')
    <!-- Header Sambutan & Lonceng Notifikasi -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl sm:text-3xl font-[800] text-stone-900 font-['Abhaya_Libre']">
                Profile Jamaah
            </h1>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-white border border-stone-200 shadow-xs flex items-center justify-center text-amber-600 text-xl cursor-pointer hover:bg-stone-50 transition relative">
            
            <span class="material-symbols-outlined">notifications</span>
        </div>
    </div>

    <!-- Kotak Konten Utama Profil -->
    <div class="bg-white rounded-[32px] p-6 sm:p-8 border border-stone-200 shadow-sm space-y-6">
        
        <!-- Tombol Tambah Anggota Jamaah Baru -->
        <div>
            <button onclick="alert('Membuka form tambah anggota jamaah...')" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-[700] text-xs px-5 py-3 rounded-2xl flex items-center gap-2 transition shadow-sm cursor-pointer">
                <span class="material-symbols-outlined">add</span> Tambah Anggota Jamaah Baru
            </button>
        </div>

        <!-- Kartu Informasi Keluarga -->
        <div class="bg-stone-50/80 border border-stone-200/80 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-[#E5D3B3] text-stone-900 font-[800] text-lg flex items-center justify-center shadow-xs shrink-0 font-['Abhaya_Libre']">
                    KF
                </div>
                <div class="space-y-1">
                    <div class="flex items-center gap-2.5 flex-wrap">
                        <h3 class="text-base sm:text-lg font-[800] text-stone-900 font-['Abhaya_Libre']">Keluarga Rinzani Fauziah</h3>
                        <span class="bg-amber-100 text-amber-900 font-[700] text-[10px] px-2.5 py-0.5 rounded-full">1 Akun • 3 Jamaah</span>
                    </div>
                    <p class="text-xs text-stone-500 font-sans">
                        Kode Registrasi Keluarga: <strong class="text-stone-800">ROZ-FAM-2026-8891</strong> • Terdaftar untuk Umrah Reguler Barakah 12 Hari
                    </p>
                </div>
            </div>

            <div class="bg-white border border-stone-200 rounded-2xl px-5 py-3 text-center shrink-0 shadow-xs">
                <span class="text-[10px] uppercase tracking-wider text-stone-400 block font-sans font-bold">Alokasi Kamar</span>
                <strong class="text-sm font-[800] text-stone-900 font-['Abhaya_Libre']">Quad</strong>
            </div>
        </div>

        <!-- Bagian Daftar Anggota Jamaah Terdaftar -->
        <div class="space-y-4 pt-2">
            <div class="flex justify-between items-center">
                <h4 class="text-sm font-[800] text-stone-900 font-['Abhaya_Libre']">Daftar Anggota Jamaah Terdaftar</h4>
                <span class="text-xs text-stone-500 font-sans">Menampilkan 3 dari 3 Jamaah</span>
            </div>

            <!-- Grid 3 Kartu Anggota Jamaah -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- KARTU 1: Rinzani Fauziah (Penanggung Jawab Akun - Border Hijau) -->
                <div class="bg-white rounded-[28px] p-6 border-2 border-[#0B3B24] shadow-sm flex flex-col justify-between space-y-6 relative">
                    <div class="space-y-4">
                        <!-- Header Kartu -->
                        <div class="flex justify-between items-center border-b border-stone-100 pb-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#0B3B24] text-amber-300 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre'] shadow-xs">
                                    RF
                                </div>
                                <span class="text-xs font-[800] text-stone-900 font-['Abhaya_Libre']">Rinzani Fauziah</span>
                            </div>
                            <span class="bg-stone-100 text-stone-700 font-[700] text-[9px] px-2.5 py-1 rounded-md uppercase tracking-wider">
                                Penanggung Jawab Akun
                            </span>
                        </div>

                        <!-- Detail Data -->
                        <div class="space-y-2.5 text-xs font-sans">
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor KTP (NIK):</span>
                                <strong class="text-stone-800 font-mono">32567889393938</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor Paspor:</span>
                                <strong class="text-stone-800 font-mono">C9821445 (Exp : 2032)</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor WhatsApp:</span>
                                <strong class="text-stone-800 font-mono">0821315141</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Email:</span>
                                <strong class="text-stone-800 font-sans">rinzani@gmail.com</strong>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t border-stone-100">
                                <span class="text-stone-500 text-[11px] font-bold">Status Berkas:</span>
                                <span class="bg-rose-100 text-rose-700 font-[700] text-[10px] px-2.5 py-0.5 rounded-full">
                                    1 Perlu Revisi
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi Bawah -->
                    <div class="grid grid-cols-2 gap-2 pt-2">
                        <button onclick="alert('Ubah data Rinzani')" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-[700] py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 font-sans">
                            <span class="material-symbols-outlined">edit</span> Ubah Data
                        </button>
                        <button onclick="alert('Melihat berkas Rinzani')" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-[700] py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 font-sans">
                            <span class="material-symbols-outlined">folder</span> Berkas
                        </button>
                    </div>
                </div>

                <!-- KARTU 2: Ahmad Hidayatullah -->
                <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <!-- Header Kartu -->
                        <div class="flex justify-between items-center border-b border-stone-100 pb-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre'] shadow-xs">
                                    AH
                                </div>
                                <span class="text-xs font-[800] text-stone-900 font-['Abhaya_Libre']">Ahmad Hidayatullah</span>
                            </div>
                        </div>

                        <!-- Detail Data -->
                        <div class="space-y-2.5 text-xs font-sans">
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor KTP (NIK):</span>
                                <strong class="text-stone-800 font-mono">3232939239239329</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor Paspor:</span>
                                <strong class="text-stone-800 font-mono">C9821145 (Exp : 2032)</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor WhatsApp:</span>
                                <strong class="text-stone-800 font-mono">081987653</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Email:</span>
                                <strong class="text-stone-800 font-sans">hidayat@gmail.com</strong>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t border-stone-100">
                                <span class="text-stone-500 text-[11px] font-bold">Status Berkas:</span>
                                <span class="bg-rose-100 text-rose-700 font-[700] text-[10px] px-2.5 py-0.5 rounded-full">
                                    1 Perlu Revisi
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi Bawah -->
                    <div class="grid grid-cols-2 gap-2 pt-2">
                        <button onclick="alert('Ubah data Ahmad')" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-[700] py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 font-sans">
                            <span class="material-symbols-outlined">edit</span> Ubah Data
                        </button>
                        <button onclick="alert('Melihat berkas Ahmad')" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-[700] py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 font-sans">
                            <span class="material-symbols-outlined">folder</span> Berkas
                        </button>
                    </div>
                </div>

                <!-- KARTU 3: Nabila Resya -->
                <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <!-- Header Kartu -->
                        <div class="flex justify-between items-center border-b border-stone-100 pb-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-stone-200 text-stone-800 font-[800] flex items-center justify-center text-xs font-['Abhaya_Libre'] shadow-xs">
                                    NR
                                </div>
                                <span class="text-xs font-[800] text-stone-900 font-['Abhaya_Libre']">Nabila Resya</span>
                            </div>
                        </div>

                        <!-- Detail Data -->
                        <div class="space-y-2.5 text-xs font-sans">
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor KTP (NIK):</span>
                                <strong class="text-stone-800 font-mono">019090902901902</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor Paspor:</span>
                                <strong class="text-stone-800 font-mono">726736 ( Exp : 2032 )</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Nomor WhatsApp:</span>
                                <strong class="text-stone-800 font-mono">0819234132</strong>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-stone-400 text-[11px]">Email:</span>
                                <strong class="text-stone-800 font-sans">nabila@gmail.com</strong>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t border-stone-100">
                                <span class="text-stone-500 text-[11px] font-bold">Status Berkas:</span>
                                <span class="bg-rose-100 text-rose-700 font-[700] text-[10px] px-2.5 py-0.5 rounded-full">
                                    1 Perlu Revisi
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi Bawah -->
                    <div class="grid grid-cols-2 gap-2 pt-2">
                        <button onclick="alert('Ubah data Nabila')" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-[700] py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 font-sans">
                            <span class="material-symbols-outlined">edit</span> Ubah Data
                        </button>
                        <button onclick="alert('Melihat berkas Nabila')" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-[700] py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 font-sans">
                            <span class="material-symbols-outlined">folder</span> Berkas
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection