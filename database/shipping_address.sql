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
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `shipping_address_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address_line1` varchar(255) NOT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`shipping_address_id`, `user_id`, `address_line1`, `address_line2`, `postal_code`, `city`, `state`, `country`) VALUES
(1, 1, '1234 Elm St', 'Apt 567', '12345', 'New York', 'NY', 'USA'),
(2, 2, '5678 Oak St', 'Apt 890', '67890', 'Los Angeles', 'CA', 'USA'),
(3, 3, '7890 Maple St', NULL, '45678', 'Chicago', 'IL', 'USA'),
(4, 4, '2345 Cherry St', 'Apt 123', '78901', 'Houston', 'TX', 'USA'),
(5, 5, '1234 Apple St', 'Apt 141', '54321', 'Jakarta', 'JKT', 'IDA'),
(6, 6, '5678 Orange St', 'Apt 333', '09876', 'Bandung', 'BDG', 'IDA'),
(7, 7, '7890 Banana St', NULL, '87654', 'Jogjakarta', 'JJK', 'IDA'),
(8, 8, '2345 Lemon St', 'Apt 211', '10987', 'Bali', 'DPS', 'IDA'),
(9, 9, '1234 Blueberry St', 'Apt 566', '35765', 'Singapore', 'SG', 'SGA'),
(10, 10, '5678 Strawberry St', 'Apt 911', '98679', 'Kuala Lumpur', 'KL', 'MLY'),
(11, 11, '7890 Peach St', NULL, '41542', 'Hanoi', 'HNI', 'VIE'),
(12, 12, '2345 Lime St', 'Apt 098', '35685', 'Bangkok', 'BKK', 'THA'),
(13, 13, '1234 Milk St', 'Apt 445', '12782', 'Tokyo', 'TKY', 'JPN'),
(14, 14, '5678 Rose St', 'Apt 832', '76487', 'Kyoto', 'KYT', 'JPN'),
(15, 15, '2345 Daisy St', 'Apt 515', '87443', 'Shanghai', 'SHA', 'DRC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`shipping_address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `shipping_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
