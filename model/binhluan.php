<?php
function pdo_execute1($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $stmt;
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}
    function hienthi_bl(){
        $sql="SELECT * FROM `binhluan` where 1";
        $hienthi=pdo_execute1($sql);
        return $hienthi;
    }
    function xoa_bl($binhluan_id){
        $sql="DELETE FROM `binhluan` WHERE binhluan_id=$binhluan_id";
        $xoa=pdo_execute1($sql);
        return $xoa;
    }
?>