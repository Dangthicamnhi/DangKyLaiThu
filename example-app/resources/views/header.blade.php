<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
</head>

<body>
    {{-- @include('user.header') --}}
    <div class="header">
        <!-- Navbar -->
        <header class="navbar">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </div>
            <nav class="menu">
                <a href="#">Giới Thiệu</a>
                <a href="#">Đối Tác Chiến Lược</a>
                <a href="#">Báo Giá</a>
                <a href="#">Tin Tức</a>
                <a href="#">Liên Hệ</a>
            </nav>
            <div class="search-box">
                <input type="text" placeholder="Search">
                <button class="camera-btn">
                    <img class="imgCamera" src="{{ asset('img/camera.png') }}" alt="">
                    <img class="imgCamera" src="{{ asset('img/micro.png') }}" alt="">
                </button>
                {{-- <i class="fa fa-camera"></i> --}}
                {{-- <button class="settings-btn"><i class="fa fa-cog"></i></button> --}}
            </div>
            <div class="user-options">
                <button class="login-btn"> <img src="{{ asset('img/login.png') }}" alt="">
                    {{-- <i class="fa fa-lock"></i> --}}
                </button>
                <button class="profile-btn"><img src="{{ asset('img/signup.png') }}" alt=""></button>
            </div>
            {{-- <div class="container">
                <a href="/login" class="button">
                    <span class="button-icon icon-lock"></span>
                    <span class="button-text">LOGIN</span>
                </a>
                <a href="/register" class="button button-light">
                    <span class="button-icon icon-user"></span>
                    <span class="button-text">SIGN UP</span>
                </a>
            </div> --}}

        </header>
    </div>
    <div class="content">
        @yield('content')
    </div>

    {{-- @include('layouts.footer') --}}
    <div class="footer">
        <footer class="footer">
            <div class="footer-content">
                <div class="company">
                    <img src="car.png" alt="Car Image">
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
                <div class="follow-us">
                    <h4>Follow us</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</html>
