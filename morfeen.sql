-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 03:50 PM
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
-- Database: `morfeen`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `nocart` int(100) NOT NULL,
  `idadd` int(100) NOT NULL,
  `idcus` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `hargasatuan` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `password2`) VALUES
(2, 'morfadmin13', 'admin13', 'admin13'),
(3, 'halo', 'hahahaha', 'hahahaha');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `jenis`, `warna`, `size`, `stok`, `harga`, `gambar`) VALUES
(59, 'Hoodie Motif Lengan Jangkar', 'Hitam', 'XL', '15', 295000, 'g1.jpeg'),
(60, 'Hoodie Logo Morfeen', 'Hitam', 'M', '15', 295000, 'g6.jpeg'),
(62, 'Hoodie Logo Hiu', 'Putih', 'XL', '15', 295000, 'g3.jpeg'),
(64, 'T-Shirt Strips Maroon', 'Merah', 'XL', '15', 135000, 'g17.jpeg'),
(65, 'Cap Baseball', 'Hitam', 'All Size', '15', 90000, 'g7.jpeg'),
(66, 'TotteBag Black', 'Hitam', '-', '15', 90000, 'g21.jpeg'),
(67, 'T-Shirt Logo Morfeen ', 'Biru', 'M', '15', 130000, 'g16.jpeg'),
(68, 'Polo Blue Black', 'Hitam Biru', 'XL', '11', 135000, 'g2.jpeg'),
(69, 'Shoes Morf', 'Hitam', '-', '10', 310000, 'g15.jpeg'),
(70, 'Mesh Man', 'Biru', 'S', '10', 80000, 'g5.jpeg'),
(71, 'T-Shirt Logo Skull Sharkbite', 'Biru', 'XL', '9', 130000, 'g11.jpeg'),
(72, 'T-Shirt Strips Morfeen', 'Putih Hitam', 'XXL', '15', 135000, 'g22.jpeg'),
(73, 'T-Shirt Simple Logo Morfeen', 'Hitam', 'M', '12', 135000, 'g18.jpeg'),
(74, 'Hoodie Logo Sharkbite', 'Hitam', 'XL', '8', 295000, 'g13.jpeg'),
(75, 'T-Shirt Raglan', 'Putih', 'XL', '14', 130000, 'g23.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cekout`
--

CREATE TABLE `cekout` (
  `nocekout` int(11) NOT NULL,
  `idcek` varchar(10) NOT NULL,
  `idcus` int(100) NOT NULL,
  `idbarang` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `hargasatuan` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcus` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `kodepos` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcus`, `nama`, `alamat`, `daerah`, `username`, `password`, `password2`, `kodepos`, `email`, `notelp`) VALUES
(27, 'Paijo', 'Jl. hmmm ok', 'Kota Malang', 'h', 'h', 'h', 651453, 'hehe@gmail.com', 2147483647),
(29, 'Deny Pratama', 'Perum Tidar ', 'Kota Malang', 'deny', 'lp', 'lp', 65145, 'deny@gmail.com', 2147483647),
(30, 'Resa Putra', 'Jl. Wagir', 'Kota Malang', 'resa', 'r', 'r', 67456, 'resa@gmail.com', 2147483647),
(31, 'Alif FIrdaus', 'Jl. Jember', 'Kota Malang', 'alif', 'a', 'a', 65789, 'alif@gmail.com', 2147483647),
(33, 'b', 'b', 'Kota Malang', 'b', 'b', 'b', 0, 'h@gmail', 621784445),
(34, 'g', 'g', 'Kab. Malang', 'g', 'g', 'g', 65789, 'deny@gmail.com', 2147483647),
(35, 'j', 'j', 'Kab. Malang', 'j', 'j', 'j', 123456, 'deny@gmail.com', 1234567890),
(38, 'c', 'c', 'Kota Malang', 'c', 'c', 'c', 12, 'c@gmail.com', 2147483647),
(40, 'HALO', 'Jl. sembarang hayo', 'Kota Malang', 'r', 'r', 'r', 65145123, 'resa@gmail.com', 8413111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`nocart`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `cekout`
--
ALTER TABLE `cekout`
  ADD PRIMARY KEY (`nocekout`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `nocart` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `cekout`
--
ALTER TABLE `cekout`
  MODIFY `nocekout` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcus` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
