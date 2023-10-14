-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 08:32 AM
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
-- Database: `ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-10-08-010724', 'App\\Database\\Migrations\\CreateUserTable', 'default', 'App', 1696736935, 1),
(2, '2023-10-08-032649', 'App\\Database\\Migrations\\CreateCategoryTable', 'default', 'App', 1696736935, 1),
(3, '2023-10-08-044439', 'App\\Database\\Migrations\\CreateProductTable', 'default', 'App', 1696740818, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(5) UNSIGNED NOT NULL,
  `product` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `sku` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `price` bigint(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product`, `category`, `sku`, `model`, `created_at`, `price`) VALUES
(1, 'mobile', 'dd', '1', 'SAMSUNG', '2023-10-08 11:36:06', 1200000),
(2, 'mobile', 'dd', '1', 'SAMSUNG', '2023-10-08 11:38:17', 1200000),
(3, 'pc', 'eletronices', '23', 'APPLE', '2023-10-08 11:52:04', 124444),
(4, 'mouse', 'ele', '1213131', 'HP', '2023-10-08 12:09:05', 400),
(5, 'mobile', 'ele', '12324', 'HP', '2023-10-08 12:10:04', 123214),
(6, 'sf', 'aser', 'wer', 'wer', '2023-10-08 12:32:16', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(5) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `password`) VALUES
(1, 'farhana', 'admin@gmail.com', '2023-10-07 05:16:05', '$2y$10$SaM2Sg1qFXRM8R4qIGgTtuoXITDJLLs6KZq9zRm/Now3m.l.HadyS'),
(2, 'farhana', 'admin123@gmail.com', '2023-10-07 05:16:39', '$2y$10$RA1e7Ycsn.CsPW047.dgMuplsiO7W1SPn1XW1n99qhlYWiUGzZzvW'),
(3, 'farhana akter', 'farhana@gmail.com', '2023-10-07 05:22:40', '$2y$10$wIBxeDSsUiTb4SIw..lyFeszg66E0emzZUE6oQFPdTPQ8ZF9qFg2e'),
(4, 'farhana akter lucky', 'farhanawdpf@gmail.com', '2023-10-07 05:26:04', '$2y$10$wOXw71GEGPZoyUhzFr7ITu4d8cpmnNfbApP8NRTlcO9IIffVXnXR6'),
(5, 'farhana akter tttttt', 'adminyy@gmail.com', '2023-10-07 05:29:05', '$2y$10$PTK4SGWGbDDsGiJHQAMlNOHeVnAh5aWWPP3B6LZ.z5e7zlyJjY7R6'),
(6, 'farhana akter lucky y', 'admin3@gmail.com', '2023-10-07 06:11:30', '$2y$10$Oa7NAAxS7/sHgouuTgKzAu0fAAZEF3qmaHiHOmQQRU7gBuukAVcuu'),
(7, 'sheuly', 'admin1234@gmail.com', '2023-10-07 07:05:25', '$2y$10$Bja/L6P8h1A5euHFPX434OjQ6.Mc85tl7FrFJSiPEB.0PMbnAiEue'),
(8, 'farhana', 'farhana9@gmail.com', '2023-10-08 05:04:53', '$2y$10$X0/JTnGlYuVPMIFDQzoCTu2a5KeqlKVStJdtMEjnhJPAeQfmG1Jr6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
