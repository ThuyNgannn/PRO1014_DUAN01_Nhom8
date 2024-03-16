<?php

require "../../global.php";
require "../../dao/loai.php";
require "../../dao/san-pham.php";
require "../../dao/khach-hang.php";
// require "../../dao/binh-luan.php";


$loai = count(loai_select_all());
// $hang_hoa = count(san_pham_select_all());
// $khach_hang = count(khach_hang_selectall());
// $binh_luan = count(binh_luan_select_all());

$VIEW_NAME = "home.php";

require "../layout.php";
?>