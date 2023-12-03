-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 12:14 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rinasalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `jasa` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `jasa`, `nama`, `telp`, `tgl`, `jam`, `total`, `bayar`, `upload`) VALUES
(1, 'Gunting + Cuci, Blow Biasa / Variasi', 'abc', '021', '2023-12-03', '08:00', 512, 'tunai', ''),
(2, 'Gunting + Cuci, Blow Biasa / Variasi', 'a', '02144', '2023-12-03', '08:00', 123456, 'tunai', 'bukti.png'),
(3, 'Gunting + Cuci, Blow Biasa / Variasi, Kriting, Sanggul / Sisir, Cat Hitam / Warna', 'Andika Nurtamin', '085713327687', '2023-12-03', '08:00', 0, 'tunai', 'bukti.png'),
(4, 'Gunting + Cuci, Blow Biasa / Variasi', 'Andika2', '0857', '2023-12-03', '08:00', 0, 'tunai', 'bukti.png'),
(5, 'Gunting + Cuci, Blow Biasa / Variasi', 'aa', '1144', '2023-12-03', '08:00', 0, 'tunai', 'bukti.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
