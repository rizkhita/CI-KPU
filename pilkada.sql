-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 10:11 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilkada`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

CREATE TABLE `countdown` (
  `id` int(2) NOT NULL,
  `count_awal` date NOT NULL,
  `count_akhir` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `foto_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'rizkhita', 'rcti', 'oke'),
(2, 'tes', 'teslagi', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `paslon`
--

CREATE TABLE `paslon` (
  `id` int(11) NOT NULL,
  `no_urut` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `pendidikan` text NOT NULL,
  `jejak_rekam` text NOT NULL,
  `jabatan` enum('Gubernur','Wakil Gubernur','','') NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahapan`
--

CREATE TABLE `tahapan` (
  `id` int(2) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahapan`
--

INSERT INTO `tahapan` (`id`, `nama_kegiatan`, `tgl_awal`, `tgl_akhir`) VALUES
(1, 'tes', '2018-04-01', '2018-04-29'),
(2, 'tus', '2018-04-08', '2018-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `tps`
--

CREATE TABLE `tps` (
  `id` int(11) NOT NULL,
  `nama_pos` varchar(100) NOT NULL,
  `nomor_pos` int(4) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(2) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `motto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD KEY `id` (`id`);

--
-- Indexes for table `countdown`
--
ALTER TABLE `countdown`
  ADD KEY `id` (`id`);

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD KEY `id` (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `id` (`id`);

--
-- Indexes for table `paslon`
--
ALTER TABLE `paslon`
  ADD PRIMARY KEY (`no_urut`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tahapan`
--
ALTER TABLE `tahapan`
  ADD KEY `id` (`id`);

--
-- Indexes for table `tps`
--
ALTER TABLE `tps`
  ADD KEY `id` (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD KEY `no_urut` (`no_urut`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countdown`
--
ALTER TABLE `countdown`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tahapan`
--
ALTER TABLE `tahapan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tps`
--
ALTER TABLE `tps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `visi`
--
ALTER TABLE `visi`
  ADD CONSTRAINT `visi_ibfk_1` FOREIGN KEY (`no_urut`) REFERENCES `paslon` (`no_urut`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
