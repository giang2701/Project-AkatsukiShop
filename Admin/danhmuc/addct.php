<main class="main-container">
<section class="detail">
        <p class="font-weight-bold">Thêm Danh mục</p>
        <form action="" method="POST">
            <label for="">Tên danh mục chi tiết </label>
            <input type="text" placeholder="Tên danh mục..." name="name_ct">
            <span>Danh mục </span>
            <select name="id_danhmuc">
                
            <option value="0">Tất cả</option>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$danhmuc_id.'">'.$name.'</option>';
                    }
                ?>
            </select>
            <div class="sm">
                <input  type="submit" name="themmoi" value="THÊM MỚI">
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