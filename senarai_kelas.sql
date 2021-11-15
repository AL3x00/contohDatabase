-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 04:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senarai_kelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelajar`
--

CREATE TABLE `tbl_pelajar` (
  `no_pelajar` int(100) NOT NULL,
  `nama_pelajar` varchar(50) NOT NULL,
  `kp_pelajar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelajar`
--

INSERT INTO `tbl_pelajar` (`no_pelajar`, `nama_pelajar`, `kp_pelajar`) VALUES
(1, 'ALI', '011231028754'),
(2, 'ABU', '010723025732'),
(3, 'LEE', '010222021234'),
(4, 'ADAM', '010523025189'),
(5, 'JOHN', '010521022356'),
(6, 'SAW', '000716020497'),
(7, 'CHAI', '010425021589'),
(8, 'LIM', '010615024897'),
(9, 'AHMAD', '010430021487'),
(10, 'SITI', '010229026145');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pelajar`
--
ALTER TABLE `tbl_pelajar`
  ADD PRIMARY KEY (`no_pelajar`),
  ADD UNIQUE KEY `kp_pelajar` (`kp_pelajar`),
  ADD UNIQUE KEY `kp_pelajar_2` (`kp_pelajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pelajar`
--
ALTER TABLE `tbl_pelajar`
  MODIFY `no_pelajar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
