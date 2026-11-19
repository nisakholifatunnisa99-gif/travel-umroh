<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Supervisor Panel - ROZWIA')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-[#F4EFE6] font-sans text-stone-800 antialiased min-h-screen flex">

    <!-- SIDEBAR KIRI -->
    <aside class="w-72 bg-[#0B3B24] text-[#E5D3B3] flex flex-col justify-between fixed inset-y-0 left-0 z-40 shadow-xl p-6">
        <div class="space-y-8">
            <div class="flex items-center gap-3 pb-4 border-b border-emerald-800/80 font-serif">
                <img src="{{ asset('img/logo-rozwia.png') }}" alt="Logo Rozwia" class="w-10 h-10 object-contain">
                <div class="leading-tight">
                    <span class="block tracking-widest text-lg font-bold text-white">ROZWIA</span>
                    <span class="block text-[9px] tracking-widest text-[#E5D3B3]">~ ISLAMIC TRAVEL ~</span>
                </div>
            </div>

            <nav class="space-y-2 font-serif text-sm">
                <a href="{{ route('supervisor.dashboard') }}" 
                   class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('supervisor.profile') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
                    <span class="material-symbols-outlined">home_work</span> <span>Beranda</span>
                </a>
                <a href="{{ route('supervisor.profile') }}" 
                   class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('supervisor.profile') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
                    <span class="material-symbols-outlined">home_work</span> <span>Profile Perusahaan</span>
                </a>
                <a href="{{ route('supervisor.paket') }}" 
                   class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('supervisor.paket') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
                    <span class="material-symbols-outlined">box_edit</span> <span>Kelola Paket</span>
                </a>
                <a href="{{ route('supervisor.users') }}" 
                   class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('supervisor.users') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
                    <span class="material-symbols-outlined">person</span> <span>Daftar Akun Pengguna</span>
                </a>
                <a href="{{ route('supervisor.biaya') }}" 
                   class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl transition text-left {{ request()->routeIs('supervisor.biaya') ? 'bg-[#E5D3B3] text-[#0B3B24] font-bold shadow-md' : 'text-[#E5D3B3] hover:bg-emerald-900/60' }}">
                    <span class="material-symbols-outlined">money_bag</span> <span>Total Biaya</span>
                </a>
            </nav>
        </div>

        <div class="pt-6 border-t border-emerald-800/80 flex flex-col space-y-4 font-serif">
            <div class="flex items-center gap-3 overflow-hidden">
                <div class="w-10 h-10 rounded-full bg-emerald-800 border border-[#E5D3B3]/40 flex items-center justify-center text-white">👤</div>
                <div class="overflow-hidden leading-tight">
                    <p class="text-xs font-bold text-white truncate">Supervisor</p>
                    <span class="text-[10px] text-emerald-300">Akses Penuh</span>
                </div>
            </div>
            <form action="{{ route('logout') ?? '#' }}" method="POST">
                @csrf
                <button type="submit" class="w-full py-2.5 bg-red-700 hover:bg-red-800 text-white text-xs font-bold rounded-xl transition cursor-pointer text-center shadow-md">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- KONTEN UTAMA KANAN -->
    <main class="flex-1 ml-72 min-h-screen p-6 sm:p-10">
        <div class="max-w-6xl mx-auto space-y-6">
            @yield('content')
        </div>
    </main>

</body>
</html>