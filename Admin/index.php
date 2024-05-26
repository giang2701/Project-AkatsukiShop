<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/Danhmuc.php";
    include "../model/Sanpham.php";
    include "../model/donhang.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/role.php";
    include "../global.php";
    if(isset($_GET['act']) && $_GET['act'] != " "){
        $act=$_GET['act'];
        switch ($act) {
// ---------danh muc----------------------------
            case "listdm":
                $listdanhmuc =loadall_danhmuc();
                include "danhmuc/list.php";
            break;
            case 'adddm':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $tenloai=$_POST['name'];
                    insert_danhmuc($tenloai);
                    $thongbao="Them thanh cong";
                }
                include "danhmuc/add.php";
            break;
            case "xoadm";
                if(isset($_GET['iddm']) && $_GET['iddm']>0) {
                    delete_danhmuc($_GET['iddm']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
            break;
            case "suadm":                
                if (isset($_GET['iddm']) && $_GET['iddm']>0) {
                    $dm=loadone_danhmuc($_GET['iddm']);
                }
                include "danhmuc/update.php";
            break;
            case "Updatedm";
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $tenloai=$_POST['name'];
                    $danhmuc_id=$_POST['iddm'];
                    update_danhmuc($tenloai,$danhmuc_id);
                    $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "danhmuc/list.php";
            break;
// ---------Danh muc chi tiet ----------------
            // case "listct":
            //     $listdmcon =loadall_danhmuc_con();
            //     include "danhmuc/listct.php";
            // break;
            // case 'addct':
            //     if(isset($_POST['themmoi']) && $_POST['themmoi']){
            //         $id_danhmuc=$_POST['id_danhmuc'];
            //         $tenloai_ct=$_POST['name_ct'];
            //         insert_danhmuc_ct($tenloai_ct,$id_danhmuc);
            //         $thongbao="Them thanh cong";
            //     }
            //     $listdanhmuc =loadall_danhmuc();
            //     include "danhmuc/addct.php";
            // break;
            // case "xoadmct";
            //     if(isset($_GET['iddmct']) && $_GET['iddmct']>0) {
            //         delete_danhmuc_ct($_GET['iddmct']);
            //     }
            // $listdmcon =loadall_danhmuc_con();
            // include "danhmuc/listct.php";
            // break;
            // case "suadmct":                
            //     if (isset($_GET['iddmct']) && $_GET['iddmct']>0) {
            //         $dmct=loadone_danhmuc_ct($_GET['iddmct']);
            //     }
            //     $listdanhmuc =loadall_danhmuc();
            //     include "danhmuc/updatect.php";
            // break;
            // case "Updatedmct";
            //     if (isset($_POST['capnhat']) && $_POST['capnhat']){
            //         $id=$_POST['iddmct'];
            //         $id_danhmuc=$_POST['id_danhmuc'];
            //         $tenloai_ct=$_POST['name_ct'];
            //         update_danhmucct($id,$tenloai_ct,$id_danhmuc);
            //         $thongbao="Cập nhật thành công";
            //         }
            //         $listdanhmuc =loadall_danhmuc();
            //         $listdmcon =loadall_danhmuc_con();
            //         include "danhmuc/listct.php";
            // break;
// ---------Sản Phẩm -------------------------
            case "listsp";
                if(isset($_POST['listOk'])&&($_POST['listOk'])){
                    $kyw = $_POST['kyw'];  
                    $id_dm= $_POST['iddm'];
                }else{
                    $kyw='';
                    $id_dm =0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham= loadall_sanpham($kyw,$id_dm);
                // $listsanpham=loadall_sanpham();
                include "sanpham/list.php";
            break;
            case "addsp":
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $name = $_POST['tensp'];
                    
                    $gia = $_POST['giasp'];
                    $chieucao = $_POST['chieucao'];
                    $trongluong = $_POST['trongluong'];
                    $chatlieu = $_POST['chatlieu'];
                    $tinhtrang = $_POST['tinhtrang'];
                    $mota = $_POST['mota'];
                    $mucdich = $_POST['mucdich'];
                    $noisx = $_POST['noisx'];
                    $id_dm = $_POST['iddm'];
                    $anh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sp($name,$anh,$gia,$chieucao,$trongluong,$chatlieu,$tinhtrang,$mota,$mucdich,$noisx,$id_dm);
                    $thongbao="Them thanh cong";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
            break;
            case "xoasp":
                if(isset($_GET['id_product']) && $_GET['id_product']>0) {
                    delete_sp($_GET['id_product']);
                }
                $listsanpham= loadall_sanpham("",0);
                include "sanpham/list.php";
            break;
            case "suasp":
                if (isset($_GET['id_product']) && $_GET['id_product']>0) {
                    $sp=loadone_sp($_GET['id_product']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&$_POST['capnhat']){
                    $id_product = $_POST['id_product'];
                    $name = $_POST['tensp'];
                    $gia = $_POST['giasp'];
                    $chieucao = $_POST['chieucao'];
                    $trongluong = $_POST['trongluong'];
                    $chatlieu = $_POST['chatlieu'];
                    $tinhtrang = $_POST['tinhtrang'];
                    $mota = $_POST['mota'];
                    $mucdich = $_POST['mucdich'];
                    $noisx = $_POST['noisx'];
                    $id_dm = $_POST['id_dm'];
                    $anh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }
                    update_sanpham($id_product,$name,$anh,$gia,$chieucao,$trongluong,$chatlieu,$tinhtrang,$mota,$mucdich,$noisx,$id_dm);
                    $thongbao = "Cập nhật thành công";
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham=loadall_sanpham("",0);
                    include "sanpham/list.php";
                break;
// ---------------------------Bình luận--------------
                case 'qlbl':
                    $hienthibl = hienthi_bl();
                    include 'binhluan/qlbl.php';
                    break;
                case "xoabl":
                    $idbl = $_GET['idbl'];
                    $xoa = xoa_bl($idbl);
                    header('location:index.php?act=qlbl');
                    break;
// ---------------------------Don hàng-----------------
            case 'donhang':
                $listdonhang = loadall_donhang_admin();
                if(isset($_POST['xacnhandh'])){
                    $iddh = $_POST['xacnhandh'];
                    // echo $iddh;
                    // die;
                    update_xacnhan($iddh);
                }

                if(isset($_POST['xacnhan_huy'])){
                    $iddh = $_POST['xacnhan_huy'];
                    update_huydh($iddh);
                }
                include "donhang/list.php";
                break;
            
            case 'thongke_dh':
            // theo tháng
                if (isset($_GET['type']) && $_GET['type'] == 'month') {
                    $ds_thongke_dh = thongkedonhang();
                } 
                // theo tuần
                else if(isset($_GET['type']) && $_GET['type'] == 'week'){
                    $thongke_dh_tuan = thongkedonhangtheotuan();
                    // echo "<pre>";
                    // print_r ($thongke_dh_tuan);
                    // die;
                }
                // Theo ngày
                else if(isset($_GET['type']) && $_GET['type'] == 'day'){
                    $thongke_dh_ngay = thongkedonhangtheongay();
                }
                // Mặc định theo tháng
                else if(!isset($_GET['type']) || isset($_GET['type']) && $_GET['type'] != 'week' && $_GET['type'] != 'day'){
                    $ds_thongke_dh = thongkedonhang();
                }

                include "donhang/thongke.php";
                break;


                case 'thongke_sp_banchay';
                $listkhachhangmuanhieunhat =  thongkedonhang_aimuanhieu();
                include "donhang/thongke_sp_banchay.php";
                break;
// ---------------------------Tài Khoản-------------------------------------------------------------
                case "listtk":
                    $listuser = loadall_tk();
                    include "taikhoan/list.php";
                break;
                case "addtk":
                    if(isset($_POST['capnhat'])&&$_POST['capnhat']){
                        $username =$_POST['username'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $sdt =$_POST['sdt'];
                        $role =$_POST['role'];
                        
                        insert_tk($username,$pass,$email,$sdt,$role);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listrole= loadall_role();
                    $listuser = loadall_tk();
                    
                    include "taikhoan/add.php";
                break; 
                case "delete_tk";
                    if(isset($_GET['iduser']) && $_GET['iduser']>0) {
                        delete_tk($_GET['iduser']);
                    }
                    $listuser = loadall_tk();
                    include "taikhoan/list.php";
                break;
                case "suatk";
                    if (isset($_GET['iduser']) && $_GET['iduser']>0) {
                        $tk=loadone_user_gh($_GET['iduser']);
                    }
                    $listrole= loadall_role();
                    include "taikhoan/update.php";
                break;
                case "update_tk":
                    if(isset($_POST['capnhat'])&&$_POST['capnhat']){
                        $id=$_POST['id'];
                        $username =$_POST['username'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $sdt =$_POST['sdt'];
                        $role =$_POST['role'];
                        capnhat_admin($id,$username,$pass,$email,$sdt,$role);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listrole= loadall_role();
                    $listuser = loadall_tk();
                    include "taikhoan/add.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
