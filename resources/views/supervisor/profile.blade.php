@extends('layouts.supervisor')

@section('title', 'Profile Perusahaan - Supervisor ROZWIA')

@section('content')
<div class="space-y-6 font-serif">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h1 class="text-3xl font-bold text-[#0B3B24]">Profile Perusahaan</h1>
            <p class="text-xs text-stone-600 font-sans">Kelola Identitas Perusahaan Travel</p>
        </div>
        <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-full border border-stone-200 shadow-sm">
            <span class="material-symbols-outlined">notifications</span>
            <div class="border-l border-stone-200 pl-3 leading-tight">
                <p class="text-xs font-bold text-[#0B3B24]">Nama Akun</p>
                <span class="text-[10px] text-stone-500 font-sans">Supervisor</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start font-sans">
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-[#0B3B24] text-[#E5D3B3] rounded-[32px] p-6 sm:p-8 shadow-lg space-y-6">
                <div class="w-16 h-16 rounded-2xl bg-emerald-900 border border-emerald-700 flex items-center justify-center text-3xl"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
	                <path d="M0 0h24v24H0z" fill="none" />
	                <path fill="currentColor" d="M21 6h-4V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v3.38L2.11 9.83A2 2 0 0 0 1 11.62V21c0 .55.45 1 1 1h3.88v-8.99L7.87 12v10H22c.55 0 1-.45 1-1V8c0-1.1-.9-2-2-2m-8 10h-2v-2h2zm0-4h-2v-2h2zm0-4h-2V6h2zm6 8h-2v-2h2zm0-4h-2v-2h2z" />
                </svg>
                </div>
                <div class="space-y-1 font-serif">
                    <h2 class="text-2xl font-bold text-white">Rozwia Islamic Travel</h2>
                    <p class="text-xs text-emerald-200/80">Penyelenggara Umroh dan Haji Resmi</p>
                </div>
                <div class="inline-block bg-white text-[#0B3B24] text-[11px] font-bold px-3.5 py-1.5 rounded-full">PPIU No. 1023/2021</div>
            </div>

            <div class="bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-4 text-xs">
                <div class="flex items-start gap-3">
                    <span class="material-symbols-outlined">mail</span>
                    <div>
                        <span class="text-stone-400 block text-[10px] font-bold uppercase tracking-wider">Email</span>
                        <span class="font-bold text-[#0B3B24]">Rozwia@gmail.com</span>
                    </div>
                </div>
                <div class="flex items-start gap-3 pt-2 border-t border-stone-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 256 258">
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
                    </svg>

                    <div>
                        <span class="text-stone-400 block text-[10px] font-bold uppercase tracking-wider">Telepon</span>
                        <span class="font-bold text-[#0B3B24]">0895-1882-9438</span>
                    </div>
                </div>
                <div class="flex items-start gap-3 pt-2 border-t border-stone-100">
                    <span class="material-symbols-outlined">location_on</span>
                    <div>
                        <span class="text-stone-400 block text-[10px] font-bold uppercase tracking-wider">Alamat</span>
                        <p class="font-bold text-[#0B3B24] leading-relaxed mt-0.5">
                            Kantor Pusat:<br>Graha Kartika Pratama Blok F2 Nomor 11 Kelurahan Bojong Baru Kecamatan Bojong Gede Kabupaten Bogor Jawa Barat
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7 bg-white rounded-[32px] p-6 sm:p-8 shadow-sm border border-stone-200 space-y-6">
            <div class="space-y-1 border-b border-stone-100 pb-4 font-serif">
                <h3 class="text-lg font-bold text-[#0B3B24]">Identitas Perusahaan</h3>
                <p class="text-xs text-stone-500 font-sans">Informasi ini tampil pada sidebar, laporan, dan dokumen jamaah.</p>
            </div>
            <form action="#" method="POST" class="space-y-4 text-xs">
                @csrf
                <div class="space-y-1.5">
                    <label class="font-bold text-[#0B3B24]">Nama Perusahaan</label>
                    <input type="text" value="Rozwia Islamic Travel" class="w-full px-4 py-3 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-bold text-[#0B3B24]">Slogan</label>
                        <input type="text" value="Penyelenggara Umroh & Haji Resmi" class="w-full px-4 py-3 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                    </div>
                    <div class="space-y-1.5">
                        <label class="font-bold text-[#0B3B24]">Nomor Izin PPIU/PIHK</label>
                        <input type="text" value="PPIU No. 1023/2021" class="w-full px-4 py-3 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-bold text-[#0B3B24]">Email</label>
                        <input type="email" value="Rozwia@gmail.com" class="w-full px-4 py-3 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                    </div>
                    <div class="space-y-1.5">
                        <label class="font-bold text-[#0B3B24]">Telepon</label>
                        <input type="text" value="0895-1882-9438" class="w-full px-4 py-3 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">
                    </div>
                </div>
                <div class="space-y-1.5">
                    <label class="font-bold text-[#0B3B24]">Alamat Kantor</label>
                    <textarea rows="3" class="w-full px-4 py-3 rounded-xl bg-[#F4EFE6] border border-stone-300 focus:outline-none focus:border-[#0B3B24]">Graha Kartika Pratama Blok F2 Nomor 11 Kelurahan Bojong Baru Kecamatan Bojong Gede Kabupaten Bogor Jawa Barat</textarea>
                </div>
                <div class="flex items-center justify-end gap-3 pt-4 border-t border-stone-100">
                    <button type="reset" class="px-5 py-2.5 rounded-full border border-stone-300 text-stone-600 font-bold hover:bg-stone-50 transition cursor-pointer">Batalkan</button>
                    <button type="submit" class="px-6 py-2.5 rounded-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold transition cursor-pointer shadow-md">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection