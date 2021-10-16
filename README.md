# Web-e-learning
Các chức năng đã hoàn thiện:
+ Đăng ký, Đăng nhập, Đăng xuất
+ xem thông tin cá nhân
+ cập nhật thông tin cá nhân
+ thay đổi mật khẩu
+ =>đối với tk giáo viên:
+upload khóa học
+cập nhật khóa học
+Xem danh sách khóa học


chạy project laravel:
 npm install ;
php artisan serve => khởi động projetc trên browser

cấu hình file .evn :
1. 
DB_CONNECTION=mysql       => tên cơ sở dữ liệu
DB_HOST=127.0.0.1         => host
DB_PORT=3306              =>post
DB_DATABASE=elearning      => tên databasename
DB_USERNAME=root        
DB_PASSWORD=
2. mở /config/database.php
  'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'elearning'),    => tên database name
            'username' => env('DB_USERNAME', 'root'),         => username
            'password' => env('DB_PASSWORD', ''),               =>password
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],

php artisan migrate:refresh  => chạy cài đặt các bảng trên mysql

php artsan make:controller HomeController  => tạo controller có tên HomeController
php artisan make:model User                 => tạo model có tên User
......
php artisan migrate:refresh --path=/database/migrations/2021_10_10_115000_create_librarys_table.php
