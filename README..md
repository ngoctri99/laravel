-- Khởi tạo project mới
    --> composer  create-project laravel/laravel demo --prefer-dist
Trên linux sau khi tạo ptoject nếu chạy localhost bị lỗi UnexpectedValueException thrown with message "The stream or file "/var/www/html/laravel/storage/logs/laravel.log" could not be opened: failed to open stream: Permission denied thì thực hiện dòng lệnh sau : 
    -> sudo chown www-data.www-data /var/www/html/laravel/storage/ -R
-- Tạo mới controller
    -> php artisan make:controller NameController
-- Tạo mới Table
    -> php artisan make:migration create_tbl_name --create=tbl_name


Bài tập
1. Tạo controller cho sản phẩm, dịch vụ, đang nhập, đăng ký
2. tạo giao diện cở bản cho 4 trang trên
3. tạo mới 2 table danh mục sản phẩm và sản phẩm
    tbl_category
        + category_id
        + category_name
        + category_desc
        + category_status
    tbl_product
        + product_id
        + product_name
        + product_desc
        + product_status
        + product_images
  
 Hôm sau sẽ học phần đăng ký đăng nhập cho trang admin 
 và sử lý phần danh mục sản phẩm gồn hiển thị danh sách danh mục và thêm mới danh mục 
