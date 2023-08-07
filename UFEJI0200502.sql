-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: 18.189.210.93    Database: u320591076_ufeji
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `tbl_asistencia`
--

DROP TABLE IF EXISTS `tbl_asistencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_asistencia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `id_evento` int(10) unsigned NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_evento` (`id_evento`),
  CONSTRAINT `id_evento` FOREIGN KEY (`id_evento`) REFERENCES `tbl_eventos` (`id`),
  CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_miembros` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_asistencia`
--

LOCK TABLES `tbl_asistencia` WRITE;
/*!40000 ALTER TABLE `tbl_asistencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_asistencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cargo`
--

DROP TABLE IF EXISTS `tbl_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cargo` (
  `id_cargo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_cargo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `administrador` enum('SI','NO') COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `modificado_por` int(11) DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  `estado` enum('ACTIVO','INACTIVO') COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cargo`
--

LOCK TABLES `tbl_cargo` WRITE;
/*!40000 ALTER TABLE `tbl_cargo` DISABLE KEYS */;
INSERT INTO `tbl_cargo` VALUES (1,'webmaster','SI','administardor web',1,'2019-08-18',NULL,NULL,'ACTIVO');
/*!40000 ALTER TABLE `tbl_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_eventos`
--

DROP TABLE IF EXISTS `tbl_eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_eventos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `tema` varchar(40) NOT NULL,
  `descripcion` tinytext NOT NULL,
  `encargado_evento` int(10) unsigned DEFAULT NULL,
  `fecha_evento` datetime NOT NULL,
  `fecha_limite_inscripcion` datetime NOT NULL,
  `precio` int(10) unsigned NOT NULL,
  `foto` tinytext NOT NULL,
  `tipo_evento` enum('benefico','recreativo','educativo') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `encargado_evento` (`encargado_evento`),
  CONSTRAINT `tbl_eventos_ibfk_1` FOREIGN KEY (`encargado_evento`) REFERENCES `tbl_miembros` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_eventos`
--

LOCK TABLES `tbl_eventos` WRITE;
/*!40000 ALTER TABLE `tbl_eventos` DISABLE KEYS */;
INSERT INTO `tbl_eventos` VALUES (1,'manuel','cumbion','solotongo lo sabe',1,'2018-11-11 00:00:00','2018-11-09 00:00:00',0,'chorradas','benefico'),(2,'manuel','cumbion','solotongo lo sabe',1,'2018-11-11 00:00:00','2018-11-09 00:00:00',200,'chorradas','benefico'),(3,'raul','cumbion','solotongo lo sabe',1,'2018-11-11 00:00:00','2018-11-09 00:00:00',200,'chorradas','benefico'),(4,'raul','cumbion','solotongo lo sabe',1,'2018-11-11 00:00:00','2018-11-09 00:00:00',200,'chorradas','educativo'),(5,'nn','lknn','nlmnm',1,'2018-11-14 00:00:00','2018-11-15 00:00:00',0,'50','');
/*!40000 ALTER TABLE `tbl_eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_identidad_corporativa`
--

DROP TABLE IF EXISTS `tbl_identidad_corporativa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_identidad_corporativa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_entidad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `subtitulo_entidad` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `logo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `creado_por` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `creacion_fecha` date DEFAULT NULL,
  `modificado_por` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `modificacion_fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_identidad_corporativa`
--

LOCK TABLES `tbl_identidad_corporativa` WRITE;
/*!40000 ALTER TABLE `tbl_identidad_corporativa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_identidad_corporativa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_miembros`
--

DROP TABLE IF EXISTS `tbl_miembros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_miembros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` enum('m','f') COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `cedula` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `ocupacion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` int(10) unsigned NOT NULL,
  `activo` enum('s',' n') COLLATE utf8_spanish2_ci NOT NULL,
  `imgen_usuario` mediumtext CHARACTER SET utf8,
  `creado_por` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `modificado_por` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_miembros`
--

LOCK TABLES `tbl_miembros` WRITE;
/*!40000 ALTER TABLE `tbl_miembros` DISABLE KEYS */;
INSERT INTO `tbl_miembros` VALUES (1,'manuel','guzman','m',2147483647,'00119194306','emmanuel.011593@gmail.com','$2y$10$y8txud77k75t6Faekhk4UebRcEHGLGk1dnKl8sfr/rqpVrVdyNhQq','Desarrollador web','programador',1,'s','preuba','','2019-09-29','','2019-09-29');
/*!40000 ALTER TABLE `tbl_miembros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_noticias`
--

DROP TABLE IF EXISTS `tbl_noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `subtitulo` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` int(10) unsigned NOT NULL,
  `foto` mediumtext COLLATE utf8_spanish2_ci NOT NULL,
  `contenido_noticia` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_publicaion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `autor` (`autor`),
  CONSTRAINT `autor` FOREIGN KEY (`autor`) REFERENCES `tbl_miembros` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_noticias`
--

LOCK TABLES `tbl_noticias` WRITE;
/*!40000 ALTER TABLE `tbl_noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_noticias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-02 21:23:17
