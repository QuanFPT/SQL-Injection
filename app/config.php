<?php
$host = 'db'; // Sử dụng tên service Docker cho MySQL
$dbname = 'test_db';
$username = 'root';
$password = 'password';

// Tạo kết nối PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
?>
