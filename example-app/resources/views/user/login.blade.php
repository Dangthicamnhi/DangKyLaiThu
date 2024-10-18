@extends('header')
@section('title', 'login')
@section('content')
    <div class="container">

        <div class="form-container">
            <div class="form-header">
                <h2>Login</h2>
                <button class="close-btn">&times;</button>
            </div>
            <div class="form-body">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#" style="display: block; text-align: right; margin-bottom: 10px;">Forgot Password?</a>
                <button>Login</button>
            </div>
            <div class="form-footer">
                <div class="social-login">
                    <img src="facebook-icon.png" alt="Facebook">
                    <img src="google-icon.png" alt="Google">
                </div>
                <p>New here? <a href="#">Register</a></p>
            </div>
        </div>
    </div>


@endsection
