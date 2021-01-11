-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2021 at 09:38 AM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polash10_mobilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_vendors`
--

CREATE TABLE `apply_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `secret_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approve` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_vendors`
--

INSERT INTO `apply_vendors` (`id`, `user_id`, `secret_key`, `is_approve`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 'z2EvHGYNFY2', 0, 1, '2020-11-01 14:11:50', '2020-11-01 14:11:50'),
(2, 4, 'tvuj3vdSzf4', 1, 1, '2020-11-01 14:19:06', '2020-11-01 14:31:26'),
(3, 5, 'lPw77LHVON5', 1, 1, '2020-11-01 16:12:38', '2020-11-01 16:13:47'),
(4, 8, '96R8hI5jFE8', 1, 1, '2020-11-05 13:33:03', '2020-11-05 13:35:28'),
(5, 13, 'IkkxShqx0a13', 0, 1, '2020-12-23 14:27:07', '2020-12-23 14:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `user_id`, `product_id`, `quantity`, `size`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 1, NULL, '2020-11-01 17:31:56', '2020-11-01 17:31:56'),
(2, 2, 1, 1, NULL, '2020-11-01 17:32:34', '2020-11-01 17:32:34'),
(5, 8, 20, 3, NULL, '2020-11-05 13:41:28', '2020-11-05 13:41:28'),
(6, 1, 17, 8, NULL, '2020-12-16 13:11:36', '2020-12-16 13:15:20'),
(7, 1, 18, 1, NULL, '2020-12-16 13:11:41', '2020-12-16 13:11:41'),
(8, 1, 23, 1, NULL, '2020-12-20 05:15:14', '2020-12-20 05:15:14'),
(9, 11, 20, 1, NULL, '2020-12-22 05:53:23', '2020-12-22 05:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `case_categories`
--

CREATE TABLE `case_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_type_id` bigint(20) UNSIGNED NOT NULL,
  `case_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE `case_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe_address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `company_number`, `company_img`, `line1`, `line2`, `postcode`, `state`, `city`, `describe_address`, `created_at`, `updated_at`) VALUES
(1, 2, 'Give us your full location address so we can find you and deliver your order accurately.', 'Give us your full location address so we can find you and deliver your order accurately.', '', 'Give us your full location address so we can find yoGive us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find y', 'Give us your full location address so we can find you and deliver your order accurately.', 0, 'South Carolina (SC)', 'Give us your full location address so we can find you and deliver your order accurately.', 'Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.', '2020-11-01 14:07:00', '2020-11-01 14:07:00'),
(2, 4, 'Nike', '(345) 452-4354', 'uploads/company/Nike/November_2020/01/1604240327_nike.png', 'sdfsfgsfg', 'sfdgsdfg', 34345, 'OH', 'sdfgsfd', 'sfgsfdg', '2020-11-01 14:18:47', '2020-11-01 14:18:47'),
(3, 5, 'Polo', '(234) 234-2344', 'uploads/company/Polo/November_2020/01/1604247143_images.jpg', 'sdfg', 'sfdg', 34345, 'NJ', 'sdfg', 'sdfsdfg', '2020-11-01 16:12:23', '2020-11-01 16:12:23'),
(4, 8, 'kamruzzaman org', '0000000000', 'uploads/company/kamruzzaman org/November_2020/05/1604604732_Screenshot_6.png', 'y', NULL, 1212, 'South Carolina (SC)', 'city doctor', 'address line 1, line 2\r\naddress 2 doctor', '2020-11-05 13:32:12', '2020-11-05 13:32:12'),
(5, 11, 'kamruzzaman org', '0000000000', 'uploads/company/kamruzzaman org/December_2020/22/1608614788_me.jpg', 'address line 1', 'address line 2', 1212, 'South Carolina (SC)', 'city doctor', 'address line 1, line 2\r\naddress 2 doctor', '2020-12-22 05:26:28', '2020-12-22 05:26:28'),
(6, 11, 'kamruzzaman org', '0000000000', 'uploads/company/kamruzzaman org/December_2020/22/1608615235_me.jpg', 'address line 1', 'address line 2', 1212, 'South Carolina (SC)', 'city doctor', 'address line 1, line 2\r\naddress 2 doctor', '2020-12-22 05:33:55', '2020-12-22 05:33:55'),
(7, 11, 'kamruzzaman org', '0000000000', 'uploads/company/kamruzzaman org/December_2020/22/1608615709_me.jpg', 'adress line 1', 'address line 2', 1212, 'South Carolina (SC)', 'city doctor', 'address line 1, line 2\r\naddress 2 doctor', '2020-12-22 05:41:50', '2020-12-22 05:41:50'),
(8, 12, 'ertert', '(345) 345-3454', 'uploads/company/ertert/December_2020/22/1608659178_lLJ67K_j_400x400.jpg', 'fxvb', 'xcv', 45345, 'OH', 'xvcb', 'xvbxvbxb', '2020-12-22 17:46:18', '2020-12-22 17:46:18'),
(9, 11, 'kamruzzaman org', '0000000000', 'uploads/company/kamruzzaman org/December_2020/23/1608700189_me.jpg', 'address line 1, line 2', NULL, 1212, 'South Carolina (SC)', 'city doctor', 'address line 1, line 2\r\naddress 2 doctor', '2020-12-23 05:09:49', '2020-12-23 05:09:49'),
(10, 11, 'kamruzzaman org', '0000000000', 'uploads/company/kamruzzaman org/December_2020/23/1608720383_me.jpg', 'address line 1, line 2', NULL, 1212, 'South Carolina (SC)', 'city doctor', 'address line 1, line 2\r\naddress 2 doctor', '2020-12-23 10:46:23', '2020-12-23 10:46:23'),
(11, 13, 'sgsfdg', '(345) 345-3454', 'uploads/company/sgsfdg/December_2020/23/1608733433_download.jpg', 'sfdg', 'gsdfg', 43453, 'OK', 'sfg', 'sfgsfgsdfgsgf', '2020-12-23 14:23:53', '2020-12-23 14:23:53'),
(12, 13, 'ssfdgsfdg', '(434) 534-535', 'uploads/company/ssfdgsfdg/December_2020/23/1608733596_download.jpg', 'sfgsdf', 'gsfdg', 34534, 'OH', 'sdfg', 'sfgsfdg', '2020-12-23 14:26:36', '2020-12-23 14:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_supports`
--

CREATE TABLE `customer_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_times`
--

CREATE TABLE `delivery_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_times`
--

INSERT INTO `delivery_times` (`id`, `name`, `day`, `created_at`, `updated_at`) VALUES
(1, '7 Days', 7, '2020-11-01 16:36:56', '2020-11-01 16:36:56'),
(2, '5 Days', 5, '2020-11-01 16:37:10', '2020-11-01 16:37:10'),
(3, '15 Days', 15, '2020-11-01 16:37:26', '2020-11-01 16:37:26'),
(4, '5 to 9 Days', 9, '2020-11-01 16:37:47', '2020-11-01 16:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_settings`
--

CREATE TABLE `ecom_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_cost` double(8,2) NOT NULL,
  `outer_city_shipping_cost` double(8,2) NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ecom_supports`
--

CREATE TABLE `ecom_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `subject`, `description`, `user_type`, `read_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Turn Surf-Surf-Surf into Talk Talk Talk', 'Hello, my name’s Eric and I just ran across your website at yourhobo.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=yourhobo.com', NULL, NULL, NULL, '2020-11-08 20:25:29', '2020-11-08 20:25:29'),
(2, 'Why not TALK with your leads?', 'My name’s Eric and I just found your site yourhobo.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE http://www.talkwithwebvisitors.com for a live demo now.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nAnd once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation… and if they don’t take you up on your offer then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them. \r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=yourhobo.com', NULL, NULL, NULL, '2020-11-12 20:41:37', '2020-11-12 20:41:37'),
(3, 'yourhobo.com', 'Your domain name: yourhobo.com\r\n\r\nHOBO\r\n\r\nThis announcement EXPIRES ON: Nov 19, 2020!\r\n\r\n\r\nWe have actually not gotten a payment from you.\r\nWe  have actually attempted to email you yet were incapable to reach you.\r\n\r\n\r\nPlease Go To:  https://bit.ly/38SJLQs\r\n\r\n\r\nFor details and also to process a optional payment for service.\r\n\r\n\r\n11192020173217', NULL, NULL, NULL, '2020-11-19 22:32:24', '2020-11-19 22:32:24'),
(4, 'Turn Surf-Surf-Surf into Talk Talk Talk', 'Hello, my name’s Eric and I just ran across your website at yourhobo.com...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=yourhobo.com', NULL, NULL, NULL, '2020-11-23 03:59:46', '2020-11-23 03:59:46'),
(5, 'Why not TALK with your leads?', 'My name’s Eric and I just found your site yourhobo.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE http://www.talkwithwebvisitors.com for a live demo now.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nAnd once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation… and if they don’t take you up on your offer then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them. \r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=yourhobo.com', NULL, NULL, NULL, '2020-12-03 12:09:15', '2020-12-03 12:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `mail_addresses`
--

CREATE TABLE `mail_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `read_at` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_addresses`
--

INSERT INTO `mail_addresses` (`id`, `mail_id`, `name`, `email`, `user_type`, `status`, `read_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Eric Jones', 'ericjonesonline@outlook.com', NULL, 0, 0, NULL, '2020-11-08 20:25:29', '2020-11-08 20:25:29'),
(2, 2, 'Eric Jones', 'ericjonesonline@outlook.com', NULL, 0, 0, NULL, '2020-11-12 20:41:37', '2020-11-12 20:41:37'),
(3, 3, 'Donte Tranter', 'yourhobo.com@yourhobo.com', NULL, 0, 0, NULL, '2020-11-19 22:32:24', '2020-11-19 22:32:24'),
(4, 4, 'Eric Jones', 'ericjonesonline@outlook.com', NULL, 0, 0, NULL, '2020-11-23 03:59:46', '2020-11-23 03:59:46'),
(5, 5, 'Eric Jones', 'ericjonesonline@outlook.com', NULL, 0, 0, NULL, '2020-12-03 12:09:15', '2020-12-03 12:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `main_sliders`
--

CREATE TABLE `main_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_sliders`
--

INSERT INTO `main_sliders` (`id`, `product_id`, `category_id`, `name`, `caption`, `image_url`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'Summer collections for men', 'The Buttons extension for DataTables provides a common set of options', 'uploads/sliders/mainSlider/November_2020/01/1604245080_1602589072_160183~1.PNG', '2020-11-01 15:38:00', '2020-12-16 13:06:47'),
(2, NULL, 2, 'API methods and styling to display buttons', 'API methods and styling to display buttons on a page that', 'uploads/sliders/mainSlider/November_2020/01/1604245960_c10_01_banner_d.jpg', '2020-11-01 15:52:40', '2020-12-16 13:07:06'),
(3, NULL, 1, 'What is Lorem Ipsum', 'Ipsum	Type and scrambled it to make a type sp', 'uploads/sliders/mainSlider/November_2020/01/1604246165_1602589758_1601721490_8.jpeg', '2020-11-01 15:56:05', '2020-12-16 13:07:29'),
(4, NULL, 1, 'Why do we use it', 'making it look like readable English. M', 'uploads/sliders/mainSlider/November_2020/01/1604246187_1602589795_1601833186_fashion-young-african-girl-black-260nw-1420132757.jpg', '2020-11-01 15:56:27', '2020-12-16 13:07:47'),
(5, NULL, 3, 'Where can I get some', 'Lorem Ipsum generators', 'uploads/sliders/mainSlider/November_2020/01/1604246226_1602589828_1601835854_a3bee3890d4039488fabcfd797e02fa6.jpg', '2020-11-01 15:57:06', '2020-11-01 15:57:06'),
(6, NULL, 4, 'If you are going to use a passage', 'The Extremes of Good and Evil) by Cicero', 'uploads/sliders/mainSlider/November_2020/01/1604246264_1602589943_1601832945_carl-f-bucherer-manero-tourbillon-1.jpg', '2020-11-01 15:57:44', '2020-11-01 15:57:44'),
(7, NULL, 4, 'combined with a handful', 'Various versions have evolved', 'uploads/sliders/mainSlider/November_2020/01/1604246344_1602589973_1601832812_maxresdefault.jpg', '2020-11-01 15:59:04', '2020-11-01 15:59:04'),
(8, NULL, 3, 'Summer collections for Kids', 'New  Stylish collections', 'uploads/sliders/mainSlider/November_2020/01/1604246503_Vegas16-1497-Edit-web-1000x700.jpg', '2020-11-01 16:01:43', '2020-11-01 16:01:43');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_07_134453_create_dashboards_table', 1),
(5, '2020_09_07_141320_create_product_brands_table', 1),
(7, '2020_09_08_114549_create_product_brand_category_maps_table', 1),
(8, '2020_09_08_144202_create_products_table', 1),
(9, '2020_09_08_151007_create_product_categories_table', 1),
(10, '2020_09_09_032336_create_warehouses_table', 1),
(11, '2020_09_09_050047_create_main_sliders_table', 1),
(12, '2020_09_09_051004_create_product_availabilities_table', 1),
(13, '2020_09_10_062652_create_product_colors_table', 1),
(14, '2020_09_10_062747_create_product_sizes_table', 1),
(15, '2020_09_10_135744_create_shipping_addresses_table', 1),
(16, '2020_09_10_140931_create_user_profiles_table', 1),
(17, '2020_09_10_164248_create_product_category_maps_table', 1),
(18, '2020_09_10_164526_create_product_tag_maps_table', 1),
(19, '2020_09_10_165443_create_product_gallery_maps_table', 1),
(20, '2020_09_12_051554_create_new_arrival_tabs_table', 1),
(21, '2020_09_12_090845_create_product_features_table', 1),
(22, '2020_09_13_140056_create_ecom_supports_table', 1),
(23, '2020_09_16_063333_create_apply_vendors_table', 1),
(24, '2020_09_19_065630_create_orders_table', 1),
(25, '2020_09_19_070446_create_transactions_table', 1),
(26, '2020_09_19_073901_create_order_products_table', 1),
(27, '2020_09_20_010223_create_cart_items_table', 1),
(28, '2020_09_20_055545_create_product_reviews_table', 1),
(29, '2020_09_22_063134_create_countries_table', 1),
(30, '2020_09_22_075214_create_ecom_settings_table', 1),
(31, '2020_09_22_080756_create_currencies_table', 1),
(32, '2020_10_03_075019_create_social_icons_table', 1),
(33, '2020_10_03_075946_create_site_settings_table', 1),
(34, '2020_10_03_113222_create_news_letters_table', 1),
(35, '2020_10_08_122552_create_wishlists_table', 1),
(36, '2020_10_10_115411_create_mails_table', 1),
(37, '2020_10_10_115424_create_mail_addresses_table', 1),
(38, '2020_10_12_072529_create_product_color_maps_table', 1),
(39, '2020_10_12_072539_create_product_size_maps_table', 1),
(40, '2020_10_26_143158_create_delivery_times_table', 1),
(41, '2020_10_28_020355_create_social_providers_table', 1),
(42, '2020_10_31_053925_create_companies_table', 1),
(43, '2020_10_31_072515_create_customer_supports_table', 1),
(44, '2020_10_31_074414_create_case_types_table', 1),
(45, '2020_10_31_074454_create_case_categories_table', 1),
(46, '2020_11_01_053441_create_payment_refunds_table', 1),
(48, '2020_09_08_072714_create_product_tags_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_arrival_tabs`
--

CREATE TABLE `new_arrival_tabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `no_of_product` int(11) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` bigint(20) UNSIGNED NOT NULL,
  `paid_amount` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `payment_refunds`
--

CREATE TABLE `payment_refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `refund_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refund_from_transaction_fee` decimal(8,2) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `refund_from_received_amount` decimal(8,2) DEFAULT NULL,
  `total_refunded_amount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'This is a demo product',
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` decimal(8,2) DEFAULT NULL,
  `new_price` decimal(8,2) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `is_feature` tinyint(1) NOT NULL DEFAULT '0',
  `allow_review` tinyint(1) NOT NULL DEFAULT '1',
  `show_on_home` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) DEFAULT NULL,
  `availability_id` int(11) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `size_id` bigint(20) DEFAULT NULL,
  `color_id` bigint(20) DEFAULT NULL,
  `available_start_date` date DEFAULT NULL,
  `available_end_date` date DEFAULT NULL,
  `is_inventory` tinyint(1) NOT NULL DEFAULT '0',
  `inventory_qty` bigint(20) DEFAULT NULL,
  `minimum_inventory_qty` int(11) DEFAULT NULL,
  `notify_low_inventory` tinyint(1) DEFAULT NULL,
  `warehouse_id` bigint(20) DEFAULT NULL,
  `shipping_charge` double(8,2) DEFAULT '0.00',
  `height` double(8,2) DEFAULT '0.00',
  `width` double(8,2) DEFAULT '0.00',
  `weight` double(8,2) DEFAULT '0.00',
  `show_availability` tinyint(1) NOT NULL DEFAULT '0',
  `minimum_cart_qty` int(11) DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_seo` tinyint(1) NOT NULL DEFAULT '0',
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `delivery_id`, `title`, `short_description`, `slug`, `description`, `sku`, `old_price`, `new_price`, `is_published`, `is_new`, `is_feature`, `allow_review`, `show_on_home`, `user_id`, `availability_id`, `brand_id`, `size_id`, `color_id`, `available_start_date`, `available_end_date`, `is_inventory`, `inventory_qty`, `minimum_inventory_qty`, `notify_low_inventory`, `warehouse_id`, `shipping_charge`, `height`, `width`, `weight`, `show_availability`, `minimum_cart_qty`, `featured_image`, `allow_seo`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(14, 1, 'woman collection 1', '• Two piece stretch set • Sequin • Long sleeve crop top • Round neck', 'woman-collection-1', '&lt;span style=\"color:#4c4c4c;font-family:Rubik, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;&amp;bull; Two piece stretch set &amp;bull; Sequin &amp;bull; Long sleeve crop top &amp;bull; Round neck&lt;/span&gt;', '66', 395.00, 495.00, 1, 0, 0, 1, 1, 1, NULL, 1, NULL, NULL, '2020-11-04', '2020-11-25', 0, NULL, NULL, NULL, NULL, 0.60, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/December_2020/16/1608125388_1529499190fdd6aea651445abf97defca6985d63.webp', 0, NULL, NULL, '2020-11-04 11:49:49', '2020-12-19 07:48:02'),
(15, 2, 'Sheer Me', '• Stretch two piece set • Sher • Undergarment attached • Strapless crop top • High waist pants • Slit boot • 95% polyester • 5% spandex • Hand wash cold • model is wearing a Small • Belt not included.', 'sheer-me', '&lt;span style=\"color:#4c4c4c;font-family:Rubik, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;&amp;bull; Stretch two piece set &amp;bull; Sher &amp;bull; Undergarment attached &amp;bull; Strapless crop top &amp;bull; High waist pants &amp;bull; Slit boot &amp;bull; 95% polyester &amp;bull; 5% spandex &amp;bull; Hand wash cold &amp;bull; model is wearing a Small &amp;bull; Belt not included.&lt;/span&gt;', NULL, 495.00, 495.00, 1, 0, 0, 1, 1, 1, NULL, 2, NULL, NULL, '2020-11-04', '2020-11-28', 0, NULL, NULL, NULL, NULL, 0.60, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/04/1604512351_1603557311_WhatsApp Image 2020-10-21 at 6.37.45 AM.jpeg', 0, NULL, NULL, '2020-11-04 11:52:31', '2020-11-04 11:52:31'),
(16, 4, 'Just Wanna Be VIP Dress', '• Non stretch blazer dress • Long sleeve • Collar neck • Snap closure • Belt included • 100% polyester • Hand wash cold • model is wearing a Small', 'just-wanna-be-vip-dress', '&lt;span style=\"color:#4c4c4c;font-family:Rubik, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;&amp;bull; Non stretch blazer dress &amp;bull; Long sleeve &amp;bull; Collar neck &amp;bull; Snap closure &amp;bull; Belt included &amp;bull; 100% polyester &amp;bull; Hand wash cold &amp;bull; model is wearing a Small&lt;/span&gt;', NULL, 89.00, 89.00, 1, 0, 0, 1, 1, 1, NULL, 3, NULL, NULL, '2020-11-04', '2020-11-19', 0, NULL, NULL, NULL, NULL, 0.50, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/04/1604512459_1603557621_WhatsApp Image 2020-10-21 at 6.38.35 AM.jpeg', 0, NULL, NULL, '2020-11-04 11:54:19', '2020-11-04 11:54:19'),
(17, 1, 'SLIM FITTING VERY TRUE TO SIZE', 'Fully Embroidered Premium 9 ounce 65% cotton/35% polyester Zippered Pants Pockets', 'slim-fitting-very-true-to-size', '&lt;span style=\"color:#4c4c4c;font-family:Rubik, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;Fully Embroidered Premium 9 ounce 65% cotton/35% polyester Zippered Pants Pockets&lt;/span&gt;', NULL, 50.00, 50.00, 1, 0, 0, 1, 1, 1, NULL, 9, NULL, NULL, '2020-11-04', '2020-11-20', 0, NULL, NULL, NULL, NULL, 0.30, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/04/1604512595_1603558207_WhatsApp Image 2020-10-21 at 6.39.27 AM.jpeg', 0, NULL, NULL, '2020-11-04 11:56:35', '2020-11-04 11:56:35'),
(18, 2, 'SLIM FITTING VERY TRUE TO SIZE Copy', 'SLIM FITTING VERY TRUE TO SIZE Copy', 'slim-fitting-very-true-to-size-copy', '&lt;h2 style=\"box-sizing:border-box;margin-top:0px;margin-bottom:34px;font-family:Rubik, sans-serif;font-weight:500;line-height:40px;color:#191919;font-size:30px;background-color:#ffffff;\"&gt;SLIM FITTING VERY TRUE TO SIZE Copy&lt;/h2&gt;', NULL, 80.00, 80.00, 1, 0, 0, 1, 1, 1, NULL, 3, NULL, NULL, '2020-11-01', '2020-11-05', 0, NULL, NULL, NULL, NULL, 0.70, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/04/1604512734_1603558350_WhatsApp Image 2020-10-21 at 6.39.51 AM.jpeg', 0, NULL, NULL, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(19, 2, 'GARMENT DYED VINTAGE WASH (WASHED BLACK)', 'This vintage tee is the best on the market! It reads “Heaven Only Knows” in a red classic puff print. MADE IN PORTUGAL 7.4 oz 100% COTTON 215 GSM 21 SINGLES FEATURES GARMENT DYED VINTAGE WASH (WASHED BLACK)', 'garment-dyed-vintage-wash-washed-black', '&lt;span style=\"color:#4c4c4c;font-family:Rubik, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;This vintage tee is the best on the market! It reads &amp;ldquo;Heaven Only Knows&amp;rdquo; in a red classic puff print. MADE IN PORTUGAL 7.4 oz 100% COTTON 215 GSM 21 SINGLES FEATURES GARMENT DYED VINTAGE WASH (WASHED BLACK)&lt;/span&gt;', NULL, 46.00, 46.00, 1, 0, 0, 1, 1, 1, NULL, 9, NULL, NULL, '2020-11-05', '2020-11-30', 0, NULL, NULL, NULL, NULL, 0.50, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/04/1604512839_1603558494_WhatsApp Image 2020-10-21 at 6.41.11 AM.jpeg', 0, NULL, NULL, '2020-11-04 12:00:39', '2020-12-16 13:09:50'),
(20, 3, 'hoodie', 'This core hoodie comes just in time for fall/winter. It’s a tie-dyed blend of sand, indigo and white. A portion of the Lord’s prayer is puff printed on the back in white. 24oz 100% COTTON 350 GSM COTTON FLEECE • Elastic arm cuffs • Stingless Hood • Wide elastic waistband Fits true to size with slight drop in shoulder', 'hoodie', '&lt;span style=\"color:#4c4c4c;font-family:Rubik, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;This core hoodie comes just in time for fall/winter. It&amp;rsquo;s a tie-dyed blend of sand, indigo and white. A portion of the Lord&amp;rsquo;s prayer is puff printed on the back in white. 24oz 100% COTTON 350 GSM COTTON FLEECE &amp;bull; Elastic arm cuffs &amp;bull; Stingless Hood &amp;bull; Wide elastic waistband Fits true to size with slight drop in shoulder&lt;/span&gt;', NULL, 50.00, 50.00, 1, 0, 0, 1, 1, 1, NULL, 9, NULL, NULL, '2020-11-05', '2020-11-26', 0, NULL, NULL, NULL, NULL, 0.50, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/04/1604512934_1603558878_WhatsApp Image 2020-10-21 at 7.04.38 AM.jpeg', 0, NULL, NULL, '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(22, 1, 'test', 'sadf', 'test', 'asdfasdf', NULL, NULL, 0.00, 1, 0, 0, 1, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0.00, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/December_2020/20/1608441106_image (1).png', 0, NULL, NULL, '2020-12-20 05:11:47', '2020-12-20 05:11:47'),
(23, 1, 'test 3', 'asdfasd', 'test-2', 'fasdfasdf', NULL, NULL, 0.10, 1, 0, 0, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0.10, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/December_2020/20/1608441191_1529499190fdd6aea651445abf97defca6985d63.webp', 0, NULL, NULL, '2020-12-20 05:13:11', '2020-12-20 05:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_availabilities`
--

CREATE TABLE `product_availabilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`id`, `user_id`, `name`, `image`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nike', 'uploads/brands/November_2020/01/1604241267_nike.png', 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(2, 1, 'Gucci', 'uploads/brands/November_2020/01/1604242915_gucci.png', 1, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(3, 1, 'Fashionar', 'uploads/brands/November_2020/01/1604243006_fashion-designers.png', 1, '2020-11-01 15:03:26', '2020-11-01 15:03:26'),
(4, 1, 'Levis', 'uploads/brands/November_2020/01/1604243448_levies.png', 1, '2020-11-01 15:10:48', '2020-11-01 15:10:48'),
(5, 1, 'Hunt Store', 'uploads/brands/November_2020/01/1604243526_hunt-store.png', 1, '2020-11-01 15:12:06', '2020-11-01 15:12:06'),
(7, 3, 'Adidas', 'uploads/brands/November_2020/01/1604245185_images.png', 1, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(8, 3, 'Hatchul', 'uploads/brands/November_2020/01/1604245223_download.png', 1, '2020-11-01 15:40:23', '2020-11-01 15:40:23'),
(9, 3, 'M-Clothing', 'uploads/brands/November_2020/01/1604245349_pngtree-m-clothing-logo-design-template-png-image_4945700.jpg', 1, '2020-11-01 15:41:00', '2020-11-01 15:42:29'),
(10, 3, 'K Fashion', 'uploads/brands/November_2020/01/1604245426_k-fashion.png', 1, '2020-11-01 15:43:46', '2020-11-01 15:43:46'),
(11, 4, 'Polo', 'uploads/brands/November_2020/01/1604245558_images.jpg', 1, '2020-11-01 15:45:58', '2020-11-01 15:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand_category_maps`
--

CREATE TABLE `product_brand_category_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_brand_category_maps`
--

INSERT INTO `product_brand_category_maps` (`id`, `cat_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(2, 2, 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(3, 3, 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(4, 1, 2, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(5, 2, 2, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(6, 3, 2, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(7, 1, 3, '2020-11-01 15:03:26', '2020-11-01 15:03:26'),
(8, 2, 3, '2020-11-01 15:03:26', '2020-11-01 15:03:26'),
(9, 2, 4, '2020-11-01 15:10:48', '2020-11-01 15:10:48'),
(10, 1, 5, '2020-11-01 15:12:06', '2020-11-01 15:12:06'),
(15, 2, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(16, 1, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(17, 3, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(18, 4, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(19, 1, 8, '2020-11-01 15:40:23', '2020-11-01 15:40:23'),
(22, 1, 9, '2020-11-01 15:42:29', '2020-11-01 15:42:29'),
(23, 2, 10, '2020-11-01 15:43:46', '2020-11-01 15:43:46'),
(24, 1, 11, '2020-11-01 15:45:58', '2020-11-01 15:45:58'),
(25, 2, 11, '2020-11-01 15:45:58', '2020-11-01 15:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_top_menu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `user_id`, `category_name`, `slug`, `is_top_menu`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Female', 'female', 1, '2020-11-01 14:32:47', '2020-11-15 12:59:47'),
(2, 0, 1, 'Male', 'male', 1, '2020-11-01 14:33:04', '2020-11-15 13:01:12'),
(3, 0, 1, 'Kids', 'kids', 1, '2020-11-01 14:33:23', '2020-11-01 14:33:23'),
(4, 0, 1, 'Others', 'others', 1, '2020-11-01 14:33:32', '2020-11-01 14:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_maps`
--

CREATE TABLE `product_category_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category_maps`
--

INSERT INTO `product_category_maps` (`id`, `cat_id`, `product_id`, `is_published`, `created_at`, `updated_at`) VALUES
(3, 3, 3, 1, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(4, 3, 4, 1, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(5, 3, 5, 1, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(7, 3, 6, 1, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(8, 4, 6, 1, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(11, 1, 7, 1, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(12, 2, 8, 1, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(13, 4, 8, 1, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(15, 1, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(16, 4, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(17, 1, 9, 1, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(18, 1, 10, 1, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(19, 2, 11, 1, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(20, 4, 12, 1, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(21, 2, 12, 1, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(24, 2, 15, 1, '2020-11-04 11:52:31', '2020-11-04 11:52:31'),
(25, 2, 16, 1, '2020-11-04 11:54:20', '2020-11-04 11:54:20'),
(26, 2, 17, 1, '2020-11-04 11:56:35', '2020-11-04 11:56:35'),
(27, 1, 17, 1, '2020-11-04 11:56:35', '2020-11-04 11:56:35'),
(28, 2, 18, 1, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(29, 1, 18, 1, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(32, 1, 20, 1, '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(38, 2, 19, 1, '2020-12-16 13:09:50', '2020-12-16 13:09:50'),
(42, 1, 14, 1, '2020-12-19 08:07:31', '2020-12-19 08:07:31'),
(43, 1, 22, 1, '2020-12-20 05:11:47', '2020-12-20 05:11:47'),
(45, 1, 23, 1, '2020-12-20 05:15:18', '2020-12-20 05:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `user_id`, `color`, `created_at`, `updated_at`) VALUES
(1, 5, 'Yellow', '2020-11-01 16:15:10', '2020-11-01 16:15:10'),
(2, 5, 'White', '2020-11-01 16:15:18', '2020-11-01 16:15:18'),
(3, 5, 'Red', '2020-11-01 16:15:46', '2020-11-01 16:15:46'),
(4, 1, 'Black', '2020-11-01 17:07:22', '2020-11-01 17:07:22'),
(5, 1, 'Pink', '2020-12-16 06:06:58', '2020-12-16 06:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_color_maps`
--

CREATE TABLE `product_color_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_color_maps`
--

INSERT INTO `product_color_maps` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(4, 3, 2, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(5, 4, 2, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(6, 5, 3, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(8, 6, 3, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(11, 7, 2, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(12, 8, 2, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(13, 8, 4, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(15, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(16, 1, 3, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(17, 9, 4, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(18, 10, 2, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(19, 10, 4, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(20, 11, 4, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(21, 12, 4, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(24, 15, 4, '2020-11-04 11:52:31', '2020-11-04 11:52:31'),
(25, 16, 4, '2020-11-04 11:54:20', '2020-11-04 11:54:20'),
(26, 17, 3, '2020-11-04 11:56:35', '2020-11-04 11:56:35'),
(27, 18, 1, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(28, 18, 4, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(29, 18, 3, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(31, 20, 2, '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(32, 20, 1, '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(38, 19, 4, '2020-12-16 13:09:50', '2020-12-16 13:09:50'),
(42, 14, 2, '2020-12-19 08:07:31', '2020-12-19 08:07:31'),
(43, 22, 2, '2020-12-20 05:11:47', '2020-12-20 05:11:47'),
(45, 23, 2, '2020-12-20 05:15:18', '2020-12-20 05:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `no_of_product` int(11) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery_maps`
--

CREATE TABLE `product_gallery_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `product_id` bigint(20) DEFAULT NULL,
  `thumb_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_gallery_maps`
--

INSERT INTO `product_gallery_maps` (`id`, `image_url`, `product_id`, `thumb_url`, `created_at`, `updated_at`) VALUES
(1, 'uploads/products/u_1/gallery/November_2020/01/1604248757_1602585116_1.jpg', 1, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604248757_1602585116_1.jpg', '2020-11-01 16:39:17', '2020-11-01 16:39:17'),
(3, 'uploads/products/u_1/gallery/November_2020/01/1604249543_1602592729_1601722130_2.jpg', 3, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604249543_1602592729_1601722130_2.jpg', '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(4, 'uploads/products/u_1/gallery/November_2020/01/1604249641_1602592565_1601724308_2.jpg', 4, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604249640_1602592565_1601724308_2.jpg', '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(5, 'uploads/products/u_1/gallery/November_2020/01/1604249864_1602592507_1602488980_1601724145_4.jpg', 5, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604249864_1602592507_1602488980_1601724145_4.jpg', '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(6, 'uploads/products/u_1/gallery/November_2020/01/1604250388_1602592596_1601724178_3.jpg', 6, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604250388_1602592596_1601724178_3.jpg', '2020-11-01 17:06:28', '2020-11-01 17:06:28'),
(7, 'uploads/products/u_3/gallery/November_2020/01/1604250523_1602586358_1.jpg', 7, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250523_1602586358_1.jpg', '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(8, 'uploads/products/u_3/gallery/November_2020/01/1604250523_1602586517_1.jpg', 7, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250523_1602586517_1.jpg', '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(9, 'uploads/products/u_1/gallery/November_2020/01/1604250623_1602592047_54.jpg', 8, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604250623_1602592047_54.jpg', '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(10, 'uploads/products/u_3/gallery/November_2020/01/1604250700_1602586783_mzz28303_black_xl.jpg', 9, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250700_1602586783_mzz28303_black_xl.jpg', '2020-11-01 17:11:40', '2020-11-01 17:11:40'),
(11, 'uploads/products/u_3/gallery/November_2020/01/1604250739_1602588959_67.jpg', 1, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250739_1602588959_67.jpg', '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(12, 'uploads/products/u_3/gallery/November_2020/01/1604250978_1602588958_56.jpg', 10, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250978_1602588958_56.jpg', '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(13, 'uploads/products/u_3/gallery/November_2020/01/1604251150_1602592090_5.jpg', 11, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604251150_1602592090_5.jpg', '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(14, 'uploads/products/u_3/gallery/November_2020/01/1604251683_1602592160_2.jpg', 12, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604251683_1602592160_2.jpg', '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(17, 'uploads/products/u_1/gallery/November_2020/04/1604512351_1603557311_WhatsApp Image 2020-10-21 at 6.37.45 AM.jpeg', 15, 'uploads/products/u_1/gallery/thumb/November_2020/04/1604512351_1603557311_WhatsApp Image 2020-10-21 at 6.37.45 AM.jpeg', '2020-11-04 11:52:31', '2020-11-04 11:52:31'),
(18, 'uploads/products/u_1/gallery/November_2020/04/1604512460_1603557621_WhatsApp Image 2020-10-21 at 6.38.35 AM.jpeg', 16, 'uploads/products/u_1/gallery/thumb/November_2020/04/1604512459_1603557621_WhatsApp Image 2020-10-21 at 6.38.35 AM.jpeg', '2020-11-04 11:54:20', '2020-11-04 11:54:20'),
(19, 'uploads/products/u_1/gallery/November_2020/04/1604512595_1603558207_WhatsApp Image 2020-10-21 at 6.39.27 AM.jpeg', 17, 'uploads/products/u_1/gallery/thumb/November_2020/04/1604512595_1603558207_WhatsApp Image 2020-10-21 at 6.39.27 AM.jpeg', '2020-11-04 11:56:35', '2020-11-04 11:56:35'),
(20, 'uploads/products/u_1/gallery/November_2020/04/1604512734_1603558350_WhatsApp Image 2020-10-21 at 6.39.51 AM.jpeg', 18, 'uploads/products/u_1/gallery/thumb/November_2020/04/1604512734_1603558350_WhatsApp Image 2020-10-21 at 6.39.51 AM.jpeg', '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(21, 'uploads/products/u_1/gallery/November_2020/04/1604512839_1603558494_WhatsApp Image 2020-10-21 at 6.41.11 AM.jpeg', 19, 'uploads/products/u_1/gallery/thumb/November_2020/04/1604512839_1603558494_WhatsApp Image 2020-10-21 at 6.41.11 AM.jpeg', '2020-11-04 12:00:39', '2020-11-04 12:00:39'),
(22, 'uploads/products/u_1/gallery/November_2020/04/1604512935_1603558878_WhatsApp Image 2020-10-21 at 7.04.38 AM.jpeg', 20, 'uploads/products/u_1/gallery/thumb/November_2020/04/1604512935_1603558878_WhatsApp Image 2020-10-21 at 7.04.38 AM.jpeg', '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(26, 'uploads/products/u_1/gallery/December_2020/16/1608125721_1602592090_5.jpg', 14, 'uploads/products/u_1/gallery/thumb/December_2020/16/1608125721_1602592090_5.jpg', '2020-12-16 13:35:21', '2020-12-16 13:35:21'),
(27, 'uploads/products/u_1/gallery/December_2020/19/1608365251_image (1).jpg', 14, 'uploads/products/u_1/gallery/thumb/December_2020/19/1608365251_image (1).jpg', '2020-12-19 08:07:31', '2020-12-19 08:07:31'),
(28, 'uploads/products/u_1/gallery/December_2020/20/1608441107_image (1).png', 22, 'uploads/products/u_1/gallery/thumb/December_2020/20/1608441107_image (1).png', '2020-12-20 05:11:47', '2020-12-20 05:11:47'),
(29, 'uploads/products/u_1/gallery/December_2020/20/1608441192_Image_2.jpeg', 23, 'uploads/products/u_1/gallery/thumb/December_2020/20/1608441191_Image_2.jpeg', '2020-12-20 05:13:12', '2020-12-20 05:13:12'),
(30, 'uploads/products/u_1/gallery/December_2020/20/1608441318_Image.jpeg', 23, 'uploads/products/u_1/gallery/thumb/December_2020/20/1608441318_Image.jpeg', '2020-12-20 05:15:18', '2020-12-20 05:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `user_id`, `size`, `created_at`, `updated_at`) VALUES
(1, 4, 'XL', '2020-11-01 16:01:49', '2020-11-01 16:01:49'),
(2, 4, 'L', '2020-11-01 16:02:05', '2020-11-01 16:02:05'),
(3, 4, 'XXL', '2020-11-01 16:02:24', '2020-11-01 16:02:24'),
(4, 4, 'ML', '2020-11-01 16:02:42', '2020-11-01 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_size_maps`
--

CREATE TABLE `product_size_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size_maps`
--

INSERT INTO `product_size_maps` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(4, 3, 2, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(5, 4, 2, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(6, 4, 4, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(7, 5, 2, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(9, 6, 2, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(12, 7, 2, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(13, 7, 3, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(14, 8, 3, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(17, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(18, 1, 3, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(19, 9, 3, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(20, 9, 4, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(21, 11, 3, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(22, 11, 2, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(23, 12, 3, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(24, 12, 4, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(27, 15, 1, '2020-11-04 11:52:31', '2020-11-04 11:52:31'),
(28, 16, 2, '2020-11-04 11:54:20', '2020-11-04 11:54:20'),
(29, 17, 3, '2020-11-04 11:56:35', '2020-11-04 11:56:35'),
(30, 18, 4, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(31, 18, 2, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(32, 18, 3, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(34, 20, 3, '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(35, 20, 1, '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(41, 19, 4, '2020-12-16 13:09:50', '2020-12-16 13:09:50'),
(45, 14, 1, '2020-12-19 08:07:31', '2020-12-19 08:07:31'),
(46, 22, 1, '2020-12-20 05:11:47', '2020-12-20 05:11:47'),
(48, 23, 2, '2020-12-20 05:15:19', '2020-12-20 05:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Top Rated', 1, '2020-11-01 18:00:00', NULL),
(2, 'Adidas', 1, '2020-11-01 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag_maps`
--

CREATE TABLE `product_tag_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag_maps`
--

INSERT INTO `product_tag_maps` (`id`, `tag_id`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 1, 3, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(4, 1, 4, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(5, 1, 5, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(7, 1, 6, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(9, 2, 7, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(10, 2, 8, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(12, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(13, 1, 9, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(14, 1, 10, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(15, 2, 11, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(16, 2, 12, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(17, 1, 12, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(20, 1, 15, '2020-11-04 11:52:31', '2020-11-04 11:52:31'),
(21, 1, 16, '2020-11-04 11:54:20', '2020-11-04 11:54:20'),
(22, 1, 17, '2020-11-04 11:56:35', '2020-11-04 11:56:35'),
(23, 1, 18, '2020-11-04 11:58:54', '2020-11-04 11:58:54'),
(25, 1, 20, '2020-11-04 12:02:15', '2020-11-04 12:02:15'),
(31, 1, 19, '2020-12-16 13:09:50', '2020-12-16 13:09:50'),
(35, 1, 14, '2020-12-19 08:07:31', '2020-12-19 08:07:31'),
(36, 1, 22, '2020-12-20 05:11:47', '2020-12-20 05:11:47'),
(38, 1, 23, '2020-12-20 05:15:18', '2020-12-20 05:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe_address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `user_id`, `title`, `name`, `email`, `phone`, `line1`, `line2`, `postcode`, `state`, `city`, `country`, `describe_address`, `created_at`, `updated_at`) VALUES
(1, 4, 'gsdfgsfdg (34534)', 'Customer One', 'vendor@gmail.com', '(343) 453-4535', 'gsdfgsfdg', 'sfdgsdf', 34534, 'NJ', 'adsfadsf', '', 'adfs adfadsf', '2020-11-01 14:28:36', '2020-11-01 14:40:41'),
(2, 2, 'asdfasd (12564)', 'user1', 'user1@gmail.com', '(545) 454-5454', 'asdfasd', 'adsf', 12564, 'South Carolina (SC)', 'Chitagong', '', '123 Main Street, New York, NY 1003', '2020-11-01 14:45:18', '2020-11-01 14:45:18'),
(3, 11, 'address (16)', 'polash', 'polash.cse10@gmail.com', '8432374765', 'address', NULL, 16, 'ND', 'asdfasd', NULL, 'asdfasdf\r\nasd', '2020-12-22 05:54:05', '2020-12-22 05:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `logo_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `email`, `phone`, `line1`, `line2`, `postcode`, `state`, `city`, `address`, `logo_url`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HOBO', 'info@hobo.com', '704.661.4311', '3033 Phillips fairway dr', '', 28206, 'NC ', 'Charlotte ', '', 'user/assets/images/logos/logo-blue.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-11-01 21:04:22', '2020-11-01 21:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_providers`
--

INSERT INTO `social_providers` (`id`, `user_id`, `provider_id`, `provider`, `created_at`, `updated_at`) VALUES
(3, 9, '120818439824290', 'facebook', '2020-11-06 10:46:01', '2020-11-06 10:46:01'),
(4, 10, '3374610602628339', 'facebook', '2020-11-06 10:48:54', '2020-11-06 10:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `admin_comment` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `user_type`, `email_verified_at`, `password`, `is_active`, `admin_comment`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin John', 'admin@gmail.com', NULL, 'Super-admin', NULL, '$2y$10$.fJyGrc0TpuOm.OfAA9VJOM6TxNCSYtI8EjzIa/dLadCV1WeGsG9.', 1, NULL, 'Oz5lvWnqD59IONwCYv9exvSccnsElycXI3ulU6RQG5pefQFA868UDo6SZHWX', '2020-11-01 13:47:35', '2020-11-01 13:47:35'),
(2, 'user1', 'user1@gmail.com', NULL, 'customer', NULL, '$2y$10$NNE3KdQXuZq/WizCqKZmouvuQG4TH0MY2o.Ti8A.1OnT7I1RChoRm', 1, NULL, NULL, '2020-11-01 13:52:37', '2020-11-01 13:52:37'),
(3, 'admin1', 'admin1@gmail.com', NULL, 'admin', NULL, '$2y$10$L0uL7Gt9CKRs2GUXDdYc8epSoOxVXDUwox5ZCXoMCInKg72cUF3nC', 1, NULL, NULL, '2020-11-01 13:56:17', '2020-11-01 13:56:17'),
(4, 'Vendor One', 'vendor@gmail.com', NULL, 'Vendor', NULL, '$2y$10$8aLGuGRuJJxHfCgK4yYei.2LU.htru0LFPntgVOPfiOCUsKVpEjg.', 1, NULL, 'iVryzG9FyjAuVVgqR9VvH6D9tpsctXjPFRCch61T3SRca4I7VJgZs2fKTpkf', '2020-11-01 13:59:36', '2020-11-01 14:31:26'),
(5, 'Vendor Two', 'vendor2@gmail.com', NULL, 'Vendor', NULL, '$2y$10$2jost4MBN9dtIKPVbfh3Duxt1wmLX/jVqo8F/3VY/u8aenK2sIS8a', 1, NULL, NULL, '2020-11-01 16:08:35', '2020-11-01 16:13:47'),
(8, 'polash', 'test@test.com', NULL, 'Vendor', NULL, '$2y$10$ERsnnHBuVwQdYz3tIFBtD.ULPxLc4akfpSPwoPUyy0/owU18mfbIC', 1, NULL, NULL, '2020-11-05 13:27:29', '2020-11-05 13:35:28'),
(9, 'Sarder Kamruzzaman', 'cordialsoft.official@gmail.com', NULL, 'customer', NULL, '', 1, NULL, 'SNZ3YW8ERDj3h3I2mty3wc6ZHPUDoit1ZetZ0onmrKODoYq9pMqjFoiG6YxP', '2020-11-06 10:46:01', '2020-11-06 10:46:01'),
(10, 'Sarder Kamruzzaman Polash', 'kamruzzaman.palash88@gmail.com', NULL, 'customer', NULL, '', 1, NULL, '4hPxTWeg6J5rzgxo2nAY6mvhdYJFRRLhouBm0noMSYWtr0XaSI5ZwrhERpmF', '2020-11-06 10:48:54', '2020-11-06 10:48:54'),
(11, 'polash', 'polash.cse10@gmail.com', NULL, 'customer', NULL, '$2y$10$BW/j1ylZ6F2BXoMIiuyQnuQhYp4iNqe.bLhsBByUYUGxoOnOd0lOK', 1, NULL, NULL, '2020-12-22 05:16:27', '2020-12-22 05:16:27'),
(12, 'John Garg', 'garg@gmail.com', NULL, 'customer', NULL, '$2y$10$ntVpvGFn7briqrWJZd1GmuuRiLMXJs0FfM/PYXK2RURUe0mcqrgPm', 1, NULL, NULL, '2020-12-22 17:44:42', '2020-12-22 17:44:42'),
(13, 'kabila', 'kabila@bpint.com', NULL, 'customer', NULL, '$2y$10$vOuL77Uorp19lLyKaG5N2..KiJUuv3zvH9FUQ5dHxwu7KzEm9dSbm', 1, NULL, NULL, '2020-12-23 14:21:55', '2020-12-23 14:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe_address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `avatar`, `secondary_email`, `dob`, `nid`, `nid_image`, `phone`, `house`, `road`, `line1`, `line2`, `postcode`, `state`, `city`, `country`, `describe_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'user/profiles/avatar/November_2020/01/1604238858_1602579591_wissenschaftler-von-healy.jpg', 'admin@gmail.com', '1994-01-11', 'ER 3434R34', 'user/profiles/nid/November_2020/01/1604238629_1.jpg', '(234) 234-2344', NULL, NULL, 'AL1', 'AL2', 343434, 'NH', 'AL City', NULL, 'AL Full Give us your full location address so we can find you and deliver your order accurately.', '2020-11-01 13:47:35', '2020-11-01 13:54:18'),
(2, 2, 'user/profiles/avatar/November_2020/01/1604239375_a3bee3890d4039488fabcfd797e02fa6.jpg', 'admin23@gmail.com', '2020-11-29', '34adfasdf', 'user/profiles/nid/November_2020/01/1604239072_fashion-young-african-girl-black-260nw-1420132757.jpg', '(545) 454-5454', NULL, NULL, '123 Main Street', NULL, 1414, 'GA', 'Chitagong', NULL, '123 Main Street, New York, NY 1003', '2020-11-01 13:52:37', '2020-11-01 14:46:54'),
(3, 3, NULL, NULL, NULL, NULL, NULL, '(016) 255-3033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 13:56:17', '2020-11-01 13:56:17'),
(4, 4, 'user/profiles/avatar/November_2020/01/1604239603_1602590132_1601832702_black_man_impatient.jpg', 'vendor@gmail.com', '1995-02-07', 'ER234234234', 'user/profiles/nid/November_2020/01/1604239549_1.jpg', '(345) 345-345', NULL, NULL, 'CAL1', 'CAL2', 68878, 'IL', 'CAL City', NULL, 'CAL Address Details', '2020-11-01 13:59:36', '2020-11-01 14:46:02'),
(5, 5, 'user/profiles/avatar/November_2020/01/1604247039_1602579591_wissenschaftler-von-healy.jpg', 'vendor2@gmail.com', '1998-01-06', 'RE3234234', 'user/profiles/nid/November_2020/01/1604247114_1.jpg', '(345) 343-4535', NULL, NULL, 'afd', 'sdfg', 34534, 'IL', 'sfdg', NULL, 'sfgsfdgsfg', '2020-11-01 16:08:35', '2020-11-01 16:11:54'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 17:43:16', '2020-11-01 17:43:16'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 17:48:34', '2020-11-01 17:48:34'),
(8, 8, 'user/profiles/avatar/November_2020/05/1604604709_Screenshot_7.png', 'test@gmail.com', '2007-02-06', '2345678666', 'user/profiles/nid/November_2020/05/1604604593_3.jpg', '0000000000', NULL, NULL, 'add', 'nnn', 1212, 'ND', 'city doctor', NULL, 'address line 1, line 2\r\naddress 2 doctor', '2020-11-05 13:27:29', '2020-11-05 13:31:49'),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-06 10:46:01', '2020-11-06 10:46:01'),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-06 10:48:54', '2020-11-06 10:48:54'),
(11, 11, 'user/profiles/avatar/December_2020/22/1608614748_me.jpg', 'test@gmail.com', '1992-05-07', '111111111111111', 'user/profiles/nid/December_2020/22/1608614724_cal-2020.png', '0000000000', NULL, NULL, 'address 1', 'address 2', 1212, 'South Carolina (SC)', 'rajshahi', NULL, 'address line 1, line 2\r\naddress 2 doctor', '2020-12-22 05:16:27', '2020-12-22 05:25:48'),
(12, 12, 'user/profiles/avatar/December_2020/22/1608659112_lLJ67K_j_400x400.jpg', 'garg@gmail.com', '2020-12-09', '45345345', 'user/profiles/nid/December_2020/22/1608659151_lLJ67K_j_400x400.jpg', '(453) 453-4545', NULL, NULL, 'sfg', 'sfgsf', 34534, 'KS', 'sfdg', NULL, 'xvbxvb', '2020-12-22 17:44:42', '2020-12-22 17:45:51'),
(13, 13, 'user/profiles/avatar/December_2020/23/1608733370_download.jpg', 'kabila@bpint.com', '2020-12-08', '345345345', 'user/profiles/nid/December_2020/23/1608733411_download.jpg', '(343) 434-3434', NULL, NULL, 'ddf', 'dfgd', 34534, 'IL', 'dfgdfg', NULL, 'zvcxcvxcv', '2020-12-23 14:21:55', '2020-12-23 14:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `session_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 5, 2, NULL, 1, '2020-11-01 17:31:58', '2020-11-01 17:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_vendors`
--
ALTER TABLE `apply_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_categories`
--
ALTER TABLE `case_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_types`
--
ALTER TABLE `case_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_supports`
--
ALTER TABLE `customer_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_times`
--
ALTER TABLE `delivery_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_settings`
--
ALTER TABLE `ecom_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_supports`
--
ALTER TABLE `ecom_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_addresses`
--
ALTER TABLE `mail_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_sliders`
--
ALTER TABLE `main_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_letters_email_unique` (`email`);

--
-- Indexes for table `new_arrival_tabs`
--
ALTER TABLE `new_arrival_tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_refunds`
--
ALTER TABLE `payment_refunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_availabilities`
--
ALTER TABLE `product_availabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brand_category_maps`
--
ALTER TABLE `product_brand_category_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`);

--
-- Indexes for table `product_category_maps`
--
ALTER TABLE `product_category_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color_maps`
--
ALTER TABLE `product_color_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery_maps`
--
ALTER TABLE `product_gallery_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size_maps`
--
ALTER TABLE `product_size_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag_maps`
--
ALTER TABLE `product_tag_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_vendors`
--
ALTER TABLE `apply_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `case_categories`
--
ALTER TABLE `case_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_types`
--
ALTER TABLE `case_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_supports`
--
ALTER TABLE `customer_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_times`
--
ALTER TABLE `delivery_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ecom_settings`
--
ALTER TABLE `ecom_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecom_supports`
--
ALTER TABLE `ecom_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mail_addresses`
--
ALTER TABLE `mail_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main_sliders`
--
ALTER TABLE `main_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_arrival_tabs`
--
ALTER TABLE `new_arrival_tabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_refunds`
--
ALTER TABLE `payment_refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_availabilities`
--
ALTER TABLE `product_availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_brand_category_maps`
--
ALTER TABLE `product_brand_category_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_category_maps`
--
ALTER TABLE `product_category_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_color_maps`
--
ALTER TABLE `product_color_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_gallery_maps`
--
ALTER TABLE `product_gallery_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_size_maps`
--
ALTER TABLE `product_size_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_tag_maps`
--
ALTER TABLE `product_tag_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
