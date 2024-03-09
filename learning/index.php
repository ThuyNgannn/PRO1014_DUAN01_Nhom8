<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="images/Logo.png" alt="" srcset="" width="200px" height="100px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrimaryMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarPrimaryMenu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Về chúng tôi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sản phẩm
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Về chúng tôi</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active">Liên hệ</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>








  <main>
    <?php
    include "particals/slider.php";

    include "particals/home-product.php";
    ?>


  </main>
  <footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
          <ul class="menu-footer">
            <li><a href="">Về chúng tôi</a></li>
            <li><a href="">Hồ sơ năng lực</a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Tìm hiểu về trả góp</a></li>
            <li><a href="">Xem thêm</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
          <ul class="menu-footer">
            <li><a href="">Chính sách bảo hành</a></li>
            <li><a href="">Chính sách đổi trả</a></li>
            <li><a href="">Chính sách bảo mật</a></li>
            <li><a href="">Chính sách bảo giao hàng</a></li>
            <li><a href="">Xem thêm</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">

        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
          <!-- Fanpage facebook plugin-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.4204947420153!2d105.75565247454293!3d9.982081490122459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1709816241983!5m2!1svi!2s" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
              công ty trách nhiệm hữu hạn.....
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">

        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>