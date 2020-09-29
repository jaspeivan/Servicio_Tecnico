-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-09-2020 a las 13:04:24
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicio_tecnico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadora`
--

DROP TABLE IF EXISTS `computadora`;
CREATE TABLE IF NOT EXISTS `computadora` (
  `id_registropc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_dep` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_tipof` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `tecnico` varchar(45) NOT NULL,
  `Codigo` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Fecha` date NOT NULL,
  `FechaSalida` date NOT NULL,
  PRIMARY KEY (`id_registropc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `computadora`
--

INSERT INTO `computadora` (`id_registropc`, `id_dep`, `id`, `id_tipof`, `id_estatus`, `id_empleado`, `tecnico`, `Codigo`, `Descripcion`, `Fecha`, `FechaSalida`) VALUES
(1, 1, 1, 1, 3, 1, '1', '1', 'dwdw', '2020-09-27', '2020-09-30'),
(2, 1, 1, 1, 1, 1, '1', '2', 'No prende por que le falla la fuente de poder', '2020-09-27', '2020-09-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_dep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Departamento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dep`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_dep`, `Departamento`) VALUES
(1, 'Administracion'),
(2, 'Contaduria'),
(3, 'Contabilidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `id_empleado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Cedula` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Genero` varchar(45) NOT NULL,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `Nombre`, `Apellido`, `Cedula`, `Correo`, `Direccion`, `Telefono`, `Genero`) VALUES
(1, 'Pedro', 'Garcia', '123245', 'Pedro@gmail.com', 'Miami', 4331351, 'Masculino'),
(2, 'Carlos', 'Nieto', '4524824', 'nieto@gmai.com', 'los teques', 123456, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `Estado`) VALUES
(1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

DROP TABLE IF EXISTS `estatus`;
CREATE TABLE IF NOT EXISTS `estatus` (
  `id_estatus` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Estatus` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `Estatus`) VALUES
(1, 'En Espera'),
(2, 'Reparando'),
(3, 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_tipousuario` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `NombreyApellido` varchar(45) NOT NULL,
  `Cedula` int(18) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `id_tipousuario`, `id_estado`, `Usuario`, `NombreyApellido`, `Cedula`, `correo`, `password`) VALUES
(1, 1, 1, 'Admin', 'Admin', 123, 'Admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipofalla`
--

DROP TABLE IF EXISTS `tipofalla`;
CREATE TABLE IF NOT EXISTS `tipofalla` (
  `id_tipof` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipodefalla` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipof`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipofalla`
--

INSERT INTO `tipofalla` (`id_tipof`, `tipodefalla`) VALUES
(1, 'No  Prende'),
(2, 'Pantalla Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipousuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipodeusuario` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipousuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipousuario`, `tipodeusuario`) VALUES
(1, 'Administrador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
