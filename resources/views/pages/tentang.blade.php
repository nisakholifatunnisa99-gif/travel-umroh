@extends('layouts.app')

@section('title', 'Tentang Kami - ROZWIA Islamic Travel')

@section('content')

<!-- CONTAINER UTAMA BACKGROUND FULL SE-LAYAR -->
<div class="w-full bg-[#F4EFE6] min-h-screen pb-24">
    
    <!-- BANNER HERO HEADER -->
    <div class="relative w-full bg-[#0B3B24] overflow-hidden shadow-md pt-36 pb-20 px-4 sm:px-6 lg:px-8 mb-16">
        <div class="absolute inset-0 opacity-20 bg-cover bg-center" style="background-image: url('{{ asset('img/about-us.jpg') }}')"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto text-center space-y-4">
            <p class="text-xs text-amber-300 font-serif tracking-widest uppercase">
                <a href="/" class="hover:underline">Beranda</a> &gt; <span class="text-white font-medium">Tentang Kami</span>
            </p>
            <h1 class="text-3xl sm:text-5xl font-bold text-white font-serif tracking-tight">
                Mengenal Lebih Dekat <br class="hidden sm:inline"> ROZWIA Islamic Travel
            </h1>
            <p class="text-emerald-100/90 text-sm sm:text-base font-serif max-w-2xl mx-auto leading-relaxed">
                Sahabat terpercaya dan profesional dalam mewujudkan perjalanan ibadah Umroh dan Haji khusus yang amanah, khusyuk, dan sesuai sunnah.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

        <!-- ================= 1. LATAR BELAKANG PERUSAHAAN & LEGALITAS ================= -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Kolom Teks Latar Belakang -->
            <div class="lg:col-span-7 space-y-6">
                <div class="space-y-2">
                    <span class="text-amber-700 font-bold uppercase tracking-wider text-xs font-serif">Latar Belakang & Legalitas</span>
                    <h2 class="text-2xl sm:text-4xl font-bold text-[#0B3B24] font-serif tracking-tight">
                        Penyelenggara Perjalanan Ibadah Suci Berizin Resmi Kemenag RI
                    </h2>
                </div>

                <div class="space-y-4 text-stone-700 text-xs sm:text-sm font-serif leading-relaxed bg-white p-6 sm:p-8 rounded-[28px] shadow-sm border border-stone-200/80">
                    <p>
                        <strong>PT ROZWIA Islamic Travel</strong> lahir dari panggilan mulia untuk memberikan kepastian, kenyamanan, dan rasa aman bagi umat Muslim di Indonesia yang rindu menunaikan ibadah ke Baitullah. Kami memahami bahwa perjalanan ke Tanah Suci adalah momen spiritual yang sangat sakral dalam hidup seorang Muslim.
                    </p>
                    <p>
                        Oleh karena itu, kami berkomitmen menghadirkan tata kelola travel yang transparan, akuntabel, dan profesional. Dengan dukungan perizinan resmi sebagai Penyelenggara Perjalanan Ibadah Umrah (PPIU) dan Penyelenggara Ibadah Haji Khusus (PIHK) di bawah pengawasan <strong>Kementerian Agama Republik Indonesia</strong>, setiap langkah perjalanan jamaah dijamin aman secara hukum dan regulasi.
                    </p>
                </div>

                <!-- Poin Statistik Resmi -->
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs space-y-1">
                        <span class="block text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">100%</span>
                        <span class="text-xs text-stone-600 font-serif font-medium">Berizin Resmi Kemenag RI</span>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-xs space-y-1">
                        <span class="block text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Bintang 5</span>
                        <span class="text-xs text-stone-600 font-serif font-medium">Akomodasi Dekat Haram</span>
                    </div>
                </div>
            </div>

            <!-- Kolom Gambar / Visual Estetik -->
            <div class="lg:col-span-5">
                <div class="relative h-[420px] rounded-[32px] overflow-hidden shadow-xl border-4 border-white">
                    <img src="{{ asset('img/Masjid-nabawi.jpg') }}" alt="Masjid Nabawi" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/70 via-transparent to-transparent flex items-end p-8">
                        <p class="text-white text-xs sm:text-sm font-serif italic">
                            "Melayani Tamu Allah dengan sepenuh hati, membimbing ibadah sesuai sunnah."
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <!-- ================= 2. LAYANAN KAMI ================= -->
        <div class="space-y-8">
            <div class="text-center space-y-2">
                <span class="text-amber-700 font-bold uppercase tracking-wider text-xs font-serif">Program Unggulan</span>
                <h3 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Layanan Perjalanan Kami</h3>
                <div class="w-16 h-1 bg-amber-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Paket Haji -->
                <div class="bg-[#0B3B24] rounded-3xl p-8 sm:p-10 shadow-lg text-white flex flex-col justify-between space-y-6 border border-emerald-900">
                    <div class="space-y-3">
                        <span class="bg-amber-400 text-emerald-950 text-[10px] font-bold font-serif px-3 py-1 rounded-full uppercase tracking-wider">Eksklusif & Resmi</span>
                        <h4 class="text-2xl font-bold font-serif text-amber-300">Paket Haji Khusus & Furoda</h4>
                        <p class="text-emerald-100/90 text-xs sm:text-sm font-serif leading-relaxed">
                            Program haji dengan kepastian keberangkatan tanpa antri panjang, didukung maktab VIP Armuzna, tenda ber-AC, serta akomodasi terbaik di dekat Masjidil Haram.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('paket.haji') }}" class="inline-block bg-[#E5D3B3] hover:bg-[#d8c4a1] text-emerald-950 font-serif font-bold text-xs px-6 py-3 rounded-full shadow-md transition">
                            Lihat Paket Haji
                        </a>
                    </div>
                </div>

                <!-- Paket Umrah -->
                <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-sm text-stone-800 flex flex-col justify-between space-y-6 border border-stone-200/80">
                    <div class="space-y-3">
                        <span class="bg-emerald-100 text-emerald-900 text-[10px] font-bold font-serif px-3 py-1 rounded-full uppercase tracking-wider">Pilihan Fleksibel</span>
                        <h4 class="text-2xl font-bold font-serif text-[#0B3B24]">Paket Umrah Reguler & Plus</h4>
                        <p class="text-stone-600 text-xs sm:text-sm font-serif leading-relaxed">
                            Berbagai pilihan durasi (9, 12, hingga 15 hari) serta program Umrah Plus wisata religi (Turki, Dubai, Kairo) dengan fasilitas hotel bintang 4 dan 5.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('paket.umroh') }}" class="inline-block bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-semibold text-xs px-6 py-3 rounded-full shadow-sm transition">
                            Lihat Paket Umrah
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- ================= 3. KEUNGGULAN LAYANAN KAMI ================= -->
        <div class="space-y-8">
            <div class="text-center space-y-2">
                <span class="text-amber-700 font-bold uppercase tracking-wider text-xs font-serif">Mengapa Memilih Kami</span>
                <h3 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Keunggulan Layanan ROZWIA</h3>
                <div class="w-16 h-1 bg-amber-500 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- 1 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/85 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Pelayanan Amanah</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Komitmen penuh memberikan pelayanan terbaik dan transparan bagi setiap jamaah.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">01</span>
                </div>

                <!-- 2 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/85 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Pembimbing Berpengalaman</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Didampingi muthawif dan ustadz kompeten sesuai tuntunan sunnah Rasulullah SAW.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">02</span>
                </div>

                <!-- 3 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/85 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Jadwal Pasti</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Kepastian tanggal keberangkatan dan maskapai penerbangan berstandar internasional.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">03</span>
                </div>

                <!-- 4 -->
                <div class="bg-white rounded-3xl p-6 shadow-sm border border-stone-200/85 space-y-4 relative flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-[#0B3B24] flex items-center justify-center font-bold">
                            <svg class="w-6 h-6 text-[#0B3B24]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h4 class="font-bold text-[#0B3B24] font-serif text-base">Biaya Transparan</h4>
                        <p class="text-xs text-stone-600 font-serif leading-relaxed">Rincian biaya jelas tanpa ada biaya tersembunyi selama proses perjalanan.</p>
                    </div>
                    <span class="absolute bottom-4 right-5 text-xs font-bold text-stone-300 font-serif">04</span>
                </div>
            </div>

            <!-- Quote banner kecil -->
            <div class="bg-[#0B3B24] text-white text-center py-4 px-6 rounded-2xl font-serif text-xs sm:text-sm tracking-wide shadow-sm">
                Lebih tenang mempersiapkan perjalanan, lebih fokus menjalankan ibadah.
            </div>
        </div>


        <!-- ================= 4. PERJALANAN IBADAH ANDA (8 TAHAPAN) ================= -->
        <div class="space-y-8">
            <div class="text-center space-y-2">
                <span class="text-amber-700 font-bold uppercase tracking-wider text-xs font-serif">Alur Pelayanan</span>
                <h3 class="text-2xl sm:text-4xl font-bold text-[#0B3B24] font-serif">
                    Perjalanan Ibadah Anda <br>
                    <span class="text-amber-700 italic">Selangkah demi Langkah</span>
                </h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-4">
                @php
                    $steps = [
                        ['num' => '1', 'title' => 'Pendaftaran', 'desc' => 'Pilih paket dan isi data diri jamaah.'],
                        ['num' => '2', 'title' => 'Persiapan Dokumen', 'desc' => 'Pengurusan paspor, visa, dan perlengkapan.'],
                        ['num' => '3', 'title' => 'Manasik & Pembekalan', 'desc' => 'Bimbingan tata cara ibadah sebelum berangkat.'],
                        ['num' => '4', 'title' => 'Keberangkatan', 'desc' => 'Penerbangan menuju Tanah Suci.'],
                        ['num' => '5', 'title' => 'Tiba di Tanah Suci', 'desc' => 'Penyambutan dan check-in hotel di Makkah/Madinah.'],
                        ['num' => '6', 'title' => 'Pelaksanaan Ibadah', 'desc' => 'Menjalankan umrah/haji dipandu muthawif.'],
                        ['num' => '7', 'title' => 'Perjalanan Pulang', 'desc' => 'Kepulangan jamaah kembali ke tanah air.'],
                        ['num' => '8', 'title' => 'Tiba di Indonesia', 'desc' => 'Jamaah berkumpul kembali dengan keluarga tercinta.'],
                    ];
                @endphp

                @foreach($steps as $step)
                <div class="bg-white rounded-2xl p-5 shadow-xs border border-stone-200/80 flex items-center gap-4 transition hover:border-emerald-300">
                    <span class="w-10 h-10 rounded-full bg-[#0B3B24] text-amber-300 text-sm font-bold flex items-center justify-center shrink-0 font-serif shadow-sm">
                        {{ $step['num'] }}
                    </span>
                    <div class="space-y-0.5">
                        <h4 class="font-bold text-[#0B3B24] text-xs font-serif">{{ $step['title'] }}</h4>
                        <p class="text-[11px] text-stone-600 font-serif leading-tight">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <!-- ================= 5. HUBUNGI KAMI & LOKASI KANTOR ================= -->
        <div class="bg-white rounded-[36px] p-8 sm:p-12 shadow-sm border border-stone-200/80 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6 space-y-6">
                <div class="space-y-2">
                    <h3 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Hubungi Kami</h3>
                    <p class="text-stone-600 text-xs sm:text-sm font-serif leading-relaxed">
                        Ada pertanyaan seputar paket, jadwal keberangkatan, atau pendaftaran? Tim ROZWIA siap membantu memberikan informasi dan menjawab kebutuhan perjalanan ibadah Anda.
                    </p>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="https://wa.me/6289518829438" target="_blank" class="bg-emerald-50 hover:bg-emerald-100 text-[#0B3B24] border border-emerald-200 px-5 py-3 rounded-2xl font-serif text-xs font-bold flex items-center gap-2.5 transition">
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
                                </svg> 0895-1882-9438
                    </a>
                    <a href="mailto:Rozwia@gmail.com" class="bg-emerald-50 hover:bg-emerald-100 text-[#0B3B24] border border-emerald-200 px-5 py-3 rounded-2xl font-serif text-xs font-bold flex items-center gap-2.5 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
	                            <path d="M0 0h1024v1024H0z" fill="none" />
	                            <path fill="currentColor" fill-opacity=".15" d="M477.5 536.3L135.9 270.7l-27.5-21.4l27.6 21.5V792h752V270.8L546.2 536.3a55.99 55.99 0 0 1-68.7 0" />
	                            <path fill="currentColor" fill-opacity=".15" d="m876.3 198.8l39.3 50.5l-27.6 21.5l27.7-21.5l-39.3-50.5z" />
	                            <path fill="currentColor" d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32m-94.5 72.1L512 482L190.5 232.1zm54.5 38.7V792H136V270.8l-27.6-21.5l27.5 21.4l341.6 265.6a55.99 55.99 0 0 0 68.7 0zl27.6-21.5l-39.3-50.5h.1l39.3 50.5z" />
                            </svg> Rozwia@gmail.com
                    </a>
                </div>

                <div class="space-y-2 pt-2 border-t border-stone-200">
                    <h4 class="font-bold text-[#0B3B24] text-xs font-serif uppercase tracking-wider">Kantor Pusat:</h4>
                    <p class="text-xs text-stone-600 font-serif leading-relaxed">
                        Graha Kartika Pratama Blok F2 Nomor 11 Kelurahan Bojong Baru Kecamatan Bojong Gede Kabupaten Bogor Jawa Barat
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ route('faq') }}" class="bg-stone-100 hover:bg-stone-200 text-stone-800 font-serif font-bold text-xs px-6 py-3 rounded-2xl transition">
                        Lihat Pertanyaan Umum
                    </a>
                    <a href="https://wa.me/6289518829438?text=Assalamualaikum%20ROZWIA,%20saya%20ingin%20berkonsultasi%20mengenai%20perjalanan%20ibadah." target="_blank" class="bg-[#25D366] hover:bg-[#20ba5a] text-white font-serif font-bold text-xs px-6 py-3 rounded-2xl shadow-md transition flex items-center gap-2">
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
                                </svg> Chat Via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Google Maps Embed -->
            <div class="lg:col-span-6">
                <div class="relative h-72 sm:h-80 rounded-2xl overflow-hidden shadow-inner border border-stone-300">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.398695027581!2d106.7925!3d-6.5275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzEnMzkuMCJTIDE0NsKwNDcnMzMuMCJF!5e0!3m2!1sid!2sid!4v1650000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection