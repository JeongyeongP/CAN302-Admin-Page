-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 07:41 PM
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
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ordered_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_method_id` int(11) DEFAULT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `payment_status` int(11) DEFAULT 0,
  `paid_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `fulfillment_status` enum('Awaits fulfillment','In Delivery','Shipped','Delivered') DEFAULT NULL,
  `is_cancelled` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `ordered_at`, `payment_method_id`, `shipping_address_id`, `total_price`, `coupon_id`, `payment_status`, `paid_at`, `fulfillment_status`, `is_cancelled`) VALUES
(1, 1, '2023-04-30 17:41:29', 1, 1, '1000.00', 1, 1, '2023-04-30 17:41:29', 'Shipped', 0),
(2, 2, '2023-04-30 17:41:29', 2, 2, '800.00', 2, 0, '2023-04-30 17:41:29', 'Awaits fulfillment', 0),
(3, 3, '2023-04-30 17:41:29', 3, 3, '50.00', 3, 1, '2023-04-30 17:41:29', 'Awaits fulfillment', 0),
(4, 4, '2023-04-30 17:41:29', 4, 4, '150.00', 4, 0, '2023-04-30 17:41:29', 'In Delivery', 0),
(5, 5, '2023-04-30 17:41:29', 5, 5, '200.00', 5, 1, '2023-04-30 17:41:29', 'Shipped', 0),
(6, 6, '2023-04-30 17:41:29', 6, 6, '400.00', NULL, 0, '2023-04-30 17:41:29', 'Awaits fulfillment', 0),
(7, 7, '2023-04-30 17:41:29', 7, 7, '600.00', NULL, 1, '2023-04-30 17:41:29', 'Awaits fulfillment', 0),
(8, 8, '2023-04-30 17:41:29', 8, 8, '900.00', NULL, 0, '2023-04-30 17:41:29', 'In Delivery', 0),
(9, 9, '2023-04-30 17:41:29', 9, 9, '700.00', NULL, 1, '2023-04-30 17:41:29', 'Shipped', 0),
(10, 10, '2023-04-30 17:41:29', 10, 10, '500.00', NULL, 0, '2023-04-30 17:41:29', 'Awaits fulfillment', 0),
(11, 11, '2023-04-30 17:41:29', 11, 11, '300.00', 1, 1, '2023-04-30 17:41:29', 'Awaits fulfillment', 0),
(12, 12, '2023-04-30 17:41:29', 12, 12, '100.00', 2, 0, '2023-04-30 17:41:29', 'In Delivery', 0),
(13, 13, '2023-04-30 17:41:29', 13, 13, '250.00', 3, 1, '2023-04-30 17:41:29', 'Shipped', 0),
(14, 14, '2023-04-30 17:41:29', 14, 14, '350.00', 4, 0, '2023-04-30 17:41:29', 'Awaits fulfillment', 0),
(15, 15, '2023-04-30 17:41:29', 15, 15, '450.00', 5, 1, '2023-04-30 17:41:29', 'In Delivery', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
