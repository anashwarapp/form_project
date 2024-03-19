-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 11:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiintern_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `finalss`
--

CREATE TABLE `finalss` (
  `id` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `Hobby` varchar(60) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirm_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalss`
--

INSERT INTO `finalss` (`id`, `first_name`, `last_name`, `building_name`, `street_address`, `pin_code`, `phone_number`, `email`, `gender`, `qualification`, `Hobby`, `password`, `confirm_password`) VALUES
(10, 'anashwara', 'Pp', 'anaswaram', 'Poolayullaparambath (ho)', '673506', '8861735997', 'anashwarapp@gmail.com', 'on', 'UG', 'singing', '999', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finalss`
--
ALTER TABLE `finalss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finalss`
--
ALTER TABLE `finalss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
