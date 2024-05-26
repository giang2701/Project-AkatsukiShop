
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

        <p class="font-weight-bold">Thêm Tài Khoản </p>
        <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">
            <label>Tên Tài khoản</label>
            <input type="text" name="username">
            
            <label>Pass</label>
            <input type="text" name="pass">

            <label>Email</label>
            <input type="text" name="email">

            <label>SDT</label>
            <input type="text" name="sdt">
            Chức vụ<br>
            <select name="role">
            <?php
            foreach($listrole as $listrole){
                extract($listrole);
                echo '<option value="'.$role_id.'">'.$name.'</option>';
               }
            ?>

            </select>           
            <div class="sm">
                    <input type="submit" name ="capnhat" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listtk"><input type="button" value="DANH SÁCH"></a>
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