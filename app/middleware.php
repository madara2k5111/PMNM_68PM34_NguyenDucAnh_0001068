<?php
require_once '../app/core/App.php';
session_start();
class middleware {
    function checklogin() {
        $url = $_SERVER['REQUEST_URI'];
        $basePath = '/AnhND0001068/public/';
        $loginPath = $basePath . 'auth/login';

        if (!isset($_SESSION['username']) && strpos($url, 'auth/login') === false) {
            header('Location: ' . $loginPath);
            exit();
        }
    }
}
?>