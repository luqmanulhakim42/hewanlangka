-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table hewanlangka_db.tbl_animal
CREATE TABLE IF NOT EXISTS `tbl_animal` (
  `animal_id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_name` varchar(50) DEFAULT NULL,
  `animal_habitat` text DEFAULT NULL,
  `animal_feature` text DEFAULT NULL,
  `animal_characteristic` text DEFAULT NULL,
  `animal_type` varchar(50) DEFAULT NULL,
  `animal_food` text DEFAULT NULL,
  `animal_picture` text DEFAULT NULL,
  `animal_createdby` int(11) DEFAULT 0,
  `animal_createdts` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`animal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hewanlangka_db.tbl_animal: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_animal` DISABLE KEYS */;
INSERT INTO `tbl_animal` (`animal_id`, `animal_name`, `animal_habitat`, `animal_feature`, `animal_characteristic`, `animal_type`, `animal_food`, `animal_picture`, `animal_createdby`, `animal_createdts`) VALUES
	(2, 'Cendrawasih', 'Papua', 'Memiliki bulu yang panjang dan berwarna-warni\r\nMemiliki paruh yang melengkung\r\nBerukuran dari 15 cm (Cenderawasih raja) hingga 110 cm (Cenderawasih paruh-sabit hitam)\r\nDapat ditemukan di Pulau Papua dan pulau kecil sekitarnya\r\nMengalami dimorfik seksual (bentuk tubuh jantan dan betina berbeda)', 'Karakteristik utama burung ini adalah warna bulunya yang cerah dan menarik perhatian seperti kuning, hijau, merah, dan biru', 'Burung', 'Buah-buahan dan Artropod', 'http://localhost/hewanlangka/includes/images/hewan/cendrawasih._1671023385.jpg', 1, '2022-12-14 20:07:03'),
	(3, 'Komodo', 'Pulau Komodo, Pulau Rinca, Pulau Gili Motang dan s', 'Komodo memiliki lidah yang panjang, berwarna kuning dan bercabang. Komodo jantan ukurannya lebih besar dari pada betina', 'Komodo memiliki lidah yang panjang, berwarna kuning dan bercabang. Komodo jantan ukurannya lebih besar dari pada betina. Dengan warna kulit dari abu-abu gelap hingga merah, sesaat komodo betina memiliki warna lebih hijau. Komodo muda lebih berwarna kuning, hijau dan putih pada latar belakang hitam', 'Reptil', 'Babi, Anjing, Kambing, Rusa, Kuda, dan Kerbau', 'http://localhost/hewanlangka/includes/images/hewan/komodo._1671027400.png', 1, '2022-12-14 21:16:40');
/*!40000 ALTER TABLE `tbl_animal` ENABLE KEYS */;

-- Dumping structure for table hewanlangka_db.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_role` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table hewanlangka_db.tbl_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `user_role`, `user_status`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
