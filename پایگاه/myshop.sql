-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 08, 2024 at 08:00 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cookie_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `shippingmethod_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baskets`
--

INSERT INTO `baskets` (`id`, `user_id`, `cookie_id`, `address_id`, `shippingmethod_id`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 57, NULL, NULL, NULL, NULL, '2024-08-07 01:52:10', '2024-08-07 01:52:10', NULL),
(2, 59, NULL, NULL, NULL, NULL, '2024-08-07 04:00:29', '2024-08-07 04:00:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basket_items`
--

CREATE TABLE `basket_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `basket_id` int(11) DEFAULT NULL,
  `product_variable_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basket_items`
--

INSERT INTO `basket_items` (`id`, `product_id`, `basket_id`, `product_variable_id`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, 1, NULL, 1, '2024-08-07 01:55:07', '2024-08-07 01:55:07', NULL),
(2, 9, 1, NULL, 1, '2024-08-07 01:59:05', '2024-08-07 01:59:05', NULL),
(3, 9, 1, NULL, 1, '2024-08-07 01:59:12', '2024-08-07 01:59:12', NULL),
(4, 9, 1, NULL, 1, '2024-08-07 02:03:39', '2024-08-07 02:03:39', NULL),
(5, 9, 1, NULL, 1, '2024-08-07 03:49:09', '2024-08-07 03:49:09', NULL),
(6, 9, 1, NULL, 1, '2024-08-07 03:49:25', '2024-08-07 03:49:25', NULL),
(7, 9, 1, NULL, 1, '2024-08-07 03:56:12', '2024-08-07 03:56:12', NULL),
(8, 9, 1, NULL, 1, '2024-08-07 03:56:29', '2024-08-07 03:56:29', NULL),
(9, 9, 2, NULL, 1, '2024-08-07 04:00:29', '2024-08-07 04:37:02', '2024-08-07 04:37:02'),
(10, 9, 2, NULL, 1, '2024-08-07 04:03:37', '2024-08-07 04:40:03', '2024-08-07 04:40:03'),
(11, 18, 2, NULL, 1, '2024-08-07 04:03:50', '2024-08-07 04:42:18', '2024-08-07 04:42:18'),
(12, 19, 2, NULL, 1, '2024-08-07 04:03:56', '2024-08-07 04:47:11', '2024-08-07 04:47:11'),
(13, 19, 2, NULL, 1, '2024-08-07 04:04:44', '2024-08-07 04:49:55', '2024-08-07 04:49:55'),
(14, 19, 2, NULL, 1, '2024-08-07 04:19:37', '2024-08-07 04:51:06', '2024-08-07 04:51:06'),
(15, 19, 2, NULL, 1, '2024-08-07 04:20:37', '2024-08-07 04:53:51', '2024-08-07 04:53:51'),
(16, 19, 2, NULL, 1, '2024-08-07 04:21:25', '2024-08-07 04:55:08', '2024-08-07 04:55:08'),
(17, 19, 2, NULL, 1, '2024-08-07 04:30:18', '2024-08-07 04:56:09', '2024-08-07 04:56:09'),
(18, 19, 2, NULL, 1, '2024-08-07 04:34:12', '2024-08-07 08:55:50', '2024-08-07 08:55:50'),
(19, 19, 2, NULL, 1, '2024-08-07 04:36:56', '2024-08-07 08:24:32', '2024-08-07 08:24:32'),
(20, 19, 2, NULL, 1, '2024-08-07 04:39:52', '2024-08-07 08:55:53', '2024-08-07 08:55:53'),
(21, 19, 2, NULL, 1, '2024-08-07 04:40:17', '2024-08-07 08:55:54', '2024-08-07 08:55:54'),
(22, 19, 2, NULL, 1, '2024-08-07 04:42:05', '2024-08-07 08:34:39', '2024-08-07 08:34:39'),
(23, 19, 2, NULL, 1, '2024-08-07 04:47:09', '2024-08-07 08:59:58', '2024-08-07 08:59:58'),
(24, 19, 2, NULL, 1, '2024-08-07 04:47:32', '2024-08-07 09:01:55', '2024-08-07 09:01:55'),
(25, 19, 2, NULL, 1, '2024-08-07 04:49:23', '2024-08-07 09:02:03', '2024-08-07 09:02:03'),
(26, 19, 2, NULL, 1, '2024-08-07 04:49:52', '2024-08-07 09:03:26', '2024-08-07 09:03:26'),
(27, 19, 2, NULL, 1, '2024-08-07 04:50:49', '2024-08-07 09:04:12', '2024-08-07 09:04:12'),
(28, 19, 2, NULL, 1, '2024-08-07 04:52:12', '2024-08-07 10:27:00', '2024-08-07 10:27:00'),
(29, 19, 2, NULL, 1, '2024-08-07 04:52:41', '2024-08-07 04:52:41', NULL),
(30, 19, 2, NULL, 1, '2024-08-07 04:52:47', '2024-08-07 04:52:47', NULL),
(31, 19, 2, NULL, 1, '2024-08-07 04:52:56', '2024-08-07 04:52:56', NULL),
(32, 19, 2, NULL, 1, '2024-08-07 04:53:47', '2024-08-07 04:53:47', NULL),
(33, 19, 2, NULL, 1, '2024-08-07 04:55:06', '2024-08-07 04:55:06', NULL),
(34, 19, 2, NULL, 1, '2024-08-07 04:56:07', '2024-08-07 04:56:07', NULL),
(35, 18, 2, NULL, 1, '2024-08-07 04:56:31', '2024-08-07 04:56:39', '2024-08-07 04:56:39'),
(36, 18, 2, NULL, 1, '2024-08-07 04:56:47', '2024-08-07 04:56:47', NULL),
(37, 18, 2, NULL, 1, '2024-08-07 04:56:52', '2024-08-07 04:56:58', '2024-08-07 04:56:58'),
(38, 18, 2, NULL, 1, '2024-08-07 04:57:10', '2024-08-07 04:57:10', NULL),
(39, 18, 2, NULL, 1, '2024-08-07 04:57:16', '2024-08-07 04:57:16', NULL),
(40, 18, 2, NULL, 1, '2024-08-07 04:57:23', '2024-08-07 04:57:31', '2024-08-07 04:57:31'),
(41, 18, 2, NULL, 1, '2024-08-07 04:57:42', '2024-08-07 04:57:42', NULL),
(42, 22, 2, NULL, 1, '2024-08-07 05:02:35', '2024-08-07 05:05:39', '2024-08-07 05:05:39'),
(43, 22, 2, NULL, 1, '2024-08-07 05:06:42', '2024-08-07 08:56:14', '2024-08-07 08:56:14'),
(44, 22, 2, NULL, 1, '2024-08-07 05:06:54', '2024-08-07 05:06:54', NULL),
(45, 9, 2, NULL, 1, '2024-08-07 08:01:52', '2024-08-07 08:01:52', NULL),
(46, 9, 2, NULL, 1, '2024-08-07 08:05:03', '2024-08-07 08:05:03', NULL),
(47, 9, 2, NULL, 1, '2024-08-07 08:05:20', '2024-08-07 08:05:20', NULL),
(48, 9, 2, NULL, 1, '2024-08-07 08:05:29', '2024-08-07 08:05:29', NULL),
(49, 9, 2, NULL, 1, '2024-08-07 08:05:48', '2024-08-07 08:05:48', NULL),
(50, 18, 2, NULL, 1, '2024-08-07 08:11:53', '2024-08-07 08:11:53', NULL),
(51, 18, 2, NULL, 1, '2024-08-07 08:15:37', '2024-08-07 08:15:37', NULL),
(52, 18, 2, NULL, 1, '2024-08-07 08:19:15', '2024-08-07 08:19:15', NULL),
(53, 18, 2, NULL, 1, '2024-08-07 08:19:51', '2024-08-07 08:19:51', NULL),
(54, 18, 2, NULL, 1, '2024-08-07 08:23:45', '2024-08-07 08:23:45', NULL),
(55, 18, 2, NULL, 1, '2024-08-07 08:24:31', '2024-08-07 08:24:31', NULL),
(56, 9, 2, NULL, 1, '2024-08-07 08:25:20', '2024-08-07 08:56:04', '2024-08-07 08:56:04'),
(57, 9, 2, NULL, 1, '2024-08-07 08:31:41', '2024-08-07 08:56:07', '2024-08-07 08:56:07'),
(58, 9, 2, NULL, 1, '2024-08-07 08:34:07', '2024-08-07 08:56:10', '2024-08-07 08:56:10'),
(59, 9, 2, NULL, 1, '2024-08-07 08:34:25', '2024-08-07 08:56:00', '2024-08-07 08:56:00'),
(60, 18, 2, NULL, 1, '2024-08-07 08:34:50', '2024-08-07 08:34:50', NULL),
(61, 18, 2, NULL, 1, '2024-08-07 08:57:06', '2024-08-07 08:57:06', NULL),
(62, 18, 2, NULL, 1, '2024-08-07 09:00:04', '2024-08-07 09:00:04', NULL),
(63, 18, 2, NULL, 1, '2024-08-07 09:00:32', '2024-08-07 09:00:32', NULL),
(64, 18, 2, NULL, 1, '2024-08-07 09:01:43', '2024-08-07 09:01:43', NULL),
(65, 18, 2, NULL, 1, '2024-08-07 09:03:24', '2024-08-07 09:03:24', NULL),
(66, 18, 2, NULL, 1, '2024-08-07 09:04:10', '2024-08-07 09:04:10', NULL),
(67, 18, 2, NULL, 1, '2024-08-07 09:04:19', '2024-08-07 09:04:19', NULL),
(68, 9, 2, NULL, 1, '2024-08-07 10:35:25', '2024-08-07 10:35:25', NULL),
(69, 9, 2, NULL, 1, '2024-08-08 03:40:46', '2024-08-08 03:43:00', '2024-08-08 03:43:00'),
(70, 9, 2, NULL, 1, '2024-08-08 03:41:20', '2024-08-08 03:42:57', '2024-08-08 03:42:57'),
(71, 18, 2, NULL, 1, '2024-08-08 03:42:43', '2024-08-08 03:42:51', '2024-08-08 03:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_homePage` varchar(266) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `keyword_meta` text COLLATE utf8mb4_unicode_ci,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `category_id`, `url`, `show_homePage`, `view`, `description`, `keyword_meta`, `title_seo`, `description_seo`, `created_at`, `updated_at`) VALUES
(1, 'بن مژه طبیعی', '9cacb80da3c1821a5aa8e95490954aa3.jpg', '3', 'bryryry', 'info', 6, '<p>رییر</p>', NULL, 'ریطیربذب', 'ذب', '2024-03-03 09:30:03', '2024-07-25 13:08:37'),
(2, 'چیدمان', 'a09e11be97454602892e4ec8564ef701.jpg', '1', 'vrbythbth', 'purple', 2, '<p>بثبث</p>', NULL, 'بثب', 'بثصثصب', '2024-03-04 06:33:41', '2024-07-25 14:26:42'),
(3, 'رژ لب', '343578655d4722215e2b772bd65227cf.jpg', '2', 'cdsmyrgan', 'success', 8, '<p>بثقب</p>', NULL, 'بثب', 'بثب', '2024-03-04 06:34:02', '2024-07-29 16:14:14'),
(4, 'رژ لب', '5feeb1a6bd5790b61be1ec64edff9f17.jpg', '3', 'carde', 'danger', 3, '<p>vdvd</p>', NULL, 'vddvdv', 'dvdv', '2024-04-23 17:56:52', '2024-07-27 07:42:34'),
(5, 'میکرو', '85631940c4190bedde5d1a64720061cf.jpg', '3', 'vssd', 'info', 0, '<p>dv</p>', NULL, 'vsvd', 'vsvs', '2024-04-23 17:57:56', '2024-07-25 12:40:31'),
(6, 'عینک پارسیا', 'e8eff84f6cfa47a1fd65999fcc9360bf.jpg', '3', 'zibaeef', 'purple', 1, '<p>fbbf</p>', NULL, 'bfbf', 'bfff', '2024-07-18 09:05:55', '2024-07-27 13:15:39'),
(7, 'نان محلی', 'abfb3e1259e856c8deeefd56bd13c777.jpg', '3', 'orange', 'orange', 0, NULL, NULL, 'dcdcd', 'dcdcd', '2024-07-25 12:39:33', '2024-07-25 12:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `image`, `url`, `status`, `icon`, `description`, `title_seo`, `description_seo`, `created_at`, `updated_at`) VALUES
(1, 'بادکنک آرایی', '47de7ab57bfaf7249892f1590008147a.jpg', 'badknk', 0, NULL, '<p>ریری</p>', 'رطزر', 'طرط', '2024-03-03 09:29:30', '2024-07-18 09:14:02'),
(2, 'ماساژ', '86bb00de6ea0d86a8ad23a4a98d083c3.jpg', 'sm-sma', 0, NULL, '<p>ریر</p>', 'رب', 'ری', '2024-03-04 06:40:52', '2024-07-18 09:13:41'),
(3, 'زیبایی', '68349dd89af80cca4a42e702654399f5.jpg', 'dzibaee', 0, NULL, '<p>ddfd</p>', 'vvd', 'vddv', '2024-04-23 18:08:53', '2024-07-18 09:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sortlist` int(11) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '1',
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `title_en`, `url`, `parent_id`, `color`, `sortlist`, `sort`, `cover`, `status`, `description`, `keywords`, `title_seo`, `description_seo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'مراسم و میزبانی', 'fas fa-dancer', 'ceremony', NULL, 'orange', 1, 1, '3b333cd09415956c04c0fe07a33400b9.png', 1, '<h2><br />\r\n<strong><span style=\"color:#f4b19f\">تنور گازی خانگی: سرمایه&zwnj;گذاری هوشمند در آشپزی خانگی</span></strong></h2>\r\n\r\n<p>آشپزی در خانه همواره به عنوان یکی از مهمترین فعالیت&zwnj;های روزانه خانواده&zwnj;ها محسوب می&zwnj;شود. یکی از ابزارهای اساسی در آشپزی،<strong> تنور گازی خانگی</strong> است. تاکنون، استفاده از تنورهای گازی خانگی محدود به صنعت رستوران&zwnj;ها و فضاهای تجاری بود، اما امروزه این دستگاه&zwnj;ها به شکلی هوشمندانه و قابل تحمل برای استفاده در خانه طراحی شده&zwnj;اند.</p>\r\n\r\n<h2><span style=\"color:#f4b19f\"><strong>راهنمای خرید تنور گازی خانگی</strong></span></h2>\r\n\r\n<p>خرید تنور گازی&nbsp; اقتصادی <strong>خانگی</strong> می&zwnj;تواند به عنوان یک سرمایه&zwnj;گذاری هوشمند در آشپزی خانگی در نظر گرفته شود. برخی از مشتریان در انتخاب برند تنور گازی خانگی به دنبال برند معتبری هستند. تنور گازی با طراحی زیبای مختلفی در بازار وجود دارند که هر یک ویژگی&zwnj;ها و قابلیت&zwnj;های منحصر به فردی دارند.</p>\r\n\r\n<h2><span style=\"color:#f4b19f\">تنور گازی خانگی:&nbsp; عملکرد بزرگ برای خلق غذاهای خوشمزه در منزل</span></h2>\r\n\r\n<p>آیا به دنبال راهی آسان و کارآمد برای پخت و پز غذاهای خوشمزه در منزل خود هستید؟<a href=\"https://kabinmobtaker.com/cat/13\"><strong> تنور گازی خانگی</strong></a> به عنوان یک وسیله بسیار عملی و کاربردی می&zwnj;تواند به شما در زمینه&nbsp; پخت و پز غذاهای جدید کمک بسیاری کند. با استفاده از <strong>تنور گازی خانگی</strong>، شما قادر خواهید بود غذاهای با طراوت و اصالت خود را در منزل تهیه کنید ودر کنار خانواده&nbsp; لذت ببرید.</p>', NULL, 'vvvvvv', 'vdfvddvv', '2024-03-03 09:00:22', '2024-08-06 09:44:33', NULL),
(2, 'حرکات موزون', 'fas fa-dancer', 'hygiene', NULL, 'purple', 1, 1, '0', 1, '<p>زسز</p>', NULL, 'فتغات', 'زسسزس', '2024-03-03 09:27:47', '2024-08-06 09:45:48', NULL),
(3, 'آرایش میز ناهار خوری', NULL, 'dining-table', NULL, 'danger', 1, 1, NULL, 1, '<p>آرایش میز ناهار خوری</p>', NULL, 'آرایش میز ناهار خوری', 'آرایش میز ناهار خوری', '2024-04-29 05:43:05', '2024-08-06 04:48:47', NULL),
(4, 'بادکنک آرایی', NULL, 'ballon', NULL, 'info', 1, 1, NULL, 1, '<p>بادکنک آراییبادکنک آراییبادکنک آرایی</p>', NULL, 'بادکنک آرایی', 'بادکنک آرایی', '2024-04-29 07:28:07', '2024-08-06 04:49:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_convert` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `content_type` int(11) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `link` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `lead` text COLLATE utf8mb4_unicode_ci,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `image`, `image_convert`, `url`, `status`, `view`, `content_type`, `sort`, `link`, `description`, `parent_id`, `keywords`, `lead`, `title_seo`, `description_seo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ذبلذل', '0dc368da41fc41204c2388abde3923d9.png', 'ذب', 'banner/1', 0, '0', 2, 0, NULL, '<p>ذبللبذ</p>', NULL, NULL, NULL, NULL, NULL, '2024-03-04 06:44:30', '2024-06-09 11:06:57', NULL),
(2, 'cfv', '854923f670d5040cc2d4ccff4fbfad2d0000.jpg', NULL, NULL, 0, '0', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-29 08:46:44', '2024-07-29 08:48:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `sort` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_specification_id` int(11) DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` int(11) NOT NULL DEFAULT '0',
  `convert` int(11) NOT NULL DEFAULT '0',
  `old_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_webp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '1',
  `img` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_receipt`
--

CREATE TABLE `inventory_receipt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inventoryable_id` int(11) DEFAULT NULL,
  `inventoryable_type` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `related` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`action`, `data`, `user_id`, `related`, `created_at`, `updated_at`, `deleted_at`) VALUES
('http://myshop:8888/admin/user/edit/6', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"XIRH3l11eMcDblZaWimmWtbvC9nnPEnwTUkw8DN4\";s:4:\"name\";s:8:\"مدیر\";s:6:\"family\";N;s:5:\"email\";s:15:\"infffo@site.com\";s:6:\"mobile\";N;s:6:\"status\";s:1:\"1\";s:5:\"group\";a:1:{i:0;s:1:\"1\";}}}', 1, '6', '2024-03-03 09:25:30', '2024-03-03 09:25:30', NULL),
('http://myshop:8888/admin/user/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"XIRH3l11eMcDblZaWimmWtbvC9nnPEnwTUkw8DN4\";s:4:\"name\";s:8:\"مدیر\";s:6:\"family\";N;s:5:\"email\";s:13:\"info@site.com\";s:6:\"mobile\";N;s:6:\"status\";s:1:\"1\";s:5:\"group\";a:1:{i:0;s:1:\"1\";}}}', 1, '1', '2024-03-03 09:25:48', '2024-03-03 09:25:48', NULL),
('http://myshop:8888/admin/user/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"XIRH3l11eMcDblZaWimmWtbvC9nnPEnwTUkw8DN4\";s:4:\"name\";s:8:\"مدیر\";s:6:\"family\";N;s:5:\"email\";s:13:\"info@site.com\";s:6:\"mobile\";N;s:6:\"status\";s:1:\"1\";s:5:\"group\";a:1:{i:0;s:1:\"1\";}}}', 1, '1', '2024-03-03 09:25:57', '2024-03-03 09:25:57', NULL),
('http://myshop:8888/admin/slider/add', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"M6x9Bnrp3arErkakVhmkK2AQRGNs2V6FKSOVLFf0\";s:5:\"title\";N;s:13:\"image_convert\";N;s:12:\"content_type\";s:1:\"2\";s:4:\"link\";N;s:11:\"description\";N;s:5:\"image\";s:36:\"d99d8b5dca7e8bb26377ff298f13d1c4.png\";}}', 1, '1', '2024-03-04 06:44:30', '2024-03-04 06:44:30', NULL),
('http://myshop:8888/admin/slider/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"M6x9Bnrp3arErkakVhmkK2AQRGNs2V6FKSOVLFf0\";s:5:\"title\";s:10:\"ذبلذل\";s:13:\"image_convert\";s:4:\"ذب\";s:12:\"content_type\";s:1:\"2\";s:4:\"link\";N;s:11:\"description\";s:19:\"<p>ذبللبذ</p>\";s:5:\"image\";s:36:\"d99d8b5dca7e8bb26377ff298f13d1c4.png\";}}', 1, '1', '2024-03-04 06:44:39', '2024-03-04 06:44:39', NULL),
('http://myshop:8888/admin/user/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"M6x9Bnrp3arErkakVhmkK2AQRGNs2V6FKSOVLFf0\";s:4:\"name\";s:10:\"مدیرز\";s:6:\"family\";N;s:5:\"email\";s:13:\"info@site.com\";s:6:\"mobile\";N;s:6:\"status\";s:1:\"1\";s:5:\"group\";a:1:{i:0;s:1:\"1\";}}}', 1, '1', '2024-03-04 07:12:04', '2024-03-04 07:12:04', NULL),
('http://myshop:8888/admin/user/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"M6x9Bnrp3arErkakVhmkK2AQRGNs2V6FKSOVLFf0\";s:4:\"name\";s:14:\"مدیرزبی\";s:6:\"family\";N;s:5:\"email\";s:13:\"info@site.com\";s:6:\"mobile\";N;s:6:\"status\";s:1:\"1\";s:5:\"group\";a:1:{i:0;s:1:\"1\";}}}', 1, '1', '2024-03-04 07:15:48', '2024-03-04 07:15:48', NULL),
('http://myshop:8888/admin/user/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"S2050SXyPS3uK43htKahbzUBgHKu6bk1TANj7t6a\";s:4:\"name\";s:19:\"مدیرزبیfffff\";s:6:\"family\";N;s:5:\"email\";s:13:\"info@site.com\";s:6:\"mobile\";N;s:6:\"status\";s:1:\"1\";s:5:\"group\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"5\";}}}', 1, '1', '2024-05-08 03:25:13', '2024-05-08 03:25:13', NULL),
('http://myshop:8888/admin/slider/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"yCtcdQ7BCwAgCiFfmCxJBMEkDyuEzmU6zsxavZnq\";s:5:\"title\";s:10:\"ذبلذل\";s:13:\"image_convert\";s:4:\"ذب\";s:12:\"content_type\";s:1:\"2\";s:4:\"link\";N;s:11:\"description\";s:19:\"<p>ذبللبذ</p>\";s:5:\"image\";s:36:\"0dc368da41fc41204c2388abde3923d9.png\";}}', 1, '1', '2024-06-09 11:06:57', '2024-06-09 11:06:57', NULL),
('http://myshop:8888/admin/slider/edit/1', 'a:1:{i:0;a:7:{s:6:\"_token\";s:40:\"yCtcdQ7BCwAgCiFfmCxJBMEkDyuEzmU6zsxavZnq\";s:5:\"title\";s:10:\"ذبلذل\";s:13:\"image_convert\";s:4:\"ذب\";s:12:\"content_type\";s:1:\"2\";s:4:\"link\";N;s:11:\"description\";s:19:\"<p>ذبللبذ</p>\";s:5:\"image\";s:36:\"0dc368da41fc41204c2388abde3923d9.png\";}}', 1, '1', '2024-06-09 11:10:31', '2024-06-09 11:10:31', NULL),
('http://myshop:8888/admin/uploader/add', 'a:1:{i:0;a:4:{s:6:\"_token\";s:40:\"KL0yLwIjblJyhXY8RuNpEHaS7kSs7O7h6WaILdft\";s:5:\"title\";s:5:\"dfvfd\";s:5:\"image\";s:40:\"854923f670d5040cc2d4ccff4fbfad2d0000.jpg\";s:12:\"content_type\";s:1:\"4\";}}', 1, '2', '2024-07-29 08:46:44', '2024-07-29 08:46:44', NULL),
('http://myshop:8888/admin/uploader/edit/2', 'a:1:{i:0;a:3:{s:6:\"_token\";s:40:\"KL0yLwIjblJyhXY8RuNpEHaS7kSs7O7h6WaILdft\";s:5:\"title\";s:3:\"cfv\";s:5:\"image\";s:40:\"854923f670d5040cc2d4ccff4fbfad2d0000.jpg\";}}', 1, '2', '2024-07-29 08:48:35', '2024-07-29 08:48:35', NULL);

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
(146, '2014_10_12_000000_create_users_table', 1),
(147, '2014_10_12_100000_create_password_resets_table', 1),
(148, '2019_08_19_000000_create_failed_jobs_table', 1),
(149, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(150, '2023_10_09_162251_create_products_table', 1),
(151, '2023_10_09_162351_create_product_category_table', 1),
(152, '2023_10_09_162546_create_product_specification_types_table', 1),
(153, '2023_10_09_162759_create_product_specification_table', 1),
(154, '2023_10_09_163241_create_filters_table', 1),
(155, '2023_10_09_163506_create_prices_table', 1),
(156, '2023_10_09_163705_create_inventory_receipt_table', 1),
(157, '2023_10_09_164252_create_shipment_methods_table', 1),
(158, '2023_10_09_164825_create_shipment_city_table', 1),
(159, '2023_10_09_165037_create_basket_table', 1),
(160, '2023_10_09_165054_create_basket_items_table', 1),
(161, '2023_10_09_165124_create_orders_table', 1),
(162, '2023_10_09_165155_create_order_item_table', 1),
(163, '2023_10_09_165242_create_order_histories_table', 1),
(164, '2023_10_10_055101_create_categories_table', 1),
(165, '2023_10_10_075052_create_product_variables_table', 1),
(166, '2023_10_31_074017_create_images_table', 1),
(167, '2023_11_15_113058_create_contents_table', 1),
(168, '2023_11_15_131450_create_tags_table', 1),
(169, '2023_11_15_131958_create_taggables_table', 1),
(170, '2023_11_15_132736_create_logs_table', 1),
(171, '2023_11_19_154812_create_roles_table', 1),
(172, '2023_11_19_155009_create_role_user_table', 1),
(173, '2024_01_23_073801_create_blog_categories_table', 1),
(174, '2024_01_23_073812_create_blog_table', 1),
(176, '2024_06_11_081728_create_settings_table', 2),
(177, '2024_07_03_042639_create_product_video_table', 3),
(178, '2024_07_27_145814_create_socila_table', 4),
(179, '2024_07_28_100647_create_redirect_table', 5),
(180, '2024_07_28_100647_create_redirects_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `location` text COLLATE utf8mb4_unicode_ci,
  `basket_id` int(11) DEFAULT NULL,
  `buyer_name` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_status_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `product_variable_id` int(11) DEFAULT NULL,
  `item_status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priceable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priceable_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_to_use` text COLLATE utf8mb4_unicode_ci,
  `ingredients` text COLLATE utf8mb4_unicode_ci,
  `like_count` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `video_link` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stocks` int(11) DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `lead` text COLLATE utf8mb4_unicode_ci,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `title_en`, `url`, `status`, `count`, `how_to_use`, `ingredients`, `like_count`, `sort`, `video_link`, `description`, `price`, `old_price`, `stocks`, `keywords`, `lead`, `title_seo`, `description_seo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'نان محلی', NULL, 'card', 1, NULL, NULL, NULL, 0, 0, NULL, '<p>عینک پارسیا</p>', '122000', '0', NULL, NULL, NULL, 'عینک پارسیا', 'عینک پارسیا', '2024-04-29 07:55:43', '2024-06-09 10:21:44', NULL),
(12, 'گل آرایی', NULL, 'gol', 1, NULL, 'تنور گازی ساج دار ایرانی با ترکیبی از فناوری مدرن و طراحی سنتی، به شما امکان می‌دهد از مزایای یک تنور گازی استفاده کنید و در عین حال طعم و مزه‌ی خاص پخت غذا برا تنور سنتی را،  تجربه کنید. ', NULL, 0, 0, NULL, '\nتنور گازی ساج دار ایرانی با ترکیبی از فناوری مدرن و طراحی سنتی، به شما امکان می‌دهد از مزایای یک تنور گازی استفاده کنید و در عین حال طعم و مزه‌ی خاص پخت غذا برا تنور سنتی را،  تجربه کنید. با استفاده از تکنولوژی پیشرفته‌ی موجود در تنور ساج دار گازی، می‌توانید به آسانی غذاهای خوشمزه و لذیذی را در خانه تهیه کنید.  طرز استفاده از تنور ساج دار ایرانی نیز بسیار آسان است. برای استفاده از این تنور، ابتدا نیاز دارید تا تنور را به گاز طبیعی یا گاز شهری متصل کنید. سپس با استفاده از کنترل‌های موجود بر روی تنور، می‌توانید قدرت آتش را تنظیم کنید و دمای مناسب برای پخت و پز را فراهم کنید. با کمی تمرین و آشنایی با تنظیمات تنور، می‌توانید به طور حرفه‌ای غذاهای خوشمزه و لذیذی را درست کنید.\nقیمت تنور ساج دار چدنی: تجربه‌ای لذت‌بخش از پخت نان محلی در آشپزخانه\n\nتنور گازی ساج دار چدنی از جنس چدن با کیفیت ساخته شده‌اند که باعث می‌شود دمای یکنواختی در تمامی نقاط تنور به وجود آید. این تنور از نظر عملکرد و استفاده نیز بسیار آسان است. با نصب تنور به گاز شهری و تنظیم قدرت آتش، می‌توانید به آسانی نان محلی خوشمزه و سنتی را در خانه تهیه کنید. برخلاف تنورهای سنتی، تنور گازی ساج دار چدنی نیازی به زمان و زحمت برای آماده‌سازی آتش و نگهداری از آن ندارد. همچنین، با تنظیمات دما و زمان پخت مناسب، می‌توانید نان‌های پفی با لایه‌های خوشمزه را درست کنید. قیمت تنور گازی ساج دار چدنی متناسب با کیفیت و قابلیت‌های آن است. با خرید تنور گازی ساج دار چدنی، شما به راحتی می‌توانید نان محلی خوشمزه‌ای را در آشپزخانه خانگی خود پخت کنید.\n\nتنور ساج دار و استفاده از مواد طبیعی و سالم در آشپزی\n\nتنور ساج دار مدرن، با طراحی منحصر به فرد و استفاده از جنس چدن با کیفیت، امکان پخت و پز بهینه را فراهم می‌کند. این تنور با دمای یکنواخت در تمامی نقاط، به شما اجازه می‌دهد که غذاها را به طور یکسان و بهینه پخت کنید. بدون نیاز به مصرف برق یا سوخت گاز، تنور ساج دار با استفاده از حرارت مستقیم آتش، طعم و مزه طبیعی غذاها را حفظ می‌کند و به شما امکان می‌دهد از مواد طبیعی و سالم در آشپزی استفاده کنید. استفاده از تنور ساج دار مدرن در آشپزی، به شما امکان می‌دهد تا با استفاده از مواد طبیعی و سالم، غذاهایی با طعم و عطری بی‌نظیر را در خانه تهیه کنید. خرید تنور ساج دار چدنی، یک گام مهم در راستای ایجاد آشپزخانه‌ای سالم  است.\n\n \nتنور ساج دار و ارتباط آن با رژیم غذایی و سلامتی\n\nتنور ساج دار، به عنوان یک وسیله پخت سنتی و طبیعی، ارتباط مستقیمی با رژیم غذایی سالم و سلامتی دارد. آموزش پخت با تنور ساج دار، به شما امکان می‌دهد غذاهایی با ارزش غذایی بالا و کمترین استفاده از چربی و روغن را درست کنید. دستور پخت در تنور ساج دار بسیار ساده است. با استفاده از این تنور، می‌توانید انواع نان‌های سالم و بدون مواد نگهدارنده، پیتزاهای خوشمزه و غذاهای مختلف را تهیه کنید. برای مثال، می‌توانید نان‌هایی با چربی کمتربا استفاده از آرد گندم کامل یا آرد جو و بدون استفاده از روغن پالم و روغن سویا درست کنید. این نوع نان‌ها حاوی فیبر بیشتری هستند و باعث ایجاد اشباع در بدن می‌شوند، که به کنترل وزن و رژیم غذایی سالم کمک می‌کند.\nتنور ساج دار و هنر آشپزی: ادغام سنت و خلاقیت\nتنور ساج دار و سلامتی!\n\nتنور ساج دار، با ارائه یک ارتباط فرهنگی بین سنت و خلاقیت در هنر آشپزی، مزایای بسیاری را برای سلامتی و طعم بخشیدن به غذاها به ارمغان می‌آورد. به واسطه استفاده از تکنیک‌های پخت سنتی و تلفیق آن با خلاقیت هنری، تنور ساج دار به شما امکان می‌دهد غذاهایی با طعم و مزه بی‌نظیر و سالم را تهیه کنید.\n مزایای  استفاده از تنور ساج دار\n\nاستفاده از تنور ساج دار در آشپزی، مزایای فراوانی  را با خود به همراه دارد. یکی از این مزایا، حفظ مواد مغذی در غذاها است. زمانی که با تنور ساج دار غذاها را پخت می‌کنید، حرارت یکنواخت و مداوم از طریق دیواره‌های تنور به غذا منتقل می‌شود. این روش پخت کمک می‌کند تا ویتامین‌ها و مواد مغذی حساس در غذاها حفظ شده و از دست رفتن آنها به حداقل برسد. از طرفی، تنور ساج دار به شما امکان می‌دهد که با استفاده از مواد طبیعی و بهره‌گیری از تکنیک‌های سنتی پخت، غذاهایی با طعم و مزه طبیعی تهیه کنید که برای سلامتی شما بسیار مفید هستند.\n\nتنور دو چدنی مبتکر\nتنور ساج دار: آشپزی خانگی با کیفیت رستوران\n\nتنور ساج دار، یک ابزار قدرتمند است که به شما امکان می‌دهد در آشپزخانه خود غذاهایی با کیفیت رستوران تهیه کنید. این تنور، با ترکیبی از فناوری مدرن و طراحی سنتی، تجربه‌ای منحصر به فرد از آشپزی خانگی را به شما هدیه می‌دهد. تنور گازی ساج دار با استفاده از تکنولوژی گازی، دارای عملکرد قدرتمندی است که امکان پخت و پز همه‌جانبه و بهینه غذا را فراهم می‌کند. با قدرت حرارت قابل تنظیم و توزیع یکنواخت، می‌توانید به راحتی غذاهایی با کیفیت و طعمی عالی را در خانه تهیه کنید. از نظر قیمت، تنور گازی ساج دار یک گزینه مقرون به صرفه است. با توجه به امکانات و کیفیتی که ارائه می‌دهد، قیمت تنور گازی ساج دار در مقایسه با تنورهای دیگر بازار مناسب و منطبق بر بودجه خانواده‌ها است.\nتنور ساج دار: ابزاری حرفه‌ای برای آشپزی خانگی\n\n تنور ساج دار با ویژگی‌های خاص و کیفیت ساخت برتر، به شما امکان می‌دهد تا غذاهایی با کیفیت و طعمی بی‌نظیر را در آشپزخانه خود تهیه کنید. با داشتن تنظیمات متنوع حرارت و زمان پخت، می‌توانید به راحتی تمامی نیازهای خود از پخت گوشت، مرغ و ماهی تا پخت نان‌های تازه و شیرینی‌های خوشمزه را پوشش دهید.  همچنین، تنور ساج دار با قابلیت‌های گریل و جوجه گردان، انتخابی ایده‌آل برای آشپزخانه شماست و به شما امکان می‌دهد تا در خانه خود از طعم باربیکیو و گریل شده لذت ببرید\nتنور ساج دار: رازی برای غذاهای خوشمزه در خانه\n\nتنور ساج دار خانگی  با طراحی منحصر به فرد و تکنولوژی پیشرفته‌ای که دارد، اجازه می‌دهد تا حرارت به طور یکنواخت و دقیق  به نان یا غذا منتقل شود، بنابراین با قابلیت تنظیم دما و زمان پخت  این تنور ساج دار گازی غذاهای شما همیشه به طور یکسان و بهینه پخته می‌شوند.  می‌توانید دستورالعمل‌های مختلف  پخت غذا را دنبال کرده و نتیجه‌ای حرفه‌ای با تنور ساج دار و طعم غذای لذیذ را در خانه خود تجربه کنید.', '0', '0', NULL, NULL, NULL, 'گل آرایی', 'گل آرایی', '2024-04-29 08:28:00', '2024-04-29 08:28:00', NULL),
(13, 'عینک پارسیا', NULL, 'dataccc', 1, NULL, '<p>عینک پارسیاعینک پارسیاعینک پارسیاعینک پارسیا</p>', NULL, 0, 0, NULL, '<p>عینک پارسیاعینک پارسیا</p>', '122000', '0', NULL, NULL, NULL, 'عینک پارسیاعینک پارسیا', 'عینک پارسیاعینک پارسیا', '2024-04-30 02:36:23', '2024-04-30 02:36:23', NULL),
(16, 'آرایش میز پذیرایی', NULL, 'آرایش', 0, NULL, '<p>آرایش میز پذیرایی</p>', NULL, 0, 0, NULL, '<p>آرایش میز پذیرایی</p>', '0', '0', NULL, NULL, NULL, '220000', 'آرایش میز پذیرایی', '2024-04-30 04:19:34', '2024-04-30 04:19:34', NULL),
(18, 'گل آرایی برجسته', NULL, 'dddddd', 1, NULL, '<p>vdf</p>', NULL, 0, 0, NULL, '<p>vddf</p>', '0', '2300000', NULL, NULL, NULL, 'dvd', 'dvfd', '2024-04-30 04:25:49', '2024-05-07 08:49:23', NULL),
(19, 'سیب زمینی تنوری', NULL, 'mosyz', 1, NULL, '<p>طرز تهیه سیب زمینی تنوری با سس لذیذ</p>', NULL, 0, 0, NULL, '<p>طرز تهیه سیب زمینی تنوری با سس لذیذ</p>', '8900000', '8900000', NULL, NULL, NULL, 'طرز تهیه سیب زمینی تنوری با سس لذیذ', 'طرز تهیه سیب زمینی تنوری با سس لذیذ', '2024-05-07 08:41:51', '2024-07-14 16:16:29', NULL),
(20, 'dss', NULL, 'cardss', 0, NULL, '<p>sss</p>', NULL, 0, 0, NULL, '<p>ss</p>', '0', '0', NULL, NULL, NULL, NULL, NULL, '2024-08-06 10:04:45', '2024-08-06 10:04:45', NULL),
(21, 'dddd', NULL, 'badknkdd', 1, NULL, NULL, NULL, 0, 0, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, '2024-08-06 10:05:18', '2024-08-06 11:41:53', NULL),
(22, 'samira', NULL, 'cardaaaaa', 1, NULL, NULL, NULL, 0, 0, NULL, NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, '2024-08-06 12:03:38', '2024-08-06 12:37:58', NULL),
(23, 'sssssssssss', NULL, 'badknkssssss', 1, NULL, '<p>ss</p>', NULL, 0, 0, NULL, '<p>ss</p>', '0', '0', NULL, NULL, NULL, NULL, 'sss', '2024-08-06 13:16:02', '2024-08-06 13:16:02', NULL),
(24, 'دوره ی زیبا', NULL, 'cardaaaaas', 1, NULL, NULL, NULL, 0, 0, NULL, NULL, '122000', '0', NULL, NULL, NULL, NULL, NULL, '2024-08-07 04:59:01', '2024-08-07 04:59:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_id`, `category_id`) VALUES
(3, 1),
(4, 2),
(9, 1),
(11, 3),
(12, 3),
(18, 3),
(10, 1),
(3, 1),
(3, 1),
(3, 2),
(18, 1),
(18, 1),
(18, 1),
(3, 1),
(18, 3),
(18, 3),
(18, 3),
(18, 3),
(18, 3),
(19, 1),
(19, 4),
(19, 4),
(19, 3),
(19, 3),
(20, 2),
(21, 2),
(21, 2),
(21, 2),
(22, 3),
(22, 2),
(22, 1),
(22, 2),
(22, 3),
(22, 3),
(22, 3),
(21, 1),
(9, 3),
(23, 1),
(19, 2),
(24, 1),
(24, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_specifications`
--

CREATE TABLE `product_specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_specification_type_id` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sort` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_specification_types`
--

CREATE TABLE `product_specification_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '1',
  `filter` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variables`
--

CREATE TABLE `product_variables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stocks` int(11) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_video`
--

CREATE TABLE `product_video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sort` int(11) NOT NULL DEFAULT '0',
  `listorder` int(11) DEFAULT '1',
  `type` tinyint(4) DEFAULT NULL,
  `title_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_video`
--

INSERT INTO `product_video` (`id`, `title`, `image`, `product_id`, `file`, `time`, `status`, `description`, `sort`, `listorder`, `type`, `title_seo`, `description_seo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'سیبیس', '00.jpg', 19, 'a.mp4', '55', 0, NULL, 0, NULL, NULL, 'sfsfs', 'fsf', '2024-07-13 05:36:24', '2024-07-13 05:36:24', NULL),
(2, 'fsfsfs', NULL, 19, 'a.mp4', '55', 0, NULL, 0, NULL, NULL, 'fss', 'fs', '2024-07-13 05:37:19', '2024-07-13 05:37:19', NULL),
(3, 'cdd', NULL, 19, NULL, NULL, 0, NULL, 0, NULL, NULL, 'dvdd', 'vddddd', '2024-07-13 05:40:27', '2024-07-13 05:40:27', NULL),
(4, 'vfv', NULL, 19, NULL, NULL, 0, NULL, 0, NULL, NULL, 'xvxx', 'xvxc', '2024-07-13 05:41:11', '2024-07-13 05:41:11', NULL),
(5, 'dddd', NULL, 19, 'a.mp4', NULL, 0, '<p>dddddd</p>', 0, NULL, NULL, 'dddd', 'dddd', '2024-07-13 05:42:27', '2024-07-13 05:42:27', NULL),
(6, 'cdcd', '0000.jpg', 19, 'a.mp4', '55', 0, '<p>cdcd</p>', 0, NULL, NULL, 'cdcd', 'cddc', '2024-07-13 05:54:34', '2024-07-13 05:54:34', NULL),
(7, 'vdfvd', '0000.jpg', 19, 'cdcd', '55', 0, '<p>cd</p>', 0, NULL, NULL, 'cd', 'cd', '2024-07-13 05:57:31', '2024-07-13 05:57:31', NULL),
(8, 'vds', '0000.jpg', 19, 'vv', '55', 0, '<p>vv</p>', 0, NULL, NULL, 'vvv', 'vv', '2024-07-13 06:03:05', '2024-07-13 06:03:05', NULL),
(9, 'sss', '3CC65DF4-9D3E-4C0F-A12D-0D9821296B2F.JPG', 19, NULL, '55', 0, '<p>ddd</p>', 0, NULL, NULL, 'dd', 'ddd', '2024-07-13 06:12:42', '2024-07-13 06:12:42', NULL),
(10, 'dd', '0000.jpg', 19, 'a.mp4', NULL, 0, NULL, 0, NULL, NULL, 'dd', 'dd', '2024-07-13 06:14:27', '2024-07-13 06:14:27', NULL),
(11, 'ddd', '0000.jpg', 19, NULL, NULL, 0, '<p>dd</p>', 0, NULL, NULL, 'dd', 'dd', '2024-07-13 06:15:21', '2024-07-13 23:00:50', '2024-07-13 23:00:50'),
(12, 'دوره ی جدید', '0000.jpg', 19, 'fh', '90', 0, '<p>fhf</p>', 0, NULL, NULL, 'hfh', 'hf', '2024-07-13 06:51:20', '2024-07-14 17:24:35', NULL),
(13, 'dfd', NULL, 19, 'a.mp4', '55', 0, NULL, 0, 1, NULL, 'bcc', 'cc', '2024-07-14 00:03:17', '2024-07-14 00:03:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `redirects`
--

CREATE TABLE `redirects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `old_address` text COLLATE utf8mb4_unicode_ci,
  `new_address` text COLLATE utf8mb4_unicode_ci,
  `type` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `redirects`
--

INSERT INTO `redirects` (`id`, `old_address`, `new_address`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '/pro/3', 'tag/furnace-oven', NULL, '2024-07-28 10:56:34', '2024-07-28 11:10:56', '2024-07-28 11:10:56'),
(2, 'efe', 'egeg', 1, '2024-07-28 11:01:51', '2024-07-28 11:10:51', '2024-07-28 11:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permission`) VALUES
(1, 'مدیر سایت', 'a:40:{s:4:\"user\";a:13:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:5:\"group\";s:1:\"1\";s:8:\"groupAdd\";s:1:\"1\";s:9:\"groupEdit\";s:1:\"1\";s:11:\"groupDelete\";s:1:\"1\";s:7:\"address\";s:1:\"1\";s:11:\"addressEdit\";s:1:\"1\";s:13:\"addressDelete\";s:1:\"1\";s:14:\"changePassword\";s:1:\"1\";}s:5:\"users\";a:3:{s:5:\"index\";s:1:\"1\";s:6:\"export\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";}s:8:\"products\";a:16:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:5:\"image\";s:1:\"1\";s:8:\"imageAdd\";s:1:\"1\";s:9:\"imageEdit\";s:1:\"1\";s:11:\"imageDelete\";s:1:\"1\";s:15:\"thumbnailDelete\";s:1:\"1\";s:5:\"video\";s:1:\"1\";s:8:\"videoAdd\";s:1:\"1\";s:12:\"videoAddPost\";s:1:\"1\";s:9:\"videoEdit\";s:1:\"1\";s:11:\"videoDelete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";s:6:\"export\";s:1:\"1\";}s:11:\"allproducts\";a:3:{s:5:\"index\";s:1:\"1\";s:5:\"price\";s:1:\"1\";s:9:\"inventory\";s:1:\"1\";}s:6:\"filter\";a:8:{s:5:\"index\";s:1:\"1\";s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:7:\"addMain\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"catAdd\";s:1:\"1\";s:9:\"catDelete\";s:1:\"1\";}s:14:\"product-filter\";a:3:{s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:26:\"product-specification-type\";a:8:{s:5:\"index\";s:1:\"1\";s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:7:\"addMain\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"catAdd\";s:1:\"1\";s:9:\"catDelete\";s:1:\"1\";}s:27:\"product-specification-price\";a:12:{s:5:\"index\";s:1:\"1\";s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:11:\"deleteImage\";s:1:\"1\";s:14:\"thumbnailImage\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";s:7:\"postAdd\";s:1:\"1\";s:12:\"postAddGroup\";s:1:\"1\";s:7:\"imgsort\";s:1:\"1\";s:7:\"imgsAdd\";s:1:\"1\";}s:9:\"quiz-tags\";a:3:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"quizes\";a:8:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:7:\"product\";s:1:\"1\";s:9:\"questions\";s:1:\"1\";s:13:\"questionsEdit\";s:1:\"1\";s:15:\"questionsDelete\";s:1:\"1\";}s:21:\"product-specification\";a:5:{s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:5:\"order\";s:1:\"1\";s:8:\"addOrder\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:8:\"articles\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:11:\"article-cat\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:4:\"blog\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:8:\"blog-cat\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:9:\"inventory\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:17:\"inventory-receipt\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"export\";s:1:\"1\";}s:6:\"status\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:11:\"departments\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:9:\"discounts\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"brands\";a:6:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:11:\"deleteImage\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:8:\"category\";a:6:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";s:6:\"search\";s:1:\"1\";}s:5:\"order\";a:7:{s:5:\"index\";s:1:\"1\";s:3:\"det\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"export\";s:1:\"1\";s:6:\"factor\";s:1:\"1\";s:7:\"address\";s:1:\"1\";}s:12:\"notification\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"det\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"slider\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:13:\"mobile-slider\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:7:\"setting\";a:2:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";}s:8:\"redirect\";a:3:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:8:\"question\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:9:\"questions\";a:2:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";}s:3:\"faq\";a:2:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";}s:10:\"properties\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:8:\"uploader\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"social\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:7:\"cropper\";a:1:{s:5:\"index\";s:1:\"1\";}s:7:\"comment\";a:3:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:7:\"tickets\";a:7:{s:5:\"index\";s:1:\"1\";s:6:\"detail\";s:1:\"1\";s:5:\"reply\";s:1:\"1\";s:6:\"create\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:12:\"ticketStatus\";s:1:\"1\";s:12:\"ticketReturn\";s:1:\"1\";}s:7:\"contact\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:4:\"tags\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:10:\"fullAccess\";i:0;}'),
(5, 'طزطزز', 'a:3:{s:4:\"user\";a:1:{s:14:\"changePassword\";s:1:\"1\";}s:8:\"products\";a:3:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";}s:10:\"fullAccess\";i:0;}'),
(6, 'یسس', 'a:3:{s:4:\"user\";a:1:{s:14:\"changePassword\";s:1:\"1\";}s:8:\"products\";a:4:{s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:5:\"image\";s:1:\"1\";s:8:\"imageAdd\";s:1:\"1\";}s:10:\"fullAccess\";i:0;}'),
(7, 'sss', 'a:40:{s:4:\"user\";a:13:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:5:\"group\";s:1:\"1\";s:8:\"groupAdd\";s:1:\"1\";s:9:\"groupEdit\";s:1:\"1\";s:11:\"groupDelete\";s:1:\"1\";s:7:\"address\";s:1:\"1\";s:11:\"addressEdit\";s:1:\"1\";s:13:\"addressDelete\";s:1:\"1\";s:14:\"changePassword\";s:1:\"1\";}s:5:\"users\";a:3:{s:5:\"index\";s:1:\"1\";s:6:\"export\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";}s:8:\"products\";a:11:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:5:\"image\";s:1:\"1\";s:8:\"imageAdd\";s:1:\"1\";s:9:\"imageEdit\";s:1:\"1\";s:11:\"imageDelete\";s:1:\"1\";s:15:\"thumbnailDelete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";s:6:\"export\";s:1:\"1\";}s:11:\"allproducts\";a:3:{s:5:\"index\";s:1:\"1\";s:5:\"price\";s:1:\"1\";s:9:\"inventory\";s:1:\"1\";}s:6:\"filter\";a:8:{s:5:\"index\";s:1:\"1\";s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:7:\"addMain\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"catAdd\";s:1:\"1\";s:9:\"catDelete\";s:1:\"1\";}s:14:\"product-filter\";a:3:{s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:26:\"product-specification-type\";a:8:{s:5:\"index\";s:1:\"1\";s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:7:\"addMain\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"catAdd\";s:1:\"1\";s:9:\"catDelete\";s:1:\"1\";}s:27:\"product-specification-price\";a:12:{s:5:\"index\";s:1:\"1\";s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:11:\"deleteImage\";s:1:\"1\";s:14:\"thumbnailImage\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";s:7:\"postAdd\";s:1:\"1\";s:12:\"postAddGroup\";s:1:\"1\";s:7:\"imgsort\";s:1:\"1\";s:7:\"imgsAdd\";s:1:\"1\";}s:9:\"quiz-tags\";a:3:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"quizes\";a:8:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:7:\"product\";s:1:\"1\";s:9:\"questions\";s:1:\"1\";s:13:\"questionsEdit\";s:1:\"1\";s:15:\"questionsDelete\";s:1:\"1\";}s:21:\"product-specification\";a:5:{s:4:\"list\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:5:\"order\";s:1:\"1\";s:8:\"addOrder\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:8:\"articles\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:11:\"article-cat\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:4:\"blog\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:8:\"blog-cat\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:9:\"inventory\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:17:\"inventory-receipt\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"export\";s:1:\"1\";}s:6:\"status\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:11:\"departments\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:9:\"discounts\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"brands\";a:6:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:11:\"deleteImage\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:8:\"category\";a:6:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";s:6:\"search\";s:1:\"1\";}s:5:\"order\";a:7:{s:5:\"index\";s:1:\"1\";s:3:\"det\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:6:\"export\";s:1:\"1\";s:6:\"factor\";s:1:\"1\";s:7:\"address\";s:1:\"1\";}s:12:\"notification\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"det\";s:1:\"1\";s:6:\"status\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"slider\";a:5:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";s:4:\"sort\";s:1:\"1\";}s:13:\"mobile-slider\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:7:\"setting\";a:2:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";}s:8:\"redirect\";a:3:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:8:\"question\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:9:\"questions\";a:2:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";}s:3:\"faq\";a:2:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";}s:10:\"properties\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:8:\"uploader\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:6:\"social\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:7:\"cropper\";a:1:{s:5:\"index\";s:1:\"1\";}s:7:\"comment\";a:3:{s:5:\"index\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:7:\"tickets\";a:7:{s:5:\"index\";s:1:\"1\";s:6:\"detail\";s:1:\"1\";s:5:\"reply\";s:1:\"1\";s:6:\"create\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:12:\"ticketStatus\";s:1:\"1\";s:12:\"ticketReturn\";s:1:\"1\";}s:7:\"contact\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:4:\"tags\";a:4:{s:5:\"index\";s:1:\"1\";s:3:\"add\";s:1:\"1\";s:4:\"edit\";s:1:\"1\";s:6:\"delete\";s:1:\"1\";}s:10:\"fullAccess\";i:0;}');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(3, 1),
(6, 1),
(26, 4),
(27, 4),
(28, 4),
(29, 4),
(30, 4),
(33, 4),
(34, 4),
(34, 4),
(40, 4),
(43, 4),
(44, 4),
(45, 4),
(54, 1),
(1, 1),
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `about2` text COLLATE utf8mb4_unicode_ci,
  `aboutshort` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci,
  `mobile` text COLLATE utf8mb4_unicode_ci,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `description3` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `code` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `image`, `logo`, `favicon`, `about`, `about2`, `aboutshort`, `contact`, `mobile`, `banner`, `banner1`, `banner2`, `phone`, `email`, `description`, `description2`, `description3`, `keywords`, `title_seo`, `link`, `description_seo`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'سایت اموزش آنلاین', 'logo.png', '530logosss.svg', '4470000.jpg', '<p>This is a detailed about section.</p>', 'امروز الهام بگیرید و چیز جدیدی کشف کنید. مهارت های خود را با معتبرترین دوره های آنلاین و گواهینامه های بازاریابی، فناوری اطلاعات، برنامه نویسی و علم داده افزایش دهید.', 'تحصیلات، استعدادها و فرصت های شغلی، همه در اینجاا', 'sample@example.com', NULL, NULL, 'banner1.jpg', 'banner2.jpg', '123-456-7890', 'info@example.com', 'This is the website description.', 'This is the second description.', 'This is the third description.', 'website, example, laravel', 'Example Website', 'https://www.example.com', 'This is the SEO description.', '<script>console.log(\"Hello, World!\");</script>', '2024-07-27 07:16:18', '2024-07-29 18:11:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_city`
--

CREATE TABLE `shipment_city` (
  `shipment_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipment_methods`
--

CREATE TABLE `shipment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `without_price` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sort` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'instagram', 'bi bi-instagram h3 m-0', 'bi bi-instagram h3 m-0', '2024-07-27 12:28:51', '2024-07-27 12:28:51', NULL),
(2, 'whatsapp', 'bi bi-whatsapp h3 m-0', 'https://www.whatsapp.com', '2024-07-27 12:29:25', '2024-07-27 12:29:25', NULL),
(3, 'telegram', 'bi bi-telegram h3 m-0', 'https://www.telegram.com/', '2024-07-27 12:29:57', '2024-07-27 12:29:57', NULL),
(4, 'facebook-f', 'bi bi-twitter h3 m-0', 'twitter', '2024-07-27 12:30:17', '2024-07-27 12:45:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taggable_id` bigint(20) DEFAULT NULL,
  `tag_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_seo` text COLLATE utf8mb4_unicode_ci,
  `index` int(11) NOT NULL DEFAULT '0',
  `h1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `email_confirm` int(11) NOT NULL DEFAULT '0',
  `mobile_confirm` int(11) NOT NULL DEFAULT '0',
  `password` text COLLATE utf8mb4_unicode_ci,
  `temp_password` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `mobile`, `confirm_code`, `email`, `admin`, `email_confirm`, `mobile_confirm`, `password`, `temp_password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'مدیرزبیfffff', NULL, '', NULL, 'info@site.com', 1, 0, 0, '$2y$10$21TRWNkSS6GGpz8tGlXfQuVX3v5uFXRkuybXL3YB5ieSFhxgnQ.Y.', NULL, NULL, '2024-03-03 09:13:04', '2024-05-08 03:25:13', NULL),
(3, 'مدیر', NULL, '', NULL, 'infoo@site.com', 1, 0, 0, '$2y$10$5Jop97nn1YtHw8QQdxkO/uW79nb.sJcVAfVatHI4YR.9GC4osPWq2', NULL, NULL, '2024-03-03 09:23:15', '2024-03-03 09:23:15', NULL),
(6, 'مدیر', NULL, '', NULL, 'infffo@site.com', 1, 0, 0, '$2y$10$1/mWVs1fYElvke4/oAw2HubKYsdUJ7AQ5LwLChMsCctdwy4JN4zuS', NULL, NULL, '2024-03-03 09:25:01', '2024-03-03 09:25:01', NULL),
(9, 'سیسس', NULL, '09122222222', '86256', 'infddddoo@site.com', 0, 0, 1, '$2y$10$RNE2sw03eyFPU94Hcl/VW.FzK9aE9.vWn02srr5yQ00xAs3qY8wO.', NULL, NULL, '2024-04-20 10:17:34', '2024-04-28 04:41:06', NULL),
(10, 'مدیراصلی منم', NULL, '0921333333', '95866', 'infooooooooooooooo@site.com', 0, 0, 0, '$2y$10$GtlE7o6zLj/XShCaZIKTn.f1RyTIkcCYl9MVidE/iGxCnwo0DN54S', NULL, NULL, '2024-04-20 10:22:10', '2024-04-20 10:22:10', NULL),
(44, 'سمیرازززسسزززز', NULL, '09122038706', '987189', 'ssssssrrrrrsssss@site.com', 0, 0, 1, '$2y$10$hYfIs92QtOBVyGP3ZVYyZeah8w23ClVS12vVevlwmYmxaGhcPOmo2', NULL, NULL, '2024-04-22 07:24:06', '2024-04-28 08:32:25', NULL),
(45, 'سمیرا', NULL, '09122322212', '437174', 'sdsssssaddd@site.com', 0, 0, 1, '$2y$10$Nf.yT/H0PzCdEQag5qdZ1OLWDUPV..mdMw.9CGll0CakbnVOGlAry', NULL, NULL, '2024-04-22 07:44:07', '2024-04-22 07:44:18', NULL),
(47, 'یییزبی', NULL, '0912222222', '858999', 'sssaassss@site.com', 0, 0, 1, '$2y$10$gHm5xGGpciqNkBe//KHrduHPiVn7Eq3drbx92SxWewax8aOHvZOR2', NULL, NULL, '2024-04-23 06:07:43', '2024-04-23 06:07:57', NULL),
(48, 'سمانه', NULL, '09192899663', '822560', 'samane@site.com', 0, 0, 1, '$2y$10$heoGSbSGJQ07CmlfTRYzrewZQMb47M6HCq40QrvD7.h4XjlglOywC', '$2y$10$upItz51KlkJAZMMCsiNN6Oim41aO0qdIHesvDonIVjjFXHIABjyOu', NULL, '2024-04-28 07:18:55', '2024-04-28 08:31:02', NULL),
(49, 'ادمین', NULL, '09122038709', '684192', 'sdasssddd@site.com', 0, 0, 1, '$2y$10$EuKCK1GZMAK1t5qSVcuHt.UzbpZaShMek815yldFQV0XsWAXmXPby', NULL, NULL, '2024-04-28 08:35:35', '2024-04-28 08:37:24', NULL),
(50, 'سمیرای', NULL, '09128038701', '972522', 'samddddane@site.com', 0, 0, 1, '$2y$10$Pk2srWBGGYrSPYyo60QYXOHIHyKKRQDkxKGg9j22HSqxzJzFANPSG', NULL, NULL, '2024-04-28 08:41:26', '2024-04-28 08:41:35', NULL),
(51, 'اتنت', NULL, '09112038701', '600181', 'sdaddsssssd@site.com', 0, 0, 1, '$2y$10$AKN7YcC2fwE48esh4pOhR.UuWpSU703fycpsmPogdHchFPE14ilUC', NULL, NULL, '2024-04-28 08:50:32', '2024-04-28 08:50:39', NULL),
(52, 'سمیرا', NULL, '09222038701', '910562', 'sdadsssdd@site.com', 0, 0, 1, '$2y$10$fgjw8m1TrTV0Kc69h97oXuoPrV/CzS6.FeULQbqCCyfrXKRibiQWi', NULL, NULL, '2024-04-28 08:54:27', '2024-04-28 09:56:04', NULL),
(53, 'یبییی', NULL, 'dfgvd', '301049', 'samaffne@site.com', 0, 0, 0, '$2y$10$0aA/qJav4a3LRHiKvZsoYO5GpOSfLu9qBbOXE8LY0dmIpihYy88wq', NULL, NULL, '2024-04-28 09:59:20', '2024-05-11 08:05:53', NULL),
(54, 'fdfef', 'feff', '09122038702', NULL, 'sdadsdd@site.com', 1, 0, 0, '$2y$10$SOK9P7h3RHFZjeeVLFT1DOW1FY1x6ndkLAhR/MhHmjnVHS4YQbpVS', NULL, NULL, '2024-05-08 03:25:05', '2024-05-08 03:25:05', NULL),
(55, 'سیسس', NULL, '09129038701', '631474', 'sxesswwwwwssss@site.com', 0, 0, 1, '$2y$10$0HvHlGVVAv85iGsTo3uZd.HlYLFckhEggu/1Mz27zWoWBVvPb0hQq', NULL, NULL, '2024-05-08 07:19:35', '2024-05-08 07:21:06', NULL),
(56, 'xvx', NULL, '09122038701', NULL, 'ssssdddsss@site.com', 0, 0, 1, '$2y$10$NgeSNHS210MY75j9LbuSqe.xctGhG1LKdYt65o81mUj4fmGpRjDgW', NULL, NULL, '2024-05-08 09:30:42', '2024-05-08 09:30:57', NULL),
(57, 'xcvx', NULL, '09122038880', '757477', 'info@kabinmobtaker.comd', 0, 0, 1, '$2y$10$MT.8L3VpwMYbEaSYU9oaguxqWvp3SjskENb010zoljpUlM7UHyNqi', NULL, NULL, '2024-08-07 00:49:01', '2024-08-07 00:49:27', NULL),
(59, 'instagram', NULL, '09192829663', '463202', 'a@sitess.com', 0, 0, 1, '$2y$10$5H8fghlM1EuJnIzToJlKVOG7dwYVSc8aDmu7ghw9RSPJExx8C1lA.', NULL, NULL, '2024-08-07 03:59:27', '2024-08-07 03:59:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket_items`
--
ALTER TABLE `basket_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_receipt`
--
ALTER TABLE `inventory_receipt`
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
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_specification_types`
--
ALTER TABLE `product_specification_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variables`
--
ALTER TABLE `product_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_video`
--
ALTER TABLE `product_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redirects`
--
ALTER TABLE `redirects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_methods`
--
ALTER TABLE `shipment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `basket_items`
--
ALTER TABLE `basket_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_receipt`
--
ALTER TABLE `inventory_receipt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_specifications`
--
ALTER TABLE `product_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_specification_types`
--
ALTER TABLE `product_specification_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_variables`
--
ALTER TABLE `product_variables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_video`
--
ALTER TABLE `product_video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `redirects`
--
ALTER TABLE `redirects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipment_methods`
--
ALTER TABLE `shipment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;
