-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roxy`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_beli` varchar(255) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `satuan_barang` varchar(255) NOT NULL,
  `stok` text NOT NULL,
  `tgl_input` varchar(255) NOT NULL,
  `tgl_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `id_kategori`, `nama_barang`, `harga_beli`, `harga_jual`, `satuan_barang`, `stok`, `tgl_input`, `tgl_update`) VALUES
(1, 'BRG001', 1, 'Panadol', '10000', '13000', 'PCS', '10', '20 Oktober 2020', '20 Oktober2021'),
(2, 'BRG002', 1, 'Bodrex', '11000', '14000', 'PCS', '20', '21 Oktober 2020', '21 Oktober 2021'),
(3, 'BRG003', 5, 'Konidin', '12000', '15000', 'PCS', '20', '22 Oktober 2020', '22 Oktober 2021'),
(4, 'BRG004', 3, 'Betadin', '13000', '16000', 'PCS', '10', '23 Oktober 2020', '23 Oktober 2021'),
(5, 'BRG005', 2, 'Oskadon', '12000', '15000', 'PCS', '20', '24 Oktober 2020', '24 Oktober 2021'),
(6, 'BRG006', 1, 'Pebran Roll', '15000', '18000', 'PCS', '25', '25 Oktober 2020', '25 Oktober 2021'),
(7, 'BRG007', 4, 'Hansaplast', '10000', '15000', 'PCS', '30', '26 Oktober 2020', '26 Oktober 2021'),
(8, 'BRG008', 2, 'Eye Drops', '11000', '15000', 'PCS', '40', '27 Oktober 2020', '27 Oktober 2021'),
(9, 'BRG009', 1, 'Rivanol', '11000', '13000', 'PCS', '10', '28 Oktober 2020', '28 Oktober 2021'),
(10, 'BRG010', 5, 'Doxyciline', '12000', '17000', 'PCS', '30', '29 Oktober 2020', '29 Oktober 2021'),
(11, 'BRG011', 2, 'Kartu Luka', '15000', '16000', 'PCS', '40', '30 Oktober 2020', '30 Oktober 2021'),
(12, 'BRG012', 3, 'Plester', '12000', '13000', 'PCS', '20', '28 Desember 2020', '28 Desember 2021'),
(13, 'BRG013', 4, 'Cairan Antiseptik', '14000', '15000', 'PCS', '35', '13 Agustus 2020', '13 Agustus 2021'),
(14, 'BRG014', 3, 'Cutton Bath', '13000', '15000', 'PCS', '50', '14 Januari 2020', '14 Januari 2021'),
(15, 'BRG015', 2, 'Kassa Steril', '12000', '13000', 'PCS', '40', '15 Januari 2020', '15 Januari 2021'),
(16, 'BRG016', 5, 'Masker', '15000', '16000', 'PCS', '25', '18 Maret 2020', '18 Maret 2021'),
(17, 'BRG017', 1, 'Vitamin', '15000', '18000', 'PCS', '65', '19 Maret 2020', '19 Maret 2021'),
(18, 'BRG018', 4, 'Asetosal', '12000', '15000', 'PCS', '35', '20 Maret 2020', '20 Maret 2021'),
(19, 'BRG019', 5, 'Citirizine', '7000', '10000', 'PCS', '20', '21 Maret 2020', '21 Maret 2021'),
(20, 'BRG020', 3, 'Entrostop', '10000', '11000', 'PCS', '15', '22 Maret 2020', '22 Maret 2021'),
(21, 'BRG021', 6, 'Paramex', '5000', '7000', 'PCS', '15', '23 Maret 2020', '23 Maret 2021'),
(22, 'BRG022', 3, 'Amoxilin', '11000', '13000', 'PCS', '30', '24 Maret 2020', '24 Maret 2021'),
(23, 'BRG023', 1, 'Sinvastatin', '12000', '14000', 'PCS', '30', '25 Maret 2020', '25 Maret 2021'),
(24, 'BRG024', 3, 'Sanmol', '11000', '13000', 'PCS', '20', '26 Maret 2020', '26 Maret 2021'),
(25, 'BRG025', 5, 'Acetaminophen ', '10000', '12000', 'PCS', '35', '27 Maret 2020', '27 Maret 2021'),
(26, 'BRG026', 6, 'Ampicillin', '15000', '17000', 'PCS', '25', '28 Maret 2020', '28 Maret 2021'),
(27, 'BRG027', 3, 'Oxymetazoline', '10000', '15000', 'PCS', '15', '18 Juni 2020', '18 Juni 2021'),
(28, 'BRG028', 2, 'Dextromethorphan', '12000', '14000', 'PCS', '10', '09 Juli 2020', '09 Juli 2021'),
(29, 'BRG029', 5, 'Aspirin', '11000', '14000', 'PCS', '20', '10 Juli 2020', '10 Juli 2021'),
(30, 'BRG030', 3, 'Baclofen', '8000', '10000', 'PCS', '30', '02 Februari 2020', '2 Februari 2021'),
(31, 'BRG031', 4, 'Bacitracin', '12000', '15000', 'PCS', '20', '03 Februari 2020', '3 Februari 2021'),
(32, 'BRG032', 1, 'Benadryl', '13000', '15000', 'PCS', '25', '4 Februari 2020', '4 Februari 2021'),
(33, 'BRG033', 2, 'Bactroban', '9000', '12000', 'PCS', '35', '5 Februari 2020', '5 Februari 2021'),
(34, 'BRG034', 5, 'Decitabine', '6000', '9000', 'PCS', '15', '6 Februari 2020', '6 Februari 2021'),
(35, 'BRG035', 2, 'Daun Ungu', '13000', '15000', 'PCS', '20', '7 Februari 2020', '7 Februari 2021'),
(36, 'BRG036', 2, 'Decolgen', '14000', '16000', 'PCS', '10', '8 Februari 2020', '8 Februari 2021'),
(37, 'BRG037', 5, 'Gliserol', '12000', '14000', 'PCS', '35', '9 Februari 2020', '9 Februari 2021'),
(38, 'BRG038', 3, 'Ibuprofen', '12000', '15000', 'PCS', '40', '10 Februari 2020', '10 Februari 2021'),
(39, 'BRG039', 4, 'Kalpanax', '10000', '13000', 'PCS', '25', '11 Februari 2020', '11 Februari 2021'),
(40, 'BRG040', 1, 'Microlax', '11000', '15000', 'PCS', '10', '12 Februari 2020', '12 Februari 2021'),
(41, 'BRG041', 5, 'Modafinil', '13000', '16000', 'PCS', '20', '13 Februari 2020', '13 Februari 2021'),
(42, 'BRG042', 6, 'Natur-E', '20000', '25000', 'PCS', '35', '14 Februari 2020', '14 Februari 2021'),
(43, 'BRG043', 2, 'Collagen', '15000', '17000', 'PCS', '20', '15 Februari 2020', '15 Februari 2021'),
(44, 'BRG044', 1, 'Imboost', '13000', '15000', 'PCS', '15', '16 Februari 2020', '16 Februari 2021'),
(45, 'BRG045', 3, 'Redoxone', '9000', '11000', 'PCS', '20', '17 Februari 2020', '17 Februari 2021'),
(46, 'BRG046', 4, 'Lotaradin', '15000', '16000', 'PCS', '15', '18 Februari 2020', '18 Februari 2021');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `tgl_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `tgl_input`) VALUES
(1, 'Salep Krim', '15 Januari 2020'),
(2, 'Bubuk', '21 Maret 2020'),
(3, 'Sirup', '18 Maret 2020'),
(4, 'Suntik', '23 Maret 2020'),
(5, 'Tablet', '19 Maret 2020'),
(6, 'Kapsul', '20 Maret 2020'),
(7, 'Cairan', '22 Maret 2020'),
(8, 'Obat Tetes', '24 Maret 2020');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` char(100) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `id_member`) VALUES
(1, 'vita', 'd852e2019cd5dbcf252bfcd3fffd2a5a', 1),
(2, 'trifine', '222529b7ef283eb9051278b4ddad92b8', 2),
(3, 'rydle', '230636d2569c0785fcd7c3af6e56538a', 3),
(4, 'erik', 'f12537e9605b2b1bf3122bb12a0e24f7', 4),
(5, 'fadhlul', 'f7d6014f5073dbb903ada6f60eccba1f', 5),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 6),
(7, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 7),
(8, 'kasir', 'c7911af3adbd12a035b289556d96470a', 8);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nm_member` varchar(255) NOT NULL,
  `alamat_member` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `alamat_member`, `email`, `telepon`, `gambar`) VALUES
(1, 'Vita Sariani', 'Perum Lobam Bestari Blok A1, No 03', 'vita@gmail.com', '081234567890', ''),
(2, 'Trifine Laurensi', 'Kabanjahe', 'trifine@gmail.com', '081991456723', 'WhatsApp Image 2021-12-09 at 16.09.51 (3).jpeg'),
(3, 'Erik Lorus', 'Jln Sunggal Gg. Mangga, Komp. The Lavender No AS18', 'erik@gmail.com', '085365176813', ''),
(4, 'Fadhlul Zaki', 'Jalan Sejati, Medan', 'fadhlul@gmail.com', '081209873456', '`'),
(5, 'Rydle Sianturi', 'Jln. Babalubis, Balige', 'rydle@gmail.com', '081356278907', ''),
(6, 'Admin', 'Medan', 'admin@gmail.com', '081991678923', ''),
(7, 'User', 'Medan', 'user@gmail.com', '081991726832', ''),
(8, 'Kasir', 'Medan', 'kasir@gmail.com', '081243516728', '');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_member` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `tanggal_input` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` text NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `tlp`, `nama_pemilik`) VALUES
(1, 'Apotek| Roxy Pharma', '', '0812-3467-8907', 'Kelompok 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
