-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 08:22 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `customer_id`, `date`, `number`, `created_at`, `updated_at`) VALUES
(1, 11, '2017-06-29', 10, '2017-06-26 21:04:38', '2017-06-26 21:04:38'),
(7, 17, '2017-06-28', 12, '2017-06-26 21:20:16', '2017-06-26 21:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(21, 'Salads', 'Salads', '2017-06-21 03:26:26', '2017-06-21 03:26:26'),
(22, 'Main disher', 'Mon an chinh', '2017-06-21 23:56:01', '2017-06-21 23:56:01'),
(23, 'Starters', 'Starters for deal', '2017-06-21 23:56:22', '2017-06-21 23:56:22'),
(26, 'An sang', 'dung de an sang', '2017-06-26 02:09:18', '2017-06-26 02:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `number` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `birthday`, `status`, `number`, `created_at`, `updated_at`) VALUES
(11, 'Nguyen Van A', 'bonv@gmail.com', '2017-06-22', 1, 10, '2017-06-26 21:04:38', '2017-06-26 22:30:00'),
(17, 'user', 'user1@gmail.com', '2017-06-13', 0, 12, '2017-06-26 21:20:16', '2017-06-26 22:29:49'),
(22, 'NguyenVanBo', 'bonv@gmail.com', NULL, 0, 1, '2017-06-26 23:20:21', '2017-06-26 23:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `price`, `type`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Olive Special', 'Refreshing traditional cucumber and garlic yoghurt dip.', 5.99, 0, 21, '2017-06-22 00:23:57', '2017-06-22 00:23:57'),
(4, 'Aubergine Salad', 'Aubergine Salad', 5.25, 1, 21, '2017-06-22 00:24:29', '2017-06-22 00:24:29'),
(5, 'Cornish Mackerel', 'Refreshing traditional cucumber and garlic yoghurt dip.', 3.99, 0, 22, '2017-06-22 00:25:08', '2017-06-22 00:25:08'),
(6, 'Roast Lamb Salad', 'Pureed eggplant,garlic,green pepper and tomato dip', 5.5, 0, 22, '2017-06-22 00:25:38', '2017-06-22 00:25:38'),
(7, 'Houloumi', 'Refreshing traditional cucumber and garlic yoghurt dip', 3.99, 0, 23, '2017-06-22 00:25:57', '2017-06-22 00:25:57'),
(8, 'Spinach Pie', 'Pureed eggplant,garlic,green pepper and tomato dip', 5.5, 1, 23, '2017-06-22 00:26:20', '2017-06-22 00:26:20'),
(9, 'an sang', 'dung de an sang', 5.5, 0, 22, '2017-06-26 02:07:17', '2017-06-26 02:07:17'),
(10, 'awn toi', 'dung de an toi', 5.5, 0, 23, '2017-06-26 02:09:39', '2017-06-26 22:20:45'),
(11, 'mon an sang 2', 'an sang', 1.39, 0, 26, '2017-06-26 02:28:55', '2017-06-26 02:28:55'),
(12, 'mon an sang 10', 'dung de an sang', 5.5, 0, 26, '2017-06-26 21:55:44', '2017-06-26 21:55:44');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2017_06_20_071228_create_category_table', 2),
(6, '2017_06_20_072321_create_categories_table', 3),
(7, '2017_06_21_074554_create_item_table', 4),
(9, '2017_06_21_081655_create_items_table', 5),
(17, '2017_06_21_103347_create_customer_table', 6),
(18, '2017_06_22_070229_create_item_table', 7),
(19, '2017_06_22_070740_create_customer_table', 8),
(20, '2017_06_22_070918_creat_item_table', 8),
(21, '2017_06_26_122417_create_book_table', 9);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Van Bo', 'bonv@gmail.com', '$2a$04$.u4bKXxclEc0NEaMDX4ZBO5MT88t2DI.0cgUHAVLLqxL2WyckN4qO', 'https://photo2.tinhte.vn/data/avatars/m/2322/2322701.jpg?1491890072', 'xaSAgSkGh0LHtYSemVZLtZii6YTrYVmq3eLr0vsezWIUsbHYJxFkCprrzd5J', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_category_id_foreign` (`category_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
