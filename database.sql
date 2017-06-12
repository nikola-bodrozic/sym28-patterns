-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table uzorsym28.tdk_chkbox
CREATE TABLE IF NOT EXISTS `tdk_chkbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prvi` tinyint(1) NOT NULL,
  `drugi` tinyint(1) NOT NULL,
  `isAttending` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table uzorsym28.tdk_chkbox: ~0 rows (approximately)
/*!40000 ALTER TABLE `tdk_chkbox` DISABLE KEYS */;
INSERT INTO `tdk_chkbox` (`id`, `ime`, `prvi`, `drugi`, `isAttending`) VALUES
	(1, 'pera', 1, 0, 'true');
/*!40000 ALTER TABLE `tdk_chkbox` ENABLE KEYS */;


-- Dumping structure for table uzorsym28.tdk_soba
CREATE TABLE IF NOT EXISTS `tdk_soba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zgrada_id` int(11) DEFAULT NULL,
  `imesobe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BDCE54F297DDB473` (`zgrada_id`),
  CONSTRAINT `FK_BDCE54F297DDB473` FOREIGN KEY (`zgrada_id`) REFERENCES `tdk_zgrada` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table uzorsym28.tdk_soba: ~0 rows (approximately)
/*!40000 ALTER TABLE `tdk_soba` DISABLE KEYS */;
INSERT INTO `tdk_soba` (`id`, `zgrada_id`, `imesobe`) VALUES
	(1, 2, 'tertert');
/*!40000 ALTER TABLE `tdk_soba` ENABLE KEYS */;


-- Dumping structure for table uzorsym28.tdk_task
CREATE TABLE IF NOT EXISTS `tdk_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dueDate` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table uzorsym28.tdk_task: ~4 rows (approximately)
/*!40000 ALTER TABLE `tdk_task` DISABLE KEYS */;
INSERT INTO `tdk_task` (`id`, `task`, `dueDate`, `dateUpdated`) VALUES
	(1, 'pravi', '2013-01-01 00:04:00', '0000-00-00 00:00:00'),
	(2, 'jos jedan', '2018-01-01 00:00:00', '0000-00-00 00:00:00'),
	(3, 'jos jedan', '2018-01-01 00:00:00', '0000-00-00 00:00:00'),
	(4, 'prvi', '2011-01-01 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tdk_task` ENABLE KEYS */;


-- Dumping structure for table uzorsym28.tdk_zgrada
CREATE TABLE IF NOT EXISTS `tdk_zgrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table uzorsym28.tdk_zgrada: ~2 rows (approximately)
/*!40000 ALTER TABLE `tdk_zgrada` DISABLE KEYS */;
INSERT INTO `tdk_zgrada` (`id`, `ime`) VALUES
	(1, 'petronas'),
	(2, 'usce');
/*!40000 ALTER TABLE `tdk_zgrada` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
