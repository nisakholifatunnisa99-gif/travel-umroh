@extends('layouts.app')

@section('title', 'Paket Umroh - Rozwia Islamic Travel')

@section('content')

<!-- CONTAINER UTAMA DENGAN BACKGROUND FULL SE-LAYAR -->
<div class="w-full bg-[#F4EFE6] min-h-screen pb-24">
    
    <!-- BANNER HERO HEADER -->
    <div class="relative w-full bg-[#0B3B24] overflow-hidden shadow-md pt-36 pb-16 px-4 sm:px-6 lg:px-8 mb-12">
        <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=1200')"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto space-y-3">
            <p class="text-xs text-amber-300 font-serif tracking-widest uppercase">
                <a href="/" class="hover:underline">Beranda</a> &gt; <span class="text-white font-medium">Paket Umroh</span>
            </p>
            <h1 class="text-3xl sm:text-5xl font-bold text-white font-serif tracking-tight">
                Paket Perjalanan Umroh
            </h1>
            <p class="text-emerald-100/90 text-sm sm:text-base max-w-xl font-serif leading-relaxed">
                Pilih paket dan jadwal keberangkatan umroh terbaik dengan fasilitas nyaman dan pendampingan sesuai sunnah bersama ROZWIA.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        @php
            // Ambil filter yang sedang aktif dari URL (default: 'semua')
            $activeFilter = request('filter', 'semua');

            // Data Seluruh Paket Umroh (Ditambahkan 'id' agar sesuai dengan mapping web.php)
            $umrohList = [
                [
                    'id' => 1,
                    'title' => 'January Umroh & Istanbul', 
                    'desc' => 'Paket umroh eksklusif digabungkan dengan wisata religi ke Istanbul, Turki. Fasilitas hotel bintang 5.', 
                    'days' => '9 Hari', 
                    'filter_key' => '9-hari',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 5', 
                    'price' => 'Rp 34.500.000', 
                    'tag' => 'Terlaris', 
                    'img' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 2,
                    'title' => 'Sacred Journey', 
                    'desc' => 'Perjalanan Umroh yang nyaman dan terencana untuk meraih keberkahan di Tanah Suci.', 
                    'days' => '9 Hari', 
                    'filter_key' => '9-hari',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 4', 
                    'price' => 'Rp 30.000.000', 
                    'tag' => 'Reguler', 
                    'img' => 'https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 3,
                    'title' => 'Serenity Journey', 
                    'desc' => 'Luangkan lebih banyak waktu untuk beribadah dan menikmati ketenangan di Makkah serta Madinah.', 
                    'days' => '12 Hari', 
                    'filter_key' => '12-hari',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 5', 
                    'price' => 'Rp 35.000.000', 
                    'tag' => 'Favorit', 
                    'img' => 'https://images.unsplash.com/photo-1565552420067-1d6741972754?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 4,
                    'title' => 'Graceful Journey', 
                    'desc' => 'Perjalanan Umroh dengan waktu lebih leluasa untuk memperdalam pengalaman spiritual.', 
                    'days' => '12 Hari', 
                    'filter_key' => '12-hari',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 4', 
                    'price' => 'Rp 40.000.000', 
                    'tag' => '', 
                    'img' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 5,
                    'title' => 'Spiritual Journey', 
                    'desc' => 'Perjalanan ibadah yang lebih panjang untuk menikmati setiap momen berharga di Tanah Suci.', 
                    'days' => '15 Hari', 
                    'filter_key' => '15-hari',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 4', 
                    'price' => 'Rp 45.000.000', 
                    'tag' => '', 
                    'img' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 6,
                    'title' => 'Barakah Journey', 
                    'desc' => 'Rasakan perjalanan penuh keberkahan dengan waktu ibadah yang lebih leluasa.', 
                    'days' => '15 Hari', 
                    'filter_key' => '15-hari',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 4', 
                    'price' => 'Rp 48.000.000', 
                    'tag' => '', 
                    'img' => 'https://images.unsplash.com/photo-1565552420067-1d6741972754?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 7,
                    'title' => 'Faith & Discovery', 
                    'desc' => 'Perjalanan ibadah Umroh yang dilengkapi wisata ke Turki. Kunjungi keindahan Istanbul dan Hagia Sophia.', 
                    'days' => '12 Hari', 
                    'filter_key' => 'umroh-plus',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 4', 
                    'price' => 'Rp 50.000.000', 
                    'tag' => 'Umroh Plus', 
                    'img' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?auto=format&fit=crop&q=80&w=800'
                ],
                [
                    'id' => 8,
                    'title' => 'Explore & Worship', 
                    'desc' => 'Padukan perjalanan ibadah di Tanah Suci dengan pengalaman menjelajahi Dubai dan gurun pasir.', 
                    'days' => '12 Hari', 
                    'filter_key' => 'umroh-plus',
                    'route' => 'Makkah & Madinah', 
                    'hotel' => 'Hotel Bintang 5', 
                    'price' => 'Rp 56.000.000', 
                    'tag' => 'Umroh Plus', 
                    'img' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&q=80&w=800'
                ],
            ];

            // Filter data jika tombol kategori dipilih
            $filteredList = collect($umrohList)->filter(function($item) use ($activeFilter) {
                if ($activeFilter === 'semua') return true;
                if ($activeFilter === 'ramadhan') return str_contains(strtolower($item['title']), 'ramadhan');
                return $item['filter_key'] === $activeFilter;
            });
        @endphp

        <!-- FILTER KATEGORI PILL -->
        <div class="flex flex-wrap items-center gap-2 pt-2">
            <a href="{{ route('paket.umroh', ['filter' => 'semua']) }}" class="{{ $activeFilter === 'semua' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">Semua</a>
            
            <a href="{{ route('paket.umroh', ['filter' => '9-hari']) }}" class="{{ $activeFilter === '9-hari' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">9 Hari</a>
            
            <a href="{{ route('paket.umroh', ['filter' => '12-hari']) }}" class="{{ $activeFilter === '12-hari' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">12 Hari</a>
            
            <a href="{{ route('paket.umroh', ['filter' => '15-hari']) }}" class="{{ $activeFilter === '15-hari' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">15 Hari</a>
            
            <a href="{{ route('paket.umroh', ['filter' => 'ramadhan']) }}" class="{{ $activeFilter === 'ramadhan' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">Paket Ramadhan</a>
            
            <a href="{{ route('paket.umroh', ['filter' => 'umroh-plus']) }}" class="{{ $activeFilter === 'umroh-plus' ? 'bg-[#0B3B24] text-white' : 'bg-white hover:bg-emerald-50 text-[#0B3B24]' }} border border-[#0B3B24] text-xs font-semibold px-5 py-2.5 rounded-full shadow-xs transition">Umroh plus</a>
        </div>

        <!-- GRID KATALOG UMROH -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @forelse($filteredList as $item)
            <div class="bg-white rounded-3xl p-5 shadow-sm border border-stone-200/80 flex flex-col justify-between space-y-5">
                <div class="space-y-4">
                    <!-- Gambar Banner Card -->
                    <div class="relative w-full h-56 rounded-2xl overflow-hidden shadow-xs">
                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                        @if(!empty($item['tag']))
                        <span class="absolute top-3 left-3 bg-[#E5D3B3] text-emerald-950 font-serif text-[10px] font-bold px-3 py-1 rounded-full shadow-xs">
                            {{ $item['tag'] }}
                        </span>
                        @endif
                    </div>

                    <!-- Judul & Deskripsi -->
                    <div class="space-y-2">
                        <h3 class="text-xl font-bold text-[#0B3B24] font-serif">{{ $item['title'] }}</h3>
                        <p class="text-stone-600 text-xs leading-relaxed font-serif">
                            {{ $item['desc'] }}
                        </p>
                    </div>

                    <!-- Info Pill Elegan (Tanpa Emoji, Menggunakan SVG Ikon) -->
                    <div class="bg-[#E5D3B3]/70 rounded-full px-4 py-3 flex items-center justify-between border border-stone-300/40 text-emerald-950 font-serif">
                        <!-- 1. Durasi Hari -->
                        <div class="flex items-center gap-2 px-1">
                            <svg class="w-4 h-4 text-emerald-950 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-[11px] font-bold">{{ $item['days'] }}</span>
                        </div>

                        <div class="w-[1px] h-5 bg-stone-400/50"></div>

                        <!-- 2. Rute Lokasi -->
                        <div class="flex items-center gap-1.5 px-1">
                            <svg class="w-4 h-4 text-emerald-950 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-[10px] font-bold leading-tight">{{ $item['route'] }}</span>
                        </div>

                        <div class="w-[1px] h-5 bg-stone-400/50"></div>

                        <!-- 3. Hotel -->
                        <div class="flex items-center gap-1.5 px-1">
                            <svg class="w-4 h-4 text-emerald-950 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                            <span class="text-[10px] font-bold leading-tight">{{ $item['hotel'] }}</span>
                        </div>
                    </div>
                </div>

                <!-- Harga & Tombol Detail (MENGGUNAKAN ID DINAMIS $item['id']) -->
                <div class="pt-4 border-t border-stone-200 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] text-stone-500 block uppercase font-serif">Mulai Dari</span>
                        <span class="text-base font-bold text-stone-900 font-serif">{{ $item['price'] }}</span>
                    </div>
                    <a href="{{ route('paket.detail', $item['id']) }}" class="bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-semibold text-xs px-5 py-2.5 rounded-full shadow-sm transition">
                        Detail Paket
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-16 text-stone-600 font-serif">
                <p>Belum ada paket umroh untuk kategori ini.</p>
            </div>
            @endforelse

        </div>

        <!-- CTA BANNER BAWAH -->
        <section class="pt-8">
            <div class="bg-[#0B3B24] rounded-[32px] p-8 sm:p-14 shadow-xl border border-emerald-900 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                <div class="space-y-3 max-w-xl">
                    <h2 class="text-2xl sm:text-4xl font-serif font-bold text-white tracking-tight">
                        Siap Memulai Perjalanan Menuju Baitullah?
                    </h2>
                    <p class="text-emerald-100/85 text-sm sm:text-base font-serif leading-relaxed">
                        Jangan ragu untuk mengambil langkah pertama. Daftarkan diri Anda atau konsultasi kebutuhan perjalanan Umrah bersama tim ROZWIA.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-4 shrink-0">
                    <a href="{{ route('paket.umroh') }}" class="bg-amber-500 hover:bg-amber-400 text-emerald-950 font-serif font-bold text-sm px-7 py-3.5 rounded-2xl shadow-md transition transform hover:-translate-y-0.5">
                        Daftar Paket
                    </a>
                    <a href="https://wa.me/6289518829438?text=Assalamualaikum%20ROZWIA,%20saya%20ingin%20bertanya%20mengenai%20jadwal%20keberangkatan%20dan%20paket%20umroh." target="_blank" class="bg-[#25D366] hover:bg-[#20ba5a] text-white font-serif font-bold text-sm px-7 py-3.5 rounded-2xl shadow-md transition transform hover:-translate-y-0.5 flex items-center gap-2">
                        <span>💬</span> Chat Via WhatsApp
                    </a>
                </div>
            </div>
        </section>

    </div>
</div>

@endsection