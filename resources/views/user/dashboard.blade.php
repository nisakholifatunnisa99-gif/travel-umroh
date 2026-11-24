@extends('layouts.dashboard')

@section('title', 'Beranda Jamaah - ROZWIA Islamic Travel')

@section('content')
    <!-- HEADER DENGAN IKON NOTIFIKASI & POP-UP DROPDOWN -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 relative">
    <div>
        <h1 class="text-2xl sm:text-3xl font-[800] font-['Abhaya_Libre'] text-stone-900">
            Assalamu'alaikum, Rinzani Fauziah
        </h1>
        <p class="text-xs sm:text-sm text-stone-600 font-sans">
            Semoga persiapan ibadah Anda dimudahkan. Berikut perkembangan terbaru bookingan Anda.
        </p>
    </div>

    <!-- Tombol Ikon Lonceng Notifikasi di Atas (Responsif Mobile & Desktop) -->
    <div class="relative">
        <button onclick="toggleNotifPopup()" class="w-12 h-12 rounded-2xl bg-white border border-stone-200 shadow-xs flex items-center justify-center text-stone-700 hover:bg-stone-50 transition cursor-pointer relative">
            <span class="material-symbols-outlined text-xl">notifications</span>
            <!-- Badge Indikator Merah (Ada Notif Baru) -->
            <span class="absolute top-2.5 right-2.5 w-3 h-3 bg-rose-600 rounded-full border-2 border-white"></span>
        </button>

        <!-- POP-UP / DROPDOWN KONTAINER NOTIFIKASI -->
        <div id="notifPopup" class="absolute right-0 mt-3 w-80 sm:w-96 bg-white rounded-[24px] shadow-2xl border border-stone-200 p-5 hidden z-50 space-y-4 font-sans">
            <div class="flex items-center justify-between border-b border-stone-100 pb-3">
                <h3 class="font-[800] text-sm text-stone-900">Notifikasi Terbaru</h3>
                <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-2.5 py-0.5 rounded-full">3 Baru</span>
            </div>

            <!-- Daftar List Notifikasi di dalam Pop-up -->
            <div class="space-y-3 max-h-72 overflow-y-auto pr-1">
                <div class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-stone-50 transition cursor-pointer">
                    <span class="w-2 h-2 rounded-full bg-emerald-600 mt-1.5 shrink-0"></span>
                    <div class="text-xs space-y-0.5">
                        <p class="font-bold text-stone-900">Pembayaran Berhasil</p>
                        <p class="text-stone-500">Pembayaran DP Anda sudah diverifikasi admin.</p>
                        <span class="text-[10px] text-stone-400">Baru saja</span>
                    </div>
                </div>

                <div class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-stone-50 transition cursor-pointer">
                    <span class="w-2 h-2 rounded-full bg-rose-600 mt-1.5 shrink-0"></span>
                    <div class="text-xs space-y-0.5">
                        <p class="font-bold text-stone-900">Perbaikan Dokumen</p>
                        <p class="text-stone-500">Pas Foto perlu diperbaiki. Catatan admin di menu Dokumen.</p>
                        <span class="text-[10px] text-stone-400">Kemarin</span>
                    </div>
                </div>

                <div class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-stone-50 transition cursor-pointer">
                    <span class="w-2 h-2 rounded-full bg-amber-500 mt-1.5 shrink-0"></span>
                    <div class="text-xs space-y-0.5">
                        <p class="font-bold text-stone-900">Lengkapi Persyaratan</p>
                        <p class="text-stone-500">Booking Anda berhasil dibuat, silahkan lengkapi dokumen.</p>
                        <span class="text-[10px] text-stone-400">2 hari lalu</span>
                    </div>
                </div>
            </div>

            <div class="border-t border-stone-100 pt-2 text-center">
                <a href="#" class="text-xs font-bold text-[#0B3B24] hover:underline">Lihat Semua Notifikasi</a>
            </div>
        </div>
    </div>
</div>

    <!-- KARTU PROGRESS UNGGAH DOKUMEN PERSYARATAN -->
<div class="bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-8 shadow-sm space-y-5 font-sans relative overflow-hidden">
    
    <!-- Aksen Glow Background Halus -->
    <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-emerald-600/20 rounded-full blur-2xl pointer-events-none"></div>

    <!-- Bagian Atas: Keterangan (Tanpa Tombol Kelola Dokumen) -->
    <div class="space-y-1 relative z-10">
        <span class="text-[10px] sm:text-xs font-[700] uppercase tracking-wider text-amber-400 bg-amber-950/40 px-3 py-1 rounded-full border border-amber-500/30">
            Langkah Anda Berikutnya
        </span>
        <h2 class="text-xl sm:text-2xl font-[800] font-['Abhaya_Libre'] text-white pt-1">
            Unggah Dokumen Persyaratan
        </h2>
        <p class="text-xs text-emerald-100/80 leading-relaxed max-w-xl">
            Lengkapi seluruh dokumen persyaratan agar tim admin dapat memeriksa dan booking Anda dapat berlanjut ke tahap pelunasan.
        </p>
    </div>

    <!-- Bagian Bawah: Progress Bar & Info Dokumen Kurang -->
    <div class="space-y-2 pt-2 border-t border-emerald-900/60 relative z-10">
        <div class="flex justify-between items-center text-xs">
            <span class="font-bold text-emerald-100 flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                Dokumen Terkumpul
            </span>
            <span class="font-[800] text-amber-300 bg-emerald-900/80 px-3 py-1 rounded-full border border-emerald-700/50">
                3 dari 8 Dokumen (37.5%)
            </span>
        </div>

        <!-- Progress Bar Visual -->
        <div class="w-full bg-emerald-950/80 rounded-full h-3 p-0.5 border border-emerald-800/60 overflow-hidden">
            <div class="bg-gradient-to-r from-amber-500 to-amber-400 h-full rounded-full transition-all duration-500" style="width: 37.5%;"></div>
        </div>

        <!-- Teks Informasi & Tombol Munculkan Info -->
        <div class="flex justify-between items-center text-xs pt-1">
            <span class="text-emerald-200/90 font-medium">⚠️ 5 dokumen lagi belum diunggah atau perlu diperbaiki.</span>
            
           
        </div>
    </div>
</div>



    <!-- 2. Card: Tahap Booking (4 Langkah) -->
    <div class="bg-white rounded-[32px] p-6 sm:p-7 border border-stone-200 shadow-sm space-y-3">
        <div class="flex justify-between items-center">
            <h3 class="text-sm font-bold font-serif text-stone-900">Tahap Booking</h3>
            <span class="text-[11px] text-stone-500">Ikuti 4 langkah mudah menuju keberangkatan tanah suci</span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-1">
            
            <!-- Tahap 1 (Selesai/Hijau) -->
            <div class="bg-emerald-50/70 border border-emerald-300 rounded-2xl p-4 space-y-1.5">
                <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">✓</span>
                    <strong class="text-xs font-bold text-emerald-900">Tahap 1</strong>
                </div>
                <p class="text-xs font-bold text-stone-800">Bayar Dp Umrah</p>
                <p class="text-[11px] text-emerald-700 font-medium">Terverifikasi (Rp 10 juta)</p>
            </div>

            <!-- Tahap 2 (Sedang Berjalan/Kuning) -->
            <div class="bg-amber-50 border border-amber-300 rounded-2xl p-4 space-y-1.5">
                <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-amber-500 text-white flex items-center justify-center text-xs font-bold">2</span>
                    <strong class="text-xs font-bold text-amber-900">Sedang Berjalan</strong>
                </div>
                <p class="text-xs font-bold text-stone-800">Unggah Dokumen</p>
                <p class="text-[11px] text-amber-700 font-medium">3 Berkas Belum Masuk</p>
            </div>

            <!-- Tahap 3 (Menunggu/Abu) -->
            <div class="bg-stone-50 border border-stone-200 rounded-2xl p-4 space-y-1.5">
                <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-stone-300 text-stone-700 flex items-center justify-center text-xs font-bold">3</span>
                    <strong class="text-xs font-bold text-stone-600">Menunggu</strong>
                </div>
                <p class="text-xs font-bold text-stone-800">Pelunasan Biaya</p>
                <p class="text-[11px] text-stone-500 font-medium">Sisa Rp22.500.000</p>
            </div>

            <!-- Tahap 4 (Terakhir/Abu) -->
            <div class="bg-stone-50 border border-stone-200 rounded-2xl p-4 space-y-1.5">
                <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-stone-700 text-white flex items-center justify-center text-xs font-bold">4</span>
                    <strong class="text-xs font-bold text-stone-700">Terakhir</strong>
                </div>
                <p class="text-xs font-bold text-stone-800">Manasik & Berangkat</p>
                <p class="text-[11px] text-stone-500 font-medium">Jadwal 15 Desember 2026</p>
            </div>

        </div>
    </div>

    <!-- 3. Dua Kartu Sejajar: Paket Saya & Keuangan Booking -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <!-- Kartu Paket Saya -->
        <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm space-y-5">
            <div class="flex justify-between items-center border-b border-stone-100 pb-3">
                <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider">PAKET SAYA</span>
                
            </div>
            <div>
                <h4 class="text-base font-bold text-stone-900 font-serif">Umrah Reguler Barakah 12 Hari</h4>
            </div>
            <div class="grid grid-cols-2 gap-4 pt-2 text-xs">
                <div>
                    <span class="text-stone-400 block text-[11px]">Tanggal Keberangkatan</span>
                    <strong class="text-stone-800 font-serif"><span class="material-symbols-outlined text-stone-800 font-serif">calendar_month</span> 15 Desember 2026</strong>
                </div>
                <div>
                    <span class="text-stone-400 block text-[11px]">Maskapai & Rute</span>
                    <strong class="text-stone-800 font-serif"><span class="material-symbols-outlined">travel</span> Saudia Airlines</strong>
                </div>
                <div>
                    <span class="text-stone-400 block text-[11px]">Tipe Kamar Hotel</span>
                    <strong class="text-stone-800 font-serif"><span class="material-symbols-outlined">night_shelter</span> Quad(4 Orang)</strong>
                </div>
                <div>
                    <span class="text-stone-400 block text-[11px]">Jumlah Jamaah Terdaftar</span>
                    <strong class="text-stone-800 font-serif"><span class="material-symbols-outlined">group</span> 1 Orang(Rinzani)</strong>
                </div>
            </div>
        </div>

        <!-- Kartu Keuangan Booking -->
        <div class="bg-white rounded-[32px] p-6 border border-stone-200 shadow-sm flex flex-col justify-between space-y-5">
            <div class="flex justify-between items-center border-b border-stone-100 pb-3">
                <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider">KEUANGAN BOOKING</span>
                <span class="bg-amber-100 text-amber-900 font-bold text-[10px] px-3 py-1 rounded-full">Belum Lunas</span>
            </div>
            <div class="space-y-1">
                <span class="text-xs text-stone-500">Status Pembayaran</span>
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="bg-emerald-50/70 p-3.5 rounded-2xl border border-emerald-200">
                        <span class="text-[10px] font-bold text-emerald-800 block">Sudah Dibayar(DP)</span>
                        <strong class="text-sm font-bold text-emerald-900 font-serif">Rp 10.000.000</strong>
                        <span class="text-[10px] text-emerald-700 block mt-0.5">Lunas & Verifikasi</span>
                    </div>
                    <div class="bg-amber-50 p-3.5 rounded-2xl border border-amber-300 relative">
                        <span class="text-[10px] font-bold text-amber-900 block">Sisa Tagihan(Kurang)</span>
                        <strong class="text-sm font-bold text-amber-950 font-serif">Rp 22.500.000</strong>
                        <span class="text-[10px] text-amber-800 block mt-0.5">Jatuh tempo: 01 Desember 2026</span>
                        
                    </div>
                </div>
            </div>
            <button onclick="alert('Form Unggah Bukti Pembayaran')" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold py-2.5 rounded-xl text-xs transition cursor-pointer shadow-xs">
                Lanjutkan Pelunasan
            </button>
        </div>

    </div>

    <!-- 4. Bagian Bawah: Notifikasi Baru & Butuh Bantuan -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        

        <!-- Kotak Butuh Bantuan? (Col 5) -->
        <div class="lg:col-span-5 bg-[#0B3B24] text-white rounded-[32px] p-6 sm:p-7 shadow-sm flex flex-col justify-between space-y-4">
            <div class="space-y-2">
                <h3 class="text-base font-bold font-serif">Butuh Bantuan?</h3>
                <p class="text-xs text-emerald-100/80 font-sans leading-relaxed">
                    Tim ROZWIA siap membantu seputar pembayaran, dokumen, dan keberangkatan.
                </p>
            </div>
            
            <div class="space-y-2.5 pt-2 font-sans">
                <a href="https://wa.me/" target="_blank" class="w-full bg-[#25D366] hover:bg-[#20ba59] text-stone-900 font-bold py-3 rounded-2xl flex items-center justify-center gap-2 transition shadow-sm text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 258">
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
 Chat Via WhatsApp
                </a>
                <a href="#" class="w-full bg-transparent hover:bg-white/10 text-white border border-white/20 font-bold py-3 rounded-2xl flex items-center justify-center gap-2 transition text-xs">
                    Lihat Pertanyaan Umum
                </a>
            </div>
        </div>

    </div>
    <script>
    function toggleNotifPopup() {
        const popup = document.getElementById('notifPopup');
        popup.classList.toggle('hidden');
    }

    // Tutup pop-up jika pengguna mengklik di luar area lonceng/popup
    window.addEventListener('click', function(e) {
        const popup = document.getElementById('notifPopup');
        const notifBtn = popup.previousElementSibling;
        if (!popup.contains(e.target) && !notifBtn.contains(e.target)) {
            popup.classList.add('hidden');
        }
    });
</script>
@endsection