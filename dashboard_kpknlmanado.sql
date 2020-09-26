-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Sep 2020 pada 16.48
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboardkantor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `capaian`
--

CREATE TABLE `capaian` (
  `id` int(11) NOT NULL,
  `c_pnbp_aset` bigint(11) NOT NULL,
  `c_utilisasi` bigint(11) NOT NULL,
  `c_sertifikat` int(11) NOT NULL,
  `c_sbsk` int(11) NOT NULL,
  `c_portofolio_aset` int(11) NOT NULL,
  `c_rereval` int(11) NOT NULL,
  `c_tgl1` datetime NOT NULL,
  `c_deviasi` decimal(4,2) NOT NULL,
  `c_tgl2` datetime NOT NULL,
  `c_pnbp_lelang` bigint(11) NOT NULL,
  `c_pl1` bigint(11) NOT NULL,
  `c_pegadaian` bigint(11) NOT NULL,
  `c_produktivitas` decimal(4,2) NOT NULL,
  `c_lelangeauction` decimal(4,2) NOT NULL,
  `c_permohonanonline` decimal(4,2) NOT NULL,
  `c_tgl3` datetime NOT NULL,
  `c_pnbp_piutang` bigint(11) NOT NULL,
  `c_tingkatoutstanding` bigint(11) NOT NULL,
  `c_penyelesaianbkpn` int(11) NOT NULL,
  `c_tgl4` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `capaian`
--

INSERT INTO `capaian` (`id`, `c_pnbp_aset`, `c_utilisasi`, `c_sertifikat`, `c_sbsk`, `c_portofolio_aset`, `c_rereval`, `c_tgl1`, `c_deviasi`, `c_tgl2`, `c_pnbp_lelang`, `c_pl1`, `c_pegadaian`, `c_produktivitas`, `c_lelangeauction`, `c_permohonanonline`, `c_tgl3`, `c_pnbp_piutang`, `c_tingkatoutstanding`, `c_penyelesaianbkpn`, `c_tgl4`) VALUES
(1, 2956810601, 3145130125, 69, 217, 27, 4804, '2020-09-26 22:12:51', '11.01', '2020-09-14 23:12:30', 3499944124, 9063618738, 155764100100, '27.65', '98.86', '27.65', '2020-09-14 23:12:32', 14287792, 414770408, 683, '2020-09-14 23:12:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `target`
--

CREATE TABLE `target` (
  `id` int(11) NOT NULL,
  `pnbp_aset` bigint(11) NOT NULL,
  `utilisasi` bigint(11) NOT NULL,
  `sertifikat` int(11) NOT NULL,
  `sbsk` int(11) NOT NULL,
  `portofolio_aset` int(11) NOT NULL,
  `rereval` int(11) NOT NULL,
  `tgl1` datetime NOT NULL,
  `deviasi` decimal(4,2) NOT NULL,
  `tgl2` datetime NOT NULL,
  `pnbp_lelang` bigint(11) NOT NULL,
  `pl1` bigint(11) NOT NULL,
  `pegadaian` bigint(11) NOT NULL,
  `produktivitas` decimal(4,2) NOT NULL,
  `lelangeauction` decimal(4,2) NOT NULL,
  `permohonanonline` decimal(4,2) NOT NULL,
  `tgl3` datetime NOT NULL,
  `pnbp_piutang` bigint(11) NOT NULL,
  `tingkatoutstanding` bigint(11) NOT NULL,
  `penyelesaianbkpn` int(11) NOT NULL,
  `tgl4` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `target`
--

INSERT INTO `target` (`id`, `pnbp_aset`, `utilisasi`, `sertifikat`, `sbsk`, `portofolio_aset`, `rereval`, `tgl1`, `deviasi`, `tgl2`, `pnbp_lelang`, `pl1`, `pegadaian`, `produktivitas`, `lelangeauction`, `permohonanonline`, `tgl3`, `pnbp_piutang`, `tingkatoutstanding`, `penyelesaianbkpn`, `tgl4`) VALUES
(1, 13260000000, 5317099000, 100, 313, 21, 11570, '2020-09-26 15:30:19', '30.00', '2020-08-24 00:00:00', 10259000000, 114617000000, 243800000000, '34.00', '90.00', '10.00', '2020-09-14 00:00:00', 26767038, 17617642207, 773, '2020-09-14 11:22:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, '199405022016121002', 'd6049498755fc4cd343179ce1c2bf236', 'semuanya'),
(2, 'lelang', 'e10058c98d2b82111037eff6a2737268', 'lelang'),
(3, 'rofiq', 'fbf8bedcf7e3bf08d3a36b051f93ea22', 'kakan'),
(4, 'pkn', 'e10058c98d2b82111037eff6a2737268', 'pkn'),
(5, 'penilaian', 'e10058c98d2b82111037eff6a2737268', 'penilaian'),
(6, 'piutang', 'e10058c98d2b82111037eff6a2737268', 'piutang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capaian`
--
ALTER TABLE `capaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capaian`
--
ALTER TABLE `capaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
