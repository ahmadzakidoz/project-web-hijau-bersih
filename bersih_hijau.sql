-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 10:02 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bersih-hijau`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'admin', 'admin', 'Bisma', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`id`, `nama`, `telp`, `email`, `alamat`, `tanggal`, `status`) VALUES
(1, 'Ahmad Zaki', '082297016045', 'ahmadzaki.doz@gmail', 'dirumah aja, kebon baru, tebet', '2019-06-15', 'Menunggu Penjemputan'),
(2, 'Dodi Aditiya', '082297016045', 'dodiaditiya@gmail.com', 'dirumah, kebon baru, tebet', '2019-06-08', 'Menunggu Konfirmasi'),
(3, 'Bisma Reza', '082297016045', 'bismareza@gmail.com', 'dirumah aja, kebon baru, tebet', '2019-06-12', 'Transaksi Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga` varchar(7) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(2, 'Tas Jinjing dari Bungkus Kopi', 'Produk Up-cycle ini terbuat dari plastik kemasan kopi yang di jahit dan dibentuk menjadi tas daur ulang yang artistik', '35000', 'tas.jpg'),
(3, 'Sendal Jepit dari Sampah', 'sendal jepit unik ini terbuat dari enceng gondok, setiap detilnya penuh artistik dan punya nilai ramah lingkungan', '35000', 'sendal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tim_hijau`
--

CREATE TABLE `tim_hijau` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim_hijau`
--

INSERT INTO `tim_hijau` (`id`, `nama`, `telp`, `email`, `alamat`, `foto`, `status`) VALUES
(1, 'Ahmad Zaki', '082297016045', 'ahmadzaki.doz@gmail.com', 'kebon baru, tebet', 'revenue.jpg', 'Anggota'),
(2, 'Bisma Reza', '082297016045', 'bismareza@gmail.com', 'kebon baru, tebet', 'kelompok-sekunder.jpg', 'Anggota'),
(3, 'Dodi Aditiya', '082297016045', 'dodiaditiya@gmail.com', 'kebon baru, tebet', 'revenue1.jpg', 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim_hijau`
--
ALTER TABLE `tim_hijau`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tim_hijau`
--
ALTER TABLE `tim_hijau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
