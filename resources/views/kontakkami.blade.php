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

<div class="bg-white min-h-screen flex items-center justify-center p-6 font-sans">

    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        <div class="space-y-8 pr-0 md:pr-10">

            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#001f5b] mb-4 tracking-tight">
                    Kontak Kami
                </h2>
                <p class="text-[#1e3a66] text-lg leading-relaxed text-justify font-medium opacity-90">
                    Kami selalu siap membantu Anda. Silakan hubungi kami melalui informasi berikut jika Anda memiliki pertanyaan, membutuhkan bantuan, atau ingin mengetahui lebih lanjut tentang layanan HelloDoc.
                </p>
            </div>

            <div class="space-y-6">

                <div class="flex items-start group">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-7 h-7 text-black" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <p class="text-[#001f5b] font-bold text-lg">0821-XXXX-XXXX</p>
                        <p class="text-[#001f5b] font-bold text-sm">Layanan setiap hari, 08.00 – 21.00 WIB</p>
                    </div>
                </div>

                <div class="flex items-start group">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-7 h-7 text-black" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <p class="text-[#001f5b] font-bold text-lg">support@hellodoc.id</p>
                        <p class="text-[#001f5b] font-bold text-sm">Respon maksimal 1×24 jam</p>
                    </div>
                </div>

                <div class="flex items-start group">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-7 h-7 text-black" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <div class="ml-5">
                        <p class="text-[#001f5b] font-bold text-lg">HelloDoc Indonesia</p>
                        <p class="text-[#001f5b] font-bold text-sm">Jl. Contoh Sehat No. 12, Jakarta Selatan</p>
                    </div>
                </div>

                <div class="flex items-start group">
                    <div class="flex-shrink-0 mt-1">
                        <svg class="w-7 h-7 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-5">
                        <p class="text-[#001f5b] font-bold text-lg">Senin – Minggu</p>
                        <p class="text-[#001f5b] font-bold text-sm">08.00 – 21.00 WIB</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="relative flex justify-center md:justify-end items-end h-full">
            <img
                src="{{ asset('storage/image/kontakimg-removebg-preview.png') }}"
                alt="HelloDoc Doctor"
                class="w-3/4 md:w-full max-w-md object-contain transform translate-y-4"
            >
        </div>

    </div>
</div>

@endsection
