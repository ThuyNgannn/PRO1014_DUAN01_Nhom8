<?php
require_once 'pdo.php';
function loai_insert($ten_loai)
{
    $sql = "INSERT INTO loai_san_pham(ten_loai) VALUES(?)";
    pdo_execute($sql, $ten_loai);
}
function loai_update($ma_loai, $ten_loai)
{
    $sql = "UPDATE loai_san_pham SET ten_loai=? WHERE id=?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}
function loai_delete($ma_loai)
{
    $sql = "DELETE FROM loai_san_pham WHERE id=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
}
//Mặc định sắp xếp ngược/ truyền ASC vào thì xuôi

function loai_select_all($order = 'DESC')
{
    $sql = "SELECT * FROM loai_san_pham ORDER BY id $order";
    return pdo_query($sql);
}
function loai_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM loai_san_pham WHERE id=?";
    return pdo_query_one($sql, $ma_loai);
}

function loai_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM loai_san_pham WHERE id=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}

function loai_exist_ten_loai_add($ten_loai)
{
    $sql = "SELECT count(*) FROM loai_san_pham WHERE ten_loai=?";
    return pdo_query_value($sql, $ten_loai) > 0;
}
function loai_exist_ten_loai_update($ma_loai, $ten_loai)
{
    $sql = "SELECT count(*) FROM loai_san_pham WHERE  id!=? and ten_loai=?";
    return pdo_query_value($sql, $ma_loai, $ten_loai) > 0;
}