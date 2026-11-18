@extends('layouts.dashboard')

@section('title', 'Persyaratan Dokumen - ROZWIA Islamic Travel')

@section('content')
    <!-- Header Sambutan & Lonceng Notifikasi -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold font-serif text-stone-900">
                Persyaratan Dokumen
            </h1>
            <p class="text-xs sm:text-sm text-stone-600 mt-1">
                Semoga persiapan ibadah Anda dimudahkan. Silahkan Lengkapi Dokumen Anda
            </p>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-white border border-stone-200 shadow-xs flex items-center justify-center text-amber-600 text-xl cursor-pointer hover:bg-stone-50 transition relative">
            <span class="material-symbols-outlined">notifications</span>
        </div>
    </div>

    <!-- 1. Alert Banner: Peringatan Perbaikan Segera -->
    <div class="bg-rose-50 border border-rose-200 rounded-[24px] p-5 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-xs">
        <div class="flex items-start gap-3.5">
            <div class="w-10 h-10 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center font-bold text-lg shrink-0 mt-0.5">
                <span class="material-symbols-outlined">warning</span>
            </div>
            <div class="space-y-1">
                <h4 class="text-xs font-bold text-rose-900 uppercase tracking-wide">1 Dokumen Memerlukan Perbaikan Segera</h4>
                <p class="text-xs text-rose-800/90 leading-relaxed font-medium">
                    Foto Paspor: Hasil foto halaman biodata paspor buram dan bagian Machine Readable Zone (MRZ kode bawah) terpotong. Harap unggah foto ulang yang terang dan tegak lurus sebelum tanggal 25 November 2026 agar visa tidak tertolak.
                </p>
            </div>
        </div>
        <button onclick="alert('Mengarahkan ke form upload ulang...')" class="bg-rose-600 hover:bg-rose-700 text-white font-bold px-5 py-2.5 rounded-xl text-xs transition shadow-sm shrink-0 cursor-pointer font-sans">
            Upload Ulang Sekarang
        </button>
    </div>

    <!-- 2. Panduan & Syarat Pengunggahan Dokumen -->
    <div class="bg-white rounded-[32px] p-6 sm:p-7 border border-stone-200 shadow-sm space-y-4">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 border-b border-stone-100 pb-3">
            <h3 class="text-sm font-bold font-serif text-stone-900 flex items-center gap-2">
                <span>📖</span> Panduan & Syarat Pengunggahan Dokumen
            </h3>
            <span class="text-[11px] text-stone-500 font-medium">Standar Kementerian Agama & Imigrasi RI</span>
        </div>

        <!-- 5 Langkah Panduan Horizontal -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3 pt-1">
            
            <!-- Step 1 -->
            <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-4 space-y-2">
                <div class="w-6 h-6 rounded-full bg-amber-200 text-amber-900 font-bold text-xs flex items-center justify-center font-serif">1</div>
                <h4 class="text-xs font-bold text-stone-900 font-serif">Masa Berlaku Paspor</h4>
                <p class="text-[11px] text-stone-600 leading-relaxed">Paspor harus masih berlaku minimal 7 bulan terhitung dari tanggal keberangkatan.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-4 space-y-2">
                <div class="w-6 h-6 rounded-full bg-amber-200 text-amber-900 font-bold text-xs flex items-center justify-center font-serif">2</div>
                <h4 class="text-xs font-bold text-stone-900 font-serif">Nama di Paspor</h4>
                <p class="text-[11px] text-stone-600 leading-relaxed">Nama minimal 2 suku kata sesuai paspor resmi (misal: Rinzani Fauziah).</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-4 space-y-2">
                <div class="w-6 h-6 rounded-full bg-amber-200 text-amber-900 font-bold text-xs flex items-center justify-center font-serif">3</div>
                <h4 class="text-xs font-bold text-stone-900 font-serif">Pas Foto Umrah</h4>
                <p class="text-[11px] text-stone-600 leading-relaxed">Ukuran 4x6 latar belakang putih, fokus wajah 80%, tanpa kacamata & peci.</p>
            </div>

            <!-- Step 4 -->
            <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-4 space-y-2">
                <div class="w-6 h-6 rounded-full bg-amber-200 text-amber-900 font-bold text-xs flex items-center justify-center font-serif">4</div>
                <h4 class="text-xs font-bold text-stone-900 font-serif">KTP & KK Asli</h4>
                <p class="text-[11px] text-stone-600 leading-relaxed">Scan/foto KTP elektronik dan Kartu Keluarga terbaca jelas tanpa pantulan cahaya.</p>
            </div>

            <!-- Step 5 -->
            <div class="bg-stone-50 border border-stone-200/80 rounded-2xl p-4 space-y-2">
                <div class="w-6 h-6 rounded-full bg-amber-200 text-amber-900 font-bold text-xs flex items-center justify-center font-serif">5</div>
                <h4 class="text-xs font-bold text-stone-900 font-serif">Dokumen Mahram</h4>
                <p class="text-[11px] text-stone-600 leading-relaxed">Buku Nikah (bagi suami-istri) atau Akta Kelahiran (bagi anak/saudara kandung).</p>
            </div>

        </div>
    </div>

    <!-- 3. Header Bagian: Daftar Dokumen Anda -->
    <div class="flex justify-between items-center pt-2">
        <div>
            <h3 class="text-base font-bold font-serif text-stone-900">Daftar Dokumen Anda</h3>
            <p class="text-xs text-stone-500">Klik tombol pada masing-masing kartu untuk melihat atau mengunggah berkas baru</p>
        </div>
        <button onclick="alert('Mengunduh semua berkas dalam format ZIP...')" class="bg-white hover:bg-stone-50 text-stone-800 border border-stone-200 font-bold px-4 py-2 rounded-xl text-xs transition shadow-xs cursor-pointer flex items-center gap-1.5">
            <span class="material-symbols-outlined">box</span> Unduh Semua Berkas (ZIP)
        </button>
    </div>

    <!-- 4. Grid Kartu Daftar Dokumen (5 Kartu) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- KARTU 1: Paspor Asli (Perlu Diperbaiki) -->
        <div class="bg-white rounded-[28px] p-6 border-2 border-rose-300 shadow-sm flex flex-col justify-between space-y-4 relative">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="material-symbols-outlined">passport</span>
                    <span class="bg-rose-100 text-rose-700 font-bold text-[10px] px-3 py-1 rounded-full flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span> Perlu Diperbaiki
                    </span>
                </div>
                <div>
                    <h4 class="text-sm font-bold font-serif text-stone-900">Paspor Asli</h4>
                    <p class="text-[11px] text-stone-500">Halaman identitas & foto jemaah</p>
                </div>
                <!-- Catatan Admin Box -->
                <div class="bg-rose-50/70 border border-rose-200 rounded-xl p-3 space-y-1">
                    <span class="text-[10px] font-bold text-rose-800 block uppercase">Catatan Admin ROZWIA:</span>
                    <p class="text-[11px] text-rose-900 font-medium leading-relaxed">
                        Halaman bawah MRZ terpotong. Unggah foto paspor baru yang tidak silau dan utuh 4 sudut.
                    </p>
                </div>
            </div>
            <button onclick="alert('Membuka form ganti file paspor...')" class="w-full bg-[#C51B1B] hover:bg-red-700 text-white font-bold py-2.5 rounded-xl text-xs transition cursor-pointer shadow-xs flex items-center justify-center gap-1.5">
                <span class="material-symbols-outlined">compare_arrows</span> Ganti File Paspor
            </button>
        </div>

        <!-- KARTU 2: e-KTP Jamaah (Terverifikasi) -->
        <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-4">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="material-symbols-outlined">id_card</span>
                    <span class="bg-emerald-100 text-emerald-800 font-bold text-[10px] px-3 py-1 rounded-full flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Terverifikasi
                    </span>
                </div>
                <div>
                    <h4 class="text-sm font-bold font-serif text-stone-900">e-KTP Jamaah</h4>
                    <p class="text-[11px] text-stone-500">NIK: 327324********0002</p>
                </div>
                <!-- Status Box Hijau -->
                <div class="bg-emerald-50/70 border border-emerald-200 rounded-xl p-3 space-y-0.5">
                    <div class="flex items-center gap-1.5 text-emerald-800 font-bold text-[11px]">
                        <span>✓</span> Data identitas sesuai sistem Dukcapil
                    </div>
                    <span class="text-[10px] text-emerald-700 block">Diverifikasi 16 Nov 2026</span>
                </div>
            </div>
            <button onclick="alert('Melihat file e-KTP...')" class="w-full bg-stone-100 hover:bg-stone-200 text-stone-800 font-bold py-2.5 rounded-xl text-xs transition cursor-pointer">
                Lihat Berkas
            </button>
        </div>

        <!-- KARTU 3: Kartu Keluarga (Menunggu Review) -->
        <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-4">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="material-symbols-outlined">description</span>
                    <span class="bg-amber-100 text-amber-900 font-bold text-[10px] px-3 py-1 rounded-full flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Menunggu Review
                    </span>
                </div>
                <div>
                    <h4 class="text-sm font-bold font-serif text-stone-900">Kartu Keluarga (KK)</h4>
                    <p class="text-[11px] text-stone-500">File: scan_kk_rinzani.pdf (1.2 MB)</p>
                </div>
                <!-- Status Box Kuning -->
                <div class="bg-amber-50 border border-amber-200 rounded-xl p-3">
                    <p class="text-[11px] text-amber-800 font-medium leading-relaxed">
                        Sedang dalam antrean review admin pusat. Estimasi 1x24 jam kerja.
                    </p>
                </div>
            </div>
            <button onclick="alert('Melihat file Kartu Keluarga...')" class="w-full bg-stone-100 hover:bg-stone-200 text-stone-800 font-bold py-2.5 rounded-xl text-xs transition cursor-pointer">
                Lihat Berkas
            </button>
        </div>

        <!-- KARTU 4: Pas Foto 4x6 (Belum Unggah) -->
        <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-4">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="material-symbols-outlined">photo_camera_front</span>
                    <span class="bg-stone-100 text-stone-600 font-bold text-[10px] px-3 py-1 rounded-full flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-stone-400"></span> Belum Unggah
                    </span>
                </div>
                <div>
                    <h4 class="text-sm font-bold font-serif text-stone-900">Pas Foto 4x6 (Background Putih)</h4>
                    <p class="text-[11px] text-stone-500">Wajib resolusi tinggi untuk cetak visa</p>
                </div>
                <!-- Box Instruksi -->
                <div class="bg-stone-50 border border-stone-200 rounded-xl p-3">
                    <p class="text-[11px] text-stone-600 leading-relaxed">
                        Wajah tampak 80%, jilbab gelap bagi wanita, tanpa aksesoris penutup muka.
                    </p>
                </div>
            </div>
            <button onclick="alert('Membuka form upload foto...')" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold py-2.5 rounded-xl text-xs transition cursor-pointer shadow-xs">
                Unggah Foto
            </button>
        </div>

        <!-- KARTU 5: Buku Nikah / Akta Lahir (Belum Unggah) -->
        <div class="bg-white rounded-[28px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-4">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="material-symbols-outlined">menu_book</span>
                    <span class="bg-stone-100 text-stone-600 font-bold text-[10px] px-3 py-1 rounded-full flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-stone-400"></span> Belum Unggah
                    </span>
                </div>
                <div>
                    <h4 class="text-sm font-bold font-serif text-stone-900">Buku Nikah / Akta Lahir</h4>
                    <p class="text-[11px] text-stone-500">Dokumen bukti mahram jemaah</p>
                </div>
                <!-- Box Instruksi -->
                <div class="bg-stone-50 border border-stone-200 rounded-xl p-3">
                    <p class="text-[11px] text-stone-600 leading-relaxed">
                        Wajib bagi jemaah wanita yang bepergian bersama suami atau saudara mahram.
                    </p>
                </div>
            </div>
            <button onclick="alert('Membuka form upload berkas mahram...')" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold py-2.5 rounded-xl text-xs transition cursor-pointer shadow-xs">
                Unggah Berkas
            </button>
        </div>

    </div>
@endsection