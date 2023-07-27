-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2022 pada 11.28
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(10) NOT NULL,
  `kd_penyakit` varchar(10) CHARACTER SET latin1 NOT NULL,
  `nilai_cf` float NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `kd_penyakit`, `nilai_cf`, `id_user`) VALUES
(52, 'P006', 0.614486, 75),
(61, 'P006', 0.3616, 84),
(62, 'P001', 0.495664, 85),
(63, 'P001', 0.495664, 85),
(64, 'P002', 0.396124, 86),
(65, 'P002', 0.396124, 87),
(66, 'P001', 0.495664, 88);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa_gejala`
--

CREATE TABLE `diagnosa_gejala` (
  `id` int(10) NOT NULL,
  `id_diagnosa` int(10) NOT NULL,
  `kd_gejala` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa_gejala`
--

INSERT INTO `diagnosa_gejala` (`id`, `id_diagnosa`, `kd_gejala`) VALUES
(21, 7, 'G001'),
(22, 7, 'G002'),
(23, 7, 'G018'),
(24, 8, 'G001'),
(25, 8, 'G002'),
(26, 8, 'G018'),
(27, 9, 'G001'),
(28, 9, 'G002'),
(29, 9, 'G018'),
(30, 10, 'G001'),
(31, 10, 'G002'),
(32, 10, 'G018'),
(33, 11, 'G001'),
(34, 11, 'G002'),
(35, 11, 'G018'),
(36, 12, 'G001'),
(37, 12, 'G002'),
(38, 12, 'G018'),
(39, 13, 'G001'),
(40, 13, 'G002'),
(41, 13, 'G018'),
(42, 14, 'G001'),
(43, 14, 'G002'),
(44, 14, 'G018'),
(45, 15, 'G001'),
(46, 15, 'G002'),
(47, 15, 'G018'),
(48, 16, 'G001'),
(49, 16, 'G002'),
(50, 16, 'G018'),
(51, 17, 'G003'),
(52, 17, 'G004'),
(53, 17, 'G005'),
(54, 17, 'G007'),
(55, 17, 'G008'),
(56, 17, 'G009'),
(57, 18, 'G001'),
(58, 18, 'G018'),
(59, 19, 'G004'),
(60, 19, 'G012'),
(61, 19, 'G025'),
(63, 20, 'G001'),
(64, 20, 'G002'),
(65, 20, 'G018'),
(66, 21, 'G001'),
(67, 21, 'G002'),
(68, 21, 'G018'),
(69, 22, 'G001'),
(70, 22, 'G002'),
(71, 22, 'G018'),
(72, 23, 'G001'),
(73, 23, 'G002'),
(74, 23, 'G018'),
(75, 24, 'G003'),
(76, 24, 'G004'),
(77, 24, 'G005'),
(78, 24, 'G006'),
(79, 24, 'G007'),
(80, 24, 'G008'),
(81, 24, 'G009'),
(82, 24, 'G010'),
(83, 24, 'G011'),
(84, 25, 'G003'),
(85, 25, 'G004'),
(86, 25, 'G005'),
(87, 25, 'G006'),
(88, 25, 'G007'),
(89, 25, 'G008'),
(90, 25, 'G009'),
(91, 25, 'G010'),
(92, 25, 'G011'),
(93, 26, 'G003'),
(94, 26, 'G004'),
(95, 26, 'G005'),
(96, 26, 'G006'),
(97, 26, 'G007'),
(98, 26, 'G008'),
(99, 26, 'G009'),
(100, 26, 'G010'),
(101, 27, 'G003'),
(102, 27, 'G005'),
(103, 27, 'G008'),
(104, 27, 'G012'),
(105, 27, 'G020'),
(106, 28, 'G001'),
(107, 28, 'G007'),
(108, 28, 'G018'),
(109, 29, 'G001'),
(110, 29, 'G007'),
(111, 29, 'G016'),
(112, 30, 'G004'),
(113, 30, 'G018'),
(114, 31, 'G004'),
(115, 31, 'G018'),
(116, 32, 'G005'),
(117, 32, 'G008'),
(118, 32, 'G011'),
(119, 32, 'G012'),
(120, 33, 'G002'),
(121, 33, 'G007'),
(122, 33, 'G016'),
(123, 33, 'G025'),
(124, 34, 'G002'),
(125, 34, 'G007'),
(126, 34, 'G016'),
(127, 34, 'G025'),
(128, 35, 'G002'),
(129, 35, 'G016'),
(130, 35, 'G025'),
(131, 36, 'G002'),
(132, 36, 'G016'),
(133, 36, 'G025'),
(134, 37, 'G002'),
(135, 37, 'G007'),
(136, 37, 'G016'),
(137, 37, 'G025'),
(138, 38, 'G007'),
(139, 38, 'G009'),
(140, 38, 'G016'),
(141, 38, 'G024'),
(145, 39, 'G007'),
(146, 39, 'G009'),
(147, 39, 'G016'),
(148, 39, 'G024'),
(152, 40, 'G001'),
(153, 40, 'G016'),
(154, 40, 'G018'),
(155, 41, 'G001'),
(156, 41, 'G002'),
(157, 41, 'G005'),
(158, 41, 'G007'),
(159, 41, 'G016'),
(160, 42, 'G002'),
(161, 42, 'G009'),
(162, 42, 'G016'),
(163, 42, 'G024'),
(164, 43, 'G004'),
(165, 43, 'G005'),
(166, 43, 'G008'),
(167, 43, 'G010'),
(168, 43, 'G011'),
(169, 43, 'G013'),
(170, 44, 'G002'),
(171, 44, 'G009'),
(172, 44, 'G016'),
(173, 45, 'G006'),
(174, 45, 'G011'),
(175, 45, 'G015'),
(176, 45, 'G016'),
(177, 45, 'G017'),
(178, 46, 'G004'),
(179, 46, 'G005'),
(180, 46, 'G008'),
(181, 46, 'G010'),
(182, 46, 'G012'),
(183, 46, 'G014'),
(184, 46, 'G016'),
(185, 47, 'G001'),
(186, 47, 'G016'),
(187, 47, 'G018'),
(188, 47, 'G023'),
(189, 48, 'G002'),
(190, 48, 'G005'),
(191, 48, 'G007'),
(192, 49, 'G002'),
(193, 48, 'G016'),
(194, 49, 'G005'),
(195, 49, 'G007'),
(196, 49, 'G016'),
(197, 50, 'G002'),
(198, 50, 'G005'),
(199, 50, 'G007'),
(200, 50, 'G016'),
(201, 51, 'G002'),
(202, 51, 'G007'),
(203, 51, 'G016'),
(204, 51, 'G025'),
(205, 52, 'G011'),
(206, 52, 'G016'),
(207, 52, 'G017'),
(208, 52, 'G018'),
(209, 52, 'G022'),
(210, 53, 'G002'),
(211, 53, 'G007'),
(212, 53, 'G016'),
(213, 53, 'G025'),
(214, 54, 'G002'),
(215, 54, 'G007'),
(216, 54, 'G016'),
(217, 54, 'G025'),
(218, 55, 'G006'),
(219, 55, 'G015'),
(220, 55, 'G017'),
(221, 55, 'G018'),
(222, 55, 'G022'),
(223, 56, 'G004'),
(224, 56, 'G005'),
(225, 56, 'G010'),
(226, 56, 'G013'),
(227, 56, 'G014'),
(228, 56, 'G016'),
(229, 57, 'G015'),
(230, 58, 'G016'),
(231, 58, 'G024'),
(232, 59, 'G002'),
(233, 59, 'G007'),
(234, 59, 'G016'),
(235, 59, 'G025'),
(236, 60, 'G002'),
(237, 60, 'G007'),
(238, 60, 'G016'),
(239, 60, 'G025'),
(240, 61, 'G016'),
(241, 61, 'G018'),
(242, 61, 'G023'),
(243, 62, 'G004'),
(244, 62, 'G005'),
(245, 62, 'G008'),
(246, 62, 'G010'),
(247, 62, 'G011'),
(248, 62, 'G012'),
(249, 62, 'G014'),
(250, 62, 'G016'),
(251, 63, 'G004'),
(252, 63, 'G005'),
(253, 63, 'G010'),
(254, 63, 'G011'),
(255, 63, 'G016'),
(256, 64, 'G004'),
(257, 64, 'G005'),
(258, 64, 'G010'),
(259, 64, 'G011'),
(260, 64, 'G013'),
(261, 64, 'G016'),
(262, 65, 'G002'),
(263, 65, 'G007'),
(264, 65, 'G009'),
(265, 65, 'G016'),
(266, 65, 'G024'),
(267, 66, 'G002'),
(268, 66, 'G007'),
(269, 66, 'G016'),
(270, 66, 'G025'),
(271, 67, 'G001'),
(272, 67, 'G002'),
(273, 67, 'G007'),
(274, 67, 'G016'),
(275, 68, 'G002'),
(276, 68, 'G007'),
(277, 68, 'G016'),
(278, 68, 'G025'),
(279, 69, 'G002'),
(280, 69, 'G007'),
(281, 69, 'G016'),
(282, 69, 'G025'),
(283, 70, 'G002'),
(284, 70, 'G007'),
(285, 70, 'G016'),
(286, 70, 'G025'),
(287, 71, 'G002'),
(288, 71, 'G007'),
(289, 71, 'G016'),
(290, 71, 'G025'),
(291, 72, 'G007'),
(292, 72, 'G016'),
(293, 72, 'G025'),
(294, 73, 'G007'),
(295, 73, 'G016'),
(296, 73, 'G025'),
(297, 74, 'G007'),
(298, 74, 'G016'),
(299, 74, 'G025'),
(300, 75, 'G001'),
(301, 75, 'G016'),
(302, 75, 'G018'),
(303, 75, 'G023'),
(304, 76, 'G001'),
(305, 76, 'G016'),
(306, 76, 'G018'),
(307, 76, 'G023'),
(308, 77, 'G001'),
(309, 77, 'G016'),
(310, 77, 'G018'),
(311, 77, 'G023'),
(312, 78, 'G002'),
(313, 78, 'G007'),
(314, 78, 'G016'),
(315, 78, 'G025'),
(316, 79, 'G002'),
(317, 79, 'G007'),
(318, 79, 'G016'),
(319, 79, 'G025'),
(320, 62, 'G002'),
(321, 62, 'G007'),
(322, 62, 'G016'),
(323, 62, 'G025'),
(324, 63, 'G002'),
(325, 63, 'G007'),
(326, 63, 'G016'),
(327, 63, 'G025'),
(328, 64, 'G001'),
(329, 64, 'G016'),
(330, 64, 'G018'),
(331, 64, 'G023'),
(332, 65, 'G001'),
(333, 65, 'G016'),
(334, 65, 'G018'),
(335, 65, 'G023'),
(336, 66, 'G002'),
(337, 66, 'G007'),
(338, 66, 'G016'),
(339, 66, 'G025');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kd_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kd_gejala`, `nama_gejala`) VALUES
('G001', 'Diare'),
('G002', 'meningkatnya dorongan BAK'),
('G003', 'rasa mulas yang terus menerus,disertai rasa tidak bisa menahan BAB'),
('G004', 'Dhidrasi'),
('G005', 'Air berbau seperti selokan atau lumpur\r\n'),
('G006', 'Diare mengandung lendir dan darah'),
('G007', 'Sakit pinggul'),
('G008', 'Air tidak jernih atau keruh'),
('G009', 'Sakit punggung'),
('G010', 'Warna air berubah dalam 2 hari'),
('G011', 'kehilangan nafsu makan'),
('G012', 'menurunnya jumalah urine'),
('G013', 'Air terasa getir atau kelat di lidah'),
('G014', 'Air Kekuningan \r\n'),
('G015', 'mual'),
('G016', 'demam'),
('G017', 'muntah'),
('G018', 'kram perut'),
('G019', 'diare encer'),
('G020', 'rasa air asam'),
('G021', 'suhur air berubah'),
('G022', 'berat badan menurun'),
('G023', 'BAB berdarah'),
('G024', 'air meninggalkan noda'),
('G025', 'air berbusa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengetahuan`
--

CREATE TABLE `tbl_pengetahuan` (
  `kd_pengetahuan` varchar(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `Mb` double NOT NULL,
  `Md` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengetahuan`
--

INSERT INTO `tbl_pengetahuan` (`kd_pengetahuan`, `kd_penyakit`, `kd_gejala`, `pertanyaan`, `Mb`, `Md`) VALUES
('PG001', 'P001', 'G002', 'apakah mengalami diare', 0.8, 0.2),
('PG002', 'P001', 'G007', 'Apakah merasa sakit pinggul ?', 0.6, 0.4),
('PG003', 'P001', 'G016', 'Apakah mengalami demam ?', 0.7, 0.3),
('PG004', 'P001', 'G025', 'Apakah mengalami air berbusa ?', 0.8, 0),
('PG005', 'P002', 'G001', 'Apakah mengalami kehilangan nafsu makan ?', 0.9, 0.1),
('PG006', 'P002', 'G016', 'Apakah mengalami demam ?', 0.7, 0.3),
('PG007', 'P002', 'G018', 'Apakah mengalami kram perut ?', 0.8, 0.2),
('PG008', 'P002', 'G023', 'Apakah mengalami bab berdarah ?', 1, 0),
('PG009', 'P003', 'G001', 'Apakah mengalami kehilangan nafsu makan ?', 0.9, 0.1),
('PG010', 'P003', 'G002', 'Apakah mengalami meningkatnya dorongan BAK ?', 0.5, 0.5),
('PG011', 'P003', 'G007', 'Apakah mengalami Sakit pinggul ?', 0.6, 0.4),
('PG012', 'P003', 'G016', 'Apakah mengalami demam ?', 0.9, 0.1),
('PG013', 'P003', 'G005', 'Apakah air berbau seperti selokan atau lumpur ?', 0.8, 0.2),
('PG014', 'P004', 'G002', 'Apakah mengalami  meningkatnya dorongan BAK?', 0.7, 0.3),
('PG015', 'P004', 'G007', 'Apakah mengalami  sakit pinggul?', 1, 0),
('PG016', 'P004', 'G009', 'Apakah mengalami sakit pinggul?', 0.9, 0.1),
('PG017', 'P004', 'G016', 'Apakah mengalami  demam ?', 1, 0),
('PG018', 'P004', 'G024', 'Apakah air meninggalkan noda?', 0.7, 0.3),
('PG019', 'P005', 'G004', 'Apakah mengalami  dehidrasi?', 0.6, 0.4),
('PG020', 'P005', 'G008', 'Apakah mengalami air tidak jernih atau keruh ?', 0.6, 0.4),
('PG021', 'P005', 'G005', 'Apakah air berbau seperti selokan atau lumpur ?', 0.8, 0.2),
('PG022', 'P005', 'G010', 'Apakah warna berubah dalam 2 hari?', 0.9, 0.1),
('PG023', 'P005', 'G011', 'Apakah kehilangan nafsu makan ?', 0.9, 0.1),
('PG024', 'P005', 'G012', 'Apakah menurunnya jumlah urine?', 0.8, 0.2),
('PG025', 'P005', 'G013', 'Apakah air terasa getir atau kelat dilidah?', 0.7, 0.3),
('PG026', 'P005', 'G014', 'Apakah Air kekuningan ?', 1, 0),
('PG027', 'P005', 'G016', 'Apakah mengalami demam ?', 0.6, 0.4),
('PG028', 'P006', 'G015', 'Apakah mengalami mual ?', 0.8, 0.2),
('PG029', 'P006', 'G006', 'Apakah mengalami diare mengandung diare dan lendir ?', 0.9, 0.1),
('PG030', 'P006', 'G011', 'Apakah mengalami kehilangan nafsu makan ?', 0.7, 0.3),
('PG031', 'P006', 'G016', 'Apakah mengalami demam ?', 0.6, 0.4),
('PG032', 'P006', 'G017', 'Apakah mengalami muntah ?', 0.9, 0.1),
('PG033', 'P006', 'G018', 'Apakah mengalami kram perut ?', 0.8, 0.2),
('PG034', 'P006', 'G022', 'Apakah mengalami berat badan menurun ?', 0.8, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`) VALUES
(1, 'muhammad fauzul adzhim', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `kd_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `penyebab` text NOT NULL,
  `solusi` text NOT NULL,
  `alamat_depot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`kd_penyakit`, `nama_penyakit`, `foto`, `penyebab`, `solusi`, `alamat_depot`) VALUES
('P001', 'Bacillus subtilis', '', 'ditemukan di dalam tanah dan saluran pencernaan ruminansia dan manusia. Sebuah anggota genus Bacillus, B. subtilis adalah berbentuk batang, dan dapat membentuk endospora pelindung yang keras, memungkinkan untuk mentoleransi kondisi lingkungan yang ekstrim.', 'a. segera memeriksa ke tempat kesehatan terdekat\r\nb. ganti pilihan tempat AMIU yang lain', 'Depot AMIU Dana'),
('P002', 'Shigella sp', '', 'infeksi bakteri yang terjadi di saluran pencernaan. Infeksi ini terjadi ketika bakteri masuk ke dalam tubuh melalui kontak dengan feses atau melalui makanan atau minuman yang terkontaminasi. Bakteri ini tergolong sangat infeksius. Artinya, dalam jumlah kecil, bakteri ini sudah bisa menyebabkan gejala pada manusia.', 'a). disarankan untuk banyak minum air putih guna mengganti cairan tubuh yang hilang dan mencegah dehidrasi.b). Penting untuk diingat, selama diare terjadi, pasien tidak boleh mengonsumsi obat penghenti diare. ', 'Depot AMIU Allisya'),
('P003', 'Proteus Vulgaris', '', 'proteus vulgaris bakteri Gram-negatif berbentuk-berbentuk, \r\npenurun nitrat, positif-indol dan positif-katalase, bakteri-negatif yang menghuni saluran usus manusia dan hewan. Ini dapat ditemukan di tanah, air, dan kotoran.', 'a. Menjaga kualitas air untuk tidak terkena panas matahari\nb. Pertahankan suhu air tidak kurang dari 28°C\n', 'Depot AMIU Rusdi'),
('P004', 'Coliform', '', 'Bakteri Coliform termasuk flora normal usus besar manusia dan hewan berdarah panas, tidak berbahaya namun ada beberapa strain yang patogen pada manusia maupun hewan. disebabkan air terkontaminasi oleh kotoran hewan', 'a. disarankan untuk banyak minum air putih guna mengganti cairan tubuh yang hilang dan mencegah dehidrasi.\nb. Penting untuk diingat, selama diare terjadi, pasien tidak boleh mengonsumsi obat penghenti diare. ', 'Depot AMIU Aquanda'),
('P005', 'Escheriacoli', '', ' bakteri E. coli berbahaya karena mengonsumsi makanan dan minuman yang terkontaminasi. Paparan E. Coli ini dapat menimbulkan gejala berupa sakit perut, diare, mual, dan muntah. Penyakit yang disebabkan oleh bakteri E. coli ini akan berdampak lebih parah jika terjadi pada anak-anak dan lansia.', 'a. Infeksi E. coli biasanya dapat sembuh dengan sendirinya dalam beberapa hari. Namun, pada pasien yang mengalami diare parah, dokter dapat memberikan obat antibiotik.\nb. antibiotik tidak boleh diberikan pada pasien yang diduga terinfeksi bakteri E. coli tipe STEC. Hal ini karena antibiotik dapat meningkatkan produksi racun Shiga sehingga memperparah gejala yang dialami.', 'Depot AMIU Cha Cha'),
('P006', 'Clostridium Difcille', '', 'Bakteri ini masuk kedalam genus Clostridium. Bakteri ini pertama kali ditemukan pada tahun 1896 oleh Emile van Ermengem dan umumnya dapat ditemukan di tanah. C. botulinum termasuk bakteri gram positif, anaerob obligat (tidak bisa hidup bila terdapat oksigen), motil (dapat bergerak), dan menghasilkan spora.[', 'a). perhatikan ph air minum isi ulang\r\nb). jaga suhu air minum dibawah 10*\r\n', 'Depot AMIU Zifath'),
('P007', 'd', '0', 'd', 'd', ''),
('P008', 'd', '0', 'd', 'd', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_hasil`
--

CREATE TABLE `tmp_hasil` (
  `id` int(10) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL,
  `poin_gejala` double NOT NULL,
  `poin_user` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_relasi`
--

CREATE TABLE `tmp_relasi` (
  `id` int(11) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `kd_gejala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(10) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `umur`, `jenis_kelamin`, `no_telpon`, `alamat`) VALUES
(75, 'charles', 12, 'laki-laki', '081256322707', '0'),
(84, 'jane', 19, 'perempuan', '081256322707', '0'),
(85, 'bayu', 22, 'laki-laki', '081256322707', '0'),
(86, 'rian', 22, 'laki-laki', '081256322707', '0'),
(87, 'bayu saiin', 23, 'laki-laki', '081256322707', '0'),
(88, 'uzul', 24, 'laki-laki', '081256322707', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_diagnosa` (`id_user`),
  ADD KEY `fk_diagnosa_gejala` (`kd_penyakit`);

--
-- Indeks untuk tabel `diagnosa_gejala`
--
ALTER TABLE `diagnosa_gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_diagnosa_gejala_gejala` (`kd_gejala`);

--
-- Indeks untuk tabel `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indeks untuk tabel `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`kd_pengetahuan`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indeks untuk tabel `tmp_hasil`
--
ALTER TABLE `tmp_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tmp_relasi`
--
ALTER TABLE `tmp_relasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `diagnosa_gejala`
--
ALTER TABLE `diagnosa_gejala`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tmp_hasil`
--
ALTER TABLE `tmp_hasil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tmp_relasi`
--
ALTER TABLE `tmp_relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `fk_diagnosa_gejala` FOREIGN KEY (`kd_penyakit`) REFERENCES `tbl_penyakit` (`kd_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_diagnosa` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `diagnosa_gejala`
--
ALTER TABLE `diagnosa_gejala`
  ADD CONSTRAINT `fk_diagnosa_gejala_gejala` FOREIGN KEY (`kd_gejala`) REFERENCES `tbl_gejala` (`kd_gejala`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
