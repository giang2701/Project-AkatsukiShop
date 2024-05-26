
<style>
  .main-container form select {
  width: 315px;
  height: 40px;
  outline:#ccc;
  border:1px solid #ccc;
  margin-top:20px;
  }
  form input{
    border:1px solid #ccc;
    outline:#ccc;
  }
  textarea{
    border:1px solid #ccc;
  }
</style>
<?php 
if(is_array($sp)){
    extract($sp);
}
$hinhpath = $noichuaanh.$anh;
if(is_file($hinhpath)){
  $hinhpath="<img src='".$hinhpath."' width='150px'>";
}else{
  $hinhpath = "no photo";
}
?>
<main class="main-container">
        <p class="font-weight-bold">Cập Nhật sản phẩm</p>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <label>Tên sản phẩm</label>
            <input type="text" name="tensp" value="<?= $name?>">
            
            <label>Hình</label>
            <input type="file" name="hinh" >
            <?= $hinhpath?>
            <label>Giá</label>
            <input type="text" name="giasp" value="<?= $gia?>">

            <label>Chiều Cao</label>
            <input type="text" name="chieucao" value="<?= $chieucao?>">

            <label>Trọng Lượng </label>
            <input type="text" name="trongluong" value="<?=$trongluong?>">

            <label>Chất Liệu</label>
            <input type="text" name="chatlieu" value="<?= $chatlieu?>">

            <label>Tình Trạng </label>
            <input type="text" name="tinhtrang" value="<?= $tinhtrang?>">

            <label>Mô tả</label>
            <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>

            <label for="">Mục Đích</label>
            <input type="text" name="mucdich" value="<?= $mucdich?>">

            <label for="">Nơi Sản Xuất </label>
            <input type="text" name="noisx" value="<?= $noisx?>">
            Danh mục <br>
            <select name="id_dm">
            <?php foreach($listdanhmuc as $danhmuc){ ?>
                <option <?php if($id_dm==$danhmuc['danhmuc_id']) {echo "selected";}?> value="<?=$danhmuc['danhmuc_id']?>">
                    <?=$danhmuc['dm_name']?>
                </option> 
            <?php } ?>
            </select> 
            <div class="sm">
              <input type="hidden" name="id_product" value="<?=$id_product?>">
              <input type="submit" name ="capnhat" value="CẬP NHẬT ">
              <input type="reset" value="NHẬP LẠI">
              <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if (isset($thongbao) && ($thongbao!="")) 
                  echo $thongbao;   
            ?>
          </form>
               
        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/scripts.js"></script>