-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 10:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `kode_khs` int(11) NOT NULL,
  `studentID` varchar(20) NOT NULL,
  `kode_term` varchar(4) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_krs` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`kode_khs`, `studentID`, `kode_term`, `keterangan`, `kode_krs`) VALUES
(1901, '03081200005', '1214', '', '1000000005'),
(1902, '03081200005', '1214', '', '1000000006'),
(1903, '03081200005', '1214', '', '1000000007');

-- --------------------------------------------------------

--
-- Table structure for table `khs_detail`
--

CREATE TABLE `khs_detail` (
  `kode_khs` int(50) NOT NULL,
  `kode_khs_detail` int(40) NOT NULL,
  `kode_krsdetail` varchar(20) NOT NULL,
  `NilaiHuruf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs_detail`
--

INSERT INTO `khs_detail` (`kode_khs`, `kode_khs_detail`, `kode_krsdetail`, `NilaiHuruf`) VALUES
(1901, 1000009, '100000000501', 'A'),
(1902, 1000008, '100000000502', 'A'),
(1903, 1000007, '100000000503', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `kode_krs` varchar(15) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `kode_term` varchar(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kode_krs`, `StudentID`, `kode_term`, `keterangan`) VALUES
('100000001', '0308120000', '1212', ''),
('100000002', '100000001', '1213', ''),
('100000003', '100000002', '1212', ''),
('100000004', '100000002', '1213', ''),
('1000000005', '03081200005', '1214', ''),
('1000000006', '03081200005', '1214', ''),
('1000000007', '03081200005', '1214', '');

-- --------------------------------------------------------

--
-- Table structure for table `krs_detail`
--

CREATE TABLE `krs_detail` (
  `kode_krsdetail` varchar(15) NOT NULL,
  `kode_krs` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs_detail`
--

INSERT INTO `krs_detail` (`kode_krsdetail`, `kode_krs`, `kode_matakuliah`) VALUES
('10000000101', '100000001', '2510'),
('10000000102', '100000001', '2538'),
('10000000201', '100000002', '2550'),
('10000000202', '100000002', '2759'),
('10000000301', '100000003', '2765'),
('10000000302', '100000003', '2793'),
('100000000501', '1000000005', 'M01'),
('100000000502', '1000000006', 'E02'),
('100000000503', '1000000007', 'J03');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `StudentID` varchar(15) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Tahun_masuk` varchar(4) NOT NULL,
  `id` int(11) NOT NULL,
  `term` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`StudentID`, `Nama`, `Jurusan`, `Tahun_masuk`, `id`, `term`) VALUES
('03081200005', 'SABRINA JOVANKA', 'SISTEM INFORMASI', '2020', 1, '1212'),
('03081200005', 'SABRINA JOVANKA', 'SISTEM INFORMASI', '2020', 2, '1214');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(6) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `id_matkul`) VALUES
('2510', 'DASAR MANAJEMEN KEUANGAN PERUSAHAAN', 3, 1),
('2538', 'MANAJEMEN STRATEGIS PERUSAHAAN', 3, 2),
('2550', 'ENTEPRISE INFORMATION SYSTEMS', 3, 3),
('2759', 'DIGITAL MARKETING', 3, 4),
('2765', 'BUSINESS APPLICATION PROGRAMMING', 4, 5),
('2793', 'AUDIT & KONTROL SISTEM INFORMASI', 4, 6),
('M01', 'Multimedia and The Web', 3, 7),
('E02', 'Enterprise Architecture', 3, 8),
('J03', 'Jaringan dan Keamanan Komputer', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah_kuis`
--

CREATE TABLE `matakuliah_kuis` (
  `no` int(20) NOT NULL,
  `kodemataKuliah` int(20) NOT NULL,
  `namamataKuliah` varchar(200) NOT NULL,
  `sks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `kode_term` varchar(4) NOT NULL,
  `tahun_ajar` varchar(4) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`kode_term`, `tahun_ajar`, `semester`, `keterangan`) VALUES
('1212', '2020', 'GANJIL', ''),
('1213', '2020', 'GENAP', ''),
('1214', '2022', 'AKSELERASI', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `studentID` bigint(20) NOT NULL,
  `term` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `studentID`, `term`) VALUES
(1, 'SABRINA JOVANKA', 3081200005, 1212);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
