<main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">Sản phẩm</p>
          <a href="index.php?act=adddm"><button>Thêm danh mục</button></a>
          <!-- <a href="index.php?act=adddm_con"><button>Thêm danh mục con</button></a> -->
        </div>
        <section class="detail">
            <h4>Danh mục sản phẩm</h4>
            <section class="detail-item">
                <table >
                    <tr>
                      <td>#</td>
                      <td>Tên danh mục</td>
                      <td>Chức năng</td>
                    </tr>
                  <?php
                  $i=0;
                    foreach($listdanhmuc as $dm){
                      extract($dm);
                      $i+=1;
                      $suadm='index.php?act=suadm&iddm='.$danhmuc_id;
                      $xoadm='index.php?act=xoadm&iddm='.$danhmuc_id;
                      echo'<tr>
                      <td>'.$danhmuc_id.'</td>
                      <td>'.$dm_name.'</td>              
                      <td>
                        <a href="'.$suadm.'"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="'.$xoadm.'"><i class="fa-solid fa-trash"></i></a>
                      </td>
                    </tr>';
                    }
                  ?>  
                </table>
                
            </section>

        </section>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/scripts.js"></script>