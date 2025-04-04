-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: restaurents
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20250119153043','2025-01-19 15:30:59',340),('DoctrineMigrations\\Version20250119173844','2025-01-19 17:39:05',430),('DoctrineMigrations\\Version20250119180106','2025-01-19 18:01:16',156),('DoctrineMigrations\\Version20250119181622','2025-01-19 18:16:26',58),('DoctrineMigrations\\Version20250119181802','2025-01-19 18:18:07',92),('DoctrineMigrations\\Version20250119182353','2025-01-19 18:23:59',68),('DoctrineMigrations\\Version20250119194103','2025-01-19 19:41:12',416),('DoctrineMigrations\\Version20250119195400','2025-01-19 19:54:04',614),('DoctrineMigrations\\Version20250119222622','2025-01-19 22:26:35',855),('DoctrineMigrations\\Version20250120203156','2025-01-20 20:32:02',230),('DoctrineMigrations\\Version20250120205726','2025-01-20 20:57:30',75),('DoctrineMigrations\\Version20250120214144','2025-01-20 21:41:48',174),('DoctrineMigrations\\Version20250124134052','2025-01-24 13:40:59',794),('DoctrineMigrations\\Version20250124134730','2025-01-24 13:48:04',200),('DoctrineMigrations\\Version20250124135225','2025-01-24 13:52:31',287);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `excursions`
--

LOCK TABLES `excursions` WRITE;
/*!40000 ALTER TABLE `excursions` DISABLE KEYS */;
INSERT INTO `excursions` VALUES (7,'La Vallée de l\'Ourika','Explorez la magnifique vallée de l\'Ourika, célèbre pour ses montagnes et ses villages berbères.','50','ourika.jpg'),(8,'Cascades d\'Ouzoud','Découvrez les impressionnantes cascades d\'Ouzoud, l\'une des plus grandes chutes d\'eau du Maroc.','70','ouzoud.jpg'),(9,'Désert d\'Agafay','Un voyage à travers le désert d\'Agafay, une expérience authentique du Sahara.','100','agafay.jpg'),(10,'Médina de Marrakech','Visitez la médina de Marrakech, avec ses souks et monuments historiques, pour une immersion dans la culture marocaine.','30','medina_marrakech.jpg'),(11,'Palais bahia','Explorez l\'impressionnant Palais Bahia, un exemple parfait de l\'architecture marocaine traditionnelle.','40','bahia_palace.jpg'),(12,'Jardin Majorelle','Promenez-vous dans le Jardin Majorelle, un jardin botanique emblématique avec une histoire fascinante.','20','jardin_majorelle.jpg');
/*!40000 ALTER TABLE `excursions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` VALUES (9,'Hotel Amira',1,'Petit hôtel économique situé au cœur de Marrakech, offrant des chambres simples et fonctionnelles pour les voyageurs à petit budget.','img/Hôtels/hotel1.webp'),(10,'Hotel Central',1,'Hôtel pratique et abordable, idéal pour les voyageurs qui recherchent un hébergement simple au centre de la ville.','img/Hôtels/hotel2.webp'),(11,'Hotel Marrakech Inn',1,'Hôtel économique avec des chambres basiques, idéal pour les courts séjours.','img/Hôtels/hotel3.jpeg'),(12,'Hotel Atlas',1,'Un hôtel économique situé près de la gare, avec des chambres simples et un service basique.','img/Hôtels/hotel4.webp'),(13,'Hotel Koutoubia',1,'Petit hôtel à proximité des principales attractions touristiques, offrant des chambres modestes.','img/Hôtels/hotel5.jpg'),(14,'Riad Bahia',2,'Riad traditionnel dans la médina de Marrakech, offrant des services basiques et un excellent rapport qualité-prix pour les touristes.','img/Hôtels/hotel6.jpg'),(15,'Hotel Ali',2,'Hôtel confortable avec une décoration traditionnelle, situé à quelques pas de la place Jemaa el-Fna.','img/Hôtels/hotel7.jpg'),(16,'Hotel Atlas Medina',2,'Hôtel sympathique offrant un bon rapport qualité-prix, situé dans un quartier calme et agréable.','img/Hôtels/hotel8.jpg'),(17,'Riad Dar Silsila',2,'Riad authentique avec des chambres simples mais agréables, parfait pour une escapade tranquille.','img/Hôtels/hotel9.jpg'),(18,'Hotel Tazi',2,'Un hôtel modeste avec un excellent service, situé dans la médina de Marrakech.','img/Hôtels/hotel10.jpg'),(19,'Hotel Mogador',3,'Hôtel moderne avec des chambres confortables et bien équipées, idéal pour les séjours touristiques à un prix raisonnable.','img/Hôtels/hotel11.jpg'),(20,'Hotel Les Jardins de La Koutoubia',3,'Un hôtel confortable offrant une piscine, un restaurant et un excellent service au cœur de Marrakech.','img/Hôtels/hotel12.jpg'),(21,'Riad Zarka',3,'Riad charmant offrant un excellent rapport qualité-prix, avec un service soigné et des chambres confortables.','img/Hôtels/hotel13.jpg'),(22,'Hotel Le Caspien',3,'Un hôtel moderne avec une décoration élégante et un emplacement central, parfait pour les familles.','img/Hôtels/hotel14.jpg'),(23,'Hotel Oudaya',3,'Hôtel au décor traditionnel marocain, offrant des chambres spacieuses et un bon service, situé près de la place Jemaa el-Fna.','img/Hôtels/hotel15.jpg'),(24,'La Mamounia',4,'Hôtel de luxe avec un service exceptionnel, des jardins magnifiques et des installations haut de gamme, parfait pour une expérience inoubliable.','img/Hôtels/hotel16.jpg'),(25,'Royal Mansour Marrakech',4,'Un hôtel somptueux avec des villas privées, des piscines, des restaurants étoilés et un service personnalisé.','img/Hôtels/hotel17.jpg'),(26,'Riad Fès',4,'Riad élégant et raffiné avec un service impeccable, une belle piscine et un cadre tranquille.','img/Hôtels/hotel18.jpg'),(27,'Hotel Le Meridien N\'fis',4,'Un hôtel luxueux avec une belle vue sur les montagnes de l\'Atlas et une piscine extérieure.','img/Hôtels/hotel19.jpg'),(28,'Riad Kniza',4,'Riad traditionnel offrant des chambres magnifiques, une piscine intérieure et un service exceptionnel.','img/Hôtels/hotel20.jpg'),(29,'Four Seasons Resort Marrakech',5,'L\'un des hôtels les plus luxueux de Marrakech, offrant des chambres somptueuses, un service de classe mondiale et une expérience inoubliable.','img/Hôtels/hotel21.jpg'),(30,'Amanjena',5,'Complexe hôtelier de luxe au bord d\'un lac, avec des villas privées et un service personnalisé exceptionnel.','img/Hôtels/hotel22.jpg'),(31,'Palais Namaskar',5,'Hôtel de luxe offrant un cadre époustouflant, avec une architecture spectaculaire et des services exclusifs.','img/Hôtels/hotel23.jpg'),(32,'La Sultana Marrakech',5,'Un hôtel raffiné au cœur de la médina, avec des chambres élégantes, un spa et une vue incroyable sur la ville.','img/Hôtels/hotel24.jpg'),(33,'Selman Marrakech',5,'Luxueux resort offrant des villas privées, une piscine olympique et des installations de spa haut de gamme.','img/Hôtels/hotel25.jpg');
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Menu Traditionnel Marocain','Couscous, Tajine, Pastilla',30),(2,'Menu Marrakech Spécialités','Tagine de poulet, Kefta, Zaalouk',35),(3,'Menu Végétarien','Salade marocaine, Couscous aux légumes',25),(4,'Menu Fruits de Mer','Poisson grillé, Crevettes, Calamars',40),(5,'Menu Oriental','Pide, Kebabs, Fattoush',28),(6,'Menu Couscous Royal','Couscous avec agneau, poulet et légumes',45),(7,'Menu de Luxe','Tajine de foie gras, Couscous aux fruits secs',60),(8,'Menu du Chef','Tajine d’agneau, Brick, Harira',38),(9,'Menu Authentique','Pastilla, Harira, Salade marocaine',30),(10,'Menu Oriental Premium','Kebabs, Couscous, Brochettes',50);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `piscine`
--

LOCK TABLES `piscine` WRITE;
/*!40000 ALTER TABLE `piscine` DISABLE KEYS */;
INSERT INTO `piscine` VALUES (1,'Piscine Al-Mansour','Piscine de luxe avec vue panoramique sur la ville.','al_mansour.jpg'),(2,'Piscine Riad Marrakech','Piscine située dans un riad traditionnel de Marrakech, offrant une expérience unique.','riad_marrakech.jpg'),(3,'Piscine Jardin Majorelle','Piscine entourée de jardins luxuriants, inspirée par les couleurs de Majorelle.','jardin_majorelle.jpg'),(4,'Piscine Palmeraie Resort','Grande piscine à l\'intérieur du complexe de la Palmeraie, avec des installations modernes.','palmeraie_resort.jpg'),(5,'Piscine Royal Mansour','Piscine privée et chauffée dans un cadre royal, idéale pour la détente.','royal_mansour.jpg'),(6,'Piscine Le Méridien','Piscine en forme de lagon, dans un cadre calme et élégant.','le_meridien.jpg'),(7,'Piscine Ksar Char-Bagh','Piscine de style traditionnel berbère, entourée de palmiers et de jardins exotiques.','ksar_char_bagh.jpg'),(8,'Piscine Les Jardins de la Koutoubia','Piscine spacieuse dans un hôtel 5 étoiles, offrant une vue imprenable sur la mosquée Koutoubia.','jardins_koutoubia.jpg'),(9,'Piscine Atlas Golf Resort','Piscine moderne avec vue sur le parcours de golf, idéale pour les sportifs et les familles.','atlas_golf_resort.jpg'),(10,'Piscine Amanjena','Piscine de rêve dans un cadre somptueux, au cœur du resort de luxe Amanjena.','amanjena.jpg');
/*!40000 ALTER TABLE `piscine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reserva_restaurants`
--

LOCK TABLES `reserva_restaurants` WRITE;
/*!40000 ALTER TABLE `reserva_restaurants` DISABLE KEYS */;
INSERT INTO `reserva_restaurants` VALUES (2,7,'2025-01-24 15:21:00','reda',4);
/*!40000 ALTER TABLE `reserva_restaurants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reservation_hotel`
--

LOCK TABLES `reservation_hotel` WRITE;
/*!40000 ALTER TABLE `reservation_hotel` DISABLE KEYS */;
INSERT INTO `reservation_hotel` VALUES (1,25,'2025-01-29 20:35:00','ayman',2),(2,25,'2025-01-31 04:44:00','ayman',4),(3,26,'2025-01-21 12:42:00','ayman',3),(4,27,'2025-01-24 15:54:00','anas',3);
/*!40000 ALTER TABLE `reservation_hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `restaurent`
--

LOCK TABLES `restaurent` WRITE;
/*!40000 ALTER TABLE `restaurent` DISABLE KEYS */;
INSERT INTO `restaurent` VALUES (1,1,'Le Palais de marrakech','Restaurant traditionnel avec une vue imprenable','palais_marrakech.jpg'),(2,2,'La Kasbah Gourmande','Spécialités marocaines dans une atmosphère chaleureuse','kasbah_gourmande.jpg'),(3,3,'Les Saveurs de marrakech','Cuisine traditionnelle et raffinée','saveurs_marrakech.jpg'),(4,4,'Riad d’Orient','Cuisine fine marocaine et ambiance exotique','riad_orient.jpg'),(5,5,'L’Authentique Marrakech','Restaurant au style marocain avec plats de qualité','authentique_marrakech.jpg'),(6,6,'Le Jardin de Marrakech','Cuisine légère et saine dans un cadre reposant','jardin_marrakech.jpg'),(7,7,'Le Comptoir des Rêves','Restaurant haut de gamme avec menu spécial','comptoir_reves.jpg'),(8,8,'La Table de Marrakech','Cuisine marocaine contemporaine','table_marrakech.jpg'),(9,9,'Chez Ali','Restaurant traditionnel avec une large variété de menus','chez_ali.jpg'),(10,10,'Marrakech Elégance','Un restaurant élégant avec une cuisine innovante','marrakech_elegance.jpg');
/*!40000 ALTER TABLE `restaurent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `restaurent_menu`
--

LOCK TABLES `restaurent_menu` WRITE;
/*!40000 ALTER TABLE `restaurent_menu` DISABLE KEYS */;
INSERT INTO `restaurent_menu` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(2,1),(2,2),(2,3),(2,4),(2,5),(2,6),(2,7),(2,8),(2,9),(2,10),(3,1),(3,2),(3,3),(3,4),(3,5),(3,6),(3,7),(3,8),(3,9),(3,10),(4,1),(4,2),(4,3),(4,4),(4,5),(4,6),(4,7),(4,8),(4,9),(4,10),(5,1),(5,2),(5,3),(5,4),(5,5),(5,6),(5,7),(5,8),(5,9),(5,10),(6,1),(6,2),(6,3),(6,4),(6,5),(6,6),(6,7),(6,8),(6,9),(6,10),(7,1),(7,2),(7,3),(7,4),(7,5),(7,6),(7,7),(7,8),(7,9),(7,10),(8,1),(8,2),(8,3),(8,4),(8,5),(8,6),(8,7),(8,8),(8,9),(8,10),(9,1),(9,2),(9,3),(9,4),(9,5),(9,6),(9,7),(9,8),(9,9),(9,10),(10,1),(10,2),(10,3),(10,4),(10,5),(10,6),(10,7),(10,8),(10,9),(10,10);
/*!40000 ALTER TABLE `restaurent_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'aymenyassine301@gmail.com','[\"ROLE_ADMIN\"]','$2y$13$GeLipi4cvcjZWiKoTmz4jeRBzFdMttCTLa7.w8hCPzDvUbnLFOI1m','chagu'),(2,'aymenyassine501@gmail.com','[\"ROLE_USER\"]','$2y$13$UhFdMPMIRlQ0QE269/neBe/FasSsb1HkUTHEdWmcEiRz70K1k3262','chagu');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-24 16:45:20
