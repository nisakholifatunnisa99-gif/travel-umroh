@extends('layouts.app')

@section('title', 'Login - ROZWIA Islamic Travel')

@section('content')
<div class="max-w-md mx-auto px-4 py-24 pt-36">
    
    <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-xl border border-stone-200/80 space-y-6">
        
        <!-- Header Judul -->
        <div class="text-center space-y-2">
            <span class="text-xs font-bold tracking-widest text-amber-800 uppercase">Akses Sistem</span>
            <h1 class="text-2xl sm:text-3xl font-bold text-[#0B3B24] font-serif">Masuk ke Akun Anda</h1>
            <p class="text-stone-600 text-sm">Silakan pilih hak akses dan masukkan kredensial Anda.</p>
        </div>

        <!-- Form Login Terpadu -->
        <form action="{{ route('login.submit') }}" method="POST" class="space-y-4 pt-2">
            @csrf

            <!-- Pilih Role / Hak Akses -->
            <div class="space-y-1.5">
                <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Masuk Sebagai (Role)</label>
                <select name="role" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm bg-white font-medium" required>
                    <option value="admin">Admin (Keuangan & Invoice)</option>
                    <option value="supervisor">Supervisor (Monitoring Manifest)</option>
                    <option value="user">Jamaah / User Dashboard</option>
                </select>
            </div>

            <!-- Email / Username -->
            <div class="space-y-1.5">
                <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Email atau Nomor WhatsApp</label>
                <input type="text" name="email_or_phone" placeholder="Cth: admin@rozwia.com / 0812..." class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
            </div>

            <!-- Password -->
            <div class="space-y-1.5">
                <label class="block text-xs font-bold uppercase tracking-wider text-stone-700">Password</label>
                <input type="password" name="password" placeholder="••••••••" class="w-full px-4 py-3 rounded-xl border border-stone-300 focus:outline-none focus:ring-2 focus:ring-emerald-900 text-sm" required>
                <p class="text-[11px] text-stone-500 mt-1">
                    * Jamaah menggunakan password sementara yang dikirimkan Admin via WhatsApp setelah verifikasi DP.
                </p>
            </div>

            <!-- Tombol Submit -->
            <div class="pt-3">
                <button type="submit" class="w-full bg-[#0B3B24] hover:bg-emerald-900 text-white font-serif font-bold text-sm py-4 rounded-xl shadow-md transition cursor-pointer">
                    Masuk Sekarang
                </button>
            </div>
        </form>

        <div class="text-center pt-2 border-t border-stone-100">
            <a href="/" class="text-xs text-stone-500 hover:text-[#0B3B24] transition">← Kembali ke Beranda Utama</a>
        </div>

    </div>

</div>
@endsection