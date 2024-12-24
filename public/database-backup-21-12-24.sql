
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
DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` datetime NOT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `doctor_id` bigint unsigned DEFAULT NULL,
  `hospital_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointments_user_id_foreign` (`user_id`),
  KEY `appointments_doctor_id_foreign` (`doctor_id`),
  KEY `appointments_hospital_id_foreign` (`hospital_id`),
  CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  CONSTRAINT `appointments_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`),
  CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `blog_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `blog_tags` WRITE;
/*!40000 ALTER TABLE `blog_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_tags` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_blog_avatar.jpg',
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-city-image.png',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_name_unique` (`name`),
  UNIQUE KEY `cities_slug_unique` (`slug`),
  UNIQUE KEY `cities_code_unique` (`code`),
  KEY `cities_country_id_foreign` (`country_id`),
  CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'dhaka','default-city-image.png',NULL,NULL,1,'2024-12-11 03:37:02','2024-12-11 03:37:02'),(2,'chittagong','default-city-image.png',NULL,NULL,1,'2024-12-11 03:37:02','2024-12-11 03:37:02'),(3,'Kuala Lumpur','default-city-image.png',NULL,NULL,2,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(4,'Petaling Jaya','default-city-image.png',NULL,NULL,2,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(5,'Jurong East','default-city-image.png',NULL,NULL,3,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(6,'singapore city','default-city-image.png',NULL,NULL,3,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(7,'delhi','default-city-image.png',NULL,NULL,4,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(8,'chennai','default-city-image.png',NULL,NULL,4,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(9,'kolkata','default-city-image.png',NULL,NULL,4,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(10,'bangkok','default-city-image.png',NULL,NULL,5,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(11,'pattaya','default-city-image.png',NULL,NULL,5,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(12,'phuket','default-city-image.png',NULL,NULL,5,'2024-12-11 03:37:03','2024-12-11 03:37:03');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_markup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `countries_name_unique` (`name`),
  UNIQUE KEY `countries_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'bangladesh',NULL,NULL,'🇧🇩',NULL,'2024-12-11 03:37:02','2024-12-11 03:37:02'),(2,'malaysia',NULL,NULL,'🇲🇾',NULL,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(3,'singapore',NULL,NULL,'🇸🇬',NULL,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(4,'india',NULL,NULL,'🇮🇳',NULL,'2024-12-11 03:37:03','2024-12-11 03:37:03'),(5,'thailand',NULL,NULL,'🇹🇭',NULL,'2024-12-11 03:37:03','2024-12-11 03:37:03');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_department.png',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `departments_name_unique` (`name`),
  UNIQUE KEY `departments_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Accident Emergency','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(2,'Anaesthesia and Pain Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(3,'Cancer Care Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(4,'Cardiac Electrophysiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(5,'Heart Failure and Interventional Cardiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(6,'Cardiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(7,'Cardiothoracic and Vascular Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(8,'Cardiothoracic Anaesthesia','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(9,'Child Development Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(10,'Counsellor','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(11,'Critical Care','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(12,'Dental and Maxillofacial Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(13,'Dermatology and Venereology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(14,'Diabetology and Endocrinology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(15,'Diagnostic and Interventional Radiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(16,'Dietetics and Nutrition','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(17,'ENT and Head Neck Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(18,'Fertility Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(19,'Gastroenterology and Hepatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(20,'General and Lap Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(21,'Haematology and Stem Cell Transplant','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(22,'Hip Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(23,'Internal Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(24,'Joint Care and Wellness Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(25,'Kidney Transplant Program','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(26,'Lab Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(27,'Medical Oncology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(28,'Neonatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(29,'Nephrology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(30,'Neurology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(31,'Neurosurgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(32,'Nuclear Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(33,'Obstetrics and Gynaecology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(34,'Oncoplastic and Reconstructive Breast Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(35,'Ophthalmology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(36,'Orthopaedics','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(37,'Paediatric Cardiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(38,'Paediatric Surgery and Paediatric Urology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(39,'Paediatrics','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(40,'Paediatrics and Neonatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(41,'Physical Medicine and Rehabilitation','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(42,'Plastic, Reconstructive and Cosmetic Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(43,'Psychiatry','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(44,'Radiation Oncology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(45,'Respiratory Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(46,'Rheumatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(47,'Thyroid and Head-Neck Oncosurgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(48,'Transfusion Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(49,'Urology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(50,'thoracic surgery','default_department.png','thoracic-surgery',NULL,'active','2024-12-20 12:27:16','2024-12-20 12:27:16'),(51,'family medicine, surgery','default_department.png','family-medicine-surgery',NULL,'active','2024-12-20 12:27:19','2024-12-20 12:27:19'),(52,'pediatrics','default_department.png','pediatrics',NULL,'active','2024-12-20 12:33:13','2024-12-20 12:33:13'),(53,'anesthesiology','default_department.png','anesthesiology',NULL,'active','2024-12-20 12:33:19','2024-12-20 12:33:19'),(54,'operative dentistry','default_department.png','operative-dentistry',NULL,'active','2024-12-20 12:33:25','2024-12-20 12:33:25'),(55,'otolaryngology','default_department.png','otolaryngology',NULL,'active','2024-12-20 12:33:29','2024-12-20 12:33:29'),(56,'surgery, thoracic surgery','default_department.png','surgery-thoracic-surgery',NULL,'active','2024-12-20 12:33:40','2024-12-20 12:33:40'),(57,'emergency medicine','default_department.png','emergency-medicine',NULL,'active','2024-12-20 12:33:43','2024-12-20 12:33:43'),(58,'plastic surgery','default_department.png','plastic-surgery',NULL,'active','2024-12-20 12:34:00','2024-12-20 12:34:00'),(59,'internal medicine, family medicine','default_department.png','internal-medicine-family-medicine',NULL,'active','2024-12-20 12:34:07','2024-12-20 12:34:07'),(60,'internal medicine, medical oncology','default_department.png','internal-medicine-medical-oncology',NULL,'active','2024-12-20 12:34:24','2024-12-20 12:34:24'),(61,'periodontology','default_department.png','periodontology',NULL,'active','2024-12-20 12:34:27','2024-12-20 12:34:27'),(62,'diagnostic radiology','default_department.png','diagnostic-radiology',NULL,'active','2024-12-20 12:34:56','2024-12-20 12:34:56'),(63,'orthopedic surgery','default_department.png','orthopedic-surgery',NULL,'active','2024-12-20 19:02:07','2024-12-20 19:02:07'),(64,'preventive medicine, occupational medicine','default_department.png','preventive-medicine-occupational-medicine',NULL,'active','2024-12-20 19:03:26','2024-12-20 19:03:26'),(65,'pediatric dentistry','default_department.png','pediatric-dentistry',NULL,'active','2024-12-20 19:03:35','2024-12-20 19:03:35'),(66,'addiction psychiatry, psychiatry','default_department.png','addiction-psychiatry-psychiatry',NULL,'active','2024-12-20 19:03:43','2024-12-20 19:03:43'),(67,'oral and maxillofacial surgery','default_department.png','oral-and-maxillofacial-surgery',NULL,'active','2024-12-20 19:03:46','2024-12-20 19:03:46'),(68,'hematology','default_department.png','hematology',NULL,'active','2024-12-20 19:03:53','2024-12-20 19:03:53'),(69,'child and adolescent psychiatry','default_department.png','child-and-adolescent-psychiatry',NULL,'active','2024-12-20 19:03:55','2024-12-20 19:03:55'),(70,'internal medicine, neurology','default_department.png','internal-medicine-neurology',NULL,'active','2024-12-20 19:03:59','2024-12-20 19:03:59'),(71,'general practice, family medicine','default_department.png','general-practice-family-medicine',NULL,'active','2024-12-20 19:04:08','2024-12-20 19:04:08'),(72,'general radiology','default_department.png','general-radiology',NULL,'active','2024-12-20 19:04:20','2024-12-20 19:04:20'),(73,'neurological surgery','default_department.png','neurological-surgery',NULL,'active','2024-12-20 19:04:24','2024-12-20 19:04:24'),(74,'rehabilitation medicine','default_department.png','rehabilitation-medicine',NULL,'active','2024-12-20 19:04:28','2024-12-20 19:04:28'),(75,'internal medicine, hematology','default_department.png','internal-medicine-hematology',NULL,'active','2024-12-20 19:04:29','2024-12-20 19:04:29'),(76,'family medicine, obstetrics and gynaecology','default_department.png','family-medicine-obstetrics-and-gynaecology',NULL,'active','2024-12-20 19:04:55','2024-12-20 19:04:55'),(77,'specialties','default_department.png','specialties',NULL,'active','2024-12-20 19:18:39','2024-12-20 19:18:39'),(78,'orthopedics surgery','default_department.png','orthopedics-surgery',NULL,'active','2024-12-20 19:25:27','2024-12-20 19:25:27');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `diagnostic_centers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `diagnostic_centers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `diagnostic_centers_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `diagnostic_centers` WRITE;
/*!40000 ALTER TABLE `diagnostic_centers` DISABLE KEYS */;
INSERT INTO `diagnostic_centers` VALUES (2,'Channing Mckee','channing-mckee','1733910157-diagnostic-center.jpg','Quia accusantium iru','2024-12-11 03:42:37','2024-12-11 03:42:37');
/*!40000 ALTER TABLE `diagnostic_centers` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_doctor_avatar.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_years` int unsigned DEFAULT '0',
  `address` text COLLATE utf8mb4_unicode_ci,
  `dob` date DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultation_fee` decimal(8,2) DEFAULT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci,
  `working_hours` json DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `city_id` bigint unsigned DEFAULT NULL,
  `department_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `doctors_slug_unique` (`slug`),
  UNIQUE KEY `doctors_email_unique` (`email`),
  UNIQUE KEY `doctors_license_number_unique` (`license_number`),
  KEY `doctors_department_id_foreign` (`department_id`),
  CONSTRAINT `doctors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=368 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (363,'Asst.Prof.Dr Abhinbhen','Saraya','-Asst.Prof.Dr Abhinbhen-Saraya-1734744320','1734744320-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,'<div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"> Treatments And Services </h2> <div class=\"grid gap-4\" data-astro-cid-ytf75x3n=\"\"> <ul id=\"treatment\" class=\"grid md:grid-cols-2\" data-astro-cid-ytf75x3n=\"\"> <li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Neuroimmunology</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Encephalitis</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Neurological Infections</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Memory Impairment</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Headache</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Demyelinating Diseases</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Neurological Diseases</li> </ul> <div id=\"treatment-all\" class=\"inline-flex items-center gap-4 md:border-0\" data-astro-cid-ytf75x3n=\"\"> <input type=\"checkbox\" name=\"treatment-all-input\" id=\"treatment-all-input\" class=\"peer hidden\" data-astro-cid-ytf75x3n=\"\"> <label id=\"label-more\" for=\"treatment-all-input\" class=\"cursor-pointer select-none pr-[1.875rem] font-mitr text-mp-primary\" data-astro-cid-ytf75x3n=\"\"> Show more </label> <i class=\"fa-sharp fa-solid fa-fw fa-angle-down pointer-events-none translate-x-[-1.875rem] text-mp-primary peer-checked:rotate-180\" data-astro-cid-ytf75x3n=\"\"></i> </div> </div> </div> <!-- Educations --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Educations</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><p><strong>Neurology Fellowship</strong>, <br>Chulalongkorn University, Thailand,&nbsp;2010</p>\r\n<p><strong>Internal Medicine&nbsp;Residency</strong>, <br>Chulalongkorn University, Thailand, 2007</p>\r\n<p><strong>M.D., Faculty of Medicine</strong>, <br>Chulalongkorn University, Thailand,&nbsp;2001</p></div> </div> <!-- Certificates --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Certifications</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><ul>\r\n<li>Thai Board of Neurology,&nbsp;2010</li>\r\n<li>Thai Board of Internal Medicine,2007<strong><br><br></strong></li>\r\n</ul></div> </div> <!-- Research and Publications -->','{}','active','2024-12-20 19:25:20','2024-12-20 19:25:20',NULL,10,30),(364,'Dr Adhisabandh','Chulakadabba','-Dr Adhisabandh-Chulakadabba-1734744322','1734744322-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,'<div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"> Treatments And Services </h2> <div class=\"grid gap-4\" data-astro-cid-ytf75x3n=\"\"> <ul id=\"treatment\" class=\"grid md:grid-cols-2\" data-astro-cid-ytf75x3n=\"\"> <li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Breast Surgery</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Vascular Surgery</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• General Surgery</li> </ul>  </div> </div> <!-- Educations --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Educations</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><p><strong>Fellowships:</strong><br>\r\n- FRCS Eng the Royal College of Surgeons of England,<br>\r\n1995<br>\r\n- FRCS Ed the Royal College of Surgeons of Edinburgh,<br>\r\n1994<br>\r\n<strong>Medical School:</strong><br>\r\n- M.D., Faculty of Medicine Siriraj Hospital Mahidol University, Thailand, <br>\r\n1986</p></div> </div> <!-- Certificates --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Certifications</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><p><strong>Board Certifications:<br>\r\n</strong>- Diploma of the Thai Sub Board of Vascular Surgery, <br>\r\n1995<br>\r\n- Diploma of the Thai Board of Surgery, <br>\r\n1992</p></div> </div> <!-- Research and Publications -->','{}','active','2024-12-20 19:25:22','2024-12-20 19:25:22',NULL,10,7),(365,'Dr Adisai','Varadisai','-Dr Adisai-Varadisai-1734744324','1734744324-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,'<div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"> Treatments And Services </h2> <div class=\"grid gap-4\" data-astro-cid-ytf75x3n=\"\"> <ul id=\"treatment\" class=\"grid md:grid-cols-2\" data-astro-cid-ytf75x3n=\"\"> <li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Ophthalmology</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Vitreoretinal Disease</li> </ul>  </div> </div> <!-- Educations --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Educations</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Fellowships:<br>\r\n- Certificate in Retina and vitreous, Chulalongkorn Hospital, Thailand,<br>\r\n2000<br>\r\nResidency:<br>\r\n- Ophthalmology, Chiang Mai University, Thailand<br>\r\n1998<br>\r\nMedical School:<br>\r\n- M.D., Faculty of Medicine, Prince of Songkhla University, Thailand,<br>\r\n1991<br></div> </div> <!-- Certificates --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Certifications</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Board Certifications:<br>\r\n- Diploma of Thai Board of Ophthalmology<br>\r\n1998</div> </div> <!-- Research and Publications -->','{}','active','2024-12-20 19:25:24','2024-12-20 19:25:24',NULL,10,35),(366,'Dr Akaradech','Pitakveerakul','-Dr Akaradech-Pitakveerakul-1734744327','1734744327-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,'<!-- Educations --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Educations</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><p><strong>Foot &amp; Ankle Surgery Fellowship</strong>,<br>Thammasat University Hospital, Thailand, 2016<br>Kantonsspital Baselland, Liestal, Switzerland, 2016<br>Schulthess Klinik, Zurich, Switzerland, 2018<br>University Center of Orthopaedics and Traumatology, University Hospital. \"Carls Gustav Carus\" in Dresden, Dresden, Germany, 2018<br>Swiss Ortho Center, Schmerzklinik, Basel, Switzerland, 2018</p>\r\n<p><strong>Orthopedics Surgery Residency</strong>,<br>Lerdsin Hospital, Department of Medical Services, Thailand, 2010</p>\r\n<p><strong>M.D., (Second Class Honors), Faculty of Medicine</strong>, <br>Vajira Hospital, Navamindradhiraj University, Thailand, 2007</p>\r\n<p><br><br></p></div> </div> <!-- Certificates --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Certifications</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><p>Diploma of Thai Board of Orthopedics Surgery, 2010</p></div> </div> <!-- Research and Publications -->','{}','active','2024-12-20 19:25:27','2024-12-20 19:25:27',NULL,10,78),(367,'Dr Akeanong','Worakitsitisatorn','-Dr Akeanong-Worakitsitisatorn-1734744329','1734744329-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,'<div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"> Treatments And Services </h2> <div class=\"grid gap-4\" data-astro-cid-ytf75x3n=\"\"> <ul id=\"treatment\" class=\"grid md:grid-cols-2\" data-astro-cid-ytf75x3n=\"\"> <li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Interventional Oncology</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Biliary Intervention</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Gastrointestinal Intervention</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Musculoskeletal Intervention</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Spine Intervention</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Arterial Intervention</li><li class=\"px-1 py-[2px]\" data-astro-cid-ytf75x3n=\"\">• Venous Intervention</li> </ul> <div id=\"treatment-all\" class=\"inline-flex items-center gap-4 md:border-0\" data-astro-cid-ytf75x3n=\"\"> <input type=\"checkbox\" name=\"treatment-all-input\" id=\"treatment-all-input\" class=\"peer hidden\" data-astro-cid-ytf75x3n=\"\"> <label id=\"label-more\" for=\"treatment-all-input\" class=\"cursor-pointer select-none pr-[1.875rem] font-mitr text-mp-primary\" data-astro-cid-ytf75x3n=\"\"> Show more </label> <i class=\"fa-sharp fa-solid fa-fw fa-angle-down pointer-events-none translate-x-[-1.875rem] text-mp-primary peer-checked:rotate-180\" data-astro-cid-ytf75x3n=\"\"></i> </div> </div> </div> <!-- Educations --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Educations</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><p><strong>Visiting Research Fellowship in Abdominal Imaging and Intervention</strong><br>\r\nUniversity of California, Los Angeles, USA<br>\r\n2016<br>\r\n<br>\r\n<strong>Fellowship in Body Intervention Radiology</strong><br>\r\nChulalongkorn University, Bangkok, Thailand<br>\r\n2011<br>\r\n<br>\r\n<strong>Residency - Diagnostic Radiology</strong> <br>\r\nChulalongkorn University, Thailand<br>\r\n2009<br>\r\n<br>\r\n<strong>Doctor of Medicine (Second Class Honor)</strong><br>\r\nFaculty of Medicine, Chulalongkorn University, Thailand<br>\r\n2003</p></div> </div> <!-- Certificates --> <div class=\"grid gap-6\" data-astro-cid-ytf75x3n=\"\"> <h2 class=\"text-title-m font-medium text-mp-secondary\" data-astro-cid-ytf75x3n=\"\">Certifications</h2> <div class=\"prose prose-base m-0 grid p-0 prose-a:text-mp-secondary\" data-astro-cid-ytf75x3n=\"\"><p><strong>Thai Sub-Board of Body Intervention Radiology</strong><br>\r\n2011<br>\r\n<br>\r\n<strong>Diagnostic Radiology</strong><br>\r\nThai Board of Diagnostic Radiology<br>\r\n2009</p></div> </div> <!-- Research and Publications -->','{}','active','2024-12-20 19:25:29','2024-12-20 19:25:29',NULL,10,62);
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `doctors_hospitals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors_hospitals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `doctor_id` bigint unsigned NOT NULL,
  `hospital_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=409 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors_hospitals` WRITE;
/*!40000 ALTER TABLE `doctors_hospitals` DISABLE KEYS */;
INSERT INTO `doctors_hospitals` VALUES (1,62,1),(2,63,1),(3,64,1),(4,65,1),(5,66,1),(6,67,1),(7,68,1),(8,69,1),(9,70,1),(10,1,1),(11,2,1),(12,3,1),(13,4,1),(14,5,1),(15,6,1),(16,7,1),(17,8,1),(18,9,1),(19,10,1),(20,11,1),(21,12,1),(22,13,1),(23,14,1),(24,15,1),(25,16,1),(26,17,1),(27,18,1),(28,19,1),(29,20,1),(30,21,1),(31,22,1),(32,23,1),(33,24,1),(34,25,1),(35,26,1),(36,27,1),(37,28,1),(38,29,1),(39,30,1),(40,31,1),(41,32,1),(42,33,1),(43,1,1),(44,2,1),(45,3,1),(46,4,1),(47,5,1),(48,6,1),(49,7,1),(50,8,1),(51,9,1),(52,10,1),(53,11,1),(54,12,1),(55,13,1),(56,14,1),(57,15,1),(58,16,1),(59,17,1),(60,18,1),(61,19,1),(62,20,1),(63,21,1),(64,22,1),(65,23,1),(66,24,1),(67,25,1),(68,26,1),(69,27,1),(70,28,1),(71,29,1),(72,30,1),(73,31,1),(74,32,1),(75,33,1),(76,34,1),(77,35,1),(78,36,1),(79,37,1),(80,38,1),(81,39,1),(82,40,1),(83,41,1),(84,42,1),(85,43,1),(86,44,1),(87,45,1),(88,46,1),(89,47,1),(90,48,1),(91,49,1),(92,50,1),(93,51,1),(94,52,1),(95,53,1),(96,54,1),(97,55,1),(98,56,1),(99,57,1),(100,58,1),(101,59,1),(102,60,1),(103,61,1),(104,62,1),(105,63,1),(106,64,1),(107,65,1),(108,66,1),(109,67,1),(110,68,1),(111,69,1),(112,70,1),(113,71,1),(114,72,1),(115,73,1),(116,74,1),(117,75,1),(118,76,1),(119,77,1),(120,78,1),(121,79,1),(122,80,1),(123,81,1),(124,82,1),(125,83,1),(126,84,1),(127,85,1),(128,86,1),(129,87,1),(130,88,1),(131,89,1),(132,90,1),(133,91,1),(134,92,1),(135,93,1),(136,94,1),(137,95,1),(138,96,1),(139,97,1),(140,98,1),(141,99,1),(142,100,1),(143,101,1),(144,102,1),(145,103,102),(146,104,102),(147,105,102),(148,106,102),(149,107,102),(150,108,102),(151,109,102),(152,110,102),(153,111,102),(154,112,102),(155,113,102),(156,114,102),(157,115,102),(158,116,102),(159,117,103),(160,118,103),(161,119,103),(162,120,103),(163,121,103),(164,122,103),(165,123,103),(166,124,103),(167,125,103),(168,126,103),(169,127,103),(170,128,103),(171,129,103),(172,130,103),(173,131,103),(174,132,103),(175,133,103),(176,134,103),(177,135,103),(178,136,103),(179,137,103),(180,138,103),(181,139,103),(182,140,103),(183,141,103),(184,142,103),(185,143,103),(186,144,103),(187,145,103),(188,146,103),(189,147,103),(190,148,103),(191,149,103),(192,150,103),(193,151,103),(194,152,103),(195,153,103),(196,154,103),(197,155,103),(198,156,103),(199,157,103),(200,158,103),(201,159,103),(202,160,103),(203,161,103),(204,162,103),(205,163,103),(206,164,103),(207,165,103),(208,166,103),(209,167,103),(210,168,103),(211,169,103),(212,170,103),(213,171,103),(214,172,103),(215,173,103),(216,174,103),(217,175,103),(218,176,103),(219,177,103),(220,178,103),(221,179,103),(222,180,103),(223,181,103),(224,182,103),(225,183,103),(226,184,103),(227,185,103),(228,186,103),(229,187,103),(230,188,103),(231,189,103),(232,190,103),(233,191,103),(234,192,103),(235,193,103),(236,194,103),(237,195,103),(238,196,103),(239,197,103),(240,198,103),(241,199,103),(242,200,103),(243,201,103),(244,202,103),(245,203,103),(246,204,103),(247,205,103),(248,206,103),(249,207,103),(250,208,103),(251,209,103),(252,210,103),(253,211,103),(254,212,103),(255,213,103),(256,214,103),(257,215,103),(258,216,103),(259,217,103),(260,218,103),(261,219,103),(262,220,103),(263,221,103),(264,222,103),(265,223,103),(266,224,103),(267,225,103),(268,226,103),(269,227,103),(270,228,103),(271,229,103),(272,230,103),(273,231,103),(274,232,103),(275,233,103),(276,234,103),(277,235,103),(278,236,103),(279,237,103),(280,238,103),(281,239,103),(282,240,103),(283,241,103),(284,242,103),(285,243,103),(286,244,103),(287,245,103),(288,246,103),(289,247,103),(290,248,103),(291,249,103),(292,250,103),(293,251,103),(294,252,103),(295,253,103),(296,254,103),(297,255,103),(298,256,103),(299,257,103),(300,258,103),(301,259,103),(302,260,103),(303,261,103),(304,262,103),(305,263,103),(306,264,103),(307,265,103),(308,266,103),(309,267,103),(310,268,103),(311,269,103),(312,270,103),(313,271,103),(314,272,103),(315,273,103),(316,274,103),(317,275,103),(318,276,103),(319,277,103),(320,278,103),(321,279,103),(322,280,103),(323,281,103),(324,282,103),(325,283,104),(326,284,104),(327,285,104),(328,286,104),(329,287,104),(330,288,104),(331,289,104),(332,290,104),(333,291,104),(334,292,104),(335,293,104),(336,294,104),(337,295,104),(338,296,104),(339,297,104),(340,298,104),(341,299,104),(342,300,104),(343,301,104),(344,302,104),(345,303,104),(346,304,104),(347,305,104),(348,306,104),(349,307,104),(350,308,104),(351,309,104),(352,310,104),(353,311,104),(354,312,104),(355,313,104),(356,314,104),(357,315,104),(358,316,104),(359,317,104),(360,318,104),(361,319,104),(362,320,104),(363,321,104),(364,322,104),(365,323,104),(366,324,104),(367,325,104),(368,326,104),(369,327,104),(370,328,104),(371,329,104),(372,330,104),(373,331,104),(374,332,104),(375,333,104),(376,334,104),(377,335,104),(378,336,104),(379,337,104),(380,338,104),(381,339,104),(382,340,104),(383,341,104),(384,342,104),(385,343,104),(386,344,104),(387,345,104),(388,346,104),(389,347,104),(390,348,104),(391,349,104),(392,350,104),(393,351,104),(394,352,104),(395,353,104),(396,354,104),(397,355,104),(398,356,104),(399,357,104),(400,358,104),(401,359,104),(402,360,104),(403,361,104),(404,362,104),(405,363,102),(406,364,102),(407,365,102),(408,366,102);
/*!40000 ALTER TABLE `doctors_hospitals` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `doctors_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors_languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `doctor_id` bigint unsigned NOT NULL,
  `language_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors_languages` WRITE;
/*!40000 ALTER TABLE `doctors_languages` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctors_languages` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `doctors_specialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctors_specialties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `speciality_id` bigint unsigned NOT NULL,
  `doctor_id` bigint unsigned NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors_specialties` WRITE;
/*!40000 ALTER TABLE `doctors_specialties` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctors_specialties` ENABLE KEYS */;
UNLOCK TABLES;
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

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `hospitals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_hospital.png',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moto` longtext COLLATE utf8mb4_unicode_ci,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `type` enum('General','Specialty','Cardiac','Oncology','Child Care','Orthopedic','Psychiatric','University','Rehabilitation','Trauma','Veteran','Rural','Private','Government','Critical Access','Outpatient','Long-Term Care','Research') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'General',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_in_homepage_slider` tinyint(1) NOT NULL DEFAULT '0',
  `city_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hospitals_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `hospitals` WRITE;
/*!40000 ALTER TABLE `hospitals` DISABLE KEYS */;
INSERT INTO `hospitals` VALUES (1,'Evercare Hospital Dhaka','evercare-hospital-dhaka','1734573640-hospital.jpg',NULL,NULL,NULL,NULL,NULL,NULL,0,'General','2024-12-18 20:00:40','2024-12-18 20:00:40',0,1),(103,'Bangkok Hospital','bangkok-hospital','1734719527-hospital.jpg',NULL,NULL,NULL,NULL,NULL,NULL,0,'General','2024-12-20 12:32:07','2024-12-20 12:32:07',0,10),(104,'Bumrungrad International Hospital','bumrungrad-international-hospital','1734743716-hospital.jpg','33 Soi Sukhumvit 3, Khlong Toei Nuea, Watthana, Bangkok 10110, Thailand',NULL,NULL,NULL,NULL,NULL,0,'General','2024-12-20 19:15:16','2024-12-20 19:15:16',0,10);
/*!40000 ALTER TABLE `hospitals` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `hospitals_labs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitals_labs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lab_id` bigint unsigned NOT NULL,
  `hospital_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hospitals_labs_lab_id_foreign` (`lab_id`),
  KEY `hospitals_labs_hospital_id_foreign` (`hospital_id`),
  CONSTRAINT `hospitals_labs_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE,
  CONSTRAINT `hospitals_labs_lab_id_foreign` FOREIGN KEY (`lab_id`) REFERENCES `labs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `hospitals_labs` WRITE;
/*!40000 ALTER TABLE `hospitals_labs` DISABLE KEYS */;
/*!40000 ALTER TABLE `hospitals_labs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `hospitals_specialities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitals_specialities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `speciality_id` bigint unsigned NOT NULL,
  `hospital_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `hospitals_specialities` WRITE;
/*!40000 ALTER TABLE `hospitals_specialities` DISABLE KEYS */;
/*!40000 ALTER TABLE `hospitals_specialities` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `labs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `labs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `labs` WRITE;
/*!40000 ALTER TABLE `labs` DISABLE KEYS */;
INSERT INTO `labs` VALUES (1,'Clinical Chemistry Lab','Analyzes blood and body fluids to detect chemical components.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(2,'Hematology Lab','Studies blood and its disorders, including cell counts and coagulation.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(3,'Microbiology Lab','Identifies and analyzes microorganisms, including bacteria and fungi.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(4,'Pathology Lab','Examines tissues and cells to diagnose diseases.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(5,'Immunology Lab','Focuses on the immune system and its related disorders.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(6,'Blood Bank (Transfusion Medicine)','Handles blood products for transfusions and ensures safety.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(7,'Toxicology Lab','Tests for toxic substances in biological samples.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(8,'Molecular Diagnostics Lab','Utilizes molecular biology techniques for disease diagnosis.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(9,'Genetics Lab','Analyzes genetic material to identify inherited disorders.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(10,'Serology Lab','Tests blood serum for antibodies and antigens.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(11,'Histology Lab','Prepares and examines tissue samples for disease diagnosis.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(12,'Cytology Lab','Studies cells from various body fluids to detect abnormalities.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(13,'Urinalysis Lab','Analyzes urine samples to diagnose health conditions.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(14,'Phlebotomy Lab','Handles blood sample collection and processing.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(15,'Radiology Lab','Uses imaging techniques to diagnose and monitor diseases.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(16,'Nuclear Medicine Lab','Uses radioactive materials for diagnosis and treatment.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(17,'Electrophysiology Lab','Studies electrical activity in the heart and nervous system.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(18,'Cardiology Lab (Cardiac Cath Lab)','Performs invasive tests and procedures on the heart.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(19,'Endocrinology Lab','Tests hormones and endocrine system functions.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(20,'Dermatopathology Lab','Examines skin samples to diagnose skin diseases.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(21,'Bacteriology Lab','Specifically focuses on the study of bacteria.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(22,'Virology Lab','Identifies and analyzes viruses and viral infections.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(23,'Parasitology Lab','Studies parasites and parasitic diseases.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(24,'Fungal Culture Lab','Cultivates and identifies fungi from clinical samples.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(25,'Clinical Trial Lab','Conducts laboratory tests for clinical research studies.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(26,'Point-of-Care Testing Lab','Provides immediate test results at the site of patient care.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(27,'Advanced Imaging Lab','Utilizes advanced imaging techniques like MRI and CT scans.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(28,'Sleep Study Lab (Polysomnography)','Monitors patients\' sleep patterns for sleep disorders.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(29,'Neurophysiology Lab','Studies the nervous system\'s functions through various tests.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(30,'Cytogenetics Lab','Analyzes chromosomes for genetic abnormalities.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(31,'Reproductive Lab (Andrology and IVF)','Focuses on reproductive health and fertility treatments.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(32,'Nutrition Lab (Dietetic Services)','Assesses nutritional needs and dietary planning.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(33,'Pediatric Lab','Provides lab services tailored for children\'s health.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(34,'Veterinary Lab (for animal studies)','Conducts lab tests and research related to animal health.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(35,'Orthopedic Lab (for joint studies)','Studies musculoskeletal disorders and injuries.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(36,'Oncology Lab (for cancer diagnostics)','Focuses on diagnosing and monitoring cancer.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(37,'Gastroenterology Lab','Analyzes digestive system issues and disorders.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(38,'Pulmonary Function Lab','Tests lung function and respiratory health.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(39,'Audiology Lab','Conducts hearing tests and assessments.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(40,'Physical Therapy Lab','Provides therapy and rehabilitation for physical injuries.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(41,'Radiation Oncology Lab','Delivers radiation treatment for cancer patients.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(42,'Infectious Disease Lab','Focuses on diagnosing and managing infectious diseases.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(43,'Chronic Disease Management Lab','Monitors and manages chronic health conditions.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(44,'Emergency Lab','Provides rapid testing and results for emergency cases.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(45,'Quality Control Lab','Ensures lab tests meet quality standards and regulations.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(46,'Research Lab (for clinical research)','Conducts experiments and studies for medical advancements.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(47,'Pharmacogenomics Lab','Studies how genes affect individual responses to drugs.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(48,'Bioinformatics Lab','Utilizes software and tools to analyze biological data.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(49,'Health Informatics Lab','Focuses on the management of health information systems.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(50,'Laboratory Information System (LIS) Lab','Manages data and processes within the laboratory.',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09');
/*!40000 ALTER TABLE `labs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Bangla',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(2,'English',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(3,'Hindi',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(4,'Tamil',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(5,'Thai',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09'),(6,'Malay',NULL,'2024-12-11 03:37:09','2024-12-11 03:37:09');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `main_sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main_sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `main_sliders` WRITE;
/*!40000 ALTER TABLE `main_sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `main_sliders` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_01_14_131713_create_tags_table',1),(6,'2024_01_04_120346_create_departments_table',1),(7,'2024_08_27_025427_create_countries_table',1),(8,'2024_09_01_113803_create_specialties_table',1),(9,'2024_09_21_123653_create_doctors_table',1),(10,'2024_09_21_123705_create_cities_table',1),(11,'2024_09_24_202513_create_settings_table',1),(12,'2024_09_28_183803_create_doctors_specialties_table',1),(13,'2024_09_29_231021_create_languages_table',1),(14,'2024_10_01_001859_create_labs_table',1),(15,'2024_10_14_131714_create_blogs_table',1),(16,'2024_11_18_090235_create_services_table',1),(17,'2024_12_09_113913_create_main_sliders_table',1),(18,'2024_12_11_051752_create_diagnostic_centers_table',1),(19,'2024_12_21_193630_create_hospitals_table',1),(20,'2024_12_21_195647_doctor_hospital_migration',1),(21,'2024_12_31_125637_create_appointments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_service_avatar.png',
  `blog_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `services_blog_id_foreign` (`blog_id`),
  CONSTRAINT `services_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site_name','Top Hospital Support ',NULL,NULL),(2,'site_url','http://www.tophospitalsupportbd.com',NULL,NULL),(3,'site_phone_number','+880123456789',NULL,NULL),(4,'site_phone_number_2','+880173456789',NULL,NULL),(5,'site_phone_number_3','+880173456789',NULL,NULL),(6,'site_email','admin@admin.com',NULL,NULL),(7,'site_email_2','moderator@admin.com',NULL,NULL),(8,'site_address','503 Old Buffalo Street Northwest #205, New York-3087',NULL,NULL),(9,'site_logo_url','images/site_logo_url.png',NULL,NULL),(10,'homepage_search_field_label','Find The Best Doctor',NULL,NULL),(11,'homepage_banner_image','new-banner-img.webp',NULL,NULL),(12,'aboutus_page_content','<strong>Apple</strong>',NULL,NULL),(13,'homepage_top_hospital_slider_title_text','dg hsdg hsdfg sdfgsdfg sdfg sdfgd sfg',NULL,NULL),(14,'homepage_top_doctor_slider_title_text','dg hsdg hsdfg sdfgsdfg sdfg sdfgd sfg',NULL,NULL),(15,'homepage_show_slide','1',NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `specialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specialties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_speciality.png',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `specialties_name_unique` (`name`),
  UNIQUE KEY `specialties_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `specialties` WRITE;
/*!40000 ALTER TABLE `specialties` DISABLE KEYS */;
INSERT INTO `specialties` VALUES (1,'Cardiology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(2,'Cardio thoracic','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(3,'Orthopedics','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(4,'Gastroenterology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(5,'General Surgery','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(6,'Oncology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(7,'Gynecology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(8,'Pediatrics','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(9,'Neonatology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(10,'Kidney Transplantation','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(11,'Liver Transplantation','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(12,'Pancreas Transplant','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(13,'Internal Medicine','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(14,'Plastic Surgery','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(15,'Urology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(16,'Physiotherapy','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(17,'Psychiatry','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(18,'Pulmonology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(19,'Dental','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(20,'ENT','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(21,'Emergency Medicine','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(22,'Rheumatology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(23,'Vascular Surgery','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(24,'Neurology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(25,'Ophthalmology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(26,'Dermatology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(27,'Endocrinology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(28,'Anesthesiology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(29,'Interventional Radiology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(30,'Nephrology','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(31,'Critical Care','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(32,'Neurosurgery','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(33,'Organ Transplantation','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02'),(34,'Robotic Surgery','default_speciality.png',NULL,NULL,'active','2024-12-11 03:37:02','2024-12-11 03:37:02');
/*!40000 ALTER TABLE `specialties` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Prof. Nicklaus Trantow DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(2,'Miss Savannah Kuhlman Jr.','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(3,'Zack Jast','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(4,'Theresa Crona','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(5,'Ms. Gregoria Kohler DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(6,'Janet Upton','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(7,'Dr. Kayla Witting DVM','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(8,'Stone Renner','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(9,'Nelda Cruickshank','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(10,'Dorthy Nicolas','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(11,'Leila Mertz','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(12,'Emelia Stroman','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(13,'Dr. Lester Corwin','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(14,'Demarco Wilderman','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(15,'Adela Baumbach DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(16,'Ford Rolfson','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(17,'Zachary Haley','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(18,'Clement Bayer','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(19,'Archibald Murphy','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(20,'Cassandre Connelly','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(21,'Prof. Stuart Johnson PhD','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(22,'Vivianne Hahn','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(23,'Trystan Russel','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(24,'Prof. Jarvis Kerluke DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(25,'Madelyn Moen','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(26,'Miss Pearline Osinski DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(27,'Otho Nicolas','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(28,'Eloy Wolf','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(29,'Sarah Strosin DVM','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(30,'William Schneider','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(31,'Howard Graham Jr.','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(32,'Mrs. Janice Schuster','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(33,'Arno Terry','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(34,'Forrest Walter','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(35,'Brisa Hodkiewicz','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(36,'Abigayle Thiel','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(37,'Prof. Sigrid Ruecker DVM','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(38,'Miss Janiya Lockman','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(39,'Jamar Boyer','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(40,'Dr. Maci Pouros II','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(41,'Lloyd Hirthe','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(42,'Shawna Ward','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(43,'Oma Gerlach','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(44,'Nathen Littel','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(45,'Mr. Orion Considine','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(46,'Lola Klocko IV','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(47,'Jewell Tromp DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(48,'Isabelle Will','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(49,'Clifton Eichmann III','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(50,'Karianne O\'Kon','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(51,'Prof. Norbert Turner IV','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(52,'Carmine Dietrich','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(53,'Nia Larkin','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(54,'Mr. Orlo Kutch','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(55,'Shane Dietrich','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(56,'Ms. Haylie Toy','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(57,'Dr. Frederick Cummings','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(58,'Jennifer Weber Jr.','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(59,'Kaelyn Runolfsson','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(60,'Riley Senger III','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(61,'Trevor Stanton','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(62,'Miss Vernice Bruen','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(63,'Miss Beverly Carter PhD','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(64,'Dr. Reanna Casper III','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(65,'Jerome Prohaska','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(66,'Laisha Ullrich','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(67,'Dr. Ariel Bartell','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(68,'Maci Labadie','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(69,'Mattie Deckow','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(70,'Jennifer O\'Keefe','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(71,'Ida Greenholt I','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(72,'Miss Celestine Mraz DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(73,'Ms. Una Larson','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(74,'Kane Kuhlman','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(75,'Prof. Rosalinda Powlowski','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(76,'Palma Ward','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(77,'Manley Terry','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(78,'Melyssa Leuschke V','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(79,'Vicente Gleason','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(80,'Miss Lia Yundt','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(81,'Ms. Viva Hagenes','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(82,'Eulah Breitenberg','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(83,'Mr. Peyton Wilkinson IV','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(84,'Alice Lehner','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(85,'Israel Crona','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(86,'Dr. Stanley Lynch','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(87,'Anika Orn','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(88,'Miss Cheyenne Sporer Sr.','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(89,'Mr. Cristopher Koepp I','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(90,'Dr. Adell Bailey','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(91,'Desiree Prohaska','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(92,'Andres Wunsch DDS','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(93,'Tobin O\'Kon','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(94,'Prof. Perry Lesch II','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(95,'Bette Schumm','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(96,'Anabelle Gorczany','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(97,'Nels Rice','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(98,'Mr. Mason Kutch','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(99,'Dr. Jalen Little Jr.','active','2024-12-11 03:37:09','2024-12-11 03:37:09'),(100,'Lafayette Grady','active','2024-12-11 03:37:09','2024-12-11 03:37:09');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `role` enum('client','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com',NULL,NULL,'$2y$12$s.CU00FtYnQGel0Crr.PCuOR8lQL950sA5llBdXtWBSnXuAJpgDrK','active','admin',NULL,NULL,'2024-12-11 03:37:10','2024-12-11 03:37:10');
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

