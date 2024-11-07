<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Thực hiện câu lệnh chèn không an toàn (có lỗ hổng SQL Injection second-order)
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    try {
        $pdo->exec($query);
        echo "Đăng ký thành công! Bạn có thể đăng nhập ngay bây giờ.";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
} else {
    // Chuyển về form đăng ký nếu chưa gửi thông tin
    require 'views/signup_form.php';
}
?>
