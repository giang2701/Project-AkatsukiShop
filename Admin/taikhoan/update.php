
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
    if(is_array($tk)){
        extract($tk);
    }
?>
<main class="main-container">

        <p class="font-weight-bold">Edit Account</p>
        <form action="index.php?act=update_tk" method="post" enctype="multipart/form-data">
            <label>Tên Tài khoản</label>
            <input type="text" name="username" value="<?= $username?>">
            
            <label>Pass</label>
            <input type="text" name="pass" value="<?= $pass?>">

            <label>Email</label>
            <input type="text" name="email" value="<?= $email?>">

            <label>SDT</label>
            <input type="text" name="sdt" value="<?= $sdt?>">
            Chức vụ<br>
            <select name="role">
            <?php foreach($listrole as $listrole){ ?>
                <option <?php if($role==$listrole['role_id']) {echo "selected";}?> value="<?=$listrole['role_id']?>">
                    <?=$listrole['name']?>
                </option> 
            <?php }?>

            </select>           
            <div class="sm">
              <input type="hidden" name="id" value="<?=$id?>">
              <input type="submit" name ="capnhat" value="CẬP NHẬT ">
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