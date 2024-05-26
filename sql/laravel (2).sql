-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 08:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
(8, '2024_04_20_074258_create_protypes_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
