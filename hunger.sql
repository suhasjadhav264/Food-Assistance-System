-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 09:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hunger`
--

-- --------------------------------------------------------

--
-- Table structure for table `needy`
--

CREATE TABLE `needy` (
  `id` int(11) NOT NULL,
  `needy_name` varchar(255) NOT NULL,
  `needy_address` varchar(255) NOT NULL,
  `needy_gender` varchar(55) NOT NULL,
  `needy_age` int(50) NOT NULL,
  `aadhaar` varchar(12) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `needy`
--

INSERT INTO `needy` (`id`, `needy_name`, `needy_address`, `needy_gender`, `needy_age`, `aadhaar`, `city`, `pincode`) VALUES
(4, 'ankita', 'heaven', 'f', 19, '', '', ''),
(6, 'gouri', 'belgaum', 'f', 17, '', '', ''),
(7, 'gouri', 'belgaum', 'f', 17, '', '', ''),
(8, 'gouri', 'belgaum', 'f', 17, '', '', ''),
(9, 'gouri', 'belgaum', 'f', 17, '', '', ''),
(10, 'nisha', 'sayadri nagar', 'f', 15, '', '', ''),
(11, 'nisha', 'mantesh nagar', 'f', 5, '', '', ''),
(12, 'jkkj', 'nlnln', 'm', 9, '', '', ''),
(13, 'nisha', 'mantesh nagar', 'f', 15, '', '', ''),
(15, 'hbjkbhjbh', 'kljboihgoi', 'm', 20, '654654165165', 'Belgaum', '591102'),
(16, 'mnjkn', 'lnlnjl', 'm', 67, '9869876', 'kjbj,kb', '876987569'),
(17, 'lknjlkn', 'lnjlkn', 'm', 78, '7869867', 'jbvj,b', '8769876');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(255) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_address` varchar(255) NOT NULL,
  `res_phone` bigint(255) NOT NULL,
  `res_city` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `res_name`, `res_address`, `res_phone`, `res_city`, `res_email`, `username`, `password`) VALUES
(5, 'cosmo kadhae', 'college road, belgavi', 7492958275, 'belgaum', 'cosmo@gmail.com', '', ''),
(6, 'garden coart', 'college road, belgavi', 7357392274, 'belgaum', 'gardencoart@gmail.com', '', ''),
(7, 'the cafe club', 'tilakwadi, belgavi ', 9845274527, 'belgaum', 'cafeclub@gmail.com', '', ''),
(8, 'l;ljh', 'l;kjk', 98976, '.m,nmbn', 'mnbn@gmail.com', '', ''),
(9, 'My New Restaurant', 'nhj, jjjnuhyg', 8073114167, 'Belagavi', 'nagarajbbbb@gmail.com', 'nagaraj116', '123'),
(10, 'Suhas New Restaurant', 'Belagavi', 8899665588, 'Belgaum', 'suhas@gmail.com', 'suhas1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `needy`
--
ALTER TABLE `needy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `needy`
--
ALTER TABLE `needy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
