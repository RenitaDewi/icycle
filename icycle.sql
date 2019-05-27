-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.42 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for icycle
CREATE DATABASE IF NOT EXISTS `icycle` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `icycle`;


-- Dumping structure for table icycle.barangmasuk
CREATE TABLE IF NOT EXISTS `barangmasuk` (
  `id` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table icycle.barangmasuk: ~0 rows (approximately)
/*!40000 ALTER TABLE `barangmasuk` DISABLE KEYS */;
/*!40000 ALTER TABLE `barangmasuk` ENABLE KEYS */;


-- Dumping structure for table icycle.daftar
CREATE TABLE IF NOT EXISTS `daftar` (
  `idCustomer` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCustomer`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table icycle.daftar: ~5 rows (approximately)
/*!40000 ALTER TABLE `daftar` DISABLE KEYS */;
INSERT INTO `daftar` (`idCustomer`, `username`, `name`, `email`, `password`, `address`, `country`, `telp`, `level`) VALUES
	(2, 'erer', 'rizki', 'rr@gmail.com', '123456', 'lbg', 'ID', '6289', 'user'),
	(4, 'csm1', 'marwan', 'marone@gmail.com', '123456', 'bdg', 'ID', '6289', 'user'),
	(5, 'ra2', 'Rara', 'rr_aradhea@gmail.com', '1234567', 'Bandung', 'ID', '6289', 'user'),
	(6, 'daud', 'daud', 'daud@gmail.com', 'daudjava', 'bdg', 'ID', '689', 'user'),
	(7, 'admin', 'admin', 'admin@gmail.com', 'admin', NULL, NULL, NULL, 'admin');
/*!40000 ALTER TABLE `daftar` ENABLE KEYS */;


-- Dumping structure for table icycle.listkirim
CREATE TABLE IF NOT EXISTS `listkirim` (
  `noResi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tglKirim` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`noResi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table icycle.listkirim: ~0 rows (approximately)
/*!40000 ALTER TABLE `listkirim` DISABLE KEYS */;
/*!40000 ALTER TABLE `listkirim` ENABLE KEYS */;


-- Dumping structure for table icycle.listkonfirmasi
CREATE TABLE IF NOT EXISTS `listkonfirmasi` (
  `idConfirm` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idConfirm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table icycle.listkonfirmasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `listkonfirmasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `listkonfirmasi` ENABLE KEYS */;


-- Dumping structure for table icycle.listorder
CREATE TABLE IF NOT EXISTS `listorder` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,
  `tglPesan` date DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  PRIMARY KEY (`idOrder`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table icycle.listorder: ~0 rows (approximately)
/*!40000 ALTER TABLE `listorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `listorder` ENABLE KEYS */;


-- Dumping structure for table icycle.listproduk
CREATE TABLE IF NOT EXISTS `listproduk` (
  `idProduk` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `image_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table icycle.listproduk: ~22 rows (approximately)
/*!40000 ALTER TABLE `listproduk` DISABLE KEYS */;
INSERT INTO `listproduk` (`idProduk`, `nama`, `kategori`, `stock`, `harga`, `image_name`) VALUES
	('fix001m', 'Ethnicneon Trict Fixie', 'fxm', 10, 3700000, 'shoe_pic1.jpg'),
	('fix002m', 'Technosky Fixie Way', 'fxm', 8, 3650000, 'shoe_pic2.jpg'),
	('fix003m', 'Technocean Fixie Trict', 'fxm', 6, 3850000, 'shoe_pic3.jpg'),
	('fix004m', 'Ethnic Fixie Way', 'fxm', 5, 3350000, 'shoe_pic4.jpg'),
	('fix005m', 'Techmodern Fixie Way', 'fxm', 9, 3550000, 'shoe_pic5.jpg'),
	('fix006m', 'Ethnic Fixie Trict', 'fxm', 11, 3000000, 'shoe_pic6.jpg'),
	('fix001w', 'Technogothic Fixie Trict', 'fxw', 12, 3650000, 'w_pic1.jpg'),
	('fix002w', 'Ethnicsweet Fixie Way', 'fxw', 10, 3750000, 'w_pic2.jpg'),
	('fix003w', 'Ethnicsky Fixie Trict', 'fxw', 10, 3650000, 'w_pic3.jpg'),
	('fix004w', 'Technosweet Fixie Way', 'fxw', 8, 4000000, 'w_pic4.jpg'),
	('fix005w', 'Technoneon Fixie Trict', 'fxw', 8, 3450000, 'w_pic5.jpg'),
	('fix006w', 'Ethniclight Fixie Way', 'fxw', 6, 3650000, 'w_pic6.jpg'),
	('acc001v', 'Dennos Gear Velg', 'acc', 15, 1700000, 'acc1.jpg'),
	('acc002v', 'Best Velg', 'acc', 10, 1850000, 'acc2.jpg'),
	('acc001g', 'Pearl Izzumi Gloves', 'acc', 9, 250000, 'acc3.jpg'),
	('acc002g', 'Cool Cahnges Gloves', 'acc', 9, 200000, 'acc4.jpg'),
	('acc001h', 'Modern Helmet', 'acc', 8, 500000, 'acc5.jpg'),
	('acc002h', 'Simple Helmet', 'acc', 7, 500000, 'acc6.jpg'),
	('sel001', 'unisexhelmet', 'sel', 9, 250000, 'sale_pic6.jpg'),
	('sel002', 'Cool Changes Blue Gloves', 'sel', 6, 150000, 'sale_pic7.jpg'),
	('sel003', 'Gothic Fixie Way', 'sel', 4, 3600000, 'sale_pic8.jpg'),
	('sel004', 'Afternoon Fixie Way', 'sel', 3, 3450000, 'sale_pic11.jpg');
/*!40000 ALTER TABLE `listproduk` ENABLE KEYS */;


-- Dumping structure for table icycle.order_detail
CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` varchar(50) DEFAULT NULL,
  `pid` varchar(50) DEFAULT NULL,
  `q` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table icycle.order_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
