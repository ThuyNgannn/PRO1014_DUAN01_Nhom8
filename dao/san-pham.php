<?php
require_once 'pdo.php';
function sp_insert($ten, $mo_ta, $gia, $so_luong, $hinh, $ngay_them, $loai_id, $giam_gia, $dac_biet, $luot_xem)
{
    $sql = "INSERT INTO san_pham(ten, mo_ta, gia, so_luong, hinh, ngay_them,loai_id, giam_gia, dac_biet, luot_xem) VALUES (?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten, $mo_ta, $gia, $so_luong, $hinh, $ngay_them, $loai_id, $giam_gia, $dac_biet == 1, $luot_xem);
}
function sp_update($id, $ten, $mo_ta, $gia, $so_luong, $hinh, $ngay_them,$loai_id, $giam_gia, $dac_biet, $luot_xem)
{
    $sql = "UPDATE san_pham SET ten=?, mo_ta=?, gia=?, so_luong=?, hinh=?, ngay_them=?, loai_id=?, giam_gia=?, dac_biet=?, luot_xem=? WHERE id=?";
    pdo_execute($sql, $ten, $mo_ta, $gia, $so_luong, $hinh, $ngay_them, $loai_id, $giam_gia, $dac_biet, $luot_xem, $id);
}
function sp_delete($id)
{
    $sql = "DELETE FROM san_pham WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
function sp_select_all()
{
    $sql = "SELECT * FROM san_pham ORDER BY id desc";
    return pdo_query($sql);
}
function sp_select_by_id($id)
{
    $sql = "SELECT * FROM san_pham WHERE id=?";
    return pdo_query_one($sql, $id);
}
function sp_exist($id)
{
    $sql = "SELECT count(*) FROM san_pham WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}
function sp_exist_add($ten)
{
    $sql = "SELECT count(*) FROM san_pham WHERE ten=?";
    return pdo_query_value($sql, $ten) > 0;
}
function sp_exist_update($id, $ten)
{
    $sql = "SELECT count(*) FROM san_pham WHERE id!=? and ten=?";
    return pdo_query_value($sql, $id, $ten) > 0;
}

function sp_tang_so_luot_xem($id) 
{
    $sql = "UPDATE san_pham SET luot_xem = luot_xem + 1 WHERE id=?";
    pdo_execute($sql, $id);
}
function sp_select_top10()
{
    $sql = "SELECT * FROM san_pham WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}
function sp_select_dac_biet()
{
    $sql = "SELECT * FROM san_pham WHERE dac_biet = '1' ";
    return pdo_query($sql);
}
function sp_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM san_pham WHERE loai_id=?";
    return pdo_query($sql, $ma_loai);
}
function sp_select_keyword($keyword)
{
    $sql = "SELECT * FROM san_pham sp "
        . " JOIN loai_san_pham lsp ON lsp.id=sp.loai_id "
        . " WHERE ten LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function sp_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM san_pham");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM san_pham ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}