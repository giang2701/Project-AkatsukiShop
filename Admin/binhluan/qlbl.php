<div class="row formcontent">
    <div class="row mb10  headertiltle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row mb10 formtable">
        
        <table style="width: 1000px;">
            <tr>
                <td>ID bình luận</td>
                <td>Nội dung bình luận</td>
                <td>ID User</td>
                <td>ID sản phẩm</td>
                <td>Ngày đăng bình luận</td>
                <td>Hành động</td>
            </tr>
            
            <?php foreach($hienthibl as $k=> $v){
                extract($v);
                ?>

            <tr>
                <td><?php echo $binhluan_id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $users_id; ?></td>
                <td><?php echo $pro_id; ?></td>
                <td><?php echo $ngaybl; ?></td>
                <td><a href="index.php?act=xoabl&idbl=<?php echo $binhluan_id ?>">Xóa</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>