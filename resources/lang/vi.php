<?php
/**
 * 语言包
 *
 * @author sonnd9x <ndson92@gmail.com>
 * @date 2021/1/27
 * @time 14:39
 */

return [
    'exception_msg' => [
        '34520001' => 'Phát hiện bạn chưa cấu hình thông tin tài khoản freenom, vui lòng sửa đổi các mục liên quan đến tài khoản trong tệp .env, nếu không chương trình sẽ không hoạt động bình thường',
        '34520002' => 'Lỗi khi đăng nhập vào freenom, không lấy được giá trị cookie chính xác, vui lòng kiểm tra xem tài khoản và mật khẩu có đúng không',
        '34520003' => "Không thể khớp dữ liệu tên miền. Có thể do bạn chưa có tên miền hoặc việc sửa đổi trang đã khiến tính thường xuyên trở nên không hợp lệ. Vui lòng liên hệ với tác giả kịp thời.",
        '34520004' => 'Không thể khớp mã thông báo, có thể do việc chỉnh sửa trang đã khiến tính chính quy không hợp lệ, vui lòng liên hệ với tác giả kịp thời',
        '34520005' => 'Hàm putenv () bị tắt và không thể ghi các biến môi trường khiến chương trình không hoạt động bình thường. Tham khảo giải pháp: https://github.com/luolongfei/freenom/issues/22' ,
        '34520006' => sprintf ('Phiên bản bên dưới php7 không được hỗ trợ, phiên bản hiện tại là% s, vui lòng nâng cấp lên bên trên php7', PHP_VERSION),
        '34520007' => sprintf ('Tệp cấu hình .env đã được tạo tự động trong thư mục% s, vui lòng sửa đổi nội dung của tệp cấu hình thành của riêng bạn', ROOT_PATH),
        '34520008' => sprintf ('Vui lòng sao chép tệp .env.example trong thư mục% s sang tệp .env và sửa đổi nội dung của tệp .env thành của riêng bạn', ROOT_PATH),
        '34520009' => 'Đăng nhập vào freenom không thành công, vui lòng kiểm tra tài khoản và mật khẩu có chính xác không',
        '34520010' => 'Thiếu mô-đun curl, không thể gửi yêu cầu, vui lòng kiểm tra môi trường php của bạn và mang theo mô-đun curl khi biên dịch',
        '34520011' => 'Bạn chưa cấu hình địa chỉ email nhận, bạn có thể không nhận được email thông báo. Vui lòng thêm một biến bí mật có tên TO trên màn hình Cài đặt> Bí mật trong kho này của Fork của bạn. Giá trị tương ứng của biến là địa chỉ email được sử dụng thường xuyên nhất của bạn, được sử dụng để nhận các email liên quan đến miền được gửi bởi hộp thư rô bốt ',
        '34520012' => 'Bạn chưa cấu hình địa chỉ email nhận, bạn có thể không nhận được email thông báo. Vui lòng thay đổi giá trị TO trong tệp .env thành địa chỉ email được sử dụng phổ biến nhất của bạn để nhận các email liên quan đến miền được gửi bởi hộp thư rô bốt ',
    ],
];
