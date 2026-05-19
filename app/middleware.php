<?php
require_once '../app/core/App.php';
session_start();
class middleware {
    function checklogin() {
        // Những trang không cần đăng nhập (như trang login)
        $publicPages = ['/PMNM_68PM34_NguyenDucAnh_0001068/public/auth/login'];
        
        if (!isset($_SESSION['username']) && !in_array($_SERVER['REQUEST_URI'], $publicPages)) {
            header('Location: /PMNM_68PM34_NguyenDucAnh_0001068/public/auth/login');
            exit();
        }
    }
}
?>