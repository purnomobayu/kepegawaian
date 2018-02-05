-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 02:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--
CREATE DATABASE IF NOT EXISTS `kepegawaian` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kepegawaian`;

-- --------------------------------------------------------

--
-- Table structure for table `cuti_pekerja`
--

CREATE TABLE `cuti_pekerja` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `lama_cuti` int(11) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti_pekerja`
--

INSERT INTO `cuti_pekerja` (`id`, `nik`, `tgl_mulai`, `lama_cuti`, `catatan`) VALUES
(14, 3, '2018-02-01', 6, 'assets_template'),
(15, 5, '2018-02-14', 9, 'n'),
(16, 3, '2017-02-05', 3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `nik` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`nik`, `nama`, `alamat`, `tgl_lahir`, `tgl_masuk`) VALUES
(1, '1', '1', '2018-02-05', '2018-02-05'),
(2, '2', '2', '2018-02-05', '2018-02-05'),
(3, '3', '3', '2018-02-05', '2014-02-05'),
(5, '5', '5', '2018-02-05', '2012-02-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti_pekerja`
--
ALTER TABLE `cuti_pekerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti_pekerja`
--
ALTER TABLE `cuti_pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti_pekerja`
--
ALTER TABLE `cuti_pekerja`
  ADD CONSTRAINT `cuti_pekerja_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pekerja` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
