-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 09:01 AM
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
(6, 'farhana akter lucky y', 'admin3@gmail.com', '2023-10-07 06:11:30', '$2y$10$Oa7NAAxS7/sHgouuTgKzAu0fAAZEF3qmaHiHOmQQRU7gBuukAVcuu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
