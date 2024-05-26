<?php
     function loadall_role(){
        $sql= "SELECT * FROM role WHERE 1 order by role_id";
        $list = pdo_query($sql);
        return $list;
    }
?>