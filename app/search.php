<?php
require 'config.php';

// Kiểm tra nếu từ khóa tìm kiếm đã được gửi
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Câu truy vấn không an toàn (có lỗ hổng SQL Injection)
    $query = "SELECT * FROM product WHERE name LIKE '%$keyword%'";
    $stmt = $pdo->query($query);

    // Lưu kết quả tìm kiếm vào biến để hiển thị trong HTML
    $search_results = [];
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $search_results[] = [
                'name' => $row['name'],
                'quantity' => $row['quantity']
            ];
        }
    } else {
        $search_results = null; // Không tìm thấy kết quả
    }
} else {
    $search_results = null;
}

// Gọi file HTML hiển thị form tìm kiếm và kết quả
require 'views/search_form.php';
?>
