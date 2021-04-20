-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 20, 2021 lúc 11:12 SA
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `elaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_02_24_055717_create_tbl_admin_table', 1),
(4, '2021_02_25_054222_create_tbl_category_product', 2),
(7, '2021_02_25_095017_create_tbl_brandProduct', 3),
(8, '2021_02_26_043316_create_tbl_productP', 4),
(9, '2021_03_21_025935_tbl_customer', 5),
(10, '2021_03_21_033033_tbl_shipping', 6),
(14, '2021_03_25_071058_tbl_payment', 7),
(15, '2021_03_25_071237_tbl_order', 7),
(16, '2021_03_25_071438_tbl_order_detail', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_phone`, `admin_name`, `created_at`, `updated_at`) VALUES
(2, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0349983657', 'Tui là admin', '2021-02-23 17:00:00', '2021-02-23 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brandproduct`
--

CREATE TABLE `tbl_brandproduct` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brandproduct`
--

INSERT INTO `tbl_brandproduct` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(5, 'Asus', 'Asus là một', 1, NULL, NULL),
(6, 'AppLe', '<p><em>Apple</em></p>', 1, NULL, NULL),
(7, 'SamSung', '<p>sam sung</p>', 1, NULL, NULL),
(8, 'Iphone', '<p>iphone</p>', 1, NULL, NULL),
(9, 'LV', '<p>LV</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(10, 'Laptop', 'Tất cả các loại laptop', 1, NULL, NULL),
(11, 'Điện thoại', 'Tất cả các loại điện thoại', 1, NULL, NULL),
(12, 'Túi sách', 'Tất cả các loại túi sách', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_phone`, `created_at`, `updated_at`) VALUES
(3, 'Thuc111', 'thuc11@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0114443344', NULL, NULL),
(4, 'Thuc', 'thuc111@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '5454536546546565', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 2, '34,848,000.00', 'Đang chờ xử lý', NULL, NULL),
(2, 4, 3, 3, '34,848,000.00', 'Đang chờ xử lý', NULL, NULL),
(3, 4, 3, 4, '34,848,000.00', 'Đang chờ xử lý', NULL, NULL),
(4, 4, 3, 5, '34,848,000.00', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_qty`, `product_price`, `created_at`, `updated_at`) VALUES
(1, 3, 16, 'Asus Zenbook UX310UQ Core I5 7200U', 1, '12600000', NULL, NULL),
(2, 3, 15, 'Asus TUF Gaming FX505DT-AH51 R5 3550H', 1, '16200000', NULL, NULL),
(3, 4, 16, 'Asus Zenbook UX310UQ Core I5 7200U', 1, '12600000', NULL, NULL),
(4, 4, 15, 'Asus TUF Gaming FX505DT-AH51 R5 3550H', 1, '16200000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '2', 'Đang chờ xử lý', NULL, NULL),
(2, '2', 'Đang chờ xử lý', NULL, NULL),
(3, '2', 'Đang chờ xử lý', NULL, NULL),
(4, '2', 'Đang chờ xử lý', NULL, NULL),
(5, '2', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_productp`
--

CREATE TABLE `tbl_productp` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_productp`
--

INSERT INTO `tbl_productp` (`product_id`, `brand_id`, `category_id`, `product_name`, `product_desc`, `product_content`, `product_price`, `product_img`, `product_status`, `created_at`, `updated_at`) VALUES
(15, 5, 10, 'Asus TUF Gaming FX505DT-AH51 R5 3550H', 'CPU: AMD Ryzen 5 3550H\r\n- Màn hình: 15.6" IPS (1920 x 1080), 120Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz (CPU hỗ trợ tối đa 2400MHz)\r\n- Đồ họa: NVIDIA GeForce GTX 1650 4GB GDDR5 / AMD Radeon Vega 8 Graphics\r\n- Lưu trữ: 256GB SSD M.2 NVMe / \r\n- Hệ điều hành: Windows 10 Home SL 64-bit \r\n- Pin: 3 cell 48 Wh Pin liền  \r\n- Khối lượng: 2.1 kg \r\n- Tình trạng: 99%.', 'Quà tặng: Balo, chuột không dây, miến lót chuột và túi chống sốc.\r\n- 1 dổi 1 trong vòng 07 ngày không cần lý do.\r\n- Bảo hành phần cứng 12 tháng, phần mềm miễn phí trọn đời máy.', '16200000', 'asus263.jfif', 1, NULL, NULL),
(16, 5, 10, 'Asus Zenbook UX310UQ Core I5 7200U', '<h1><u><em><strong>CPU: Intel Core i5-7200U ( 2.2Ghz, 4MB Cache L3) - RAM: 8GB DDR4 Bus 2133GHz - Ổ cứng: 256GB tốc độ cực nhanh - M&agrave;n h&igrave;nh: 13.3 inch Full HD (1920x1080) + IPS - Ổ đĩa quang: kh&ocirc;ng - Webcam: HD 720p Megapixels - Kết nối: Wifi chuẩn, USB 2.0 v&agrave; 3.0, HDMI, Jiack tai nghe, đầu đọc thẻ, Bluetooth - Thời lượng pin: (3 cells) sử dụng li&ecirc;n tục 7-10 giờ - Trọng lượng: 1.3 kg - Hệ điều h&agrave;nh tương th&iacute;ch: Windows 8, 10</strong></em></u></h1>', '<p>CPU: Intel Core i5-7200U ( 2.2Ghz, 4MB Cache L3) - RAM: 8GB DDR4 Bus 2133GHz - Ổ cứng: 256GB tốc độ cực nhanh - M&agrave;n h&igrave;nh: 13.3 inch Full HD (1920x1080) + IPS - Ổ đĩa quang: kh&ocirc;ng - Webcam: HD 720p Megapixels - Kết nối: Wifi chuẩn, USB 2.0 v&agrave; 3.0, HDMI, Jiack tai nghe, đầu đọc thẻ, Bluetooth - Thời lượng pin: (3 cells) sử dụng li&ecirc;n tục 7-10 giờ - Trọng lượng: 1.3 kg - Hệ điều h&agrave;nh tương th&iacute;ch: Windows 8, 10</p>', '12600000', 'asus195.jfif', 1, NULL, NULL),
(17, 6, 10, 'dell', '<p>dAF</p>', '<p>SFS</p>', '1250000', 'g891.jpg', 1, NULL, NULL),
(18, 5, 10, 'DELL1', '<p>ASFA</p>', '<p>AS</p>', '1000', 'g220.jpg', 1, NULL, NULL),
(19, 5, 10, 'DELL12', '<p>AS</p>', '<p>ASF</p>', '453', 'g730.jpg', 1, NULL, NULL),
(20, 5, 10, 'Laptop Asus Gaming ROG Flow X13 GV301QH-K6054T', '<p>BỘ QU&Agrave; TẶNG TRỊ GI&Aacute;&nbsp;1.540.000Đ<br />\r\n+&nbsp;T&uacute;i đựng Laptop trị gi&aacute;&nbsp;149.000&nbsp;(CAPD132)<br />\r\n+&nbsp;Chuột kh&ocirc;ng d&acirc;y trị gi&aacute;&nbsp;169.000đ&nbsp;(MEKO001)<br />\r\n+&nbsp;Tấm l&oacute;t chuột (25cm*30cm) trị gi&aacute;&nbsp;49.000đ&nbsp;(PADM639)<br />\r\n+&nbsp;Bộ vệ sinh laptop trị gi&aacute;&nbsp;39.000đ&nbsp;(NUOC002)<br />\r\n+&nbsp;Đế l&agrave;m m&aacute;t laptop trị gi&aacute;&nbsp;99.000đ&nbsp;(DELM245)</p>\r\n\r\n<p>+&nbsp;Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn ph&iacute; trọn đời trị gi&aacute;&nbsp;999.000đ&nbsp;(THEK417)</p>', '<p>BỘ QU&Agrave; TẶNG TRỊ GI&Aacute;&nbsp;1.540.000Đ<br />\r\n+&nbsp;T&uacute;i đựng Laptop trị gi&aacute;&nbsp;149.000&nbsp;(CAPD132)<br />\r\n+&nbsp;Chuột kh&ocirc;ng d&acirc;y trị gi&aacute;&nbsp;169.000đ&nbsp;(MEKO001)<br />\r\n+&nbsp;Tấm l&oacute;t chuột (25cm*30cm) trị gi&aacute;&nbsp;49.000đ&nbsp;(PADM639)<br />\r\n+&nbsp;Bộ vệ sinh laptop trị gi&aacute;&nbsp;39.000đ&nbsp;(NUOC002)<br />\r\n+&nbsp;Đế l&agrave;m m&aacute;t laptop trị gi&aacute;&nbsp;99.000đ&nbsp;(DELM245)</p>\r\n\r\n<p>+&nbsp;Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn ph&iacute; trọn đời trị gi&aacute;&nbsp;999.000đ&nbsp;(THEK417)</p>', '34899000', 'lt140.jpg', 1, NULL, NULL),
(22, 5, 10, 'Laptop Asus Gaming ROG Zephyrus GA503QM-HQ097T', '<p>BỘ QU&Agrave; TẶNG TRỊ GI&Aacute; 2.400.000Đ<br />\r\n+&nbsp;Balo Gaming ROG BP15 trị gi&aacute; 799.000 (K&egrave;m theo m&aacute;y)<br />\r\n+&nbsp;Chuột Gaming V16 trị gi&aacute; 349.000đ (MERP001)<br />\r\n+&nbsp;B&agrave;n di chuột Big size trị gi&aacute; 129.000đ (PADM583/604)<br />\r\n+&nbsp;Bộ vệ sinh laptop trị gi&aacute; 39.000đ (NUOC002)<br />\r\n+&nbsp;Đế l&agrave;m m&aacute;t laptop trị gi&aacute;&nbsp;99.000đ&nbsp;(DELM245)</p>\r\n\r\n<p>+&nbsp;Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn ph&iacute; trọn đời trị gi&aacute;&nbsp;999.000đ&nbsp;(THEK417)</p>\r\n\r\n<p><br />\r\n+Giảm&nbsp;20%&nbsp;khi mua Tai nghe Zidli ZH20 USB 7.1 (TNZI051)</p>\r\n\r\n<p><br />\r\nƯU Đ&Atilde;I KHI MUA K&Egrave;M LAPTOP (&Aacute;P DỤNG ĐẾN 30/4/2021)<br />\r\n+&nbsp;Giảm&nbsp;5%&nbsp;Tai nghe Dareu, Kingston HyperX, Corsair, SteelSeries, Ổ cứng gắn ngo&agrave;i, Microphone Razer, HyperX, Router, Switch, Modem, Loa Logitech.<br />\r\n+&nbsp;Giảm&nbsp;10%&nbsp;Tai nghe JBL (TNJB), B&agrave;n di chuột (PADM), USB, Card mạng, Card sound c&aacute;c loại.</p>\r\n\r\n<p><br />\r\n+&nbsp;MIỄN PH&Iacute; GIAO H&Agrave;NG TO&Agrave;N QUỐC&nbsp;(trừ ghế, b&agrave;n, m&agrave;n chiếu) đến hết 30/6/2021. Chi tiết xem&nbsp;<a href="https://www.hanoicomputer.vn/uu-dai-thang-12-mien-phi-giao-hang-toan-quoc-khong-gioi-han-gia-tri-don-hang" target="_blank">tại đ&acirc;y</a>.</p>', '<p>BỘ QU&Agrave; TẶNG TRỊ GI&Aacute; 2.400.000Đ<br />\r\n+&nbsp;Balo Gaming ROG BP15 trị gi&aacute; 799.000 (K&egrave;m theo m&aacute;y)<br />\r\n+&nbsp;Chuột Gaming V16 trị gi&aacute; 349.000đ (MERP001)<br />\r\n+&nbsp;B&agrave;n di chuột Big size trị gi&aacute; 129.000đ (PADM583/604)<br />\r\n+&nbsp;Bộ vệ sinh laptop trị gi&aacute; 39.000đ (NUOC002)<br />\r\n+&nbsp;Đế l&agrave;m m&aacute;t laptop trị gi&aacute;&nbsp;99.000đ&nbsp;(DELM245)</p>\r\n\r\n<p>+&nbsp;Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn ph&iacute; trọn đời trị gi&aacute;&nbsp;999.000đ&nbsp;(THEK417)</p>\r\n\r\n<p><br />\r\n+Giảm&nbsp;20%&nbsp;khi mua Tai nghe Zidli ZH20 USB 7.1 (TNZI051)</p>\r\n\r\n<p><br />\r\nƯU Đ&Atilde;I KHI MUA K&Egrave;M LAPTOP (&Aacute;P DỤNG ĐẾN 30/4/2021)<br />\r\n+&nbsp;Giảm&nbsp;5%&nbsp;Tai nghe Dareu, Kingston HyperX, Corsair, SteelSeries, Ổ cứng gắn ngo&agrave;i, Microphone Razer, HyperX, Router, Switch, Modem, Loa Logitech.<br />\r\n+&nbsp;Giảm&nbsp;10%&nbsp;Tai nghe JBL (TNJB), B&agrave;n di chuột (PADM), USB, Card mạng, Card sound c&aacute;c loại.</p>\r\n\r\n<p><br />\r\n+&nbsp;MIỄN PH&Iacute; GIAO H&Agrave;NG TO&Agrave;N QUỐC&nbsp;(trừ ghế, b&agrave;n, m&agrave;n chiếu) đến hết 30/6/2021. Chi tiết xem&nbsp;<a href="https://www.hanoicomputer.vn/uu-dai-thang-12-mien-phi-giao-hang-toan-quoc-khong-gioi-han-gia-tri-don-hang" target="_blank">tại đ&acirc;y</a>.</p>', '39899000', '58689_laptop_asus_gaming_rog_zephyrus_ga503qm_hq097t_xam_1332.jpg', 1, NULL, NULL),
(23, 7, 11, 'Điện thoại OPPO A15', '<h3 dir="ltr"><a href="https://www.thegioididong.com/dtdd-oppo" target="_blank" title="Tham khảo điện thoại OPPO chính hãng tại Thegioididong.com ">OPPO</a>&nbsp;h&atilde;ng điện thoại lu&ocirc;n được người Việt tin d&ugrave;ng v&agrave; lựa chọn, mới đ&acirc;y h&atilde;ng đ&atilde; cho ra mắt mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-a15" target="_blank" title="Tham khảo điện thoại OPPO A15 chính hãng tại Thegioididong.com ">OPPO A15</a>&nbsp;c&oacute; thiết kế đẹp, cấu h&igrave;nh đủ d&ugrave;ng. Đ&acirc;y sẽ l&agrave; mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Tham khảo các điện thoại chính hãng tại Thegioididong.com ">điện thoại th&ocirc;ng minh</a>&nbsp;ph&ugrave; hợp cho mọi đối tượng người d&ugrave;ng đi c&ugrave;ng với mức gi&aacute; v&ocirc; c&ugrave;ng hợp l&yacute;.</h3>', '<h3 dir="ltr"><a href="https://www.thegioididong.com/dtdd-oppo" target="_blank" title="Tham khảo điện thoại OPPO chính hãng tại Thegioididong.com ">OPPO</a>&nbsp;h&atilde;ng điện thoại lu&ocirc;n được người Việt tin d&ugrave;ng v&agrave; lựa chọn, mới đ&acirc;y h&atilde;ng đ&atilde; cho ra mắt mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd/oppo-a15" target="_blank" title="Tham khảo điện thoại OPPO A15 chính hãng tại Thegioididong.com ">OPPO A15</a>&nbsp;c&oacute; thiết kế đẹp, cấu h&igrave;nh đủ d&ugrave;ng. Đ&acirc;y sẽ l&agrave; mẫu&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Tham khảo các điện thoại chính hãng tại Thegioididong.com ">điện thoại th&ocirc;ng minh</a>&nbsp;ph&ugrave; hợp cho mọi đối tượng người d&ugrave;ng đi c&ugrave;ng với mức gi&aacute; v&ocirc; c&ugrave;ng hợp l&yacute;.</h3>', '3400000', 'oppo-a15-black-600-test48.jpg', 1, NULL, NULL),
(24, 8, 11, 'Điện thoại iPhone 12 64GB', '<h2>Đặc điểm nổi bật của iPhone 12 64GB</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, S&aacute;ch hướng dẫn, C&acirc;y lấy sim, C&aacute;p Lightning - Type C</p>\r\n\r\n<h3>Trong những th&aacute;ng cuối năm 2020&nbsp;<a href="https://www.thegioididong.com/apple" target="_blank" title="Tham khảo sản phẩm chính hãng của Apple tại Thế Giới Di Động">Apple</a>&nbsp;đ&atilde; ch&iacute;nh thức giới thiệu đến người d&ugrave;ng cũng như iFan thế hệ iPhone&nbsp;12&nbsp;series&nbsp;mới với h&agrave;ng loạt t&iacute;nh năng bức ph&aacute;, thiết kế được lột x&aacute;c ho&agrave;n to&agrave;n, hiệu năng đầy mạnh mẽ v&agrave; một trong số đ&oacute; ch&iacute;nh l&agrave;&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-12" target="_blank" title="Tham khảo điện thoại iPhone 12 chính hãng tại Thế Giới Di Động">iPhone 12 64GB</a>.</h3>', '<h2>Đặc điểm nổi bật của iPhone 12 64GB</h2>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, S&aacute;ch hướng dẫn, C&acirc;y lấy sim, C&aacute;p Lightning - Type C</p>\r\n\r\n<h3>Trong những th&aacute;ng cuối năm 2020&nbsp;<a href="https://www.thegioididong.com/apple" target="_blank" title="Tham khảo sản phẩm chính hãng của Apple tại Thế Giới Di Động">Apple</a>&nbsp;đ&atilde; ch&iacute;nh thức giới thiệu đến người d&ugrave;ng cũng như iFan thế hệ iPhone&nbsp;12&nbsp;series&nbsp;mới với h&agrave;ng loạt t&iacute;nh năng bức ph&aacute;, thiết kế được lột x&aacute;c ho&agrave;n to&agrave;n, hiệu năng đầy mạnh mẽ v&agrave; một trong số đ&oacute; ch&iacute;nh l&agrave;&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-12" target="_blank" title="Tham khảo điện thoại iPhone 12 chính hãng tại Thế Giới Di Động">iPhone 12 64GB</a>.</h3>', '22900000', 'iphone-12-xanh-duong-new-600x600-600x60076.jpg', 1, NULL, NULL),
(25, 7, 11, 'Điện thoại Samsung Galaxy A72', '<h3>Sau khi th&agrave;nh c&ocirc;ng ở ph&acirc;n kh&uacute;c&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Tham khảo các sản phẩm điện thoại tại Thế Giới Di Động">smartphone</a>&nbsp;cao cấp với&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-s21" target="_blank" title="Tham khảo thông tin Galaxy S21 tại thegioididong.com">Galaxy S21</a>&nbsp;series,&nbsp;<a href="https://thegioididong.com/samsung" target="_blank" title="Tham khảo sản phẩm Samsung chính hãng tại Thegioididong.com ">Samsung</a>&nbsp;tiếp tục tấn c&ocirc;ng ph&acirc;n kh&uacute;c tầm trung với sự ra mắt của&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a72" target="_blank" title="Tham khảo điện thoại Samsung Galaxy A72 chính hãng tại Thegioididong.com ">Samsung Galaxy A72</a>&nbsp;thuộc&nbsp;<a href="https://www.thegioididong.com/dtdd-samsung-galaxy-a" target="_blank" title="Tham khảo Galaxy A kinh doanh tại thegioididong.com">Galaxy A</a>&nbsp;series,&nbsp;sở hữu nhiều m&agrave;u sắc trẻ trung, hệ thống camera nhiều t&iacute;nh năng cũng như n&acirc;ng cấp hiệu năng v&ocirc; c&ugrave;ng lớn mang đến những trải nghiệm ho&agrave;n to&agrave;n mới.</h3>', '<h3>Sau khi th&agrave;nh c&ocirc;ng ở ph&acirc;n kh&uacute;c&nbsp;<a href="https://www.thegioididong.com/dtdd" target="_blank" title="Tham khảo các sản phẩm điện thoại tại Thế Giới Di Động">smartphone</a>&nbsp;cao cấp với&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-s21" target="_blank" title="Tham khảo thông tin Galaxy S21 tại thegioididong.com">Galaxy S21</a>&nbsp;series,&nbsp;<a href="https://thegioididong.com/samsung" target="_blank" title="Tham khảo sản phẩm Samsung chính hãng tại Thegioididong.com ">Samsung</a>&nbsp;tiếp tục tấn c&ocirc;ng ph&acirc;n kh&uacute;c tầm trung với sự ra mắt của&nbsp;<a href="https://www.thegioididong.com/dtdd/samsung-galaxy-a72" target="_blank" title="Tham khảo điện thoại Samsung Galaxy A72 chính hãng tại Thegioididong.com ">Samsung Galaxy A72</a>&nbsp;thuộc&nbsp;<a href="https://www.thegioididong.com/dtdd-samsung-galaxy-a" target="_blank" title="Tham khảo Galaxy A kinh doanh tại thegioididong.com">Galaxy A</a>&nbsp;series,&nbsp;sở hữu nhiều m&agrave;u sắc trẻ trung, hệ thống camera nhiều t&iacute;nh năng cũng như n&acirc;ng cấp hiệu năng v&ocirc; c&ugrave;ng lớn mang đến những trải nghiệm ho&agrave;n to&agrave;n mới.</h3>', '11490000', 'samsung-galaxy-a72-thumb-balck-600x600-600x60018.jpg', 1, NULL, NULL),
(26, 9, 12, 'Túi Đeo Chéo Nắp Gập Khóa Kim Loại Bow-Tie', '<p><strong>Giảm th&ecirc;m 10% - 15% khi c&oacute; thẻ VIP từ 16.04 - 25.04.2021 (Kh&ocirc;ng &aacute;p dụng với sản phẩm đồng&nbsp;gi&aacute;)</strong></p>\r\n\r\n<p><strong>1800 6909</strong>&nbsp;- Hotline đặt h&agrave;ng (Miễn cước, 8h30 - 22h)</p>\r\n\r\n<p>Giao h&agrave;ng nhanh tr&ecirc;n to&agrave;n quốc</p>\r\n\r\n<p>Thanh to&aacute;n tiện lợi với nhiều h&igrave;nh thức</p>\r\n\r\n<p>Bảo h&agrave;nh sản phẩm trọn đời (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Miễn ph&iacute; đổi sản phẩm trong 7 ng&agrave;y (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Mua h&agrave;ng Online - Miễn ph&iacute; trả h&agrave;ng ho&agrave;n tiền tại cửa h&agrave;ng trong 15 ng&agrave;y.&nbsp;<a href="https://www.vascara.com/chinh-sach-doi-tra" target="_blank"><strong>XEM CHI TIẾT</strong></a></p>', '<p><strong>Giảm th&ecirc;m 10% - 15% khi c&oacute; thẻ VIP từ 16.04 - 25.04.2021 (Kh&ocirc;ng &aacute;p dụng với sản phẩm đồng&nbsp;gi&aacute;)</strong></p>\r\n\r\n<p><strong>1800 6909</strong>&nbsp;- Hotline đặt h&agrave;ng (Miễn cước, 8h30 - 22h)</p>\r\n\r\n<p>Giao h&agrave;ng nhanh tr&ecirc;n to&agrave;n quốc</p>\r\n\r\n<p>Thanh to&aacute;n tiện lợi với nhiều h&igrave;nh thức</p>\r\n\r\n<p>Bảo h&agrave;nh sản phẩm trọn đời (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Miễn ph&iacute; đổi sản phẩm trong 7 ng&agrave;y (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Mua h&agrave;ng Online - Miễn ph&iacute; trả h&agrave;ng ho&agrave;n tiền tại cửa h&agrave;ng trong 15 ng&agrave;y.&nbsp;<a href="https://www.vascara.com/chinh-sach-doi-tra" target="_blank"><strong>XEM CHI TIẾT</strong></a></p>', '780000', 'tui-deo-cheo-nap-gap-khoa-kim-loai-bow-tie-day-metallic-sho-0180-mau-do-main__59212__161493662254.jpg', 1, NULL, NULL),
(27, 9, 12, 'Túi Xách Phối Da Nubuck Đáy Hộp - SAT 0276 - Màu Đen', '<p><strong>Giảm th&ecirc;m 10% - 15% khi c&oacute; thẻ VIP từ 16.04 - 25.04.2021 (Kh&ocirc;ng &aacute;p dụng với sản phẩm đồng&nbsp;gi&aacute;)</strong></p>\r\n\r\n<p><strong>1800 6909</strong>&nbsp;- Hotline đặt h&agrave;ng (Miễn cước, 8h30 - 22h)</p>\r\n\r\n<p>Giao h&agrave;ng nhanh tr&ecirc;n to&agrave;n quốc</p>\r\n\r\n<p>Thanh to&aacute;n tiện lợi với nhiều h&igrave;nh thức</p>\r\n\r\n<p>Bảo h&agrave;nh sản phẩm trọn đời (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Miễn ph&iacute; đổi sản phẩm trong 7 ng&agrave;y (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Mua h&agrave;ng Online - Miễn ph&iacute; trả h&agrave;ng ho&agrave;n tiền tại cửa h&agrave;ng trong 15 ng&agrave;y.&nbsp;<a href="https://www.vascara.com/chinh-sach-doi-tra" target="_blank"><strong>XEM CHI TIẾT</strong></a></p>', '<p><strong>Giảm th&ecirc;m 10% - 15% khi c&oacute; thẻ VIP từ 16.04 - 25.04.2021 (Kh&ocirc;ng &aacute;p dụng với sản phẩm đồng&nbsp;gi&aacute;)</strong></p>\r\n\r\n<p><strong>1800 6909</strong>&nbsp;- Hotline đặt h&agrave;ng (Miễn cước, 8h30 - 22h)</p>\r\n\r\n<p>Giao h&agrave;ng nhanh tr&ecirc;n to&agrave;n quốc</p>\r\n\r\n<p>Thanh to&aacute;n tiện lợi với nhiều h&igrave;nh thức</p>\r\n\r\n<p>Bảo h&agrave;nh sản phẩm trọn đời (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Miễn ph&iacute; đổi sản phẩm trong 7 ng&agrave;y (trừ mắt k&iacute;nh, thắt lưng)</p>\r\n\r\n<p>Mua h&agrave;ng Online - Miễn ph&iacute; trả h&agrave;ng ho&agrave;n tiền tại cửa h&agrave;ng trong 15 ng&agrave;y.&nbsp;<a href="https://www.vascara.com/chinh-sach-doi-tra" target="_blank"><strong>XEM CHI TIẾT</strong></a></p>', '4780000', 'tui-xach-phoi-da-nubuck-day-hop-sat-0276-mau-den-main__59200__161493548851.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_address`, `shipping_note`, `created_at`, `updated_at`) VALUES
(1, 'thuc', 'thuc@gmail.com', '004242', '123/123/HCM', 'ij;bu', NULL, NULL),
(2, 'thuc', 'thuc@gmail.com', '03499855852', 'sassa /123', 'saas', NULL, NULL),
(3, 'thucds', 'thucds@gmail.com', '03499855852', 'sassa /123d', 'saas\r\ns', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brandproduct`
--
ALTER TABLE `tbl_brandproduct`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_productp`
--
ALTER TABLE `tbl_productp`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `tbl_brandproduct`
--
ALTER TABLE `tbl_brandproduct`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `tbl_productp`
--
ALTER TABLE `tbl_productp`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
