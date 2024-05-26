<?php 
function loadall_sanpham_giohang($id){
    $sql = "SELECT product.id_product, product.name, product.anh , product.gia, cart_detail.Soluong, cart_detail.id, cart_detail.Soluong
    FROM `cart_detail`
    INNER JOIN product ON product.id_product  = cart_detail.id_pro
    INNER JOIN cartS ON carts.id              = cart_detail.id_cart
    INNER JOIN khachhang ON khachhang.id      = cartS.id_user
    WHERE carts.id_user = '$id'";

    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function loadone_giohang($id_user){
    $sql = "SELECT * FROM `carts` WHERE `carts`.`id_user` = $id_user";
    $list_giohang = pdo_query_one($sql);
    return  $list_giohang;
}


function insert_carts($id_user){
    $sql = "INSERT INTO `carts` (`id_user`) VALUES ('$id_user')";
    pdo_execute($sql);
}

function insert_cart_detail($id_pro, $id_cart){
    $sql = "INSERT INTO `cart_detail` (`soluong`, `id_pro`, `id_cart`) VALUES (1, '$id_pro', '$id_cart')";
    pdo_execute($sql);
}

function loadone_giohang_chitiet($id_pro, $id_cart){
    $sql = "SELECT * FROM `cart_detail` WHERE `cart_detail`.`id_pro` = $id_pro AND `cart_detail`.`id_cart` = $id_cart";
    $list_giohangchitiet = pdo_query_one($sql);
    return  $list_giohangchitiet;
}

function update_soluong_chitietgh($soluong, $id_pro, $id_cart){
    $sql = "UPDATE `cart_detail` SET `cart_detail`.`Soluong` = $soluong WHERE `cart_detail`.`id_pro` = $id_pro AND `cart_detail`.`id_cart` = $id_cart";
    pdo_execute($sql);
}


function dalete_soluong_chitietgh($id){
    $sql = "DELETE FROM `cart_detail` WHERE `cart_detail`.`id` = $id";
    pdo_execute($sql);
}


// ===============================================admin
