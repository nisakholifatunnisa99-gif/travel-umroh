<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard - Pangrango Berkah')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-stone-100 font-sans text-stone-800 antialiased">

    <div class="flex h-screen overflow-hidden">
        <!-- SIDEBAR -->
        <aside class="w-64 bg-emerald-950 text-emerald-100 flex flex-col justify-between hidden md:flex border-r border-emerald-900">
            <div>
                <!-- Logo Sidebar -->
                <div class="h-20 flex items-center px-6 border-b border-emerald-900">
                    <a href="/" class="text-lg font-bold tracking-wider text-white font-serif">
                        PANGRANGO <span class="text-amber-400 font-light">BERKAH</span>
                    </a>
                </div>

                <!-- Nav Links -->
                <nav class="p-4 space-y-1.5 text-sm font-medium">
                    <a href="{{ route('user.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-900/80 text-white shadow-xs">
                        <span>📊</span> Dashboard Utama
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-900/40 text-emerald-200 transition">
                        <span>📋</span> Formulir & Pemesanan DP
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-900/40 text-emerald-200 transition">
                        <span>📁</span> Unggah Dokumen (KTP/Paspor)
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-900/40 text-emerald-200 transition">
                        <span>✈️</span> Status & Tracking Keberangkatan
                    </a>
                </nav>
            </div>

            <!-- Logout Section -->
            <div class="p-4 border-t border-emerald-900">
                <form action="#" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 bg-emerald-900/50 hover:bg-red-950/60 text-emerald-200 hover:text-red-200 py-2.5 rounded-xl text-sm font-medium transition border border-emerald-800/50">
                        🚪 Keluar (Logout)
                    </button>
                </form>
            </div>
        </aside>

        <!-- KONTEN UTAMA DASHBOARD -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <!-- Top Header Dashboard -->
            <header class="h-20 bg-white shadow-xs border-b border-stone-200 flex items-center justify-between px-6 z-10">
                <div class="flex items-center gap-4">
                    <h1 class="text-xl font-bold text-emerald-950 font-serif">@yield('header-title', 'Dashboard Jamaah')</h1>
                </div>
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <span class="block text-sm font-semibold text-stone-800">Ahmad Fauzi</span>
                        <span class="block text-xs text-amber-700 font-medium">Jamaah Terverifikasi</span>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-emerald-800 text-white flex items-center justify-center font-bold">
                        AF
                    </div>
                </div>
            </header>

            <!-- Main Dynamic Content -->
            <main class="p-8">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>