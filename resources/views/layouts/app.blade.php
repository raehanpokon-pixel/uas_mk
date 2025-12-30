<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloDoc Navbar</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/drone.css') }}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }

        /* ======================= NAVBAR ======================= */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 15px 50px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.08);
        }

        /* Logo */
        .logo-container {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: 700;
            cursor: pointer;
        }

        .logo-icon {
            color: #1abc9c;
            font-size: 28px;
            margin-right: 8px;
            transform: rotate(-15deg);
        }

        .text-hello { color: #1abc9c; }
        .text-doc { color: #008CBA; }

        /* Menu Tengah */
        .nav-links {
            list-style: none;
            display: flex;
            gap: 40px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #333;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.3s;
        }

        .nav-links li a:hover {
            color: #1abc9c;
        }

        .nav-links li a.active {
            color: #000;
            border-bottom: 2px solid #333;
            padding-bottom: 4px;
        }

        .user-action {
            font-size: 20px;
            color: #333;
            cursor: pointer;
        }

        /* ======================= ANIMASI PAGE TRANSITION ======================= */
        body.fade-in {
            animation: fadeIn 0.6s ease forwards;
        }
        body.fade-out {
            animation: fadeOut 0.6s ease forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to   { opacity: 0; }
        }

        /* ======================= RESPONSIVE ======================= */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'sans-serif'] }
                }
            }
        }
    </script>

    <!-- Page Transition Script -->
    <script>
        document.body.classList.add("fade-in");

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll("a:not([target='_blank'])").forEach(link => {

                link.addEventListener("click", function (e) {
                    if (this.href.includes("#")) return;

                    e.preventDefault();
                    const url = this.href;

                    document.body.classList.remove("fade-in");
                    document.body.classList.add("fade-out");

                    setTimeout(() => {
                        window.location.href = url;
                    }, 500);
                });

            });
        });
    </script>

    <script src="{{ asset('js/drone.js') }}"></script>


</head>

<body>

<main>
    @include('partisial.navbar')
    @yield('content')
</main>

</body>
</html>
