<?php
require_once "../../dao/pdo.php";
require_once "../../dao/thuong-hieu.php";
require "../../global.php";



// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = th_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $id_th = isset($_REQUEST['id_th']) ? $_REQUEST['id_th'] : null;
    if (isset($_POST['ten_th']));
    //insert vào db
    th_insert($ten_th);

    //show dữ liệu
    $items = th_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $id_th = $_REQUEST['id_th'];
    $th_info = th_select_by_id($id_th);
    extract($th_info);
    
    $thuong_hieu = th_select_all('ASC');


    //show dữ liệu
    $items = th_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $id_th = $_REQUEST['id_th'];
    th_delete($id_th);
    //hiển thị danh sách

    $items = th_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_th = $_POST['id_th'];
        th_delete($arr_ma_th);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = th_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $id_th = $_POST['id_th'];
    $ten = $_POST['ten'];
    th_update($id_th, $ten);
    //hiển thị danh sách

    $items = th_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";