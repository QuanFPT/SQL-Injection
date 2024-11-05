<?php
require 'config.php';

// Kiểm tra nếu người dùng đã gửi thông tin đăng nhập
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Câu truy vấn không an toàn (có lỗ hổng SQL Injection)
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    var_dump($query);
    $stmt = $pdo->query($query);
    // Kiểm tra nếu có kết quả trả về
    if ($stmt->rowCount() > 0) {
        echo "Đăng nhập thành công!";
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }
} else {
    // Chuyển về form đăng nhập nếu chưa gửi thông tin
    require 'views/login_form.php';
}
?>
