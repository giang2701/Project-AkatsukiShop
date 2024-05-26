<div class="giohang">
    <table style=" width: 1400px;">
        <tr>
            <th></th>
            <th class="sanpham">Sản phẩm</th>
            <th class="dongia">Giá</th>
            <th class="soluong">Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>
        <?php
        if (isset($_SESSION['user'])) {
            if (isset($giohang)) {
                foreach ($giohang as $key => $value) {?>
                    <tr>
                        <td><img src="upload/<?php echo $value['anh']; ?>" alt="" width="80px" height="110px"></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><div class="gia"><?php echo $value['gia'];?></div></td>
                        <td>
                            <div class="tangsl">
                                <button name="giam" type="submit" class="giam-button">-</button>
                                <input name="soluonggiohang" class="giohangsl" style="height: 35px; font-size: 15px; font-weight: bold;" type="text" value="<?php echo $value['Soluong']; ?>" readonly>
                                <button name="tang" type="submit" class="tang-button" style="margin-left: 0px;">+</button>
                            </div>
                        </td>
                        <td><input class="tinh_tien" type="text" value="<?php echo $value['gia'] * $value['Soluong']; ?>" readonly></td>
                        <td>
                            <form class="xoagiohang" action="index.php?act=cart" method="post">
                                <button name="idsp" type="submit" value="<?php echo $value['id']; ?>">Xóa</button>
                            </form>
                        </td>
                    </tr>
                <?php }} }?>
    </table>
    

    <form class="khung_thanhtoan" action="index.php?act=thongtindonhang" method="post">
        <?php 
            if (isset($listgh)) {?>
            <div class="thanhtoan" style="box-shadow: 1px 1px 5px gray; margin-left: 60px; width: 1400px; display: flex; height: 80px;padding-top: 20px; font-size: 30px; justify-content: space-between;">
                <div class="tong-gia" style="margin-left: 30px; font-weight: bold;">Tổng: <input name="tonggia_gh" class="tonggia" value="0" style="height: 35px; font-size: 20px; font-weight: bold; color: red;"></div>
                <br>
                <button name="thanhtoan_gh" style="margin-right: 30px;" class="buy_sp" type="submit" value="<?php echo $listgh['id'] ?>"><a style="text-decoration: none;color: white;" href="index.php?act=thongtindonhang&idgh=<?php echo $listgh['id'] ?>">THANH TOÁN</a></button>
            </div>
        <?php }?>
    </form>
</div>

<script>
    // JavaScript
    var tangButtons = document.querySelectorAll(".tang-button");
    var giamButtons = document.querySelectorAll(".giam-button");
    var giohangslInputs = document.querySelectorAll(".giohangsl");
    var tinh_tienInputs = document.querySelectorAll(".tinh_tien");
    var giaInputs = document.querySelectorAll(".gia");
    var tongGia = document.querySelector(".tong-gia input");

    // Khởi tạo biến tổng giá trị
    var tongGiaTri = 0;

    // Lặp qua từng hàng trong giỏ hàng
    for (var i = 0; i < tangButtons.length; i++) {
        tangButtons[i].addEventListener("click", function() {
            var index = Array.from(tangButtons).indexOf(this);
            var sl = parseFloat(giohangslInputs[index].value);
            var gia_ca = parseFloat(giaInputs[index].innerHTML);

            sl++;
            giohangslInputs[index].value = sl;

            var tien_daylen = gia_ca * sl;
            tinh_tienInputs[index].value = tien_daylen;

            // Cập nhật tổng giá trị
            tongGiaTri = tinhTongGiaTri();
            updateTongGiaTri(tongGiaTri);
        });

        giamButtons[i].addEventListener("click", function() {
            var index = Array.from(giamButtons).indexOf(this);
            var sl = parseFloat(giohangslInputs[index].value);
            var gia_ca = parseFloat(giaInputs[index].innerHTML);

            if (sl > 1) {
                sl--;
                giohangslInputs[index].value = sl;

                var tien_daylen = gia_ca * sl;
                tinh_tienInputs[index].value = tien_daylen;

                // Cập nhật tổng giá trị
                tongGiaTri = tinhTongGiaTri();
                updateTongGiaTri(tongGiaTri);
            }
        });
    }

    // Tính tổng giá trị
    function tinhTongGiaTri() {
        var total = 0;
        for (var i = 0; i < tinh_tienInputs.length; i++) {
            total += parseFloat(tinh_tienInputs[i].value);
        }
        return total;
    }

    // Ban đầu, tính tổng giá trị và hiển thị nó
    var tongGiaTriBanDau = tinhTongGiaTri();
    updateTongGiaTri(tongGiaTriBanDau);

    // Cập nhật tổng giá trị
    function updateTongGiaTri(total) {
        // Sử dụng toLocaleString để định dạng số tiền
        tongGia.value = total.toLocaleString(undefined);
    }

</script>