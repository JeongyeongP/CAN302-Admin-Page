-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2023 at 10:25 PM
-- Server version: 10.4.21-MariaDB
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
-- Table structure for table `user_regist`
--

CREATE TABLE `user_regist` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_regist`
--

INSERT INTO `user_regist` (`user_id`, `first_name`, `last_name`, `email`, `password`, `is_admin`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '482c811da5d5b4bc6d497ffa98491e38', 1),
(2, 'Jane', 'Doe', 'jane.doe@example.com', 'b29d2953c56077a5ef8b2ad193ec240f', 0),
(3, 'Mark', 'Smith', 'mark.smith@example.com', '7d347cf0ee68174a3588f6cba31b8a67', 0),
(4, 'Tinker', 'Bell', 'tinker.bell@example.com', '7c6a180b36896a0a8c02787eeafb0e4c', 1),
(5, 'Jack', 'Sparrow', 'jack.sparrow@example.com', '482c811da5d5b4bc6d497ffa98491e38', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_regist`
--
ALTER TABLE `user_regist`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_regist`
--
ALTER TABLE `user_regist`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
