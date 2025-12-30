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

    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">

        <div class="text-center mb-16 space-y-4">
            <h3 class="text-blue-900 font-bold tracking-widest text-sm uppercase">Layanan Kami</h3>
            <h2 class="text-4xl md:text-5xl font-bold text-blue-900 leading-tight">
                Layanan Kesehatan Lengkap <br class="hidden md:block" /> untuk Anda dan Keluarga
            </h2>
            <p class="text-slate-600 max-w-4xl mx-auto text-lg leading-relaxed mt-6">
                HelloDoc menyediakan berbagai layanan kesehatan terpadu, mulai dari konsultasi daring hingga kunjungan dokter ke rumah Anda. Semua layanan kami dilakukan oleh tenaga medis profesional yang siap membantu Anda dengan sepenuh hati, di mana pun dan kapan pun Anda membutuhkan.
            </p>
        </div>

        <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

            <div herf="{{route('service')}}" class="absolute -left-6 top-1/2 transform -translate-y-1/2 z-20 hidden xl:block">
                <a href="{{ route('service') }}" class="absolute -left-6 top-1/2 transform -translate-y-1/2 z-20 hidden xl:block">
                    <button class="bg-blue-900 text-white p-4 rounded-full shadow-lg hover:bg-blue-800 transition-all hover:scale-110 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </a>

            </div>

            <div class="lg:col-span-8 bg-blue-900 rounded-[2.5rem] p-8 md:p-12 text-white relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-800 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -mr-16 -mt-16"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10 h-full items-end">

                    <div class="group cursor-pointer">
                        <div class="overflow-hidden rounded-xl mb-4 h-48 w-full bg-blue-800">
                            <img src="{{asset('storage/image/img1sv2.jpg')}}"
                                 alt="Pemeriksaan Anak"
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        </div>
                        <h4 class="text-xl font-bold mb-2 group-hover:text-blue-200 transition">Pemeriksaan Anak & Lansia</h4>
                        <p class="text-blue-100 text-sm leading-relaxed opacity-90">
                            Tenaga medis kami siap melakukan pemeriksaan rutin bagi anak dan lansia.
                        </p>
                    </div>

                    <div class="group cursor-pointer">
                        <div class="overflow-hidden rounded-xl mb-4 h-48 w-full bg-blue-800">
                            <img src="{{asset('storage/image/img2sv2.jpg')}}"
                                 alt="Layanan Laboratorium"
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        </div>
                        <h4 class="text-xl font-bold mb-2 group-hover:text-blue-200 transition">Layanan Obat & Laboratorium</h4>
                        <p class="text-blue-100 text-sm leading-relaxed opacity-90">
                            Dapatkan obat resep dan layanan tes laboratorium tanpa harus ke klinik.
                        </p>
                    </div>

                </div>
            </div>

            <div class="lg:col-span-4 relative flex flex-col justify-end mt-12 lg:mt-0">

                <div class="absolute -top-32 right-0 left-0 flex justify-center lg:justify-end z-10 pointer-events-none">
                    <img src="{{asset('storage/image/imgkumpuldokter-removebg-preview.png')}}"
                         alt="Tim Dokter"
                         class="h-64 object-contain drop-shadow-xl">
                </div>

                <div class="border-2 border-blue-900 rounded-[2rem] p-8 pt-16 bg-white shadow-lg relative z-0 h-full flex items-center">
                    <div>
                        <p class="text-blue-900 text-lg font-medium leading-relaxed mb-6">
                            Kami percaya setiap orang berhak mendapatkan pelayanan kesehatan yang
                            <span class="font-bold">cepat, aman, dan penuh empati.</span>
                        </p>
                        <p class="text-blue-900 text-lg leading-relaxed">
                            Dengan <span class="font-bold text-blue-700">HelloDoc</span>, semua kebutuhan medis Anda cukup dalam satu genggaman.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
