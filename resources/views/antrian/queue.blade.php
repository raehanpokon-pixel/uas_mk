@extends('layouts.app')

@section('content')

<style>
    /* ==========================
       ANIMASI GLOBAL
    ========================== */

    /* Fade In */
    .fade-in {
        opacity: 0;
        animation: fadeIn 0.6s ease-in-out forwards;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    /* Fade Out */
    .fade-out {
        animation: fadeOut 0.4s ease-in-out forwards;
    }

    @keyframes fadeOut {
        from { opacity: 1; }
        to   { opacity: 0; }
    }

    /* ==========================
       LOADING OVERLAY
    ========================== */
    #loadingOverlay {
        animation: fadeIn 0.3s ease-in-out forwards;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        /* Fade-in saat halaman muncul */
        document.body.classList.add("fade-in");

        /* Fade-out saat klik link */
        document.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", function (e) {
                const target = this.getAttribute("href");

                if (target && !target.startsWith('#') && !this.hasAttribute("data-no-fade")) {
                    e.preventDefault();
                    document.body.classList.add("fade-out");

                    setTimeout(() => {
                        window.location = target;
                    }, 300);
                }
            });
        });

        /* Loading ketika submit form */
        const form = document.querySelector("form");
        const loading = document.getElementById("loadingOverlay");

        form.addEventListener("submit", () => {
            loading.classList.remove("hidden");
        });

    });
</script>


<div class="min-h-screen flex items-center justify-center bg-white relative overflow-hidden">

    {{-- ==========================
         FORM AMBIL ANTRIAN
    ========================== --}}
    <div class="w-full max-w-md p-6 relative z-10">

        <h1 class="text-4xl font-extrabold text-blue-900 text-center mb-8">
            Ambil Antrian
        </h1>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <form action="{{ route('antrian.store') }}" method="POST" class="space-y-4">
            @csrf

            <div class="relative">
                <select name="layanan" required
                    class="w-full bg-gray-300 text-gray-700 px-4 py-3 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500 cursor-pointer">
                    <option value="" disabled selected>Pilih layanan/poli</option>
                    <option value="Pendaftaran">Pendaftaran</option>
                    <option value="Informasi">Informasi</option>
                    <option value="Konsultasi">Konsultasi</option>
                </select>

                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700 font-bold">
                    V
                </div>
            </div>

            <input type="text" name="nama_lengkap" placeholder="Nama lengkap" required
                class="w-full bg-gray-300 text-gray-700 px-4 py-3 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">

            <input type="text" name="nik" placeholder="Nik"
                class="w-full bg-gray-300 text-gray-700 px-4 py-3 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">

            <input type="text" name="tanggal_lahir" placeholder="HH/BB/TT"
                onfocus="(this.type='date')" onblur="(this.type='text')"
                class="w-full bg-gray-300 text-gray-700 px-4 py-3 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">

            <input type="text" name="no_hp" placeholder="No HP" required
                class="w-full bg-gray-300 text-gray-700 px-4 py-3 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">

            <button type="submit"
                class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-md transition shadow-md">
                Ambil Nomor Antrian
            </button>
        </form>
    </div>

    {{-- GAMBAR DEKOR --}}
    <div class="fixed bottom-0 right-0 hidden md:block w-1/3 max-w-sm z-0 pointer-events-none">
        <img src="{{ asset('storage/image/doktorijat.png') }}" alt="Dokter" class="w-full h-auto object-contain">
    </div>
</div>

{{-- ==========================
     LOADING OVERLAY
========================== --}}
<div id="loadingOverlay"
     class="hidden fixed inset-0 bg-white bg-opacity-90 flex flex-col items-center justify-center z-[9999]">
    <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-900 border-solid"></div>
    <p class="mt-4 text-blue-900 font-bold text-lg">Memproses...</p>
</div>

@endsection
