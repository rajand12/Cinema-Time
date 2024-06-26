-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: cinema_time
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `movies_details`
--

DROP TABLE IF EXISTS `movies_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `release` date NOT NULL,
  `cast` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `movie_thumbnail` text NOT NULL,
  `movie_path` varchar(255) NOT NULL,
  `rent_price` int(11) NOT NULL,
  `buy_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_details`
--

LOCK TABLES `movies_details` WRITE;
/*!40000 ALTER TABLE `movies_details` DISABLE KEYS */;
INSERT INTO `movies_details` VALUES (7,'Good Will Hunting','United States','1998-01-09','Robin Williams, Ben Affleck, Matt Damon','Is this value updating or not.','../Posters/good will hunting.jpg','../Movies/random-video.mp4',5000,6000),(8,'Home Alone','United States','1990-11-16','Macaulay Culkin, Joe Pesci, Daniel Stern','Hello ','../Posters/home alone.jpg','../Movies/random-video.mp4',50,200),(9,'I, Robot','Germany','2004-07-16','Will Smith, Bridget Moynahan, Bruce Greenwood','Hello ','../Posters/i robot.jpg','../Movies/random-video.mp4',100,450),(10,'Jaws','United States','1975-06-20','Richard Dreyfuss, Murray Hamilton, Lorraine Gary, Roy Scheider, Robert Shaw, Carl Gottlieb, Jeffrey Kramer, Susan BacklinieRobin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/jaws.jpg','../Movies/random-video.mp4',100,200),(11,'Kill Bill: Vol. 1','Hong Kong','2003-10-10','Daryl Hannah, David Carradine, Uma Thurman','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/kill bill.jpeg','../Movies/random-video.mp4',200,400),(12,'Lagaan','India','2001-06-15','Aamir Khan, Gracy Singh','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/lagaan.jpg','../Movies/random-video.mp4',300,400),(13,'Mad Max: Fury Road','Australia','2015-05-07','Robin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/mad max.jpg','../Movies/random-video.mp4',300,500),(15,'Once Upon a Time... in Hollywood','United Kingdom','2019-05-21','Robin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/once upon a time.jpg','../Movies/random-video.mp4',500,900),(16,'Peter Pan','United States','1953-02-05','Kathryn Beaumont, Bobby Driscoll, Hans Conried','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/peter pan.jpg','../Movies/random-video.mp4',400,700),(17,'Queen Christina','United States','1933-12-26','Robin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/queen christina.jpg','../Movies/random-video.mp4',20,50),(18,'R-Point','South Korea','2004-08-13','Robin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/r point.jpg','../Movies/random-video.mp4',300,500),(19,'Se7en','United States','1995-09-22','Morgan Freeman, Kevin Spacey, Brad Pitt','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/se7en.jpg','../Movies/random-video.mp4',500,700),(20,'Train to Busan','South Korea','2016-05-13','Robin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/train to busan.jpg','../Movies/random-video.mp4',400,500),(21,'Unstoppable','South Korea','2018-11-22','Don Lee','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/unstoppable.jpg','../Movies/random-video.mp4',300,400),(22,'V For Vendetta','United Kingdom','2006-03-17','Hugo Weaving, Natalie Portman, Rupert Graves','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/v.jpg','../Movies/random-video.mp4',300,600),(23,'Willy Wonka & The Chocolate Factory','United States','1971-06-30','Gene Wilder, Jack Albertson, Peter Ostrum','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/willy wonka.jpg','../Movies/random-video.mp4',200,300),(25,'Your Name.','Japan','2016-07-03','Robin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/your name.jpg','../Movies/random-video.mp4',500,1000),(26,'Z','France','1969-12-08','Robin Williams, Ben Affleck, Matt Damon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','../Posters/z.jpg','../Movies/random-video.mp4',300,500);
/*!40000 ALTER TABLE `movies_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (3,'Rajan Dotel','rajan.dotel11@gmail.com','rajandotel','$2y$10$B3nsqiSH785LNd0cF9o8x.w.atWvVbt0LtQhdvdLedraJCsRrhlIO',0),(4,'Anil Maharjan','anilmaharjan995@gmail.com','anilmaharjan','$2y$10$MFSyQIXWVn0gf8/ezS8S8e.uycMHD1kDslg2zBf6FfByMollMbek.',1),(6,'Karuna Dotel','karuna.dotel123@gmail.com','karunadotel','$2y$10$cJjLBOinipeVtzoJoAVnXuxVkOcjXL9dHhaoPBUhb6JJU4nAzdIpu',0),(10,'Subin Dhakal','subindhakal999@gmail.com','subindhakal','$2y$10$tlvRz7ehXNlGCze1oT.Wb.RKR9YTNEljjcjfvEDmSnofvjPFYEfky',0),(11,'Rohil Prajapati','rohilprajapati@gmail.com','rohilprajapati','$2y$10$T220ZjwoW6Doh/LfHaCN4.GrbbgWcUL7EAh8JW.4xrNG1LI.a.Tgi',0);
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-03 15:55:31
