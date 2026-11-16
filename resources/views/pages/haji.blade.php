@extends('layouts.app')

@section('title', 'Paket Haji - Rozwia Islamic Travel')

@section('content')

<!-- CONTAINER UTAMA DENGAN BACKGROUND FULL SE-LAYAR -->
<div class="w-full bg-[#F4EFE6] min-h-screen pb-24">
    
    <!-- BANNER HERO HEADER -->
    <div class="relative w-full bg-[#0B3B24] overflow-hidden shadow-md pt-36 pb-16 px-4 sm:px-6 lg:px-8 mb-12">
        <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1200')"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto space-y-3">
            <p class="text-xs text-amber-300 font-serif tracking-widest uppercase">
                <a href="/" class="hover:underline">Beranda</a> &gt; <span class="text-white font-medium">Paket Haji</span>
            </p>
            <h1 class="text-3xl sm:text-5xl font-bold text-white font-serif tracking-tight">
                Paket Haji Khusus & Furoda
            </h1>
            <p class="text-emerald-100/90 text-sm sm:text-base max-w-xl font-serif leading-relaxed">
                Wujudkan perjalanan ibadah haji yang nyaman, amanah, dan berkesan bersama ROZWIA.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        @php
            $activeFilter = request('filter', 'semua');

            // Data Haji dengan ID unik (101 - 105) yang sesuai dengan routes/web.php
            $hajiList = [
                [
                    'id' => 101,
                    'title' => 'Perjalanan Haji Penuh Makna', 
                    'desc' => 'Wujudkan niat suci menuju Baitullah melalui penyelenggaraan Haji Reguler dengan rangkaian ibadah yang terencana sesuai ketentuan pemerintah.', 
                    'days' => '40 Hari', 
                    'filter_key' => 'reguler',
                    'route' => 'Makkah Madinah Arafah Muzdalifah Mina', 
                    'price' => 'Rp 53.543.779', 
                    'tag' => 'Reguler 2025', 
                    'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 102,
                    'title' => 'Mabrur Hajj Journey', 
                    'desc' => 'Nikmati perjalanan ibadah Haji dengan layanan khusus dan pendampingan yang dirancang untuk memberikan kenyamanan selama berada di Tanah Suci.', 
                    'days' => '± 25 Hari', 
                    'filter_key' => 'plus',
                    'route' => 'Makkah Madinah Arafah Muzdalifah Mina', 
                    'price' => 'Rp 255.000.000', 
                    'tag' => '2025', 
                    'img' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 103,
                    'title' => 'Blessed Hajj Experience', 
                    'desc' => 'Perjalanan istimewa untuk menunaikan ibadah Haji dengan fasilitas dan pelayanan sesuai pilihan program, agar setiap rangkaian ibadah terasa lebih nyaman.', 
                    'days' => '± 25 Hari', 
                    'filter_key' => 'plus',
                    'route' => 'Makkah Madinah Arafah, Muzdalifah Mina', 
                    'price' => 'Rp 310.000.000', 
                    'tag' => '2025', 
                    'img' => 'https://images.unsplash.com/photo-1565552420067-1d6741972754?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 104,
                    'title' => 'Exclusive Hajj Journey', 
                    'desc' => 'Perjalanan Haji melalui jalur visa undangan dari Pemerintah Arab Saudi, dengan layanan perjalanan yang disesuaikan berdasarkan program penyelenggara.', 
                    'days' => '± 26 Hari', 
                    'filter_key' => 'furoda',
                    'route' => 'Makkah Madinah Arafah, Muzdalifah Mina', 
                    'price' => 'Rp 365.000.000', 
                    'tag' => '2027', 
                    'img' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 105,
                    'title' => 'Royal Hajj Journey', 
                    'desc' => 'Rasakan perjalanan ibadah yang berkesan dengan pendampingan dan layanan sesuai program, untuk menemani langkah menuju Baitullah.', 
                    'days' => '± 30 Hari', 
                    'filter_key' => 'furoda',
                    'route' => 'Makkah Madinah Arafah, Muzdalifah Mina', 
                    'price' => 'Rp 450.000.000', 
                    'tag' => '2027', 
                    'img' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=800'
                ],
            ];

            $filteredHaji = collect($hajiList)->filter(function($item) use ($activeFilter) {
                if ($activeFilter === 'semua') return true;
                return $item['filter_key'] === $activeFilter;
            });
        @endphp

        <!-- FILTER KATEGORI PILL -->
        <div class="flex flex-wrap items-center gap-2 pt-2">
            <a href="{{ route('paket.haji', ['filter' => 'semua']) }}" class="{{ $activeFilter === 'semua' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">Semua</a>
            
            <a href="{{ route('paket.haji', ['filter' => 'reguler']) }}" class="{{ $activeFilter === 'reguler' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">Haji Reguler</a>
            
            <a href="{{ route('paket.haji', ['filter' => 'plus']) }}" class="{{ $activeFilter === 'plus' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">Haji Plus</a>
            
            <a href="{{ route('paket.haji', ['filter' => 'furoda']) }}" class="{{ $activeFilter === 'furoda' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">Haji Furoda</a>
        </div>

        <!-- GRID KATALOG HAJI -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @forelse($filteredHaji as $item)
            <div class="bg-white rounded-3xl p-5 shadow-sm border border-stone-200/80 flex flex-col justify-between space-y-5">
                <div class="space-y-4">
                    <div class="relative w-full h-56 rounded-2xl overflow-hidden shadow-xs">
                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                        @if(!empty($item['tag']))
                        <span class="absolute top-3 left-3 bg-[#E5D3B3] text-emerald-950 font-serif text-[10px] font-bold px-3 py-1 rounded-full shadow-xs">
                            {{ $item['tag'] }}
                        </span>
                        @endif
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-xl font-bold text-[#0B3B24] font-serif">{{ $item['title'] }}</h3>
                        <p class="text-stone-600 text-xs leading-relaxed font-serif">
                            {{ $item['desc'] }}
                        </p>
                    </div>

                    <div class="bg-[#E5D3B3]/70 rounded-full px-4 py-3 flex items-center justify-between border border-stone-300/40 text-emerald-950 font-serif">
                        <div class="flex items-center gap-2 px-1">
                            <svg class="w-4 h-4 text-emerald-950 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-[11px] font-bold">{{ $item['days'] }}</span>
                        </div>

                        <div class="w-[1px] h-5 bg-stone-400/50"></div>

                        <div class="flex items-center gap-1.5 px-1 col-span-2">
                            <svg class="w-4 h-4 text-emerald-950 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-[10px] font-bold leading-tight truncate max-w-[180px]">{{ $item['route'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-stone-200 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] text-stone-500 block uppercase font-serif">Mulai Dari</span>
                        <span class="text-base font-bold text-stone-900 font-serif">{{ $item['price'] }}</span>
                    </div>
                    <!-- PERBAIKAN: Menggunakan ID dinamis $item['id'] agar mengarah ke detail haji yang tepat -->
                    <a href="{{ route('paket.detail', $item['id']) }}" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-semibold text-xs px-5 py-2.5 rounded-full shadow-sm transition">
                        Detail Paket
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-16 text-stone-600 font-serif">
                <p>Belum ada paket haji untuk kategori ini.</p>
            </div>
            @endforelse

        </div>

    </div>
</div>

@endsection