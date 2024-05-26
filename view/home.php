<section class="banner">
    <div class="mySlides fade">
        <img src="img/img_banner/banner_1.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="img/img_banner/banner_2.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="img/img_banner/banner_3.png" style="width:100%">
    </div>
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>
<!---------------------------------MAIN------------------------------------------------------->
<main>
    <!----------------------------------------------MÔ Hình Anime----------------------------------------------->


    <section class="Content">
        <article class="title_box">
            <div class="box_1"></div>
            <div class="box_2">
                <p>Mô Hình Anime</p>
            </div>
            <div class="box_1"></div>
        </article>

        <article class="Sub_content">
            <!-- mô hình 1 -->
            <?php
            foreach ($list_4sp as $key => $value) {
                $img = $noichuaanh . $value['anh'];
                ?>
                <div class="object">
                    <a href="index.php?act=chitietsp&idsp=<?php echo $value['id_product']; ?>"><img
                            src="<?php echo $img; ?>" alt=""></a>
                    <p>Mô hình Anime</p>
                    <h3>
                        <?php echo $value['name'] ?>
                    </h3>
                    <h2>
                        <?php echo $value['gia'] ?> Đ
                    </h2>
                    <div class="add_cart">
                        <div class="sub_add_cart">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                            <a href="index.php?act=cart&idsp=<?php echo $value['id_product']; ?>"
                                style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </article>
        <!-- <article class="see_more">
            <p><a href="index.php?act=see_more">Xem thêm</a></p>
        </article> -->
    </section>
    <!----------------------------------------------TRANH CANVAS ANIME--------------------------------------------- -->
    <section class="Content">
        <article class="title_box">
            <div class="box_1"></div>
            <div class="box_2">
                <p>Tranh Canvas</p>
            </div>
            <div class="box_1"></div>
        </article>

        <article class="Sub_content">
            <!-- mô hình 1 -->
            <?php
            foreach ($list_treotuong as $key => $value) {
                $img = $noichuaanh . $value['anh']; ?>
                <div class="object">
                    <a href="index.php?act=chitietsp&idsp=<?php echo $value['id_product']; ?>"><img
                            src="<?php echo $img; ?>" alt="" height="350px" width="250px"></a>
                    <p>Tranh Canvar Anime</p>
                    <h3>
                        <?php echo $value['name'] ?>
                    </h3>
                    <h2>
                        <?php echo $value['gia'] ?> Đ
                    </h2>
                    <div class="add_cart">
                        <div class="sub_add_cart">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                            <a href="index.php?act=cart&idsp=<?php echo $value['id_product']; ?>"
                                style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </article>
        <!-- <article class="see_more">
            <p><a href="">Xem thêm</a></p>
        </article> -->
    </section>
    <!----------------------------------------------Set Decal Dán Tường Anime--------------------------------------------- -->
    <section class="Content">
        <article class="title_box">
            <div class="box_1"></div>
            <div class="box_2">
                <p>Set Decal dán tường</p>
            </div>
            <div class="box_1"></div>
        </article>

        <article class="Sub_content">
            <!-- mô hình 1 -->
            <?php
            foreach ($list_dantuong as $key => $value) {
                $img = $noichuaanh . $value['anh'];
                ?>
                <div class="object">
                    <a href="index.php?act=chitietsp&idsp=<?php echo $value['id_product']; ?>"><img
                            src="<?php echo $img; ?>" alt="" height="350px" width="250px"></a>
                    <p>Decal Dán Tường</p>
                    <h3>
                        <?php echo $value['name'] ?>
                    </h3>
                    <h2>
                        <?php echo $value['gia'] ?> Đ
                    </h2>
                    <div class="add_cart">
                        <div class="sub_add_cart">
                            <i class="fa-solid fa-cart-shopping" style="font-size: 25px;"></i>
                            <a href="index.php?act=cart&idsp=<?php echo $value['id_product']; ?>"
                                style="text-decoration: none; font-size: 20px; color: white;">Thêm vào Giỏ hàng </a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </article>
        <!-- <article class="see_more">
            <p><a href="">Xem thêm</a></p>
        </article> -->
    </section>
</main>