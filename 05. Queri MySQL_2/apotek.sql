-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 02:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `no` int(11) NOT NULL,
  `Nama` varchar(16) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `supply` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`no`, `Nama`, `jenis`, `supply`) VALUES
(4, 'Ultraflu', 'Paracetamol', 300),
(5, 'Paramex', 'Paracetamol', 500),
(6, 'Ponstan', 'Asam Mefenamat', 200),
(7, 'Mylanta', 'Magnesium Hidroksida', 350);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_produksi` int(11) NOT NULL,
  `nama` varchar(16) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `exp` date NOT NULL,
  `no_katalog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_produksi`, `nama`, `jenis`, `exp`, `no_katalog`) VALUES
(4, 'Ultraflu', 'Asam Mefenamat', '2023-07-29', 4),
(5, 'Paramex', 'Paracetamol', '2023-07-19', 5),
(6, 'Ponstan', 'Asam Mefenamat', '2023-07-21', 6),
(7, 'Mylanta', 'Magnesium Hidroksida', '2024-07-03', 7);

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `kode_barang` int(12) NOT NULL,
  `nama_barang` varchar(16) NOT NULL,
  `barang_masuk` date NOT NULL,
  `barang_keluar` date NOT NULL,
  `stok_barang` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`kode_barang`, `nama_barang`, `barang_masuk`, `barang_keluar`, `stok_barang`) VALUES
(200, 'Ponstan', '2023-07-01', '2023-07-29', 3),
(300, 'Ultraflu', '2023-07-01', '2023-07-31', 1),
(350, 'Mylanta', '2023-07-21', '2023-07-22', 4),
(500, 'Paramex', '0000-00-00', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(16) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_barang` int(2) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `total_harga_barang` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `nama_barang`, `tanggal_transaksi`, `jumlah_barang`, `harga_barang`, `total_harga_barang`) VALUES
(1, 'Ultraflu', '2023-07-20', 4, 4, 20000),
(2, 'Paramex', '2023-07-01', 5, 5, 30000),
(3, 'Ponstan', '2023-07-01', 6, 6, 15000),
(4, 'Mylanta', '2023-07-22', 7, 7, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`no`),
  ADD KEY `supply` (`supply`),
  ADD KEY `supply_2` (`supply`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_produksi`),
  ADD KEY `fk_katalog` (`no_katalog`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `stok_barang` (`stok_barang`),
  ADD KEY `nama_barang` (`nama_barang`),
  ADD KEY `nama_barang_2` (`nama_barang`),
  ADD KEY `nama_barang_3` (`nama_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `nama_barang` (`nama_barang`),
  ADD KEY `jumlah_barang` (`jumlah_barang`),
  ADD KEY `total_harga_barang` (`harga_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `kode_produksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `kode_barang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_katalog` FOREIGN KEY (`no_katalog`) REFERENCES `katalog` (`no`);

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `katalog` (`supply`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supply_ibfk_2` FOREIGN KEY (`stok_barang`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`jumlah_barang`) REFERENCES `obat` (`kode_produksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`harga_barang`) REFERENCES `katalog` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
