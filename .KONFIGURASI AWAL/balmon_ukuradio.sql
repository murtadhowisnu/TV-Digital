-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 10:43 AM
-- Server version: 8.0.16
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balmon_ukuradio`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_hasil_scan`
--

CREATE TABLE `form_hasil_scan` (
  `id_hasil_ukur` int(11) NOT NULL,
  `image_freq` varchar(256) NOT NULL,
  `image_geser` varchar(256) NOT NULL,
  `image_bw` varchar(256) NOT NULL,
  `image_field` varchar(256) NOT NULL,
  `image_deviasi` varchar(256) NOT NULL,
  `image_harmonisa1` varchar(256) NOT NULL,
  `image_harmonisa2` varchar(256) NOT NULL,
  `image_harmonisa3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_hasil_ukur`
--

CREATE TABLE `form_hasil_ukur` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_penyelenggara` int(11) NOT NULL,
  `id_pemancar` int(11) NOT NULL,
  `id_spek_pemancar` int(11) NOT NULL,
  `id_spek_antenna` int(11) NOT NULL,
  `id_hasil_ukur` int(11) NOT NULL,
  `id_hasil_scan` int(11) NOT NULL,
  `id_spt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_hasil_ukur`
--

INSERT INTO `form_hasil_ukur` (`id`, `user_id`, `id_penyelenggara`, `id_pemancar`, `id_spek_pemancar`, `id_spek_antenna`, `id_hasil_ukur`, `id_hasil_scan`, `id_spt`) VALUES
(1, 20, 1, 1, 1, 1, 1, 0, 1),
(2, 20, 2, 2, 2, 2, 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_keterangan`
--

CREATE TABLE `form_keterangan` (
  `id` int(11) NOT NULL,
  `upt_ket` varchar(128) NOT NULL,
  `tgl_ket` varchar(128) NOT NULL,
  `provinsi_ket` varchar(128) NOT NULL,
  `kabkota_ket` varchar(128) NOT NULL,
  `stl_ket` varchar(128) NOT NULL,
  `no_spt` varchar(128) NOT NULL,
  `tgl_spt` varchar(128) NOT NULL,
  `jenis_sbk` varchar(128) NOT NULL,
  `kecamatan_ket` varchar(128) NOT NULL,
  `jln_ket` varchar(128) NOT NULL,
  `lat_ket` varchar(128) NOT NULL,
  `lng_ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_keterangan`
--

INSERT INTO `form_keterangan` (`id`, `upt_ket`, `tgl_ket`, `provinsi_ket`, `kabkota_ket`, `stl_ket`, `no_spt`, `tgl_spt`, `jenis_sbk`, `kecamatan_ket`, `jln_ket`, `lat_ket`, `lng_ket`) VALUES
(1, 'Balai Monitor Kelas II Pontianak', '2021-07-19', 'Kalimantan Barat', 'Melawi', 'SATELIT', '124/Balmon.61/KP.01.06/07/2021', '2021-07-19', 'PENGUKURAN', 'Nanga Pinoh', 'Jl. Provinsi Km. 7, Dusun Natai Mawang, Desa Tanjung Tengang', '-0.3567120', '111.7044711'),
(2, 'Balai Monitor Kelas II Pontianak', '2021-07-19', 'Kalimantan Barat', 'Pontianak', 'SATELIT', '071/Balmon.61/KP.01.06/04/2019', '2021-07-19', 'PENGUKURAN', 'Pontianak Selatan', 'JL. Ahmad Yani Komp. Masjid Raya Mujahidin Pontianak', '-0.0417830', '109.3369980');

-- --------------------------------------------------------

--
-- Table structure for table `input_kabupaten`
--

CREATE TABLE `input_kabupaten` (
  `id_kab` int(11) NOT NULL,
  `nama_kab` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `input_kabupaten`
--

INSERT INTO `input_kabupaten` (`id_kab`, `nama_kab`) VALUES
(1, 'Bengkayang'),
(2, 'Kapuas Hulu'),
(3, 'Kayong Utara'),
(4, 'Ketapang'),
(5, 'Kubu Raya'),
(6, 'Landak'),
(7, 'Melawi'),
(8, 'Mempawah'),
(9, 'Sambas'),
(10, 'Sanggau'),
(11, 'Sekadau'),
(12, 'Sintang'),
(13, 'Pontianak'),
(14, 'Singkawang');

-- --------------------------------------------------------

--
-- Table structure for table `kanal_auto`
--

CREATE TABLE `kanal_auto` (
  `id` int(11) NOT NULL,
  `frekuensi` varchar(128) NOT NULL,
  `kanal` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kanal_auto`
--

INSERT INTO `kanal_auto` (`id`, `frekuensi`, `kanal`) VALUES
(2, '87.6', '1'),
(3, '87.7', '2'),
(4, '87.8', '3'),
(5, '87.9', '4'),
(6, '88', '5'),
(7, '88.1', '6'),
(8, '88.2', '7'),
(9, '88.3', '8'),
(10, '88.4', '9'),
(11, '88.5', '10'),
(12, '88.6', '11'),
(13, '88.7', '12'),
(14, '88.8', '13'),
(15, '88.9', '14'),
(16, '89', '15'),
(17, '89.1', '16'),
(18, '89.2', '17'),
(19, '89.3', '18'),
(20, '89.4', '19'),
(21, '89.5', '20'),
(22, '89.6', '21'),
(23, '89.7', '22'),
(24, '89.8', '23'),
(25, '89.9', '24'),
(26, '90', '25'),
(27, '90.1', '26'),
(28, '90.2', '27'),
(29, '90.3', '28'),
(30, '90.4', '29'),
(31, '90.5', '30'),
(32, '90.6', '31'),
(33, '90.7', '32'),
(34, '90.8', '33'),
(35, '90.9', '34'),
(36, '91', '35'),
(37, '91.1', '36'),
(38, '91.2', '37'),
(39, '91.3', '38'),
(40, '91.4', '39'),
(41, '91.5', '40'),
(42, '91.6', '41'),
(43, '91.7', '42'),
(44, '91.8', '43'),
(45, '91.9', '44'),
(46, '92', '45'),
(47, '92.1', '46'),
(48, '92.2', '47'),
(49, '92.3', '48'),
(50, '92.4', '49'),
(51, '92.5', '50'),
(52, '92.6', '51'),
(53, '92.7', '52'),
(54, '92.8', '53'),
(55, '92.9', '54'),
(56, '93', '55'),
(57, '93.1', '56'),
(58, '93.2', '57'),
(59, '93.3', '58'),
(60, '93.4', '59'),
(61, '93.5', '60'),
(62, '93.6', '61'),
(63, '93.7', '62'),
(64, '93.8', '63'),
(65, '93.9', '64'),
(66, '94', '65'),
(67, '94.1', '66'),
(68, '94.2', '67'),
(69, '94.3', '68'),
(70, '94.4', '69'),
(71, '94.5', '70'),
(72, '94.6', '71'),
(73, '94.7', '72'),
(74, '94.8', '73'),
(75, '94.9', '74'),
(76, '95', '75'),
(77, '95.1', '76'),
(78, '95.2', '77'),
(79, '95.3', '78'),
(80, '95.4', '79'),
(81, '95.5', '80'),
(82, '95.6', '81'),
(83, '95.7', '82'),
(84, '95.8', '83'),
(85, '95.9', '84'),
(86, '96', '85'),
(87, '96.1', '86'),
(88, '96.2', '87'),
(89, '96.3', '88'),
(90, '96.4', '89'),
(91, '96.5', '90'),
(92, '96.6', '91'),
(93, '96.7', '92'),
(94, '96.8', '93'),
(95, '96.9', '94'),
(96, '97', '95'),
(97, '97.1', '96'),
(98, '97.2', '97'),
(99, '97.3', '98'),
(100, '97.4', '99'),
(101, '97.5', '100'),
(102, '97.6', '101'),
(103, '97.7', '102'),
(104, '97.8', '103'),
(105, '97.9', '104'),
(106, '98', '105'),
(107, '98.1', '106'),
(108, '98.2', '107'),
(109, '98.3', '108'),
(110, '98.4', '109'),
(111, '98.5', '110'),
(112, '98.6', '111'),
(113, '98.7', '112'),
(114, '98.8', '113'),
(115, '98.9', '114'),
(116, '99', '115'),
(117, '99.1', '116'),
(118, '99.2', '117'),
(119, '99.3', '118'),
(120, '99.4', '119'),
(121, '99.5', '120'),
(122, '99.6', '121'),
(123, '99.7', '122'),
(124, '99.8', '123'),
(125, '99.9', '124'),
(126, '100', '125'),
(127, '100.1', '126'),
(128, '100.2', '127'),
(129, '100.3', '128'),
(130, '100.4', '129'),
(131, '100.5', '130'),
(132, '100.6', '131'),
(133, '100.7', '132'),
(134, '100.8', '133'),
(135, '100.9', '134'),
(136, '101', '135'),
(137, '101.1', '136'),
(138, '101.2', '137'),
(139, '101.3', '138'),
(140, '101.4', '139'),
(141, '101.5', '140'),
(142, '101.6', '141'),
(143, '101.7', '142'),
(144, '101.8', '143'),
(145, '101.9', '144'),
(146, '102', '145'),
(147, '102.1', '146'),
(148, '102.2', '147'),
(149, '102.3', '148'),
(150, '102.4', '149'),
(151, '102.5', '150'),
(152, '102.6', '151'),
(153, '102.7', '152'),
(154, '102.8', '153'),
(155, '102.9', '154'),
(156, '103', '155'),
(157, '103.1', '156'),
(158, '103.2', '157'),
(159, '103.3', '158'),
(160, '103.4', '159'),
(161, '103.5', '160'),
(162, '103.6', '161'),
(163, '103.7', '162'),
(164, '103.8', '163'),
(165, '103.9', '164'),
(166, '104', '165'),
(167, '104.1', '166'),
(168, '104.2', '167'),
(169, '104.3', '168'),
(170, '104.4', '169'),
(171, '104.5', '170'),
(172, '104.6', '171'),
(173, '104.7', '172'),
(174, '104.8', '173'),
(175, '104.9', '174'),
(176, '105', '175'),
(177, '105.1', '176'),
(178, '105.2', '177'),
(179, '105.3', '178'),
(180, '105.4', '179'),
(181, '105.5', '180'),
(182, '105.6', '181'),
(183, '105.7', '182'),
(184, '105.8', '183'),
(185, '105.9', '184'),
(186, '106', '185'),
(187, '106.1', '186'),
(188, '106.2', '187'),
(189, '106.3', '188'),
(190, '106.4', '189'),
(191, '106.5', '190'),
(192, '106.6', '191'),
(193, '106.7', '192'),
(194, '106.8', '193'),
(195, '106.9', '194'),
(196, '107', '195'),
(197, '107.1', '196'),
(198, '107.2', '197'),
(199, '107.3', '198'),
(200, '107.4', '199'),
(201, '107.5', '200'),
(202, '107.6', '201'),
(203, '107.7', '202'),
(204, '107.8', '203'),
(205, '107.9', '204');

-- --------------------------------------------------------

--
-- Table structure for table `radio_hasil_ukur`
--

CREATE TABLE `radio_hasil_ukur` (
  `id` int(11) NOT NULL,
  `kanal` varchar(128) NOT NULL,
  `freq_terukur` varchar(128) NOT NULL,
  `pergeseran` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL,
  `bandwith` varchar(128) NOT NULL,
  `field_str` varchar(128) NOT NULL,
  `daya_terukur` varchar(128) NOT NULL,
  `deviasi_freq` varchar(128) NOT NULL,
  `kedalaman_mod` varchar(128) NOT NULL,
  `erp` varchar(128) NOT NULL,
  `h1_freq` varchar(128) NOT NULL,
  `h1_level` varchar(128) NOT NULL,
  `h2_freq` varchar(128) NOT NULL,
  `h2_level` varchar(128) NOT NULL,
  `h3_freq` varchar(128) NOT NULL,
  `h3_level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `radio_hasil_ukur`
--

INSERT INTO `radio_hasil_ukur` (`id`, `kanal`, `freq_terukur`, `pergeseran`, `level`, `bandwith`, `field_str`, `daya_terukur`, `deviasi_freq`, `kedalaman_mod`, `erp`, `h1_freq`, `h1_level`, `h2_freq`, `h2_level`, `h3_freq`, `h3_level`) VALUES
(1, '52', '92.7', '0', '-17.72', '300', '92.17', '388', '67', '89', '60.89', '185.4', '68.25', '278.1', '67.81', '370.8', '70.79'),
(2, '183', '105.799', '1000', '-16.36', '300', '90.63', '365', '47', '63', '56.12', '211.6', '67.92', '317.4', '67.86', '423.2', '68.56');

-- --------------------------------------------------------

--
-- Table structure for table `radio_pemancar`
--

CREATE TABLE `radio_pemancar` (
  `id` int(11) NOT NULL,
  `id_stasiun` int(11) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kotamadya` varchar(128) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tinggi_lok` int(11) NOT NULL,
  `tinggi_ged` int(11) NOT NULL,
  `tinggi_men` int(11) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `longitude` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `radio_pemancar`
--

INSERT INTO `radio_pemancar` (`id`, `id_stasiun`, `alamat`, `kelurahan`, `kecamatan`, `kotamadya`, `telp`, `tinggi_lok`, `tinggi_ged`, `tinggi_men`, `latitude`, `longitude`) VALUES
(1, 1, 'Jl. Provinsi Km. 7, Dusun Natai Mawang, Desa Tanjung Tengang', 'Tanjung Tengang', 'Nanga Pinoh', 'Melawi', '', 140, 5, 40, '-0.3567120', '111.7044711'),
(2, 2, 'JL. Ahmad Yani Komp. Masjid Raya Mujahidin Pontianak', 'Akcaya', 'Pontianak Selatan', 'Pontianak', '0561762647', 4, 10, 40, '-0.0417830', '109.3369980');

-- --------------------------------------------------------

--
-- Table structure for table `radio_spek_antenna`
--

CREATE TABLE `radio_spek_antenna` (
  `id_spek` int(11) NOT NULL,
  `id_stasiun` int(11) NOT NULL,
  `jenis_ant` varchar(128) NOT NULL,
  `polarisasi` varchar(128) NOT NULL,
  `elemen` varchar(128) NOT NULL,
  `gain` varchar(128) NOT NULL,
  `beam` varchar(128) NOT NULL,
  `jenis_kabel` varchar(128) NOT NULL,
  `tipe_kabel` varchar(128) NOT NULL,
  `panjang_kabel` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `radio_spek_antenna`
--

INSERT INTO `radio_spek_antenna` (`id_spek`, `id_stasiun`, `jenis_ant`, `polarisasi`, `elemen`, `gain`, `beam`, `jenis_kabel`, `tipe_kabel`, `panjang_kabel`) VALUES
(1, 1, 'OMB SINGLE RING', 'VERTICAL', '4', '6', '152', 'COAXIAL', 'HeliaxLDF  7/8', '60'),
(2, 2, 'VHF OMNIDIRECTIONAL', 'VERTICAL', '6', '1.5', '97', 'COAXIAL', 'HeliaxLDF  7/8', '45');

-- --------------------------------------------------------

--
-- Table structure for table `radio_spek_pemancar`
--

CREATE TABLE `radio_spek_pemancar` (
  `id_spek` int(11) NOT NULL,
  `id_stasiun` int(11) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `no_seri` varchar(128) NOT NULL,
  `negara` varchar(128) NOT NULL,
  `tahun` varchar(128) NOT NULL,
  `frekuensi` varchar(128) NOT NULL,
  `kelas_emisi` varchar(128) NOT NULL,
  `bandwith` varchar(128) NOT NULL,
  `kedalaman_mod` varchar(128) NOT NULL,
  `max_power` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `radio_spek_pemancar`
--

INSERT INTO `radio_spek_pemancar` (`id_spek`, `id_stasiun`, `merk`, `jenis`, `no_seri`, `negara`, `tahun`, `frekuensi`, `kelas_emisi`, `bandwith`, `kedalaman_mod`, `max_power`) VALUES
(1, 1, 'SATYA TECH', 'SATYA-TEC HIT-101', '', 'INDONESIA', '', '92.7', 'F3E', '300', '100', '1000'),
(2, 2, 'R.V.R. ELECTRONICA', 'TEC 30 LCD/S', '', 'ITALY', '', '105.8', 'F3E', '300', '100', '500');

-- --------------------------------------------------------

--
-- Table structure for table `radio_stasiun`
--

CREATE TABLE `radio_stasiun` (
  `id` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `nama_stasiun` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kotamadya` varchar(128) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `radio_stasiun`
--

INSERT INTO `radio_stasiun` (`id`, `id_kab`, `nama_stasiun`, `alamat`, `kelurahan`, `kecamatan`, `kotamadya`, `telp`, `email`) VALUES
(1, 7, 'Radio Kesehatan Melawi, PT.', 'Jl. Provinsi Km. 7, Dusun Natai Mawang, Desa Tanjung Tengang', 'Tanjung Tengang', 'Nanga Pinoh', 'Melawi', '', ''),
(2, 13, 'Radio Swara Mas Mujahidin Madani, PT. ', 'JL. Ahmad Yani Komp. Masjid Raya Mujahidin Pontianak', 'Akcaya', 'Pontianak Selatan', 'Pontianak', '0561762647 ', ''),
(3, 13, 'Radio Gita Kenari Ceria, PT.', 'Jl. Sumatera No. 28 Pontianak', 'Akcaya', 'Pontianak Selatan', 'Pontianak', '0561734161 ', ''),
(4, 13, 'Radio Vokalia Lagu Remaja, PT.', 'Jl. M. Sohor No. 28 Pontianak', 'Akcaya', 'Pontianak Selatan', 'Pontianak', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nip`, `name`, `email`, `telp`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'admin', 'admin', 'admin@balmonptk.com', '0895600225408', '$2y$10$ecHAEizMH5PRzF5J2Z6BUORXtRyR7/tmpYkH8u9ITwDEJEMWfpb8a', 'avatar.png', 1, 1, 2020),
(6, 'adminbalmon', 'Admin', 'upt_pontianak@kominfo.go.id', '0561575979', '$2y$10$bGfdbaZpGrnt3TEFTZ/dG.hLi8X97LiK6RX3lg071FOZkZqrWlt0y', 'avatar.png', 1, 1, 2021),
(7, '199604302019021003', 'Rivan Achmad Nugroho', 'rivan.achmad37@gmail.com', '6285223955388', '$2y$10$LTea2DVyuuRJOROzNJbqKusb.P1XjUiWDwu2aBv88Dm7ZC3UW01by', 'avatar.png', 2, 1, 2021),
(8, '198208142005021001', 'Agus Purnama', 'agus.purnama@live.com', '+6281345677971', '$2y$10$9cELWGiv1qjT795JL1HRoO9yW5ZfxxBaF76fw0tCLkx0ynGwNYuL2', 'avatar.png', 2, 1, 2021),
(9, '198203052005021002', 'Syarif Muhammad Faisal', 'faisal@abc.com', '08123456789', '19820305', 'avatar.png', 2, 1, 2021),
(10, '198506022009121001', 'Wawan Kurnawan', 'wawan@abc.com', '08123456789', '$2y$10$Cc4lFTiIhaQRCNe5JAVQauq1q7fylKN8OU7qIq7Ye7U4it/vq1wK6', 'avatar.png', 2, 1, 2021),
(11, '198102032009121001', 'Fachriansyah', 'yans@abc.com', '08123456789', '$2y$10$gH9TrPmSCNvl4BdoIH5vwOaJWxtiYCNGcP6ptAKn7noOVG5.fcesy', 'avatar.png', 2, 1, 2021),
(12, '197409162006041001', 'Benny Barasila', 'benny@abc.com', '08123456789', '$2y$10$blcEBmx6KP1kUJeAPdH1kOJj2faSM0cm7cnJVdx7G.GOJrxCZ9xL2', 'avatar.png', 2, 1, 2021),
(13, '199308232019021006', 'Ikbal Mawaldi', 'ikbal@abc.com', '08123456789', '19930823', 'avatar.png', 2, 1, 2021),
(14, '199711052019022001', 'Khusnul Karomah', 'khusnul@abc.com', '08123456789', '19971105', 'avatar.png', 2, 1, 2021),
(15, '199201222019021001', 'Rizky Purwandaru', 'ndaru@abc.com', '08123456789', '$2y$10$Rth9OGtgNDN6fYuk3r4ROe/9q0Yl5WD4w8ZKorchC5WZiigFBfP0O', 'avatar.png', 2, 1, 2021),
(16, '198205072005021001', 'Ade Kurniawan', 'ade@abc.com', '08123456789', '$2y$10$JsLrmbHMdTERkSay9Rl6eOgzpVRBZ4HwnKvXznPrzndAGbjtW6S.W', 'avatar.png', 2, 1, 2021),
(17, '197108161991031003', 'Sunardi', 'sunardi@abc.com', '08123456789', '$2y$10$K942Kn0/agBDOBLkKdNWZu3kQy21Ss6dlAixXodPyDZi/U0LSOivW', 'avatar.png', 2, 1, 2021),
(20, 'dev-balmon', 'Developer', 'dev@balmonptk.com', '089999999', '$2y$10$r0k5PlgVPqwRUl9nqAngtOnnB7pTxgbmcmnonRK5CuWVzmIMkKpbq', 'avatar.png', 2, 1, 2021),
(21, 'arifarif', 'Arif', 'arifmardiantopc@gmail.com', '0899999', '$2y$10$jB1JYCtngKNgGCrHk8x0TeO5KReWJ669xi7ivOkkDlMoDpKIwNwDu', 'avatar.png', 2, 1, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 2, 2),
(5, 2, 4),
(7, 2, 5),
(15, 2, 7),
(16, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Pengukuran'),
(7, 'Setting');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tag', 1),
(8, 1, 'User Management', 'admin/userlist', 'fas fa-fw fa-users-cog', 1),
(9, 4, 'Dashboard', 'pengukuran/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(10, 4, 'Pengukuran Radio', 'pengukuran', 'fas fa-fw fa-ruler-vertical', 1),
(11, 7, 'Data Stasiun Radio', 'admin/data_stasiun', 'fas fa-fw fa-broadcast-tower', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_hasil_ukur`
--
ALTER TABLE `form_hasil_ukur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_keterangan`
--
ALTER TABLE `form_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_kabupaten`
--
ALTER TABLE `input_kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `kanal_auto`
--
ALTER TABLE `kanal_auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_hasil_ukur`
--
ALTER TABLE `radio_hasil_ukur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_pemancar`
--
ALTER TABLE `radio_pemancar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_spek_antenna`
--
ALTER TABLE `radio_spek_antenna`
  ADD PRIMARY KEY (`id_spek`);

--
-- Indexes for table `radio_spek_pemancar`
--
ALTER TABLE `radio_spek_pemancar`
  ADD PRIMARY KEY (`id_spek`);

--
-- Indexes for table `radio_stasiun`
--
ALTER TABLE `radio_stasiun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_hasil_ukur`
--
ALTER TABLE `form_hasil_ukur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form_keterangan`
--
ALTER TABLE `form_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input_kabupaten`
--
ALTER TABLE `input_kabupaten`
  MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kanal_auto`
--
ALTER TABLE `kanal_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `radio_hasil_ukur`
--
ALTER TABLE `radio_hasil_ukur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `radio_pemancar`
--
ALTER TABLE `radio_pemancar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `radio_spek_antenna`
--
ALTER TABLE `radio_spek_antenna`
  MODIFY `id_spek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `radio_spek_pemancar`
--
ALTER TABLE `radio_spek_pemancar`
  MODIFY `id_spek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `radio_stasiun`
--
ALTER TABLE `radio_stasiun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
