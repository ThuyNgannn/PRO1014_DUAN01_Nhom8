<?php
require_once "../../dao/pdo.php";
require_once "../../dao/hoa-don.php";
require_once "../../dao/khach-hang.php";
require "../../global.php";

extract($_REQUEST);

if (isset($_POST['btn_xacnhan'])) {

    $ma_hd = $_POST['id'];
    $trang_thai = $_POST['trang_thai'];
    hoa_don_update($ma_hd, $trang_thai);

    // Hiển thị danh sách
    // khach_hang_selectall();
    // voucher_selectall();
    $items = hoa_don_selectall_with_khach_hang();
    $VIEW_NAME = "list.php";
} else {
    // Hiển thị danh sách
    $items = hoa_don_selectall_with_khach_hang();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
