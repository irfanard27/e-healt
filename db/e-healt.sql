-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2018 at 04:01 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-health`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `menu`, `action`, `role`) VALUES
(43, 5, 'update', 1),
(42, 5, 'create', 1),
(41, 5, 'view', 1),
(40, 5, 'index', 1),
(39, 4, 'registeruser', 1),
(38, 4, 'delete', 1),
(37, 4, 'update', 1),
(36, 4, 'create', 1),
(35, 4, 'view', 1),
(34, 4, 'index', 1),
(33, 3, 'setting', 1),
(32, 3, 'delete', 1),
(31, 3, 'update', 1),
(30, 3, 'create', 1),
(29, 3, 'view', 1),
(28, 3, 'index', 1),
(27, 2, 'delete', 1),
(26, 2, 'update', 1),
(25, 2, 'create', 1),
(24, 2, 'view', 1),
(23, 2, 'index', 1),
(44, 5, 'delete', 1),
(275, 32, 'delete', 2),
(274, 32, 'update', 2),
(273, 32, 'create', 2),
(272, 32, 'view', 2),
(271, 32, 'index', 2),
(270, 33, 'delete', 2),
(269, 33, 'update', 2),
(268, 33, 'create', 2),
(267, 33, 'view', 2),
(266, 33, 'index', 2),
(265, 34, 'delete', 2),
(264, 34, 'update', 2),
(263, 34, 'create', 2),
(262, 34, 'view', 2),
(261, 34, 'index', 2),
(260, 35, 'delete', 2),
(259, 35, 'update', 2),
(258, 35, 'create', 2),
(257, 35, 'view', 2),
(256, 35, 'index', 2),
(255, 36, 'delete', 2),
(254, 36, 'update', 2),
(253, 36, 'create', 2),
(252, 36, 'view', 2),
(251, 36, 'index', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL,
  `spesialis` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `priv` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `spesialis`, `alamat`, `telepon`, `priv`, `id_user`) VALUES
(1, 'Andi malaranggeng', 'kulit', 'Surabaya', '9080728748', 'bagus', 13);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `controller` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `icon`, `parent`, `module`, `controller`) VALUES
(1, 'Setting', 'fa fa-gear', '', '2', ''),
(2, 'Menu Backend', 'fa fa-align-justify', '1', '2', 'menu'),
(3, 'Role', 'fa fa-check-circle', '1', '2', 'role'),
(4, 'User', 'fa fa-users', '', '2', 'user'),
(5, 'Module Aplikasi', 'fa fa-asterisk', '', '2', 'module'),
(36, 'Surat Rujukan', 'fa fa-send', '', '2', 'surat-rujukan'),
(35, 'Resume Medis', 'fa fa-th-list', '', '2', 'resume-medis'),
(34, 'Rumah Sakit', 'fa fa-stethoscope', '31', '2', 'rumah-sakit'),
(33, 'dokter', 'fa fa-user-md', '31', '2', 'dokter'),
(32, 'pasien', 'fa fa-user', '31', '2', 'pasien'),
(31, 'master', 'fa fa-align-justify', '', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479231545),
('m140506_102106_rbac_init', 1479231864);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `module`) VALUES
(1, 'frontend'),
(2, 'backend');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `alamat_pasien` varchar(200) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `jenis_kelamin`, `ttl`, `status_perkawinan`, `alamat_pasien`, `telepon`, `tanggal`) VALUES
(1, 'Michele Buoti', 'laki-laki', 'Mojokerto, 18-03-1996', 'belum kawin', 'surabaya', '087437387483', '0000-00-00'),
(2, 'vika ramadani', 'perempuan', 'Mojokerto, 18-03-1996', 'kawin', 'surabaya', '087437387483', '1996-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `resume_medis`
--

CREATE TABLE `resume_medis` (
  `id` int(11) NOT NULL,
  `id_resume_medis` varchar(100) NOT NULL,
  `pasien` int(11) NOT NULL,
  `diagnosa_awal` varchar(200) NOT NULL,
  `diagnosa_akhir` varchar(200) NOT NULL,
  `operasi` int(11) NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `pemeriksaan_fisik` varchar(200) NOT NULL,
  `hasil_lab` varchar(200) NOT NULL,
  `perkembangan` varchar(200) NOT NULL,
  `keismpulan` text NOT NULL,
  `tgl_masuk` varchar(100) NOT NULL,
  `tgl_keluar` varchar(200) NOT NULL,
  `nama_dokter` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_medis`
--

INSERT INTO `resume_medis` (`id`, `id_resume_medis`, `pasien`, `diagnosa_awal`, `diagnosa_akhir`, `operasi`, `riwayat_penyakit`, `pemeriksaan_fisik`, `hasil_lab`, `perkembangan`, `keismpulan`, `tgl_masuk`, `tgl_keluar`, `nama_dokter`, `created_at`, `updated_at`) VALUES
(1, 'RMD-1514472595', 1, 'kanker', 'kanker', 1, 'dsds', 'tidak tau', 'tidak tau', 'baik', 'dsds', '20-12-2017', '27-12-2017', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'RMD-1514473029', 2, 'kanker', 'kanker', 1, 'sasa', 'sasa', 'sas', 'sasa', 'sasa', '26-12-2017', '26-12-2017', 1, '2017-12-28 14:57:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'developer'),
(2, 'administrator'),
(3, 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `role_menu`
--

CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `menu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_menu`
--

INSERT INTO `role_menu` (`id`, `role`, `menu`) VALUES
(90, 1, 5),
(89, 1, 4),
(88, 1, 3),
(87, 1, 2),
(86, 1, 1),
(154, 2, 31),
(153, 2, 32),
(152, 2, 33),
(151, 2, 34),
(150, 2, 35),
(149, 2, 36);

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `nama_faskes` varchar(200) NOT NULL,
  `tipe_faskes` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `kode`, `nama_faskes`, `tipe_faskes`, `alamat`) VALUES
(1, 'RSK-001', 'RUMAH SAKIT CITRA MEDIKA', 'tes', 'tes'),
(2, 'RSK-002', 'RUMAH SAKIT KUNCORO GENI', 'tes', 'tes'),
(3, 'RSK-003', 'RUMAH SAKIT SAMPUN WARAS', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `surat_rujukan`
--

CREATE TABLE `surat_rujukan` (
  `id` int(11) NOT NULL,
  `resume_medis` int(11) NOT NULL,
  `kode_rujukan` varchar(100) NOT NULL,
  `keadaan` varchar(100) NOT NULL,
  `rs_asal` int(11) NOT NULL,
  `rs_tujuan` int(11) NOT NULL,
  `nama_dokter` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_rujukan`
--

INSERT INTO `surat_rujukan` (`id`, `resume_medis`, `kode_rujukan`, `keadaan`, `rs_asal`, `rs_tujuan`, `nama_dokter`, `created_at`, `updated_at`) VALUES
(1, 1, 'RJK-1514902153', 'hsjahsa', 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`) VALUES
(1, 'developer', 'hX2iXXGf-6-jNoAidotAxlhUBZxhgNdS', '$2y$13$0N.Ruj8ZRE8GifJVTvAhyefdXX2qHMYhhlGih1O5Avy/z5WJGugI.', NULL, 'developer@mail.com', 10, 1477197448, 1479234102, 1),
(2, 'admin', '1RnIfzw1x4lVoRBWnVyxKex7C2Yzz53j', '$2y$13$2Sv7RcTDAiEfhqtgkZvRA.4Am./iM3Pdt7djQsxMsklGSvwpxwm0u', NULL, 'admin@siakad.com', 10, 1480135793, 1480135793, 2),
(13, 'hendra', 'mbyzvGZZjK7rOimEmO7a1DVdFLtQSwh-', '$2y$13$JZe4zlgo8U5mKU91d7906O6KUcwGuEJcMRIW.G61smlFzyMAY62Dq', NULL, 'hendra@mail.com', 10, 1514466942, 1514466942, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `menu` (`menu`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module` (`module`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_medis`
--
ALTER TABLE `resume_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien` (`pasien`),
  ADD KEY `nama_dokter` (`nama_dokter`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_menu`
--
ALTER TABLE `role_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `menu` (`menu`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_rujukan`
--
ALTER TABLE `surat_rujukan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resume_medis` (`resume_medis`),
  ADD KEY `nama_dokter` (`nama_dokter`),
  ADD KEY `rs_tujuan` (`rs_tujuan`),
  ADD KEY `rs_asal` (`rs_asal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resume_medis`
--
ALTER TABLE `resume_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_menu`
--
ALTER TABLE `role_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `surat_rujukan`
--
ALTER TABLE `surat_rujukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
