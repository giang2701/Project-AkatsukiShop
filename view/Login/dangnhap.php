<!----------------------------------MAIN-------------------------------------------------->
<div class="ThongBao">
    <?php 
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
    }?>
</div>
<main class="log_in">
           
            <h1>Đăng Nhập Tài Khoản</h1>
            <div class="form_log_in">
                <form action="index.php?act=dangnhap" method="POST">
                    <p>Email:</p>
                    <input type="text" name="email" id="" placeholder="Nhập email của bạn...."><br>
                    <p>Pass:</p>
                    <input type="text" name="pass" id="" placeholder="Create Password">
                    <div class="registration_button_log_in">
                        <input type="submit" value="Đăng Nhập" name="dangnhap">
                    </div>
                    <div class="policy_log_in">
                        <a href="index.php?act=Quenmk">Quên Mật Khẩu</a><br><br>
                        <span>-Hoặc-</span><br><br>
                    </div>
                    <div class="login_navigation">
                        <p>Chưa có tài khoản?<a href="index.php?act=dangki">Tạo một tài khoản mới</a></p>
                    </div>

                </form>
                
                
            </div>
        </main>