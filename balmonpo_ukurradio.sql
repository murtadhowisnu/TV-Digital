-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Jul 2021 pada 19.19
-- Versi server: 5.7.34
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balmonpo_ukurradio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `1pengukuran_ket`
--

CREATE TABLE `1pengukuran_ket` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upt` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kabkota` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `1pengukuran_ket`
--

INSERT INTO `1pengukuran_ket` (`id`, `session`, `user_id`, `upt`, `tanggal`, `provinsi`, `kabkota`) VALUES
(2, '20210326073036', 8, 'Balai Monitor Kelas II Pontianak', '2021-03-24', 'Kalimantan Barat', 'Sambas'),
(3, '20210326094030', 9, 'Balai Monitor Kelas II Pontianak', '2021-03-24', 'Kalimantan Barat', 'Sambas'),
(4, '20210326121530', 13, 'Balai Monitor Kelas II Pontianak', '2021-03-26', 'Kalimantan Barat', 'Sambas'),
(5, '20210331015115', 18, 'Balai Monitor Kelas II Pontianak', '2021-03-31', 'Kalimantan Barat', 'Pontianak'),
(6, '20210331024653', 18, 'Balai Monitor Kelas II Pontianak', '2021-03-31', 'Kalimantan Barat', 'Pontianak'),
(7, '20210331033751', 18, 'Balai Monitor Kelas II Singkawang', '2021-03-31', 'Kalimantan Barat', 'Pontianak'),
(8, '20210331035713', 18, 'Balai Monitro Kelas II Pontianak', '2021-03-31', 'Kalimantan Barat', 'Pontianak'),
(9, '20210419020101', 18, 'Balai Monitor Kelas II Pontianakasd', '2021-04-19', 'Kalimantan Barat', 'Pontianak'),
(10, '20210504113038', 8, 'Balai Monitor Kelas II Pontianak', '2021-04-28', 'Kalimantan Barat', 'Kubu Raya'),
(11, '20210504113038', 8, 'Balai Monitor Kelas II Pontianak', '2021-04-29', 'Kalimantan Barat', 'Kubu Raya'),
(12, '20210504125244', 8, 'Balai Monitor Kelas II Pontianak', '2021-04-30', 'Kalimantan Barat', 'Kubu Raya'),
(13, '20210708025627', 18, 'asdas', '2021-07-08', 'Kalimantan Barat', 'Pontianak'),
(14, '20210711022059', 18, 'Balai Monitor Kelas II Pontianak', '2021-07-11', 'Kalimantan Barat', 'Singkawang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `2pengukuran_stasiun`
--

CREATE TABLE `2pengukuran_stasiun` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kotamadya` varchar(128) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `2pengukuran_stasiun`
--

INSERT INTO `2pengukuran_stasiun` (`id`, `session`, `user_id`, `penyelenggara`, `alamat`, `kelurahan`, `kecamatan`, `kotamadya`, `telp`, `email`) VALUES
(2, '20210326073036', 8, 'Direktorat Radio / RRI', 'Jl. Tabrani, Saing Rambi, Sambas', 'Saing Rambi', 'Sambas', 'Sambas', '-', '-'),
(3, '20210326094030', 9, 'RADIO KESEHATAN SAMBAS, PT.', 'Gg. Dare Nandung, Tumuk Manggis, Kecamtan Sambas, Kabupaten Sambas, Kalimantan Barat 79462', 'Tumuk Manggis', 'Sambas', 'Sambas', '-', '-'),
(4, '20210326121530', 13, 'RADIO MUARA UTAMA JAYA, PT', 'JL. ANOM NO. 18 RT. 05 RW. 08, HARAPAN, PEMANGKAT, SAMBAS, KALIMANTAN BARAT', 'HARAPAN', 'PEMANGKAT', 'SAMBAS', '+62 896-9361-69', '-'),
(5, '20210331015115', 18, 'Pontianak', 'K.H. Ahmad Dahlan', 'Saigon', 'Pontianak Utara', 'Pontianak', '05617345', 'balmonptk@gmail.com'),
(6, '20210331024653', 18, 'RRI Pontianak', 'Jln Jendral Sudirman No 7 Pontianak', 'Mariana', 'Pontianak', 'Pontianak', '0561456', 'rripontianak@gmail.com'),
(7, '20210331033751', 18, 'RRI Pontianak', 'Jln. Jendral Sudirman no.7 Pontianak', 'Mariana', 'Pontinak Kota', 'Pontianak', '056165432', 'rripontianak@gmail.com'),
(8, '20210331035713', 18, 'RRI Pontianak', 'Jln. Jendral Sudirman No. 7 Pontianak', 'Mariana', 'Pontianak Kota ', 'Pontianak', '056234', 'rripontianak@gmail.com'),
(9, '20210419020101', 18, 'RRI', 'PERUM IV, Jln.Sambas Timur No.27A', 'Saigon', 'Pontianak Timur', 'Pontianak', '0813454135', 'RRI'),
(10, '20210504113038', 8, 'PT. RADIO SAMARIA / SAMARIA', 'Jl. A Yani 2 Komp. Adijaya Town House C 7-9', 'Sungai Raya', 'Sungai Raya', 'Kubu Raya', '085820942178', '-'),
(11, '20210504113038', 8, 'RADIO SWARA RODJA PONTIANAK, PT', 'Jl. Karya Pal IX Sungai Kakap', 'Pal IX', 'Sungai Kakap', 'Kubu Raya', '081256622568', '-'),
(12, '20210504125244', 8, 'MEDIA SILATURAHMI KUBURAYA, PT', 'Jalan Keluarga Dusun Melati RT/RW 011/004', 'SUNGAI ITIK', 'SUNGAI KAKAP', 'KUBU RAYA', '081313364478', '-'),
(13, '20210708025627', 18, 'RRI', 'PERUM IV, Jln.Sambas Timur No.27A', 'Saigon', 'Pontianak Timur', 'Pontianak', '0813454135', 'murtadho.wisnu43@gmail.com'),
(14, '20210711022059', 18, 'Tango', 'PERUM IV, Jln.Sambas Timur No.27A', 'Saigon', 'Pontianak Timur', 'Pontianak', '09874294', 'murtadho.wisnu43@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `3pengukuran_lokasi`
--

CREATE TABLE `3pengukuran_lokasi` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lat` varchar(11) NOT NULL,
  `lng` varchar(11) NOT NULL,
  `alamat_lokasi` varchar(128) NOT NULL,
  `kelurahan_lokasi` varchar(128) NOT NULL,
  `kecamatan_lokasi` varchar(128) NOT NULL,
  `kotamadya_lokasi` varchar(128) NOT NULL,
  `telp_lokasi` varchar(128) NOT NULL,
  `tinggi_lok` varchar(128) NOT NULL,
  `tinggi_ged` varchar(128) NOT NULL,
  `tinggi_men` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `3pengukuran_lokasi`
--

INSERT INTO `3pengukuran_lokasi` (`id`, `session`, `user_id`, `lat`, `lng`, `alamat_lokasi`, `kelurahan_lokasi`, `kecamatan_lokasi`, `kotamadya_lokasi`, `telp_lokasi`, `tinggi_lok`, `tinggi_ged`, `tinggi_men`) VALUES
(2, '20210326073036', 8, '1.356325413', '109.2945402', 'Jl. Tabrani, Saing Rambi, Sambas', 'Saing Rambi', 'Sambas', 'Sambas', '-', '8', '0', '50'),
(3, '20210326094030', 9, '1.366745', '109.310065', 'Gg. Dare Nandung, Tumuk Manggis, Kecamtan Sambas, Kabupaten Sambas, Kalimantan Barat 79462', 'Tumuk Manggis', 'Sambas', 'Sambas', '-', '12', '-', '40'),
(4, '20210326121530', 13, '1.17255556', '108.9819166', 'JL. ANOM NO. 18 RT. 05 RW. 08, HARAPAN, PEMANGKAT, SAMBAS, KALIMANTAN BARAT', 'HARAPAN', 'PEMANGKAT', 'SAMBAS', '+62 896-9361-6933', '1', '0', '40'),
(5, '20210331015115', 18, '-0.02633029', '109.3425039', 'Jln. Penjara No. 19', 'Parit Tokaya', 'Pontianak Selatan', 'Pontianak', '05615347', '10', '10', '12'),
(6, '20210331024653', 18, '-0.02633029', '109.3425039', 'Jl. Jendral Sudirma No 7 Pontianak', 'Mariana', 'Pontianak', 'Pontianak', '05615347', '4', '5', '55'),
(7, '20210331033751', 18, '-0.02633029', '109.3425039', 'Jln. Jendral Sudirman No. 7 Pontianak', 'Maria', 'Pontianak Kota', 'Pontianak', '05612345', '4', '5', '23'),
(8, '20210331035713', 18, '-0.02633029', '109.3425039', 'Jln. Jendral Sudirman No. 7 Pontianak', 'Mariana', 'Pontianak Kota', 'Pontianak', '0561234', '4', '5', '52'),
(9, '20210419020101', 18, '-0.03367109', '109.3762098', 'vjghj', 'gkkuh', 'huhuh', 'pontianak', '0898754483', '23984', '90', '45'),
(10, '20210504113038', 8, '-0.07206020', '109.3644145', 'Jl. A Yani 2 Komp. Adijaya Town House C 7-9', 'Sungai Raya', 'Sungai Raya', 'Kubu Raya', '085820942178', '1', '10', '30'),
(11, '20210504113038', 8, '-0.06007023', '109.2961198', 'Jl. Karya Pal IX', 'Pal IX', 'Sungai Kakap', 'Kubu Raya', '081256622568', '1', '0', '30'),
(12, '20210504125244', 8, '-0.03932022', '109.1974870', 'Jalan Keluarga Dusun Melati Rt 11 / Rw 04', 'SUNGAI ITIK', 'SUNGAI KAKAP', 'KUBU RAYA', '081313364478', '1', '0', '40'),
(13, '20210708025627', 18, '-0.0237361', '109.3256785', 'penajar', 'Roban', 'huhuh', 'Singkawang', '0192304', '23984', '90', '239'),
(14, '20210711022059', 18, '-0.0368979', '109.2853229', 'sdf', 'Roban', 'roban barat', 'Pontianak', '0192304', '23984', '239', '34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `4pengukuran_spek_pem`
--

CREATE TABLE `4pengukuran_spek_pem` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `seri` varchar(128) NOT NULL,
  `negara_pem` varchar(128) NOT NULL,
  `tahun_pem` varchar(11) NOT NULL,
  `freq` varchar(128) NOT NULL,
  `kelas_em` varchar(128) NOT NULL,
  `bw` varchar(128) NOT NULL,
  `dalam` varchar(128) NOT NULL,
  `max_p` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `4pengukuran_spek_pem`
--

INSERT INTO `4pengukuran_spek_pem` (`id`, `session`, `user_id`, `merk`, `jenis`, `seri`, `negara_pem`, `tahun_pem`, `freq`, `kelas_em`, `bw`, `dalam`, `max_p`) VALUES
(2, '20210326073036', 8, 'Gates Air', 'Fleiva Air', '-', 'Amerika', '-', '97.7', 'F3E', '300', '100', '5000'),
(3, '20210326094030', 9, 'Satya Tech', 'HIT 101', '-', 'Indonesia', '-', '93.4', 'F3E', '300', '100', '2000'),
(4, '20210326121530', 13, 'GIANT COMMUNICATION', 'STS 1030', '-', '-', '-', '91.4', 'F3E', '300', '100', '1500'),
(5, '20210331015115', 18, 'Sanyo', 'Antena', '098234', 'China', '2014', '89.1', 'F3E', '345', '234', '1000'),
(6, '20210331024653', 18, 'R.V.R Electronica', 'TEX 1000 Loops', '0987', 'Italy', '2016', '98.3', 'F3E', '345', '23', '300'),
(7, '20210331033751', 18, 'RR Electronics', 'TEX 1000 Loops', '09657', 'China', '2017', '97.3', 'F3E', '345', '23', '300'),
(8, '20210331035713', 18, 'Sharp', 'TEX 1000 Loops', '9856', 'Jerman', '2013', '98.3', 'F3E', '323', '77', '300'),
(9, '20210419020101', 18, 'asus', 'Antena ', '01293', 'China', '1988', '87.1', 'F3E', '2345', '12', '23'),
(10, '20210504113038', 8, 'RVR', 'VJ 3000', '362306', 'INDONESIA', '2005', '97.9', 'F3E', '300', '100', '3000'),
(11, '20210504113038', 8, 'GIANT COMMUNICATION', 'STS 1030', '-', 'INDONESIA', '-', '94.7', 'F3E', '300', '100', '3500'),
(12, '20210504125244', 8, 'RVR', 'RVR TEX 30LCD/S', '-', 'INDONESIA', '-', '88.0', 'F3E', '300', '100', '1000'),
(13, '20210708025627', 18, 'Asus', 'Antena ', '01293', 'China', '1988', '87.1', 'F3E', '301', '23', '1000'),
(14, '20210711022059', 18, 'asus', 'Antena ', '01293', 'China', '1988', '87.1', 'F3E', '301', '23', '23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `5pengukuran_spek_ant`
--

CREATE TABLE `5pengukuran_spek_ant` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jenis_ant` varchar(128) NOT NULL,
  `polarisasi` varchar(128) NOT NULL,
  `jlh_el` varchar(128) NOT NULL,
  `gain` varchar(128) NOT NULL,
  `beam_ant` varchar(128) NOT NULL,
  `jenis_kabel` varchar(128) NOT NULL,
  `type_kabel` varchar(128) NOT NULL,
  `panjang_kabel` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `5pengukuran_spek_ant`
--

INSERT INTO `5pengukuran_spek_ant` (`id`, `session`, `user_id`, `jenis_ant`, `polarisasi`, `jlh_el`, `gain`, `beam_ant`, `jenis_kabel`, `type_kabel`, `panjang_kabel`) VALUES
(2, '20210326073036', 8, 'OMB', 'Vertikal', '4', '1.5', '115', 'Coaxial', 'HeliaxLDF 7/8', '65'),
(3, '20210326094030', 9, 'OMB SINGLE RING', 'Circular Right', '4', '6', '217', 'COAXIAL', 'HeliaxLDF 7/8', '65'),
(4, '20210326121530', 13, 'OMNI DIRECTIONAL', 'VERTICAL', '1', '8', '80', 'COAXIAL', 'HeliaxLDF 7/8', '45'),
(5, '20210331015115', 18, 'Beam Tech', '132', '12', '100', 'Utara', 'COAXIAL', 'HeliaxLDF 7/8', '12'),
(6, '20210331024653', 18, 'OMB', 'Circular Left', '6', '3', '34', 'COAXIAL', 'HeliaxLDF 7/8', '50'),
(7, '20210331033751', 18, 'Beam Tech', 'Circular Right', '6', '3', '34', 'COAXIAL', 'HeliaxLDF 7/8', '34'),
(8, '20210331035713', 18, 'Beam Tech', 'Circular Right', '6', '3', '34', 'COAXIAL', 'HeliaxLDF 7/8', '25'),
(9, '20210419020101', 18, 'Sanyo', 'Vertical', '23', '23', 'Timur ke Barat', 'COAXIAL', 'HeliaxLDF 7/8', '23'),
(10, '20210504113038', 8, 'SIERA', 'VERTIKAL', '4', '3', '0', 'HELIAX', 'LDF 7/8', '55'),
(11, '20210504113038', 8, 'DIPOLE', 'VERTIKAL', '4', '6', '0', 'HELIAX', 'HeliaxLDF 5/8', '55'),
(12, '20210504125244', 8, 'JAMPRO', 'VERTIKAL', '4', '6', '0', 'HELIAX', 'LDF 7/8', '50'),
(13, '20210708025627', 18, 'Sanyo', 'Vertical', '23', '24', 'Timur ke Barat', 'COAXIAL', 'HeliaxLDF 7/8', '23'),
(14, '20210711022059', 18, 'Sanyo', 'bipolar', '23', '24', 'Timur ke Barat', 'COAXIAL', 'HeliaxLDF 7/8', '23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `6pengukuran_hasil`
--

CREATE TABLE `6pengukuran_hasil` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kanal` varchar(128) NOT NULL,
  `freq_terukur` varchar(128) NOT NULL,
  `pergeseran` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL,
  `bw_hasil` varchar(128) NOT NULL,
  `field_str` varchar(128) NOT NULL,
  `daya_ukur` varchar(128) NOT NULL,
  `kedalaman_mod` varchar(128) NOT NULL,
  `deviasi` varchar(128) NOT NULL,
  `erp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `6pengukuran_hasil`
--

INSERT INTO `6pengukuran_hasil` (`id`, `session`, `user_id`, `kanal`, `freq_terukur`, `pergeseran`, `level`, `bw_hasil`, `field_str`, `daya_ukur`, `kedalaman_mod`, `deviasi`, `erp`) VALUES
(2, '20210326073036', 8, '102', '97.7', '0', '-1.84', '112.798', '110.47', '2500', '85', '64', '64.48'),
(3, '20210326094030', 9, '59', '93.401', '-99', '-14.68', '78.837', '101.82', '196', '56', '42', '57.92'),
(4, '20210326121530', 13, '39', '91.399', '101', '-5.33', '273.319', '120.85', '150', '85', '64', '58.76'),
(5, '20210331015115', 18, '16', '15', '7410000', '100', '301', '1', '997', '48', '36', '158.99'),
(6, '20210331033255', 18, '108', '124', '-2570000', '231', '123', '32323', '232', '3108', '2331', '55.65'),
(7, '20210331033751', 18, '98', '14', '8330000', '100', '135', '93.58', '304', '97', '73', '56.83'),
(8, '20210331035713', 18, '108', '15', '8330000', '150', '299', '234', '134', '75', '56', '53.27'),
(9, '20210419020101', 18, '89', '23', '6410000', '23', '24', '23', '1005', '47', '35', '82.02'),
(10, '20210504113038', 8, '104', '97.9', '0', '23.80', '247.89', '90.89', '1000', '96', '72', '62.00'),
(11, '20210504113038', 8, '72', '94.7', '390001', '-33.9', '168.33', '70.35', '614', '69', '52', '59.88'),
(12, '20210708025627', 18, '89', '23', '6410000', '23', '300', '23', '1005', '47', '35', '83.02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `7pengukuran_harmonisa`
--

CREATE TABLE `7pengukuran_harmonisa` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `h1_freq` varchar(128) NOT NULL,
  `h1_level` varchar(128) NOT NULL,
  `h2_freq` varchar(128) NOT NULL,
  `h2_level` varchar(128) NOT NULL,
  `h3_freq` varchar(128) NOT NULL,
  `h3_level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `7pengukuran_harmonisa`
--

INSERT INTO `7pengukuran_harmonisa` (`id`, `session`, `user_id`, `h1_freq`, `h1_level`, `h2_freq`, `h2_level`, `h3_freq`, `h3_level`) VALUES
(2, '20210326073036', 8, '195.4', '66.77', '293.1', '79.03', '390.8', '80.33'),
(3, '20210326094030', 9, '186.8', '61.14', '280.2', '71.56', '373.6', '73.69'),
(4, '20210326121530', 13, '182.8', '61.51', '274.2', '70.24', '365.6', '73.11'),
(5, '20210331015115', 18, '178.2', '61', '267.29999999999995', '54', '356.4', '67'),
(6, '20210331033255', 18, '196.6', '61', '294.9', '54', '393.2', '67'),
(7, '20210331033751', 18, '194.6', '61', '291.9', '23', '389.2', '68'),
(8, '20210331035713', 18, '196.6', '67', '294.9', '65', '393.2', '34'),
(9, '20210419020101', 18, '174.2', '23', '261.29999999999995', '3', '348.4', '12'),
(10, '20210504113038', 8, '195.8', '70.63', '293.7', '71.98', '391.6', '70.86'),
(11, '20210504113038', 8, '195.8', '68.73', '293.7', '68.16', '391.6', '66.21'),
(12, '20210708025627', 18, '142', '123', '123', '2131', '1232', '2131');

-- --------------------------------------------------------

--
-- Struktur dari tabel `8pengukuran_ket_akhir`
--

CREATE TABLE `8pengukuran_ket_akhir` (
  `id` int(11) NOT NULL,
  `session` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `no_spt` varchar(128) NOT NULL,
  `tgl_spt` varchar(128) NOT NULL,
  `jenis_sbk` varchar(128) NOT NULL,
  `ket_kecamatan` varchar(128) NOT NULL,
  `jln` varchar(128) NOT NULL,
  `ket_lat` varchar(11) NOT NULL,
  `ket_lng` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `8pengukuran_ket_akhir`
--

INSERT INTO `8pengukuran_ket_akhir` (`id`, `session`, `user_id`, `no_spt`, `tgl_spt`, `jenis_sbk`, `ket_kecamatan`, `jln`, `ket_lat`, `ket_lng`) VALUES
(2, '20210326073036', 8, '053/Balmon.61/KP.01.06/03/2021', '2021-03-22', 'Pengukuran', 'Sambas', 'Jl. Tabrani, Saing Rambi, Sambas', '1.357832900', '109.2961520'),
(3, '20210326094030', 9, '053/Balmon.61/KP.01.06/03/2021', '2021-03-22', 'PENGUKURAN', 'SAMBAS', 'Gg. Dare Nandung, Tumuk Manggis, Kecamtan Sambas, Kabupaten Sambas, Kalimantan Barat 79462', '1.366521', '109.3100555'),
(4, '20210326121530', 13, '053/BALMON.61/KP.01.06/03/2021', '2021-03-22', 'PENGUKURAN PARAMETER TEKNIS SIARAN RADIO DAN TV', 'HARAPAN', 'JL. ANOM NO. 18 RT. 05 RW. 08, HARAPAN, PEMANGKAT, SAMBAS, KALIMANTAN BARAT', '1.17255556', '108.9819166'),
(5, '20210331015115', 18, 'BALMON/181/12987', '2021-03-31', 'HUHUIH', 'JHUIHUIHI', 'JHUIHIH', '-0.0237366', '109.3257534'),
(6, '20210331033255', 18, '12345678', '2021-03-31', 'HUHUIH', 'JHUIHUIHI', 'JHUIHIH', '-0.02633029', '109.3425039'),
(7, '20210331033751', 18, '203/BALMON/234/05', '2021-03-31', 'Pengukuran', 'Pontianak', 'Jln. Jendral Sudirman No. 7 Pontianak', '-0.02633029', '109.3425039'),
(8, '20210331035713', 18, '203/BALMON/123/089', '2021-03-31', 'Pengukuran Radio', 'Pontianak Kota', 'Jln. Zainudin no.5 Pontianak', '-0.02633029', '109.3425039'),
(9, '20210420114314', 18, '071/Balmon.61/KP.01.06/04/2019', '2021-04-20', 'Pengukuran', 'Singkawang', 'Jln. Ayani', '-0.0337313', '109.3762185'),
(10, '20210504113038', 8, '077/BALMON.61/KP.01.06/04/2021', '2021-04-26', 'PENGUKURAN', 'SUNGAI RAYA', 'Jl. A Yani 2', '-0.07310731', '109.3646181'),
(11, '20210504113038', 8, '077/BALMON.61/KP.01.06/04/2021', '2021-04-26', 'PENGUKURAN', 'SUNGAI RAYA', 'JL. KARYA PAL IX', '-0.05897956', '109.2969310'),
(12, '20210708025627', 18, '071/Balmon.61/KP.01.06/04/2019', '2021-07-08', 'Pengukuran', 'Singkawang', 'Jln. Ayani', '-0.0237285', '109.3257019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `9pengukuran_foto`
--

CREATE TABLE `9pengukuran_foto` (
  `id` int(11) NOT NULL,
  `id_ukur` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `9pengukuran_foto`
--

INSERT INTO `9pengukuran_foto` (`id`, `id_ukur`, `user_id`, `jenis`, `file`) VALUES
(1, '2147483647', 18, 'Frekuensi', 'design1_2_fixx1.jpg'),
(2, '2147483647', 18, 'Pergeseran', '130895-abstract-blue-triangle-geometric-background-vector2.jpg'),
(3, '2147483647', 18, 'Bandwith', 'design4_2_(1)2.jpg'),
(4, '2147483647', 18, 'Field Strength', ''),
(5, '2147483647', 18, 'Deviasi', ''),
(6, '2147483647', 18, 'Harmonisa 1', ''),
(7, '2147483647', 18, 'Harmonisa 2', ''),
(8, '2147483647', 18, 'Harmonisa 3', ''),
(9, '20210326073036', 8, 'Frekuensi', 'RRI977_LEV2.JPG'),
(10, '20210326073036', 8, 'Pergeseran', 'RRI977_FC2.JPG'),
(11, '20210326073036', 8, 'Bandwith', 'RRI977_BW2.JPG'),
(12, '20210326073036', 8, 'Field Strength', 'RRI977_FS2.JPG'),
(13, '20210326073036', 8, 'Deviasi', 'RRI977_DEV2.JPG'),
(14, '20210326073036', 8, 'Harmonisa 1', 'RRI977_H12.JPG'),
(15, '20210326073036', 8, 'Harmonisa 2', 'RRI977_H22.JPG'),
(16, '20210326073036', 8, 'Harmonisa 3', 'RRI977_H32.JPG'),
(17, '20210326094030', 9, 'Frekuensi', 'LV_LUNGI_SBS.JPG'),
(18, '20210326094030', 9, 'Pergeseran', 'LUNGI_FC.JPG'),
(19, '20210326094030', 9, 'Bandwith', 'LUNGI_BW.JPG'),
(20, '20210326094030', 9, 'Field Strength', 'LUNGI_FS.JPG'),
(21, '20210326094030', 9, 'Deviasi', 'DV_LUNGI_SBS.JPG'),
(22, '20210326094030', 9, 'Harmonisa 1', 'H1_LUNGI_SBS.JPG'),
(23, '20210326094030', 9, 'Harmonisa 2', 'LUNGI_H2.JPG'),
(24, '20210326094030', 9, 'Harmonisa 3', 'LUNGI_H3.JPG'),
(25, '20210326121530', 13, 'Frekuensi', 'MUARE_LV.JPG'),
(26, '20210326121530', 13, 'Pergeseran', 'MUARE_PG.JPG'),
(27, '20210326121530', 13, 'Bandwith', 'MUARE_OBW.JPG'),
(28, '20210326121530', 13, 'Field Strength', 'MUARE_FS.JPG'),
(29, '20210326121530', 13, 'Deviasi', 'MUARE_DV.JPG'),
(30, '20210326121530', 13, 'Harmonisa 1', 'MUARE_H1.JPG'),
(31, '20210326121530', 13, 'Harmonisa 2', 'MUARE_H2.JPG'),
(32, '20210326121530', 13, 'Harmonisa 3', 'MUARE_H3.JPG'),
(33, '20210327053058', 18, 'Frekuensi', 'Capture10.JPG'),
(34, '20210327053058', 18, 'Pergeseran', ''),
(35, '20210327053058', 18, 'Bandwith', ''),
(36, '20210327053058', 18, 'Field Strength', ''),
(37, '20210327053058', 18, 'Deviasi', ''),
(38, '20210327053058', 18, 'Harmonisa 1', ''),
(39, '20210327053058', 18, 'Harmonisa 2', ''),
(40, '20210327053058', 18, 'Harmonisa 3', ''),
(41, '20210331015115', 18, 'Frekuensi', 'Screenshot_(52).png'),
(42, '20210331015115', 18, 'Pergeseran', 'Screenshot_(53).png'),
(43, '20210331015115', 18, 'Bandwith', 'Screenshot_(75).png'),
(44, '20210331015115', 18, 'Field Strength', 'Screenshot_(76).png'),
(45, '20210331015115', 18, 'Deviasi', 'Screenshot_(153).png'),
(46, '20210331015115', 18, 'Harmonisa 1', 'Screenshot_(164).png'),
(47, '20210331015115', 18, 'Harmonisa 2', 'Screenshot_(166).png'),
(48, '20210331015115', 18, 'Harmonisa 3', 'Screenshot_(249).png'),
(49, '20210331024653', 18, 'Frekuensi', 'Screenshot_(52)2.png'),
(50, '20210331024653', 18, 'Pergeseran', 'Screenshot_(53)1.png'),
(51, '20210331024653', 18, 'Bandwith', 'Screenshot_(75)1.png'),
(52, '20210331024653', 18, 'Frekuensi', 'Screenshot_(52)3.png'),
(53, '20210331024653', 18, 'Pergeseran', 'Screenshot_(53)2.png'),
(54, '20210331024653', 18, 'Bandwith', 'Screenshot_(165).png'),
(55, '20210331024653', 18, 'Field Strength', 'Screenshot_(249)1.png'),
(56, '20210331024653', 18, 'Deviasi', 'Screenshot_(249)2.png'),
(57, '20210331033255', 18, 'Harmonisa 1', 'Screenshot_(249)3.png'),
(58, '20210331033255', 18, 'Harmonisa 2', 'Screenshot_(53)3.png'),
(59, '20210331033255', 18, 'Harmonisa 3', 'Screenshot_(75)2.png'),
(60, '20210331033751', 18, 'Frekuensi', 'Screenshot_(52)4.png'),
(61, '20210331033751', 18, 'Pergeseran', 'Screenshot_(53)4.png'),
(62, '20210331033751', 18, 'Bandwith', 'Screenshot_(75)3.png'),
(63, '20210331033751', 18, 'Field Strength', 'Screenshot_(76)2.png'),
(64, '20210331033751', 18, 'Deviasi', 'Screenshot_(247).png'),
(65, '20210331033751', 18, 'Harmonisa 1', 'Screenshot_(52)5.png'),
(66, '20210331033751', 18, 'Harmonisa 2', 'Screenshot_(53)5.png'),
(67, '20210331033751', 18, 'Harmonisa 3', 'Screenshot_(76)3.png'),
(68, '20210331035713', 18, 'Frekuensi', 'Screenshot_(52)6.png'),
(69, '20210331035713', 18, 'Pergeseran', 'Screenshot_(164)1.png'),
(70, '20210331035713', 18, 'Bandwith', 'Screenshot_(165)1.png'),
(71, '20210331035713', 18, 'Field Strength', 'Screenshot_(165)2.png'),
(72, '20210331035713', 18, 'Deviasi', 'Screenshot_(165)3.png'),
(73, '20210331035713', 18, 'Harmonisa 1', 'Screenshot_(53)6.png'),
(74, '20210331035713', 18, 'Harmonisa 2', 'Screenshot_(165)4.png'),
(75, '20210331035713', 18, 'Harmonisa 3', 'Screenshot_(249)4.png'),
(76, '20210419020101', 18, 'Frekuensi', 'Gurah_-_Bang_Syaiha_(5)_1.jpg'),
(77, '20210419020101', 18, 'Pergeseran', 'hABB.png'),
(78, '20210419020101', 18, 'Bandwith', 'Iklan_10.jpg'),
(79, '20210419020101', 18, 'Field Strength', '5.jpeg'),
(80, '20210419020101', 18, 'Deviasi', 'Iklan_13.jpg'),
(81, '20210419020101', 18, 'Harmonisa 1', 'Iklan_36.jpg'),
(82, '20210419020101', 18, 'Harmonisa 2', 'WhatsApp_Image_2021-04-13_at_06_48_36.jpeg'),
(83, '20210419020101', 18, 'Harmonisa 3', 'WhatsApp-Image-2021-01-03-at-17_13_37-576x1024.jpeg'),
(84, '20210504113038', 8, 'Frekuensi', 'SAMARIA_LV.JPG'),
(85, '20210504113038', 8, 'Pergeseran', 'SAMARIA_FC.JPG'),
(86, '20210504113038', 8, 'Bandwith', 'OBW_SAMARIA_DBC.JPG'),
(87, '20210504113038', 8, 'Field Strength', 'FS_SAMARIA.JPG'),
(88, '20210504113038', 8, 'Deviasi', 'SAMARIA_DEV_1.JPG'),
(89, '20210504113038', 8, 'Harmonisa 1', 'SAMARIA_H1.JPG'),
(90, '20210504113038', 8, 'Harmonisa 2', 'SAMARIA_H2.JPG'),
(91, '20210504113038', 8, 'Harmonisa 3', 'SAMARIA_H3.JPG'),
(92, '20210504113038', 8, 'Frekuensi', 'RODJA_LEV.JPG'),
(93, '20210504113038', 8, 'Pergeseran', 'RODJA_FC.JPG'),
(94, '20210504113038', 8, 'Bandwith', 'RODJA_OBW26.JPG'),
(95, '20210504113038', 8, 'Field Strength', 'RODJA_FS.JPG'),
(96, '20210504113038', 8, 'Deviasi', 'RODJA_DEV.JPG'),
(97, '20210504113038', 8, 'Harmonisa 1', 'RODJA_H1.JPG'),
(98, '20210504113038', 8, 'Harmonisa 2', 'RODJA_H2.JPG'),
(99, '20210504113038', 8, 'Harmonisa 3', 'RODJA_H3.JPG'),
(100, '20210708025627', 18, 'Frekuensi', 'class_deploy-Page-2.jpg'),
(101, '20210708025627', 18, 'Pergeseran', 'Untitled_Diagram_(1).jpg'),
(102, '20210708025627', 18, 'Bandwith', 'Untitled_Diagram.jpg'),
(103, '20210708025627', 18, 'Field Strength', 'Use_Case_(2).jpg'),
(104, '20210708025627', 18, 'Deviasi', 'Use_Case_(1).jpg'),
(105, '20210708025627', 18, 'Harmonisa 1', 'class_deploy-Page-21.jpg'),
(106, '20210708025627', 18, 'Harmonisa 2', 'Untitled_Diagram_(1)1.jpg'),
(107, '20210708025627', 18, 'Harmonisa 3', 'ek_png.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_kabupaten`
--

CREATE TABLE `input_kabupaten` (
  `id_kab` int(11) NOT NULL,
  `nama_kab` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `input_kabupaten`
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
-- Struktur dari tabel `input_kecamatan`
--

CREATE TABLE `input_kecamatan` (
  `id_kec` int(11) NOT NULL,
  `id_kab` int(11) DEFAULT NULL,
  `kecamatan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `input_kecamatan`
--

INSERT INTO `input_kecamatan` (`id_kec`, `id_kab`, `kecamatan`) VALUES
(11, 1, 'Sungai Raya'),
(12, 1, 'Samalantan'),
(13, 1, 'Ledo'),
(14, 1, 'Bengkayang'),
(15, 1, 'Seluas'),
(16, 1, 'Sanggau Ledo'),
(17, 1, 'Jagoi Babang'),
(18, 1, 'Monterado'),
(19, 1, 'Teriak'),
(21, 2, 'Putussibau Utara'),
(22, 2, 'Bika'),
(23, 2, 'Embaloh Hilir'),
(24, 2, 'Embaloh Hulu'),
(25, 2, 'Bunut Hilir'),
(26, 2, 'Bunut Hulu'),
(27, 2, 'Jongkong'),
(28, 2, 'Hulu Gurung'),
(29, 2, 'Selimbau'),
(31, 3, 'Sukadana'),
(32, 3, 'Simpang Hilir'),
(33, 3, 'Teluk Batang'),
(34, 3, 'Pulau Maya'),
(35, 3, 'Seponti'),
(36, 3, 'Kepulauan Karimata'),
(41, 4, 'Matan Hilir Utara'),
(42, 4, 'Marau'),
(43, 4, 'Manis Mata'),
(44, 4, 'Kendawangan'),
(45, 4, 'Sandai'),
(46, 4, 'Sungai Laur'),
(47, 4, 'Simpang Hulu'),
(48, 4, 'Nanga Tayap'),
(49, 4, 'Matan Hilir Selatan'),
(51, 5, 'Sungai Raya'),
(52, 5, 'Kuala Mandor B'),
(53, 5, 'Sungai Ambawang'),
(54, 5, 'Terentang'),
(55, 5, 'Batu Ampar'),
(56, 5, 'Kubu'),
(57, 5, 'Rasau Jaya'),
(58, 5, 'Teluk Pakedai'),
(59, 5, 'Sungai Kakap'),
(61, 6, 'Ngabang'),
(62, 6, 'Mempawah Hulu'),
(63, 6, 'Menjalin'),
(64, 6, 'Mandor'),
(65, 6, 'Air Besar'),
(66, 6, 'Menyuke'),
(67, 6, 'Sengah Temila'),
(68, 6, 'Meranti'),
(69, 6, 'Kuala Behe'),
(71, 7, 'Belimbing'),
(72, 7, 'Nanga Pinoh'),
(73, 7, 'Ella Hilir'),
(74, 7, 'Menukung'),
(75, 7, 'Sayan'),
(76, 7, 'Tanah Pinoh'),
(77, 7, 'Sokan'),
(78, 7, 'Pinoh Utara'),
(79, 7, 'Pinoh Selatan'),
(81, 8, 'Mempawah Hilir'),
(82, 8, 'Toho'),
(83, 8, 'Sungai Pinyuh'),
(84, 8, 'Siantan'),
(85, 8, 'Sungai Kunyit'),
(86, 8, 'Segedong'),
(87, 8, 'Anjongan'),
(88, 8, 'Sadaniang'),
(89, 8, 'Mempawah Timur'),
(91, 9, 'Sambas'),
(92, 9, 'Teluk Keramat'),
(93, 9, 'Jawai'),
(94, 9, 'Tebas'),
(95, 9, 'Pemangkat'),
(96, 9, 'Sejangkung'),
(97, 9, 'Selakau'),
(98, 9, 'Paloh'),
(99, 9, 'Sajingan Besar'),
(110, 1, 'Suti Semarang'),
(111, 1, 'Capkala'),
(112, 1, 'Siding'),
(113, 1, 'Lumar'),
(114, 1, 'Sungai Betung'),
(115, 1, 'Sungai Raya Kepulauan'),
(116, 1, 'Lembah Bawang'),
(117, 1, 'Tujuh Belas'),
(210, 2, 'Semitau'),
(211, 2, 'Seberuang'),
(212, 2, 'Batang Lupar'),
(213, 2, 'Empanang'),
(214, 2, 'Badau'),
(215, 2, 'Silat Hilir'),
(216, 2, 'Silat Hulu'),
(217, 2, 'Putussibau Selatan'),
(218, 2, 'Kalis'),
(219, 2, 'Boyan Tanjung'),
(220, 2, 'Mentebah'),
(221, 2, 'Pengkadan'),
(222, 2, 'Suhaid'),
(223, 2, 'Puring Kencana'),
(410, 4, 'Tumbang Titi'),
(411, 4, 'Jelai Hulu'),
(412, 4, 'Delta Pawan'),
(413, 4, 'Muara Pawan'),
(414, 4, 'Benua Kayong'),
(415, 4, 'Hulu Sungai'),
(416, 4, 'Simpang Dua'),
(417, 4, 'Air Upas'),
(418, 4, 'Singkup'),
(419, 4, 'Pemahan'),
(420, 4, 'Sungai Melayu Rayak'),
(610, 6, 'Sebangki'),
(611, 6, 'Jelimpo'),
(612, 6, 'Banyuke Hulu'),
(613, 6, 'Sompak'),
(710, 7, 'Belimbing Hulu'),
(711, 7, 'Tanah Pinoh Barat'),
(910, 9, 'Subah'),
(911, 9, 'Galing'),
(912, 9, 'Tekarang'),
(913, 9, 'Semparuk'),
(914, 9, 'Sajad'),
(915, 9, 'Sebawi'),
(916, 9, 'Jawai Selatan'),
(917, 9, 'Tangaran'),
(918, 9, 'Salatiga'),
(919, 9, 'Selakau Timur'),
(1001, 10, 'Kapuas'),
(1002, 10, 'Mukok'),
(1003, 10, 'Noyan'),
(1004, 10, 'Jangkang'),
(1005, 10, 'Bonti'),
(1006, 10, 'Beduai'),
(1007, 10, 'Sekayam'),
(1008, 10, 'Kembayan'),
(1009, 10, 'Parindu'),
(1010, 10, 'Tayan Hulu'),
(1011, 10, 'Tayan Hilir'),
(1012, 10, 'Balai'),
(1013, 10, 'Toba'),
(1014, 10, 'Meliau'),
(1015, 10, 'Entikong'),
(1101, 11, 'Sekadau Hilir'),
(1102, 11, 'Sekadau Hulu'),
(1103, 11, 'Nanga Taman'),
(1104, 11, 'Nanga Mahap'),
(1105, 11, 'Belitang Hilir'),
(1106, 11, 'Belitang Hulu'),
(1107, 11, 'Belitang'),
(1201, 12, 'Sintang'),
(1202, 12, 'Tempunak'),
(1203, 12, 'Sepauk'),
(1204, 12, 'Ketungau Hilir'),
(1205, 12, 'Ketungau Tengah'),
(1206, 12, 'Ketungau Hulu'),
(1207, 12, 'Dedai'),
(1208, 12, 'Kayan Hilir'),
(1209, 12, 'Kayan Hulu'),
(1210, 12, 'Serawai'),
(1211, 12, 'Ambalau'),
(1212, 12, 'Kelam Permai'),
(1213, 12, 'Sungai Tebelian'),
(1214, 12, 'Binjai Hulu'),
(1301, 13, 'Pontianak Selatan'),
(1302, 13, 'Pontianak Timur'),
(1303, 13, 'Pontianak Barat'),
(1304, 13, 'Pontianak Utara'),
(1305, 13, 'Pontianak Kota'),
(1306, 13, 'Pontianak Tenggara'),
(1401, 14, 'Singkawang Tengah'),
(1402, 14, 'Singkawang Barat'),
(1403, 14, 'Singkawang Timur'),
(1404, 14, 'Singkawang Utara'),
(1405, 14, 'Singkawang Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kanal_auto`
--

CREATE TABLE `kanal_auto` (
  `id` int(11) NOT NULL,
  `frekuensi` varchar(128) NOT NULL,
  `kanal` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kanal_auto`
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
-- Struktur dari tabel `user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
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
(19, '070220170824181724', 'Arif Mardianto', 'arifm@gmail.com', '08976542334', '$2y$10$7NaL8bIvopzpR6l84w59gOpFSR5dqXDjwlvYd32hOgeRkXeUfxIr.', 'avatar.png', 2, 1, 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 1, 3),
(4, 2, 2),
(5, 2, 4),
(7, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Pengukuran'),
(5, 'Form');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tag', 1),
(8, 1, 'User Management', 'admin/userlist', 'fas fa-fw fa-users-cog', 1),
(9, 4, 'Dashboard', 'pengukuran/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(10, 4, 'Pengukuran Radio', 'pengukuran', 'fas fa-fw fa-ruler-vertical', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `1pengukuran_ket`
--
ALTER TABLE `1pengukuran_ket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `2pengukuran_stasiun`
--
ALTER TABLE `2pengukuran_stasiun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `3pengukuran_lokasi`
--
ALTER TABLE `3pengukuran_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `4pengukuran_spek_pem`
--
ALTER TABLE `4pengukuran_spek_pem`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `5pengukuran_spek_ant`
--
ALTER TABLE `5pengukuran_spek_ant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `6pengukuran_hasil`
--
ALTER TABLE `6pengukuran_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `7pengukuran_harmonisa`
--
ALTER TABLE `7pengukuran_harmonisa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `8pengukuran_ket_akhir`
--
ALTER TABLE `8pengukuran_ket_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `9pengukuran_foto`
--
ALTER TABLE `9pengukuran_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `input_kabupaten`
--
ALTER TABLE `input_kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indeks untuk tabel `input_kecamatan`
--
ALTER TABLE `input_kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indeks untuk tabel `kanal_auto`
--
ALTER TABLE `kanal_auto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `1pengukuran_ket`
--
ALTER TABLE `1pengukuran_ket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `2pengukuran_stasiun`
--
ALTER TABLE `2pengukuran_stasiun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `3pengukuran_lokasi`
--
ALTER TABLE `3pengukuran_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `4pengukuran_spek_pem`
--
ALTER TABLE `4pengukuran_spek_pem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `5pengukuran_spek_ant`
--
ALTER TABLE `5pengukuran_spek_ant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `6pengukuran_hasil`
--
ALTER TABLE `6pengukuran_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `7pengukuran_harmonisa`
--
ALTER TABLE `7pengukuran_harmonisa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `8pengukuran_ket_akhir`
--
ALTER TABLE `8pengukuran_ket_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `9pengukuran_foto`
--
ALTER TABLE `9pengukuran_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `input_kabupaten`
--
ALTER TABLE `input_kabupaten`
  MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kanal_auto`
--
ALTER TABLE `kanal_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
