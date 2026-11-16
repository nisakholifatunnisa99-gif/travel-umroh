@extends('layouts.app')

@section('title', 'Registrasi Paket - ROZWIA')

@section('content')
<!-- Container Utama -->
<div class="max-w-6xl mx-auto px-4 py-24 pt-32">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- KOLOM KIRI: Card Gambar & Penjelasan Singkat Paket -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-6 shadow-sm border border-stone-200/80 space-y-6 sticky top-28">
            <div class="overflow-hidden rounded-2xl shadow-sm aspect-video relative">
                <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=800&q=80" alt="Paket Umroh" class="w-full h-full object-cover">
                <span class="absolute top-3 left-3 bg-amber-500 text-emerald-950 text-xs font-bold px-3 py-1 rounded-full">
                    Terlaris
                </span>
            </div>

            <div class="space-y-2">
                <span class="text-xs font-bold text-amber-800 uppercase tracking-widest">Umroh & Istanbul • 9 Days</span>
                <h2 class="text-xl font-bold text-[#0B3B24] font-serif">January Umroh & Istanbul</h2>
                <p class="text-stone-600 text-xs leading-relaxed">
                    Paket umroh eksklusif digabungkan dengan wisata religi ke Istanbul, Turki. Fasilitas hotel bintang 5 tepat di pelataran Masjidil Haram.
                </p>
            </div>

            <div class="pt-4 border-t border-stone-100 flex items-center justify-between">
                <span class="text-xs text-stone-500 font-bold uppercase">Harga Mulai Dari</span>
                <span class="text-xl font-bold text-[#0B3B24] font-serif">Rp 34.500.000</span>
            </div>
        </div>


        <!-- KOLOM KANAN: Form Registrasi -->
        <div class="lg:col-span-7 bg-white rounded-3xl p-8 lg:p-10 shadow-sm border border-stone-200/80 space-y-6">
            <div class="space-y-1">
                <span class="text-xs font-bold tracking-widest text-amber-800 uppercase">Pendaftaran Jamaah</span>
                <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Formulir Registrasi Paket</h1>
                <p class="text-stone-600 text-sm">Lengkapi data diri Anda di bawah ini untuk memulai proses pemesanan.</p>
            </div>

            <!-- Form dengan ID untuk ditangkap JavaScript -->
            <form id="regForm" class="space-y-5 pt-2">
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nama Lengkap (Sesuai KTP/Paspor)</label>
                    <input type="text" name="name" placeholder="Cth: Ahmad Fauzi" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Nomor Telepon (WhatsApp)</label>
                        <input type="text" name="phone" placeholder="Cth: 081234567890" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
                    </div>
                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Email Aktif</label>
                        <input type="email" name="email" placeholder="Cth: email@domain.com" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Alamat Lengkap</label>
                    <textarea name="address" rows="3" placeholder="Masukkan alamat domisili saat ini..." class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required></textarea>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-sm py-4 rounded-xl shadow-md transition cursor-pointer">
                        Kirim Pendaftaran & Hubungi Admin via WhatsApp
                    </button>
                    <p class="text-center text-xs text-stone-500 mt-3">
                        Setelah mendaftar, tim admin kami akan segera menghubungi Anda melalui WhatsApp untuk konfirmasi pemesanan.
                    </p>
                </div>
            </form>
        </div>

    </div>


    <!-- POP-UP MODAL (Hidden by default, background transparan gelap, kotak putih solid) -->
    <div id="successModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-xs px-4">
        
        <!-- Kotak Modal Putih Solid -->
        <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-2xl border border-stone-100 text-center space-y-6 transform transition-all">
            
            <div class="w-16 h-16 bg-emerald-100 text-[#0B3B24] rounded-full flex items-center justify-center mx-auto text-2xl">
                💬
            </div>

            <div class="space-y-2">
                <h3 class="text-2xl font-bold text-[#0B3B24] font-serif">Registrasi Berhasil!</h3>
                <p class="text-stone-600 text-sm leading-relaxed">
                    Terima kasih telah mendaftar. Data Anda telah kami terima. Silakan buka aplikasi **WhatsApp** Anda, karena Admin kami telah mengirimkan pesan untuk konfirmasi pemesanan paket.
                </p>
            </div>

            <div class="pt-2">
                <button type="button" id="closeModalBtn" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-sm py-3.5 rounded-xl shadow-md transition cursor-pointer">
                    Kembali
                </button>
            </div>

        </div>
    </div>

</div>

<!-- Script Vanilla JS untuk Menampilkan Pop-up Secara Instan -->
<script>
    document.getElementById('regForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form reload halaman
        
        // Tampilkan modal pop-up
        document.getElementById('successModal').classList.remove('hidden');
    });

    document.getElementById('closeModalBtn').addEventListener('click', function() {
        // Sembunyikan modal dan reset form jika diperlukan
        document.getElementById('successModal').classList.add('hidden');
        document.getElementById('regForm').reset();
    });
</script>
@endsection