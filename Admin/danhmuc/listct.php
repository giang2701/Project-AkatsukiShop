<main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">Danh Mục Chi Tiết</p>
          <!-- <a href="index.php?act=adddm"><button>Thêm danh mục</button></a> -->
          <a href="index.php?act=addct"><button>Thêm danh mục con</button></a>
        </div>    
        <section class="detail">
            <h4>Danh mục sản phẩm Chi tiết </h4>
            <section class="detail-item">
                <table >
                    <tr>
                      <td>#</td>
                      <td>Tên danh mục</td>
                      <td>Chức năng</td>
                    </tr>
                  <?php
                  $i=0;
                    foreach($listdmcon as $dmc){
                      extract($dmc);
                      $suadm='index.php?act=suadmct&iddmct='.$id;
                      $xoadm='index.php?act=xoadmct&iddmct='.$id;
                      echo'<tr>
                      <td>'.$id.'</td>
                      <td>'.$name.'</td>              
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