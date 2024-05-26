<!-----------------------------------MAIN------------------------------------------------------->
    <main>
        <section class="navigation">
            <span>Trang chủ /</span>
            <!-- <span>Mô hình anime/</span> -->
            <span><?php echo $sp_chitiet['dm_name']; ?>/</span>
            <span><?php echo $sp_chitiet['name'] ?></span>
        </section>

        <section class="Product_details">
            <article class="img_small">
                <img src="./upload/<?php echo $sp_chitiet['anh'] ?>" alt="" height="150px" width="100px">
            </article>
            <article class="img_big">
                <img src="./upload/<?php echo $sp_chitiet['anh'] ?>" alt="" height="700px" width="430px">
            </article>
            <article class="information">
            <div class="information_product">
                    <h2><?php echo $sp_chitiet['name']?></h2>
                    <div class="box_3"></div>
                    <p><?php echo $sp_chitiet['gia']?> đ</p>
                    <ul>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Tên mô hình : <?php echo $sp_chitiet['name'] ?></li>
           
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Chiều cao :<?php echo $sp_chitiet['chieucao'] ?> (cm)</li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;"><?php echo $sp_chitiet['trongluong'] ?> (gram)</li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Bộ sản phẩm gồm: Nhân vật cơ bản</li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Box: Có</li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Chất liệu :<?php echo $sp_chitiet['chatlieu'] ?></li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Tình trạng :<?php echo $sp_chitiet['tinhtrang'] ?> </li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Mô tả :<?php echo $sp_chitiet['mota'] ?></li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Mục đích :<?php echo $sp_chitiet['mucdich'] ?></li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Kiểu giao hàng: Giao ngay</li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Kiểu: cố định, không thể cử động</li>
                        <li><img src="<?php echo $sp_chitiet['anh'] ?>" alt="" height="10px" width="10px" style="margin-right: 10px;">Nơi sản xuất :<?php echo $sp_chitiet['noisx'] ?></li>
                    </ul>
                </div>
                
                <div class="button_details">
                    <form class="button_details-1" method="post" action="index.php?act=cart&idsp=<?php echo $idsp; ?>">
                        <div class="quantity-container">
                            <button type="button" class="quantity-button" onclick="decreaseQuantity()">-</button>
                            <input  name="soluong" type="text" class="quantity-input" value="1" id="quantity">
                            <button type="button" class="quantity-button" onclick="increaseQuantity()">+</button>
                        </div>
                        <div class="info-wrap">
                            <button class="muahang" name="buy_sp" type="submit" style="height: 50px; width: 200px;"><i class="fa-solid fa-cart-plus" style="margin-right: 10px;"></i>Add To Cart</button>
                            <!-- <a href="index.php?act=cart&idsp=<?php echo $idsp; ?>" class="btn"><button class="muahang" name="buy_sp" type="submit"><i class="fa-solid fa-cart-plus" style="margin-right: 10px;"></i>Add To Cart</button></a> -->
                        </div>
                    </form>
                    <div class="button_details-2">
                        <div class="Buy">
                            <a href="index.php?act=thongtindonhang&idsp=<?php echo $idsp; ?>" style="text-decoration: none;"><p>Mua Ngay</p</a>
                        </div>
                        <div class="contact_details">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://twitter.com/Shop_Akuttshi"><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-facebook-messenger"></i></a>
                        </div>
                    </div>
                </div>
            </article>   
        </section>
        <!----------------------Mo ta------------------------------------------------->
        <section class="Describe">
            <div style="height: 3px; width: 100px; background-color: #FF0000; display: inline-block;"></div>
            <span style="font-size: 40px;margin: 0px 20px;">Thêm</span>
            <div style="height: 3px; width: 1270px; background-color: #FF0000; display: inline-block;"></div>
            <!-- <p>Một số hình ảnh chân thực sản phẩm</p>
            <img src="img/Mô tả marco2.png" alt="">
            <img src="img/Mô tả marco.png" alt=""> -->
            <h3>Cam kết bán hàng tại Manga Store</h3>
            <h4>Chất lượng sản phẩm</h4>
            <ul>
                <li>Thông tin mô tả hoàn toàn xác thực.</li>
                <li>Sản phẩm đẹp như hình, có kèm clip hoặc hình ảnh thực tế (tùy sản phẩm)</li>
                <li>Thể hiện rõ thần thái của nhân vật trong phim, truyện.</li>
                <li>Chính sách đổi trả khi bị lỗi.</li>
            </ul>
            <h4>Giá cả sản phẩm</h4>
            <ul>
                <li>Giá cạnh tranh.</li>
                <li>Tặng kèm 2 pack anime.</li>
                <li>Ship đồng giá 25K.</li>
            </ul>
        </section>
        <!-- Bình Luận-------------------------------------->
        <section class="comment">
            <p>Bình Luận </p>
            <form class="cmt" method="post" action="">
                <div class="styled-input">
                    <input name="noidungbl" type="text" value="" >
                    <label for="username">Bình luận</label>
                </div>
                <input name="addbl" type="submit" value="Thêm bình luận" style="margin-left: 10px; background-color: #1E90FF; border: 1px solid white; border-radius: 10px; width: 120px; color: white; font-size: 15px;">  
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listbl as $key => $value) {?>
                            <tr>
                                <td><?php echo$value['username']; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['ngaybl']; ?></td>
                            </tr>
                        <?php }?>
                </tbody>
            </table>
        </section>
        <!-- Sản phẩm tương tự---------------------------------->
        <section class="Related_Products">
            <h5>Sản Phẩm tương Tự</h5>
            <article class="Sub_content">
                
                <!-- mô hình 1 -->
                <?php
                    foreach($sp_cungLoai as $sp_cl){
                        extract($sp_cl);
                        $hinh = $noichuaanh . $anh;
                        $link="index.php?act=chitietsp&idsp=".$id_product;
                        echo '
                            <div class="object">
                            <td><a href="'.$link.'"><img src="'.$hinh.'" alt=""></a></td>
                                
                                <h3>'.$name.'</h3>
                                <h2>'.$gia.'</h2>
                            <div class="add_cart">
                                <div class="sub_add_cart">
                                    <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                                    <a href="" style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                                </div>
                            </div>
                            </div>
                        ';
                    }
                ?>
                
                <!-- Mô hình 2 -->
                <!-- <div class="object">
                    <a href=""><img src="img/Decal_nhóm_mũ_rơm.png" alt="" height="350px" width="250px"></a>
                    <p>Decal Dán Tường</p>
                    <h3>Decal Dán Tường Nhân Vật One Piece 03</h3>
                    <h2>95.000 Đ</h2>
                    <div class="add_cart">
                        <div class="sub_add_cart">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                            <a href="" style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                        </div>
                    </div>
                </div> -->
                <!-- Mô hình 3 -->
                <!-- <div class="object">
                    <a href=""><img src="img/Decal_zoro.png" alt="" height="350px" width="250px"></a>
                    <p>Decal Dán Tường</p>
                    <h3>Decal Dán Tường Zoro(Vua địa ngục)</h3>
                    <h2>95,000 Đ</h2>
                    <div class="add_cart">
                        <div class="sub_add_cart">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                            <a href="" style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                        </div>
                    </div>
                </div> -->
                <!-- Mô hình 4 -->
                <!-- <div class="object">
                    <a href=""><img src="img/Decal_sanji.png" alt="" height="350px" width="250px"></a>
                    <p>Decal Dán Tường</p>
                    <h3>Decal Dán Tường Sanji(chân đen)</h3>
                    <h2>95,000 Đ</h2>
                    <div class="add_cart">
                        <div class="sub_add_cart">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                            <a href="" style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                        </div>
                    </div>
                </div> -->
            </article>
        </section>
    </main>
<?php   

?>

    