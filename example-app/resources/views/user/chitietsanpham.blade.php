@extends('header')
@section('title', 'Chi Tiết Sản Phẩm')
<link rel="stylesheet" href="{{ asset('css/sanpham.css') }}">
@section('content')
<div class="container-fluid">
    <div class="header row justify-content-center">
        <div class="main-art col-7 m-3">
            <img src="img/Rectangle 4.png" alt="">
        </div>
        <div class="sub-art col-4 col mt-1 justify-content-center">
            <img class="m-3" src="img/Rectangle 5.png" alt="">
            <img class="m-3" src="img/Rectangle 6.png" alt="">
            <img class="m-3" src="img/Rectangle 7.png" alt="">
        </div>
    </div>
    <div class="content row justify-content-center">
        <div class="left-content col-7 text-center">
            <h1 class="tenxe ">LAMBORGHINI URUS 2023</h1>
            <div class="danhgia d-inline-block">
                5.0
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
            </div>
            <div class="diachi d-inline-block">Quận 3, Thành Phố Hồ Chí Minh</div>
            <div class="tag">
                <div class="tag-name">Số tự động</div>
                <div class="tag-name">Giao xe Tận nơi</div>
                <div class="tag-name">Đặt xe nhanh</div>
                <div class="tag-name">Miễn thuế châp</div>
            </div>
            <hr>
            <h2 class="title">Đặc Điểm</h2>
            <div class="dacdiem">
                <i class="fa-solid fa-car"></i>
                Số ghế: 7 chỗ
            </div>
            <div class="dacdiem">
                <i class="fa-sharp fa-solid fa-gears"></i>
                Chuyển động: Số tự động
            </div>
            <div class="dacdiem">
                <i class="fa-solid fa-gas-pump"></i>
                Nhiên liệu: xăng
            </div>
            <div class="dacdiem">
                <i class="fa-solid fa-gas-pump"></i>
                Tiêu hao: 8l/100km
            </div>
            <hr>
            <h2 class="title">Mô Tả</h2>
            <p class="text-start">Lamborghini Urus facelift thay đổi một số chi tiết ngoại thất, nội thất giúp chiếc xe
                nổi bật và bắt mắt
                hơn.
                Nhìn từ bên ngoài khó có thể phân biệt được bản Performante và Urus S.
                Về mặt trọng lượng, Urus S có khối lượng 2197 kg, nặng hơn Urus Performante 47 kg.
            </p>
            <hr>
            <h2 class="title">Điều khoản</h2>
            <div class="text-start">
                <p><strong>1. Chính sách giao hàng:</strong> Xe sẽ được giao tận nơi trong vòng 7 ngày làm việc kể từ
                    ngày
                    xác nhận đơn hàng. Phí giao hàng có thể thay đổi tùy vào địa điểm giao xe.</p>
                <p><strong>2. Chính sách bảo hành:</strong> Lamborghini Urus 2023 được bảo hành chính hãng trong 3 năm
                    hoặc
                    100,000 km, tùy theo điều kiện nào đến trước. Mọi lỗi kỹ thuật phát sinh sẽ được sửa chữa miễn phí
                    tại
                    các đại lý ủy quyền của Lamborghini.</p>
                <p><strong>3. Chính sách thanh toán:</strong> Khách hàng có thể thanh toán bằng tiền mặt hoặc chuyển
                    khoản
                    qua ngân hàng. Đặt cọc 30% giá trị xe ngay khi ký hợp đồng mua bán, phần còn lại thanh toán khi nhận
                    xe.
                </p>
                <p><strong>4. Điều kiện trả xe:</strong> Khách hàng có thể yêu cầu trả lại xe trong vòng 7 ngày kể từ
                    ngày
                    nhận xe, với điều kiện xe chưa bị hư hỏng và chưa sử dụng quá 500 km. Phí trả xe là 5% giá trị xe.
                </p>
                <p><strong>5. Cam kết chất lượng:</strong> Chúng tôi cam kết cung cấp xe chính hãng, mới 100% và đầy đủ
                    giấy
                    tờ hợp lệ. Mọi sản phẩm đều được kiểm tra chất lượng kỹ lưỡng trước khi giao cho khách hàng.</p>
                <p><strong>6. Chính sách bảo mật thông tin:</strong> Mọi thông tin cá nhân của khách hàng sẽ được bảo
                    mật
                    tuyệt đối và chỉ sử dụng cho mục đích giao dịch và chăm sóc khách hàng.</p>
                <p><strong>7. Quyền lợi khách hàng:</strong> Khách hàng mua xe sẽ được tham gia các chương trình khuyến
                    mãi,
                    bảo trì xe định kỳ miễn phí trong 2 năm đầu, và hỗ trợ tư vấn sử dụng xe trong suốt thời gian bảo
                    hành.
                </p>
            </div>
        </div>
        <div class="right-content col-4">

        </div>
    </div>
</div>
@endsection