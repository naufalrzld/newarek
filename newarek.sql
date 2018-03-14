-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 01:31 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newarek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_users` int(11) NOT NULL,
  `real_name` varchar(200) NOT NULL,
  `status` enum('admin','super admin') NOT NULL DEFAULT 'admin',
  `id_pengaturan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(100) NOT NULL,
  `status_upload` int(11) NOT NULL DEFAULT '0',
  `tgl_upload` datetime NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Fakultas Teknik Elektro'),
(2, 'Fakultas Teknik Informatika'),
(3, 'Fakultas Rekayasa Industri'),
(4, 'Fakultas Ekonomi dan Bisnis'),
(5, 'Fakultas Komunikasi dan Bisnis'),
(6, 'Fakultas Industri Kreatif'),
(7, 'Fakultas Ilmu Terapan');

-- --------------------------------------------------------

--
-- Table structure for table `menilai`
--

CREATE TABLE `menilai` (
  `id_penilaian` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id_users` int(11) NOT NULL,
  `student_id` varchar(10) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `id_line` varchar(50) NOT NULL,
  `minat` enum('UI','MP','BA','Belum') DEFAULT NULL,
  `status_paspor` int(11) NOT NULL DEFAULT '0',
  `gender` varchar(9) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fakultas` int(11) DEFAULT NULL,
  `program` int(11) DEFAULT NULL,
  `status_bio` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id_users`, `student_id`, `name`, `id_line`, `minat`, `status_paspor`, `gender`, `angkatan`, `email`, `fakultas`, `program`, `status_bio`) VALUES
(10, '1301150034', 'Rama Aditya Maulana', 'ramaadtym', 'MP', 0, 'Laki-laki', 2015, 'ramaadtym@gmail.com', 2, 8, 0),
(11, '1301154160', 'Faishal Rachman', 'ipatganteng', 'BA', 0, 'Laki-laki', 2013, 'ipat@gmail.com', 2, 8, 1),
(12, NULL, 'apri', '', NULL, 0, 'Laki-laki', 0, 'aprianil@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `tgl_pengumuman_t1` datetime NOT NULL,
  `tgl_pengumuman_t2` datetime NOT NULL,
  `tgl_penutupan_dftr` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `tgl_penilaian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `id_fakultas`, `nama_prodi`) VALUES
(1, 1, 'S1 Teknik Telekomunikasi'),
(2, 1, 'S1 Teknik Telekomunikasi (International)'),
(3, 1, 'S1 Teknik Elektro'),
(4, 1, 'S1 Teknik Elektro (International)'),
(5, 1, 'S1 Teknik Fisika'),
(6, 1, 'S1 Sistem Komputer'),
(7, 1, 'S2 Teknik Elektro-Telekomunikasi'),
(8, 2, 'S1 Teknik Informatika'),
(9, 2, 'S1 Teknik Informatika (International)'),
(10, 2, 'S1 Teknologi Informasi'),
(11, 2, 'S2 Teknik Informatika'),
(12, 3, 'S1 Teknik Industri'),
(13, 3, 'S1 Teknik Industri (International)'),
(14, 3, 'S1 Sistem Informasi'),
(15, 3, 'S1 Sistem Informasi (International)'),
(16, 3, 'S2 Teknik Industri'),
(17, 4, 'S1 International ICT Business'),
(18, 4, 'S1 MBTI'),
(19, 4, 'S1 Akuntansi'),
(20, 5, 'S1 Administrasi Bisnis'),
(21, 5, 'S1 Administrasi Bisnis (International)'),
(22, 5, 'S1 Ilmu Komunikasi'),
(23, 5, 'S1 Ilmu Komunikasi (International Class)'),
(24, 5, 'S1 Digital Public Relation'),
(25, 7, 'D3 Teknik Telekomunikasi'),
(26, 7, 'D3 Teknik Informatika'),
(27, 7, 'D3 Manajemen Informatika'),
(28, 7, 'D3 Komputerisasi Akuntansi'),
(29, 7, 'D3 Teknik Komputer'),
(30, 7, 'D3 Manajemen Pemasaran'),
(31, 7, 'D3 Perhotelan'),
(32, 7, 'S1 Terapan Sistem Mulimedia'),
(33, 6, 'S1 Desain Komunikasi Visual'),
(34, 6, 'S1 Desain Komunikasi Visual (International)'),
(35, 6, 'S1 Desain Produk'),
(36, 6, 'S1 Desain Interior'),
(37, 6, 'S1 Kriya Tekstil dan Mode'),
(38, 6, 'S1 Creative Arts (Painting, Photography & Film, and Intermedia)');

-- --------------------------------------------------------

--
-- Table structure for table `tahapdua`
--

CREATE TABLE `tahapdua` (
  `id_penilaian` int(11) NOT NULL,
  `status_t2` enum('Tidak Lulus','Lulus') NOT NULL DEFAULT 'Tidak Lulus',
  `komentar` text NOT NULL,
  `score_wawancara` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahapsatu`
--

CREATE TABLE `tahapsatu` (
  `id_penilaian` int(11) NOT NULL,
  `status_t1` enum('Tidak Lulus','Lulus') NOT NULL DEFAULT 'Tidak Lulus',
  `score_tes` int(20) NOT NULL,
  `status_berkas` enum('Tidak Lengkap','Lengkap') NOT NULL DEFAULT 'Tidak Lengkap',
  `pj_nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `last_login`) VALUES
(10, 'ramaadtym', '$2a$08$9tAwHRhm4rpHdh7VLtfbleF/0j3aajAaDZBC.nYAJyBXRVw2bnGnO', '2018-03-14 03:56:12'),
(11, 'ipatganteng', '$2a$08$WrCoaNfrMx6TuMdd9Bk7sewN/uPgKjUv7UjlS0tMCbSx38sIE9qXq', '2018-03-14 05:42:28'),
(12, 'aprianil', '$2a$08$Yi4ITHAqZR7DpqpJ1iS/s.DU6q/sOL4D1AdKX.vkfcYYNP4YaCbvS', '2018-03-14 07:06:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `FK_pengaturan` (`id_pengaturan`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `FK_berkas` (`id_users`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `menilai`
--
ALTER TABLE `menilai`
  ADD PRIMARY KEY (`id_penilaian`,`id_users`),
  ADD KEY `FK_menilai_admin` (`id_users`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `FK_idFakultas` (`fakultas`),
  ADD KEY `FK_idProdi` (`program`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `FK_penilaian` (`id_users`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tahapdua`
--
ALTER TABLE `tahapdua`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tahapsatu`
--
ALTER TABLE `tahapsatu`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tahapdua`
--
ALTER TABLE `tahapdua`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahapsatu`
--
ALTER TABLE `tahapsatu`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_admin` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pengaturan` FOREIGN KEY (`id_pengaturan`) REFERENCES `pengaturan` (`id_pengaturan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `FK_berkas` FOREIGN KEY (`id_users`) REFERENCES `participants` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menilai`
--
ALTER TABLE `menilai`
  ADD CONSTRAINT `FK_menilai_admin` FOREIGN KEY (`id_users`) REFERENCES `admin` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_menilai_penilaian` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `FK_idFakultas` FOREIGN KEY (`fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idProdi` FOREIGN KEY (`program`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_participants` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `FK_penilaian` FOREIGN KEY (`id_users`) REFERENCES `participants` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tahapdua`
--
ALTER TABLE `tahapdua`
  ADD CONSTRAINT `FK_tahapdua` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tahapsatu`
--
ALTER TABLE `tahapsatu`
  ADD CONSTRAINT `FK_tahapsatu` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
