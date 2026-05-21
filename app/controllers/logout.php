<?php
class logout {
    public function __construct() {
        session_destroy();
        header('Location: /PMNM_68PM34_NguyenDucAnh_0001068/public/auth/login');
        exit();
    }
}
?>