<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - ROZWIA Islamic Travel')</title>

    <!-- Tailwind CSS v4 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#F4EFE6] font-sans text-stone-800 antialiased min-h-screen flex" x-data="{ currentTab: 'dashboard' }">

    <!-- ================= SIDEBAR KIRI MENPEL PENUH (FIXED & FULL HEIGHT) ================= -->
    <aside class="w-72 bg-[#0B3B24] text-[#E5D3B3] flex flex-col justify-between fixed inset-y-0 left-0 z-40 shadow-xl p-6">
        
        <div class="space-y-8">
            <!-- Logo Header Sidebar -->
            <div class="flex items-center gap-3 pb-4 border-b border-emerald-800/80 font-serif">
                <span class="text-3xl">🕌</span>
                <div class="leading-tight">
                    <span class="block tracking-widest text-lg font-bold text-white">ROZWIA</span>
                    <span class="block text-[9px] tracking-widest text-[#E5D3B3]">~ ADMIN PANEL ~</span>
                </div>
            </div>

            <!-- Menu Navigasi Sidebar -->
            <nav class="space-y-2 font-serif text-sm">
                <!-- 1. Dashboard & Keuangan -->
                <button @click="currentTab = 'dashboard'" 
                        :class="currentTab === 'dashboard' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                    
                    <span>Dashboard & Keuangan</span>
                </button>

                <!-- 2. Verifikasi Dokumen -->
                <button @click="currentTab = 'dokumen'" 
                        :class="currentTab === 'dokumen' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                    
                    <span>Verifikasi Dokumen</span>
                </button>

                <!-- 3. Surat Kemenag & Visa -->
                <button @click="currentTab = 'kemenag'" 
                        :class="currentTab === 'kemenag' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                    
                    <span>Surat Kemenag & Visa</span>
                </button>

                <!-- 4. Hotel & Pesawat -->
                <button @click="currentTab = 'hotel'" 
                        :class="currentTab === 'hotel' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                    
                    <span>Hotel & Pesawat</span>
                </button>

                <!-- 5. Jadwal & Manifest -->
                <button @click="currentTab = 'manifest'" 
                        :class="currentTab === 'manifest' ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60'"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left cursor-pointer">
                    
                    <span>Jadwal & Manifest</span>
                </button>
            </nav>
        </div>

        <!-- Profil Admin & Tombol Keluar di Bawah Sidebar -->
        <div class="pt-6 border-t border-emerald-800/80 flex items-center justify-between font-serif">
            <div class="flex items-center gap-3 overflow-hidden">
                <div class="w-10 h-10 rounded-full bg-emerald-800 border border-[#E5D3B3]/40 flex items-center justify-center text-base shrink-0 text-white">
                    👑
                </div>
                <div class="overflow-hidden">
                    <p class="text-xs font-bold text-white truncate">Super Admin</p>
                    <a href="/" class="text-[10px] text-emerald-300 hover:underline">← Beranda</a>
                </div>
            </div>
            <form action="{{ route('logout') ?? '#' }}" method="POST">
                @csrf
                <button type="submit" class="text-xs text-rose-400 hover:text-rose-300 font-semibold transition cursor-pointer">
                    Keluar
                </button>
            </form>
        </div>

    </aside>


    <!-- ================= AREA KONTEN KANAN ADMIN (DENGAN MARGIN KIRI SEBESAR LEBAR SIDEBAR) ================= -->
    <main class="flex-1 ml-72 min-h-screen p-6 sm:p-10">
        <div class="max-w-6xl mx-auto space-y-6">
            @yield('content')
        </div>
    </main>

</body>
</html>