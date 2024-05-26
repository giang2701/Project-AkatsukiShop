<?php
session_start();
include "model/pdo.php";
include "model/trangchu.php";
include "model/chitietsanpham.php";
include "model/taikhoan.php";
include "model/giohang.php";
include "model/donhang.php";
include "model/Danhmuc.php";

include "global.php";
$listdanhmuc            = load_danhmuc();
include "view/header.php";
$listop                 = loadall_sanpham();
$list_4sp               = loadall_sanpham_mohinh();
$list_treotuong         = loadall_sanpham_canvas();
$list_dantuong          = loadall_sanpham_dantuong();

    if(isset($_GET['act'])&&($_GET['act']!=" ")){
        $act = $_GET['act'];
        switch($act){
            case "dangnhap":
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($pass,$email);
                    if(is_array($checkuser)){
                        $_SESSION['user'] = $checkuser;
                        echo '<script>window.location.href = "index.php";</script>';
                        // include "view/home.php";
                    }else{
                        $thongbao= "Vui lòng kiểm tra lại hoặc đăng kí";
                    }
                    
                }
                include "view/Login/dangnhap.php";
            break;
            case "dangki";
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $email=$_POST['email'];
                    $username=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($username,$pass,$email);
                    $thongbao="Đăng kí thành công";
                    echo '<script>window.location.href = "index.php?act=dangnhap";</script>';
                }

                include "view/Login/Dangki.php";
                break;
            case "edit_tk":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $email=$_POST['email'];
                    $username=$_POST['user'];
                    $pass=$_POST['pass'];
                    $sdt=$_POST['sdt'];
                    $id=$_POST['id'];
                    capnhat($id,$username,$pass,$email,$sdt);
                    $_SESSION['user']=checkuser($pass,$email);
                }
                include "view/Login/edit_tk.php";
            break;
            case "Quenmk":
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao= "Email này không tồn tại ";
                    }
                }
                include "view/Login/quenmk.php";
            break;
            case "thoat":
                session_unset();
                echo '<script>window.location.href = "index.php";</script>';
            break;

            case "search":
                $listop                 = loadall_sanpham();
                $list_4sp               = loadall_sanpham_mohinh();
                $list_treotuong         = loadall_sanpham_canvas();
                $list_dantuong          = loadall_sanpham_dantuong();
                $listdanhmuc            = load_danhmuc();
                // echo "<pre>";
                // print_r($listdanhmuc);
                // die;
                if (isset($_POST['search'])) {
                    $noidung_search     = $_POST['noidung_search'];
                    $listsp_search      = loadall_sanpham_search($noidung_search);
                }
                else if(isset($_GET['name_dm'])){
                    $iddm = $_GET['name_dm'];
                    $listsp_search      = loadall_sanpham_search("",$iddm);
                }
                else{
                    $thongbao1="Sản phẩm ko tồn tại";
                }
                
                include "view/seach.php";
                break;

            case 'chitietsp':
                if(isset($_GET['idsp'])){
                    $idsp = $_GET['idsp'];

                    $sp_chitiet = loadall_sanpham_id($idsp);
                    $sp_chitiet;
                    extract($sp_chitiet);
                    $sp_cungLoai = sanpham_cungloai($idsp,$id_dm);
                    $listbl = loadall_binhluan($idsp);

                    if(isset($_POST['addbl']) && $_POST['addbl']){
                        $noidungbl = $_POST['noidungbl'];
                        $id_user   = $_SESSION['user']['id'];


                        if(isset($id_user) && isset($noidungbl) && isset($idsp)){
                            insert_binhluan($noidungbl, $idsp, $id_user);
                            echo '<script>window.location.href = "index.php?act=chitietsp&idsp='.$idsp.'";</script>';
                        } else{
                            echo "<script>alert('Vui lòng nhập đủ!!')</script>";
                        }
                    }
                }
                include "view/chitietsanpham.php";
                break;

            case "cart":
                // Kiểm tra xem đã có user hay chưa
                if (isset($_SESSION['user'])) {
                    if(isset($_GET['idsp'])){
                        //  Kiểm tra xem trên url có tồn tại idsp không =>
                        $id_use          = $_SESSION['user']['id'];
                        $listgh          = loadone_giohang($id_use);
                        $id_cart         = $listgh['id'];
                        if((!isset($id_cart) && !isset($id_cart))){
                            insert_carts($id_use);
                        }else if(isset($id_cart)) {
                            $listgh          = loadone_giohang($id_use);
                            $id_cart         = $listgh['id'];

                            $id_pro          = $_GET['idsp'];
                            // Nếu không tồn tại giỏ hàng cho người dùng, thì tạo mới
                            // Dữ liệu giỏ hàng theo iduser
                            // Xem có tồn tại sản phẩm trong giỏ hàng hay chưa
                            $ktra_sp_giohang = loadone_giohang_chitiet($id_pro, $id_cart);
                            // nếu tồn tại thì tăng số lượng lên 1
                            if (isset($ktra_sp_giohang) && is_array($ktra_sp_giohang)) {
                                // Nếu chọn số lượng thêm vào giỏ hàng
                                if(isset($_POST['soluong'])){
                                    $sl    = $_POST['soluong'];
                                    $soluong   = $ktra_sp_giohang['Soluong'];
                                    $listgh          = loadone_giohang($id_use);
                                    $id_cart         = $listgh['id'];
                                    $id_pro          = $_GET['idsp'];
    
                                    $sl = $soluong + $sl;
                                    update_soluong_chitietgh($sl, $id_pro, $id_cart);
                                } 
                                // Không có
                                else{
                                    $soluong = $ktra_sp_giohang['Soluong'];
                                    $listgh          = loadone_giohang($id_use);
                                    $id_cart         = $listgh['id'];
    
                                    $id_pro          = $_GET['idsp'];
                                    $sl = "";
    
                                    $sl = $soluong + 1;
                                    update_soluong_chitietgh($sl, $id_pro, $id_cart);
                                }
                            } 
                            else{
                                $id_pro          = $_GET['idsp'];
                                // // nếu chauw tồn tại thì thêm mới
                                $id_use          = $_SESSION['user']['id'];
                                // // nẾU tồn tại giỏ hàng theo user => hiển thị tất cả giỏ hàng khi người dùng ấn vào giỏ hàng
                                $listgh          = loadone_giohang($id_use);
                                
                                // Thêm vào bảng giỏ hàng theo iduser

                                // lấy id giỏ hàng
                                $id_cart         = $listgh['id'];
                                if (isset($id_cart)) {
                                    insert_cart_detail($id_pro, $id_cart);
                                }
                            }
                        }
                    }

                    if(isset($_POST['idsp']) && $_POST['idsp']){
                        $idsp = $_POST['idsp'];
                        dalete_soluong_chitietgh($idsp);
                    }

                    $id_user = $_SESSION['user']['id'];
                    $listgh          = loadone_giohang($id_user);
                    $giohang = loadall_sanpham_giohang($id_user);
                }
                // Nếu chưa có bất đăng nhập
                else{
                    echo "<script>alert('Vui lòng đăng nhập !!')</>";
                    echo '<script>window.location.href = "index.php?act=dangnhap";</script>';
                }

                include "view/Cart.php";
                break;


            case 'thongtindonhang':
            // thêm sản phẩm từ giỏ hàng
                if (isset($_GET['idgh'])) {
                    $idgh = $_GET['idgh'];
                    $listsp_gh = loadall_donhang($idgh);
                    // Lặp qua danh sách sản phẩm trong giỏ hàng
                    $tongGiaTri = 0;
                    foreach ($listsp_gh as $sanpham) {
                        // Giá của sản phẩm
                        $giaSanPham = $sanpham['gia'];

                        // Số lượng của sản phẩm
                        $soLuong = $sanpham['Soluong'];

                        // Tính tổng giá trị cho sản phẩm này
                        $tongGiaTriSanPham = $giaSanPham * $soLuong;

                        // Thêm tổng giá trị của sản phẩm này vào tổng giá trị tổng cộng
                        $tongGiaTri += $tongGiaTriSanPham;
                    }

                    $tonggia = $tongGiaTri;

                    if(isset($_POST['thanhtoan'])){
                        $diachi = $_POST['diachi'];
                        $thongtinbosung = $_POST['thongtinbosung'];
                        $id_user = $_SESSION['user']['id'];
                        insert_donhang($tonggia, $diachi, $thongtinbosung, $idgh, $id_user);
                        echo "<script>alert('Đặt hàng thành công!!')</script>";
                    }
                }

                // Thêm sản phẩm khi không qua giỏ hàng
                if(isset($_GET['idsp'])){
                    $idsp = $_GET['idsp'];
                    $listsp_id = loadall_donhang_id($idsp);
                    if(isset($_POST['thanhtoan'])){
                        $price = $listsp_id['gia'];
                        $diachi = $_POST['diachi'];
                        $thongtinbosung = $_POST['thongtinbosung'];
                        $id_user = $_SESSION['user']['id'];
                        insert_donhang_idsp($price, $diachi, $thongtinbosung, $id_user);
                        echo "<script>alert('Đặt hàng thành công!!')</script>";
                    }
                }
                

                $user_id      =   $_SESSION['user']['id'];
                $loadone_user =   loadone_user_gh($user_id);  

                include "view/thongtindonhang.php";
                break;

            case 'donhang':
                $user_id      =   $_SESSION['user']['id'];
                $loadone_user =   loadone_user_gh($user_id);    
                $listdonhang = loadall_donhang_iduser($user_id);

                if(isset($_POST['cancel_dh'])){
                    $id = $_POST['cancel_dh'];

                    if(isset($id)){
                        update_huydh($id);
                        echo '<script>window.location.href = "index.php?act=donhang";</script>';
                    }
                }
                
                include "view/donhang/thongtindonhang.php";
                break;
                

            case "lienhe":
                include "view/Lienhe.php";
                break;
            case "Gioithieu":
                include "view/Gioithieu.php";
            break;
            case "new":
                include "view/news.php";
            break;
        }
    }
    else{
        include "view/home.php";
    }
    include "view/footer.php";
?>