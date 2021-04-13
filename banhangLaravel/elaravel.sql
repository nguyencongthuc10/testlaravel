-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 13, 2021 lúc 11:21 SA
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
(6, 'AppLe', '<p><em>Apple</em></p>', 1, NULL, NULL);

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
(19, 5, 10, 'DELL12', '<p>AS</p>', '<p>ASF</p>', '453', 'g730.jpg', 1, NULL, NULL);

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
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
