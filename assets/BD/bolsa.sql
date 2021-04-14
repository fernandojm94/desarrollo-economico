-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bolsa_trabajo
CREATE DATABASE IF NOT EXISTS `bolsa_trabajo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bolsa_trabajo`;

-- Volcando estructura para tabla bolsa_trabajo.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `empresa` varchar(50) NOT NULL DEFAULT '0',
  `domicilio` varchar(400) NOT NULL DEFAULT '0',
  `telefono` varchar(50) NOT NULL DEFAULT '0',
  `correo` varchar(50) NOT NULL DEFAULT '0',
  `vacante` varchar(50) NOT NULL DEFAULT '0',
  `cantidad` varchar(2) NOT NULL DEFAULT '0',
  `genero` varchar(20) NOT NULL DEFAULT '0',
  `edad` varchar(50) NOT NULL DEFAULT '0',
  `escolaridad` varchar(50) NOT NULL DEFAULT '0',
  `descripcion` varchar(1000) NOT NULL DEFAULT '0',
  `salario` varchar(100) NOT NULL DEFAULT '0',
  `horario` varchar(400) NOT NULL DEFAULT '0',
  `prestaciones` varchar(1000) NOT NULL DEFAULT '0',
  `observaciones` varchar(600) NOT NULL DEFAULT '0',
  `vigencia` date NOT NULL,
  `status` tinyblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bolsa_trabajo.empresa: ~0 rows (aproximadamente)
DELETE FROM `empresa`;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `nombre`, `empresa`, `domicilio`, `telefono`, `correo`, `vacante`, `cantidad`, `genero`, `edad`, `escolaridad`, `descripcion`, `salario`, `horario`, `prestaciones`, `observaciones`, `vigencia`, `status`) VALUES
	(1, 'jose manuel', 'josees', 'el mismo', '4491291547', 'correo@correo.com', 'de todo', '5', 'da igual', 'de 20 a 90 años', 'no importa', 'hacer de todo', '8000 al mes', 'todos los dias de 8 a 16 hrs', 'las de ley y las de soriana', 'ninguna', '2021-04-13', _binary 0x31);
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla bolsa_trabajo.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `edad` varchar(50) NOT NULL DEFAULT '0',
  `domicilio` varchar(50) NOT NULL DEFAULT '0',
  `telefono` varchar(50) NOT NULL DEFAULT '0',
  `correo` varchar(50) NOT NULL DEFAULT '0',
  `escolaridad` varchar(50) NOT NULL DEFAULT '0',
  `habilidades` varchar(50) NOT NULL DEFAULT '0',
  `observaciones` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bolsa_trabajo.persona: ~0 rows (aproximadamente)
DELETE FROM `persona`;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
