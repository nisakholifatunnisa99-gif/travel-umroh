<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Supervisor Panel - ROZWIA')</title>
    <!-- Tailwind CSS v4 & Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#FDFBF7] text-stone-800 antialiased overflow-x-hidden">

    <!-- Container Utama Supervisor -->
    <div class="min-h-screen flex">
        
        <!-- SIDEBAR KIRI (FIXED & FULL ACCESSIBLE) -->
        <aside class="w-72 bg-[#0B3B24] text-white flex flex-col justify-between fixed inset-y-0 left-0 z-50 shadow-2xl">
            <div class="p-6 space-y-8">
                <!-- Brand / Logo -->
                <div class="space-y-1 pt-2">
                    <h2 class="text-2xl font-extrabold font-serif tracking-wider text-white">ROZWIA</h2>
                    <p class="text-[11px] text-amber-200/80 font-serif tracking-widest uppercase">ISLAMIC TRAVEL</p>
                </div>

                <!-- Menu Navigasi Sidebar -->
                <nav class="space-y-2 text-sm font-serif">
                    <a href="{{ route('supervisor.perusahaan') }}" 
                       class="{{ request()->routeIs('supervisor.perusahaan') ? 'bg-emerald-950/90 text-amber-300 font-bold border-l-4 border-amber-400 pl-4' : 'text-stone-300 hover:bg-emerald-900/50 pl-5' }} w-full text-left py-3.5 rounded-r-xl transition flex items-center gap-3 block">
                        <span>🏢</span> Data Perusahaan
                    </a>

                    <a href="{{ route('supervisor.paket.tambah') }}" 
                       class="{{ request()->routeIs('supervisor.paket.tambah') ? 'bg-emerald-950/90 text-amber-300 font-bold border-l-4 border-amber-400 pl-4' : 'text-stone-300 hover:bg-emerald-900/50 pl-5' }} w-full text-left py-3.5 rounded-r-xl transition flex items-center gap-3 block">
                        <span>➕</span> Tambah Paket
                    </a>

                    <a href="{{ route('supervisor.akun') }}" 
                       class="{{ request()->routeIs('supervisor.akun') ? 'bg-emerald-950/90 text-amber-300 font-bold border-l-4 border-amber-400 pl-4' : 'text-stone-300 hover:bg-emerald-900/50 pl-5' }} w-full text-left py-3.5 rounded-r-xl transition flex items-center gap-3 block">
                        <span>👥</span> Akun Aktif & Excel
                    </a>

                    <a href="{{ route('supervisor.manifest') }}" 
                       class="{{ request()->routeIs('supervisor.manifest') ? 'bg-emerald-950/90 text-amber-300 font-bold border-l-4 border-amber-400 pl-4' : 'text-stone-300 hover:bg-emerald-900/50 pl-5' }} w-full text-left py-3.5 rounded-r-xl transition flex items-center gap-3 block">
                        <span>📋</span> Monitoring Manifest
                    </a>
                </nav>
            </div>

            <!-- Tombol Logout di Bawah Sidebar -->
            <div class="p-6 border-t border-emerald-900/60">
                <form action="{{ route('supervisor.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 bg-rose-950/60 hover:bg-rose-900 text-rose-200 font-serif font-bold text-xs py-3 rounded-xl transition border border-rose-800/50 cursor-pointer">
                        <span>🚪</span> Keluar (Logout)
                    </button>
                </form>
            </div>
        </aside>

        <!-- KONTEN UTAMA DI KANAN -->
        <main class="flex-1 ml-72 p-8 lg:p-12 space-y-8">
            <!-- Top Bar Header Khusus Supervisor (Bersih tanpa Navbar Publik) -->
            <div class="flex items-center justify-between bg-white px-6 py-4 rounded-2xl shadow-xs border border-stone-200/80">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-bold uppercase tracking-widest bg-amber-100 text-amber-900 px-3 py-1 rounded-full">Supervisor Panel</span>
                    <span class="text-xs text-stone-500">Sistem Pengelolaan Umroh & Haji ROZWIA</span>
                </div>
                <div class="text-xs font-bold text-[#0B3B24]">
                    🟢 Supervisor Online
                </div>
            </div>

            <!-- Konten Dinamis -->
            @yield('supervisor_content')
        </main>
    </div>
</body>
</html>