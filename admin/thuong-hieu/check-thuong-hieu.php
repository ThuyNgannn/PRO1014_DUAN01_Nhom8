<?php
require_once "../../global.php";
require "../../dao/thuong-hieu.php";
if (isset($_GET['act'])) {


    if ($_GET['act'] == 'add') {
        $result = th_exist_ten_th_add($_GET['id_th']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
    if ($_GET['act'] == 'update') {
        // var_dump($_GET['id_th']);
        $result = th_exist_ten_th_update($_GET['id_th'], $_GET['ten']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}