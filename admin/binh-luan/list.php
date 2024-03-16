<div class="container">
    <div class="cart">
        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="page-title ">
                    <div class="title_left ">
                        <h3 class="mx-auto text-center">DANH SÁCH BÌNH LUẬN</h3>
                    </div>

                </div>
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="box-body mx-auto col-sm-12">
                            <table width="100%" class="table table-hover table-bordered text-center">
                                <thead class="" style="background: #2A3F54;">
                                    <tr class="text-white">
                                        <th>Món ăn</th>
                                        <th>Số bình luận</th>
                                        <th>Cũ nhất</th>
                                        <th>Mới nhất</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($items as $item) {
                                        extract($item);

                                    ?>
                                        <tr>
                                            <td><?= $ten ?></td>
                                            <td><?= $so_luong ?></td>
                                            <td><?= $cu_nhat ?></td>
                                            <td><?= $moi_nhat ?></td>
                                            <td class="text-end">
                                                <a href="../binh-luan/index.php?ma_hh=<?= $id ?>" class="btn btn-outline-info btn-rounded">Chi tiết <i class="fas fa-info-circle"></i></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }

                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>