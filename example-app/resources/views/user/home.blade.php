@extends('header')
@section('title', 'Home')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('content')
<div class="container-fluid">
    <div class="header row">
        <div id="left-header" class="col-6 text-center">
            <h1>Lái thử hôm nay, chọn xe chuẩn ngay!</h1>
            <h3>Thủ tục nhanh gọn-Nhận xe nhanh chóng!</h3>
            <p>Chỉ từ 499.000k bạn đã có 3 giờ trên chiếc siêu xe Lamborghini</p>
            <button type="button" class="btn btn-info text-white"><b>Đăng ký ngay</b></button>
        </div>
        <div class="col-6">
            <img id="artHeader" src="img/pngtree-black-super-car-png-image_11921537.png" alt="ảnh xe">
        </div>
    </div>
    <div class="content text-center w-100">
        <h1>Sự Kiện</h1>
    </div>
</div>

@endsection