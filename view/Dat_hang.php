<div class="container_dathang">
        <section class="navigation">
            <span> <img src="img/1-icon-3.jpg" alt="" width="30px" height="30px">Giỏ hàng ></span>
            <span><img src="img/th.jpg" alt="" width="25px" height="25px">Thông tin thanh toán ></span>
            <span><img src="img/th (1).jpg" alt=""  width="30px" height="30px">Hòa tất đặt hàng</span>
        </section>
             <h2>Đơn Hàng Của Bạn</h2>
        <table>
            <thead>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ACE</td>
                    <td>$25</td>
                    <td>
                        <input type="number" class="quantity-input" value="1" min="1">
                    </td>
                    <td>$25</td>
                    <td>
                        <span class="edit-btn" onclick="editOrder(this)">Sửa</span>
                        <span class="delete-btn" onclick="deleteOrder(this)">Xóa</span>
                    </td>
                </tr>
                <tr>
                    <td>Zoro</td>
                    <td>$40</td>
                    <td>
                        <input type="number" class="quantity-input" value="1" min="1">
                    </td>
                    <td>$40</td>
                    <td>
                        <span class="edit-btn" onclick="editOrder(this)">Sửa</span>
                        <span class="delete-btn" onclick="deleteOrder(this)">Xóa</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="thanhtoan">Tiến hành thanh toán</button>
    </div>