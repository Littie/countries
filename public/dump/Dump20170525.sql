-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: countries.local
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_countries_id_foreign` (`countries_id`),
  CONSTRAINT `cities_countries_id_foreign` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'O\'Connerhaven',1,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(2,'Port Kamilleborough',1,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(3,'Kossfort',1,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(4,'Nienowstad',2,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(5,'East Antonette',2,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(6,'Tatyanafurt',2,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(7,'Maramouth',3,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(8,'Eichmannland',3,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(9,'North Meghanland',3,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(10,'South Tina',3,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(11,'East Eileen',3,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(12,'West Jaylen',4,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(13,'North Millerhaven',4,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(14,'Port Nolanmouth',4,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(15,'North Okeyton',5,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(16,'Christiansenland',5,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(17,'Heathcoteshire',5,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(18,'Langmouth',5,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(19,'East Newell',6,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(20,'Layneside',6,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(21,'South Howardshire',7,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(22,'Gorczanyfort',7,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(23,'South Yesseniafort',7,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(24,'North Jameybury',7,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(25,'Osinskiside',8,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(26,'Blancastad',8,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(27,'East Lancebury',9,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(28,'East Rigobertobury',9,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(29,'Bashirianport',9,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(30,'Eleanoraberg',10,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(31,'East Virginieborough',10,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(32,'Port Rodrigo',10,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(33,'South Lennyton',10,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(34,'East Billie',10,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(35,'West Anjaliton',11,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(36,'Port Pricebury',11,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(37,'West Beaufurt',11,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(38,'West Jeffreyfurt',11,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(39,'Wolfchester',12,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(40,'West Elainaton',12,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(41,'Aaronville',12,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(42,'Ankundingview',13,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(43,'Gwenland',14,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(44,'Kelleystad',15,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(45,'Stammton',15,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(46,'Leannonmouth',16,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(47,'Lake Josefina',16,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(48,'Jonasport',17,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(49,'Stammchester',17,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(50,'Klockoberg',17,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(51,'New Lukas',17,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(52,'South Odabury',18,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(53,'Tyreefort',18,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(54,'East Kian',19,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(55,'Sammyhaven',19,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(56,'Hilariofurt',20,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(57,'Clemmieside',20,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(58,'Cletusstad',20,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(59,'West Abdullahside',20,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(60,'Wilmashire',21,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(61,'New Hailey',21,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(62,'Vandervortview',22,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(63,'Lake Pinkie',22,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(64,'Lake Luella',22,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(65,'Berneiceland',22,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(66,'Goodwinfurt',22,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(67,'Hudsonport',23,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(68,'East Malloryborough',23,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(69,'Port Williamside',24,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(70,'Mathewside',24,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(71,'Strosinland',24,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(72,'Grahamport',25,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(73,'Veronaville',26,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(74,'Lebsackshire',26,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(75,'Trevorville',26,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(76,'Dawnshire',26,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(77,'Dibbertburgh',27,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(78,'Wisokymouth',27,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(79,'Halview',28,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(80,'West Erlingview',29,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(81,'West Teresa',30,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(82,'Hollietown',30,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(83,'South Wilberttown',30,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(84,'Port Marie',30,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(85,'South America',30,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(86,'Elizabethborough',31,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(87,'Willmstown',31,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(88,'North Maybellestad',31,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(89,'Lake Hattiehaven',31,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(90,'Lake Ransomburgh',32,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(91,'Lake Jerelville',32,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(92,'South Moises',33,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(93,'Pedroburgh',33,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(94,'Noeliaborough',33,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(95,'South Jakemouth',34,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(96,'South Mayra',35,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(97,'New Braxtonview',35,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(98,'Quitzonton',36,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(99,'Port Erniemouth',36,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(100,'Wymanland',37,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(101,'West Danielleburgh',37,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(102,'Port Daphney',38,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(103,'Colemouth',38,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(104,'Port Alisaside',39,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(105,'Port Terrance',40,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(106,'North Charleyfort',40,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(107,'Howefort',40,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(108,'West Berylville',40,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(109,'Jamarcusland',40,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(110,'Lake Rey',41,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(111,'Hellerton',42,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(112,'South Vincenzoburgh',42,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(113,'Philipmouth',42,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(114,'Vonshire',42,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(115,'Lake Audreanne',42,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(116,'O\'Konfurt',43,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(117,'East Laneview',43,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(118,'Madietown',43,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(119,'New Maximilliahaven',43,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(120,'Port Daren',44,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(121,'Lorenzaport',44,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(122,'Kreigerchester',44,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(123,'Lueton',44,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(124,'Jeremiemouth',45,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(125,'Schaefermouth',45,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(126,'Bobbieport',46,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(127,'Gorczanyton',46,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(128,'New Anaisland',46,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(129,'Jerdestad',46,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(130,'North Keyon',47,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(131,'New Helmer',47,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(132,'Port Kaylastad',47,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(133,'Port Kraigburgh',47,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(134,'Schinnerfurt',48,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(135,'West Dell',48,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(136,'Marvinside',48,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(137,'North Rowanhaven',48,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(138,'North Arelyberg',49,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(139,'Lake Harleytown',50,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(140,'Daltonville',50,'2017-05-24 12:21:13','2017-05-24 12:21:13'),(141,'Kyiv',51,'2017-05-25 07:19:01','2017-05-25 07:19:01'),(142,'Krivoy Rog',51,'2017-05-25 07:19:19','2017-05-25 07:19:19'),(143,'Zaporozie',51,'2017-05-25 07:19:55','2017-05-25 07:19:55');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Jordan','NG','2017-05-24 12:21:13','2017-05-24 12:21:13'),(2,'Montserrat','TG','2017-05-24 12:21:13','2017-05-24 12:21:13'),(3,'Saudi Arabia','SA','2017-05-24 12:21:13','2017-05-24 12:21:13'),(4,'Aruba','MG','2017-05-24 12:21:13','2017-05-24 12:21:13'),(5,'South Georgia and the South Sandwich Islands','CK','2017-05-24 12:21:13','2017-05-24 12:21:13'),(6,'Honduras','SY','2017-05-24 12:21:13','2017-05-24 12:21:13'),(7,'Mauritius','LU','2017-05-24 12:21:13','2017-05-24 12:21:13'),(8,'Gibraltar','ML','2017-05-24 12:21:13','2017-05-24 12:21:13'),(9,'Ghana','MF','2017-05-24 12:21:13','2017-05-24 12:21:13'),(10,'Ireland','MF','2017-05-24 12:21:13','2017-05-24 12:21:13'),(11,'Uruguay','DO','2017-05-24 12:21:13','2017-05-24 12:21:13'),(12,'Costa Rica','LI','2017-05-24 12:21:13','2017-05-24 12:21:13'),(13,'Saint Martin','VN','2017-05-24 12:21:13','2017-05-24 12:21:13'),(14,'Micronesia','IM','2017-05-24 12:21:13','2017-05-24 12:21:13'),(15,'Austria','GL','2017-05-24 12:21:13','2017-05-24 12:21:13'),(16,'Serbia','BH','2017-05-24 12:21:13','2017-05-24 12:21:13'),(17,'Jamaica','GL','2017-05-24 12:21:13','2017-05-24 12:21:13'),(18,'Central African Republic','DZ','2017-05-24 12:21:13','2017-05-24 12:21:13'),(19,'Canada','YT','2017-05-24 12:21:13','2017-05-24 12:21:13'),(20,'Lesotho','CN','2017-05-24 12:21:13','2017-05-24 12:21:13'),(21,'Haiti','NA','2017-05-24 12:21:13','2017-05-24 12:21:13'),(22,'Dominica','MG','2017-05-24 12:21:13','2017-05-24 12:21:13'),(23,'Dominican Republic','IL','2017-05-24 12:21:13','2017-05-24 12:21:13'),(24,'Greece','CV','2017-05-24 12:21:13','2017-05-24 12:21:13'),(25,'India','CN','2017-05-24 12:21:13','2017-05-24 12:21:13'),(26,'Niger','ET','2017-05-24 12:21:13','2017-05-24 12:21:13'),(27,'Italy','CA','2017-05-24 12:21:13','2017-05-24 12:21:13'),(28,'Papua New Guinea','SM','2017-05-24 12:21:13','2017-05-24 12:21:13'),(29,'Saint Kitts and Nevis','BQ','2017-05-24 12:21:13','2017-05-24 12:21:13'),(30,'Liechtenstein','ST','2017-05-24 12:21:13','2017-05-24 12:21:13'),(31,'Mali','AZ','2017-05-24 12:21:13','2017-05-24 12:21:13'),(32,'Congo','GE','2017-05-24 12:21:13','2017-05-24 12:21:13'),(33,'Japan','AZ','2017-05-24 12:21:13','2017-05-24 12:21:13'),(34,'Tuvalu','CL','2017-05-24 12:21:13','2017-05-24 12:21:13'),(35,'Zambia','GE','2017-05-24 12:21:13','2017-05-24 12:21:13'),(36,'Lao People\'s Democratic Republic','VA','2017-05-24 12:21:13','2017-05-24 12:21:13'),(37,'Sierra Leone','ZM','2017-05-24 12:21:13','2017-05-24 12:21:13'),(38,'Northern Mariana Islands','HN','2017-05-24 12:21:13','2017-05-24 12:21:13'),(39,'Dominica','SC','2017-05-24 12:21:13','2017-05-24 12:21:13'),(40,'Kazakhstan','NL','2017-05-24 12:21:13','2017-05-24 12:21:13'),(41,'Yemen','VC','2017-05-24 12:21:13','2017-05-24 12:21:13'),(42,'Portugal','BT','2017-05-24 12:21:13','2017-05-24 12:21:13'),(43,'Taiwan','BS','2017-05-24 12:21:13','2017-05-24 12:21:13'),(44,'Turks and Caicos Islands','TF','2017-05-24 12:21:13','2017-05-24 12:21:13'),(45,'Eritrea','AW','2017-05-24 12:21:13','2017-05-24 12:21:13'),(46,'Turks and Caicos Islands','IT','2017-05-24 12:21:13','2017-05-24 12:21:13'),(47,'Mali','NG','2017-05-24 12:21:13','2017-05-24 12:21:13'),(48,'Zimbabwe','MA','2017-05-24 12:21:13','2017-05-24 12:21:13'),(49,'Pakistan','KE','2017-05-24 12:21:13','2017-05-24 12:21:13'),(50,'Tonga','PA','2017-05-24 12:21:13','2017-05-24 12:21:13'),(51,'Ukraine','UA','2017-05-25 07:17:15','2017-05-25 07:17:15');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languagables`
--

DROP TABLE IF EXISTS `languagables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languagables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `languages_id` int(11) NOT NULL,
  `languagable_id` int(11) NOT NULL,
  `languagable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languagables`
--

LOCK TABLES `languagables` WRITE;
/*!40000 ALTER TABLE `languagables` DISABLE KEYS */;
INSERT INTO `languagables` VALUES (1,3,1,'App\\Models\\Countries'),(2,24,3,'App\\Models\\Cities'),(3,29,2,'App\\Models\\Countries'),(4,1,4,'App\\Models\\Cities'),(5,14,2,'App\\Models\\Countries'),(6,19,5,'App\\Models\\Cities'),(7,16,3,'App\\Models\\Countries'),(8,37,10,'App\\Models\\Cities'),(9,33,4,'App\\Models\\Countries'),(10,27,12,'App\\Models\\Cities'),(11,5,5,'App\\Models\\Countries'),(12,40,5,'App\\Models\\Countries'),(13,20,6,'App\\Models\\Countries'),(14,36,19,'App\\Models\\Cities'),(15,14,7,'App\\Models\\Countries'),(16,38,21,'App\\Models\\Cities'),(17,48,8,'App\\Models\\Countries'),(18,5,25,'App\\Models\\Cities'),(19,22,9,'App\\Models\\Countries'),(20,19,10,'App\\Models\\Countries'),(21,2,10,'App\\Models\\Countries'),(22,37,11,'App\\Models\\Countries'),(23,19,12,'App\\Models\\Countries'),(24,48,41,'App\\Models\\Cities'),(25,42,13,'App\\Models\\Countries'),(26,25,13,'App\\Models\\Countries'),(27,33,14,'App\\Models\\Countries'),(28,45,43,'App\\Models\\Cities'),(29,40,14,'App\\Models\\Countries'),(30,13,43,'App\\Models\\Cities'),(31,37,15,'App\\Models\\Countries'),(32,10,45,'App\\Models\\Cities'),(33,5,15,'App\\Models\\Countries'),(34,29,45,'App\\Models\\Cities'),(35,11,16,'App\\Models\\Countries'),(36,9,46,'App\\Models\\Cities'),(37,13,16,'App\\Models\\Countries'),(38,18,17,'App\\Models\\Countries'),(39,25,51,'App\\Models\\Cities'),(40,27,17,'App\\Models\\Countries'),(41,22,49,'App\\Models\\Cities'),(42,40,18,'App\\Models\\Countries'),(43,2,52,'App\\Models\\Cities'),(44,8,18,'App\\Models\\Countries'),(45,22,19,'App\\Models\\Countries'),(46,35,19,'App\\Models\\Countries'),(47,5,54,'App\\Models\\Cities'),(48,32,20,'App\\Models\\Countries'),(49,2,20,'App\\Models\\Countries'),(50,39,21,'App\\Models\\Countries'),(51,1,22,'App\\Models\\Countries'),(52,5,23,'App\\Models\\Countries'),(53,8,23,'App\\Models\\Countries'),(54,29,67,'App\\Models\\Cities'),(55,10,24,'App\\Models\\Countries'),(56,13,25,'App\\Models\\Countries'),(57,32,25,'App\\Models\\Countries'),(58,29,72,'App\\Models\\Cities'),(59,35,26,'App\\Models\\Countries'),(60,27,74,'App\\Models\\Cities'),(61,8,26,'App\\Models\\Countries'),(62,8,76,'App\\Models\\Cities'),(63,37,27,'App\\Models\\Countries'),(64,8,78,'App\\Models\\Cities'),(65,46,28,'App\\Models\\Countries'),(66,27,79,'App\\Models\\Cities'),(67,8,28,'App\\Models\\Countries'),(68,35,29,'App\\Models\\Countries'),(69,16,80,'App\\Models\\Cities'),(70,46,30,'App\\Models\\Countries'),(71,7,30,'App\\Models\\Countries'),(72,5,84,'App\\Models\\Cities'),(73,46,31,'App\\Models\\Countries'),(74,44,32,'App\\Models\\Countries'),(75,24,33,'App\\Models\\Countries'),(76,18,33,'App\\Models\\Countries'),(77,42,34,'App\\Models\\Countries'),(78,32,95,'App\\Models\\Cities'),(79,7,34,'App\\Models\\Countries'),(80,39,95,'App\\Models\\Cities'),(81,27,35,'App\\Models\\Countries'),(82,10,35,'App\\Models\\Countries'),(83,39,36,'App\\Models\\Countries'),(84,16,98,'App\\Models\\Cities'),(85,7,37,'App\\Models\\Countries'),(86,42,100,'App\\Models\\Cities'),(87,24,37,'App\\Models\\Countries'),(88,37,100,'App\\Models\\Cities'),(89,29,38,'App\\Models\\Countries'),(90,16,103,'App\\Models\\Cities'),(91,42,38,'App\\Models\\Countries'),(92,46,39,'App\\Models\\Countries'),(93,29,104,'App\\Models\\Cities'),(94,10,39,'App\\Models\\Countries'),(95,16,104,'App\\Models\\Cities'),(96,35,40,'App\\Models\\Countries'),(97,37,105,'App\\Models\\Cities'),(98,44,40,'App\\Models\\Countries'),(99,31,41,'App\\Models\\Countries'),(100,37,42,'App\\Models\\Countries'),(101,31,112,'App\\Models\\Cities'),(102,5,42,'App\\Models\\Countries'),(103,39,43,'App\\Models\\Countries'),(104,48,43,'App\\Models\\Countries'),(105,39,117,'App\\Models\\Cities'),(106,5,44,'App\\Models\\Countries'),(107,24,44,'App\\Models\\Countries'),(108,29,121,'App\\Models\\Cities'),(109,16,45,'App\\Models\\Countries'),(110,16,125,'App\\Models\\Cities'),(111,13,46,'App\\Models\\Countries'),(112,37,128,'App\\Models\\Cities'),(113,27,46,'App\\Models\\Countries'),(114,22,126,'App\\Models\\Cities'),(115,42,47,'App\\Models\\Countries'),(116,10,47,'App\\Models\\Countries'),(117,18,131,'App\\Models\\Cities'),(118,1,48,'App\\Models\\Countries'),(119,24,136,'App\\Models\\Cities'),(120,27,48,'App\\Models\\Countries'),(121,16,136,'App\\Models\\Cities'),(122,10,49,'App\\Models\\Countries'),(123,37,138,'App\\Models\\Cities'),(124,22,50,'App\\Models\\Countries'),(125,48,50,'App\\Models\\Countries'),(126,16,139,'App\\Models\\Cities'),(127,51,51,'App\\Models\\Countries'),(128,52,142,'App\\Models\\Cities'),(129,52,143,'App\\Models\\Cities'),(130,53,143,'App\\Models\\Cities');
/*!40000 ALTER TABLE `languagables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'quibusdam','to','2017-05-24 12:21:13','2017-05-24 12:21:13'),(2,'veniam','bm','2017-05-24 12:21:13','2017-05-24 12:21:13'),(3,'a','af','2017-05-24 12:21:13','2017-05-24 12:21:13'),(4,'modi','et','2017-05-24 12:21:13','2017-05-24 12:21:13'),(5,'incidunt','ar','2017-05-24 12:21:13','2017-05-24 12:21:13'),(6,'debitis','kj','2017-05-24 12:21:13','2017-05-24 12:21:13'),(7,'accusamus','ar','2017-05-24 12:21:13','2017-05-24 12:21:13'),(8,'dicta','sa','2017-05-24 12:21:13','2017-05-24 12:21:13'),(9,'eaque','cs','2017-05-24 12:21:13','2017-05-24 12:21:13'),(10,'et','nv','2017-05-24 12:21:13','2017-05-24 12:21:13'),(11,'odit','gu','2017-05-24 12:21:13','2017-05-24 12:21:13'),(12,'quia','ta','2017-05-24 12:21:13','2017-05-24 12:21:13'),(13,'et','it','2017-05-24 12:21:13','2017-05-24 12:21:13'),(14,'consequuntur','jv','2017-05-24 12:21:13','2017-05-24 12:21:13'),(15,'at','lu','2017-05-24 12:21:13','2017-05-24 12:21:13'),(16,'nisi','wo','2017-05-24 12:21:13','2017-05-24 12:21:13'),(17,'expedita','gu','2017-05-24 12:21:13','2017-05-24 12:21:13'),(18,'culpa','os','2017-05-24 12:21:13','2017-05-24 12:21:13'),(19,'consequuntur','ca','2017-05-24 12:21:13','2017-05-24 12:21:13'),(20,'qui','mr','2017-05-24 12:21:13','2017-05-24 12:21:13'),(21,'vitae','pi','2017-05-24 12:21:13','2017-05-24 12:21:13'),(22,'ratione','ms','2017-05-24 12:21:13','2017-05-24 12:21:13'),(23,'nostrum','sd','2017-05-24 12:21:13','2017-05-24 12:21:13'),(24,'optio','nl','2017-05-24 12:21:13','2017-05-24 12:21:13'),(25,'error','ho','2017-05-24 12:21:13','2017-05-24 12:21:13'),(26,'explicabo','ms','2017-05-24 12:21:13','2017-05-24 12:21:13'),(27,'delectus','kl','2017-05-24 12:21:13','2017-05-24 12:21:13'),(28,'sit','bg','2017-05-24 12:21:13','2017-05-24 12:21:13'),(29,'voluptatem','oc','2017-05-24 12:21:13','2017-05-24 12:21:13'),(30,'accusantium','fo','2017-05-24 12:21:13','2017-05-24 12:21:13'),(31,'in','mt','2017-05-24 12:21:13','2017-05-24 12:21:13'),(32,'perferendis','rm','2017-05-24 12:21:13','2017-05-24 12:21:13'),(33,'atque','xh','2017-05-24 12:21:13','2017-05-24 12:21:13'),(34,'veniam','sa','2017-05-24 12:21:13','2017-05-24 12:21:13'),(35,'nobis','io','2017-05-24 12:21:13','2017-05-24 12:21:13'),(36,'amet','az','2017-05-24 12:21:13','2017-05-24 12:21:13'),(37,'aut','om','2017-05-24 12:21:13','2017-05-24 12:21:13'),(38,'est','da','2017-05-24 12:21:13','2017-05-24 12:21:13'),(39,'blanditiis','eo','2017-05-24 12:21:13','2017-05-24 12:21:13'),(40,'cupiditate','ki','2017-05-24 12:21:13','2017-05-24 12:21:13'),(41,'id','ae','2017-05-24 12:21:13','2017-05-24 12:21:13'),(42,'quis','kk','2017-05-24 12:21:13','2017-05-24 12:21:13'),(43,'esse','lb','2017-05-24 12:21:13','2017-05-24 12:21:13'),(44,'quidem','tk','2017-05-24 12:21:13','2017-05-24 12:21:13'),(45,'veniam','yi','2017-05-24 12:21:13','2017-05-24 12:21:13'),(46,'quae','el','2017-05-24 12:21:13','2017-05-24 12:21:13'),(47,'aut','ko','2017-05-24 12:21:13','2017-05-24 12:21:13'),(48,'esse','fi','2017-05-24 12:21:13','2017-05-24 12:21:13'),(49,'tempora','de','2017-05-24 12:21:13','2017-05-24 12:21:13'),(50,'quasi','ln','2017-05-24 12:21:13','2017-05-24 12:21:13'),(51,'Ukrainian','UA','2017-05-25 07:16:19','2017-05-25 07:16:19'),(52,'Russian','RU','2017-05-25 07:16:28','2017-05-25 07:16:28'),(53,'English','US','2017-05-25 07:16:41','2017-05-25 07:16:41');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (25,'2017_05_24_073214_create_countries_table',1),(26,'2017_05_24_073237_create_cities_table',1),(27,'2017_05_24_073306_create_languages_table',1),(28,'2017_05_24_085140_create_languagables_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-25 15:08:25
