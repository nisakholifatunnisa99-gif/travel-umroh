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
<body class="bg-[#FDFBF7] font-sans text-stone-800 antialiased selection:bg-emerald-900 selection:text-white min-h-screen flex flex-col justify-between" x-data="{ loginOpen: false }">

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

            <!-- Tombol Login Memicu Pop-Up Modal -->
            <div class="flex items-center gap-3">
                <button @click="loginOpen = true" class="flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-emerald-950 px-5 py-2.5 rounded-xl text-sm font-bold shadow-sm transition transform hover:scale-105 font-serif cursor-pointer">
                    <span>🔑</span> Login
                </button>
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
                        Menemani langkah Anda menuju Baitullah dengan layanan yang amanah, nyaman, dan penuh keberkahan.
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


    <!-- ================= MODAL POP-UP LOGIN (GLOBAL) ================= -->
    <div x-show="loginOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-emerald-950/60 backdrop-blur-sm overflow-y-auto"
         style="display: none;">
        
        <!-- Kotak Modal Utama -->
        <div @click.away="loginOpen = false"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative w-full max-w-4xl bg-white rounded-[32px] shadow-2xl overflow-hidden grid grid-cols-1 md:grid-cols-12 border border-stone-200 my-8">
            
            <!-- Tombol Close (X) di Pojok Kanan Atas -->
            <button @click="loginOpen = false" class="absolute top-4 right-4 z-20 w-9 h-9 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-700 flex items-center justify-center transition font-bold cursor-pointer">
                ✕
            </button>

            <!-- SISI KIRI: Banner Tagline Estetik (5 Kolom) -->
            <div class="hidden md:flex md:col-span-5 relative bg-[#0B3B24] p-8 flex-col justify-between overflow-hidden">
                <div class="absolute inset-0 opacity-25 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=800')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0B3B24] via-[#0B3B24]/80 to-transparent"></div>

                <div class="relative z-10 space-y-2">
                    <span class="text-[10px] text-amber-300 font-serif uppercase tracking-widest font-bold">ROZWIA Islamic Travel</span>
                </div>

                <div class="relative z-10 space-y-4 py-8">
                    <h3 class="text-2xl sm:text-3xl font-bold font-serif text-white leading-snug tracking-tight">
                        Dari Niat <br>
                        menjadi <br>
                        <span class="text-amber-300">Perjalanan Nyata</span>
                    </h3>
                    <p class="text-emerald-100/80 text-xs font-serif leading-relaxed">
                        Masuk ke sistem manajemen ROZWIA untuk mengelola pendaftaran, keuangan, dan monitoring perjalanan ibadah.
                    </p>
                </div>

                <div class="relative z-10 text-[10px] text-emerald-200/60 font-serif">
                    © 2026 ROZWIA Islamic Travel
                </div>
            </div>

            <!-- SISI KANAN: Form Login Asli dengan Role (7 Kolom) -->
            <div class="md:col-span-7 p-6 sm:p-10 flex flex-col justify-center bg-white space-y-4 max-h-[90vh] overflow-y-auto">
                
                <div class="text-center md:text-left space-y-1">
                    <span class="text-[10px] font-bold tracking-widest text-amber-800 uppercase font-serif">Akses Sistem</span>
                    <h2 class="text-xl sm:text-2xl font-bold text-[#0B3B24] font-serif">Masuk ke Akun Anda</h2>
                </div>

                <!-- Form Login -->
                <form action="{{ route('login.submit') }}" method="POST" class="space-y-3 pt-1 font-serif">
                    @csrf

                    <!-- Pilih Role / Hak Akses -->
                    <div class="space-y-1">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-stone-700">Masuk Sebagai (Role)</label>
                        <select name="role" class="w-full px-3.5 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-xs bg-white font-medium" required>
                            <option value="admin">Admin (Keuangan & Invoice)</option>
                            <option value="supervisor">Supervisor (Monitoring Manifest)</option>
                            <option value="user">Jamaah / User Dashboard</option>
                        </select>
                    </div>

                    <!-- Email atau No HP -->
                    <div class="space-y-1">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-stone-700">Email atau Nomor WhatsApp</label>
                        <input type="text" name="email_or_phone" placeholder="Cth: admin@rozwia.com / 0812..." class="w-full px-3.5 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-xs" required>
                    </div>

                    <!-- Password -->
                    <div class="space-y-1">
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-stone-700">Password</label>
                        <input type="password" name="password" placeholder="••••••••" class="w-full px-3.5 py-2.5 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-xs" required>
                        <p class="text-[10px] text-stone-500 mt-0.5">
                            * Jamaah menggunakan password sementara yang dikirimkan Admin via WhatsApp setelah verifikasi DP.
                        </p>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-xs py-3 rounded-xl shadow-md transition cursor-pointer uppercase tracking-wider">
                            Masuk Sekarang
                        </button>
                    </div>
                </form>

                <div class="text-center pt-2 border-t border-stone-100">
                    <button @click="loginOpen = false" type="button" class="text-xs text-stone-500 hover:text-[#0B3B24] transition cursor-pointer font-serif">
                        ✕ Tutup Jendela Login
                    </button>
                </div>

            </div>

        </div>
    </div>
    <!-- ================= END MODAL ================= -->

</body>
</html>