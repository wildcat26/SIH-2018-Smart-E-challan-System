-- MySQL dump 10.15  Distrib 10.0.34-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: echallan
-- ------------------------------------------------------
-- Server version	10.0.34-MariaDB-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aadhar`
--

DROP TABLE IF EXISTS `aadhar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aadhar` (
  `Aadhar_Number` bigint(12) NOT NULL,
  `Name` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Age` smallint(2) NOT NULL,
  `Address` varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Contact_Number` bigint(10) NOT NULL,
  `Gender` varchar(1) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`Aadhar_Number`),
  UNIQUE KEY `Aadhar_number` (`Aadhar_Number`),
  UNIQUE KEY `Aadhar_number_2` (`Aadhar_Number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aadhar`
--

LOCK TABLES `aadhar` WRITE;
/*!40000 ALTER TABLE `aadhar` DISABLE KEYS */;
INSERT INTO `aadhar` VALUES (111111111111,'SAKSHI',23,'58 SHRI KRISHNA COLONY',8982210056,'F'),(222222222222,'SHRUTI',23,'55 INDIRA NAGAR',8982284101,'F');
/*!40000 ALTER TABLE `aadhar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `challan`
--

DROP TABLE IF EXISTS `challan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `challan` (
  `Challan_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Challan_Date` datetime(6) NOT NULL,
  `Challan_Amount` smallint(5) NOT NULL,
  `Challan_Status` varchar(1) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Vehicle_ID` int(10) DEFAULT NULL,
  PRIMARY KEY (`Challan_ID`),
  KEY `Vehicle_ID` (`Vehicle_ID`),
  CONSTRAINT `challan_ibfk_1` FOREIGN KEY (`Vehicle_ID`) REFERENCES `vehicle` (`Vehicle_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `challan`
--

LOCK TABLES `challan` WRITE;
/*!40000 ALTER TABLE `challan` DISABLE KEYS */;
INSERT INTO `challan` VALUES (2,'2018-03-02 00:00:00.000000',500,'P',2),(3,'0000-00-00 00:00:00.000000',400,'U',3);
/*!40000 ALTER TABLE `challan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `Name` varchar(30) NOT NULL,
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `QueryType` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES ('devansh',2,'Suggestion','wefsdsd','2018-03-24 05:24:57.596217','ert@fgh.cvb');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offense`
--

DROP TABLE IF EXISTS `offense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offense` (
  `Offense_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Offense_Type` varchar(15) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Offense_Date` date NOT NULL,
  `Vehicle_ID` int(10) NOT NULL,
  `Offense_Status` varchar(10) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Challan_ID` int(10) NOT NULL,
  `Offense_Place` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Image_Location` varchar(100) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Offense_Description` varchar(200) NOT NULL,
  PRIMARY KEY (`Offense_ID`),
  KEY `Challan_ID` (`Challan_ID`),
  KEY `Offense` (`Vehicle_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offense`
--

LOCK TABLES `offense` WRITE;
/*!40000 ALTER TABLE `offense` DISABLE KEYS */;
INSERT INTO `offense` VALUES (16,'SECTION111','2018-03-01',2,'RESOLVED',2,'RAIPUR','',''),(18,'SECTION222','2018-03-02',3,'UNRESOLVED',3,'RAIPUR','','');
/*!40000 ALTER TABLE `offense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `Payment_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Payment_Date` datetime(6) NOT NULL,
  `Payment_Amount` int(5) NOT NULL,
  `Payment_Status` varchar(1) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Challan_ID` int(10) NOT NULL,
  PRIMARY KEY (`Payment_ID`),
  KEY `Challan_ID` (`Challan_ID`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Challan_ID`) REFERENCES `challan` (`Challan_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (3,'2018-03-01 00:00:00.000000',500,'P',2),(4,'2018-03-02 00:00:00.000000',400,'U',3);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userdetails` (
  `User_ID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `email` varchar(30) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `password` varchar(15) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Officer_Rank` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `mobile` bigint(15) NOT NULL,
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `Username` (`username`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdetails`
--

LOCK TABLES `userdetails` WRITE;
/*!40000 ALTER TABLE `userdetails` DISABLE KEYS */;
INSERT INTO `userdetails` VALUES (1,'VAIBHAV','VAIBHAV@GMAIL.COM','VAIBHAV','INSPECTOR',1),(2,'ANISH','ANISH@GMAIL.COM','ANISH','INSPECTOR',0),(3,'affewe','dfg@zxc.xzc','wwww','',12412412);
/*!40000 ALTER TABLE `userdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle` (
  `Vehicle_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Vehicle_Number` varchar(10) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Owner_Name` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Contact_Address` varchar(50) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Aadhar_Number` bigint(12) NOT NULL,
  PRIMARY KEY (`Vehicle_ID`),
  UNIQUE KEY `Vehicle_Number` (`Vehicle_Number`,`Aadhar_Number`),
  KEY `Aadhar_Number` (`Aadhar_Number`),
  CONSTRAINT `Vehicle_ibfk_1` FOREIGN KEY (`Aadhar_Number`) REFERENCES `aadhar` (`Aadhar_Number`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle`
--

LOCK TABLES `vehicle` WRITE;
/*!40000 ALTER TABLE `vehicle` DISABLE KEYS */;
INSERT INTO `vehicle` VALUES (2,'CG11CD1111','SAKSHI','58 SHRI KRISHNA COLONY',111111111111),(3,'CG22CD2222','SHRUTI','23 UTSAV NAGAR',222222222222);
/*!40000 ALTER TABLE `vehicle` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-28  2:07:42
