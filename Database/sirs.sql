-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 05:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `absensi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_jadwal`, `id_dokter`, `kehadiran`, `tgl`, `absensi`) VALUES
(5, 9, 1, 'Kehadiran 1', '2021-02-15', 'Hadir'),
(6, 9, 1, 'Kehadiran 2', '2021-02-22', 'Hadir'),
(7, 7, 2, 'Kehadiran 1', '2021-02-15', 'Hadir'),
(8, 10, 2, 'Kehadiran 1', '2021-02-19', 'Hadir'),
(9, 13, 1, 'Kehadiran 1', '2021-02-15', 'Hadir'),
(10, 14, 5, 'Kehadiran 1', '2021-02-15', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_dokter` int(11) NOT NULL,
  `ni_dokter` varchar(30) NOT NULL,
  `nm_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_dokter`, `ni_dokter`, `nm_dokter`, `spesialis`, `gender`, `alamat`, `nohp`) VALUES
(1, '35678921', 'Rasya Hidayah', 'Gigi', 'Laki-Laki', 'Cirebon, Jawa Barat', '081923456765'),
(2, '35678911', 'Aqeela Calista', '-', 'Perempuan', 'Bandung, Jawa Barat', '082665347819'),
(5, '35678922', 'Ratu Sofya', '-', 'Perempuan', 'Bandung, Jawa Barat', '081888765432');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `hari` varchar(13) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_dokter`, `id_pendaftaran`, `id_ruangan`, `hari`, `jam`) VALUES
(7, 2, 4, 4, 'Senin', '10:00'),
(10, 2, 8, 5, 'Jum\'at', '09:00'),
(13, 1, 11, 3, 'Selasa', '10:00'),
(14, 5, 12, 7, 'Sabtu', '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `id_pendaftaran`) VALUES
(3, 4),
(4, 5),
(6, 8),
(7, 9),
(8, 10),
(9, 11),
(10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran1`
--

CREATE TABLE `tbl_pembayaran1` (
  `id_pembayaran1` int(11) NOT NULL,
  `kd_pembayaran` varchar(20) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `hrg_ruang` varchar(50) NOT NULL,
  `tgl_masuk` varchar(50) NOT NULL,
  `tgl_keluar` varchar(50) NOT NULL,
  `hrg_rawat` varchar(50) NOT NULL,
  `hrg_periksa` varchar(50) NOT NULL,
  `hrg_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran1`
--

INSERT INTO `tbl_pembayaran1` (`id_pembayaran1`, `kd_pembayaran`, `id_pendaftaran`, `hrg_ruang`, `tgl_masuk`, `tgl_keluar`, `hrg_rawat`, `hrg_periksa`, `hrg_obat`) VALUES
(4, 'KP001', 4, '1000000', '2021-02-14', '2021-02-15', '500000', '500000', '100000'),
(5, 'KP002', 8, '500000', '2021-02-01', '2021-02-05', '500000', '100000', '50000'),
(8, '', 8, '', '', '', '', '', ''),
(10, 'KP003', 8, '1500000', '2021-02-16', '2021-02-20', '2000000', '200000', '100000'),
(11, '', 11, '', '', '', '', '', ''),
(12, 'KP004', 11, '-', '2021-02-21', '2021-02-21', '-', '-', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `kd_pendaftaran` varchar(50) NOT NULL,
  `penyakit` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `usia` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `perawatan` varchar(20) NOT NULL,
  `nm_pasien` varchar(20) NOT NULL,
  `ruangan_tujuan` varchar(20) NOT NULL,
  `jenis_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftaran`, `kd_pendaftaran`, `penyakit`, `gender`, `usia`, `alamat`, `nohp`, `perawatan`, `nm_pasien`, `ruangan_tujuan`, `jenis_bayar`) VALUES
(4, '0001', 'Asam Lambung', 'Laki-Laki', 30, 'Bandung, Jawa Barat', '081789123456', 'Rawat Inap', 'Jefan', 'VIP01', 'Bayar Sendiri'),
(8, '0002', 'Types', 'Perempuan', 15, 'Cirebon, Jawa Barat', '081789123455', 'Rawat Inap', 'Andin', 'Ruang Melati', 'Bayar Sendiri'),
(11, '0003', 'Sakit Gigi', 'Perempuan', 17, 'Cirebon, Jawa Barat', '089665788901', 'Rawat Jalan', 'Anggi', 'Ruang Gigi', 'Bayar Sendiri'),
(12, '0004', 'Demam Berdarah', 'Laki-Laki', 25, 'Cirebon, Jawa Barat', '0896667892345', 'Rawat Inap', 'Ade', 'Ruangan Tulip', 'BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `kd_ruangan` varchar(15) NOT NULL,
  `nm_ruangan` varchar(20) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `kd_ruangan`, `nm_ruangan`, `tipe_kamar`) VALUES
(3, 'R00G', 'Ruang Gigi', '-'),
(4, 'V001', 'VIP01', 'VIP'),
(5, 'RMEL', 'Ruang Melati', 'Reguler'),
(7, 'RTLP', 'Ruangan Tulip', 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan_pasien`
--

CREATE TABLE `tbl_ruangan_pasien` (
  `id_ruangan_pasien` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ruangan_pasien`
--

INSERT INTO `tbl_ruangan_pasien` (`id_ruangan_pasien`, `id_ruangan`, `id_pendaftaran`) VALUES
(1, 3, 2),
(2, 4, 1),
(3, 5, 3),
(4, 4, 4),
(5, 3, 5),
(6, 5, 6),
(7, 5, 7),
(8, 5, 8),
(10, 3, 11),
(11, 7, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nm_user`, `status`) VALUES
(1, 'admin', 'firli', 'Firli Safitri', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_pembayaran1`
--
ALTER TABLE `tbl_pembayaran1`
  ADD PRIMARY KEY (`id_pembayaran1`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tbl_ruangan_pasien`
--
ALTER TABLE `tbl_ruangan_pasien`
  ADD PRIMARY KEY (`id_ruangan_pasien`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pembayaran1`
--
ALTER TABLE `tbl_pembayaran1`
  MODIFY `id_pembayaran1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_ruangan_pasien`
--
ALTER TABLE `tbl_ruangan_pasien`
  MODIFY `id_ruangan_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
