<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Jamaah - ROZWIA Islamic Travel')</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <!-- Tailwind CSS v4 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <!-- Google Fonts: Abhaya Libre & Plus Jakarta Sans (Cadangan) -->
    <!-- Google Fonts: Memuat Abhaya Libre dari Regular (400) sampai ExtraBold (800) -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
     <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root { --rozwia-sand: #EBE1D3; }
        body { background-color: var(--rozwia-sand) !important; }
        [class~="bg-[#F4EFE6]"], [class~="bg-[#FAF8F5]"], [class~="bg-[#E5D3B3]"] { background-color: var(--rozwia-sand) !important; }
    </style>
    
    <style>
        /* Mengubah seluruh font default aplikasi menjadi Abhaya Libre */
        body { 
            font-family: 'Abhaya Libre', serif; 
        }
        .font-sans-fallback { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
        }
    </style>
</head>
<body class="bg-[#EBE1D3] min-h-screen flex text-stone-900 m-0">

    <!-- SIDEBAR KIRI (Stay / Sticky di posisinya) -->
    <aside class="w-80 bg-[#0B3B24] text-white flex flex-col justify-between p-8 shrink-0 h-screen sticky top-0 overflow-y-auto shadow-lg">
        <div class="space-y-10">
            <!-- Logo Rozwia -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('img/logo-rozwia.png') }}" alt="Logo Rozwia" class="w-12 h-12 object-contain">
                <div class="leading-tight">
                    <span class="block tracking-widest text-lg font-bold text-white">ROZWIA</span>
                    <span class="block text-[9px] tracking-widest text-[#D4B996] font-sans-fallback">~ ISLAMIC TRAVEL ~</span>
                </div>
            </div>

            <!-- Menu Navigasi -->
            <nav class="space-y-3">
                <a href="{{ route('user.dashboard') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-2xl {{ request()->routeIs('user.beranda') ? 'bg-[#E5D3B3] text-stone-900 font-bold shadow-sm' : 'text-white/80 hover:bg-white/10 transition' }}">
                    <span class="material-symbols-outlined">home</span>
                    <span class="text-base font-semibold">Beranda</span>
                </a>
                
                <a href="{{ route('user.dokumen') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-2xl {{ request()->routeIs('user.dokumen') ? 'bg-[#E5D3B3] text-stone-900 font-bold shadow-sm' : 'text-white/80 hover:bg-white/10 transition' }}">
                    <span class="material-symbols-outlined">description</span>
                    <span class="text-base font-semibold">Dokumen</span>
                </a>

                <a href="{{ route('user.status') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-2xl {{ request()->routeIs('user.status') ? 'bg-[#E5D3B3] text-stone-900 font-bold shadow-sm' : 'text-white/80 hover:bg-white/10 transition' }}">
                    <span class="material-symbols-outlined">pin_drop</span>
                    <span class="text-base font-semibold">Status Perjalanan</span>
                </a>

                <a href="{{ route('user.profile') }}" class="flex items-center gap-4 px-5 py-3.5 rounded-2xl {{ request()->routeIs('user.profile') ? 'bg-[#E5D3B3] text-stone-900 font-bold shadow-sm' : 'text-white/80 hover:bg-white/10 transition' }}">
                    <span class="material-symbols-outlined">account_circle</span>
                    <span class="text-base font-semibold">Profil</span>
                </a>
            </nav>
        </div>

        <!-- Bagian Bawah Sidebar (User Info & Keluar) -->
        <div class="space-y-6 pt-6 border-t border-white/10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#E5D3B3] text-stone-900 font-bold flex items-center justify-center text-base">
                    R
                </div>
                <div>
                    <strong class="block text-white text-base">Rinzani</strong>
                    <span class="text-xs text-emerald-200/70 font-sans-fallback">Jamaah Utama</span>
                </div>
            </div>

            <button onclick="alert('Keluar akun...')" class="w-full bg-[#C51B1B] hover:bg-red-700 text-white font-bold py-3 px-4 rounded-2xl flex items-center justify-center gap-2 transition shadow-md cursor-pointer">
                <span class="material-symbols-outlined">logout</span> Keluar
            </button>
        </div>
    </aside>

    <!-- KONTEN UTAMA KANAN -->
    <main class="flex-1 p-8 lg:p-12 space-y-8 overflow-y-auto min-w-0">
        @yield('content')
    </main>

</body>
</html>
