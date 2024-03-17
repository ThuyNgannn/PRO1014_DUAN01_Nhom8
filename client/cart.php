<? include "particals/header.php"; ?>

<!-- Jumbotron -->
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Giỏ hàng</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col" class="text-center">Số lượng</th>
                            <th scope="col" class="text-right">Giá</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img style="height: 50px; weight:50px;" src="./images/ao/Aokieu1.jpg"/> </td>
                            <td>Áo thun trễ vai vạt chéo</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">50.000 đ</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                                </button> </td>
                        </tr>
                        <!-- <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Toto</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">33,90 $</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                                </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Titi</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">70,00 $</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                                </button> </td>
                        </tr>
                        <tr> -->
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tổng</td>
                            <td class="text-right">50.000 đ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Phí vận chuyển</td>
                            <td class="text-right">25.000 đ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Thanh toán</strong></td>
                            <td class="text-right"><strong>75.000 đ</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Tiếp tục mua hàng</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</div>

<? include "particals/footer.php"; ?>