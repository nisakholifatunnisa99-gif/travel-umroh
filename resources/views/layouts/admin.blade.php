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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#F4EFE6] font-sans text-stone-800 antialiased min-h-screen flex">

    <!-- ================= SIDEBAR KIRI MENEMPEL PENUH ================= -->
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

            <!-- Menu Navigasi Sidebar (Gunakan link <a> dengan route Laravel yang sesuai) -->
<nav class="space-y-2 font-serif text-sm">
    <a href="{{ route('admin.dashboard') }}" 
       class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('admin.dashboard') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
        <span class="material-symbols-outlined">finance</span>
        <span>Dashboard & Keuangan</span>
    </a>

    <a href="{{ route('admin.dokumen') }}" 
       class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('admin.dokumen') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
        <span class="material-symbols-outlined">scan</span>
        <span>Verifikasi Dokumen</span>
    </a>

    <a href="{{ route('admin.kemenag') }}" 
       class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('admin.kemenag') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
        <span class="material-symbols-outlined">passport</span>
        <span>Surat Kemenag & Visa</span>
    </a>

    <a href="{{ route('admin.hotel') }}" 
       class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('admin.hotel') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
        <span class="material-symbols-outlined">flights_and_hotels</span>
        <span>Hotel & Pesawat</span>
    </a>

    <a href="{{ route('admin.manifest') }}" 
       class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('admin.manifest') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
        <span class="material-symbols-outlined">edit_calendar</span>
        <span>Jadwal & Manifest</span>
    </a>
</nav>
        </div>

        <!-- Profil Admin & Tombol Keluar -->
        <div class="pt-6 border-t border-emerald-800/80 flex items-center justify-between font-serif">
            <div class="flex items-center gap-3 overflow-hidden">
                <span class="material-symbols-outlined">account_circle</span>
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


    <!-- ================= AREA KONTEN KANAN ================= -->
    <main class="flex-1 ml-72 min-h-screen p-6 sm:p-10">
        <div class="max-w-6xl mx-auto space-y-6">
            @yield('content')
        </div>
    </main>

</body>
</html>