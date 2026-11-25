<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ROZWIA - Islamic Travel & Tour')</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root { --rozwia-sand: #EBE1D3; }
        body { background-color: var(--rozwia-sand) !important; }
        [class~="bg-[#FDFBF7]"], [class~="bg-[#F4EFE6]"], [class~="bg-[#FAF8F5]"], [class~="bg-[#F9F6F0]"], [class~="bg-[#E5D3B3]"], [class~="bg-[#D4B996]"] { background-color: var(--rozwia-sand) !important; }
    </style>
</head>
<body class="bg-[#EBE1D3] font-sans text-stone-800 antialiased selection:bg-emerald-900 selection:text-white min-h-screen flex flex-col justify-between" x-data="{ loginOpen: false }">

    <!-- NAVBAR MELAYANG TERPISAH (FLOATING) -->
    <header class="w-full px-4 sm:px-8 pt-6 fixed top-0 z-50">
        <div class="max-w-7xl mx-auto bg-emerald-950/90 backdrop-blur-md rounded-2xl shadow-xl px-6 py-3.5 flex items-center justify-between border border-emerald-900/50">
            <!-- Logo Rozwia menggunakan Gambar Lokal -->
                <div class="flex items-center gap-3">
                    <a href="/" class="flex items-center gap-2.5 text-white font-serif font-bold text-lg tracking-wider group">
            <!-- Ganti emoji dengan tag <img> dan arahkan ke folder public/images/ -->
                <img src="{{ asset('img/logo-rozwia.png') }}" alt="Logo Rozwia" class="w-10 h-10 object-contain transition-transform duration-300 group-hover:scale-110">
        
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
                    <span class="material-symbols-outlined">person</span> Login
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
                    <!-- Ubah emoji 🕌 menjadi tag <img> dengan helper asset() -->
                        <img src="{{ asset('img/logo-rozwia.png') }}" alt="Logo Rozwia" class="w-10 h-10 object-contain">
    
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 258">
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
                            <span class="font-sans">0895-1882-9438</span>
                        </a>
                        <a href="mailto:Rozwia@gmail.com" class="flex items-center gap-3 hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
	                            <path d="M0 0h1024v1024H0z" fill="none" />
	                            <path fill="currentColor" fill-opacity=".15" d="M477.5 536.3L135.9 270.7l-27.5-21.4l27.6 21.5V792h752V270.8L546.2 536.3a55.99 55.99 0 0 1-68.7 0" />
	                            <path fill="currentColor" fill-opacity=".15" d="m876.3 198.8l39.3 50.5l-27.6 21.5l27.7-21.5l-39.3-50.5z" />
	                            <path fill="currentColor" d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32m-94.5 72.1L512 482L190.5 232.1zm54.5 38.7V792H136V270.8l-27.6-21.5l27.5 21.4l341.6 265.6a55.99 55.99 0 0 0 68.7 0zl27.6-21.5l-39.3-50.5h.1l39.3 50.5z" />
                            </svg>
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

            </div>

        </div>
    </div>
    <!-- ================= END MODAL ================= -->

</body>
</html>
