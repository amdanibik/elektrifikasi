-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 06:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elektrifikasi`
--
CREATE DATABASE IF NOT EXISTS `elektrifikasi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `elektrifikasi`;

-- --------------------------------------------------------

--
-- Table structure for table `catat`
--

CREATE TABLE `catat` (
  `idcatat` int(10) NOT NULL,
  `iddesa` int(10) NOT NULL,
  `idtahun` int(10) NOT NULL,
  `idstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catat`
--

INSERT INTO `catat` (`idcatat`, `iddesa`, `idtahun`, `idstatus`) VALUES
(2, 4, 2, 1),
(3, 5, 2, 2),
(6, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `desaid` int(5) UNSIGNED NOT NULL,
  `kecamatan_id` int(5) NOT NULL,
  `kabupaten_id` int(11) NOT NULL,
  `namadesa` varchar(255) NOT NULL,
  `jenisdesa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`desaid`, `kecamatan_id`, `kabupaten_id`, `namadesa`, `jenisdesa`) VALUES
(3, 1, 1, 'Komolom', 'Desa'),
(4, 6, 5, 'Girimulyo', 'Kelurahan'),
(5, 1, 1, 'Kumbis', 'Desa'),
(6, 1, 1, 'Kalilam', 'Desa');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(5) UNSIGNED NOT NULL,
  `namakabupaten` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `namakabupaten`, `jenis`) VALUES
(1, 'Merauke', 'Kabupaten'),
(2, 'Jayawijaya', 'Kabupaten'),
(4, 'Jayapura', 'Kabupaten'),
(5, 'Nabire', 'Kabupaten'),
(6, 'Jayapura', 'Kota');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatanid` int(5) UNSIGNED NOT NULL,
  `kabupaten_id` int(5) NOT NULL,
  `namakecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatanid`, `kabupaten_id`, `namakecamatan`) VALUES
(1, 1, 'Kimaam'),
(2, 1, 'Tabonji'),
(3, 2, 'Wesaput'),
(4, 2, 'Popugoba'),
(6, 5, 'Nabire');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(9, '2021-09-23-165804', 'App\\Database\\Migrations\\Kabupaten', 'default', 'App', 1632633370, 1),
(10, '2021-09-23-165845', 'App\\Database\\Migrations\\Kecamatan', 'default', 'App', 1632633370, 1),
(11, '2021-09-23-165850', 'App\\Database\\Migrations\\Desa', 'default', 'App', 1632633370, 1),
(12, '2021-09-23-165943', 'App\\Database\\Migrations\\Tahun', 'default', 'App', 1632633370, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusid` int(10) NOT NULL,
  `namastatus` varchar(255) NOT NULL,
  `listrik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusid`, `namastatus`, `listrik`) VALUES
(1, 'Desa Berlistrik PLN', 'Ya'),
(2, 'Desa Berlistrik Non PLN', 'Ya'),
(3, 'Desa Belum Berlistrik', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `tahunid` int(5) UNSIGNED NOT NULL,
  `tahun` int(5) NOT NULL,
  `capaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`tahunid`, `tahun`, `capaian`) VALUES
(2, 2019, '30 %'),
(3, 2020, '40 %'),
(4, 2021, '50 %'),
(5, 2022, '70 %');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catat`
--
ALTER TABLE `catat`
  ADD PRIMARY KEY (`idcatat`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desaid`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatanid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusid`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`tahunid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catat`
--
ALTER TABLE `catat`
  MODIFY `idcatat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `desaid` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatanid` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `tahunid` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
