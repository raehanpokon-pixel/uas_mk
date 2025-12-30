@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-white relative overflow-hidden text-center p-4">

    {{-- Container Konten Utama (z-index tinggi agar di atas gambar dokter) --}}
    <div class="relative z-10 flex flex-col items-center animate-fade-in-up">

        {{-- Header Teks --}}
        <h1 class="text-3xl md:text-5xl font-extrabold text-blue-900 uppercase tracking-wide mb-6 drop-shadow-sm">
            Nomor Antrian Anda
        </h1>

        {{-- Nomor Antrian Besar --}}
        <div class="text-8xl md:text-[12rem] font-black text-blue-900 leading-none drop-shadow-lg select-all my-4">
            {{-- Menggunakan null coalescing operator sebagai fallback jika variabel kosong --}}
            {{ $antrian->nomor_antrian ?? 'A - 01' }}
        </div>

        {{-- Pesan Bawah --}}
        <div class="mt-10 max-w-xl">
            <p class="text-blue-800 font-bold text-lg md:text-2xl decoration-blue-800 decoration-2 underline-offset-4 leading-relaxed">
                Mohon membawa nomor antrian berikut saat kunjungan ke klinik.
            </p>
        </div>

        {{-- Tombol Aksi (Opsional - agar tetap fungsional) --}}
        <div class="mt-12 flex space-x-4 no-print">
            <a href="{{ route('antrian.create') }}"
               class="px-6 py-2 rounded-full border border-blue-900 text-blue-900 font-semibold hover:bg-blue-50 transition">
                ← Kembali
            </a>
            <button onclick="window.print()"
               class="px-6 py-2 rounded-full bg-blue-900 text-white font-semibold hover:bg-blue-800 transition shadow-lg">
                🖨 Cetak Tiket
            </button>
        </div>

    </div>

    {{-- Gambar Dokter (Pojok Kanan Bawah) --}}
    {{-- Pastikan file gambar ada di public/images/dokter.png --}}
    <div class="fixed bottom-0 right-0 hidden md:block w-1/3 max-w-sm z-0 pointer-events-none">
        <img src="{{ asset('storage/image/doktorijat.png') }}" alt="Dokter" class="w-full h-auto object-contain">
    </div>

</div>

{{-- CSS Tambahan untuk Print (Agar tombol hilang saat dicetak) --}}
<style>
    @media print {
        .no-print { display: none; }
        .fixed { position: absolute; } /* Agar gambar dokter tercetak di posisi benar (opsional) */
    }
</style>
@endsection
