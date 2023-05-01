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
-- Table structure for table `refund_order`
--

CREATE TABLE `refund_order` (
  `refund_order_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `refund_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `refund_status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refund_order`
--

INSERT INTO `refund_order` (`refund_order_id`, `order_id`, `refund_at`, `refund_status`) VALUES
(1, 1, '2023-04-28 13:36:55', 0),
(2, 2, '2023-04-28 13:36:55', 1),
(3, 3, '2023-04-30 09:50:12', 0),
(4, 4, '2023-04-30 09:50:12', 0),
(5, 5, '2023-04-30 09:50:12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `refund_order`
--
ALTER TABLE `refund_order`
  ADD PRIMARY KEY (`refund_order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `refund_order`
--
ALTER TABLE `refund_order`
  MODIFY `refund_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
