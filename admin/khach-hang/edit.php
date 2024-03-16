<?php

$img_path = $UPLOAD_URL . '/users/' . $hinh;
if (is_file($img_path)) {
    $img = "<img src='$img_path' height='100'>";
} else {
    $img = "no photo";
}
?>
<!-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Sửa thông tin khách hàng</div>
            <div class="card-body">
                <form action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="ma_kh" class="form-label">Mã khách hàng (tên đăng nhập)</label>
                            <input type="text" name="ma_kh" id="ma_kh" class="form-control" value="<?=$ma_kh?>" required >
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="ho_ten" class="form-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" required value="<?=$ho_ten?>">
                        </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-sm-6">
                            <label for="sdt" class="form-label">Số điện thoại</label>
                            <input type="text" name="sdt" id="sdt" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="mat_khau" class="form-label">Mật khẩu</label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="hinh" class="form-label">Ảnh</label>
                            <input type="file" name="up_hinh" id="hinh" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Trạng Thái?</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="0" name="trang_thai">Chưa kích
                                    hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="trang_thai" checked>Kích hoạt
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Vai trò?</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="0" name="vai_tro">Khách hàng
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="vai_tro" checked>Nhân viên
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 text-center mt-3">
                        <input type="hidden" name="ma_kh" value="<?= $ma_kh ?>">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div> -->




<!-- 

<div class="container-fluid px-4 ">

<div class="row justify-content-center  ">
    <div class="row col-mb-14 ">
        <div class="card shadow-lg  rounded-lg mt-5 text-info">
            <div class="card mx-auto" style="max-width: 380px; margin-top:100px; ">
                <div class="card-body shadow-lg col-md-12 mx-auto ">
                    <h4 class="card-title mb-4 text-center" style="background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
-webkit-background-clip: text !important;
-webkit-text-fill-color: transparent !important;">SỬA THÔNG TIN KHÁCH HÀNG </h4>

                    <form  action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh">


                    <div class="form-group col-sm-12">
                            <label for="ma_kh" class="form-label">Mã khách hàng (tên đăng nhập)</label>
                            <input type="text" name="ma_kh" id="ma_kh" class="form-control" value="<?=$ma_kh?>" required >
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="ho_ten" class="form-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" required value="<?=$ho_ten?>">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="sdt" class="form-label">Số điện thoại</label>
                            <input type="text" name="sdt" id="sdt" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-12">
                            <label for="mat_khau" class="form-label">Mật khẩu</label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="hinh" class="form-label">Ảnh</label>
                            <input type="file" name="up_hinh" id="hinh" class="form-control">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="text-danger mx-auto">
                                <label class="radio-inline  mr-3 ">
                                    <input type="radio" value="0" name="trang_thai">Chưa kích
                                    hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="trang_thai" checked>Kích hoạt
                                </label>
                            </div>
                       
                        
                        <div class="form-group col-sm-12">
                            <label>Vai trò?</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="0" name="vai_tro">Khách hàng
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="vai_tro" checked>Nhân viên
                                </label>
                            </div>
                        </div>

                        <br>
                        <div class="form-group shadow-lg">
                        <input type="reset" value="Nhập lại" class="btn btn-outline-danger ">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-outline-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
                        </div>



                    </form>


                </div> 
            </div>

            <br><br><br><br>

        </div>
    </div>

</div>
</div> -->




<style>
    /* Thiết kế cho nút */
    .styled-input-button {
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: 2px solid #3498db;
        border-radius: 5px;
        color: #3498db;
        background-color: #fff;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Hiệu ứng hover cho nút */
    .styled-input-button:hover {
        background-color: #3498db;
        color: #fff;
    }
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container">
    <div class="cart">
        <br>
        <h3 class="text-center" style=" background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
      background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;"
       >
            THAY ĐỔI KHÁCH HÀNG 
        </h3>
        <br>
        <div class="row col-sm-8 mx-auto rounded border-info border border-primary bg-light ">

            <form action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh" class="">
                <br>
                <div class=" ">
                    <div class="form-group ">
                    <div class="form-group col-sm-12">
 <label for="ma_kh" class="form-label">Mã khách hàng (tên đăng nhập)</label>
                            <input type="text" name="ma_kh" id="ma_kh" class="form-control" value="<?=$ma_kh?>" required >
                       
                    </div>
                </div>

                
                <div class="form-group">
                <label for="ho_ten" class="form-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" required value="<?=$ho_ten?>">
                        </div>
                <div class="form-group">
                <label for="sdt" class="form-label">Số điện thoại</label>
                            <input type="text" name="sdt" id="sdt" class="form-control" required value="<?=$so_dien_thoai?>"> 
                            </div>
                <div class="form-group">
                <label for="mat_khau" class="form-label">Mật khẩu</label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control" required value="<?=$mat_khau?>">
                        </div>
                <div class="form-group">
                <label for="hinh" class="form-label">Ảnh</label>
                            <input type="file" name="up_hinh" id="hinh" class="form-control">
                        </div>
                <div class="form-group">
                <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" required  value="<?=$email?>"> 
                         </div>
                <div class="form-group">
                <label class="radio-inline  mr-3 ">
                                    <input type="radio" value="0" name="trang_thai">Chưa kích
                                    hoạt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="trang_thai" checked>Kích hoạt
                                </label>
                </div>
                <div class=" form-group">
                <label>Vai trò?</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="0" name="vai_tro">Khách hàng
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="vai_tro" checked>Nhân viên
                                </label>
                            </div>
                    </div>

                    <br>
                    <div class="justify-content-center mx-auto text-center">
                        <input type="reset" value="Nhập lại" class="styled-input-button  mr-3">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="styled-input-button">
                        <a href="index.php?btn_list"><input type="button" class="styled-input-button" value="Danh sách"></a>
                    </div> <!-- form-group// -->



            </form>
        </div>
    </div>
</div>
<br>