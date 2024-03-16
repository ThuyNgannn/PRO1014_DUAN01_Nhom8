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
            THÊM MỚI KHÁCH HÀNG
        </h3>
        <br>
        <div class="row col-sm-8 mx-auto rounded border-info border border-primary bg-light ">

            <form action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh" class="" onsubmit="return validateForm()">
                <br>
                <div class=" ">
                    <div class="form-group ">
                        <label for="ma_kh" class="form-label"><i class='fas fa-smile'></i> Mã khách hàng (tên đăng nhập)</label>
                        <input type="text" name="ma_kh" id="ma_kh" class="form-control" >
                        <div id="ma_kh-error" class="error-container"></div>

                    </div>
                </div>

                
                <div class="form-group">
                    <label for="ho_ten" class="form-label"><i class='fab fa-adversal'></i> Họ và tên</label>
                    <input type="text" name="ho_ten" id="ho_ten" class="form-control" >
                    <div id="ho_ten-error" class="error-container"></div>
                </div>
                <div class="form-group">
                    <label for="sdt" class="form-label"><i class='fas fa-phone-alt'></i> Số điện thoại</label>
                    <input type="text" name="sdt" id="sdt" class="form-control" >
                    <div id="sdt-error" class="error-container"></div>
                </div>
                <div class="form-group">
                    <label for="mat_khau" class="form-label"><i class='fas fa-key'></i> Mật khẩu</label>
                    <input type="password" name="mat_khau" id="mat_khau" class="form-control" >
                    <div id="mat_khau-error" class="error-container"></div>
                </div>
                <div class="form-group">
                    <label for="hinh" class="form-label"><i class="material-icons"></i> Ảnh</label>
                    <input type="file" name="hinh" id="hinh" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label"> <i class="fa fa-th"></i> Địa chỉ email</label>
                    <input type="email" name="email" id="email" class="form-control" >
                    <div id="email-error" class="error-container"></div>
                </div>
                <div class="form-group">
                    <label class="radio-inline  mr-3">
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

                    <br>
                    <div class="justify-content-center mx-auto text-center">
                        <input type="reset" value="Nhập lại" class="styled-input-button  mr-3">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="styled-input-button">
                        <a href="index.php?btn_list"><input type="button" class="styled-input-button" value="Danh sách"></a>
                    </div> <!-- form-group// -->



            </form>
            <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("admin_add_kh").addEventListener("submit", function (event) {
            // Xóa thông báo lỗi trước mỗi lần kiểm tra
            clearErrorMessages();

            var ma_kh = document.getElementById("ma_kh").value;
            var ho_ten = document.getElementById("ho_ten").value;
            var sdt = document.getElementById("sdt").value;
            var mat_khau = document.getElementById("mat_khau").value;
            var email = document.getElementById("email").value;

            // Kiểm tra các trường cần thiết
            if (ma_kh.trim() === "") {
                displayError("ma_kh", "Vui lòng nhập mã khách hàng");
                event.preventDefault();
            }

            if (ho_ten.trim() === "") {
                displayError("ho_ten", "Vui lòng nhập họ và tên");
                event.preventDefault();
            }

            if (sdt.trim() === "") {
                displayError("sdt", "Vui lòng nhập số điện thoại");
                event.preventDefault();
            }

            if (mat_khau.trim() === "") {
                displayError("mat_khau", "Vui lòng nhập mật khẩu");
                event.preventDefault();
            }

            if (email.trim() === "") {
                displayError("email", "Vui lòng nhập địa chỉ email");
                event.preventDefault();
            }
        });

        function displayError(fieldName, errorMessage) {
            // Tạo một thẻ div mới để hiển thị thông báo lỗi
            var errorDiv = document.createElement("div");
            errorDiv.style.color = "red";
            errorDiv.innerHTML = errorMessage;

            // Lấy đối tượng div hiển thị lỗi và thêm thông báo lỗi vào
            var errorContainer = document.querySelector("#" + fieldName + "-error");
            if (errorContainer) {
                errorContainer.appendChild(errorDiv);
            }
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

        </div>
    </div>
</div>
<br>