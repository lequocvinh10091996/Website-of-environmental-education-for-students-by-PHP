-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2019 lúc 03:03 AM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `moi_truong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky_form`
--

CREATE TABLE `dangky_form` (
  `id_dangky` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiep` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donvicongtac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendonvicongtac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky_form`
--

INSERT INTO `dangky_form` (`id_dangky`, `username`, `password`, `confirm_pass`, `hoten`, `ngaysinh`, `gioitinh`, `nghenghiep`, `donvicongtac`, `tendonvicongtac`, `diachi`, `chucvu`, `sdt`) VALUES
(23, 'vinh111', '123', '123', 'sdfdf', '2018-09-04', 'nam', 'dfds', 'giao vien', 'mam non', 'fsdfsd', 'ban giam hieu', 'dssdf'),
(24, 'vinh1111', '123', '123', 'le quoc vinh', '1996-09-09', 'nam', 'ben tre', 'sinh vien', 'dai hoc', 'Can Tho', 'ban chap hanh chi doan', '12345'),
(25, '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'root', 'root', 'root', 'hdfhd', '2018-09-03', 'nam', 'hdhdfh', 'giao vien', 'trung hoc', 'dhdfh', 'ban giam hieu', 'hdfhd'),
(33, 'vinh123', '123', '123', 'gdfgdf', '2018-09-03', 'nam', 'dfgdfg', 'giao vien', 'thcs', 'dfgdfg', 'ban giam hieu', 'fdgdfg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `file_upload`
--

CREATE TABLE `file_upload` (
  `id_file` int(11) NOT NULL,
  `ten_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `file_upload`
--

INSERT INTO `file_upload` (`id_file`, `ten_file`, `loai_file`) VALUES
(7, 'hello.MKV', 'video'),
(8, 'hello1.mp4', 'video'),
(9, 'hello2.mp4', 'game');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc_hinhanh`
--

CREATE TABLE `khoahoc_hinhanh` (
  `id_khoahoc` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motakh` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahoc_hinhanh`
--

INSERT INTO `khoahoc_hinhanh` (`id_khoahoc`, `tenkh`, `motakh`) VALUES
(1, 'KhÃ³a há»c level 1', '<p>kh&oacute;a há»c level 1</p>'),
(3, 'Khoa há»c level 2', '<p>Khoa há»c level 2</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_bai_hoc`
--

CREATE TABLE `quan_ly_bai_hoc` (
  `id_quan_ly_bh` int(11) NOT NULL,
  `id_quan_ly_kh` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop_khoa_hoc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh_bai_hoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_bai_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_ngan_bai_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung_bai_hoc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_bai_hoc`
--

INSERT INTO `quan_ly_bai_hoc` (`id_quan_ly_bh`, `id_quan_ly_kh`, `ten_khoa_hoc`, `lop_khoa_hoc`, `hinh_anh_bai_hoc`, `ten_bai_hoc`, `mo_ta_ngan_bai_hoc`, `noi_dung_bai_hoc`) VALUES
(15, 23, 'Giá»¯ gÃ¬n vá»‡ sinh', '1', 'caccachbaovetraidatxanh.jpg', 'BÃ i há»c chÄƒm sÃ³c cÃ¢y tá»‘t', '<p>ChÄƒm s&oacute;c c&acirc;y ráº¥t quan trá»ng.</p>', '<p>ChÄƒm s&oacute;c c&acirc;y ráº¥t quan trá»ng v&agrave; c&oacute; &iacute;ch cho x&atilde; há»™i.</p>\r\n<p><img src=\"images/about_1.jpg\" alt=\"images/about_1.jpg\" width=\"200\" height=\"122\" /></p>\r\n<p>ChÄƒm s&oacute;c c&acirc;y ráº¥t quan trá»ng v&agrave; c&oacute; &iacute;ch cho x&atilde; há»™i.</p>\r\n<p><img src=\"images/about_2.jpg\" alt=\"images/about_2.jpg\" width=\"220\" height=\"134\" /></p>'),
(16, 23, 'Giá»¯ gÃ¬n vá»‡ sinh', '1', 'Anh vui moi truong1_MOITRU0NG.COM.VN.jpg', 'BÃ i há»c giá»¯ gÃ¬n nguá»“n nÄƒng lÆ°á»£ng', '<p>Giá»¯ g&igrave;n nguá»“n nÄƒng lÆ°á»£ng ráº¥t quan trá»ng.</p>', '<p>Giá»¯ g&igrave;n nguá»“n nÄƒng lÆ°á»£ng ráº¥t quan trá»ng v&agrave; c&oacute; &iacute;ch cho x&atilde; há»™i.</p>\r\n<p><img src=\"images/about_2.jpg\" alt=\"images/about_2.jpg\" width=\"200\" height=\"122\" /></p>'),
(17, 23, 'Giá»¯ gÃ¬n vá»‡ sinh', '1', 'bao-ve-moi-truong-1.jpg', 'Báº£o vá»‡ mÃ´i trÆ°á»ng nÆ¡i cÃ´ng cá»™ng', '<p>Báº£o vá»‡ m&ocirc;i trÆ°á»ng nÆ¡i c&ocirc;ng cá»™ng ráº¥t quan trá»ng.</p>', '<p>Báº£o vá»‡ m&ocirc;i trÆ°á»ng nÆ¡i c&ocirc;ng cá»™ng ráº¥t quan trá»ng v&agrave; c&oacute; &iacute;ch.</p>\r\n<p><img src=\"images/about_2.jpg\" alt=\"images/about_2.jpg\" width=\"200\" height=\"122\" /></p>'),
(19, 24, 'Báº£o vá»‡ nguá»“n nÆ°á»›c', '1', 'cac-doi-tuong-phai-lap-bao-cao-danh-gia-tac-dong-moi-truong1.jpg', 'Giáº£i phÃ¡p cho cÃ¢y', '<p>Giáº£i ph&aacute;p cho c&acirc;y.</p>', '<p><iframe src=\"//www.youtube.com/embed/L08uB0kL1ZY\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>káº¿ tiáº¿p,</p>\r\n<p><iframe src=\"//www.youtube.com/embed/zp6yXzASTU4\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>'),
(20, 24, 'Báº£o vá»‡ nguá»“n nÆ°á»›c', '1', '1w_FSPD.jpg', 'RÃºt cÃ¡c phÃ­ch khá»i á»• cáº¯m', '<p>R&uacute;t c&aacute;c ph&iacute;ch khá»i á»• cáº¯m</p>', '<p><img src=\"images/course_6.jpg\" alt=\"images/course_6.jpg\" width=\"450\" height=\"286\" /></p>\r\n<p>R&uacute;t c&aacute;c ph&iacute;ch khá»i á»• cáº¯m.</p>'),
(21, 24, 'Báº£o vá»‡ nguá»“n nÆ°á»›c', '1', 'bai-van-mau-ve-bao-ve-moi-truong-don-gian.jpg', 'Sá»­ dá»¥ng nÄƒng lÆ°á»£ng sáº¡ch', '<p>Sá»­ dá»¥ng nÄƒng lÆ°á»£ng sáº¡ch</p>', '<p><img src=\"images/blog_single.jpg\" alt=\"images/blog_single.jpg\" width=\"397\" height=\"225\" /></p>\r\n<p>Sá»­ dá»¥ng nÄƒng lÆ°á»£ng sáº¡ch.</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_binh_luan`
--

CREATE TABLE `quan_ly_binh_luan` (
  `id_quan_ly_bl` int(11) NOT NULL,
  `id_quan_ly_kh` int(11) NOT NULL,
  `nguoi_binh_luan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `binh_luan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_binh_luan`
--

INSERT INTO `quan_ly_binh_luan` (`id_quan_ly_bl`, `id_quan_ly_kh`, `nguoi_binh_luan`, `binh_luan`) VALUES
(1, 23, 'VÃµ Minh ThÃ nh', 'hay'),
(2, 23, 'KhÃ¡nh Duy', 'CÅ©ng Ä‘Æ°á»£c ! '),
(3, 23, 'Pháº¡m Ngá»c Háº£i', 'vÆ°Æ¡ng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_chung_nhan`
--

CREATE TABLE `quan_ly_chung_nhan` (
  `id_quan_ly_cn` int(11) NOT NULL,
  `id_quan_ly_kh` int(11) NOT NULL,
  `ho_ten_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem_cn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian_cn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_chung_nhan`
--

INSERT INTO `quan_ly_chung_nhan` (`id_quan_ly_cn`, `id_quan_ly_kh`, `ho_ten_dang_ky`, `diem_cn`, `thoi_gian_cn`) VALUES
(5, 23, 'VÃµ Minh ThÃ nh', '4/4', '2018-12-09 15:59:29'),
(6, 23, 'Pháº¡m Ngá»c Háº£i', '4/5', '2018-12-10 13:32:38'),
(7, 23, 'Pháº¡m Ngá»c Háº£i', '5/5', '2018-12-10 18:04:29'),
(8, 23, 'Pháº¡m Ngá»c Háº£i', '5/5', '2018-12-10 18:11:40'),
(9, 23, 'Pháº¡m Ngá»c Háº£i', '5/5', '2018-12-10 18:15:32'),
(10, 23, 'VÃµ Minh ThÃ nh', '3/4', '2018-12-12 05:20:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_dang_ky`
--

CREATE TABLE `quan_ly_dang_ky` (
  `id_quan_ly_dk` int(11) NOT NULL,
  `ho_ten_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_tai_khoan_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lap_lai_mat_khau_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_dang_ky` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinh_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `huyen_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `truong_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop_dang_ky` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_tien_dang_ky` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_dang_ky`
--

INSERT INTO `quan_ly_dang_ky` (`id_quan_ly_dk`, `ho_ten_dang_ky`, `ten_tai_khoan_dang_ky`, `mat_khau_dang_ky`, `lap_lai_mat_khau_dang_ky`, `email_dang_ky`, `tinh_dang_ky`, `huyen_dang_ky`, `truong_dang_ky`, `lop_dang_ky`, `so_tien_dang_ky`) VALUES
(22, 'Pháº¡m Ngá»c Háº£i', 'hai1', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'hai@gmail.com', 'Cáº§n ThÆ¡', 'Ninh Kiá»u', 'TrÆ°á»ng 1C', '1', '510'),
(23, 'VÃµ Minh ThÃ nh', 'thanh', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'thanh@gmail.com', 'Cáº§n ThÆ¡', 'CÃ¡i RÄƒng', 'TrÆ°á»ng 1A', '1', '300'),
(24, 'KhÃ¡nh Duy', 'duy', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'duy@gmail.com', 'Háº­u Giang', 'Phá»¥ng Hiá»‡p', 'TrÆ°á»ng 1E', '1', '300'),
(25, 'ThÃ¡i Ngá»c', 'ngoc', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'ngoc@gmail.com', 'Háº­u Giang', 'Long Má»¹', 'TrÆ°á»ng 1H', '2', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_dien_dan`
--

CREATE TABLE `quan_ly_dien_dan` (
  `id_quan_ly_dd` int(11) NOT NULL,
  `cau_hoi_dien_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoi_hoi_dien_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_dien_dan`
--

INSERT INTO `quan_ly_dien_dan` (`id_quan_ly_dd`, `cau_hoi_dien_dan`, `nguoi_hoi_dien_dan`) VALUES
(11, 'MÃ´i trÆ°á»ng lÃ  gÃ¬ ?', 'Pháº¡m Ngá»c Háº£i'),
(12, 'hello', 'Pháº¡m Ngá»c Háº£i'),
(13, 'cÃ¢u há»i ?', 'VÃµ Minh ThÃ nh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_giao_vien`
--

CREATE TABLE `quan_ly_giao_vien` (
  `id_quan_ly_gv` int(11) NOT NULL,
  `hinh_anh_giao_vien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_giao_vien` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuyen_nganh_giao_vien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `truong_cua_giao_vien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_them_giao_vien` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_giao_vien`
--

INSERT INTO `quan_ly_giao_vien` (`id_quan_ly_gv`, `hinh_anh_giao_vien`, `ten_giao_vien`, `chuyen_nganh_giao_vien`, `truong_cua_giao_vien`, `mo_ta_them_giao_vien`) VALUES
(2, 'team_1.jpg', 'GiÃ¡o ViÃªn 1', 'GiÃ¡o ViÃªn', 'TrÆ°á»ng 1A', '<p>hello, everyone !</p>'),
(3, 'team_2.jpg', 'GiÃ¡o ViÃªn 2', 'GiÃ¡o ViÃªn', 'TrÆ°á»ng 1B', '<p>Gi&aacute;o Vi&ecirc;n, hello !</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_gui_email`
--

CREATE TABLE `quan_ly_gui_email` (
  `id_quan_ly_gemail` int(11) NOT NULL,
  `ten_gui_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_gui_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin_nhan_gui_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_gui_email`
--

INSERT INTO `quan_ly_gui_email` (`id_quan_ly_gemail`, `ten_gui_email`, `email_gui_email`, `tin_nhan_gui_email`) VALUES
(2, 'fgfg', 'fdgdfgdf', 'gdfgfdg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_khoa_hoc`
--

CREATE TABLE `quan_ly_khoa_hoc` (
  `id_quan_ly_kh` int(11) NOT NULL,
  `hinh_anh_khoa_hoc` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khoa_hoc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_khoa_hoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_khoa_hoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_luong_khoa_hoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bai_giang_khoa_hoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop_khoa_hoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_ngan_khoa_hoc` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_chi_tiet_khoa_hoc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_khoa_hoc`
--

INSERT INTO `quan_ly_khoa_hoc` (`id_quan_ly_kh`, `hinh_anh_khoa_hoc`, `ten_khoa_hoc`, `gia_khoa_hoc`, `loai_khoa_hoc`, `thoi_luong_khoa_hoc`, `bai_giang_khoa_hoc`, `lop_khoa_hoc`, `mo_ta_ngan_khoa_hoc`, `mo_ta_chi_tiet_khoa_hoc`) VALUES
(23, '20577baa6214f02.jpg', 'Giá»¯ gÃ¬n vá»‡ sinh', '200', 'HÃ¬nh áº¢nh', '2', '2', '1', '<p>Giá»¯ g&igrave;n vá»‡ sinh ráº¥t quan trong.</p>', '<p>Giá»¯ g&igrave;n vá»‡ sinh ráº¥t quan trong v&agrave; c&oacute; ich cho x&atilde; há»™i.</p>'),
(24, 'World.jpg', 'Báº£o vá»‡ nguá»“n nÆ°á»›c', '300', 'Video', '2', '2', '1', '<p>Báº£o vá»‡ nguá»“n nÆ°á»›c ráº¥t quan trá»ng.</p>', '<p>Báº£o vá»‡ nguá»“n nÆ°á»›c ráº¥t quan trá»ng v&agrave; c&oacute; &iacute;ch cho x&atilde; há»™i.</p>'),
(25, 'dn1_1.jpg', 'Sá»­ dá»¥ng cÃ¡c cháº¥t liá»‡u tá»« thiÃªn nhiÃªn', '150', 'HÃ¬nh áº¢nh', '2', '3', '1', '<p>sá»­ dá»¥ng cháº¥t liá»‡u tá»« thi&ecirc;n nhi&ecirc;n</p>', '<p>sá»­ dá»¥ng cháº¥t liá»‡u tá»« thi&ecirc;n nhi&ecirc;n</p>'),
(26, 'a.jpg', 'NguyÃªn táº¯c 3R', '250', 'HÃ¬nh áº¢nh', '2', '3', '1', '<p>Nguy&ecirc;n táº¯c 3R</p>', '<p>Nguy&ecirc;n táº¯c 3R, ráº¥t hay !</p>'),
(27, '_MG_0013 resize.JPG', 'Ta táº¯m ao ta', '125', 'Video', '2', '2', '1', '<p>Ta táº¯m ao ta</p>', '<p>Ta táº¯m ao ta, ráº¥t hay !</p>'),
(28, 'cay1.jpg', 'Tiáº¿t kiá»‡m giáº¥y', '190', 'Video', '2', '2', '1', '<p>Tiáº¿t kiá»‡m giáº¥y</p>', '<p>Tiáº¿t kiá»‡m giáº¥y, hay láº¯m !</p>'),
(29, 'bao-ve-moi-truong-1.jpg', 'Giáº£m sá»­ dá»¥ng tÃºi nilong', '170', 'HÃ¬nh áº¢nh', '2', '2', '2', '<p>Giáº£m sá»­ dá»¥ng t&uacute;i nilong</p>', '<p>Giáº£m sá»­ dá»¥ng t&uacute;i nilong, ráº¥t hay !</p>'),
(30, 'dau-tu-an-toan.jpg', 'Táº­n dá»¥ng Ã¡nh sÃ¡ng máº·t trá»i', '234', 'Video', '2', '2', '2', '<p>Táº­n dá»¥ng &aacute;nh s&aacute;ng máº·t trá»i</p>', '<p>Táº­n dá»¥ng &aacute;nh s&aacute;ng máº·t trá»i</p>'),
(31, 'bao-ve-moi-truong.jpg', 'Sá»­ dá»¥ng cÃ¡c tiáº¿n bá»™ cá»§a khoa há»c', '324', 'HÃ¬nh áº¢nh', '2', '2', '2', '<p>Sá»­ dá»¥ng c&aacute;c tiáº¿n bá»™ cá»§a khoa há»c</p>', '<p>Sá»­ dá»¥ng c&aacute;c tiáº¿n bá»™ cá»§a khoa há»c, ráº¥t hay !</p>'),
(32, 'maxresdefault.jpg', 'Thu gom pin há»ng', '223', 'HÃ¬nh áº¢nh', '2', '2', '3', '<p>Thu gom pin há»ng</p>', '<p>Thu gom pin há»ng, ráº¥t hay !</p>'),
(33, 'bao-ve-moi-truong-460x345.jpg', 'Háº¡n cháº¿ dÃ¹ng tÃºi nilong', '112', 'HÃ¬nh áº¢nh', '2', '2', '3', '<p>Háº¡n cháº¿ d&ugrave;ng t&uacute;i nilong</p>', '<p>Háº¡n cháº¿ d&ugrave;ng t&uacute;i nilong, ráº¥t hay !</p>'),
(34, 'baovemoitruong(3).jpg', 'TÃ¡i táº¡o rÃ¡c há»¯u cÆ¡ thÃ nh phÃ¢n xanh', '121', 'HÃ¬nh áº¢nh', '2', '2', '4', '<p>T&aacute;i táº¡o r&aacute;c há»¯u cÆ¡ th&agrave;nh ph&acirc;n xanh</p>', '<p>T&aacute;i táº¡o r&aacute;c há»¯u cÆ¡ th&agrave;nh ph&acirc;n xanh, ráº¥t hay !</p>'),
(35, 'chinh-sach-cua-nha-nuoc-ve-bao-ve-moi-truong.jpg', 'Sá»­ dá»¥ng bÃ¡nh xÃ  phÃ²ng tá»« nguyÃªn liá»‡u thiÃªn nhiÃªn', '243', 'HÃ¬nh áº¢nh', '2', '2', '4', '<p>Sá»­ dá»¥ng b&aacute;nh x&agrave; ph&ograve;ng tá»« nguy&ecirc;n liá»‡u thi&ecirc;n nhi&ecirc;n</p>', '<p>Sá»­ dá»¥ng b&aacute;nh x&agrave; ph&ograve;ng tá»« nguy&ecirc;n liá»‡u thi&ecirc;n nhi&ecirc;n, ráº¥t hay !</p>'),
(36, 'cong-ty-moi-truong-tu-van-bao-ve-moi-truong-1.jpg', 'Háº¡n cháº¿ chay nÆ°á»›c dÃ¹ng má»™t láº§n', '112', 'HÃ¬nh áº¢nh', '2', '2', '5', '<p>Háº¡n cháº¿ chay nÆ°á»›c d&ugrave;ng má»™t láº§n</p>', '<p>Háº¡n cháº¿ chay nÆ°á»›c d&ugrave;ng má»™t láº§n, ráº¥t hay !</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_khoa_hoc_cua_giao_vien`
--

CREATE TABLE `quan_ly_khoa_hoc_cua_giao_vien` (
  `id_quan_ly_kh_cua_gv` int(11) NOT NULL,
  `ten_giao_vien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khoa_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_khoa_hoc_cua_giao_vien`
--

INSERT INTO `quan_ly_khoa_hoc_cua_giao_vien` (`id_quan_ly_kh_cua_gv`, `ten_giao_vien`, `ten_khoa_hoc`) VALUES
(6, 'GiÃ¡o ViÃªn 1', 'Giá»¯ gÃ¬n vá»‡ sinh'),
(7, 'GiÃ¡o ViÃªn 2', 'Báº£o vá»‡ nguá»“n nÆ°á»›c'),
(9, 'GiÃ¡o ViÃªn 1', 'NguyÃªn táº¯c 3R'),
(10, 'GiÃ¡o ViÃªn 1', 'Ta táº¯m ao ta'),
(11, 'GiÃ¡o ViÃªn 1', 'Tiáº¿t kiá»‡m giáº¥y'),
(12, 'GiÃ¡o ViÃªn 1', 'Giáº£m sá»­ dá»¥ng tÃºi nilong'),
(13, 'GiÃ¡o ViÃªn 1', 'Táº­n dá»¥ng Ã¡nh sÃ¡ng máº·t trá»i'),
(14, 'GiÃ¡o ViÃªn 1', 'Sá»­ dá»¥ng cÃ¡c tiáº¿n bá»™ cá»§a khoa há»c'),
(16, 'GiÃ¡o ViÃªn 1', 'Thu gom pin há»ng'),
(17, 'GiÃ¡o ViÃªn 1', 'Háº¡n cháº¿ dÃ¹ng tÃºi nilong'),
(18, 'GiÃ¡o ViÃªn 1', 'TÃ¡i táº¡o rÃ¡c há»¯u cÆ¡ thÃ nh phÃ¢n xanh'),
(19, 'GiÃ¡o ViÃªn 1', 'Sá»­ dá»¥ng bÃ¡nh xÃ  phÃ²ng tá»« nguyÃªn liá»‡u thiÃªn nhiÃªn'),
(20, 'GiÃ¡o ViÃªn 1', 'Háº¡n cháº¿ chay nÆ°á»›c dÃ¹ng má»™t láº§n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_kiem_tra_bai_hoc`
--

CREATE TABLE `quan_ly_kiem_tra_bai_hoc` (
  `id_quan_ly_ktbh` int(11) NOT NULL,
  `id_quan_ly_bh` int(11) NOT NULL,
  `cau_hoi_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_1_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_2_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_3_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_4_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_dung_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_ch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_kiem_tra_bai_hoc`
--

INSERT INTO `quan_ly_kiem_tra_bai_hoc` (`id_quan_ly_ktbh`, `id_quan_ly_bh`, `cau_hoi_1`, `tra_loi_1_ch1`, `tra_loi_2_ch1`, `tra_loi_3_ch1`, `tra_loi_4_ch1`, `tra_loi_dung_ch1`, `hinh_ch`) VALUES
(14, 15, '<p>Ä&acirc;y l&agrave; loáº¡i r&aacute;c g&igrave; ?</p>', '<p>Ráº¯n</p>', '<p>Lá»ng</p>', '<p>Kh&iacute;</p>', '<p>Cáº£ ba Ä‘&aacute;p &aacute;n</p>', '<p>Ráº¯n</p>', 'chay_nuoc_kiem_tra_bai.jpg'),
(15, 16, '<p>T&agrave;i nguy&ecirc;n n&agrave;o sau Ä‘&acirc;y Ä‘Æ°á»£c xem l&agrave; nguá»“n nÄƒng lÆ°á»£ng sáº¡ch?</p>', '<p>Bá»©c xáº¡ máº·t trá»i, gi&oacute;, nhiá»‡t trong l&ograve;ng Ä‘áº¥t</p>', '<p>Dáº§u má», kh&iacute; Ä‘á»‘t</p>', '<p>Than Ä‘&aacute; v&agrave; nguá»“n kho&aacute;ng sáº£n kim loáº¡i</p>', '<p>Dáº§u má», thá»§y triá»u</p>', '<p>Dáº§u má», thá»§y triá»u</p>', ''),
(16, 15, '<p>Nguá»“n nÄƒng lÆ°á»£ng vÄ©nh cá»­u l&agrave;:</p>', '<p>NÄƒng lÆ°á»£ng kh&iacute; Ä‘á»‘t</p>', '<p>NÄƒng lÆ°á»£ng tá»« dáº§u má»</p>', '<p>NÄƒng lÆ°á»£ng nhiá»‡t tá»« máº·t trá»i</p>', '<p>NÄƒng lÆ°á»£ng tá»« than cá»§i</p>', '<p>NÄƒng lÆ°á»£ng nhiá»‡t tá»« máº·t trá»i</p>', ''),
(17, 19, '<p>Dá»±a v&agrave;o yáº¿u tá»‘ n&agrave;o sau Ä‘&acirc;y Ä‘á»ƒ xáº¿p Ä‘áº¥t v&agrave;o nguá»“n t&agrave;i nguy&ecirc;n t&aacute;i sinh:</p>', '<p>Trong Ä‘áº¥t chá»©a nhiá»u kho&aacute;ng sáº£n kim loáº¡i</p>', '<p>Äáº¥t thÆ°á»ng xuy&ecirc;n Ä‘Æ°á»£c bá»“i Ä‘áº¯p bá»Ÿi ph&ugrave; sa, Ä‘Æ°á»£c tÄƒng Ä‘á»™ m&ugrave;n tá»« x&aacute;c Ä‘á»™ng thá»±c váº­t</p>', '<p>Trong Ä‘áº¥t c&oacute; nhiá»u than Ä‘&aacute;</p>', '<p>Nhiá»u quáº·ng dáº§u má», kh&iacute; Ä‘á»‘t trong l&ograve;ng Ä‘áº¥t</p>', '<p>Nhiá»u quáº·ng dáº§u má», kh&iacute; Ä‘á»‘t trong l&ograve;ng Ä‘áº¥t</p>', ''),
(18, 17, '<p>H&atilde;y cho biáº¿t nh&oacute;m t&agrave;i nguy&ecirc;n n&agrave;o sau Ä‘&acirc;y l&agrave; c&ugrave;ng má»™t dáº¡ng (t&agrave;i nguy&ecirc;n t&aacute;i sinh, kh&ocirc;ng t&aacute;i sinh hoáº·c nÄƒng lÆ°á»£ng vÄ©nh cá»­u)</p>', '<p>Rá»«ng, t&agrave;i nguy&ecirc;n Ä‘áº¥t, t&agrave;i nguy&ecirc;n nÆ°á»›c</p>', '<p>Dáº§u má», kh&iacute; Ä‘á»‘t, t&agrave;i nguy&ecirc;n sinh váº­t</p>', '<p>Bá»©c xáº¡ máº·t trá»i, rá»«ng, nÆ°á»›c</p>', '<p>sinh váº­t</p>', '<p>sinh váº­t</p>', ''),
(19, 16, '<p>Loáº¡i Ph&acirc;n n&agrave;y l&agrave; ph&acirc;n g&igrave; ?</p>', '<p>Há»¯u cÆ¡</p>', '<p>Ph&acirc;n l&acirc;n</p>', '<p>Ph&acirc;n kali</p>', '<p>Ph&acirc;n Ure</p>', '<p>Há»¯u cÆ¡</p>', 'u-phan-huu-co-bang-che-pham-trichoderma-2.jpg'),
(20, 17, '<p>C&acirc;y n&agrave;y l&agrave; c&acirc;y g&igrave; ?</p>', '<p>cafe</p>', '<p>Nho</p>', '<p>Ti&ecirc;u</p>', '<p>Nh&atilde;n</p>', '<p>cafe</p>', '310112103554.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_kiem_tra_khoa_hoc`
--

CREATE TABLE `quan_ly_kiem_tra_khoa_hoc` (
  `id_quan_ly_ktkh` int(11) NOT NULL,
  `id_quan_ly_kh` int(11) NOT NULL,
  `cau_hoi_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_1_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_2_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_3_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_4_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_dung_ch1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_ch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_kiem_tra_khoa_hoc`
--

INSERT INTO `quan_ly_kiem_tra_khoa_hoc` (`id_quan_ly_ktkh`, `id_quan_ly_kh`, `cau_hoi_1`, `tra_loi_1_ch1`, `tra_loi_2_ch1`, `tra_loi_3_ch1`, `tra_loi_4_ch1`, `tra_loi_dung_ch1`, `hinh_ch`) VALUES
(7, 23, '<p>T&agrave;i nguy&ecirc;n n&agrave;o sau Ä‘&acirc;y thuá»™c t&agrave;i nguy&ecirc;n kh&ocirc;ng t&aacute;i sinh:</p>', '<p>rá»«ng</p>', '<p>Ä‘áº¥t</p>', '<p>kho&aacute;ng sáº£n</p>', '<p>sinh váº­t</p>', '<p>sinh váº­t</p>', ''),
(8, 23, '<p>T&agrave;i nguy&ecirc;n n&agrave;o sau Ä‘&acirc;y thuá»™c t&agrave;i nguy&ecirc;n t&aacute;i sinh</p>', '<p>sinh váº­t</p>', '<p>Ä‘áº¥t</p>', '<p>nÆ°á»›c</p>', '<p>máº·t trá»i</p>', '<p>máº·t trá»i</p>', ''),
(9, 23, '<p>Gi&oacute; v&agrave; nÄƒng lÆ°á»£ng nhiá»‡t tá»« trong l&ograve;ng Ä‘áº¥t Ä‘Æ°á»£c xáº¿p v&agrave;o nguá»“n t&agrave;i nguy&ecirc;n n&agrave;o sau Ä‘&acirc;y:</p>', '<p>kh&ocirc;ng t&aacute;i sinh</p>', '<p>nÄƒng lÆ°á»£ng vÄ©nh cá»­u</p>', '<p>kh&ocirc;ng t&aacute;i sinh</p>', '<p>cáº£ 3</p>', '<p>cáº£ 3</p>', ''),
(10, 24, '<p>T&agrave;i nguy&ecirc;n dÆ°á»›i Ä‘&acirc;y c&oacute; gi&aacute; trá»‹ v&ocirc; táº­n l&agrave;:</p>', '<p>Dáº§u má», than Ä‘&aacute; v&agrave; kh&iacute; Ä‘á»‘t</p>', '<p>T&agrave;i nguy&ecirc;n kho&aacute;ng sáº£n v&agrave; t&agrave;i nguy&ecirc;n sinh váº­t</p>', '<p>NÄƒng lÆ°á»£ng máº·t trá»i</p>', '<p>C&acirc;y rá»«ng v&agrave; th&uacute; rá»«ng</p>', '<p>C&acirc;y rá»«ng v&agrave; th&uacute; rá»«ng</p>', ''),
(11, 23, '<p>C&oacute; máº¥y dáº¡ng t&agrave;i nguy&ecirc;n</p>', '<p>1</p>', '<p>2</p>', '<p>3</p>', '<p>4</p>', '<p>4</p>', '104144_dat.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_nguoi_dang_ky_khoa_hoc`
--

CREATE TABLE `quan_ly_nguoi_dang_ky_khoa_hoc` (
  `id_quan_ly_ndkkh` int(11) NOT NULL,
  `id_quan_ly_kh` int(11) NOT NULL,
  `id_quan_ly_dk` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_nguoi_dang_ky_khoa_hoc`
--

INSERT INTO `quan_ly_nguoi_dang_ky_khoa_hoc` (`id_quan_ly_ndkkh`, `id_quan_ly_kh`, `id_quan_ly_dk`, `ten_khoa_hoc`, `ho_ten_dang_ky`, `trang_thai`) VALUES
(6, 23, 24, 'Giá»¯ gÃ¬n vá»‡ sinh', 'KhÃ¡nh Duy', 'chÆ°a hoÃ n thÃ nh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_tai_khoan`
--

CREATE TABLE `quan_ly_tai_khoan` (
  `id_quan_ly_tk` int(11) NOT NULL,
  `ho_ten_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tai_khoan_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_tai_khoan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_tai_khoan`
--

INSERT INTO `quan_ly_tai_khoan` (`id_quan_ly_tk`, `ho_ten_nguoi_dung`, `tai_khoan_nguoi_dung`, `mat_khau_nguoi_dung`, `loai_tai_khoan`) VALUES
(6, 'Quá»‘c Vinh', 'root', '63a9f0ea7bb98050796b649e85481845', 'ql'),
(7, 'GiÃ¡o ViÃªn 1', 'giaovien1', '202cb962ac59075b964b07152d234b70', 'gv'),
(8, 'GiÃ¡o ViÃªn 2', 'giaovien2', '202cb962ac59075b964b07152d234b70', 'gv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa`
--

CREATE TABLE `quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa` (
  `id_quan_ly_ktck` int(11) NOT NULL,
  `id_quan_ly_kh` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem_kiem_tra_cuoi_khoa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai_duyet_kiem_tra` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_trang_thai_nguoi_hoc_khoa_hoc`
--

CREATE TABLE `quan_ly_trang_thai_nguoi_hoc_khoa_hoc` (
  `id_quan_ly_nhkh` int(11) NOT NULL,
  `id_quan_ly_bh` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_bai_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten_dang_ky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_trang_thai_nguoi_hoc_khoa_hoc`
--

INSERT INTO `quan_ly_trang_thai_nguoi_hoc_khoa_hoc` (`id_quan_ly_nhkh`, `id_quan_ly_bh`, `ten_khoa_hoc`, `ten_bai_hoc`, `ho_ten_dang_ky`, `trang_thai`) VALUES
(16, 15, 'Giá»¯ gÃ¬n vá»‡ sinh', 'BÃ i há»c chÄƒm sÃ³c cÃ¢y tá»‘t', 'KhÃ¡nh Duy', 'chÆ°a hoÃ n thÃ nh'),
(17, 16, 'Giá»¯ gÃ¬n vá»‡ sinh', 'BÃ i há»c giá»¯ gÃ¬n nguá»“n nÄƒng lÆ°á»£ng', 'KhÃ¡nh Duy', 'chÆ°a hoÃ n thÃ nh'),
(18, 17, 'Giá»¯ gÃ¬n vá»‡ sinh', 'Báº£o vá»‡ mÃ´i trÆ°á»ng nÆ¡i cÃ´ng cá»™ng', 'KhÃ¡nh Duy', 'chÆ°a hoÃ n thÃ nh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_tra_loi_dien_dan`
--

CREATE TABLE `quan_ly_tra_loi_dien_dan` (
  `id_quan_ly_tldd` int(11) NOT NULL,
  `nguoi_tra_loi_dien_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cau_hoi_dien_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_loi_dien_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_tra_loi_dien_dan`
--

INSERT INTO `quan_ly_tra_loi_dien_dan` (`id_quan_ly_tldd`, `nguoi_tra_loi_dien_dan`, `cau_hoi_dien_dan`, `tra_loi_dien_dan`) VALUES
(13, 'VÃµ Minh ThÃ nh', 'MÃ´i trÆ°á»ng lÃ  gÃ¬ ?', 'MÃ´i trÆ°á»ng lÃ  táº¥t cáº£ nhá»¯ng gÃ¬ xung quanh !'),
(14, 'VÃµ Minh ThÃ nh', 'hello', 'hihi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `star`
--

CREATE TABLE `star` (
  `id` int(11) NOT NULL,
  `id_quan_ly_kh` int(11) NOT NULL,
  `nguoi_danh_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `dt_rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `star`
--

INSERT INTO `star` (`id`, `id_quan_ly_kh`, `nguoi_danh_gia`, `rate`, `dt_rated`) VALUES
(1, 23, 'VÃµ Minh ThÃ nh', 4, '2018-12-09 14:57:09'),
(2, 23, 'KhÃ¡nh Duy', 3, '2018-12-09 15:02:35'),
(3, 23, 'Pháº¡m Ngá»c Háº£i', 5, '2018-12-10 11:36:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu_khoahoc_hinhanh`
--

CREATE TABLE `tailieu_khoahoc_hinhanh` (
  `id_tailieu` int(11) NOT NULL,
  `id_khoahoc` int(11) NOT NULL,
  `doan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaitl` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motatl` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tailieu_khoahoc_hinhanh`
--

INSERT INTO `tailieu_khoahoc_hinhanh` (`id_tailieu`, `id_khoahoc`, `doan`, `loaitl`, `motatl`) VALUES
(1, 1, '1', 'chu', 'hello1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_privilege`
--

CREATE TABLE `user_privilege` (
  `id_privilege` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilege` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_privilege`
--

INSERT INTO `user_privilege` (`id_privilege`, `username`, `privilege`) VALUES
(5, 'vinh', 'quan ly'),
(6, 'hien', 'binh thuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_table`
--

CREATE TABLE `user_table` (
  `id_user` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_confirm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_table`
--

INSERT INTO `user_table` (`id_user`, `hoten`, `username`, `password`, `password_confirm`) VALUES
(23, 'Le Quoc Vinh', 'vinh', '123', '123'),
(24, 'Pháº¡m Thu Hiá»n', 'hien', '123', '123'),
(25, 'root', 'root', '123', '123'),
(26, 'temp', 'temp', '123', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangky_form`
--
ALTER TABLE `dangky_form`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id_file`);

--
-- Chỉ mục cho bảng `khoahoc_hinhanh`
--
ALTER TABLE `khoahoc_hinhanh`
  ADD PRIMARY KEY (`id_khoahoc`);

--
-- Chỉ mục cho bảng `quan_ly_bai_hoc`
--
ALTER TABLE `quan_ly_bai_hoc`
  ADD PRIMARY KEY (`id_quan_ly_bh`);

--
-- Chỉ mục cho bảng `quan_ly_binh_luan`
--
ALTER TABLE `quan_ly_binh_luan`
  ADD PRIMARY KEY (`id_quan_ly_bl`);

--
-- Chỉ mục cho bảng `quan_ly_chung_nhan`
--
ALTER TABLE `quan_ly_chung_nhan`
  ADD PRIMARY KEY (`id_quan_ly_cn`);

--
-- Chỉ mục cho bảng `quan_ly_dang_ky`
--
ALTER TABLE `quan_ly_dang_ky`
  ADD PRIMARY KEY (`id_quan_ly_dk`);

--
-- Chỉ mục cho bảng `quan_ly_dien_dan`
--
ALTER TABLE `quan_ly_dien_dan`
  ADD PRIMARY KEY (`id_quan_ly_dd`);

--
-- Chỉ mục cho bảng `quan_ly_giao_vien`
--
ALTER TABLE `quan_ly_giao_vien`
  ADD PRIMARY KEY (`id_quan_ly_gv`);

--
-- Chỉ mục cho bảng `quan_ly_gui_email`
--
ALTER TABLE `quan_ly_gui_email`
  ADD PRIMARY KEY (`id_quan_ly_gemail`);

--
-- Chỉ mục cho bảng `quan_ly_khoa_hoc`
--
ALTER TABLE `quan_ly_khoa_hoc`
  ADD PRIMARY KEY (`id_quan_ly_kh`);

--
-- Chỉ mục cho bảng `quan_ly_khoa_hoc_cua_giao_vien`
--
ALTER TABLE `quan_ly_khoa_hoc_cua_giao_vien`
  ADD PRIMARY KEY (`id_quan_ly_kh_cua_gv`);

--
-- Chỉ mục cho bảng `quan_ly_kiem_tra_bai_hoc`
--
ALTER TABLE `quan_ly_kiem_tra_bai_hoc`
  ADD PRIMARY KEY (`id_quan_ly_ktbh`);

--
-- Chỉ mục cho bảng `quan_ly_kiem_tra_khoa_hoc`
--
ALTER TABLE `quan_ly_kiem_tra_khoa_hoc`
  ADD PRIMARY KEY (`id_quan_ly_ktkh`);

--
-- Chỉ mục cho bảng `quan_ly_nguoi_dang_ky_khoa_hoc`
--
ALTER TABLE `quan_ly_nguoi_dang_ky_khoa_hoc`
  ADD PRIMARY KEY (`id_quan_ly_ndkkh`);

--
-- Chỉ mục cho bảng `quan_ly_tai_khoan`
--
ALTER TABLE `quan_ly_tai_khoan`
  ADD PRIMARY KEY (`id_quan_ly_tk`);

--
-- Chỉ mục cho bảng `quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa`
--
ALTER TABLE `quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa`
  ADD PRIMARY KEY (`id_quan_ly_ktck`);

--
-- Chỉ mục cho bảng `quan_ly_trang_thai_nguoi_hoc_khoa_hoc`
--
ALTER TABLE `quan_ly_trang_thai_nguoi_hoc_khoa_hoc`
  ADD PRIMARY KEY (`id_quan_ly_nhkh`);

--
-- Chỉ mục cho bảng `quan_ly_tra_loi_dien_dan`
--
ALTER TABLE `quan_ly_tra_loi_dien_dan`
  ADD PRIMARY KEY (`id_quan_ly_tldd`);

--
-- Chỉ mục cho bảng `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tailieu_khoahoc_hinhanh`
--
ALTER TABLE `tailieu_khoahoc_hinhanh`
  ADD PRIMARY KEY (`id_tailieu`);

--
-- Chỉ mục cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD PRIMARY KEY (`id_privilege`);

--
-- Chỉ mục cho bảng `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangky_form`
--
ALTER TABLE `dangky_form`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT cho bảng `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `khoahoc_hinhanh`
--
ALTER TABLE `khoahoc_hinhanh`
  MODIFY `id_khoahoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `quan_ly_bai_hoc`
--
ALTER TABLE `quan_ly_bai_hoc`
  MODIFY `id_quan_ly_bh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `quan_ly_binh_luan`
--
ALTER TABLE `quan_ly_binh_luan`
  MODIFY `id_quan_ly_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `quan_ly_chung_nhan`
--
ALTER TABLE `quan_ly_chung_nhan`
  MODIFY `id_quan_ly_cn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `quan_ly_dang_ky`
--
ALTER TABLE `quan_ly_dang_ky`
  MODIFY `id_quan_ly_dk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT cho bảng `quan_ly_dien_dan`
--
ALTER TABLE `quan_ly_dien_dan`
  MODIFY `id_quan_ly_dd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `quan_ly_giao_vien`
--
ALTER TABLE `quan_ly_giao_vien`
  MODIFY `id_quan_ly_gv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `quan_ly_gui_email`
--
ALTER TABLE `quan_ly_gui_email`
  MODIFY `id_quan_ly_gemail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `quan_ly_khoa_hoc`
--
ALTER TABLE `quan_ly_khoa_hoc`
  MODIFY `id_quan_ly_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT cho bảng `quan_ly_khoa_hoc_cua_giao_vien`
--
ALTER TABLE `quan_ly_khoa_hoc_cua_giao_vien`
  MODIFY `id_quan_ly_kh_cua_gv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `quan_ly_kiem_tra_bai_hoc`
--
ALTER TABLE `quan_ly_kiem_tra_bai_hoc`
  MODIFY `id_quan_ly_ktbh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `quan_ly_kiem_tra_khoa_hoc`
--
ALTER TABLE `quan_ly_kiem_tra_khoa_hoc`
  MODIFY `id_quan_ly_ktkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `quan_ly_nguoi_dang_ky_khoa_hoc`
--
ALTER TABLE `quan_ly_nguoi_dang_ky_khoa_hoc`
  MODIFY `id_quan_ly_ndkkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `quan_ly_tai_khoan`
--
ALTER TABLE `quan_ly_tai_khoan`
  MODIFY `id_quan_ly_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa`
--
ALTER TABLE `quan_ly_trang_thai_bai_kiem_tra_cuoi_khoa`
  MODIFY `id_quan_ly_ktck` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `quan_ly_trang_thai_nguoi_hoc_khoa_hoc`
--
ALTER TABLE `quan_ly_trang_thai_nguoi_hoc_khoa_hoc`
  MODIFY `id_quan_ly_nhkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `quan_ly_tra_loi_dien_dan`
--
ALTER TABLE `quan_ly_tra_loi_dien_dan`
  MODIFY `id_quan_ly_tldd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `star`
--
ALTER TABLE `star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tailieu_khoahoc_hinhanh`
--
ALTER TABLE `tailieu_khoahoc_hinhanh`
  MODIFY `id_tailieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `user_privilege`
--
ALTER TABLE `user_privilege`
  MODIFY `id_privilege` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
