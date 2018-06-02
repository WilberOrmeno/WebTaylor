-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2018 a las 17:18:26
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
-- Estructura de tabla para la tabla `actividadesextracurriculares`
--

CREATE TABLE `actividadesextracurriculares` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `musica` int(11) NOT NULL,
  `canto` int(11) NOT NULL,
  `teatro` int(11) NOT NULL,
  `deportes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `eCivil` varchar(20) NOT NULL,
  `DepartamentoNac` varchar(20) NOT NULL,
  `ProvinciaNac` varchar(20) NOT NULL,
  `DistritoNac` varchar(20) NOT NULL,
  `fecnac` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `DistritoDireccion` varchar(20) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `IESecundaria` varchar(50) NOT NULL,
  `otroCS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre`, `sexo`, `eCivil`, `DepartamentoNac`, `ProvinciaNac`, `DistritoNac`, `fecnac`, `edad`, `direccion`, `DistritoDireccion`, `telefono`, `celular`, `email`, `IESecundaria`, `otroCS`) VALUES
(1, 'Javier Ormeño Vera', 'Masculino', 'Soltero', 'Lima', 'Lima', 'Lima', '11/02/1996', 22, 'aaaaaaaaa', 'Lima', '987456321', '987456321', 'javier@gmail.com', 'Colegio aaa', 'bbbb'),
(2, 'Marcela Andrade Salinas', 'Femenino', 'Soltero', 'Lima', 'Lima', 'Lima', '11/02/1996', 22, 'aaaaaaaaa', 'Lima', '789456123', '987456321', 'marcela@gmail.com', 'Colegio aaa', 'bbbb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosacademicos`
--

CREATE TABLE `datosacademicos` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `ciclo` varchar(10) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `COB` varchar(10) NOT NULL,
  `otros` varchar(10) NOT NULL,
  `uCiclo` varchar(10) NOT NULL,
  `Semestre` varchar(10) NOT NULL,
  `anio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosacademicos`
--

INSERT INTO `datosacademicos` (`id`, `id_alumno`, `especialidad`, `ciclo`, `turno`, `ocupacion`, `dni`, `COB`, `otros`, `uCiclo`, `Semestre`, `anio`) VALUES
(1, 1, 'Computación', '2', 'Tarde', '----', '78945612', '---', '---', '1', 'II SEMESTR', '2018'),
(2, 2, 'Enfermería', '1', 'Tarde', '----', '89456123', '---', '---', '1', 'I SEMESTRE', '2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos`
--

CREATE TABLE `recibos` (
  `id_alumno` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `ape_paterno` varchar(20) NOT NULL,
  `ape_materno` varchar(20) NOT NULL,
  `nro_matricula` int(11) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `turno` varchar(30) NOT NULL,
  `semestre` varchar(30) NOT NULL,
  `recibo` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `concepto` varchar(30) NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recibos`
--

INSERT INTO `recibos` (`id_alumno`, `nombres`, `ape_paterno`, `ape_materno`, `nro_matricula`, `especialidad`, `turno`, `semestre`, `recibo`, `fecha`, `cantidad`, `concepto`, `observaciones`) VALUES
(1, 'Javier', 'Ormeño', 'Vera', 123, 'Computación', 'Mañana', 'I Semestre', '001', '31/03/18', '500', 'Pago1', 'Pago del primer mes'),
(2, 'Marcela', 'Andrade', 'Salinas', 124, 'Enfermería', 'Tarde', 'II Semestre', '123', '31/03/18', '600', 'Pago1', 'Pago del primer mes');

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
(1, 'Javier OrmeÃ±o Vera', '72416642', 'ComputaciÃ³n', '994318344', '994318344', 'Lima', '---', '----', 1),
(2, 'Marcela Andrade Salinas', '72416642', 'EnfemerÃ¡a	', '994318344', '994318344', 'Lima', '----', '----', 0),
(3, 'Elvis Velasque Espinoza', '98745632', 'ComputaciÃ³n', '987654312', '987654312', 'Lima', '----', '----', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividadesextracurriculares`
--
ALTER TABLE `actividadesextracurriculares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `datosacademicos`
--
ALTER TABLE `datosacademicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recibos`
--
ALTER TABLE `recibos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id_titulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividadesextracurriculares`
--
ALTER TABLE `actividadesextracurriculares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `datosacademicos`
--
ALTER TABLE `datosacademicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recibos`
--
ALTER TABLE `recibos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
