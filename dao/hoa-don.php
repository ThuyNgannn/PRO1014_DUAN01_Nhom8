<?php
require_once 'pdo.php';
function hoa_don_insert($ma_hd, $san_pham_id, $so_luong, $ngay_tao, $dia_chi, $sdt, $ma_kh,  $phuong_thuc, $tong_tien, $ghi_chu)
{
    $sql = "INSERT INTO chi_tiet_hoa_don(id, san_pham_id, so_luong, ngay_tao, dia_chi, so_dien_thoai,  ma_kh,  phuong_thuc, tong_tien, ghi_chu) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ma_hd, $san_pham_id, $so_luong, $ngay_tao, $dia_chi, $sdt, $ma_kh,  $phuong_thuc, $tong_tien, $ghi_chu);
    return $sql;
}

function hoa_don_update($ma_hd, $trang_thai)
{
    $sql = "UPDATE chi_tiet_hoa_don SET trang_thai=? WHERE id=?";
    pdo_execute($sql, $trang_thai, $ma_hd);
}


function hoa_don_delete($ma_hd)
{
    $sql = "DELETE FROM chi_tiet_hoa_don WHERE id=?";
    if (is_array($ma_hd)) {
        foreach ($ma_hd as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hd);
    }
}

function hoa_don_selectall()
{
    $sql = "SELECT * FROM chi_tiet_hoa_don WHERE ma_kh order by id DESC";
    return pdo_query($sql);
}

function hoa_don_selectall_with_khach_hang()
{
    $sql = "SELECT chi_tiet_hoa_don.*, khach_hang.ho_ten 
            FROM chi_tiet_hoa_don
            INNER JOIN khach_hang ON chi_tiet_hoa_don.ma_kh = khach_hang.id
            ORDER BY id DESC";

    return pdo_query($sql);
}

function hoa_don_select_with_khach_hang($ma_kh)
{
    $sql = "SELECT chi_tiet_hoa_don.*, khach_hang.ho_ten
            FROM chi_tiet_hoa_don
            INNER JOIN khach_hang ON chi_tiet_hoa_don.ma_kh = khach_hang.id
            WHERE chi_tiet_hoa_don.ma_kh = ?
            ORDER BY id DESC";

    return pdo_query($sql, $ma_kh);
}


function hoa_don_exist($ma_hd)
{
    $sql = "SELECT count(*) FROM chi_tiet_hoa_don WHERE id=?";
    return pdo_query_value($sql, $ma_hd) > 0;
}


// Trong file hoa-don.php hoặc nơi bạn đang lưu trữ các hàm tương tác với bảng hoadon
function hoa_don_moi_nhat($ma_hd)
{
    $sql = "SELECT id FROM chi_tiet_hoa_don ORDER BY id DESC LIMIT 1";
    $result = pdo_query_one($sql, $ma_hd);
    return $result['id'];
}
