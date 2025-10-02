-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2025 at 05:11 PM
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
(3, 'pham', 'thanhhien', 'thanhhien345@gmail.co', '98765432');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(51) NOT NULL,
  `Mota` varchar(350) NOT NULL,
  `Soluong` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `Mota`, `Soluong`) VALUES
(1, 'Máy tính', 'Các loại máy tính', '23'),
(2, 'Dụng cụ cơ khí', 'Các loại dụng cụ cơ khí loại nhỏ', '5'),
(3, 'Sách', 'Các loại sách', '45'),
(4, 'Bút', 'Bút cho mọi loại lứa tuổi', '8'),
(5, 'Vở', 'Vở cho tất cả các lứa tuổi', '7'),
(6, 'Bảng', 'Bảng cho học sinh mẫu giáo', '23'),
(8, 'Giấy', 'Các loại giấy với đầy đủ kích cỡ', '5');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(51) NOT NULL,
  `Hinhanh` varchar(251) NOT NULL,
  `Gia` double NOT NULL,
  `Soluong` varchar(11) NOT NULL,
  `Mota` varchar(251) NOT NULL,
  `LoaiSP` varchar(51) NOT NULL,
  `Danhmuc` varchar(51) NOT NULL,
  `Giamgia` float NOT NULL,
  `Xuatxu` varchar(51) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MaSP`, `TenSP`, `Hinhanh`, `Gia`, `Soluong`, `Mota`, `LoaiSP`, `Danhmuc`, `Giamgia`, `Xuatxu`, `quantity`) VALUES
(40, 'Bút Chì Gỗ HB Stabilo PC4905', 'https://cdn1.fahasa.com/media/catalog/product/4/0/4006381139038.jpg', 15000, '56', '', 'Bút Chì Gỗ', 'Bút', 15, 'Việt Nam', 1),
(49, 'Giấy Photo A3 100gsm (10 Tờ/Xấp) {         echo \"V', 'https://cdn1.fahasa.com/media/catalog/product/8/9/8934986003590.jpg', 9999, '99', '', 'Giấy A3', 'Giấy', 20, 'Việt Nam', 1),
(50, 'Ghim Mũ Inox Deli - 0022', 'https://cdn1.fahasa.com/media/catalog/product/6/9/6921734900227_1_.jpg', 15725, '78', '', 'Ghim ', 'Dụng cụ', 15, 'Trung Quốc', 2);

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
  `Sdt` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `Ho`, `Ten`, `Sdt`, `Email`, `Matkhau`) VALUES
(1, 'Lê', ' Bật Hoàng', '0969666999', 'lebathoang1177@gmail.com', '11771177'),
(2, 'Nguyễn', 'Thị Mai Anh', '0532416777', 'maianh21@gmail.com', '12345678'),
(3, 'Lê ', 'Minh Anh', '0324586791', 'minhanh1123@gmail.com', '123@abc'),
(4, 'Lương ', 'Thùy Linh', '098765432', 'thuylinh123@gmail.com', 'tttt1111'),
(5, 'Nguyễn', 'Thùy Trâm', '0123456789', 'thuytram1102@gmail.com', '12345678'),
(6, 'Trần', 'Minh Hiếu', '0342581796', 'minhhieu@gmail.com', 'minhhieu123');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `Hinhanh` varchar(250) NOT NULL,
  `Gia` double NOT NULL,
  `Soluong` varchar(20) NOT NULL,
  `Mota` varchar(650) NOT NULL,
  `LoaiSP` varchar(50) NOT NULL,
  `Danhmuc` varchar(30) NOT NULL,
  `Giamgia` float NOT NULL,
  `Xuatxu` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `Hinhanh`, `Gia`, `Soluong`, `Mota`, `LoaiSP`, `Danhmuc`, `Giamgia`, `Xuatxu`) VALUES
(1, ' Máy tính bỏ túi Casio FX-570VN Plus', 'https://st.meta.vn/Data/image/2020/02/14/may-tinh-bo-tui-casio-fx-570vn-plus-avar.jpg', 546600, '12', 'Máy tính bỏ túi Casio FX-570VN Plus là dòng máy thế hệ mới, được nâng cấp và trang bị nhiều phần mềm thông minh, giúp rút gọn và giải quyết nhanh chóng những bài toán phức tạp như bất phương trình hay hệ bất phương trình bậc cao. Và nhờ tính năng hỗ ', 'máy tính', 'máy tính', 31, 'Casio'),
(2, 'Máy tính Casio FX-580VNX', 'https://st.meta.vn/Data/image/2020/07/27/may-tinh-khoa-hoc-casio-fx-580vn-x.png', 729000, '11', 'Casio FX-580VNX là chiếc máy tính Casio được mang vào phòng thi, một \"siêu phẩm\" trong thế giới máy tính dành cho học sinh cấp 2, cấp 3, sinh viên. Casio 580 là bước tiến đột phá, mang đến tốc độ tính toán nhanh, giải quyết được những phép tính dài, ', 'máy tính', 'máy tính', 7, 'Casio'),
(3, 'Kìm bấm ghim gỗ Workpro WP223004', 'https://st.meta.vn/Data/image/2024/06/14/kim-bam-ghim-go-workpro-wp223004-4.jpg', 452525, '45', 'Workpro WP223004 sử dụng ghim bấm chữ U có kích thước là 4 - 14 mm. Kìm bấm ghim gỗ Workpro WP223004 được làm từ chất liệu chất lượng cao, cứng cấp, bền bỉ, chịu được áp lực. WP223004 sẽ giúp bạn ghim các tấm gỗ vào khung, đồ nội thất, tấm ván hoặc t', 'Kìm bấm', 'Dụng cụ', 16, 'Trung quốc'),
(4, 'Bộ Sách Barbie Truyện Tranh Khổ Lớn (Bộ 4 Cuốn)', 'https://cdn1.fahasa.com/media/catalog/product/i/m/image_195509_1_42327.jpg', 152000, '9', 'Merliah Summer là vận động viên lướt sóng hàng đầu tại Malibu. Một hôm, cô tình cờ biết được mình mang một nửa dòng máu tiên cá và mẹ cô là nữ hoàng Calissa của vương quốc Oceana dưới đáy biển sâu. Nhưng mẹ cô đang bị người chị ruột Eris xấu xa nhốt ', 'sách', 'sách', 30, 'NXB Kim Đồng'),
(5, 'Cùng Bé Yêu Khám Phá Rừng Xanh', 'https://cdn1.fahasa.com/media/catalog/product/9/7/9786047833627_2.jpg', 15999, '99', 'Bộ sách gồm 5 quyển:\r\nTập 1: Chúng Mình Đã Biết Những Gì Về Loài Thỏ\r\nTập 2: Chúng Mình Đã Biết Những Gì Về Loài Rắn\r\nTập 3: Chúng Mình Đã Biết Những Gì Về Loài Gấu Trúc\r\nTập 4: Chúng Mình Đã Biết Những Gì Về Loài Sư Tử\r\nTập 5: Chúng Mình Đã Biết Nhữ', 'sách', 'sách', 25, 'NXB Kim Đồng'),
(6, 'Bút Bi Flojet 3 Màu + Chì Bấm - Morning Glory 3230', 'https://cdn1.fahasa.com/media/catalog/product/8/8/8801237837153-mau2.jpg', 56425, '145', 'Bút bi tiện lợi cho các bạn học sinh - sinh viên và nhân viên văn phòng sử dụng để ghi chép và lưu ý những đoạn văn bản cần sử dụng các màu mực khác nhau.\r\nBút bi gồm 3 ngòi với 3 màu mực: Đỏ, Đen, Xanh + 1 ngòi chì bấm tiện lợi.\r\nNgòi bị viết êm trơ', 'bút bi', 'bút', 25, 'Thiên Long'),
(7, 'Bút Mực Nước Hi-Tech V7 Cartridge System Pilot BXC', 'https://cdn1.fahasa.com/media/catalog/product/i/m/image_230319.jpg', 29550, '155', 'Viết thoải mái và cho các nét viết chính xác nhờ mực màu rực rỡ.\r\nSản phẩm bơm lại tiết kiệm hơn và bảo vệ môi trường.\r\nĐược làm bằng 71,6% nhựa tái chế (không bao gồm hàng tiêu dùng), để giảm tác động của chúng ta đến môi trường.\r\nCho các nét viết c', 'bút mực', 'bút', 15, 'Thiên Long'),
(21, 'Truyện Tranh - Dragon Ball Super Trọn Bộ (1-20)', 'https://down-vn.img.susercontent.com/file/vn-11134207-7ra0g-m66in60mpeiga9@resize_w450_nl.webp', 671990, '49', 'Sau thành công vang dội của Dragon Ball và Dragon Ball Z, Dragon Ball Super chính là chương mới đầy hấp dẫn trong hành trình phiêu lưu bất tận của Son Goku và các chiến binh Z. Bộ truyện tiếp nối sau trận chiến với Majin Buu, khi Trái Đất tạm thời yên bình – nhưng đó chỉ là sự khởi đầu cho những thử thách còn lớn hơn!\\r\\nTrọn Bộ 20 Tập này đưa bạn đến với:\\r\\nCuộc gặp gỡ định mệnh với Thần Hủy Diệt Beerus\\r\\nGiải đấu xuyên vũ trụ đầy kịch tính giữa vũ trụ thứ 6 và thứ 7\\r\\nSự trở lại rùng rợn của Zamasu và Goku Black\\r\\nGiải đấu quyền lực – nơi sinh tồn của cả một vũ trụ đặt trên đôi vai của Goku và đồng đội!', 'truyện tranh', 'sách', 10, 'NXB Kim Đồng'),
(40, 'Bút Chì Gỗ HB Stabilo PC4905', 'https://cdn1.fahasa.com/media/catalog/product/4/0/4006381139038.jpg', 15000, '56', 'Bút Chì Gỗ HB Stabilo PC4905 là loại bút chì gỗ cao cấp của thương hiệu Stabilo, phù hợp cho nhiều đối tượng sử dụng như học sinh, sinh viên, kiến trúc sư, nghệ sĩ... Bút được thiết kế nhỏ gọn, cho bạn dễ dàng cầm nắm và điều chỉnh nét vẽ, đồng thời bút còn dễ cất giữ trong bóp sau khi sử dụng. Bề mặt bút khắc tên thương hiệu, dòng bút, độ HB giúp bạn nắm được những thông tin cơ bản của bút.  Gỗ nhẹ chống sốc, bảo vệ ruột chì khó gãy khi rơi  Bút sử dụng loại nhẹ chống sốc tốt, bảo vệ ruột chì, hạn chế tối đa tình trạng gãy chì khi rơi. Khi sử dụng, ngòi không bị gãy vụn, ít hao, dễ xóa sạch bằng gôm, đặc biệt hạn chế làm bẩn tay và quần áo. ', 'Bút Chì Gỗ', 'Bút', 15, 'Việt Nam'),
(47, 'Bảng Học Sinh 2 Mặt', 'https://cdn1.fahasa.com/media/catalog/product/8/9/8935324016333.jpg', 47990, '117', '- Mặt bảng mịn dễ dàng bôi xóa.  - Bảng giúp bé dễ canh dòng luyện chữ tốt hơn.   - Bộ bảng có kèm theo 01 cây bút lông bảng nhỏ, có sẵn đồ bôi trên nắp  - Bảng có kích thước lớn, rất tiện dụng.  - Nẹp bảng làm bằng nhựa mềm được ép cố định vào bảng, an toàn cho bé khi sử dụng', 'Bảng Học Sinh', 'Bảng', 15, 'Việt Nam'),
(48, 'Boxset Những Người Khốn Khổ (Bộ 3 Cuốn)', 'https://cdn1.fahasa.com/media/catalog/product/8/9/8935230009764_1.jpg', 380990, '15', 'Những người khốn khổ là câu chuyện về xã hội nước Pháp trong khoảng hơn 20 năm đầu thế kỷ XIX kể từ thời điểm Napôlêông I lên ngôi và vài thập niên sau đó. Nhân vật chính của tiểu thuyết là Giăng Vangiăng, một cựu tù khổ sai tìm cách chuộc lại những lỗi lầm gây ra thời trai trẻ. Bộ tiểu thuyết không chỉ nói tới bản chất của cái tốt, cái xấu, của luật pháp, mà tác phẩm còn là cuốn bách khoa thư đồ sộ về lịch sử, kiến trúc của Paris, nền chính trị, triết lý, luật pháp, công lý, tín ngưỡng của nước Pháp nửa đầu thế kỷ XIX.', 'Văn Học', 'Sách', 24, 'NXB Kim Đồng'),
(49, 'Giấy Photo A3 100gsm (10 Tờ/Xấp) ', 'https://cdn1.fahasa.com/media/catalog/product/8/9/8934986003590.jpg', 9999, '99', 'Giấy Photo A3 100gsm (10 Tờ/Xấp) với kích thước A3, thân thiện với môi trường và thích hợp với hầu hết các loại máy in phun, máy in laser, máy fax laser, máy photocopy.  Sản phẩm thiết kế khổ giấy A3, thích hợp sử dụng làm giấy in, photo trong các văn phòng hoặc trong gia đình. Bạn cũng có thể sử dụng để viết, vẽ sơ đồ hoặc phác thảo các bản vẽ một cách đơn giản và nhanh chóng.  Giấy có bề dày tốt, bề mặt láng mịn, độ cản quang của giấy cao hơn do đó giảm hiện tượng nhìn thấu trang và cho phép sử dụng cả hai mặt giấy một cách toàn diện nhất.  Chất liệu giấy an toàn, không chứa chất gây độc hại và mùi khó chịu, thân thiện với môi trường và giú', 'Giấy A3', 'Giấy', 20, 'Việt Nam'),
(50, 'Ghim Mũ Inox Deli - 0022', 'https://cdn1.fahasa.com/media/catalog/product/6/9/6921734900227_1_.jpg', 15725, '78', 'Ghim Mũ Inox Deli - 0022 thường sử dụng để ghim giấy lên bảng nỉ. Kiểu ghim mảnh, nhọn, có mũ tròn giúp cố định giấy tờ chắc chắn.  Chất liệu thép không gỉ cao cấp cứng cáp, dẻo dai, sáng đẹp.  Sản phẩm được đánh giá là dòng văn phòng phẩm mang tính tiện dụng cao, sử dụng rộng rãi tại các cơ quan, văn phòng.', 'Ghim ', 'Dụng cụ', 15, 'Trung Quốc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

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
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `Mahd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
