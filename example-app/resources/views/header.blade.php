<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body>
    {{-- @include('user.header') --}}

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-left">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </div>
        <div class="navbar-center">
            <ul>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Đối Tác Chiến Lược</a></li>
                <li><a href="#">Báo Giá</a></li>
                <li><a href="#">Tin Tức</a></li>
                <li><a href="#">Liên Hệ</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="search-container">
                <input type="text" placeholder="Search">
                <div class="camera">
                    {{-- <img src="camera-icon.png" alt="Camera Icon"> --}}
                    <i class="bi bi-camera2"></i>
                </div>
                <div class="mic">
                    <i class="bi bi-mic-fill"></i>
                    {{-- <img src="microphone-icon.png" alt="Microphone Icon"> --}}
                </div>
            </div>

        </div>
        <div class="user-options">
            <button class="login-btn"> <img src="{{ asset('img/login.png') }}" alt="">
                {{-- <i class="fa fa-lock"></i> --}}
            </button>
            <button class="profile-btn"><img src="{{ asset('img/signup.png') }}" alt=""></button>
        </div>
    </nav>

    <!-- Main content -->
    <div class="content">
        @yield('content')
    </div>

    {{-- @include('layouts.footer') --}}
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="company">
                <img src="{{ asset('img/home 1.png') }}" alt="Car Image">
                <p>We offer the best electric cars of the most recognized brands in the world.</p>
            </div>
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Cars</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">Request a quote</a></li>
                    <li><a href="#">Find a dealer</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Follow us</h4>
                <ul>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                </ul>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.968441276096!2d106.72450917480546!3d10.813726989337328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fea21666891%3A0xeb555d67a895a242!2zVmnhu4duIEF1dG8!5e0!3m2!1svi!2s!4v1729591140486!5m2!1svi!2s"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>

</body>

</html>