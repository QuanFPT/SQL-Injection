<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tìm Kiếm Sản Phẩm</title>
</head>
<body>
    <h2>Tìm Kiếm Sản Phẩm</h2>
    <form method="GET" action="/search.php">
        <label for="keyword">Từ khóa:</label>
        <input type="text" name="keyword" id="keyword" required>
        <input type="submit" value="Tìm kiếm">
    </form>

    <?php if (isset($keyword)): ?>
        <h2>Kết quả tìm kiếm cho: '<?php echo htmlspecialchars($keyword); ?>'</h2>
        <?php if ($search_results): ?>
            <ul>
                <?php foreach ($search_results as $result): ?>
                    <li>Sản phẩm: <?php echo htmlspecialchars($result['name']); ?> - Số lượng: <?php echo htmlspecialchars($result['quantity']); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Không tìm thấy sản phẩm nào phù hợp!</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
