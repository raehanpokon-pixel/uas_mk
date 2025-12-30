@extends('layouts.app')

@section('content')

<style>
    /* --- CSS SECTION --- */
    .about-section-v2 {
        padding: 80px 5%;
        background-color: #fff;
        font-family: 'Poppins', sans-serif;
        display: flex;
        justify-content: center;
        overflow: hidden;
    }

    .container-v2 {
        display: flex;
        width: 100%;
        max-width: 1200px;
        gap: 50px;
        align-items: center;
    }

    /* --- KOLOM KIRI: KOLASE GAMBAR --- */
    .image-collage {
        flex: 1;
        position: relative;
        height: 550px; /* Area tinggi untuk menampung foto */
        width: 100%;
    }

    .collage-img {
        position: absolute;
        object-fit: cover;
        /* Border putih tebal untuk efek pemisah antar gambar */
        border: 4px solid #fff;
    }

    /* Gambar 1: Tim Dokter (Kiri Atas - Portrait) */
    .img-team {
        width: 42%;
        height: 55%;
        top: 0;
        left: 0;
        z-index: 1;
    }

    /* Gambar 2: Konsultasi (Kanan Tengah - Landscape) */
    .img-consult {
        width: 48%;
        height: 40%;
        top: 20%;
        right: 0;
        z-index: 0;
    }

    /* Gambar 3: Lansia (Bawah Kiri - Landscape) */
    .img-elderly {
        width: 50%;
        height: 38%;
        bottom: 0;
        left: 5%;
        z-index: 2;
    }

    /* Kotak Hijau "23 Years" */
    .exp-badge {
        position: absolute;
        width: 130px;
        height: 130px;
        background-color: #10a36e; /* Hijau HelloDoc */
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        /* Posisi akurat di perpotongan gambar */
        bottom: 25%;
        right: 35%;
        z-index: 3;
        box-shadow: 0 5px 15px rgba(16, 163, 110, 0.2);
    }

    .exp-num {
        font-size: 36px;
        font-weight: 700;
        line-height: 1;
    }

    .exp-label {
        font-size: 11px;
        font-weight: 500;
        margin-top: 5px;
        max-width: 80px;
    }

    /* --- KOLOM KANAN: TEKS --- */
    .text-content {
        flex: 1;
        padding-left: 20px;
    }

    .section-subtitle {
        color: #162075; /* Biru Teks */
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        display: block;
    }

    .section-title {
        color: #0b1c48; /* Biru Gelap Judul */
        font-size: 42px;
        font-weight: 800; /* Extra Bold */
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .main-desc {
        color: #334; /* Abu-abu gelap */
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
        text-align: justify;
    }

    .sub-head-bold {
        color: #0b1c48;
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 10px;
        display: block;
    }

    /* Styling List (Titik-titik) */
    .feature-list {
        list-style: none; /* Hilangkan bullet default */
        padding: 0;
        margin-bottom: 20px;
    }

    .feature-list li {
        position: relative;
        padding-left: 15px;
        margin-bottom: 8px;
        font-size: 14px;
        color: #334;
        line-height: 1.5;
    }

    /* Membuat titik bullet custom kecil */
    .feature-list li::before {
        content: "•";
        color: #0b1c48;
        font-weight: bold;
        position: absolute;
        left: 0;
        top: 0;
    }

    /* Tombol Bulat Panah */
    .circle-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background-color: #0b1c48; /* Biru Gelap */
        color: white;
        border-radius: 50%;
        text-decoration: none;
        transition: transform 0.3s;
        font-size: 14px;
    }

    .circle-btn:hover {
        transform: scale(1.1);
        background-color: #162075;
    }

    /* Responsif HP */
    @media (max-width: 900px) {
        .container-v2 { flex-direction: column; gap: 40px; }
        .image-collage { height: 400px; }
        .text-content { padding-left: 0; }
        .section-title { font-size: 32px; }
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

<section class="about-section-v2">
    <div class="container-v2">

        <div class="image-collage">
            <img src="{{asset('storage/image/img1ab.jpg')}}" class="collage-img img-team" alt="Team">

            <img src="{{asset('storage/image/img2ab.jpg')}}" class="collage-img img-consult" alt="Consult">

            <img src="{{asset('storage/image/img3ab.jpg')}}" class="collage-img img-elderly" alt="Elderly">

            <div class="exp-badge">
                <span class="exp-num">23.</span>
                <span class="exp-label">Year Of Experience</span>
            </div>
        </div>

        <div class="text-content">
            <span class="section-subtitle">ABOUT US</span>
            <h2 class="section-title">Tentang HelloDoc</h2>

            <p class="main-desc">
                HelloDoc hadir sebagai solusi kesehatan modern yang memadukan teknologi dan empati. Kami memahami bahwa tidak semua orang memiliki waktu atau kemampuan untuk datang ke rumah sakit, karena itu kami menghadirkan tenaga medis profesional langsung ke tempat Anda dengan cara yang lebih cepat, aman, dan nyaman.
            </p>

            <span class="sub-head-bold">Melalui HelloDoc, Anda dapat:</span>

            <ul class="feature-list">
                <li>Membuat janji dengan dokter umum atau spesialis kapan saja.</li>
                <li>Melakukan konsultasi kesehatan secara online dari rumah.</li>
                <li>Memesan layanan perawatan luka, fisioterapi, dan keperawatan harian.</li>
            </ul>

            <p class="main-desc">
                Semua layanan kami dirancang untuk memberikan pengalaman medis yang lebih personal, lebih praktis, dan lebih transparan.
            </p>

            <a href="{{route('about')}}" class="circle-btn">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </div>

    </div>
</section>

@endsection
