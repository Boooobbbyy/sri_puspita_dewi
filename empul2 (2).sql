-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 04:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empul2`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` int(128) NOT NULL,
  `gender` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id`, `first_name`, `last_name`, `email`, `password`, `alamat`, `hp`, `gender`) VALUES
(4, 'bobby', 'hutagalung', 'macvermilion@gmail.com', '$2y$10$k8OjF43QWGf.kpBB8drJIOSFvSZrzh2djowmeGX1R3Y3AFgq1mklq', 'vdf', 111111, 0),
(5, 'sri', 'puspita', 'puspitadewi@gmail.com', '$2y$10$V/9O/Lfc8hsn7PB.4GlwHe4Fwhh4fAdiIrtSzdrfbWDO6OnKPz05S', 'citragarden', 2147483647, 2),
(6, 'puspita', 'dewi', 'puspita2004@gmail.com', '$2y$10$z7NqsrQGOWUgXpYujb39vuWqU5ip9upXcN690jssR.KdDIpPRfbFi', 'negri olok gading', 2147483647, 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `username`, `password1`) VALUES
(1, 'sri', 'dewi', 'macvermilion@gmail.com', 'tata', '$2y$10$CY0Ouh.5a0si1N6ABIW5NuUBdpqYOyDNj8xen4JcJm4r8b27pdVU2');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `bobot` int(128) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jenis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `lokasi`, `bobot`, `tanggal`, `jenis`) VALUES
(1, 'gefds', 34, '2020-12-31 17:00:00', 3),
(2, 'dsfgs', 32, '2020-12-16 17:00:00', 4),
(5, 'sfdds', 2, '2020-12-16 17:00:00', 5),
(6, 'sfd', 7, '2020-12-02 17:00:00', 4),
(7, 'fs', 4, '2021-01-19 17:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sri`
--

CREATE TABLE `sri` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sri`
--

INSERT INTO `sri` (`id`, `first_name`, `last_name`, `email`, `username`, `password1`) VALUES
(1, 'sri', 'dewi', 'macvermilion@gmail.com', 'tata', '$2y$10$CY0Ouh.5a0si1N6ABIW5NuUBdpqYOyDNj8xen4JcJm4r8b27pdVU2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sri`
--
ALTER TABLE `sri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sri`
--
ALTER TABLE `sri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
