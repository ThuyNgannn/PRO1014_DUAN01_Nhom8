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

    /* Thêm màu sắc cho border của input khi có lỗi */
    .form-error {
        border: 2px solid #ff0000 !important;
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
        SỬA LOẠI HÀNG
        </h3>
        <br>
        <div class="row col-sm-8 mx-auto rounded border-info border border-primary bg-light ">

            <form action="index.php" method="POST" id="add_loai" onsubmit="return validateForm()">
                <br>
                <div class=" ">
                    <div class="form-group ">
                        <label for="ten_loai" class="form-label">Tên Loại</label>
                        <input type="text" name="ten_loai" id="ten_loai" placeholder="Nhập tên loại"
                            class="form-control" required value="<?= $ten_loai ?>" />
                    </div>
                    <!-- Hiển thị thông báo lỗi -->
                    <div id="ten_loai_error" class="text-danger"></div>
                </div>

                <br>
                <div class="justify-content-center mx-auto text-center">
                    <input type="reset" value="Nhập lại" class="styled-input-button  mr-3">
                    <input type="submit" name="btn_insert" value="Thêm mới" class="styled-input-button">
                    <a href="index.php?btn_list"><input type="button" class="styled-input-button"
                            value="Danh sách"></a>

                </div> <!-- form-group// -->
            </form>
        </div>

    </div>
</div>

<script>
    function validateForm() {
        // Lấy giá trị từ input
        var ten_loai = document.getElementById("ten_loai").value;

        // Kiểm tra nếu tên loại rỗng
        if (ten_loai.trim() == "") {
            // Hiển thị thông báo lỗi và thêm class form-error cho input
            document.getElementById("ten_loai_error").innerHTML = "Vui lòng nhập tên loại";
            document.getElementById("ten_loai").classList.add("form-error");
            return false;
        } else {
            // Ẩn thông báo lỗi và loại bỏ class form-error
            document.getElementById("ten_loai_error").innerHTML = "";
            document.getElementById("ten_loai").classList.remove("form-error");
            return true;
        }
    }
</script>
    