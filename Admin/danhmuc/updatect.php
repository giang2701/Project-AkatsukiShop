<?php
    if (is_array($dmct)) {
        extract($dmct);
    }
?>
<main class="main-container">
<section class="detail">
        <p class="font-weight-bold">Thêm Danh mục</p>
        <form action="index.php?act=Updatedmct" method="POST">
            <label for="">Tên danh mục</label>
            <input type="text" placeholder="Tên danh mục..." name="name_ct" value="<?=$name?>">
            <select name="id_danhmuc">
            <option value="0">Tất cả</option>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($id_danhmuc == $danhmuc_id){
                            echo '<option value="'.$danhmuc_id.'" selected>'.$name.'</option>';
                        }else{
                        echo '<option value="'.$danhmuc_id.'">'.$name.'</option>';
                        }
                    }
                ?>
            </select>
            <div class="sm">
                <input type="hidden" name="iddmct" value="<?=$id?>">
                <input  type="submit" name="capnhat" value="CẬP NHẬT">
                <a href="index.php?act=listct"><input type="button" value="DANH SÁCH"></a>
            </div>
        </form>
            <div class="main-cards">
        <?php
            if (isset($thongbao)) {
                echo $thongbao;
            }
        ?>
        </div>
    </section>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/scripts.js"></script>
    