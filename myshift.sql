-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 06:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshift`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(255) NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL,
  `waktu_sewa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nama_penyewa`, `waktu_sewa`) VALUES
(1, 'M.U', 'Rabu, 08:00 - 10:30'),
(2, 'MEDI', 'Jumat, 08:00 - 10:30'),
(3, 'Bina R.', 'Senin, 14:00 - 16:30'),
(4, 'Vortuna', 'Senin, 19:00 - 21:30 '),
(5, 'Susis PBSI', 'Selasa, 11:00 - 13:30'),
(6, 'Madank', 'Senin, 11:00 - 13:30'),
(7, 'RW', 'Senin, 08:00 - 12:30'),
(8, 'Bima', 'Selasa, 08:00 - 10:30'),
(9, 'Bina R. Mom', 'Sabtu, 08:00 - 10:30'),
(10, 'Pesona', 'Kamis, 08:00 - 10:30'),
(11, 'Jono PBSI', 'Rabu, 11:00 - 13:30'),
(12, 'Udin PBSI', 'Kamis, 11:00 - 13:30');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id`, `nama`, `no_telp`) VALUES
(3, 'RW', '081204197641'),
(4, 'Madank', '081354726722'),
(5, 'Bina R.', '081497326218'),
(6, 'Vortuna', '085705665696'),
(7, 'Bima', '089236441689'),
(8, 'M.U', '081552963242'),
(9, 'Pesona', '089967291906'),
(10, 'MEDI', '-'),
(11, 'Bina R. Mom', '-'),
(13, 'Susis PBSI', '089986647267'),
(14, 'Jono PBSI', '08994775636'),
(15, 'Udin PBSI', '089987152236');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `hari`, `jam`) VALUES
(1, 'Senin', '08:00 - 12:30'),
(2, 'Senin', '11:00 - 13:30'),
(3, 'Senin', '14:00 - 16:30'),
(4, 'Senin', '19:00 - 21:30 '),
(5, 'Selasa', '08:00 - 10:30'),
(6, 'Rabu', '08:00 - 10:30'),
(7, 'Kamis', '08:00 - 10:30'),
(8, 'Jumat', '08:00 - 10:30'),
(9, 'Sabtu', '08:00 - 10:30'),
(10, 'Selasa', '11:00 - 13:30'),
(11, 'Rabu', '11:00 - 13:30'),
(12, 'Kamis', '11:00 - 13:30'),
(13, 'Jumat', '11:00 - 13:30'),
(14, 'Sabtu', '11:00 - 13:30'),
(15, 'Selasa', '14:00 - 16:30'),
(16, 'Rabu', '14:00 - 16:30'),
(17, 'Kamis', '14:00 - 16:30'),
(18, 'Jumat', '14:00 - 16:30'),
(19, 'Sabtu', '14:00 - 16:30'),
(20, 'Selasa', '19:00 - 21:30'),
(21, 'Rabu', '19:00 - 21:30'),
(22, 'Kamis', '19:00 - 21:30'),
(23, 'Jumat', '19:00 - 21:30'),
(24, 'Sabtu', '19:00 - 21:30'),
(25, 'Minggu', '20:00 - 22:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `waktu_sewa` (`waktu_sewa`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
