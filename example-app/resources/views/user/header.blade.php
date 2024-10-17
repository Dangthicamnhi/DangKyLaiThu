<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="#"><img src="/path-to-your-logo/logo.png" alt="Logo"></a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Đối Tác Chiến Lược</a></li>
                <li><a href="#">Báo Giá</a></li>
                <li><a href="#">Tin Tức</a></li>
                <li><a href="#">Liên Hệ</a></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Search">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="icons">
                <a href="#"><i class="fas fa-lock"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
            </div>
        </nav>
    </div>

    @yield('content')

    <div class="footer">
        <footer class="footer">
            <div class="footer-section company">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Cars</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="footer-section information">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">Request a quote</a></li>
                    <li><a href="#">Find a dealer</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
            <div class="footer-section follow-us">
                <h4>Follow us</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </footer>

    </div>

</body>

</html>
