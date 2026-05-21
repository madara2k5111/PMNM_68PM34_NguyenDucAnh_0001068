<?php
class home {
    public function index() {
        echo "<h1>TRANG CHỦ</h1>";
        echo "<h3>Chào mừng " . $_SESSION['username'] . "</h3>";
        echo "<a href='/AnhND0001068/public/logout'>Đăng xuất</a>";
    }
}
?>