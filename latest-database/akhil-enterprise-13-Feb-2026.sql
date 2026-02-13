-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2026 at 10:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akhil-enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intro_content` longtext DEFAULT NULL,
  `intro_image` text DEFAULT NULL,
  `heading` text DEFAULT NULL,
  `pre_heading` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `button_name` text DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `infra_heading` longtext DEFAULT NULL,
  `infra_pre_heading` text DEFAULT NULL,
  `page_title` longtext DEFAULT NULL,
  `seo_title` longtext DEFAULT NULL,
  `seo_description` longtext DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `intro_content`, `intro_image`, `heading`, `pre_heading`, `description`, `image`, `button_name`, `button_link`, `infra_heading`, `infra_pre_heading`, `page_title`, `seo_title`, `seo_description`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, '<p>Akhil Enterprise is leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys and Copper Alloys. Our products suits to all industrial sectors like Electrical Distributions Equipment, Automobiles, Tele Communications, Utility Meters, Computers and Peripherals, Engineering Plastic Molding, Fiber Optic Equipment, Electronic Circuit Hardware, Sanitary Fittings etc.<br />\r\n<br />\r\nWe also manufacture as per the buyer&#39;s own specifications and requirements. Akhil Enterprise consider customer&rsquo;s satisfaction as our gross profit. Our products are made under the most stringent quality control at every stage of production from finest raw material. Strict quality supervision ensures standard quality to meet international standards, that&rsquo;s why our products are exported to several countries.<br />\r\n<br />\r\nWith state of the art machineries, skilled labor, sufficient measuring instruments and Well experienced management, we always serve better quality at best prices. We are committed in our efforts to give you total satisfaction in terms of product and service. As a company, we focus on providing quality products, service and value to our customers. We emphasise on increasing our facilities, testing procedures &amp; other resources based on our Customer requirements which add value to our customer friendly policy.</p>', 'Ct4s60gVwqI8k60-1727527550.png', 'Why Choose Us ?', 'About Us', '<p><small>Akhil Enterprise is a leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys, and Copper Alloys. Our products suit all industrial sectors like Electrical Distributions Equipment, Automobiles, Telecommunications, Utility Meters, Computers and Peripherals, Engineering Plastic Molding, Fiber Optic Equipment, Electronic Circuit Hardware, Sanitary Fittings, etc. </small></p>\r\n\r\n<p><small>We also manufacture as per the buyer&#39;s own specifications and requirements. Akhil Enterprise considers customer satisfaction as our gross profit. Our products are made under the most stringent quality control at every stage of production from the finest raw material. Strict quality supervision ensures standard quality to meet international standards, which is why our products are exported to several countries. </small></p>', 'XRN2C4QshPQANNC-1727157945.jpg', 'Learn More', '#', 'Infrastructure', 'About Our', 'About Us', 'Akhil Enterprise', 'Akhil Enterprise is leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys and Copper Alloys.', 'BsVi9tFJLR2bofE-1727518333.png', '2024-09-24 00:35:45', '2024-09-28 07:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT '1=Active, 2=In Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `heading`, `short_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ISO Certificate', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'OduSHoQrQIDD604-1727070488.jpg', '1', '2024-09-23 00:18:08', '2024-09-23 00:18:08'),
(2, 'Certificate of Compliances', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'xHGdz8YkbgpaaiT-1727070570.jpg', '1', '2024-09-23 00:19:30', '2024-09-23 00:19:30'),
(3, 'Certificate of Compliances', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'wRcgKKWaYfU5m4M-1727070627.jpg', '1', '2024-09-23 00:20:27', '2024-09-23 00:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `common_page`
--

CREATE TABLE `common_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` text DEFAULT NULL,
  `page_slug` text DEFAULT NULL,
  `page_type` text DEFAULT NULL,
  `page_banner_image` text DEFAULT NULL,
  `seo_title` longtext DEFAULT NULL,
  `seo_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `common_page`
--

INSERT INTO `common_page` (`id`, `page_name`, `page_slug`, `page_type`, `page_banner_image`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 'Products', 'products', 'products', 'cP8JQGw6unhJ9Ac-1727874244.png', 'Products - Akhil Enterprise', 'Akhil Enterprise has it\'s own model set-up of research & development to formulate & manufacture on commercial basis, wide range of formulations of precision and quality based Brass Products.', '2024-10-02 11:50:50', '2024-10-02 07:57:49'),
(2, 'Contact Us', 'contact-us', 'contact-us', 'DZMbDaRji13DB6n-1727874826.png', 'Contact Us - Akhil Enterprise', 'Akhil Enterprise has it\'s own model set-up of research & development to formulate & manufacture on commercial basis, wide range of formulations of precision and quality based Brass Products.', '2024-10-02 11:50:50', '2024-10-02 08:15:50'),
(3, 'Request a Catalog', 'request-a-catalog', 'catalog', 'WCOL58CgcSOgehd-1727874852.png', 'Request Catalog - Akhil Enterprise', 'Akhil Enterprise has it\'s own model set-up of research & development to formulate & manufacture on commercial basis, wide range of formulations of precision and quality based Brass Products.', '2024-10-02 11:50:50', '2024-10-02 08:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `core_values`
--

CREATE TABLE `core_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT '1=Active, 2=In Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_values`
--

INSERT INTO `core_values` (`id`, `heading`, `short_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', 'At Akhil Enterprise, we integrate customer specification with our expertise of manufacturing to deliver product with the desired result in a cost effective manner.', 'xwISMSXSySUStpq-1727068028.png', '1', '2024-09-22 23:37:08', '2024-09-22 23:37:08'),
(2, 'Our Vision', 'To be a company that best understands and satisfies the need of our customers, to be a valuable company for all our employees and to be a reliable support to our business associates.', 'Xmq5cEXzEJIEjLt-1727068187.png', '1', '2024-09-22 23:39:47', '2024-09-22 23:39:47'),
(3, 'Our Values', 'To continuously improve our products and service, we believe that a perfect understanding of the clients need is of crucial importance', 'dKCFw6PERVLXi9s-1727068217.png', '1', '2024-09-22 23:40:17', '2024-09-22 23:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_data`
--

CREATE TABLE `footer_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_description` longtext DEFAULT NULL,
  `footer_logo` text DEFAULT NULL,
  `footer_menu` longtext DEFAULT NULL,
  `footer_product` longtext DEFAULT NULL,
  `copyright_text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_data`
--

INSERT INTO `footer_data` (`id`, `footer_description`, `footer_logo`, `footer_menu`, `footer_product`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, 'Akhil Enterprise has it\'s own model set-up of research & development to formulate & manufacture on commercial basis, wide range of formulations of precision and quality based Brass Products.', '2UYYFRsHKbivfPN-1727342512.png', '[{\"key\":\"Home\",\"value\":\"\\/\"},{\"key\":\"About\",\"value\":\"about-us\"},{\"key\":\"Quality\",\"value\":\"quality\"},{\"key\":\"Products\",\"value\":\"products\"},{\"key\":\"Contact Us\",\"value\":\"contact-us\"}]', '{\"0\":{\"key\":\"Brass Aluminium Neutral Links\",\"value\":\"\\/product\\/brass-aluminium-neutral-links\"},\"1\":{\"key\":\"Brass Electrical Components\",\"value\":\"\\/product\\/brass-electrical-components\"},\"3\":{\"key\":\"Brass Cable Glands\",\"value\":\"\\/product\\/brass-cable-glands\"},\"4\":{\"key\":\"Copper & S.S Components\",\"value\":\"\\/product\\/copper-ss-components\"},\"5\":{\"key\":\"Brass Precision Components\",\"value\":\"\\/product\\/brass-precision-components\"},\"6\":{\"key\":\"Brass Fittings Parts\",\"value\":\"\\/product\\/brass-fittings-parts\"},\"7\":{\"key\":\"Brass Earthing Accessories\",\"value\":\"\\/product\\/brass-earthing-accessories\"},\"8\":{\"key\":\"Brass Fasteners\",\"value\":\"\\/product\\/brass-fasteners\"},\"9\":{\"key\":\"Pool Cover Hardware\",\"value\":\"#\"}}', 'Akhil Enterprise. All right reserved.', '2024-09-14 12:04:05', '2024-10-02 08:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone_number` text DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `facebook_link` longtext DEFAULT NULL,
  `instagram_link` longtext DEFAULT NULL,
  `linkedin_link` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `description`, `email`, `phone_number`, `address`, `facebook_link`, `instagram_link`, `linkedin_link`, `created_at`, `updated_at`) VALUES
(1, 'At Akhil Enterprise, we value your inquiries, feedback, and business opportunities. Whether you have a question about our products, need assistance with our services, or simply want to explore how we can work together, we’re here to help.', 'info@akhilenterprise.com', '+91 94279 77599', 'Plot No. 366, G.I.D.C., Phase - 2 Dared, <br />\r\nJamnagar - 361 005. Gujarat - INDIA', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://in.linkedin.com/', '2024-09-14 13:00:28', '2024-09-26 05:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `header_data`
--

CREATE TABLE `header_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `top_header_email` text DEFAULT NULL,
  `top_header_mobile_no` text DEFAULT NULL,
  `site_name` text DEFAULT NULL,
  `header_logo` text DEFAULT NULL,
  `header_menu_link` longtext DEFAULT NULL,
  `header_button_name` text DEFAULT NULL,
  `header_button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_data`
--

INSERT INTO `header_data` (`id`, `top_header_email`, `top_header_mobile_no`, `site_name`, `header_logo`, `header_menu_link`, `header_button_name`, `header_button_link`, `created_at`, `updated_at`) VALUES
(1, 'info@akhilenterprise.com', '+91 94279 77599', 'Akhil Enterprise', 'DUjKTWzGjXdMTax-1727336140.png', '{\"0\":{\"key\":\"Home\",\"value\":\"\\/\"},\"1\":{\"key\":\"About\",\"value\":\"about-us\"},\"3\":{\"key\":\"Quality\",\"value\":\"quality\"},\"4\":{\"key\":\"Products\",\"value\":\"products\"},\"5\":{\"key\":\"Contact Us\",\"value\":\"contact-us\"}}', 'Request a Catalog', 'request-catalog', '2024-09-14 10:06:47', '2024-10-02 08:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext DEFAULT NULL,
  `pre_heading` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `button_name` text DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `product_heading` longtext DEFAULT NULL,
  `product_pre_heading` text DEFAULT NULL,
  `infra_heading` longtext DEFAULT NULL,
  `infra_pre_heading` text DEFAULT NULL,
  `infra_image` text DEFAULT NULL,
  `page_title` longtext DEFAULT NULL,
  `seo_title` longtext DEFAULT NULL,
  `seo_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `heading`, `pre_heading`, `description`, `image`, `button_name`, `button_link`, `product_heading`, `product_pre_heading`, `infra_heading`, `infra_pre_heading`, `infra_image`, `page_title`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 'Why Choose Us ?', 'About Us', '<p>\r\n    <small class=\"text\">\r\n        Akhil Enterprise is a leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys, and Copper Alloys. Our products suit all industrial sectors like Electrical Distributions\r\n        Equipment, Automobiles, Telecommunications, Utility Meters, Computers and Peripherals, Engineering Plastic Molding, Fiber Optic Equipment, Electronic Circuit Hardware, Sanitary Fittings, etc.\r\n    </small>\r\n</p>\r\n<p>\r\n    <small class=\"text\">\r\n        We also manufacture as per the buyer\'s own specifications and requirements. Akhil Enterprise considers customer satisfaction as our gross profit. Our products are made under the most stringent quality control at every stage of\r\n        production from the finest raw material. Strict quality supervision ensures standard quality to meet international standards, which is why our products are exported to several countries.\r\n    </small>\r\n</p>', '2xYPrucGv6cKCNJ-1727532758.png', 'Learn More', '#', 'Our Products', 'Products', 'Infrastructure', 'Why Choose Us', 'rU2BoxUnFXDo0m5-1727531778.png', 'Home Page', 'Akhil Enterprise', 'Akhil Enterprise is leading manufacturing company in precision turned and machined components of Brass, Aluminum Alloys, Iron Alloys and Copper Alloys. Our products suits to all industrial sectors like Electrical Distributions Equipment, Automobiles, Tele Communications, Utility Meters, Computers and Peripherals, Engineering Plastic Molding, Fiber Optic Equipment, Electronic Circuit Hardware, Sanitary Fittings etc.', '2024-09-23 23:43:38', '2024-09-28 08:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` text DEFAULT NULL,
  `banner_heading` longtext DEFAULT NULL,
  `banner_description` longtext DEFAULT NULL,
  `image_status` varchar(255) DEFAULT NULL COMMENT '1=Active, 2=In Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `banner_image`, `banner_heading`, `banner_description`, `image_status`, `created_at`, `updated_at`) VALUES
(1, 'TGk5Q6TsqbI2nNV-1727344110.jpg', 'Test Banner', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '1', '2024-09-20 06:18:16', '2024-09-26 04:18:30'),
(3, '1cMVlPq3uNjMKTx-1727344121.jpg', 'Test Banner Second', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1', '2024-09-20 07:17:43', '2024-09-26 04:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT '1=Active, 2=In Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`id`, `heading`, `short_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Machines', 'The company has conventional and semi conventional machinery to produce good quality of Products.', 'MLOKR1yCbEf1nNK-1726838768.jpg', '1', '2024-09-20 07:56:08', '2024-09-20 07:56:08'),
(3, 'Maintenance', 'We have documented procedure to conduct the preventive maintenance of each and every machinery and instruments. With the help of well developed infrastructure unit, we provide quality Brass Products within stipulated time frame.', 'oElUa35aqiLF6qn-1726839938.jpg', '1', '2024-09-20 08:15:38', '2024-09-20 08:15:38'),
(4, 'Training', 'It is the all time practice of the company to train the entire staff at regular interval to keep updated the strength of the company to produce the excellent quality of the products meeting the highest level of the customer satisfaction all the time.', 'yMTsysrCACI8j4F-1726839973.jpg', '1', '2024-09-20 08:16:13', '2024-09-20 08:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2024_09_14_072530_create_request_catalog_table', 2),
(7, '2024_09_14_093916_create_header_data_table', 3),
(8, '2024_09_14_115255_create_footer_data_table', 4),
(9, '2024_09_14_125436_create_general_setting_table', 5),
(10, '2024_09_16_045007_create_product_category_table', 6),
(13, '2024_09_16_065312_create_product_table', 7),
(14, '2024_09_16_065325_create_product_gallery_table', 7),
(16, '2024_09_20_105939_create_home_slider_table', 8),
(17, '2024_09_20_130509_create_infrastructure_table', 9),
(18, '2024_09_20_134940_create_core_values_table', 10),
(19, '2024_09_23_052421_create_certificates_table', 11),
(21, '2024_09_23_060955_create_quality_table', 12),
(23, '2024_09_23_090111_create_home_page_table', 13),
(24, '2024_09_24_051815_create_about_us_table', 14),
(25, '2024_09_24_132200_add_slug_to_product_table', 15),
(26, '2024_09_30_074544_add_slug_to_product_category_table', 16),
(27, '2024_10_02_113133_create_common_page_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pratikpitroda06@gmail.com', 'HFCkVpWXDPQ4191BuUcBJMQ55G4bwbjwAOKdoMchRF2HaGoZkXmbZWbkkNJvYyI9', '2024-09-14 07:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_title` longtext DEFAULT NULL,
  `product_slug` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `main_description` longtext DEFAULT NULL,
  `product_image` text DEFAULT NULL,
  `product_banner_image` text DEFAULT NULL,
  `product_status` varchar(255) DEFAULT NULL COMMENT '1 > Active, 2 > In Active',
  `seo_title` longtext DEFAULT NULL,
  `seo_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `product_title`, `product_slug`, `short_description`, `main_description`, `product_image`, `product_banner_image`, `product_status`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(2, 2, 'Brass Fasteners', 'brass-fasteners', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', 'e3mH1NCBta9hmMv-1727159283.png', 'ANtippU14zgaqmD-1727159283.jpg', '1', 'Brass Fasteners', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 00:58:03', '2024-10-01 07:00:49'),
(3, 2, 'Brass Earthing Accessories', 'brass-earthing-accessories', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', '2IFpjoIOnIw2KvQ-1727159443.png', 'ok3K5PLj4prZckT-1727159443.jpg', '1', 'Brass Earthing Accessories', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 01:00:43', '2024-10-01 07:00:53'),
(4, 2, 'Brass Fittings Parts', 'brass-fittings-parts', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', 'PMraEV1UMvq4F6M-1727159551.png', 'iREoY2VaIVUVEgV-1727159551.jpg', '1', 'Brass Fittings Parts', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 01:02:31', '2024-10-01 07:00:57'),
(5, 1, 'Brass Precision Components', 'brass-precision-components', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', 'uvm9tb93HYMhylo-1727159625.png', 's43lYh9dQOKxnlp-1727159625.jpg', '1', 'Brass Precision Components', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 01:03:45', '2024-09-24 08:04:15'),
(6, 1, 'Copper & S.S Components', 'copper-ss-components', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', '4zywZc2agmD69Hq-1727159753.png', 'rCyWcxSqDjHnM6s-1727159753.jpg', '1', 'Copper & S.S Components', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 01:05:53', '2024-09-24 08:04:11'),
(7, 1, 'Brass Cable Glands', 'brass-cable-glands', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', 'N5Wp2igYhC7ty7I-1727159800.png', 'JPs8FEzxQkOxTzW-1727159800.jpg', '1', 'Brass Cable Glands', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 01:06:40', '2024-09-24 08:04:06'),
(8, 1, 'Brass Electrical Components', 'brass-electrical-components', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', 'AjKGPG627tsAFb6-1727159849.png', 'zXcd4ZOqRaoA8Ip-1727159849.jpg', '1', 'Brass Electrical Components', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 01:07:29', '2024-09-24 08:04:02'),
(9, 1, 'Brass Aluminium Neutral Links', 'brass-aluminium-neutral-links', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '<p>Neutral Links/Bars are used as an accessory in Panel Boards &amp; Electrical Board in Industries like Electrical, Electronics &amp; Telecommunications. It is a considered as a backbone in Building Circuit Protections such as MCB, Switchgears, Circuit breaker, RCD etc. Panel Board (Distribution Board) comprising of copper bus bars, brass neutral links and earth links to facilitate effective distribution of current. It incorporates safety devices such as MCBs, ELCBs and Isolators, which serves to protect the installation. Brass Neutral Link/Bar are very crucial components in every application of its nature. It plays major role in isolation of electric equipment &amp; clearing faulty downstream, by means of Switchgear and preventing short circuit &amp; protecting electric circuit from damage caused by overload, in the form of Circuit breaker &amp; so on. Because we understand this criticality, we are committed to deliver high class royal quality Brass Neutrals Links as per International Standards &amp; Specifications, at loyal price. Material: Brass Neutrals Links are available as per IS 319 or BS 249 or BS 2874: CZ 121 or any high graded brass as per custom specification. Screws are available in Brass as well as Steel material. Sizes &amp; Types: Simple Neutral Bar, Earth Connector Bar, Earth Connector with Base are some of the type of Neutral Links available in our standard Range. Any Size from 2 ways to 50 ways to 1 meter to 1.5meter or as per custom requirement can be made available. Screws are available with option of Brass or Steel material with designs from simple Cheese slotted head to Philips Head to Philips combination head with simple roll thread or special lock thread facility.</p>', 'x2rycpcS5KUN495-1727159892.png', 'ZRNzvtC7ObgO4Fo-1727159892.jpg', '1', 'Brass Aluminium Neutral Links', 'Neutral Links/Bars are used as an accessory in Panel Boards & Electrical Board in Industries like Electrical, Electronics & Telecommunications.', '2024-09-24 01:08:12', '2024-09-24 08:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` longtext DEFAULT NULL,
  `cat_slug` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT '1 > Active, 2 > In Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `cat_slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brass', NULL, '1', '2024-09-16 05:31:03', '2024-09-24 00:58:34'),
(2, 'Another Category', 'another-category', '1', '2024-09-16 05:43:50', '2024-09-30 06:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `gallery_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `gallery_image`, `created_at`, `updated_at`) VALUES
(4, 2, 'V1ZfogJm7EbSCOm-1727159283.jpg', '2024-09-24 00:58:03', '2024-09-24 00:58:03'),
(5, 2, '0PLiX20G5RqWUI9-1727159283.jpg', '2024-09-24 00:58:03', '2024-09-24 00:58:03'),
(6, 2, 'pVTSe0pfxSDE53C-1727159283.jpg', '2024-09-24 00:58:03', '2024-09-24 00:58:03'),
(7, 3, 'wdl68W4oyyS04Pc-1727159443.jpg', '2024-09-24 01:00:43', '2024-09-24 01:00:43'),
(8, 3, 'Pjp3FxE3GshDayy-1727159443.jpg', '2024-09-24 01:00:43', '2024-09-24 01:00:43'),
(9, 3, 'UJGnSMXjZMb0Nz8-1727159443.jpg', '2024-09-24 01:00:43', '2024-09-24 01:00:43'),
(10, 4, 'eVtvGmTzPbrs1Z3-1727159551.jpg', '2024-09-24 01:02:31', '2024-09-24 01:02:31'),
(11, 4, 'krb8YH9R0is8uYh-1727159551.jpg', '2024-09-24 01:02:31', '2024-09-24 01:02:31'),
(12, 4, 'nQMQXukpSU3Ubi9-1727159551.jpg', '2024-09-24 01:02:31', '2024-09-24 01:02:31'),
(13, 5, 'DPk0vm4uSgnQSQi-1727159625.jpg', '2024-09-24 01:03:45', '2024-09-24 01:03:45'),
(14, 5, 'vmbu5C5awk75oyp-1727159625.jpg', '2024-09-24 01:03:45', '2024-09-24 01:03:45'),
(15, 5, 'sXAtokv0vd1WE9b-1727159625.jpg', '2024-09-24 01:03:45', '2024-09-24 01:03:45'),
(16, 6, 'VF1LhlDUPXi7x7W-1727159753.jpg', '2024-09-24 01:05:53', '2024-09-24 01:05:53'),
(17, 6, 'GlS8fL9A1xCaixS-1727159753.jpg', '2024-09-24 01:05:53', '2024-09-24 01:05:53'),
(18, 6, 'PTD13uLRGuPTOR2-1727159753.jpg', '2024-09-24 01:05:53', '2024-09-24 01:05:53'),
(19, 7, 'UY3knsCYEvsfCiF-1727159800.jpg', '2024-09-24 01:06:40', '2024-09-24 01:06:40'),
(20, 7, 'lgZ4MX4OSXY1hYh-1727159800.jpg', '2024-09-24 01:06:40', '2024-09-24 01:06:40'),
(21, 7, 'WxNcZVuS8p4KaVP-1727159800.jpg', '2024-09-24 01:06:40', '2024-09-24 01:06:40'),
(22, 8, 'fiCSB2p9y7KfHYU-1727159849.jpg', '2024-09-24 01:07:29', '2024-09-24 01:07:29'),
(23, 8, '0sSE2zWNiGz7WRa-1727159849.jpg', '2024-09-24 01:07:29', '2024-09-24 01:07:29'),
(24, 8, 'r7R2HOk9sYWXYM6-1727159849.jpg', '2024-09-24 01:07:29', '2024-09-24 01:07:29'),
(25, 9, 'e08w1NdE6J8mstF-1727159892.jpg', '2024-09-24 01:08:12', '2024-09-24 01:08:12'),
(26, 9, 'qoJFKGFdMgSC3h8-1727159892.jpg', '2024-09-24 01:08:12', '2024-09-24 01:08:12'),
(27, 9, 'GkUhTDFz366jA3i-1727159892.jpg', '2024-09-24 01:08:12', '2024-09-24 01:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `page_title` longtext DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `seo_title` longtext DEFAULT NULL,
  `seo_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `heading`, `description`, `image`, `page_title`, `banner_image`, `seo_title`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 'Quality', '<p>Being ISO 9001:2015 Certified Company with over 20 years in this field Quality is always our top priority. As known Industry leader, we&rsquo;re used to working with all types of customers &ndash; Local or Global, Large or Small. Exceptional Quality is foundation of our company, and is the driving force behind all decisions; weather it&rsquo;s which raw material to purchase or the best way to serve our customers. We work in highly competitive field, so we&rsquo;re constantly investing in technology and research to make sure we stay ahead of the curve. Our commitment to quality guarantees our success and your satisfaction.</p>\r\n\r\n<p>In order to meet the needs of market development and promote the upgrading of technological innovation, the company has introduced advanced production equipment and testing equipment.We have an efficient quality control system in place. To Ensure Accuracy and efficiency we use precise and accurate measuring equipments and perform all kind of required Destructive and Non-destructive testing and SPC methods.</p>', 'M9wRd8J51oCFcU1-1727528250.png', 'Quality', 'VEcoPyHTlbLXhIZ-1727528049.png', 'Being ISO 9001:2015 Certified Company', 'Being ISO 9001:2015 Certified Company with over 20 years in this field Quality is always our top priority. As known Industry leader, we’re used to working with all types of customers – Local or Global, Large or Small.', '2024-09-23 01:58:22', '2024-09-28 07:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `request_catalog`
--

CREATE TABLE `request_catalog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone_number` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_catalog`
--

INSERT INTO `request_catalog` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Admin', 'test@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(2, 'Test Dev', 'Developer', 'test_dev@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(3, 'Test Dev', 'Developer', 'test_dev3@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(4, 'Test Dev', 'Developer', 'test_dev4@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(5, 'Test Dev', 'Developer', 'test_dev5@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(6, 'Test Dev', 'Developer', 'test_dev6@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(7, 'Test Dev', 'Developer', 'test_dev7@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(8, 'Test Dev', 'Developer', 'test_dev8@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(9, 'Test Dev', 'Developer', 'test_dev9@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(10, 'Test Dev', 'Developer', 'test_dev10@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(11, 'Test Dev', 'Developer', 'test_dev11@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(12, 'Test Dev', 'Developer', 'test_dev12@gmail.com', '123456789', '2024-09-14 07:43:57', '2024-09-14 07:43:57'),
(13, 'test', 'Test', 'admin@gmail.com', '+91 94279 77599', '2024-09-26 06:28:27', '2024-09-26 06:28:27'),
(14, 'sfdsf', 'sdfsdf', 'admin@gmail.com', '+91 94279 77599', '2024-09-26 07:00:42', '2024-09-26 07:00:42'),
(15, 'sdfdsf', 'sdfdsf', 'admin@gmail.com', '+91 94279 77599', '2024-09-30 08:28:51', '2024-09-30 08:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) DEFAULT NULL COMMENT '1 > Admin, 2 > User',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `email`, `password`, `user_name`, `first_name`, `last_name`, `city`, `address`, `mobile_no`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'pratikpitroda06@gmail.com', '$2y$12$bZ3rMPM9JT/H4NkLq8i13eMqXcfUWJAS7mEBUO8SvExSL/WIsYJz.', 'enterprise-admin', 'Enterprise', 'Admin', 'Rajkot, Gujarat', 'Test Address', '123456789', NULL, NULL, '2024-09-13 03:58:52', '2024-09-14 01:46:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_page`
--
ALTER TABLE `common_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_values`
--
ALTER TABLE `core_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_data`
--
ALTER TABLE `footer_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_data`
--
ALTER TABLE `header_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_gallery_product_id_foreign` (`product_id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_catalog`
--
ALTER TABLE `request_catalog`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `common_page`
--
ALTER TABLE `common_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_values`
--
ALTER TABLE `core_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_data`
--
ALTER TABLE `footer_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_data`
--
ALTER TABLE `header_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_catalog`
--
ALTER TABLE `request_catalog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD CONSTRAINT `product_gallery_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
