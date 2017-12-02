-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2017 a las 14:44:09
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `CODCOM` int(20) NOT NULL,
  `FECHACOM` date NOT NULL,
  `HORA` int(10) NOT NULL,
  `RUT` char(9) NOT NULL,
  `CODSALA` varchar(6) NOT NULL,
  `COMENTARIO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`CODCOM`, `FECHACOM`, `HORA`, `RUT`, `CODSALA`, `COMENTARIO`) VALUES
(1, '2017-11-25', 2129, '17875041', 'B404', 'otro comentario de prueba \r\nsegundo texto para sala b404'),
(2017001, '2017-11-09', 1300, '17875045', 'A406', 'comentario para la sala A406 \r\ntest comentario \r\nadmin \r\n2256'),
(2017003, '2017-11-30', 1200, '17875046', 'B404', 'comentario para sala b404\r\nadmin 2256\r\n\r\ntest nro1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE `edificio` (
  `CODED` varchar(6) NOT NULL,
  `NOMBREED` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edificio`
--

INSERT INTO `edificio` (`CODED`, `NOMBREED`) VALUES
('001', 'Facultad de Ciencias e Ingenieria'),
('002', 'Facultad de Humanidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `implemento`
--

CREATE TABLE `implemento` (
  `CODIM` varchar(20) NOT NULL,
  `TIPOIMPLE` varchar(30) NOT NULL,
  `CANTIDAD` float(3,0) NOT NULL,
  `ESTADO` varchar(10) NOT NULL,
  `CODSALA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `implemento`
--

INSERT INTO `implemento` (`CODIM`, `TIPOIMPLE`, `CANTIDAD`, `ESTADO`, `CODSALA`) VALUES
('20101', 'pc', 1, 'malo', 'A406'),
('201701', 'pc', 1, 'malo', 'B404'),
('201702', 'borrador', 0, '', 'B404'),
('201722', 'proyector', 1, 'bueno', 'B404');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piso`
--

CREATE TABLE `piso` (
  `CODPISO` varchar(6) NOT NULL,
  `CODED` varchar(6) NOT NULL,
  `NOMBREP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `piso`
--

INSERT INTO `piso` (`CODPISO`, `CODED`, `NOMBREP`) VALUES
('0011', '001', '1'),
('0012', '002', '1'),
('0021', '001', '2'),
('0022', '002', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `CODSALA` varchar(6) NOT NULL,
  `QR` varchar(10) NOT NULL,
  `CODPISO` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`CODSALA`, `QR`, `CODPISO`) VALUES
('A406', '', '0012'),
('B401', '', '0011'),
('B404', '', '0011'),
('B405', '', '0011');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `CODSOL` int(20) NOT NULL,
  `DIA` varchar(20) NOT NULL,
  `RAMO` varchar(40) NOT NULL,
  `PERIODO` float(2,0) NOT NULL,
  `SEMESTRE` varchar(20) NOT NULL,
  `RUT` char(9) NOT NULL,
  `CODSALA` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`CODSOL`, `DIA`, `RAMO`, `PERIODO`, `SEMESTRE`, `RUT`, `CODSALA`) VALUES
(2017, '2', 'arduino 1', 2, '1', '18989161', 'A406'),
(12017, '3', 'RAMO 2010', 4, '1', '17875041', 'B404'),
(12018, '6', 'MATEMATICAS', 7, '1', '17875041', 'B404');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `RUT` char(8) NOT NULL,
  `DV` varchar(1) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `TELEFONO` int(10) NOT NULL,
  `TIPOUSUARIO` varchar(20) NOT NULL,
  `CODPISO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`RUT`, `DV`, `PASS`, `NOMBRE`, `CORREO`, `TELEFONO`, `TIPOUSUARIO`, `CODPISO`) VALUES
('17875041', '3', '1234', 'marcelo ibarra', 'marceloibarra@gmail.com', 9878787, 'profesor', '0011'),
('17875045', '3', '1234', 'alejandra collao', 'alejandracollao@upla.cl', 1001, 'secretaria', '0011'),
('17875046', '3', '1234', 'marta ', 'marta@upla.cl', 2002, 'secretaria', '0012'),
('18989161', '2', '1234', 'jaime morales', 'jaimemorales@upla.cl', 9001001, 'profesor', '0012');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`CODCOM`),
  ADD KEY `FK_COMENTARIO_USUARIO` (`RUT`),
  ADD KEY `FK_COMENTARIO_SALA` (`CODSALA`);

--
-- Indices de la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD PRIMARY KEY (`CODED`);

--
-- Indices de la tabla `implemento`
--
ALTER TABLE `implemento`
  ADD PRIMARY KEY (`CODIM`),
  ADD KEY `FK_IMPLEMENTO_SALA` (`CODSALA`);

--
-- Indices de la tabla `piso`
--
ALTER TABLE `piso`
  ADD PRIMARY KEY (`CODPISO`),
  ADD KEY `FK_EDIFICIO_PISO` (`CODED`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`CODSALA`),
  ADD KEY `FK_SALA_PISO` (`CODPISO`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`CODSOL`),
  ADD KEY `FK_SOLICITUD_USUARIO` (`RUT`),
  ADD KEY `FK_SOLICITUD_SALA` (`CODSALA`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`RUT`),
  ADD KEY `FK_USUARIO_PISO` (`CODPISO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `CODCOM` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017004;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `CODSOL` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12019;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_COMENTARIO_SALA` FOREIGN KEY (`CODSALA`) REFERENCES `sala` (`CODSALA`),
  ADD CONSTRAINT `FK_COMENTARIO_USUARIO` FOREIGN KEY (`RUT`) REFERENCES `usuario` (`RUT`);

--
-- Filtros para la tabla `implemento`
--
ALTER TABLE `implemento`
  ADD CONSTRAINT `FK_IMPLEMENTO_SALA` FOREIGN KEY (`CODSALA`) REFERENCES `sala` (`CODSALA`);

--
-- Filtros para la tabla `piso`
--
ALTER TABLE `piso`
  ADD CONSTRAINT `FK_EDIFICIO_PISO` FOREIGN KEY (`CODED`) REFERENCES `edificio` (`CODED`);

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `FK_SALA_PISO` FOREIGN KEY (`CODPISO`) REFERENCES `piso` (`CODPISO`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `FK_SOLICITUD_SALA` FOREIGN KEY (`CODSALA`) REFERENCES `sala` (`CODSALA`),
  ADD CONSTRAINT `FK_SOLICITUD_USUARIO` FOREIGN KEY (`RUT`) REFERENCES `usuario` (`RUT`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_USUARIO_PISO` FOREIGN KEY (`CODPISO`) REFERENCES `piso` (`CODPISO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
