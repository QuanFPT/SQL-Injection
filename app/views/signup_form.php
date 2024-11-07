<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
</head>
<body>
    <h2>Đăng Ký</h2>
    <form method="POST" action="/signup.php">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Đăng Ký">
    </form>
</body>
</html>
