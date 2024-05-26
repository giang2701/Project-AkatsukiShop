<?php
//
function loadall_sanpham(){
    $sql = "SELECT product.id_product, product.name, product.anh , product.gia FROM `product`";

    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
//update gia
function loadall_sanpham_mohinh(){
    $sql = "SELECT product.id_product, product.name, product.anh , product.gia 
    FROM `product` 
    INNER JOIN danhmuc ON danhmuc.danhmuc_id = product.id_dm
    -- INNER JOIN danhmuc         ON danhmuc.danhmuc_id = danhmuc_chitiet.id_danhmuc 
    WHERE danhmuc.danhmuc_id = 1";

    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function loadall_sanpham_canvas(){
    $sql = "SELECT product.id_product, product.name, product.anh , product.gia 
    FROM `product` 
    -- INNER JOIN danhmuc_chitiet ON danhmuc_chitiet.id = product.id_dm_chitiet
    INNER JOIN danhmuc ON danhmuc.danhmuc_id = product.id_dm
    WHERE danhmuc.danhmuc_id = 2";

    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_dantuong(){
    $sql = "SELECT product.id_product, product.name, product.anh , product.gia 
    FROM `product` 
    -- INNER JOIN danhmuc_chitiet ON danhmuc_chitiet.id = product.id_dm_chitiet
    INNER JOIN danhmuc ON danhmuc.danhmuc_id = product.id_dm
    WHERE danhmuc.danhmuc_id = 3";

    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function loadall_sanpham_search($keyw = "", $iddm = 0)
{
    $sql = "SELECT * FROM `product` WHERE 1"; // Thêm điều kiện WHERE 1 để đảm bảo luôn có điều kiện (để có thể thêm AND hoặc OR sau đó)

    if ($keyw != "") {
        $sql .= " AND (
            (name LIKE '%" . $keyw . "%' OR gia LIKE '%" . $keyw . "%' OR noisx LIKE '%" . $keyw . "%' ) OR (name LIKE '%" . $keyw . "%' and gia LIKE '%" . $keyw . "%' and noisx LIKE '%" . $keyw . "%' ))";
    }

    if ($iddm > 0) {
        // Điều kiện này có vẻ là không đúng, bạn có thể muốn so sánh với một trường nào đó của bảng category
        $sql .= " AND id_dm = '" . $iddm . "'";
    }

    $sql .= " ORDER BY id_product DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function sanpham_cungloai($idsp,$id_dm){
    $sql = "select * from product where id_dm = ".$id_dm." and id_product <>".$idsp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}