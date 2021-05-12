-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: juarezeduardoind
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libros` (
  `id_libros` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `año` varchar(50) NOT NULL,
  `editorial` varchar(25) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_libros`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES (1,'DEL TENER AL SER','ERICH FROMM','1989','PAIDOS','Polanco'),(2,'Veinte mil leguas de viaje submarino','Julio Verne','1870','Grandes','Polanco'),(3,'La republica','Platon','500 A.C.','Grandes','Chapultepec'),(4,'Cinco ecuaciones que cambiaron el mundo','Michael Guillen','1999','Debolsillo','España'),(5,'LA GAYA CIENCIA','Friedrich Nietzsche','2015','COLOFON','México');
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `música`
--

DROP TABLE IF EXISTS `música`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `música` (
  `id_musica` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `crador` varchar(50) NOT NULL,
  `año` smallint(6) NOT NULL,
  `álbum` varchar(50) DEFAULT 'The wall',
  PRIMARY KEY (`id_nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `música`
--

LOCK TABLES `música` WRITE;
/*!40000 ALTER TABLE `música` DISABLE KEYS */;
INSERT INTO `música` VALUES (1,'La voz dormida','Mago de oz',1998,'The wall'),(2,'Si por mi fuera','Beret',2019,'The wall'),(3,'Closer','The chainsmokers',2016,'The wall'),(4,'Dulce soledad','Enjambre',2009,'The wall'),(5,'Fix','adam trigger',2016,'The wall');
/*!40000 ALTER TABLE `música` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `películas`
--

DROP TABLE IF EXISTS `películas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `películas` (
  `id_peliculas` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `año` varchar(50) NOT NULL,
  `actor_principal` varchar(50) DEFAULT NULL,
  `clasificacion` enum('AA','A','B','B15','C') DEFAULT 'AA',
  PRIMARY KEY (`id_peliculas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `películas`
--

LOCK TABLES `películas` WRITE;
/*!40000 ALTER TABLE `películas` DISABLE KEYS */;
/*!40000 ALTER TABLE `películas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videojuegos`
--

DROP TABLE IF EXISTS `videojuegos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videojuegos` (
  `id_videojuego` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `año` varchar(50) NOT NULL,
  `protagonista` varchar(30) DEFAULT 'SANS',
  PRIMARY KEY (`id_videojuego`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videojuegos`
--

LOCK TABLES `videojuegos` WRITE;
/*!40000 ALTER TABLE `videojuegos` DISABLE KEYS */;
INSERT INTO `videojuegos` VALUES (1,'warzone','activision','2020','Roze'),(2,'MEGAMAN X','CAMPCOM','1998','X'),(3,'UNDERTALE','Toby Fox','2015','CHARA'),(4,'UNCHARTED','Naughty Dog','2009','Drake'),(5,'Dark OSOuls','bandai','2011','SANS');
/*!40000 ALTER TABLE `videojuegos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-11 21:12:37
