<?php 
    function loadall_sanpham($kyw,$id_dm){//$kyw,$iddm
        $sql="SELECT id_product,product.name, anh,gia, chieucao, trongluong, chatlieu, tinhtrang, mota, mucdich, noisx, id_dm 
        FROM product JOIN danhmuc ON product.id_dm= danhmuc.danhmuc_id ";
        // $sql="SELECT * FROM product ";
        // where 1 tức là đúng
        if ($kyw!="") {
            $sql.=" and product.name like '%".$kyw."%'";
        }
        if ($id_dm >0) {
            $sql.=" and product.id_dm = '".$id_dm."'";
        }
        $sql.=" order by id_product desc";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function delete_sp($id_product){
        $sql="DELETE FROM product WHERE id_product=".$id_product;
        pdo_execute($sql);
    }

    
    function insert_sp($name,$anh,$gia,$chieucao,$trongluong,$chatlieu,$tinhtrang,$mota,$mucdich,$noisx,$id_dm){
        // $sql = "INSERT INTO product(name, anh, gia, chieucao, trongluong, chatlieu, tinhtrang, mota, mucdich, noisx, id_dm_chitiet) 
        // VALUES ('$name','$anh','$gia','$chieucao','$trongluong','$chatlieu','$tinhtrang','$mota','$mucdich','$noisx','$id_dm_chitiet')";
        $sql ="INSERT INTO product(name, anh, gia, chieucao, trongluong, chatlieu, tinhtrang, mota, mucdich, noisx, id_dm) 
        VALUES ('$name','$anh','$gia','$chieucao','$trongluong','$chatlieu','$tinhtrang','$mota','$mucdich','$noisx','$id_dm')";
        pdo_execute($sql);
    }
    function loadone_sp($id_product){
        $sql="select * from product where id_product=".$id_product;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($id_product,$name,$anh,$gia,$chieucao,$trongluong,$chatlieu,$tinhtrang,$mota,$mucdich,$noisx,$id_dm){
        if($anh!="")
            $sql= "UPDATE product SET name='".$name."',anh='".$anh."',gia='".$gia."',chieucao='".$chieucao."',trongluong='".$trongluong."',chatlieu='".$chatlieu."',tinhtrang='".$tinhtrang."',mota='".$mota."',mucdich='".$mucdich."',noisx='".$noisx."',id_dm='".$id_dm."' WHERE id_product=".$id_product;
        else
            $sql= "UPDATE product SET name='".$name."',gia='".$gia."',chieucao='".$chieucao."',trongluong='".$trongluong."',chatlieu='".$chatlieu."',tinhtrang='".$tinhtrang."',mota='".$mota."',mucdich='".$mucdich."',noisx='".$noisx."',id_dm='".$id_dm."' WHERE id_product=".$id_product;
       pdo_execute($sql);

    }
?>