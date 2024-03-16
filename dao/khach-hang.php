<?php
require_once 'pdo.php';
function khach_hang_insert($ma_kh, $ho_ten,  $email, $sdt, $vai_tro, $mat_khau, $kich_hoat, $hinh )
{
    $sql = "INSERT INTO khach_hang(id,ho_ten,email,so_dien_thoai,vai_tro,mat_khau,trang_thai,hinh) VALUES(?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_kh, $ho_ten, $email, $sdt, $vai_tro == 1, $mat_khau, $kich_hoat == 1,  $hinh );
}
function khach_hang_update($ma_kh, $ho_ten,  $email, $sdt, $vai_tro, $mat_khau, $kich_hoat, $hinh)
{
    $sql = "UPDATE khach_hang SET  ho_ten=?,email=?,so_dien_thoai=?,vai_tro=?,mat_khau=?,trang_thai=?,hinh=? WHERE id=?";
    pdo_execute($sql, $ho_ten, $email, $sdt, $vai_tro == 1, $mat_khau, $kich_hoat == 1, $hinh, $ma_kh);
}
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE id=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}
function khach_hang_selectall()
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}
function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE id=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE id=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function khach_hang_exist_email($email)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}

function khach_hang_change_password($ma_kh, $mat_khau_moi)
{

    $sql = "UPDATE khach_hang SET mat_khau=? WHERE id=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}
function khach_hang_select_by_email($email)
{
    $sql = "SELECT * FROM khach_hang WHERE email=?";
    return pdo_query_one($sql, $email);
}

function khach_hang_change_Email($email, $mat_khau_moi)
{

    $sql = "UPDATE khach_hang SET mat_khau=? WHERE email=?";
    pdo_execute($sql, $mat_khau_moi, $email);
}