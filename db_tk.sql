-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 07:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nm_user` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nm_user`, `username`, `password`, `level`) VALUES
(1, 'hafiz', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `tentang` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `detail`, `tentang`, `tgl`) VALUES
(1, 'Latihan Upacara Bendera', 'Mengajarkan anak untuk disiplin anak', 'Kepedulian ', '2019-07-26'),
(3, 'Halal bi Halal', 'Dalam rangka meningkatatkan keimanan', 'Kepedulian ', '2019-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(5) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `ket`, `foto`) VALUES
(1, 'Pergelaran Lomba', 'burundi_20160905_130853.jpg'),
(2, 'hotel jatra', 'jelang-pemilukada-masyarakat-harapkan-pemimpin-yang-mampu-majukan-kabupaten-tanggamus-01.png'),
(3, 'Seminar', '1412379p.jpg'),
(4, 'adDD', 'ByJAPqZCYAEpJ07.jpg'),
(5, 'garer', 'WhatsApp Image 2019-04-25 at 21.17.56.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `jabatan`, `email`, `foto`) VALUES
(5, 'Lona Amelia', 'Guru Kelas', 'lona@gmail.com', '1552875728_tmp_WhatsApp_Image_2019-03-18_at_09.jpg_thumb.png'),
(7, 'pusa', 'safa', 'sacsc@gmail.com', 'WhatsApp Image 2019-04-25 at 21.15.32.jpeg'),
(8, 'Bahasa', 'aa', 'am@gmail.com', 'ibu-nunung.png');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(5) NOT NULL,
  `jadwal` text NOT NULL,
  `syarat` text NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `biaya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `jadwal`, `syarat`, `tempat`, `biaya`) VALUES
(1, 'Pendafataran Mulai 23 Juli 2018', 'Foto Kopi KK', 'Jl. Sam latulangi No.60', '300.0000');

-- --------------------------------------------------------

--
-- Table structure for table `intra`
--

CREATE TABLE `intra` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intra`
--

INSERT INTO `intra` (`id`, `nama`, `detail`) VALUES
(1, 'Agama dan Akhlak', 'Siswa taat berigama dan mempunyai akhlak yang baik'),
(2, 'Olahraga', 'Siswa Harus Sehat Jasmani'),
(5, 'Bahasa', 'dagt');

-- --------------------------------------------------------

--
-- Table structure for table `moto`
--

CREATE TABLE `moto` (
  `id` int(4) NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moto`
--

INSERT INTO `moto` (`id`, `moto`) VALUES
(1, 'Turut Berbakti Membangun ');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(5) NOT NULL,
  `prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `prestasi`) VALUES
(1, 'Juara Fisika'),
(3, 'Juara Matematika dunia');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(5) NOT NULL,
  `profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `profil`) VALUES
(1, 'Profil Cikini');

-- --------------------------------------------------------

--
-- Table structure for table `strategi`
--

CREATE TABLE `strategi` (
  `id` int(5) NOT NULL,
  `strategi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strategi`
--

INSERT INTO `strategi` (`id`, `strategi`) VALUES
(1, 'Meningkatkan Jumlah Siswa'),
(4, 'Menciptakan Robot'),
(5, 'Menjadi Siswa Berilmu dan Beriman');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `testi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `nama`, `testi`) VALUES
(1, 'Emma watson', 'Sangat bagus sekolah disini'),
(3, 'Bela Shopia', 'Sangat Berkualita International');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(5) NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `tujuan`) VALUES
(1, 'Menjadi hebat ia'),
(2, 'Menguasai Dunia Sinobi');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(5) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`) VALUES
(1, 'menjadi Sekolah Terbaik Dunia', 'meningkatkan sisswa hebat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intra`
--
ALTER TABLE `intra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategi`
--
ALTER TABLE `strategi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intra`
--
ALTER TABLE `intra`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `strategi`
--
ALTER TABLE `strategi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
