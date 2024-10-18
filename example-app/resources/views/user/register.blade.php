@extends('user.header')
@section('title', 'register')
<link rel="stylesheet" href="{{ asset('css/register_style.css') }}">

@section('content')
    <div class="container">

        {{-- <!-- Register Form -->
        <div class="form-box">
            <h2>Register</h2>
            <form>
                <div class="input-box">
                    <input type="text" placeholder="FullName" required>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                </div>
                <button class="btn">Register</button>
                <p>Already member? <a href="#">Login</a></p>
                <div class="socials">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-google"></i>
                </div>
            </form>
        </div> --}}
        <div class="register-container">
            <div class="register-box">
                <div class="close-button">✕</div>
                <h1>Register</h1>
                <form>
                    <input type="text" placeholder="FullName" required>
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Password" required>
                    <div class="social-login">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-google"></i>
                    </div>
                    <p>Already member? <a href="#">Login</a></p>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>


@endsection
