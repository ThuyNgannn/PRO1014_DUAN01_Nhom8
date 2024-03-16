
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
            THÊM MỚI SẢN PHẨM
        </h3>
        <br>
        <d iv class="row col-sm-8 mx-auto rounded border-info border border-primary bg-light ">

            <form action="index.php" method="POST" enctype="multipart/form-data" id="add_san_pham" onsubmit="return addEventListener()">
                <br>
                <div class="row">
                    <div class="form-group col-sm">

                        <label for="loai_id" class="form-label">Loại Hàng</label>
                        <select name="loai_id" class="form-control" id="loai_id">
                            <?php

                            foreach ($loai_hang as $loai_hang) {
                                extract($loai_hang);
                                echo '<option value="' . $id . '">' . $ten_loai . '</option>';
                            }

                            ?>
                        </select>
                    </div>

                    <div class="form-group col-sm">
                        <label for="ten_sp" class="form-label">Tên hàng hóa</label>
                        <input type="text" name="ten_sp" id="ten_sp" class="form-control">
                        <div id="ten_sp-error" class="error-container"></div>   
                    </div>
                    <div class="form-group col-sm">
                        <label for="so_luong" class="form-label">Số Lượng</label>
                        <input type="number" name="so_luong" id="so_luong" class="form-control">
                        <div id="so_luong-error" class="error-container"></div>
                    </div>
                </div>




                <div class="row">
                    <div class="form-group col-sm">
                        <label for="hinh" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" name="hinh" id="hinh" class="form-control">
                    </div>
                    <div class="form-group col-sm">
                        <label for="gia" class="form-label">Giá (vnđ)</label>
                        <input type="text" name="gia" id="gia" class="form-control">
                        <div id="gia-error" class="error-container"></div>
                      
                    </div>
                    <div class="form-group col-sm">
                        <label for="giam_gia" class="form-label">Giảm giá (vnđ)</label>
                        <input type="number" name="giam_gia" id="giam_gia" class="form-control">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-sm">
                        <label for="dac_biet">Hàng đặc biệt?</label>
                        <div class="form-control">
                            <label class="radio-inline  mr-3">
                                <input type="radio" value="1" id="dac_biet" name="dac_biet">Đặc biệt
                            </label>
                            <label class="radio-inline">
                                <input type="radio" value="0" id="dac_biet" name="dac_biet" checked>Bình thường
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-sm">
                        <?php $today = date_format(date_create(), 'Y-m-d'); ?>
                        <label for="ngay_them" class="form-label">Ngày thêm</label>
                        <input type="date" name="ngay_them" id="ngay_them" class="form-control" value="<?= $today ?>">
                    </div>
                    <div class="form-group col-sm">
                        <label for="luot_xem" class="form-label">Số lượt xem</label>
                        <input type="number" name="luot_xem" id="luot_xem" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="mo_ta" class="form-label">Mô tả sản phẩm</label>
                        <textarea id="txtarea" spellcheck="false" name="mo_ta" class="form-control form-control-lg mb-3" id="textareaExample" rows="3"></textarea>
                        <div id="mo_ta-error" class="error-container"></div>

                    </div>

                    <!-- <div class="form-floating"> -->
                    <!-- <textarea name="details" class="form-control" placeholder="Mô tả" id="product_details" style="height: 300px;"> -->
                    <!-- <?= $temp['details'] ?> -->
                    <!-- </textarea> -->
                    <!-- </div> -->
                </div>

                <br>
                <div class="justify-content-center mx-auto text-center">
                    <input type="reset" value="Nhập lại" class="styled-input-button  mr-3">
                    <input type="submit" name="btn_insert" value="Thêm mới" class="styled-input-button">
                    <a href="index.php?btn_list"><input type="button" class="styled-input-button" value="Danh sách"></a>
                </div> <!-- form-group// -->
            </form>
            <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("add_san_pham").addEventListener("submit", function (event) {
            // Xóa thông báo lỗi trước mỗi lần kiểm tra
            clearErrorMessages();

            var ten_sp = document.getElementById("ten_sp").value;
            var so_luong = document.getElementById("so_luong").value;
            var gia = document.getElementById("gia").value;
            var mo_ta = document.getElementById("txtarea").value;

            // Kiểm tra tên sản phẩm có rỗng không
            if (ten_sp.trim() === "") {
                displayError("ten_sp", "Vui lòng nhập tên sản phẩm");
                event.preventDefault();
            }

            // Kiểm tra số lượng có rỗng không và phải là số dương
            if (so_luong.trim() === "" || isNaN(so_luong) || parseInt(so_luong) <= 0) {
                displayError("so_luong", "Vui lòng nhập số lượng hợp lệ");
                event.preventDefault();
            }

            // Kiểm tra giá có rỗng không và phải là số dương
            if (gia.trim() === "" || isNaN(gia) || parseInt(gia) <= 0) {
                displayError("gia", "Vui lòng nhập giá hợp lệ");
                event.preventDefault();
            }

            // Kiểm tra mô tả có rỗng không
            if (mo_ta.trim() === "") {
                displayError("mo_ta", "Vui lòng nhập mô tả sản phẩm");
                event.preventDefault();
            }
        });

        function displayError(fieldId, errorMessage) {
            // Tạo một thẻ div mới để hiển thị thông báo lỗi
            var errorDiv = document.createElement("div");
            errorDiv.style.color = "red";
            errorDiv.innerHTML = errorMessage;

            // Lấy đối tượng div hiển thị lỗi và thêm thông báo lỗi vào
            var errorContainer = document.getElementById(fieldId + "-error");
            errorContainer.appendChild(errorDiv);
        }

        function clearErrorMessages() {
            // Xóa tất cả thông báo lỗi trước khi kiểm tra
            var errorContainers = document.querySelectorAll(".error-container");
            errorContainers.forEach(function (container) {
                container.innerHTML = "";
            });
        }
    });
</script>

        </d>
    </div>
</div>
</div>