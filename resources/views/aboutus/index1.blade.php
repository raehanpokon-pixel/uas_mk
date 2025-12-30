@extends('layouts.app')

@section('content')
<style>
    /* --- Container Utama --- */
    .about-section {
        padding: 80px 5%;
        background-color: #fff;
        font-family: 'Poppins', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden; /* Mencegah elemen keluar layar */
    }

    .about-container {
        display: flex;
        width: 100%;
        max-width: 1200px;
        gap: 60px; /* Jarak antara gambar dan teks */
    }

    /* --- Bagian KIRI: Kolase Gambar --- */
    .about-images-wrapper {
        flex: 1; /* Mengambil 50% lebar */
        position: relative;
        height: 500px; /* Tinggi area gambar */
    }

    /* Style umum untuk semua gambar dalam kolase */
    .collage-img {
        position: absolute;
        object-fit: cover;
        border-radius: 4px; /* Sedikit rounded */
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    /* Gambar 1: Dokter Berdiri (Paling Kiri Atas) */
    .img-1 {
        width: 40%;
        height: 60%;
        top: 0;
        left: 5%;
        z-index: 1;
    }

    /* Gambar 2: Konsultasi (Kanan Tengah) */
    .img-2 {
        width: 45%;
        height: 40%;
        top: 15%;
        right: 0;
        z-index: 0; /* Di belakang */
    }

    /* Gambar 3: Lansia (Bawah) */
    .img-3 {
        width: 50%;
        height: 40%;
        bottom: 0;
        left: 15%;
        z-index: 2;
    }

    /* Kotak Hijau Pengalaman */
    .experience-box {
        position: absolute;
        width: 140px;
        height: 140px;
        background-color: #10a36e; /* Hijau Medis */
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        /* Posisi kotak hijau agar menumpuk di tengah */
        bottom: 25%;
        right: 30%;
        z-index: 3; /* Paling depan */
        box-shadow: 0 10px 20px rgba(16, 163, 110, 0.3);
    }

    .exp-number {
        font-size: 32px;
        font-weight: 800;
        line-height: 1;
    }

    .exp-text {
        font-size: 12px;
        font-weight: 500;
        margin-top: 5px;
        max-width: 80px;
    }

    /* --- Bagian KANAN: Konten Teks --- */
    .about-content {
        flex: 1; /* Mengambil 50% lebar */
    }

    .sub-heading {
        color: #162075; /* Biru Gelap */
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }

    .main-heading {
        color: #0b1c48; /* Biru Sangat Gelap */
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 25px;
    }

    .description {
        color: #162075; /* Biru Teks */
        font-size: 16px;
        line-height: 1.8; /* Jarak antar baris agar mudah dibaca */
        margin-bottom: 35px;
        font-weight: 500;
        text-align: justify; /* Agar rata kanan kiri */
    }

    .btn-about {
        display: inline-block;
        background-color: #0b1c48; /* Biru Tombol */
        color: white;
        padding: 15px 35px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        transition: background 0.3s;
        box-shadow: 0 5px 15px rgba(11, 28, 72, 0.3);
    }

    .btn-about:hover {
        background-color: #162075;
        transform: translateY(-2px);
    }

    /* --- Responsif (Mobile) --- */
    @media (max-width: 900px) {
        .about-container {
            flex-direction: column;
            gap: 40px;
        }
        .about-images-wrapper {
            width: 100%;
            height: 400px; /* Perkecil tinggi di HP */
        }
        .about-content {
            width: 100%;
            text-align: center; /* Teks tengah di HP */
        }
        .description {
            text-align: center;
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

<section class="about-section">
    <div class="about-container">

        <div class="about-images-wrapper">
            <img src="{{asset('storage/image/img1ab.jpg')}}" class="collage-img img-1" alt="Tim Dokter">

            <img src="{{asset('storage/image/img2ab.jpg')}}" class="collage-img img-2" alt="Konsultasi">

            <img src="{{asset('storage/image/img3ab.jpg')}}" class="collage-img img-3" alt="Layanan Rumah">

            <div class="experience-box">
                <span class="exp-number">23+</span>
                <span class="exp-text">Year Of Experience</span>
            </div>
        </div>

        <div class="about-content">
            <h4 class="sub-heading">ABOUT US</h4>
            <h2 class="main-heading">Tentang HelloDoc</h2>
            <p class="description">
                Kami adalah platform kesehatan yang menghubungkan pasien dengan dokter dan tenaga medis secara cepat, mudah, dan terpercaya. Dengan sistem digital terintegrasi, Anda bisa membuat janji temu, melakukan konsultasi daring, hingga mendapatkan layanan kunjungan ke rumah.
            </p>
            <a href="{{route('aboutus')}}" class="btn-about">Pelajari Lebih Lanjut</a>
        </div>

    </div>
</section>
@endsection
