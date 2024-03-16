<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><?= $ten_loai ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= number_format($gia_min, 2) ?> Vnđ</td>
                        <td>$<?= number_format($gia_max, 2) ?> Vnđ</td>
                        <td>$<?= number_format($gia_avg, 2) ?> Vnđ</td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
            <a href="index.php?chart" class="btn btn-success text-light">Xem biểu đồ<i class="fas fa-eye ml-2"></i></a>
            <a href="index.php?cot" class="btn btn-success text-light">Xem biểu đồ cột</a>
        </div>
    </div>
</div>