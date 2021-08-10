-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: recruitment_db
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

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
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `budget` bigint(20) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (21,'Clara Emad','creating logo for my startup',300,'Design & Creative','entry','week','i need someone to create a logo for my startup. i dont need it to have alot of complexity. just simple clean look will do the job.','2021-01-31 17:09:52'),(22,'Clara Emad','make some ui designs for my billboards',12000,'Design & Creative','expert','3months','i need someone who is really into design to make some creative designs for my billboards that are all over cairo city.','2021-01-31 17:14:32'),(23,'Sara Hashem','i need a graphic designer for some designs',4500,'Design & Creative','intermediate','2weeks','i need a graphic designer to create some designs for my website. the details is gonna be one the phone.','2021-01-31 17:16:13'),(24,'Yara Nasri','creating the accounting for my medical company',24000,'Finance & Accounting','expert','3months','i need an expert to be the accountant of our company. we deliver medical supplements to the doctors. and i need an accountant to set the contracts for us.','2021-01-31 17:18:19'),(25,'Tarek Mohamed','creating an e-commerce website for me',28000,'Development & IT','expert','6month','i need an expert web developer to create an E-commerce website for my clothes shop. i need it to have logging system, payment methods, pages for each product, and a cart for the users to collect what they are going to buy. details on phone.','2021-01-31 17:20:00'),(26,'Yara Nasri','Creating personal portfolio',8000,'Development & IT','intermediate','month','i need a web developer to create a personal portfolio for me as i am selling products and i want to advertise myself online.','2021-01-31 17:21:58');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (29,34752137407395545,'Mohamed','Nasr','mohamed.nasr11@gmail.com','5e1bc091728e94cf976fb93a73174812','mohamed.nasr',1045212589,'Development & IT','freelancer',0,'1612109036free-develop2.jpg','2021-01-31 16:03:56'),(30,64851656661862393,'Sara','Hashem','sara_hashem@gmail.com','5e1bc091728e94cf976fb93a73174812','Sara Hashem',1154218523,'Design & Creative','client',117,'1612109118client.jpg','2021-01-31 17:24:16'),(31,89647860,'Clara','Emad','clara-emad@gmail.com','5e1bc091728e94cf976fb93a73174812','Clara Emad',1256328954,'Development & IT','client',0,'1612109443client2.jpg','2021-01-31 16:10:43'),(32,48894970252402955,'Yara','Nasri','Yara_nasri@gmail.com','5e1bc091728e94cf976fb93a73174812','Yara Nasri',1145218745,'Finance & Accounting','client',0,'1612109510client3.jpg','2021-01-31 16:11:50'),(33,100006,'Tarek','Mohamed','tarek_mohamed@gmail.com','5e1bc091728e94cf976fb93a73174812','Tarek Mohamed',1021458763,'Design & Creative','client',0,'1612109551client4.jpg','2021-01-31 16:12:31'),(34,4039079762671,'Ahmed','Taha','Ahmed_taha@gmail.com','5e1bc091728e94cf976fb93a73174812','Ahmed Taha',1025485632,'Finance & Accounting','freelancer',0,'1612109583free-finance.jpg','2021-01-31 16:13:03'),(35,376542801676783307,'Peter','George','peter_george@gmail.com','5e1bc091728e94cf976fb93a73174812','Peter George',1523647852,'Development & IT','freelancer',0,'1612109628free-develop.jpg','2021-01-31 16:13:48'),(36,54534,'Karim','Hassan','karim_hassan@gmail.com','5e1bc091728e94cf976fb93a73174812','Karim Hassan',1024125876,'Development & IT','freelancer',0,'1612109695free-dev.jpg','2021-01-31 16:14:55'),(37,67564879,'Sherif','Mansour','sherif_mansor@gmail.com','5e1bc091728e94cf976fb93a73174812','Sherif Mansour',1254128963,'Design & Creative','freelancer',128,'1612109724free-design.jpg','2021-01-31 17:23:30'),(38,38154785827,'Akram','Shabaan','akram_shabaan@gmail.com','5e1bc091728e94cf976fb93a73174812','Akram Shabaan',1024123368,'Design & Creative','freelancer',0,'1612109772free-desi.jpg','2021-01-31 16:16:12');
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

-- Dump completed on 2021-01-31 19:28:24
