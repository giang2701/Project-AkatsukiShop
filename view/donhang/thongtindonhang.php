<main>
    <form class="donhang" action="" method="post" style="padding-top: 0;">
        <table>
            <tr>
                <th>Đơn hàng</th>
                <th>Trạng thái</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <!-- <th>Xem chi tiết</th> -->
                <th>Chức năng</th>
            </tr>
            <?php 
                foreach ($listdonhang as $key => $value) {?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['tgian']?></td>
                        <td><?php echo $value['price']; ?></td>
                        
                        <!-- <td><a href="index.php?act=chitietdonhang&iddh=<?php echo $value['donhang_id']; ?>">Xem</a></td> -->
                        <td>
                            <?php 
                                if ($value['name'] == 'Chờ xác nhận' && $value['name'] != 'Đã lấy hàng' && $value['name'] != 'Đã hủy') {?>
                                    <button name="cancel_dh" type="submit" value="<?php echo $value[0];?>" style="background-color: blueviolet;height: 35px;width: 150px;border: 0;">Hủy đơn hàng</button>
                            <?php } 
                                else if ($value['name'] == 'Đã nhận hàng') {?>
                                    <button name="" type="submit" style="background-color: pink;height: 35px;width: 150px;border: 0;">Đã nhận hàng</button>
                            <?php } 
                                else if ($value['name'] == 'Đã hủy') {?>
                                    <button name="" type="submit" style="background-color: gray;height: 35px;width: 150px;border: 0;">Đã hủy</button>
                            <?php }?>  
                        </td>
                    </tr>
            <?php }?>
        </table>
    </form>
</main>
