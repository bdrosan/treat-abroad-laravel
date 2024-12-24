
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `diagnostic_centers` WRITE;
/*!40000 ALTER TABLE `diagnostic_centers` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'Amani','Mann','ms-virgie-gerlach','placeholder_doctor_image.png','lrau@example.org','+1 (678) 941-1464','ILCSA552575','PhD',10,'49513 Meghan Underpass Apt. 515\nEast Elwyn, TN 99286-3295','1991-06-04','other','Latvia',404.70,'Molestiae sit amet non voluptas culpa minus. Est excepturi temporibus dolores perferendis quis molestiae. Molestiae voluptatem iusto autem odio accusantium.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,3,NULL),(2,'Ciara','Bauch','mr-francis-hammes','placeholder_doctor_image.png','abe31@example.org','+1.714.615.1192','ILCSA307521','MD',33,'2038 Hoeger Crossroad\nBriamouth, MI 25602','1995-06-01','female','Palestinian Territories',206.99,'Temporibus ipsam qui porro distinctio quisquam doloribus. Consequatur quia aliquid beatae doloribus natus est aperiam. Deleniti eius architecto aut velit iste quam. Alias asperiores libero dolor.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,1,NULL),(3,'Maria','Brakus','domenica-rau','placeholder_doctor_image.png','june94@example.net','1-480-444-6754','ILCSA547744','PhD',2,'606 Wintheiser Track\nParkerbury, AZ 13361','1994-11-08','other','Paraguay',371.09,'Facere dolor sint voluptatem et et quo maiores amet. Nisi velit deserunt autem placeat quos.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,12,NULL),(4,'Charity','Jerde','gabrielle-weimann','placeholder_doctor_image.png','stamm.elena@example.net','503-629-2509','ILCSA433266','MBBS',15,'258 Haley Stravenue Apt. 062\nWaelchiview, NY 84590','2021-06-11','female','Indonesia',395.99,'Possimus dolor nostrum quia placeat ut qui neque. Sapiente nobis consequatur ducimus pariatur est id sed consectetur. Perspiciatis dolorem voluptatibus unde facere ab sit accusantium. Et et perspiciatis velit eum voluptatibus voluptatem nihil.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,11,NULL),(5,'Harvey','Treutel','holden-schuppe','placeholder_doctor_image.png','keely28@example.org','1-623-951-4259','ILCSA223414','MBBS',17,'193 Ullrich Tunnel\nPort Ernestina, CT 71765-4827','1971-02-14','male','Qatar',368.06,'Unde ut et sed. Hic est aut exercitationem. Enim adipisci ea sint amet. Voluptas autem ratione quidem officia incidunt.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,11,NULL),(6,'Favian','Hegmann','rebeca-maggio','placeholder_doctor_image.png','frolfson@example.com','+1 (469) 952-0507','ILCSA882337','MD',36,'1464 Treutel Stream Apt. 556\nPort Robertamouth, CT 42004','1986-11-05','female','Czech Republic',277.38,'Ipsa magni aut suscipit commodi aut eligendi harum. Vel aliquid tenetur et et quia vitae. Voluptatem autem aperiam ab a rerum aliquam. Eveniet quia dolores et enim modi quas rerum dolores.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,7,NULL),(7,'Madyson','Stark','adam-mcglynn','placeholder_doctor_image.png','hane.ewald@example.net','+1.351.366.2662','ILCSA335284','MBBS',11,'1846 Darrick Vista Suite 631\nNorth Rosina, DC 71700-3184','1986-05-17','male','Pitcairn Islands',82.34,'Atque ad voluptatibus officiis. Quis soluta consequatur fugiat nostrum.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,10,NULL),(8,'Frieda','Kilback','amiya-douglas','placeholder_doctor_image.png','andreanne78@example.org','+1-325-861-4620','ILCSA041373','PhD',38,'15398 Bosco Orchard Suite 935\nJaylentown, IL 70315','2000-04-12','other','Saint Pierre and Miquelon',302.38,'Iusto minus perferendis alias ex. Sed consequatur molestiae cupiditate veritatis molestiae quo. Nisi blanditiis cum et laboriosam exercitationem tempora.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,1,NULL),(9,'Anita','Hill','dr-kacey-connelly-md','placeholder_doctor_image.png','paucek.katlyn@example.net','+13525198244','ILCSA126968','MD',34,'25896 Bartell Mountain Suite 162\nWest Simeonmouth, SC 88756','2017-03-22','other','Cape Verde',433.86,'Minima molestiae quia ut et voluptas ut. Ea qui aut iste aut molestiae omnis molestiae. Non asperiores ipsum omnis veritatis dolorum excepturi quibusdam. Aut debitis doloribus porro nam consequatur et assumenda.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:03','2024-12-11 03:37:03',NULL,8,NULL),(10,'Gloria','O\'Reilly','dr-aditya-schulist','placeholder_doctor_image.png','cfahey@example.net','1-318-284-3753','ILCSA816331','DO',38,'8870 Katelynn Oval\nLake Lucile, MT 81211-4209','1992-03-30','female','Lithuania',250.39,'Modi sequi libero reprehenderit dolores a molestiae. Voluptas ut error sit autem et consectetur.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,3,NULL),(11,'Orpha','Dibbert','david-rippin-i','placeholder_doctor_image.png','damon39@example.com','+1.580.770.3077','ILCSA145926','MD',22,'73829 Flatley Islands Suite 637\nRiceborough, CT 23642','1972-07-12','male','Kyrgyz Republic',68.23,'Laudantium consequatur dolorem eius reprehenderit quisquam enim error porro. Eos vitae consequatur in temporibus. Nostrum est consectetur veritatis ut sed est earum. Illo omnis labore explicabo consequatur.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,12,NULL),(12,'Haven','Kreiger','mr-garret-shanahan','placeholder_doctor_image.png','asawayn@example.com','+1-912-420-7499','ILCSA870519','MD',15,'4952 Gustave Forge Suite 724\nSouth Howellland, WY 18352-2896','1990-12-05','female','Bosnia and Herzegovina',416.34,'Quibusdam rerum qui qui et fugiat deleniti et. Neque voluptatibus libero minus sed molestias illum voluptatem. Animi nam sint nemo.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,6,NULL),(13,'Davin','Funk','ms-kylie-hand','placeholder_doctor_image.png','charlene00@example.com','1-938-550-1249','ILCSA665129','DO',31,'57334 Derek Track Apt. 203\nLindgrenberg, DE 06800-6259','1974-08-10','other','Cyprus',406.57,'Vero aperiam excepturi qui pariatur quo quia ipsum velit. Placeat voluptatem aut adipisci non necessitatibus quis quidem nesciunt. Est enim quas sint veniam sequi non. Sint odit beatae velit eum quia.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,8,NULL),(14,'Rocio','Schaden','dr-lavon-funk','placeholder_doctor_image.png','ethyl.jacobi@example.net','1-808-727-5061','ILCSA665103','DO',19,'73173 Tremblay Spur Apt. 433\nDasiaport, OH 34709-9018','1973-06-02','other','Dominica',480.77,'Impedit nobis ducimus dolor et quod et. Sint sit dolores quis vel vel. Odio delectus vero sunt nostrum.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,8,NULL),(15,'August','Luettgen','dr-vena-heathcote-md','placeholder_doctor_image.png','hpaucek@example.net','+1.253.744.4663','ILCSA672999','DO',6,'73747 Hauck Trace Apt. 861\nMertzmouth, LA 90570','2007-12-12','male','French Southern Territories',270.00,'Eveniet dolorum odit ratione qui voluptatem fuga quibusdam. Voluptas eveniet cum voluptate autem est. Quibusdam est rerum sequi tenetur at nam. Illo quis omnis eos magni aut est assumenda aliquam.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,7,NULL),(16,'Samanta','Nitzsche','emilie-yost','placeholder_doctor_image.png','thad06@example.org','(786) 566-9117','ILCSA427006','MBBS',32,'8802 Dominic Dam\nLake Gayburgh, IN 40474','1971-05-19','other','Madagascar',324.68,'Velit dolores atque ullam facilis consequatur cum. Ab aut architecto non. Aperiam enim molestiae blanditiis et eum aut. Ut dolorem quas recusandae vero ut accusamus saepe. Quibusdam ea corporis itaque laborum.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,10,NULL),(17,'Kenyon','Langosh','jordan-gusikowski','placeholder_doctor_image.png','nolan.clifton@example.org','+19366274216','ILCSA323818','MD',36,'1586 Kulas Loop Suite 975\nGottliebport, NY 86474-9340','2018-10-25','other','Saint Helena',187.51,'Beatae fugit voluptate dolore qui dolorum. Ea eum modi labore sed. Voluptas dignissimos voluptatum adipisci eaque dolores dolorum minus consequatur. Ab aut vel maiores vero.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,11,NULL),(18,'Isabelle','Upton','abbey-jerde','placeholder_doctor_image.png','meaghan.kertzmann@example.com','251.539.8157','ILCSA120436','PhD',29,'8170 Meggie Bridge\nLazaroside, WY 25006','1976-09-20','other','French Guiana',283.83,'Et aut cumque reprehenderit ab rerum. Libero aliquam beatae qui nesciunt est quisquam sint dolorem. Aut sed nihil assumenda maxime sit eaque sapiente. Distinctio maiores quos qui commodi.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,4,NULL),(19,'Guillermo','Olson','ms-astrid-oconner','placeholder_doctor_image.png','lonie.fay@example.com','+1.859.305.7763','ILCSA063757','DO',5,'3739 Erdman Crossing\nEast Kelly, TX 63558-9694','1988-12-26','male','Lesotho',264.92,'Facilis unde sed voluptatem neque recusandae aut. Nobis totam dolore est aut natus. Ab eligendi accusamus recusandae sunt illum ut quibusdam nobis. Placeat earum consequatur quo sit deserunt omnis. Nemo quod expedita sit quis repudiandae.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,6,NULL),(20,'Alfreda','Lowe','ayden-fay-iii','placeholder_doctor_image.png','otis70@example.net','220.878.3718','ILCSA427897','DO',40,'54226 Thompson Crest\nUptonmouth, CT 11585','2010-03-22','male','Svalbard & Jan Mayen Islands',106.80,'Dolorem tempore ab aut nisi sit sit qui. Dolores voluptas repellendus ea aut. Veritatis qui porro quos voluptatem. Aspernatur eos earum ipsum pariatur minus doloremque aperiam.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:04','2024-12-11 03:37:04',NULL,5,NULL),(21,'Giovanni','Fay','bettye-buckridge','placeholder_doctor_image.png','mosciski.sigurd@example.org','620-622-8345','ILCSA047537','PhD',4,'3210 Sabrina Forge Suite 976\nOrtizmouth, ME 89632-1481','2003-06-28','female','Benin',335.53,'Excepturi et eaque nulla eaque dolores fugiat. Ea veniam voluptate qui. Nulla alias id voluptatum non sit accusantium.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,2,NULL),(22,'Jade','Stamm','lauretta-bartell-ii','placeholder_doctor_image.png','koss.wendy@example.org','+1.929.235.7495','ILCSA782593','PhD',10,'10386 Gavin Stream Suite 670\nLowechester, IN 10179-8089','1972-01-31','male','Wallis and Futuna',140.02,'Tempora ab nemo inventore in dolor maxime. Minima quod atque qui sunt corporis adipisci. Autem soluta consectetur ex impedit et. Quaerat quia quisquam quod inventore.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,2,NULL),(23,'Ethel','Abshire','jayne-hill','placeholder_doctor_image.png','leif56@example.org','+1-678-899-7776','ILCSA601064','DO',23,'93209 Kling Motorway Apt. 561\nFreemanfurt, NY 36710','2011-06-13','female','Burundi',355.42,'Est provident soluta corporis eos modi ea omnis. Tenetur asperiores et quia natus voluptatibus dolor. Nam deleniti quas eius excepturi quo non qui. Error id dolores suscipit numquam maxime incidunt.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,3,NULL),(24,'Sheldon','Hackett','mustafa-jones','placeholder_doctor_image.png','vita16@example.org','(351) 417-4644','ILCSA067417','PhD',27,'95650 Franecki Summit\nJacquesstad, FL 01766','1987-03-09','male','Lithuania',246.14,'Laboriosam placeat cupiditate vitae aut perspiciatis sed. Itaque laborum eveniet iure consequatur architecto repudiandae. Sed autem voluptas consequatur iusto id recusandae consequuntur.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,9,NULL),(25,'Joshua','Bins','mrs-tianna-koepp-iv','placeholder_doctor_image.png','yost.mac@example.org','1-650-252-7366','ILCSA185117','DO',32,'89312 Lehner Station Apt. 427\nNorth Douglas, FL 20714-1717','1980-05-27','male','Samoa',458.17,'Aut ullam voluptas asperiores esse cum maiores. Quia cupiditate est et voluptatem necessitatibus totam. Ut sed earum magnam id ipsam nobis. Ex nobis a rerum impedit.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,2,NULL),(26,'Elwin','Hauck','mrs-carolyne-jacobs','placeholder_doctor_image.png','rashad42@example.com','361.846.2472','ILCSA000492','DO',7,'48714 Kilback Square Suite 763\nBrakuston, OK 91290-4713','2007-05-27','female','Korea',168.21,'Dolores et et sit aut id amet cumque. Voluptatem qui fugit voluptate aut.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,4,NULL),(27,'Madalyn','Friesen','alda-ruecker','placeholder_doctor_image.png','nikolaus.maggie@example.org','+1.806.890.1303','ILCSA914555','MBBS',1,'71603 Amiya Lock Apt. 167\nKeshaunstad, HI 34995','2023-09-23','female','Guadeloupe',303.55,'Non molestiae doloribus eligendi. Sunt nemo corporis sed ut tempora nesciunt. Odio aut quaerat nostrum iste numquam qui iusto voluptatum. Est cum est accusamus. Debitis qui ex qui quis mollitia voluptatem.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,2,NULL),(28,'Brenda','Harvey','maxime-bradtke','placeholder_doctor_image.png','considine.norwood@example.net','(765) 798-9569','ILCSA208467','DO',12,'195 Gleichner Roads\nHaleyhaven, VT 68559-7841','1974-08-23','other','Slovenia',483.16,'Praesentium et vel quae iste. Veniam et quasi dolorem hic non. Aut nemo autem voluptatum molestiae ducimus ex ut. Expedita ut minus accusamus.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,1,NULL),(29,'Hilda','O\'Reilly','lexus-spencer','placeholder_doctor_image.png','lrunolfsdottir@example.org','347-419-0703','ILCSA367979','DO',38,'25445 Lincoln Spring\nBorermouth, MO 06316','2015-08-27','female','Portugal',89.13,'Accusantium corporis magnam delectus. Ducimus rerum dolor sed culpa. Voluptatem beatae cupiditate quo atque modi assumenda.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:05','2024-12-11 03:37:05',NULL,12,NULL),(30,'Amaya','VonRueden','dr-idella-cassin-phd','placeholder_doctor_image.png','vanessa17@example.com','714-919-1284','ILCSA738628','MD',24,'12121 Cecile Divide\nStantonshire, OK 78845-7809','1994-06-02','male','Sao Tome and Principe',336.51,'Autem qui impedit consequuntur accusantium totam pariatur esse hic. Autem nobis suscipit earum delectus officiis accusantium excepturi cumque. Autem ut amet nemo quae. Adipisci ut et sunt et pariatur.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,2,NULL),(31,'Celia','Bergstrom','zula-stanton','placeholder_doctor_image.png','natasha40@example.com','(248) 787-0524','ILCSA539704','PhD',12,'76093 Considine Locks Suite 233\nEast Merrittchester, NV 49518','1971-02-22','male','Saint Vincent and the Grenadines',197.65,'Maiores exercitationem dignissimos commodi et. Numquam doloremque nam sit expedita ipsum. Expedita quasi quis rerum. Quos quos eius architecto ullam sint tenetur est ipsam. Repellendus sint numquam ex ratione aspernatur fugiat.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,7,NULL),(32,'Savannah','Mayert','amber-kuvalis-sr','placeholder_doctor_image.png','bahringer.denis@example.net','(938) 835-0609','ILCSA737450','DO',16,'2637 Kayli Mills\nSouth Stewart, NH 58499','2003-10-18','other','Sudan',143.21,'Incidunt nihil repellendus ut. Voluptatibus illo omnis porro. Necessitatibus rerum molestiae reprehenderit earum et. Expedita et ad fugit modi pariatur quod ut.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,4,NULL),(33,'Gerry','Turcotte','marian-mueller','placeholder_doctor_image.png','geraldine21@example.com','+1.984.585.7486','ILCSA803210','MBBS',20,'5366 Greg Knolls\nWest Vidalburgh, IL 36628-4360','2024-07-14','female','Dominica',261.65,'Aut ipsa sunt quaerat id praesentium et. Iusto id repellendus aut eaque eos ipsum. Voluptatem cumque corrupti nisi non. Ex magni minima omnis fugit autem quis occaecati eveniet.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,3,NULL),(34,'Hardy','Lesch','lucie-hane','placeholder_doctor_image.png','theo.shanahan@example.org','(534) 410-6696','ILCSA826550','DO',5,'98418 Jevon Isle Apt. 893\nCeciliaview, WY 70561-2341','2003-11-07','other','Czech Republic',226.06,'Ducimus veritatis nihil non. Autem consequatur fugit voluptatem nesciunt consequatur deleniti. Inventore et tempora eveniet maiores optio magnam dolor animi.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,9,NULL),(35,'Jacquelyn','Franecki','melisa-hahn','placeholder_doctor_image.png','ahahn@example.net','+12403147601','ILCSA195847','PhD',29,'4513 Nader Way Apt. 202\nEast Reneeville, AL 68068','2006-12-30','other','Andorra',480.66,'Quisquam perferendis est occaecati. Quae non ea ut aut veniam. Qui esse ea a nesciunt quidem. Eaque error veritatis qui blanditiis molestias dolorem fugiat est. Et qui omnis voluptatum maxime.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,12,NULL),(36,'Preston','McDermott','mr-jarrod-reinger-i','placeholder_doctor_image.png','jarred44@example.org','+1-573-624-3842','ILCSA882997','MBBS',22,'5327 Buford Crossroad\nKassandraville, MA 44800-4902','2004-07-25','female','Libyan Arab Jamahiriya',65.23,'In ut voluptatem error quam nam voluptas aut. Fugiat ut esse qui laudantium eos. Esse sunt minima ex est enim eum explicabo.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,7,NULL),(37,'Mariana','Wiegand','laurie-damore','placeholder_doctor_image.png','glittle@example.com','1-256-449-2855','ILCSA414631','PhD',19,'27489 Boehm Squares\nBotsfordville, ME 83081-7607','2000-07-02','female','Afghanistan',202.86,'Sunt neque cupiditate sapiente earum. Voluptatem cupiditate praesentium a veritatis. Fugit hic earum similique quis et. Rerum corrupti et repellat aspernatur.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,9,NULL),(38,'Ron','Goodwin','nelle-hagenes','placeholder_doctor_image.png','tveum@example.com','+17602330644','ILCSA824720','MD',15,'27284 Runte View Suite 300\nJulianside, CA 16572-5554','2000-09-16','female','Benin',178.49,'Dolorum placeat id sed reprehenderit. Aut omnis similique ab aut sunt consectetur. Explicabo voluptas nostrum quam sit ut eum. Soluta quibusdam consequatur ipsam tenetur omnis.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,12,NULL),(39,'Forest','Walter','mrs-cecile-kuhic','placeholder_doctor_image.png','vickie.schuppe@example.net','1-267-635-1967','ILCSA261149','MD',0,'4082 Beaulah Street\nNew Nadia, VA 44196-9771','1980-07-23','other','Western Sahara',148.27,'Vero a nobis animi eum magni. Odio eos sit et. Vitae eaque sunt molestias. Atque quia odio sit omnis vero.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,5,NULL),(40,'Emily','Kessler','leanna-steuber-ii','placeholder_doctor_image.png','runolfsson.prince@example.com','225.364.5435','ILCSA115179','PhD',4,'878 Carson Camp Suite 265\nEast Jerrell, ID 11107','1978-06-27','female','Micronesia',216.80,'Non quidem consequatur dicta nulla. Porro enim accusamus ipsum at. Quasi neque officiis vero nihil architecto aspernatur. Aliquid eligendi aut iste consequatur et tempore sunt iure.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:06','2024-12-11 03:37:06',NULL,6,NULL),(41,'Chelsey','Klocko','keara-mcglynn','placeholder_doctor_image.png','rath.gino@example.com','858-680-6838','ILCSA618634','MD',5,'1705 Estella Forest\nLake Horacio, IN 63881-8957','2007-01-11','male','Cape Verde',349.28,'Iste et doloremque reiciendis. Iste quo odit suscipit perferendis sed repudiandae sit. Deserunt quaerat at consequatur. Laborum enim tenetur ex minus qui tempora et reiciendis.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,6,NULL),(42,'Caleigh','Jerde','lisette-heidenreich-jr','placeholder_doctor_image.png','aisha43@example.net','440.730.4930','ILCSA621552','MBBS',31,'7937 Dawson Knolls Apt. 407\nSouth Lucieville, IL 16252-7884','2012-12-05','other','Mauritania',466.82,'In illum aliquam et voluptatem sint et nisi. Aut eum sequi est omnis. Quas vero vel id dolores et exercitationem quia eaque. Dicta vero ut consequatur maxime repellendus magnam. Placeat iusto nihil non at dolores.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,12,NULL),(43,'Nolan','Ziemann','miss-leora-hermiston','placeholder_doctor_image.png','myrtis87@example.net','260.285.8459','ILCSA824968','MBBS',37,'47848 Ullrich Stream Suite 948\nLake Bethanyberg, PA 54633','1991-05-08','other','Guernsey',387.37,'Sapiente et molestias sed sunt voluptatem qui accusantium. Ipsam reprehenderit ducimus repellendus deserunt id quia molestias ratione. Porro et voluptatum labore quibusdam. Harum earum blanditiis soluta. Quo eos quam recusandae optio.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,1,NULL),(44,'Alan','Rau','maia-ratke','placeholder_doctor_image.png','camille41@example.com','+1 (607) 539-6431','ILCSA146850','PhD',23,'20865 Rodriguez Turnpike\nDonnieside, VT 08094-6799','2022-01-26','female','Faroe Islands',451.14,'Quisquam minima et adipisci cupiditate voluptatibus nesciunt. Id aperiam tenetur quae cupiditate necessitatibus porro et vitae. Itaque perspiciatis laboriosam reprehenderit est unde.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,12,NULL),(45,'Aditya','Berge','dr-katelin-mitchell-sr','placeholder_doctor_image.png','wolf.alta@example.com','682-607-4925','ILCSA205241','MBBS',22,'218 McDermott Lock\nWest Bertram, MS 74398','2013-04-15','other','El Salvador',451.07,'Quibusdam non accusantium modi repudiandae. Quas velit sit qui vel eos ea. Ipsam cupiditate voluptas earum qui ipsum sit iste. Consectetur qui incidunt ut rerum at.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,12,NULL),(46,'Montana','Schmitt','cory-romaguera-jr','placeholder_doctor_image.png','ggreen@example.org','878-271-7411','ILCSA778500','PhD',23,'6891 Brekke Trail\nNakiamouth, HI 18672','1978-07-14','male','British Indian Ocean Territory (Chagos Archipelago)',481.71,'Est et eveniet iste totam hic et. Consequatur fuga sint ut et. Sed soluta quo voluptatum sunt.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,2,NULL),(47,'Reed','Smith','chanel-mitchell','placeholder_doctor_image.png','claudine32@example.net','682-831-6089','ILCSA113144','MD',37,'555 Rowan Harbors\nJosephinehaven, SD 64899','1989-01-24','other','Malta',229.62,'Natus omnis facere porro consectetur quo. Et amet et voluptate nobis sit.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,8,NULL),(48,'Demetris','O\'Reilly','eunice-bergstrom-iv','placeholder_doctor_image.png','hane.samanta@example.com','959-942-8854','ILCSA427881','DO',5,'40554 Orval Loop\nMarvinport, SD 15619','1985-05-05','male','Austria',321.87,'Aliquid sint dolor ducimus ut rerum nulla. Rem repudiandae reiciendis aut quaerat repellat quia. Placeat enim aut alias et. Corporis sint voluptatem error odio.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,9,NULL),(49,'Willow','Keebler','fermin-considine-ii','placeholder_doctor_image.png','schumm.melvin@example.org','+15185446374','ILCSA471314','PhD',15,'2990 Erika Ranch Apt. 672\nO\'Connellhaven, GA 59418-7202','1974-08-15','other','Palau',397.90,'Voluptates est quae quod quo. Voluptas nulla tenetur repellat facere quasi. Maiores natus inventore suscipit suscipit voluptatibus molestiae. Ducimus maiores enim quaerat incidunt corporis voluptatibus odit. Dignissimos tempore molestiae provident ipsam dolor.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,10,NULL),(50,'Hannah','Kulas','lacy-runte','placeholder_doctor_image.png','gschroeder@example.net','+1-301-651-8527','ILCSA844496','MD',2,'7414 Domenic Ferry\nClovisport, HI 65848','1988-12-09','male','Svalbard & Jan Mayen Islands',133.36,'Quis ut ab explicabo ipsa sit. Magni eum voluptas soluta sunt accusantium. Minima rerum ad incidunt officia. Alias ducimus voluptatibus iste error animi ea natus repellat. Sequi neque nisi tempora omnis.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:07','2024-12-11 03:37:07',NULL,11,NULL),(51,'Leopoldo','Schiller','prof-angus-considine-iii','placeholder_doctor_image.png','macejkovic.kaleb@example.org','(952) 256-8439','ILCSA122902','PhD',38,'802 Cronin Glen\nMargiebury, VA 05127','1972-06-27','other','Malaysia',357.01,'Molestiae unde libero pariatur suscipit unde. Sit quam quos delectus doloremque doloribus. Ipsam sunt tenetur nihil vel provident ut.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,12,NULL),(52,'Alexandro','Shields','stone-mcglynn','placeholder_doctor_image.png','yhyatt@example.org','+1-435-756-0374','ILCSA108008','DO',39,'61871 Olin Causeway\nLake Lazaroberg, WV 60781','1971-05-22','female','Saint Kitts and Nevis',442.02,'Voluptatem ut tempore quibusdam ipsam accusantium perferendis ut. Natus aperiam dolor est facilis molestiae pariatur quasi.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,2,NULL),(53,'Alanis','Lehner','prof-minnie-corkery','placeholder_doctor_image.png','yundt.kameron@example.net','(740) 698-7739','ILCSA724362','MBBS',17,'894 Upton Walks\nWest Lolita, OK 19212-3369','2007-05-01','male','Gabon',304.06,'Laudantium explicabo nisi sit. Neque reprehenderit blanditiis consectetur. Fugiat non est est qui voluptatum aperiam vero. Tempora in reiciendis a sint repellendus velit.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,2,NULL),(54,'Leo','Bechtelar','esperanza-erdman','placeholder_doctor_image.png','klangosh@example.com','603.454.1958','ILCSA046872','MBBS',22,'33848 Howe Islands\nElzafurt, NV 46758','1981-04-17','female','Gambia',424.05,'Dolores suscipit sit velit magni. Vitae doloremque repudiandae maxime. Esse laborum ex qui accusantium. Ipsa esse quis praesentium qui saepe eos.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,1,NULL),(55,'Brody','Tremblay','prof-veronica-sawayn','placeholder_doctor_image.png','ometz@example.com','(440) 914-8655','ILCSA909968','DO',37,'8779 Erica Hills\nConroyland, LA 07771','1994-05-26','other','Aruba',139.50,'Ad ex illo nostrum debitis vel praesentium. Aut itaque sit aut aut delectus. Pariatur doloribus perferendis nobis et et voluptas architecto voluptatem.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,10,NULL),(56,'Jermaine','Feeney','mrs-destany-thiel-i','placeholder_doctor_image.png','jast.trevor@example.com','+1 (240) 623-7861','ILCSA776981','MD',27,'9587 Connelly Ranch\nZaneland, OK 14422','2001-12-19','other','South Georgia and the South Sandwich Islands',125.12,'Quaerat quis ipsum maiores animi. Velit rerum pariatur saepe nemo. Incidunt repudiandae eum commodi quaerat laborum nihil. Laborum molestiae et natus odit nam aliquam itaque.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,12,NULL),(57,'Andy','Morar','malachi-von','placeholder_doctor_image.png','wmcglynn@example.net','941.749.8186','ILCSA082882','MD',13,'235 Parisian Estates\nClydeland, RI 87629','2015-12-07','male','Vanuatu',299.76,'Pariatur ad rem cupiditate reiciendis sed minus facere. Fugiat et soluta ipsum culpa numquam adipisci. Et deserunt doloremque illo tenetur et.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,5,NULL),(58,'Darrel','Yundt','amely-bartell-dvm','placeholder_doctor_image.png','uvon@example.com','623-663-4865','ILCSA884884','MBBS',35,'6301 Cassin Falls Suite 266\nNorth Vince, DE 08624','2011-04-05','female','Martinique',284.48,'Necessitatibus explicabo voluptates possimus assumenda. Ex quisquam sapiente animi nulla neque non voluptas. Ducimus consequatur culpa dolor perspiciatis voluptatibus assumenda voluptatibus. Occaecati similique saepe deleniti repellat saepe optio molestiae. Et voluptas consequatur aliquid repudiandae.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:08','2024-12-11 03:37:08',NULL,10,NULL),(59,'Stefan','Pfeffer','rowland-nikolaus','placeholder_doctor_image.png','bosco.lavada@example.net','1-551-408-1781','ILCSA099814','MD',8,'55984 Maeve Mills\nNadershire, NJ 71875-4968','2008-12-19','other','India',71.58,'Sed optio mollitia molestiae error ea ea. Dolores et non ipsum itaque eos occaecati et. Soluta amet blanditiis qui fugiat. Quia ex repellendus distinctio velit.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','active','2024-12-11 03:37:09','2024-12-11 03:37:09',NULL,10,NULL),(60,'Dell','Bailey','ms-marianna-walter-jr','placeholder_doctor_image.png','effertz.lizzie@example.net','1-628-364-2036','ILCSA040233','PhD',24,'8419 Randy Garden Apt. 225\nSouth Brice, MT 97945','2010-08-24','other','Portugal',160.11,'In corporis inventore rem qui molestias. Voluptates unde aut corporis inventore. Eum soluta quia quam at tenetur dolorem. Earum quaerat repudiandae quasi ad nostrum voluptate. Ut blanditiis ut eos maiores quia et nihil.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:09','2024-12-11 03:37:09',NULL,11,NULL),(61,'Camilla','Reynolds','magnus-davis','placeholder_doctor_image.png','ohara.kevin@example.org','+1 (308) 690-4177','ILCSA719461','MD',3,'487 Nikko Shores Apt. 616\nNorth Stacy, MS 51591-3534','1973-04-09','male','Eritrea',467.81,'Deleniti iste et qui qui beatae eum repudiandae aut. Rerum non saepe minima et corrupti et. Porro ut et voluptatem laborum quam. Error tenetur ratione iusto ex cum ipsa.','{\"Friday\": \"9:00 AM - 5:00 PM\", \"Monday\": \"9:00 AM - 5:00 PM\", \"Sunday\": \"Closed\", \"Tuesday\": \"9:00 AM - 5:00 PM\", \"Saturday\": \"10:00 AM - 2:00 PM\", \"Thursday\": \"9:00 AM - 5:00 PM\", \"Wednesday\": \"9:00 AM - 5:00 PM\"}','inactive','2024-12-11 03:37:09','2024-12-11 03:37:09',NULL,1,NULL);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `doctors_hospitals` WRITE;
/*!40000 ALTER TABLE `doctors_hospitals` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `hospitals` WRITE;
/*!40000 ALTER TABLE `hospitals` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `labs` WRITE;
/*!40000 ALTER TABLE `labs` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

