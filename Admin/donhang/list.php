<style>
  /*👉=========================================
                  Đơn hàng
  =========================================👈*/

  .donhang{
      padding: 20px 20px 0 20px;

  }

  .row2font_title{
      text-align: start;
      font-size: 10px;
  }

  .row3mb10formds_donhang>table{
      background-color: white;
      width: 100%;
      margin-bottom: 20px;
  }

  .row3mb10formds_donhang>table tr td{
      height: 50px;
  }

  .row3mb10formds_donhang>table tr td:nth-child(1){
      width: 12%;
      text-align: center;
  }

  .row3mb10formds_donhang>table tr td:nth-child(2){
      width: 27%;
      text-align: center;
  }

  .row3mb10formds_donhang>table tr td:nth-child(3){
      width: 12%;
      text-align: center;
  }

  .row3mb10formds_donhang>table tr td:nth-child(4){
      width: 13%;
      text-align: center;
  }

  .row3mb10formds_donhang>table tr td:nth-child(5){
      width: 15%;
      text-align: center;
  }

  .row3mb10formds_donhang>table tr td:nth-child(6){
      width: 7%;
      text-align: center;
  }

  .row3mb10formds_donhang>table tr td:nth-child(7){
      width: 10%;
      text-align: center;
  }

  .row3mb10formds_donhang>table tr td:nth-child(7) input{
      margin-bottom: 5px;
      height: 30px;
      min-width: 120px;
      border: 0;
      background-color: aquamarine;
  }

  .row3mb10formds_donhang>table tr td:nth-child(7) input:hover{
      background-color: red;
  }

  .rowmb_sanpham>a>input{
      height: 35px;
      padding: 0 5px;
      margin-right: 8px;
      margin-bottom: 100px;
      border: 0;
      background-color: aquamarine;
  }

  .rowmb_sanpham>a>input:hover{
      background-color: red;
  }
/*👉=========================================
                End Đơn hàng
=========================================👈*/

</style>
<div class="donhang" >
  <div class="row2 font_title">
    <h2 style="font-size: 20px;">DANH SÁCH ĐƠN HÀNG</h2>
  </div>
  <div class="row3form_content" >
    <form action="" method="post">
      <div class="row3mb10formds_donhang">
        <table border="1">
        <tr>
            <th>Tên người nhận</th>
            <th>Địa chỉ giao hàng</th>
            <th>SĐT nhận hàng</th>
            <th>Trạng thái</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Chức năng</th>
        </tr>

        <?php 
            foreach ($listdonhang as $key => $value) {
                ?>

                <tr>
                    <td><?php echo $value['username'] ?></td>
                    <td><?php echo $value['diachi']?></td>
                    <td><?php echo $value['sdt'] ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['tgian'] ?></td>
                    <td><?php echo $value['price'] ?></td>
                    <td>
                        <?php 
                            if ($value['name'] == 'Chờ xác nhận' && $value['name'] != 'Đã nhận hàng' && $value['name'] != 'Đã hủy') {?>
                              <button name="xacnhandh"   type="submit" value="<?php echo $value[0] ?>" style="height: 30px;min-width: 120px;background-color: cadetblue;border: 0;">Đã giao hàng</button>
                              <button name="xacnhan_huy" type="submit" value="<?php echo $value[0] ?>" style="height: 30px;min-width: 120px;background-color: chocolate;border: 0;margin-top: 8px;">Hủy</button>
                        <?php }
                            else if ($value['name'] == 'Đã nhận hàng') {?>
                              <button name=""   type="submit" value="" style="height: 30px;min-width: 120px;background-color: darkgreen;border: 0;margin-top: 8px; color: white;">Đã nhận hàng</button>
                        <?php }?>  
                    </td>
                </tr>
          <?php } ?>

        </table>
      </div>
      <br>
      <div class="rowmb_sanpham">
        <a href="index.php?act=thongke_dh">                   <input class="mr20" type="button" value="THỐNG KÊ ĐƠN HÀNG ĐÃ BÁN"></a>
        <a href="index.php?act=thongke_sp_banchay">           <input class="mr20" type="button" value="THỐNG KÊ  KHÁCH HÀNG ĐÃ MUA "></a>
      </div>
    </form>
  </div>
</div>
</div>