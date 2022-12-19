-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 07:42 PM
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
-- Table structure for table `data_kendaraan_mobil1`
--

CREATE TABLE `data_kendaraan_mobil1` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hjm` bigint(20) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_mobil1`
--

INSERT INTO `data_kendaraan_mobil1` (`id`, `nama`, `hjm`, `njkb`, `pajak`) VALUES
(1, 'Raka', 145000000, 140000000, 17793000);

-- --------------------------------------------------------

--
-- Table structure for table `data_kendaraan_mobil5`
--

CREATE TABLE `data_kendaraan_mobil5` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_mobil5`
--

INSERT INTO `data_kendaraan_mobil5` (`id`, `nama`, `njkb`, `pajak`) VALUES
(1, 'Mori', 120000000, 2943000);

-- --------------------------------------------------------

--
-- Table structure for table `data_kendaraan_motor1`
--

CREATE TABLE `data_kendaraan_motor1` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hjm` bigint(20) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_motor1`
--

INSERT INTO `data_kendaraan_motor1` (`id`, `nama`, `hjm`, `njkb`, `pajak`) VALUES
(4, 'Suprapto', 14000000, 12000000, 1925000);

-- --------------------------------------------------------

--
-- Table structure for table `data_kendaraan_motor5`
--

CREATE TABLE `data_kendaraan_motor5` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_motor5`
--

INSERT INTO `data_kendaraan_motor5` (`id`, `nama`, `njkb`, `pajak`) VALUES
(1, 'Arief', 10000000, 510000);

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
-- Table structure for table `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` int(11) NOT NULL,
  `namapt` varchar(255) NOT NULL,
  `bruto` bigint(20) NOT NULL,
  `pkp` bigint(20) NOT NULL,
  `pph` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id`, `namapt`, `bruto`, `pkp`, `pph`) VALUES
(1, 'untirta', 4500000000, 500000000, 55000000),
(2, 'ui', 40000000000, 4000000000, 827200000),
(4, 'yhahaha', 5000000000, 500000000, 57200000);

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
-- Indexes for table `data_kendaraan_mobil1`
--
ALTER TABLE `data_kendaraan_mobil1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kendaraan_mobil5`
--
ALTER TABLE `data_kendaraan_mobil5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kendaraan_motor1`
--
ALTER TABLE `data_kendaraan_motor1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kendaraan_motor5`
--
ALTER TABLE `data_kendaraan_motor5`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
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
-- AUTO_INCREMENT for table `data_kendaraan_mobil1`
--
ALTER TABLE `data_kendaraan_mobil1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_kendaraan_mobil5`
--
ALTER TABLE `data_kendaraan_mobil5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_kendaraan_motor1`
--
ALTER TABLE `data_kendaraan_motor1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kendaraan_motor5`
--
ALTER TABLE `data_kendaraan_motor5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
