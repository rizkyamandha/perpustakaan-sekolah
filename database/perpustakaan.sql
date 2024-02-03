-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 05:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `no_buku` int(20) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `judul`, `no_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Pola Arsitektur Aplikasi Perusahaan', 215, 'Martin Fowler', 'Pearson Addison-wesley Profesional', '2015-01-20'),
(3, 'Kode Bersih', 404, 'Robert C.Martin', 'PHI', '2007-02-17'),
(4, 'Akutansi Pengantar 1', 705, 'Supardi', 'gava Media', '2009-05-07'),
(5, 'Bangsa Gagal Mencari Identitas keBangsaan', 805, 'Nasruddin Anshoriy', 'LKiS', '2008-08-14'),
(6, 'coding', 905, 'epan', 'kampus itb indonesia', '2024-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(2, 'Budi', 'budi@gmail.com', 'Secara desain sudah bisa, tetapi sebaiknya dilakukan update secara berkala pada website agar lebih informatif ', '2023-12-18 03:05:51'),
(3, 'Delta', 'delta@yahoo.com', 'Tes saja ', '2023-12-18 03:06:29'),
(0, 'Budi', 'budi@gmail.com', ' terimakasih', '2024-01-25 14:29:32'),
(0, 'Daulat fourman hia', 'daulat@gmail.com', ' kurang bagus!', '2024-01-26 05:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `no_buku` varchar(20) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jumlah_pinjam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `nisn`, `nama`, `judul_buku`, `no_buku`, `tanggal_pinjam`, `tanggal_pengembalian`, `jumlah_pinjam`) VALUES
(1, '21040039', 'rizky amandha', 'Akutansi pengantar 1', '705', '2024-01-25', '2024-02-25', '1'),
(2, '2132435', 'Daulat F.H', 'Coding', '7023', '2024-02-11', '2024-03-11', '1'),
(3, '347652', 'Ade ', 'Hardware dan Software', '1734', '2024-02-17', '2024-02-17', '1'),
(4, '2568775', 'Alvin', 'Bentang Pustaka', '8775', '2024-02-27', '2024-03-27', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `pendaftaran_id` int(5) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`pendaftaran_id`, `nisn`, `nama`, `jenis_kelamin`, `kelas`, `jurusan`) VALUES
(1, '1214325', 'rizky amandha', 'Laki-laki', 'XII', 'Otomotif'),
(2, '143435', 'Proposal', 'Laki-laki', 'XI', 'Rekayasa Perangkat Lunak'),
(3, '21040039', 'Daulat fourman hia', 'Laki-laki', 'XII', 'Management'),
(4, '62187352', 'Evan Edward', 'Laki-laki', 'X', 'Otomotif'),
(5, '85643975', 'Andri', 'Laki-laki', 'XII', 'Management'),
(6, '587579', 'Ade', 'Laki-laki', 'X', 'Rekayasa Perangkat Lunak'),
(7, '9656507', 'Alvin', 'Laki-laki', 'XI', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(5) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `nisn`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `telepon`, `email`, `kelas`, `jurusan`, `alamat`) VALUES
(2, '21040039', 'rizky amandha', 'Laki-laki', '2001-02-10', '0824364765', 'rizkiamandha76@gmail.com', 'XII', 'Rekayasa Perangkat Lunak', 'Medan'),
(3, '151364642', 'Evan Edward', 'Laki-laki', '2024-05-23', '082436476576', 'Evan@gmail.com', 'XI', 'Management', 'Royal Kost'),
(4, '2104567', 'Andri', 'Laki-laki', '2011-12-13', '0822334455', 'Andri@gmail.com', 'X', 'Otomotif', 'Royal Kost'),
(5, '2175537', 'Proposal', 'Laki-laki', '2022-02-22', '08535251', 'Proposal@gmail.com', 'XII', 'Management', 'China'),
(6, '1434353', 'Alvin', 'Laki-laki', '2020-12-03', '082436476576', 'Alvin@gmail.com', 'X', 'Rekayasa Perangkat Lunak', 'Medan'),
(7, '905747', 'Ade', 'Laki-laki', '1999-07-04', '0824364765', 'Ade@gmail.com', 'X', 'Otomotif', 'binjai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'rizkiamandha@gmail.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-01-29 14:06:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`pendaftaran_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pendaftaran_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
