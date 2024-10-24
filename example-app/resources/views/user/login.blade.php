@extends('user.header')
@section('title', 'Login')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('content')
    <div class="container">

        <div class="login-container">
            <span class="close-button">&times;</span>
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="social-login">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-google"></i></a>
            </div>
            <div class="register-link">
                New Here? <a href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </div>


@endsection
