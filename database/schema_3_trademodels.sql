CREATE DATABASE  IF NOT EXISTS `backtothefutures` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `backtothefutures`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: backtothefutures
-- ------------------------------------------------------
-- Server version	5.6.17-log

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
-- Table structure for table `contract_types`
--

DROP TABLE IF EXISTS `contract_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contract_types` (
  `contract_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_type_name` varchar(45) NOT NULL,
  PRIMARY KEY (`contract_type_id`,`contract_type_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract_types`
--

LOCK TABLES `contract_types` WRITE;
/*!40000 ALTER TABLE `contract_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `contract_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts` (
  `contract_id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_name` varchar(45) DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `available` float DEFAULT NULL,
  `bond` varchar(45) DEFAULT NULL,
  `source_contract_id` varchar(45) DEFAULT NULL,
  `contract_type_id` varchar(45) DEFAULT NULL,
  `freeze` varchar(45) DEFAULT NULL,
  `profit` varchar(45) DEFAULT NULL,
  `unprofit` varchar(45) DEFAULT NULL,
  `rights` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`contract_id`),
  UNIQUE KEY `contract_id_UNIQUE` (`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracts`
--

LOCK TABLES `contracts` WRITE;
/*!40000 ALTER TABLE `contracts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contracts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(45) NOT NULL,
  `abbreviation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`currency_name`),
  UNIQUE KEY `abbreviation_UNIQUE` (`abbreviation`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currencies`
--

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` VALUES (1,'bitcoin','btc'),(2,'litecoin','ltc');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `depths`
--

DROP TABLE IF EXISTS `depths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depths` (
  `depths_id` int(11) NOT NULL AUTO_INCREMENT,
  `asks` longtext,
  `bids` longtext,
  `date` varchar(45) DEFAULT NULL,
  `contract_type` varchar(45) DEFAULT NULL,
  `rate_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`depths_id`),
  UNIQUE KEY `depths_id_UNIQUE` (`depths_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depths`
--

LOCK TABLES `depths` WRITE;
/*!40000 ALTER TABLE `depths` DISABLE KEYS */;
/*!40000 ALTER TABLE `depths` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fixed_leverage_positions`
--

DROP TABLE IF EXISTS `fixed_leverage_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fixed_leverage_positions` (
  `fixed_leverage_position_id` int(11) NOT NULL AUTO_INCREMENT,
  `buy_amount` varchar(45) DEFAULT NULL,
  `buy_available` varchar(45) DEFAULT NULL,
  `buy_bond` varchar(45) DEFAULT NULL,
  `buy_flatprice` varchar(45) DEFAULT NULL,
  `buy_price_avg` varchar(45) DEFAULT NULL,
  `contract_id` varchar(45) DEFAULT NULL,
  `contract_type_id` varchar(45) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `sell_amount` varchar(45) DEFAULT NULL,
  `sell_available` varchar(45) DEFAULT NULL,
  `sell_bond` varchar(45) DEFAULT NULL,
  `sell_flatprice` varchar(45) DEFAULT NULL,
  `sell_profit_loss_ratio` varchar(45) DEFAULT NULL,
  `sell_price_avg` varchar(45) DEFAULT NULL,
  `sell_price_real` varchar(45) DEFAULT NULL,
  `symbol` varchar(45) DEFAULT NULL,
  `leverage_rate_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fixed_leverage_position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fixed_leverage_positions`
--

LOCK TABLES `fixed_leverage_positions` WRITE;
/*!40000 ALTER TABLE `fixed_leverage_positions` DISABLE KEYS */;
/*!40000 ALTER TABLE `fixed_leverage_positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `futures_indexes`
--

DROP TABLE IF EXISTS `futures_indexes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `futures_indexes` (
  `futures_index_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_currency_id` int(11) DEFAULT NULL,
  `to_currency_id` int(11) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`futures_index_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `futures_indexes`
--

LOCK TABLES `futures_indexes` WRITE;
/*!40000 ALTER TABLE `futures_indexes` DISABLE KEYS */;
/*!40000 ALTER TABLE `futures_indexes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leverage_rates`
--

DROP TABLE IF EXISTS `leverage_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leverage_rates` (
  `leverage_rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `leverage_rate_name` varchar(45) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`leverage_rate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leverage_rates`
--

LOCK TABLES `leverage_rates` WRITE;
/*!40000 ALTER TABLE `leverage_rates` DISABLE KEYS */;
/*!40000 ALTER TABLE `leverage_rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `deal_amount` float DEFAULT NULL,
  `fee` varchar(45) DEFAULT NULL,
  `leverage_rate_id` varchar(45) DEFAULT NULL,
  `source_order_id` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `price_average` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `symbol` varchar(45) DEFAULT NULL,
  `order_type_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_id_UNIQUE` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `force_liquidation_price` varchar(45) DEFAULT NULL,
  `buy_amount` varchar(45) DEFAULT NULL,
  `buy_available` varchar(45) DEFAULT NULL,
  `buy_price_avg` varchar(45) DEFAULT NULL,
  `buy_profit_real` varchar(45) DEFAULT NULL,
  `contract_id` varchar(45) DEFAULT NULL,
  `contract_type` varchar(45) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `leverage_rate_id` varchar(45) DEFAULT NULL,
  `sell_amount` varchar(45) DEFAULT NULL,
  `sell_available` varchar(45) DEFAULT NULL,
  `sell_price_avg` varchar(45) DEFAULT NULL,
  `sell_price_real` varchar(45) DEFAULT NULL,
  `result` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`position_id`),
  UNIQUE KEY `position_id_UNIQUE` (`position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rates` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT NULL,
  `currency_id` varchar(45) DEFAULT NULL,
  `source_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`rate_id`),
  UNIQUE KEY `rate_id_UNIQUE` (`rate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rates`
--

LOCK TABLES `rates` WRITE;
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sources`
--

DROP TABLE IF EXISTS `sources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source_name` varchar(45) DEFAULT NULL,
  `apikey` varchar(45) DEFAULT NULL,
  `secretkey` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `source_name_UNIQUE` (`source_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sources`
--

LOCK TABLES `sources` WRITE;
/*!40000 ALTER TABLE `sources` DISABLE KEYS */;
INSERT INTO `sources` VALUES (1,'OKCoin',NULL,NULL),(2,'796',NULL,NULL);
/*!40000 ALTER TABLE `sources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spotprices`
--

DROP TABLE IF EXISTS `spotprices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spotprices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_id` int(11) DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL,
  `low` double DEFAULT NULL,
  `high` double DEFAULT NULL,
  `last` double DEFAULT NULL,
  `buy` double DEFAULT NULL,
  `sell` double DEFAULT NULL,
  `volume` double DEFAULT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spotprices`
--

LOCK TABLES `spotprices` WRITE;
/*!40000 ALTER TABLE `spotprices` DISABLE KEYS */;
INSERT INTO `spotprices` VALUES (3,1,1,220.7,227.2,224.54,224.5,224.59,447090,'2015-04-29 17:56:46'),(4,1,1,220.7,227.2,224.78,224.77,224.79,446465,'2015-04-29 18:00:53'),(5,2,1,1.334,1.362,1.352,1.35,1.355,351158,'2015-04-29 18:00:54'),(6,1,1,220.7,227.2,224.86,224.84,224.89,443820,'2015-04-29 18:06:16'),(7,2,1,1.334,1.362,1.353,1.35,1.356,352014,'2015-04-29 18:06:18'),(8,1,1,220.7,227.2,225,224.93,225,438674,'2015-04-29 18:09:05'),(9,2,1,1.334,1.362,1.353,1.35,1.356,352131,'2015-04-29 18:09:06'),(10,1,1,220.7,227.2,224.96,224.93,224.99,438468,'2015-04-29 18:09:51'),(11,2,1,1.334,1.362,1.353,1.35,1.356,351950,'2015-04-29 18:09:52'),(12,1,1,220.7,227.2,224.95,224.95,224.99,438093,'2015-04-29 18:10:22'),(13,2,1,1.334,1.362,1.354,1.351,1.356,351642,'2015-04-29 18:10:23'),(14,1,1,220.7,227.2,224.84,224.88,224.92,437985,'2015-04-29 18:12:28'),(15,2,1,1.334,1.362,1.354,1.351,1.357,350668,'2015-04-29 18:12:29'),(16,1,1,220.7,227.2,224.73,224.7,224.82,437550,'2015-04-29 18:13:08'),(17,2,1,1.334,1.362,1.354,1.351,1.357,350445,'2015-04-29 18:13:10'),(18,1,1,220.7,227.2,224.68,224.68,224.7,437166,'2015-04-29 18:14:39'),(19,2,1,1.334,1.362,1.354,1.351,1.354,350276,'2015-04-29 18:14:41'),(20,1,1,220.7,227.2,224.88,224.88,224.9,432259,'2015-04-29 18:24:50'),(21,2,1,1.334,1.362,1.355,1.354,1.356,351236,'2015-04-29 18:24:50'),(22,1,1,220.7,227.2,224.86,224.86,224.9,431971,'2015-04-29 18:25:10'),(23,2,1,1.334,1.362,1.355,1.354,1.356,351245,'2015-04-29 18:25:11'),(24,1,1,220.7,227.2,224.85,224.8,224.85,431827,'2015-04-29 18:25:35'),(25,2,1,1.334,1.362,1.355,1.354,1.356,351324,'2015-04-29 18:25:36'),(26,1,1,220.92,227.2,224.72,224.65,224.76,430049,'2015-04-29 18:27:31'),(27,2,1,1.334,1.362,1.355,1.355,1.357,351527,'2015-04-29 18:27:32'),(28,1,1,221.05,227.2,224.63,224.62,224.63,427937,'2015-04-29 18:28:55'),(29,2,1,1.334,1.362,1.353,1.352,1.354,351724,'2015-04-29 18:28:57'),(30,1,1,221.37,227.2,224.42,224.4,224.46,429382,'2015-04-29 18:45:50'),(31,2,1,1.334,1.362,1.353,1.351,1.356,358300,'2015-04-29 18:45:51'),(32,1,1,221.37,227.2,224.26,224.26,224.31,428295,'2015-04-29 18:49:37'),(33,2,1,1.334,1.362,1.352,1.351,1.353,358755,'2015-04-29 18:49:37'),(34,1,1,221.37,227.2,224.44,224.42,224.46,427703,'2015-04-29 18:52:06'),(35,2,1,1.334,1.362,1.352,1.351,1.353,359068,'2015-04-29 18:52:08'),(36,1,1,221.37,227.2,224.4,224.36,224.44,428151,'2015-04-29 19:00:55'),(37,2,1,1.334,1.362,1.352,1.351,1.353,359446,'2015-04-29 19:00:56'),(38,1,1,221.37,227.2,224.44,224.36,224.44,428194,'2015-04-29 19:01:38'),(39,2,1,1.334,1.362,1.352,1.351,1.353,359483,'2015-04-29 19:01:40'),(40,1,1,221.37,227.2,224.48,224.37,224.48,428268,'2015-04-29 19:02:33'),(41,2,1,1.334,1.362,1.352,1.351,1.353,359623,'2015-04-29 19:02:35'),(42,1,1,221.37,227.2,224.48,224.38,224.48,428302,'2015-04-29 19:02:40'),(43,2,1,1.334,1.362,1.352,1.351,1.353,359418,'2015-04-29 19:02:40'),(44,1,1,221.37,227.2,224.6,224.46,224.59,427597,'2015-04-29 19:06:27'),(45,2,1,1.334,1.362,1.353,1.351,1.354,358620,'2015-04-29 19:06:29'),(46,1,1,221.37,227.2,224.65,224.64,224.66,427504,'2015-04-29 19:09:41'),(47,2,1,1.334,1.362,1.353,1.351,1.354,359448,'2015-04-29 19:09:43'),(48,1,1,221.37,227.2,224.9,224.9,224.93,427807,'2015-04-29 19:13:17'),(49,2,1,1.334,1.362,1.353,1.351,1.354,360466,'2015-04-29 19:13:19'),(50,1,1,221.37,227.2,225.03,224.99,225,428005,'2015-04-29 19:15:29'),(51,2,1,1.334,1.362,1.353,1.351,1.354,360686,'2015-04-29 19:15:30'),(52,1,1,221.37,227.2,224.6,224.57,224.6,421796,'2015-04-29 19:23:03'),(53,2,1,1.334,1.362,1.353,1.352,1.354,363041,'2015-04-29 19:23:04'),(54,1,1,221.37,227.2,224.8,224.74,224.8,421067,'2015-04-29 19:26:17'),(55,2,1,1.334,1.362,1.353,1.352,1.354,364289,'2015-04-29 19:26:18'),(56,1,1,221.37,227.2,224.6,224.6,224.61,421422,'2015-04-29 19:28:31'),(57,2,1,1.334,1.362,1.353,1.352,1.354,364530,'2015-04-29 19:28:33'),(58,NULL,1,221.37,227.2,224.76,224.69,224.83,421031,'2015-04-29 19:31:02'),(59,NULL,1,1.334,1.362,1.353,1.352,1.354,364853,'2015-04-29 19:31:04'),(60,1,1,221.37,227.2,224.8,224.88,224.89,420808,'2015-04-29 19:32:06'),(61,2,1,1.334,1.362,1.353,1.352,1.354,364959,'2015-04-29 19:32:08');
/*!40000 ALTER TABLE `spotprices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickers`
--

DROP TABLE IF EXISTS `tickers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticker_name` varchar(45) NOT NULL,
  `from_currency_id` varchar(45) NOT NULL,
  `to_currency_id` varchar(45) NOT NULL,
  `source_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickers`
--

LOCK TABLES `tickers` WRITE;
/*!40000 ALTER TABLE `tickers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tickers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trades`
--

DROP TABLE IF EXISTS `trades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trades` (
  `trade_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `tid` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`trade_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trades`
--

LOCK TABLES `trades` WRITE;
/*!40000 ALTER TABLE `trades` DISABLE KEYS */;
/*!40000 ALTER TABLE `trades` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-05 10:48:41
