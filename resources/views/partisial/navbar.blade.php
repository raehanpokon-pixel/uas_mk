<nav class="navbar">
    <div class="logo-container">
        <i class="fa-solid fa-stethoscope logo-icon"></i>
        <span class="text-hello">Hello</span><span class="text-doc">Doc</span>
    </div>

    <ul class="nav-links">
        <li><a href="{{ route('landingpage') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('service') }}">Services</a></li>
        <li><a href="{{route('dok')}}">Our Doctors</a></li>
        <li><a href="{{route('kontak')}}">Contact Us</a></li>
    </ul>

    <div class="user-action">
        <i class="fa-regular fa-user"></i>
    </div>
</nav>
