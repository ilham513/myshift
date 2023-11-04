-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 11:08 PM
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
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `timestamp_absen` timestamp NOT NULL DEFAULT current_timestamp(),
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'ABDUL ROHMAN ', '3453453'),
(3, 'ADHI NURALANUDIN', '5675675'),
(4, 'ADITYA FRAYOGI ', '5675675'),
(5, 'AHMAD MUBAROK ', '5675675'),
(6, 'AHMAD NUR HIDAYATULLOH ', '5675675'),
(7, 'AHMAD RIPAI', '5675675'),
(8, 'AJI SATRIA', '5675675'),
(9, 'ALDI HARYADI', '5675675'),
(10, 'ANI AYULIA PUTRI ', '5675675'),
(11, 'ANJUN SAPUTRA ', '5675675'),
(12, 'ANNISA FEBRIANTI ', '5675675'),
(13, 'ANTO SUGIANTO', '5675675'),
(14, 'ARIE RIZALDI OKTORA ', '5675675'),
(15, 'ASRIYANI', '5675675'),
(16, 'BAKHTIARSO ', '5675675');

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
(25, 'Minggu', '20:00 - 22:30'),
(27, 'Sabtu', '09:00 - 10:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

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
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
