-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 03:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas5`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `NPM` varchar(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Goldar` varchar(3) NOT NULL,
  `Jeiskel` varchar(1) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `TL` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telp` varchar(20) NOT NULL,
  `Nama2` varchar(50) DEFAULT NULL,
  `motto` varchar(50) DEFAULT NULL,
  `deskripsi1` varchar(300) DEFAULT NULL,
  `deskripsi2` varchar(300) DEFAULT NULL,
  `skill1` varchar(20) DEFAULT NULL,
  `skill2` varchar(20) DEFAULT NULL,
  `skill3` varchar(20) DEFAULT NULL,
  `skill4` varchar(20) DEFAULT NULL,
  `karir` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`NPM`, `Nama`, `Alamat`, `Goldar`, `Jeiskel`, `Status`, `Agama`, `TL`, `Email`, `Telp`, `Nama2`, `motto`, `deskripsi1`, `deskripsi2`, `skill1`, `skill2`, `skill3`, `skill4`, `karir`) VALUES
('17081010045', 'Sunuuus', 'askok', 'aos', 'L', 'Menikah', 'Islam', 'oksado', 'okasod', 'okdasok', 'asodk', 'odsk', 'adasd', 'okaasdasd', 'asd', 'jsd', 'ok', 'ok', 'asodk'),
('17081010051', 'Amir Muh H', 'as', 'ok', 'k', 'ok', 'ko', 'ok', 'ko', 'ok', 'Amir', 'ko', 'ok', 'ko', 'ko', 'ko', 'ko', 'ko', 'Data Analis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`NPM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
