<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="header">

        @auth
            <div class="headerAdmin">
                <div class="logo"> <img src="{{ asset('img/logo.png') }}" alt="Logo"></div>
                <div class="logout">
                    <a href="{{route('', []) }}">Đăng xuất</a>
                </div>
            </div>


        @endauth
    </div>
    <div class="row">
        {{-- Blade template --}}
        <div class="col-md-2">
            <nav class="nav flex-column bg-secondary p-3" style="width: 250px;">
                <b class="menu">Menu</b>
                <a class="nav-link {{ Request::routeIs('admin.admin') ? 'active' : '' }}"
                    href="{{route('admin') }}">User</a>
                <a class="nav-link {{ Request::routeIs('danhmuc.list') ? 'active' : '' }}"
                    href="#">Category</a>
                <a class="nav-link {{ Request::routeIs('sanpham.list') ? 'active' : '' }}"
                    href="#">Product</a>
                <a class="nav-link {{ Request::routeIs('nph.list') ? 'active' : '' }}"
                    href="#">Brand</a>
            </nav>
        </div>

        <div class="col-md-10">
            @yield('content')
        </div>

    </div>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</html>