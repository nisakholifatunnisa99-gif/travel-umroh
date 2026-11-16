@extends('layouts.app')

@section('title', 'FAQ - Rozwia Islamic Travel')

@section('content')

<div class="w-full space-y-16 pb-24">

    <!-- 1. HERO SECTION FAQ (HIJAU TUA) -->
    <div class="relative w-full bg-[#0B3B24] overflow-hidden shadow-lg pt-32 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="absolute right-0 top-0 w-96 h-96 bg-emerald-900/30 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-5xl mx-auto space-y-6">
            <div class="flex items-center gap-2 text-xs text-amber-200/80 font-serif">
                <a href="/" class="hover:underline">Beranda</a>
                <span>/</span>
                <span class="text-white">FAQ</span>
            </div>

            <div class="space-y-3">
                <h1 class="text-3xl sm:text-5xl font-extrabold text-white font-serif tracking-tight">
                    Frequently Asked Questions
                </h1>
                <p class="text-emerald-100/90 text-sm sm:text-base max-w-2xl font-serif leading-relaxed">
                    Temukan jawaban seputar persyaratan dokumen, paspor, manasik, dan persiapan keberangkatan umroh Anda.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-6 pt-4 text-xs sm:text-sm text-emerald-100 font-serif border-t border-emerald-900/60">
                <div class="flex items-center gap-2">
                    <span class="text-amber-400">📁</span>
                    <span>7 Kategori</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-amber-400">❓</span>
                    <span>7 Pertanyaan Utama</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-amber-400">🕒</span>
                    <span>24/7 Bantuan</span>
                </div>
            </div>
        </div>
    </div>


    <!-- 2. FILTER KATEGORI PILL (MENGARAH KE SECTION MASING-MASING DI HALAMAN INI) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-3 overflow-x-auto pb-2 scrollbar-none">
            <a href="#kategori-dokumen" class="bg-[#0B3B24] text-white text-xs sm:text-sm font-semibold px-6 py-3 rounded-full shadow-xs shrink-0 transition">
                Persyaratan Dokumen
            </a>
            <a href="#kategori-paspor" class="bg-white hover:bg-emerald-50 text-stone-700 border border-stone-200 text-xs sm:text-sm font-semibold px-6 py-3 rounded-full shadow-xs shrink-0 transition">
                Paspor
            </a>
            <a href="#kategori-meningitis" class="bg-white hover:bg-emerald-50 text-stone-700 border border-stone-200 text-xs sm:text-sm font-semibold px-6 py-3 rounded-full shadow-xs shrink-0 transition">
                Buku Kuning Meningitis
            </a>
            <a href="#kategori-perlengkapan" class="bg-white hover:bg-emerald-50 text-stone-700 border border-stone-200 text-xs sm:text-sm font-semibold px-6 py-3 rounded-full shadow-xs shrink-0 transition">
                Perlengkapan Umroh
            </a>
            <a href="#kategori-manasik" class="bg-white hover:bg-emerald-50 text-stone-700 border border-stone-200 text-xs sm:text-sm font-semibold px-6 py-3 rounded-full shadow-xs shrink-0 transition">
                Manasik
            </a>
            <a href="#kategori-keberangkatan" class="bg-white hover:bg-emerald-50 text-stone-700 border border-stone-200 text-xs sm:text-sm font-semibold px-6 py-3 rounded-full shadow-xs shrink-0 transition">
                Persiapan Keberangkatan
            </a>
            <a href="#kategori-healthcare" class="bg-white hover:bg-emerald-50 text-stone-700 border border-stone-200 text-xs sm:text-sm font-semibold px-6 py-3 rounded-full shadow-xs shrink-0 transition">
                Health Care
            </a>
        </div>
    </div>


    <!-- 3. DAFTAR 7 KATEGORI DENGAN MASING-MASING 1 PERTANYAAN -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Kategori 1: Persyaratan Dokumen -->
        <div id="kategori-dokumen" class="space-y-4 scroll-mt-28">
            <div class="flex items-center gap-3 pb-2 border-b border-stone-200/80">
                <span class="text-xl">📁</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Persyaratan Dokumen Umroh</h2>
            </div>
            <details class="group bg-white rounded-2xl shadow-xs border border-stone-200/80 overflow-hidden transition duration-300">
                <summary class="w-full p-6 sm:p-7 text-left flex items-center justify-between gap-4 cursor-pointer select-none list-none focus:outline-none">
                    <span class="text-base sm:text-lg font-bold text-[#0B3B24] font-serif group-hover:text-amber-800 transition">
                        Dokumen apa saja yang menjadi persyaratan utama Umroh?
                    </span>
                    <span class="w-8 h-8 rounded-full bg-stone-100 text-[#0B3B24] flex items-center justify-center font-bold text-lg shrink-0 transition-transform duration-300 group-open:rotate-45 group-open:bg-amber-100 group-open:text-amber-800">+</span>
                </summary>
                <div class="px-6 sm:px-7 pb-6 pt-2 border-t border-stone-100">
                    <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
                        Persyaratan utama meliputi KTP, Kartu Keluarga (KK), Buku Nikah (bagi suami istri), Akta Kelahiran anak, dan Paspor asli yang masih berlaku minimal 7 bulan.
                    </p>
                </div>
            </details>
        </div>


        <!-- Kategori 2: Paspor -->
        <div id="kategori-paspor" class="space-y-4 scroll-mt-28">
            <div class="flex items-center gap-3 pb-2 border-b border-stone-200/80">
                <span class="text-xl">🛂</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Paspor Jamaah</h2>
            </div>
            <details class="group bg-white rounded-2xl shadow-xs border border-stone-200/80 overflow-hidden transition duration-300">
                <summary class="w-full p-6 sm:p-7 text-left flex items-center justify-between gap-4 cursor-pointer select-none list-none focus:outline-none">
                    <span class="text-base sm:text-lg font-bold text-[#0B3B24] font-serif group-hover:text-amber-800 transition">
                        Apa saja ketentuan nama pada paspor untuk keberangkatan umroh?
                    </span>
                    <span class="w-8 h-8 rounded-full bg-stone-100 text-[#0B3B24] flex items-center justify-center font-bold text-lg shrink-0 transition-transform duration-300 group-open:rotate-45 group-open:bg-amber-100 group-open:text-amber-800">+</span>
                </summary>
                <div class="px-6 sm:px-7 pb-6 pt-2 border-t border-stone-100">
                    <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
                        Berdasarkan ketentuan imigrasi Saudi Arabia, nama pada paspor minimal harus terdiri dari 2 (dua) kata. Contoh: Ahmad Fauzi. Jika baru 1 kata, maka nama di paspor wajib ditambah nama ayah atau kakek.
                    </p>
                </div>
            </details>
        </div>


        <!-- Kategori 3: Buku Kuning Meningitis -->
        <div id="kategori-meningitis" class="space-y-4 scroll-mt-28">
            <div class="flex items-center gap-3 pb-2 border-b border-stone-200/80">
                <span class="text-xl">💉</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Buku Kuning Meningitis</h2>
            </div>
            <details class="group bg-white rounded-2xl shadow-xs border border-stone-200/80 overflow-hidden transition duration-300">
                <summary class="w-full p-6 sm:p-7 text-left flex items-center justify-between gap-4 cursor-pointer select-none list-none focus:outline-none">
                    <span class="text-base sm:text-lg font-bold text-[#0B3B24] font-serif group-hover:text-amber-800 transition">
                        Apakah vaksin meningitis (ICV) wajib bagi setiap jamaah umroh?
                    </span>
                    <span class="w-8 h-8 rounded-full bg-stone-100 text-[#0B3B24] flex items-center justify-center font-bold text-lg shrink-0 transition-transform duration-300 group-open:rotate-45 group-open:bg-amber-100 group-open:text-amber-800">+</span>
                </summary>
                <div class="px-6 sm:px-7 pb-6 pt-2 border-t border-stone-100">
                    <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
                        Ya, Buku Vaksin Internasional (ICV) meningitis merupakan dokumen kesehatan wajib yang dikeluarkan oleh Kantor Kesehatan Port (KKP) sebagai syarat penerbitan visa umroh.
                    </p>
                </div>
            </details>
        </div>


        <!-- Kategori 4: Perlengkapan Umroh -->
        <div id="kategori-perlengkapan" class="space-y-4 scroll-mt-28">
            <div class="flex items-center gap-3 pb-2 border-b border-stone-200/80">
                <span class="text-xl">🧳</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Perlengkapan Umroh</h2>
            </div>
            <details class="group bg-white rounded-2xl shadow-xs border border-stone-200/80 overflow-hidden transition duration-300">
                <summary class="w-full p-6 sm:p-7 text-left flex items-center justify-between gap-4 cursor-pointer select-none list-none focus:outline-none">
                    <span class="text-base sm:text-lg font-bold text-[#0B3B24] font-serif group-hover:text-amber-800 transition">
                        Apa saja perlengkapan yang akan didapatkan dari ROZWIA?
                    </span>
                    <span class="w-8 h-8 rounded-full bg-stone-100 text-[#0B3B24] flex items-center justify-center font-bold text-lg shrink-0 transition-transform duration-300 group-open:rotate-45 group-open:bg-amber-100 group-open:text-amber-800">+</span>
                </summary>
                <div class="px-6 sm:px-7 pb-6 pt-2 border-t border-stone-100">
                    <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
                        Setiap jamaah akan mendapatkan koper besar, koper kabin, tas ransel, kain ihram (untuk pria) / mukena & bergo (untuk wanita), seragam batik eksklusif, serta buku doa manasik.
                    </p>
                </div>
            </details>
        </div>


        <!-- Kategori 5: Manasik -->
        <div id="kategori-manasik" class="space-y-4 scroll-mt-28">
            <div class="flex items-center gap-3 pb-2 border-b border-stone-200/80">
                <span class="text-xl">🕋</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Manasik Umroh</h2>
            </div>
            <details class="group bg-white rounded-2xl shadow-xs border border-stone-200/80 overflow-hidden transition duration-300">
                <summary class="w-full p-6 sm:p-7 text-left flex items-center justify-between gap-4 cursor-pointer select-none list-none focus:outline-none">
                    <span class="text-base sm:text-lg font-bold text-[#0B3B24] font-serif group-hover:text-amber-800 transition">
                        Kapan kegiatan pelatihan manasik umroh dilaksanakan sebelum keberangkatan?
                    </span>
                    <span class="w-8 h-8 rounded-full bg-stone-100 text-[#0B3B24] flex items-center justify-center font-bold text-lg shrink-0 transition-transform duration-300 group-open:rotate-45 group-open:bg-amber-100 group-open:text-amber-800">+</span>
                </summary>
                <div class="px-6 sm:px-7 pb-6 pt-2 border-t border-stone-100">
                    <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
                        Pelatihan manasik umroh diadakan secara tatap muka dan praktik langsung di kantor pusat ROZWIA, biasanya dijadwalkan 1 hingga 2 minggu sebelum tanggal keberangkatan jamaah.
                    </p>
                </div>
            </details>
        </div>


        <!-- Kategori 6: Persiapan Keberangkatan -->
        <div id="kategori-keberangkatan" class="space-y-4 scroll-mt-28">
            <div class="flex items-center gap-3 pb-2 border-b border-stone-200/80">
                <span class="text-xl">✈️</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Persiapan Keberangkatan</h2>
            </div>
            <details class="group bg-white rounded-2xl shadow-xs border border-stone-200/80 overflow-hidden transition duration-300">
                <summary class="w-full p-6 sm:p-7 text-left flex items-center justify-between gap-4 cursor-pointer select-none list-none focus:outline-none">
                    <span class="text-base sm:text-lg font-bold text-[#0B3B24] font-serif group-hover:text-amber-800 transition">
                        Di mana titik kumpul (meeting point) saat hari keberangkatan?
                    </span>
                    <span class="w-8 h-8 rounded-full bg-stone-100 text-[#0B3B24] flex items-center justify-center font-bold text-lg shrink-0 transition-transform duration-300 group-open:rotate-45 group-open:bg-amber-100 group-open:text-amber-800">+</span>
                </summary>
                <div class="px-6 sm:px-7 pb-6 pt-2 border-t border-stone-100">
                    <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
                        Titik kumpul keberangkatan jamaah umumnya bertempat di Bandara Internasional Soekarno-Hatta (Terminal keberangkatan Internasional) 4 jam sebelum jadwal penerbitan boarding pass.
                    </p>
                </div>
            </details>
        </div>


        <!-- Kategori 7: Health Care -->
        <div id="kategori-healthcare" class="space-y-4 scroll-mt-28">
            <div class="flex items-center gap-3 pb-2 border-b border-stone-200/80">
                <span class="text-xl">🩺</span>
                <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Health Care & Kesehatan</h2>
            </div>
            <details class="group bg-white rounded-2xl shadow-xs border border-stone-200/80 overflow-hidden transition duration-300">
                <summary class="w-full p-6 sm:p-7 text-left flex items-center justify-between gap-4 cursor-pointer select-none list-none focus:outline-none">
                    <span class="text-base sm:text-lg font-bold text-[#0B3B24] font-serif group-hover:text-amber-800 transition">
                        Apakah ada pendampingan medis atau dokter selama di Tanah Suci?
                    </span>
                    <span class="w-8 h-8 rounded-full bg-stone-100 text-[#0B3B24] flex items-center justify-center font-bold text-lg shrink-0 transition-transform duration-300 group-open:rotate-45 group-open:bg-amber-100 group-open:text-amber-800">+</span>
                </summary>
                <div class="px-6 sm:px-7 pb-6 pt-2 border-t border-stone-100">
                    <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
                        ROZWIA menyediakan tim P3K dan berkoordinasi dengan tenaga medis pendamping rombongan untuk memastikan kesehatan jamaah tetap prima selama rangkaian ibadah di Makkah dan Madinah.
                    </p>
                </div>
            </details>
        </div>

    </div>

</div>

@endsection