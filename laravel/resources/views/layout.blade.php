<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <h2>Logo</h2>
            </div>
            <div class="nav">
                <ul class="menu">
                    <li><a href="{{ route('home')}}">Trang chủ</a></li>
                    <li><a href="{{ route('product.index')}}">Sản phẩm</a></li>
                    <li><a href="#">Dịch vụ</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                    <li><a href="#">Đăng ký</a></li>
                </ul>
            </div>
        </div>
        <div class="body">

        <div class="sidebar">
            <div class="navbar">
                <h2>Menu danh mục</h2>
                <ul class="menu-sidebar">
                    <li><a href="#">Máy tính</a></li>
                    <li><a href="#">Điện thoại</a></li>
                    <li><a href="#">Đồ văn phòng</a></li>
                    <li><a href="#">Sản Phẩm khác</a></li>
                </ul>
            </div>
        </div>
        <div class="content">

            {{-- Nội dung phần trang web --}}
            @yield('content')

        </div>
        </div>
        <div class="footer">
            <h4>Footer</h4>
        </div>
    </div>
</body>
</html>
