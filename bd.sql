-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.37-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para jlsistem_asistencia
CREATE DATABASE IF NOT EXISTS `jlsistem_asistencia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jlsistem_asistencia`;

-- Volcando estructura para tabla jlsistem_asistencia.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `idAlumno` int(11) NOT NULL AUTO_INCREMENT,
  `Matricula` text,
  `Nombre` text,
  PRIMARY KEY (`idAlumno`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jlsistem_asistencia.alumnos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` (`idAlumno`, `Matricula`, `Nombre`) VALUES
	(1, 'MD9892632', 'ABREGO RODRIGUEZ SALMA REBECA'),
	(2, 'AP9693680', 'ABREGO RODRIGUEZ SAUL NICOLAS'),
	(3, 'AD9942333', 'ALARCON DE LA CRUZ DANIELA'),
	(4, 'AJ9921033', 'ALVARADO FAVIEL JESSICA DE LOS ANGELES'),
	(5, 'AL9939132', 'AVILA MAYO LAURA'),
	(6, 'BN9979503', 'BURGOS DEL ANGEL NANCY IRASEMA'),
	(7, 'FX9983970', 'FERNANDEZ GONZALEZ XIMENA'),
	(8, 'GE9942845', 'GUATZOZON ARANO EMMANUEL EDUARDO'),
	(9, 'JJ9924815', 'JAYMEZ RAMOS JOSE RICARDO'),
	(10, 'MP9982645', 'MOLINA GARCIA PAOLA'),
	(11, 'GP9992135', 'GARCIA OLVERA PEDRO ALEJANDRO');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;

-- Volcando estructura para tabla jlsistem_asistencia.asistencia
CREATE TABLE IF NOT EXISTS `asistencia` (
  `idAsistencia` int(11) NOT NULL AUTO_INCREMENT,
  `Matricula` text,
  `Asistencia` text,
  `FechaRegistro` date DEFAULT NULL,
  PRIMARY KEY (`idAsistencia`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jlsistem_asistencia.asistencia: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `asistencia` DISABLE KEYS */;
INSERT INTO `asistencia` (`idAsistencia`, `Matricula`, `Asistencia`, `FechaRegistro`) VALUES
	(1, 'MD9892632', 'A', '2019-08-04'),
	(2, 'AP9693680', 'A', '2019-08-04'),
	(3, 'AD9942333', 'A', '2019-08-04'),
	(4, 'AJ9921033', 'A', '2019-08-04'),
	(5, 'AL9939132', 'A', '2019-08-04'),
	(6, 'BN9979503', 'A', '2019-08-04'),
	(7, 'FX9983970', 'A', '2019-08-04'),
	(8, 'GE9942845', 'A', '2019-08-04'),
	(9, 'JJ9924815', 'A', '2019-08-04'),
	(10, 'MP9982645', 'A', '2019-08-04'),
	(11, 'GP9992135', 'A', '2019-08-04'),
	(12, 'GP9992135', 'A', '2019-08-05'),
	(13, 'MP9982645', 'A', '2019-08-05');
/*!40000 ALTER TABLE `asistencia` ENABLE KEYS */;

-- Volcando estructura para tabla jlsistem_asistencia.modulo
CREATE TABLE IF NOT EXISTS `modulo` (
  `idModulo` int(11) NOT NULL AUTO_INCREMENT,
  `NombreLargo` text,
  `NombreCorto` text,
  PRIMARY KEY (`idModulo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jlsistem_asistencia.modulo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` (`idModulo`, `NombreLargo`, `NombreCorto`) VALUES
	(1, 'Nucleo Basico', 'NB'),
	(2, 'Flash', 'AA');
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
