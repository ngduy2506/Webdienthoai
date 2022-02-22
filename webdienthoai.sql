-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2021 lúc 11:34 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ID` int(11) NOT NULL,
  `MaKH` varchar(32) NOT NULL,
  `MaDongDT` varchar(10) NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayBL` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ID`, `MaKH`, `MaDongDT`, `NoiDung`, `NgayBL`) VALUES
(1, 'KH01', 'SA02', 'Mình sẽ chọn Nova 2i vì so ra thì mặt nào J7 pro cũng kém hơn, chụp ảnh của Nova 2i ăn đứt J7 Pro với camera kép ở trước và sau, có thể chụp xóa phông.Giá lại rẻ hơn 1 tr nữa', '2021-06-01 10:13:04'),
(2, 'KH01', 'IP01', 'Chương trình đổi iphone 8 plus khi nào kết thúc vậy', '2021-06-02 13:41:13'),
(3, 'KH02', 'SA01', 'Mua trả góp 0% thì hàng tháng trả bao nhiêu khi trừ hết km và kèm trợ giá sử dụng sim vietnam mobile, thân', '2021-09-30 08:08:28'),
(4, 'KH02', 'SA02', 'Mình muốn mua trả góp 0% thì mình phải trả trước bao nhiêu %? Và trả góp trong vòng bao nhiêu tháng?', '2021-06-30 12:47:19'),
(5, 'KH02', 'SA04', 'Mua s8 trả góp với fpt 588 giảm 5.500.000 thì 5.500.000 sẽ trừ vào số tiền trả trước hay trừ vào giá máy vậy', '2021-06-30 08:20:09'),
(6, 'KH03', 'SA04', 'Hôm trước em có đặt điện thoại s7 edge nhưng giờ em muốn đổi qua điện thoại s8 này được không!', '2021-07-01 10:31:07'),
(7, 'KH04', 'SA04', 'Mua sản phẩm trả thẳng không đăng ký FPT88 có được giảm 2.000.000 đ không nhỉ', '2021-07-02 07:05:36'),
(8, 'KH05', 'IP03', 'Hình thức trả góp trên áp dụng tất cả các fpt shop đúng k ạ.', '2021-07-03 09:09:15'),
(9, 'KH05', 'IP03', 'Ủa sao không có tặng kèm bộ F-Plus như lúc đầu quảng cáo đặt hàng thế admin...', '2021-07-04 08:42:12'),
(10, 'KH06', 'HT02', 'ủa sao htc u11 xanh thì thẻ nhớ tối đa là 2tb còn cái này sao có 256gb vậy là sao hả shop', '2021-07-05 14:19:37'),
(11, 'KH06', 'HT01', 'Chỉ tạm hết hàng thôi đúng k nay mai lại có hàng về đúng k?', '2021-07-06 14:30:22'),
(12, 'KH07', 'OP01', 'shop cho mình hỏi giờ minh muốn mua f3 plus trả trước 4 triệu. còn lại trả góp trong 6 tháng thì mỗi tháng mình phải trả 1.115.000đ phải ko ạ', '2021-09-24 07:27:48'),
(13, 'KH08', 'OP01', 'K chỉ chụp hình tốt mà chơi game cũng rất mượt', '2021-07-07 10:15:45'),
(14, 'KH09', 'IP01', 'Máy mới mua chưa Active mà lại mất hộp thì làm sao check imei mà không cần active máy ad nhỉ( Vì chưa active máy lên để kiểm tra chắc chắn máy còn mới nguyên ) Phiền ad chỉ giúp mình. Xin cảm ơn.', '2021-10-04 20:29:41'),
(15, 'KH09', 'IP01', '037710987 Tư vấn giúp mình', '2021-07-07 20:35:24'),
(16, 'KH09', 'SA04', 'Máy xài rất êm ko lag shop phục vụ rất chu đáo', '2021-07-07 20:34:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID` int(11) NOT NULL,
  `MaDH` varchar(10) NOT NULL,
  `IMEI` varchar(15) DEFAULT NULL,
  `TenDongDT` varchar(50) NOT NULL,
  `MauSac` varchar(15) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  `ThanhTien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID`, `MaDH`, `IMEI`, `TenDongDT`, `MauSac`, `SoLuong`, `DonGia`, `ThanhTien`) VALUES
(1, 'DH01', '357257056975167', 'Samsung Galaxy J7 Pro', 'Đen', 1, 6990000, 6990000),
(2, 'DH02', '357278637425357', 'Samsung Galaxy S8 Plus', 'Khói', 3, 20490000, 61470000),
(3, 'DH03', '357763577532420', 'iPhone 8 Plus 256GB', 'Xám', 1, 28790000, 28790000),
(4, 'DH04', '357701008833352', 'iPhone 8 256GB', 'Đen', 1, 25790000, 25790000),
(5, 'DH05', '356757275735770', 'HTC U11 Red', 'Đỏ', 1, 16990000, 16990000),
(6, 'DH06', '356257742042470', 'Oppo F3 Plus', 'Vàng', 1, 10690000, 10690000),
(7, 'DH07', '357257076343273', 'iPhone 8 Plus 256GB', 'Trắng', 1, 28790000, 28790000),
(8, 'DH07', '357278637425355', 'Samsung Galaxy S8 Plus', 'Đen', 1, 20490000, 20490000);

--
-- Bẫy `chitietdonhang`
--
DELIMITER $$
CREATE TRIGGER `capnhatthtien` BEFORE INSERT ON `chitietdonhang` FOR EACH ROW set NEW.ThanhTien=NEW.SoLuong*NEW.DonGia
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhatthtien2` BEFORE UPDATE ON `chitietdonhang` FOR EACH ROW set NEW.ThanhTien=NEW.SoLuong*NEW.DonGia
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhattttien` AFTER INSERT ON `chitietdonhang` FOR EACH ROW update donhang set tongthanhtien = tongthanhtien+NEW.ThanhTien where MaDH = NEW.MaDH
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhattttien2` AFTER UPDATE ON `chitietdonhang` FOR EACH ROW update donhang set tongthanhtien = tongthanhtien-OLD.ThanhTien+NEW.ThanhTien where MaDH = NEW.MaDH
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhattttien3` AFTER DELETE ON `chitietdonhang` FOR EACH ROW update donhang set tongthanhtien = tongthanhtien-OLD.ThanhTien where MaDH = OLD.MaDH
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `IMEI` varchar(15) NOT NULL,
  `MaDongDT` varchar(10) NOT NULL,
  `MauSac` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`IMEI`, `MaDongDT`, `MauSac`) VALUES
('355792420054554', 'VI02', 'Trắng'),
('356257742042470', 'OP01', 'Vàng'),
('356257742798678', 'OP01', 'Đen'),
('356752500544887', 'OP02', 'Đen'),
('356752543235458', 'OP03', 'Vàng'),
('356757211117575', 'HT01', 'Xanh'),
('356757275735770', 'HT02', 'Đỏ'),
('356757275737575', 'HT03', 'Xám'),
('356757892275004', 'NO02', 'Xám'),
('356757892275799', 'NO03', 'Xanh'),
('356757892873539', 'NO01', 'Trắng'),
('356770470724047', 'SO01', 'Xám'),
('356774275750001', 'SO02', 'Xám'),
('356774275752002', 'SO03', 'Xám'),
('356774275787752', 'SO03', 'Hồng'),
('357257056757727', 'SA01', 'Trắng'),
('357257056975004', 'SA02', 'Đen'),
('357257056975167', 'SA02', 'Đen'),
('357257056975168', 'SA02', 'Trắng'),
('357257056975724', 'SA01', 'Đen'),
('357257076343273', 'IP01', 'Trắng'),
('357262443212544', 'SA03', 'Đen'),
('357278637425355', 'SA04', 'Đen'),
('357278637425357', 'SA04', 'Khói'),
('357700733424624', 'IP02', 'Trắng'),
('357701007624767', 'IP03', 'Đen'),
('357701008833352', 'IP03', 'Đen'),
('357701557757727', 'IP03', 'Xám'),
('357763571111425', 'IP01', 'Xám'),
('357763577532420', 'IP01', 'Xám'),
('357763577757001', 'IP04', 'Trắng'),
('357763577757725', 'IP01', 'Đen'),
('357763577788888', 'NO04', 'Đen'),
('685421035653', 'HT01', 'dfgh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongdienthoai`
--

CREATE TABLE `dongdienthoai` (
  `MaDongDT` varchar(10) NOT NULL,
  `MaLoai` varchar(10) NOT NULL,
  `MaHangSX` varchar(10) NOT NULL,
  `MaNCC` varchar(10) NOT NULL,
  `TenDongDT` varchar(50) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `DonGia` float NOT NULL,
  `GiaKM` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dongdienthoai`
--

INSERT INTO `dongdienthoai` (`MaDongDT`, `MaLoai`, `MaHangSX`, `MaNCC`, `TenDongDT`, `Hinh`, `DonGia`, `GiaKM`) VALUES
('HT01', 'TM', 'HTC', 'NCC03', 'HTC U Play', 'htcuplay.jpg', 8990000, 0),
('HT02', 'TM', 'HTC', 'NCC03', 'HTC U11 Red', 'htcu11red.jpg', 16990000, 0),
('HT03', 'TM', 'HTC', 'NCC03', 'HTC U11', 'htcu11.jpg', 16990000, 0),
('IP01', 'TM', 'APP', 'NCC01', 'iPhone 8 Plus 256GB', 'iphone8plus.png', 28790000, 0),
('IP02', 'TM', 'APP', 'NCC01', 'iPhone 5s 16GB', 'iphone5s.png', 5999000, 0),
('IP03', 'TM', 'APP', 'NCC02', 'iPhone 8 256GB', 'iphone8plus.png', 25790000, 0),
('IP04', 'TM', 'APP', 'NCC02', 'iPhone 6s Plus 32GB', 'ip_6s_32.png', 14490000, 0),
('IP05', 'TM', 'APP', 'NCC03', 'iPhone 8 Plus 64GB', 'iphone8plus.png', 23990000, 0),
('NO01', 'TM', 'NOK', 'NCC02', 'Nokia 5', 'nokia5.png', 5259000, 4259000),
('NO02', 'TM', 'NOK', 'NCC02', 'Nokia 6', 'nokia6.png', 5590000, 0),
('NO03', 'TM', 'NOK', 'NCC02', 'Nokia 8', 'nokia8.png', 12990000, 0),
('NO04', 'BP', 'NOK', 'NCC02', 'Nokia N150', 'n150.png', 649000, 0),
('OP01', 'TM', 'OPP', 'NCC01', 'Oppo F3 Plus', 'oppof3+.jpg', 10690000, 0),
('OP02', 'TM', 'OPP', 'NCC01', 'Oppo F1s 2017 (64GB)', 'oppof1s2017.jpg', 5990000, 0),
('OP03', 'TM', 'OPP', 'NCC01', 'Oppo F1 Plus', 'oppof1+.jpg', 6490000, 0),
('OP04', 'TM', 'OPP', 'NCC01', 'Oppo F3 Lite (A57)', 'oppof3lite.jpg', 5490000, 0),
('SA01', 'TM', 'SAM', 'NCC02', 'Samsung Galaxy S8', 'samsunggalaxys8.png', 18490000, 0),
('SA02', 'TM', 'SAM', 'NCC02', 'Samsung Galaxy J7 Pro', 'samgalaJ7-pro.png', 6990000, 0),
('SA03', 'TM', 'SAM', 'NCC01', 'Samsung Galaxy Note 8', 'samnote8.png', 22490000, 0),
('SA04', 'TM', 'SAM', 'NCC01', 'Samsung Galaxy S8 Plus', 'samsunggalaxys8.png', 20490000, 0),
('SA05', 'TM', 'SAM', 'NCC03', 'Samsung Galaxy A5 (2017)', 'dt_1.png', 7990000, 0),
('SO01', 'TM', 'SON', 'NCC01', 'Sony Xperia XZ1', 'sonyxperiaxz1.png', 15990000, 0),
('SO02', 'TM', 'SON', 'NCC03', 'Sony Xperia XA1 Ultra', 'sonyxperiaxa1ultra.png', 8490000, 0),
('SO03', 'TM', 'SON', 'NCC01', 'Sony Xperia XZ Premium', 'sonyxperiaxzpremium.png', 17990000, 0),
('VI02', 'TM', 'VIV', 'NCC03', 'Vivo V5s', 'vivov5s.png', 6690000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` varchar(10) NOT NULL,
  `MaNV` varchar(10) DEFAULT NULL,
  `MaKH` varchar(32) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `NgayLapDH` date NOT NULL,
  `NgayHenNhan` date DEFAULT NULL,
  `TongThanhTien` float NOT NULL DEFAULT 0,
  `TrangThai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaNV`, `MaKH`, `TenKH`, `SDT`, `NgayLapDH`, `NgayHenNhan`, `TongThanhTien`, `TrangThai`) VALUES
('DH01', 'NV03', 'KH02', 'Trần Thị Mỹ Tiên', '01237624089', '2021-06-01', '2021-07-03', 6994000, 'Đã duyệt'),
('DH02', 'NV03', 'KH03', 'Đỗ Thế Nhân', '01654763458', '2021-06-01', '2021-07-02', 61470100, 'Đã duyệt'),
('DH03', 'NV04', 'KH04', 'Trần Nguyễn Đức Nhân', '01215873125', '2021-06-01', '2021-07-02', 28790000, 'Đã duyệt'),
('DH04', 'NV04', 'KH05', 'Võ Gia Bảo', '0986324027', '2021-10-02', '2021-07-03', 25790000, 'Đã duyệt'),
('DH05', 'NV04', 'KH06', 'Nguyễn Khánh Nguyên', '0904934587', '2021-06-02', '2021-07-03', 16990000, 'Chưa duyệt'),
('DH06', 'NV05', 'KH08', 'Đặng Công Thức', '01652734528', '2021-06-03', '2021-07-03', 10690000, 'Chưa duyệt'),
('DH07', 'NV06', 'KH09', ' Đặng Bá An', '01237624089', '2021-06-03', '2021-07-04', 49280000, 'Chưa duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSX` varchar(10) NOT NULL,
  `TenHangSX` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSX`, `TenHangSX`) VALUES
('APP', 'Apple'),
('ASU', 'Asus'),
('HTC', 'HTC'),
('NOK', 'Nokia'),
('OPP', 'Oppo'),
('SAM', 'Samsung'),
('SON', 'Sony'),
('VIV', 'Vivo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(32) NOT NULL,
  `TenKH` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `MatKhau` varchar(32) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(70) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Email`, `MatKhau`, `NgaySinh`, `DiaChi`, `SDT`) VALUES
('KH01', 'Phạm Thanh Duy', 'thanhduy05@gmail.com', 'b857eed5c9405c1f2b98048aae506792', '1996-05-25', '113/8, P.TNPB, Q9, TP.Thủ Đức', '0931405396'),
('KH02', 'Trần Thị Mỹ Tiên', 'tien06@gmail.com', '8ddcff3a80f4189ca1c9d4d902c3c909', '2001-05-11', '120/8 Lã Xuân Oai, P.TNPA, Q9, TP.Thủ Đức', '0396386864'),
('KH03', 'Đỗ Thế Nhân', 'nhan05@gmail.com', '3dbe00a167653a1aaee01d93e77e730e', '1999-07-10', '34 Tam Bình, P.Hiệp Bình Chánh, Q.TĐ, TP.Thủ Đức', '0336724643'),
('KH04', 'Trần Nguyễn Đức Nhân', 'nhan.tran06@gmail.com', 'd86344a7eae5ebfa67f5b76517cf7a2d', '2001-04-11', '11 Xô Viết Nghệ Tĩnh, P.7, Q.Bình Thạnh, TP.HCM', '0327454786'),
('KH05', 'Võ Gia Bảo', 'bao21@gmail.com', '810247419084c82d03809fc886fedaad', '2000-08-03', '180/11 Ung Văng Khiêm, P.10, Q.Bình Thạnh, TP.HCM', '0929522890'),
('KH06', 'Nguyễn Khánh Nguyên', 'nguyenidol@gmail.com', 'dd4b21e9ef71e1291183a46b913ae6f2', '2001-05-08', '177 Bạch Đặng, P.4,  Q.Bình Thạnh, TP.HCM', '0816074156'),
('KH07', 'Phan Minh Nhựt', 'nhutphan11@gmail.com', '7c497868c9e6d3e4cf2e87396372cd3b', '2001-11-11', '130/23 Xô Viết Nghệ Tĩnh, P.7, Q.Bình Thạnh, TP.HCM', '01238989564'),
('KH08', 'Đặng Công Thức', 'thucblock@gmail.com', '94b8cea57c49a3007225a0c70c475450', '2001-07-12', '121/11 Xô Viết Nghệ Tĩnh, P.10, Q.Bình Thạnh, TP.HCM', '0355217139'),
('KH09', 'Đặng Bá An', 'an13@gmail.com', '331b184847bb1808123473d76c45540b', '2001-10-09', '100/23/4 Đỗ Xuân Hợp, P.Phước Long A, Q.9, TP.Thủ Đức', '037710987'),
('KH10', NULL, 'nhuphan@gmail.com', '1ecf85ef76aaf70c31f3379b27996bab', NULL, NULL, NULL),
('KH11', NULL, 'thuhuong@gmail.com', 'b43ce67c7299636a7983eb04440da0af', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidienthoai`
--

CREATE TABLE `loaidienthoai` (
  `MaLoai` varchar(10) NOT NULL,
  `TenLoai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaidienthoai`
--

INSERT INTO `loaidienthoai` (`MaLoai`, `TenLoai`) VALUES
('BP', 'Điện thoại bàn phím'),
('TM', 'Điện thoại thông minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` varchar(10) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `SDT`, `Email`, `Fax`) VALUES
('NCC01', 'Thế Giới Di Động', '35100100', 'lienhe@thegioididong.com', '04.89276180'),
('NCC02', 'FPT', '39100332', 'lienhe@fpt.com', '04.89276190'),
('NCC03', 'Phongvu', '35119060', 'lienhe@phongvu.com', '04.39276110');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(10) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `MatKhau` varchar(32) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `QuyenTruyCap` varchar(30) NOT NULL,
  `DiaChi` varchar(70) NOT NULL,
  `SDT` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `UserName`, `MatKhau`, `NgaySinh`, `GioiTinh`, `QuyenTruyCap`, `DiaChi`, `SDT`) VALUES
('NV01', 'Tô Ngọc Duy', 'SuperAdmin', '1bbd886460827015e5d605ed44252251', '1996-06-25', 1, 'SuperAdmin', '118/11 Man Thiện, P.8, Q.9, TP.Thủ Đức', '0902647026'),
('NV02', 'Lương Mã Đằng', 'Admin', 'c93ccd78b2076528346216b3b2f701e6', '2000-06-17', 1, 'Admin', '100 Nguyễn Văn Nghi, P.14, Q.Gò Vấp, TP.HCM', '0949625001'),
('NV03', 'Phạm Bảo Hưng', 'nhoxhung', 'd27d320c27c3033b7883347d8beca317', '2001-06-27', 0, 'Member', '99 Nguyễn Thị Định, Q.2, TP.Thủ Đức', '00585806595'),
('NV04', 'Nguyễn Thành Luân', 'luannguyen', 'b857eed5c9405c1f2b98048aae506792', '1999-02-09', 0, 'Member', '20 Tô Vĩnh Diện, Q.TĐ, TP.HCM', '0366729382'),
('NV05', 'Lê Quan Lộc', 'locle', 'f638f4354ff089323d1a5f78fd8f63ca', '1999-04-11', 0, 'Member', '33 Nam Kì Khởi Nghĩa, P.6, Q.3, TP.HCM', '076552602'),
('NV06', 'Đoàn Quang Minh', 'minhdoan', '7c497868c9e6d3e4cf2e87396372cd3b', '1999-07-09', 0, 'Member', '22 Xô Viết Nghệ Tĩnh, P.10, Q.BT, TP.HCM', '0378900394'),
('NV07', 'admin', 'admin1234', 'c93ccd78b2076528346216b3b2f701e6', '2000-06-17', 1, 'SuperAdmin', 'null', 'null');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaDongDT` (`MaDongDT`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `IMEI_2` (`IMEI`),
  ADD KEY `MaDH` (`MaDH`),
  ADD KEY `IMEI` (`IMEI`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`IMEI`),
  ADD UNIQUE KEY `IMEI` (`IMEI`),
  ADD KEY `MaDongDT` (`MaDongDT`);

--
-- Chỉ mục cho bảng `dongdienthoai`
--
ALTER TABLE `dongdienthoai`
  ADD PRIMARY KEY (`MaDongDT`),
  ADD UNIQUE KEY `MaDongDT` (`MaDongDT`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaHangSX` (`MaHangSX`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD UNIQUE KEY `MaDH` (`MaDH`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSX`),
  ADD UNIQUE KEY `MaHangSX` (`MaHangSX`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `MaKH` (`MaKH`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Chỉ mục cho bảng `loaidienthoai`
--
ALTER TABLE `loaidienthoai`
  ADD PRIMARY KEY (`MaLoai`),
  ADD UNIQUE KEY `MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`),
  ADD UNIQUE KEY `MaNCC` (`MaNCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `MaNV` (`MaNV`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaDongDT`) REFERENCES `dongdienthoai` (`MaDongDT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`IMEI`) REFERENCES `dienthoai` (`IMEI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`MaDongDT`) REFERENCES `dongdienthoai` (`MaDongDT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dongdienthoai`
--
ALTER TABLE `dongdienthoai`
  ADD CONSTRAINT `dongdienthoai_ibfk_1` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dongdienthoai_ibfk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loaidienthoai` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dongdienthoai_ibfk_3` FOREIGN KEY (`MaHangSX`) REFERENCES `hangsanxuat` (`MaHangSX`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
