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

    .error-message {
        font-size: 15px;
        margin-top: 5px;
    }

    .red {
        color: red;
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
            THÊM LOẠI HÀNG
        </h3>
        <br>
        <div class="row col-sm-8 mx-auto rounded border-info border border-primary bg-light ">
            <form action="index.php" method="POST" id="add_loai" onsubmit="return validateForm()">
                <br>
                <div class=" ">
                    <div class="form-group ">
                        <label for="ten_loai" class="form-label"><i class='fas fa-smile'></i>Tên Loại:<strong
                                            class="red">*</strong></label>
                        <input class="form-control" name="ten_loai" type="text" placeholder="Nhập Tên Loại" />
                        <div class="error-message" id="ten_loai_error"></div>

                    </div>

                </div>


                <br>
                <div class="justify-content-center mx-auto text-center">
                    <input type="reset" value="Nhập lại" class="styled-input-button  mr-3">
                    <input type="submit" name="btn_insert" value="Thêm mới" class="styled-input-button">
                    <a href="index.php?btn_list"><input type="button" class="styled-input-button" value="Danh sách"></a>
                </div> <!-- form-group// -->
            </form>
            <script>
    function validateForm() {
        var tenLoai = document.getElementById('add_loai').ten_loai.value;
        var tenLoaiError = document.getElementById('ten_loai_error');

        if (tenLoai.trim() === "") {
            tenLoaiError.innerHTML = "Tên loại không được để trống";
            tenLoaiError.style.color = "red";
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(tenLoai)) {
            tenLoaiError.innerHTML = "Tên loại chỉ được chứa kí tự chữ cái và khoảng trắng";
            tenLoaiError.style.color = "red";
            return false;
        } else {
            tenLoaiError.innerHTML = ""; // Xóa thông báo lỗi nếu có
            return true;
        }
    }
</script>
        </div>

    </div>
</div>
