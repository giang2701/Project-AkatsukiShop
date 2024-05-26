        <!---------------------------------FOOTER---------------------------------------------------->
        <!-- code nút gọi dán vào web. Thường là footer -->
        <div class="fix_tel">
            <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
            <div class="ring-alo-ph-circle"></div>
            <div class="ring-alo-ph-circle-fill"></div>
            <div class="ring-alo-ph-img-circle">
            <a href="https://www.facebook.com/profile.php?id=100095392924455"><i class="fa-brands fa-facebook-messenger" style="font-size: 30px; color: white;"></i></a>
            </div>
            </div>
            <div class="tel">
            <!-- <a href="tel:0903172969"><p class="fone">Liên hệ với chúng tôi</p></a> -->
            </div>
        </div>
        <footer class="footer_container">
            <section class="footer_colum1">
                <img src="img/logo.jpg" alt="">
                <p>FPT Phổ Trịnh Văn Bộ, Xuân Phương.<br> Nam Từ Liêm, Hà Nội.</p>
                <p>+84 385137427</p>
                <p>ShopAkuttshi27@gmail.com</p>
            </section>
            <section class="footer_colum2">
                <h2>Liên kết Hữu ích</h2>
                <a href=""><p>Về chúng tôi</p></a>
                <a href=""><p>Chính sách đổi trả</p></a>
            </section>
            <section class="footer_colum3">
                <h2>Kết nối với mô hình</h2>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/Shop_Akuttshi"><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook-messenger"></i></a>
                <img src="img/img_banner/banner_3.png" alt="" height="100px" width="300px">
            </section>
        </footer>
    </div>
    <script src="js.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toggleSelectButton = document.getElementById('toggleSelectButton');
            var itemCheckboxes = document.querySelectorAll('.itemCheckbox');
        toggleSelectButton.addEventListener('click', function () {
        itemCheckboxes.forEach(function (checkbox) {
          checkbox.checked = !checkbox.checked;
        });
      });
    });
    </script>
</body>

</html>