
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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Accident Emergency','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(2,'Anaesthesia and Pain Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(3,'Cancer Care Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(4,'Cardiac Electrophysiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(5,'Heart Failure and Interventional Cardiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(6,'Cardiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(7,'Cardiothoracic and Vascular Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(8,'Cardiothoracic Anaesthesia','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(9,'Child Development Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(10,'Counsellor','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(11,'Critical Care','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(12,'Dental and Maxillofacial Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(13,'Dermatology and Venereology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(14,'Diabetology and Endocrinology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(15,'Diagnostic and Interventional Radiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(16,'Dietetics and Nutrition','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(17,'ENT and Head Neck Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(18,'Fertility Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(19,'Gastroenterology and Hepatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(20,'General and Lap Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(21,'Haematology and Stem Cell Transplant','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(22,'Hip Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(23,'Internal Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(24,'Joint Care and Wellness Centre','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(25,'Kidney Transplant Program','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(26,'Lab Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(27,'Medical Oncology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(28,'Neonatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(29,'Nephrology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(30,'Neurology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(31,'Neurosurgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(32,'Nuclear Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(33,'Obstetrics and Gynaecology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(34,'Oncoplastic and Reconstructive Breast Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(35,'Ophthalmology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(36,'Orthopaedics','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(37,'Paediatric Cardiology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(38,'Paediatric Surgery and Paediatric Urology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(39,'Paediatrics','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(40,'Paediatrics and Neonatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(41,'Physical Medicine and Rehabilitation','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(42,'Plastic, Reconstructive and Cosmetic Surgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(43,'Psychiatry','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(44,'Radiation Oncology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(45,'Respiratory Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(46,'Rheumatology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(47,'Thyroid and Head-Neck Oncosurgery','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(48,'Transfusion Medicine','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06'),(49,'Urology','default_department.png',NULL,NULL,'active','2024-12-18 18:56:06','2024-12-18 18:56:06');
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
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Prof. Dr. Nazmun','Nahar','-Prof. Dr. Nazmun-Nahar-1734641548','1734641548-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:28','2024-12-19 14:52:28',NULL,1,35),(2,'Prof. Dr. Raju Titus','Chacko','-Prof. Dr. Raju Titus-Chacko-1734641553','1734641553-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:33','2024-12-19 14:52:33',NULL,1,27),(3,'Dr. Fahmida','Begum','-Dr. Fahmida-Begum-1734641555','1734641555-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:35','2024-12-19 14:52:35',NULL,1,29),(4,'Dr. Anita Marium','Islam','-Dr. Anita Marium-Islam-1734641558','1734641558-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:38','2024-12-19 14:52:38',NULL,1,23),(5,'Dr. Sabina','Sultana','-Dr. Sabina-Sultana-1734641564','1734641564-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:44','2024-12-19 14:52:44',NULL,1,28),(6,'Prof. Dr. Abdul Kader','Shaikh','-Prof. Dr. Abdul Kader-Shaikh-1734641568','1734641568-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:48','2024-12-19 14:52:48',NULL,1,30),(7,'Prof. Dr. Raihan','Hussain','-Prof. Dr. Raihan-Hussain-1734641570','1734641570-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:50','2024-12-19 14:52:50',NULL,1,32),(8,'Prof. ATM Mowladad','Chowdhury','-Prof. ATM Mowladad-Chowdhury-1734641571','1734641571-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:51','2024-12-19 14:52:51',NULL,1,30),(9,'Dr. Md. Mizanur','Rahman','-Dr. Md. Mizanur-Rahman-1734641573','1734641573-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:53','2024-12-19 14:52:53',NULL,1,26),(10,'Dr. Nikhat','Ara','-Dr. Nikhat-Ara-1734641574','1734641574-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:54','2024-12-19 14:52:54',NULL,1,26),(11,'Dr. Borhan Uddin','Ahmad','-Dr. Borhan Uddin-Ahmad-1734641576','1734641576-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:56','2024-12-19 14:52:56',NULL,1,23),(12,'Dr. Farzana','Islam','-Dr. Farzana-Islam-1734641579','1734641579-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:52:59','2024-12-19 14:52:59',NULL,1,9),(13,'Dr. Tamzeed','Ahmed','-Dr. Tamzeed-Ahmed-1734641580','1734641580-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:00','2024-12-19 14:53:00',NULL,1,5),(14,'Dr. Nikhat Shahla','Afsar','-Dr. Nikhat Shahla-Afsar-1734641590','1734641590-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:10','2024-12-19 14:53:10',NULL,1,23),(15,'Prof. (Col.) Dr. Md. Aminul','Islam','-Prof. (Col.) Dr. Md. Aminul-Islam-1734641591','1734641591-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:11','2024-12-19 14:53:11',NULL,1,31),(16,'Professor (Dr) M. Istiaque','Hossain','-Professor (Dr) M. Istiaque-Hossain-1734641596','1734641596-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:16','2024-12-19 14:53:16',NULL,1,28),(17,'Dr. Monowara','Begum','-Dr. Monowara-Begum-1734641598','1734641598-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:18','2024-12-19 14:53:18',NULL,1,33),(18,'Dr. Ferdous Shahriar','Sayed','-Dr. Ferdous Shahriar-Sayed-1734641599','1734641599-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:19','2024-12-19 14:53:19',NULL,1,27),(19,'Dr. Md. Sadiqul','Islam','-Dr. Md. Sadiqul-Islam-1734641603','1734641603-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:23','2024-12-19 14:53:23',NULL,1,46),(20,'Prof. (Col.) Dr. Md. Aminul','Islam','-Prof. (Col.) Dr. Md. Aminul-Islam-1734641608','1734641608-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:28','2024-12-19 14:53:28',NULL,1,31),(21,'Dr. M. Quamrul','Hassan','-Dr. M. Quamrul-Hassan-1734641614','1734641614-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:34','2024-12-19 14:53:34',NULL,1,39),(22,'Dr. Md. Abdul Karim','(Mithu)','-Dr. Md. Abdul Karim-(Mithu)-1734641615','1734641615-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:35','2024-12-19 14:53:35',NULL,1,47),(23,'Prof. Dr. Raihan','Hussain','-Prof. Dr. Raihan-Hussain-1734641616','1734641616-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:36','2024-12-19 14:53:36',NULL,1,32),(24,'Dr. Khandker Mahbubar','Rahman','-Dr. Khandker Mahbubar-Rahman-1734641619','1734641619-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:39','2024-12-19 14:53:39',NULL,1,30),(25,'Dr. Biswajit','Bhattacharjee','-Dr. Biswajit-Bhattacharjee-1734641622','1734641622-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:42','2024-12-19 14:53:42',NULL,1,44),(26,'Prof. Dr. Nazmun','Nahar','-Prof. Dr. Nazmun-Nahar-1734641624','1734641624-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 14:53:44','2024-12-19 14:53:44',NULL,1,35),(27,'Asst.Prof.Dr Abhinbhen','Saraya','-Asst.Prof.Dr Abhinbhen-Saraya-1734648722','1734648722-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:02','2024-12-19 16:52:02',NULL,1,30),(28,'Dr Adhisabandh','Chulakadabba','-Dr Adhisabandh-Chulakadabba-1734648724','1734648724-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:04','2024-12-19 16:52:04',NULL,1,7),(29,'Dr Adisai','Varadisai','-Dr Adisai-Varadisai-1734648726','1734648726-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:06','2024-12-19 16:52:06',NULL,1,35),(30,'Dr Ann','Chianchitlert','-Dr Ann-Chianchitlert-1734648738','1734648738-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:18','2024-12-19 16:52:18',NULL,1,12),(31,'Dr Apinan','Uthaipaisanwong','-Dr Apinan-Uthaipaisanwong-1734648744','1734648744-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:24','2024-12-19 16:52:24',NULL,1,7),(32,'Dr Apirak','Santi-ngamkun','-Dr Apirak-Santi-ngamkun-1734648746','1734648746-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:26','2024-12-19 16:52:26',NULL,1,7),(33,'Dr Apivat','Mavichak','-Dr Apivat-Mavichak-1734648748','1734648747-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:28','2024-12-19 16:52:28',NULL,1,35),(34,'Prof.Dr Arthi','Kruavit','-Prof.Dr Arthi-Kruavit-1734648759','1734648759-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:39','2024-12-19 16:52:39',NULL,1,7),(35,'Dr Bharani','Phairat','-Dr Bharani-Phairat-1734648766','1734648766-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:46','2024-12-19 16:52:46',NULL,1,12),(36,'Assoc.Prof.Dr Bharkbhum','Khambhiphant','-Assoc.Prof.Dr Bharkbhum-Khambhiphant-1734648768','1734648768-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:48','2024-12-19 16:52:48',NULL,1,35),(37,'Dr Boonyanat','Guensri','-Dr Boonyanat-Guensri-1734648777','1734648777-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:57','2024-12-19 16:52:57',NULL,1,12),(38,'Dr Bundit','Suntornlekha','-Dr Bundit-Suntornlekha-1734648779','1734648779-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:52:59','2024-12-19 16:52:59',NULL,1,7),(39,'Dr Buravej','Assavapongpaiboon','-Dr Buravej-Assavapongpaiboon-1734648781','1734648781-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:01','2024-12-19 16:53:01',NULL,1,35),(40,'Dr Chaiwut','Yottasurodom','-Dr Chaiwut-Yottasurodom-1734648788','1734648788-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:08','2024-12-19 16:53:08',NULL,1,7),(41,'Assist.Prof.Dr Chaiwut','Sawawiboon','-Assist.Prof.Dr Chaiwut-Sawawiboon-1734648790','1734648790-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:10','2024-12-19 16:53:10',NULL,1,23),(42,'Dr Chaiyapol','Chaweewannakorn','-Dr Chaiyapol-Chaweewannakorn-1734648792','1734648792-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:12','2024-12-19 16:53:12',NULL,1,12),(43,'Dr Chakkapan','Samphaiboon','-Dr Chakkapan-Samphaiboon-1734648798','1734648798-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:18','2024-12-19 16:53:18',NULL,1,12),(44,'Asst.Prof.Dr Abhinbhen','Saraya','-Asst.Prof.Dr Abhinbhen-Saraya-1734648801','1734648801-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:21','2024-12-19 16:53:21',NULL,10,30),(45,'Dr Adhisabandh','Chulakadabba','-Dr Adhisabandh-Chulakadabba-1734648803','1734648803-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:23','2024-12-19 16:53:23',NULL,10,7),(46,'Dr Adisai','Varadisai','-Dr Adisai-Varadisai-1734648805','1734648805-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:25','2024-12-19 16:53:25',NULL,10,35),(47,'Dr Ann','Chianchitlert','-Dr Ann-Chianchitlert-1734648817','1734648817-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:37','2024-12-19 16:53:37',NULL,10,12),(48,'Dr Apinan','Uthaipaisanwong','-Dr Apinan-Uthaipaisanwong-1734648823','1734648823-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:43','2024-12-19 16:53:43',NULL,10,7),(49,'Dr Apirak','Santi-ngamkun','-Dr Apirak-Santi-ngamkun-1734648825','1734648825-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:45','2024-12-19 16:53:45',NULL,10,7),(50,'Dr Apivat','Mavichak','-Dr Apivat-Mavichak-1734648827','1734648827-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:47','2024-12-19 16:53:47',NULL,10,35),(51,'Prof.Dr Arthi','Kruavit','-Prof.Dr Arthi-Kruavit-1734648838','1734648838-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:53:58','2024-12-19 16:53:58',NULL,10,7),(52,'Dr Bharani','Phairat','-Dr Bharani-Phairat-1734648844','1734648844-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:04','2024-12-19 16:54:04',NULL,10,12),(53,'Assoc.Prof.Dr Bharkbhum','Khambhiphant','-Assoc.Prof.Dr Bharkbhum-Khambhiphant-1734648846','1734648846-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:06','2024-12-19 16:54:06',NULL,10,35),(54,'Dr Boonyanat','Guensri','-Dr Boonyanat-Guensri-1734648855','1734648855-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:15','2024-12-19 16:54:15',NULL,10,12),(55,'Dr Bundit','Suntornlekha','-Dr Bundit-Suntornlekha-1734648857','1734648857-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:17','2024-12-19 16:54:17',NULL,10,7),(56,'Dr Buravej','Assavapongpaiboon','-Dr Buravej-Assavapongpaiboon-1734648858','1734648858-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:18','2024-12-19 16:54:18',NULL,10,35),(57,'Dr Chaiwut','Yottasurodom','-Dr Chaiwut-Yottasurodom-1734648865','1734648865-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:25','2024-12-19 16:54:25',NULL,10,7),(58,'Assist.Prof.Dr Chaiwut','Sawawiboon','-Assist.Prof.Dr Chaiwut-Sawawiboon-1734648867','1734648867-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:27','2024-12-19 16:54:27',NULL,10,23),(59,'Dr Chaiyapol','Chaweewannakorn','-Dr Chaiyapol-Chaweewannakorn-1734648869','1734648869-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:29','2024-12-19 16:54:29',NULL,10,12),(60,'Dr Chakkapan','Samphaiboon','-Dr Chakkapan-Samphaiboon-1734648875','1734648875-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:35','2024-12-19 16:54:35',NULL,10,12),(61,'Asst.Prof. Chakkapong','Chakkabat','-Asst.Prof. Chakkapong-Chakkabat-1734648877','1734648877-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:37','2024-12-19 16:54:37',NULL,10,44),(62,'Dr Chanan','Sukprakun','-Dr Chanan-Sukprakun-1734648881','1734648881-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:41','2024-12-19 16:54:41',NULL,10,32),(63,'Dr Chanasak','Hathaiareerug','-Dr Chanasak-Hathaiareerug-1734648883','1734648883-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:43','2024-12-19 16:54:43',NULL,10,41),(64,'Dr Chanitwan','Wichayachakorn','-Dr Chanitwan-Wichayachakorn-1734648887','1734648887-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:47','2024-12-19 16:54:47',NULL,10,13),(65,'Dr Chaowanun','Pornwaragorn','-Dr Chaowanun-Pornwaragorn-1734648891','1734648891-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:51','2024-12-19 16:54:51',NULL,10,7),(66,'Dr Chatchadaporn','Chunharas','-Dr Chatchadaporn-Chunharas-1734648893','1734648893-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:53','2024-12-19 16:54:53',NULL,10,13),(67,'Asst. Prof. Dr Chatchai','Mingmalairaks','-Asst. Prof. Dr Chatchai-Mingmalairaks-1734648895','1734648895-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:54:55','2024-12-19 16:54:55',NULL,10,7),(68,'Prof. Dr Chawalit','Lertbutsayanukul','-Prof. Dr Chawalit-Lertbutsayanukul-1734648902','1734648902-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:02','2024-12-19 16:55:02',NULL,10,44),(69,'Dr Chayapa','Thookhamme','-Dr Chayapa-Thookhamme-1734648908','1734648908-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:08','2024-12-19 16:55:08',NULL,10,23),(70,'Dr Chirihatai Phungbun Na','Ayughya','-Dr Chirihatai Phungbun Na-Ayughya-1734648910','1734648910-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:10','2024-12-19 16:55:10',NULL,10,12),(71,'Asst. Prof. Dr Chollasak','Thirapattaraphan','-Asst. Prof. Dr Chollasak-Thirapattaraphan-1734648914','1734648914-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:14','2024-12-19 16:55:14',NULL,10,7),(72,'Dr Chontavat','Suvanpiyasiri','-Dr Chontavat-Suvanpiyasiri-1734648917','1734648917-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:17','2024-12-19 16:55:17',NULL,10,13),(73,'Prof.Dr Chumpon','Wilasrusmee','-Prof.Dr Chumpon-Wilasrusmee-1734648924','1734648924-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:24','2024-12-19 16:55:24',NULL,10,7),(74,'Dr Chusak','Nudaeng','-Dr Chusak-Nudaeng-1734648927','1734648927-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:27','2024-12-19 16:55:27',NULL,10,7),(75,'Dr Chutanat','Yotsarawat','-Dr Chutanat-Yotsarawat-1734648929','1734648929-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:29','2024-12-19 16:55:29',NULL,10,30),(76,'Dr Chutima','Jirapinyo','-Dr Chutima-Jirapinyo-1734648933','1734648933-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:33','2024-12-19 16:55:33',NULL,10,7),(77,'Dr Disorn','Suwajanakorn','-Dr Disorn-Suwajanakorn-1734648941','1734648941-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:41','2024-12-19 16:55:41',NULL,10,35),(78,'Dr  Dudsadee','Mesiri','-Dr  Dudsadee-Mesiri-1734648944','1734648944-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:44','2024-12-19 16:55:44',NULL,10,7),(79,'Asst. Prof. Dr Indra','Wongyaofa','-Asst. Prof. Dr Indra-Wongyaofa-1734648953','1734648953-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:53','2024-12-19 16:55:53',NULL,10,12),(80,'Dr Jakapat','Vanichanan','-Dr Jakapat-Vanichanan-1734648957','1734648957-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:57','2024-12-19 16:55:57',NULL,10,23),(81,'Dr Jarin','Rojborwonwitaya','-Dr Jarin-Rojborwonwitaya-1734648959','1734648959-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:55:59','2024-12-19 16:55:59',NULL,10,19),(82,'Dr Jirada','Sringean','-Dr Jirada-Sringean-1734648967','1734648967-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:07','2024-12-19 16:56:07',NULL,10,30),(83,'Dr Jirapa','Champaiboon','-Dr Jirapa-Champaiboon-1734648968','1734648968-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:08','2024-12-19 16:56:08',NULL,10,41),(84,'Dr Jirat','Teerapradith','-Dr Jirat-Teerapradith-1734648970','1734648970-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:10','2024-12-19 16:56:10',NULL,10,7),(85,'Assist.Prof.Dr Jirayos','Chintanadilok','-Assist.Prof.Dr Jirayos-Chintanadilok-1734648972','1734648972-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:12','2024-12-19 16:56:12',NULL,10,23),(86,'Dr  Juntarut','Vaivanijkul','-Dr  Juntarut-Vaivanijkul-1734648974','1734648974-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:14','2024-12-19 16:56:14',NULL,10,35),(87,'Dr. Jutatip','Rattanaphan','-Dr. Jutatip-Rattanaphan-1734648977','1734648977-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:17','2024-12-19 16:56:17',NULL,10,30),(88,'Dr Kan','Okonogi','-Dr Kan-Okonogi-1734648986','1734648986-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:26','2024-12-19 16:56:26',NULL,10,23),(89,'Assoc. Prof. Dr Kanaungnit','Kingpetch','-Assoc. Prof. Dr Kanaungnit-Kingpetch-1734648990','1734648990-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:30','2024-12-19 16:56:30',NULL,10,32),(90,'Dr Kanjana','Boonchoo','-Dr Kanjana-Boonchoo-1734648994','1734648994-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:34','2024-12-19 16:56:34',NULL,10,13),(91,'Dr Kanjana','Shotelersuk','-Dr Kanjana-Shotelersuk-1734648995','1734648995-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:35','2024-12-19 16:56:35',NULL,10,44),(92,'Dr Kanokwan','Urthamapimuk','-Dr Kanokwan-Urthamapimuk-1734649001','1734649001-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:41','2024-12-19 16:56:41',NULL,10,12),(93,'Dr Kasem','Sirithanakul','-Dr Kasem-Sirithanakul-1734649003','1734649003-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:43','2024-12-19 16:56:43',NULL,10,23),(94,'Dr Katawaetee','Decharun','-Dr Katawaetee-Decharun-1734649005','1734649005-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:45','2024-12-19 16:56:45',NULL,10,7),(95,'Dr Kawin','Tangdhanakanond','-Dr Kawin-Tangdhanakanond-1734649007','1734649007-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:47','2024-12-19 16:56:47',NULL,10,23),(96,'Assoc.Prof.Dr Khamin','Chinsakchai','-Assoc.Prof.Dr Khamin-Chinsakchai-1734649011','1734649011-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:51','2024-12-19 16:56:51',NULL,10,7),(97,'Asst. Prof. Dr Kiatanant','Boonsiriseth','-Asst. Prof. Dr Kiatanant-Boonsiriseth-1734649012','1734649012-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:52','2024-12-19 16:56:52',NULL,10,12),(98,'Dr Kittipong','Wantavornprasert','-Dr Kittipong-Wantavornprasert-1734649016','1734649016-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:56','2024-12-19 16:56:56',NULL,10,13),(99,'Asst. Prof. Kittipong','Phinthusophon','-Asst. Prof. Kittipong-Phinthusophon-1734649018','1734649018-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:56:58','2024-12-19 16:56:58',NULL,10,30),(100,'Dr Kitwadee','Saksornchai','-Dr Kitwadee-Saksornchai-1734649022','1734649022-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:57:02','2024-12-19 16:57:02',NULL,10,44),(101,'Dr Konrawee','Keawcharoen','-Dr Konrawee-Keawcharoen-1734649027','1734649027-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:57:07','2024-12-19 16:57:07',NULL,10,12),(102,'Dr Korawan','Chandrachamnong','-Dr Korawan-Chandrachamnong-1734649028','1734649028-doctor.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,'{}','active','2024-12-19 16:57:08','2024-12-19 16:57:08',NULL,10,7);
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
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors_hospitals` WRITE;
/*!40000 ALTER TABLE `doctors_hospitals` DISABLE KEYS */;
INSERT INTO `doctors_hospitals` VALUES (1,62,1),(2,63,1),(3,64,1),(4,65,1),(5,66,1),(6,67,1),(7,68,1),(8,69,1),(9,70,1),(10,1,1),(11,2,1),(12,3,1),(13,4,1),(14,5,1),(15,6,1),(16,7,1),(17,8,1),(18,9,1),(19,10,1),(20,11,1),(21,12,1),(22,13,1),(23,14,1),(24,15,1),(25,16,1),(26,17,1),(27,18,1),(28,19,1),(29,20,1),(30,21,1),(31,22,1),(32,23,1),(33,24,1),(34,25,1),(35,26,1),(36,27,1),(37,28,1),(38,29,1),(39,30,1),(40,31,1),(41,32,1),(42,33,1),(43,1,1),(44,2,1),(45,3,1),(46,4,1),(47,5,1),(48,6,1),(49,7,1),(50,8,1),(51,9,1),(52,10,1),(53,11,1),(54,12,1),(55,13,1),(56,14,1),(57,15,1),(58,16,1),(59,17,1),(60,18,1),(61,19,1),(62,20,1),(63,21,1),(64,22,1),(65,23,1),(66,24,1),(67,25,1),(68,26,1),(69,27,1),(70,28,1),(71,29,1),(72,30,1),(73,31,1),(74,32,1),(75,33,1),(76,34,1),(77,35,1),(78,36,1),(79,37,1),(80,38,1),(81,39,1),(82,40,1),(83,41,1),(84,42,1),(85,43,1),(86,44,1),(87,45,1),(88,46,1),(89,47,1),(90,48,1),(91,49,1),(92,50,1),(93,51,1),(94,52,1),(95,53,1),(96,54,1),(97,55,1),(98,56,1),(99,57,1),(100,58,1),(101,59,1),(102,60,1),(103,61,1),(104,62,1),(105,63,1),(106,64,1),(107,65,1),(108,66,1),(109,67,1),(110,68,1),(111,69,1),(112,70,1),(113,71,1),(114,72,1),(115,73,1),(116,74,1),(117,75,1),(118,76,1),(119,77,1),(120,78,1),(121,79,1),(122,80,1),(123,81,1),(124,82,1),(125,83,1),(126,84,1),(127,85,1),(128,86,1),(129,87,1),(130,88,1),(131,89,1),(132,90,1),(133,91,1),(134,92,1),(135,93,1),(136,94,1),(137,95,1),(138,96,1),(139,97,1),(140,98,1),(141,99,1),(142,100,1),(143,101,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `hospitals` WRITE;
/*!40000 ALTER TABLE `hospitals` DISABLE KEYS */;
INSERT INTO `hospitals` VALUES (1,'Evercare Hospital Dhaka','evercare-hospital-dhaka','1734573640-hospital.jpg',NULL,NULL,NULL,NULL,NULL,NULL,0,'General','2024-12-18 20:00:40','2024-12-18 20:00:40',0,1);
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

