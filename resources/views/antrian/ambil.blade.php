@extends('layouts.app')

@section('content')

<div class="bg-white min-h-screen flex items-center justify-center p-6 font-sans">

    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-10 items-center relative">

        <div class="space-y-8 pr-0 md:pr-10 z-10">

            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#001f5b] mb-4 tracking-tight">
                    Ambil Antrian
                </h1>
                <p class="text-[#1e3a66] text-lg font-medium leading-relaxed opacity-90 max-w-md">
                    Ambil nomor antrian secara online agar tidak perlu menunggu lama di klinik.
                </p>
            </div>

            <div class="space-y-2">
                <h3 class="text-[#001f5b] text-xl font-bold">
                    Yang bisa kamu lakukan:
                </h3>
                <ul class="space-y-1">
                    <li class="flex items-start text-[#1e3a66] font-medium text-lg">
                        <span class="mr-2 text-[#001f5b]">•</span> Ambil nomor antrian dari rumah
                    </li>
                    <li class="flex items-start text-[#1e3a66] font-medium text-lg">
                        <span class="mr-2 text-[#001f5b]">•</span> Lihat antrian yang sedang berjalan
                    </li>
                    <li class="flex items-start text-[#1e3a66] font-medium text-lg">
                        <span class="mr-2 text-[#001f5b]">•</span> Tahu perkiraan waktu giliran
                    </li>
                </ul>
            </div>

            <div class="space-y-2">
                <h3 class="text-[#001f5b] text-xl font-bold">
                    Cara Ambil Antrian:
                </h3>
                <ol class="list-decimal list-inside text-[#1e3a66] font-medium text-lg space-y-1 marker:text-[#001f5b] marker:font-bold">
                    <li>Pilih layanan/poli</li>
                    <li>Isi data</li>
                    <li>Dapatkan nomor antrian</li>
                </ol>
            </div>

            <div class="pt-4">
                <a href="{{ route('antrian.create') }}" class="inline-block bg-[#001f5b] text-white text-sm font-bold px-10 py-3 rounded-full shadow-lg hover:bg-blue-900 transition-colors duration-300 transform hover:scale-105">
                    Ambil Antrian
                </a>
            </div>

        </div>

        <div class="relative flex justify-center md:justify-end items-end h-full mt-10 md:mt-0">
            <img
                src="{{ asset('storage/image/antrianimg.png') }}"
                alt="Dokter Pria HelloDoc"
                class="w-3/4 md:w-full max-w-md object-contain"
            >
        </div>

    </div>
</div>

@endsection
