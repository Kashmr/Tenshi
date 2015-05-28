-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2015 a las 20:02:06
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `membase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time(2) NOT NULL,
  `hospital` varchar(35) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `requirements` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `date`, `time`, `hospital`, `doctor`, `specialization`, `requirements`) VALUES
(1, '', '2015-05-28', '09:00:00.00', '', 'Pedro', 'Dermatologo', 'Nada'),
(2, 'Javi', '2015-05-16', '12:30:00.00', 'Evita', 'Nick', 'Urologo', 'nada'),
(3, 'Herna', NULL, '00:32:00.00', 'asd', 'afsas', 'fasdasd', 'fasda'),
(4, 'Herna', NULL, '00:32:00.00', 'asd', 'afsas', 'fasdasd', 'fasda'),
(5, 'Herna', NULL, '00:32:00.00', 'asd', 'afsas', 'fasdasd', 'fasda'),
(6, 'Hernanana', '2015-05-31', '00:32:00.00', 'asd', 'afsas', 'fasdasd', 'fasda'),
(7, 'Jonathan Joestar', '2015-08-13', '14:02:00.00', 'Dasger', 'Genagau', 'Asder', 'none'),
(8, 'Jonathan Joestar', '2015-08-13', '14:30:00.00', 'Dasger', 'Genagau', 'Asder', 'none');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
