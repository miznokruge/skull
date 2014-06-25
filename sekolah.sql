-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2014 at 05:01 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` char(200) NOT NULL,
  `nama` char(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `kode`, `nama`) VALUES
(1, 'mtk300111', 'matematika3'),
(2, 'fis3001', 'FIsika3'),
(3, 'SEJ001', 'sejaran 3'),
(4, 'OR2', 'olahraga kelas 3'),
(5, '3454354', 'dfgfdgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `nilai` float(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `siswa_id`, `mapel_id`, `semester_id`, `nilai`) VALUES
(1, 1, 1, 1, 90.00),
(2, 1, 2, 1, 80.50),
(3, 2, 1, 1, 95.60),
(4, 2, 2, 1, 50.00),
(5, 2, 3, 1, 98.00),
(6, 1, 1, 1, 78.00);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` int(6) NOT NULL,
  `tahun` int(4) NOT NULL,
  `semester` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `kode`, `tahun`, `semester`) VALUES
(1, 201401, 2014, 1),
(2, 201402, 2014, 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` char(20) NOT NULL,
  `nama` char(200) NOT NULL,
  `alamat` char(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL DEFAULT 'L',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `alamat`, `tanggal_lahir`, `jenis_kelamin`) VALUES
(1, '09001212', 'eko', 'cikupa', '2013-01-14', 'L'),
(2, '90832884', 'edi', 'cikoneng', '2013-08-12', 'L');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vnilai`
--
CREATE TABLE IF NOT EXISTS `vnilai` (
`nis` char(20)
,`nama_siswa` char(200)
,`kode_semester` int(6)
,`kode` char(200)
,`nama_mata_pelajaran` char(200)
,`nilai` float(10,2)
);
-- --------------------------------------------------------

--
-- Structure for view `vnilai`
--
DROP TABLE IF EXISTS `vnilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnilai` AS select `siswa`.`nis` AS `nis`,`siswa`.`nama` AS `nama_siswa`,`semester`.`kode` AS `kode_semester`,`mapel`.`kode` AS `kode`,`mapel`.`nama` AS `nama_mata_pelajaran`,`nilai`.`nilai` AS `nilai` from (((`siswa` join `nilai` on((`siswa`.`id` = `nilai`.`siswa_id`))) join `mapel` on((`mapel`.`id` = `nilai`.`mapel_id`))) join `semester` on((`semester`.`id` = `nilai`.`semester_id`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
