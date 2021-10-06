-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 01:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sppd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id_biaya` int(11) NOT NULL,
  `jarak` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `uang_gol1` double NOT NULL,
  `uang_gol2` double NOT NULL,
  `uang_gol3s` double NOT NULL,
  `uang_gol3k` double NOT NULL,
  `uang_gol4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biaya`
--

INSERT INTO `tb_biaya` (`id_biaya`, `jarak`, `lokasi`, `uang_gol1`, `uang_gol2`, `uang_gol3s`, `uang_gol3k`, `uang_gol4`) VALUES
(2, '2 - 5 KM', 'Kecamatan Cipocok', 150000, 150000, 150000, 150000, 150000),
(4, '5 - 20 km', 'Kecamatan Ciruas', 150000, 150000, 150000, 150000, 150000),
(5, '5 - 20 km', 'Kecamatan Baros', 150000, 150000, 150000, 150000, 150000),
(6, '5 - 20 km', 'kecamatan petir', 150000, 150000, 150000, 150000, 150000),
(7, '5 - 20 km', 'kecamatan pabuaran', 150000, 150000, 150000, 150000, 150000),
(8, '5 - 20 km', 'Kecamatan Kramatwatu', 150000, 150000, 150000, 150000, 150000),
(9, '5 - 20 km', 'Kecamatan Gunungsari', 150000, 150000, 150000, 150000, 150000),
(10, '20 - 30 km', 'Kecamatan Pontang', 150000, 150000, 150000, 150000, 150000),
(11, '20 - 30 km', 'kecamatan kragilan', 150000, 150000, 150000, 150000, 150000),
(12, '20 - 30 km', 'Kecamatan Carenang', 150000, 150000, 150000, 150000, 150000),
(13, '20 - 30 km', 'kecamatan Binuang', 150000, 150000, 150000, 150000, 150000),
(14, '20 - 30 km', 'Kecamatan Kibin', 150000, 150000, 150000, 150000, 150000),
(15, '20 - 30 km', 'Kecamatan Kibin', 150000, 150000, 150000, 150000, 150000),
(16, '20 - 30 km', 'Kecamatan Cikeusal', 150000, 150000, 150000, 150000, 150000),
(17, '20 - 30 km', 'kecamatan ciomas', 150000, 150000, 150000, 150000, 150000),
(18, '20 - 30 km', 'Kacamatan Mancak', 150000, 150000, 150000, 150000, 150000),
(19, '20 - 30 km', 'Kecamatan Waringin Kurung', 150000, 150000, 150000, 150000, 150000),
(20, '20 - 30 km', 'Kecamatan Tungjungteja', 150000, 150000, 150000, 150000, 150000),
(21, '20 - 30 km', 'Kecamatan Lebak Wangi', 150000, 150000, 150000, 150000, 150000),
(22, '30', 'Kecamatan Tanara', 150000, 150000, 150000, 150000, 150000),
(23, '30', 'kecamatan Tirtayasa', 150000, 150000, 150000, 150000, 150000),
(24, '30', 'kecamatan Cikande', 150000, 150000, 150000, 150000, 150000),
(25, '30', 'Kecamatan Jawilan', 150000, 150000, 150000, 150000, 150000),
(26, '30', 'Kecamatan Kopo', 150000, 150000, 150000, 150000, 150000),
(27, '30', 'Kecamatan Pamarayan', 150000, 150000, 150000, 150000, 150000),
(28, '30', 'Kecamatan Bandung', 150000, 150000, 150000, 150000, 150000),
(29, '30', 'Kecamatan Padarincang', 150000, 150000, 150000, 150000, 150000),
(30, '30', 'Kecamatan Cinangka', 150000, 150000, 150000, 150000, 150000),
(31, '30', 'Kecamatan Anyar', 150000, 150000, 150000, 150000, 150000),
(32, '30', 'Kecamatan Bojonegara', 150000, 150000, 150000, 150000, 150000),
(33, '30', 'Kecamatan Puloampel', 150000, 150000, 150000, 150000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_biaya_luar`
--

CREATE TABLE `tb_biaya_luar` (
  `id_biaya_luar` int(11) NOT NULL,
  `jarak` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `uang_gol1` double NOT NULL,
  `uang_gol2` double NOT NULL,
  `uang_gol3s` double NOT NULL,
  `uang_gol3k` double NOT NULL,
  `uang_gol4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biaya_luar`
--

INSERT INTO `tb_biaya_luar` (`id_biaya_luar`, `jarak`, `lokasi`, `uang_gol1`, `uang_gol2`, `uang_gol3s`, `uang_gol3k`, `uang_gol4`) VALUES
(2, '90 km', 'bandung', 150000, 150000, 150000, 150000, 150000),
(3, '100', 'DIY', 420000, 420000, 420000, 420000, 420000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buat_sppd_dalam`
--

CREATE TABLE `tb_buat_sppd_dalam` (
  `id_buat_sppd_dalam` int(11) NOT NULL,
  `id_permohonan_dalam` int(11) NOT NULL,
  `id_sppd_dalam` int(11) NOT NULL,
  `no_kegiatan` varchar(100) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `kode_program` int(11) NOT NULL,
  `total_biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buat_sppd_dalam`
--

INSERT INTO `tb_buat_sppd_dalam` (`id_buat_sppd_dalam`, `id_permohonan_dalam`, `id_sppd_dalam`, `no_kegiatan`, `id_pekerjaan`, `id_biaya`, `kode_program`, `total_biaya`) VALUES
(6, 16, 8, '09.001', 8, 30, 3, 300000),
(7, 18, 11, '09.002', 10, 20, 3, 300000),
(8, 17, 13, '09.006', 13, 28, 3, 300000),
(9, 19, 11, '09.002', 10, 20, 3, 600000),
(10, 20, 8, '09.001', 8, 30, 3, 1800000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buat_sppd_luar`
--

CREATE TABLE `tb_buat_sppd_luar` (
  `id_buat_sppd_luar` int(11) NOT NULL,
  `id_permohonan_luar` int(11) NOT NULL,
  `id_sppd_luar` int(11) NOT NULL,
  `no_kegiatan` varchar(100) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `kode_program` int(11) NOT NULL,
  `total_biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buat_sppd_luar`
--

INSERT INTO `tb_buat_sppd_luar` (`id_buat_sppd_luar`, `id_permohonan_luar`, `id_sppd_luar`, `no_kegiatan`, `id_pekerjaan`, `id_biaya`, `kode_program`, `total_biaya`) VALUES
(6, 4, 11, '66', 1, 3, 3, 300000),
(7, 5, 14, '66', 3, 2, 4, 900000),
(8, 7, 15, '66', 1, 3, 3, 840000),
(9, 8, 15, '66', 1, 3, 3, 6720000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_permohonan_dalam`
--

CREATE TABLE `tb_detail_permohonan_dalam` (
  `id_permohonan_dalam` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_permohonan_dalam`
--

INSERT INTO `tb_detail_permohonan_dalam` (`id_permohonan_dalam`, `nip`) VALUES
(15, '196706252008011003'),
(15, '197210081999011001'),
(16, '198804232015011001'),
(16, '199307022019011002'),
(17, '197801022000121001'),
(17, '197912052011011001'),
(18, '196706252008011003'),
(18, '197210081999011001'),
(19, '19830918 2010011011'),
(19, '198610082019012001'),
(20, '196706252008011003'),
(20, '197210081999011001'),
(20, '197801022000121001'),
(20, '197912052011011001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_permohonan_luar`
--

CREATE TABLE `tb_detail_permohonan_luar` (
  `id_permohonan_luar` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_permohonan_luar`
--

INSERT INTO `tb_detail_permohonan_luar` (`id_permohonan_luar`, `nip`) VALUES
(4, '196706252008011003'),
(4, '197210081999011001'),
(5, '198804232015011001'),
(5, '199307022019011002'),
(6, '197912052011011001'),
(6, '19830918 2010011011'),
(7, '198804232015011001'),
(7, '199307022019011002'),
(8, '19830918 2010011011'),
(8, '198610082019012001'),
(8, '198804232015011001'),
(8, '199307022019011002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_sppd_dalam`
--

CREATE TABLE `tb_detail_sppd_dalam` (
  `id_buat_sppd_dalam` int(11) NOT NULL,
  `id_sppd_dalam` int(11) NOT NULL,
  `id_permohonan_dalam` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `biaya_perjalanan` double NOT NULL,
  `lama_perjalanan` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_sppd_dalam`
--

INSERT INTO `tb_detail_sppd_dalam` (`id_buat_sppd_dalam`, `id_sppd_dalam`, `id_permohonan_dalam`, `nip`, `biaya_perjalanan`, `lama_perjalanan`, `total`) VALUES
(6, 8, 16, '198804232015011001', 150000, 1, 150000),
(6, 8, 16, '199307022019011002', 150000, 1, 150000),
(7, 11, 18, '196706252008011003', 150000, 1, 150000),
(7, 11, 18, '197210081999011001', 150000, 1, 150000),
(8, 13, 17, '197801022000121001', 150000, 1, 150000),
(8, 13, 17, '197912052011011001', 150000, 1, 150000),
(9, 11, 19, '19830918 2010011011', 150000, 2, 300000),
(9, 11, 19, '198610082019012001', 150000, 2, 300000),
(10, 8, 20, '196706252008011003', 150000, 3, 450000),
(10, 8, 20, '197210081999011001', 150000, 3, 450000),
(10, 8, 20, '197801022000121001', 150000, 3, 450000),
(10, 8, 20, '197912052011011001', 150000, 3, 450000),
(11, 13, 17, '197801022000121001', 150000, 1, 150000),
(11, 13, 17, '197912052011011001', 150000, 1, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_sppd_luar`
--

CREATE TABLE `tb_detail_sppd_luar` (
  `id_buat_sppd_luar` int(11) NOT NULL,
  `id_sppd_luar` int(11) NOT NULL,
  `id_permohonan_luar` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `biaya_perjalanan` double NOT NULL,
  `lama_perjalanan` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_sppd_luar`
--

INSERT INTO `tb_detail_sppd_luar` (`id_buat_sppd_luar`, `id_sppd_luar`, `id_permohonan_luar`, `nip`, `biaya_perjalanan`, `lama_perjalanan`, `total`) VALUES
(5, 11, 4, '196706252008011003', 0, 0, 0),
(5, 11, 4, '197210081999011001', 0, 0, 0),
(6, 11, 4, '196706252008011003', 150000, 1, 150000),
(6, 11, 4, '197210081999011001', 150000, 1, 150000),
(7, 14, 5, '198804232015011001', 150000, 3, 450000),
(7, 14, 5, '199307022019011002', 150000, 3, 450000),
(8, 15, 7, '198804232015011001', 420000, 1, 420000),
(8, 15, 7, '199307022019011002', 420000, 1, 420000),
(9, 15, 8, '19830918 2010011011', 420000, 4, 1680000),
(9, 15, 8, '198610082019012001', 420000, 4, 1680000),
(9, 15, 8, '198804232015011001', 420000, 4, 1680000),
(9, 15, 8, '199307022019011002', 420000, 4, 1680000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `no_kegiatan` varchar(100) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `pptk` varchar(100) NOT NULL,
  `koring_k` varchar(100) NOT NULL,
  `pagu_anggaran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`no_kegiatan`, `nama_kegiatan`, `pptk`, `koring_k`, `pagu_anggaran`) VALUES
('08.001', 'Perencanaan Pembangunan dan rehabilitasi Gedung Perkantoran, Rumah Jabatan dan Rumah Dinas', 'Dede Rudi, ST', '1104.110401.08.001', 50005000),
('08.006', 'Inspeksi, Survei Kondisi Bangunan Kebutuhan Perencanaan', 'Widhy Ardhiyansyah, ST.,M.Si', '1104.110401.08.006', 22760000),
('09.001', 'Perencanaan Pembangunan dan rehabilitasi Fasilitas Umum', 'Dede Rudi, ST', '1104.110401.09.001', 8240000),
('09.002', 'Pembangunan / rehabilitasi Fasilitas Umum', 'TUBAGUS TAUFIK RAMDHANI, ST', '1104.110401.09.002', 10000000),
('09.005', 'Pembangunan Gedung Perkantoran, Rumah Jabatan dan Rumah Dinas', 'TUBAGUS TAUFIK RAMDHANI, ST', '1104.110401.09.005', 30000000),
('09.006', 'Rehabilitasi Gedung Perkantoran, Rumah Jabatan dan Rumah Dinas', 'TUBAGUS TAUFIK RAMDHANI, ST', '1104.110401.09.006', 7000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan_luar`
--

CREATE TABLE `tb_kegiatan_luar` (
  `no_kegiatan` varchar(100) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `pptk` varchar(100) NOT NULL,
  `koring_k` varchar(100) NOT NULL,
  `pagu_anggaran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan_luar`
--

INSERT INTO `tb_kegiatan_luar` (`no_kegiatan`, `nama_kegiatan`, `pptk`, `koring_k`, `pagu_anggaran`) VALUES
('66', 'seminar', 'fulano', '11.00.9', 40000000),
('776699', 'study banding', 'TB. M. TAUFIK RAMDHANI, ST', '55.55.5', 80000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lhpd_dalam`
--

CREATE TABLE `tb_lhpd_dalam` (
  `id_lhpd_dalam` int(11) NOT NULL,
  `id_buat_sppd_dalam` int(11) NOT NULL,
  `hasil` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lhpd_luar`
--

CREATE TABLE `tb_lhpd_luar` (
  `id_lhpd_luar` int(11) NOT NULL,
  `id_buat_sppd_luar` int(11) NOT NULL,
  `hasil` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lhpd_luar`
--

INSERT INTO `tb_lhpd_luar` (`id_lhpd_luar`, `id_buat_sppd_luar`, `hasil`) VALUES
(3, 4, 'telah di lakukan survey luar daerah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nip`, `nama`, `jabatan`, `pangkat`, `gambar`) VALUES
('196706252008011003', 'Adhi Mawardi ', 'pegawai', '2', ''),
('197210081999011001', 'H. OKeu Oktaviana, ST.,M.Pd', 'kadis', '4', ''),
('197801022000121001', 'Tony Kristiawan, ST.,M.Si', 'kabid', '4', ''),
('197912052011011001', 'Dede Rudi, ST', 'kasi', '3', ''),
('19830918 2010011011', 'Widhy Ardhiyansyah, ST.,M.Si', 'kasi', '3', ''),
('198610082019012001', 'Gunawan Oktawiajya, ST', 'pegawai', '3', ''),
('198804232015011001', 'Tubagus Taufik Ramdhani, ST', 'kasi', '3', ''),
('199307022019011002', 'Yudistira Miranti Lestari, ST', 'pegawai', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `id_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `id_biaya`) VALUES
(7, 'Perencanaan Pembangunan Rumah Dinas Camat Bandung', 28),
(8, 'Perencanaan Pembangunan Bumi Perkemahan Cinangka', 30),
(9, 'Pembangunan Fasos Fasum Kecamatan Pabuaran', 7),
(10, 'Pembangunan Fasos Fasum Kecamatan Tunjung Teja', 20),
(11, 'Pembangunan Gedung Kantor Kecamatan Bandung', 28),
(12, 'Pembangunan Gedung Kantor Kecamatan Cinangka', 30),
(13, 'Rehabilitasi Gedung Kantor Kecamatan Bandung', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan_luar`
--

CREATE TABLE `tb_pekerjaan_luar` (
  `id_pekerjaan_luar` int(11) NOT NULL,
  `nama_pekerjaan_luar` varchar(100) NOT NULL,
  `id_biaya_luar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pekerjaan_luar`
--

INSERT INTO `tb_pekerjaan_luar` (`id_pekerjaan_luar`, `nama_pekerjaan_luar`, `id_biaya_luar`) VALUES
(1, 'survey luar daerah', 3),
(3, 'jalan oke', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan_dalam`
--

CREATE TABLE `tb_permohonan_dalam` (
  `id_permohonan_dalam` int(11) NOT NULL,
  `id_sppd_dalam` int(11) NOT NULL,
  `tujuan_p_dinas` text NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tertanda` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan_dalam`
--

INSERT INTO `tb_permohonan_dalam` (`id_permohonan_dalam`, `id_sppd_dalam`, `tujuan_p_dinas`, `tgl_berangkat`, `tgl_kembali`, `tertanda`, `status`) VALUES
(16, 8, 'seminar', '2021-09-07', '2021-09-07', 'kadis', 'sppd sudah dibuat'),
(17, 13, 'pemeriksaan', '2021-09-07', '2021-09-07', 'kabid', 'sppd sudah dibuat'),
(18, 11, 'tes', '2021-09-07', '2021-09-07', 'kasi', 'sppd sudah dibuat'),
(19, 11, 'tes lagi', '2021-09-07', '2021-09-09', 'kadis', 'sppd sudah dibuat'),
(20, 8, 'tes lagi 3', '2021-09-07', '2021-09-10', 'kadis', 'sppd sudah dibuat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan_luar`
--

CREATE TABLE `tb_permohonan_luar` (
  `id_permohonan_luar` int(11) NOT NULL,
  `id_sppd_luar` int(11) NOT NULL,
  `tujuan_p_dinas` text NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tertanda` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan_luar`
--

INSERT INTO `tb_permohonan_luar` (`id_permohonan_luar`, `id_sppd_luar`, `tujuan_p_dinas`, `tgl_berangkat`, `tgl_kembali`, `tertanda`, `status`) VALUES
(4, 11, 'tes survey luar darah', '2021-09-07', '2021-09-07', 'kadis', 'sppd sudah dibuat'),
(5, 14, 'seminar', '2021-09-08', '2021-09-11', 'kasi', 'sppd sudah dibuat'),
(7, 15, 'tes lagi ', '2021-09-09', '2021-09-10', 'kasi', 'sppd sudah dibuat'),
(8, 15, 'study banding', '2021-09-09', '2021-09-13', 'kabid', 'sppd sudah dibuat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_program`
--

CREATE TABLE `tb_program` (
  `kode_program` int(11) NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_program`
--

INSERT INTO `tb_program` (`kode_program`, `nama_program`) VALUES
(3, 'Program Pembangunan dan Pemeliharaan Prasarana Umum dan Gedung Pemerintahan'),
(4, 'Program perencanaan teknis prasarana pemerintahan, perumahan dan permukiman ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sppd_dalam_daerah`
--

CREATE TABLE `tb_sppd_dalam_daerah` (
  `id_sppd_dalam` int(11) NOT NULL,
  `no_kegiatan` varchar(100) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `kode_program` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sppd_dalam_daerah`
--

INSERT INTO `tb_sppd_dalam_daerah` (`id_sppd_dalam`, `no_kegiatan`, `id_pekerjaan`, `id_biaya`, `kode_program`) VALUES
(7, '08.001', 7, 28, 4),
(8, '09.001', 8, 30, 3),
(9, '09.002', 9, 7, 3),
(10, '09.005', 11, 28, 3),
(11, '09.002', 10, 20, 3),
(12, '09.005', 12, 30, 3),
(13, '09.006', 13, 28, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sppd_luar_daerah`
--

CREATE TABLE `tb_sppd_luar_daerah` (
  `id_sppd_luar` int(11) NOT NULL,
  `no_kegiatan` varchar(100) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_biaya` int(11) NOT NULL,
  `kode_program` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sppd_luar_daerah`
--

INSERT INTO `tb_sppd_luar_daerah` (`id_sppd_luar`, `no_kegiatan`, `id_pekerjaan`, `id_biaya`, `kode_program`) VALUES
(15, '66', 1, 3, 3),
(16, '66', 3, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_dalam`
--

CREATE TABLE `tb_upload_dalam` (
  `id_upload_dalam` int(11) NOT NULL,
  `id_buat_sppd_dalam` int(11) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_upload_dalam`
--

INSERT INTO `tb_upload_dalam` (`id_upload_dalam`, `id_buat_sppd_dalam`, `file`) VALUES
(1, 9, '1521615441-TOR-SEMNAS-KARAkTER-4-2018.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_luar`
--

CREATE TABLE `tb_upload_luar` (
  `tb_upload_luar` int(11) NOT NULL,
  `id_buat_sppd_luar` int(11) NOT NULL,
  `file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_upload_luar`
--

INSERT INTO `tb_upload_luar` (`tb_upload_luar`, `id_buat_sppd_luar`, `file`) VALUES
(1, 8, 'KARTUKENDALIPELAJAR.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `role_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nip`, `password`, `nama_lengkap`, `role_user`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(4, 'yusi', 'yusi', 'yusi', 'pegawai'),
(5, '197801022000121001', 'kabid', 'Tony Kristiawan', 'kabid'),
(6, '198804232015011001', 'kasi', 'Tubagus Taufik Ramdhani', 'kasi'),
(7, '197210081999011001', 'kadis', 'Okeu Oktaviana', 'kadis'),
(8, '19791205 2011011001', 'kasi', 'Dede Rudi', 'kasi'),
(9, '199307022019011002', 'pegawai', 'Yudistira Miranti Lestari', 'pegawai'),
(10, '198610082019012001', 'pegawai', 'Gunawan Oktawijaya', 'pegawai'),
(11, '19830918 2010011011', 'kasi', 'Widhy Ardhiyansyah', 'kasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `tb_biaya_luar`
--
ALTER TABLE `tb_biaya_luar`
  ADD PRIMARY KEY (`id_biaya_luar`);

--
-- Indexes for table `tb_buat_sppd_dalam`
--
ALTER TABLE `tb_buat_sppd_dalam`
  ADD PRIMARY KEY (`id_buat_sppd_dalam`);

--
-- Indexes for table `tb_buat_sppd_luar`
--
ALTER TABLE `tb_buat_sppd_luar`
  ADD PRIMARY KEY (`id_buat_sppd_luar`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`no_kegiatan`);

--
-- Indexes for table `tb_kegiatan_luar`
--
ALTER TABLE `tb_kegiatan_luar`
  ADD PRIMARY KEY (`no_kegiatan`);

--
-- Indexes for table `tb_lhpd_dalam`
--
ALTER TABLE `tb_lhpd_dalam`
  ADD PRIMARY KEY (`id_lhpd_dalam`);

--
-- Indexes for table `tb_lhpd_luar`
--
ALTER TABLE `tb_lhpd_luar`
  ADD PRIMARY KEY (`id_lhpd_luar`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tb_pekerjaan_luar`
--
ALTER TABLE `tb_pekerjaan_luar`
  ADD PRIMARY KEY (`id_pekerjaan_luar`);

--
-- Indexes for table `tb_permohonan_dalam`
--
ALTER TABLE `tb_permohonan_dalam`
  ADD PRIMARY KEY (`id_permohonan_dalam`);

--
-- Indexes for table `tb_permohonan_luar`
--
ALTER TABLE `tb_permohonan_luar`
  ADD PRIMARY KEY (`id_permohonan_luar`);

--
-- Indexes for table `tb_program`
--
ALTER TABLE `tb_program`
  ADD PRIMARY KEY (`kode_program`);

--
-- Indexes for table `tb_sppd_dalam_daerah`
--
ALTER TABLE `tb_sppd_dalam_daerah`
  ADD PRIMARY KEY (`id_sppd_dalam`);

--
-- Indexes for table `tb_sppd_luar_daerah`
--
ALTER TABLE `tb_sppd_luar_daerah`
  ADD PRIMARY KEY (`id_sppd_luar`);

--
-- Indexes for table `tb_upload_dalam`
--
ALTER TABLE `tb_upload_dalam`
  ADD PRIMARY KEY (`id_upload_dalam`);

--
-- Indexes for table `tb_upload_luar`
--
ALTER TABLE `tb_upload_luar`
  ADD PRIMARY KEY (`tb_upload_luar`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biaya`
--
ALTER TABLE `tb_biaya`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_biaya_luar`
--
ALTER TABLE `tb_biaya_luar`
  MODIFY `id_biaya_luar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_buat_sppd_dalam`
--
ALTER TABLE `tb_buat_sppd_dalam`
  MODIFY `id_buat_sppd_dalam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_buat_sppd_luar`
--
ALTER TABLE `tb_buat_sppd_luar`
  MODIFY `id_buat_sppd_luar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_lhpd_dalam`
--
ALTER TABLE `tb_lhpd_dalam`
  MODIFY `id_lhpd_dalam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_lhpd_luar`
--
ALTER TABLE `tb_lhpd_luar`
  MODIFY `id_lhpd_luar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pekerjaan_luar`
--
ALTER TABLE `tb_pekerjaan_luar`
  MODIFY `id_pekerjaan_luar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_permohonan_dalam`
--
ALTER TABLE `tb_permohonan_dalam`
  MODIFY `id_permohonan_dalam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_permohonan_luar`
--
ALTER TABLE `tb_permohonan_luar`
  MODIFY `id_permohonan_luar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `kode_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_sppd_dalam_daerah`
--
ALTER TABLE `tb_sppd_dalam_daerah`
  MODIFY `id_sppd_dalam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_sppd_luar_daerah`
--
ALTER TABLE `tb_sppd_luar_daerah`
  MODIFY `id_sppd_luar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_upload_dalam`
--
ALTER TABLE `tb_upload_dalam`
  MODIFY `id_upload_dalam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_upload_luar`
--
ALTER TABLE `tb_upload_luar`
  MODIFY `tb_upload_luar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
