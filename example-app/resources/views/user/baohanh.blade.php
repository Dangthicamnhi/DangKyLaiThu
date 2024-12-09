@extends('header')
@section('title', 'Chính Sách Bảo Hành và Lái Thử Ô Tô')
<link rel="stylesheet" href="{{ asset('css/baohanh&baoduong.css') }}">
@section('content')
<div id="header" class="justify-content-center text-center">
    <img class="img" src="img/chinhsachbaohanh.jpg" alt="chính sách bảo hành">
</div>

<div class="container-fluid">
    <div id="content">
        <h2>CHÍNH SÁCH BẢO HÀNH VÀ LÁI THỬ Ô TÔ</h2>

        <h3 class="title">1. Chính sách bảo hành:</h3>

        <h4 class="sub-title">• Thời gian bảo hành:</h4>
        <i class="content-text">
            Tất cả các xe ô tô mới mua tại đại lý của chúng tôi đều được bảo hành trong thời gian [số năm/tháng] hoặc
            [số km], tùy điều kiện nào đến trước. Chính sách bảo hành bắt đầu có hiệu lực từ ngày giao xe được ghi trong
            hợp đồng mua bán.
        </i>

        <h4 class="sub-title">• Phạm vi bảo hành:</h4>
        <i class="content-text">
            Chính sách bảo hành áp dụng cho tất cả các lỗi kỹ thuật, hư hỏng do nhà sản xuất hoặc các linh kiện phụ tùng
            không đạt tiêu chuẩn chất lượng. Bảo hành không áp dụng cho các hư hỏng do:
            <ul>
                <li>Sử dụng sai mục đích, vận hành xe không đúng hướng dẫn.</li>
                <li>Thiếu bảo dưỡng định kỳ hoặc bảo dưỡng sai cách.</li>
                <li>Tai nạn, thiên tai hoặc tác động ngoại lực.</li>
                <li>Thay đổi, sửa chữa xe ngoài hệ thống đại lý ủy quyền mà không được sự đồng ý của nhà sản xuất.</li>
            </ul>
        </i>

        <h4 class="sub-title">• Các hạng mục bảo hành bao gồm:</h4>
        <i class="content-text">
            <ul>
                <li>Động cơ và hệ thống truyền động: Tất cả các bộ phận của động cơ và hệ thống truyền động, bao gồm hộp
                    số, trục dẫn động và bộ ly hợp (trong điều kiện sử dụng bình thường).</li>
                <li>Hệ thống treo và hệ thống lái: Bảo hành các bộ phận như bộ giảm xóc, thanh cân bằng và hệ thống lái.</li>
                <li>Hệ thống phanh và an toàn: Bảo hành các bộ phận của hệ thống phanh, bao gồm cả hệ thống chống bó
                    cứng phanh (ABS) và các thiết bị an toàn khác.</li>
                <li>Hệ thống điện và điện tử: Bảo hành toàn bộ hệ thống điện bao gồm hệ thống đèn chiếu sáng, hệ thống
                    giải trí, và các hệ thống hỗ trợ lái xe thông minh.</li>
            </ul>
        </i>

        <h4 class="sub-title">• Bảo dưỡng định kỳ:</h4>
        <i class="content-text">
            Để duy trì hiệu lực bảo hành, khách hàng cần thực hiện bảo dưỡng định kỳ tại các trung tâm bảo hành ủy quyền
            của chúng tôi. Đối với mỗi lần bảo dưỡng, khách hàng cần mang theo sổ bảo hành và hóa đơn chứng từ liên
            quan.
        </i>

        <h4 class="sub-title">• Bảo hành phụ tùng thay thế:</h4>
        <i class="content-text">
            Các phụ tùng thay thế chính hãng cũng được bảo hành trong thời gian [số tháng] hoặc [số km] kể từ ngày thay
            thế, với điều kiện phụ tùng đó được thay thế tại các đại lý ủy quyền của chúng tôi.
        </i>

        <h4 class="sub-title">• Thủ tục yêu cầu bảo hành:</h4>
        <i class="content-text">
            Khi có nhu cầu yêu cầu bảo hành, khách hàng cần cung cấp:
            <ul>
                <li>Giấy chứng nhận mua xe hoặc hóa đơn mua bán.</li>
                <li>Sổ bảo hành có ghi rõ các lần bảo dưỡng định kỳ đã thực hiện.</li>
                <li>Chi tiết về vấn đề cần bảo hành (mô tả lỗi, hoàn cảnh xảy ra, v.v.).</li>
            </ul>
        </i>

        <h4 class="sub-title">• Thời gian xử lý bảo hành:</h4>
        <i class="content-text">
            Thời gian xử lý yêu cầu bảo hành phụ thuộc vào mức độ phức tạp của lỗi và phụ tùng thay thế. Chúng tôi cam
            kết hỗ trợ nhanh nhất có thể và thông báo tiến trình sửa chữa cho khách hàng.
        </i>

        <h3 class="title">2. Chính sách lái thử ô tô:</h3>

        <h4 class="sub-title">• Điều kiện lái thử:</h4>
        <i class="content-text">
            Khách hàng cần đáp ứng các điều kiện sau để tham gia lái thử:
            <ul>
                <li>Có bằng lái xe hợp lệ (bằng lái hạng B2 trở lên).</li>
                <li>Độ tuổi tối thiểu là 18 tuổi.</li>
                <li>Đăng ký trước với đại lý để được sắp xếp lịch lái thử phù hợp.</li>
            </ul>
        </i>

        <h4 class="sub-title">• Đăng ký lái thử:</h4>
        <i class="content-text">
            <strong>Đăng ký lái thử:</strong> Khách hàng có thể đăng ký lái thử xe trực tiếp tại đại lý, qua điện thoại,
            hoặc qua trang web của chúng tôi. Sau khi đăng ký thành công, khách hàng sẽ nhận được thông báo xác nhận về
            thời gian và địa điểm lái thử.
        </i>

        <h4 class="sub-title">• Chuẩn bị trước khi lái thử:</h4>
        <i class="content-text">
            Khách hàng cần xuất trình bằng lái xe hợp lệ và giấy tờ cá nhân (CMND/CCCD) trước khi tham gia lái thử. Một
            số trường hợp đặc biệt, chúng tôi có thể yêu cầu khách hàng ký cam kết về trách nhiệm khi lái thử.
        </i>

        <h4 class="sub-title">• Thực hiện lái thử:</h4>
        <i class="content-text">
            Trong quá trình lái thử, khách hàng sẽ được hướng dẫn và hỗ trợ bởi nhân viên chuyên nghiệp của chúng tôi.
            Nhân viên sẽ cung cấp thông tin chi tiết về các tính năng của xe, hướng dẫn lái thử an toàn và giải đáp mọi
            thắc mắc của khách hàng.
        </i>

        <h4 class="sub-title"></h4>
        <i class="content-text">
            <strong>Lộ trình lái thử:</strong> Khách hàng có thể lái thử trên lộ trình đã được sắp xếp sẵn, bao gồm cả
            các tình huống giao thông thực tế để trải nghiệm cảm giác vận hành xe. Lộ trình lái thử sẽ kéo dài từ 15-30
            phút tùy vào nhu cầu của khách hàng.
        </i>

        <h4 class="sub-title">• Quy định an toàn khi lái thử:</h4>
        <i class="content-text">
            Khách hàng cần tuân thủ nghiêm ngặt các quy định an toàn giao thông, giữ khoảng cách an toàn với các phương
            tiện khác, và luôn tuân theo chỉ dẫn của nhân viên đại lý. Mọi vi phạm trong quá trình lái thử có thể dẫn
            đến việc hủy bỏ quyền lái thử của khách hàng.
        </i>

        <h4 class="sub-title">• Trách nhiệm khi lái thử:</h4>
        <i class="content-text">
            Trong trường hợp xảy ra tai nạn hoặc va chạm trong quá trình lái thử, khách hàng cần phối hợp với đại lý để
            xử lý sự việc theo quy định. Các thiệt hại sẽ được giải quyết theo chính sách bảo hiểm và thỏa thuận trước
            đó.
        </i>

        <h4 class="sub-title">• Thời gian áp dụng chương trình lái thử:</h4>
        <i class="content-text">
            Chương trình lái thử xe được tổ chức vào các ngày trong tuần từ [giờ] đến [giờ], tại tất cả các đại lý ủy
            quyền trên toàn quốc.
        </i>

        <h3 class="title">3. Các điều khoản khác:</h3>
        <i class="content-text">
            • Chính sách này có thể được điều chỉnh, bổ sung mà không cần thông báo trước, tuy nhiên, quyền lợi bảo hành
            của khách hàng sẽ luôn được đảm bảo đầy đủ theo hợp đồng mua bán ban đầu.
        </i>
        <i class="content-text">
            • Đối với các xe đã qua sử dụng hoặc xe cũ, chính sách bảo hành và lái thử có thể thay đổi tùy vào điều kiện
            thực tế của xe và sẽ được thông báo cụ thể khi giao dịch.
        </i>
    </div>
</div>
@endsection
