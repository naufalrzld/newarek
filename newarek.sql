-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mar 2018 pada 16.55
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_users` int(11) NOT NULL,
  `real_name` varchar(200) NOT NULL,
  `status` enum('admin','super admin') NOT NULL DEFAULT 'admin',
  `id_pengaturan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(100) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `nama_berkas`, `tgl_upload`, `path`) VALUES
(1, 'b374kshell1.zip', '2018-03-14 00:00:00', 'C:/xampp/htdocs/newarek/uploads/b374kshell1.zip'),
(2, 'b374kshell2.zip', '2018-03-14 00:00:00', 'C:/xampp/htdocs/newarek/uploads/b374kshell2.zip'),
(3, 'b374kshell3.zip', '2018-03-14 00:00:00', 'C:/xampp/htdocs/newarek/uploads/b374kshell3.zip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
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
-- Struktur dari tabel `menilai`
--

CREATE TABLE `menilai` (
  `id_penilaian` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `participants`
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
  `status_bio` int(11) NOT NULL DEFAULT '0',
  `id_berkas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `tgl_pengumuman_t1` datetime NOT NULL,
  `tgl_pengumuman_t2` datetime NOT NULL,
  `tgl_penutupan_dftr` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `tgl_penilaian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
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
-- Struktur dari tabel `tahapdua`
--

CREATE TABLE `tahapdua` (
  `id_penilaian` int(11) NOT NULL,
  `status_t2` enum('Tidak Lulus','Lulus') NOT NULL DEFAULT 'Tidak Lulus',
  `komentar` text NOT NULL,
  `score_wawancara` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahapsatu`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id_berkas`);

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
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_admin` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pengaturan` FOREIGN KEY (`id_pengaturan`) REFERENCES `pengaturan` (`id_pengaturan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menilai`
--
ALTER TABLE `menilai`
  ADD CONSTRAINT `FK_menilai_admin` FOREIGN KEY (`id_users`) REFERENCES `admin` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_menilai_penilaian` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `FK_idFakultas` FOREIGN KEY (`fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_idProdi` FOREIGN KEY (`program`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_participants` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `FK_penilaian` FOREIGN KEY (`id_users`) REFERENCES `participants` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tahapdua`
--
ALTER TABLE `tahapdua`
  ADD CONSTRAINT `FK_tahapdua` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tahapsatu`
--
ALTER TABLE `tahapsatu`
  ADD CONSTRAINT `FK_tahapsatu` FOREIGN KEY (`id_penilaian`) REFERENCES `penilaian` (`id_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
