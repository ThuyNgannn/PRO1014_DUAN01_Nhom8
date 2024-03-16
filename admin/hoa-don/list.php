<style>
    /* Màu cho các option chờ xác nhận */
    .select-wrapper[data-value="0"] {
        background-color: #FFD700;
        /* Màu vàng */
        color: #000;
        /* Màu chữ đen */
    }

    /* Màu cho các option đã xác nhận */
    .select-wrapper[data-value="1"] {
        background-color: #15a362;
        /* Màu xanh lá cây */
        color: #000;
        /* Màu chữ đen */
    }

    /* Màu cho các option đã hủy */
    .select-wrapper[data-value="2"] {
        background-color: #FF0000;
        /* Màu đỏ */
        color: #FFF;
        /* Màu chữ trắng */
    }

    .select-wrapper {
        position: relative;
        width: 120px;
        text-align: center;
        border-radius: 5px;
        display: inline-block;
    }

    .select-wrapper select {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .select-value {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div class="container pt-5">
    <h3 class="text-center mt-3 mb-3">Danh Sách Đơn Hàng</h3>
    <form action="index.php" method="post">
        <table class="table">
            <thead class="alert-success table-success">
            <tr>
                <th>Mã hóa đơn</th>
                <th>Họ và Tên</th>
                <th>Tổng Tiền</th>
                <th>Thời Gian Đặt</th>
                <th>Phương Thức</th>
               
            </tr>
            </thead>
            <tbody>
            <?php

            if (!empty($items)) {
                foreach ($items as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <input type="hidden" name="ma_sp" value="<?= $id ?>">
                        <td><?= $id ?></td>
                        <td><?= $ho_ten ?></td>
                        <td><?= $tong_tien ?> $</td>
                        <td><?= $ngay_tao ?></td>
                        <td><?= ($phuong_thuc == 0) ? "Tiền mặt" : "VNpay"; ?></td>
                       
                    </tr>
                    <?php
                }
            } else {
                echo "Không có thông tin";
            }
            ?>
            </tbody>
        </table>
    </form>
</div>