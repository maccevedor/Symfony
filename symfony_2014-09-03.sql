# ************************************************************
# Sequel Pro SQL dump
# Versión 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.27)
# Base de datos: symfony
# Tiempo de Generación: 2014-09-03 15:32:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla Articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Articles`;

CREATE TABLE `Articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_46AB533E7294869C` (`article_id`),
  CONSTRAINT `FK_46AB533E7294869C` FOREIGN KEY (`article_id`) REFERENCES `Articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `Articles` WRITE;
/*!40000 ALTER TABLE `Articles` DISABLE KEYS */;

INSERT INTO `Articles` (`id`, `article_id`, `title`, `author`, `content`, `tags`, `created`, `updated`, `slug`, `category`)
VALUES
	(3,NULL,'hola fores','John Doe','Contenido','ejemplo','2014-07-25','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(4,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-25','2014-07-25','articulo-de-ejemplo-1','ejemplo'),
	(5,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-25','2014-07-25','articulo-de-ejemplo-1','ejemplo'),
	(6,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-25','2014-07-25','articulo-de-ejemplo-1','ejemplo'),
	(7,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-25','2014-07-25','articulo-de-ejemplo-1','ejemplo'),
	(9,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-25','2014-07-25','articulo-de-ejemplo-1','ejemplo'),
	(10,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(11,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(12,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(13,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(14,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(15,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(16,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(18,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(19,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(20,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(21,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(22,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(23,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-28','2014-07-28','articulo-de-ejemplo-1','ejemplo'),
	(24,NULL,'yo','no co','un hombre','macho','2012-04-01','2012-05-05','porque','razon'),
	(25,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-30','2014-07-30','articulo-de-ejemplo-1','ejemplo'),
	(26,NULL,'Articulo de ejemplo 1','John Doe','Contenido','ejemplo','2014-07-30','2014-07-30','articulo-de-ejemplo-1','ejemplo'),
	(27,NULL,'hola','mao','asdsad','sadas','2009-01-01','2009-01-01','adsd','adsad');

/*!40000 ALTER TABLE `Articles` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla Comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Comments`;

CREATE TABLE `Comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reply_to` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Volcado de tabla fos_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fos_user`;

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`)
VALUES
	(1,'maccevedor','maccevedor','maccevedor@gmail.com','maccevedor@gmail.com',1,'8kcmur750tgkwcck88kg4wcco4ws8ok','llTsnTaJ/9gzfEaym66/VqM23un9nqdESJt7txJSt5asrHM/P2C/JbEoGsRa4lW06rOn1pPu7Koyi5CPEW/lFg==','2014-09-03 17:19:37',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);

/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla landing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `landing`;

CREATE TABLE `landing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `ciudad` int(11) DEFAULT NULL,
  `programa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
