<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="bieudo" style="width:100%;color: white; align-items: center;">
    <div class="row2 font_title" >
        <h2 style="font-size: 20px; color: red; "> THỐNG KÊ ĐƠN HÀNG </h2>
    </div>
    <div class="row2orm_bieudothongke" style="width:100%;color: white; align-items: center;">
        <?php
        if (isset($ds_thongke_dh) && is_array($ds_thongke_dh)) {?>
        <div id="myChart" style="width:1000px;color: white;height:550px; align-items: center;">
            <script>
                google.charts.load('current', {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Tháng');
                    data.addColumn('number', 'SỐ LƯỢNG BÁN');

                    data.addRows([
                        <?php
                            foreach ($ds_thongke_dh as $thongke) {
                                extract($thongke);
                                echo "['Tháng $thang', $so_don_hang],";
                            }
                        ?>
                    ]);
                    var options = {
                        title: 'BIỂU ĐỒ THỂ HIỆN SỐ LƯỢNG ĐƠN HÀNG ĐÃ BÁN THEO THÁNG',
                        backgroundColor: '',  // Màu nền
                        titleTextStyle: {
                            color: ''  // Màu chữ của tiêu đề
                        },
                        legendTextStyle: {
                            color: ''  // Màu chữ của chú giải
                        },
                        pieSliceTextStyle: {
                            color: ''  // Màu chữ của từng phần trong biểu đồ tròn
                        }
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                }
            </script>
        </div>
        <?php } 
        else if(isset($thongke_dh_ngay) && is_array($thongke_dh_ngay)){?>
        <div id="myChart" style="width:1000px;color: white;height:550px; align-items: center;">
            <script>
                google.charts.load('current', {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Ngày');
                    data.addColumn('number', 'SỐ LƯỢNG BÁN');

                    data.addRows([
                        <?php
                            foreach ($thongke_dh_ngay as $thongke) {
                                extract($thongke);
                                echo "['Ngày $ngay', $so_don_hang],";
                            }
                        ?>
                    ]);

                    var options = {
                        title: 'BIỂU ĐỒ THỂ HIỆN SỐ LƯỢNG ĐƠN HÀNG ĐÃ BÁN THEO NGÀY',
                        backgroundColor: '',  // Màu nền
                        titleTextStyle: {
                            color: 'red'  // Màu chữ của tiêu đề
                        },
                        legendTextStyle: {
                            color: 'red'  // Màu chữ của chú giải
                        },
                        pieSliceTextStyle: {
                            color: 'red',  // Màu chữ của từng phần trong biểu đồ tròn
                            backgroundColor: 'red'
                        }
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('myChart'));
                    chart.draw(data, options);

                }
            </script>
        </div>
        <?php }
        else if(isset($thongke_dh_tuan) && is_array($thongke_dh_tuan)){?>
            <div id="myChart" style="width:1000px;color: white;height:550px; align-items: center;">
                <script>
                    google.charts.load('current', {packages: ['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
        
                    function drawChart() {
                        var data = new google.visualization.DataTable();
                        data.addColumn('string', 'Tuần');
                        data.addColumn('number', 'SỐ LƯỢNG BÁN');
        
                        data.addRows([
                            <?php
                                foreach ($thongke_dh_tuan as $thongke) {
                                    extract($thongke);
                                    echo "['Tuần $khoang_thoi_gian', $so_don_hang],";
                                }
                            ?>
                        ]);
        
                        var options = {
                            title: 'BIỂU ĐỒ THỂ HIỆN SỐ LƯỢNG ĐƠN HÀNG ĐÃ BÁN THEO TUẦN',
                            backgroundColor: '',  // Màu nền
                            titleTextStyle: {
                                color: 'chocolate'  // Màu chữ của tiêu đề
                            },
                            legendTextStyle: {
                                color: 'chocolate'  // Màu chữ của chú giải
                            },
                            pieSliceTextStyle: {
                                color: 'chocolate'  // Màu chữ của từng phần trong biểu đồ tròn
                            }
                        };
        
                        var chart = new google.visualization.ColumnChart(document.getElementById('myChart'));
                        chart.draw(data, options);
                    }
                </script>
        </div>
        <?php }?>
    </div>
    <div class="type_thongke_donhang" style="display: flex;justify-content: space-around;align-items: center;width: 800px;margin-top: 20px;">
        <div class="type_list">
          <a class="type" href="index.php?act=thongke_dh&type=day" style="background-color: red;height: 35px;width: 100px;display: flex;justify-content: center;align-items: center;text-decoration: none;color: white;">Theo ngày</a>
        </div>

        <div class="type_list">
          <a class="type" href="index.php?act=thongke_dh&type=week" style="background-color: red;height: 35px;width: 100px;display: flex;justify-content: center;align-items: center;text-decoration: none;color: white;">Theo tuần</a>
        </div>

        <div class="type_list">
          <a class="type" href="index.php?act=thongke_dh&type=month" style="background-color: red;height: 35px;width: 100px;display: flex;justify-content: center;align-items: center;text-decoration: none;color: white;">Theo tháng</a>
        </div>
    </div>
</div>


