-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 06:01 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_rani`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'eko'),
(2, 'ekomaulanasa', 'hehe'),
(4, 'ekomaulanasa', 'haha'),
(8, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Id_driver` int(5) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Id_driver`, `nama`, `alamat`, `no_hp`, `email`) VALUES
(1, 'ada', 'situ', '08987976909', 'ada@gmail.com'),
(2, 'io', 'lado', '8080979799778', 'yufyg1ug@gmail.'),
(3, 'io', 'hehe', '69709', 'Maulanae472@gma'),
(4, 'hihi', 'lado', '69709', 'yufygug@gmail.c');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pelanggan` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_pelanggan` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `username`, `password`, `nama_pelanggan`, `alamat`, `no_hp`, `email`) VALUES
(1, 'eko', 'eko', 'eko', 'sini', 2147483647, 'eko@eko.com'),
(5, 'ekooooo', 'hrhrh', 'hehe', 'sini', 69709, 'sdf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Id_pembayaran` int(5) NOT NULL,
  `Tgl_pembayaran` date NOT NULL,
  `Jml_pembayaran` varchar(15) NOT NULL,
  `No_nota` varchar(10) NOT NULL,
  `Tgl_nota` date NOT NULL,
  `No_ref` int(30) NOT NULL,
  `Id_pesanan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Id_pembayaran`, `Tgl_pembayaran`, `Jml_pembayaran`, `No_nota`, `Tgl_nota`, `No_ref`, `Id_pesanan`) VALUES
(1, '2018-12-11', 'Rp 5000', '1', '2018-12-11', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `Id_pesanan` int(5) NOT NULL,
  `Id_produk` int(5) NOT NULL,
  `Id_pelanggan` int(5) NOT NULL,
  `Id_driver` int(5) DEFAULT NULL,
  `Tgl_pesanan` date NOT NULL,
  `Tgl_pengiriman` date DEFAULT NULL,
  `Total_bayar` int(15) NOT NULL,
  `Quantity` varchar(5) DEFAULT NULL,
  `status_bayar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`Id_pesanan`, `Id_produk`, `Id_pelanggan`, `Id_driver`, `Tgl_pesanan`, `Tgl_pengiriman`, `Total_bayar`, `Quantity`, `status_bayar`) VALUES
(33, 2, 1, 2, '2019-01-14', '2019-01-14', 5000, '', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Id_produk` int(5) NOT NULL,
  `bunga` varchar(15) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Id_produk`, `bunga`, `warna`, `gambar`, `harga`) VALUES
(2, 'lily', 'putih', '0', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Id_driver`);

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
  ADD KEY `fk_produk` (`Id_produk`),
  ADD KEY `fk_driver` (`Id_driver`),
  ADD KEY `fk_pelanggan` (`Id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `Id_driver` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `Id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `Id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_driver` FOREIGN KEY (`Id_driver`) REFERENCES `driver` (`Id_driver`),
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`Id_pelanggan`) REFERENCES `pelanggan` (`Id_pelanggan`),
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`Id_produk`) REFERENCES `produk` (`Id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
