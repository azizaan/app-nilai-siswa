-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 02:37 PM
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
-- Database: `nilai_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mapel`
--

CREATE TABLE `nilai_mapel` (
  `id_nilai` int(11) NOT NULL,
  `NIS` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_mapel`
--

INSERT INTO `nilai_mapel` (`id_nilai`, `NIS`, `nama`, `mapel`, `nilai`) VALUES
(14, '4058', 'Muhammad dwi cuhyo', 'ipa', '90'),
(15, '1045', 'Farel Farizi Purnomosasi', 'ipa', '90'),
(17, '6234', 'Maulana Zidan ', 'ipa', '90'),
(18, '2412', 'Ahnaf Farhan Bima Arya', 'ipa', '60'),
(19, '4217', 'Annisa Febrianti', 'ipa', '80'),
(21, '3641', 'Ananda Harfiana', 'ipa', '40'),
(22, '5214', 'Indah Yulia', 'ipa', '60'),
(40, '5312', 'Jihan Prahasti Saharani', 'ipa', '90'),
(41, '4219', 'Faiq Razzan Afifie', 'mtk', '80'),
(42, '6821', 'Adhi Rifki Bayu Ananta', 'ipa', '35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai_mapel`
--
ALTER TABLE `nilai_mapel`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai_mapel`
--
ALTER TABLE `nilai_mapel`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
