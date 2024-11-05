# Sử dụng PHP 8.1 với Apache
FROM php:8.1-apache

# Cài đặt các extension cần thiết
RUN docker-php-ext-install pdo pdo_mysql

# Sao chép mã nguồn vào container
COPY ./ /var/www/html/

# Phân quyền cho thư mục
RUN chown -R www-data:www-data /var/www/html
