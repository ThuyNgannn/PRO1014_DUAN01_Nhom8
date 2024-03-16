<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";
require_once "../../dao/san-pham.php";
require "../../global.php";



// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = sp_select_page('id', 5);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ten = $_POST['ten_sp'];
    $mo_ta = $_POST['mo_ta'];
    $gia = $_POST['gia'];
    $so_luong = $_POST['so_luong'];
    $giam_gia = $_POST['giam_gia'];
    $loai_id = $_POST['loai_id'];
    $dac_biet = $_POST['dac_biet'];
    $luot_xem = $_POST['luot_xem'];
    $ngay_them = $_POST['ngay_them'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    // $hinh = $_FILES['hinh']['name'];
    // Upload file lên host
    $hinh = save_file('hinh', "$UPLOAD_URL/products/");
    $ngay_them=date('Y-m-d H:i:s');
    //insert vào db
    sp_insert($ten, $mo_ta, $gia, $so_luong, $hinh, $ngay_them, $loai_id, $giam_gia, $dac_biet, $luot_xem);

    //show dữ liệu
    $items = sp_select_page('id', 5);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $id = $_REQUEST['ma_hh'];
    $hang_hoa_info = sp_select_by_id($id);
    extract($hang_hoa_info);

    $loai_hang = loai_select_all('ASC');
    //show dữ liệu
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $id = $_REQUEST['ma_hh'];
    sp_delete($id);
    //hiển thị danh sách

    $items = sp_select_page('id', 5);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        // Vừa sửa gì ở đây quên cmnr
        $arr_ma_hh = $_POST['id'];
        sp_delete($arr_ma_hh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = sp_select_page('sp', 5);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ten = $_POST['ten_sp'];
    $mo_ta = $_POST['mo_ta'];
    $gia = $_POST['gia'];
    $so_luong = $_POST['so_luong'];
    $giam_gia = $_POST['giam_gia'];
    $loai_id = $_POST['loai_id'];
    $dac_biet = $_POST['dac_biet'];
    $luot_xem = $_POST['luot_xem'];
    $ngay_them = $_POST['ngay_them'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngay_them=date('Y-m-d H:i:s');

    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;


    sp_update($id, $ten, $mo_ta, $gia, $so_luong, $hinh, $ngay_them, $loai_id, $giam_gia, $dac_biet, $luot_xem);
    //hiển thị danh sách

    $items = sp_select_page('id', 5);
    $VIEW_NAME = "list.php";
} else {
    $loai_hang = loai_select_all('ASC');
    $VIEW_NAME = "add.php";
}
require "../layout.php";