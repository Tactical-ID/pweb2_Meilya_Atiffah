-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 02:11 AM
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
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
('1', 'Otomotif'),
('2', 'Perbankan Syariah'),
('3', 'Farmasi'),
('4', 'Kimia Analis'),
('5', 'Farmasi Industri'),
('8', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_spp`
--

CREATE TABLE `pembayaran_spp` (
  `id_pembayaran` int NOT NULL,
  `id_siswa` int NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `jumlah_tagihan` decimal(10,0) NOT NULL,
  `jumlah_bayar` int DEFAULT '0',
  `status_pembayaran` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `virtual_account` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`id_pembayaran`, `id_siswa`, `nama_siswa`, `nama_jurusan`, `bulan`, `jumlah_tagihan`, `jumlah_bayar`, `status_pembayaran`, `virtual_account`) VALUES
(234353, 7, 'Satria Yudha', 'Otomotif', 'januari', '200000', 0, NULL, ''),
(445237, 9, 'merisa nih', 'Perbankan Syariah', 'januari', '200000', 200000, 'Lunas', ''),
(667467, 4, 'Alifia Muthi Afifa', 'Farmasi', 'Januari', '200000', 200000, 'Lunas', ''),
(768865, 6, 'Chinta Fitriana', 'Farmasi Industri', 'januari', '200000', 0, NULL, ''),
(776547, 2, 'Aisyah Nur Karimah', 'Kimia Analis', 'januari', '200000', 0, NULL, ''),
(998787, 3, 'Meilya Atiffah', 'Perbankan Syariah', 'januari', '200000', 200000, 'Lunas', 'VA-1234567890'),
(998788, 3, 'Meilya Atiffah', 'Perbankan Syariah', 'Maret', '200000', 200000, 'Lunas', ''),
(998792, 4, 'Alifia Muthi Afifa', 'Farmasi', 'Februari', '200000', 0, NULL, ''),
(998793, 3, 'Meilya Atiffah', 'Perbankan Syariah', 'April', '200000', 0, 'Belum Lunas', 'VA-9876543211'),
(998794, 7, 'Satria Yudha', 'Otomotif', 'Maret', '200000', 0, NULL, ''),
(998796, 11, 'Duan Xiaju', 'Otomotif', 'Januari', '200000', 0, NULL, ''),
(998798, 3, 'Meilya Atiffah', 'Perbankan Syariah', 'Februari', '200000', 200000, 'Lunas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `hak_akses`, `password`) VALUES
(1, 'meilya', 'siswa', '776775'),
(2, 'susanto', 'admin', '55643'),
(3, 'Meilya Atiffah', 'siswa', '656565'),
(5, 'Admin1', 'admin', '55432'),
(6, 'Admin2', 'Admin', '98765');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`, `tanggal`) VALUES
(2, 'Pemberitahuan Pembayaran SPP', 'Sehubungan dengan akan dilaksanakannya Ujian Akhir Semester (UAS), kami mengingatkan kepada seluruh siswa untuk segera melakukan pembayaran SPP.\r\nPembayaran yang tepat waktu akan membantu kelancaran administrasi dan memastikan Anda dapat mengikuti UAS tanpa kendala.\r\nTerima kasih atas kerjasama Anda.', '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int NOT NULL,
  `nis` int NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nama_jurusan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `alamat`, `tgl_lahir`, `jenis_kelamin`, `nama_jurusan`, `foto`) VALUES
(2, 220302075, 'Aisyah Nur Karimah', 'jalan benggala', '2004-02-07', 'Perempuan', 'Perbankan Syariah', ''),
(3, 220302059, 'Meilya Atiffah', 'jalan ganggeng', '2003-06-05', 'Perempuan', 'Otomotif', ''),
(4, 220202056, 'Alifia Muthi Afifa', 'Pekuncen', '2003-08-02', 'Perempuan', 'Farmasi', ''),
(6, 220203045, 'Chinta Fitriana', 'Banyumas', '2004-09-05', 'Perempuan', 'Otomotif', ''),
(7, 220302087, 'Satria Yudha', 'jalan slamet', '2004-07-04', 'Laki-Laki', 'Otomotif', ''),
(11, 220202054, 'Duan Xiaju', 'Korea', '2002-11-01', 'Laki-Laki', 'Otomotif', NULL),
(14, 220203876, 'Eunwoo', 'Korea', '2003-08-17', 'Laki-Laki', 'Otomotif', NULL),
(220302103, 220102976, 'Nunu', 'clp', NULL, 'Laki-Laki', 'Informatika', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=998799;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220302104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
