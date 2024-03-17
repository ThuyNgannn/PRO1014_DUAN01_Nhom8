<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Xshop-Dự án Mẫu</title>
    <link rel="icon" href="./images/logo.webp" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./content/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="./content/css/all.min.css" type="text/css">
    <!-- Slick slider -->
    <!-- <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
    <script src="js/slick.min.js"></script> -->

    <!-- Custom -->
    <link rel="stylesheet" href="./content/css/dashboard.css" type="text/css">

</head>

<body>
    <!-- Page Preloader -->
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <a href="index.html">
                    <img src="./images/logo.webp" alt="logo" class="img-fluid logo">
                </a>
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="index.html"><i class="fas fa-store"></i>Xem trang web</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-home"></i>Trang chủ</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-file-alt"></i>Danh mục</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-table"></i>Sản phẩm</a>
                </li>
                <li>
                    <a href="charts.html"><i class="fas fa-chart-bar"></i>Bình luận</a>
                </li>
                <li>
                    <a href="charts.html"><i class="fas fa-chart-bar"></i>Đơn hàng</a>
                </li>
                <li>
                    <a href="users.html"><i class="fas fa-user-friends"></i>Khách hàng</a>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i>Cài đặt</a>
                </li>
                <li>
                    <a href="#pagesmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages
                        <i class="fas fa-angle-right float-xl-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pagesmenu">
                        <li>
                            <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                        </li>
                        <li>
                            <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                        </li>
                        <li>
                            <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i>
                                                Hồ sơ</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i>
                                                Thông báo</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Cài đặt</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                                Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>