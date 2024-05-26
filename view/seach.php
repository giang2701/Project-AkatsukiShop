<?php if (isset($listsp_search) && $listsp_search) {?>
    <section class="Content">
        <article class="title_box">
            <div class="box_1"></div>
            <div class="box_2">
                <p>Tìm kiếm</p>
            </div>
            <div class="box_1"></div>
        </article>
                        
        <article class="Sub_content">
                            <!-- mô hình 1 -->
            <?php foreach ($listsp_search as $key => $value) {
                $img = $noichuaanh . $value['anh'];?>
                    <div class="object">
                        <a href="index.php?act=chitietsp&idsp=<?php echo $value['id_product']; ?>"><img src="<?php echo $img; ?>" alt="" ></a>
                        <p>Mô hình Anime</p>
                        <h3><?php echo $value['name'] ?></h3>
                        <h2><?php  echo $value['gia']?> Đ</h2>
                        <div class="add_cart">
                            <div class="sub_add_cart">
                                <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                                <a href="index.php?act=cart&idsp=<?php echo $value['id_product']; ?>" style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                            </div>
                        </div>
                    </div>
                <?php }?>
        </article>
    </section>            
<?php }else{ ?>
    <article class="title_box">
        <div class="box_1"></div>
        <div class="box_2">
        <p>Tìm kiếm</p>
        </div>
        <div class="box_1"></div>
    </article>
    <article class="Sub_content" style="margin-bottom: 300px;">
          <h2>Sản Phẩm không tồn tại</h2>
    </article>
<?php }?>
                
                