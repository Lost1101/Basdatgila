-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: database
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_admin`
--

DROP TABLE IF EXISTS `data_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_admin` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `img` varchar(30) NOT NULL,
  `komen` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_admin`
--

LOCK TABLES `data_admin` WRITE;
/*!40000 ALTER TABLE `data_admin` DISABLE KEYS */;
INSERT INTO `data_admin` VALUES ('infor21','matika21','default_img.jpeg','Satu Ideologi Satu Solidaritas'),('lost11','klajik1010','default_img.jpeg','Hanyalah manusia biasa'),('unsil1','11111','default_img.jpeg','Universitas Siliwangi'),('youpie','halo12321','default_img.jpeg','Semangat seperti Spongebob'),('zebr111','zeb333zeb','default_img.jpeg','Indahnya dunia');
/*!40000 ALTER TABLE `data_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_ktp`
--

DROP TABLE IF EXISTS `data_ktp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_ktp` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `NIK` char(16) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `TTL` varchar(30) NOT NULL,
  `jns_klmn` varchar(9) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kotaorkab` varchar(20) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sts_kawin` varchar(11) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `golDar` varchar(2) DEFAULT NULL,
  `img` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_ktp`
--

LOCK TABLES `data_ktp` WRITE;
/*!40000 ALTER TABLE `data_ktp` DISABLE KEYS */;
INSERT INTO `data_ktp` VALUES (1,'0000000217006082','Kamilah Insani','Tasikmalaya, 12-06-2002','Perempuan','JL. Cibaregbeg No.5 RT/RW. 888/888','Indihiang','Kota Tasikmalaya','Jawa Barat','Islam','Belum','Pelajar','WNI','A','default_img.jpeg'),(2,'0000000217006081','Yovie Pradea Sandiana','Tasikmalaya, 25-08-2002','Laki-Laki','JL. KHZ Musthafa No.9 RT/RW. 777/777','Mangkubumi','Kab. Tasikmalaya','Jawa Barat','Islam','Belum','Pelajar','WNI','AB','default_img.jpeg'),(3,'0000000217006093','Zebryan Alika A Muhamad','Tasikmalaya, 07-02-2002','Laki-Laki','JL. Raya Timur No.12 RT/RW. 222/222','Cihideung','Kota Tasikmalaya','Jawa Barat','Islam','Belum','Pelajar','WNI','O','default_img.jpeg'),(4,'8877665544332211','Agung Setiaji','Depok, 11-12-1997','Laki-Laki','Cibaduyut No.7 RT/RW. 123/123','Bojongloa Kidul','Kota Bandung','Jawa Barat','Budha','Belum','Wiraswasta','WNI','AB','default_img.jpeg'),(5,'9988776655443322','Fatimah Indah','Malang, 27-1-2000','Perempuan','JL. Raya Barat No.22 RT/RW 234/234','Singaparna','Kab. Tasikmalaya','Jawa Barat','Islam','Belum','Pelajar','WNI','B','default_img.jpeg');
/*!40000 ALTER TABLE `data_ktp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_votepres`
--

DROP TABLE IF EXISTS `data_votepres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_votepres` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `NIK` char(16) NOT NULL,
  `date_create` int(11) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_votepres`
--

LOCK TABLES `data_votepres` WRITE;
/*!40000 ALTER TABLE `data_votepres` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_votepres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jumlah_votepres`
--

DROP TABLE IF EXISTS `jumlah_votepres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jumlah_votepres` (
  `id_opsi` int(6) NOT NULL,
  `id_vote` int(30) NOT NULL AUTO_INCREMENT,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_vote`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jumlah_votepres`
--

LOCK TABLES `jumlah_votepres` WRITE;
/*!40000 ALTER TABLE `jumlah_votepres` DISABLE KEYS */;
/*!40000 ALTER TABLE `jumlah_votepres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `presiden`
--

DROP TABLE IF EXISTS `presiden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `presiden` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `id_opsi` int(6) NOT NULL,
  `nama_pres` varchar(30) NOT NULL,
  `nama_wapres` varchar(30) NOT NULL,
  `partai` char(30) NOT NULL,
  `img` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `presiden`
--

LOCK TABLES `presiden` WRITE;
/*!40000 ALTER TABLE `presiden` DISABLE KEYS */;
INSERT INTO `presiden` VALUES (1,202401,'Indra Kusuma Atmaja','Setiana Bagus Permata','PDI Perjuangan','default_img.jpeg'),(2,202402,'Krisna Jaya Wijaya','Indah Suhidah','Golkar','default_img.jpeg');
/*!40000 ALTER TABLE `presiden` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-26 19:31:06
