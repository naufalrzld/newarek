-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2018 at 09:21 AM
-- Server version: 10.0.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motionla_arekmotion`
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_users`, `real_name`, `status`, `id_pengaturan`) VALUES
(26, 'Faishal Rachman', 'super admin', NULL),
(27, 'Aditia Rafif', 'super admin', NULL),
(29, 'muhammad husain', 'admin', NULL),
(31, 'Raihan Hamid S', 'admin', NULL),
(74, 'Rama Aditya Maulana', 'super admin', NULL),
(75, 'aprianil', 'super admin', NULL),
(115, 'Arief Budhiman', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(100) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `path` text NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `nama_berkas`, `tgl_upload`, `path`, `id_users`) VALUES
(7, 'MP_2015_Faishal_Rachman.rar', '2018-03-15 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/', 26),
(9, 'MP_2015_Raya.rar', '2018-03-16 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/', 58),
(10, 'BA_2015_ALISAPURNAMASUHERMAN.rar', '2018-03-16 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/', 65),
(18, 'MP_2015_Ram1.rar', '2018-03-16 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/MP_2015_Ram1.rar', 74),
(19, 'UIUX_2016_Aprianil.rar', '2018-03-16 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/UIUX_2016_Aprianil.rar', 75),
(20, 'MP_2017_Rezky_Revindo.rar', '2018-03-16 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/MP_2017_Rezky_Revindo.rar', 36),
(21, 'UIUX_2016_Muhamad_Fahmi_Fakhrezi.rar', '2018-03-17 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/UIUX_2016_Muhamad_Fahmi_Fakhrezi.rar', 50),
(22, 'UIUX_2016_LINTANI_AFINA.rar', '2018-03-17 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/UIUX_2016_LINTANI_AFINA.rar', 41),
(24, 'MP_2017_Chairul_Vikri.rar', '2018-03-17 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/MP_2017_Chairul_Vikri.rar', 70),
(25, 'BA_2015_DimasRizkiAgusta.rar', '2018-03-18 00:00:00', '/home/motionla/rekrutment.motionlaboratory.id/uploads/BA_2015_DimasRizkiAgusta.rar', 60);

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
  `angkatan` varchar(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fakultas` int(11) DEFAULT NULL,
  `program` int(11) DEFAULT NULL,
  `status_bio` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id_users`, `student_id`, `name`, `id_line`, `minat`, `status_paspor`, `gender`, `angkatan`, `email`, `fakultas`, `program`, `status_bio`) VALUES
(32, NULL, 's', '', NULL, 0, 'Laki-laki', '', 's@gmail.com', NULL, NULL, 0),
(33, '1301164550', 'Amalia Huwaidah', 'amaliahwd', 'UI', 0, 'Perempuan', '2016', 'huwaidahamalia@gmail.com', 2, 8, 1),
(34, '1104160154', 'Mahdy Syafiqa Jannata', 'safikka_', 'UI', 0, 'Laki-laki', '2016', 'mahdysyafiq160998@gmail.com', 1, 5, 1),
(35, '1301174055', 'Alief Aditya Rachman', 'adityaalief', 'MP', 0, 'Laki-laki', '2017', 'aliefaditya39@gmail.com', 2, 8, 1),
(36, '1303170035', 'Rezky Revindo', 'rezky.revindo', 'MP', 1, 'Laki-laki', '2017', 'rezkyrevindo3@gmail.com', 2, 10, 1),
(37, NULL, 'Waskitha Ghaziadiyata', '', NULL, 0, 'Laki-laki', '', 'waskithag@gmail.com', NULL, NULL, 0),
(38, '1301154447', ' Tio Renta Hutahaean', 'tiorentahutahaean', 'MP', 0, 'Perempuan', '2015', 'tiorentahutahaean1601@gmail.com', 2, 8, 1),
(39, NULL, 'Adi Nugroho', '', NULL, 0, 'Laki-laki', '', 'adi.smarispat@gmail.com', NULL, NULL, 0),
(40, '1301174318', 'Ivan Naufal Islami Al-faridzqi', 'ivannaufal07', 'UI', 0, 'Laki-laki', '2017', 'ivannaufal7@gmail.com', 2, 8, 1),
(41, '1301164005', 'Lintani Afina Hajar Raudhoti', 'lintaniafina', 'UI', 1, 'Perempuan', '2016', 'lintanilintani@gmail.com', 2, 8, 1),
(43, '1202163246', 'Sultan arif ma\'ruf', 'Sultanarifma2', 'UI', 0, 'Laki-laki', '2016', 'sultanarifma@gmail.com', 3, 14, 1),
(44, '1301170212', 'Joshua Galilea', 'jogagazz', 'BA', 0, 'Laki-laki', '2017', 'joga2322.jg@gmail.com', 2, 8, 1),
(45, '1501160213', 'Audi Isra Eprillia', 'komokoda', 'BA', 0, 'Perempuan', '2016', 'audiisraeprillia13@gmail.com', 5, 20, 1),
(46, '1301170203', 'Raihana Salsabila Darma Wijaya', 'raihana_wijaya', 'MP', 0, 'Perempuan', '2017', 'hello.raihanawijaya@gmail.com', 2, 8, 1),
(47, NULL, 'Roger Alexsander Siburian', '', NULL, 0, 'Laki-laki', '', 'zrogeru9@gmail.com', NULL, NULL, 0),
(48, NULL, 'Enrico Farizky Rustam', '', NULL, 0, 'Laki-laki', '', 'enricorustam@gmail.com', NULL, NULL, 0),
(49, '1301170031', 'Annisa Aisyha Malik', 'maliknns', 'UI', 0, 'Perempuan', '2017', 'annisaa.malik@gmail.com', 2, 8, 1),
(50, '1302160065', 'MUHAMAD FAHMI FAKHREZI', 'mfahmifakh', 'UI', 1, 'Laki-laki', '2016', 'fakhrezi18@gmail.com', 2, 39, 1),
(52, NULL, 'hurahura', '', NULL, 0, 'Laki-laki', '', 'ipat.ganteng@sekali.com', NULL, NULL, 0),
(54, NULL, 'muhammad zaki faizal', '', NULL, 0, 'Laki-laki', '', 'mzaki194@gmail.com', NULL, NULL, 0),
(55, '1301164555', 'Mia Sayida Fatma', 'miasayidaf', 'UI', 0, 'Perempuan', '2016', 'misayidaf@gmail.com', 2, 8, 1),
(56, '1301164540', 'gary andersen', 'garyhtg', 'UI', 0, 'Laki-laki', '2016', 'garyhtg26@gmail.com', 2, 8, 1),
(57, '1301170428', 'Muchamad Aqiel Hilman Maulandany', 'rickraze', 'MP', 0, 'Laki-laki', '2017', 'maqiel2600@gmail.com', 2, 8, 1),
(58, NULL, 'Raya', '', NULL, 1, 'Laki-laki', '', 'raya.rahadian322@gmail.com', NULL, NULL, 0),
(59, '1301164405', 'muhammad aniq wafa\'', '_mbergudeng', 'MP', 0, 'Laki-laki', '2016', 'aniqwafa2@gmail.com', 2, 8, 1),
(60, '1301154128', 'Dimas Rizki Agusta', 'dimskiis', 'BA', 1, 'Laki-laki', '2015', 'dimski57@gmail.com', 2, 8, 1),
(61, NULL, 'Almas bani agam ', '', NULL, 0, 'Laki-laki', '', 'almas.bani18@gmail.com', NULL, NULL, 0),
(62, '1301154177', 'Dewa Satria Wibowo', 'dewsatria', 'UI', 0, 'Laki-laki', '2015', 'satriadewa810@gmail.com', 2, 8, 1),
(63, NULL, 'Gumilar Sulistian', '', NULL, 0, 'Laki-laki', '', 'gumilarsulistian@gmail.com', NULL, NULL, 0),
(64, '1301154336', 'Muhammad Fathan', 'mhdfathan39', 'UI', 0, 'Laki-laki', '2015', 'mhdfathan39@gmail.com', 2, 8, 1),
(65, '1301153633', 'Alisa Purnama Suherman', 'allyssaps', 'BA', 0, 'Perempuan', '2015', 'alisaprnmas@gmail.com', 2, 9, 1),
(66, '1302160002', 'Reyhan Rahmansyah', 'eankren', 'BA', 0, 'Laki-laki', '2016', 'reyhanrahmansyah97@gmail.com', 2, 39, 1),
(67, '1301164143', 'Wishanga Arkan Furuhashi', 'wizardwhisper', 'MP', 0, 'Laki-laki', '2016', 'wishangga98@gmail.com', 2, 8, 1),
(68, NULL, 'Lalala', '', NULL, 0, 'Perempuan', '', 'lalala@gmail.com', NULL, NULL, 0),
(69, '1401163642', 'Muhammad Abdullah An Nur', 'an_nur94', 'UI', 0, 'Laki-laki', '2016', 'dolahnur94@gmail.com', 4, 17, 1),
(70, '1301174150', 'CHAIRUL VIKRI', 'Vikrikii', 'MP', 1, 'Laki-laki', '2017', 'chvikri839@gmail.com', 2, 8, 1),
(71, '1301164142', 'Fa\'iq Askhabi Ramadhan', 'askhabi017', 'UI', 0, 'Laki-laki', '2016', 'askhabi.faiq17@gmail.com', 2, 8, 1),
(72, '1301174057', 'Aanisah Rifda Rusjdy', 'aarrifda', 'BA', 0, 'Perempuan', '2017', 'aarrifda@gmail.com', 2, 8, 1),
(73, '1501150237', 'Eka Widandari', 'ekawede', 'BA', 0, 'Perempuan', '2015', 'Ekawidandari11@gmail.com', 5, 20, 1),
(74, '1301150034', 'Rama Aditya Maulana', 'ramaadtym', 'MP', 1, 'Laki-laki', '2015', 'ramaadtym@gmail.com', 2, 8, 1),
(76, NULL, 'Farhan Alfariqi', '', NULL, 0, 'Laki-laki', '', 'therealalfariqi@gmail.com', NULL, NULL, 0),
(77, '1301154283', 'Aris Afrianto', 'arisafrianto0423', 'UI', 0, 'Laki-laki', '2015', 'arisafrianto23@gmail.com', 2, 8, 1),
(79, '1202164189', 'Nur Latifah Prihartini', 'nlatifahp', 'BA', 0, 'Perempuan', '2016', 'nlatifah35@gmail.com', 3, 14, 1),
(80, '1301162314', 'Muhammad Naufal Mukhbit Amrullah', 'nopayers', 'UI', 0, 'Laki-laki', '2016', 'nmukhbit@gmail.com', 2, 8, 1),
(81, '1301154310', 'Mirza Aulia Rahman', 'mirzarhmn', 'UI', 0, 'Laki-laki', '2015', 'mirzarhmn3@gmail.com', 2, 8, 1),
(82, NULL, 'Ravi Mahfunda', '', NULL, 0, 'Laki-laki', '', 'ravimahfunda@gmail.com', NULL, NULL, 0),
(83, '1301154190', 'dhian haryono', 'dhibeks', 'UI', 0, 'Laki-laki', '2015', 'dhianharyono.dh@gmail.com', 2, 8, 1),
(84, '1301164211', 'Gigas Taufan Arvyanto', 'gigastaufanarvyanto', 'BA', 0, 'Laki-laki', '2016', 'gigastaufan@yahoo.com', 2, 8, 1),
(85, '6706161055', 'Hanif Khoirul Fathansyah', 'hanifkf12', 'MP', 0, 'Laki-laki', '2016', 'hanifkhoirulfathan@gmail.com', 7, 26, 1),
(86, NULL, 'Nur Chairul Syam', '', NULL, 0, 'Laki-laki', '', 'chairulsyam07@gmail.com', NULL, NULL, 0),
(87, '1202162356', 'Zayed Iffat Mahdi', 'zayed90', 'MP', 0, 'Laki-laki', '2016', 'zayediffatm12@gmail.com', 3, 14, 1),
(88, '1301154479', 'Arwendy Y.S', 'wendyyunika', 'UI', 0, 'Perempuan', '2015', 'arwendy.ysda@gmail.com', 2, 8, 1),
(89, NULL, 'Gangsar Yoga Pamungkas', '', NULL, 0, 'Laki-laki', '', 'gangsaryoga1996@gmail.com', NULL, NULL, 0),
(90, '1301144054', 'Irvan Muhammad', 'crocospect', 'UI', 0, 'Laki-laki', '2014', 'irvanprototype@gmail.com', 2, 8, 1),
(91, '1401164383', 'meuthia nabila pratiwi', 'meuthianabilapratiwi', 'BA', 0, 'Perempuan', '2016', 'meuthianabilapratiwi@gmail.com', 4, 18, 1),
(92, '1301154113', 'Baginda Praka G', '17icecream', 'MP', 0, 'Laki-laki', '2015', 'conan.peace@gmail.com', 2, 8, 1),
(93, NULL, 'Dany Al Fikri', '', NULL, 0, 'Laki-laki', '', 'danyalfr97@gmail.com', NULL, NULL, 0),
(95, NULL, 'Angela Marpaung', '', NULL, 0, 'Perempuan', '', 'angelamarpaung@yahoo.com', NULL, NULL, 0),
(96, '1301154373', 'Dickri gumelar', 'dickriiigumlar', 'BA', 0, 'Laki-laki', '2015', 'dickri.gumelar07@gmail.com', 2, 8, 1),
(97, '6706164075', 'AGUS FERY SUYATNA', 'ferysuyatna', 'MP', 0, 'Laki-laki', '2016', 'ferysuyatna08@gmail.com', 7, 26, 1),
(98, '1103164200', 'Annisa Putri', 'ichacenatcenut', 'MP', 0, 'Perempuan', '2016', 'putriapriandi99@gmail.com', 1, 6, 1),
(99, '1301164378', 'Muhammad Naufal Divian Muliawan', 'naufaldm', 'UI', 0, 'Laki-laki', '2016', 'naufal.divian@gmail.com', 2, 8, 1),
(100, NULL, 'Budi Ali Supian', '', NULL, 0, 'Laki-laki', '', 'budialisupian96@gmail.com', NULL, NULL, 0),
(101, NULL, 'Muhammad Fadhlan Supriadi', '', NULL, 0, 'Laki-laki', '', 'farahas1997@gmail.com', NULL, NULL, 0),
(102, '1301164451', 'Galih Yudhasena Trenggala', 'galihyudha14', 'UI', 0, 'Laki-laki', '2016', 'galihtrenggala@gmail.com', 2, 8, 1),
(103, NULL, 'adminadmin', '', NULL, 0, 'Laki-laki', '', 'admin@gmail.com', NULL, NULL, 0),
(104, '1202160052', 'Thio Fauzi', '@thiofauzi', 'UI', 0, 'Laki-laki', '2016', '2technopark5@gmail.com', 3, 14, 1),
(105, '1301164287', 'Megia Rahim', 'megiaa', 'BA', 0, 'Laki-laki', '2016', 'megia.rahim@gmail.com', 2, 8, 1),
(106, '1301174010', 'Faisal Ridwan Siregar', 'faisalridwann', 'MP', 0, 'Laki-laki', '2017', 'faisalridwansiregar@gmail.com', 2, 8, 1),
(107, '1301154327', 'Muhammad Adna Pradana ', 'Maprad', 'BA', 0, 'Laki-laki', '2015', 'Madnapradana@gmail.com', 2, 8, 1),
(108, NULL, 'muh alif al gibran arif', '', NULL, 0, 'Laki-laki', '', 'alifalgibran147@gmail.com', NULL, NULL, 0),
(109, NULL, 'Syifa Firdaus Elvinggar', '', NULL, 0, 'Perempuan', '', 'firdaelvinggar@gmail.com', NULL, NULL, 0),
(110, NULL, 'irbah salsabila', '', NULL, 0, 'Perempuan', '', 'irbah.salsabila93@gmail.com', NULL, NULL, 0),
(111, '1301164291', 'Anisa Septiani', 'anisas.', 'BA', 0, 'Perempuan', '2016', 'anisasptia@gmail.com', 2, 8, 1),
(112, NULL, 'Eldi Rohmanur Ikhsan', '', NULL, 0, 'Laki-laki', '', 'eldirohmanur@gmail.com', NULL, NULL, 0),
(114, NULL, 'Kharisma Oktavianing Herwanda', '', NULL, 0, 'Perempuan', '', 'kharisma.herwanda96@gmail.com', NULL, NULL, 0),
(116, '1301164344', 'Muhammad Fadli Asshiddiqi', 'mfadlimaska', 'UI', 0, 'Laki-laki', '2016', 'Fadlimaska11@gmail.com', 2, 8, 1),
(117, '1301154212', 'Rizaldi Yusuf', 'zalizaldiy44', 'UI', 0, 'Laki-laki', '2015', 'zalizaldiy@student.telkomuniversity.ac.id', 2, 8, 1),
(118, '1202164364', 'Rizqi Prima Hariadhy', 'superizqiii', 'BA', 0, 'Laki-laki', '2016', 'rizqiphd@gmail.com', 3, 14, 1),
(119, '6701174115', 'Rizsa El Akbar', 'rizsa_el', 'BA', 0, 'Laki-laki', '2017', 'rizsaelakbar99@gmail.com', 7, 27, 1),
(120, '1301164165', 'Joel Andrew Montana Kriahenta Ginting', 'joelandrewgt', 'UI', 0, 'Laki-laki', '2016', 'joel.andrew22088@gmail.com', 2, 8, 1),
(121, '1301160200', 'Mochammad Aria Putra Suwantra', 'moch_ariaa', 'UI', 0, 'Laki-laki', '2016', 'mocharia@student.telkomuniversity.ac.id', 2, 8, 1),
(122, NULL, 'Dummy', '', NULL, 0, 'Laki-laki', '', 'dummy@gmail.com', NULL, NULL, 0);

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
(38, 6, 'S1 Creative Arts (Painting, Photography & Film, and Intermedia)'),
(39, 2, 'S1 Ilmu Komputasi');

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
(26, 'ipatganteng', '$2a$08$BxSeDs4szDhrF7dlJ/zYr.AWUHUUfpNR8mna3eGRZT8k/EfdnpjuC', '2018-03-15 18:07:25'),
(27, 'aditgakjomblo', '$2a$08$ZLl7tkP.s6A0zkqV1q.czus.rk3Jqy06ZPp.ayz9GkiB9P09Td8vi', '2018-03-15 19:44:10'),
(29, 'husaintb', '$2a$08$dBe0MZQS9GaFmrXG3ubB2eo3D.q2kPxEnG1Oqnm2LPzCGWw1IPG7a', '2018-03-15 19:47:08'),
(31, 'iyai', '$2a$08$jJCr.Xh1nHyVvK1kvE8Io..IXf/zbDwjGsyAYpeFALhlKnhJyKpAy', '2018-03-15 19:56:26'),
(32, 's', '$2a$08$ENOUz2LdOQj/ayM/wrddzuKukMGGN3PhkmSXh9jhl0xF1qfjrLq4m', '2018-03-15 23:28:34'),
(33, 'amaliahwd', '$2a$08$XdMed1IueSZ5I70KGgaiFunHlY4.FnIz3Y9cjhMBM89XRPVD.74p2', '2018-03-16 03:42:45'),
(34, 'safikka', '$2a$08$1Sy69U7eusM2a24I5U53LeUMxgFjA0DvGgzf2RR40WTdDTY8U.H6y', '2018-03-16 03:50:31'),
(35, 'alief_aar', '$2a$08$D0PxOLJ7Jxf49pCbTyK3NeH2bS7oxT3QSusjlhN3T7Hbc6g/Aesmy', '2018-03-16 04:09:52'),
(36, 'androues', '$2a$08$bwZDzrc07OJAgJ.Rmc7Kc.UGaL/PY3VwkBMxF6FCBbe1JHu2kRnVG', '2018-03-16 04:10:43'),
(37, 'waskithag', '$2a$08$0sCIBVDve0qeDKQSet5/p..RXKpulKNHfeSnqNExLHIL9Qgb.kclq', '2018-03-16 04:18:20'),
(38, 'Tio Renta Hutahaean', '$2a$08$5hIusuo7eu2lHkjFRyQVs.jCgQBvY6jOTmCeI21HFqWv8HIuDWt3u', '2018-03-16 04:34:56'),
(39, 'adinugroho', '$2a$08$s0K6moClq9hdDxVXvAcMnuV104owD.0j/CZwaJo6rKhlpElq7jgoO', '2018-03-16 04:36:37'),
(40, 'ivannaufal7', '$2a$08$A0ZPosU74ckJWTB84.vEduApw0RhK1JsByrFtxwJtxxfIYTf2RsfC', '2018-03-16 04:44:57'),
(41, 'lintaniafina', '$2a$08$6q9zSLkvoEYLyaFNF8Ov9eH1d9tZOXc5hFvZcdX8iYgtothEeuUZG', '2018-03-17 08:59:03'),
(42, 'lintaniafinadummy', '$2a$08$VCZYg02WtJQ0oSle2smNiuTJLnIKjupWTvXqlpOW8SLF4Lrjo2W0.', '2018-03-17 08:59:34'),
(43, 'Sultanarifma', '$2a$08$nDxpFBi5nS2BCTJpwf412OE10HH0XWlsVHCPYYhfip7rltu2kclhG', '2018-03-16 04:53:01'),
(44, 'JoGa', '$2a$08$n2g3qweA3/ClqpXYJpNK1uHNkiLh7/6EN1dXv2JJSUSS3JqYaLZOO', '2018-03-16 04:57:09'),
(45, 'audiisra', '$2a$08$46fhGgrk4b6roUXqW9rjbumOecZEiy9FMy2F3Ga.6O.9VbLweqFyi', '2018-03-16 05:06:55'),
(46, 'raihanawijaya', '$2a$08$NWaaJ3SVZEomlU1Izq2tgedDB6b4dYdqIVvSCXBYsA73QnhmK1C62', '2018-03-16 05:18:40'),
(47, 'Zimatupang', '$2a$08$xpF2p5940EEhoi9M4b6aWueMZsUQ2ywZ1VVC05vv7i/TN7i69xRZO', '2018-03-16 05:28:17'),
(48, 'enricorustam', '$2a$08$36qdFxDU8xbDA2OsPeqMJOriHUBkcwFAbwra8Gxk/csPRvkOsYVHu', '2018-03-16 05:43:40'),
(49, 'malik', '$2a$08$MlijZigKNLmkyigoLl3B6OEb0BrF4YRuJy8fkctFRDtq4WQznxD1K', '2018-03-16 05:49:32'),
(50, 'fakhrezi', '$2a$08$0f05Mx4u19dyJDGls4BtfOGAr1S1Ull.AD8qQqXLLW9yeetWkvlnu', '2018-03-16 06:39:59'),
(52, 'ipatganteng', '$2a$08$173UDsJUfWywY0k0GJ.Q..fmoWbDnxeXVSEJZIHT22CV0Chc2f1xm', '2018-03-16 06:53:24'),
(54, 'mzakif', '$2a$08$Hmg6xuhBoSAaSgr0UvW/gOH5TpjsswvkhIBsmYtkoA4dy6NANEYuu', '2018-03-16 06:55:33'),
(55, 'Mia Sayida Fatma', '$2a$08$zkId/5Y2k6LB/u3BmQpdIOzWdL1WLh3kRk12w03tlAzkSgeDt14GG', '2018-03-16 07:16:47'),
(56, 'garyhtg', '$2a$08$1h74Pr49qg9IUQBRt5ccC.SW9zxOenIjKPiXDhLIXo7MFwpSZTu2m', '2018-03-16 07:32:48'),
(57, 'maqielhm', '$2a$08$4mJcEZQJvPcpt6wsSaBNPuR5o.dPn4h/c9zMgokAMx.bREfZ/270y', '2018-03-16 07:36:12'),
(58, 'raya', '$2a$08$3eXqpqQQOpnWtn2vmD51.O.eosawYnTxgitJceXOWh5lyfrY8RBfO', '2018-03-16 08:31:10'),
(59, 'aniq', '$2a$08$hp3OrjNOkyy7frJtIzj8EunR9GPCU.mi3z.y1tiQEPy5ttQgwoXUO', '2018-03-16 08:48:10'),
(60, 'Dimas', '$2a$08$CY6YsciUc9dReNJd6HBKoulrk.msSfmZdidvh7KvDaPUiIIBsI/KS', '2018-03-16 10:20:26'),
(61, 'Almasbaniagam', '$2a$08$UtlNNwB/WAH.YauZ31Dy8eFSWvXjDIhC9RTq6OliTa.It1W5WKte2', '2018-03-16 12:07:44'),
(62, 'satriadewa', '$2a$08$X6RnLki.K.dCiS5h16UiLuZP77fPYatYUahhcWUVN/ykd4686DIgm', '2018-03-16 12:08:48'),
(63, 'gumilar', '$2a$08$x68fVT4TTVDORoPPg95o0.p8oNdB.wCa1B8o9AaXPfRXKTLdSebea', '2018-03-16 12:09:06'),
(64, 'Mhdfathan', '$2a$08$KCMLPETooYBxX2ujxEWaZuk5coTVffj.9HPrwk/N17HyxJ6e/HCp6', '2018-03-16 12:30:44'),
(65, 'Alisaprnmas', '$2a$08$xS2ppcaC8lvFBDeDKxnpWe7y4yQnd3tPY2G9EOzr6Q6.t4FHWPxLW', '2018-03-16 12:32:49'),
(66, 'Reyhan R', '$2a$08$Z.mi9Y3yJTepcwiHxi6SSuk1zC7V2n30NklnKFpYTEq4DMrF.TY1.', '2018-03-16 12:37:06'),
(67, 'Wishangga', '$2a$08$NqGgXFUOcCPBjZMXqPsFW.6mRpK.Aofkp5VNM46MroTASIq.3ktJK', '2018-03-16 12:39:57'),
(68, 'lalala', '$2a$08$gbyuOdoi7pNpAXI/LqSZNepv/9J0IboHJ7KMNm1rBZNIVTix35NEm', '2018-03-16 12:44:48'),
(69, 'Abdullah', '$2a$08$8649gqSTMZo2m1PuIqOZV.KvUInOinzWs4JXvtGW0WYZaVAA4Coc.', '2018-03-16 12:55:32'),
(70, 'Vikrikii', '$2a$08$HiWz2syWcfmMJ4OZ6M311.SbL1BecqiLlVbaROCxj/Wz/zVTKreTW', '2018-03-16 13:13:12'),
(71, 'askhabifaiq', '$2a$08$/fljZkpjZBove1EMpTEaVOFepbynaneWASLHCk2O88SwaQ/XS/5c6', '2018-03-16 13:16:23'),
(72, 'aarrifda', '$2a$08$8zaH9MvXqOnYRK6kP4Dqu.MnNffMMckvVBKWnj4EpyM8qdcmbVSK.', '2018-03-16 14:05:04'),
(73, 'ekawidandari', '$2a$08$ZtRnt/cQiBHcH4zZuqJCxe5JL.G8hG7aQCG6GEtlSa53IALoZBI3O', '2018-03-16 14:15:34'),
(74, 'ramaadtym', '$2a$08$Ymwfe4lsxuKz.fkQasCKC.JqUslllUhmD.seRQmvto9fg5z0CfTA6', '2018-03-16 14:56:23'),
(75, 'aprianil', '$2a$08$ohtIkxeCM2decG9b8L40IO.cxNFPwYxKyumrG1cu.7lXLred/w9wi', '2018-03-16 15:21:58'),
(76, 'farhanalfa', '$2a$08$03c4N7dqm.SonGVXOamzkOwPLA3OWayZjAKfJmY3lHl26xUozwjsC', '2018-03-16 16:17:27'),
(77, '1301154283', '$2a$08$ZxBFruBxFfhKGOoup3.Y7.QtThlADU7UQtpGpiskTjOrLJwoWYOt6', '2018-03-16 17:11:15'),
(79, 'nlatifahp', '$2a$08$WzTyH8.AQVs2uIIuNMKop.G0itHSKJaqnHmRoqdqG0YmIm2wUOf9u', '2018-03-17 02:23:24'),
(80, 'naufalmukhbit', '$2a$08$U2C6uzK3uLUd3B0fgz61JurcRKHDk1/bLF1oS3pQR7EVn1395FHuG', '2018-03-17 02:32:23'),
(81, 'mirzarhmn', '$2a$08$3A2gEy7JTADnJnH3BCzyB.sHrIG8ETq/iEvoAnVunlYuUUKUWYWOS', '2018-03-17 03:17:41'),
(82, 'ravimahfunda', '$2a$08$vxsTyRpKYYPzd81wXZLA0OIsf8BobJF7XyeMgMh8IL21Q/s5.d2PK', '2018-03-17 04:06:51'),
(83, 'dhianharyono', '$2a$08$05LSEq0WW95Ugf6KvpCKbOivHvEr/lTgfvs006N4kkcQwG7UcocHS', '2018-03-17 04:27:59'),
(84, 'gigastaufan', '$2a$08$vePnC1XfR..ialdAk3086OYZTSiNrFKSt9mztGdxO2fUxDtN424KG', '2018-03-17 05:04:17'),
(85, 'hanifkf12', '$2a$08$74ItOYQEDyw/jzsB964kgubnDfDHnMIYQlMYHo0MAbT.mhrhlNgm.', '2018-03-17 06:11:53'),
(86, 'nurchairulsyam', '$2a$08$DtuAKWHBuMdfdfchcaarXu.JyNASNWLRF9NgV1JChDAkZCJDpd.22', '2018-03-17 06:23:24'),
(87, 'zayed0896', '$2a$08$yxeOuVI2W15YuMtYHTMvVuFSVMU7TRDMAAfXgv6tB07HhEy638DsC', '2018-03-17 06:30:56'),
(88, 'Arwendyys', '$2a$08$WuVGm1jeYfMlDJS3m8GXcuwVe57nfEDOcujYpHggWVS5VU/bcMsYq', '2018-03-17 07:38:19'),
(89, 'gangsaryp', '$2a$08$si.3AmJHHX8hGHELMJwgoezNhUzHdQkgUq6PfEr/qp/J/10F9/TBq', '2018-03-17 08:27:22'),
(90, 'IrvanMhd', '$2a$08$yBRIjHwQjT4Mf1lcnfAGh.rHQ6jqUhU3D0dZe13CZVJEXhO5Dpo0G', '2018-03-17 08:36:38'),
(91, 'meuthianabilap', '$2a$08$AfhR5oeKptUApvwtrS4g../Bg1hJnpvpjHITCQexCG5uSGAakki26', '2018-03-17 09:52:05'),
(92, 'CresentMoon', '$2a$08$fSbC1NFDY8/0BJQlbAK4seD0wWXikChnCPLbXK9aRxCfypDYAT/nS', '2018-03-17 12:03:28'),
(93, 'danyalfr', '$2a$08$IWpogSqrF.hbAIbNVXYF0et3Ki2yS7NRZ11pZ0.laQiWRjwz7mCvi', '2018-03-17 12:04:04'),
(95, 'angelamarpaung', '$2a$08$8YuFyhEo65Vy8IiKTtCWKeJV233uVkf.qRjNC2qCwaudH1/FEq00C', '2018-03-17 12:11:35'),
(96, 'Dickrigumelar', '$2a$08$N0lfE2ovI4F0Kp2j.uv8lunSICLGz0ZwSbs5PbW7YYUp0.86bf9LO', '2018-03-17 12:27:02'),
(97, 'ferysuyatna', '$2a$08$nRdKhj.ZKB6leaJo1AbR0.8mRyIS14t15ZtC5CRmi8.OcidQSzJZq', '2018-03-17 12:44:36'),
(98, 'putriapriandi99', '$2a$08$JTOgIyMaIUJEnUy5UB.zjOE/rgmDypQQi.CB7mX8o9fpdwOTIN.Qq', '2018-03-17 13:17:35'),
(99, 'naufaldivian', '$2a$08$HxJ3rS3zX7Zvd8kr3DxsFOyVRq9zB/9XR88KGOf6RM/MWSJi9vdjy', '2018-03-17 13:24:31'),
(100, 'budialis', '$2a$08$pKdrdiMpHJx.7rpb4uvWIeZsfZsElOKmYA1WihPcVyH1GedzfIhVS', '2018-03-17 14:18:42'),
(101, 'fadhlan97', '$2a$08$de3xhdIfdhw/.ofWPINjb.0uFjdKdQnrh70XnfmSGVjgLRfme6.OG', '2018-03-17 15:06:36'),
(102, 'galihyudha', '$2a$08$ah0IdKj94dv3RA3LwSUNA.Duo3DVhftYvvdqLbtWu8O5AR1TjrGXu', '2018-03-17 15:14:53'),
(103, 'adminadmin', '$2a$08$MHDiGLx2S12iB1BfUAoEEem9j75nO7MoHL1UFS4gWTWR3lb5lgQYO', '2018-03-17 16:51:53'),
(104, 'thiofauzi', '$2a$08$3tv0h1TIz8pvGf3nW6dbj.PfBbtIf2nc1EqfdkItDWW2uCNp4g/Ju', '2018-03-17 16:52:02'),
(105, 'megiarhm', '$2a$08$/3x0loxm8VQKLsn5FjTCH.f1VzChiZiCOVwfu8GrbLDi.SiLG88OK', '2018-03-17 19:11:15'),
(106, 'faisalridwan', '$2a$08$QFNo.mr6WkKq6A11mgrrwOShXC5lQUghrQ0l6H7UwfPPfajkI8eHm', '2018-03-17 23:42:42'),
(107, 'Madnapradana', '$2a$08$Jgb1FzaHBThfRFvyvSfNW.ZVHsQyXloLOsIY3ngyOgHZfDxYK.6SS', '2018-03-18 06:15:21'),
(108, 'alifalgibran', '$2a$08$rdxdKVn6hiCQc0kHzGu3qOFjbssx41SG9.D.MnFwpkD6npxVo26r2', '2018-03-18 06:38:28'),
(109, 'firdaelvinggar', '$2a$08$pQbdIBUVqUbTd5SF1yx80.KCAV77anxJHikAdc6HPFq9rqxPw1PEO', '2018-03-18 06:54:28'),
(110, 'irbahsalss', '$2a$08$Jijnk9X.rIkNz2.T.9AniunKjwunvCKGZ8Urqy.Vij48cnmq9JOpO', '2018-03-18 07:27:50'),
(111, 'anisasptia', '$2a$08$sAcNz2ZuSblAK7jDZfKTBur78Ui93Ka1VFNjX.sT3ZUS.A7vdWx.G', '2018-03-18 07:31:01'),
(112, 'eldirohmanur', '$2a$08$9K8cZt//DO7qlNpTO.GZNOJv0JgbdTLO5W/SZZC.E.X8h6XG06/TG', '2018-03-18 07:53:38'),
(114, 'kharismawanda', '$2a$08$r0mxrtb0P/PBx5oQhUFXCe2WkeICfgy6ul6nh6.7pA.XlhgPY9.AK', '2018-03-18 11:52:22'),
(115, 'ariefbudhiman', '$2a$08$O/Urk8bRoAJHe29ydZK5geuweJNbukGryKBKwChQgNmepZ2ZbvyUu', '2018-03-18 11:55:47'),
(116, 'Fadlimask', '$2a$08$p9gtwckYpvnHfg1adBM0nuYu.s8ZbRAwA6.Y9SuYvx4AQ1GzDDpcC', '2018-03-18 14:56:05'),
(117, 'zalizaldiy', '$2a$08$6KCqoyVgxCbjqixWxzZnLeaJzInBQ3euiVgn8PqbEeiu3w1.3wtB6', '2018-03-18 16:15:27'),
(118, 'rizqiphd', '$2a$08$sNbZ40p3e3eAXUFr2Q.5jeWiPKlDBrTkzQzT/hcX2gaSZw5fQMrqK', '2018-03-18 16:47:25'),
(119, 'rizsaelakbar', '$2a$08$x/dx/kA0WO.RLwkziSpu8uk2FcBewxEbE2mEKG0TW/AFoNECJcsHS', '2018-03-18 17:08:17'),
(120, 'joelandrew', '$2a$08$YXNcR5Qm.edhKTSprAoaC.jpOXbQWHXqYbQ2KueYfQ7XE3GeNhDMy', '2018-03-19 01:53:18'),
(121, 'mocharia', '$2a$08$TDh7NCkUO.O/.wcCfxX6FuWhzw6csxCClHDJDq7inNszD9VfL5axy', '2018-03-19 02:04:32'),
(122, 'dummy1234', '$2a$08$poDXcuB9CGnj7Ju61xPTXegD7Dc2AGRHT6irOFzbtJYEkCFAtuci6', '2018-03-19 02:17:03');

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
  ADD KEY `FK_USERS` (`id_users`);

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
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

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
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

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
  ADD CONSTRAINT `FK_USERS` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

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
