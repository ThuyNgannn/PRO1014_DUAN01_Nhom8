<!-- 




<div class="container-fluid px-4 ">
    <div class="row justify-content-center  ">
        <div class="row col-md-8  ">
            <div class="card shadow-lg  rounded-lg mt-5 text-info">
                <div class="card mx-auto" style="max-width: 380px; margin-top:100px; ">
                    <div class="card-body shadow-lg ">
                        <h4 class="card-title mb-4 text-center" style="background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
-webkit-background-clip: text !important;
-webkit-text-fill-color: transparent !important;">CẬP NHẬT THƯƠNG HIỆU</h4>

                        <form action="index.php?btn_update" method="POST" id="edit_thuong_hieu">


                            <div class="form-group ">
                                <label for="id_th" class="form-label">Mã thương hiệu</label>
                                <input type="text" name="id_th" class="form-control" disabled value="<?= $id_th ?>">

                            </div>
                            <div class="form-group">
                                <label for="ten" class="form-label">Tên thương hiệu</label>

                                <input type="text" name="ten" class="form-control" required 
                                value="<?= $ten ?>">
                            </div>

                            <br>
                            <div class="form-group shadow-lg">
                            <input type="hidden" name="id_th" value="<?= $id_th ?>" >
                            <input type="reset" value="Nhập lại" class="btn btn-white mr-3 btn btn-outline-danger btn-rounded"> 
                            <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-white mr-3 btn btn-outline-primary btn-rounded ">
                            <a href="index.php?btn_list"><input type="button" class="btn btn-white mr-3 btn btn-outline-success btn-rounded" value="Danh sách"></a>
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
      -webkit-text-fill-color: transparent !important;">
            CẬP NHẬT THƯƠNG HIỆU
        </h3>
        <br>
        <div class="row col-sm-8 mx-auto rounded border-info border border-primary bg-light ">

            <form action="index.php?btn_update" method="POST" id="edit_thuong_hieu">
                <br>
                <div class=" ">
                    <div class="form-group ">
                    <label for="id_th" class="form-label">Mã thương hiệu</label>
                                <input type="text" name="id_th" class="form-control" disabled value="<?= $id_th ?>">

                    </div>

                </div>
                <div class="form-group">
                                <label for="ten" class="form-label">Tên thương hiệu</label>

                                <input type="text" name="ten" class="form-control" required 
                                value="<?= $ten ?>">
                            </div>


                <br>
                <div class="justify-content-center mx-auto text-center">
                <input type="hidden" name="id_th" value="<?= $id_th ?>" class="styled-input-button  mr-3">
                    <input type="reset" value="Nhập lại" class="styled-input-button  mr-3">
                    <input  type="submit" name="btn_update" value="Cập nhật" class="styled-input-button">
                    <a href="index.php?btn_list"><input type="button" class="styled-input-button" value="Danh sách"></a>
                </div> <!-- form-group// -->



            </form>
        </div>
        
    </div>
</div>
<br>