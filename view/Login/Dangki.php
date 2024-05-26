<!----------------------------------MAIN-------------------------------------------------->
<main class="register">
            <h1>Đăng Kí Tài Khoản </h1>
            <div class="form_register">
                <form action="index.php?act=dangki" method="POST">
                    <p>Tên đăng nhập:</p>
                    <input type="text" name="user" id="" placeholder="Nhập Tên........"><br>
                    <p>Email:</p>
                    <input type="text" name="email" id="" placeholder="Nhập email của bạn...."><br>
                    <p>Pass:</p>
                    <input type="text" name="pass" id="" >
                    <div class="policy">
                        <p>Bằng cách nhập vào , bạn xác nhận đã đọc và chấp nhận<br> chính sách và quyền riêng tư </p>
                    </div>
                    <div class="registration_button">
                        <input type="submit" value="Đăng kí" name="dangki">
                    </div>
                    <div class="login_navigation">
                        <p>Bạn đã có tài khoản?<a href="">Đăng Nhập</a></p>
                    </div>
                </form>
                <?php
                    if(isset($thongbao)&&($thongbao !="")){
                        echo $thongbao;
                    }
                ?>
            </div>
        </main>