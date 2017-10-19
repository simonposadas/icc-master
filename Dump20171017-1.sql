-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: icc_new
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `customer_info`
--

DROP TABLE IF EXISTS `customer_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_info` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_fname` varchar(45) NOT NULL,
  `cust_lname` varchar(45) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `contNo` varchar(15) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reserve_id` int(11) DEFAULT NULL,
  `address` varchar(191) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_info`
--

LOCK TABLES `customer_info` WRITE;
/*!40000 ALTER TABLE `customer_info` DISABLE KEYS */;
INSERT INTO `customer_info` VALUES (1,'Luke','Posadas','M','09263149065','Hiout1965@teleworm.us',NULL,''),(2,'ksjdfksjdf','lkdjldkfjgdklf','M','234234234','Hiout1965@teleworm.us',NULL,''),(3,'ksjdfksjdf','lkdjldkfjgdklf','M','234234234','Hiout1965@teleworm.us',NULL,''),(4,'ksjdfksjdf','lkdjldkfjgdklf','M','234234234','Hiout1965@teleworm.us',NULL,''),(5,'ksjdfksjdf','lkdjldkfjgdklf','M','234234234','Hiout1965@teleworm.us',NULL,''),(6,'ksjdfksjdf','lkdjldkfjgdklf','M','234234234','Hiout1965@teleworm.us',NULL,''),(7,'Simon','Posadas','M','6546546','Hiout1965@teleworm.us',NULL,''),(8,'Arits','Lucillo','M','654654','Hiout1965@teleworm.us',NULL,''),(9,'Aian','Milan','F','6215616','Hiout1965@teleworm.us',NULL,''),(10,'Emrech','Buban','M','6545646','Hiout1965@teleworm.us',NULL,''),(11,'darryl','milan','M','030306540','Hiout1965@teleworm.us',NULL,''),(12,'asdad','asdasd','M','0985041241','Hiout1965@teleworm.us',NULL,'asd'),(13,'asdad','asdasd','M','0985041241','Hiout1965@teleworm.us',NULL,'asd'),(14,'asdad','asdasd','M','0985041241','Hiout1965@teleworm.us',NULL,'asd'),(15,'asdad','asdasd','M','0985041241','Hiout1965@teleworm.us',NULL,'asd'),(16,'asdad','asdasd','M','0985041241','Hiout1965@teleworm.us',NULL,'asd'),(17,'asdad','asdasd','M','0985041241','Hiout1965@teleworm.us',NULL,'asd'),(18,'Garp','Monkey','M','09054712031','Hiout1965@teleworm.us',NULL,'QC'),(19,'Sanji','Vinsmoke','M','09054709163','Hiout1965@teleworm.us',NULL,'East Blue Grand line'),(20,'James','Lebron','M','09054709163','Hiout1965@teleworm.us',NULL,'Cleaveland Cavaliers'),(21,'Derick','Rose','M','09051234567','Hiout1965@teleworm.us',NULL,'Chicago Bulls Center'),(22,'Brisom','Indie','M','090547012345','Hiout1965@teleworm.us',NULL,'Street'),(23,'....','Santillan','F','0993243243','peterheben@peke.com',NULL,'!20 mars'),(24,'Booban','Rets','M','09151234567','sdfjlfk@gmail.com',NULL,'lkjk'),(25,'Booban','Vac Ban','M','09123456789','fasf@gmail.com',NULL,'dadasfd'),(26,'Arich','Lucillo','F','09261234567','loveblue@gmail.com',NULL,'San Mateo, RIzal'),(27,'Poooooos','Adaaaaas','M','0962345678','asdfasd@gmail.com',NULL,'fasdfas'),(28,'fasjfas','pooooo','M','09211234567','fasfs@gmail.com',NULL,'asfas'),(29,'fasjfas','pooooo','M','09211234567','fasfs@gmail.com',NULL,'asfas'),(30,'ffasfdas','putcha','F','0926421513','fsadf@gmail.com',NULL,'fasdfas'),(31,'fasdfas','asdfasdf','M','09123456789','sfas@yahoo.com',NULL,'fasdfsd'),(32,'fasdfas','asdfasf','M','123456789','fasdf@gmail.com',NULL,'fasdfas'),(33,'fasdfas','asdfasd','M','091234567','fasdf@gmail.com',NULL,'asdfas'),(34,'fasdfas','fsadfasdf','M','091234567','asfsad@gmail.com',NULL,'fsafas'),(35,'fasdfas','asdfasdf','M','0916489547','simon@gmail.com',NULL,'fasdfasd'),(36,'fasdf','asdfasf','M','09261234567','asfasdf@gmail.com',NULL,'sdfsadf'),(37,'fasdf','asdfasf','M','09261234567','asfasdf@gmail.com',NULL,'sdfsadf'),(38,'fasdf','asdfasf','M','0926123457','sdfasf@gmail.com',NULL,'fsadfasd'),(39,'fasdf','asdfasf','M','0926123457','sdfasf@gmail.com',NULL,'fsadfasd'),(40,'fasdf','asdfasdf','M','09124567','fjsadlfas@gmail.com',NULL,'fasdfas'),(41,'Milan','Aian Darryl','M','09490090214','darrylMILAN@YAHOO.COM',NULL,'Binangonan, Rizal'),(42,'Simon','Posadas','M','0912345678','asdfsad@gmail.com',NULL,'fasfas'),(43,'Simon','Posadas','M','0912345678','asdfsad@gmail.com',NULL,'fasfas'),(44,'Arich','Lucillo','M','09261349065','asdfasd@gmail.com',NULL,'fasdfas'),(45,'Emrets','Buban','M','091234567','fjsadlkfjsad@gmail.com',NULL,'jaflkjasdlk');
/*!40000 ALTER TABLE `customer_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(50) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES (12,'Chairs',100,200,0),(13,'Table',100,150,0),(14,'Balloons',100,160,0),(15,'Lodi',100,1000,0),(16,'sfsdfdsf',10,2,0);
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_details`
--

DROP TABLE IF EXISTS `event_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_details` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type` varchar(20) DEFAULT NULL,
  `place` varchar(191) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_details`
--

LOCK TABLES `event_details` WRITE;
/*!40000 ALTER TABLE `event_details` DISABLE KEYS */;
INSERT INTO `event_details` VALUES (6,'wedding',''),(7,'wedding','QC'),(8,'wedding','QC'),(9,'wedding','QC'),(10,'wedding','QC'),(11,'wedding','QC'),(12,'wedding','QC'),(13,'wedding','QC'),(14,'wedding','Quezon City Palace'),(15,'wedding','Quezon City Palace Square'),(16,'wedding','Madison Square Garden'),(17,'bday','QC'),(18,'bday','Bahay'),(19,'wedding','asdfas'),(20,'wedding','dadasd'),(21,'wedding','Manila Hotel'),(22,'wedding','sadfasf'),(23,'wedding','asdfasdf'),(24,'wedding','asdfasdf'),(25,'wedding','fasdfasdf'),(26,'wedding','malayo'),(27,'wedding','fasdfasd'),(28,'wedding','fsafdasd'),(29,'wedding','fasfasdfsf'),(30,'wedding','asdfasdf'),(31,'wedding','fasdfsad'),(32,'wedding','fasdfsad'),(33,'wedding','fasdfsad'),(34,'wedding','fasdfsad'),(35,'wedding','fasdfasd'),(36,'wedding','PUP'),(37,'wedding','fasfasfdasf'),(38,'wedding','fasfasfdasf'),(39,'wedding','hell'),(40,'wedding',';k;lskdfa');
/*!40000 ALTER TABLE `event_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_details`
--

DROP TABLE IF EXISTS `food_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_details` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(20) NOT NULL,
  `food_type_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`food_id`),
  UNIQUE KEY `food_type_id` (`food_type_id`),
  CONSTRAINT `food_details_ibfk_1` FOREIGN KEY (`food_type_id`) REFERENCES `food_type` (`food_type_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_details`
--

LOCK TABLES `food_details` WRITE;
/*!40000 ALTER TABLE `food_details` DISABLE KEYS */;
INSERT INTO `food_details` VALUES (1,'fadfas',3,1),(2,'Calamares',7,0),(3,'Tuyo',4,0),(5,'tuyooooo',5,0);
/*!40000 ALTER TABLE `food_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_type`
--

DROP TABLE IF EXISTS `food_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_type` (
  `food_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `food_type_name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`food_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_type`
--

LOCK TABLES `food_type` WRITE;
/*!40000 ALTER TABLE `food_type` DISABLE KEYS */;
INSERT INTO `food_type` VALUES (1,'Appetizer',1),(2,'Soup',1),(3,'Salad',0),(4,'Main Entree',0),(5,'Desserts',1),(6,'Drinks',0),(7,'Appetizer',0),(8,'Soup',1),(9,'Dessert',0);
/*!40000 ALTER TABLE `food_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2017_08_20_064809_create_reservation_details_relation',1),(9,'2017_08_20_074223_add_col_package_id_remove_food_id_in_reservation_details',1),(11,'2017_08_20_080148_modify_package_food_table',2),(21,'2017_08_20_090515_create_package_type_table',3),(22,'2017_08_20_091238_add_col_package_type_in_package_details_table',3),(23,'2017_08_20_114022_add_address_col_customer_info',4),(24,'2017_08_20_122526_add_col_place_event_details_table',5),(26,'2017_08_24_213852_chage_status_col_reservation_details_table',6),(27,'2017_08_26_163522_change_status_col_in_reservation_details',7),(28,'2017_08_26_194131_add_col_disapprove_reason_in_reservation_details_table',8),(31,'2017_08_27_133835_reservation_equipments',9),(32,'2017_08_27_202328_create_reservation_workers_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multi_equip`
--

DROP TABLE IF EXISTS `multi_equip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multi_equip` (
  `order_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  KEY `multi_equipfk1_idx` (`equip_id`),
  CONSTRAINT `multi_equipfk1` FOREIGN KEY (`equip_id`) REFERENCES `equipment` (`equipment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multi_equip`
--

LOCK TABLES `multi_equip` WRITE;
/*!40000 ALTER TABLE `multi_equip` DISABLE KEYS */;
/*!40000 ALTER TABLE `multi_equip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multi_package`
--

DROP TABLE IF EXISTS `multi_package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multi_package` (
  `reserve_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  KEY `multi_fk1_idx` (`package_id`),
  KEY `multi_fk2_idx` (`reserve_id`),
  CONSTRAINT `multi_fk1` FOREIGN KEY (`package_id`) REFERENCES `package_details` (`package_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `multi_fk2` FOREIGN KEY (`reserve_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multi_package`
--

LOCK TABLES `multi_package` WRITE;
/*!40000 ALTER TABLE `multi_package` DISABLE KEYS */;
/*!40000 ALTER TABLE `multi_package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multi_worker`
--

DROP TABLE IF EXISTS `multi_worker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multi_worker` (
  `worker_id` int(11) NOT NULL,
  `reserve_id` int(11) NOT NULL,
  KEY `multi_fk1_idx` (`worker_id`),
  KEY `multi_workerfk2_idx` (`reserve_id`),
  CONSTRAINT `multi_workerfk1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `multi_workerfk2` FOREIGN KEY (`reserve_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multi_worker`
--

LOCK TABLES `multi_worker` WRITE;
/*!40000 ALTER TABLE `multi_worker` DISABLE KEYS */;
/*!40000 ALTER TABLE `multi_worker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package_details`
--

DROP TABLE IF EXISTS `package_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package_details` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) NOT NULL,
  `package_price` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `package_type_id` int(10) unsigned NOT NULL COMMENT 'Package type foreign key',
  PRIMARY KEY (`package_id`),
  KEY `package_details_package_type_id_foreign` (`package_type_id`),
  CONSTRAINT `package_details_package_type_id_foreign` FOREIGN KEY (`package_type_id`) REFERENCES `package_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package_details`
--

LOCK TABLES `package_details` WRITE;
/*!40000 ALTER TABLE `package_details` DISABLE KEYS */;
INSERT INTO `package_details` VALUES (1,'Package 1',500,0,1),(2,'Package 2',500,0,1);
/*!40000 ALTER TABLE `package_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package_food`
--

DROP TABLE IF EXISTS `package_food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package_food` (
  `package_id` int(11) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `food_type_id` int(11) NOT NULL COMMENT 'Food type fk',
  `desc` text NOT NULL COMMENT 'Package details menu',
  PRIMARY KEY (`id`),
  KEY `package_id` (`package_id`),
  KEY `package_food_food_type_id_foreign` (`food_type_id`),
  CONSTRAINT `package_food_food_type_id_foreign` FOREIGN KEY (`food_type_id`) REFERENCES `food_type` (`food_type_id`) ON DELETE CASCADE,
  CONSTRAINT `package_food_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package_details` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package_food`
--

LOCK TABLES `package_food` WRITE;
/*!40000 ALTER TABLE `package_food` DISABLE KEYS */;
INSERT INTO `package_food` VALUES (1,1,1,''),(1,2,2,'Pumpkin Soup / Mushroom Soup / Nido Soup / Creamy Vegetable Soup'),(1,3,3,'Salad Bar Garden Salad (Iceberg Lettuce, Cucumber, Tomatoes, White Onions, Carrots, Kernel Corn) Dressings: Caesar and Thousand Island / Waldorf Salad Hawaiian Macaroni Salad'),(1,4,4,'(A choice of 1 per dish) Country Style Cheesy Lasagna / Seafood Fettuccine Alfredo / Classic Ham and Crispy Bacon Carbonarra / Baked Macaroni with Anchovies/ Old Style Italian Sauce Spaghetti Pot Roast Beef in Mushroom Sauce / Ox Tail Kare-Kare / Beef Stroganoff / Holiday Beef with Olives / Beef Caldereta / Beef Mechado Pork Tenderloin Teriyaki / Pork Hamonado / Barbeque Spareribs / Pork Strips in Spicy Sauce / Pork Korean Sesame Chicken Pastel / Chicken Courdon Bleu / Baked Chicken Barbeque / Chicken Hamonado / Chicken Alexander / Chicken Teriyaki Fish Fillet with Homemade Tartar Sauce or Garlic Sauce / Grilled Fish with Lemon Butter Sauce / Rellenong Bangus Buttered Vegetables with Kernel Corn and Mushroom / Chapseuy / Gallacher Brown Creamy Potato / Mixed Vegetables / Lumpiang Ubod Steamed Pandan Rice'),(1,5,5,'Choose 2 desserts Fresh Fruits / White Salad / Buco Pandan / Fruit Salad / Leche Plan / Brownies and Blondies'),(1,6,6,'Blue Lemonade / Four Season / Black Gulaman'),(2,7,1,'Crispy Spinach with Dip / Canapes'),(2,8,2,'Pumpkin Soup / Mushroom Soup / Nido Soup'),(2,9,3,'Salad Bar Garden Salad(Iceberg Lettuce, Cucumber, Tomatoes, White Onions, Carrots, Kernel Corn) Dressings: Caesar and Thousand Island'),(2,10,4,'(A choice of 1 per dish) Lasagna / Fettuccine Alfredo / Carbonarra / Baked Macaroni / Italian Spaghetti / Sotanghon Guisado Roast Beef in Oyster and Creamy Mushrooms Sauce / Beef Caldereta / Beef Salpicao / Beef Alapobre / Beef Mechado / Beef Stroganoff Pork Hamonado / Barbeque Spareribs / Pork Strips in Spicy Sauce / Pork Korean Sesame / Pork Asado Chicken Pastel / Chicken Courdon Bleu / Baked Chicken Barbeque / Chicken Hamonado / Chicken Alexander / Chicken Teriyaki Fish Fillet with Homemade Tartar Sauce or Garlic Sauce / Grilled Fish with Lemon Butter Sauce / Rellenong Bangus Buttered Vegetables with Kernel Corn and Mushroom / Chapseuy / Mixed Vegetables / Lumpiang Ubod / Corn and Carrot Steamed Pandan Rice'),(2,11,5,'Choose 2 desserts Fresh Fruits / White Salad / Buco Pandan / Fruit Salad / Brownies and Blondies'),(2,12,6,'Blue Lemonade / Four Season / Black Gulaman');
/*!40000 ALTER TABLE `package_food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package_type`
--

DROP TABLE IF EXISTS `package_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package_type`
--

LOCK TABLES `package_type` WRITE;
/*!40000 ALTER TABLE `package_type` DISABLE KEYS */;
INSERT INTO `package_type` VALUES (1,'Wedding Buffet Menu'),(2,'Merienda Menu');
/*!40000 ALTER TABLE `package_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_details`
--

DROP TABLE IF EXISTS `reservation_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_details` (
  `reserv_id` int(11) NOT NULL AUTO_INCREMENT,
  `reserv_guestNo` varchar(45) NOT NULL,
  `cust_budget` int(11) DEFAULT NULL,
  `bud_food` int(11) DEFAULT NULL,
  `bud_equip` int(11) DEFAULT NULL,
  `bud_worker` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `addOn_id` int(11) DEFAULT NULL,
  `reserv_date` date NOT NULL,
  `reserv_time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `package_id` int(11) NOT NULL,
  `disapprove_reason` text COMMENT 'The reason of admin for disapproving the reservation',
  `total_pay` int(11) DEFAULT NULL,
  `receipt_no` varchar(45) DEFAULT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  PRIMARY KEY (`reserv_id`),
  KEY `reserve_fk5_idx` (`cust_id`),
  KEY `reservation_details_event_id_foreign` (`event_id`),
  KEY `reservation_details_package_id_foreign` (`package_id`),
  CONSTRAINT `reservation_details_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `event_details` (`event_id`) ON DELETE CASCADE,
  CONSTRAINT `reservation_details_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `package_details` (`package_id`) ON DELETE CASCADE,
  CONSTRAINT `reserve_fk5` FOREIGN KEY (`cust_id`) REFERENCES `customer_info` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_details`
--

LOCK TABLES `reservation_details` WRITE;
/*!40000 ALTER TABLE `reservation_details` DISABLE KEYS */;
INSERT INTO `reservation_details` VALUES (2,'100',0,20251,500,500,17,12,NULL,'2017-09-21','07:00:00',1,1,NULL,0,NULL,NULL),(3,'100',0,NULL,NULL,NULL,18,13,NULL,'2017-09-21','08:00:00',4,1,NULL,0,NULL,NULL),(4,'100',0,NULL,NULL,NULL,19,14,NULL,'2017-09-21','07:00:00',2,1,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',0,NULL,NULL),(5,'100',0,100,NULL,NULL,20,15,NULL,'2017-09-21','09:00:00',5,1,NULL,0,NULL,NULL),(6,'100',0,NULL,NULL,NULL,21,16,NULL,'2017-09-21','07:00:00',9,1,NULL,0,NULL,NULL),(7,'100',0,100,NULL,NULL,22,17,NULL,'2017-09-21','13:00:00',5,1,'asd',0,NULL,NULL),(8,'100',0,NULL,NULL,NULL,23,18,NULL,'2018-03-03','12:06:00',5,1,NULL,0,NULL,NULL),(9,'501',0,NULL,NULL,NULL,24,19,NULL,'2017-09-28','20:15:00',4,1,NULL,0,NULL,NULL),(10,'504',0,5000,NULL,NULL,25,20,NULL,'2017-09-28','19:54:00',1,1,NULL,0,NULL,NULL),(11,'500',0,500,500,500,26,21,NULL,'2017-09-30','07:00:00',1,1,NULL,500,NULL,NULL),(12,'500',0,NULL,NULL,NULL,27,22,NULL,'2017-10-27','20:09:00',2,1,'puta saan yang address na yan?',0,NULL,NULL),(13,'700',NULL,5050,500,500,29,24,NULL,'2017-10-19','21:00:00',1,1,NULL,6050,NULL,NULL),(14,'500',NULL,NULL,NULL,NULL,30,25,NULL,'2017-10-19','20:08:00',0,1,NULL,0,NULL,NULL),(15,'114',NULL,NULL,NULL,NULL,31,26,NULL,'2017-10-28','09:00:00',0,1,NULL,0,NULL,NULL),(16,'100',NULL,NULL,NULL,NULL,32,27,NULL,'2017-10-19','08:08:00',0,1,NULL,0,NULL,NULL),(17,'405',NULL,NULL,NULL,NULL,33,28,NULL,'2017-10-21','20:08:00',0,1,NULL,0,NULL,NULL),(18,'500',NULL,NULL,NULL,NULL,34,29,NULL,'2017-10-25','19:07:00',0,1,NULL,0,NULL,NULL),(19,'500',NULL,NULL,NULL,NULL,35,30,NULL,'2017-10-28','07:07:00',0,1,NULL,0,NULL,NULL),(20,'500',NULL,500,500,500,39,34,NULL,'2017-10-31','07:07:00',1,1,NULL,1500,NULL,NULL),(21,'500',5000,5000,5000,5000,40,35,NULL,'2017-10-26','17:05:00',3,1,NULL,15000,NULL,NULL),(22,'100',10000,5000,5000,5000,41,36,NULL,'2017-10-19','07:00:00',5,1,NULL,0,'123456',5000),(23,'500',50000,100,200,300,43,38,NULL,'2017-10-30','09:09:00',3,1,NULL,600,'123456',5000),(24,'500',50000,1000,1000,1000,44,39,NULL,'2017-11-30','20:08:00',6,1,NULL,3000,'123456',10000),(25,'500',90000,5000,5000,5000,45,40,NULL,'2017-11-22','20:08:00',6,1,NULL,15000,'123456',20000);
/*!40000 ALTER TABLE `reservation_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_equipments`
--

DROP TABLE IF EXISTS `reservation_equipments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_equipments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `reserv_id` int(11) NOT NULL COMMENT 'Reservation foreign key',
  `equipment_id` int(11) NOT NULL COMMENT 'Equipment foreign key',
  `quantity` int(11) NOT NULL COMMENT 'the number of quantity assigned in a event',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservation_equipments_reserv_id_foreign` (`reserv_id`),
  KEY `reservation_equipments_equipment_id_foreign` (`equipment_id`),
  CONSTRAINT `reservation_equipments_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`equipment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservation_equipments_reserv_id_foreign` FOREIGN KEY (`reserv_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_equipments`
--

LOCK TABLES `reservation_equipments` WRITE;
/*!40000 ALTER TABLE `reservation_equipments` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_equipments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_workers`
--

DROP TABLE IF EXISTS `reservation_workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_workers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `reserv_id` int(11) NOT NULL COMMENT 'Reservation foreign key',
  `worker_id` int(11) NOT NULL COMMENT 'Worker foreign key',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservation_workers_reserv_id_foreign` (`reserv_id`),
  KEY `reservation_workers_worker_id_foreign` (`worker_id`),
  CONSTRAINT `reservation_workers_reserv_id_foreign` FOREIGN KEY (`reserv_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservation_workers_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_workers`
--

LOCK TABLES `reservation_workers` WRITE;
/*!40000 ALTER TABLE `reservation_workers` DISABLE KEYS */;
INSERT INTO `reservation_workers` VALUES (1,5,34,'2017-08-29 10:19:12','2017-08-29 10:19:12'),(2,22,1,'2017-09-19 03:14:06','2017-09-19 03:14:06'),(3,22,5,'2017-09-19 03:14:32','2017-09-19 03:14:32');
/*!40000 ALTER TABLE `reservation_workers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2y$10$o0FVwYWWjdGmltiO0lgxWuUVgtPROldEA3yJ63eOQSMZR14LwLJhC');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worker`
--

DROP TABLE IF EXISTS `worker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_lname` varchar(20) NOT NULL,
  `worker_fname` varchar(20) NOT NULL,
  `worker_mname` varchar(20) NOT NULL,
  `worker_age` int(3) NOT NULL,
  `worker_role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`worker_id`),
  KEY `worker_role_id` (`worker_role_id`),
  CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`worker_role_id`) REFERENCES `worker_role` (`worker_role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worker`
--

LOCK TABLES `worker` WRITE;
/*!40000 ALTER TABLE `worker` DISABLE KEYS */;
INSERT INTO `worker` VALUES (1,'Rutherford','Irma','Koss',34,1,0),(2,'Strosin','Yasmin','Parker',18,1,0),(3,'Schultz','Amber','Mraz',31,4,0),(4,'Raynor','Cecile','Stark',31,1,0),(5,'Herzog','Kyra','Trantow',23,3,0),(6,'Quitzon','Leta','Durgan',20,5,0),(7,'Littel','Gardner','Larkin',22,2,0),(8,'Hoppe','Maxine','Okuneva',29,5,0),(9,'Hudson','Daphnee','Hackett',33,3,0),(10,'Stamm','Stephania','Ratke',20,2,0),(11,'Pagac','Trever','Lang',32,5,0),(12,'Mraz','Raleigh','Altenwerth',21,3,0),(13,'Schmeler','Alvera','Collins',24,5,0),(14,'Lesch','Palma','Johns',31,5,0),(15,'Klocko','Francis','Schumm',21,1,0),(16,'Bosco','Nelson','Volkman',23,4,0),(17,'Hahn','Lambert','Kutch',27,2,0),(18,'Schamberger','Hilbert','Shields',31,3,0),(19,'Cole','Antonietta','Prohaska',19,5,0),(20,'Rempel','Afton','Kuhn',29,2,0),(21,'Gleason','Darren','Dietrich',20,3,0),(22,'Okuneva','Ludwig','Flatley',33,5,0),(23,'Effertz','Maybell','Friesen',23,4,0),(24,'Heathcote','Margaretta','Wehner',34,1,0),(25,'Brakus','Pete','Nolan',34,2,0),(26,'Doyle','Reyes','Schimmel',32,4,0),(27,'Ernser','Thaddeus','Anderson',28,4,0),(28,'Brekke','Brycen','Fay',35,5,0),(29,'Ruecker','Doris','Oberbrunner',28,3,0),(30,'Dach','Elian','Dietrich',25,5,0),(31,'Erdman','Tyrique','Hills',29,2,0),(32,'Swift','August','Greenholt',27,1,0),(33,'Greenholt','Aylin','Schroeder',35,4,0),(34,'Herzog','Una','Toy',24,1,0),(35,'Stark','Danial','Legros',23,2,0),(36,'Kuphal','Lonnie','Rolfson',24,5,0),(37,'Wunsch','Yoshiko','Nader',32,5,0),(38,'Reichel','Durward','Nader',25,1,0),(39,'Towne','Francisco','Friesen',22,4,0),(40,'Blick','Genesis','Ledner',20,5,0),(41,'Stehr','Erika','Lueilwitz',32,3,0),(42,'Veum','Clarissa','Nitzsche',24,4,0),(43,'Terry','Ernestine','Towne',22,5,0),(44,'Padberg','Bessie','Russel',29,4,0),(45,'Ryan','Camilla','Nitzsche',31,3,0),(46,'Kling','Freddy','Senger',34,2,0),(47,'Crona','Blanche','Funk',18,5,0),(48,'Roberts','Dorthy','West',30,1,0),(49,'Windler','Dedric','Senger',24,4,0),(50,'Howe','Orrin','Kuphal',33,1,0);
/*!40000 ALTER TABLE `worker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worker_role`
--

DROP TABLE IF EXISTS `worker_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worker_role` (
  `worker_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_role_description` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`worker_role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worker_role`
--

LOCK TABLES `worker_role` WRITE;
/*!40000 ALTER TABLE `worker_role` DISABLE KEYS */;
INSERT INTO `worker_role` VALUES (1,'Waiter',0),(2,'Waiter II',0),(3,'Chef',0),(4,'Chef II',0),(5,'Waiter III',0);
/*!40000 ALTER TABLE `worker_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-17  9:01:03
