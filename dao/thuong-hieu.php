<?php
require_once 'pdo.php';
function th_insert($ten)
{
    $sql = "INSERT INTO thuong_hieu(ten) VALUES(?)";
    pdo_execute($sql, $ten);
}
function th_update($id_th, $ten)
{
    $sql = "UPDATE thuong_hieu SET ten=? WHERE id=?";
    pdo_execute($sql, $ten, $id_th);
}
function th_delete($id_th)
{
    $sql = "DELETE FROM thuong_hieu WHERE id=?";
    if (is_array($id_th)) {
        foreach ($id_th as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id_th);
    }
}
//Mặc định sắp xếp ngược/ truyền ASC vào thì xuôi

function th_select_all($order = 'DESC')
{
    $sql = "SELECT * FROM thuong_hieu ORDER BY id $order";
    return pdo_query($sql);
}
function th_select_by_id($id_th)
{
    $sql = "SELECT * FROM thuong_hieu WHERE id=?";
    return pdo_query_one($sql, $id_th);
}
function th_exist($id_th)
{
    $sql = "SELECT count(*) FROM thuong_hieu WHERE id=?";
    return pdo_query_value($sql, $id_th) > 0;
}

function th_exist_ten_th_add($ten)
{
    $sql = "SELECT count(*) FROM thuong_hieu WHERE ten=?";
    return pdo_query_value($sql, $ten) > 0;
}
function th_exist_ten_th_update($id_th, $ten)
{
    $sql = "SELECT count(*) FROM thuong_hieu WHERE  id!=? and ten=?";
    return pdo_query_value($sql, $id_th, $ten) > 0;
}