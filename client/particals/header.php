<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
    <link rel="icon" href="./images/logo/logo.webp" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./content/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="./content/css/all.min.css" type="text/css">
    <!-- Slick slider -->
    <!-- <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
    <script src="js/slick.min.js"></script> -->

    <!-- Custom -->
    <link rel="stylesheet" href="./content/css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header class="bg-dark sticky-top">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img class="img-fluid logo" src="./images/logo/logo.webp" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./danhmucsanpham.php">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chính sách</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control input-custom" placeholder="Từ khóa...">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-info btn-number btn-custom">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- user -->
                    <div class="widgets-wrap float-md-right ml-4">
                        <div class="widget-header  mr-3">
                            <a href="cart.html" class="icon icon-sm rounded-circle border"><i
                                    class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-pill badge-danger notify">0</span>
                        </div>
                        <div class="widget-header icontext">
                            <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                            <div class="text">
                                <span class="text-white">Xin chào!</span>
                                <div>
                                    <a class="text-info" href="./login.php">Đăng nhập</a> |
                                    <a class="text-info" href="./signup.php"> Đăng ký</a>
                                </div>
                            </div>
                        </div>

                    </div> <!-- widgets-wrap.// -->

                </div>

            </div>

        </nav>
    </header>