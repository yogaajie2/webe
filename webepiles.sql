-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 06:34 PM
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
(2, 'Client F'),
(3, 'Client E'),
(4, 'Client D'),
(5, 'Client C'),
(6, 'Client B'),
(8, 'Client A');

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `id_fitur` int(11) NOT NULL,
  `nama_fitur` varchar(50) NOT NULL,
  `deskripsi_fitur` text NOT NULL,
  `gambar_fitur` varchar(200) NOT NULL,
  `bahasa_fitur` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id_fitur`, `nama_fitur`, `deskripsi_fitur`, `gambar_fitur`, `bahasa_fitur`) VALUES
(1, 'Commitment to Our Customers', '<p>Trust and customer satisfaction are our virtues. Therefore we are always committed to protecting them both in every project.&nbsp;</p>', 'img/features/pexels-photo-95687.jpeg', 'en'),
(2, 'Competitive Prices', '<p>We always try to offer the best price to our customers without reducing the quality of our work and services we provide by optimizing every available resource.</p>', 'img/features/feature-2.jpeg', 'en'),
(3, 'Satisfactory Performance', '<p>In every job we are expected to get the best results, Therefore we always prioritize good performance results, both in teamwork and practices to achieve full customer satisfaction and trust.</p>', 'img/features/feature-3.jpeg', 'en'),
(4, 'Komitmen Kepada Pelanggan', '<p>Kepercayaan dan kepuasan pelanggan adalah keutamaan kami. Karena itu kami selalu berkomitmen menjaga kedua hal tersebut dalam setiap pekerjaan kami.</p>', 'img/features/pexels-photo-95687.jpeg', 'id'),
(5, 'Harga Bersaing', '<p>Kami selalu mencoba menawarkan harga yang terbaik kepada para pelanggan kami tanpa mengurangi kualitas pekerjaan dan layanan yang kami berikan dengan memaksimalkan setiap sumber daya yang tersedia.&nbsp;</p>', 'img/features/feature-2.jpeg', 'id'),
(6, 'Kinerja yang Memuaskan', '<p>Dalam melakukan pekerjaan tentu hasil yang diharapkan adalah yang terbaik, untuk itu kami selalu mengutamakan hasil kinerja yang baik, baik dalam kerja sama tim maupun dalam cara bekerja demi mencapai kepuasan &nbsp;dan kepercayaan penuh dari pelanggan kami.</p>', 'img/features/feature-3.jpeg', 'id'),
(7, 'Fitur 1 cn', '<p>[cn] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.</p>', 'img/features/pexels-photo-95687.jpeg', 'cn'),
(8, 'Fitur 2 cn', '[cn] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.', 'img/features/feature-2.jpeg', 'cn'),
(9, 'Fitur 3 cn', '<p>[cn] Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam. Ne eum stet melius, recteque persecuti cum ex.</p>', 'img/features/feature-3.jpeg', 'cn');

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
(1, 'Agus Hasan', 'Director', '<p>[en] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'en'),
(2, 'edited Hana Yuliana', 'edited Vice Director', '<p>edited [en] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'en'),
(3, 'Priscilla Elsa', 'Secretary', '<p>[en] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'en'),
(4, 'Agus Hasan', 'Direktur', '<p>[id] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'id'),
(5, 'Hana Yuliana', 'Wakil Direktur', '<p>[id] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'id'),
(6, 'Priscilla Elsa', 'Sekretaris', '<p>[id] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'id'),
(7, '[cn] Agus Hasan', '[cn] Direktur', '<p>[cn] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'cn'),
(8, '[cn] Hana Yuliana', '[cn] Wakil Direktur', '<p>[cn] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'cn'),
(9, '[cn] Priscilla Elsa', '[cn] Sekretaris', '<p>[cn] Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'img/contents/profile - Copy.png', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `alamat`, `telepon`, `email`) VALUES
(1, '<p>Jl. Ki Hajar Dewantara, Ruko Golden 8 Blok I No.8, Pakulonan Barat, Tangerang, Banten 15810</p>', '021-29238895/96, 021-29238781, +628111555215', 'webe_piles@yahoo.com');

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
(1, 'Dry Boring', '                <p>The spiral bore pile used to drill the soil is rotated until the drill bit is filled with soil then pulled and removed. The process repeated again until the desired depth is reached. If the soil is too dry sometimes a little water is required to soften the soil. This process can only be done until it reaches ground water level.</p>              ', 'img/services/IMG_20140305_150422.jpg', 'en'),
(2, 'Drop Hammer', '<p>Drop hammer is a fall hammer consisting of ballast blocks dropped from above.</p><p>The way a drop hammer works is a hammer pulled up with a cable and a hoop until it reaches a certain fall height, then the hammer falls freely over the head of the pile. To avoid damage on the pile a cap (shock absorber) is often used on top of the pole. This cap is usually made out of wood.</p>', 'img/services/IMG-20151023-WA0037.jpg', 'en'),
(3, 'Jack in Pile', '<p>Jack in pile is a pile foundation system whose implementation is it is pressed into the ground by using a counterweight-loaded hydraulic jack so as not to cause vibration and direct push force of the jack and can be read through the manometer so that the compression force of the pole can be known every time it reaches a certain depth. The mobilization of this tool is quite easy and in this method it is not possible to crack the head of the pole as in the piling system and also necking like in the bore-pile system.</p>', 'img/services/IMG-20140926-WA0004.jpg', 'en'),
(4, 'Diaphragm Wall', '<p>Diaphragm Wall is a retaining wall and also used for basement floor wall in building structure that has underground floors. The process is done before doing excavation by drilling, iron installation and then ending with casting. After the Diaphragm Wall structure reaches sufficient age and strength then it can be continued with the excavation. This method is an alternative replacement for methods used to hold the ground such as piles, plaster, and others.</p>', 'img/services/cor2.jpg', 'en'),
(5, 'Bored Pile', '<p>Bored pile is a pile foundation whose installation is done by drilling the ground at the beginning of the process. Bored pile then mounted into the ground by drilling the ground first, then filled with reinforcement and casted concrete. These poles are commonly used on stable and rigid soil, making it possible to form a stable hole with a drill tool. If the soil contains water, an iron pipe is required to hold the hole wall and the pipe is pulled up at the time of concrete casting. On hard ground or soft rocks, the base of the pole can be raised to increase the bearing resistance of the pole end.</p>', 'img/services/bored-pile.jpg', 'en'),
(6, 'Ground Anchor', '<p>A ground anchor is a load transfer system designed to transfer the forces applied to it to a competent stratum. An anchor is said to be temporary if it has a lifespan of under two years and permanent if the lifespan is over two years.</p>', 'img/services/IMG-20141011-WA0009.jpg', 'en'),
(7, 'Dry Boring', '<p>Mata bore pile spiral yang digunakan untuk mengebor tanah diputar sampai mata bor penuh terisi tanah kemudian diangkat lagi dan dibuang, lalu diulang kembali sampai kedalaman yang diinginkan tercapai. Jika tanah terlalu kering terkadang diperlukan sedikit air untuk melunakkan tanah tersebut. Hanya bisa dilakukan sampai mencapai level air tanah.</p>', 'img/services/IMG_20140305_150422.jpg', 'id'),
(8, 'Drop Hammer', '<p><i>Drop hammer</i> merupakan pemukul jatuh yang terdiri dari balok pemberat yang dijatuhkan dari atas.</p><p>Cara kerja <i>drop hammer</i> adalah penumbuk <i>(hammer)</i> ditarik ke atas dengan kabel dan kerekan sampai mencapai tinggi jatuh tertentu, kemudian penumbuk <i>(hammer)</i> tersebut jatuh bebas menimpa kepala tiang pancang . Untuk menghindari kerusakan pada tiang pancang maka pada kepala tiang dipasang topi/<i>cap</i> <i>(shock absorber)</i>, cap ini biasanya terbuat dari kayu.</p>', 'img/services/IMG-20151023-WA0037.jpg', 'id'),
(9, 'Jack in Pile', '<p><i>Jack in pile</i> adalah suatu sistem pemancangan pondasi tiang yang pelaksanaannya ditekan masuk ke dalam tanah dengan menggunakan dongkrak hidraulis yang diberi beban <i>counterweight</i> sehingga tidak menimbulkan getaran dan gaya tekan dongkrak lansung dan dapat dibaca melalui manometer sehingga gaya tekan tiang dapat diketahui tiap mencapai kedalaman tertentu.</p><p>Mobilisasi alat ini cukup mudah dan pada <i>jack in pile</i> tidak mungkin terjadi keretakan pada kepala tiang seperti pada sistem pemancangan dan juga tidak mudah terjadi <i>necking</i> seperi pada sistem <i>bore-pile.</i></p>', 'img/services/IMG-20140926-WA0004.jpg', 'id'),
(10, 'Diaphragm Wall', '<p><i>Diaphragm Wall</i> adalah dinding penahan tanah <i>(retaining wall)</i> sekaligus digunakan untuk dinding lantai <i>basement</i> pada struktur bangunan yang memiliki lantai bawah tanah, Pengerjaannya dilakukan sebelum melakukan pekerjaan galian tanah dengan cara melakukan pengeboran, pemasangan besi kemudian diakhiri dengan pengecoran. setelah struktur <i>Diaphragm Wall</i> mencukupi umur serta kekuatannya maka bisa dilanjutkan dengan pekerjaan galian tanah. Metode ini merupakan alternatif pengganti pekerjaan dinding yang digunakan untuk menahan tanah seperti tiang pancang, turap, trucuk bambu, dan lainnya.</p>', 'img/services/cor2.jpg', 'id'),
(11, 'Bored Pile', '<p>Pondasi tiang bor <i>(bored pile)</i> adalah pondasi tiang yang pemasangannya dilakukan dengan mengebor tanah pada awal pengerjaannya. <i>Bored pile</i> dipasang ke dalam tanah dengan cara mengebor tanah terlebih dahulu, baru kemudian diisi tulangan dan dicor beton. Tiang ini biasanya dipakai pada tanah yang stabil dan kaku, sehingga memungkinkan untuk membentuk lubang yang stabil dengan alat bor. Jika tanah mengandung air, pipa besi dibutuhkan untuk menahan dinding lubang dan pipa ini ditarik ke atas pada waktu pengecoran beton. Pada tanah yang keras atau batuan lunak, dasar tiang dapat dibesarkan untuk menambah tahanan dukung ujung tiang.</p>', 'img/services/bored-pile.jpg', 'id'),
(12, 'Ground Anchor', '<p><i>Ground Anchor</i> adalah sistem transfer beban yang dirancang untuk mentransfer gaya yang diterapkan ke lapisan yang kompeten. Sebuah <i>anchor</i> dikatakan bersifat sementara jika memiliki jangka waktu di bawah dua tahun dan permanen jika berusia lebih dari dua tahun.</p>', 'img/services/IMG-20141011-WA0009.jpg', 'id'),
(13, 'Dry Boring', '<p>[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/IMG_20140305_150501.jpg', 'cn'),
(14, 'Drop Hammer', '<p>[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/IMG-20151023-WA0037.jpg', 'cn'),
(15, 'Jack in Pile', '<p>[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/IMG-20140926-WA0004.jpg', 'cn'),
(16, 'Diaphragm Wall', '<p>[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/cor2.jpg', 'cn'),
(17, 'Bored Pile', '<p>[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/bored-pile.jpg', 'cn'),
(18, 'Ground Anchor', '<p>[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 'img/services/IMG-20141011-WA0009.jpg', 'cn'),
(19, 'Vertical Drain', '<p><i>Vertical Drain</i>, juga dikenal sebagai <i>Wick Drain</i>, adalah salah satu teknik yang paling umum digunakan untuk membuat lapisan tanah lunak yang dapat dimampatkan dengan daya dukung rendah. <i>Vertical Drain </i>dapat mengurangi waktu penyelesaian secara substansial. <i>Vertical Drain</i> menghasilkan pengurangan proses konsolidasi dari puluhan tahun menjadi setengah tahun atau bahkan kurang. Metode ini juga akan meningkatkan stabilitas yang memungkinkan untuk menempatkan tanggul lebih cepat.</p>', 'img/services/IMG-20151011-WA0000.jpg', 'id'),
(20, 'Precast Panel', '<p><i>Precast Panel</i> adalah produk konstruksi yang dihasilkan dari proses pengecoran beton dalam cetakan yang dapat digunakan kembali atau yang kemudian diawetkan, diangkut ke lokasi konstruksi dan diangkat ke tempatnya.</p><p>Menggunakan Precast Panel menawarkan banyak keuntungan potensial dibandingkan dengan <i>onsite casting</i>. Produksi <i>precast panel </i>dapat dilakukan di permukaan tanah, yang membantu keamanan di seluruh proyek. Ada proses kontrol yang lebih besar atas kualitas material dan pengerjaan di pabrik <i>precast</i> dibandingkan dengan lokasi konstruksi.</p>', 'img/services/IMG-20140926-WA0007.jpg', 'id'),
(21, 'Vertical Drain', '<p>Vertical Drain, also known as Wick Drain, is one of the most common techniques used to create a compacted soft soil layer with low carrying capacity. Vertical Drain can reduce substantial completion time. Vertical Drain resulted in a reduction of the consolidation process from decades to half a year or even less. This method will also increase the stability that allows to place the embankments more quickly.</p>', 'img/services/IMG-20151011-WA0000.jpg', 'en'),
(22, 'Precast Panel', '<p>Precast concrete is a construction product produced by casting concrete in a reusable mold or \"form\" which is then cured in a controlled environment, transported to the construction site and lifted into place (\"tilt up\").</p><p>Using a precast concrete system offers many potential advantages over onsite casting. Precast concrete production can performed on ground level, which helps with safety throughout a project. There is greater control over material quality and workmanship in a precast plant compared to a construction site.</p>', 'img/services/IMG-20140926-WA0007.jpg', 'en'),
(23, 'Vertical Drain', '<p><i>Vertical Drain</i>, juga dikenal sebagai <i>Wick Drain</i>, adalah salah satu teknik yang paling umum digunakan untuk membuat lapisan tanah lunak yang dapat dimampatkan dengan daya dukung rendah. <i>Vertical Drain </i>dapat mengurangi waktu penyelesaian secara substansial. <i>Vertical Drain</i>menghasilkan pengurangan proses konsolidasi dari puluhan tahun menjadi setengah tahun atau bahkan kurang. Metode ini juga akan meningkatkan stabilitas yang memungkinkan untuk menempatkan tanggul lebih cepat</p>', 'img/services/IMG-20151011-WA0000.jpg', 'cn'),
(24, 'Precast Panel', '<p><i>Precast Panel</i> adalah produk konstruksi yang dihasilkan dari proses pengecoran beton dalam cetakan yang dapat digunakan kembali atau yang kemudian diawetkan, diangkut ke lokasi konstruksi dan diangkat ke tempatnya.</p><p>Menggunakan Precast Panel menawarkan banyak keuntungan potensial dibandingkan dengan <i>onsite casting</i>. Produksi <i>precast panel </i>dapat dilakukan di permukaan tanah, yang membantu keamanan di seluruh proyek. Ada proses kontrol yang lebih besar atas kualitas material dan pengerjaan di pabrik <i>precast</i>dibandingkan dengan lokasi konstruksi.</p>', 'img/services/IMG-20140926-WA0007.jpg', 'cn');

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
(1, 'Commercial Buildings', 'en'),
(2, 'Residentials', 'en'),
(3, 'Other Buildings', 'en'),
(4, 'Bangunan Komersial', 'id'),
(5, 'Perumahan', 'id'),
(6, 'Bangunan Lainnya', 'id'),
(7, 'Pekerjaan 1 [cn]', 'cn'),
(8, 'Pekerjaan 2 [cn]', 'cn'),
(9, 'Pekerjaan 3 [cn]', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `perusahaan_pengirim` varchar(50) NOT NULL,
  `telepon_pengirim` varchar(30) NOT NULL,
  `subjek_pesan` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `bahasa_pesan` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `perusahaan_pengirim`, `telepon_pengirim`, `subjek_pesan`, `pesan`, `bahasa_pesan`) VALUES
(1, 'GOY', 'yogaajie2@gmail.com', 'PT. MANJIW', '+6226516646', 'WOI', 'yooooooooooooooooooooooo      ', 'en'),
(2, 'goy lagee', 'yogaajie2@gmail.com', 'PT. MANJIW', '+6226516646', 'WOI 2', 'ayyyyyy', 'en'),
(3, 'goy', 'yogaajie2@gmail.com', 'PT. MANJIW', '+6226516646', 'WOI id', 'bruhh', 'id'),
(4, 'goi', 'yogaajie2@gmail.com', 'PT. MANJIW', '+6226516646', 'WOI cn', 'heheh', 'cn');

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
(1, 'img/projects/projects-1.jpeg', '15120 Building', 'New York', 'en'),
(2, 'img/projects/projects-2 - Copy.jpeg', 'edited Project 2', 'edited Jakarta', 'en'),
(3, 'img/projects/projects-3.jpeg', 'Project 3', 'Jakarta', 'en'),
(4, 'img/projects/projects-4.jpeg', 'Project 4', 'Jakarta', 'en'),
(5, 'img/projects/projects-5.jpeg', 'Project 5', 'Jakarta', 'en'),
(6, 'img/projects/IMG-20140926-WA0002.jpg', 'MRT Jakarta', 'Jakarta', 'en'),
(7, 'img/projects/IMG-20151013-WA0009.jpg', 'Meruya Utama', 'Jakarta', 'en'),
(8, 'img/projects/IMG-20151023-WA0037.jpg', 'Grand Dadap City', 'Tangerang', 'en'),
(9, 'img/projects/IMG_20140305_150501.jpg', 'Grand Pakubuwono Apartment', 'Jakarta', 'en'),
(10, 'img/projects/projects-1.jpeg', 'Proyek 1', 'Jakarta', 'id'),
(11, 'img/projects/projects-2 - Copy.jpeg', 'Proyek 2', 'Jakarta', 'id'),
(12, 'img/projects/projects-3.jpeg', 'Proyek 3', 'Jakarta', 'id'),
(13, 'img/projects/projects-4.jpeg', 'Proyek 4', 'Jakarta', 'id'),
(14, 'img/projects/projects-5.jpeg', 'Proyek 5', 'Jakarta', 'id'),
(15, 'img/projects/IMG-20140926-WA0002.jpg', 'MRT Jakarta', 'Jakarta', 'id'),
(16, 'img/projects/IMG-20151013-WA0009.jpg', 'Meruya Utama', 'Jakarta', 'id'),
(17, 'img/projects/IMG-20151023-WA0037.jpg', 'Grand Dadap City', 'Tangerang', 'id'),
(18, 'img/projects/IMG_20140305_150501.jpg', 'Apartemen Grand Pakubuwono', 'Jakarta', 'id'),
(19, 'img/projects/projects-1.jpeg', '[cn] Proyek 1', '[cn] Jakarta', 'cn'),
(20, 'img/projects/projects-2 - Copy.jpeg', '[cn] Proyek 2', '[cn] Jakarta', 'cn'),
(21, 'img/projects/projects-3.jpeg', '[cn] Proyek 3', '[cn] Jakarta', 'cn'),
(22, 'img/projects/projects-4.jpeg', '[cn] Proyek 4', '[cn] Jakarta', 'cn'),
(23, 'img/projects/projects-5.jpeg', '[cn] Proyek 5', '[cn] Jakarta', 'cn'),
(24, 'img/projects/IMG-20140926-WA0002.jpg', 'MRT Jakarta', 'Jakarta', 'cn'),
(25, 'img/projects/IMG-20151013-WA0009.jpg', 'Meruya Utama', 'Jakarta', 'cn'),
(26, 'img/projects/IMG-20151023-WA0037.jpg', 'Grand Dadap City', 'Jakarta', 'cn'),
(27, 'img/projects/IMG_20140305_150501.jpg', 'Apartemen Grand Pakubuwono', 'Jakarta', 'cn');

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
(1, 'Vision and Mission', '<h4><strong>VISION:</strong></h4><p>Building a solid foundation throughout Indonesia`s development.</p><p>&nbsp;</p><h4><strong>MISSION:</strong></h4><p>- Empower qualified and competent human resources to make our foundation number 1 in Indonesia.</p><p>- Building client satisfaction by working fast, precise, and providing the best.</p>', 'img/contents/contents-1.jpg', 'en'),
(2, 'What We Do', '<p>PT. WEBE PILES begins with bore pile foundation work using the wash boring system, but continues to grow in line with technological developments. The construction of the foundation of buildings and bridges is not only limited to the wash boring system only. In order to achieve the level of effectiveness and good efficiency, the existing systems continue to grow rapidly. PT. WEBE PILES with competent experience expands on different foundation work systems such as dry boring and diaphragm wall.</p>', 'img/contents/main-carousel-1.jpg', 'en'),
(3, 'Visi dan Misi', '<h4><strong>VISI:</strong></h4><p>Membangun Pondasi kokoh di seluruh pembangunan Indonesia.</p><p>&nbsp;</p><h4><strong>MISI:</strong></h4><p>-Memberdayakan SDM yang berkualitas dan berkompeten untuk menjadikan pondasi kami nomor 1 di Indonesia.</p><p>-Menciptakan kepuasan klien dengan kerja cepat, tepat dan memberikan yang terbaik.</p>', 'img/contents/contents-1.jpg', 'id'),
(4, 'Yang Kami Kerjakan', '<p>Kegiatan usaha PT. WEBE PILES diawali dengan pekerjaan pondasi <i>bore pile </i>sistem<i> wash boring</i>, namun terus berkembang sejalan dengan perkembangan teknologi. Pembuatan pondasi bangunan dan jembatan tidak hanya sebatas dengan sistem <i>wash boring</i> saja. Demi mencapai tingkat keefektifan dan keefisienan yang baik maka sistem-sistem yang ada terus berkembang dengan pesat. PT. WEBE PILES dengan pengalaman yang kompeten memperluas sistem kerja pondasi yang berbeda seperti <i>dry boring</i> maupun <i>diaphragm wall</i>.</p>', 'img/contents/main-carousel-1.jpg', 'id'),
(5, '[cn] Visi dan Misi', '[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/contents/contents-1.jpg', 'cn'),
(6, '[cn] Yang Kami Kerjakan', '<p>[cn] Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'img/contents/main-carousel-1.jpg', 'cn');

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
(1, '<p>Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam.</p>', 'John Doe', 'en'),
(2, '<p>Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam.</p>', 'John Doe', 'id'),
(3, '<p>Lorem ipsum dolor sit amet, scripta copiosae ut eam, ad errem neglegentur nec. At eam noluisse corrumpit, postea animal intellegam et nam.</p>', 'John Doe', 'cn'),
(4, '<p>His cu torquatos adolescens, vim possim ornatus reprimique no. Splendide constituto pri et, mei minim cotidieque in. In pri porro quando, ei interesset reprehendunt concludaturque est. Alia evertitur in his, ne sea scaevola assentior, erant iudicabit comprehensam per an.</p>', 'Jane Doe', 'en'),
(5, '<p>His cu torquatos adolescens, vim possim ornatus reprimique no. Splendide constituto pri et, mei minim cotidieque in. In pri porro quando, ei interesset reprehendunt concludaturque est. Alia evertitur in his, ne sea scaevola assentior, erant iudicabit comprehensam per an.</p>', 'Jane Doe', 'id'),
(6, '<p>His cu torquatos adolescens, vim possim ornatus reprimique no. Splendide constituto pri et, mei minim cotidieque in. In pri porro quando, ei interesset reprehendunt concludaturque est. Alia evertitur in his, ne sea scaevola assentior, erant iudicabit comprehensam per an.</p>', 'Jane Doe', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `created_at`) VALUES
(2, 'priscil', '$2y$10$QOkiDrahZH/0.XKl0Zb2ruYVtSNftMjhBE6wn1VcruKW1uwcQ3v8a', '2018-06-05 13:11:12'),
(3, 'yoga', '$2y$10$pfkoooOle3IoPAry94ocxuao.W9OrYi8u9Ifl6wRwydYdUWPbzPAi', '2018-06-06 21:03:59');

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
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id_tentang_kami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
