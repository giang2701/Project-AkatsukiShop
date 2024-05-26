<?php 

function loadall_donhang($id){
    $sql = "SELECT product.gia, product.name, cart_detail.Soluong
    FROM `cart_detail`
    INNER JOIN product ON product.id_product = cart_detail.id_pro
    WHERE cart_detail.id_cart = $id"; 
    $listdonhang = pdo_query($sql);
    return  $listdonhang;
}

function loadall_donhang_id($id){
    $sql = "SELECT product.gia, product.name, cart_detail.Soluong
    FROM `cart_detail`
    INNER JOIN product ON product.id_product = cart_detail.id_pro
    WHERE cart_detail.id_pro = $id"; 
    $listdonhang = pdo_query_one($sql);
    return  $listdonhang;
}

function insert_donhang($price, $diachi, $thongtinbosung, $id_cart, $id_user)
{
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `donhang2` (`price`, `tgian`, `diachi`, `kieu_thanhtoan`, `thongtinbosung`, `id_cart`, `tinhtrang`,`id_user`) VALUES ('$price', '$date', '$diachi', 1, '$thongtinbosung', '$id_cart', 1,'$id_user')";
    pdo_execute($sql);
}

function insert_donhang_idsp($price, $diachi, $thongtinbosung, $id_user)
{
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO `donhang2` (`price`, `tgian`, `diachi`, `kieu_thanhtoan`, `thongtinbosung`, `id_cart`, `tinhtrang`,`id_user`) VALUES ('$price', '$date', '$diachi', 1, '$thongtinbosung', NULL, 1,'$id_user')";
    pdo_execute($sql);
}

function loadall_donhang_iduser($id_user){
    $sql = "SELECT *
    FROM `donhang2`
    INNER JOIN khachhang ON khachhang.id = donhang2.id_user
    INNER JOIN tinhtrang ON tinhtrang.id = donhang2.tinhtrang
    WHERE khachhang.id = $id_user"; 
    $listdonhang = pdo_query($sql);
    return  $listdonhang;
}


function update_huydh($id_donhang){
    $sql = "UPDATE `donhang2` SET `donhang2`.`tinhtrang` = 3 WHERE `donhang2`.`id` = $id_donhang";
    pdo_execute($sql);
}


// =======================
function loadall_donhang_admin(){
    $sql = "SELECT * FROM `donhang2`
    INNER JOIN khachhang ON khachhang.id = donhang2.id_user
    INNER JOIN tinhtrang ON tinhtrang.id = donhang2.tinhtrang
    WHERE tinhtrang IN (1,2)";
    
    return pdo_query($sql);
}

function update_xacnhan($id_donhang){
    $sql = "UPDATE `donhang2` SET `donhang2`.`tinhtrang` = 2 WHERE `donhang2`.`id` = $id_donhang";
    pdo_execute($sql);
}
function thongkedonhang(){
    $sql = " SELECT
    DATE_FORMAT(tgian, '%m') AS thang,
    COUNT(*) AS so_don_hang
     FROM
     donhang2
     WHERE
     tgian IS NOT NULL
     GROUP BY
     thang
     ORDER BY
     thang DESC";
     return pdo_query($sql);
 }
 function thongkedonhangtheotuan(){
    $sql = "SELECT
    CONCAT(DATE_FORMAT(MIN(tgian), '%Y-%m-%d'), ' to ', DATE_FORMAT(DATE_ADD(MIN(tgian), INTERVAL 6 DAY), '%Y-%m-%d')) AS khoang_thoi_gian,
    COUNT(*) AS so_don_hang
    FROM
        donhang2
    WHERE
        tgian IS NOT NULL
    GROUP BY
        YEAR(tgian), WEEK(tgian)
    ORDER BY
        YEAR(tgian) DESC, WEEK(tgian) DESC";
      return pdo_query($sql);
 }
 function thongkedonhangtheongay(){
    $sql = "SELECT
    DATE(tgian) AS ngay,
    COUNT(*) AS so_don_hang
    FROM
        donhang2
    WHERE
        tgian IS NOT NULL
    GROUP BY
        ngay
    ORDER BY
        ngay DESC";
    return pdo_query($sql);
 }


 function thongkedonhang_aimuanhieu(){
    $sql = " SELECT
    khachhang.id AS khachhang_id,
    khachhang.username,
    COUNT(donhang2.id) AS total_purchased
    FROM
        donhang2 
    INNER JOIN
        khachhang ON khachhang.id = donhang2.id_user
    GROUP BY
        khachhang.id, khachhang.username
    ORDER BY
    total_purchased DESC
    LIMIT 5";
    return pdo_query($sql);
 }

