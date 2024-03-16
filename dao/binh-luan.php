<?php
require_once 'pdo.php';

function binh_luan_insert($khach_hang_id, $ma_hh, $noi_dung, $ngay_tao)
{
    $sql = "INSERT INTO binh_luan(khach_hang_id, ma_hh, noi_dung, ngay_tao) VALUES (?,?,?,?)";

    pdo_execute($sql, $khach_hang_id, $ma_hh, $noi_dung, $ngay_tao);
}

function binh_luan_update($id, $khach_hang_id, $ma_hh, $noi_dung, $ngay_tao)
{
    $sql = "UPDATE binh_luan SET khach_hang_id=?, ma_hh=?, noi_dung=?, ngay_tao=? WHERE id=?";
    pdo_execute($sql, $khach_hang_id, $ma_hh, $noi_dung, $ngay_tao, $id);
}

function binh_luan_delete($id)
{
    $sql = "DELETE FROM binh_luan WHERE id=?";
    
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}

function binh_luan_select_all()
{
    $sql = "SELECT * FROM binh_luan ORDER BY ngay_tao DESC";
    return pdo_query($sql);
}

function binh_luan_select_by_id($id)
{
    $sql = "SELECT * FROM binh_luan WHERE id=?";
    return pdo_query_one($sql, $id);
}

function binh_luan_exist($id)
{
    $sql = "SELECT count(*) FROM binh_luan WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}

function binh_luan_select_by_hang_hoa($ma_hh, $limit = 10)
{
    if (!isset($_SESSION['page'])) {
        $_SESSION['page'] = 1;
    }

    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }

    $query = "SELECT count(*) FROM binh_luan b 
        JOIN san_pham h ON h.id = b.ma_hh 
        WHERE b.ma_hh = $ma_hh ORDER BY ma_hh DESC";

    $_SESSION['total_bl'] = pdo_query_value($query);

    if (isset($_REQUEST['page'])) {
        $_SESSION['page'] = $_REQUEST['page'];
    }

    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_bl'] / $limit);

    $sql = "SELECT b.*, h.ten, k.ho_ten, k.hinh FROM binh_luan b 
        JOIN san_pham h ON h.id = b.ma_hh
        JOIN khach_hang k ON k.id = b.khach_hang_id WHERE b.ma_hh=? ORDER BY id DESC LIMIT $begin,$limit";

    return pdo_query($sql, $ma_hh);
}
