-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 10:16 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_nhom3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `binhluan_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `users_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `ngaybl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`binhluan_id`, `name`, `users_id`, `pro_id`, `ngaybl`) VALUES
(6, 'Hàng đẹp', 2, 1, '2023-11-16'),
(7, 'Hàng chất lượng', 7, 2, '2023-11-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `id_user`) VALUES
(2, 2),
(1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `price` int(50) NOT NULL,
  `Soluong` int(50) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `price`, `Soluong`, `id_pro`, `id_cart`) VALUES
(1, 300000, 4, 1, 1),
(2, 4000000, 1, 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `danhmuc_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`danhmuc_id`, `name`) VALUES
(1, 'Mô hình anime '),
(2, 'Tranh canvas '),
(3, 'Set decal dán tường anime');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_chitiet`
--

CREATE TABLE `danhmuc_chitiet` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_chitiet`
--

INSERT INTO `danhmuc_chitiet` (`id`, `name`, `id_danhmuc`) VALUES
(2, 'tranh canvas one piece', 2),
(3, 'Mô hình one piece', 1),
(4, ' set decal dán tường one piece', 3),
(5, 'set decal dán tường naruto', 3),
(6, 'Mô hình Naruto', 1),
(7, 'Tranh canvas Naruto', 2),
(8, 'Mô hình Dragon ball', 1),
(9, 'Tranh canvas Dragon ball', 2),
(10, 'decal dán tường Dragon ball', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang2`
--

CREATE TABLE `donhang2` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `tgian` date NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `id_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `username`, `pass`, `email`, `sdt`, `role`) VALUES
(2, 'nguyenvanduc', 'anhnhat2', 'ducnvph33354@fpt.edu.vn', '0353566957', 2),
(5, 'duong', '2004', 'duongph3352@fpt.edu.vn', '0385906406', 1),
(7, 'phamha', '13579', 'haphph@fpt.edu.vn', '0123456789', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `chieucao` varchar(200) NOT NULL,
  `trongluong` varchar(200) NOT NULL,
  `chatlieu` varchar(200) NOT NULL,
  `tinhtrang` varchar(200) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `mucdich` varchar(200) NOT NULL,
  `noisx` varchar(200) NOT NULL,
  `id_dm_chitiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name`, `anh`, `chieucao`, `trongluong`, `chatlieu`, `tinhtrang`, `mota`, `mucdich`, `noisx`, `id_dm_chitiet`) VALUES
(1, 'Mô Hình Marco dáng đứng hoá phượng siêu ngầu', '', 'Cao 34cm', 'nặng 800g ', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 3),
(2, 'Mô Hình Luffy gear 5 đu dây đeo kính ngôi sao', '', 'Cao 12cm', 'nặng 260g', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 3),
(3, 'Mô Hình Zoro cầm kiếm enma ngồi', '', 'Cao 14,5cm', 'nặng 520gr', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 3),
(4, 'Mô Hình Cữu Vĩ Kurama', '', 'Cao 16cm', 'nặng 1,6kg', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 6),
(5, 'Mô hình Sasuke chiến đấu siêu ngầu', '', 'Cao 18cm', 'nặng 200gr', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 6),
(6, 'Mô hình Itachi Akatsuki đế Hắc Hỏa có quạ tay cầm nón ', '', 'Cao 29cm', 'nặng 820gr', ' PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 6),
(7, 'tranh treo tường luffy', '', '40x60cm', '.', 'canvas', 'new', 'Với nhân vật Luffy trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường Luffy đang rất hot ở thời điểm hiện tại.\r\n\r\nChí', '.', 'Made in China', 2),
(8, 'Combo 2 Tranh Treo Tường Anime Luffy Vs Law', '', '40x60cm', '.', 'Canvas', 'new', 'Với nhân vật Luffy trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường anime luffy vs law đang rất hot ở thời điểm hiệ', '.', 'Made in China', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`role_id`, `name`) VALUES
(1, 'khachhang'),
(2, 'admin'),
(3, 'boss'),
(4, 'khach hang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `donhang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`binhluan_id`),
  ADD KEY `binhluan_ibfk_1` (`users_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cart` (`id_cart`),
  ADD KEY `cart_detail_ibfk_2` (`id_pro`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`);

--
-- Chỉ mục cho bảng `danhmuc_chitiet`
--
ALTER TABLE `danhmuc_chitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang2`
--
ALTER TABLE `donhang2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cart` (`id_cart`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_dm_chitiet` (`id_dm_chitiet`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id` (`donhang_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `binhluan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `danhmuc_chitiet`
--
ALTER TABLE `danhmuc_chitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang2`
--
ALTER TABLE `donhang2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `danhmuc_chitiet`
--
ALTER TABLE `danhmuc_chitiet`
  ADD CONSTRAINT `danhmuc_chitiet_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`danhmuc_id`);

--
-- Các ràng buộc cho bảng `donhang2`
--
ALTER TABLE `donhang2`
  ADD CONSTRAINT `donhang2_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `carts` (`id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`role_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_dm_chitiet`) REFERENCES `danhmuc_chitiet` (`id`);

--
-- Các ràng buộc cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD CONSTRAINT `tinhtrang_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang2` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
