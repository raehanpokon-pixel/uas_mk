@extends('layouts.app')

@section('content')

<style>
    /* --- CSS HERO SECTION --- */
    .hero-section {
        position: relative;
        width: 100%;
        height: 85vh;
        display: flex;
        align-items: center;
        justify-content: space-between;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
        background: url('{{asset('storage/image/backland.jpg')}}') no-repeat center center/cover;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0);
        z-index: 1;
    }

    .container {
        position: relative;
        z-index: 2;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        height: 100%;
        align-items: center;
    }

    .hero-text {
        flex: 1;
        padding-right: 20px;
    }

    .sub-title {
        color: #0d1b45;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
        letter-spacing: 0.5px;
    }

    .main-title {
        color: #0f166b;
        font-size: 56px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 30px;
        text-shadow: 2px 2px 0px rgba(255,255,255, 0.8);
    }

    .btn-group {
        display: flex;
        gap: 20px;
    }

    .btn {
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-primary {
        background-color: #162075;
        color: white;
        border: 2px solid #162075;
        box-shadow: 0 4px 15px rgba(22, 32, 117, 0.3);
    }
    .btn-primary:hover {
        background-color: #0a1045;
        transform: translateY(-2px);
    }

    .btn-outline {
        background-color: transparent;
        color: #162075;
        border: 2px solid #162075;
    }
    .btn-outline:hover {
        background-color: #162075;
        color: white;
    }

    .hero-image {
        flex: 1;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        position: relative;
    }

    .doctor-img {
        max-height: 95%;
        width: auto;
        filter: drop-shadow(-10px 0 15px rgba(0,0,0,0.1));
    }

    @media (max-width: 768px) {
        .hero-section { height: auto; padding: 50px 0; }
        .container { flex-direction: column; text-align: center; }
        .hero-text { padding-right: 0; margin-bottom: 40px; }
        .main-title { font-size: 36px; }
        .btn-group { justify-content: center; }
        .doctor-img { max-height: 400px; }
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

<section class="hero-section">
    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-text">
            <p class="sub-title">Kesehatan Anda, Prioritas Kami</p>
            <h1 class="main-title">Selamat Datang<br>di HelloDoc</h1>

            <div class="btn-group">
                <a href="{{route('service')}}" class="btn btn-primary">Lihat Layanan Kami</a>
                <a href="{{route('antrian')}}" class="btn btn-outline">Ambil Antrian</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('storage/image/dokteradelan.png') }}" alt="Dokter HelloDoc" class="doctor-img">
        </div>
    </div>
</section>

@endsection
