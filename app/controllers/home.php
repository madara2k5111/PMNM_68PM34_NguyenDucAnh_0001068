<?php
class home {
    public function index() {
        echo "<h1>TRANG CHỦ</h1>";
        echo "<h3>Chào mừng " . ($_SESSION['username'] ?? 'Khách') . "</h3>";
        
        // Thêm dòng này để dẫn sang trang chức năng Sinh viên
        echo "<div style='margin: 20px 0;'>
                <a href='/AnhND0001068/public/sinhvien' style='padding:10px; background:blue; color:white; text-decoration:none; border-radius:5px;'>
                    Quản lý Danh sách Sinh viên
                </a>
              </div>";

        echo "<a href='/AnhND0001068/public/logout'>Đăng xuất</a>";
    }
}
?>