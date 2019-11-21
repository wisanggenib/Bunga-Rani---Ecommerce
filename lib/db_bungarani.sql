-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 12:20 PM
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
-- Database: `db_bungarani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `jabatan`) VALUES
(1, 'admin', 'eko', 'admin'),
(2, 'ekomaulanasa', 'hehe', 'moderator'),
(4, 'ekomaulanasa', 'haha', 'moderator'),
(8, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail_pesanan` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail_pesanan`, `id_pesanan`, `quantity`, `id_produk`, `harga`) VALUES
(1, 51, 1, 22, 100000),
(2, 52, 1, 22, 100000),
(3, 52, 2, 23, 123),
(4, 53, 1, 22, 100000),
(6, 55, 3, 23, 123);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'buket'),
(2, 'rangkai'),
(3, 'batang'),
(5, 'Testing Update');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pelanggan` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_depan` varchar(15) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `username`, `password`, `nama_depan`, `nama_belakang`, `alamat`, `no_hp`, `email`) VALUES
(1, 'eko', 'eko', 'eko', '', 'sini', 2147483647, 'eko@eko.com'),
(8, 'asd', 'asd', 'asd', '', 'asd', 123, 'asd@hmail.com'),
(9, 'gus', 'gus', 'gushus', '', 'gus', 123123, 'gus@gmail.com'),
(23, 'ali', '12345', 'ali', '', 'sini', 123456786, 'ali@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Id_pembayaran` int(5) NOT NULL,
  `Tgl_pembayaran` date NOT NULL,
  `Gambar` blob NOT NULL,
  `Id_pesanan` int(5) NOT NULL,
  `Status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Id_pembayaran`, `Tgl_pembayaran`, `Gambar`, `Id_pesanan`, `Status`) VALUES
(14, '2019-11-21', 0x646f776e6c6f6164202831292e706e67, 53, 'pending'),
(15, '2019-11-21', 0x383437373131365f525f5a303031412e6a7067, 55, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `Id_pesanan` int(5) NOT NULL,
  `Id_pelanggan` int(5) NOT NULL,
  `Tgl_pesanan` date NOT NULL,
  `Tgl_pengiriman` date DEFAULT NULL,
  `Alamat` text NOT NULL,
  `Status` varchar(7) NOT NULL,
  `Total_bayar` int(15) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`Id_pesanan`, `Id_pelanggan`, `Tgl_pesanan`, `Tgl_pengiriman`, `Alamat`, `Status`, `Total_bayar`, `Deskripsi`) VALUES
(51, 1, '2019-11-21', '2019-11-15', 'Cek Alamat', 'belum', 100000, 'Cek Deskripsi'),
(52, 1, '2019-11-21', '2019-11-22', 'asdasd', 'belum', 100246, 'asdasd'),
(53, 1, '2019-11-21', '2019-11-22', 'aa', 'pending', 100000, 'a'),
(55, 1, '2019-11-21', '2019-11-30', 'Jember', 'pending', 369, 'Kontak saya 097');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Id_produk` int(5) NOT NULL,
  `nama_produk` varchar(15) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Id_produk`, `nama_produk`, `gambar`, `harga`, `id_kategori`) VALUES
(22, 'Mawar Putih', 'pexels-photo-736230.jpeg', 100000, 3),
(23, 'Mawar Merah', 'ee64d028c4add3e0ab16a997ebf449fc.jpg', 123, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail_pesanan`),
  ADD KEY `id_pemesanan` (`id_pesanan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`Id_pembayaran`),
  ADD KEY `fk_pesanan` (`Id_pesanan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`Id_pesanan`),
  ADD KEY `fk_pelanggan` (`Id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `Id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `Id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`Id_pesanan`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`Id_pelanggan`) REFERENCES `pelanggan` (`Id_pelanggan`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
