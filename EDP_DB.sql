-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table edp_db.device
CREATE TABLE IF NOT EXISTS `device` (
  `id` int NOT NULL AUTO_INCREMENT,
  `did` varchar(45) DEFAULT NULL,
  `dname` varchar(45) DEFAULT NULL,
  `device_status_s_id` int NOT NULL,
  `sol_1` varchar(1) DEFAULT NULL,
  `sol_2` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_device_device_status_idx` (`device_status_s_id`),
  CONSTRAINT `fk_device_device_status` FOREIGN KEY (`device_status_s_id`) REFERENCES `device_status` (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table edp_db.device: ~2 rows (approximately)
INSERT INTO `device` (`id`, `did`, `dname`, `device_status_s_id`, `sol_1`, `sol_2`) VALUES
	(2, '100121', 'Device Home', 1, '1', '0'),
	(3, '13290', 'Hotel', 1, '1', '0'),
	(4, '1487', 'Room', 1, '1', '0');

-- Dumping structure for table edp_db.device_status
CREATE TABLE IF NOT EXISTS `device_status` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `s_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table edp_db.device_status: ~2 rows (approximately)
INSERT INTO `device_status` (`s_id`, `s_name`) VALUES
	(1, 'Active'),
	(2, 'Deactive');

-- Dumping structure for table edp_db.error_records
CREATE TABLE IF NOT EXISTS `error_records` (
  `e_id` int NOT NULL AUTO_INCREMENT,
  `edat` date DEFAULT NULL,
  `etime` time DEFAULT NULL,
  `edes` text,
  `device_id` int NOT NULL,
  `error_type_et_id` int NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `fk_error_records_device1_idx` (`device_id`),
  KEY `fk_error_records_error_type1_idx` (`error_type_et_id`),
  CONSTRAINT `fk_error_records_device1` FOREIGN KEY (`device_id`) REFERENCES `device` (`id`),
  CONSTRAINT `fk_error_records_error_type1` FOREIGN KEY (`error_type_et_id`) REFERENCES `error_type` (`et_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table edp_db.error_records: ~0 rows (approximately)

-- Dumping structure for table edp_db.error_type
CREATE TABLE IF NOT EXISTS `error_type` (
  `et_id` int NOT NULL AUTO_INCREMENT,
  `et_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`et_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table edp_db.error_type: ~3 rows (approximately)
INSERT INTO `error_type` (`et_id`, `et_name`) VALUES
	(1, 'Low'),
	(2, 'Medium'),
	(3, 'High');

-- Dumping structure for table edp_db.flow_records
CREATE TABLE IF NOT EXISTS `flow_records` (
  `fr_id` int NOT NULL AUTO_INCREMENT,
  `device_id` int NOT NULL,
  `rdate` date DEFAULT NULL,
  `rtime` time DEFAULT NULL,
  `des` text,
  PRIMARY KEY (`fr_id`),
  KEY `fk_flow_records_device1_idx` (`device_id`),
  CONSTRAINT `fk_flow_records_device1` FOREIGN KEY (`device_id`) REFERENCES `device` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table edp_db.flow_records: ~0 rows (approximately)

-- Dumping structure for table edp_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fnam` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table edp_db.user: ~2 rows (approximately)
INSERT INTO `user` (`id`, `fnam`, `lname`, `email`, `password`) VALUES
	(1, NULL, 'Gunawardana', 'nidulam2001@gmail.com', 'nidula123'),
	(3, NULL, 'Saran', 'kisul2221@gmail.com', 'kisul123');

-- Dumping structure for table edp_db.user_has_device
CREATE TABLE IF NOT EXISTS `user_has_device` (
  `uhd_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `device_id` int NOT NULL,
  PRIMARY KEY (`uhd_id`),
  KEY `fk_user_has_device_user1_idx` (`user_id`),
  KEY `fk_user_has_device_device1_idx` (`device_id`),
  CONSTRAINT `fk_user_has_device_device1` FOREIGN KEY (`device_id`) REFERENCES `device` (`id`),
  CONSTRAINT `fk_user_has_device_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table edp_db.user_has_device: ~2 rows (approximately)
INSERT INTO `user_has_device` (`uhd_id`, `user_id`, `device_id`) VALUES
	(2, 1, 2),
	(3, 1, 3),
	(4, 1, 4);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
