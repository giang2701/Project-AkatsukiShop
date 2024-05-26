<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        .information_product h2 {
        color: #000000;
        font-size: 40px;
        margin-left: 10px;
        }
        /* .search_input input{
            width: 10px;
            background-color: red ;
        } */
        .Search_trangchu{
            margin-left: -50px;
            position: relative;
        }
        .Search_trangchu input{
            background-color: #000000;
            color: white;
        }
        .search_input input{
            background-color: black;
            width: 130px;
            padding-right: 10px;
            position: absolute;
            left: 630px;
            bottom: 1px;
        }
        .search_input input:hover{
            background-color: white;
            color: black;
        }
        .ThongBao{
            font-size: 30px;
            color: red;
            margin-left: 450px;
            margin-bottom: -20px;
        }
        .ThongBao_email{
            color: red;
            font-size: 20px;
        }
        .Manager_tk {
            position: relative;
            margin-left: 10px;
            padding-left: 10px;
        }
        .Manager_tk p{
            font-size: 20px;

        }
        .Sub_Manager_tk{
            position: absolute;
            width: 150px;
            background-color: gainsboro;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid white;
            
        }
        .Sub_Manager_tk {
           display: none;
        }
        .Manager_tk:hover .Sub_Manager_tk{
            display: block;
        }
        .Sub_Manager_tk ul{
            list-style: none;
        }
        .Sub_Manager_tk ul li:hover{
            background-color: blanchedalmond;
        }
        .Sub_Manager_tk ul li{
            line-height: 30px;
            border-bottom: 1px solid black;
        }
        .Sub_Manager_tk ul li a{
           text-decoration: none;
        }
        .log_in_quenmk{
            box-shadow: 1px 2px 1px rgb(138, 129, 129);
            border-radius: 20px;
            width: 600px;
            margin-left: 450px;
            margin-top: 30px;
            height: 250px;
            padding-left: 20px;
            border: 1px solid rgb(188, 178, 178);
        }
        .log_in_quenmk h1{
            margin-left: 120px;
            margin-top: 30px ;
            margin-bottom: 20px ;
        }
        .soluong{
            padding-left: 150px;
        }
        .tonggia{
            height: 50px;
            font-size: 20px;
            padding-left: 20px;
        }
        /* trang tin tuwc */
        .main_newsletter {
            position: relative;
        }
        .main_newsletter img{
            width: 80%;
            margin-left: 150px;
            height: 750px;
            border-radius: 20px;
        }
        .main_newsletter h4{
            color: red;
            font-size: 70px;
            text-align: center;
            position: absolute;
            bottom: 20px;
            left: 180px;
        }
        .content_news_1{
            display: flex;
            margin-top: 30px;
        }
        .suba_content_news_1{
            display: flex;
            border-radius: 20px;
            box-shadow: 1px 1px 10px rgb(156, 151, 151);
            margin-right: 30px;
            margin-left: 150px;
            width: 50%; 
            height: 320px;
        }
        .img_suba img{
            width: 300px;
            padding: 10px;
        }
        .tt_suba h5{
            font-size: 35px;
            width: 370px;
            margin-right: 10px;
            margin: 10px;
        }
        .tt_suba span{
            font-size: 20px;
        }
        .subb_content_news_1{
            border-radius: 10px;
            box-shadow: 1px 1px 10px rgb(156, 151, 151);
            width: 410px;
            height: 500px;
        }
        .img_subb img{
            width: 370px;
            margin-left: 20px;
            margin-top: 20px;
            
        }
        .subb_content_news_1 h5{
            font-size: 30px;
            margin-left: 20px;
            line-height: 40px;
        }
        .subb_content_news_1 h6{
            font-size: 15px;
            margin-left: 20px;
            margin-top: 20px;
            line-height: 25px;
        }
        .content_news_2{
            display: flex;
            margin-left: 200px;
            margin-bottom: 40px;
        }
        .sub_content_news_2{
            width: 300px;
            margin-right: 40px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 1px 1px 10px rgb(156, 151, 151);
            width: 340px;
            height:400px;
            
        }
        .sub_content_news_2 img{
            width: 300px;
            margin-left: 20px;
            margin-top: 10px;
            
        }
        .content_news_2 h5{
            font-size: 25px;
            margin-left: 20px;
            width: 300px;
            margin-top: 10px;
            line-height: 30px;
        }
        .content_news_3{
            width: 80%;
            display: flex;
            margin-left: 150px;
            border-radius: 10px;
            box-shadow: 1px 1px 10px rgb(156, 151, 151);
        }
        .img_content_news_3 img{
            width: 500px;
            margin: 20px;
        }
        .tt_content_news_3 h5{
            font-size: 30px;
            margin-top: 20px;
            margin-bottom: 10px;
            line-height: 40px;
        }
        .tt_content_news_3 span{
            font-size: 18px;
            line-height: 30px;
        }
    </style>
</head>
<body>

    <div class="container">
        <!---------------------------------HEADER---------------------------------------------------->
        <header>
            <section class="sub_header">
                <article class="mail">
                    <i class="fa-solid fa-envelope" style="font-size: 20px;"></i>
                    <span style="font-size: 17px; ">ShopAkuttshi27@gmail.com</span>
                </article>
                <article class="contact">
                    <div class="icon_contact">
                        <a href=""><img src="icon/facebook.svg" alt="" height="30px" width="30px"></a>
                        <a href="https://twitter.com/Shop_Akuttshi"><img src="icon/twitter.svg" alt="" height="30px" width="30px"></a>
                        <a href=""><img src="icon/facebook-messenger.1.svg" alt="" height="30px" width="30px"></a>
                    </div>
                    <?php 
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                            <div class="Manager_tk" style="border-left: 2px solid black;"><p><?= $username ?></p>
                            <div class="Sub_Manager_tk">
                                <ul >
                                    <li><a href="index.php?act=donhang">Thông tin đơn hàng</a></li>      
                                    <li><a href="index.php?act=Quenmk">Quên mật khẩu</a></li>
                                    <li><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></li>
                                    <!-- <li><a href="Admin/index.php">Đăng nhập Admin</a></li> -->
                                    <?php if($role==2){ ?>
                                    <li>
                                        <a href="admin/index.php">Đăng nhập admin</a>
                                    </li>
                                    <?php } ?>
                                    <li><a href="index.php?act=thoat">Đăng Xuất</a></li>
                                </ul>
                            </div>
                            </div>
                            <!-- <div class="button_header" style="border-left: 2px solid black;"><a href="index.html?act=Exit">Đăng xuất</a></div> -->
                        <?php }else{ ?>
                            <div class="button_header" style="border-left: 2px solid black;"><a href="index.php?act=dangnhap">Đăng Nhập</a></div>
                        <?php }?>
                </article>
            </section>
            <section class="body_header">
                <div class="img_body_header">
                    <a href="index.php"><img src="img/logo.jpg" alt="" ></a>
                </div>
                <div class="Search_trangchu">
                    <form class="search" method="post" action="index.php?act=search">
                    <input class="input_search" type="text" name="noidung_search" id="" placeholder="Search......">
                    <div class="search_input">
                        <input type="submit" name="search" value="Search">
                    </div>
                </form>
                </div>
                <div class="cart">
                    <a href="index.php?act=cart"><i class="fa-solid fa-cart-shopping" style="font-size: 40px; color: white;"></i></a>
                    <a href="index.php?act=cart"><span style="font-weight: bold; font-size: 30px; color: white;">Cart</span></a>
                </div>
            </section>
            <section class="menu">
                <article class="menu_colum">
                    <div class="dropdown" onclick="toggleDropdown()">
                        <img src="icon/menu-1.2.svg" alt="" height="30px" width="30px">
                        <span>Danh mục sản phẩm</span>
                        <div class="dropdown-content">
                            <?php
                                foreach ($listdanhmuc  as $key => $value) {?>
                                    <a href="index.php?act=search&name_dm=<?php echo $value['danhmuc_id'] ?>"><?php echo $value['dm_name'] ?></a>
                            <?php  }?>
                        </div>
                      </div>
                </article>
                <article class="menu_row">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        
                        <li><a href="index.php?act=new">Tin tức</a></li>
                        <li><a href="index.php?act=Gioithieu">Giới thiệu </a></li>
                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <span>+84 385137427</span><br>
                            <p>Hỗ Trợ 24/7 </p>
                        </li>
                    </ul>
                </article>
            </section>
        </header>