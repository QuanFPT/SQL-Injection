<?php
session_start();
require 'config.php';

// Kiểm tra nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
if (!isset($_SESSION['user_id'])) {
    header("Location: /login.php");
    exit;
}

// Lấy thông tin người dùng từ database
$user_id = $_SESSION['user_id'];

// Thực hiện truy vấn có lỗ hổng SQL Injection second-order
// $query = "SELECT * FROM users WHERE id = '$user_id'";
// $stmt = $pdo->query($query);
// $user = $stmt->fetch(PDO::FETCH_ASSOC);


$query = "SELECT * FROM users WHERE id = :user_id";
$stmt = $pdo->prepare($query);
$stmt->execute([
    ':user_id' => $user_id
]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


if ($user) {
    $username = htmlspecialchars($user['username']);
    $password = htmlspecialchars($user['password']); // Hiển thị mật khẩu chỉ là ví dụ, không khuyến nghị trong thực tế
} else {
    echo "Không tìm thấy thông tin người dùng!";
    exit;
}
require 'views/profile.php';

?>

