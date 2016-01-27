-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2016 a las 17:34:15
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd10`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `canton` varchar(50) NOT NULL,
  `parroquia` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`nombre`, `email`, `telefono`, `direccion`, `provincia`, `canton`, `parroquia`, `usuario`, `contrasenia`) VALUES
('ronny', 'ddd@ddd.com', '', '', '', '', '', '', ''),
('ronny', 'ddd@ddd.com', '', '', '', '', '', '', ''),
('fdg', 'ddd@ddd.com', '', '', '', '', '', '', ''),
('yuya', 'd@hjj.com', 'veloz', '', '', '', '', '', ''),
('rgr', 'ddd@ddd.com', 'ggg', '', '', '', '', '', ''),
('romy', 'ddd@ddd.com', '0989964471', 'Quito', '', '', '', '', ''),
('hkhkh', 'ddd@ddd.com', 'hbhj', 'gvgggg', '', '', '', '', ''),
('hhj', 'ddd@ddd.com', '0989964471', 'Quito', '', '', '', '', ''),
('ttg', 'ddd@ddd.com', '0989964471', 'Quito', '', '', '', 'tty', ''),
('dd', 'ddd@ddd.com', '0989964471', 'Quito', '', '', '', 'ronny', 'b59c67bf196a4758191e'),
('ddsds', 'ddd@ddd.com', '0989964471', 'DDD', '', '', '', 'eeee', 'b59c67bf196a4758191e'),
('aa', 'ddd@ddd.com', '0989964471', 'smejia', '', '', '', 'aaaaa', '2d19a418ff53519c2a97'),
('DAAA', 'ddsd@ee.com', '0989964471', 'Quito', '', '', '', 'QQQ', 'b0baee9d279d34fa1dfd'),
('ronny', 'veloz_ronny10@hotmail.com', '0989964471', 'Quito', '', '', '', 'ronny', 'b59c67bf196a4758191e'),
('alex', 'arman@hotmail.com', '0989964471', 'Quito', '', '', '', 'david', 'b59c67bf196a4758191e'),
('sss', 'ddd@ddd.com', '0989964471', 'Quito', '', '', '', 'www', '934b535800b1cba8f96a'),
('erick', 'ddd@ddd.com', '0989964471', 'gghhg', '', '', '', 'gggg', '2be9bd7a3434f7038ca2'),
('uyyuguy', 'ddd@ddd.com', '0989964471', 'bvhvhjv', '', '', '', 'hvhv', 'b0baee9d279d34fa1dfd'),
('cxcz', 'ddd@ddd.com', '0989964471', 'xdd', '', '', '', 'dd', '3bad6af0fa4b8b330d16'),
('sdds', 'ddd@ddd.comcvvv', '0999999999', 'asas', '', '', '', 'dsdsd', 'b59c67bf196a4758191e'),
('gfhgfh', 'ddd@ddd.com', '0989964471', 'fddf', '', '', '', 'ffff', '934b535800b1cba8f96a'),
('fdfd', 'ddd@ddd.com', '0989964471', 'ssdds', '', '', '', 'dd', '2be9bd7a3434f7038ca2'),
('gfdfgdfd', 'ddd@ddd.comcvvv', '09876543256', 'dddddd', '', '', '', 'wwww', '2be9bd7a3434f7038ca2'),
('ttt', 'f@hotmail.com', '0989964471', 'Quito', '', '', '', 'tttttt', '0775d0bfbec108de4a82'),
('ddd', 'ddd@ddd.com', '0989964471', 'ddd', 'Carcel&eacute;n', 'dddd', '980ac217c6b51e7dc41040bec1edfec8', 'Quito', 'Cayambe'),
('www', 'ddd@ddd.comcvvv', '0989964471', 'wwww', 'Quito', 'Mejia', 'Carcel&eacute;n', 'wwww', 'df483402b9bfeb234717'),
('tygg', 'veloz_ronny10@hotmail.com', '0989964471', 'jjjj', 'Quito', 'Cayambe', ' Chilibulo', 'jjjjj', '6b76b5b54567ec000828');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
