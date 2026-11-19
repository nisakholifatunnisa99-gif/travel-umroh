@extends('layouts.supervisor')

@section('title', 'Profile Perusahaan - Supervisor ROZWIA')

@section('content')
<div class="space-y-6">
    
    <!-- Header Card: Profile Perusahaan (Background Putih Bersih dengan Border Tipis) -->
    <div class="bg-white/80 backdrop-blur-md border border-stone-200/80 rounded-[32px] p-6 sm:p-7 shadow-xs flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div class="space-y-1">
            <h1 class="text-2xl sm:text-3xl font-[800] font-['Abhaya_Libre'] text-stone-900">
                Profile Perusahaan
            </h1>
            <p class="text-xs sm:text-sm text-stone-500 font-sans">
                Kelola Identitas Perusahaan Travel
            </p>
        </div>

        <!-- Profil Supervisor Kanan Atas -->
        <div class="flex items-center gap-4 ml-auto">
            <div class="w-12 h-12 rounded-2xl bg-white border border-stone-200 shadow-xs flex items-center justify-center text-stone-600 text-xl cursor-pointer hover:bg-stone-50 transition relative">
                <span class="material-symbols-outlined">notifications</span>
            </div>
            <div class="bg-white border border-stone-200 rounded-full py-2 px-4 flex items-center gap-3 shadow-xs">
                <div class="w-9 h-9 rounded-full bg-stone-200 text-stone-800 font-bold flex items-center justify-center text-sm">
                    <span class="material-symbols-outlined">person</span>
                </div>
                <div class="leading-tight">
                    <strong class="block text-xs font-[800] text-stone-900">Rinzani</strong>
                    <span class="text-[10px] text-stone-500 font-sans">Supervisor</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid Konten Utama -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- KOLOM KIRI: Logo, Glow Emerald, & Detail Kontak -->
        <div class="lg:col-span-5 space-y-6 relative">
            
            <!-- Elemen Lingkaran Glow Emerald di Belakang Teks -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-0">
                <div class="w-80 h-150 bg-[#0B3B24]/40 rounded-full blur-3xl"></div>
            </div>

            <!-- Kartu Identitas Utama -->
            <div class="relative z-10 text-center flex flex-col items-center space-y-4 py-12 px-6">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('img/logo-rozwia.png') }}" alt="Logo Rozwia" class="w-24 h-24 object-contain drop-shadow-md">
                </div>
                
                <div class="space-y-1">
                    <h2 class="text-3xl font-[800] font-['Abhaya_Libre'] text-stone-900">Rozwia Islamic Travel</h2>
                    <p class="text-xs text-stone-700 font-sans font-medium">Penyelenggara Umroh dan Haji Resmi</p>
                </div>
                
                <div class="bg-white/90 backdrop-blur-xs border border-stone-200/80 text-stone-900 text-xs font-[700] px-5 py-2 rounded-full shadow-xs font-sans">
                    PPIU No. 1023/2021
                </div>
            </div>

            <!-- KARTU DETAIL KONTAK (Email, Telepon SVG WhatsApp, & Alamat) -->
            <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4 text-xs relative z-10 font-sans">
                
                <!-- Email -->
                <div class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-amber-600">mail</span>
                    <div>
                        <span class="text-stone-400 block text-[10px] font-bold uppercase tracking-wider">Email</span>
                        <span class="font-bold text-[#0B3B24]">Rozwia@gmail.com</span>
                    </div>
                </div>

                <!-- Telepon (Menggunakan SVG WhatsApp) -->
                <div class="flex items-start gap-3 pt-3 border-t border-stone-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 258" class="shrink-0">
                        <path d="M0 0h256v258H0z" fill="none" />
                        <defs>
                            <linearGradient id="SVGK3KZq49U" x1="50%" x2="50%" y1="100%" y2="0%">
                                <stop offset="0%" stop-color="#1faf38" />
                                <stop offset="100%" stop-color="#60d669" />
                            </linearGradient>
                            <linearGradient id="SVGefMkoEOd" x1="50%" x2="50%" y1="100%" y2="0%">
                                <stop offset="0%" stop-color="#f9f9f9" />
                                <stop offset="100%" stop-color="#fff" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#SVGK3KZq49U)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                        <path fill="url(#SVGefMkoEOd)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
                        <path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                    </svg>
                    <div>
                        <span class="text-stone-400 block text-[10px] font-bold uppercase tracking-wider">Telepon</span>
                        <span class="font-bold text-[#0B3B24]">0895-1882-9438</span>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="flex items-start gap-3 pt-3 border-t border-stone-100">
                    <span class="material-symbols-outlined text-rose-600">location_on</span>
                    <div>
                        <span class="text-stone-400 block text-[10px] font-bold uppercase tracking-wider">Alamat</span>
                        <p class="font-bold text-[#0B3B24] leading-relaxed mt-0.5">
                            Kantor Pusat:<br>Graha Kartika Pratama Blok F2 Nomor 11 Kelurahan Bojong Baru Kecamatan Bojong Gede Kabupaten Bogor Jawa Barat
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- KOLOM KANAN: Form dengan Hover #DFD7C6 -->
        <div class="lg:col-span-7 bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6">
            
            <div class="space-y-1 border-b border-stone-100 pb-4">
                <h3 class="text-lg font-[800] font-['Abhaya_Libre'] text-stone-900">Identitas Perusahaan</h3>
                <p class="text-xs text-stone-500 font-sans">Informasi ini tampil pada sidebar, laporan, dan dokumen jamaah.</p>
            </div>

            <form action="#" method="POST" class="space-y-4 text-xs font-sans">
                @csrf
                
                <!-- Nama Perusahaan -->
                <div class="space-y-1.5">
                    <label class="font-[700] text-stone-800 block">Nama Perusahaan</label>
                    <input type="text" value="Rozwia Islamic Travel" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium hover:bg-[#DFD7C6]/30 focus:bg-[#DFD7C6]/40 focus:outline-none focus:border-stone-400 transition shadow-xs">
                </div>

                <!-- Slogan & Nomor Izin -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Slogan</label>
                        <input type="text" value="Penyelenggara Umroh & Haji Resmi" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium hover:bg-[#DFD7C6]/30 focus:bg-[#DFD7C6]/40 focus:outline-none focus:border-stone-400 transition shadow-xs">
                    </div>
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Nomor Izin PPIU/PIHK</label>
                        <input type="text" value="PPIU No. 1023/2021" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium hover:bg-[#DFD7C6]/30 focus:bg-[#DFD7C6]/40 focus:outline-none focus:border-stone-400 transition shadow-xs">
                    </div>
                </div>

                <!-- Email & Telepon -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Email</label>
                        <input type="email" value="Rozwia@gmail.com" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium hover:bg-[#DFD7C6]/30 focus:bg-[#DFD7C6]/40 focus:outline-none focus:border-stone-400 transition shadow-xs">
                    </div>
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Telepon</label>
                        <input type="text" value="0895-1882-9438" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium hover:bg-[#DFD7C6]/30 focus:bg-[#DFD7C6]/40 focus:outline-none focus:border-stone-400 transition shadow-xs">
                    </div>
                </div>

                <!-- Alamat Kantor & Nomor Rekening -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Alamat Kantor</label>
                        <textarea rows="3" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium hover:bg-[#DFD7C6]/30 focus:bg-[#DFD7C6]/40 focus:outline-none focus:border-stone-400 transition shadow-xs resize-none">Graha Kartika Pratama Blok F2 Nomor 11 Kelurahan Bojong Baru Kecamatan Bojong Gede Kabupaten Bogor Jawa Barat</textarea>
                    </div>
                    <div class="space-y-1.5">
                        <label class="font-[700] text-stone-800 block">Nomor Rekening</label>
                        <textarea rows="3" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-200 text-stone-800 font-medium hover:bg-[#DFD7C6]/30 focus:bg-[#DFD7C6]/40 focus:outline-none focus:border-stone-400 transition shadow-xs resize-none">BSI: 7123456789 a.n PT Rozwia Islamic Travel&#10;Mandiri: 1330001234567 a.n PT Rozwia Islamic Travel</textarea>
                    </div>
                </div>

                <!-- Tombol Aksi Bawah -->
                <div class="flex items-center justify-end gap-3 pt-4 border-t border-stone-100">
                    <button type="reset" class="px-6 py-3 rounded-2xl border border-stone-300 bg-[#DFD7C6]/40 text-stone-700 font-[700] hover:bg-[#DFD7C6] transition cursor-pointer shadow-xs">
                        Batalkan
                    </button>
                    <button type="submit" class="px-7 py-3 rounded-2xl bg-[#0B3B24] hover:bg-emerald-900 text-white font-[700] transition cursor-pointer shadow-md">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection