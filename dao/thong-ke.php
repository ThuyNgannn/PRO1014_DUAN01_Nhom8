<?php

require_once 'pdo.php';
function thong_ke_san_pham()
{
    $sql = "SELECT lo.id, lo.ten_loai,"
        . " COUNT(*) so_luong,"
        . " MIN(hh.gia) gia_min,"
        . " MAX(hh.gia) gia_max,"
        . " AVG(hh.gia) gia_avg"
        . " FROM san_pham hh "
        . " JOIN loai_san_pham lo ON lo.id=hh.loai_id "
        . " GROUP BY lo.id, lo.ten_loai";
    return pdo_query($sql);
}
function thong_ke_binh_luan()
{
    $sql = "SELECT hh.id, hh.ten,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.ngay_tao) cu_nhat,"
        . " MAX(bl.ngay_tao) moi_nhat"
        . " FROM binh_luan bl "
        . " JOIN san_pham hh ON hh.id=bl.ma_hh"
        . " GROUP BY hh.id, hh.ten"
        . " HAVING so_luong > 0";
    return pdo_query($sql);
}