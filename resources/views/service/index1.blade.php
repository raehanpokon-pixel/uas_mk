@extends('layouts.app')

@section('content')

<style>
    .service-title {
        color: #0B1E7A;
        font-weight: 800;
        text-align: center;
    }

    .service-subtitle {
        margin-top: 25px;
        color: #0B1E7A;
        letter-spacing: 2px;
        font-size: 12px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 10px;
    }

    .service-description {
        color: #0B1E7A;
        max-width: 750px;
        margin: 0 auto;
        text-align: center;
        font-size: 15px;
        line-height: 1.65;
        opacity: .9;
    }

    /* Bagian biru */
    .blue-section {
        background-color: #0B1E7A;
        padding: 50px 0;
        width: 100%;
        margin-top: 40px;
    }

    /* Card item */
    .service-item h3 {
        font-size: 14px;   /* lebih kecil */
        font-weight: 700;
        margin-bottom: 8px;
        color: white;
    }

    .service-item p {
        font-size: 12px;   /* lebih kecil */
        line-height: 1.55;
        opacity: .9;
        color: white;
    }

    .service-img {
        width: 100%;
        height: 120px;     /* sebelumnya 150–170 */
        object-fit: cover;
        border-radius: 6px;
        margin-bottom: 10px;
    }

    .service-card {
        background: rgba(255, 255, 255, 0);
        padding: 18px;
        border-radius: 10px;
        color: #0B1E7A;
        transition: 0.2s ease;
        max-width: 260px; /* supaya tidak melebar */
        margin: 0 auto; /* rata tengah */
    }

    .service-card:hover {
        transform: translateY(-3px);
        box-shadow: 0px 6px 14px rgba(0,0,0,0.18);
    }

    .grid {
        justify-items: center;
        display: flex;
    }

    @media (min-width: 992px) {
        .service-img {
            height: 170px;
        }
    }
</style>

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



<div class="w-full font-sans">

    {{-- BAGIAN ATAS PUTIH --}}
    <section class="py-12 relative" style="position: relative;">

        {{-- Kontainer Teks --}}
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <h5 class="service-subtitle">LAYANAN KAMI</h5>

            <h1 class="service-title text-2xl md:text-3xl mb-4">
                Layanan Kesehatan Lengkap untuk Anda dan<br>
                Keluarga
            </h1>

            <p class="service-description mt-5">
                HelloDoc menyediakan berbagai layanan kesehatan terpadu, mulai dari konsultasi daring hingga
                kunjungan dokter ke rumah Anda. Semua layanan kami dilakukan oleh tenaga medis profesional yang
                siap membantu Anda dengan sepenuh hati, di mana pun dan kapan pun Anda membutuhkan.
            </p>
        </div>

       {{-- TOMBOL PANAH (SOLUSI ANTI-GAGAL & BULAT) --}}
        <div style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); z-index: 9999;">

            <a href="{{ route('service2') }}">
                <button class="shadow-lg flex items-center justify-center transition-transform hover:scale-110"
                    style="background-color: #0B1E7A; width: 50px; height: 50px; color: white; border: none; cursor: pointer; border-radius: 50%;">

                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>

                </button>
            </a>
        </div>

    </section>

    {{-- BAGIAN BIRU (GRID) - TIDAK DIUBAH --}}
    <section class="blue-section text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7">

                {{-- Item 1 --}}
                <div class="service-card service-item">
                    <img src="{{ asset('storage/image/img1sv.jpg') }}" class="service-img" alt="">
                    <h3>Kunjungan Dokter ke Rumah</h3>
                    <p>Dokter umum dan spesialis siap datang ke rumah Anda untuk pemeriksaan langsung. Cocok bagi pasien yang membutuhkan perawatan tanpa harus ke rumah sakit.</p>
                </div>

                {{-- Item 2 --}}
                <div class="service-card service-item">
                    <img src="{{ asset('storage/image/img2sv.jpg') }}" class="service-img" alt="">
                    <h3>Konsultasi Online</h3>
                    <p>Konsultasi dokter kapan saja melalui video call tanpa antre, cukup buka aplikasi HelloDoc.</p>
                </div>

                {{-- Item 3 --}}
                <div class="service-card service-item">
                    <img src="{{ asset('/storage/image/img3sv.jpg') }}" class="service-img" alt="">
                    <h3>Perawatan Luka</h3>
                    <p>Tim perawat profesional siap membantu perawatan luka ringan, pasca operasi, hingga perawatan rutin di rumah.</p>
                </div>

                {{-- Item 4 --}}
                <div class="service-card service-item">
                    <img src="{{ asset('storage/image/img4sv.jpg') }}" class="service-img" alt="">
                    <h3>Fisioterapi & Rehabilitasi</h3>
                    <p>Layanan terapi fisik di rumah Anda untuk pemulihan cedera, stroke, atau pasca operasi.</p>
                </div>

            </div>
        </div>
    </section>

</div>

@endsection
