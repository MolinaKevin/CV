mysqldump: [Warning] Using a password on the command line interface can be insecure.
-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: cv
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `box_product`
--

DROP TABLE IF EXISTS `box_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `box_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `box_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `box_product_box_id_foreign` (`box_id`),
  KEY `box_product_product_id_foreign` (`product_id`),
  CONSTRAINT `box_product_box_id_foreign` FOREIGN KEY (`box_id`) REFERENCES `boxes` (`id`),
  CONSTRAINT `box_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `box_product`
--

LOCK TABLES `box_product` WRITE;
/*!40000 ALTER TABLE `box_product` DISABLE KEYS */;
INSERT INTO `box_product` VALUES (1,18,26),(2,18,48),(3,19,26),(4,19,48),(5,19,1),(6,19,2),(7,19,4),(8,19,3),(9,19,7),(10,19,13),(11,19,5),(12,19,47),(13,20,28),(14,20,1),(15,20,4),(16,20,3),(17,20,9),(18,20,47),(19,20,42),(20,20,43),(21,20,5),(22,20,29),(23,20,23),(24,20,39),(25,19,39),(26,21,28),(27,21,1),(28,21,4),(29,21,2),(30,21,7),(31,21,3),(32,21,39),(33,21,23),(34,21,24),(35,21,6),(36,21,18),(37,21,19),(38,21,8),(39,21,7),(40,21,32),(41,21,31),(42,21,33),(43,21,47),(44,22,42),(45,22,43),(46,22,2),(47,22,1),(48,22,3),(49,22,4),(50,22,19),(51,22,15),(52,22,50),(53,22,28),(54,22,29),(55,22,47),(56,22,23),(57,22,24),(59,23,28),(60,23,1),(61,23,2),(62,23,4),(63,23,3),(64,23,8),(65,23,5),(66,23,16),(67,23,11),(68,23,49),(69,23,23),(70,23,24),(71,23,44),(72,23,45),(73,23,47),(74,23,46),(75,23,19),(76,23,39),(77,24,28),(78,24,1),(79,24,4),(80,24,3),(81,24,16),(82,24,23),(83,24,24),(84,24,26),(85,24,48),(86,24,14),(87,24,7),(88,24,19),(89,24,2),(90,24,29),(91,24,39),(92,25,1),(93,25,2),(94,25,3),(95,25,4),(96,25,5),(97,25,7),(98,25,8),(99,25,23),(100,25,24),(101,25,26),(102,25,27),(103,25,28),(104,25,29),(105,25,30),(106,25,35),(107,25,36),(108,25,38),(109,25,39),(110,25,40),(111,25,41),(112,25,44),(113,25,45),(114,25,46),(115,25,47),(116,25,48),(117,25,49);
/*!40000 ALTER TABLE `box_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boxes`
--

DROP TABLE IF EXISTS `boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `step_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `boxes_step_id_foreign` (`step_id`),
  CONSTRAINT `boxes_step_id_foreign` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boxes`
--

LOCK TABLES `boxes` WRITE;
/*!40000 ALTER TABLE `boxes` DISABLE KEYS */;
INSERT INTO `boxes` VALUES (1,'Descripcion','fas fa-align-center','1','Pasantia en la municipalidad de Brandsen. Fui becado por el municipio Brandsen para tener practicas supervisadas pagas en la municipalidad de Brandsen. Mis deberes eran solucionar problemas diversos del soporte tecnico, desde configurar impresoras hasta un peque&ntilde;o desarrollo interno. ',1,'2021-01-29 16:27:33','2021-01-29 16:27:33'),(2,'Localizaci&oacute;n','fas fa-map-marker-alt','3','Municipalidad Brandsen, Argentina',1,'2021-01-29 16:27:44','2021-01-29 16:27:44'),(3,'Descripcion','fas fa-align-center','1','En Sista S.A. me desarrolle como servicio tecnico telefonico, el cual consistia normalmente en atender reclamos de mal funcionamiento de internet e intento de soluci&oacute;n por telefono comandado por mi. Fuera de eso cree peque&ntilde;as herramientas para utilizaci&oacute;n interna en Visual Basic 6 y un peque&ntilde;o sitio web, el cual actualmente se encuentra en desuso. El sitio web fue programado con un stack de PHP, HTML, CSS y Javascript, tambien utilizaba distintos protocolos como FTP.',2,'2021-01-30 11:46:36','2021-01-30 11:46:36'),(4,'Localizaci&oacute;n','fas fa-map-marker-alt','3','Sista S.A., Punta Lara, Argentina',2,'2021-01-30 11:47:24','2021-01-30 11:47:24'),(5,'Descripcion','fas fa-align-center','1','Este fue mi primer proyecto personal y el que dio pie a una larga carrera de Emprendedor. En este sitio utilice un stack de Laravel y AngularJS (la primer version de Angular). Mi idea en ese entonces era que el Fron-end, desarrollado en AngularJS, se conecte al Back-end, desarrollado en Laravel, a traves de API REST y tanto el Fron-end y los dispositivos Android e IOS sean tratados como clientes. ',3,'2021-01-30 12:18:24','2021-01-30 12:18:24'),(6,'Localizaci&oacute;n','fas fa-map-marker-alt','3','La Plata, Argentina',3,'2021-01-30 12:18:39','2021-01-30 12:18:39'),(7,'Descripcion','fas fa-align-center','1','Esto es basicamente un sistema de Puntos, por el cual cualquier miembro de SOMOs que compre en un comercio registrado en SOMOS recibira puntos. Cuando esta persona recibe puntos (los cuales tienen valor monetario) una entidad sin fines de lucro tambien recibe dinero. Esta donaci&oacute;n se realiza por el comercio, pero el usuario tiene la potestad de decidir que entidad es la que recibira el dinero. La primero versi&oacute;n estuvo programada en Laravel, actualmente el prototipo esta tambien desarrollado en Laravel pero en una versi&oacute;n mas actual del mismo, y el plan es tener APPs nativas en Android e IOS.',4,'2021-01-30 12:36:15','2021-01-30 12:36:15'),(8,'Localizaci&oacute;n','fas fa-map-marker-alt','3','Argentina y Alemania',4,'2021-01-30 12:36:36','2021-01-30 12:36:36'),(9,'Descripcion','fas fa-align-center','1','Dos aplicaciones cross-platform, programadas en HTML, CSS, Javascript y compiladas gracias a Phonegap. El proyecto funciona basado en una arquitectura cliente-servidor donde el servidor esta Programado en Laravel y la comunicaci&oacute;n se realiza a traves de API REST. Tambien se utiza diferentes APIs de redes sociales para login y de Google Maps para mapas y geolocalizaci&oacute;n de comercios y otro servicio de Google para notificaciones PUSH. La plataforma cuenta con posibilidad de chat en tiempo real y llamadas para contactarse con comerciantes.',5,'2021-01-30 13:00:47','2021-01-30 13:00:47'),(10,'Localizaci&oacute;n','fas fa-map-marker-alt','3','La Plata, Argentina',5,'2021-01-30 13:01:44','2021-01-30 13:01:44'),(12,'Descripcion','fas fa-align-center','1','El sistema interno de los Raspberrys fue configurado por nosotros y el servicio que controla y actualiza el terminal programado por nosotros. Con Python como elecci&oacute;n nos conectamos al servidor (Laravel) a traves de un API REST. El sistema tambien tiene la posibilidad de leer RSS para mostrar videos dinamicos con formato de noticias.',6,'2021-01-30 17:34:59','2021-01-30 17:34:59'),(13,'Localizaci&oacute;n','fas fa-map-marker-alt','3','La Plata, Argentina',6,'2021-01-30 17:35:06','2021-01-30 17:35:06'),(14,'Descripcion','fas fa-align-center','1','Las terminales biometricas son un producto externo (ZK-Teco). Con un firmware modificado y un servicio (para Windows) programado en C#, las terminales se conectan a un servidor local programado en Laravel a traves de API REST. El software ademas del control total de usuarios, el enrolamiento, el guardado de datos biometricos, tambien controla las personas que en determinados casos necesitan revisaci&oacute;n medica o abonar el servicio. Tambien muestra metricas en tiempo real que son de ayuda para los empleados que utilizan el sistema.',7,'2021-01-31 10:40:42','2021-01-31 10:40:42'),(15,'Localizaci&oacute;n','fas fa-map-marker-alt','3','La Plata, Argentina',7,'2021-01-31 10:40:49','2021-01-31 10:41:24'),(16,'Descripcion','fas fa-align-center','1','Esta fue mi primera experiencia contratado en un cargo alto para una empresa. Entre los proyectos que lleve a cabo ademas del Webshop que he nombrado anteriormente, hemos reemplazado terminales que se utilizaban como balazas para utilizar equipos los cuales se conectan a traves de protocolo TCP/IP. Redujimos la monstruosa arquitectura de 5 servidores y un NAS utilizada a modo de disco duro a solo 3 servidores. Logramos mejorar la performance de los softwares antiguos de la empresa y tambien se dockerizo mucho porque varias herramientas solo funcionaban en entornos con sofware ya deprecado.',8,'2021-01-31 16:52:10','2021-01-31 19:38:00'),(17,'Localizaci&oacute;n','fas fa-map-marker-alt','3','G&ouml;ttingen, Alemania',8,'2021-01-31 16:53:04','2021-01-31 16:53:04'),(18,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',1,'2021-02-01 06:45:57','2021-02-01 06:45:57'),(19,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',2,'2021-02-01 07:26:47','2021-02-01 07:26:47'),(20,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',3,'2021-02-01 07:38:30','2021-02-01 07:38:30'),(21,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',4,'2021-02-01 07:43:08','2021-02-01 07:43:08'),(22,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',5,'2021-02-01 07:47:45','2021-02-01 07:47:45'),(23,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',6,'2021-02-01 10:05:09','2021-02-01 10:05:09'),(24,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',7,'2021-02-01 10:26:27','2021-02-01 10:26:27'),(25,'Tecnolog&iacute;as','fas fa-microchip','2','Tecnolog&iacute;as',8,'2021-02-01 10:32:08','2021-02-01 10:32:08');
/*!40000 ALTER TABLE `boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_01_12_220855_create_sessions_table',1),(8,'2021_01_17_102343_create_teches_table',2),(9,'2021_01_18_155436_create_products_table',3),(18,'2021_01_20_122057_create_steps_table',4),(19,'2021_01_29_122053_create_boxes_table',4),(21,'2021_01_31_194920_create_box_product_table',5),(23,'2021_02_04_225244_add_agregar_antes_to_products_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech` tinyint(1) NOT NULL DEFAULT '1',
  `me` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agregar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antes` tinyint(1) NOT NULL DEFAULT '1',
  `inicio` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'PHP','fab fa-php',1,1,'2021-01-18 16:04:37','2021-02-04 23:04:05','Desarrollador',1,1),(2,'Javascript','fab fa-js',1,1,'2021-01-18 16:07:31','2021-02-04 23:09:03','Desarrollador',1,1),(3,'CSS','fab fa-css3',1,1,'2021-01-18 16:08:24','2021-02-04 23:10:11','Maquetador',1,1),(4,'HTML','fab fa-html5',1,1,'2021-01-18 16:09:53','2021-02-04 23:10:30','Maquetador',1,1),(5,'Bootstrap','fab fa-bootstrap',1,1,'2021-01-31 20:13:45','2021-02-04 23:16:40','Entendedor de',1,1),(6,'Tailwind','fas fa-ban',1,1,'2021-01-31 20:23:10','2021-02-04 23:17:59','Examinador de',1,1),(7,'Jquery','fas fa-ban',1,1,'2021-01-31 20:23:40','2021-01-31 20:32:27',NULL,1,0),(8,'Vue JS','fab fa-vuejs',1,1,'2021-01-31 20:24:40','2021-02-04 23:19:53','Enamorado de',1,1),(9,'Angular JS','fab fa-angular',1,1,'2021-01-31 20:30:35','2021-01-31 20:30:35',NULL,1,0),(10,'Typescript','fas fa-ban',1,3,'2021-01-31 20:32:01','2021-02-04 23:20:28','Aprendiz de',1,1),(11,'Python','fab fa-python',1,1,'2021-01-31 21:24:35','2021-02-04 23:21:56','Aficcionado',1,1),(12,'Visual Basic','fab fa-microsoft',1,1,'2021-01-31 21:25:45','2021-01-31 21:25:45',NULL,1,0),(13,'.NET','fab fa-microsoft',1,1,'2021-01-31 21:26:00','2021-01-31 21:26:00',NULL,1,0),(14,'C&num;','fas fa-ban',1,1,'2021-01-31 21:28:18','2021-01-31 21:28:18',NULL,1,0),(15,'Framework 7','fas fa-ban',1,1,'2021-01-31 21:29:58','2021-01-31 21:29:58',NULL,1,0),(16,'Bulma','fas fa-ban',1,1,'2021-01-31 21:30:16','2021-01-31 21:30:16',NULL,1,0),(17,'Foundation','fas fa-ban',1,1,'2021-01-31 21:31:40','2021-01-31 21:31:40',NULL,1,0),(18,'PostCSS','fas fa-ban',1,1,'2021-01-31 21:32:33','2021-01-31 21:32:33',NULL,1,0),(19,'Sass','fab fa-sass',1,1,'2021-01-31 21:33:33','2021-01-31 21:33:33',NULL,1,0),(20,'Wordpress','fab fa-wordpress-simple',1,1,'2021-01-31 21:34:16','2021-01-31 21:34:16',NULL,1,0),(21,'Joomla','fab fa-joomla',1,1,'2021-01-31 21:34:47','2021-01-31 21:34:47',NULL,1,0),(22,'Drupal','fab fa-drupal',1,1,'2021-01-31 21:35:30','2021-01-31 21:35:30',NULL,1,0),(23,'TDD','fas fa-ban',1,1,'2021-01-31 21:36:03','2021-02-04 23:23:15','Discipulo del',1,1),(24,'PHP Unit','fas fa-ban',1,1,'2021-01-31 21:36:09','2021-02-04 23:23:35','Discipulo de',1,1),(25,'Docker','fab fa-docker',1,1,'2021-01-31 21:36:38','2021-02-04 23:25:26','Lacayo de',1,1),(26,'Redes','fas fa-network-wired',1,1,'2021-01-31 21:37:26','2021-01-31 21:37:26',NULL,1,0),(27,'Jenkins','fab fa-jenkins',1,1,'2021-01-31 21:38:24','2021-01-31 21:38:24',NULL,1,0),(28,'Laravel','fab fa-laravel',1,1,'2021-01-31 21:39:01','2021-02-04 23:26:12','Siervo de',1,1),(29,'AJaX','fas fa-ban',1,1,'2021-01-31 21:40:08','2021-01-31 21:40:08',NULL,1,0),(30,'AWS','fab fa-aws',1,1,'2021-01-31 21:40:48','2021-01-31 21:40:48',NULL,1,0),(31,'Twitter API','fab fa-twitter',1,1,'2021-01-31 21:41:22','2021-01-31 21:41:22',NULL,1,0),(32,'Facebook API','fab fa-facebook-f',1,1,'2021-01-31 21:41:58','2021-01-31 21:41:58',NULL,1,0),(33,'Google API','fab fa-google',1,1,'2021-01-31 21:42:32','2021-01-31 21:43:25',NULL,1,0),(34,'Dropbox API','fab fa-dropbox',1,1,'2021-01-31 21:44:34','2021-01-31 21:44:34',NULL,1,0),(35,'Youtube API','fab fa-youtube',1,1,'2021-01-31 21:45:36','2021-01-31 21:45:36',NULL,1,0),(36,'Paypal API','fab fa-paypal',1,1,'2021-01-31 21:46:05','2021-01-31 21:46:05',NULL,1,0),(37,'Steam API','fab fa-steam-symbol',1,1,'2021-01-31 21:46:46','2021-01-31 21:46:46',NULL,1,0),(38,'Git','fab fa-git-alt',1,1,'2021-01-31 21:48:01','2021-02-04 23:27:09','Camarada de',1,1),(39,'MySQL','fas fa-ban',1,1,'2021-01-31 21:48:38','2021-02-04 23:27:34','Colega de',1,1),(40,'SQL Server','fas fa-ban',1,1,'2021-01-31 21:49:02','2021-01-31 21:49:02',NULL,1,0),(41,'SQL Anywhere','fas fa-ban',1,1,'2021-01-31 21:49:40','2021-01-31 21:49:40',NULL,1,0),(42,'Phonegap','fas fa-ban',1,1,'2021-01-31 21:50:53','2021-01-31 21:50:53',NULL,1,0),(43,'Cordova','fas fa-ban',1,1,'2021-01-31 21:51:13','2021-01-31 21:51:13',NULL,1,0),(44,'Bash','fas fa-terminal',1,1,'2021-01-31 21:52:23','2021-01-31 21:52:23',NULL,1,0),(45,'Sh','fas fa-terminal',1,1,'2021-01-31 21:52:28','2021-01-31 21:52:28',NULL,1,0),(46,'Linux','fab fa-linux',1,1,'2021-01-31 21:53:11','2021-02-04 23:28:15','<3',1,1),(47,'Servers','fas fa-server',1,1,'2021-01-31 21:53:39','2021-02-04 23:28:34','Administrador de',1,1),(48,'Windows','fab fa-windows',1,1,'2021-01-31 21:54:02','2021-01-31 21:54:02',NULL,1,0),(49,'Raspberry Pi','fab fa-raspberry-pi',1,1,'2021-02-01 07:47:23','2021-02-01 07:47:23',NULL,1,0),(50,'Ionic','fas fa-ban',1,1,'2021-02-01 07:49:45','2021-02-01 07:49:45',NULL,1,0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('uSqtINcvjE3xbrOH8t0q2PcbrrXGmdr6EI6HwjAX',NULL,'172.21.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnh2emVrdVk0WVNBOUdIeThUclNsNGtBRDU1Q2pwQlhTUExtZnl6NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1612484840);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `steps`
--

DROP TABLE IF EXISTS `steps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `steps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `init` date NOT NULL,
  `end` date NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `steps`
--

LOCK TABLES `steps` WRITE;
/*!40000 ALTER TABLE `steps` DISABLE KEYS */;
INSERT INTO `steps` VALUES (1,'2014-01-01','2015-01-01','Soporte tecnico y administraci&oacute;n','Soporte tecnico de equipos y computadores en la Municipalidad de la localidad de Brandsen','Municipalidad Brandsen, Argentina','2021-01-29 16:27:18','2021-01-30 11:37:32'),(2,'2015-01-01','2016-01-01','Soporte tecnico y administraci&oacute;n','Empresa proveedora de internet y otros servicios asociados como telefono y television satelital. Yo ocupaba el puesto de soporte tecnico telefonico y desarrollador web','Punta Lara, Argentina','2021-01-30 11:35:54','2021-01-31 17:02:39'),(3,'2015-01-01','2016-01-01','Fundador y desarrollador','Sitio utilizado actualmente por una distribuidora de la localidad de Brandsen en Argentina. Es un sistema al cual por medio de una API Rest se conectan terminales Android e IOS que son las que se utilizan para cargar pedidos en el sistema. Cada d&iacute;a el software da un listado autom&aacute;tico de lo que se ha de cargar en el cami&oacute;n dependiendo la localidad. Ademas de un sistema de facturaci&oacute;n, control de stock coordinado con las terminales Android e IOS, y las herramientas que necesita cualquier SAP','facturar.molinakev.in','2021-01-30 12:02:19','2021-01-31 19:42:29'),(4,'2015-01-01','1950-01-01','Co-fundador y desarrollador','SOMOS (Sistema Online Multinivel con Orientaci&oacute;n Solidaria) se trato de un emprendimiento personal en el cual se busca crear una economia circular, la cual beneficie a los integrantes de la Red-SOMOS. En ese momento fue imposible implementarlo porque la tecnolog&iacute;a pertinente suponia un cambio muy grande para los procesos de trabajo pero en la actualidad me encuentro trabajando en una versi&oacute;n actualizada del mismo con una orientacion ecologica ademas de social.','SOMOS','2021-01-30 12:28:09','2021-01-31 19:43:03'),(5,'2017-01-01','2019-01-01','Co-fundador y desarrollador','DescuenTODO es una APP en la cual un cliente a traves de un mapa puede encontrar descuentos, ofertas y promociones en la cercania de su localizaci&oacute;n actual. La idea principal era aportar herramientas actuales al comercio regional. El proyecto cuenta con dos APP, una para clientes y otra para comerciantes, donde pueden cargar sus productos, y tener el control de toda su cartera de ofertas.','DESCUENTODO','2021-01-30 12:41:10','2021-01-31 17:00:57'),(6,'2017-01-01','2019-01-01','Co-fundador y desarrollador','Displays de publicidad repartidos en diferentes puntos de la ciudad de La Plata. Los displays estan controlados por una Raspberry PI con Raspbian y un micro-servicio programado en Python. En un intervalo de tiempo determinado las terminales se conectan a traves de un servicio web del servidor. El servidor esta programado en Laravel y se comparte con el proyecto DescuenTODO.','PUBLITODO','2021-01-30 17:13:51','2021-01-31 17:00:24'),(7,'2018-01-01','2019-01-01','Co-fundador y desarrollador','Proyecto de identificaci&oacute;n biometrica. En la fase de pruebas se coloco el sistema en un natatorio y gimnasio de la ciudad de La Plata. Los clientes del local podian acceder al recinto por medio de huella dactilar o un llavero NFS.','GKD','2021-01-31 10:33:12','2021-01-31 17:01:12'),(8,'2019-01-01','1950-01-01','IT Lider','En Maschinenhandel Meyer GmbH & Co trabajo como IT Lider, a cargo de los sistemas internos de la empresa y de actualizar sistemas muy antiguos. Los sistemas de la empresa en su mayoria estaban programados en PHP 5 y los he actualizado a PHP 7 (Laravel) y dockerizado. El proyecto mas grande en el cual he trabajado para le empresa es el del traspaso de un antiguo Webshop a uno nuevo con un traspaso de toda la informaci&oacute;n. Mas de 14000 productos, 21000 relaciones, cientos de cupones, reglas de negocio, etc, migrados a una plataforma programada en Laravel y utilizando el paquete open source Bagisto para el mismo.','G&ouml;ttingen, Alemania','2021-01-31 11:05:03','2021-01-31 11:05:03');
/*!40000 ALTER TABLE `steps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teches`
--

DROP TABLE IF EXISTS `teches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int NOT NULL DEFAULT '1',
  `level` int NOT NULL DEFAULT '1',
  `developer` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teches`
--

LOCK TABLES `teches` WRITE;
/*!40000 ALTER TABLE `teches` DISABLE KEYS */;
INSERT INTO `teches` VALUES (1,'PHP',1,5,1,'2021-01-17 14:09:19','2021-01-17 14:09:19'),(2,'Javascript',2,4,1,'2021-01-17 15:55:10','2021-01-17 15:55:10'),(3,'Laravel',1,5,1,'2021-01-17 18:19:15','2021-01-17 18:19:15'),(4,'HTML',3,5,1,'2021-01-17 18:19:35','2021-01-17 18:19:35'),(5,'CSS',4,5,1,'2021-01-17 18:20:49','2021-01-17 18:20:49');
/*!40000 ALTER TABLE `teches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Kevin Molina','molinakevinalejandro@gmail.com',NULL,'$2y$10$v75F3e7ZMWg7ePBdbagXl.JYWw7PaAC8rwn6d65b3rd.5f0LfPaU2',NULL,NULL,NULL,NULL,NULL,'2021-01-17 16:57:10','2021-01-17 16:57:10');
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

-- Dump completed on 2021-02-05  0:34:31
