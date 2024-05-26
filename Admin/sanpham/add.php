
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
<main class="main-container">
        <p class="font-weight-bold">Thêm sản phẩm</p>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <label>Tên sản phẩm</label>
            <input type="text" name="tensp">
            
            <label>Hình</label>
            <input type="file" name="hinh">

            <label>Giá</label>
            <input type="text" name="giasp">

            <label>Chiều Cao</label>
            <input type="text" name="chieucao">

            <label>Trọng Lượng </label>
            <input type="text" name="trongluong">

            <label>Chất Liệu</label>
            <input type="text" name="chatlieu">

            <label>Tình Trạng </label>
            <input type="text" name="tinhtrang">

            <label>Mô tả</label>
            <textarea name="mota" cols="30" rows="10"></textarea>

            <label for="">Mục Đích</label>
            <input type="text" name="mucdich">

            <label for="">Nơi Sản Xuất </label>
            <input type="text" name="noisx">
            Danh mục <br>
            <select name="iddm">
            <?php
            foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$danhmuc_id.'">'.$dm_name.'</option>';
               }
            ?>
            </select>           
            <div class="sm">
                    <input type="submit" name ="themmoi" value="THÊM MỚI">
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