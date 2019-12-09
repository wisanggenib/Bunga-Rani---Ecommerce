-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 11:19 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
(6, 55, 3, 23, 123),
(7, 56, 1, 25, 30000),
(8, 57, 4, 25, 30000),
(9, 57, 1, 22, 50000),
(10, 58, 3, 25, 30000),
(11, 58, 2, 23, 123),
(12, 59, 1, 26, 10000);

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
(1, 'buket2'),
(2, 'rangkai'),
(3, 'batang'),
(6, 'baru');

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
  `email` varchar(30) NOT NULL,
  `gambar` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `username`, `password`, `nama_depan`, `nama_belakang`, `alamat`, `no_hp`, `email`, `gambar`) VALUES
(1, 'eko', 'eko', 'eko2222', '1', 'sini1', 11, 'eko1@eko.com', 0x6c6f676f5f616d696b6f6d5f66756c6c5f636f6c6f722e706e67),
(9, 'gus', 'gus', 'gushus', '', 'gus', 123123, 'gus@gmail.com', ''),
(24, 'apin', 'apin', 'apin', 'apin', 'sulawesi', 876661, 'asropinr@gmail.com', 0x696e6465782e6a706567),
(25, 'bagusss', 'bagus', 'bagus', 'bagus', 'bagus', 123, 'bagus@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `Id_pembayaran` int(5) NOT NULL,
  `Tgl_pembayaran` date NOT NULL,
  `Gambar` blob NOT NULL,
  `Id_pesanan` int(5) NOT NULL,
  `Status` varchar(7) NOT NULL,
  `Resi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`Id_pembayaran`, `Tgl_pembayaran`, `Gambar`, `Id_pesanan`, `Status`, `Resi`) VALUES
(14, '2019-11-24', 0x313832303331353338382e6a7067, 53, 'sudah', '123123'),
(15, '2019-11-21', 0x383437373131365f525f5a303031412e6a7067, 55, 'sudah', '123'),
(16, '2019-11-24', 0x313832303331353338382e6a7067, 52, 'sudah', '231312'),
(17, '2019-11-24', 0x444f754253794455454149714b4f4d2e6a7067, 57, 'sudah', '12312312312321'),
(19, '2019-11-29', 0x6c6f676f5f616d696b6f6d5f66756c6c5f636f6c6f722e706e67, 58, 'pending', NULL),
(20, '2019-12-02', 0x6c6f676f5f616d696b6f6d5f66756c6c5f636f6c6f722e706e67, 59, 'pending', NULL);

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
(52, 1, '2019-11-21', '2019-11-22', 'asdasd', 'sudah', 100246, 'asdasd'),
(53, 1, '2019-11-21', '2019-11-22', 'aa', 'sudah', 100000, 'a'),
(55, 1, '2019-11-21', '2019-11-30', 'Jember', 'sudah', 369, 'Kontak saya 097'),
(56, 1, '2019-11-24', '2019-11-23', 'xcc', 'belum', 30000, 'asd'),
(57, 1, '2019-11-24', '2019-11-29', 'Jl Tluki 1 No 105 Condong Catur Depok Sleman Yogyakarta', 'sudah', 170000, 'terima kasih'),
(58, 1, '2019-11-29', '2019-11-22', 'asd', 'pending', 90246, 'asd'),
(59, 9, '2019-12-02', '2019-12-03', '123', 'pending', 10000, '123');

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
(22, 'Mawar Putih 2', '1820315388.jpg', 50000, 2),
(23, 'Mawar Merah', 'ee64d028c4add3e0ab16a997ebf449fc.jpg', 123, 1),
(25, 'produk baru', 'Flora-Bunga-Mawar-Simbol-Kasih-Sayang-yang-Melegenda.jpg', 30000, 2),
(26, 'Testing Produk', 'index.jpeg', 10000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` blob NOT NULL,
  `pesan` varchar(10) NOT NULL,
  `pesan1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `pesan`, `pesan1`) VALUES
(2, 0x62672d62616e6e65722d30332e706e67, 'matahari', 'matahari1'),
(3, 0x62672d62616e6e65722d30322e706e67, 'Bunga', 'Bunga1'),
(4, 0x62672d62616e6e65722d30312e706e67, 'Bunga2', 'Bunga2');

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

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
  MODIFY `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `Id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `Id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `Id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `Id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
