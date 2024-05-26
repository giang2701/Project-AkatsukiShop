</style>
<main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">Sản phẩm</p>
          <a href="index.php?act=addsp"><button>Thêm sản phẩm</button></a>
        </div>
        <section class="detail">
            <h4>Danh mục sản phẩm</h4>
            <form action="" method="post">
                <input type="text" name="kyw" placeholder="Tìm kiếm ...">
                <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$danhmuc_id.'">'.$dm_name.'</option>';
                    };
                ?>
                </select>
                  <input  type="submit" name="listOk" value="Tìm kiếm">
                </form>
            <section class="detail-item">
                <table>
                    <tr>
                      <td>#</td>
                      <td>Tên sản phẩm</td>
                      <td>Hình</td>
                      <td>Giá</td>
                      <td>chiều cao</td>
                      <td>Trọng Lượng</td>
                      <td>Chất Liệu</td>
                      <td>Tình Trạng</td>
                      <!-- <td>Mô tả</td> -->
                      <td>Mục Đích</td>
                      <td>Nơi Sản Xuất</td>
                      <td>Thao tác</td>
                    </tr>
                  <?php
                   $i=0;
                    foreach($listsanpham as $sanpham){
                      $i+=1;
                      extract($sanpham);
                      $suasp='index.php?act=suasp&id_product='.$id_product;
                      $xoasp='index.php?act=xoasp&id_product='.$id_product;
                      $hinh = $noichuaanh . $anh;?>
                      <tr>
                        <td><?php echo $id_product ?></td>
                        <td><?php echo $name ?></td>  
                        <td><img src="../<?php echo $hinh?>" alt="" width="70px" height="110px"></td>
                        <td><?php echo  $gia?></td>
                        <td><?php echo $chieucao ?></td>              
                        <td><?php echo $trongluong?></td>              
                        <td><?php echo $chatlieu ?></td>
                        <td><?php echo $tinhtrang ?></td>
                        <!-- <td><?php echo $mota ?></td> -->
                        <td><?php echo $mucdich ?></td>
                        <td><?php echo $noisx ?></td>      
                        <td>
                          <a href="<?php echo $suasp?>"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a href="<?php echo $xoasp?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                        <!-- <td><a href="index.php?act=listspct&idpro='.$id_product.'">Chi tiết sản phẩm</a></td> -->
                      </tr>
                    <?php }?>

                </table>
                
            </section>
        </section>
        <div class="main-cards">

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/scripts.js"></script>