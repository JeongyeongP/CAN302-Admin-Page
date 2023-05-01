-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 04:36 AM
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
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `min_purchase` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expired_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL,
  `coupon_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_name`, `discount`, `min_purchase`, `created_at`, `expired_at`, `is_active`, `coupon_desc`) VALUES
(1, 'SPRING20', 20, '50.00', '2023-05-01 02:35:38', '2023-05-30 16:00:00', 1, 'Welcome Spring with a bang! Use coupon code SPRING20 at checkout and get 20% off your purchase when you spend $50 or more. Enjoy savings on our wide selection of products and get ready to embrace the new season in style. Hurry, this limited-time offer ends soon! Shop now and don\'t miss out on the chance to save big.'),
(2, 'SUMMER15', 15, '100.00', '2023-05-01 02:35:38', '2023-08-30 16:00:00', 1, 'Get ready for the hottest season of the year with our exclusive Summer Sale! Use coupon code SUMMER15 at checkout and get 15% off your purchase when you spend $100 or more. Stock up on all your seasonal favorites, from stylish swimwear to breathable cotton tees, and save big on everything you need to beat the heat. Don\'t wait - this offer won\'t last forever! Shop now and take advantage of the savings while you can.'),
(3, 'FALL10', 10, '0.00', '2023-05-01 02:35:38', '2023-11-29 16:00:00', 1, 'Fall is finally here, and so are the savings! Use coupon code FALL10 at checkout and get 10% off your purchase - no minimum required. Shop our latest collection of cozy sweaters, stylish boots, and other fall favorites and save on everything you need to look your best this season. Don\'t miss out on this limited-time offer! Shop now and take advantage of the savings while you can.'),
(4, 'WINTER25', 25, '200.00', '2023-05-01 02:35:38', '2024-02-27 16:00:00', 0, 'Baby, it\'s cold outside - but our Winter Sale is just heating up! Use coupon code WINTER25 at checkout and get 25% off your purchase when you spend $200 or more. Shop our cozy collection of winter essentials, from warm jackets to soft scarves, and save big on everything you need to stay stylish and snug all season long. Hurry - this offer won\'t last forever! Shop now and take advantage of the savings while you can.'),
(5, 'FIRST10', 10, '0.00', '2023-05-01 02:35:38', '2024-12-31 16:00:00', 1, 'Welcome to our community! Use coupon code FIRST10 at checkout and get 10% off your first purchase. Whether you\'re looking for stylish apparel or trendy accessories, our online store has everything you need to elevate your style. Don\'t miss out on this exclusive offer - shop now and take advantage of the savings.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
