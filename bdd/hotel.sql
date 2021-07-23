-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-07-2021 a las 00:44:16
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `cod_art` char(8) NOT NULL,
  `nom_art` char(30) NOT NULL,
  `pre_art` int DEFAULT NULL,
  `sta_art` char(1) NOT NULL,
  PRIMARY KEY (`cod_art`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`cod_art`, `nom_art`, `pre_art`, `sta_art`) VALUES
('m56', 'tv', NULL, 'A'),
('m57', 'cama', 100, 'A'),
('m58', 'mesita', 20, 'A'),
('m59', 'litera', 200, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

DROP TABLE IF EXISTS `carro`;
CREATE TABLE IF NOT EXISTS `carro` (
  `pla_car` char(10) NOT NULL,
  `fky_cli` char(8) NOT NULL,
  `mar_car` char(40) NOT NULL,
  `mol_car` char(30) DEFAULT NULL,
  `ano_car` date DEFAULT NULL,
  PRIMARY KEY (`pla_car`),
  KEY `fky_cli` (`fky_cli`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chucuta`
--

DROP TABLE IF EXISTS `chucuta`;
CREATE TABLE IF NOT EXISTS `chucuta` (
  `ocupacion` int NOT NULL,
  `total` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chucuta`
--

INSERT INTO `chucuta` (`ocupacion`, `total`) VALUES
(23, 1000),
(29, 1010),
(30, 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `fky_per` char(8) NOT NULL,
  `fky_tcli` char(8) NOT NULL,
  `ciu_cli` char(80) NOT NULL,
  `pro_cli` char(80) NOT NULL,
  `aco_cli` char(80) DEFAULT NULL,
  `sta_cli` char(1) NOT NULL,
  PRIMARY KEY (`fky_per`),
  KEY `fky_tcli` (`fky_tcli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`fky_per`, `fky_tcli`, `ciu_cli`, `pro_cli`, `aco_cli`, `sta_cli`) VALUES
('124578', 'tcl01', 'venezuela', 'militar', 'uyyfuyfyufyufuyfuyfuyfyufyufyufyufuyfuyfuyfuyfuyfufufufufu', 'A'),
('14627276', 'tcl02', 'Venezuela', 'jugador', 'no', 'A'),
('25218561', 'tcl01', 'DSHDHSGF', 'HHHKFHFHDS', NULL, 'A'),
('27459243', 'tcl01', 'san cristobal', 'profesora', '', 'A'),
('45151514', 'tcl01', 'san cristobal', 'ingeniero', 'no', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_est`
--

DROP TABLE IF EXISTS `detalle_est`;
CREATE TABLE IF NOT EXISTS `detalle_est` (
  `id` int NOT NULL,
  `fky_ser` char(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fky_ser` (`fky_ser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_habi`
--

DROP TABLE IF EXISTS `detalle_habi`;
CREATE TABLE IF NOT EXISTS `detalle_habi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fky_hab` int NOT NULL,
  `fky_art` char(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fky_hab` (`fky_hab`),
  KEY `fky_art` (`fky_art`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_habi`
--

INSERT INTO `detalle_habi` (`id`, `fky_hab`, `fky_art`) VALUES
(1, 0, 'm56'),
(6, 2, 'm58'),
(7, 2, 'm59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ocup`
--

DROP TABLE IF EXISTS `detalle_ocup`;
CREATE TABLE IF NOT EXISTS `detalle_ocup` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `fky_ser` char(8) NOT NULL,
  PRIMARY KEY (`cod`),
  KEY `fky_ser` (`fky_ser`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_ocup`
--

INSERT INTO `detalle_ocup` (`cod`, `id`, `fky_ser`) VALUES
(7, 23, '01'),
(8, 23, 'mc'),
(9, 23, 'mc'),
(10, 23, '5'),
(11, 23, '5'),
(12, 23, '5'),
(13, 23, '01'),
(14, 23, '01'),
(15, 23, '5'),
(16, 23, '01'),
(17, 23, '01'),
(18, 23, '5'),
(19, 23, '5'),
(20, 23, '5'),
(21, 23, '5'),
(22, 23, '5'),
(23, 23, '5'),
(24, 23, 'mc'),
(25, 24, '01'),
(26, 24, '5'),
(27, 25, '01'),
(28, 25, '5'),
(29, 26, '01'),
(30, 26, '5'),
(31, 27, '01'),
(32, 27, '5'),
(33, 28, '5'),
(34, 28, '01'),
(35, 29, '5'),
(36, 30, '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estancia`
--

DROP TABLE IF EXISTS `estancia`;
CREATE TABLE IF NOT EXISTS `estancia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fky_hab` int DEFAULT NULL,
  `fky_cli` char(8) NOT NULL,
  `fec_ini` date DEFAULT NULL,
  `fec_fin` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fky_hab` (`fky_hab`),
  KEY `fky_cli` (`fky_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estancia`
--

INSERT INTO `estancia` (`id`, `fky_hab`, `fky_cli`, `fec_ini`, `fec_fin`) VALUES
(1, 1, '25218561', '2021-07-11', '2021-07-30'),
(2, 0, '25218561', '2021-07-01', '2021-07-07'),
(3, 1, '25218561', '2021-07-19', '2021-07-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

DROP TABLE IF EXISTS `habitacion`;
CREATE TABLE IF NOT EXISTS `habitacion` (
  `id` int NOT NULL,
  `fky_tih` char(8) NOT NULL,
  `pre_hab` int NOT NULL,
  `des_hab` char(50) NOT NULL,
  `sta_hab` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fky_tih` (`fky_tih`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id`, `fky_tih`, `pre_hab`, `des_hab`, `sta_hab`) VALUES
(0, 'h01', 1000, '', 'A'),
(1, 'h01', 1000, '', 'R'),
(2, 'h01', 1000, '', 'I'),
(5, 'h01', 1000, '', 'A'),
(6, 'h01', 30, 'bonita', 'A'),
(7, 'h01', 50, 'normal', 'M'),
(8, 'h01', 100, '', 'A'),
(10, 'h01', 1000, '', 'A'),
(11, 'h01', 1000, 'bien', 'A'),
(12, 'h01', 2000, 'mal', 'A'),
(13, 'h01', 2000, 'chibo', 'A'),
(14, 'h01', 1000, 'mmal', 'A'),
(15, 'h01', 2500, 'bien', 'A'),
(16, 'h01', 1200, 'bien', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupada`
--

DROP TABLE IF EXISTS `ocupada`;
CREATE TABLE IF NOT EXISTS `ocupada` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fky_cli` char(8) NOT NULL,
  `fky_hab` int NOT NULL,
  `sta_ocu` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fky_hab` (`fky_hab`),
  KEY `fky_cli` (`fky_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ocupada`
--

INSERT INTO `ocupada` (`id`, `fky_cli`, `fky_hab`, `sta_ocu`) VALUES
(15, '25218561', 0, 'D'),
(20, '25218561', 6, 'D'),
(21, '25218561', 0, 'D'),
(22, '25218561', 0, 'D'),
(23, '25218561', 0, 'D'),
(24, '25218561', 0, 'D'),
(25, '25218561', 6, 'D'),
(26, '25218561', 0, 'D'),
(27, '25218561', 6, 'D'),
(28, '25218561', 5, 'D'),
(29, '25218561', 5, 'D'),
(30, '27459243', 6, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `ced_per` char(8) NOT NULL,
  `nom1_per` char(30) NOT NULL,
  `nom2_per` char(30) DEFAULT NULL,
  `ape1_per` char(30) NOT NULL,
  `ape2_per` char(30) DEFAULT NULL,
  `tel1_per` char(11) NOT NULL,
  `tel2_per` char(11) DEFAULT NULL,
  `cor_per` char(50) NOT NULL,
  `sta_per` char(1) NOT NULL,
  PRIMARY KEY (`ced_per`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ced_per`, `nom1_per`, `nom2_per`, `ape1_per`, `ape2_per`, `tel1_per`, `tel2_per`, `cor_per`, `sta_per`) VALUES
('', '', '', '', '', '', '', '', 'A'),
('124578', 'julian', 'alberto', 'Mariño', 'josefina', '27422472427', '44747476474', 'julian@gmail.com', 'A'),
('14627276', 'Neidy', 'Maria', 'Contreras', 'Villasmil', '51615761517', '65765765765', 'neidy@gmail.com', 'A'),
('25218561', 'jefferson', 'daniel', 'martine', 'ortiz', '7672372', NULL, 'jeffersonmartinez.3061@gmail.com', 'A'),
('26404237', 'henry', 'alberto', 'romero', 'maldonado', '04126837777', NULL, 'maldonadohenry57@gmail.com', 'A'),
('26543901', 'Glizabeth', 'Yanulsy', 'Padron', 'bez', '72572527257', '75735373573', 'gliza@gmal.com', 'A'),
('27459243', 'yeison', 'alejandro', 'suarez', 'salcedo', '12121212', '', 'armando@gmail.com', 'A'),
('45151514', 'Maria', 'Laura', 'nava', 'rivera', '72672722726', '78768768768', 'mari@gmail.com', 'A'),
('9145710', 'maria', 'laura', 'alvaray', 'rovallo', '12121212', '', 'armando@gmail.com', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
  `id` char(8) NOT NULL,
  `nom_se` char(30) NOT NULL,
  `fky_tse` char(8) NOT NULL,
  `pre_ser` int NOT NULL,
  `can_ser` int NOT NULL,
  `sta_ser` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fky_tse` (`fky_tse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nom_se`, `fky_tse`, `pre_ser`, `can_ser`, `sta_ser`) VALUES
('01', 'coctel margarita', '01', 3, -6, 'A'),
('5', 'papita', '02', 10, -5, 'A'),
('mc', 'mesa', '03', 121, 9, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

DROP TABLE IF EXISTS `tipo_cliente`;
CREATE TABLE IF NOT EXISTS `tipo_cliente` (
  `id_tcli` char(8) NOT NULL,
  `nom_tcli` char(30) NOT NULL,
  `des_tcli` char(60) DEFAULT NULL,
  PRIMARY KEY (`id_tcli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id_tcli`, `nom_tcli`, `des_tcli`) VALUES
('tcl01', 'militar', NULL),
('tcl02', 'Civil', 'ciente ivil'),
('tcl03', 'Retirado', 'Militar Retirado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_hab`
--

DROP TABLE IF EXISTS `tipo_hab`;
CREATE TABLE IF NOT EXISTS `tipo_hab` (
  `cod_tih` char(8) NOT NULL,
  `nom_tih` char(20) NOT NULL,
  `des_tih` char(60) NOT NULL,
  `sta_tih` char(1) NOT NULL,
  PRIMARY KEY (`cod_tih`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_hab`
--

INSERT INTO `tipo_hab` (`cod_tih`, `nom_tih`, `des_tih`, `sta_tih`) VALUES
('h01', 'matrimonial', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

DROP TABLE IF EXISTS `tipo_servicio`;
CREATE TABLE IF NOT EXISTS `tipo_servicio` (
  `id` char(8) NOT NULL,
  `nom_tse` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id`, `nom_tse`) VALUES
('01', 'Bebida'),
('02', 'Botanas'),
('03', 'Comida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `cod_tiu` char(8) NOT NULL,
  `nom_tiu` char(30) NOT NULL,
  `des_tiu` char(50) DEFAULT NULL,
  `sta_tiu` char(1) NOT NULL,
  PRIMARY KEY (`cod_tiu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`cod_tiu`, `nom_tiu`, `des_tiu`, `sta_tiu`) VALUES
('u01', 'administrador', NULL, 'A'),
('u02', 'recepcionista', NULL, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nom_usu` char(30) NOT NULL,
  `pass_usu` char(30) NOT NULL,
  `fky_per` char(8) NOT NULL,
  `fky_tiu` char(8) NOT NULL,
  `sta_usu` char(1) NOT NULL,
  PRIMARY KEY (`fky_per`),
  KEY `fky_tiu` (`fky_tiu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nom_usu`, `pass_usu`, `fky_per`, `fky_tiu`, `sta_usu`) VALUES
('henry57', '5711', '26404237', 'u01', 'A'),
('gliza55', '12345', '26543901', 'u02', 'A'),
('hola', '123', '9145710', 'u02', 'A');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`fky_per`) REFERENCES `personas` (`ced_per`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`fky_tcli`) REFERENCES `tipo_cliente` (`id_tcli`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `detalle_est`
--
ALTER TABLE `detalle_est`
  ADD CONSTRAINT `detalle_est_ibfk_1` FOREIGN KEY (`id`) REFERENCES `estancia` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `detalle_est_ibfk_2` FOREIGN KEY (`fky_ser`) REFERENCES `servicio` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `detalle_habi`
--
ALTER TABLE `detalle_habi`
  ADD CONSTRAINT `detalle_habi_ibfk_1` FOREIGN KEY (`fky_hab`) REFERENCES `habitacion` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `detalle_habi_ibfk_2` FOREIGN KEY (`fky_art`) REFERENCES `articulos` (`cod_art`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `detalle_ocup`
--
ALTER TABLE `detalle_ocup`
  ADD CONSTRAINT `detalle_ocup_ibfk_1` FOREIGN KEY (`fky_ser`) REFERENCES `servicio` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `detalle_ocup_ibfk_2` FOREIGN KEY (`id`) REFERENCES `ocupada` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `estancia`
--
ALTER TABLE `estancia`
  ADD CONSTRAINT `estancia_ibfk_1` FOREIGN KEY (`fky_hab`) REFERENCES `habitacion` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `estancia_ibfk_2` FOREIGN KEY (`fky_cli`) REFERENCES `cliente` (`fky_per`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`fky_tih`) REFERENCES `tipo_hab` (`cod_tih`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `ocupada`
--
ALTER TABLE `ocupada`
  ADD CONSTRAINT `ocupada_ibfk_1` FOREIGN KEY (`fky_hab`) REFERENCES `habitacion` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ocupada_ibfk_2` FOREIGN KEY (`fky_cli`) REFERENCES `cliente` (`fky_per`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`fky_tse`) REFERENCES `tipo_servicio` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fky_per`) REFERENCES `personas` (`ced_per`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`fky_tiu`) REFERENCES `tipo_usuario` (`cod_tiu`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
