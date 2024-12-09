@extends('header')
@section('title', 'Dịch Vụ')
<link rel="stylesheet" href="{{ asset('css/dichvu.css') }}">
@section('content')
<div id="header" class="row justify-content-center">
    <div class="col-6 text-center">
        <a href="{{Route('baohanh', []) }}"><img class="img_header" src="img/csbh.png" alt="chính sách bảo hành"></a>
    </div>
    <div class="col-6 text-center">
        <a href="{{Route('baoduong', []) }}"><img class="img_header" src="img/DOCH_VU_BAO_TRI__BAO_DUONG.png" alt="bảo dưỡng"></a>
    </div>
</div>
<div id="content">
    <div class="dichVu row justify-content-center">
        <div class="left-dichvu col-7">
            <div class="tenDichVu">
                <b>Tư vấn xe trực tuyến:</b>
            </div>
            <hr>
            <div class="noiDung">
                <p>
                    Khách hàng có thể sử dụng Dịch vụ tư vấn xe trực tuyến để trao đổi với chuyên gia tư vấn xe hơi ngay
                    trên website. Các chuyên gia của chúng tôi sẽ hỗ trợ:
                    <br>
                    1. Giải đáp các thắc mắc về mẫu xe, tính năng, và ưu đãi hiện có.
                    <br>
                    2. Đưa ra lời khuyên về mẫu xe phù hợp nhất với nhu cầu của khách hàng (xe gia đình, xe đi làm, xe
                    địa
                    hình, v.v.).
                    <br>
                    3. Hỗ trợ tư vấn về các hình thức thanh toán và chương trình trả góp, khuyến mãi.
                    <br>
                    Dịch vụ tư vấn trực tuyến có thể được thực hiện qua chat trực tiếp, video call, hoặc đặt lịch hẹn tư
                    vấn
                    qua điện thoại.
                </p>
            </div>
        </div>
        <div class="right-dichvu col-4">
            <img class="img_header"
                src="img/pngtree-businessman-in-blue-shirt-come-here-gesture-and-pointing-to-the-png-image_10001482.png"
                alt="ảnh dịch vụ">
        </div>
    </div>
    <div class="dichVu row justify-content-center">
        <div class="left-dichvu col-7">
            <div class="tenDichVu">
                <b>Lịch trình lái thử:</b>
            </div>
            <hr>
            <div class="noiDung">
                <p>
                    Dịch vụ Lịch trình lái thử giúp khách hàng chọn địa điểm và lộ trình phù hợp với mong muốn trải
                    nghiệm xe. Khách hàng có thể:
                    <br>
                    1. Lựa chọn lái thử tại trung tâm đại lý hoặc yêu cầu dịch vụ lái thử tại nhà.
                    <br>
                    2. Chọn lộ trình lái thử theo nhu cầu (trong thành phố, đường cao tốc, đường đồi núi, v.v.) để kiểm
                    tra hiệu suất xe trong các điều kiện khác nhau.
                    <br>
                    3. Nhận tư vấn từ nhân viên về lộ trình phù hợp để kiểm tra các tính năng đặc biệt của xe như hệ
                    thống phanh ABS, cảm biến va chạm, hỗ trợ đỗ xe, v.v.
                </p>
            </div>
        </div>
        <div class="right-dichvu col-4">
            <img class="img_header"
                src="img/pngtree-businessman-in-blue-shirt-raises-both-index-fingers-and-looks-up-png-image_13065384.png"
                alt="ảnh dịch vụ">
        </div>
    </div>
</div>
@endsection