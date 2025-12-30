@extends('layouts.app')

@section('content')
{{-- Container Utama: Mengatur Background Overlay Biru --}}
<div class="min-h-screen flex items-center justify-center relative overflow-hidden">

    {{-- 1. Background Image (Ganti 'bg-hospital.jpg' dengan gambar rumah sakit/dokter Anda) --}}
    {{-- Kita gunakan absolute position agar gambar memenuhi layar --}}
    <img src="https://source.unsplash.com/1600x900/?doctor,hospital"
         alt="Background"
         class="absolute inset-0 w-full h-full object-cover">

    {{-- 2. Blue Overlay (Lapisan Biru Tua di atas gambar) --}}
    <div class="absolute inset-0 bg-blue-800 opacity-90 mix-blend-multiply"></div>

    {{-- 3. Kartu Login (Putih) --}}
    <div class="relative z-10 bg-white w-full max-w-md p-8 md:p-10 shadow-2xl">

        {{-- Header: Logo & Judul --}}
        <div class="text-center mb-8">
            {{-- Logo HelloDoc (Menggunakan SVG inline agar mirip) --}}
            <div class="flex items-center justify-center space-x-2 mb-2">
                {{-- Icon Stetoskop Hijau --}}
                <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span class="text-2xl font-bold text-emerald-500 tracking-tight">HelloDoc</span>
            </div>

            {{-- Teks Selamat Datang --}}
            <h2 class="text-emerald-500 font-bold text-lg">
                Selamat Datang di HelloDoc
            </h2>
        </div>

        {{-- Form Login --}}
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            {{-- Input Email --}}
            <div>
                <label for="email" class="block text-xs font-bold text-gray-600 mb-1 ml-1">
                    Email
                </label>
                <input id="email" type="email" name="email" required autofocus
                    placeholder="Masukkan email Anda"
                    class="w-full bg-gray-300 text-gray-700 px-4 py-3 text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-emerald-500 placeholder-gray-500 transition-colors">
                @error('email')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            {{-- Input Password --}}
            <div>
                <label for="password" class="block text-xs font-bold text-gray-600 mb-1 ml-1">
                    Kata Sandi
                </label>
                <input id="password" type="password" name="password" required
                    placeholder="Masukkan kata sandi"
                    class="w-full bg-gray-300 text-gray-700 px-4 py-3 text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-emerald-500 placeholder-gray-500 transition-colors">

                {{-- Link Lupa Kata Sandi --}}
                <div class="mt-2">
                    {{-- <a href="{{ route('password.request') }}" class="text-xs text-gray-500 hover:text-emerald-600">
                        Lupa Kata Sandi?
                    </a> --}}
                </div>

                @error('password')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>

            {{-- Tombol Login --}}
            <div class="pt-2">
                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 shadow transition duration-300 text-sm">
                    Masuk Sekarang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
