@extends('layouts.app')

@section('content')

<style>
    /* Efek universal tombol */
    .btn-effect {
        transition: all 0.25s ease-in-out;
    }
    .btn-effect:hover {
        transform: scale(1.12);
        opacity: 0.9;
    }

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
        animation: fadeOut 0.5s ease-in-out forwards;
    }

    @keyframes fadeOut {
        from { opacity: 1; }
        to   { opacity: 0; }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fade-in saat halaman muncul
        document.body.classList.add("fade-in");

        // Fade-out saat klik link
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
    });
</script>

<div class="font-sans">

    <section class="bg-white py-16 relative">
        <div class="absolute left-4 md:left-10 top-1/2 transform -translate-y-1/2 z-10">
                <a href="{{ route('dok') }}"
                    class="absolute -right-4 md:-right-12 top-1/2 transform -translate-y-1/2
                        bg-[#001f5b] text-white p-3 rounded-full hover:bg-blue-800
                        transition shadow-lg hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>

        </div>

        <div class="max-w-6xl mx-auto px-12 md:px-6">
            <div class="text-center mb-2">
                <span class="text-[#001f5b] font-bold tracking-widest text-sm uppercase">DOKTER KAMI</span>
            </div>

            <h2 class="text-3xl md:text-4xl font-extrabold text-[#001f5b] text-center mb-8 drop-shadow-sm leading-tight">
                Tim Dokter Profesional & Terpercaya dari HelloDoc
            </h2>

            <div class="max-w-5xl mx-auto">
                <p class="text-[#1e3a66] text-lg leading-relaxed text-justify font-medium">
                    Di HelloDoc, kami bekerja sama dengan dokter dan tenaga medis profesional yang berpengalaman di bidangnya. Setiap dokter telah terverifikasi dan memiliki izin praktik resmi untuk memastikan pelayanan terbaik bagi Anda dan keluarga. Kami percaya bahwa pelayanan medis yang baik dimulai dari hati karena itu setiap anggota tim kami tidak hanya ahli, tapi juga peduli.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#001135] py-14 text-white">
        <div class="max-w-6xl mx-auto px-6">

            <h3 class="text-center text-xl font-extrabold mb-12 text-white tracking-wide">
                Kenali Dokter Kami
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12">

                <div class="flex flex-col sm:flex-row gap-6 items-start">
                    <div class="flex-shrink-0 w-full sm:w-40 bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ asset('storage/image/doktor1indx2.jpg') }}" alt="dr. Lestari H." class="w-full h-50 sm:h-80 object-cover object-top">
                    </div>

                    <div class="flex-1">
                        <h4 class="text-lg md:text-xl font-extrabold text-white">dr. Lestari H., M.Kes</h4>
                        <p class="text-white font-medium text-sm mb-3">Dokter Umum</p>

                        <p class="text-gray-300 text-sm leading-snug mb-4">
                            Ahli dalam pemeriksaan umum, konsultasi ringan, dan layanan home visit untuk keluarga.
                        </p>

                        <div class="text-sm space-y-1">
                            <p class="text-white"><span class="font-normal opacity-80">Tersedia:</span> <span class="font-bold">Setiap Hari</span></p>
                            <p class="text-white"><span class="font-normal opacity-80">Area Layanan:</span> <span class="font-bold">Bandung</span></p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 items-start">
                    <div class="flex-shrink-0 w-full sm:w-40 bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ asset('storage/image/doktor2indx2.jpg') }}" alt="dr. Yoga Pranata" class="w-full h-50 sm:h-80 object-cover object-top">
                    </div>

                    <div class="flex-1">
                        <h4 class="text-lg md:text-xl font-extrabold text-white">dr. Yoga Pranata, Sp.KFR</h4>
                        <p class="text-white font-medium text-sm mb-3">Spesialis Rehabilitasi Medis</p>

                        <p class="text-gray-300 text-sm leading-snug mb-4">
                            Fokus pada pemulihan pasien pasca stroke, cedera, dan terapi fisik di rumah.
                        </p>

                        <div class="text-sm space-y-1">
                            <p class="text-white"><span class="font-normal opacity-80">Tersedia:</span> <span class="font-bold">Selasa – Sabtu</span></p>
                            <p class="text-white"><span class="font-normal opacity-80">Area Layanan:</span> <span class="font-bold">Jakarta Selatan</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

@endsection
