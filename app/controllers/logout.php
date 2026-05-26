<?php
class logout {
    public function __construct() {
        session_destroy();
        header('Location: /AnhND0001068/public/auth/login');
        exit();
    }
}
?>