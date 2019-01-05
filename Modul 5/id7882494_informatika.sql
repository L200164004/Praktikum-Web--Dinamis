-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 05:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id7882494_informatika`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `khs`
--
CREATE TABLE IF NOT EXISTS `khs` (
`NIM` varchar(10)
,`Nama_MK` char(100)
,`Nilai_Angka` int(10)
,`Nilai_Huruf` char(5)
);
-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NIM` varchar(10) NOT NULL,
  `Nama` char(50) DEFAULT NULL,
  `Kelas` char(5) DEFAULT NULL,
  `Alamat` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Kelas`, `Alamat`) VALUES
('L200080001', 'Ari Wibowo', 'A', 'Solo'),
('L200080080', 'Agustina Anggraini', 'B', 'Sragen');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `NIM` varchar(10) NOT NULL,
  `Nama_MK` char(100) DEFAULT NULL,
  `Nilai_Angka` int(10) DEFAULT NULL,
  `Nilai_Huruf` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NIM`, `Nama_MK`, `Nilai_Angka`, `Nilai_Huruf`) VALUES
('L200080002', 'Kapita Seletika', 60, 'BC'),
('L200080010', 'Pemrogaman Web', 87, 'A'),
('L200080080', 'Pemrogaman Web', 90, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `nim`
--

CREATE TABLE IF NOT EXISTS `nim` (
  `NIM` varchar(10) NOT NULL,
  `Nama_MK` varchar(20) DEFAULT NULL,
  `Nilai_Angka` int(5) DEFAULT NULL,
  `Nilai_Huruf` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nim`
--

INSERT INTO `nim` (`NIM`, `Nama_MK`, `Nilai_Angka`, `Nilai_Huruf`) VALUES
('L200080002', 'Kapita Seletika', 60, 'BC'),
('L200080010', 'Pemrogaman Web', 87, 'A'),
('L200080080', 'Pemrogaman Web', 90, 'A');

-- --------------------------------------------------------

--
-- Structure for view `khs`
--
DROP TABLE IF EXISTS `khs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id7882494_rootutama`@`localhost` SQL SECURITY DEFINER VIEW `khs` AS select `mahasiswa`.`NIM` AS `NIM`,`nilai`.`Nama_MK` AS `Nama_MK`,`nilai`.`Nilai_Angka` AS `Nilai_Angka`,`nilai`.`Nilai_Huruf` AS `Nilai_Huruf` from (`mahasiswa` join `nilai` on((`mahasiswa`.`NIM` = `nilai`.`NIM`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `nim`
--
ALTER TABLE `nim`
 ADD PRIMARY KEY (`NIM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
