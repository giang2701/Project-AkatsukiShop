<!----------------------------------MAIN-------------------------------------------------->
<main class="register">
            <h1>Cập nhật Tài khoản</h1>
            <div class="form_register">
                <?php
                    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_tk" method="POST">
                    <p>Tên đăng nhập:</p>
                    <input type="text" name="user" id="" value="<?= $username?>"><br>
                    <p>Email:</p>
                    <input type="text" name="email" id="" value="<?= $email?>"><br>
                    <p>Pass:</p>
                    <input type="text" name="pass" id="" value="<?= $pass?>">
                    <p>SDT:</p>
                    <input type="text" name="sdt" id="" value="<?= $sdt?>">
                    <div class="registration_button">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                    </div>
                </form>
                <?php
                    if(isset($thongbao)&&($thongbao !="")){
                        echo $thongbao;
                    }
                ?>
            </div>
        </main>