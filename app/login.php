<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Thực hiện truy vấn kiểm tra tài khoản
    // $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    // $stmt = $pdo->query($query);
    // $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':username' => $username,
        ':password' => $password
    ]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Lưu thông tin người dùng vào session
        $_SESSION['user_id'] = $user['id'];
        header("Location: /profile.php");
        exit;
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
require 'views/login_form.php';

?>