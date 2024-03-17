<? include "particals/header.php"; ?>



<!-- Jumbotron -->
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Chi tiết sản phẩm</h1>
    </div>
</section>

<!-- Product-detail -->

<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Image -->
        <div class="col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <a href="" data-toggle="modal" data-target="#productModal">
                        <img class="img-fluid" src="./images/Ao/Aokieu1.jpg" />
                        <p class="text-center">Phóng to ảnh</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <p class="price">50.000 đ</p>
                    <p class="price_discounted">100.000 đ</p>
                    <form method="get" action="cart.html">
                        <div class="form-group">
                            <label for="colors">Màu sắc:</label>
                            <select class="custom-select" id="colors">
                                <option selected>Chọn</option>
                                <option value="1">Đen</option>
                                <option value="2">Trắng</option>
                                <option value="3">Đỏ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số lượng :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" id="quantity" name="quantity" min="1" max="100" value="1">
                                <div class="input-group-append">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <a href="cart.html" class="btn btn-danger btn-lg btn-block text-uppercase">
                            <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                        </a>
                    </form>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng nhanh</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật
                            </li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0982084197
                            </li>
                        </ul>
                    </div>
                    <div class="reviews_product p-3 mb-2 ">
                        3 reviews
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (4/5)
                        <a class="pull-right" href="#reviews">Xem tất cả đánh giá</a>
                    </div>
                    <!-- <div class="datasheet p-3 mb-2 bg-info text-white">
                        <a href="" class="text-white"><i class="fa fa-file-text"></i> Download DataSheet</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header bg-info text-white text-uppercase"><i class="fa fa-align-justify"></i>
                    Mô tả sản phẩm</div>
                <div class="card-body">
                    <p class="card-text">
                        THÔNG TIN ÁO THUN TRỄ VAI
                    </p>
                    <p class="card-text">
                        -Hàng thiết kế freesize:40-55kg(1m50-1m65)
                    </p>
                    <p class="card-text">
                        -Chiều dài áo : 45cm
                    </p>
                    <p class="card-text">
                        -1m48-1m52:40-45kg
                    </p>
                    <p class="card-text">
                        -1m53-1m59:46-49kg
                    </p>
                    <p class="card-text">
                        -1m60-1m65:50-55kg
                    </p>
                    <p class="card-text">
                        - Màu sắc :đen ,trắng
                    </p>
                    <p class="card-text">
                        - Chất liệu ;thun bozip dày dặn , co giãn thoải mái
                    </p>
                </div>
            </div>
        </div>

        <!-- Reviews -->
        <div class="col-12" id="reviews">
            <div class="card border-light mb-3">
                <div class="card-header bg-warning text-white text-uppercase"><i class="fa fa-comment"></i> Đánh giá
                </div>
                <div class="card-body">
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016">Ngày 01 tháng 1 năm 2018

                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        Bởi <b>Yu</b>
                        <p class="blockquote">
                        <p class="mb-0">Áo đẹp quá.</p>
                        </p>
                        <hr>
                    </div>
                    <div class="review">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <meta itemprop="datePublished" content="01-01-2016">Ngày 01 tháng 1 năm 2018

                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        Bởi <b>Trúc</b>
                        <p class="blockquote">
                        <p class="mb-0">Chất vải tốt mặc mát.</p>
                        </p>
                        <hr>
                    </div>

                </div>
                <div class="comment-box text-center">
                    <h4>Để lại bình luận</h4>
                    <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                    </div>
                    <div class="comment-area"> <textarea class="form-control" placeholder="Nội dung..." rows="4"></textarea> </div>
                    <div class="text-center mt-4"> <button class="btn btn-success send px-5">Đăng bình luận <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Same product -->
<!-- <section class="same-product mt-5">
    <h3 class="same-product-title text-center">Sản phẩm cùng loại</h3> -->
    <!-- ============== COMPONENT SLIDER ITEMS SLICK  ============= -->
    <!-- <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel">
                    <div class="product-card">
                        <div class="product-badge text-danger"></div><a class="product-thumb" href="#" data-abc="true"><img class="product-img" src="./images/Ao/Aokieu2.jpg" alt="Product"></a>
                        <h3 class="product-title"><a href="#" data-abc="true">Áo kiểu pháp nữ dáng baby tee vải xốp nhăn co dãn</a></h3>
                        <h4 class="product-price"> <del></del>!50.000 đ</h4>
                        <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Thêm vào giỏ hàng</button> </div>
                    </div>
                    <div class="product-card">
                        <div class="product-badge text-danger">25% Off</div><a class="product-thumb" href="#" data-abc="true"><img class="product-img" src="./images/Ao/Aokieu3.jpg" alt="Product"></a>
                        <h3 class="product-title"><a href="#" data-abc="true">Lovito Áo thun trơn - Waffle Knit -Áo thun polo cho nữ</a></h3>
                        <h4 class="product-price"> <del>199.000 đ</del>174.000 đ </h4>
                        <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Thêm vào giỏ hàng</button> </div>
                    </div>
                    <div class="product-card">
                        <div class="product-badge text-danger"></div><a class="product-thumb" href="#" data-abc="true"><img class="product-img" src="./images/Ao/Aokieu4.jpg" alt="Product"></a>
                        <h3 class="product-title"><a href="#" data-abc="true">Áo thun kiểu lệch vai</a></h3>
                        <h4 class="product-price"> <del></del>100.000 đ </h4>
                        <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Thêm vào giỏ hàng</button> </div>
                    </div>
                    <div class="product-card">
                        <div class="product-badge text-danger"></div><a class="product-thumb" href="" data-abc="true"><img class="product-img" src="./images/Ao/Aokieu5.png" alt="Product"></a>
                        <h3 class="product-title"><a href="" data-abc="true">Áo Kiểu Trễ Vai Dáng Dài Xẻ Tà</a></h3>
                        <h4 class="product-price"> <del></del>140.000 đ </h4>
                        <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Thêm vào giỏ hàng</button> </div>
                    </div>
                    <div class="product-card">
                        <div class="product-badge text-danger"></div><a class="product-thumb" href="#" data-abc="true"><img class="product-img" src="./images/Ao/Aokieu6.png" alt="Product"></a>
                        <h3 class="product-title"><a href="#" data-abc="true">Áo Kiểu Tay Dài Cổ Tròn Lớn Phối Ren</a></h3>
                        <h4 class="product-price"> <del></del>50.000đ </h4>
                        <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Thêm vào giỏ hàng</button> </div>
                    </div>
                    <div class="product-card">
                        <div class="product-badge text-danger"></div><a class="product-thumb" href="#" data-abc="true"><img class="product-img" src="../access/images/items/5.jpg" alt="Product"></a>
                        <h3 class="product-title"><a href="#" data-abc="true">Microsoft surface 5</a></h3>
                        <h4 class="product-price"> <del>$644.99</del>$344.99 </h4>
                        <div class="product-buttons"> <button class="btn btn-outline-primary btn-sm">Thêm vào giỏ hàng</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> -->
    <!-- ============== COMPONENT SLIDER ITEMS SLICK .end // =============
</section>-->


<? include "particals/footer.php"; ?>