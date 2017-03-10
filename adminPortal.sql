-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: adminPortal
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applications` (
  `app_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `app_name` char(255) DEFAULT NULL,
  `vendor_name` char(255) DEFAULT NULL,
  `licence_required` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (4,'heroes3','idk',1),(5,'steam','valve',1),(13,'qewe','weqwe',1),(14,'qweqw','eqweqw',0),(15,'deqww','eqweqw',0);
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `computer_app`
--

DROP TABLE IF EXISTS `computer_app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `computer_app` (
  `computer_id` int(255) unsigned NOT NULL,
  `app_id` int(255) unsigned NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `computer_id` (`computer_id`,`app_id`),
  KEY `app_idx` (`app_id`),
  KEY `comp_idx` (`computer_id`),
  CONSTRAINT `app` FOREIGN KEY (`app_id`) REFERENCES `applications` (`app_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comp` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`computer_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computer_app`
--

LOCK TABLES `computer_app` WRITE;
/*!40000 ALTER TABLE `computer_app` DISABLE KEYS */;
INSERT INTO `computer_app` VALUES (6,4,27),(6,5,23),(6,13,24),(6,14,25),(8,14,26),(13,5,28);
/*!40000 ALTER TABLE `computer_app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `computers`
--

DROP TABLE IF EXISTS `computers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `computers` (
  `computer_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `computer_name` char(255) DEFAULT NULL,
  `ip_adress` varchar(15) DEFAULT NULL,
  `login` char(255) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  PRIMARY KEY (`computer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computers`
--

LOCK TABLES `computers` WRITE;
/*!40000 ALTER TABLE `computers` DISABLE KEYS */;
INSERT INTO `computers` VALUES (6,'Heavy-PC','192.168.1.3','Bird','5678'),(8,'qwerty-PC','255.255.255.255','qwerty','asd'),(9,'12','192.168.1.56','3423','423423'),(11,'321321','192.168.1.24','3213213','321321321'),(12,'wqewq','0.0.0.0','21321','321321'),(13,'Plain-PC','192.168.1.1','Psh','121212');
/*!40000 ALTER TABLE `computers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `comment` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '10',
  `auth_key` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Kael','$2y$13$s0cXqIEqoMAMl0GkBAPhROCiVG9.SZaP4E2kjjSWQd7t05Z2weyiK',1,'','2017-03-10 12:52:13',10,'sg33M2LzK4uuk0H5FEGAQTjmEmVIJ_Xf'),(4,'12','$2y$13$z4CCHgvDYlSuzmxmL90WbuaR.YuLPwC/25KZiWl8P5Diwnocas54y',2,'weqweqweqwe','2017-03-10 13:48:53',10,'WhW7y3Kf57b0EPRsjerCaIT2yVDegc7-'),(5,'choochoo','$2y$13$fUEPmGQqk/6W8Oy.W1G63urJ0KIieGHKz/liEs1w.ergfquo0XfWy',2,'','2017-03-10 13:10:49',10,'Tc_zM6-qJe7wZBf5goRS6RCz9hqfJDvJ'),(6,'11','$2y$13$CdHSe4xZ3/wb1EkuNSNVN.7P.YDs8U5u/VnQimUCr.b9hM0OCl/ku',1,'','2017-03-10 13:14:16',10,'RYAtud4uhj-bktRFexJUuihEsZC2KB49'),(33,'22','$2y$13$lbPWHrgPQyowkdfNFsDMS.kVjGBdBwgMWGHiAhs62OXXuyrUrlat2',1,'','2017-03-01 14:53:52',10,'2HIThLYVw2130NQVs-psRhjieotRBFEd'),(37,'test','$2y$13$x1QQqAp6Zh.TEBOMBSgCm.65rZSExqPTLCEgDNqm5YQQyfU0qS3ZC',1,'','2017-03-01 14:52:49',10,'Tq_f-ENXXXH8UfArdI8f5_b1MWGsRd7w'),(38,'222','$2y$13$8b2aZPp2AC.CElVq.GfBkOijPdcE1uPQn/6hEIrSppACw69jrAYha',1,'','2017-03-01 16:15:20',10,'JRPgnYgQ9p0fc5LtgLZWV-4OCDyVL95P'),(39,'Carp','$2y$13$36jSfCtnd46gqzXhoxYrRO5.gndMVoSlq9nL31gkC43VDp6u5T9La',2,'','2017-03-10 13:14:29',10,'ZFoPVVowSG9unSQ304bCzOYHSU6KF0Ku');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-10 17:51:34
