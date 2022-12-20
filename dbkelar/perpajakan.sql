-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 02:12 AM
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
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hjm` bigint(20) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_mobil1`
--

INSERT INTO `data_kendaraan_mobil1` (`id`, `username`, `nama`, `hjm`, `njkb`, `pajak`) VALUES
(5, 'mori', 'Budi Setiadi', 150000000, 14000000, 15773000);

-- --------------------------------------------------------

--
-- Table structure for table `data_kendaraan_mobil5`
--

CREATE TABLE `data_kendaraan_mobil5` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_mobil5`
--

INSERT INTO `data_kendaraan_mobil5` (`id`, `username`, `nama`, `njkb`, `pajak`) VALUES
(4, 'mori', 'Sapi', 12000000, 783000);

-- --------------------------------------------------------

--
-- Table structure for table `data_kendaraan_motor1`
--

CREATE TABLE `data_kendaraan_motor1` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hjm` bigint(20) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_motor1`
--

INSERT INTO `data_kendaraan_motor1` (`id`, `username`, `nama`, `hjm`, `njkb`, `pajak`) VALUES
(6, 'mori', 'Suprapto', 12000000, 11000000, 1705000);

-- --------------------------------------------------------

--
-- Table structure for table `data_kendaraan_motor5`
--

CREATE TABLE `data_kendaraan_motor5` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `njkb` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kendaraan_motor5`
--

INSERT INTO `data_kendaraan_motor5` (`id`, `username`, `nama`, `njkb`, `pajak`) VALUES
(4, 'mori', 'Arief', 15000000, 610000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pajak`
--

CREATE TABLE `data_pajak` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gaji` bigint(11) NOT NULL,
  `persentase` int(11) NOT NULL,
  `pajak` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pajak`
--

INSERT INTO `data_pajak` (`id`, `username`, `nama`, `gaji`, `persentase`, `pajak`) VALUES
(47, 'wahyu', 'wahyu', 15000000, 5, 750000),
(49, 'mori', 'raka', 40000000, 5, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pbb`
--

CREATE TABLE `data_pbb` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
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

INSERT INTO `data_pbb` (`id`, `username`, `nama`, `tanah`, `bangunan`, `harga_tanah`, `harga_bangunan`, `njop`, `njkp`, `pbb`) VALUES
(4, 'mori', 'mori', 500, 400, 10000000, 6500000, 7600000000, 1520000000, 7600000),
(5, 'mori', 'rahma', 300, 240, 7500000, 5000000, 3450000000, 690000000, 3450000);

-- --------------------------------------------------------

--
-- Table structure for table `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `namapt` varchar(255) NOT NULL,
  `bruto` bigint(20) NOT NULL,
  `pkp` bigint(20) NOT NULL,
  `pph` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id`, `username`, `namapt`, `bruto`, `pkp`, `pph`) VALUES
(5, 'mori', 'untirta', 4500000000, 500000000, 55000000),
(6, 'mori', 'ugm', 40000000000, 4000000000, 827200000),
(7, 'mori', 'ui', 60000000000, 6000000000, 1320000000);

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
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `username`, `password`, `email`, `fname`, `lname`, `nik`, `adress`, `lahir`, `foto`) VALUES
(2, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'wahyu@wahyu', 'wahyu', 'wahyu', 0, '', '0000-00-00', ''),
(3, 'mori', 'b16cc7d4cca6d42a4cfbcddb5879c448', 'mori@ELYSIA', 'mori GE', 'VANICA', 27, 'DIMENSI LAIN', '2022-03-03', '');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_kendaraan_mobil5`
--
ALTER TABLE `data_kendaraan_mobil5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kendaraan_motor1`
--
ALTER TABLE `data_kendaraan_motor1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_kendaraan_motor5`
--
ALTER TABLE `data_kendaraan_motor5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_pajak`
--
ALTER TABLE `data_pajak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `data_pbb`
--
ALTER TABLE `data_pbb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
