<div class="app-header-inner">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= $ADMIN_URL ?>/index.php" style=" background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;">ADMIN ZENOS</a>
       
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                 <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">CÀI ĐẶT</a></li>
                    
                    <li><a class="dropdown-item" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout'?>">ĐĂNG XUẤT</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Trang Chính</div>
                        <a class="nav-link" href="<?= $ADMIN_URL ?>/index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Trang Chính
                          
                        </a>
                        <div class="sb-sidenav-menu-heading">Các Chức Năng</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Quản Lý
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= $ADMIN_URL ?>/loai-hang/">Loại Hàng</a>
                                <a class="nav-link" href="<?= $ADMIN_URL ?>/thuong-hieu/">Thương Hiệu</a>
                                <a class="nav-link" href="<?= $ADMIN_URL ?>/khach-hang/">Khách Hàng</a>
                                <a class="nav-link" href="<?= $ADMIN_URL ?>/san-pham/">Sản Phẩm</a>
                                <a class="nav-link" href="<?= $ADMIN_URL ?>/binh-luan/">Bình Luận</a>
                                <a class="nav-link" href="<?= $ADMIN_URL ?>/hoa-don/">Hóa Đơn</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Tiện Ích Bổ Sung</div>
                        <a class="nav-link" href="<?= $ADMIN_URL ?>/thong-ke/index.php?btn_list">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Thống Kê
                        </a>
                     
                       
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="sb-sidenav-footer">
                    <div class="small">đăng nhập:</div>
                    ZENOS
                </div>
            </nav>
        </div>
        