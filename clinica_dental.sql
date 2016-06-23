-- phpMyAdmin SQL Dump
-- version 4.4.0
-- http://www.phpmyadmin.net
--
-- Servidor: MYSQL5012.Smarterasp.net
-- Tiempo de generación: 30-10-2015 a las 16:35:27
-- Versión del servidor: 5.6.26-log
-- Versión de PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_9db60a_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diente`
--

CREATE TABLE IF NOT EXISTS `diente` (
  `coddiente` int(11) NOT NULL,
  `numero_diente` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diente`
--

INSERT INTO `diente` (`coddiente`, `numero_diente`, `descripcion`) VALUES
(1, 11, 'Incisivo central superior derecha'),
(2, 12, 'Incisivo lateral superior derecha'),
(3, 13, 'Canino superior derecha'),
(4, 14, 'Primer premolar superior derecha'),
(5, 15, 'Segunda premolar superior derecha'),
(6, 16, 'Primer molar superior derecha'),
(7, 17, 'Segundo molar superior derecha'),
(8, 18, 'Tercer molar superior derecha'),
(9, 21, 'Incisivo central superior izquierda'),
(10, 22, 'Incisivo lateral superior izquierda'),
(11, 23, 'Canino superior izquierda'),
(12, 24, 'Primer premolar superior izquierda'),
(13, 25, 'Segunda premolar superior izquierda'),
(14, 26, 'Primer molar superior izquierda'),
(15, 27, 'Segundo molar superior izquierda'),
(16, 28, 'Tercer molar superior izquierda'),
(17, 31, 'Incisivo central inferior izquierda'),
(18, 32, 'Incisivo lateral inferior izquierda'),
(19, 33, 'Canino inferior izquierda'),
(20, 34, 'Primer premolar inferior izquierda'),
(21, 35, 'Segunda premolar inferior izquierda'),
(22, 36, 'Primer molar inferior izquierda'),
(23, 37, 'Segunda molar inferior izquierda'),
(24, 38, 'Tercer molar inferior izquierda'),
(25, 41, 'Incisivo central inferior derecha'),
(26, 42, 'Incisivo lateral inferior derecha'),
(27, 43, 'Canino inferior derecha'),
(28, 44, 'Primer premolar inferior derecha'),
(29, 45, 'Segunda premolar inferior derecha'),
(30, 46, 'Primer molar inferior derecha'),
(31, 47, 'Segundo molar inferior derecha'),
(32, 48, 'Tercer molar inferior derecha'),
(33, 51, 'Incisivo central superior derecha'),
(34, 52, 'Incisivo lateral superior derecha'),
(35, 53, 'Canino superior derecha'),
(36, 54, 'Primer premolar superior derecha'),
(37, 55, 'Segunda premolar superior derecha'),
(38, 61, 'Incisivo central superior izquierda'),
(39, 62, 'Incisivo lateral superior izquierda'),
(40, 63, 'Canino superior izquierda'),
(41, 64, 'Primer premolar superior izquierda'),
(42, 65, 'Segunda premolar superior izquierda'),
(43, 71, 'Incisivo central inferior izquierda'),
(44, 72, 'Incisivo lateral inferior izquierda'),
(45, 73, 'Canino inferior izquierda'),
(46, 74, 'Primer premolar inferior izquierda'),
(47, 75, 'Segunda premolar inferior izquierda'),
(48, 81, 'Incisivo central inferior derecha'),
(49, 82, 'Incisivo lateral inferior derecha'),
(50, 83, 'Canino inferior derecha'),
(51, 84, 'Primer premolar inferior derecha'),
(52, 85, 'Segunda premolar inferior derecha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE IF NOT EXISTS `distrito` (
  `coddistrito` int(11) NOT NULL,
  `nombre_distrito` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`coddistrito`, `nombre_distrito`) VALUES
(1, 'Cercado de Lima'),
(2, 'Breña'),
(3, 'Jesus Maria'),
(4, 'La Molina'),
(5, 'Magdalena del Mar'),
(6, 'Ate'),
(7, 'Barranco'),
(8, 'Comas'),
(9, 'Chorrillos'),
(10, 'El Agustino'),
(11, 'La Victoria'),
(12, 'Lince'),
(13, 'Miraflores'),
(14, 'Pueblo Libre'),
(15, 'Puente Piedra'),
(16, 'Rimac'),
(17, 'San Isidro'),
(18, 'Independencia'),
(19, 'San Juan de Miraflores'),
(20, 'San Luis'),
(21, 'San Martin de Porres'),
(22, 'San Miguel'),
(23, 'Santiago de Surco'),
(24, 'Surquillo'),
(25, 'Villa María del Triunfo'),
(26, 'San Juan de Lurigancho'),
(27, 'Santa Rosa'),
(28, 'Los Olivos'),
(29, 'San Borja'),
(30, 'Villa El Savador'),
(31, 'Santa Anita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_diente`
--

CREATE TABLE IF NOT EXISTS `estado_diente` (
  `codestado` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_diente`
--

INSERT INTO `estado_diente` (`codestado`, `descripcion`) VALUES
(1, 'Amalgama'),
(2, 'Ausencia'),
(3, 'Caries'),
(4, 'Diente Sano'),
(5, 'Endodoncia'),
(6, 'Implante'),
(7, 'Resina'),
(8, 'Sellante'),
(9, 'Corona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontograma_cabecera`
--

CREATE TABLE IF NOT EXISTS `odontograma_cabecera` (
  `cododontograma` int(11) NOT NULL,
  `tipopac` varchar(30) NOT NULL,
  `observacion` varchar(250) NOT NULL,
  `fecha_registro` date NOT NULL,
  `codpersonal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontograma_detalle`
--

CREATE TABLE IF NOT EXISTS `odontograma_detalle` (
  `cododonc` int(11) NOT NULL,
  `codestado` int(11) NOT NULL,
  `coddiente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `cod_persona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(60) NOT NULL,
  `apellido_materno` varchar(60) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(2) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fecha_regsitro` date NOT NULL,
  `cod_tipo_persona` int(11) NOT NULL,
  `coddistrito` int(11) NOT NULL,
  `foto` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cod_persona`, `nombre`, `apellido_paterno`, `apellido_materno`, `dni`, `fecha_nacimiento`, `genero`, `direccion`, `telefono`, `email`, `fecha_regsitro`, `cod_tipo_persona`, `coddistrito`, `foto`) VALUES
(1, 'luis', 'pariona', 'osorio', '72403225', '1994-02-19', 'M', 'las flores', '4583013', 'luis_ls11@hotmail.com', '2015-10-23', 2, 11, 'luis.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE IF NOT EXISTS `tipo_persona` (
  `cod_tipo_persona` int(11) NOT NULL,
  `descripcion_persona` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`cod_tipo_persona`, `descripcion_persona`) VALUES
(1, 'paciente'),
(2, 'asistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `coduser` int(11) NOT NULL,
  `contrasena` varchar(16) NOT NULL,
  `username` varchar(8) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `codpersona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`coduser`, `contrasena`, `username`, `fecha_registro`, `estado`, `codpersona`) VALUES
(1, '4583013', '72403225', '2015-10-23', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diente`
--
ALTER TABLE `diente`
  ADD PRIMARY KEY (`coddiente`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`coddistrito`);

--
-- Indices de la tabla `estado_diente`
--
ALTER TABLE `estado_diente`
  ADD PRIMARY KEY (`codestado`);

--
-- Indices de la tabla `odontograma_cabecera`
--
ALTER TABLE `odontograma_cabecera`
  ADD PRIMARY KEY (`cododontograma`),
  ADD KEY `codpersonal` (`codpersonal`);

--
-- Indices de la tabla `odontograma_detalle`
--
ALTER TABLE `odontograma_detalle`
  ADD KEY `cododonc` (`cododonc`,`codestado`,`coddiente`),
  ADD KEY `codestado` (`codestado`),
  ADD KEY `coddiente` (`coddiente`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cod_persona`),
  ADD KEY `cod_tipo_persona` (`cod_tipo_persona`,`coddistrito`),
  ADD KEY `coddistrito` (`coddistrito`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`cod_tipo_persona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`coduser`),
  ADD KEY `codpersona` (`codpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diente`
--
ALTER TABLE `diente`
  MODIFY `coddiente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `coddistrito` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `estado_diente`
--
ALTER TABLE `estado_diente`
  MODIFY `codestado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `odontograma_cabecera`
--
ALTER TABLE `odontograma_cabecera`
  MODIFY `cododontograma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `cod_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `cod_tipo_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `coduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `odontograma_cabecera`
--
ALTER TABLE `odontograma_cabecera`
  ADD CONSTRAINT `odontograma_cabecera_ibfk_1` FOREIGN KEY (`codpersonal`) REFERENCES `persona` (`cod_persona`);

--
-- Filtros para la tabla `odontograma_detalle`
--
ALTER TABLE `odontograma_detalle`
  ADD CONSTRAINT `odontograma_detalle_ibfk_1` FOREIGN KEY (`cododonc`) REFERENCES `odontograma_cabecera` (`cododontograma`),
  ADD CONSTRAINT `odontograma_detalle_ibfk_2` FOREIGN KEY (`codestado`) REFERENCES `estado_diente` (`codestado`),
  ADD CONSTRAINT `odontograma_detalle_ibfk_3` FOREIGN KEY (`coddiente`) REFERENCES `diente` (`coddiente`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`cod_tipo_persona`) REFERENCES `tipo_persona` (`cod_tipo_persona`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`coddistrito`) REFERENCES `distrito` (`coddistrito`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`codpersona`) REFERENCES `persona` (`cod_persona`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
