-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 01:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `idkembali` int(30) NOT NULL,
  `idpinjam` int(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kembali`
--

INSERT INTO `kembali` (`idkembali`, `idpinjam`, `created_at`) VALUES
(1, 11, '2023-01-12 07:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `idbuku` int(20) NOT NULL,
  `kodebuku` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`idbuku`, `kodebuku`, `judul`, `pengarang`, `penerbit`, `created_at`, `updated_at`) VALUES
(1, '4422', 'Tenggelamnya Kapal Van Der Wicjk', 'Buya Hamka', 'Gramediaa', '2022-12-07 05:42:35', '2022-12-07 05:42:35'),
(2, '8574', 'Naruto Shipudden', 'Naruto Uzumaki', 'Global TV', '2022-12-07 06:15:21', '2022-12-07 06:15:21'),
(4, '3531', 'Kisah Negeri Wakanda', 'TChalla', 'Marvel', '2022-12-09 05:37:22', '2022-12-09 05:37:22'),
(5, '3412', 'Upin - Ipin', 'Ato Dalang', 'Rosalinda', '2022-12-11 05:31:16', '2022-12-11 05:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `idpinjam` int(20) NOT NULL,
  `idpetugas` int(20) NOT NULL,
  `idsiswa` int(20) NOT NULL,
  `idbuku` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`idpinjam`, `idpetugas`, `idsiswa`, `idbuku`, `created_at`, `updated_at`) VALUES
(0, 1, 0, 4, '2023-01-18 00:45:33', '2023-01-18 00:45:33'),
(1, 1, 1, 1, '2022-12-11 06:11:16', '2022-12-11 06:11:16'),
(2, 1, 1, 5, '2022-12-11 06:15:08', '2022-12-11 06:15:08'),
(99, 1, 1, 2, '2022-12-16 07:43:10', '2022-12-16 07:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `idpetugas` int(10) NOT NULL,
  `namapetugas` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`idpetugas`, `namapetugas`, `hp`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '0895333212323', 'admin', 'admin', '2022-12-08 01:40:34', '2022-12-08 01:40:34'),
(123, '123', '56565', 'joko', 'joko', '2023-01-12 13:19:47', '2023-01-12 13:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `idsiswa` int(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`idsiswa`, `nis`, `namasiswa`, `kelas`, `alamat`, `hp`) VALUES
(0, '0092', 'RayhanZ', 'XII', '-', '0895121256'),
(1, '1234', 'budi budiman', 'XI', 'jalan apa aja', '0895333212323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`idkembali`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`idpinjam`),
  ADD KEY `idpetugas` (`idpetugas`) USING BTREE,
  ADD KEY `idbuku` (`idbuku`) USING BTREE,
  ADD KEY `idsiswa` (`idsiswa`) USING BTREE;

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`idsiswa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `tbl_peminjaman_ibfk_1` FOREIGN KEY (`idsiswa`) REFERENCES `tbl_siswa` (`idsiswa`),
  ADD CONSTRAINT `tbl_peminjaman_ibfk_2` FOREIGN KEY (`idpetugas`) REFERENCES `tbl_petugas` (`idpetugas`),
  ADD CONSTRAINT `tbl_peminjaman_ibfk_3` FOREIGN KEY (`idbuku`) REFERENCES `tbl_buku` (`idbuku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
