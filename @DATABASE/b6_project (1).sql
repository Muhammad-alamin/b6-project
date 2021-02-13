-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 07:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b6_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `is_featured`, `image`, `created_at`, `updated_at`) VALUES
(26, 'Beverages', 'All beverages Products is here!', 'Active', 1, 'images/category/145-phpFA69.tmp.jpg', '2021-01-22 14:50:42', '2021-01-22 14:50:42'),
(27, 'Dairy', 'All dairy Products is here!', 'Active', 1, 'images/category/4694-phpD3A3.tmp.jpg', '2021-01-22 14:51:38', '2021-01-22 14:51:38'),
(28, 'Grocery', 'All Grocery Products is here!', 'Active', 1, 'images/category/3136-php9F03.tmp.png', '2021-01-22 14:52:30', '2021-01-22 14:52:30'),
(29, 'Household & Cleaning', 'All Household & Cleaning Products is here!', 'Active', 1, 'images/category/3426-phpC256.tmp.jpg', '2021-01-22 14:53:44', '2021-01-22 14:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Alamin khan', 'alamin5230@yahoo.com.sg', 'Feedback', 'Nice Website', '2020-11-27 15:21:02', '2020-11-27 15:21:02'),
(3, 'Mohin Khan', 'alamin@gmail.com', 'Comments', 'Awesome Website', '2020-11-28 09:27:05', '2020-11-28 09:27:05'),
(4, 'rahim khan', 'rahim@gmail.com', 'Comments', 'Nothing to say', '2020-11-28 12:05:33', '2020-11-28 12:05:33'),
(5, 'Maruf', 'maruf@gmail.com', 'Comments', 'Good Online shop', '2020-11-29 04:23:48', '2020-11-29 04:23:48'),
(6, 'ggsagd', 'dasds@dasd', 'sdsada', 'dasdasd', '2021-01-17 17:34:22', '2021-01-17 17:34:22'),
(7, 'dsadas', 'dasdas@sdasd', 'sdasd@dasd', 'sdasd', '2021-01-17 17:36:21', '2021-01-17 17:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_06_103342_create_categories_table', 1),
(5, '2020_10_09_112837_create_products_table', 2),
(6, '2020_10_14_184359_add_new_column_in_users_table', 3),
(7, '2020_10_19_205209_add_is_featured_column_in_products_table', 4),
(8, '2020_10_19_213903_add_is_featured_column_in_products_table', 5),
(9, '2020_10_22_213904_add_image_and_is_featured_column_in_category_table', 6),
(24, '2020_11_03_180349_create_order_table', 7),
(25, '2020_11_03_180720_create_order_details', 7),
(26, '2020_11_03_203430_create_order_table', 8),
(27, '2020_11_03_203633_create_order_detail_table', 8),
(28, '2020_11_15_213112_add_payment_status_column_in_order_table', 9),
(34, '2020_11_16_214714_create_transections_table', 10),
(35, '2020_11_23_235321_add_is_admin_column_in_users_table', 11),
(36, '2020_11_27_205224_create_contacts_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` double(9,2) NOT NULL,
  `payment_method` enum('card','cod') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Processing','Shipped','Canceled','Delivered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `first_name`, `last_name`, `country`, `street_address`, `city`, `postcode`, `phone`, `email`, `total_amount`, `payment_method`, `status`, `payment_status`, `created_at`, `updated_at`) VALUES
(72, 'O-1611350076', 'Alamin', 'khan', 'Bangladesh', '000 mohammadpur dhaka', 'dhaka', '1207', '+8801764442804', 'alamin5230@yahoo.com.sg', 100.00, 'cod', 'Processing', 'unpaid', '2021-01-22 15:14:37', '2021-01-22 15:14:37'),
(73, 'O-1611350114', 'rahim', 'khan', 'Bangladesh', '220 khilgaon', 'dhaka', '1220', '+8801764442804', 'rahim@gmail.com', 600.00, 'card', 'Processing', 'paid', '2021-01-22 15:15:14', '2021-01-22 15:15:35'),
(74, 'O-1611350289', 'kari', 'khan', 'Bangladesh', '000 mohammadpur dhaka', 'dhaka', '1207', '+8801764442804', 'alamin5230@yahoo.com.sg', 320.00, 'cod', 'Processing', 'unpaid', '2021-01-22 15:18:09', '2021-01-22 15:18:09'),
(75, 'O-1611350423', 'Mohin', 'Khan', 'Bangladesh', '000 mohammadpur dhaka', 'dhaka', '1207', '+8801633037007', 'alamin5230@yahoo.com.sg', 100.00, 'card', 'Processing', 'paid', '2021-01-22 15:20:23', '2021-01-22 15:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(9,2) NOT NULL,
  `sub_total` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `sub_total`, `created_at`, `updated_at`) VALUES
(59, 72, 38, 1, 100.00, 100.00, '2021-01-22 15:14:37', '2021-01-22 15:14:37'),
(60, 73, 43, 1, 200.00, 200.00, '2021-01-22 15:15:14', '2021-01-22 15:15:14'),
(61, 73, 44, 1, 400.00, 400.00, '2021-01-22 15:15:14', '2021-01-22 15:15:14'),
(62, 74, 49, 1, 120.00, 120.00, '2021-01-22 15:18:09', '2021-01-22 15:18:09'),
(63, 74, 46, 1, 150.00, 150.00, '2021-01-22 15:18:09', '2021-01-22 15:18:09'),
(64, 74, 39, 1, 50.00, 50.00, '2021-01-22 15:18:09', '2021-01-22 15:18:09'),
(65, 75, 47, 1, 70.00, 70.00, '2021-01-22 15:20:23', '2021-01-22 15:20:23'),
(66, 75, 42, 1, 30.00, 30.00, '2021-01-22 15:20:23', '2021-01-22 15:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alamin5230@yahoo.com.sg', '$2y$10$R0pRcJNVeUFhXeHQfchizO8SKK37zCwlr8e3eajym6g1pAZjwIpUu', '2020-12-17 16:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(9,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `color`, `size`, `description`, `price`, `stock`, `is_featured`, `image`, `status`, `created_at`, `updated_at`) VALUES
(38, 26, 'SEYLON GOLD BLEND TEA DC BAG IN BOX50P 100G', 'red', '10\"', 'SEYLON GOLD BLEND TEA DC BAG IN BOX50P 100G', 100.00, 5, 1, 'images/product/126-php791F.tmp.jpg', 'Active', '2021-01-22 14:55:37', '2021-01-22 14:55:37'),
(39, 26, 'Mirinda Orange Pet 1 Ltr', 'orange', '12\"', 'Mirinda Orange Pet 1 Ltr', 50.00, 50, 1, 'images/product/6043-phpC40A.tmp.jpg', 'Active', '2021-01-22 14:58:07', '2021-01-22 14:58:07'),
(40, 26, 'Masafi Tropical Juice 2 Ltr', 'White', '10\"', 'Masafi Tropical Juice 2 Ltr', 150.00, 10, 1, 'images/product/6783-phpAD81.tmp.jpg', 'Active', '2021-01-22 14:59:07', '2021-01-22 14:59:07'),
(41, 27, 'Nestlé Nido Growing Up 1+ Protection Milk Powder (350g)', 'White', '10\"', 'Nestlé Nido Growing Up 1+ Protection Milk Powder (350g)', 350.00, 20, 1, 'images/product/8540-phpAA4C.tmp.jpg', 'Active', '2021-01-22 15:01:17', '2021-01-22 15:01:17'),
(42, 27, 'Pran Liquid Milk (1 Litre)', 'White', '10\"', 'Pran Liquid Milk (1 Litre)', 30.00, 50, 1, 'images/product/7000-php4C2A.tmp.jpg', 'Active', '2021-01-22 15:01:58', '2021-01-22 15:01:58'),
(43, 27, 'Amul Cheese Slices 10pcs 200gm', 'red', '10\"', 'Amul Cheese Slices 10pcs 200gm', 200.00, 20, 1, 'images/product/4527-php598.tmp.jpg', 'Active', '2021-01-22 15:02:46', '2021-01-22 15:02:46'),
(44, 28, 'Sunflower oil', 'White', '10\"', 'Sunflower oil', 400.00, 10, 1, 'images/product/344-php4F7E.tmp.jpg', 'Active', '2021-01-22 15:04:10', '2021-01-22 15:04:10'),
(45, 28, 'Maggi Noodles Family Pack', 'red', '12\"', 'Maggi Noodles Family Pack', 70.00, 10, 1, 'images/product/6566-php5F5A.tmp.jpg', 'Active', '2021-01-22 15:05:20', '2021-01-22 15:05:20'),
(46, 28, 'PRINGLES CHEDDAR CHEESE', 'White', '12\"', 'PRINGLES CHEDDAR CHEESE', 150.00, 20, 1, 'images/product/4857-php272F.tmp.jpg', 'Active', '2021-01-22 15:06:11', '2021-01-22 15:06:11'),
(47, 29, 'Rin Power Bright 2kg', 'White', '10\"', 'Rin Power Bright 2kg', 70.00, 20, 1, 'images/product/1488-phpD4D0.tmp.jpg', 'Active', '2021-01-22 15:08:01', '2021-01-22 15:08:01'),
(48, 29, 'BASHUNDHARA TOILET TISSUE SOFT 12PCS', 'White', '10\"', 'BASHUNDHARA TOILET TISSUE SOFT 12PCS', 120.00, 30, 1, 'images/product/1210-php6644.tmp.jpg', 'Active', '2021-01-22 15:08:38', '2021-01-22 15:08:38'),
(49, 29, 'FAY AIR FRESHENER ORCHID 300ml', 'White', '12\"', 'FAY AIR FRESHENER ORCHID 300ml', 120.00, 20, 1, 'images/product/4949-php643C.tmp.jpg', 'Active', '2021-01-22 15:09:43', '2021-01-22 15:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `transections`
--

CREATE TABLE `transections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `transction_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `request` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transections`
--

INSERT INTO `transections` (`id`, `order_id`, `transction_id`, `amount`, `request`, `response`, `status`, `created_at`, `updated_at`) VALUES
(6, 73, '600b406a5e5bc', 600.00, '{\"total_amount\":600,\"currency\":\"BDT\",\"tran_id\":\"600b406a5e5bc\",\"cus_name\":\"rahim khan\",\"cus_email\":\"rahim@gmail.com\",\"cus_add1\":\"220 khilgaon\",\"cus_add2\":\"\",\"cus_city\":\"dhaka\",\"cus_state\":\"dhaka\",\"cus_postcode\":\"1220\",\"cus_country\":\"Bangladesh\",\"cus_phone\":\"+8801764442804\",\"cus_fax\":\"\",\"ship_name\":\"rahim khan\",\"ship_add1\":\"220 khilgaon\",\"ship_add2\":\"\",\"ship_city\":\"dhaka\",\"ship_state\":\"dhaka\",\"ship_postcode\":\"1220\",\"ship_phone\":\"+8801764442804\",\"ship_country\":\"Bangladesh\",\"shipping_method\":\"Courier\",\"product_name\":\"Amul Cheese Slices 10pcs 200gm\",\"product_category\":\"Dairy\",\"product_profile\":\"physical-goods\",\"value_a\":73,\"value_b\":\"ref002\",\"value_c\":\"ref003\",\"value_d\":\"ref004\"}', NULL, 'pending', '2021-01-22 15:15:22', '2021-01-22 15:15:22'),
(7, 75, '600b419b3307f', 100.00, '{\"total_amount\":100,\"currency\":\"BDT\",\"tran_id\":\"600b419b3307f\",\"cus_name\":\"Mohin Khan\",\"cus_email\":\"alamin5230@yahoo.com.sg\",\"cus_add1\":\"000 mohammadpur dhaka\",\"cus_add2\":\"\",\"cus_city\":\"dhaka\",\"cus_state\":\"dhaka\",\"cus_postcode\":\"1207\",\"cus_country\":\"Bangladesh\",\"cus_phone\":\"+8801633037007\",\"cus_fax\":\"\",\"ship_name\":\"Mohin Khan\",\"ship_add1\":\"000 mohammadpur dhaka\",\"ship_add2\":\"\",\"ship_city\":\"dhaka\",\"ship_state\":\"dhaka\",\"ship_postcode\":\"1207\",\"ship_phone\":\"+8801633037007\",\"ship_country\":\"Bangladesh\",\"shipping_method\":\"Courier\",\"product_name\":\"Rin Power Bright 2kg\",\"product_category\":\"Household & Cleaning\",\"product_profile\":\"physical-goods\",\"value_a\":75,\"value_b\":\"ref002\",\"value_c\":\"ref003\",\"value_d\":\"ref004\"}', NULL, 'pending', '2021-01-22 15:20:27', '2021-01-22 15:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `address`, `status`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alamin', 'alamin5230@yahoo.com.sg', '+8801764442804', NULL, '$2y$10$nKcMDmP.P/gOQUO1CooKbO0WK4blAWhvRV3eB58Le0bQDUl2Iv8IS', NULL, 'Active', 1, 'yMncIW6ZlzYd8HsEUXOteF4AaFHXo8O5zfNW1EBUnQWD7UbC1mswsMJSFs9P', '2020-10-14 14:14:29', '2020-10-14 15:07:50'),
(2, 'Mohin', 'mohin@gmail.com', '+8801633037007', NULL, '$2y$10$vC/vWTYlRZiXTH2zd95zJ.p.ly8RUFeok1SvGVeBe07D0PWdArsVu', NULL, 'Active', 0, NULL, '2020-10-14 15:23:32', '2020-10-14 15:24:32'),
(3, 'Rifat', 'rifat@gmail.com', '01633037007', NULL, '$2y$10$jlhg8tqfWQ24Q/M/QSowF.ZAdMd8nfwJ6oWastH6nsn0bmru1poH.', NULL, 'Active', 0, NULL, '2020-10-14 15:25:13', '2020-10-14 15:31:56'),
(4, 'joy', 'joy@gmail.com', '01720008924', NULL, '$2y$10$08uJjeu.xbdggIOj0ij8X.9qCxikmHZ0UKwqP3VZSLFWS4I81qY76', NULL, 'Inactive', 0, NULL, '2020-10-14 15:32:37', '2020-10-14 15:32:37'),
(5, 'rahim khan', 'rahim@gmail.com', '+8801700000', NULL, '$2y$10$V6HE7bZbr7gI1JNxGsUlVONo.DZ/h0SleCUTAS5GRlx0I46jKmD4i', NULL, 'Active', 0, NULL, '2020-11-24 12:30:32', '2020-11-24 12:30:32'),
(6, 'kari khan', 'kari@yahoo.com.sg', '+8801720008924', NULL, '$2y$10$uC5rO29oAM0ykfC/y821Z.LO.zffHvz/ODJOJlgxma.kL954nGAgK', NULL, 'Active', 1, NULL, '2020-11-24 14:00:06', '2020-11-24 14:00:06'),
(7, 'Mohin Khan', 'mohin@yahoo.com.sg', '+880163303700', NULL, '$2y$10$TiKKMHaA/MUgPNRDLfA.Ju2GuhIfmTxt7OIB2QBo0OsWUC0v4yscC', NULL, 'Inactive', 1, NULL, '2020-11-24 14:04:40', '2020-11-24 14:09:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `transections`
--
ALTER TABLE `transections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transections_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `transections`
--
ALTER TABLE `transections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transections`
--
ALTER TABLE `transections`
  ADD CONSTRAINT `transections_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
