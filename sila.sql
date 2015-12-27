-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Des 2015 pada 06.49
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sila`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'admin1', '80153c3b6fea0d00d08ebf3833c2ac7a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `No` int(11) NOT NULL,
  `idTransaksi` int(11) NOT NULL,
  `Kemeja` int(11) NOT NULL,
  `Celana` int(11) NOT NULL,
  `BajuKaos` int(11) NOT NULL,
  `Handuk` int(11) NOT NULL,
  `PakaianDalam` int(11) NOT NULL,
  `KaosKaki` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`No`, `idTransaksi`, `Kemeja`, `Celana`, `BajuKaos`, `Handuk`, `PakaianDalam`, `KaosKaki`) VALUES
(17, 18, 5, 5, 4, 5, 3, 4),
(18, 1, 10, 9, 9, 1, 10, 0),
(19, 2, 4, 4, 4, 3, 3, 4),
(20, 3, 10, 12, 9, 4, 3, 2),
(22, 5, 10, 3, 12, 2, 10, 1),
(23, 6, 12, 2, 2, 2, 3, 12),
(24, 7, 3, 4, 3, 1, 3, 1),
(25, 8, 3, 14, 12, 1, 0, 0),
(26, 9, 13, 23, 22, 1, 12, 0),
(27, 10, 3, 3, 1, 1, 1, 1),
(28, 11, 4, 1, 2, 0, 0, 0),
(29, 12, 6, 6, 5, 3, 9, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenistransaksi`
--

CREATE TABLE IF NOT EXISTS `jenistransaksi` (
  `IdJenis` int(11) NOT NULL,
  `JenisTarif` varchar(45) NOT NULL,
  `Tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenistransaksi`
--

INSERT INTO `jenistransaksi` (`IdJenis`, `JenisTarif`, `Tarif`) VALUES
(1, 'cuci kering', 3000),
(2, 'cuci kering antar', 4300),
(3, 'cuci kering setrika', 3600),
(4, 'cuci kering setrika antar', 4500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kodekunci`
--

CREATE TABLE IF NOT EXISTS `kodekunci` (
  `IdKodeKunci` varchar(10) NOT NULL,
  `IdTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kodekunci`
--

INSERT INTO `kodekunci` (`IdKodeKunci`, `IdTransaksi`) VALUES
('3lXq9', 6),
('8GbLk', 10),
('cOSdz', 11),
('cQz02', 18),
('EY4L1', 3),
('f8Wrz', 2),
('Krcfb', 7),
('Mp27y', 12),
('MTgLU', 8),
('odmKu', 9),
('tdmKu', 1),
('ydQz0', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `NoPelanggan` int(11) NOT NULL,
  `Nama` varchar(45) NOT NULL,
  `Alamat` varchar(45) NOT NULL,
  `NoTelp` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`NoPelanggan`, `Nama`, `Alamat`, `NoTelp`) VALUES
(2, 'surya', 'Bunga Sri Gading', '085737499966'),
(3, 'budi', 'karet 8', '085737499961'),
(4, 'darma', 'kumis kucing no 1', '085737499226'),
(7, 'Aninditha Rahma Cahyadi', 'Ciregon', '0827123141'),
(8, 'Melody Nurramdhani', 'Cibaduyut Bandunng', '085731241234'),
(9, 'Budi Surya Darma', 'Jalan Bunga Sri Gading ', '095737499966'),
(10, 'Naomi', 'Bekasi', '08281731234'),
(11, 'gita', 'malang', '12345'),
(12, 'Dendi Ishutin', 'Ukraina', '081278631283'),
(13, 'Elaine Hartanto', 'Jalan Bunga Sri Gading ', '085737499966'),
(14, 'Jennifer Hanna', 'Jalan Bunga Andong', '08123120938412'),
(15, 'Jessica Veranda', 'Jalan Bunga Andong', '08122293123'),
(16, 'Jessica Veranda', 'Jalan Bunga Andong', '081278631283'),
(17, 'Devi Kinal', 'Jalan Kahyangan', '081721982111'),
(18, 'Andela Yuwono', 'Jalan Surabaya 8', '081222391123'),
(19, 'Surya Darma', 'Jalan Bunga Sri Gading ', '085737499966'),
(20, 'Melody Nurramdhani', 'Cibaduyut Bandunng', '081222391123'),
(22, 'Jessica Veranda', 'Jalan Kahyangan', '081222391123'),
(23, 'Aninditha Rahma', 'Jalan Bunga Andong', '081222391123'),
(24, 'Jennifer Hanna', 'Bunga Sri Gading', '081222391123'),
(25, 'Shania Gracia', 'Bekasi', '0812378741823'),
(26, 'Sofia Meifialiani', 'Bekasi 1 barat', '0812729831231'),
(27, 'Shinta Naomi', 'Jalan Kegelapan', '082731234123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses`
--

CREATE TABLE IF NOT EXISTS `proses` (
  `NoProses` int(11) NOT NULL,
  `NamaProses` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses`
--

INSERT INTO `proses` (`NoProses`, `NamaProses`) VALUES
(1, 'Baru Masuk'),
(2, 'Cuci'),
(3, 'Kering'),
(4, 'Setrika'),
(5, 'Antar'),
(6, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spage`
--

CREATE TABLE IF NOT EXISTS `spage` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nohp` varchar(16) DEFAULT NULL,
  `kelamin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spage`
--

INSERT INTO `spage` (`id`, `namalengkap`, `alamat`, `nohp`, `kelamin`) VALUES
(1, 'Pegawai', 'Alamat Rumah', '076909182012', 'PEREMPUAN'),
(2, 'Pegawai', 'Alamat Rumah', '003579760904', 'LAKI-LAKI'),
(3, 'Pegawai', 'Alamat Rumah', '075832846738', 'PEREMPUAN'),
(4, 'Pegawai', 'Alamat Rumah', '008606267542', 'PEREMPUAN'),
(5, 'Pegawai', 'Alamat Rumah', '081023490318', 'PEREMPUAN'),
(6, 'Pegawai', 'Alamat Rumah', '061989935824', 'PEREMPUAN'),
(7, 'Pegawai', 'Alamat Rumah', '048597395465', 'PEREMPUAN'),
(8, 'Pegawai', 'Alamat Rumah', '065441119079', 'PEREMPUAN'),
(9, 'Pegawai', 'Alamat Rumah', '006004730990', 'PEREMPUAN'),
(10, 'Pegawai', 'Alamat Rumah', '025119844754', 'LAKI-LAKI'),
(11, 'Pegawai', 'Alamat Rumah', '023234499081', 'LAKI-LAKI'),
(12, 'Pegawai', 'Alamat Rumah', '015376907415', 'PEREMPUAN'),
(13, 'Pegawai', 'Alamat Rumah', '083050776816', 'LAKI-LAKI'),
(14, 'Pegawai', 'Alamat Rumah', '039572620428', 'PEREMPUAN'),
(15, 'Pegawai', 'Alamat Rumah', '004422824461', 'PEREMPUAN'),
(16, 'Pegawai', 'Alamat Rumah', '027880108568', 'LAKI-LAKI'),
(17, 'Pegawai', 'Alamat Rumah', '089916670313', 'PEREMPUAN'),
(18, 'Pegawai', 'Alamat Rumah', '057495786489', 'LAKI-LAKI'),
(19, 'Pegawai', 'Alamat Rumah', '083169938142', 'PEREMPUAN'),
(20, 'Pegawai', 'Alamat Rumah', '062766773964', 'PEREMPUAN'),
(21, 'Pegawai', 'Alamat Rumah', '044039289694', 'PEREMPUAN'),
(22, 'Pegawai', 'Alamat Rumah', '071845566175', 'LAKI-LAKI'),
(23, 'Pegawai', 'Alamat Rumah', '068712177750', 'LAKI-LAKI'),
(24, 'Pegawai', 'Alamat Rumah', '058921309336', 'LAKI-LAKI'),
(25, 'Pegawai', 'Alamat Rumah', '001095305291', 'LAKI-LAKI'),
(26, 'Pegawai', 'Alamat Rumah', '090519044166', 'LAKI-LAKI'),
(27, 'Pegawai', 'Alamat Rumah', '010004119211', 'PEREMPUAN'),
(28, 'Pegawai', 'Alamat Rumah', '075406895182', 'LAKI-LAKI'),
(29, 'Pegawai', 'Alamat Rumah', '042693963220', 'LAKI-LAKI'),
(30, 'Pegawai', 'Alamat Rumah', '032523272216', 'PEREMPUAN'),
(31, 'Pegawai', 'Alamat Rumah', '033696530790', 'PEREMPUAN'),
(32, 'Pegawai', 'Alamat Rumah', '047524662732', 'PEREMPUAN'),
(33, 'Pegawai', 'Alamat Rumah', '099699842463', 'LAKI-LAKI'),
(34, 'Pegawai', 'Alamat Rumah', '066575069880', 'LAKI-LAKI'),
(35, 'Pegawai', 'Alamat Rumah', '067627773217', 'LAKI-LAKI'),
(36, 'Pegawai', 'Alamat Rumah', '085752089867', 'LAKI-LAKI'),
(37, 'Pegawai', 'Alamat Rumah', '020639776178', 'LAKI-LAKI'),
(38, 'Pegawai', 'Alamat Rumah', '020386966243', 'LAKI-LAKI'),
(39, 'Pegawai', 'Alamat Rumah', '001594400686', 'LAKI-LAKI'),
(40, 'Pegawai', 'Alamat Rumah', '046810944515', 'PEREMPUAN'),
(41, 'Pegawai', 'Alamat Rumah', '075058367266', 'PEREMPUAN'),
(42, 'Pegawai', 'Alamat Rumah', '004810505085', 'PEREMPUAN'),
(43, 'Pegawai', 'Alamat Rumah', '015874318886', 'PEREMPUAN'),
(44, 'Pegawai', 'Alamat Rumah', '058317540733', 'PEREMPUAN'),
(45, 'Pegawai', 'Alamat Rumah', '065164431617', 'PEREMPUAN'),
(46, 'Pegawai', 'Alamat Rumah', '013266361796', 'PEREMPUAN'),
(47, 'Pegawai', 'Alamat Rumah', '065581017234', 'PEREMPUAN'),
(48, 'Pegawai', 'Alamat Rumah', '026642098954', 'LAKI-LAKI'),
(49, 'Pegawai', 'Alamat Rumah', '015970752682', 'PEREMPUAN'),
(50, 'Pegawai', 'Alamat Rumah', '063665438037', 'LAKI-LAKI'),
(51, 'Pegawai', 'Alamat Rumah', '065906576221', 'LAKI-LAKI'),
(52, 'Pegawai', 'Alamat Rumah', '079236033539', 'LAKI-LAKI'),
(53, 'Pegawai', 'Alamat Rumah', '012325478915', 'LAKI-LAKI'),
(54, 'Pegawai', 'Alamat Rumah', '021059825197', 'LAKI-LAKI'),
(55, 'Pegawai', 'Alamat Rumah', '089207396180', 'LAKI-LAKI'),
(56, 'Pegawai', 'Alamat Rumah', '005402128310', 'PEREMPUAN'),
(57, 'Pegawai', 'Alamat Rumah', '099773899931', 'PEREMPUAN'),
(58, 'Pegawai', 'Alamat Rumah', '047084971561', 'PEREMPUAN'),
(59, 'Pegawai', 'Alamat Rumah', '096649387941', 'PEREMPUAN'),
(60, 'Pegawai', 'Alamat Rumah', '012573654495', 'PEREMPUAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggaldatang`
--

CREATE TABLE IF NOT EXISTS `tanggaldatang` (
  `No` int(11) NOT NULL,
  `IdTransaksi` int(11) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggaldatang`
--

INSERT INTO `tanggaldatang` (`No`, `IdTransaksi`, `Tanggal`) VALUES
(16, 18, '2015-12-19 04:13:11'),
(17, 1, '2015-12-22 00:42:25'),
(18, 2, '2015-12-22 01:18:50'),
(19, 3, '2015-12-22 02:13:25'),
(21, 5, '2015-12-22 02:51:07'),
(22, 6, '2015-12-22 04:57:05'),
(23, 7, '2015-12-22 04:57:29'),
(24, 8, '2015-12-22 04:58:12'),
(25, 9, '2015-12-22 04:59:00'),
(26, 10, '2015-12-22 04:59:43'),
(27, 11, '2015-12-22 05:00:13'),
(28, 12, '2015-12-22 05:00:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggaldiambil`
--

CREATE TABLE IF NOT EXISTS `tanggaldiambil` (
  `No` int(11) NOT NULL,
  `IdTransaksi` int(11) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggaldiambil`
--

INSERT INTO `tanggaldiambil` (`No`, `IdTransaksi`, `Tanggal`) VALUES
(1, 5, '2015-12-22 02:58:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `IdTransaksi` int(11) NOT NULL,
  `JenisTransaksi` int(11) NOT NULL,
  `Pelanggan` int(11) NOT NULL,
  `Admin` int(11) NOT NULL,
  `Berat` int(11) NOT NULL,
  `StatusPesanan` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`IdTransaksi`, `JenisTransaksi`, `Pelanggan`, `Admin`, `Berat`, `StatusPesanan`) VALUES
(1, 3, 13, 1, 9, 4),
(2, 1, 22, 1, 3, 1),
(3, 4, 19, 1, 10, 1),
(5, 2, 14, 1, 13, 6),
(6, 4, 20, 1, 12, 1),
(7, 1, 23, 1, 4, 1),
(8, 3, 24, 1, 12, 1),
(9, 3, 12, 1, 23, 1),
(10, 3, 25, 1, 3, 1),
(11, 3, 26, 1, 4, 1),
(12, 4, 27, 1, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `jenistransaksi`
--
ALTER TABLE `jenistransaksi`
  ADD PRIMARY KEY (`IdJenis`);

--
-- Indexes for table `kodekunci`
--
ALTER TABLE `kodekunci`
  ADD PRIMARY KEY (`IdKodeKunci`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`NoPelanggan`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`NoProses`);

--
-- Indexes for table `spage`
--
ALTER TABLE `spage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggaldatang`
--
ALTER TABLE `tanggaldatang`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tanggaldiambil`
--
ALTER TABLE `tanggaldiambil`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`IdTransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `NoPelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `spage`
--
ALTER TABLE `spage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tanggaldatang`
--
ALTER TABLE `tanggaldatang`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tanggaldiambil`
--
ALTER TABLE `tanggaldiambil`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `IdTransaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
