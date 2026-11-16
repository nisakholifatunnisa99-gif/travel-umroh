<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ROZWIA - Islamic Travel & Tour')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-[#FDFBF7] font-sans text-stone-800 antialiased selection:bg-emerald-900 selection:text-white min-h-screen flex flex-col justify-between">

    <!-- NAVBAR MELAYANG TERPISAH (FLOATING) -->
    <header class="w-full px-4 sm:px-8 pt-6 fixed top-0 z-50">
        <div class="max-w-7xl mx-auto bg-emerald-950/90 backdrop-blur-md rounded-2xl shadow-xl px-6 py-3.5 flex items-center justify-between border border-emerald-900/50">
            <!-- Logo Rozwia -->
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center gap-2.5 text-white font-serif font-bold text-lg tracking-wider group">
                    <span class="text-2xl transition-transform duration-300 group-hover:scale-110">🕌</span>
                    <div class="leading-tight">
                        <span class="block tracking-widest text-base">ROZWIA</span>
                        <span class="block text-[9px] tracking-widest text-amber-400 font-sans font-light">~ ISLAMIC TRAVEL ~</span>
                    </div>
                </a>
            </div>

            <!-- Menu Navigasi Desktop -->
            <nav class="hidden md:flex items-center space-x-1 text-sm font-medium text-emerald-100">
                <a href="/" class="px-4 py-2 rounded-xl hover:bg-emerald-900/40 hover:text-white transition">Beranda</a>
                <a href="{{ route('paket.haji') }}" class="px-4 py-2 rounded-xl hover:bg-emerald-900/40 hover:text-white transition">Paket Haji</a>
                <a href="{{ route('paket.umroh') }}" class="px-4 py-2 rounded-xl hover:bg-emerald-900/40 hover:text-white transition">Paket Umroh</a>
                <a href="{{ route('tentang.kami') }}" class="px-4 py-2 rounded-xl hover:bg-emerald-900/40 hover:text-white transition">About Us</a>
                <a href="{{ route('faq') }}" class="px-4 py-2 rounded-xl hover:bg-emerald-900/40 hover:text-white transition {{ request()->routeIs('faq') ? 'bg-emerald-900/80 text-white' : '' }}">FAQ</a>
            </nav>

            <!-- Tombol Login Tunggal (Menghilangkan Daftar dan Login Supervisor lama) -->
            <div class="flex items-center gap-3">
                <a href="{{ route('login') }}" class="flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-emerald-950 px-5 py-2.5 rounded-xl text-sm font-bold shadow-sm transition transform hover:scale-105 font-serif">
                    <span>🔑</span> Login
                </a>
            </div>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main class="w-full flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#0B3B24] text-[#E8DFD1] pt-16 pb-10 border-t border-emerald-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12">
                
                <!-- Kolom 1: Logo & Deskripsi -->
                <div class="lg:col-span-4 space-y-5">
                    <div class="flex items-center gap-3">
                        <span class="text-3xl">🕌</span>
                        <div class="leading-tight font-serif">
                            <span class="block tracking-widest text-xl font-bold text-white">ROZWIA</span>
                            <span class="block text-[10px] tracking-widest text-[#D4B996]">~ISLAMIC TRAVEL~</span>
                        </div>
                    </div>
                    <p class="text-xs sm:text-sm text-[#E8DFD1]/85 font-serif leading-relaxed max-w-xs">
                        Menemani langkah Anda menuju Baitullah dengan layanna yang amanah, nyaman, dan penuh keberkahan.
                    </p>
                </div>

                <!-- Kolom 2: Paket -->
                <div class="lg:col-span-3 space-y-4 font-serif">
                    <h4 class="font-bold text-[#D4B996] text-base tracking-wide">Paket</h4>
                    <ul class="space-y-2.5 text-sm text-[#E8DFD1]/85">
                        <li><a href="{{ route('paket.haji') }}" class="hover:text-white transition">&rarr; Paket Haji</a></li>
                        <li><a href="{{ route('paket.umroh') }}" class="hover:text-white transition">&rarr; Paket Umroh</a></li>
                        <li><a href="#" class="hover:text-white transition">&rarr; Jadwal Keberangkatan</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Perusahaan -->
                <div class="lg:col-span-2 space-y-4 font-serif">
                    <h4 class="font-bold text-[#D4B996] text-base tracking-wide">Perusahaan</h4>
                    <ul class="space-y-2.5 text-sm text-[#E8DFD1]/85">
                        <li><a href="{{ route('tentang.kami') }}" class="hover:text-white transition">&rarr; Tentang Kami</a></li>
                        <li><a href="#testimoni" class="hover:text-white transition">&rarr; Testimoni</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-white transition">&rarr; Pertanyaan Umum</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Kontak -->
                <div class="lg:col-span-3 space-y-4 font-serif">
                    <h4 class="font-bold text-[#D4B996] text-base tracking-wide">Kontak</h4>
                    <div class="text-xs sm:text-sm text-[#E8DFD1]/85 space-y-1.5 leading-relaxed">
                        <p class="font-semibold text-white">Kantor Pusat:</p>
                        <p>Graha Kartika Pratama Blok F2 Nomor 11 Kelurahan Bojong Baru Kecamatan Bojong Gede Kabupaten Bogor Jawa Barat</p>
                    </div>
                    <div class="pt-2 space-y-3 text-sm">
                        <a href="https://wa.me/6289518829438" target="_blank" class="flex items-center gap-3 hover:text-white transition">
                            <span class="w-7 h-7 rounded-full bg-emerald-800 text-emerald-300 flex items-center justify-center text-xs">📞</span>
                            <span class="font-sans">0895-1882-9438</span>
                        </a>
                        <a href="mailto:Rozwia@gmail.com" class="flex items-center gap-3 hover:text-white transition">
                            <span class="w-7 h-7 rounded-full bg-amber-500 text-emerald-950 flex items-center justify-center text-xs">✉</span>
                            <span class="font-sans">Rozwia@gmail.com</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Garis Pemisah & Copyright -->
            <div class="pt-6 border-t border-[#E8DFD1]/20 flex flex-col sm:flex-row items-center justify-between text-xs text-[#E8DFD1]/70 font-serif gap-4">
                <p>&copy; 2026 ROZWIA Islamic Travel</p>
                <p>PPIU No. 123 Tahun 2026</p>
            </div>
        </div>
    </footer>

</body>
</html>