<?php
class auth {
    protected $user = [
        'admin' => '123456',
        'ducanh' => '0001068'
    ];

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $u = $_POST['username'] ?? '';
            $p = $_POST['password'] ?? '';
            if (isset($this->user[$u]) && $this->user[$u] == $p) {
                $_SESSION['username'] = $u;
                // Sửa đường dẫn về tên thư mục mới AnhND0001068
                header('Location: /AnhND0001068/public/home');
                exit();
            } else {
                // Sửa đường dẫn báo lỗi về tên thư mục mới AnhND0001068
                header('Location: /AnhND0001068/public/auth/login?error=1');
                exit();
            }
        }
        echo "
        <form method='POST' style='width:300px; margin:100px auto; border:1px solid #ccc; padding:20px; font-family: Arial;'>
            <h2 style='text-align:center'>LOGIN</h2>";
        if (isset($_GET['error'])) echo "<p style='color:red'>Sai tài khoản hoặc mật khẩu</p>";
        echo "
            Username: <input name='username' style='width:100%'><br><br>
            Password: <input name='password' type='password' style='width:100%'><br><br>
            <button type='submit' style='width:100%; cursor:pointer;'>Login</button>
        </form>";
    }
}
?>