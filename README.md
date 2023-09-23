-- pa serve là viết tắt của php artisan

1. app: Thư mục chứa mã nguồn của ứng dụng.Đây là nơi bạn sẽ phát triển các lớp Controllers, Models, và Providers của mình.
   3.bootstrap: chứa các tệp và thư mục liên quan đến quá trình khởi động ứng dụng.
   -- Đặc biệt, tệp "app.php" khởi tạo ứng dụng Laravel và cài đặt các cơ sở dữ liệu và cấu hình khác.
   5.config: Trong thư mục này, bạn sẽ tìm thấy các tệp cấu hình của ứng dụng.
   -- Laravel sử dụng các tệp này để quản lý cài đặt như cơ sở dữ liệu, tài khoản email, và các cấu hình khác.
   6.database: Thư mục này chứa các tệp và thư mục liên quan đến cơ sở dữ liệu.
   --- Bạn có thể thấy các tệp chạy các lệnh migration và seeding ở đây.
   7.public: Thư mục public là nơi các tệp tĩnh như hình ảnh, tệp CSS và JavaScript được lưu trữ.
   ----Các tệp trong thư mục này có thể truy cập trực tiếp từ trình duyệt của người dùng.
   8.resources: Thư mục này chứa các tệp giao diện người dùng, tệp JavaScript và SASS.
   --- Bạn sẽ phát triển giao diện người dùng ở đây.
   9.routes: Trong thư mục này, bạn sẽ xác định các tuyến đường (routes) của ứng dụng.
   ---Tệp "web.php" thường chứa các tuyến đường của ứng dụng web.
   10.storage: Thư mục này lưu trữ các dữ liệu được tạo ra bởi ứng dụng, chẳng hạn như các tệp phiên hoặc tệp cache.
   11.tests: Nếu bạn viết các bài kiểm tra (tests) cho ứng dụng của bạn, thì bạn có thể đặt chúng trong thư mục này.
   12.vendor: Thư mục này chứa tất cả các gói (packages) Composer và các phụ thuộc của ứng dụng. Composer sẽ tự động quản lý thư mục này và tải về các gói cần thiết.
   13..env: Tệp cấu hình môi trường, trong đó bạn có thể đặt các biến môi trường cho ứng dụng của mình.
   14..env.example: Tệp mẫu cho các biến môi trường, giúp bạn định dạng các biến cần thiết.
   15..gitignore: Tệp này chứa danh sách các tệp và thư mục không nên được theo dõi bởi Git.
