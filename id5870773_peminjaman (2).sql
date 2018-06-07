-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 06:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5870773_peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_fasilitas`
--

CREATE TABLE `detail_fasilitas` (
  `ID_Detail` int(11) NOT NULL,
  `ID_Peminjam` int(11) NOT NULL,
  `ID_Fasilitas` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_fasilitas`
--

INSERT INTO `detail_fasilitas` (`ID_Detail`, `ID_Peminjam`, `ID_Fasilitas`, `Jumlah`, `Keterangan`) VALUES
(1, 1, 3, 28, 'untuk peserta'),
(2, 2, 1, 3, 'untuk undangan');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `ID_Fasilitas` int(11) NOT NULL,
  `Nama_Fasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`ID_Fasilitas`, `Nama_Fasilitas`) VALUES
(1, 'Kursi'),
(2, 'Meja'),
(3, 'Sound');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `ID_Gedung` int(11) NOT NULL,
  `Nama_Gedung` varchar(30) NOT NULL,
  `Deskripsi` char(13) NOT NULL,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`ID_Gedung`, `Nama_Gedung`, `Deskripsi`, `NIP`) VALUES
(1, 'gor', 'gedung gor', '1'),
(2, 'aula', 'hbnm,', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(20) NOT NULL,
  `Nama_Pegawai` varchar(30) NOT NULL,
  `NoHp_Pegawai` char(13) NOT NULL,
  `JK_Pegawai` varchar(6) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Alamat_Pegawai` text NOT NULL,
  `level` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `Nama_Pegawai`, `NoHp_Pegawai`, `JK_Pegawai`, `Password`, `Alamat_Pegawai`, `level`) VALUES
('1', 'pegawaiGor', '088899', 'p', 'gor', 'jln kaliamantan', 'petugas'),
('2', 'pegawaiAula', '087776677', 'p', 'aula', 'mastrip', 'petugas'),
('3', 'Ali', '0800000', 'L', 'ali', 'dek endi yoh?', 'kepala');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_Peminjam` int(11) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `ID_Gedung` int(11) NOT NULL,
  `Keperluan` text NOT NULL,
  `Lama_pinjam` varchar(30) NOT NULL,
  `Tanggal_pinjam` date NOT NULL,
  `Tambahan` text,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`ID_Peminjam`, `NIM`, `ID_Gedung`, `Keperluan`, `Lama_pinjam`, `Tanggal_pinjam`, `Tambahan`, `Status`) VALUES
(1, 'Efufhfj', 1, 'ghcg', '5', '2018-06-07', 'vhjvj', 'ditolak'),
(2, '54715274857', 2, 'diklat pramuka', '07.00-09.00', '2018-06-20', 'peletakan kursi di kanan dan kiri', 'disetujui'),
(3, 'sdsds', 2, 'pembukaan', '07.00-09.30', '2018-06-15', 'gak ada', 'diproses');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `NIM` varchar(12) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `noHp_pengguna` char(12) DEFAULT NULL,
  `jk_pengguna` varchar(6) NOT NULL,
  `password` varchar(15) NOT NULL,
  `alamat_pengguna` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`NIM`, `nama_pengguna`, `noHp_pengguna`, `jk_pengguna`, `password`, `alamat_pengguna`) VALUES
('1', 'ciel', '898898989', 'p', '123', 'kos ciel'),
('54715274857', 'entahlah', 'yeufhfh', 'Pria', '123', 'hfjejdhhdh'),
('E41161676', 'dimas', 'qwerty', 'Wanita', '123', 'gfifg\nhfirjfn\njfjfj'),
('Efufhfj', 'dimas', '087653', 'Pria', '12345', 'hfufhfu'),
('sdsds', 'sdsdd', '0897642110', 'L', '12345', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  ADD PRIMARY KEY (`ID_Detail`),
  ADD KEY `ID_Peminjam` (`ID_Peminjam`),
  ADD KEY `ID_Fasilitas` (`ID_Fasilitas`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`ID_Fasilitas`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`ID_Gedung`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_Peminjam`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `ID_Gedung` (`ID_Gedung`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  MODIFY `ID_Detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `ID_Fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `ID_Peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  ADD CONSTRAINT `detail_fasilitas_ibfk_1` FOREIGN KEY (`ID_Fasilitas`) REFERENCES `fasilitas` (`ID_Fasilitas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_fasilitas_ibfk_2` FOREIGN KEY (`ID_Peminjam`) REFERENCES `peminjaman` (`ID_Peminjam`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gedung`
--
ALTER TABLE `gedung`
  ADD CONSTRAINT `gedung_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`ID_Gedung`) REFERENCES `gedung` (`ID_Gedung`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `pengguna` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
