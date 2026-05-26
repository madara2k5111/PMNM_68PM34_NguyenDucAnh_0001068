<?php
class auth {
    protected $user = ['admin' => '123456', 'ducanh' => '0001068'];
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $u = $_POST['username'] ?? '';
            $p = $_POST['password'] ?? '';
            if (isset($this->user[$u]) && $this->user[$u] == $p) {
                $_SESSION['username'] = $u;
                header('Location: /AnhND0001068/public/home');
                exit();
            } else {
                header('Location: /AnhND0001068/public/auth/login?error=1');
                exit();
            }
        }
        echo "<h2>LOGIN</h2><form method='POST'>User: <input name='username'><br>Pass: <input name='password' type='password'><br><button type='submit'>Login</button></form>";
        if (isset($_GET['error'])) echo "<p style='color:red'>Sai tai khoan hoac mat khau</p>";
    }
}
?>