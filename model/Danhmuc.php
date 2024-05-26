<?php
    function loadall_danhmuc(){
        $sql= "SELECT * FROM danhmuc WHERE 1 order by danhmuc_id";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(`dm_name`) VALUES ('$tenloai')";
        pdo_execute($sql);
    }
    // function insert_danhmuc_ct($tenloai_ct,$listdanhmuc){
    //     $sql = "INSERT INTO `danhmuc_chitiet`(`name`, `id_danhmuc`) VALUES ('$tenloai_ct','$listdanhmuc')";
    //     pdo_execute($sql);
    // }
    function delete_danhmuc($danhmuc_id){
        $sql="DELETE FROM danhmuc WHERE danhmuc_id=".$danhmuc_id;
        pdo_execute($sql);
    }
    function loadone_danhmuc($danhmuc_id){
        $sql="select * from danhmuc where danhmuc_id=".$danhmuc_id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($tenloai,$danhmuc_id){
        $sql="update danhmuc set dm_name='$tenloai' where danhmuc_id=".$danhmuc_id;
        $listdanhmuc=pdo_execute($sql);
        return $listdanhmuc;
    }
    // danh muc con-----------------
    // function loadall_dm_con(){
    //     // $sql= "SELECT danhmuc_chitiet.id,danhmuc_chitiet.name,danhmuc.name_dm FROM danhmuc_chitiet JOIN danhmuc ON danhmuc_chitiet.id_danhmuc = danhmuc.danhmuc_id  WHERE 1 order by danhmuc.danhmuc_id";
    //     $sql= "SELECT danhmuc.danhmuc_id,danhmuc.name,danhmuc_chitiet.name_dmct FROM danhmuc
    //     JOIN danhmuc_chitiet ON danhmuc_chitiet.id_danhmuc = danhmuc.danhmuc_id LIMIT 0, 25";
    //     $listdanhmuccon = pdo_query($sql);
    //     return $listdanhmuccon;
    // }
    function loadall_danhmuc_con(){
        $sql= "SELECT * FROM danhmuc_chitiet WHERE 1 order by id";
        $listdanhmuccon = pdo_query($sql);
        return $listdanhmuccon;
    }

    function insert_danhmuc_ct($tenloai_ct,$id_danhmuc){
        $sql= "INSERT INTO danhmuc_chitiet(dm_name, id_danhmuc) 
        VALUES ('$tenloai_ct','$id_danhmuc')";
        pdo_query($sql);
    }
    function delete_danhmuc_ct($id){
        $sql="DELETE FROM danhmuc_chitiet WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadone_danhmuc_ct($id){
        $sql="select * from danhmuc_chitiet where id=".$id;
        $dmct=pdo_query_one($sql);
        return $dmct;
    }
    function update_danhmucct($id,$tenloai_ct,$id_danhmuc){
        $sql="UPDATE danhmuc_chitiet SET dm_name='".$tenloai_ct."',id_danhmuc='".$id_danhmuc."' WHERE id=".$id;
        $listdanhmucct=pdo_execute($sql);
        return $listdanhmucct;
    }
    function load_danhmuc(){
        $sql = "SELECT * FROM `danhmuc`";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }