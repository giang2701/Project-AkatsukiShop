<!---------------------------------MAIN------------------------------------------------------->
<main>
            <section class="navigation">
                <span>Trang chủ /</span>
                <span>Thông tin thanh toán</span>
            </section>
            <section class="attention_cart">
                <ul>
                    <li>Các bạn yên tâm khi mua hàng tại Akuttshi</li>
                    <li>Sản phẩm lỗi, hư hỏng có thể đổi trả</li>
                    <li>Được kiểm tra hàng trước khi nhận</li>
                    <li> Thời gian giao hàng sẽ từ 2-3 ngày đồng giá ship là 25k</li>
                </ul>
            </section>
            <form class="box_Information_cart" method="post">
                <article class="box_right">
                    <div>
                        <h2>Thông Tin Thanh Toán</h2>
                        <input type="text" name="hoten" id="" value="<?php echo $loadone_user['username']; ?>"><br>
                        <input type="text" name="diachi" id="" placeholder="Địa chỉ"><br>
                        <input type="text" name="sdt" placeholder="SDT" value="<?php echo $loadone_user['sdt']; ?>"><br>
                        <input type="text" name="email" id="" value="<?php echo $loadone_user['email'] ?>"><br>
                        <h2>Thông Tin Bổ Sung</h2>
                        <textarea name="thongtinbosung" id="" cols="57" rows="10" ></textarea><br>
                    </div>
                </article>
                <article class="box_left">
                    <form action="">
                    <h2>ĐƠN HÀNG CỦA BẠN </h2>
                    <div class="sub_box_feft">
                        <table>
                            <tr>
                                <th>Sản Phẩm</th>
                                <th>Số lượng</th>
                                <th>Tạm Tính</th>
                            </tr>
                            <?php
                                if (isset($listsp_gh) && is_array($listsp_gh)) {
                                    foreach ($listsp_gh as $key => $value) {?>
                                    <tr>
                                        <td><?php echo $value['name'] ?></td>
                                        <td><?php echo $value['Soluong'] ?></td>
                                        <td><?php echo number_format($price = ($value['gia'] * $value['Soluong']), 0, ",", "."); ?></td>
                                    </tr>
                                <?php }?>
                                    <tr>
                                        <td>Giao Hàng</td>
                                        <td></td>
                                        <td>25.000 đ</td>
                                    </tr>
                                    <tr>
                                        <td>Tạm Tính</td>
                                        <td></td>
                                        <td><?php echo number_format($tonggia + 25000, 0 , ",", "."); ?>đ</td>
                                    </tr>
                                <?php }else if(isset($listsp_id) && is_array($listsp_id)){?>
                                    <tr>
                                        <td><?php echo $listsp_id['name'] ?></td>
                                        <td><?php echo $listsp_id['Soluong'] ?></td>
                                        <td><?php echo $listsp_id['gia'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Giao Hàng</td>
                                        <td></td>
                                        <td>25.000 đ</td>
                                    </tr>
                                    <tr>
                                        <td>Tạm Tính</td>
                                        <td></td>
                                        <td><?php echo $listsp_id['gia']; ?>đ</td>
                                    </tr>
                                <?php }?>

                            
                        </table>
                    </div>
                    <div class="information-pay">
                        Thanh toán khi nhận hàng
                    </div>
                        
                    <div class="submit_left">
                        <input name="thanhtoan" type="submit" value="ThanhToán">
                    </div>
                    </form>
                </article>
            </form>
        </main>
        <!---------------------------------FOOTER---------------------------------------------------->
        <!-- code nút gọi dán vào web. Thường là footer -->
        <div class="fix_tel">
            <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
            <div class="ring-alo-ph-circle"></div>
            <div class="ring-alo-ph-circle-fill"></div>
            <div class="ring-alo-ph-img-circle">
            <a href="https://www.facebook.com/profile.php?id=100095392924455"><i class="fa-brands fa-facebook-messenger" style="font-size: 30px; color: white;"></i></a>
            </div>
            </div>
            <div class="tel">
            <!-- <a href="tel:0903172969"><p class="fone">Liên hệ với chúng tôi</p></a> -->
            </div>
        </div>
    </div>
    <script src="js.js"></script>
</body>
</html>