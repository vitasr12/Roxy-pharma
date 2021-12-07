-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 09:12 AM
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
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nm_barang` varchar(100) DEFAULT NULL,
  `id_supplier` varchar(11) DEFAULT NULL,
  `ket_barang` text DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `gambar`, `nm_barang`, `id_supplier`, `ket_barang`, `stock`, `harga`) VALUES
(0, '', '', '', '', 0, 0),
(101, 'product_02.png', 'Acyclovir Tablet', '001', 'Cream, salep kulit, salep mata.', 100, 17000),
(102, 'product_01.png', 'Alprazolam', '002', 'Tablet, kaplet', 120, 15000),
(103, 'product_03.png', 'Antibiotik Polipeptida', '003', 'tablet,krim, salep, tetes mata, tetes telinga.', 100, 17000),
(104, 'product_04.png', 'Bismuth Subsalicylate', '004', 'Tablet dan kaplet', 120, 17500),
(105, 'product_05.png', 'Chloramphenicol', '005', 'Tablet, kapsul, sirop, obat tetes, salep, dan suntik', 150, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` varchar(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kota` varchar(30) NOT NULL,
  `kode_pos` int(4) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `nama`, `kota`, `kode_pos`, `telp`, `gender`) VALUES
('CM01', 'Vita Sariani', 'Batam', 29411, '081298128734', 'Perempuan'),
('CM02', 'Triffine ', 'Medan', 20111, '081991807654', 'Perempuan'),
('CM03', 'Rydel Sianturi', 'Toba', 22315, '081364897623', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `id_pembelian` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_barang`, `kuantitas`, `tgl_pesan`, `id_pembelian`) VALUES
('BRG01', 101, 200, '2020-05-12', 'CM01'),
('BRG02', 102, 200, '2020-05-22', 'CM02'),
('BRG03', 103, 200, '2020-06-02', 'CM03');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kode_pos` int(5) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `kota`, `kode_pos`, `telp`) VALUES
('003', 'Rahmat Adiwijaya', 'Medan', 28753, '081234567891'),
('005', 'Sembarangan', 'Batam', 29150, '081298763451');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` varchar(8) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `foto`, `level`, `password`) VALUES
(1, 'vitasr', 'vita', 'vita@gmail.com', '', 'admin', '123456'),
(2, 'trifine', 'triffine', 'triffine@gmail.com', '', 'admin', '123'),
(3, 'rydle12', 'rydle', 'rydel@gmail.com', '', 'admin', '146'),
(4, 'erik123', 'erik', 'erik@gmail.com', '', 'admin', '357'),
(5, 'fadhlul12', 'fadhlul', 'fadhlul@gmail.com', '', 'admin', '098');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
