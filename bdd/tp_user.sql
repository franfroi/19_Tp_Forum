-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tp
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `user_admin` varchar(255) DEFAULT NULL,
  `user_user` varchar(255) DEFAULT NULL,
  `uPassword` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `datecreate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'francois','oui','non','1234','fccebrian@gmail.com',NULL,'0000-00-00 00:00:00'),(2,'joselegrand','non','oui','12345678','fdd@gd.fr','',NULL),(3,'joselegrand2','non','oui','11111111','fdd@gd.fr1','','2017-07-11 12:04:14'),(4,'joselegrand2','non','oui','11111111','fdd@gd.fr','','2017-07-11 12:04:28'),(5,'joselegrand2','non','oui','11111111','fdd@gd.fr','','2017-07-11 12:06:14'),(6,'joselegrand4','non','oui','11111111','fdd@gd.cl','','2017-07-11 12:22:21'),(7,'joselegrand5','non','oui','12312312','fdd@gd.cp','','2017-07-11 12:23:21'),(8,'joselegrand5','non','oui','12312312','fdd@gd.cp','','2017-07-11 12:31:19'),(9,'joselegrand6','non','oui','11111111','fdd@gr.fr','','2017-07-11 12:31:41'),(10,'joselegrand6','non','oui','12345678','fdd@fr.fr','','2017-07-11 12:32:18'),(11,'joselegrand6','non','oui','mmmmmmmm','fdd@fr.fr','','2017-07-11 12:33:36'),(12,'joselegrand6','non','oui','55555555','fdd@fr.fr','','2017-07-11 12:34:38'),(13,'joselegrand6','non','oui','hhhhhhhh','fdd@fr.com','','2017-07-11 12:44:14'),(14,'joselegrand6','non','oui','12312312','fff@gg.fr','','2017-07-11 12:45:42'),(15,'joselegrand6','non','oui','1','fff@gg.fr','','2017-07-11 12:48:55'),(16,'joselegrand6','non','oui','12','fff@gg.fr','','2017-07-11 12:49:24'),(17,'joselegr','non','oui','1','fff@gg.fr','','2017-07-11 13:05:04'),(18,'1','non','oui','1','fff@gg.fr','','2017-07-11 13:32:03'),(19,'12345687','non','oui','1','fff@gg.fr','','2017-07-11 13:33:36'),(20,'12356548','non','oui','111111111','fff@gg.fr','','2017-07-11 13:43:22'),(21,'12356548jhzfedoirgejsgh','non','oui','111111111','fff@gg.fr','','2017-07-11 13:44:17'),(22,'12356548jhzfedoirgejsgh','non','oui','111111111','fff@gg.fr','','2017-07-11 13:45:21'),(23,'121111111111111','non','oui','111111','fff@gg.fr','','2017-07-11 13:46:29'),(24,'556565rr','non','oui','11111111','ffg@hg.fr','','2017-07-11 13:54:00'),(25,'hghg11111','non','oui','11111111','ffg@hg4.fr','','2017-07-11 13:55:41'),(26,'albertlepetit','non','oui','11111111','fc@fc.fr','','2017-07-11 14:27:12');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-11 17:05:32
