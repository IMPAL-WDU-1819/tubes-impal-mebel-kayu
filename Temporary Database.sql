-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 06:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `kayu`
--

CREATE TABLE `kayu` (
  `id_kayu` int(6) NOT NULL,
  `id_supplier` int(6) DEFAULT NULL,
  `nama_kayu` varchar(50) DEFAULT NULL,
  `ukuran_kayu` int(11) DEFAULT NULL,
  `deskripsi_kayu` text,
  `stok_kayu` int(11) DEFAULT NULL,
  `harga_kayu` int(11) DEFAULT NULL,
  `slug_kayu` varchar(150) DEFAULT NULL,
  `image_kayu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kayu`
--

INSERT INTO `kayu` (`id_kayu`, `id_supplier`, `nama_kayu`, `ukuran_kayu`, `deskripsi_kayu`, `stok_kayu`, `harga_kayu`, `slug_kayu`, `image_kayu`) VALUES
(200000, 100000, 'Jati', 5, 'Kayu kuat!', 40, 500000, 'kayu-kuat', 'kayu.jpg'),
(200001, 100000, 'Pinus', 10, 'Kayu mantap!', 15, 400000, 'kayu-mantap', 'kayu2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(6) NOT NULL,
  `user_supplier` varchar(30) DEFAULT NULL,
  `pass_supplier` varchar(30) DEFAULT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `foto_supplier` varchar(20) DEFAULT NULL,
  `tentang_supplier` text,
  `email_supplier` varchar(50) DEFAULT NULL,
  `kota_supplier` varchar(50) DEFAULT NULL,
  `negara_supplier` varchar(50) DEFAULT NULL,
  `kodepos_supplier` varchar(50) DEFAULT NULL,
  `kecamatan_supplier` varchar(50) DEFAULT NULL,
  `namabelakang_supplier` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `user_supplier`, `pass_supplier`, `nama_supplier`, `foto_supplier`, `tentang_supplier`, `email_supplier`, `kota_supplier`, `negara_supplier`, `kodepos_supplier`, `kecamatan_supplier`, `namabelakang_supplier`) VALUES
(100000, 'a', 'a', 'Aditya Eka', 'a.jpg', 'Saya suka keributan! hehe', 'aditya@bagas31.com', 'Tulungagung', 'Indonesia', '66254', 'Karangrejo', 'Bagaskara'),
(100001, 'b', 'b', 'Aditya Eka', 'b.jpg', 'Saya suka keributan! hehe', 'aditya@bagas31.com', 'Tulungagung', 'Indonesia', '66254', 'Karangrejo', 'Bagaskara'),
(100002, 'c', 'c', 'Aditya Eka', 'c.jpg', 'Saya suka keributan! hehe', 'aditya@bagas31.com', 'Tulungagung', 'Indonesia', '66254', 'Karangrejo', 'Bagaskara'),
(100003, 'user', 'user', 'Aditya Eka', 'adit.jpg', 'Saya suka keributan! hehe', 'aditya@bagas31.com', 'Tulungagung', 'Indonesia', '66254', 'Karangrejo', 'Bagaskara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kayu`
--
ALTER TABLE `kayu`
  ADD PRIMARY KEY (`id_kayu`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kayu`
--
ALTER TABLE `kayu`
  MODIFY `id_kayu` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200003;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100004;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kayu`
--
ALTER TABLE `kayu`
  ADD CONSTRAINT `kayu_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
