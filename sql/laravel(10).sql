-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2024 at 11:31 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `total` int NOT NULL,
  `user_id` int NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_product`
--

DROP TABLE IF EXISTS `bill_product`;
CREATE TABLE IF NOT EXISTS `bill_product` (
  `bill_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `create_at`, `update_at`) VALUES
(1, 'báo mới', '<p>đqdqwd</p>', '2024-04-24', '2024-04-24'),
(2, 'báo mới', '<p>đqdqwd</p>', '2024-04-24', '2024-04-24'),
(3, 'báo mới', '<p>đqdqwd</p>', '2024-04-24', '2024-04-24'),
(4, 'usa', '<h2>The US quietly shipped long-range ATACMS missiles to Ukraine</h2><p>By <a href=\"https://www.reuters.com/authors/steve-holland/\">Steve Holland</a> and <a href=\"https://www.reuters.com/authors/idrees-ali/\">Idrees Ali</a></p><p>April 25, 20242:15 AM GMT+7Updated 34 min ago</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:707/469;\" src=\"https://cloudfront-us-east-2.images.arcpublishing.com/reuters/JEWVTWY7OBIT7LRVJP5NX5577M.jpg\" alt=\"Handout of United States and South Korean troops utilizing the Army Tactical Missile System (ATACMS) and South Korea\'s Hyunmoo Missile II, fire missiles into the waters of the East Sea, off South Korea\" srcset=\"https://www.reuters.com/resizer/v2/JEWVTWY7OBIT7LRVJP5NX5577M.jpg?auth=e408fa8a9973a4e28412e1e045315d9f050b37b24e85e485f807dc3b2b404535&amp;width=480&amp;quality=80 480w,https://www.reuters.com/resizer/v2/JEWVTWY7OBIT7LRVJP5NX5577M.jpg?auth=e408fa8a9973a4e28412e1e045315d9f050b37b24e85e485f807dc3b2b404535&amp;width=640&amp;quality=80 640w,https://www.reuters.com/resizer/v2/JEWVTWY7OBIT7LRVJP5NX5577M.jpg?auth=e408fa8a9973a4e28412e1e045315d9f050b37b24e85e485f807dc3b2b404535&amp;width=720&amp;quality=80 720w,https://www.reuters.com/resizer/v2/JEWVTWY7OBIT7LRVJP5NX5577M.jpg?auth=e408fa8a9973a4e28412e1e045315d9f050b37b24e85e485f807dc3b2b404535&amp;width=960&amp;quality=80 960w,https://www.reuters.com/resizer/v2/JEWVTWY7OBIT7LRVJP5NX5577M.jpg?auth=e408fa8a9973a4e28412e1e045315d9f050b37b24e85e485f807dc3b2b404535&amp;width=1080&amp;quality=80 1080w,https://www.reuters.com/resizer/v2/JEWVTWY7OBIT7LRVJP5NX5577M.jpg?auth=e408fa8a9973a4e28412e1e045315d9f050b37b24e85e485f807dc3b2b404535&amp;width=1200&amp;quality=80 1200w\" sizes=\"100vw\" width=\"707\" height=\"469\"></figure><p>United States and South Korean troops utilizing the Army Tactical Missile System (ATACMS) and South Korea\'s Hyunmoo Missile II, fire missiles into the waters of the East Sea, off South Korea, July 5, 2017. 8th United States Army/Handout via REUTERS/File Photo <a href=\"https://www.reutersagency.com/en/licensereuterscontent/?utm_medium=rcom-article-media&amp;utm_campaign=rcom-rcp-lead\"><i>Purchase Licensing Rights, opens new tab</i></a></p><p>WASHINGTON, April 24 (Reuters) - The United States in recent weeks secretly shipped long-range missiles to Ukraine for use in its battle to fight off <a href=\"https://www.reuters.com/topic/event/ukraine-crisis/\">Russian invaders</a>, and Ukraine has now used them twice, a U.S. official said on Wednesday.</p><p>The missiles were contained in a <a href=\"https://www.reuters.com/business/aerospace-defense/us-preparing-new-weapons-package-ukraine-officials-2024-03-12/\">$300 million military aid</a> package for Ukraine that U.S. President Joe Biden approved on March 12, said the U.S. official, speaking on condition of anonymity. The official would not say how many of the missiles were sent.</p><p>Advertisement · Scroll to continue</p><p>Report this ad</p><p>White House national security adviser Jake Sullivan, at a briefing for reporters, confirmed that a \"significant number\" of the missiles had been sent to Ukraine and said \"we will send more.\"</p><p>He said Ukraine has committed to only use the weapons inside Ukraine, not in Russia.</p><p>Some of the missiles were contained in a <a href=\"https://www.reuters.com/world/us/after-battle-with-republicans-biden-sign-ukraine-aid-package-2024-04-24/\">$1 billion</a> weapons package for Ukraine that President Joe Biden approved on Wednesday, Sullivan said.</p><p>Advertisement · Scroll to continue</p><p>&nbsp;</p><p>The missiles were used for the first time in the early hours of April 17, launched against a Russian airfield in Crimea that was about 165 km (103 miles) from the Ukrainian front lines, the official said.</p><p>The official said Ukraine used the weapon a second time overnight against Russian forces in southeastern Ukraine.</p><p>Whether to send the Army Tactical Missile Systems (ATACMS) with a range up to 300 km was a <a href=\"https://www.reuters.com/world/atacms-us-may-send-ukraine-their-cluster-bomb-payloads-2023-10-19/\">subject of debate</a> within the Biden administration for months. Mid-range ATACMS were supplied last September.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>The Pentagon initially opposed the long-range missile deployment, fearing the loss of the missiles from the American stockpile would hurt U.S. military readiness. There were also concerns that Ukraine would use them to attack targets deep inside Russia.</p><p>Russia\'s use of North Korean-supplied long-range ballistic missiles against Ukraine in December and January, despite U.S. public and private warnings not to do so, led to a change in heart, the U.S. official said.</p><p>Advertisement · Scroll to continue</p><p>Report this ad</p><p>Also a factor in U.S. decision-making was Russia\'s targeting of Ukraine\'s critical infrastructure, the official said.</p><p>\"We warned Russia about those things,\" the official said. \"They renewed their targeting.\"</p><p>In late January the U.S. military found a way to satisfy their concerns about military readiness, which enabled the administration to move forward. They began acquiring new missiles coming off the Lockheed-Martin <a href=\"https://www.reuters.com/markets/companies/LMT.N\">(LMT.N), opens new tab</a> production line.</p><p>Biden met with his national security team in mid-February and agreed to accept the unanimous recommendation of his advisers to send the missiles to Ukraine. Involved in the discussion were national security adviser Jake Sullivan, Defense Secretary Lloyd Austin, Secretary of State Antony Blinken and Joint Chiefs of Staff Chairman C.Q. Brown.</p><p>The challenge at that point was to figure out how to pay for the missiles. The United States had exhausted all of its funding options and congressional gridlock stymied further aid.</p><p>An opportunity arose in March, when several Pentagon contracts came in under bid. Biden was able to use the difference to send $300 million in assistance to Ukraine.</p><p>Biden told his team to include the long-range ATACMS in this funding package, but to do so secretly in order to maintain operational security and the element of surprise for Ukraine, the official said.</p><p>Get weekly news and analysis on the U.S. elections and how it matters to the world with the newsletter On the Campaign Trail. Sign up <a href=\"https://www.reuters.com/newsletters/on-the-campaign-trail/\">here.</a></p><p>Reporting By Steve Holland and Idrees Ali; Additional reporting by Phil Stewart; Editing by Heather Timmons, Stephen Coates and Alistair Bell</p>', '2024-04-24', '2024-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `name`, `description`, `price`, `quantity`, `updated_at`, `created_at`) VALUES
(6, 16, 1, 'qui', 'Porro ea et molestiae et magni facilis atque provident.', '818', 1, '2024-04-29', '2024-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` int NOT NULL,
  `update_at` date NOT NULL,
  `create_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `update_at`, `create_at`) VALUES
(1, 'men', 0, '0000-00-00', '0000-00-00'),
(2, 'wonmen', 0, '0000-00-00', '0000-00-00'),
(3, 'kids', 0, '0000-00-00', '0000-00-00'),
(4, 'electronic', 0, '0000-00-00', '0000-00-00'),
(5, 'other', 0, '0000-00-00', '0000-00-00'),
(6, 'clothing', 1, '0000-00-00', '0000-00-00'),
(7, 'clothing', 2, '0000-00-00', '0000-00-00'),
(8, 'shoes', 1, '0000-00-00', '0000-00-00'),
(9, 'shoes', 2, '0000-00-00', '0000-00-00'),
(10, 'accessory', 1, '0000-00-00', '0000-00-00'),
(11, 'accessory', 2, '0000-00-00', '0000-00-00'),
(12, 'phone', 4, '0000-00-00', '0000-00-00'),
(13, 'tablet', 4, '0000-00-00', '0000-00-00'),
(14, 'laptop', 4, '0000-00-00', '0000-00-00'),
(15, 'watch', 4, '0000-00-00', '0000-00-00'),
(16, 'electronic accessory', 4, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `category_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(2, 1),
(7, 1),
(1, 7),
(6, 7),
(1, 8),
(2, 8),
(6, 8),
(7, 8),
(2, 12),
(7, 12),
(2, 13),
(7, 13),
(1, 24),
(6, 24),
(2, 25),
(7, 25),
(2, 27),
(7, 27),
(1, 5),
(2, 5),
(8, 5),
(9, 5),
(1, 6),
(2, 6),
(8, 6),
(9, 6),
(2, 22),
(9, 22),
(1, 23),
(2, 23),
(8, 23),
(9, 23),
(1, 28),
(2, 28),
(8, 28),
(9, 28),
(4, 2),
(15, 2),
(4, 26),
(15, 26),
(2, 51),
(2, 52),
(1, 53);

-- --------------------------------------------------------

--
-- Table structure for table `category_protype`
--

DROP TABLE IF EXISTS `category_protype`;
CREATE TABLE IF NOT EXISTS `category_protype` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint UNSIGNED NOT NULL,
  `type_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `blog_id` int NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_name`, `blog_id`, `create_at`) VALUES
(1, 'bnnjj6jyj', 'nhan', 4, '2024-04-28 16:10:50'),
(2, 'cegvdvfv', 'nhan', 4, '2024-04-28 16:11:37'),
(3, 'li7uf8iyv0u9ohyufyuguihiokpl[;', 'nhan', 4, '2024-04-28 16:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'p1.jpg', '1', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(2, 'p2.jpg', '2', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(3, 'p3.jpg', '3', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(4, 'p4.jpg', '4', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(5, 'p5.jpg', '5', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(6, 'p6.jpg', '6', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(7, 'p7.jpg', '7', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(8, 'p8.jpg', '8', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(9, 'p9.jpg', '9', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(10, 'p10.jpg', '10', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(11, 'p11.jpg', '11', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(12, 'p12.jpg', '12', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(13, 'p13.jpg', '13', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(14, 'p14.jpg', '14', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(15, 'p15.jpg', '15', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(16, 'p16.jpg', '16', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(17, 'p17.jpg', '17', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(18, 'p18.jpg', '18', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(19, 'p19.jpg', '19', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(20, 'p20.jpg', '20', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(21, 'p21.jpg', '21', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(22, 'p22.jpg', '22', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(23, 'p23.jpg', '23', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(24, 'p24.jpg', '24', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(25, 'p25.jpg', '25', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(26, 'p26.jpg', '26', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(27, 'p27.jpg', '27', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(28, 'p28.jpg', '28', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(29, 'p29.jpg', '29', '2024-04-15 10:07:37', '2024-04-15 10:07:37'),
(30, 'p30.jpg', '30', NULL, NULL),
(31, '3rrfefef.png', '52', '2024-04-24 09:08:23', '2024-04-24 09:08:23'),
(32, 'chiến thuật.png', '53', '2024-04-24 09:16:27', '2024-04-24 09:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_08_175312_product', 1),
(6, '2024_04_11_020143_category', 1),
(7, '2024_04_15_164235_image', 1),
(8, '2024_04_20_074258_create_protypes_table', 2),
(9, '2014_10_12_100000_create_password_resets_table', 3),
(10, '2022_04_15_130146_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `created_at`, `updated_at`, `price`, `quantity`, `status`, `size`, `feature`, `discount`) VALUES
(1, 'qui', 'Porro ea et molestiae et magni facilis atque provident.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '818', 100, '', '', '', 0),
(2, 'non', 'Voluptatem voluptate possimus eligendi neque perferendis nam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '737', 100, '', '', '', 0),
(3, 'dolorum', 'A iure non laboriosam repellendus itaque quidem dicta.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '353', 100, '', '', '', 0),
(4, 'et', 'Facere repudiandae repudiandae consequatur est quos quae sint.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '647', 100, '', '', '', 0),
(5, 'quos', 'Explicabo est omnis error ipsa nostrum.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '897', 100, '', '', '', 0),
(6, 'enim', 'Illum autem id expedita architecto.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '223', 100, '', '', '', 0),
(7, 'quibusdam', 'Ut quo in illum aliquam et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '581', 100, '', '', '', 0),
(8, 'quia', 'Maxime qui dicta ut ad quisquam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '352', 100, '', '', '', 0),
(9, 'sed', 'Voluptas recusandae sequi eos accusamus.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '865', 100, '', '', '', 0),
(10, 'laborum', 'Quas minus architecto eos et delectus voluptatum ut.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '370', 100, '', '', '', 0),
(11, 'praesentium', 'Quo dolorum neque autem sit omnis.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '999', 100, '', '', '', 0),
(12, 'culpa', 'In ad et ad quas.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '964', 100, '', '', '', 0),
(13, 'incidunt', 'Sit debitis voluptatum qui quam fugit.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '841', 100, '', '', '', 0),
(14, 'quia', 'Dolorum tempore maxime enim dignissimos porro.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '807', 100, '', '', '', 0),
(15, 'voluptatibus', 'Quos officia impedit ipsa voluptatum in maxime.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '970', 100, '', '', '', 0),
(16, 'a', 'Dolorem eligendi autem saepe nam molestiae.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '873', 100, '', '', '', 0),
(17, 'voluptatem', 'Non aut pariatur itaque nam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '543', 100, '', '', '', 0),
(18, 'eligendi', 'Culpa est aut neque nihil veniam fugiat.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '370', 100, '', '', '', 0),
(19, 'dolor', 'Aspernatur consequatur est minima eaque soluta expedita velit.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '479', 100, '', '', '', 0),
(20, 'facere', 'Mollitia officiis fugit et eius dolorem totam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '340', 100, '', '', '', 0),
(21, 'quod', 'Aut accusantium odio ipsam dicta fugit ea beatae.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '552', 100, '', '', '', 0),
(22, 'illum', 'Atque voluptas aut velit provident sapiente pariatur minima aut.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '274', 100, '', '', '', 0),
(23, 'veniam', 'Reprehenderit hic dolor impedit inventore dolor aut eos.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '127', 100, '', '', '', 0),
(24, 'qui', 'Nemo labore est rerum repellat doloribus voluptatibus labore.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '70', 100, '', '', '', 0),
(25, 'molestias', 'Veritatis earum eligendi ut tempore eius.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '322', 100, '', '', '', 0),
(26, 'fugiat', 'Corporis ut autem voluptatibus qui et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '739', 100, '', '', '', 0),
(27, 'quibusdam', 'Non ut et perspiciatis ratione.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '73', 100, '', '', '', 0),
(28, 'sint', 'Laboriosam deleniti aut doloremque et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '491', 100, '', '', '', 0),
(29, 'nihil', 'Aperiam id atque at dicta quis et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '461', 100, '', '', '', 0),
(30, 'et', 'Dolore molestias architecto voluptates quis.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '67', 100, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rating` int NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `content`, `product_id`, `user_name`, `created_at`) VALUES
(19, 5, '10 điểm', 29, 'nhan', '2024-04-30 12:22:03'),
(18, 3, 'xXxXXCCccc', 22, 'nhan', '2024-04-30 12:20:26'),
(17, 4, 'fwfwfwfw', 21, 'nhan', '2024-04-30 12:17:49'),
(16, 2, 'tệ', 24, 'nhan', '2024-04-30 11:59:59'),
(38, 3, 'f4uklukuytrew', 21, 'nguyennhan3358', '2024-04-30 19:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` int NOT NULL,
  `is_active` int NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `userType`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin1', 'admin1@mail', NULL, '$2y$12$vSkQG4dc7IAWLSIiXw8U9ehP7139HY61EAB11iOl/gXhUYijScTqS', 0, 0, NULL, '2024-04-21 03:49:31', '2024-04-21 03:49:31'),
(4, 'user1', 'user1@mail', NULL, '$2y$12$xStpuYXL4/utXEj.3Nm2iOOif5xoLxew6ZsYrgNjxep/nh95grJQa', 0, 0, NULL, '2024-04-21 03:51:37', '2024-04-21 03:51:37'),
(5, 'Tung', 'tung@mail', NULL, '$2y$12$n4J0npFOJHwhSEIvi22kXeJ6HPhfdMREIIUFXfsqP8EV2kmTP1PFm', 0, 0, NULL, '2024-04-21 07:08:19', '2024-04-21 07:08:19'),
(6, '1', '1@mail', NULL, '$2y$12$Ks8erOCVuH7aCrbzCHfsr.nLtZ6V5hCG9FuE0xOrzh0sVfeg1oQhS', 0, 0, NULL, '2024-04-21 23:25:08', '2024-04-21 23:25:08'),
(7, '2', '2@mail', NULL, '$2y$12$2dqIarER0B75c4z4w6Qt8.ZQmy8c7fjp9/j5DOHL35cO2mmsGDtqq', 0, 0, NULL, '2024-04-21 23:29:16', '2024-04-21 23:29:16'),
(8, '3', '3@mail', NULL, '$2y$12$WEDTdJWmr.0uDgtQ.GZobuGaoMMfMIXpALsnm/Gmz/jFf17V3xS1O', 0, 0, NULL, '2024-04-21 23:36:37', '2024-04-28 08:25:14'),
(9, '4', '4@mail', NULL, '$2y$12$91dQ0YKRbMj5yrjj0.a2V.QfPNVKkFOM8iYHbqgshE0GhLSj8AxA6', 0, 0, NULL, '2024-04-21 23:38:31', '2024-04-28 08:25:21'),
(10, 'h', 'h@mail', NULL, '$2y$12$9PRhzzGjz6ENFSdGWFk03efcerBdd4O/bDq0Fvcb5mpb4Kxb16V/O', 1, 0, NULL, '2024-04-22 00:07:52', '2024-04-28 08:24:49'),
(11, 'nh', 't@mail', NULL, '$2y$12$OvDQ.klnpd.hdWym2Ph19O.H/QMpEjZ9sz4Q0N1Pqc/56Ufc2gzS6', 1, 1, NULL, '2024-04-22 01:47:39', '2024-04-28 08:26:42'),
(12, 'oppo', 'oppo@mail', NULL, '$2y$12$2M5IOHpa/lOghPaAQ.OfM.M70s87I0GLKt5bhiBLlwT1.UwiRPZHy', 1, 1, NULL, '2024-04-23 02:16:43', '2024-04-28 08:26:29'),
(13, 'samsung', 'samsung@mail', NULL, '$2y$12$1uoa1w4jEi54w1E451bxAuXAA/89JOzUFCe0Uk7hFRrUQQsngkHJm', 0, 1, NULL, '2024-04-28 07:48:39', '2024-04-28 08:26:46'),
(14, 'iphone', 'iphone@mail', NULL, '$2y$12$Hx133VFJV6toAHfO2yFvsO7fg2WLMqRvsqnLH3tBMTbHhQOKmiddW', 0, 1, NULL, '2024-04-28 08:28:00', '2024-04-28 08:28:00'),
(15, 'Huawei', 'Huawei@mail', NULL, '$2y$12$hpLlh6LhVBKLSDwQQc4jN.bWvWSyNzMuTTTm/80F6OIeF52KvM6tm', 0, 1, NULL, '2024-04-28 08:29:28', '2024-04-28 08:32:19'),
(16, 'nhan', 'nhan@mail', NULL, '$2y$12$UswI4CWqbTXeN0aS7b6hD.qkLMooy/uxpCmebroyqmnzndkcCJDiG', 0, 1, NULL, '2024-04-28 09:10:11', '2024-04-28 09:10:11'),
(17, 'nguyennhan', 'nguyennhan@mail', NULL, '$2y$12$gNv/3sg/6SOlrPHifPb74OA.SjvBedXxjPmoGH/3cTYmmRrdXXnYm', 0, 1, NULL, '2024-04-29 07:42:48', '2024-04-29 07:42:48'),
(18, 'nguyennhan3358', 'nhan3358@mail', NULL, '$2y$12$eS.pDgELsS4B8Ia4L2O68uH4BEgOlOBbmtoXICv1HVDYlMjEYJcSu', 0, 1, NULL, '2024-04-30 10:45:57', '2024-04-30 10:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_like_product`
--

DROP TABLE IF EXISTS `user_like_product`;
CREATE TABLE IF NOT EXISTS `user_like_product` (
  `user_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_like_product`
--

INSERT INTO `user_like_product` (`user_id`, `product_id`) VALUES
(11, 21),
(11, 11),
(11, 22),
(11, 24),
(16, 21);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
