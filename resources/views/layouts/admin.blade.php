<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Admin - ROZWIA')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-[#F8F6F0] min-h-screen flex antialiased text-stone-800">

    <!-- SIDEBAR ADMIN -->
    <aside class="w-72 bg-[#0B3B24] text-white flex flex-col justify-between hidden md:flex fixed inset-y-0 left-0 z-45 shadow-xl">
        <div class="p-8 space-y-8">
            <!-- Logo Brand -->
            <div class="space-y-1">
                <h1 class="text-2xl font-bold font-serif tracking-wide text-white">ROZWIA</h1>
                <p class="text-[10px] uppercase tracking-widest text-amber-400 font-semibold">Islamic Travel • Admin Panel</p>
            </div>

            <!-- Menu Navigasi Admin -->
            <nav class="space-y-2 font-serif text-sm">
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-950/80 text-white font-medium shadow-xs">
                    <span>📊</span> Dashboard & Keuangan
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-stone-300 hover:bg-emerald-900/50 hover:text-white transition">
                    <span>👥</span> Kelola Akun & Jamaah
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-stone-300 hover:bg-emerald-900/50 hover:text-white transition">
                    <span>💬</span> Invoice & WhatsApp
                </a>
            </nav>
        </div>

        <!-- Tombol Logout -->
        <div class="p-6 border-t border-emerald-900/60">
            <a href="#" onclick="event.preventDefault(); alert('Logout Admin Berhasil');" class="flex items-center justify-center gap-2 bg-rose-950/40 hover:bg-rose-900/60 text-rose-200 text-xs font-bold py-3 rounded-xl transition border border-rose-800/40">
                <span>🚪</span> Keluar (Logout)
            </a>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <div class="flex-1 md:pl-72 flex flex-col min-h-screen">
        
        <!-- Topbar Sederhana -->
        <header class="bg-white/80 backdrop-blur-md border-b border-stone-200/80 h-20 px-8 flex items-center justify-between sticky top-0 z-30">
            <div class="flex items-center gap-3">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                <span class="text-xs font-bold uppercase tracking-wider text-stone-600">Admin Online • Rozwia System</span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-emerald-100 text-[#0B3B24] font-bold flex items-center justify-center text-sm font-serif">
                    AD
                </div>
            </div>
        </header>

        <!-- Main Section -->
        <main class="flex-1 p-6 lg:p-10">
            @yield('content')
        </main>

    </div>

</body>
</html>