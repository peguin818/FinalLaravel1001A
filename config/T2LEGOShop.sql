-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: T2LEGOShop
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `admID` int NOT NULL AUTO_INCREMENT,
  `admUsername` varchar(30) NOT NULL,
  `admPassword` varchar(100) NOT NULL,
  `admFirstName` varchar(30) NOT NULL,
  `admLastName` varchar(30) NOT NULL,
  `admTel` varchar(10) NOT NULL,
  PRIMARY KEY (`admID`),
  UNIQUE KEY `admID` (`admID`),
  UNIQUE KEY `admUsername_UNIQUE` (`admUsername`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (3,'leopeguin818','$2y$10$lObPMGe2oXxAvMnrQhFHleu9YG17aGkpJsR0h81mBZ3CWOZmTZB5i','Phong','Pham','0945493369'),(4,'testadmin','$2y$10$mqcFZnLyuJY0oKdOyK92dubk0fiHqNMszmMt3Itu1QHdc1RVbqtJS','testName','testName','0945493369'),(7,'a','$2y$10$7s9va9EYNkh4iI6eLuqde.41pKsj9Ffit0bcVFOGMtBp.GFiGmBca','a','a','11111'),(8,'veesiwat34','$2y$10$qnbB2CJmowq/hWvhGRN2LeabjQwtcKZfAMAviQXkSqZPN8COehDdK','vee','siwat','0362940075'),(9,'thanhthao34','$2y$10$U3h7pr7pY2lDEA6tJpTurO6NBxvcqikxxfrdWZ18yMQdXDo7vnqxy','thao','tran','0362940075'),(10,'abc','$2y$10$CWJfRM7galSKNGZI6D3Yz.jameZwkMdWZRfTVYbcrq.KAdcr4D2Rm','tha','thu','03627474');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderDetails`
--

DROP TABLE IF EXISTS `orderDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orderDetails` (
  `ordDetailID` bigint NOT NULL AUTO_INCREMENT,
  `orderID` bigint NOT NULL,
  `prdID` bigint NOT NULL,
  PRIMARY KEY (`ordDetailID`),
  UNIQUE KEY `ordDetailID` (`ordDetailID`),
  KEY `orderID` (`orderID`),
  KEY `prdID` (`prdID`),
  CONSTRAINT `orderDetails_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  CONSTRAINT `orderDetails_ibfk_2` FOREIGN KEY (`prdID`) REFERENCES `products` (`prdID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderDetails`
--

LOCK TABLES `orderDetails` WRITE;
/*!40000 ALTER TABLE `orderDetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `orderID` bigint NOT NULL AUTO_INCREMENT,
  `usrID` int NOT NULL,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `orderID` (`orderID`),
  KEY `usrID` (`usrID`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`usrID`) REFERENCES `users` (`usrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `prdID` bigint NOT NULL,
  `prdName` varchar(300) NOT NULL,
  `prdPrice` double NOT NULL,
  `prdDetail` varchar(10000) NOT NULL,
  `prdImage1` varchar(300) NOT NULL,
  `prdImage2` varchar(300) DEFAULT NULL,
  `prdImage3` varchar(300) DEFAULT NULL,
  `themeID` int NOT NULL,
  PRIMARY KEY (`prdID`),
  UNIQUE KEY `prdID` (`prdID`),
  KEY `themeID` (`themeID`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`themeID`) REFERENCES `themes` (`themeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (42083,'Bugatti Chiron',120,'LEGO Technic Bugatti Chiron','42083-BugattiChiron-01.jpg','42083-BugattiChiron-02.jpg','42083-BugattiChiron-03.jpg',4),(42111,'Dom\'s Dodge Charger',399,'LEGO Technic Dom\'s Dodge Charger','42111-Dom\'sDodgeCharger-01.jpg','42111-Dom\'sDodgeCharger-02.jpg','42111-Dom\'sDodgeCharger-03.jpg',4),(42115,'Lamborghini Sián',499,'LEGO Technic Lamborghini Sián','42115-LamborghiniSián-01.jpg','42115-LamborghiniSián-02.jpg','42115-LamborghiniSián-03.jpg',4),(42125,'Ferrari 488 GTE',199,'LEGO Technic Ferrari 488 GTE','42125-Ferrari488GTE-01.jpg','42125-Ferrari488GTE-02.jpg','42125-Ferrari488GTE-03.jpg',4),(75171,'Battle on Scarif',89,'LEGO Star Wars Battle on Scarif','75171-BattleonScarif-01.jpg','75171-BattleonScarif-02.jpg','75171-BattleonScarif-03.jpg',5),(75252,'Imperial Star Destroyer',699,'LEGO Star Wars Imperial Star Destroyer','75252-ImperialStarDestroyer-01.jpg','75252-ImperialStarDestroyer-02.jpg','75252-ImperialStarDestroyer-03.jpg',5),(75269,'Duel on Mustafar',69,'LEGO Star Wars Duel on Mustafar','75269 DuelonMustafar -01.jpg','75269 DuelonMustafar -02.jpg','75269 DuelonMustafar -03.jpg',5),(75337,'AT-TE Walker',179,'LEGO Star Wars AT-TE Walker','75337-AT.TEWalker-01.jpg','75337-AT.TEWalker-02.jpg','75337-AT.TEWalker-03.jpg',5),(76029,'Iron Man vs Ultron',69,'LEGO Marvel Iron Man vs Ultron','76029-IronManvsUltron-01.jpg','76029-IronManvsUltron-02.jpg','76029-IronManvsUltron-03.jpg',1),(76038,'Avengers Tower',119,'LEGO Marvel Avengers Tower','76038-AvengersTower-01.jpg','76038-AvengersTower-02.jpg','76038-AvengersTower-03.jpg',1),(76167,'Iron Man Armoury',89,'LEGO Marvel Iron Man Armoury','76167-IronManArmoury-01.jpg','76167-IronManArmoury-02.jpg','76167-IronManArmoury-03.jpg',1),(76192,'Avengers Endgame: Final Battle',139,'LEGO Marvel Avengers Endgame: Final Battle','76192-AvengersEndgameFinalBattle-01.jpg','76192-AvengersEndgameFinalBattle-02.jpg','76192-AvengersEndgameFinalBattle-03.jpg',1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `themes` (
  `themeID` int NOT NULL AUTO_INCREMENT,
  `themeName` varchar(300) NOT NULL,
  `themeDetail` varchar(10000) NOT NULL,
  PRIMARY KEY (`themeID`),
  UNIQUE KEY `themeID` (`themeID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themes`
--

LOCK TABLES `themes` WRITE;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
INSERT INTO `themes` VALUES (1,'Marvel','Marvel LEGO Products'),(4,'Technic','Technic LEGO Products'),(5,'Star Wars','Star Wars LEGO Products'),(6,'Jurassic World','Jurassic World LEGO Products');
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `usrID` int NOT NULL AUTO_INCREMENT,
  `usrUsername` varchar(30) NOT NULL,
  `usrPassword` varchar(100) NOT NULL,
  `usrFirstName` varchar(30) NOT NULL,
  `usrLastName` varchar(30) NOT NULL,
  `usrTel` varchar(10) NOT NULL,
  `usrAddr` varchar(3000) NOT NULL,
  `usrEmail` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`usrID`),
  UNIQUE KEY `usrID` (`usrID`),
  UNIQUE KEY `usrUsername_UNIQUE` (`usrUsername`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'leopeguin818','$2y$10$yCQ/nT5U9Nb5YSTRAhzWV.LgHB1D95erTyOuAeHD6Al4wglxXiS4C','Phong','Pham','0945493370','13/12 Quách Văn Tuấn','pcc1327@gmail.com'),(6,'thangnguthinh','$2y$10$YPtXhDAANnugdpp3Nt5BYOzFV550/XswbdYbWcftF3cyrvf.PaWt.','Quân','Lê','0976997479','20 Cộng  Hoà','quanltgcs210517@fpt.edu.vn');
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

-- Dump completed on 2022-08-28 12:39:29
