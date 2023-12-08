-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 10:42 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlktx`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietchuyenphongs`
--

CREATE TABLE `chitietchuyenphongs` (
  `MaCP` int(10) UNSIGNED NOT NULL,
  `mssv` int(10) UNSIGNED NOT NULL,
  `MaPhongO` int(10) UNSIGNED NOT NULL,
  `MaPhongChuyen` int(10) UNSIGNED NOT NULL,
  `LyDo` varchar(50) DEFAULT NULL,
  `TinhTrang` varchar(20) DEFAULT 'Chưa Duyệt',
  `NgayDangKy` date DEFAULT current_timestamp(),
  `NgayChuyen` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietchuyenphongs`
--

INSERT INTO `chitietchuyenphongs` (`MaCP`, `mssv`, `MaPhongO`, `MaPhongChuyen`, `LyDo`, `TinhTrang`, `NgayDangKy`, `NgayChuyen`, `created_at`, `updated_at`) VALUES
(12, 2014803, 1101, 1105, 'Không hợp với các bạn cùng phòng.', 'Đã duyệt', '2023-11-14', NULL, '2023-11-14 03:27:45', '2023-11-14 03:27:45'),
(13, 2003921, 2202, 2105, 'Phòng quá chật.', 'Đã duyệt', '2023-11-14', NULL, '2023-11-14 03:45:53', '2023-11-14 03:45:53'),
(14, 2003921, 2105, 2102, 'Không hợp với các bạn cùng phòng.', 'Chưa Duyệt', '2023-11-19', '2023-11-22', '2023-11-19 01:29:37', '2023-11-19 01:29:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdangkies`
--

CREATE TABLE `chitietdangkies` (
  `MaDK` int(10) UNSIGNED NOT NULL,
  `mssv` int(10) UNSIGNED NOT NULL,
  `MaPhong` int(10) UNSIGNED NOT NULL,
  `MaNV` int(10) UNSIGNED DEFAULT NULL,
  `NgayDangky` date NOT NULL DEFAULT current_timestamp(),
  `NgayTraPhong` date DEFAULT NULL,
  `TinhTrang` varchar(20) NOT NULL DEFAULT 'Chưa Duyệt',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdangkies`
--

INSERT INTO `chitietdangkies` (`MaDK`, `mssv`, `MaPhong`, `MaNV`, `NgayDangky`, `NgayTraPhong`, `TinhTrang`, `created_at`, `updated_at`) VALUES
(82, 2014803, 1105, 1, '2023-11-14', '2023-11-22', 'Đã Trả', '2023-11-14 03:12:20', '2023-11-14 03:12:20'),
(83, 2014805, 1105, 1, '2023-11-14', NULL, 'Đã duyệt', '2023-11-14 03:34:10', '2023-11-14 03:34:10'),
(84, 2003921, 2105, 1, '2023-11-14', NULL, 'Đã duyệt', '2023-11-14 03:44:57', '2023-11-14 03:44:57'),
(85, 2005755, 1104, 1, '2023-11-14', '2023-11-30', 'Chưa Duyệt', '2023-11-14 03:55:28', '2023-11-14 03:55:28'),
(86, 2012265, 1104, 1, '2023-11-14', NULL, 'Đã duyệt', '2023-11-14 03:56:19', '2023-11-14 03:56:19'),
(87, 2014754, 1101, NULL, '2023-11-14', NULL, 'Chưa Duyệt', '2023-11-14 03:58:46', '2023-11-14 03:58:46'),
(88, 2014803, 1105, 1, '2023-11-19', NULL, 'Đã duyệt', '2023-11-19 02:13:31', '2023-11-19 02:13:31'),
(90, 2014803, 1101, 1, '2023-11-27', NULL, 'Đã duyệt', '2023-11-26 20:08:14', '2023-11-26 20:08:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `days`
--

CREATE TABLE `days` (
  `MaDay` int(10) UNSIGNED NOT NULL,
  `TenDay` varchar(5) DEFAULT NULL,
  `Sex` varchar(5) DEFAULT NULL,
  `SoPhong` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `days`
--

INSERT INTO `days` (`MaDay`, `TenDay`, `Sex`, `SoPhong`, `created_at`, `updated_at`) VALUES
(11, 'C1', 'Nam', 10, '2023-11-01 13:57:08', '2023-11-13 13:57:08'),
(12, 'C2', 'Nam', 10, '2023-11-01 13:57:18', '2023-11-13 13:57:18'),
(13, 'C3', 'Nam', 10, '2023-11-01 13:57:28', '2023-11-13 13:57:28'),
(14, 'C4', 'Nam', 10, '2023-11-01 13:57:38', '2023-11-13 13:57:38'),
(15, 'C5', 'Nam', 10, '2023-11-01 13:58:25', '2023-11-13 13:58:25'),
(16, 'C6', 'Nam', 5, '2023-11-26 09:36:33', '2023-11-26 09:36:33'),
(21, 'B1', 'Nữ', 5, '2023-11-01 14:00:07', '2023-11-13 14:00:07'),
(22, 'B2', 'Nữ', 5, '2023-11-01 14:00:19', '2023-11-13 14:00:19'),
(23, 'B3', 'Nữ', 5, '2023-11-01 14:25:04', '2023-11-13 14:25:04'),
(24, 'B4', 'Nữ', 5, '2023-11-01 14:25:48', '2023-11-13 14:25:48'),
(25, 'B5', 'Nữ', 5, '2023-11-01 14:26:00', '2023-11-13 14:26:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadons`
--

CREATE TABLE `hoadons` (
  `Mahoadon` int(11) NOT NULL,
  `Maphong` int(10) UNSIGNED NOT NULL,
  `Thang` int(11) NOT NULL,
  `Tiendien` decimal(11,0) NOT NULL,
  `Tiennuoc` decimal(11,0) NOT NULL,
  `tinhtrang` varchar(20) NOT NULL DEFAULT 'chưa thu',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadons`
--

INSERT INTO `hoadons` (`Mahoadon`, `Maphong`, `Thang`, `Tiendien`, `Tiennuoc`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(5, 1105, 1, '300000', '150000', 'chưa thu', '2023-11-14 03:36:44', '2023-11-14 03:36:44'),
(6, 2102, 1, '400000', '500000', 'đã thu', '2023-11-14 03:38:04', '2023-11-14 03:38:04'),
(7, 1101, 1, '100000', '50000', 'đã thu', '2023-11-14 03:49:05', '2023-11-14 03:49:05'),
(8, 1102, 1, '250000', '150000', 'chưa thu', '2023-11-14 03:49:29', '2023-11-14 03:49:29'),
(9, 1103, 1, '400000', '150000', 'chưa thu', '2023-11-14 03:50:03', '2023-11-14 03:50:03'),
(10, 1104, 1, '140000', '50000', 'chưa thu', '2023-11-14 03:50:16', '2023-11-14 03:50:16'),
(11, 2101, 1, '140000', '45000', 'chưa thu', '2023-11-14 03:50:54', '2023-11-14 03:50:54'),
(12, 2103, 1, '420000', '140000', 'chưa thu', '2023-11-14 03:51:15', '2023-11-14 03:51:15'),
(13, 2104, 1, '131400', '100000', 'chưa thu', '2023-11-14 03:51:30', '2023-11-14 03:51:30'),
(14, 2105, 1, '200000', '100000', 'chưa thu', '2023-11-14 03:51:47', '2023-11-14 03:51:47'),
(15, 2201, 1, '140000', '100000', 'chưa thu', '2023-11-14 03:52:00', '2023-11-14 03:52:00'),
(16, 2202, 1, '200000', '100000', 'chưa thu', '2023-11-14 03:52:19', '2023-11-14 03:52:19'),
(17, 2203, 1, '100000', '100000', 'chưa thu', '2023-11-14 03:52:31', '2023-11-14 03:52:31'),
(18, 1101, 2, '200000', '100000', 'đã thu', '2023-11-19 01:35:10', '2023-11-19 01:35:10'),
(19, 1101, 3, '150000', '90000', 'chưa thu', '2023-11-19 01:35:24', '2023-11-19 01:35:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '2023_11_13_120801_create_admins_table', 1),
(47, '2023_11_13_131106_create_sinhviens_table', 1),
(48, '2023_11_13_131119_create_nhanviens_table', 1),
(49, '2023_11_13_131135_create_days_table', 1),
(50, '2023_11_13_140250_create_phongs_table', 1),
(51, '2023_11_27_212238_chitietdangky', 2),
(52, '2023_11_28_204912_create_chitietchuyenphongs_table', 3),
(53, '2023_11_04_173620_create_thongbaos_table', 4),
(54, '2023_11_05_191357_create_ykiens_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanviens`
--

CREATE TABLE `nhanviens` (
  `Manv` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(30) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `Sdt` varchar(10) DEFAULT NULL,
  `MatKhau` varchar(8) NOT NULL,
  `Quyen` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanviens`
--

INSERT INTO `nhanviens` (`Manv`, `HoTen`, `NgaySinh`, `DiaChi`, `Sdt`, `MatKhau`, `Quyen`, `created_at`, `updated_at`) VALUES
(1, 'Trần Đình Nghiêm', '2002-03-21', 'Đầm Dơi, Cà Mau', '0964369961', '21032002', 2, '2023-11-01 09:01:39', '2023-11-13 09:01:39'),
(2, 'Lê Tường Vy', '2002-03-08', 'Bình Minh, Vĩnh Long', '0914215715', '03082002', 2, '2023-11-01 13:56:20', '2023-11-13 13:56:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongs`
--

CREATE TABLE `phongs` (
  `Maphong` int(10) UNSIGNED NOT NULL,
  `MaDay` int(10) UNSIGNED NOT NULL,
  `SoNguoiToiDa` int(11) DEFAULT NULL,
  `SoNguoiHienTai` int(11) DEFAULT NULL,
  `Gia` decimal(11,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongs`
--

INSERT INTO `phongs` (`Maphong`, `MaDay`, `SoNguoiToiDa`, `SoNguoiHienTai`, `Gia`, `created_at`, `updated_at`) VALUES
(1101, 11, 6, 1, '270000', '2023-11-01 14:26:24', '2023-11-13 14:26:24'),
(1102, 11, 6, 0, '270000', '2023-11-01 14:26:33', '2023-11-13 14:26:33'),
(1103, 11, 6, 0, '270000', '2023-11-01 14:26:45', '2023-11-13 14:26:45'),
(1104, 11, 6, 1, '270000', '2023-11-01 14:26:55', '2023-11-13 14:26:55'),
(1105, 11, 6, 2, '270000', '2023-11-01 14:27:09', '2023-11-13 14:27:09'),
(1106, 16, 3, 0, '450000', '2023-11-26 09:37:12', '2023-11-26 09:37:12'),
(1107, 11, 8, 0, '170000', '2023-11-26 19:38:21', '2023-11-26 19:38:21'),
(2101, 21, 8, 0, '120000', '2023-11-01 14:27:34', '2023-11-13 14:27:34'),
(2102, 21, 8, 0, '120000', '2023-11-01 14:27:54', '2023-11-13 14:27:54'),
(2103, 21, 8, 0, '120000', '2023-11-01 14:28:18', '2023-11-13 14:28:18'),
(2104, 21, 4, 0, '300000', '2023-11-01 14:28:37', '2023-11-13 14:28:37'),
(2105, 21, 4, 1, '300000', '2023-11-01 14:28:49', '2023-11-13 14:28:49'),
(2201, 22, 3, 0, '330000', '2023-11-01 14:29:11', '2023-11-13 14:29:11'),
(2202, 22, 3, 0, '330000', '2023-11-01 14:29:23', '2023-11-13 14:29:23'),
(2203, 22, 3, 0, '330000', '2023-11-01 14:29:44', '2023-11-13 14:29:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhviens`
--

CREATE TABLE `sinhviens` (
  `mssv` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(30) NOT NULL,
  `GioiTinh` varchar(5) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `Sdt` varchar(10) DEFAULT NULL,
  `MatKhau` varchar(8) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhviens`
--

INSERT INTO `sinhviens` (`mssv`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `Sdt`, `MatKhau`, `created_at`, `updated_at`) VALUES
(2003921, 'Dương Thanh Thảo', 'Nữ', '2002-09-29', 'Ô Môn, Cần Thơ', '091945874', '1', '2023-11-01 10:08:01', '2023-11-13 10:08:01'),
(2005755, 'Huỳnh Nhựt Hòa', 'Nam', '2002-03-03', 'Vĩnh Châu, Sóc Trăng', '0944990152', '1', '2023-11-01 09:57:30', '2023-11-13 09:57:30'),
(2012265, 'Nguyễn Huỳnh Thông', 'Nam', '2002-12-28', 'Rạch Giá, Kiên Giang', '0948874775', '1', '2023-11-01 09:54:47', '2023-11-13 09:54:47'),
(2014754, 'Bùi Tuấn Kiệt', 'Nam', '2002-04-01', 'Châu Thành, An Giang', '0967688854', '1', '2023-11-01 10:02:00', '2023-11-13 10:02:00'),
(2014803, 'Trần Quốc Tuấn', 'Nam', '2002-11-04', 'Đầm Dơi, Cà Mau', '091948440', '1', '2023-11-01 09:55:16', '2023-11-13 09:55:16'),
(2014805, 'Lại Thế Văn', 'Nam', '2002-05-18', 'Cẩm Xuyên, Hà Tỉnh', '0399619422', '1', '2023-11-01 09:59:35', '2023-11-13 09:59:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbaos`
--

CREATE TABLE `thongbaos` (
  `MaTB` int(10) UNSIGNED NOT NULL,
  `mssv` int(10) UNSIGNED NOT NULL,
  `MaNV` int(10) UNSIGNED NOT NULL,
  `Tieude` varchar(50) DEFAULT NULL,
  `Noidung` varchar(255) DEFAULT NULL,
  `Loaitb` varchar(20) DEFAULT NULL,
  `Ngaytb` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbaos`
--

INSERT INTO `thongbaos` (`MaTB`, `mssv`, `MaNV`, `Tieude`, `Noidung`, `Loaitb`, `Ngaytb`, `created_at`, `updated_at`) VALUES
(27, 2014803, 1, 'Thông báo chuyển phòng ký túc xá', 'Bạn đã chuyển phòng thành công. Từ phòng 1101 sang phòng 1105. Vui lòng sắp xếp đồ đạc và di chuyển trong 1 tuần kể từ ngày duyệt.', 'chuyển phòng', '2023-11-14', '2023-11-14 03:27:53', '2023-11-14 03:27:53'),
(28, 2014803, 1, 'Thông báo trả phòng ký túc xá', 'Bạn đã trả thành công phòng 1105. Vui lòng sắp xếp đồ đạc và dọn đi trong 1 tuần kể từ ngày duyệt.', 'trả phòng', '2023-11-14', '2023-11-14 03:33:20', '2023-11-14 03:33:20'),
(29, 2014805, 1, 'Thông báo đăng ký phòng ký túc xá', 'Bạn đã đăng ký thành công phòng 1105. Vui lòng đến nhận phòng trong 2 tuần kể từ ngày duyệt. Nếu không nhận phòng theo thời gian quy định, sinh viên sẽ bị kỷ luật.', 'đăng ký', '2023-11-14', '2023-11-14 03:34:34', '2023-11-14 03:34:34'),
(30, 2003921, 1, 'Thông báo đăng ký phòng ký túc xá', 'Bạn đã đăng ký thành công phòng 2202. Vui lòng đến nhận phòng trong 2 tuần kể từ ngày duyệt. Nếu không nhận phòng theo thời gian quy định, sinh viên sẽ bị kỷ luật.', 'đăng ký', '2023-11-14', '2023-11-14 03:45:07', '2023-11-14 03:45:07'),
(31, 2003921, 1, 'Thông báo chuyển phòng ký túc xá', 'Bạn đã chuyển phòng thành công. Từ phòng 2202 sang phòng 2105. Vui lòng sắp xếp đồ đạc và di chuyển trong 1 tuần kể từ ngày duyệt.', 'chuyển phòng', '2023-11-14', '2023-11-14 03:46:16', '2023-11-14 03:46:16'),
(32, 2005755, 1, 'Thông báo đăng ký phòng ký túc xá', 'Bạn đã đăng ký thành công phòng 1104. Vui lòng đến nhận phòng trong 2 tuần kể từ ngày duyệt. Nếu không nhận phòng theo thời gian quy định, sinh viên sẽ bị kỷ luật.', 'đăng ký', '2023-11-14', '2023-11-14 03:56:30', '2023-11-14 03:56:30'),
(33, 2012265, 1, 'Thông báo đăng ký phòng ký túc xá', 'Bạn đã đăng ký thành công phòng 1104. Vui lòng đến nhận phòng trong 2 tuần kể từ ngày duyệt. Nếu không nhận phòng theo thời gian quy định, sinh viên sẽ bị kỷ luật.', 'đăng ký', '2023-11-19', '2023-11-19 01:41:58', '2023-11-19 01:41:58'),
(34, 2014803, 1, 'Thông báo đăng ký phòng ký túc xá', 'Bạn đã đăng ký thành công phòng 1105. Vui lòng đến nhận phòng trong 2 tuần kể từ ngày duyệt. Nếu không nhận phòng theo thời gian quy định, sinh viên sẽ bị kỷ luật.', 'đăng ký', '2023-11-19', '2023-11-19 02:13:39', '2023-11-19 02:13:39'),
(35, 2014803, 1, 'Thông báo đăng ký phòng ký túc xá', 'Bạn đã đăng ký thành công phòng 1101. Vui lòng đến nhận phòng trong 2 tuần kể từ ngày duyệt. Nếu không nhận phòng theo thời gian quy định, sinh viên sẽ bị kỷ luật.', 'đăng ký', '2023-11-27', '2023-11-26 20:12:13', '2023-11-26 20:12:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ykiens`
--

CREATE TABLE `ykiens` (
  `MaYK` int(10) UNSIGNED NOT NULL,
  `Chude` varchar(30) DEFAULT NULL,
  `Noidung` varchar(255) DEFAULT NULL,
  `Ngayyk` date NOT NULL,
  `TinhTrang` varchar(10) NOT NULL DEFAULT 'Chưa Đọc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ykiens`
--

INSERT INTO `ykiens` (`MaYK`, `Chude`, `Noidung`, `Ngayyk`, `TinhTrang`, `created_at`, `updated_at`) VALUES
(5, 'Dịch vụ gửi xe', 'Nhà xe nên quy định nơi, dãy để dễ dàng kiểm soát và lấy xe.', '2023-11-14', 'Đã đọc', '2023-11-14 03:31:15', '2023-11-14 03:31:15'),
(6, 'Công tác quản lý', 'Cần quản lý một cách nghiêm túc hơn.', '2023-11-19', 'Chưa Đọc', '2023-11-19 01:58:04', '2023-11-19 01:58:04');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietchuyenphongs`
--
ALTER TABLE `chitietchuyenphongs`
  ADD PRIMARY KEY (`MaCP`),
  ADD KEY `chitietchuyenphongs_maphongo_foreign` (`MaPhongO`),
  ADD KEY `chitietchuyenphongs_maphongchuyen_foreign` (`MaPhongChuyen`),
  ADD KEY `mssv` (`mssv`);

--
-- Chỉ mục cho bảng `chitietdangkies`
--
ALTER TABLE `chitietdangkies`
  ADD PRIMARY KEY (`MaDK`),
  ADD KEY `chitietdangkys_mssv_foreign` (`mssv`),
  ADD KEY `chitietdangkys_maphong_foreign` (`MaPhong`),
  ADD KEY `chitietdangkys_manv_foreign` (`MaNV`);

--
-- Chỉ mục cho bảng `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`MaDay`);

--
-- Chỉ mục cho bảng `hoadons`
--
ALTER TABLE `hoadons`
  ADD PRIMARY KEY (`Mahoadon`) USING BTREE,
  ADD KEY `Maphong` (`Maphong`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanviens`
--
ALTER TABLE `nhanviens`
  ADD PRIMARY KEY (`Manv`);

--
-- Chỉ mục cho bảng `phongs`
--
ALTER TABLE `phongs`
  ADD PRIMARY KEY (`Maphong`),
  ADD KEY `phongs_maday_foreign` (`MaDay`);

--
-- Chỉ mục cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  ADD PRIMARY KEY (`mssv`);

--
-- Chỉ mục cho bảng `thongbaos`
--
ALTER TABLE `thongbaos`
  ADD PRIMARY KEY (`MaTB`),
  ADD KEY `mssv` (`mssv`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `ykiens`
--
ALTER TABLE `ykiens`
  ADD PRIMARY KEY (`MaYK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietchuyenphongs`
--
ALTER TABLE `chitietchuyenphongs`
  MODIFY `MaCP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `chitietdangkies`
--
ALTER TABLE `chitietdangkies`
  MODIFY `MaDK` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `days`
--
ALTER TABLE `days`
  MODIFY `MaDay` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT cho bảng `hoadons`
--
ALTER TABLE `hoadons`
  MODIFY `Mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `nhanviens`
--
ALTER TABLE `nhanviens`
  MODIFY `Manv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phongs`
--
ALTER TABLE `phongs`
  MODIFY `Maphong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2204;

--
-- AUTO_INCREMENT cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  MODIFY `mssv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345679;

--
-- AUTO_INCREMENT cho bảng `thongbaos`
--
ALTER TABLE `thongbaos`
  MODIFY `MaTB` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `ykiens`
--
ALTER TABLE `ykiens`
  MODIFY `MaYK` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietchuyenphongs`
--
ALTER TABLE `chitietchuyenphongs`
  ADD CONSTRAINT `chitietchuyenphongs_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhviens` (`mssv`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietchuyenphongs_maphongchuyen_foreign` FOREIGN KEY (`MaPhongChuyen`) REFERENCES `phongs` (`Maphong`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietchuyenphongs_maphongo_foreign` FOREIGN KEY (`MaPhongO`) REFERENCES `phongs` (`Maphong`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdangkies`
--
ALTER TABLE `chitietdangkies`
  ADD CONSTRAINT `chitietdangkys_manv_foreign` FOREIGN KEY (`MaNV`) REFERENCES `nhanviens` (`Manv`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietdangkys_maphong_foreign` FOREIGN KEY (`MaPhong`) REFERENCES `phongs` (`Maphong`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietdangkys_mssv_foreign` FOREIGN KEY (`mssv`) REFERENCES `sinhviens` (`mssv`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hoadons`
--
ALTER TABLE `hoadons`
  ADD CONSTRAINT `Maphong` FOREIGN KEY (`Maphong`) REFERENCES `phongs` (`Maphong`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `phongs`
--
ALTER TABLE `phongs`
  ADD CONSTRAINT `phongs_maday_foreign` FOREIGN KEY (`MaDay`) REFERENCES `days` (`MaDay`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `thongbaos`
--
ALTER TABLE `thongbaos`
  ADD CONSTRAINT `thongbaos_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhviens` (`mssv`) ON DELETE CASCADE,
  ADD CONSTRAINT `thongbaos_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanviens` (`Manv`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
