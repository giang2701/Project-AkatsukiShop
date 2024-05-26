<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<div class="bieudo" style="width:100%;color: white; align-items: center;">
    <div class="row2 font_title" >
        <h2 style="font-size: 20px; color: red; "> THỐNG KÊ KHÁCH HÀNG ĐÃ MUA</h2>
    </div>
    <div class="row2orm_bieudothongke" style="width:100%;color: white; align-items: center;">
    <div id="myChart" style="width:1000px;color: white;height:550px; align-items: center;">
            <script>
                google.charts.load('current', {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Tên');
                    data.addColumn('number', 'TÊN KHÁCH HÀNG');

                    data.addRows([
                        <?php
                            foreach ($listkhachhangmuanhieunhat as $thongke) {
                                extract($thongke);
                                echo "['Tên : $username', $total_purchased],";
                            }
                        ?>
                    ]);
                    var options = {
                        title: 'BIỂU ĐỒ THỂ HIỆN KHÁCH HÀNG MUA NHIỀU NHẤT',
                        backgroundColor: '',  // Màu nền
                        titleTextStyle: {
                            color: ''  // Màu chữ của tiêu đề
                        },
                        legendTextStyle: {
                            color: 'red'  // Màu chữ của chú giải
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
    </div>
</div>


