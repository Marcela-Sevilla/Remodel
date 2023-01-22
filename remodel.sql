-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2022 a las 21:05:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `remodel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `numero_celular` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `departamento`, `ciudad`, `nombre`, `numero_celular`, `correo`) VALUES
(5, 'Atlantico', 'Barranquilla', 'Marcela Sevilla Lopez', '3002203858', 'marce@gmail.com'),
(6, 'Atlantico', 'Barranquilla', 'Jose Luis ', '30008777', 'joseL@gmail.com'),
(7, 'Codoba', 'Monteria', 'Laura Manotas Miranda', '304244655', 'laura@gmail.com'),
(8, 'Atlantico', 'Barranquilla', 'Marcela Sevilla Lopez', '3002203858', 'marce123@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `id_cotizacion` int(11) NOT NULL,
  `id_clienete` int(11) NOT NULL,
  `gabinetes` int(11) NOT NULL,
  `nevera` int(11) NOT NULL,
  `estufa` int(11) NOT NULL,
  `ventana` int(11) NOT NULL,
  `lavaplatos` int(11) NOT NULL,
  `mano_obra` int(50) NOT NULL,
  `costo_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`id_cotizacion`, `id_clienete`, `gabinetes`, `nevera`, `estufa`, `ventana`, `lavaplatos`, `mano_obra`, `costo_total`) VALUES
(4, 6, 13, 2, 7, 12, 17, 2500000, 9217690),
(5, 6, 13, 2, 7, 12, 17, 2500000, 9217690),
(6, 7, 13, 3, 7, 11, 19, 2500000, 7774590),
(7, 8, 14, 2, 8, 12, 19, 2500000, 8915500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos_cocina`
--

CREATE TABLE `elementos_cocina` (
  `id_elemento` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `elemento` enum('lavaplatos','ventana','nevera','gabinete','estufa') NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `precio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `elementos_cocina`
--

INSERT INTO `elementos_cocina` (`id_elemento`, `nombre`, `elemento`, `modelo`, `precio`) VALUES
(1, 'nevera1', 'nevera', 'Nevera No Frost Tipo Europeo 461 Lts GB45SPP Plata', 5099900),
(2, 'nevera2', 'nevera', 'Nevera Bottom Freezer 520 Lts Brutos Black Steel RMB520IWBQP0', 3799900),
(3, 'nevera3', 'nevera', 'Nevera No Frost 438 Lts Brutos Inoxidable RMP425FYCU', 2139900),
(4, 'nevera4', 'nevera', 'Nevera No Frost 404 Lts Himalaya Control Interno Titanio', 1893900),
(5, 'estufa1', 'estufa', 'Combo Estufa de Piso 60 cm 4 Puestos + Campana Extractora Horizontal 60 cm', 1663800),
(6, 'estufa2', 'estufa', 'Horno Casia 60 GN + Cubierta de Empotrar 66 cm Gas Natural + Campana Okra 60 V3 Inoxidable', 1384700),
(7, 'estufa3', 'estufa', 'Cosmo Umc30 Campana Extractora De Acero Inoxidable Para Deba', 2204990),
(8, 'estufa4', 'estufa', 'Combo Horno mixto + Estufa en Vidrio Templado + Campana Horizontal de 60 cm - UNI.FUNC.ECH1', 1625900),
(9, 'ventana1', 'ventana', 'Ventana 60x40cm PVC Altavista 4mm', 159900),
(10, 'ventana2', 'ventana', 'Ventana 60x40cm Aluminio Vidrio 4mm', 117900),
(11, 'ventana3', 'ventana', 'Ventana 1.0x1.0cm PVC Altavista 4mm', 309900),
(12, 'ventana4', 'ventana', 'Ventana 1.2x1.2cm Aluminio Pint Marron Vidrio 4mm', 249900),
(13, 'gabinete1', 'gabinete', 'Gabinete Cocina Alto: 60cm Ancho: 150 cm Fondo: 34,5 cm Blanco Wengue', 379900),
(14, 'gabinete2', 'gabinete', 'Mueble Superior 1.50 Metros Luna Wengue Miel', 499900),
(15, 'gabinete3', 'gabinete', 'Mueble Aéreo de Cocina 5 puertas 1,80 M Dark SA 31180', 469900),
(16, 'gabinete4', 'gabinete', 'Alacena 1 Puerta Rebatible Madesa - 60cm', 219900),
(17, 'lavaplatos1', 'lavaplatos', 'Lavaplatos para Empotrar 1 Poceta 50x35 cm Acero Inoxidable', 83000),
(18, 'lavaplatos2', 'lavaplatos', 'Lavaplatos Radiante Monocontrol Acero Inoxidable 62x48 cm', 129900),
(19, 'lavaplatos3', 'lavaplatos', 'Lavaplatos 0.38 metros x 0.17 metros redondo sencillo acero', 239900),
(20, 'lavaplatos4', 'lavaplatos', 'Lavaplatos para Empotrar 1 Poceta 45x49 cm Acero Inoxidable', 169900);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD KEY `id_clienete` (`id_clienete`),
  ADD KEY `gabinetes` (`gabinetes`),
  ADD KEY `nevera` (`nevera`),
  ADD KEY `estufa` (`estufa`),
  ADD KEY `ventana` (`ventana`),
  ADD KEY `labaplatos` (`lavaplatos`);

--
-- Indices de la tabla `elementos_cocina`
--
ALTER TABLE `elementos_cocina`
  ADD PRIMARY KEY (`id_elemento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `id_cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `elementos_cocina`
--
ALTER TABLE `elementos_cocina`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD CONSTRAINT `cotizaciones_ibfk_1` FOREIGN KEY (`id_clienete`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `cotizaciones_ibfk_2` FOREIGN KEY (`gabinetes`) REFERENCES `elementos_cocina` (`id_elemento`),
  ADD CONSTRAINT `cotizaciones_ibfk_3` FOREIGN KEY (`nevera`) REFERENCES `elementos_cocina` (`id_elemento`),
  ADD CONSTRAINT `cotizaciones_ibfk_4` FOREIGN KEY (`estufa`) REFERENCES `elementos_cocina` (`id_elemento`),
  ADD CONSTRAINT `cotizaciones_ibfk_5` FOREIGN KEY (`ventana`) REFERENCES `elementos_cocina` (`id_elemento`),
  ADD CONSTRAINT `cotizaciones_ibfk_6` FOREIGN KEY (`lavaplatos`) REFERENCES `elementos_cocina` (`id_elemento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
