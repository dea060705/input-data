-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 06:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_awlr`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_awlr`
--

CREATE TABLE `monitoring_awlr` (
  `No` int(10) NOT NULL,
  `TMA` int(50) NOT NULL,
  `Suhu` int(10) NOT NULL,
  `Teg_solar` int(50) NOT NULL,
  `ANS_solar` int(50) NOT NULL,
  `Teg_battery` int(50) NOT NULL,
  `ANS_battery` int(50) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring_awlr`
--

INSERT INTO `monitoring_awlr` (`No`, `TMA`, `Suhu`, `Teg_solar`, `ANS_solar`, `Teg_battery`, `ANS_battery`, `Date`) VALUES
(2, 123, 24, 12, 0, 12, 0, '2022-01-10 09:57:36'),
(3, 2, 2, 2, 2, 2, 2, '2022-01-10 10:49:21'),
(4, 1, 1, 1, 1, 1, 1, '2022-01-10 11:09:41'),
(5, 123, 1, 12, 1, 12, 1, '2022-01-10 11:10:59'),
(6, 1, 1, 1, 1, 1, 1, '2022-01-11 14:05:43'),
(7, 1, 1, 1, 1, 1, 1, '2022-01-12 14:49:30'),
(8, 3, 4, 5, 6, 5, 6, '2022-01-13 14:54:28'),
(9, 8, 9, 0, 1, 0, 1, '2022-01-14 10:43:51'),
(10, 4, 9, 1, 0, 1, 0, '2022-01-17 10:19:36'),
(11, 10, 11, 12, 13, 12, 13, '2022-01-18 09:15:10'),
(12, 8, 9, 6, 7, 6, 7, '2022-01-19 13:15:43'),
(13, 8, 7, 6, 5, 6, 5, '2022-01-20 09:18:07'),
(14, 0, 1, 9, 2, 9, 2, '2022-01-21 10:51:44'),
(15, 4, 9, 1, 4, 1, 4, '2022-01-22 07:20:53'),
(16, 0, 5, 4, 6, 4, 6, '2022-01-22 07:21:11'),
(17, 54, 49, 14, 2, 14, 2, '2022-01-24 09:38:58'),
(18, 20, 3, 1, 6, 1, 6, '2022-01-25 09:47:45'),
(19, 3, 7, 4, 6, 4, 6, '2022-01-28 09:25:13'),
(20, 10, 11, 12, 13, 12, 13, '2022-01-28 09:25:28'),
(21, 2, 20, 21, 22, 21, 22, '2022-01-28 09:25:44'),
(22, 10, 11, 12, 13, 12, 13, '2022-01-28 10:49:53'),
(23, 89, 98, 89, 98, 89, 98, '2022-01-31 09:25:54'),
(24, 4, 5, 6, 7, 6, 7, '2022-02-03 10:06:01'),
(25, 11, 12, 13, 14, 13, 14, '2022-02-03 10:06:20'),
(26, 11, 12, 13, 14, 13, 14, '2022-02-07 09:16:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring_awlr`
--
ALTER TABLE `monitoring_awlr`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoring_awlr`
--
ALTER TABLE `monitoring_awlr`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
