-- MySQL dump 10.17  Distrib 10.3.13-MariaDB, for Win64 (AMD64)
-- 
-- Host: localhost    Database: films
-- ------------------------------------------------------
-- Server version	10.3.13-MariaDB

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
-- Table structure for table `film_person`
--

DROP TABLE IF EXISTS `film_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film_person` (
  `film_id` int(11) NOT NULL DEFAULT 0,
  `person_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film_person`
--

LOCK TABLES `film_person` WRITE;
/*!40000 ALTER TABLE `film_person` DISABLE KEYS */;
INSERT INTO `film_person` VALUES (1,1),(1,2),(1,3),(1,13),(1,14),(1,15),(2,1),(2,2),(2,3),(2,13),(2,14),(2,15),(3,1),(3,2),(3,3),(3,13),(3,14),(3,15),(4,1),(4,2),(4,4),(4,16),(4,17),(4,18),(5,4),(5,5),(5,6),(5,16),(5,17),(5,18),(6,6),(6,7),(6,8),(6,16),(6,17),(6,18),(7,6),(7,9),(7,10),(7,19),(7,20),(8,10),(8,11),(8,12),(8,19),(8,20),(9,21),(9,23),(9,24),(9,27),(9,28),(9,29),(10,22),(10,23),(10,25),(10,27),(10,28),(10,29),(11,22),(11,23),(11,26),(11,27),(11,28),(11,29),(12,22),(12,23),(12,26),(12,27),(12,28),(12,29),(13,30),(13,31),(13,32),(13,33),(13,34),(13,35),(14,30),(14,31),(14,32),(14,33),(14,34),(14,35),(15,30),(15,31),(15,32),(15,33),(15,34),(15,35);
/*!40000 ALTER TABLE `film_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film_series`
--

DROP TABLE IF EXISTS `film_series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film_series` (
  `film_id` int(11) NOT NULL DEFAULT 0,
  `part_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film_series`
--

LOCK TABLES `film_series` WRITE;
/*!40000 ALTER TABLE `film_series` DISABLE KEYS */;
INSERT INTO `film_series` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,2),(10,2),(11,2),(12,2),(13,3),(14,3),(15,3);
/*!40000 ALTER TABLE `film_series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_name` varchar(50) NOT NULL DEFAULT '-',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'Star Wars: Episode I - The Phantom Menace'),(2,'Star Wars: Episode II - Attack of the Clones'),(3,'Star Wars: Episode III - Revenge of the Sith'),(4,'Star Wars: Episode IV - A New Hope'),(5,'Star Wars: Episode V - The Empire Strikes Back'),(6,'Star Wars: Episode VI - Return of the Jedi'),(7,'Star Wars: Episode VII - The Force Awakens'),(8,'Star Wars: Episode VIII - The Last Jedi'),(9,'The Hunger Games'),(10,'The Hunger Games: Catching Fire'),(11,'The Hunger Games: Mockingjay - Part 1'),(12,'The Hunger Games: Mockingjay - Part 2'),(13,'The Lord of the Rings. The Fellowship of the Ring'),(14,'The Lord of the Rings. The Two Towers'),(15,'The Lord of the Rings. The Return of the King');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_name` varchar(50) NOT NULL DEFAULT '-',
  `post` enum('Director','Producer','Screenwriter','Actor') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (1,'George Lucas','Director'),(2,'George Lucas','Screenwriter'),(3,'Rick McCallum','Producer'),(4,'Gary Kurtz','Producer'),(5,'Irvin Kershner','Director'),(6,'Lawrence Kasdan','Screenwriter'),(7,'Richard Marquand','Director'),(8,'Howard Kazanjian','Producer'),(9,'J. J. Abrams','Director'),(10,'Kathleen Kennedy','Producer'),(11,'Rian Johnson','Director'),(12,'Rian Johnson','Screenwriter'),(13,'Mark Hamill','Actor'),(14,'Harrison Ford','Actor'),(15,'Carrie Fisher','Actor'),(16,'Ewan McGregor','Actor'),(17,'Natalie Portman','Actor'),(18,'Hayden Christensen','Actor'),(19,'Adam Driver','Actor'),(20,'Daisy Ridley','Actor'),(21,'Gary Ross','Director'),(22,'Francis Lawrence','Director'),(23,'Nina Jacobson','Producer'),(24,'Gary Ross','Screenwriter'),(25,'Michael Arndt','Screenwriter'),(26,'Peter Craig','Screenwriter'),(27,'Jennifer Lawrence','Actor'),(28,'Josh Hutcherson','Actor'),(29,'Elizabeth Banks','Actor'),(30,'Peter Jackson','Director'),(31,'Peter Jackson','Producer'),(32,'Peter Jackson','Screenwriter'),(33,'Elijah Wood','Actor'),(34,'Liv Tyler','Actor'),(35,'Hugo Weaving','Actor');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `series_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

LOCK TABLES `series` WRITE;
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (1,'Star Wars'),(2,'The Hunger Games'),(3,'The Lord of the Rings');
/*!40000 ALTER TABLE `series` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-19 13:02:09
