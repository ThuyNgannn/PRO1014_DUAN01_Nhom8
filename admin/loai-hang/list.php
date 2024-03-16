


<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-dark text-center" style=" background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;">DANH SÁCH LOẠI HÀNG</h4>
    </div>
    <br><br>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive col-lg-8 mx-auto">
               
                <table width="100%" class="table col-lg-6 col mx-auto table-bordered text-center border-dark">
                    <thead class=" text-white  border-white" style="background: #2A3F54;">
                        <tr>
                            <th><a href="index.php" class=" btn btn-primary border- " style="background: #6D3F54;">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a>
                                   
                                   </a></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th>
                                </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suadm = "index.php?btn_edit&ma_loai=" . $id;
                            $xoadm = "index.php?btn_delete&ma_loai=" . $id;

                        ?>
                        <tr class="text-dark">
                            <td><input type="checkbox" name="ma_loai[]" value="<?= $ma_loai ?>"></td>
                            <td><?= $id ?></td>
                            <td><?= $ten_loai ?></td>
                            <td class="text-end">
                                <a href="<?= $suadm ?>" class="btn btn-outline-info border-info "><i class="fa fa-edit"></i>Sửa</a>
                                <a href="<?= $xoadm ?>" class="btn btn-outline-danger info-danger" onclick="return checkDelete()"> <i class="fa fa-trash-o"></i>Xoá</a>
                            </td>
                        </tr>
                        
                        <?php
                        }

                        ?>
                    </tbody>
                    
                    

                </table>
                <a  style="background: #2A3F54;" class="btn text-white text-center" href="index.php">Quay lại</a></th>
            </form>
            
        </div>
    </div>
</div>
