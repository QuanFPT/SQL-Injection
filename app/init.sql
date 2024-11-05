CREATE DATABASE IF NOT EXISTS test_db;
USE test_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'Etc@1234');
INSERT INTO users (username, password) VALUES ('conga', 'conga');

-- Tạo bảng `product`
CREATE TABLE IF NOT EXISTS product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    quantity INT NOT NULL
);

-- Thêm dữ liệu mẫu
INSERT INTO product (name, quantity) VALUES
('Product A', 10),
('Product B', 20),
('Product C', 15);
