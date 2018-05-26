-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2018 a las 17:25:32
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webtaylordb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id_titulo` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `sede` varchar(30) NOT NULL,
  `inicio/termino` varchar(20) NOT NULL,
  `observaciones` text NOT NULL,
  `seguimiento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id_titulo`, `nombres`, `dni`, `carrera`, `telefono`, `celular`, `sede`, `inicio/termino`, `observaciones`, `seguimiento`) VALUES
(1, 'Wilber Javier OrmeÃ±o Vera', '72416642', 'IngenierÃ­a de sistemas', '994318344', '994318344', 'Lima', 'hoy/maÃ±ana', 'Pro', 1),
(2, 'Wilber Javier OrmeÃ±o Vera', '72416642', 'IngenierÃ­a de sistemas	', '994318344', '994318344', 'aaa', 'aaa', 'aaaa', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id_titulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
