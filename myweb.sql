-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 02:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_product`
--

CREATE TABLE `customer_order_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_08_104631_create_tbl_categories_table', 1),
(4, '2018_11_11_040337_create_brands_table', 1),
(5, '2018_11_11_094406_create_products_table', 1),
(6, '2018_11_14_025655_create_orders_table', 1),
(7, '2018_11_24_031230_create_sub_categories_table', 1),
(8, '2018_11_24_031319_create_tags_table', 1),
(9, '2018_11_24_031343_create_sliders_table', 1),
(10, '2018_11_24_031523_create_customers_table', 1),
(11, '2018_11_24_031548_create_carts_table', 1),
(12, '2018_11_24_031618_create_favorites_table', 1),
(13, '2018_11_24_031647_create_shipping_table', 1),
(14, '2018_11_26_091827_create_product_order_table', 2),
(15, '2018_12_01_043913_create_roles_table', 3),
(16, '2018_12_02_075719_create_site_infos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `facebook`, `twitter`, `linked_in`, `google`, `gmail`, `phone`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/redtie7', 'https://www.twitter.com/redtie7', 'https://www.linkedin.com/redtie7', 'https://www.plus.google.com/redtie7', 'info@gmail.com', '+2 95 01 88 821', 'asset/upload/logo/q7UjW.jpg', '2018-12-10 20:30:00', '2018-12-06 08:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'nike', 'معروف ترین مارک اسپورت', 1, NULL, '2018-12-05 12:49:06'),
(4, 'lacoste', 'برند سال', 1, '2018-11-27 09:22:03', '2018-12-05 12:50:59'),
(5, 'adidas', 'برند محبوب خوش سلیقه ها', 1, '2018-12-05 12:51:37', '2018-12-05 12:51:37'),
(6, 'fendi', 'برندی جدید', 1, '2018-12-05 12:52:10', '2018-12-05 12:52:10'),
(7, 'GUCCI', 'برند گوچی', 1, '2018-12-05 12:52:56', '2018-12-05 12:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carts`
--

CREATE TABLE `tbl_carts` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_carts`
--

INSERT INTO `tbl_carts` (`id`, `customer_id`, `product_id`, `product_qty`, `created_at`, `updated_at`) VALUES
(12, 4, 17, 0, '2018-12-05 12:19:53', '2018-12-05 12:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_desc` text COLLATE utf8mb4_unicode_ci,
  `cat_status` tinyint(1) DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `cat_name`, `cat_desc`, `cat_status`, `created_at`, `updated_at`) VALUES
(0, 'بدونه دسته بندی', 'این گروه بدونه فهرست میباشد', 1, '2018-12-01 00:00:00', '2018-12-01 00:00:00'),
(1, 'آقایان', 'تمامی محصولات مرتبط با آقایان و شخصیت های مشابه', 1, '0000-00-00 00:00:00', '2018-12-05 16:15:00'),
(2, 'بانوان', 'تمامی محصولات مرتبط با بانوان و شخصیت های مشابه', 1, '0000-00-00 00:00:00', '2018-12-05 16:15:35'),
(4, 'کودکان', 'تمامی محصولات مرتبط با کودکان', 1, '2018-11-27 10:46:58', '2018-12-05 16:16:12'),
(5, 'عینک های آفتابی', 'عینک های بی نظیر مناسب برای تمامی سلیقه ها', 1, '2018-11-27 11:58:35', '2018-12-05 16:17:07'),
(6, 'تیشرت ها', 'همه نوع تیشرت', 1, '2018-12-05 16:18:19', '2018-12-05 16:18:19'),
(7, 'ساعت', 'برندی جدید', 0, '2018-12-06 02:44:27', '2018-12-06 03:32:19'),
(11, 'دستبند', 'دستبند های زیبا', 1, '2018-12-06 03:33:20', '2018-12-06 03:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorites`
--

CREATE TABLE `tbl_favorites` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_qty` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `order_name`, `order_qty`, `customer_id`, `shipping_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'سفارش اول', 5, 1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_qty` int(11) DEFAULT '0',
  `product_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_offer_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_status` tinyint(1) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_name`, `product_desc`, `product_description`, `product_color`, `product_price`, `product_qty`, `product_img`, `product_offer_img`, `product_status`, `cat_id`, `sub_cat_id`, `brand_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(13, 'کلاه', 'ghjhgj', 'jghjhgj', 'red', 200.00, 0, 'asset/upload/H5FO6.jpg', 'asset/upload/TLI76.png', 1, 2, 0, 1, 2, '2018-11-24 12:35:21', '2018-12-06 02:24:37'),
(17, 'shalvar', 'fgdgfdg', 'dfgfdg', 'red', 32.00, 1, 'asset/upload/Jx1dQ.jpg', 'asset/upload/C09O4.png', 1, 1, 1, 1, 1, NULL, '2018-12-02 10:18:42'),
(18, 'ژاکت', 'sdfsdf', 'dsfsd', 'green', 100.00, NULL, 'asset/upload/kUgwS.jpg', 'asset/upload/b84NP.png', 1, 1, 1, 1, 3, '2018-12-01 05:38:32', '2018-12-02 10:48:39'),
(19, 'کفش', 'بیلبیل', 'شسلیبیل', 'red', 123.00, NULL, 'asset/upload/kIEvp.jpg', 'asset/upload/ewSr3.png', 1, 1, 1, 4, 2, '2018-12-01 05:43:27', '2018-12-02 10:48:55'),
(20, 'bag', 'بزلرزاذ', 'زرطذزرطذ', 'red', 5.00, NULL, 'asset/upload/LOktN.jpg', 'asset/upload/E4DmC.png', 1, 1, 1, 4, 3, '2018-12-01 06:53:01', '2018-12-02 10:49:14'),
(21, 'تیشرت', 'تیشرت مردانه', 'جنس این تیشرت بسیار خوب و مقاوم بوده و از نوع پارادین بوده و در مقابل سرما مقاوم است', 'blue', 16000.00, 20, 'asset/upload/UFSBg.jpg', 'asset/upload/h7du7.png', 1, 1, 1, 5, 5, '2018-12-06 00:10:41', '2018-12-06 00:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_addr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id`, `customer_id`, `customer_name`, `customer_addr`, `customer_email`, `customer_phone`, `postal_code`, `created_at`, `updated_at`) VALUES
(4, 10, 'علی جعفری', 'تهران میدان انقلاب', 'info@gmial.com', '09109995566', '12345', '2018-12-02 20:30:00', '2018-11-30 20:30:00'),
(5, 4, 'علی عباسی', 'تهران ترمینال جنوب', 'admin@gmail.com', '2423432', '54321', '2018-12-06 08:17:06', '2018-12-06 08:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

CREATE TABLE `tbl_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_offer_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`id`, `slide_title`, `slide_desc`, `slide_img`, `slide_offer_img`, `slide_status`, `created_at`, `updated_at`) VALUES
(1, 'محصول جدید این هفته', 'یکی از محصولات بی نظیر ایرانی که ساخت دست هموطنان بی نظیر خودمان است', 'asset/upload/Hoq5J.jpg', 'asset/upload/offers/p1KQH.png', 1, '2018-11-28 10:42:28', '2018-12-05 13:37:22'),
(3, 'محصول جدید از برندی برتر', 'این محصول یکی از درجه یک ترین محصول ها می باشدکه استفاده کننده های آن بسیار خوشنود و راضی هستند', 'asset/upload/QT1jO.jpg', NULL, 1, '2018-11-29 17:19:50', '2018-12-05 13:40:25'),
(6, 'محصول سوم', 'اینم یه محصول بی نظیر دیگه!...', 'asset/upload/J2pRW.jpg', 'asset/upload/offers/HsER6.png', 1, '2018-12-02 10:46:08', '2018-12-05 13:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`id`, `cat_id`, `sub_cat_name`, `created_at`, `updated_at`) VALUES
(3, 7, 'ساعت های مردانه', '2018-12-05 23:19:02', '2018-12-05 23:19:02'),
(4, 7, 'ساعت های زنانه', '2018-12-05 23:23:26', '2018-12-05 23:23:26'),
(5, 7, 'ساعت های بچه گانه', '2018-12-05 23:28:13', '2018-12-05 23:28:13'),
(6, 11, 'دستبند مردانه', '2018-12-06 00:03:20', '2018-12-06 00:03:20'),
(7, 11, 'دستبند های زنانه', '2018-12-06 00:03:56', '2018-12-06 00:03:56'),
(8, 0, 'بدونه زیردسته', '2018-11-30 20:30:00', '2018-11-30 20:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tags`
--

CREATE TABLE `tbl_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tags`
--

INSERT INTO `tbl_tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(2, 'حراج استثنایی', '2018-11-27 09:52:36', '2018-12-05 12:53:28'),
(4, 'پرفروشترین ها', '2018-12-02 09:41:50', '2018-12-05 12:53:44'),
(5, 'جدیدترین ها', '2018-12-05 12:53:57', '2018-12-05 12:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'customer',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'demo@gmail.com', '$2y$10$zwCMh2BVV8.qozCv9Ft/GO41oyJhkA1FtBDwMjd5YEa.2j54nFIp2', 'admin', 1, 'mtT7DzT5a3ZsFdSnqUXiyR0oAYOXlavRTVg5JDLDqArdNYcxfBXxX6deJikc', '2018-10-31 20:30:00', '2018-12-06 07:50:00'),
(4, 'guest', 'guest@gmail.com', '$2y$10$qJo8NGd.IvOiaaxUxrQOGO1yZM8Imher5wxtlWnhuiwfogFC0J13G', 'customers', 1, '0L8AA0B31pYv1Tfo7ts9NwIUH7U2bqWgjVCi4kwSOpRdgOKNtUAmfOlyi4vy', '2018-11-28 03:42:01', '2018-11-28 05:53:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_order_product`
--
ALTER TABLE `customer_order_product`
  ADD PRIMARY KEY (`id`,`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_brands_brand_name_unique` (`brand_name`);

--
-- Indexes for table `tbl_carts`
--
ALTER TABLE `tbl_carts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`,`product_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_categories_cat_name_unique` (`cat_name`);

--
-- Indexes for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`,`customer_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_products_cat_id_index` (`cat_id`),
  ADD KEY `tbl_products_sub_cat_id_index` (`sub_cat_id`),
  ADD KEY `tbl_products_brand_id_index` (`brand_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_users_user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_carts`
--
ALTER TABLE `tbl_carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tags`
--
ALTER TABLE `tbl_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
