-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 09:40 AM
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
-- Database: `toko_percobaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(7) NOT NULL,
  `nama` char(30) NOT NULL,
  `acara` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `nama`, `acara`) VALUES
(1, 'pernikahan', 'pernikahan'),
(2, 'aniv', 'aniv'),
(4, 'kematian', 'kematian');

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
(1, 'admin', 'eko', ''),
(2, 'ekomaulanasa', 'hehe', ''),
(4, 'ekomaulanasa', 'haha', ''),
(8, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_produk`
--

CREATE TABLE `detail_produk` (
  `id_detail` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_acara` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_produk`
--

INSERT INTO `detail_produk` (`id_detail`, `id_produk`, `id_acara`, `id_jenis`) VALUES
(1, 8, 1, 1),
(2, 8, 2, 1),
(3, 12, 4, 1),
(4, 2, 4, 3),
(5, 3, 1, 3),
(6, 11, 4, 2),
(7, 9, 2, 1),
(8, 11, 2, 1),
(9, 2, 4, 2),
(10, 2, 4, 1);

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
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis` int(11) NOT NULL,
  `jenis_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis`, `jenis_produk`) VALUES
(1, 'buket'),
(2, 'rangkai'),
(3, 'batang');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pelanggan` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_pelanggan` varchar(15) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `username`, `password`, `nama_pelanggan`, `alamat`, `no_hp`, `email`) VALUES
(1, 'eko', 'eko', 'eko', 'sini', 2147483647, 'eko@eko.com'),
(8, 'asd', 'asd', 'asd', 'asd', 123, 'asd@hmail.com'),
(9, 'gus', 'gus', 'gushus', 'gus', 123123, 'gus@gmail.com'),
(23, 'ali', '12345', 'ali', 'sini', 123456786, 'ali@gmail.com');

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
  `Gambar` blob NOT NULL,
  `Id_pesanan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Id_pembayaran`, `Tgl_pembayaran`, `Jml_pembayaran`, `No_nota`, `Tgl_nota`, `Gambar`, `Id_pesanan`) VALUES
(1, '2018-12-11', 'Rp 5000', '1', '2018-12-11', 0x30, 1),
(2, '0000-00-00', '100', '', '0000-00-00', 0x30, 33),
(3, '2019-01-21', '0', 'N35', '2019-01-21', 0x30, 35),
(8, '2019-01-21', '5000', 'N37', '2019-01-21', 0x73637265656e73686f745f32303139303131352d3037333732395f31333636783736382e706e67, 37),
(9, '2019-01-21', '10000', 'N38', '2019-01-21', 0x73637265656e73686f745f32303139303131352d3037323333325f31333636783736382e706e67, 38),
(10, '2019-01-21', '5000', 'N39', '2019-01-21', 0x73637265656e73686f745f32303139303131352d3037343431365f31333636783736382e706e67, 39),
(11, '2019-01-21', '0', 'N40', '2019-01-21', 0x73637265656e73686f745f32303139303131352d3037343133385f31333636783736382e706e67, 40),
(12, '2019-01-22', '4500', 'N42', '2019-01-22', 0x616e746974616e6b70726f6a6563742d2d313534373333333634313938312e6a7067, 42);

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id_penerimaan` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaan`
--

INSERT INTO `penerimaan` (`id_penerimaan`, `id_pembayaran`) VALUES
(1, 12),
(2, 12);

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
  `status_bayar` varchar(5) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`Id_pesanan`, `Id_produk`, `Id_pelanggan`, `Id_driver`, `Tgl_pesanan`, `Tgl_pengiriman`, `Total_bayar`, `Quantity`, `status_bayar`, `Deskripsi`) VALUES
(35, 2, 9, 2, '2019-01-21', '0000-00-00', 0, '', 'sudah', ''),
(41, 3, 23, 2, '2019-01-21', '0000-00-00', 10000, '1', 'belum', 'eara'),
(42, 8, 1, 2, '2019-01-22', '0000-00-00', 4500, '3', 'sudah', 'ultah'),
(44, 8, 1, 2, '2019-01-22', '0000-00-00', 1500, '1', 'belum', 'pernikahan'),
(46, 3, 1, 2, '2019-07-04', '0000-00-00', 10000, '1', 'belum', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Id_produk` int(5) NOT NULL,
  `bunga` varchar(15) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Id_produk`, `bunga`, `gambar`, `harga`) VALUES
(2, 'lily', '0', 5000),
(3, 'mWAR', '', 10000),
(8, 'Bunga Mantan', '', 1500),
(9, 'SEPATU', '', 0),
(10, 'SEPATU', 'SHSHS', 1000),
(11, 'opo', 'shshsh', 2000),
(12, 'kembang', 'klklkl', 4000),
(13, 'puli', 'hkkh', 6000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_acara` (`id_acara`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Id_driver`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis`);

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
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

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
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_produk`
--
ALTER TABLE `detail_produk`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `Id_driver` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id_penerimaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `Id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `Id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD CONSTRAINT `detail_produk_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_produk` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`Id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_produk_ibfk_3` FOREIGN KEY (`id_acara`) REFERENCES `acara` (`id_acara`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD CONSTRAINT `penerimaan_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`Id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

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
