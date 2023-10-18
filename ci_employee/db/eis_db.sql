-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 09:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
  `id` int(30) NOT NULL,
  `employee_code` varchar(50) NOT NULL,
  `fullname` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`id`, `employee_code`, `fullname`, `status`, `date_created`, `date_updated`) VALUES
(1, 'UHA-18538', 'Smith, John D Jr.', 1, '2021-11-22 14:39:57', NULL),
(3, 'EOQ-86689', 'Blake, Claire C ', 1, '2021-11-23 13:40:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_meta`
--

CREATE TABLE `employee_meta` (
  `employee_id` int(11) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_meta`
--

INSERT INTO `employee_meta` (`employee_id`, `meta_field`, `meta_value`) VALUES
(1, 'img_path', 'avatar/1.jpg'),
(1, 'firstname', 'John'),
(1, 'middlename', 'D'),
(1, 'lastname', 'Smith'),
(1, 'suffix', 'Jr.'),
(1, 'gender', 'Male'),
(1, 'email', 'jsmith@sample.com'),
(1, 'contact', '09123456789'),
(1, 'address', 'Sample Address Pnly'),
(1, 'dob', '1997-06-23'),
(1, 'civil_status', 'Married'),
(1, 'employee_code', 'UHA-18538'),
(1, 'department', 'Information Technology Department'),
(1, 'position', 'Web Developer'),
(1, 'date_hired', '2015-06-23'),
(1, 'end_date', '2024-11-25'),
(1, 'monthly_salary', '50000'),
(1, 'type', 'Job Order'),
(3, 'firstname', 'Claire'),
(3, 'middlename', 'C'),
(3, 'lastname', 'Blake'),
(3, 'suffix', ''),
(3, 'gender', 'Female'),
(3, 'email', 'cblake@sample.com'),
(3, 'contact', '09546998762'),
(3, 'address', 'Sample Address only'),
(3, 'dob', '1997-10-14'),
(3, 'civil_status', 'Married'),
(3, 'employee_code', 'EOQ-86689'),
(3, 'department', 'Marketing Department'),
(3, 'position', 'Graphic Designer'),
(3, 'date_hired', '1997-10-14'),
(3, 'end_date', ''),
(3, 'monthly_salary', '30000'),
(3, 'type', 'Permanent'),
(3, 'img_path', 'avatar/3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `name`, `username`, `password`, `date_created`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', '2021-11-23 14:52:43'),
(2, 'John Smith', 'jsmith', '1254737c076cf867dc53d60a0364f38e', '2021-11-23 14:52:43'),
(3, 'Claire Blake', 'cblake', '4744ddea876b11dcb1d169fadf494418', '2021-11-23 14:52:43'),
(4, 'Mike Williams', 'mwilliams', '3cc93e9a6741d8b40460457139cf8ced', '2021-11-23 14:52:43'),
(5, 'Samantha Lou', 'slou', '1ed1255790523a907da869eab7306f5a', '2021-11-23 15:56:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_meta`
--
ALTER TABLE `employee_meta`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_meta`
--
ALTER TABLE `employee_meta`
  ADD CONSTRAINT `employee_meta_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
