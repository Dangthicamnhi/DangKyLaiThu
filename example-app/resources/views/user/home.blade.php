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
            <img class="art-home" src="img/xe1.png" alt="ảnh xe">
        </div>
    </div>
    <div class="content text-center w-100">
        <h1 class="tieude">Sự Kiện</h1>
        <img class="art-home mb-3" src="img/sukien.png" alt="anh sự kiện">
        <div class="row sukien justify-content-center">
            <div class="col-5 text-center bg-card card-sukien">
                <img class="img-sukien" src="img/xe2.png" alt="">
                <h3 class="tieude-sukien">Siêu xe Mercedes-Benz AMG GT</h3>
                <p class="noidung-sukien">Mercedes-AMG GT 2021 được bổ sung các nâng cấp một số chi tiết và tăng thêm
                    sức mạnh động cơ của xe cũng tăng thêm 53 mã lực, đạt mức 523 mã lực.</p>
                <button type="button" class="btn btn-info text-white"><b>Đăng ký ngay</b></button>
            </div>
            <div class="col-5 text-center bg-card card-sukien">
                <img class="img-sukien" src="img/xe3.png" alt="">
                <h3 class="tieude-sukien">Siêu xe Mercedes-Benz AMG GT</h3>
                <p class="noidung-sukien">Mercedes-AMG GT 2021 được bổ sung các nâng cấp một số chi tiết và tăng thêm
                    sức mạnh động cơ của xe cũng tăng thêm 53 mã lực, đạt mức 523 mã lực.</p>
                <button type="button" class="btn btn-info text-white"><b>Đăng ký ngay</b></button>
            </div>
            <div class="col-5 text-center bg-card card-sukien">
                <img class="img-sukien" src="img/xe1.png" alt="">
                <h3 class="tieude-sukien">Siêu xe Mercedes-Benz AMG GT</h3>
                <p class="noidung-sukien">Mercedes-AMG GT 2021 được bổ sung các nâng cấp một số chi tiết và tăng thêm
                    sức mạnh động cơ của xe cũng tăng thêm 53 mã lực, đạt mức 523 mã lực.</p>
                <button type="button" class="btn btn-info text-white"><b>Đăng ký ngay</b></button>
            </div>
            <div class="col-5 text-center bg-card card-sukien">
                <img class="img-sukien" src="img/xe2.png" alt="">
                <h3 class="tieude-sukien">Siêu xe Mercedes-Benz AMG GT</h3>
                <p class="noidung-sukien">Mercedes-AMG GT 2021 được bổ sung các nâng cấp một số chi tiết và tăng thêm
                    sức mạnh động cơ của xe cũng tăng thêm 53 mã lực, đạt mức 523 mã lực.</p>
                <button type="button" class="btn btn-info text-white"><b>Đăng ký ngay</b></button>
            </div>
        </div>
        <h1 class="tieude">Khuyến Mãi</h1>
        <div class="khuyenmai justify-content-center">
            <div class="text-center bg-card card-khueynmai row">
                <div class="left-khuyenmai col-5"><img class="img-khuyenmai" src="img/xe2.png" alt=""></div>
                <div class="right-khuyenmai col-7">
                    <h3 class="tieude-khuyenmai">Trương trình dành cho thành viên mới!!!</h3>
                    <p class="thoihan-khuyenmai">Từ ngày 20-11 đến 30-11</p>
                    <h3 class="noidung-khuyenmai">Tặng bạn vocher trị giá lên đến 500.00đ</h3>
                    <button type="button" class="btn btn-info text-white mt-5"><b>Nhận khuyến mãi</b></button>
                </div>
            </div>
            <div class="text-center bg-card card-khueynmai row">
                <div class="right-khuyenmai col-7">
                    <h3 class="tieude-khuyenmai">Trương trình dành cho thành viên mới!!!</h3>
                    <p class="thoihan-khuyenmai">Từ ngày 20-11 đến 30-11</p>
                    <h3 class="noidung-khuyenmai">Tặng bạn vocher trị giá lên đến 500.00đ</h3>
                    <button type="button" class="btn btn-info text-white mt-5"><b>Nhận khuyến mãi</b></button>
                </div>
                <div class="left-khuyenmai col-5"><img class="img-khuyenmai" src="img/xe2.png" alt=""></div>
            </div>
        </div>
        <h1 class="tieude">Sản Phẩm</h1>
        <div class="sanpham justify-content-center">
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
            <div class="text-center bg-card card-sanpham">
                <img class="img-sanpham" src="img/cardxe1.png" alt="">
                <h5 class="tieude-sanpham">Xe Mercedes-Benz AMG GT</h5>
                <p class="noidung-sanpham">Lái thử ngay chỉ từ.....</p>
            </div>
        </div>
    </div>


</div>
</div>

@endsection