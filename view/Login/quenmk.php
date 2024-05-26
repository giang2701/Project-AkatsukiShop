<main class="log_in_quenmk">
    <h1>Quên mật khẩu</h1>
    <div class="form_log_in">
        <form action="index.php?act=Quenmk" method="POST">
            <p>Email:</p>
            <input type="text" name="email" id="" placeholder="Nhập email của bạn...."><br>
            <div class="registration_button_log_in">
                <input type="submit" value="Gửi" name="guiemail">
            </div>
        </form>
        <div class="ThongBao_email">
            <?php 
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
            }?>
        </div>
    </div>
</main>