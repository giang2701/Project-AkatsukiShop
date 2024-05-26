<?php
    function insert_taikhoan($username,$pass,$email){
        $sql= "INSERT INTO khachhang(username,pass,email, role) VALUES ('$username','$pass','$email',1)";
        pdo_query($sql);
    }
    function checkuser($pass,$email){
        $sql= "SELECT * FROM khachhang WHERE email='".$email."' AND pass='".$pass."' ";
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function checkemail($email){
        $sql= "SELECT * FROM khachhang WHERE email='".$email."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function capnhat($id,$username,$pass,$email,$sdt){
        $sql="UPDATE khachhang SET username='".$username."',pass='".$pass."',email='".$email."',sdt='".$sdt."' WHERE id=".$id;
       pdo_execute($sql);
    }

function loadone_user_gh($user_id){
    $sql = "SELECT * FROM khachhang WHERE `id` = $user_id";
    $tk  = pdo_query_one($sql);
    return $tk;
}
// --------------------admin----------------------
function loadall_tk(){
    $sql="SELECT * FROM khachhang order by id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function insert_tk($username,$pass,$email,$sdt,$role){
    $sql ="INSERT INTO khachhang(username, pass, email, sdt, role) 
    VALUES ('$username','$pass','$email','$sdt','$role')";
    pdo_execute($sql);
}
function delete_tk($id){
    $sql="DELETE FROM khachhang WHERE id=".$id;
    pdo_execute($sql);
}
function capnhat_admin($id,$username,$pass,$email,$sdt,$role){
    $sql="UPDATE khachhang SET username='".$username."',pass='".$pass."',email='".$email."',sdt='".$sdt."',role='".$role."' WHERE id=".$id;
   pdo_execute($sql);
}
