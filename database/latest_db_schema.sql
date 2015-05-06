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
  `id` int(11) NOT NULL,
  `contract_type_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `contract_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
-- Table structure for table `depths`
--

DROP TABLE IF EXISTS `depths`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `depths` (
  `id` int(11) NOT NULL,
  `asks` longtext,
  `bids` longtext,
  `date` varchar(45) DEFAULT NULL,
  `contract_type` varchar(45) DEFAULT NULL,
  `rate_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `depths_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
  `contract_type_id` int(11) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `sell_amount` varchar(45) DEFAULT NULL,
  `sell_available` varchar(45) DEFAULT NULL,
  `sell_bond` varchar(45) DEFAULT NULL,
  `sell_flatprice` varchar(45) DEFAULT NULL,
  `sell_profit_loss_ratio` varchar(45) DEFAULT NULL,
  `sell_price_avg` varchar(45) DEFAULT NULL,
  `sell_price_real` varchar(45) DEFAULT NULL,
  `symbol` varchar(45) DEFAULT NULL,
  `leverage_rate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fixed_leverage_position_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `futures_indexes`
--

DROP TABLE IF EXISTS `futures_indexes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `futures_indexes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_currency_id` int(11) DEFAULT NULL,
  `to_currency_id` int(11) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `leverage_rates`
--

DROP TABLE IF EXISTS `leverage_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leverage_rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leverage_rate_name` varchar(45) DEFAULT NULL,
  `value` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `leverage_rate_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `order_types`
--

DROP TABLE IF EXISTS `order_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_type_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `deal_amount` float DEFAULT NULL,
  `fee` varchar(45) DEFAULT NULL,
  `leverage_rate_id` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `price_average` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `symbol` varchar(45) DEFAULT NULL,
  `order_type_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `position_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT NULL,
  `currency_id` varchar(45) DEFAULT NULL,
  `source_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rate_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

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
-- Table structure for table `trades`
--

DROP TABLE IF EXISTS `trades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `tid` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-06 10:25:59
