-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 04:55 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

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
(6, 'Hàng đẹp', 2, 21, '2023-11-16'),
(7, 'Hàng chất lượng', 7, 22, '2023-11-16');

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
(1, 5),
(3, 11),
(4, 12),
(5, 14),
(6, 15),
(7, 16),
(8, 17),
(9, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `Soluong` int(50) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_cart` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `Soluong`, `id_pro`, `id_cart`) VALUES
(1, 6, 21, 1),
(20, 33, 22, 1),
(25, 11, 27, 1),
(29, 35, 26, 1),
(30, 1, 28, 1),
(31, 8, 24, 5),
(32, 5, 23, 5),
(33, 2, 29, 1),
(34, 3, 25, 1),
(35, 1, 22, 6),
(36, 2, 21, 6),
(37, 3, 26, 6),
(38, 2, 27, 6),
(39, 13, 22, 7),
(40, 1, 23, 7),
(41, 2, 21, 7),
(42, 6, 27, 7),
(43, 11, 26, 8),
(44, 1, 27, 8),
(45, 5, 28, 8),
(46, 2, 23, 9),
(47, 1, 24, 9),
(48, 1, 22, 9),
(49, 2, 26, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `danhmuc_id` int(11) NOT NULL,
  `dm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`danhmuc_id`, `dm_name`) VALUES
(1, 'Mô hình anime '),
(2, 'Tranh canvas '),
(3, 'Set decal dán tường anime');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang2`
--

CREATE TABLE `donhang2` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `tgian` date NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `kieu_thanhtoan` int(11) NOT NULL,
  `thongtinbosung` text DEFAULT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_cart` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang2`
--

INSERT INTO `donhang2` (`id`, `price`, `tgian`, `diachi`, `kieu_thanhtoan`, `thongtinbosung`, `tinhtrang`, `id_cart`, `id_user`) VALUES
(1, 300000, '2023-11-17', 'FPT Polytechnic', 1, '', 3, 1, 17),
(2, 888888, '2023-11-17', 'FPT Polytechnic', 1, '', 1, 2, 17),
(3, 30000000, '2023-11-17', 'FPT Polytechnic', 1, '', 1, 1, 16),
(4, 13500000, '2023-11-24', 'Thái Bình', 1, 'dcvdscvds', 3, 1, 15),
(5, 13500000, '2023-11-24', 'Hà Nội', 1, 'dcdscv', 3, 1, 14),
(14, 150000, '2023-11-24', 'Thái Bình', 1, 'dghfghnfg', 2, NULL, 13),
(15, 150000, '2023-11-24', 'Thái Bình', 1, 'dghfghnfg', 3, NULL, 12),
(16, 150000, '2023-11-24', 'Hà Nội', 1, 'ukiukl,', 3, NULL, 11),
(17, 150000, '2023-11-29', 'allloo', 1, 'ádfasdas', 2, NULL, 18),
(18, 450000, '2023-11-29', 'Thái Bình', 1, '....', 3, 9, 18),
(19, 600000, '2023-10-03', 'allloo', 1, 'hgjghjgh', 3, 9, 18),
(20, 150000, '2023-11-29', 'Thái Bình', 1, 'hrty5hythty', 3, NULL, 18),
(21, 600000, '2023-11-29', 'Hôm nay rất buồn', 1, 'Hello', 3, 9, 18),
(22, 600000, '2023-11-29', 'Hôm nay rất buồn', 1, 'Hello', 3, 9, 18),
(28, 150000, '2023-11-30', 'Thái Bình', 1, 'jtty', 2, NULL, 18),
(29, 150000, '2023-12-01', 'Thái Bình', 1, 'jtty', 3, NULL, 18),
(30, 150000, '2023-12-01', '', 1, '', 1, NULL, 18),
(31, 150000, '2023-12-01', 'Thái Bình', 1, 'GT6GQT2FGT2FQTFQRT', 1, NULL, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `username`, `pass`, `email`, `sdt`, `role`) VALUES
(2, 'nguyenvanduc', 'anhnhat2', 'ducnvph33354@fpt.edu.vn', '0353566957', 2),
(5, 'duong', '2004', 'duongnvph33352@gmail.com', '0385906406', 1),
(7, 'phamha', '13579', 'haphph@fpt.edu.vn', '0123456789', 4),
(9, 'Admin', '1234', 'vgiang2701@gmail.com', '22222', 0),
(10, 'Giang', '1234', 'abc@gmail.com', NULL, NULL),
(11, 'ducnv', '12345', 'nguyenduc07082004@gmail.com', NULL, 1),
(12, 'duc', 'anhnhat2', 'nguyenduc07082004@gmail.com', NULL, 1),
(13, 'duc', 'anhnhat2', 'nguyenduc07082004@gmail.com', NULL, 1),
(14, 'admin1', '2004', 'admin1.COM', NULL, 1),
(15, 'admin', 'Anhnhat1', 'VIETDUONG@GMAIL.COM', NULL, 1),
(16, 'admin1', 'PH33352', 'VIETDUONG@GMAIL.COM', NULL, 1),
(17, 'admin', '12345678', 'VIETDUONG@GMAIL.COM', NULL, 1),
(18, 'LuckyDuck', '2004', 'duongnvph33352@fpt.edu.vn', '0385906406', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kieuthanhtoan`
--

CREATE TABLE `kieuthanhtoan` (
  `id_kieu_tt` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `kieuthanhtoan`
--

INSERT INTO `kieuthanhtoan` (`id_kieu_tt`, `name`) VALUES
(1, 'Thanh toán khi nhận được hàng'),
(2, 'Thanh toán online');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `gia` int(100) NOT NULL,
  `chieucao` varchar(200) NOT NULL,
  `trongluong` varchar(200) NOT NULL,
  `chatlieu` varchar(200) NOT NULL,
  `tinhtrang` varchar(200) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `mucdich` varchar(200) NOT NULL,
  `noisx` varchar(200) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name`, `anh`, `gia`, `chieucao`, `trongluong`, `chatlieu`, `tinhtrang`, `mota`, `mucdich`, `noisx`, `id_dm`) VALUES
(21, 'Mô Hình Luffy gear 5 đu dây đeo kính ngôi sao', 'luffy.jpg', 150000, 'Cao 12cm', 'nặng 260g ', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(22, 'Mô Hình Marco dáng đứng hoá phượng siêu ngầu', 'Macco1.png', 150000, 'Cao 34cm', 'nặng 800g', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(23, 'Mô Hình Zoro cầm kiếm enma ngồi', 'Zoro enma.png', 150000, 'Cao 14,5cm', 'nặng 520gr ', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(24, 'Mô hình SonGoku bản năng vô cực có led', 'MUI.png', 150000, 'Cao 11cm', 'nặng 500gr', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(25, 'Mô Hình Vegeta ném cầu', 'vegeta.png', 150000, 'Cao 17cm', 'nặng 250gram', 'PVC', 'Còn mới', ' Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(26, 'Mô hình Goku bắn chưởng có led ', 'goku.png', 150000, 'Cao 14cm', 'nặng 450gr', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(27, 'Mô hình Sasuke chiến đấu siêu ngầu ', 'Sasuke.png', 150000, 'Cao 18cm', 'nặng 200gr', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(28, 'Mô Hình Cữu Vĩ Kurama', 'Kurama.png', 150000, 'Cao 16cm', 'nặng 1,6kg', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(29, 'Mô hình Cửu vỹ Jinchuriki siêu đẹp', 'naruto.png', 150000, 'Cao 20cm', 'nặng 1kg', 'PVC', 'Còn mới', 'Chất liệu cao cấp, chắc chắn, Màu sắc đẹp mắt, Các chi tiết được làm vô cùng tỉ mỉ', 'Mục đích: Trang trí văn phòng, bàn làm việc, sưu tầm, trưng bày, quà tặng,…', 'Hàng nội địa Trung Quốc', 1),
(30, '\r\nCombo 2 tranh treo tường anime luffy vs ace\r\n', 'Canvas One Piece.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Với nhân vật Luffy trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường anime luffy vs ace đang rất hot ở thời điểm hiệ', '', 'Made in China', 2),
(31, 'Combo 2 Tranh Treo Tường Anime Zoro', 'Canvas One Piece 3.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Với nhân vật Zoro trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường anime Zoro đang rất hot ở thời điểm hiện tại.\r\n\r', '', 'Made in China', 2),
(32, 'tranh treo tường luffy', 'Canvas One Piece 2.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Với nhân vật Luffy trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường Luffy đang rất hot ở thời điểm hiện tại.\r\n\r\nChí', '', 'Made in China', 2),
(33, 'Tranh canvas goku MUI', 'Canvas Dragon Ball.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Bảy viên ngọc rồng luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Dragon Ball là Son Goku – chiến binh Saiyan mạnh nhất', '', 'Made in China', 2),
(34, 'Tranh canvas goku ultra instinct', 'Canvas Dragon Ball 2.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Bảy viên ngọc rồng luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Dragon Ball là Son Goku – chiến binh Saiyan mạnh nhất', '', 'Made in China', 2),
(35, 'Tranh canvas goku ultra instinct sign', 'Canvas Dragon Ball 3.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Bảy viên ngọc rồng luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Dragon Ball là Son Goku – chiến binh Saiyan mạnh nhất', '', 'Made in China', 2),
(36, 'Tranh decal goku MUI', 'Canvas Dragon Ball.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Bảy viên ngọc rồng luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Dragon Ball là Son Goku – chiến binh Saiyan mạnh nhất', '', 'Made in China', 3),
(37, 'Tranh decal goku ultra instinct', 'Canvas Dragon Ball 2.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Bảy viên ngọc rồng luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Dragon Ball là Son Goku – chiến binh Saiyan mạnh nhất', '', 'Made in China', 3),
(38, 'Tranh decal goku ultra instinct sign', 'Canvas Dragon Ball 3.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Bảy viên ngọc rồng luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Dragon Ball là Son Goku – chiến binh Saiyan mạnh nhất', '', 'Made in China', 3),
(39, '\r\nTranh decal one piece Zoro\r\n', 'Decal dán tường one piece.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Với nhân vật Luffy trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường anime luffy vs ace đang rất hot ở thời điểm hiệ', '', 'Made in China', 3),
(40, 'Tranh decal one piece Ace', 'Decal dán tường one piece 2.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Với nhân vật Zoro trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường anime Zoro đang rất hot ở thời điểm hiện tại.\r\n\r', '', 'Made in China', 3),
(41, 'Tranh decal one piece Sanji', 'Decal dán tường one piece 3.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Với nhân vật Luffy trong Onepiece thì các bạn không còn lạ lẫm gì , ngoài ra còn rất nổi tiếng với rất nhiều giới trẻ hiện nay. Vậy thì tranh treo tường Luffy đang rất hot ở thời điểm hiện tại.\r\n\r\nChí', '', 'Made in China', 3),
(42, 'Tranh canvas Naruto Cửu Vĩ', 'Canvas Naruto (3).png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Naruto luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Naruto là Uzumaki Naruto – ninja đã cố gắng để đạt đc sự công nhận của mọi người', '', 'Made in China', 2),
(43, 'Tranh canvas Naruto', 'Canvas Naruto (2).png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Naruto luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Naruto là Uzumaki Naruto – ninja đã cố gắng để đạt đc sự công nhận của mọi người', '', 'Made in China', 2),
(44, 'Tranh canvas Naruto vs Sasuke', 'Canvas Naruto.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Naruto luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Naruto là Uzumaki Naruto – ninja đã cố gắng để đạt đc sự công nhận của mọi người', '', 'Made in China', 2),
(45, 'Tranh decal Naruto vs Sasuke', 'Decal dán tường Naruto 2.png', 150000, '40x60cm', '', 'Canvas', 'Còn mới', 'Naruto luôn là một bộ truyện manga nổi tiếng trên thế giới. Theo đó, một trong những nhân vật được yêu thích nhất trong Naruto là Uzumaki Naruto – ninja đã cố gắng để đạt đc sự công nhận của mọi người', '', 'Made in China', 3);

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
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`id`, `name`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã nhận hàng'),
(3, 'Đã hủy');

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
-- Chỉ mục cho bảng `donhang2`
--
ALTER TABLE `donhang2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cart` (`id_cart`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `tinhtrang` (`tinhtrang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kieuthanhtoan`
--
ALTER TABLE `kieuthanhtoan`
  ADD PRIMARY KEY (`id_kieu_tt`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_dm_chitiet` (`id_dm`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `donhang2`
--
ALTER TABLE `donhang2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `kieuthanhtoan`
--
ALTER TABLE `kieuthanhtoan`
  MODIFY `id_kieu_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `khachhang` (`id`);

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
-- Các ràng buộc cho bảng `donhang2`
--
ALTER TABLE `donhang2`
  ADD CONSTRAINT `donhang2_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `donhang2_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `donhang2_ibfk_3` FOREIGN KEY (`tinhtrang`) REFERENCES `tinhtrang` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`danhmuc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
