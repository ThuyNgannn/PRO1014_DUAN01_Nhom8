<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center"  style=" background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;">DANH SÁCH SẢN PHẨM </h4>
        <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-warning">' . $MESSAGE . '</h5>';
        }
        ?>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
               
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark text-white border-white"  style="background: #2A3F54;">
                        <tr>
                            <th><a href="index.php" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                            <th>Mã SP</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã loại </th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Giảm giá</th>
                            <th>Lượt xem</th>
                            <th>Ngày thêm</th>
                            <th>Đặc biệt?</th>
                            <th>Mô tả</th>
                            <th>Chỉnh Sửa</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suahh = "index.php?btn_edit&ma_hh=" . $id;
                            $xoahh = "index.php?btn_delete&ma_hh=" . $id;
                            $img_path = $UPLOAD_URL . '/products/' . $hinh;
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='60' width='60' class='object-fit-contain'>";
                            } else {
                                $img = "no photo";
                            }
                            //Tính giảm bn %
                            if ($gia > 0) {
                                $percent_discount = number_format($giam_gia / $gia * 100);
                            }
                        ?>
                        <tr>
                            <td><input type="checkbox" name="ma_sp[]" value="<?= $ma_sp ?>"></td>
                            <td><?= $id ?></td>
                            <td><?= $ten ?></td>
                            <td><?= $loai_id ?></td>
                            <td><?= $img ?></td>
                            <td><?= number_format($gia, 0) ?>đ</td>
                            <td><?= number_format($giam_gia, 0) ?>đ<i
                                    class="text-danger">(<?= isset($percent_discount) ? $percent_discount : '' ?>%)</i>
                            </td>
                            <td><?= $luot_xem ?></td>
                            <td><?= $ngay_them ?></td>
                            <td><?= ($dac_biet == 1) ? "Đặc biệt" : "Không"; ?></td>
                            <td><?= $mo_ta?></td>

                            <td class="text-end">
                                <a href="<?= $suahh ?>" class="btn btn-outline-info btn-rounded">Sửa</i></a>
                                <a href="<?= $xoahh ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()">Xóa</a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>

                <div class="mt-3" width="100%">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?btn_list&page=<?= $i ?>"><?= $i ?></a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
                <a  style="background: #2A3F54;" class="btn text-white text-center" href="index.php">Quay lại</a></th>
            </form>
        </div>
    </div>
</div>