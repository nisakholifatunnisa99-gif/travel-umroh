@extends('layouts.admin')

@section('title', 'Jadwal dan Manifest - Admin ROZWIA')

@section('content')
<div class="space-y-6 font-serif">
    
    <!-- 1. Header Halaman -->
    <div class="space-y-1">
        <h1 class="text-3xl sm:text-4xl font-bold text-[#0B3B24]">Jadwal dan Manifest</h1>
        <p class="text-xs sm:text-sm text-stone-600 font-sans">
            Kirim jadwal dan manifest ke jamaah melalui Gmail, lalu pantau status pengirimannya.
        </p>
    </div>

    <!-- 2. Kartu Keberangkatan Utama -->
    <div class="bg-white rounded-[24px] p-6 border border-stone-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 font-sans">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center text-xl shrink-0">
                <span class="material-symbols-outlined">
travel
</span>
            </div>
            <div>
                <span class="text-[10px] font-bold text-stone-400 uppercase tracking-wider block">Keberangkatan</span>
                <div class="flex flex-wrap items-center gap-2 mt-0.5">
                    <h3 class="text-base sm:text-lg font-bold text-stone-900 font-serif">Umrah Reguler Barakah | 28 Desember 2026</h3>
                    <span class="bg-stone-100 text-stone-700 text-[10px] font-bold px-2.5 py-0.5 rounded-full border border-stone-200">Garuda Indonesia GA-980</span>
                </div>
                <p class="text-xs text-stone-500 mt-1">Total 45 jamaah terdaftar dalam Paket Umroh Reguler Barakah</p>
            </div>
        </div>
        <div class="flex items-center gap-2 bg-emerald-50 border border-emerald-200 px-3 py-1.5 rounded-full shrink-0">
            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
            <span class="text-xs font-bold text-emerald-800 font-sans">Status Keberangkatan: On Schedule</span>
        </div>
    </div>

    <!-- 3. Kelengkapan Sebelum Dikirim -->
    <div class="bg-white rounded-[24px] p-6 sm:p-8 border border-stone-200 shadow-sm space-y-5 font-sans">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
            <div>
                <h3 class="text-base font-bold text-stone-900 font-serif">Kelengkapan Sebelum Dikirim</h3>
                <p class="text-xs text-stone-500">Centang seluruh syarat kelengkapan untuk mengaktifkan izin pengiriman broadcast manifest kepada jamaah.</p>
            </div>
            <span class="bg-amber-100 text-amber-900 font-bold text-xs px-3.5 py-1.5 rounded-full">
                3 dari 4 Syarat Siap
            </span>
        </div>

        <!-- Grid 4 Syarat Kelengkapan -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <!-- Syarat 1 (Lengkap - Hijau) -->
            <div class="bg-white rounded-2xl p-4 border-2 border-emerald-500/60 shadow-xs space-y-2 relative">
                <div class="flex items-start gap-3">
                    <div class="w-5 h-5 rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs shrink-0 mt-0.5">&#10003;</div>
                    <div>
                        <strong class="block text-stone-900 text-sm font-serif">Tiket Penerbangan</strong>
                        <p class="text-xs text-stone-600 leading-relaxed">E-ticket maskapai Garuda Indonesia GA-980 (CGK-JED) telah terbit untuk seluruh 45 jamaah.</p>
                    </div>
                </div>
                <div class="text-[11px] font-bold text-emerald-700 flex items-center gap-1 pl-8">
                    <span class="material-symbols-outlined">check</span> Lengkap & Terkonfirmasi
                </div>
            </div>

            <!-- Syarat 2 (Lengkap - Hijau) -->
            <div class="bg-white rounded-2xl p-4 border-2 border-emerald-500/60 shadow-xs space-y-2 relative">
                <div class="flex items-start gap-3">
                    <div class="w-5 h-5 rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs shrink-0 mt-0.5">&#10003;</div>
                    <div>
                        <strong class="block text-stone-900 text-sm font-serif">Pembagian Kamar Hotel dan Bus</strong>
                        <p class="text-xs text-stone-600 leading-relaxed">Roomlist Movenpick Makkah & Dallah Taibah Madinah serta alokasi Bus 01 & Bus 02 telah dialokasikan.</p>
                    </div>
                </div>
                <div class="text-[11px] font-bold text-emerald-700 flex items-center gap-1 pl-8">
                    <span class="material-symbols-outlined">check</span> Lengkap & Terkonfirmasi
                </div>
            </div>

            <!-- Syarat 3 (Lengkap - Hijau) -->
            <div class="bg-white rounded-2xl p-4 border-2 border-emerald-500/60 shadow-xs space-y-2 relative">
                <div class="flex items-start gap-3">
                    <div class="w-5 h-5 rounded-full bg-emerald-600 text-white flex items-center justify-center text-xs shrink-0 mt-0.5">&#10003;</div>
                    <div>
                        <strong class="block text-stone-900 text-sm font-serif">Kelengkapan Visa, Surat Kemenag, dan Paspor</strong>
                        <p class="text-xs text-stone-600 leading-relaxed">Visa e-Umrah Muassasah terbit dan surat rekomendasi Kemenag RI telah tervalidasi di sistem Siskopatuh.</p>
                    </div>
                </div>
                <div class="text-[11px] font-bold text-emerald-700 flex items-center gap-1 pl-8">
                    <span class="material-symbols-outlined">check</span> Lengkap & Terkonfirmasi
                </div>
            </div>

            <!-- Syarat 4 (Belum Lengkap - Kuning) -->
            <div class="bg-white rounded-2xl p-4 border-2 border-amber-400 shadow-xs space-y-2 relative">
                <div class="flex items-start gap-3">
                    <div class="w-5 h-5 rounded-full border-2 border-stone-400 flex items-center justify-center text-xs shrink-0 mt-0.5 bg-white"></div>
                    <div>
                        <strong class="block text-stone-900 text-sm font-serif">Kelengkapan Dokumen Pribadi Masing - Masing Jamaah</strong>
                        <p class="text-xs text-stone-600 leading-relaxed">Pemeriksaan foto KTP, Kartu Keluarga, dan sertifikat vaksin meningitis tiap akun jamaah.</p>
                    </div>
                </div>
                <div class="text-[11px] font-bold text-amber-800 flex items-center gap-1 pl-8">
                    <span class="material-symbols-outlined">warning</span> Ada jamaah dengan berkas dokumen belum lengkap
                </div>
            </div>

        </div>
    </div>

    <!-- 4. Daftar Jamaah dengan Dokumen Pribadi Belum Lengkap -->
    <div class="bg-[#FFF5F5] rounded-[24px] p-6 sm:p-7 border border-rose-200 shadow-sm space-y-4 font-sans">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
            <div>
                <h3 class="text-base font-bold text-rose-950 font-serif">Daftar Jamaah dengan Dokumen Pribadi Belum Lengkap</h3>
                <p class="text-xs text-stone-600">Berikut akun dan nama jamaah yang belum dapat menerima jadwal & manifest karena dokumen persyaratan belum valid.</p>
            </div>
            <span class="bg-rose-100 text-rose-900 font-bold text-xs px-3 py-1 rounded-full">
                2 Jamaah Perlu Melengkapi
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <!-- Jamaah 1 -->
            <div class="bg-white rounded-2xl p-5 border border-rose-200 shadow-xs space-y-3">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-[10px] font-bold text-stone-400 uppercase">Dari Akun</span>
                        <h4 class="text-sm font-bold text-stone-900 font-serif">Rinzani Fauziah <span class="text-xs text-stone-500 font-sans font-normal">(#RZ-8821)</span></h4>
                    </div>
                    <span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-2.5 py-1 rounded-full">Paspor Terpotong</span>
                </div>
                <div class="text-xs space-y-1 text-stone-600">
                    <p><strong>Nama Jamaah:</strong> Rinzani Fauziah</p>
                    <p><strong>Gmail:</strong> rinzani.kholifah@gmail.com</p>
                    <p class="text-rose-700"><strong>Kekurangan:</strong> <strong>Foto Paspor (MRZ terpotong)</strong></p>
                </div>
                <button onclick="alert('Pesan pengingat dikirim ke Rinzani Fauziah!')" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-bold py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 shadow-xs">
                    <span class="material-symbols-outlined">mail</span> Kirim Pesan Pengingat
                </button>
            </div>

            <!-- Jamaah 2 -->
            <div class="bg-white rounded-2xl p-5 border border-rose-200 shadow-xs space-y-3">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-[10px] font-bold text-stone-400 uppercase">Dari Akun</span>
                        <h4 class="text-sm font-bold text-stone-900 font-serif">Wildan Rafid Raid <span class="text-xs text-stone-500 font-sans font-normal">(#RZ-8822)</span></h4>
                    </div>
                    <span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-2.5 py-1 rounded-full">Akta Belum Ada</span>
                </div>
                <div class="text-xs space-y-1 text-stone-600">
                    <p><strong>Nama Jamaah:</strong> Wildan Rafid Raid</p>
                    <p><strong>Gmail:</strong> wildan.raid@yahoo.com</p>
                    <p class="text-rose-700"><strong>Kekurangan:</strong> <strong>Akta Kelahiran & Pas Foto</strong></p>
                </div>
                <button onclick="alert('Pesan pengingat dikirim ke Wildan Rafid Raid!')" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-bold py-2.5 rounded-xl text-xs transition cursor-pointer flex items-center justify-center gap-1.5 shadow-xs">
                   <span class="material-symbols-outlined">mail</span> Kirim Pesan Pengingat
                </button>
            </div>

        </div>
    </div>

    <!-- 5. Form Pengiriman Pesan & Daftar Penerima Antrian -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 font-sans">
        
        <!-- Form Pengiriman Pesan (Col 7) -->
        <div class="lg:col-span-7 bg-white rounded-[24px] p-6 sm:p-7 border border-stone-200 shadow-sm space-y-5">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-base font-bold text-stone-900 font-serif">Form Pengiriman Pesan</h3>
                    <p class="text-xs text-stone-500">Pilih akun tujuan untuk memverifikasi penerima dan mengedit pesan siaran.</p>
                </div>
                <button class="bg-[#FAF8F5] border border-stone-300 text-stone-700 font-bold text-xs px-3 py-1.5 rounded-full shadow-xs hover:bg-stone-100 transition flex items-center gap-1">
                    <span class="material-symbols-outlined">edit</span> Edit Pesan
                </button>
            </div>

            <div class="space-y-4 text-xs">
                <!-- Pilih Akun Jamaah -->
                <div class="space-y-1">
                    <label class="block font-bold text-stone-800">Pilih Akun Jamaah <span class="text-rose-600">*</span></label>
                    <select class="w-full px-4 py-2.5 rounded-2xl bg-white border border-stone-300 text-xs font-serif text-stone-800 focus:outline-none focus:border-[#0B3B24]">
                        <option>Akun: Rinzani Fauziah (Keluarga Fauziah - 3 jamaah)</option>
                        <option>Akun: Wildan Rafid (Keluarga Wildan - 4 jamaah)</option>
                    </select>
                </div>

                <!-- Daftar Anggota Jamaah & Gmail Penerima (Rounded Box Sesuai Gambar) -->
                <div class="bg-[#FAF8F5] p-5 rounded-[20px] border border-stone-200 space-y-3">
                    <div class="flex justify-between items-center text-[11px] font-bold text-stone-500 uppercase tracking-wider">
                        <span>DAFTAR ANGGOTA JAMAAH & GMAIL PENERIMA:</span>
                        <span class="text-[#0B3B24]">3 Anggota</span>
                    </div>

                    <div class="space-y-2">
                        <!-- Anggota 1 -->
                        <div class="flex justify-between items-center bg-white px-4 py-3 rounded-2xl border border-stone-200 shadow-xs">
                            <div>
                                <strong class="block text-stone-900 text-xs">1. Rinzani Fauziah (Penanggung Jawab)</strong>
                                <span class="text-[11px] text-stone-500">rinzani.kholifah@gmail.com</span>
                            </div>
                            <span class="bg-emerald-100 text-emerald-800 font-bold text-[10px] px-2.5 py-1 rounded-full">Email Utama</span>
                        </div>

                        <!-- Anggota 2 -->
                        <div class="flex justify-between items-center bg-white px-4 py-3 rounded-2xl border border-stone-200 shadow-xs">
                            <div>
                                <strong class="block text-stone-900 text-xs">2. Ahmad Hidayatullah (Suami / Mahram)</strong>
                                <span class="text-[11px] text-stone-500">ahmad.hidayat@gmail.com</span>
                            </div>
                            <span class="bg-stone-100 text-stone-600 font-bold text-[10px] px-2.5 py-1 rounded-full">Jamaah</span>
                        </div>

                        <!-- Anggota 3 -->
                        <div class="flex justify-between items-center bg-white px-4 py-3 rounded-2xl border border-stone-200 shadow-xs">
                            <div>
                                <strong class="block text-stone-900 text-xs">3. Nabila Fauziah (Anak)</strong>
                                <span class="text-[11px] text-stone-500">nabila.fauziah@gmail.com</span>
                            </div>
                            <span class="bg-stone-100 text-stone-600 font-bold text-[10px] px-2.5 py-1 rounded-full">Jamaah</span>
                        </div>
                    </div>
                </div>

                <!-- Subjek / Judul Email -->
                <div class="space-y-1">
                    <label class="block font-bold text-stone-800">Subjek / Judul Email</label>
                    <input type="text" value="Jadwal dan Manifest Keberangkatan Umrah Reguler Barakah 28 Desember 2026 - Rozwia Travel" class="w-full px-4 py-2.5 rounded-2xl bg-white border border-stone-300 text-xs focus:outline-none focus:border-[#0B3B24]">
                </div>

                <!-- Isi Pesan -->
                <div class="space-y-1">
                    <div class="flex justify-between items-center">
                        <label class="block font-bold text-stone-800">Isi Pesan</label>
                        <span class="text-[10px] text-stone-400">Tag variabel: [nama_lengkap_jamaah]</span>
                    </div>
                    <textarea rows="6" class="w-full px-4 py-3 rounded-2xl bg-white border border-stone-300 text-xs font-sans leading-relaxed focus:outline-none focus:border-[#0B3B24]">Assalamu'alaikum Warahmatullahi Wabarakatuh Bapak/Ibu [nama_lengkap_jamaah],

Alhamdulillah jadwal perjalanan dan manifest keberangkatan ibadah Umrah Reguler Barakah (28 Desember 2026) telah kami siapkan dengan lengkap.

Silakan unduh lampiran berkas jadwal penerbangan, hotel, serta pembagian kamar dan bus pada email ini dan baca dengan teliti petunjuk teknis di bandara keberangkatan.</textarea>
                </div>

                <!-- Upload Berkas & Drag Drop Card Interaktif (Multi-file & Bisa Dihapus) -->
                <div class="space-y-2" x-data="{
                    attachedFiles: [
                        { name: 'jadwal_perjalanan_28des.pdf', size: '1.4 MB', type: 'pdf' },
                        { name: 'manifest_kamar_bus_final.pdf', size: '920 KB', type: 'xlsx' }
                    ],
                    handleFiles(event) {
                        const files = Array.from(event.target.files);
                        files.forEach(file => {
                            const sizeFormatted = file.size >= 1048576 
                                ? (file.size / 1048576).toFixed(1) + ' MB' 
                                : Math.round(file.size / 1024) + ' KB';
                            const isPdf = file.name.toLowerCase().endsWith('.pdf');
                            this.attachedFiles.push({
                                name: file.name,
                                size: sizeFormatted,
                                type: isPdf ? 'pdf' : 'xlsx'
                            });
                        });
                        event.target.value = ''; // Reset input agar file yang sama bisa dipilih lagi jika dihapus
                    },
                    removeFile(index) {
                        this.attachedFiles.splice(index, 1);
                    }
                }">
                    <div class="flex justify-between items-center">
                        <label class="block font-bold text-stone-800">Upload Berkas Jadwal & Manifest Tambahan</label>
                        <span class="text-[10px] text-stone-400">Format PDF / XLSX (Maks. 10MB)</span>
                    </div>

                    <!-- Kotak Drag and Drop yang Bisa Dipencet & Multi-select -->
                    <label class="border-2 border-dashed border-stone-300 rounded-[20px] p-5 text-center bg-[#FAF8F5] hover:bg-stone-50 transition cursor-pointer block space-y-1.5 relative">
                        <input type="file" 
                               multiple
                               name="lampiran[]"
                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" 
                               accept=".pdf,.xlsx,.xls,.doc,.docx"
                               @change="handleFiles($event)">
                        
                        <div class="w-9 h-9 mx-auto rounded-full bg-white shadow-xs border border-stone-200 flex items-center justify-center text-stone-600 text-sm">
                            ☁️
                        </div>
                        <p class="text-xs font-bold text-stone-800">Klik untuk memilih file jadwal atau manifest baru</p>
                        <p class="text-[10px] text-stone-400">File yang diunggah akan otomatis dilampirkan pada email seluruh anggota</p>
                    </label>

                    <!-- Daftar Pill File Terlampir (Dinamis & Bisa Di-cancel) -->
                    <div class="flex flex-wrap gap-2 pt-1" x-show="attachedFiles.length > 0">
                        <template x-for="(file, index) in attachedFiles" :key="index">
                            <div :class="file.type === 'pdf' ? 'bg-rose-50/70 border-rose-200 text-rose-900' : 'bg-emerald-50 border-emerald-200 text-emerald-900'"
                                 class="border px-3 py-2 rounded-xl text-xs flex items-center gap-2 font-medium transition">
                                <span x-text="file.type === 'pdf' ? '📄' : '📊'"></span>
                                <span>
                                    <span x-text="file.name"></span>
                                    <span class="opacity-75" x-text="'(' + file.size + ')'"></span>
                                </span>
                                <button type="button" 
                                        @click="removeFile(index)"
                                        title="Hapus lampiran"
                                        class="text-stone-400 hover:text-rose-600 font-bold ml-1 cursor-pointer transition">
                                    &times;
                                </button>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Tombol Kirim Utama -->
                <button onclick="alert('Broadcast Jadwal & Manifest berhasil dikirim!')" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-bold py-3.5 rounded-full text-xs transition cursor-pointer shadow-md flex items-center justify-center gap-2 mt-2">
                    <span class="material-symbols-outlined">upload</span> Kirim Semua Jamaah via Gmail
                </button>
            </div>
        </div>

        <!-- Daftar Penerima Antrian & Status Selesai (Col 5) -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-white rounded-[24px] p-6 sm:p-7 border border-stone-200 shadow-sm space-y-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-sm font-bold text-stone-900 font-serif">Daftar Penerima Antrian</h3>
                        <p class="text-[11px] text-stone-500">Daftar akun keluarga dan email anggota penerima broadcast</p>
                    </div>
                    <span class="bg-amber-100 text-amber-900 font-bold text-[11px] px-3 py-1 rounded-full shrink-0">
                        4 Akun &bull; 8 Jamaah
                    </span>
                </div>

                <div class="overflow-x-auto rounded-2xl border border-stone-200 text-xs font-sans">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-stone-100 text-stone-700 font-serif border-b border-stone-200">
                                <th class="p-3 font-semibold">AKUN</th>
                                <th class="p-3 font-semibold">JUMLAH ANGGOTA</th>
                                <th class="p-3 font-semibold">EMAIL ANGGOTA</th>
                                <th class="p-3 font-semibold text-right">STATUS</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-200 text-stone-700">
                            <tr>
                                <td class="p-3">
                                    <strong class="block text-stone-900">Rinzani Fauziah</strong>
                                    <span class="text-[10px] text-stone-400">ID: #RZ-8821</span>
                                </td>
                                <td class="p-3 font-medium text-stone-700">3 Orang</td>
                                <td class="p-3 text-stone-500 text-[11px] space-y-0.5">
                                    <div>&bull; rinzani.kholifah@g...</div>
                                    <div>&bull; ahmad.hidayat@gma...</div>
                                    <div>&bull; nabila.fauziah@gmail...</div>
                                </td>
                                <td class="p-3 text-right">
                                    <span class="inline-flex items-center gap-1 bg-amber-50 text-amber-800 border border-amber-300 px-2.5 py-1 rounded-full text-[10px] font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Belum Dikirim
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">
                                    <strong class="block text-stone-900">Wildan Rafid Raid</strong>
                                    <span class="text-[10px] text-stone-400">ID: #RZ-8822</span>
                                </td>
                                <td class="p-3 font-medium text-stone-700">2 Orang</td>
                                <td class="p-3 text-stone-500 text-[11px] space-y-0.5">
                                    <div>&bull; wildan.rafid@yahoo.co...</div>
                                    <div>&bull; annisa.wildan@gmail...</div>
                                </td>
                                <td class="p-3 text-right">
                                    <span class="inline-flex items-center gap-1 bg-amber-50 text-amber-800 border border-amber-300 px-2.5 py-1 rounded-full text-[10px] font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Belum Dikirim
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">
                                    <strong class="block text-stone-900">Maryam Siti</strong>
                                    <span class="text-[10px] text-stone-400">ID: #RZ-8823</span>
                                </td>
                                <td class="p-3 font-medium text-stone-700">2 Orang</td>
                                <td class="p-3 text-stone-500 text-[11px] space-y-0.5">
                                    <div>&bull; maryamsiti199@gmail...</div>
                                    <div>&bull; fatiwah.siti@gmail.c...</div>
                                </td>
                                <td class="p-3 text-right">
                                    <span class="inline-flex items-center gap-1 bg-amber-50 text-amber-800 border border-amber-300 px-2.5 py-1 rounded-full text-[10px] font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Belum Dikirim
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">
                                    <strong class="block text-stone-900">Budi Santoso</strong>
                                    <span class="text-[10px] text-stone-400">ID: #RZ-8824</span>
                                </td>
                                <td class="p-3 font-medium text-stone-700">1 Orang</td>
                                <td class="p-3 text-stone-500 text-[11px]">
                                    <div>&bull; budisantoso.travel</div>
                                </td>
                                <td class="p-3 text-right">
                                    <span class="inline-flex items-center gap-1 bg-amber-50 text-amber-800 border border-amber-300 px-2.5 py-1 rounded-full text-[10px] font-bold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Belum Dikirim
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Status Setelah Dikirim -->
            <div class="bg-[#0B3B24] text-white rounded-[24px] p-6 space-y-3 shadow-sm font-sans">
                <div class="flex items-start gap-3">
                    <span class="material-symbols-outlined">info</span>
                    <div class="space-y-1">
                        <h4 class="text-sm font-bold font-serif">Setelah Dikirim</h4>
                        <p class="text-xs text-emerald-100/80 leading-relaxed font-sans">
                            Email terkirim ke Gmail setiap anggota jamaah dan notifikasi pengingat muncul di dashboard jamaah waktu tercatat di riwayat notifikasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection