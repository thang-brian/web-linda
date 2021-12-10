-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2021 lúc 10:45 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `linda`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc_vieclam`
--

CREATE TABLE `danhmuc_vieclam` (
  `id_viec` int(11) NOT NULL,
  `tenviec` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `mota` text COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc_vieclam`
--

INSERT INTO `danhmuc_vieclam` (`id_viec`, `tenviec`, `hinhanh`, `mota`, `trangthai`) VALUES
(8, 'Thực tập', '1635932908_TMSC-slide.jpg', ' Mô tả công việc:  - Hỗ trợ các trưởng nhóm chuẩn bị và soát xét các báo cáo tài chính.  ', 'Kích hoạt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_dm`
--

CREATE TABLE `danhsach_dm` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsach_dm`
--

INSERT INTO `danhsach_dm` (`ID`, `Name`, `Status`) VALUES
(1, 'Nhà đất Việt Nam', ''),
(2, 'Nhà đất mỹ', ''),
(3, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_kh`
--

CREATE TABLE `danhsach_kh` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `is_vip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsach_kh`
--

INSERT INTO `danhsach_kh` (`ID`, `username`, `email`, `phonenumber`, `password`, `role`, `fullname`, `is_vip`) VALUES
(7, 'admin', '', '0', '$2y$10$VWBGIqfiNxLfB00JOy7./u/4nhNmsHH/PLeUDIbz5NbF8QAiLWXsS', 0, 'Admin', 0),
(11, 'test', 'test@mail', '123', '$2y$10$VWBGIqfiNxLfB00JOy7./u/4nhNmsHH/PLeUDIbz5NbF8QAiLWXsS', 1, 'Test', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_sp`
--

CREATE TABLE `danhsach_sp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Status` int(9) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `loai` varchar(255) NOT NULL,
  `Top` int(2) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `PhNgu` int(20) NOT NULL,
  `PhTam` int(20) NOT NULL,
  `PhBep` int(20) NOT NULL,
  `Kho` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhsach_sp`
--

INSERT INTO `danhsach_sp` (`ID`, `Name`, `Status`, `Price`, `loai`, `Top`, `Image`, `mota`, `size`, `PhNgu`, `PhTam`, `PhBep`, `Kho`) VALUES
(1, 'Nhà đất Việt Nam', 6789, '3.508.000.000', '', 1, 'TMSC-slide.jpg', '', '0', 0, 0, 0, 0),
(2, 'Vinhomes Ocean-Park', 1024, '6.789.000.000', '', 1, '1629283201-matrixone.jpg', '', '0', 0, 0, 0, 0),
(3, 'Royal City HN', 1102, '2.000.000.000', '', 1, '1629272454-ttdem.jpg', '', '0', 0, 0, 0, 0),
(4, 'Sun World QN', 3508, '3.000.000.000', '', 1, 'TMCP-ha-12.jpg', '', '0', 0, 0, 0, 0),
(5, 'Sun Shine HL', 4953, '8.386.000.000', '', 2, '1629283201-matrixone.jpg', '', '0', 0, 0, 0, 0),
(6, 'Paradise Resort PQ', 7749, '11.020.000.000', '', 2, '1629272454-ttdem.jpg', '', '0', 0, 0, 0, 0),
(7, 'Park City HN', 7777, '12.340.000.000', '', 2, 'im1.jpg', '', '0', 0, 0, 0, 0),
(15, 'Đất nền Nam Định', 4953, '8.386.000.000', '', 2, 'TMSC-slide.jpg', '', '0', 0, 0, 0, 0),
(16, 'Thunder Matric ĐN', 2048, '12.340.000.000', '', 2, 'TMCP-ha-12.jpg', '', '0', 0, 0, 0, 0),
(17, 'Thunder Matric ĐN', 2048, '12.340.000.000', '', 2, '1629283201-matrixone.jpg', '', '0', 0, 0, 0, 0),
(19, 'Thunder Matric ĐN', 7749, '8.386.000.000', '', 2, 'TMCP-ha-12.jpg', '', '0', 0, 0, 0, 0),
(20, 'Paradise Resort PQ', 2048, '11.020.000.000', '', 0, '1629280613-vuon-nhat.png', '', '0', 0, 0, 0, 0),
(21, 'Thunder Matric ĐN', 4953, '11.020.000.000', '', 0, '1629272454-ttdem.jpg', '', '0', 0, 0, 0, 0),
(22, 'CAD_GROUP', 1234, '5.432.000.000', '', 0, '1629280613-vuon-nhat.png', '', '0', 0, 0, 0, 0),
(23, 'Sun Shine HL', 7749, '8.386.000.000', '', 0, '1629272454-ttdem.jpg', '', '0', 0, 0, 0, 0),
(24, 'Paradise Resort PQ', 4953, '12.340.000.000', 'Thuê', 0, 'TMCP-ha-12.jpg', '', '0', 0, 0, 0, 0),
(25, 'Vinhomes Ocean-Park', 4953, '8.386.000.000', 'Thuê', 0, 'im1.jpg', '', '0', 0, 0, 0, 0),
(26, 'Vinhomes River-Side', 4953, '11.020.000.000', 'Thuê', 0, 'TMCP-ha-12.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', '0', 0, 0, 0, 0),
(27, 'Thunder Matric ĐN', 4953, '12.340.000.000', 'Mua', 0, '1629280613-vuon-nhat.png', '', '0', 0, 0, 0, 0),
(28, 'Thunder Matric ĐN', 1102, '12.340.000.000', 'Mua', 0, 'TMSC-slide.jpg', '', '0', 0, 0, 0, 0),
(29, 'Park City HN', 1102, '12.340.000.000', 'Mua', 0, '1629280613-vuon-nhat.png', '', '0', 0, 0, 0, 0),
(30, 'Sun Shine HL', 1102, '12.340.000.000', 'Mua', 0, '1629283201-matrixone.jpg', '', '0', 0, 0, 0, 0),
(31, 'Paradise Resort PQ', 7777, '11.020.000.000', 'Dự án', 0, '1629280613-vuon-nhat.png', '', '0', 0, 0, 0, 0),
(32, 'Vinhomes Ocean-Park', 4953, '12.340.000.000', 'Dự án', 0, '1629272454-ttdem.jpg', '', '0', 0, 0, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc_vieclam`
--
ALTER TABLE `danhmuc_vieclam`
  ADD PRIMARY KEY (`id_viec`);

--
-- Chỉ mục cho bảng `danhsach_dm`
--
ALTER TABLE `danhsach_dm`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhsach_kh`
--
ALTER TABLE `danhsach_kh`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhsach_sp`
--
ALTER TABLE `danhsach_sp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc_vieclam`
--
ALTER TABLE `danhmuc_vieclam`
  MODIFY `id_viec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danhsach_dm`
--
ALTER TABLE `danhsach_dm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhsach_kh`
--
ALTER TABLE `danhsach_kh`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `danhsach_sp`
--
ALTER TABLE `danhsach_sp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
