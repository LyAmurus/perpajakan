-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 02:19 PM
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
-- Database: `perpajakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pajak`
--

CREATE TABLE `data_pajak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gaji` bigint(11) NOT NULL,
  `persentase` int(11) NOT NULL,
  `pajak` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pajak`
--

INSERT INTO `data_pajak` (`id`, `nama`, `gaji`, `persentase`, `pajak`) VALUES
(39, 'Vanica', 1000000, 5, 50000),
(41, 'Mori', 500000000, 30, 150000000),
(42, 'Valdy', 50000000, 15, 7500000),
(44, 'raka', 260000000, 25, 65000000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pbb`
--

CREATE TABLE `data_pbb` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanah` int(11) NOT NULL,
  `bangunan` int(11) NOT NULL,
  `harga_tanah` bigint(20) NOT NULL,
  `harga_bangunan` bigint(20) NOT NULL,
  `njop` bigint(20) NOT NULL,
  `njkp` bigint(20) NOT NULL,
  `pbb` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pbb`
--

INSERT INTO `data_pbb` (`id`, `nama`, `tanah`, `bangunan`, `harga_tanah`, `harga_bangunan`, `njop`, `njkp`, `pbb`) VALUES
(1, 'wahyu', 300, 240, 10000000, 5000000, 4200000000, 840000000, 4200000),
(3, 'raka', 500, 400, 7500000, 6500000, 6350000000, 1270000000, 6350000);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `nik` int(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `lahir` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pajak`
--
ALTER TABLE `data_pajak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pbb`
--
ALTER TABLE `data_pbb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pajak`
--
ALTER TABLE `data_pajak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `data_pbb`
--
ALTER TABLE `data_pbb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
