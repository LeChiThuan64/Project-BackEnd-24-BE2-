-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 09:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `laravel`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `update_at` date NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

CREATE TABLE `category_product` (
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
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
(15, 26);

-- --------------------------------------------------------

--
-- Table structure for table `category_protype`
--

CREATE TABLE `category_protype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(30, 'p30.jpg', '30', NULL, NULL);

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

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `created_at`, `updated_at`, `price`) VALUES
(1, 'qui', 'Porro ea et molestiae et magni facilis atque provident.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '818'),
(2, 'non', 'Voluptatem voluptate possimus eligendi neque perferendis nam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '737'),
(3, 'dolorum', 'A iure non laboriosam repellendus itaque quidem dicta.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '353'),
(4, 'et', 'Facere repudiandae repudiandae consequatur est quos quae sint.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '647'),
(5, 'quos', 'Explicabo est omnis error ipsa nostrum.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '897'),
(6, 'enim', 'Illum autem id expedita architecto.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '223'),
(7, 'quibusdam', 'Ut quo in illum aliquam et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '581'),
(8, 'quia', 'Maxime qui dicta ut ad quisquam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '352'),
(9, 'sed', 'Voluptas recusandae sequi eos accusamus.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '865'),
(10, 'laborum', 'Quas minus architecto eos et delectus voluptatum ut.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '370'),
(11, 'praesentium', 'Quo dolorum neque autem sit omnis.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '999'),
(12, 'culpa', 'In ad et ad quas.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '964'),
(13, 'incidunt', 'Sit debitis voluptatum qui quam fugit.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '841'),
(14, 'quia', 'Dolorum tempore maxime enim dignissimos porro.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '807'),
(15, 'voluptatibus', 'Quos officia impedit ipsa voluptatum in maxime.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '970'),
(16, 'a', 'Dolorem eligendi autem saepe nam molestiae.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '873'),
(17, 'voluptatem', 'Non aut pariatur itaque nam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '543'),
(18, 'eligendi', 'Culpa est aut neque nihil veniam fugiat.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '370'),
(19, 'dolor', 'Aspernatur consequatur est minima eaque soluta expedita velit.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '479'),
(20, 'facere', 'Mollitia officiis fugit et eius dolorem totam.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '340'),
(21, 'quod', 'Aut accusantium odio ipsam dicta fugit ea beatae.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '552'),
(22, 'illum', 'Atque voluptas aut velit provident sapiente pariatur minima aut.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '274'),
(23, 'veniam', 'Reprehenderit hic dolor impedit inventore dolor aut eos.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '127'),
(24, 'qui', 'Nemo labore est rerum repellat doloribus voluptatibus labore.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '70'),
(25, 'molestias', 'Veritatis earum eligendi ut tempore eius.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '322'),
(26, 'fugiat', 'Corporis ut autem voluptatibus qui et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '739'),
(27, 'quibusdam', 'Non ut et perspiciatis ratione.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '73'),
(28, 'sint', 'Laboriosam deleniti aut doloremque et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '491'),
(29, 'nihil', 'Aperiam id atque at dicta quis et.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '461'),
(30, 'et', 'Dolore molestias architecto voluptates quis.', '2024-04-15 10:09:07', '2024-04-15 10:09:07', '67');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `userType` int(20) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `userType`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin1', 'admin1@mail', NULL, '$2y$12$vSkQG4dc7IAWLSIiXw8U9ehP7139HY61EAB11iOl/gXhUYijScTqS', 0, NULL, '2024-04-21 03:49:31', '2024-04-21 03:49:31'),
(4, 'user1', 'user1@mail', NULL, '$2y$12$xStpuYXL4/utXEj.3Nm2iOOif5xoLxew6ZsYrgNjxep/nh95grJQa', 0, NULL, '2024-04-21 03:51:37', '2024-04-21 03:51:37'),
(5, 'Tung', 'tung@mail', NULL, '$2y$12$n4J0npFOJHwhSEIvi22kXeJ6HPhfdMREIIUFXfsqP8EV2kmTP1PFm', 0, NULL, '2024-04-21 07:08:19', '2024-04-21 07:08:19'),
(6, '1', '1@mail', NULL, '$2y$12$Ks8erOCVuH7aCrbzCHfsr.nLtZ6V5hCG9FuE0xOrzh0sVfeg1oQhS', 0, NULL, '2024-04-21 23:25:08', '2024-04-21 23:25:08'),
(7, '2', '2@mail', NULL, '$2y$12$2dqIarER0B75c4z4w6Qt8.ZQmy8c7fjp9/j5DOHL35cO2mmsGDtqq', 0, NULL, '2024-04-21 23:29:16', '2024-04-21 23:29:16'),
(8, '3', '3@mail', NULL, '$2y$12$WEDTdJWmr.0uDgtQ.GZobuGaoMMfMIXpALsnm/Gmz/jFf17V3xS1O', 0, NULL, '2024-04-21 23:36:37', '2024-04-21 23:36:37'),
(9, '4', '4@mail', NULL, '$2y$12$91dQ0YKRbMj5yrjj0.a2V.QfPNVKkFOM8iYHbqgshE0GhLSj8AxA6', 0, NULL, '2024-04-21 23:38:31', '2024-04-21 23:38:31'),
(10, 'h', 'h@mail', NULL, '$2y$12$9PRhzzGjz6ENFSdGWFk03efcerBdd4O/bDq0Fvcb5mpb4Kxb16V/O', 1, NULL, '2024-04-22 00:07:52', '2024-04-22 00:07:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_protype`
--
ALTER TABLE `category_protype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category_protype`
--
ALTER TABLE `category_protype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
