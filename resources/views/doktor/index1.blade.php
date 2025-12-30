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
        <div class="max-w-6xl mx-auto px-6 relative">

            <div class="text-center mb-2">
                <span class="text-[#001f5b] font-bold tracking-widest text-sm uppercase">Dokter Kami</span>
            </div>

            <h2 class="text-3xl md:text-4xl font-extrabold text-[#001f5b] text-center mb-8 drop-shadow-sm">
                Tim Dokter Profesional & Terpercaya dari HelloDoc
            </h2>

            <div class="flex items-center justify-center relative">

                <div class="max-w-5xl">
                    <p class="text-[#1e3a66] text-lg leading-relaxed text-justify font-medium">
                        Di HelloDoc, kami bekerja sama dengan dokter dan tenaga medis profesional yang berpengalaman di bidangnya.
                        Setiap dokter telah terverifikasi dan memiliki izin praktik resmi untuk memastikan pelayanan terbaik bagi
                        Anda dan keluarga. Kami percaya bahwa pelayanan medis yang baik dimulai dari hati karena itu setiap anggota
                        tim kami tidak hanya ahli, tapi juga peduli.
                    </p>
                </div>

                <a href="{{ route('dok2') }}"
                    class="absolute -right-4 md:-right-12 top-1/2 transform -translate-y-1/2
                           bg-[#001f5b] text-white p-3 rounded-full hover:bg-blue-800
                           transition shadow-lg hidden md:block btn-effect">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

            </div>
        </div>
    </section>

    <section class="bg-[#001740] py-12 text-white">
        <div class="max-w-6xl mx-auto px-6">

            <h3 class="text-center text-xl font-bold mb-10 text-white tracking-wide">
                Kenali Dokter Kami
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16">

                <div class="flex flex-col sm:flex-row items-start gap-6 fade-in">
                    <div class="flex-shrink-0 w-full sm:w-40 bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ asset('storage/image/doktor1.jpg') }}" alt="dr. Clara Anindya"
                             class="w-full h-50 sm:h-80 object-cover object-top">
                    </div>

                    <div class="space-y-2">
                        <h4 class="text-xl font-bold text-white">dr. Clara Anindya, Sp.PD</h4>
                        <p class="text-blue-200 font-semibold text-sm">Spesialis Penyakit Dalam</p>

                        <p class="text-gray-300 text-sm leading-relaxed pb-2">
                            Berpengalaman lebih dari 10 tahun dalam menangani pasien dengan berbagai penyakit kronis seperti diabetes,
                            hipertensi, dan kolesterol tinggi.
                        </p>

                        <div class="text-sm">
                            <p class="text-white"><span class="font-bold text-blue-200">Tersedia:</span> Senin – Jumat</p>
                            <p class="text-white"><span class="font-bold text-blue-200">Area Layanan:</span> Jakarta & sekitarnya</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-start gap-6 fade-in">
                    <div class="flex-shrink-0 w-full sm:w-40 bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ asset('storage/image/doktor2.jpg') }}" alt="dr. Rafiansyah"
                             class="w-full h-50 sm:h-80 object-cover object-top">
                    </div>

                    <div class="space-y-2">
                        <h4 class="text-xl font-bold text-white">dr. Rafiansyah, Sp.A</h4>
                        <p class="text-blue-200 font-semibold text-sm">Spesialis Anak</p>

                        <p class="text-gray-300 text-sm leading-relaxed pb-2">
                            Menangani pemeriksaan tumbuh kembang anak, imunisasi, serta edukasi nutrisi dan pola hidup sehat untuk si kecil.
                        </p>

                        <div class="text-sm">
                            <p class="text-white"><span class="font-bold text-blue-200">Tersedia:</span> Setiap Hari</p>
                            <p class="text-white"><span class="font-bold text-blue-200">Area Layanan:</span> Depok & Tangerang</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

@endsection
