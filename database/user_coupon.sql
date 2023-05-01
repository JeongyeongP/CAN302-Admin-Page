-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 05:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `can302`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_coupon`
--

CREATE TABLE `user_coupon` (
  `user_coupon_id` int(11) NOT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_used` tinyint(1) DEFAULT 0,
  `obtained_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_coupon`
--

INSERT INTO `user_coupon` (`user_coupon_id`, `coupon_id`, `user_id`, `is_used`, `obtained_at`) VALUES
(1, 1, 1, 1, '2023-05-01 02:56:56'),
(2, NULL, 2, 0, '2023-05-01 02:59:43'),
(3, NULL, 3, 0, '2023-05-01 03:00:17'),
(4, NULL, 4, 0, '2023-05-01 03:00:21'),
(5, 4, 5, 1, '2023-05-01 02:57:21'),
(6, NULL, 6, 0, '2023-05-01 03:00:29'),
(7, NULL, 7, 0, '2023-05-01 03:00:36'),
(8, NULL, 8, 0, '2023-05-01 02:54:31'),
(9, 2, 9, 1, '2023-05-01 02:57:47'),
(10, NULL, 10, 0, '2023-05-01 03:00:41'),
(11, NULL, 11, 0, '2023-05-01 03:00:47'),
(12, NULL, 12, 0, '2023-05-01 02:54:31'),
(13, 5, 13, 1, '2023-05-01 02:58:11'),
(14, NULL, 14, 0, '2023-05-01 03:00:53'),
(15, NULL, 15, 0, '2023-05-01 02:54:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_coupon`
--
ALTER TABLE `user_coupon`
  ADD PRIMARY KEY (`user_coupon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_coupon`
--
ALTER TABLE `user_coupon`
  MODIFY `user_coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
