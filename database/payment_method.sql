-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 07:29 PM
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
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `card_number` varchar(255) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `expired_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`payment_method_id`, `user_id`, `card_number`, `card_type`, `expired_at`) VALUES
(1, 1, '1234567812345678', 'Visa', '2024-06-29 17:00:00'),
(2, 2, '2345678923456789', 'Mastercard', '2023-09-29 17:00:00'),
(3, 3, '3456789034567890', 'Visa', '2025-12-30 17:00:00'),
(4, 4, '4567890145678901', 'Mastercard', '2023-07-30 17:00:00'),
(5, 5, '5415435134514543', 'Visa', '2024-05-28 17:00:00'),
(6, 6, '5686798759057742', 'Mastercard', '2023-08-28 17:00:00'),
(7, 7, '9764265247563897', 'Visa', '2025-11-27 17:00:00'),
(8, 8, '2576531669764974', 'Mastercard', '2023-06-21 17:00:00'),
(9, 9, '0193405684968250', 'Visa', '2024-04-03 17:00:00'),
(10, 10, '1943572389674180', 'Mastercard', '2025-07-06 17:00:00'),
(11, 11, '5104591746901674', 'Visa', '2024-12-31 17:00:00'),
(12, 12, '1094574831069147', 'Mastercard', '2023-06-07 17:00:00'),
(13, 13, '0129573910594310', 'Visa', '2027-09-08 17:00:00'),
(14, 14, '1029457941305941', 'Mastercard', '2023-02-01 17:00:00'),
(15, 15, '7819345784193578', 'Mastercard', '2023-04-04 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
