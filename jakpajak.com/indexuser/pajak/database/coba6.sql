-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 06:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba6`
--

-- --------------------------------------------------------

--
-- Table structure for table `pjkpenghasilan`
--

CREATE TABLE `pjkpenghasilan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gaji` bigint(20) NOT NULL,
  `persenpjk` int(11) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pjkpenghasilan`
--

INSERT INTO `pjkpenghasilan` (`id`, `nama`, `gaji`, `persenpjk`, `pajak`) VALUES
(1, 'ari', 1000000, 5, 50000),
(2, 'arief', 100000000, 15, 15000000),
(3, 'wahyu', 300000000, 25, 75000000),
(4, 'rahma', 650000000, 30, 195000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pjkpenghasilan`
--
ALTER TABLE `pjkpenghasilan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pjkpenghasilan`
--
ALTER TABLE `pjkpenghasilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
