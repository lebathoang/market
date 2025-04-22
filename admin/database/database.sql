-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 05:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Ho` varchar(51) NOT NULL,
  `Ten` varchar(51) NOT NULL,
  `Email` varchar(21) NOT NULL,
  `Matkhau` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Ho`, `Ten`, `Email`, `Matkhau`) VALUES
(1, 'le', 'bathoang', 'lebathoang123@gmail.c', '11771177'),
(2, 'le', 'trianh', 'letrianh234@gmail.com', '12345678'),
(3, 'pham', 'thanhhien', 'thanhhien345@gmail.co', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(51) NOT NULL,
  `Hinhanh` varchar(251) NOT NULL,
  `Gia` varchar(21) NOT NULL,
  `Soluong` varchar(11) NOT NULL,
  `Mota` varchar(251) NOT NULL,
  `LoaiSP` varchar(51) NOT NULL,
  `Danhmuc` varchar(51) NOT NULL,
  `Giamgia` varchar(11) NOT NULL,
  `Xuatxu` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MaSP`, `TenSP`, `Hinhanh`, `Gia`, `Soluong`, `Mota`, `LoaiSP`, `Danhmuc`, `Giamgia`, `Xuatxu`) VALUES
(1, 'Cùng Bé Yêu Khám Phá Rừng Xanh - Chúng Mình Đã Biết', 'https://cdn1.fahasa.com/media/catalog/product/9/7/9786047833627_2.jpg', '15', '99', 'Bộ sách gồm 5 quyển:\r\nTập 1: Chúng Mình Đã Biết Những Gì Về Loài Thỏ\r\nTập 2: Chúng Mình Đã Biết Những Gì Về Loài Rắn\r\nTập 3: Chúng Mình Đã Biết Những Gì Về Loài Gấu Trúc\r\nTập 4: Chúng Mình Đã Biết Những Gì Về Loài Sư Tử\r\nTập 5: Chúng Mình Đã Biết Nhữn', 'sách thiếu nhi', 'sách', '25', 'NXB Kim Đồng');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `Mahd` int(10) NOT NULL,
  `Makh` varchar(50) NOT NULL,
  `Ngaymua` date NOT NULL,
  `Tensp` varchar(50) NOT NULL,
  `Soluong` varchar(10) NOT NULL,
  `Gia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`Mahd`, `Makh`, `Ngaymua`, `Tensp`, `Soluong`, `Gia`) VALUES
(1, '23', '2025-04-17', 'Bút bi thiên long', '2', '15');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `Ho` varchar(50) NOT NULL,
  `Ten` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `Ho`, `Ten`, `Email`, `Matkhau`) VALUES
(1, 'Lê', ' Bật Hoàng', 'lebathoang1177@gmail.com', '11771177'),
(2, 'Nguyễn', 'Thị Mai Anh', 'maianh21@gmail.com', '12345678'),
(3, 'Lê ', 'Minh Anh', 'minhanh1123@gmail.com', '123@abc'),
(4, 'Lương ', 'Thùy Linh', 'thuylinh123@gmail.com', 'tttt1111');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `Hinhanh` varchar(250) NOT NULL,
  `Gia` varchar(30) NOT NULL,
  `Soluong` varchar(20) NOT NULL,
  `Mota` varchar(250) NOT NULL,
  `LoaiSP` varchar(50) NOT NULL,
  `Danhmuc` varchar(30) NOT NULL,
  `Giamgia` varchar(11) NOT NULL,
  `Xuatxu` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `Hinhanh`, `Gia`, `Soluong`, `Mota`, `LoaiSP`, `Danhmuc`, `Giamgia`, `Xuatxu`) VALUES
(1, ' Máy tính bỏ túi Casio FX-570VN Plus', 'https://st.meta.vn/Data/image/2020/02/14/may-tinh-bo-tui-casio-fx-570vn-plus-avar.jpg', '546', '12', 'Máy tính bỏ túi Casio FX-570VN Plus là dòng máy thế hệ mới, được nâng cấp và trang bị nhiều phần mềm thông minh, giúp rút gọn và giải quyết nhanh chóng những bài toán phức tạp như bất phương trình hay hệ bất phương trình bậc cao. Và nhờ tính năng hỗ ', 'máy tính', 'máy tính', '31', 'Casio'),
(2, 'Máy tính Casio FX-580VNX', 'https://st.meta.vn/Data/image/2020/07/27/may-tinh-khoa-hoc-casio-fx-580vn-x.png', '729', '11', 'Casio FX-580VNX là chiếc máy tính Casio được mang vào phòng thi, một \"siêu phẩm\" trong thế giới máy tính dành cho học sinh cấp 2, cấp 3, sinh viên. Casio 580 là bước tiến đột phá, mang đến tốc độ tính toán nhanh, giải quyết được những phép tính dài, ', 'máy tính', 'máy tính', '7', 'Casio'),
(3, 'Kìm bấm ghim gỗ Workpro WP223004 (dùng đinh U từ 4', 'https://st.meta.vn/Data/image/2024/06/14/kim-bam-ghim-go-workpro-wp223004-4.jpg', '450', '45', 'Workpro WP223004 sử dụng ghim bấm chữ U có kích thước là 4 - 14 mm. Kìm bấm ghim gỗ Workpro WP223004 được làm từ chất liệu chất lượng cao, cứng cấp, bền bỉ, chịu được áp lực. WP223004 sẽ giúp bạn ghim các tấm gỗ vào khung, đồ nội thất, tấm ván hoặc t', 'Kìm bấm', 'Dụng cụ cơ khí', '16', 'Trung quốc'),
(4, 'Bộ Sách Barbie Truyện Tranh Khổ Lớn (Bộ 4 Cuốn)', 'https://cdn1.fahasa.com/media/catalog/product/i/m/image_195509_1_42327.jpg', '152', '9', 'Merliah Summer là vận động viên lướt sóng hàng đầu tại Malibu. Một hôm, cô tình cờ biết được mình mang một nửa dòng máu tiên cá và mẹ cô là nữ hoàng Calissa của vương quốc Oceana dưới đáy biển sâu. Nhưng mẹ cô đang bị người chị ruột Eris xấu xa nhốt ', 'truyện tranh', 'sách', '30', 'NXB Kim Đồng'),
(5, 'Cùng Bé Yêu Khám Phá Rừng Xanh - Chúng Mình Đã Biế', 'https://cdn1.fahasa.com/media/catalog/product/9/7/9786047833627_2.jpg', '15', '99', 'Bộ sách gồm 5 quyển:\r\nTập 1: Chúng Mình Đã Biết Những Gì Về Loài Thỏ\r\nTập 2: Chúng Mình Đã Biết Những Gì Về Loài Rắn\r\nTập 3: Chúng Mình Đã Biết Những Gì Về Loài Gấu Trúc\r\nTập 4: Chúng Mình Đã Biết Những Gì Về Loài Sư Tử\r\nTập 5: Chúng Mình Đã Biết Nhữ', 'sách thiếu nhi', 'sách', '25', 'NXB Kim Đồng'),
(6, 'Bút Bi Flojet 3 Màu + Chì Bấm - Morning Glory 3230', 'https://cdn1.fahasa.com/media/catalog/product/8/8/8801237837153-mau2.jpg', '56', '145', 'Bút bi tiện lợi cho các bạn học sinh - sinh viên và nhân viên văn phòng sử dụng để ghi chép và lưu ý những đoạn văn bản cần sử dụng các màu mực khác nhau.\r\nBút bi gồm 3 ngòi với 3 màu mực: Đỏ, Đen, Xanh + 1 ngòi chì bấm tiện lợi.\r\nNgòi bị viết êm trơ', 'bút bi', 'bút', '25', 'Thiên Long'),
(7, 'Bút Mực Nước Hi-Tech V7 Cartridge System Pilot BXC', 'https://cdn1.fahasa.com/media/catalog/product/i/m/image_230319.jpg', '29', '155', 'Viết thoải mái và cho các nét viết chính xác nhờ mực màu rực rỡ.\r\nSản phẩm bơm lại tiết kiệm hơn và bảo vệ môi trường.\r\nĐược làm bằng 71,6% nhựa tái chế (không bao gồm hàng tiêu dùng), để giảm tác động của chúng ta đến môi trường.\r\nCho các nét viết c', 'bút mực', 'bút', '15', 'Thiên Long'),
(21, 'Truyện Tranh - Dragon Ball Super Trọn Bộ (1-20)', 'https://down-vn.img.susercontent.com/file/vn-11134207-7ra0g-m66in60mpeiga9@resize_w450_nl.webp', '671', '49', 'Dragon Ball Super với cốt truyện của tác giả Akira Toriyama và nét vẽ đầy mới mẻ của họa sĩ Toyotarou là phần tiếp nối của bộ truyện Dragon Ball, kể tiếp câu chuyện còn dang dở sau trận chiến với Ma Buu.    Sau khi Trái Đất lập lại hòa bình không lâu', 'truyện tranh', 'sách', '10', 'NXB Kim Đồng'),
(39, 'Cùng Bé Yêu Khám Phá Rừng Xanh - Chúng Mình Đã Biế', 'https://cdn1.fahasa.com/media/catalog/product/9/7/9786047833627_2.jpg', '15', '99', 'Bộ sách gồm 5 quyển:\r\nTập 1: Chúng Mình Đã Biết Những Gì Về Loài Thỏ\r\nTập 2: Chúng Mình Đã Biết Những Gì Về Loài Rắn\r\nTập 3: Chúng Mình Đã Biết Những Gì Về Loài Gấu Trúc\r\nTập 4: Chúng Mình Đã Biết Những Gì Về Loài Sư Tử\r\nTập 5: Chúng Mình Đã Biết Nhữ', 'sách thiếu nhi', 'sách', '25', 'NXB Kim Đồng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`Mahd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `Mahd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
