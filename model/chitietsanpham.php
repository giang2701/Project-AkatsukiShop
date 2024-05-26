<?php
    function loadall_sanpham_id($idsp){
        $sql ="SELECT *
        FROM product
        INNER JOIN danhmuc ON danhmuc.danhmuc_id = product.id_dm
        WHERE  product.id_product = $idsp";

        $listspid = pdo_query_one($sql);
        return $listspid;
    }

    function loadall_binhluan($idsp){
        $sql ="SELECT khachhang.username, binhluan.name, binhluan.ngaybl
        FROM `binhluan`
        INNER JOIN product   ON product.id_product 		 = binhluan.pro_id
        INNER JOIN khachhang ON khachhang.id     = binhluan.users_id
        WHERE product.id_product = $idsp
        ";
        $listspid = pdo_query($sql);
        return $listspid;
    }

    function insert_binhluan($noidungbl, $idsp, $id_user)
{
    $date = date('Y-m-d');
    $sql = "INSERT INTO `binhluan` (`name`, `users_id`, `pro_id`, `ngaybl`) VALUES ('$noidungbl','$id_user', '$idsp', '$date')";
    pdo_execute($sql);
}