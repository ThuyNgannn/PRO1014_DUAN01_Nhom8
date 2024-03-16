<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
//--------------------------------//

if (exist_param("chart")) {
    $VIEW_NAME = "chart.php";
} else {
    $VIEW_NAME = "list.php";


} 

$items = thong_ke_san_pham();
require "../layout.php";