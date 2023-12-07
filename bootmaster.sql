-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 07:24 AM
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
-- Database: `bootmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(10) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `userName`, `password`) VALUES
(1, 'admin', '12345'),
(4, 'rega', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `username`, `password`, `email`) VALUES
(1, 'azis', 'azis', 'azis@zzz'),
(2, 'Rega', 'rega', 'rega@zzz');

-- --------------------------------------------------------

--
-- Table structure for table `tb_template`
--

CREATE TABLE `tb_template` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `link` varchar(200) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_template`
--

INSERT INTO `tb_template` (`id`, `nama`, `tipe`, `deskripsi`, `link`, `gambar`) VALUES
(1, 'TES', 'PRO', 'TES1', 'https://www.youtube.com/watch?v=nskmBJ_cULY&list=PLdCZNPgha75Mn4M0IvWeOa3114Eh-Qdrk&index=9&ab_channel=RKUNITED', '1200429.jpg'),
(21, 'xxx', 'sccs@sadx', '', '', ''),
(212, 'wdwd', 'wdw', 'wdwdw', 'https://www.youtube.com/watch?v=nskmBJ_cULY&list=PLdCZNPgha75Mn4M0IvWeOa3114Eh-Qdrk&index=9&ab_channel=RKUNITED', '56675.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_template`
--
ALTER TABLE `tb_template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_template`
--
ALTER TABLE `tb_template`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
