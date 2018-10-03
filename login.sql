-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 03:15 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(35) NOT NULL,
  `id_asisten` int(35) NOT NULL,
  `id_assist` int(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `bidang` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `jam_masuk` varchar(35) NOT NULL,
  `jam_keluar` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `id_asisten`, `id_assist`, `nama`, `bidang`, `tanggal_masuk`, `jam_masuk`, `jam_keluar`) VALUES
(1, 1, 0, 'Edwira Rizki Nasution', 'Matematika', '02-Feb-2018', '15:03', '18:18'),
(5, 2, 0, 'Jasnica Huang', 'Matematika', '02-Feb-2018', '18:18', NULL),
(11, 2, 0, 'Jasnica Huang', 'Matematika', '02-Feb-2018', '01:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id_absensis` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `id_siswaenglish` int(11) DEFAULT NULL,
  `id_siswagabung` int(11) DEFAULT NULL,
  `subject_mp` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `jam_masuk` varchar(35) NOT NULL,
  `jam_keluar` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id_absensis`, `id_siswa`, `id_siswaenglish`, `id_siswagabung`, `subject_mp`, `nama`, `level`, `tanggal_masuk`, `jam_masuk`, `jam_keluar`) VALUES
(71, NULL, 13, NULL, 'English', 'Iqbal Mahatma Putra', 'D', '01-Feb-2018', '01:15', '10:49'),
(72, NULL, 14, NULL, 'English', 'Nur Suciyana', 'M', '02-Feb-2018', '16:52', NULL),
(77, 55, NULL, NULL, 'Matematika', 'Ika Suhasmi', '4A', '03-Feb-2018', '00:31', '01:36'),
(78, 55, NULL, NULL, 'Matematika', 'Ika Suhasmi', 'B', '04-Feb-2018', '14:04', NULL),
(79, 58, NULL, NULL, 'Matematika', 'Iqbal Mahatma Putra', '3A', '04-Feb-2018', '17:22', NULL),
(80, 55, NULL, NULL, 'Matematika', 'Ika Suhasmi', 'B', '04-Feb-2018', '01:25', NULL),
(81, 55, NULL, NULL, 'Matematika', 'Ika Suhasmi', 'B', '05-Feb-2018', '16:17', NULL),
(82, NULL, 13, NULL, 'English', 'Iqbal Mahatma Putra', 'D', '05-Feb-2018', '16:24', '16:24'),
(83, 58, NULL, NULL, 'Matematika', 'Iqbal Mahatma Putra', '3A', '05-Feb-2018', '01:31', NULL),
(84, 58, NULL, NULL, 'Matematika', 'Iqbal Mahatma Putra', '3A', '05-Feb-2018', '01:32', '10:34'),
(85, 55, NULL, NULL, 'Matematika', 'Ika Suhasmi', 'B', '06-Feb-2018', '13:30', '13:30'),
(86, 56, NULL, NULL, 'Matematika', 'Nur Suciyana', '7A', '12-Feb-2018', '01:48', '01:50'),
(87, NULL, 15, NULL, 'English', 'Nana', 'E', '13-Feb-2018', '10:02', '10:04'),
(88, 55, NULL, NULL, 'Matematika', 'Ika Suhasmi', 'B', '13-Feb-2018', '10:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `absen_coba`
--

CREATE TABLE `absen_coba` (
  `id_absencoba` int(35) NOT NULL,
  `id_coba` int(35) NOT NULL,
  `id_coba2` int(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `subject_mp` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `jam_masuk` varchar(35) NOT NULL,
  `jam_keluar` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen_coba`
--

INSERT INTO `absen_coba` (`id_absencoba`, `id_coba`, `id_coba2`, `nama`, `kelas`, `subject_mp`, `tanggal_masuk`, `jam_masuk`, `jam_keluar`) VALUES
(3, 1, 0, 'Indah', '1 SD', 'Matematika', '03-Feb-2018', '08:14', '08:22'),
(4, 0, 1, 'Ssss', 'TK A', 'English', '04-Feb-2018', '23:45', '23:54'),
(5, 0, 1, 'Ssss', 'TK A', 'English', '04-Feb-2018', '23:46', '23:54'),
(6, 7, 0, 'eee', '3 SD', 'Matematika', '04-Feb-2018', '23:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asisten_pembimbing`
--

CREATE TABLE `asisten_pembimbing` (
  `id_asisten` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asisten_pembimbing`
--

INSERT INTO `asisten_pembimbing` (`id_asisten`, `username`, `password`, `jabatan`) VALUES
(1, 'Ika', '1234', 'admin'),
(2, 'asisten', '1235', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id_coba` int(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `level_awal` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `orang_tua` varchar(35) NOT NULL,
  `subject_mp` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id_coba`, `nama`, `kelas`, `level_awal`, `tanggal_masuk`, `level`, `orang_tua`, `subject_mp`, `tanggal_lahir`, `no_hp`) VALUES
(6, 'sdada', 'TK A', '7A', '2018-Feb-03', '5A', 'dsad', 'Matematika', '2018-02-28', '435'),
(7, 'eee', '3 SD', '2A', '2018-Feb-03', '4A', 'eeeee', 'Matematika', '2018-02-07', '22222');

-- --------------------------------------------------------

--
-- Table structure for table `coba2`
--

CREATE TABLE `coba2` (
  `id_coba2` int(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `level_awal` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `orang_tua` varchar(35) NOT NULL,
  `subject_mp` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba2`
--

INSERT INTO `coba2` (`id_coba2`, `nama`, `kelas`, `level_awal`, `tanggal_masuk`, `level`, `orang_tua`, `subject_mp`, `tanggal_lahir`, `no_hp`) VALUES
(1, 'Ssss', 'TK A', '5A', '2018-Feb-03', '3A', 'sss', 'English', '2018-02-15', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `id_nilai` int(35) NOT NULL,
  `id_siswa` int(35) NOT NULL,
  `tipe_test` varchar(35) NOT NULL,
  `levell` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `sheet` varchar(35) NOT NULL,
  `tanggal_test` varchar(35) NOT NULL,
  `grup` varchar(35) NOT NULL,
  `nilai` varchar(35) NOT NULL,
  `dari` varchar(35) NOT NULL,
  `waktu` varchar(35) NOT NULL,
  `darimenit` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`id_nilai`, `id_siswa`, `tipe_test`, `levell`, `level`, `sheet`, `tanggal_test`, `grup`, `nilai`, `dari`, `waktu`, `darimenit`) VALUES
(23, 55, 'AT', '7A', '7A', '33', 'Pilih Tanggal Test', 'Pilih', '', '100', '', 'Pilih'),
(24, 58, 'AT', '7A', '7A', '33', 'Pilih Tanggal Test', 'Pilih', '', '100', '', 'Pilih'),
(25, 58, 'AT', '7A', '7A', '44', 'Pilih Tanggal Test', 'Pilih', '', '100', '', 'Pilih'),
(26, 58, 'AT', '7A', '7A', '23', 'Pilih Tanggal Test', 'Pilih', '', '100', '', 'Pilih'),
(27, 55, 'AT', '7A', '7A', '34', 'Pilih Tanggal Test', 'I', '90', '100', '9', '10'),
(28, 55, 'AT', '7A', '7A', '34', 'Pilih Tanggal Test', 'I', '90', '100', '9', '10'),
(29, 55, 'AT', '4A', '7A', '', 'Pilih Tanggal Test', 'Pilih', '78', '78', '77', 'Pilih'),
(30, 55, 'AT', '4A', '7A', '193', '2018-02-14', 'Pilih', '90', '100', '8', '10'),
(31, 55, 'AT', '2', '7A', '', 'Pilih Tanggal Test', 'Pilih', '', '80', '', 'Pilih'),
(32, 55, 'AT', '2', '7A', '', 'Pilih Tanggal Test', 'Pilih', '', '80', '', 'Pilih'),
(33, 55, 'AT', '2', '7A', '', '2018-02-14', 'Pilih', '', '80', '', 'Pilih'),
(34, 57, 'AT', '4A', '3A', '', 'Pilih Tanggal Test', 'I', '', '70', '', '10'),
(35, 57, 'AT', '4A', '5A', '23', '2018-08-15', 'I', '40', '70', '10', '20');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai2`
--

CREATE TABLE `data_nilai2` (
  `id_nilai2` int(35) NOT NULL,
  `id_siswaenglish` int(35) NOT NULL,
  `tipe_test` varchar(35) NOT NULL,
  `levell` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `sheet` varchar(35) NOT NULL,
  `tanggal_test` varchar(35) NOT NULL,
  `grup` varchar(35) NOT NULL,
  `nilai` varchar(35) NOT NULL,
  `dari` varchar(35) NOT NULL,
  `waktu` varchar(35) NOT NULL,
  `darimenit` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilai2`
--

INSERT INTO `data_nilai2` (`id_nilai2`, `id_siswaenglish`, `tipe_test`, `levell`, `level`, `sheet`, `tanggal_test`, `grup`, `nilai`, `dari`, `waktu`, `darimenit`) VALUES
(1, 13, 'AT', '', 'D', '', '2018-02-13', 'II', '89', '100', '7', '10'),
(2, 13, 'AT', '7A', '7A', '54', 'Pilih Tanggal Test', 'Pilih', '', '100', '', 'Pilih');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilaicoba`
--

CREATE TABLE `data_nilaicoba` (
  `id_nilaicoba` int(35) NOT NULL,
  `id_coba` int(35) NOT NULL,
  `tipe_test` varchar(35) NOT NULL,
  `levell` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `sheet` varchar(35) NOT NULL,
  `tanggal_test` varchar(35) NOT NULL,
  `level_awal` varchar(35) NOT NULL,
  `grup` varchar(35) NOT NULL,
  `nilai` varchar(35) NOT NULL,
  `dari` varchar(35) NOT NULL,
  `waktu` varchar(35) NOT NULL,
  `darimenit` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilaicoba`
--

INSERT INTO `data_nilaicoba` (`id_nilaicoba`, `id_coba`, `tipe_test`, `levell`, `level`, `sheet`, `tanggal_test`, `level_awal`, `grup`, `nilai`, `dari`, `waktu`, `darimenit`) VALUES
(5, 6, 'DT', '7A', '7A', '33', 'Pilih Tanggal Test', '', 'Pilih', '', '', '', ''),
(6, 6, 'DT', '7A', '7A', '22', 'Pilih Tanggal Test', '', 'Pilih', '', '', '', ''),
(7, 7, 'DT', '7A', '7A', '44', 'Pilih Tanggal Test', '', 'Pilih', '', '', '', ''),
(8, 6, 'DT', '7A', '7A', '46', 'Pilih Tanggal Test', '', 'Pilih', '', '', '', ''),
(9, 7, 'DT', '7A', '7A', '', 'Pilih Tanggal Test', '', 'Pilih', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilaicoba2`
--

CREATE TABLE `data_nilaicoba2` (
  `id_nilaicoba2` int(35) NOT NULL,
  `id_coba2` int(35) NOT NULL,
  `tipe_test` varchar(35) NOT NULL,
  `levell` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `sheet` varchar(35) NOT NULL,
  `tanggal_test` varchar(35) NOT NULL,
  `level_awal` varchar(35) NOT NULL,
  `grup` varchar(35) NOT NULL,
  `nilai` varchar(35) NOT NULL,
  `dari` varchar(35) NOT NULL,
  `waktu` varchar(35) NOT NULL,
  `darimenit` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilaicoba2`
--

INSERT INTO `data_nilaicoba2` (`id_nilaicoba2`, `id_coba2`, `tipe_test`, `levell`, `level`, `sheet`, `tanggal_test`, `level_awal`, `grup`, `nilai`, `dari`, `waktu`, `darimenit`) VALUES
(2, 1, 'DT', '7A', '7A', '55', 'Pilih Tanggal Test', '5A', 'Pilih', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemb`
--

CREATE TABLE `data_pemb` (
  `id_asisten` int(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `bidang` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pemb`
--

INSERT INTO `data_pemb` (`id_asisten`, `nama`, `bidang`, `tanggal_masuk`, `tanggal_lahir`, `no_hp`) VALUES
(1, 'Edwira Rizki Nasution', 'Matematika', '2018-02-02', '2018-02-08', '08080808'),
(2, 'Jasnica Huang', 'Matematika', '2018-02-02', '2018-02-07', '089899778');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemb2`
--

CREATE TABLE `data_pemb2` (
  `id_assist` int(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `bidang` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(35) NOT NULL,
  `no_hp` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pemb2`
--

INSERT INTO `data_pemb2` (`id_assist`, `nama`, `bidang`, `tanggal_masuk`, `tanggal_lahir`, `no_hp`) VALUES
(1, 'Dewi Rahmawati', 'English', '2018-Feb-02', '2018-02-08', 34353535),
(2, 'Trisna', 'English', '2018-Feb-02', '2018-02-24', 56545645);

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `level` varchar(5) NOT NULL,
  `Orang_tua` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `subject_mp` varchar(35) NOT NULL,
  `status_sertifikat` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(35) NOT NULL,
  `level_awal` varchar(30) NOT NULL,
  `level_target` varchar(30) NOT NULL,
  `nilailevel` int(11) NOT NULL,
  `nilaileveltarget` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama`, `kelas`, `level`, `Orang_tua`, `no_hp`, `subject_mp`, `status_sertifikat`, `tanggal_masuk`, `tanggal_lahir`, `level_awal`, `level_target`, `nilailevel`, `nilaileveltarget`, `status`) VALUES
(55, 'Ika Suhasmi', '1 SD', 'B', 'aaaa', '081276809835', 'Matematika', 'Belum terima', '2018-Feb-03', '2018-02-14', 'A', 'A', 2, 0, ''),
(56, 'Nur Suciyana', 'TK A', '5A', 'fasas', '353535', 'Matematika', 'Belum terima', '2018-Feb-03', '2018-02-07', '7A', '7A', 0, 0, ''),
(57, 'Annisa Mayasari', 'TK A', '5A', 'cgffh', '756756567', 'Matematika', 'Belum terima', '2018-Feb-03', '2018-02-13', 'B', 'B', 2, 0, ''),
(58, 'Iqbal Mahatma Putra', '2 SD', '3A', 'adsad', '46456', 'Matematika', 'Belum terima', '2018-Feb-03', '2018-02-04', '4A', '4A', 4, 0, ''),
(59, 'Aisha Kanya ', '1 SMP', '3A', 'Faheema', '081268579409', 'Matematika', 'Sudah terima', '2015-09-11', '2018-08-04', '6A', '6A', 0, 0, ''),
(60, 'Dira Dwi', '1 SD', '2A', 'Amugrah', '081254675488', 'Matematika', 'Belum terima', '2018-Aug-03', '2010-11-03', '6A', '6A', 0, 0, ''),
(61, 'Haura', '1 SD', 'B', 'Meirisanda', '085237473835', 'Matematika', 'Belum terima', '2017-01-16', '2010-05-13', '6A', '6A', 0, 0, ''),
(62, 'Keysha Aqila', '1 SD', '5A', 'Fadhlan', '081256864354', 'Matematika', 'Belum terima', '2017-01-13', 'Pilih Tanggal Lahir', '5A', '5A', 0, 0, ''),
(63, 'Mirwan', 'TK A', '7A', '', '092621533275', 'Matematika', 'Belum terima', '2018-Aug-10', 'Pilih Tanggal Lahir', '7A', '6A', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa3`
--

CREATE TABLE `data_siswa3` (
  `id_siswagabung` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `tingkatan` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `orang_tua` varchar(35) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `subject_mp` varchar(35) NOT NULL,
  `sertifikat_math` varchar(35) NOT NULL,
  `sertifikat_eng` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa3`
--

INSERT INTO `data_siswa3` (`id_siswagabung`, `nama`, `kelas`, `tingkatan`, `level`, `orang_tua`, `no_hp`, `subject_mp`, `sertifikat_math`, `sertifikat_eng`) VALUES
(3, 'cihuy', '2', 'TK', 'A', 'aaa', 32342343, 'MathEnglish', 'Belum Terima', 'Belum Terima');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswaenglish`
--

CREATE TABLE `data_siswaenglish` (
  `id_siswaenglish` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `tingkatan` varchar(35) NOT NULL,
  `level_awal` varchar(35) NOT NULL,
  `level` varchar(35) NOT NULL,
  `orang_tua` varchar(35) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `subject_mp` varchar(35) NOT NULL,
  `status_sertifikat` varchar(35) NOT NULL,
  `tanggal_masuk` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswaenglish`
--

INSERT INTO `data_siswaenglish` (`id_siswaenglish`, `nama`, `kelas`, `tingkatan`, `level_awal`, `level`, `orang_tua`, `no_hp`, `subject_mp`, `status_sertifikat`, `tanggal_masuk`, `tanggal_lahir`) VALUES
(13, 'Iqbal Mahatma Putra', '2 SD', '', 'B', 'D', 'iqbal', 808088, 'English', 'Belum Terima', '2018-Feb-01', '2018-02-09'),
(14, 'Nur Suciyana', '1 SMP', '', 'A', 'M', 'inun', 9090909, 'English', 'Belum Terima', '2018-Feb-02', 'Pilih Tanggal Lahir'),
(15, 'Nana', '2 SD', '', '5A', 'E', 'aaaa', 55555, 'English', 'Belum Terima', '2018-Feb-04', '2018-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `fcm_info`
--

CREATE TABLE `fcm_info` (
  `fcm_token` varchar(400) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `id` int(35) NOT NULL,
  `id_siswa` int(35) DEFAULT NULL,
  `id_siswaenglish` int(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fcm_info`
--

INSERT INTO `fcm_info` (`fcm_token`, `nama`, `pass`, `id`, `id_siswa`, `id_siswaenglish`) VALUES
('c28z7_1Gz14:APA91bGR1HWLCvpf_TMj9C1CUwP7wOmS8KzpVt-l4IUgfuE7zag_qSAmN20DDm8WZtY4hCwuMsjF8Wj84Un5K8JYVure1z1jpjEgCihsLCJCbpglw-sv_jr_BvrzhXA_B0i8mUz3su0I', 'ika', 'ika', 46, 55, 0),
('dHqNywH6EF8:APA91bGx2O1D1GF72_KewzClJDAYVVG5MyqD0n-UnqxL0jVoJGYrLCCATbJbLjdu-B9LMu-bO7cd4bGgdLrsc6IU6TS1vz8lhRVStZC5iQfIGPmpcH77pq8lG54gs-TCUaDtKdzKo40R', 'iqbal', 'iqbal', 57, 58, 0),
('dHqNywH6EF8:APA91bGx2O1D1GF72_KewzClJDAYVVG5MyqD0n-UnqxL0jVoJGYrLCCATbJbLjdu-B9LMu-bO7cd4bGgdLrsc6IU6TS1vz8lhRVStZC5iQfIGPmpcH77pq8lG54gs-TCUaDtKdzKo40R', 'suci', 'suci', 58, 56, 0),
('c28z7_1Gz14:APA91bGR1HWLCvpf_TMj9C1CUwP7wOmS8KzpVt-l4IUgfuE7zag_qSAmN20DDm8WZtY4hCwuMsjF8Wj84Un5K8JYVure1z1jpjEgCihsLCJCbpglw-sv_jr_BvrzhXA_B0i8mUz3su0I', 'suci', 'suci', 59, 56, 0),
('c28z7_1Gz14:APA91bGR1HWLCvpf_TMj9C1CUwP7wOmS8KzpVt-l4IUgfuE7zag_qSAmN20DDm8WZtY4hCwuMsjF8Wj84Un5K8JYVure1z1jpjEgCihsLCJCbpglw-sv_jr_BvrzhXA_B0i8mUz3su0I', 'nana', 'nana', 60, 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_siswa` int(11) DEFAULT NULL,
  `id_siswaenglish` int(11) DEFAULT NULL,
  `id_siswagabung` int(11) DEFAULT NULL,
  `bulan` int(5) NOT NULL,
  `bulan_pembayaran` varchar(35) NOT NULL,
  `tunai` int(10) NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_siswa`, `id_siswaenglish`, `id_siswagabung`, `bulan`, `bulan_pembayaran`, `tunai`, `status_pembayaran`, `id_spp`) VALUES
(57, NULL, NULL, 2, '03-02-18', 320000, 'Lunas', 3),
(55, NULL, NULL, 2, '04-02-18', 320000, 'Lunas', 4),
(55, NULL, NULL, 2, '05-02-18', 320000, 'Lunas', 5),
(55, NULL, NULL, 3, '05-02-18', 320000, 'Lunas', 6),
(55, NULL, NULL, 3, '05-02-18', 320000, 'Lunas', 7),
(55, NULL, NULL, 1, '05-02-18', 320000, 'Lunas', 8),
(58, NULL, NULL, 1, '05-02-18', 320000, 'Lunas', 9),
(55, NULL, NULL, 2, '06-02-18', 320000, 'Lunas', 10),
(55, NULL, NULL, 1, '17-02-18', 320000, 'Lunas', 11),
(57, NULL, NULL, 1, '17-02-18', 320000, 'Lunas', 12);

-- --------------------------------------------------------

--
-- Table structure for table `spp2`
--

CREATE TABLE `spp2` (
  `id_siswa` int(11) DEFAULT NULL,
  `id_siswaenglish` int(11) DEFAULT NULL,
  `id_siswagabung` int(11) DEFAULT NULL,
  `bulan` varchar(35) NOT NULL,
  `bulan_pembayaran` varchar(35) NOT NULL,
  `tunai` varchar(35) NOT NULL,
  `status_pembayaran` varchar(35) NOT NULL,
  `id_spp2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp2`
--

INSERT INTO `spp2` (`id_siswa`, `id_siswaenglish`, `id_siswagabung`, `bulan`, `bulan_pembayaran`, `tunai`, `status_pembayaran`, `id_spp2`) VALUES
(NULL, 13, NULL, '3', '05-02-18', '320000', 'Lunas', 1),
(NULL, 13, NULL, '1', '05-02-18', '320000', 'Lunas', 2),
(NULL, 15, NULL, '2', '13-02-18', '320000', 'Lunas', 3),
(NULL, 15, NULL, '1', '13-02-18', '320000', 'Lunas', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_asisten` (`id_asisten`),
  ADD KEY `id_assist` (`id_assist`);

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id_absensis`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_siswaenglish` (`id_siswaenglish`),
  ADD KEY `id_siswagabung` (`id_siswagabung`);

--
-- Indexes for table `absen_coba`
--
ALTER TABLE `absen_coba`
  ADD PRIMARY KEY (`id_absencoba`),
  ADD KEY `id_coba` (`id_coba`),
  ADD KEY `id_coba2` (`id_coba2`);

--
-- Indexes for table `asisten_pembimbing`
--
ALTER TABLE `asisten_pembimbing`
  ADD PRIMARY KEY (`id_asisten`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id_coba`);

--
-- Indexes for table `coba2`
--
ALTER TABLE `coba2`
  ADD PRIMARY KEY (`id_coba2`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `data_nilai2`
--
ALTER TABLE `data_nilai2`
  ADD PRIMARY KEY (`id_nilai2`),
  ADD KEY `id_siswa` (`id_siswaenglish`);

--
-- Indexes for table `data_nilaicoba`
--
ALTER TABLE `data_nilaicoba`
  ADD PRIMARY KEY (`id_nilaicoba`),
  ADD KEY `id_coba` (`id_coba`);

--
-- Indexes for table `data_nilaicoba2`
--
ALTER TABLE `data_nilaicoba2`
  ADD PRIMARY KEY (`id_nilaicoba2`),
  ADD KEY `id_coba2` (`id_coba2`);

--
-- Indexes for table `data_pemb`
--
ALTER TABLE `data_pemb`
  ADD PRIMARY KEY (`id_asisten`);

--
-- Indexes for table `data_pemb2`
--
ALTER TABLE `data_pemb2`
  ADD PRIMARY KEY (`id_assist`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `data_siswa3`
--
ALTER TABLE `data_siswa3`
  ADD PRIMARY KEY (`id_siswagabung`);

--
-- Indexes for table `data_siswaenglish`
--
ALTER TABLE `data_siswaenglish`
  ADD PRIMARY KEY (`id_siswaenglish`);

--
-- Indexes for table `fcm_info`
--
ALTER TABLE `fcm_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_siswaenglish` (`id_siswaenglish`),
  ADD KEY `id_siswagabung` (`id_siswagabung`);

--
-- Indexes for table `spp2`
--
ALTER TABLE `spp2`
  ADD PRIMARY KEY (`id_spp2`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_siswaenglish` (`id_siswaenglish`),
  ADD KEY `id_siswagabung` (`id_siswagabung`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id_absensis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `absen_coba`
--
ALTER TABLE `absen_coba`
  MODIFY `id_absencoba` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `asisten_pembimbing`
--
ALTER TABLE `asisten_pembimbing`
  MODIFY `id_asisten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id_coba` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `coba2`
--
ALTER TABLE `coba2`
  MODIFY `id_coba2` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id_nilai` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `data_nilai2`
--
ALTER TABLE `data_nilai2`
  MODIFY `id_nilai2` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_nilaicoba`
--
ALTER TABLE `data_nilaicoba`
  MODIFY `id_nilaicoba` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_nilaicoba2`
--
ALTER TABLE `data_nilaicoba2`
  MODIFY `id_nilaicoba2` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_pemb`
--
ALTER TABLE `data_pemb`
  MODIFY `id_asisten` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_pemb2`
--
ALTER TABLE `data_pemb2`
  MODIFY `id_assist` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `data_siswa3`
--
ALTER TABLE `data_siswa3`
  MODIFY `id_siswagabung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_siswaenglish`
--
ALTER TABLE `data_siswaenglish`
  MODIFY `id_siswaenglish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `fcm_info`
--
ALTER TABLE `fcm_info`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `spp2`
--
ALTER TABLE `spp2`
  MODIFY `id_spp2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(35) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `absensis_ibfk_2` FOREIGN KEY (`id_siswaenglish`) REFERENCES `data_siswaenglish` (`id_siswaenglish`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `absensis_ibfk_3` FOREIGN KEY (`id_siswagabung`) REFERENCES `data_siswa3` (`id_siswagabung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD CONSTRAINT `data_nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spp_ibfk_2` FOREIGN KEY (`id_siswagabung`) REFERENCES `data_siswa3` (`id_siswagabung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spp_ibfk_3` FOREIGN KEY (`id_siswaenglish`) REFERENCES `data_siswaenglish` (`id_siswaenglish`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
