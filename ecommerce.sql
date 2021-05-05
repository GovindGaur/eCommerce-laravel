-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 12:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2021_04_16_094930_create_users_table', 1),
(2, '2021_04_17_171252_create_products_table', 2),
(3, '2021_04_18_164436_create_cart_table', 3),
(4, '2021_04_23_113443_create_order_table', 4),
(5, '2021_04_23_114013_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `user_name`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 'Pending', '', 'cash', 'Pending', 'Khimser', NULL, NULL),
(2, 6, 1, 'Pending', '', 'cash', 'Pending', 'Khimser', NULL, NULL),
(3, 7, 1, 'Pending', 'Govind', 'cash', 'Pending', 'Khimse', NULL, NULL),
(4, 9, 1, 'Pending', 'Govind', 'cash', 'Pending', 'Khimser', NULL, NULL),
(5, 7, 1, 'Pending', 'Hitesh', 'cash', 'Pending', 'Balotra', NULL, NULL),
(6, 10, 1, 'Pending', 'Hitesh', 'cash', 'Pending', 'Balotra', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `categery`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'Lg', 10000, 'This is Smart Mobile', 'LG', 'https://rukminim1.flixcart.com/image/416/416/kkbh8cw0/mobile/f/2/o/k42-lmk420ymw-lg-original-imafzp3yrjcmapsz.jpeg?q=70', NULL, NULL),
(6, 'Samsung', 12000, 'This is Smart Mobile', 'Samsung a8', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmxBCZvfsA6sruJiDWUBA7k88rGkWmCKZSXr4JSQl8iocKKHAWKxN9ziBcXqIusOUjCYk&usqp=CAU', NULL, NULL),
(7, 'Samsung', 1200, 'This is Best Mobile', 'Samsung A30', 'https://freepngimg.com/thumb/samsung_mobile_phone/5-2-samsung-mobile-phone-png-hd.png', NULL, NULL),
(9, 'Lg', 10000, 'This is Smart Mobile', 'LG', 'https://rukminim1.flixcart.com/image/416/416/kkbh8cw0/mobile/f/2/o/k42-lmk420ymw-lg-original-imafzp3yrjcmapsz.jpeg?q=70', NULL, NULL),
(10, 'Samsung', 12000, 'This is Smart Mobile', 'Samsung a8', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmxBCZvfsA6sruJiDWUBA7k88rGkWmCKZSXr4JSQl8iocKKHAWKxN9ziBcXqIusOUjCYk&usqp=CAU', NULL, NULL),
(11, 'Samsung', 1200, 'This is Best Mobile', 'Samsung A30', 'https://freepngimg.com/thumb/samsung_mobile_phone/5-2-samsung-mobile-phone-png-hd.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Govind', 'gaur@gmail.com', '$2y$10$sd.18obmeaph6t3QcPbQGeoa85jMC2zxMtX1C5zOYuRIU6r0chmgi', NULL, NULL),
(2, 'Govind Gaur', 'gaurgovind1263@gmail.com', '$2y$10$2CaS50akhopEUUAhWG4YzuuRmzXCVjfYpJMdp5Y9mtMXYR9.EUiCy', NULL, NULL),
(3, 'Govind', 'jeetgaur.jg96@gmail.com', '$2y$10$OQWHlSfWkHuZw1bO9MIaAOGrmf6r.GttwG5v/xpe0JlgzQBXvdQ.2', '2021-04-23 08:07:47', '2021-04-23 08:07:47'),
(4, 'govind', 'ram@gmail.com', '$2y$10$b/hdaZpbXodooVakE8YMZ.wQ4R0lBvWB8eiddzOI5st3CNwiAXst.', '2021-04-23 08:08:41', '2021-04-23 08:08:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
