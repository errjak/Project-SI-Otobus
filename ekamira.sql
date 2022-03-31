-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 01:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekamira`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekonomi`
--

CREATE TABLE `ekonomi` (
  `id` int(11) NOT NULL,
  `jam` time NOT NULL,
  `asal` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekonomi`
--

INSERT INTO `ekonomi` (`id`, `jam`, `asal`, `tujuan`, `harga`) VALUES
(2, '08:20:00', 'surabaya', 'yogyakarta', 'Rp 60.000'),
(3, '11:15:00', 'surabaya', 'yogyakarta', 'Rp 60.000'),
(4, '16:25:00', 'surabaya', 'yogyakarta', 'Rp 60.000'),
(5, '18:20:00', 'surabaya', 'yogyakarta', 'Rp 60.000'),
(6, '08:20:00', 'surabaya', 'madiun', 'Rp 40.000'),
(7, '11:15:00', 'surabaya', 'madiun', 'Rp 40.000'),
(8, '16:25:00', 'surabaya', 'madiun', 'Rp 40.000'),
(9, '18:20:00', 'surabaya', 'madiun', 'Rp 40.000'),
(10, '12:05:00', 'madiun', 'yogyakarta', 'Rp 20.000'),
(11, '15:00:00', 'madiun', 'yogyakarta', 'Rp 20.000'),
(12, '20:10:00', 'madiun', 'yogyakarta', 'Rp 20.000'),
(13, '22:05:00', 'madiun', 'yogyakarta', 'Rp 20.000'),
(14, '16:50:05', 'yogyakarta', 'surabaya', 'Rp 60.000'),
(15, '19:45:05', 'yogyakarta', 'surabaya', 'Rp 60.000'),
(16, '00:55:00', 'yogyakarta', 'surabaya', 'Rp 60.000'),
(17, '02:50:27', 'yogyakarta', 'surabaya', 'Rp 60.000'),
(18, '16:50:00', 'yogyakarta', 'madiun', 'Rp 20.000'),
(19, '19:45:00', 'yogyakarta', 'madiun', 'Rp 20.000'),
(20, '00:55:00', 'yogyakarta', 'madiun', 'Rp 20.000'),
(21, '02:50:00', 'yogyakarta', 'madiun', 'Rp 20.000'),
(22, '12:05:00', 'madiun', 'surabaya', 'Rp 40.000'),
(23, '15:00:00', 'madiun', 'surabaya', 'Rp 40.000'),
(24, '20:10:00', 'madiun', 'surabaya', 'Rp 40.000'),
(25, '22:05:00', 'madiun', 'surabaya', 'Rp 40.000');

-- --------------------------------------------------------

--
-- Table structure for table `eksekutif`
--

CREATE TABLE `eksekutif` (
  `id` int(11) NOT NULL,
  `jam` time NOT NULL,
  `asal` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `telepon`, `email`, `password`) VALUES
(1, 'Budi Santoso', '082148732484', 'budi@gmail.com', '$2y$10$vbaK8JjhoHg5.ucUyoTBUuDdZ0D0HXgQ4IR.OqImwoxzLw9Hq1AR.'),
(2, 'Admin', '083172834726', 'admin@gmail.com', '$2y$10$e.z2oYP8EnqjSCsLDzFD0OqS.IlBSPy.9tnEtNFV4K4YJREVQiARy'),
(3, 'chendy tri wardani', '0895341132393', 'chendytriwardani2@gmail.com', '$2y$10$FvabWQI6Xp8TS7b.qMXh0O8yvDGnaHPpySVO0oUiqYUszAaDr7iF.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekonomi`
--
ALTER TABLE `ekonomi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eksekutif`
--
ALTER TABLE `eksekutif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekonomi`
--
ALTER TABLE `ekonomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `eksekutif`
--
ALTER TABLE `eksekutif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
