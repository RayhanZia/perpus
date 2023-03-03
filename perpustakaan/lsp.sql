-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2023 at 07:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_kategori` int NOT NULL,
  `id_penerbit` int NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun_terbit` year NOT NULL,
  `isbn` int DEFAULT NULL,
  `j_buku_baik` int NOT NULL,
  `j_buku_rusak` int NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `id_kategori`, `id_penerbit`, `pengarang`, `tahun_terbit`, `isbn`, `j_buku_baik`, `j_buku_rusak`, `updated_at`, `deleted_at`, `foto`) VALUES
(1, 'Sejarah Majapahit', 3, 1, 'Gadjah Mada', 2020, NULL, 14, 7, NULL, NULL, ''),
(2, 'Cara Membuat Roket Air', 2, 4, 'Pak Udin', 2023, NULL, 20, 10, NULL, NULL, ''),
(3, 'Diary Pak Alex', 1, 4, 'Pak Alex', 2022, NULL, 30, 15, NULL, NULL, ''),
(4, 'Tutorial Memasak', 1, 4, 'adigeming', 2020, 242415523, 30, 5, '2023-02-14 03:21:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `nama`, `alamat`, `email`, `nomor_hp`, `update_at`, `deleted_at`, `foto`) VALUES
(1, 'Eperpus SMKN 64 JAKARTA', 'Jl jaani Nasir Cawang UKI', ' info@smkn64-jkt.sch.id', '081234567', NULL, NULL, '../assets/img/20230214025221proxgram1.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kode`, `nama`, `updated_at`, `deleted_at`) VALUES
(1, 'U1', 'umum', NULL, NULL),
(2, 'SA01', 'sains', NULL, NULL),
(3, 'SE01', 'sejarah', NULL, NULL),
(4, 'TE01', 'technologi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuan`
--

CREATE TABLE `pemberitahuan` (
  `id` int NOT NULL,
  `isi` varchar(255) NOT NULL,
  `level_user` enum('user','admin') NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `judul_buku` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemberitahuan`
--

INSERT INTO `pemberitahuan` (`id`, `isi`, `level_user`, `status`, `updated_at`, `deleted_at`, `judul_buku`) VALUES
(1, 'HAI Proxgramers EPERPUS 64 Menambahkan Buku Baru Loh', 'user', 'aktif', NULL, NULL, NULL),
(2, 'KALIAN SEMUA KEREN', 'user', 'aktif', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_buku` int NOT NULL,
  `tanggal_peminjaman` datetime NOT NULL,
  `tanggal_pengembalian` datetime DEFAULT NULL,
  `kondisi_buku_pinjam` enum('baik','rusak') NOT NULL,
  `kondisi_buku_kembali` enum('baik','rusak','hilang') DEFAULT NULL,
  `denda` float DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_user`, `id_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `kondisi_buku_pinjam`, `kondisi_buku_kembali`, `denda`, `updated_at`, `deleted_at`) VALUES
(1, 9, 2, '2023-03-03 06:46:23', '2023-03-03 06:46:25', 'baik', 'baik', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `verif` enum('verified','unverified') NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `kode`, `nama`, `verif`, `updated_at`, `deleted_at`) VALUES
(1, 'airlangga', 'airlangga', 'verified', NULL, NULL),
(4, 'bse', 'BSE', 'verified', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int NOT NULL,
  `id_penerima` int NOT NULL,
  `id_pengirim` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status` enum('terkirim','dibaca') NOT NULL,
  `tanggal_kirim` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `user_deleted_at` datetime DEFAULT NULL,
  `admin_deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `id_penerima`, `id_pengirim`, `judul`, `isi`, `status`, `tanggal_kirim`, `deleted_at`, `user_deleted_at`, `admin_deleted_at`) VALUES
(1, 1, 2, 'WELCOME', 'Selamata Datang Anggota Baru', 'dibaca', '2023-02-15 08:11:16', NULL, NULL, NULL),
(2, 2, 1, 'HAI ADMIN', 'halo keren', 'dibaca', '2023-02-13 06:54:24', NULL, NULL, NULL),
(3, 1, 2, 'HAI', 'loremaneiuadbwb qbwdbdwu dwd ', 'terkirim', NULL, NULL, '2023-02-14 01:15:34', NULL),
(4, 1, 2, 'SELAMAT KAMU MEMENANGKAN UNDIAN', 'asikkkk menang', 'terkirim', '2023-02-14 02:28:48', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `alamat` text,
  `verif` enum('verified','unverified') NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `join_date` datetime NOT NULL,
  `terakhir_login` datetime DEFAULT NULL,
  `foto` text,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `kode`, `nis`, `fullname`, `username`, `password`, `kelas`, `alamat`, `verif`, `role`, `join_date`, `terakhir_login`, `foto`, `updated_at`, `deleted_at`) VALUES
(1, 'AG1', '0073', 'Achmad Zikran Maulida', 'ZeroZen', '123', 'XII RPL', 'Lubang Buaya', 'verified', 'user', '2023-02-13 02:50:46', '2023-02-14 09:03:19', '../assets/img/20230213072450person_profile.jpg', '2023-02-13 07:24:50', NULL),
(2, 'AD01', NULL, 'admin eperpus ', 'admin27', 'admin', NULL, NULL, 'verified', 'admin', '2023-02-13 02:51:22', '2023-02-14 08:00:20', '../assets/img/20230213072450samurai.jpg', NULL, NULL),
(3, 'AG2', '0074', 'Adi Syahputra', 'adi2005', '123', 'XII RPL', 'depok', 'verified', 'user', '2023-02-13 03:28:21', NULL, NULL, NULL, NULL),
(4, 'AG3', '0075', 'Aditya Dharmawan', 'adit123', '123', 'XII RPL', NULL, 'unverified', 'user', '2023-02-13 03:41:32', NULL, NULL, NULL, NULL),
(5, 'AD02', NULL, 'Admin BackEnd', 'adminbackend', 'admin', NULL, NULL, 'verified', 'admin', '2023-02-13 06:44:12', NULL, NULL, NULL, '2023-02-14 02:54:49'),
(6, 'AG4', '0075', 'Alfian', 'fianese', '123', 'XII RPL', 'Kalisari', 'verified', 'user', '2023-02-14 00:57:44', '2023-02-14 01:16:26', '../assets/img/user.png', NULL, NULL),
(7, 'AD03', NULL, 'Admin Web Design', 'Adweb', 'admin', '', 'admin web lonndon', 'verified', 'admin', '2023-02-14 02:59:41', NULL, '../assets/img/user.png', NULL, NULL),
(8, '', '0056', 'akmal', 'akmal', '123', NULL, NULL, 'unverified', 'user', '2023-02-14 04:02:28', NULL, '../assets/img/user.png', NULL, NULL),
(9, NULL, NULL, 'kon', 'sergi', '123', 'tol', '123123123', 'verified', 'user', '2023-03-03 04:17:10', NULL, '1677827810_K.jfif', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `judul_buku` (`judul_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penerima` (`id_penerima`),
  ADD KEY `id_pengirim` (`id_pengirim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD CONSTRAINT `pemberitahuan_ibfk_1` FOREIGN KEY (`judul_buku`) REFERENCES `buku` (`id`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_penerima`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_pengirim`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
