<?php
require_once 'pdo.php';


function hoa_don_sp_insert($ma_sp, $gia, $so_luong)
{
    $sql = "INSERT INTO hoa_don_sp( ma_sp, gia, so_luong) VALUES ( ?, ?, ?)";
    pdo_execute($sql, $ma_sp, $gia, $so_luong);
}


function hoa_don_sp_update($id, $ma_sp, $gia, $so_luong, $trang_thai)
{
    $sql = "UPDATE hoa_don_sp SET gia=?, ma_sp=?, so_luong=?, trang_thai=? WHERE id=?";
    pdo_execute($sql, $gia, $ma_sp, $so_luong, $trang_thai == 1, $id);
}

function hoa_don_sp_delete($id)
{
    $sql = "DELETE FROM hoa_don_sp WHERE ma_hd=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}

function hoa_don_sp_selectall()
{
    $sql = "SELECT * FROM hoa_don_sp WHERE id ";
    return pdo_query($sql);
}


function hoa_don_sp_exist($id)
{
    $sql = "SELECT count(*) FROM hoa_don_sp WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}


function hoa_don_sp_select_by_id($id)
{
    $sql = "SELECT * FROM hoa_don_sp WHERE id=?";
    return pdo_query_one($sql, $id);
}
