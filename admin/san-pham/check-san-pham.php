<?php
require_once "../../global.php";
require "../../dao/san-pham.php";

if (isset($_GET['act']) && ($_GET['act'] == 'add')) {
    $result = sp_exist_add($_GET['ten']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}
if (isset($_GET['act']) && ($_GET['act'] == 'update')) {


    // var_dump($ma_hh['ma_hh']);
    $result = sp_exist_update($_GET['id'], $_GET['ten']);
    if ($result == true) {
        echo json_encode(false);
    } else {
        echo json_encode(true);
    }
}