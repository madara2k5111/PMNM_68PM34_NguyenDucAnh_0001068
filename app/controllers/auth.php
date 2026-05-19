<?php
class auth {
    protected $user = [
        'admin' => '123456',
        'ducanh' => '123456'
    ];

    public function login() {
        echo "
        <form method='POST' style='width:300px; margin:50px auto;'>
            <h2>LOGIN PAGE</h2>
            User: <input name='username' style='width:100%'><br>
            Pass: <input name='password' type='password' style='width:100%'><br><br>
            <button type='submit'>Đăng nhập</button>
        </form>";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $u = $_POST['username'] ?? '';
            $p = $_POST['password'] ?? '';
            if (isset($this->user[$u]) && $this->user[$u] == $p) {
                $_SESSION['username'] = $u;
                header('Location: /PMNM_68PM34_NguyenDucAnh_0001068/public/home/index');
            } else {
                header('Location: /PMNM_68PM34_NguyenDucAnh_0001068/public/auth/login');
            }
        }
    }
}
?>