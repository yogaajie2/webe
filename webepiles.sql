-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 04:25 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webepiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(30) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`) VALUES
(1, 'Client 1'),
(2, 'Client 2'),
(3, 'Client Y'),
(4, 'edited Client Z'),
(5, 'Client 5'),
(6, 'Client X');

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `id_fitur` int(11) NOT NULL,
  `nama_fitur` varchar(20) NOT NULL,
  `deskripsi_fitur` text NOT NULL,
  `gambar_fitur` varchar(200) NOT NULL,
  `bahasa_fitur` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id_fitur`, `nama_fitur`, `deskripsi_fitur`, `gambar_fitur`, `bahasa_fitur`) VALUES
(1, 'edited Fitur 1 en', '<p>edited [en] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. <i>Ne eum stet melius</i>, recteque persecuti cum ex.</p>', 'img/features/pexels-photo-95687.jpeg', 'en'),
(2, 'Fitur 2 en', '<p>[en] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.</p>', 'img/features/feature-2.jpeg', 'en'),
(3, 'Fitur 3 en', '<p>[en] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.</p>', 'img/features/feature-3.jpeg', 'en'),
(4, 'Fitur 1 id', '[id] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.', 'img/features/feature-1.jpeg', 'id'),
(5, 'Fitur 2 id', '[id] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.', 'img/features/feature-2.jpeg', 'id'),
(6, 'Fitur 3 id', '[id] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.', 'img/features/feature-3.jpeg', 'id'),
(7, 'Fitur 1 cn', '[cn] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.', 'img/features/feature-1.jpeg', 'cn'),
(8, 'Fitur 2 cn', '[cn] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.', 'img/features/feature-2.jpeg', 'cn'),
(9, 'Fitur 3 cn', '<p>[cn] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.</p>', 'img/features/Jellyfish.jpg', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `jajaran_direksi`
--

CREATE TABLE `jajaran_direksi` (
  `id_jajaran_direksi` int(11) NOT NULL,
  `nama_jajaran_direksi` varchar(30) NOT NULL,
  `jabatan_jajaran_direksi` varchar(30) NOT NULL,
  `tentang_jajaran_direksi` text NOT NULL,
  `gambar_jajaran_direksi` varchar(200) NOT NULL,
  `bahasa_jajaran_direksi` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jajaran_direksi`
--

INSERT INTO `jajaran_direksi` (`id_jajaran_direksi`, `nama_jajaran_direksi`, `jabatan_jajaran_direksi`, `tentang_jajaran_direksi`, `gambar_jajaran_direksi`, `bahasa_jajaran_direksi`) VALUES
(1, 'Agus Hasan', 'Director', '[en] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'en'),
(2, 'edited Hana Yuliana', 'edited Vice Director', '<p>edited [en] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'en'),
(3, 'Priscilla Elsa', 'Secretary', '[en] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'en'),
(4, 'Agus Hasan', 'Direktur', '[id] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'id'),
(5, 'Hana Yuliana', 'Wakil Direktur', '[id] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'id'),
(6, 'Priscilla Elsa', 'Sekretaris', '[id] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'id'),
(7, '[cn] Agus Hasan', '[cn] Direktur', '[cn] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'cn'),
(8, '[cn] Hana Yuliana', '[cn] Wakil Direktur', '[cn] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'cn'),
(9, '[cn] Priscilla Elsa', '[cn] Sekretaris', '[cn] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', 'img/contents/profile.png', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `alamat`, `telepon`, `email`) VALUES
(1, '<p>edited Ruko Golden 8 Blok I No.8, Pakulonan Barat, Tangerang, Banten 15810</p>', '(021) 29238895', 'webe_piles@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(30) NOT NULL,
  `deskripsi_layanan` text NOT NULL,
  `gambar_layanan` varchar(200) NOT NULL,
  `bahasa_layanan` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `deskripsi_layanan`, `gambar_layanan`, `bahasa_layanan`) VALUES
(1, 'edited Driven Pile [en]', '<p>edited [en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/driven-pile - Copy.jpg', 'en'),
(2, 'Spun Pile [en]', '<p>[en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/spun-pile.jpg', 'en'),
(3, 'Square Pile [en]', '[en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/square-pile.jpg', 'en'),
(4, 'Pipe Pile [en]', '[en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/pipe-pile.jpg', 'en'),
(5, 'Bored Pile [en]', '[en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/bored-pile.jpg', 'en'),
(6, 'Barrette Pile [en]', '[en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/barrette-pile.jpg', 'en'),
(7, 'Driven Pile [id]', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/driven-pile.jpg', 'id'),
(8, 'Spun Pile [id]', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/spun-pile.jpg', 'id'),
(9, 'Square Pile [id]', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/square-pile.jpg', 'id'),
(10, 'Pipe Pile [id]', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/pipe-pile.jpg', 'id'),
(11, 'Bored Pile [id]', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/bored-pile.jpg', 'id'),
(12, 'Barrette Pile [id]', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/barrette-pile.jpg', 'id'),
(13, 'Driven Pile [cn]', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/driven-pile.jpg', 'cn'),
(14, 'Spun Pile [cn]', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/spun-pile.jpg', 'cn'),
(15, 'Square Pile [cn]', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/square-pile.jpg', 'cn'),
(16, 'Pipe Pile [cn]', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/pipe-pile.jpg', 'cn'),
(17, 'Bored Pile [cn]', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/bored-pile.jpg', 'cn'),
(18, 'Barrette Pile [cn]', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'img/services/barrette-pile.jpg', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(30) DEFAULT '0',
  `bahasa_pekerjaan` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `bahasa_pekerjaan`) VALUES
(1, 'Pekerjaan 1 [en]', 'en'),
(2, 'Pekerjaan 2 [en]', 'en'),
(3, 'Pekerjaan 3 [en]', 'en'),
(4, 'edited Pekerjaan 1 [id]', 'id'),
(5, 'Pekerjaan 2 [id]', 'id'),
(6, 'Pekerjaan 3 [id]', 'id'),
(7, 'Pekerjaan 1 [cn]', 'cn'),
(8, 'Pekerjaan 2 [cn]', 'cn'),
(9, 'Pekerjaan 3 [cn]', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `gambar_proyek` varchar(200) NOT NULL,
  `nama_proyek` varchar(100) DEFAULT NULL,
  `lokasi_proyek` varchar(50) DEFAULT NULL,
  `bahasa_proyek` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `gambar_proyek`, `nama_proyek`, `lokasi_proyek`, `bahasa_proyek`) VALUES
(1, 'img/projects/projects-1.jpeg', 'Project 1', 'Jakarta', 'en'),
(2, 'img/projects/projects-2 - Copy.jpeg', 'edited Project 2', 'edited Jakarta', 'en'),
(3, 'img/projects/projects-3.jpeg', 'Project 3', 'Jakarta', 'en'),
(4, 'img/projects/projects-4.jpeg', 'Project 4', 'Jakarta', 'en'),
(5, 'img/projects/projects-5.jpeg', 'Project 5', 'Jakarta', 'en'),
(6, 'img/projects/projects-6.jpeg', 'Project 6', 'Jakarta', 'en'),
(7, 'img/projects/projects-7.jpeg', 'Project 7', 'Jakarta', 'en'),
(8, 'img/projects/projects-8.jpeg', 'Project 8', 'Jakarta', 'en'),
(9, 'img/projects/projects-9.jpg', 'Project 9', 'Jakarta', 'en'),
(10, 'img/projects/projects-1.jpeg', 'Proyek 1', 'Jakarta', 'id'),
(11, 'img/projects/projects-2.jpeg', 'Proyek 2', 'Jakarta', 'id'),
(12, 'img/projects/projects-3.jpeg', 'Proyek 3', 'Jakarta', 'id'),
(13, 'img/projects/projects-4.jpeg', 'Proyek 4', 'Jakarta', 'id'),
(14, 'img/projects/projects-5.jpeg', 'Proyek 5', 'Jakarta', 'id'),
(15, 'img/projects/projects-6.jpeg', 'Proyek 6', 'Jakarta', 'id'),
(16, 'img/projects/projects-7.jpeg', 'Proyek 7', 'Jakarta', 'id'),
(17, 'img/projects/projects-8.jpeg', 'Proyek 8', 'Jakarta', 'id'),
(18, 'img/projects/projects-9.jpg', 'Proyek 9', 'Jakarta', 'id'),
(19, 'img/projects/projects-1.jpeg', '[cn] Proyek 1', '[cn] Jakarta', 'cn'),
(20, 'img/projects/projects-2.jpeg', '[cn] Proyek 2', '[cn] Jakarta', 'cn'),
(21, 'img/projects/projects-3.jpeg', '[cn] Proyek 3', '[cn] Jakarta', 'cn'),
(22, 'img/projects/projects-4.jpeg', '[cn] Proyek 4', '[cn] Jakarta', 'cn'),
(23, 'img/projects/projects-5.jpeg', '[cn] Proyek 5', '[cn] Jakarta', 'cn'),
(24, 'img/projects/projects-6.jpeg', '[cn] Proyek 6', '[cn] Jakarta', 'cn'),
(25, 'img/projects/projects-7.jpeg', '[cn] Proyek 7', '[cn] Jakarta', 'cn'),
(26, 'img/projects/projects-8.jpeg', '[cn] Proyek 8', '[cn] Jakarta', 'cn'),
(27, 'img/projects/projects-9.jpg', '[cn] Proyek 9', '[cn] Jakarta', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id_tentang_kami` int(11) NOT NULL,
  `judul_tentang_kami` varchar(50) NOT NULL,
  `isi_tentang_kami` text NOT NULL,
  `gambar_tentang_kami` varchar(200) NOT NULL,
  `bahasa_tentang_kami` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`id_tentang_kami`, `judul_tentang_kami`, `isi_tentang_kami`, `gambar_tentang_kami`, `bahasa_tentang_kami`) VALUES
(1, 'Vision and Mission', '[en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/contents/contents-1.jpg', 'en'),
(2, 'edited What We Do', '<p>edited [en] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'img/contents/main-carousel-1.jpg', 'en'),
(3, 'Visi dan Misi', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/contents/contents-1.jpg', 'id'),
(4, 'Yang Kami Kerjakan', '[id] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/contents/contents-2.jpg', 'id'),
(5, '[cn] Visi dan Misi', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/contents/contents-1.jpg', 'cn'),
(6, '[cn] Yang Kami Kerjakan', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/contents/contents-2.jpg', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `isi_testimonial` text,
  `sumber_testimonial` varchar(50) DEFAULT '0',
  `bahasa_testimonial` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `isi_testimonial`, `sumber_testimonial`, `bahasa_testimonial`) VALUES
(1, '<p>edited [en] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam.</p>', 'edited John Doe', 'en'),
(2, '[id] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam.', 'John Doe', 'id'),
(3, '[cn] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam.', 'John Doe', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'Priscil', 'bonifasius');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id_fitur`);

--
-- Indexes for table `jajaran_direksi`
--
ALTER TABLE `jajaran_direksi`
  ADD PRIMARY KEY (`id_jajaran_direksi`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id_tentang_kami`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jajaran_direksi`
--
ALTER TABLE `jajaran_direksi`
  MODIFY `id_jajaran_direksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id_tentang_kami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
