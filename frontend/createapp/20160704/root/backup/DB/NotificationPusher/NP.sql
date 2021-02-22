-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Notification Pusher
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2-log

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
-- Table structure for table `App_Binding`
--

DROP TABLE IF EXISTS `App_Binding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `App_Binding` (
  `App_Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `App_Phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `App_ID` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`App_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `App_Binding`
--

LOCK TABLES `App_Binding` WRITE;
/*!40000 ALTER TABLE `App_Binding` DISABLE KEYS */;
INSERT INTO `App_Binding` VALUES ('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app200','2016-03-25 11:26:23'),('fiveflower0130@gmail.com','','com_foxconn_cnsbg_it_maps_app201','2016-03-25 11:27:28'),('vic@gmail.com','','com_foxconn_cnsbg_it_maps_app202','2016-03-25 11:47:25'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app203','2016-03-25 14:11:03'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app204','2016-03-25 14:46:39'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app205','2016-03-25 18:20:21'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app206','2016-03-25 18:47:07'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app207','2016-03-25 18:49:25'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app208','2016-03-25 19:06:10'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app209','2016-03-25 19:09:04'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app210','2016-03-25 19:21:27'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app213','2016-03-25 19:39:56'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app216','2016-03-25 19:52:57'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app221','2016-03-28 09:09:46'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app224','2016-03-29 14:56:03'),('hsiang1218@gmail.com','','com_foxconn_cnsbg_it_maps_app225','2016-03-29 15:27:42');
/*!40000 ALTER TABLE `App_Binding` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `App_Counter`
--

DROP TABLE IF EXISTS `App_Counter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `App_Counter` (
  `app_index` int(10) unsigned NOT NULL,
  PRIMARY KEY (`app_index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `App_Counter`
--

LOCK TABLES `App_Counter` WRITE;
/*!40000 ALTER TABLE `App_Counter` DISABLE KEYS */;
INSERT INTO `App_Counter` VALUES (200);
/*!40000 ALTER TABLE `App_Counter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `App_Table`
--

DROP TABLE IF EXISTS `App_Table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `App_Table` (
  `App_No` tinyint(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `App_ID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `App_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `App_OS` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `App_SyncURL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `App_Token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Uuid_Type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `index_Url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  `Push_Msg_Time` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`App_No`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `App_Table`
--

LOCK TABLES `App_Table` WRITE;
/*!40000 ALTER TABLE `App_Table` DISABLE KEYS */;
INSERT INTO `App_Table` VALUES (000001,'com_foxconn_cnsbg_it_maps_app200','123','Both','http://123.123.com','dce6ce8343ab965c2b082b83799fb38d','NONE','https://maps.x1apps.com','2016-03-25 11:22:45',1458876401140),(000002,'com_foxconn_cnsbg_it_maps_app201','test03252','Both','http://123.123.com','8f6eb15fbcc6f925442d0a468b16f6d3','NONE','http://www.google.com','2016-03-25 11:25:11',1458876497608),(000003,'com_foxconn_cnsbg_it_maps_app202','vicDebug','Both','http://123.123.com','35b2bb36fcee668ee87f4445ec9022f3','NONE','https://tw.yahoo.com/','2016-03-25 11:47:09',1459124868347),(000004,'com_foxconn_cnsbg_it_maps_app203','123','Both','http://123.123.com','91882e03378178e0d779390eb8a1fc54','NONE','http://nba.com.tw','2016-03-25 14:10:38',1458886747825),(000005,'com_foxconn_cnsbg_it_maps_app204','123','Both','http://123.123.com','bb4ca0f638e5f14a23afd55a52895979','NONE','http://www.tzecheng.com.tw','2016-03-25 14:45:27',1458889289888),(000006,'com_foxconn_cnsbg_it_maps_app205','123','Both','http://123.123.com','b90708769fb68dc717cc0db446811dba','NONE','http://www.tzecheng.com.tw','2016-03-25 18:18:32',1458901112326),(000007,'com_foxconn_cnsbg_it_maps_app206','123','Both','http://123.123.com','e79477ed83004b5b03181c3f9f3a5717','NONE','https://10.63.3.150','2016-03-25 18:46:37',1458902797858),(000008,'com_foxconn_cnsbg_it_maps_app207','123','Both','http://123.123.com','96e6e7719737efd6c0d371430d272353','NONE','http://nba.com.tw','2016-03-25 18:48:52',1458903112715),(000009,'com_foxconn_cnsbg_it_maps_app208','111','Both','http://123.123.com','6389bc03812f5289af8131641869d65e','NONE','http://google.com','2016-03-25 19:05:47',1458903947093),(000010,'com_foxconn_cnsbg_it_maps_app209','333','Both','http://123.123.com','9ac07673910698239f2294e0ba8c8020','NONE','http://nba.com.tw','2016-03-25 19:08:46',1458904126860),(000011,'com_foxconn_cnsbg_it_maps_app210','555','Both','http://123.123.com','2a149c6d343d63c1a783ec8c8403134b','NONE','http://nba.com.tw','2016-03-25 19:20:51',1458905338900),(000012,'com_foxconn_cnsbg_it_maps_app213','666','Both','http://123.123.com','cce82fb636acc00b2ae448d2f8118c3f','NONE','http://nba.com.tw','2016-03-25 19:38:39',1458906102298),(000013,'com_foxconn_cnsbg_it_maps_app214','777','Both','http://123.123.com','40d47c3ee85133e20f912186c6618773','NONE','http://nba.com.tw','2016-03-25 19:51:34',1458906694266),(000014,'com_foxconn_cnsbg_it_maps_app216','111','Both','http://123.123.com','11df815c06959d830a4c9c33a0ab980b','NONE','http://google.com','2016-03-25 19:52:29',1458906996002),(000015,'com_foxconn_cnsbg_it_maps_app221','123','Both','http://123.123.com','067a3f6c83996113368ccd14826b8027','NONE','http://www.tzecheng.com.tw','2016-03-28 09:09:36',1459128198918),(000016,'com_foxconn_cnsbg_it_maps_app224','12345','Both','http://123.123.com','13b83d890102acd506a28c1ec68d0717','NONE','http://nba.com.tw','2016-03-29 14:55:52',1459235249408),(000017,'com_foxconn_cnsbg_it_maps_app225','123456','Both','http://123.123.com','c1c6bbaea37502023ec8e232c8e0817a','NONE','http://nba.com.tw','2016-03-29 15:26:44',1459238256492);
/*!40000 ALTER TABLE `App_Table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `App_User`
--

DROP TABLE IF EXISTS `App_User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `App_User` (
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `App_User`
--

LOCK TABLES `App_User` WRITE;
/*!40000 ALTER TABLE `App_User` DISABLE KEYS */;
INSERT INTO `App_User` VALUES ('a168996995@gmail.com','2joxjxix','0933802525','2015-12-23 09:40:16'),('aaaa@gmail.com','1111','0915710152','2015-12-08 17:14:36'),('aaaaa@gmail.com','11111','0915710152','2016-02-16 09:58:07'),('fiveflower0130@gmail.com','1111','0919171862','2015-12-08 17:34:32'),('fiveflower013021@gmail.com','2222','0919171862','2016-02-22 16:45:34'),('hsiang1218@gmail.com','oodhoodh','0937367537','2015-12-22 16:58:26'),('jscat@gmail.com','1111','0912120120','2015-12-29 09:49:27'),('rex@gmail.com','rex','0988306120','2015-12-21 15:27:57'),('sss@gmail.com','1111','0912123123','2015-12-11 16:18:45'),('test123@gmail.com','5555','0912345678','2015-12-22 16:06:12'),('test456@gmail.com','2222','0987654321','2015-12-23 17:29:12'),('tester@gmail.com','abc123','0932196720','2016-03-18 18:01:58'),('vic@gmail.com','vic','0921379214','2015-12-11 16:48:16');
/*!40000 ALTER TABLE `App_User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Builder_Table`
--

DROP TABLE IF EXISTS `Builder_Table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Builder_Table` (
  `Builder_No` tinyint(6) NOT NULL AUTO_INCREMENT,
  `Builder_IP` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Builder_OS` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Builder_Power` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Builder_Status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`Builder_No`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Builder_Table`
--

LOCK TABLES `Builder_Table` WRITE;
/*!40000 ALTER TABLE `Builder_Table` DISABLE KEYS */;
INSERT INTO `Builder_Table` VALUES (1,'10.63.3.156','android','Off','Ready'),(3,'10.63.3.158','ios','Off','Ready');
/*!40000 ALTER TABLE `Builder_Table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Counter_List`
--

DROP TABLE IF EXISTS `Counter_List`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Counter_List` (
  `job_counter` int(6) NOT NULL,
  `app_counter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Counter_List`
--

LOCK TABLES `Counter_List` WRITE;
/*!40000 ALTER TABLE `Counter_List` DISABLE KEYS */;
/*!40000 ALTER TABLE `Counter_List` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Provision_Table`
--

DROP TABLE IF EXISTS `Provision_Table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Provision_Table` (
  `pro_no` int(5) NOT NULL AUTO_INCREMENT,
  `provision_app_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bundle_app_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pro_no`)
) ENGINE=InnoDB AUTO_INCREMENT=481 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Provision_Table`
--

LOCK TABLES `Provision_Table` WRITE;
/*!40000 ALTER TABLE `Provision_Table` DISABLE KEYS */;
INSERT INTO `Provision_Table` VALUES (400,'com_foxconn_cnsbg_it_maps_app200','processing','123'),(401,'com_foxconn_cnsbg_it_maps_app201','processing','test03252'),(402,'com_foxconn_cnsbg_it_maps_app202','processing','vicDebug'),(403,'com_foxconn_cnsbg_it_maps_app203','processing','123'),(404,'com_foxconn_cnsbg_it_maps_app204','processing','123'),(405,'com_foxconn_cnsbg_it_maps_app205','processing','123'),(406,'com_foxconn_cnsbg_it_maps_app206','processing','123'),(407,'com_foxconn_cnsbg_it_maps_app207','processing','123'),(408,'com_foxconn_cnsbg_it_maps_app208','processing','111'),(409,'com_foxconn_cnsbg_it_maps_app209','processing','333'),(410,'com_foxconn_cnsbg_it_maps_app210','processing','555'),(411,'com_foxconn_cnsbg_it_maps_app213','processing','666'),(412,'com_foxconn_cnsbg_it_maps_app214','processing','777'),(413,'com_foxconn_cnsbg_it_maps_app216','processing','111'),(414,'com_foxconn_cnsbg_it_maps_app221','processing','123'),(415,'com_foxconn_cnsbg_it_maps_app224','processing','12345'),(416,'com_foxconn_cnsbg_it_maps_app225','processing','123456'),(417,'com_foxconn_cnsbg_it_maps_app226','standby','null'),(418,'com_foxconn_cnsbg_it_maps_app227','standby','null'),(419,'com_foxconn_cnsbg_it_maps_app228','standby','null'),(420,'com_foxconn_cnsbg_it_maps_app230','standby','null'),(421,'com_foxconn_cnsbg_it_maps_app231','standby','null'),(422,'com_foxconn_cnsbg_it_maps_app232','standby','null'),(423,'com_foxconn_cnsbg_it_maps_app233','standby','null'),(424,'com_foxconn_cnsbg_it_maps_app234','standby','null'),(425,'com_foxconn_cnsbg_it_maps_app235','standby','null'),(426,'com_foxconn_cnsbg_it_maps_app236','standby','null'),(427,'com_foxconn_cnsbg_it_maps_app237','standby','null'),(428,'com_foxconn_cnsbg_it_maps_app239','standby','null'),(429,'com_foxconn_cnsbg_it_maps_app238','standby','null'),(430,'com_foxconn_cnsbg_it_maps_app241','standby','null'),(431,'com_foxconn_cnsbg_it_maps_app242','standby','null'),(432,'com_foxconn_cnsbg_it_maps_app243','standby','null'),(433,'com_foxconn_cnsbg_it_maps_app250','standby','null'),(434,'com_foxconn_cnsbg_it_maps_app253','standby','null'),(435,'com_foxconn_cnsbg_it_maps_app254','standby','null'),(436,'com_foxconn_cnsbg_it_maps_app255','standby','null'),(437,'com_foxconn_cnsbg_it_maps_app256','standby','null'),(438,'com_foxconn_cnsbg_it_maps_app257','standby','null'),(439,'com_foxconn_cnsbg_it_maps_app258','standby','null'),(440,'com_foxconn_cnsbg_it_maps_app259','standby','null'),(441,'com_foxconn_cnsbg_it_maps_app260','standby','null'),(442,'com_foxconn_cnsbg_it_maps_app261','standby','null'),(443,'com_foxconn_cnsbg_it_maps_app262','standby','null'),(444,'com_foxconn_cnsbg_it_maps_app263','standby','null'),(445,'com_foxconn_cnsbg_it_maps_app264','standby','null'),(446,'com_foxconn_cnsbg_it_maps_app265','standby','null'),(447,'com_foxconn_cnsbg_it_maps_app266','standby','null'),(448,'com_foxconn_cnsbg_it_maps_app267','standby','null'),(449,'com_foxconn_cnsbg_it_maps_app268','standby','null'),(450,'com_foxconn_cnsbg_it_maps_app269','standby','null'),(451,'com_foxconn_cnsbg_it_maps_app270','standby','null'),(452,'com_foxconn_cnsbg_it_maps_app271','standby','null'),(453,'com_foxconn_cnsbg_it_maps_app272','standby','null'),(454,'com_foxconn_cnsbg_it_maps_app273','standby','null'),(455,'com_foxconn_cnsbg_it_maps_app275','standby','null'),(456,'com_foxconn_cnsbg_it_maps_app276','standby','null'),(457,'com_foxconn_cnsbg_it_maps_app277','standby','null'),(458,'com_foxconn_cnsbg_it_maps_app278','standby','null'),(459,'com_foxconn_cnsbg_it_maps_app279','standby','null'),(460,'com_foxconn_cnsbg_it_maps_app280','standby','null'),(461,'com_foxconn_cnsbg_it_maps_app281','standby','null'),(462,'com_foxconn_cnsbg_it_maps_app282','standby','null'),(463,'com_foxconn_cnsbg_it_maps_app283','standby','null'),(464,'com_foxconn_cnsbg_it_maps_app284','standby','null'),(465,'com_foxconn_cnsbg_it_maps_app285','standby','null'),(466,'com_foxconn_cnsbg_it_maps_app286','standby','null'),(467,'com_foxconn_cnsbg_it_maps_app287','standby','null'),(468,'com_foxconn_cnsbg_it_maps_app288','standby','null'),(469,'com_foxconn_cnsbg_it_maps_app289','standby','null'),(470,'com_foxconn_cnsbg_it_maps_app290','standby','null'),(471,'com_foxconn_cnsbg_it_maps_app291','standby','null'),(472,'com_foxconn_cnsbg_it_maps_app292','standby','null'),(473,'com_foxconn_cnsbg_it_maps_app293','standby','null'),(474,'com_foxconn_cnsbg_it_maps_app294','standby','null'),(475,'com_foxconn_cnsbg_it_maps_app295','standby','null'),(476,'com_foxconn_cnsbg_it_maps_app296','standby','null'),(477,'com_foxconn_cnsbg_it_maps_app297','standby','null'),(478,'com_foxconn_cnsbg_it_maps_app298','standby','null'),(479,'com_foxconn_cnsbg_it_maps_app299','standby','null'),(480,'com_foxconn_cnsbg_it_maps_app300','standby','null');
/*!40000 ALTER TABLE `Provision_Table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appId`
--

DROP TABLE IF EXISTS `appId`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appId` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appId`
--

LOCK TABLES `appId` WRITE;
/*!40000 ALTER TABLE `appId` DISABLE KEYS */;
/*!40000 ALTER TABLE `appId` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appId_Message`
--

DROP TABLE IF EXISTS `appId_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appId_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appId_Message`
--

LOCK TABLES `appId_Message` WRITE;
/*!40000 ALTER TABLE `appId_Message` DISABLE KEYS */;
/*!40000 ALTER TABLE `appId_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app_id`
--

DROP TABLE IF EXISTS `app_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_id` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_id`
--

LOCK TABLES `app_id` WRITE;
/*!40000 ALTER TABLE `app_id` DISABLE KEYS */;
/*!40000 ALTER TABLE `app_id` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app200`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app200`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app200` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app200`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app200` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app200` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app200` VALUES (1,'iOS','88F9B239-70A2-4FF0-B4D8-B2D92926B411','88F9B239-70A2-4FF0-B4D8-B2D92926B411','0650713664f0a010dbde11d30bdfbc784ff3fb41a30cc2fe0ffca154a6cade50',0,0,1,'','','','','中華電信','','2016-03-25 11:23:37','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','88F9B239-70A2-4FF0-B4D8-B2D92926B411','2016-03-25 11:25:15');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app200` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app200_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app200_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app200_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app200_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app200_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app200_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app200_Message` VALUES (1,'123','http://10.63.3.150:81/TinyUrl/qOKN0Xr8','http://yahoo.com.tw',1458876401140,1458921600000,1458876401140,'88F9B239-70A2-4FF0-B4D8-B2D92926B411',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app200_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app201`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app201`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app201` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app201`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app201` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app201` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app201` VALUES (1,'Android','00000000-1b01-58d4-ffff-ffff9a23580c','00000000-1b01-58d4-ffff-ffff9a23580c','APA91bGS2F-UqmXzLf61C68VqyWd4z0xtoHfQWah__1NKtFCeefBkZ4Id2rKmoG6nmh40TBJzI7YGLWZjNXYPXM0wZlvC7iJe3saunrMPrsxPBXuWoUa25wG8Bn1KuVDgSemHFCnXHdijUNCaCbpR14EnR2Dd6GRsPBKEF5v_pALsor4B4uKE7E',0,1,2,'00WW_1_590','MSM8974','armeabi-v7a','[11220,60438129,-1]','GT+4G','tw','1458876338181','VNA','4.4.2','4.4.2','InFocus+M810','InFocus','8547fae6dda7ba0c','2016-03-25 11:27:17');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app201` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app201_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app201_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app201_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app201_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app201_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app201_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app201_Message` VALUES (1,'gggggg','http://10.63.3.150:81/TinyUrl/DT46bNI1','http://www.google.com',1458876463318,1458921600000,1458876463318,'00000000-1b01-58d4-ffff-ffff9a23580c',1),(2,'gggggg123','http://10.63.3.150:81/TinyUrl/DT46bNI1','http://www.google.com',1458876497608,1458921600000,1458876497608,'00000000-1b01-58d4-ffff-ffff9a23580c',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app201_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app202`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app202`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app202` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app202`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app202` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app202` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app202` VALUES (1,'Android','00000000-5a16-d677-ffff-ffff9a235829','00000000-5a16-d677-ffff-ffff9a235829','APA91bFl1HVGP0s9tz4_39_1DUkGTWjU4btYTLDNtrMothGzuL-HYMRGg8j9jRzh8mS9rkrafAlQUcwr4migAfc-GQ6yUcSKeZ7etG7KZgRdK_RPipb1XwgN9KRd6yfw_Y6yHzo5j3KKIoKZHqxl3nj0rHDqzOjX0A',0,2,44,'00WW_4_16C','MSM8974','armeabi-v7a','[11220,60438127,-1]','GT+4G','tw','1458877623316','VNA','5.0.2','5.0.2','InFocus+M810','InFocus','62fecb02ce1b5706','2016-03-25 11:48:41');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app202` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app202_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app202_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app202_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app202_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app202_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app202_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app202_Message` VALUES (1,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458877743584,1458921600000,1458877743584,'00000000-5a16-d677-ffff-ffff9a235829',1),(2,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458878103847,1458921600000,1458878103847,'00000000-5a16-d677-ffff-ffff9a235829',1),(3,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458878106598,1458921600000,1458878106598,'00000000-5a16-d677-ffff-ffff9a235829',1),(4,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884216180,1458921600000,1458884216180,'00000000-5a16-d677-ffff-ffff9a235829',1),(5,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884388063,1458921600000,1458884388063,'00000000-5a16-d677-ffff-ffff9a235829',1),(6,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884406217,1458921600000,1458884406217,'00000000-5a16-d677-ffff-ffff9a235829',1),(7,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','','',1458884441746,1458921600000,1458884441746,'00000000-5a16-d677-ffff-ffff9a235829',1),(8,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','','',1458884563461,1458921600000,1458884563461,'00000000-5a16-d677-ffff-ffff9a235829',1),(9,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884618110,1458921600000,1458884618110,'00000000-5a16-d677-ffff-ffff9a235829',1),(10,'http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884644405,1458921600000,1458884644405,'00000000-5a16-d677-ffff-ffff9a235829',1),(11,'122','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884716882,1458921600000,1458884716882,'00000000-5a16-d677-ffff-ffff9a235829',1),(12,'3122','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884727170,1458921600000,1458884727170,'00000000-5a16-d677-ffff-ffff9a235829',1),(13,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884750646,1458921600000,1458884750646,'00000000-5a16-d677-ffff-ffff9a235829',1),(14,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458884908133,1458921600000,1458884908133,'00000000-5a16-d677-ffff-ffff9a235829',1),(15,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885017201,1458921600000,1458885017201,'00000000-5a16-d677-ffff-ffff9a235829',1),(16,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885040525,1458921600000,1458885040525,'00000000-5a16-d677-ffff-ffff9a235829',1),(17,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885066510,1458921600000,1458885066510,'00000000-5a16-d677-ffff-ffff9a235829',1),(18,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885077522,1458921600000,1458885077522,'00000000-5a16-d677-ffff-ffff9a235829',1),(19,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885707126,1458921600000,1458885707126,'00000000-5a16-d677-ffff-ffff9a235829',1),(20,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885863801,1458921600000,1458885863801,'00000000-5a16-d677-ffff-ffff9a235829',1),(21,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885875580,1458921600000,1458885875580,'00000000-5a16-d677-ffff-ffff9a235829',1),(22,'31223','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885891448,1458921600000,1458885891448,'00000000-5a16-d677-ffff-ffff9a235829',1),(23,'3122322','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458885895368,1458921600000,1458885895368,'00000000-5a16-d677-ffff-ffff9a235829',1),(24,'3122322','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458886501876,1458921600000,1458886501876,'00000000-5a16-d677-ffff-ffff9a235829',1),(25,'3122324','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458886521008,1458921600000,1458886521008,'00000000-5a16-d677-ffff-ffff9a235829',1),(26,'3122324','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458886769139,1458921600000,1458886769139,'00000000-5a16-d677-ffff-ffff9a235829',1),(27,'3122324','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458886865007,1458921600000,1458886865007,'00000000-5a16-d677-ffff-ffff9a235829',1),(28,'3122324','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458887516218,1458921600000,1458887516218,'00000000-5a16-d677-ffff-ffff9a235829',1),(29,'3122324','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458887531904,1458921600000,1458887531904,'00000000-5a16-d677-ffff-ffff9a235829',1),(30,'3122324','http://10.63.3.150:81/TinyUrl/deY3lOQ3','http://stackoverflow.com/questions/5374311/convert-arrayliststring-to-string-array',1458888294996,1458921600000,1458888294996,'00000000-5a16-d677-ffff-ffff9a235829',1),(31,'https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458888490498,1458921600000,1458888490498,'00000000-5a16-d677-ffff-ffff9a235829',1),(32,'https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458888745521,1458921600000,1458888745521,'00000000-5a16-d677-ffff-ffff9a235829',1),(33,'12','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458888756486,1458921600000,1458888756486,'00000000-5a16-d677-ffff-ffff9a235829',1),(34,'123','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458888808499,1458921600000,1458888808499,'00000000-5a16-d677-ffff-ffff9a235829',1),(35,'123','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458888868874,1458921600000,1458888868874,'00000000-5a16-d677-ffff-ffff9a235829',1),(36,'123','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458888878230,1459008000000,1458888878230,'00000000-5a16-d677-ffff-ffff9a235829',1),(37,'123','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458888937090,1459008000000,1458888937090,'00000000-5a16-d677-ffff-ffff9a235829',1),(38,'123','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458889032457,1459008000000,1458889032457,'00000000-5a16-d677-ffff-ffff9a235829',1),(39,'1234','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458889057718,1459008000000,1458889057718,'00000000-5a16-d677-ffff-ffff9a235829',1),(40,'12345','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458889292721,1459008000000,1458889292721,'00000000-5a16-d677-ffff-ffff9a235829',1),(41,'12345','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458889420804,1459008000000,1458889420804,'00000000-5a16-d677-ffff-ffff9a235829',1),(42,'12345','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458889436412,1459008000000,1458889436412,'00000000-5a16-d677-ffff-ffff9a235829',1),(43,'123455','http://10.63.3.150:81/TinyUrl/VlmsWi22','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bHZaSnhLc04=',1458889448529,1459008000000,1458889448529,'00000000-5a16-d677-ffff-ffff9a235829',1),(44,'123','http://10.63.3.150:81/TinyUrl/iA6QVyyu','https://10.63.3.150/cms/Maps_App_Push_All.php?data=YVdROVkyOXRYMlp2ZUdOdmJtNWZZMjV6WW1kZmFYUmZiV0Z3YzE5aGNIQXlNREltYm1GdFpUMTJhV05FWldKMVp5WjBiMnRsYmowek5XSXlZbUl6Tm1aalpXVTJOamhsWlRnM1pqUTBORFZsWXprd01qSm1NeVoxZFdsa2RIbHdaVDFPVDA1RkpuVnpaWEk5ZG1salFHZHRZV2xzTG1OdmJTWndZWE56ZDI5eVpEMTJhV009bWhxVjFHZDM=',1459124868347,1459180800000,1459124868347,'00000000-5a16-d677-ffff-ffff9a235829',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app202_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app203`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app203`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app203` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app203`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app203` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app203` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app203` VALUES (1,'iOS','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','0f63512c00f526fab69428c1851ce8fda2becacaffaaa15d78f6b02f918f4175',0,18,2,'','','','','中華電信','','2016-03-25 14:13:16','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','2016-03-25 14:14:54');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app203` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app203_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app203_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app203_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app203_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app203_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app203_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app203_Message` VALUES (1,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/qOKN0Xr8','http://yahoo.com.tw',1458886575447,1458921600000,1458886575447,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1),(2,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/h6@HLiwW','http://google.com',1458886747825,1458921600000,1458886747825,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app203_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app204`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app204`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app204` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app204`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app204` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app204` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app204` VALUES (1,'iOS','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','3765c7a205c2a492b54f8e26da7512b63d97be04a0bff78308cb397467fd4559',0,1,4,'','','','','中華電信','','2016-03-25 14:45:55','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','2016-03-25 14:47:34');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app204` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app204_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app204_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app204_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app204_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app204_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app204_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app204_Message` VALUES (1,'12345678','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458888484676,1458921600000,1458888484676,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1),(2,'12345678','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458888654247,1458921600000,1458888654247,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1),(3,'12345678','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458889005211,1458921600000,1458889005211,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1),(4,'12345678','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458889289888,1458921600000,1458889289888,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app204_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app205`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app205`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app205` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app205`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app205` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app205` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app205` VALUES (1,'iOS','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','c9ca069a87310d7deab336591a6e611a3eac7ae1e7efc2c6806325a40226002a',0,0,0,'','','','','中華電信','','2016-03-25 18:20:41','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','2016-03-25 18:22:19');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app205` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app205_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app205_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app205_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app205_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app205_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app205_Message` DISABLE KEYS */;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app205_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app206`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app206`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app206` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app206`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app206` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app206` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app206` VALUES (1,'iOS','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','f05ce3629ff76dee629cb9f1f44a640fc6da710ede78818a08ae3c8bae38573a',0,0,0,'','','','','中華電信','','2016-03-25 18:46:38','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','2016-03-25 18:48:17');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app206` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app206_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app206_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app206_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app206_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app206_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app206_Message` DISABLE KEYS */;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app206_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app207`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app207`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app207` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app207`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app207` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app207` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app207` VALUES (1,'iOS','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','1bf655ee78cb9849c4e30887176343fae8d2b8a0fa2c6ca8addfebfb17ed5814',0,0,2,'','','','','中華電信','','2016-03-25 18:49:10','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','37FD0344-CD83-4A05-A7EE-0BCA53719CB2','2016-03-25 18:50:49');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app207` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app207_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app207_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app207_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app207_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app207_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app207_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app207_Message` VALUES (1,'222225555','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458903084639,1458921600000,1458903084639,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1),(2,'222225555','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458903112715,1458921600000,1458903112715,'37FD0344-CD83-4A05-A7EE-0BCA53719CB2',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app207_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app208`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app208`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app208` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app208`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app208` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app208` DISABLE KEYS */;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app208` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app208_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app208_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app208_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app208_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app208_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app208_Message` DISABLE KEYS */;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app208_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app209`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app209`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app209` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app209`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app209` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app209` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app209` VALUES (1,'iOS','929D6F52-373D-4311-8234-B60DA949BDF7','929D6F52-373D-4311-8234-B60DA949BDF7','af1d4f51169c6251d3be7e04196115616ad84326758ab6027ca22435658d9762',0,0,0,'','','','','中華電信','','2016-03-25 19:08:50','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','929D6F52-373D-4311-8234-B60DA949BDF7','2016-03-25 19:10:28');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app209` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app209_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app209_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app209_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app209_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app209_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app209_Message` DISABLE KEYS */;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app209_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app210`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app210`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app210` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app210`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app210` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app210` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app210` VALUES (1,'iOS','01C1C24D-6534-4634-A865-B304DE721F9D','01C1C24D-6534-4634-A865-B304DE721F9D','2badcca6a9d403ab5529160d5068aab8ea094a708e7012f69446a02bf6b58fcb',0,0,4,'','','','','中華電信','','2016-03-25 19:20:54','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','01C1C24D-6534-4634-A865-B304DE721F9D','2016-03-25 19:22:33');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app210` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app210_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app210_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app210_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app210_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app210_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app210_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app210_Message` VALUES (1,'1234','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458905020032,1458921600000,1458905020032,'01C1C24D-6534-4634-A865-B304DE721F9D',1),(2,'1234','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458905028733,1458921600000,1458905028733,'01C1C24D-6534-4634-A865-B304DE721F9D',1),(3,'1234','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458905167480,1458921600000,1458905167480,'01C1C24D-6534-4634-A865-B304DE721F9D',1),(4,'1234','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458905338900,1458921600000,1458905338900,'01C1C24D-6534-4634-A865-B304DE721F9D',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app210_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app213`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app213`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app213` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app213`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app213` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app213` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app213` VALUES (1,'iOS','7F29490A-3DCC-4EF9-BEEB-DEDC2C9BCC70','7F29490A-3DCC-4EF9-BEEB-DEDC2C9BCC70','7fc6df5eb6d80717c268e7d07c652387655c84c392182f713aeb2af4f200f7f4',0,0,2,'','','','','中華電信','','2016-03-25 19:38:28','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','7F29490A-3DCC-4EF9-BEEB-DEDC2C9BCC70','2016-03-25 19:40:07');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app213` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app213_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app213_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app213_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app213_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app213_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app213_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app213_Message` VALUES (1,'123','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458906043576,1458921600000,1458906043576,'7F29490A-3DCC-4EF9-BEEB-DEDC2C9BCC70',1),(2,'123','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458906102298,1458921600000,1458906102298,'7F29490A-3DCC-4EF9-BEEB-DEDC2C9BCC70',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app213_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app214`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app214`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app214` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app214`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app214` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app214` DISABLE KEYS */;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app214` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app214_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app214_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app214_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app214_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app214_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app214_Message` DISABLE KEYS */;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app214_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app216`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app216`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app216` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app216`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app216` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app216` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app216` VALUES (1,'iOS','AC2EADA6-DC1E-4202-A697-5523301F8D80','AC2EADA6-DC1E-4202-A697-5523301F8D80','8b875e3aff922c59c059bd8c46f5f43eb9119c17a8735da05efbc28fa0ad6ecb',0,0,2,'','','','','中華電信','','2016-03-25 19:52:36','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','AC2EADA6-DC1E-4202-A697-5523301F8D80','2016-03-25 19:54:15');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app216` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app216_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app216_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app216_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app216_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app216_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app216_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app216_Message` VALUES (1,'123','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458906906355,1458921600000,1458906906355,'AC2EADA6-DC1E-4202-A697-5523301F8D80',1),(2,'123','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1458906996002,1458921600000,1458906996002,'AC2EADA6-DC1E-4202-A697-5523301F8D80',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app216_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app221`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app221`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app221` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app221`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app221` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app221` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app221` VALUES (1,'iOS','8A582C60-35D5-4671-A511-01EB3AD32F6B','8A582C60-35D5-4671-A511-01EB3AD32F6B','7f8f5ee9d6f8bf55b6870d88d3ed848edeaa02265ecc85899d83634ad7f01806',0,0,2,'','','','','中華電信','','2016-03-28 09:12:19','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','8A582C60-35D5-4671-A511-01EB3AD32F6B','2016-03-28 09:14:03');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app221` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app221_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app221_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app221_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app221_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app221_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app221_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app221_Message` VALUES (1,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/qOKN0Xr8','http://yahoo.com.tw',1459127735912,1459180800000,1459127735912,'8A582C60-35D5-4671-A511-01EB3AD32F6B',1),(2,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/qOKN0Xr8','http://yahoo.com.tw',1459128198918,1459180800000,1459128198918,'8A582C60-35D5-4671-A511-01EB3AD32F6B',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app221_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app224`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app224`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app224` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app224`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app224` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app224` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app224` VALUES (1,'iOS','25749FDB-CAC0-40EC-8983-DA2102EC6A5C','25749FDB-CAC0-40EC-8983-DA2102EC6A5C','8846e2ea2477ad36bcac8dfa4273af7aa58b70017bf57eb5e4d9a74eb6be821f',0,2,4,'','','','','中華電信','','1459234688739','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','25749FDB-CAC0-40EC-8983-DA2102EC6A5C','2016-03-29 14:59:54');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app224` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app224_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app224_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app224_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app224_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app224_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app224_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app224_Message` VALUES (1,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459235034241,1459267200000,1459235034241,'25749FDB-CAC0-40EC-8983-DA2102EC6A5C',1),(2,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459235086450,1459267200000,1459235086450,'25749FDB-CAC0-40EC-8983-DA2102EC6A5C',1),(3,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459235169427,1459267200000,1459235169427,'25749FDB-CAC0-40EC-8983-DA2102EC6A5C',1),(4,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459235249408,1459267200000,1459235249408,'25749FDB-CAC0-40EC-8983-DA2102EC6A5C',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app224_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app225`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app225`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app225` (
  `Device_No` int(11) NOT NULL AUTO_INCREMENT,
  `Device_OS` varchar(20) DEFAULT NULL,
  `Uuid` varchar(100) DEFAULT NULL,
  `Device_Uuid` varchar(100) DEFAULT NULL,
  `Device_Token` varchar(200) DEFAULT NULL,
  `Badge_Number` int(11) DEFAULT NULL,
  `Attention_Number` int(11) DEFAULT NULL,
  `Notification_Number` int(11) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `Board` varchar(100) DEFAULT NULL,
  `Cpu_Abi` varchar(100) DEFAULT NULL,
  `Cell_Location` varchar(100) DEFAULT NULL,
  `Network_Operator_Name` varchar(100) DEFAULT NULL,
  `Network_Country_Iso` varchar(100) DEFAULT NULL,
  `Device_Time` varchar(100) DEFAULT NULL,
  `Device_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Name` varchar(100) DEFAULT NULL,
  `Device_OS_Version` varchar(100) DEFAULT NULL,
  `Device_Type` varchar(100) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Vendor_Id` varchar(100) DEFAULT NULL,
  `Update_Time` datetime DEFAULT NULL,
  PRIMARY KEY (`Device_No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app225`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app225` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app225` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app225` VALUES (1,'iOS','42E0A8B6-9EB3-45ED-BB78-3539F983D712','42E0A8B6-9EB3-45ED-BB78-3539F983D712','d6a7a33ca1e22ea95f76a23cf9a87fe170dbdac0bd98f2572ad4c52a735b534d',0,1,11,'','','','','中華電信','','2016-03-29 15:29:13','Hsiang\'s  iphone😄😄','iPhone OS','8.4','iPhone','Apple','42E0A8B6-9EB3-45ED-BB78-3539F983D712','2016-03-29 15:30:59');
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app225` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `com_foxconn_cnsbg_it_maps_app225_Message`
--

DROP TABLE IF EXISTS `com_foxconn_cnsbg_it_maps_app225_Message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com_foxconn_cnsbg_it_maps_app225_Message` (
  `Message_No` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Tiny_Url` varchar(100) DEFAULT NULL,
  `Original_Url` text,
  `Begin_Time` bigint(20) NOT NULL,
  `End_Time` bigint(20) NOT NULL,
  `Update_Time` bigint(20) NOT NULL,
  `Device_Uuid` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Message_No`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com_foxconn_cnsbg_it_maps_app225_Message`
--

LOCK TABLES `com_foxconn_cnsbg_it_maps_app225_Message` WRITE;
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app225_Message` DISABLE KEYS */;
INSERT INTO `com_foxconn_cnsbg_it_maps_app225_Message` VALUES (1,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459236694426,1459267200000,1459236694426,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(2,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459236797881,1459267200000,1459236797881,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(3,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459236832185,1459267200000,1459236832185,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(4,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459237036683,1459267200000,1459237036683,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(5,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459237048421,1459267200000,1459237048421,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(6,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459237161756,1459267200000,1459237161756,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(7,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459237165635,1459267200000,1459237165635,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(8,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459237168920,1459267200000,1459237168920,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(9,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459237226072,1459267200000,1459237226072,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(10,'春初加購趣 2/12~3/20 凡購買任一產品，享50元加購法國精品巧克力','http://10.63.3.150:81/TinyUrl/EvkJKRtz','https://www.facebook.com/紫成-753722988036293/',1459237271083,1459267200000,1459237271083,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1),(11,'13579','http://10.63.3.150:81/TinyUrl/H8P2Dgow','http://apple.com',1459238256492,1459267200000,1459238256492,'42E0A8B6-9EB3-45ED-BB78-3539F983D712',1);
/*!40000 ALTER TABLE `com_foxconn_cnsbg_it_maps_app225_Message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'Notification Pusher'
--
/*!50003 DROP PROCEDURE IF EXISTS `select_app_counter` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`%` PROCEDURE `select_app_counter`()
BEGIN
DECLARE app_counter int(6);
DECLARE par INT;

SET par = 1;

START TRANSACTION;

select app_index into app_counter from App_Counter;

SET app_counter = app_counter + par;

update App_Counter set app_index = app_counter;

select app_counter;

COMMIT;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_usable_builder_ip` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_usable_builder_ip`(in os varchar (50) )
BEGIN
DECLARE ip varchar(50);

START TRANSACTION;

select Builder_IP into ip from Builder_Table where Builder_Status = 'Ready' and Builder_OS = os LIMIT 1;

update Builder_Table set Builder_Status = 'processing' where Builder_IP =  ip;

select ip;

COMMIT;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_usable_provision_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_usable_provision_id`(in app_name varchar (20))
BEGIN
DECLARE app_id varchar(50);

START TRANSACTION;

select provision_app_id into  app_id from Provision_Table where status = 'standby' LIMIT 1;

update Provision_Table set status = 'using' , bundle_app_name = app_name where provision_app_id =  app_id;

select app_id;

COMMIT;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-29 17:42:27
