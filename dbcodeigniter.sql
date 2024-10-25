-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-07-2024 a las 20:18:24
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbcodeigniter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `IDNombre` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `DNI` varchar(20) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Celular` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`IDNombre`, `Nombre`, `Direccion`, `DNI`, `Mail`, `Celular`) VALUES
(1, 'Alan Rodriguez', 'B° Los Horneros mza/A c/10', '36.123.489', 'alan_r@gmail.com', '154674235'),
(2, 'Ariana Diaz', 'B° Justo Castro I Mza/B c/7', '38.672.351', 'ariana_12@gmail.com', '156324963'),
(3, 'Leandro Echevarría', 'B° Felipe Cobas', '38.026.357', 'leandro@gmail.com', '154632147'),
(4, 'Omar Peralta', 'B° 25 de Mayo M/e C/', '29.694.457', 'omar@gmail.com', '155674268'),
(5, 'Ramiro Garibay', 'B° Los Molinos Mza/C C/9', '38.561.324', 'rginformatica@gmail.', '155975684'),
(6, 'Rodrigo García', 'B° Huarpe mza/3 C/2 ', '35.951.456', 'rodrigog@gmail.com', '154957486');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_sistema`
--

DROP TABLE IF EXISTS `menu_sistema`;
CREATE TABLE IF NOT EXISTS `menu_sistema` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRIPCION` varchar(50) NOT NULL,
  `IMAGEN` varchar(50) NOT NULL DEFAULT 'imagenes/not_found.png',
  `URL` varchar(50) DEFAULT NULL,
  `ORDENAMIENTO` int(11) NOT NULL DEFAULT 0,
  `ESTATUS` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu_sistema`
--

INSERT INTO `menu_sistema` (`ID`, `DESCRIPCION`, `IMAGEN`, `URL`, `ORDENAMIENTO`, `ESTATUS`) VALUES
(1, 'Inicio', 'imagenes/Customer.png', '#', 1, 0),
(2, 'Agregar Usuarios', 'imagenes/Proveedores.png', '/usuarios/nuevo', 3, 0),
(3, 'Listar Usuarios', 'imagenes/Product.png', '/usuarios', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisosmenu`
--

DROP TABLE IF EXISTS `permisosmenu`;
CREATE TABLE IF NOT EXISTS `permisosmenu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_MENU` int(11) NOT NULL,
  `ESTATUS` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisosmenu`
--

INSERT INTO `permisosmenu` (`ID`, `ID_USUARIO`, `ID_MENU`, `ESTATUS`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 1, 3, 0),
(5, 2, 1, 0),
(6, 2, 3, 0),
(7, 2, 2, 1),
(8, 3, 1, 0),
(9, 3, 3, 0),
(10, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDOS` varchar(100) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `FECHA_REGISTRO` varchar(20) NOT NULL,
  `ESTATUS` int(11) NOT NULL DEFAULT 0,
  `TIPO` varchar(20) NOT NULL DEFAULT 'Invitado',
  `PASSWORD` varchar(50) DEFAULT '123',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDOS`, `EMAIL`, `FECHA_REGISTRO`, `ESTATUS`, `TIPO`, `PASSWORD`) VALUES
(1, 'Desarrollos', 'en PHP', 'p3@desarrollosphp.com', '2014-07-30 14:39:06', 0, 'Administrador', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Alumno', '2do año', 'alumno@hotmail.com', '2014-07-30 14:39:06', 0, 'Invitado', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Alan', 'Rodriguez', 'rodriguezalanm731@gmail.com', '2024-07-01 17:04:36', 0, 'Administrador', '3e6e15b77aa839dd976230111e38dac1'),
(5, 'emilio', 'sabaeda', 'sabaeda124@gmail.com', '2024-07-02 15:17:07', 1, 'Invitado', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
