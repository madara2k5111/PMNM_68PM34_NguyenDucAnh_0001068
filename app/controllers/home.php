<?php
class home {
    public function index() {
        echo "<h1>TRANG CHU</h1>";
        echo "<h3>Chào mừng " . ($_SESSION['username'] ?? 'Khach') . "</h3>";
        echo "<a href='/AnhND0001068/public/logout'>Dang xuat</a>";
    }
}
?>