-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2022 a las 23:54:58
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computroniklab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `IDABONOS` int(5) NOT NULL,
  `IDESTADOPAGOS` int(5) DEFAULT NULL,
  `IDTIPOSPAGOS` int(5) DEFAULT NULL,
  `IDCLIENTE` int(5) DEFAULT NULL,
  `ABONO` float NOT NULL,
  `FECHAABONO` datetime NOT NULL,
  `SALDO` float NOT NULL,
  `NUMEROCONFIRMACION` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDCLIENTE` int(10) NOT NULL,
  `IDESTADOCLIENTE` int(5) NOT NULL DEFAULT 1,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `CI` int(10) DEFAULT NULL,
  `DIRECCION` varchar(50) NOT NULL,
  `CIUDAD` varchar(20) NOT NULL,
  `PAIS` varchar(20) NOT NULL,
  `E_MAIL` varchar(20) NOT NULL,
  `TELEFONO` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDCLIENTE`, `IDESTADOCLIENTE`, `NOMBRE`, `APELLIDO`, `CI`, `DIRECCION`, `CIUDAD`, `PAIS`, `E_MAIL`, `TELEFONO`) VALUES
(52, 0, 'naty', 'guallichico', 1722380571, 'gkk', 'Conocoto', 'Ecuador', 'naty@gmail.com', '0999059146'),
(53, 0, 'Kevin', 'Gramal', 1760090249, 'La Salle', 'Conocoto', 'Ecuador', 'kevin@gmail.com', '0983556641'),
(65, 0, 'Nataly', 'Guallichico', 123456, 'D1', 'C1', 'Ecuador', 'naty@gmail.com', '0999059146'),
(70, 0, 'naty', 'guallichico', 12345, 'gkk', 'Conocoto', 'Ecuador', 'naty@gmail.com', '0999059146'),
(71, 1, 'Kevin', 'Gramal', 1122334455, 'La Salle', 'Conocoto', 'Ecuador', 'kevin@gmail.com', '0983556641'),
(82, 1, 'Nataly', 'Guallichico', 123456, 'D1', 'C1', 'Ecuador', 'naty@gmail.com', '0999059146'),
(83, 1, 'Christina', 'Gramal', 12345678, 'D1', 'C1', 'Ecuador', 'naty@gmail.com', '0999059146'),
(84, 1, 'Christina', 'Gramal', 224466, 'La Salle', 'Conocoto', 'Ecuador', 'chris@gmail.com', '0983556641'),
(85, 1, 'naty', 'guallichico', 123456789, 'gkk', 'Conocoto', 'Ecuador', 'naty@gmail.com', '0999059146');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente`
--

CREATE TABLE `componente` (
  `IDCOMPONENTE` int(5) NOT NULL,
  `COMPONENTE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `componente`
--

INSERT INTO `componente` (`IDCOMPONENTE`, `COMPONENTE`) VALUES
(1, 'placa base'),
(2, 'CPU'),
(3, 'Memoria Ram'),
(4, 'DiscoDuro'),
(5, 'Tarjeta gráfica'),
(6, 'Fuente de alimentación'),
(7, 'Tarjeta de red'),
(8, 'Disipadores'),
(9, 'Ventiladores'),
(10, 'Soporte del papel'),
(11, 'Guías laterales'),
(12, 'Abrazaderas del cartuchos'),
(13, 'Cabezal de impresión'),
(14, 'Panel de control');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleequipos`
--

CREATE TABLE `detalleequipos` (
  `IDDETALLEEQUIPOS` int(5) NOT NULL,
  `IDEQUIPO` int(5) DEFAULT NULL,
  `MARCA` varchar(10) DEFAULT NULL,
  `MODELO` varchar(10) DEFAULT NULL,
  `SERIE` varchar(10) DEFAULT NULL,
  `DANO` varchar(100) DEFAULT NULL,
  `NOTAS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleequipos`
--

INSERT INTO `detalleequipos` (`IDDETALLEEQUIPOS`, `IDEQUIPO`, `MARCA`, `MODELO`, `SERIE`, `DANO`, `NOTAS`) VALUES
(25, 6, 'aa', 'edf', 'bb', 'cc', 'dd'),
(27, 2, 'sdfg', 'zvm', 'gfhk', 'fg', 'sk'),
(37, 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepresupuesto`
--

CREATE TABLE `detallepresupuesto` (
  `IDDETALLEPRESUPUESTO` int(5) NOT NULL,
  `IDGARANTIA` int(5) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  `CANTIDAD` int(30) DEFAULT NULL,
  `PRECIOUNITARIO` float DEFAULT NULL,
  `PRECIOTOTAL` float DEFAULT NULL,
  `DESCUENTO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `IDEMPRESA` int(5) NOT NULL,
  `RUC` int(15) DEFAULT NULL,
  `HORARIO` varchar(20) DEFAULT NULL,
  `DIRECCION` varchar(20) DEFAULT NULL,
  `TELEFONO` int(10) DEFAULT NULL,
  `PAGINTERNET` varchar(20) DEFAULT NULL,
  `E_MAIL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `IDEQUIPO` int(5) NOT NULL,
  `EQUIPO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`IDEQUIPO`, `EQUIPO`) VALUES
(1, 'portátil'),
(2, 'impresora'),
(3, 'CPU'),
(4, 'monitor'),
(5, 'tablet'),
(6, 'todo en uno'),
(7, 'disco'),
(8, 'playstation');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipocliente`
--

CREATE TABLE `equipocliente` (
  `IDEQUIPOCLIENTE` int(5) NOT NULL,
  `IDDETALLEEQUIPOS` int(5) DEFAULT NULL,
  `IDCOMPONENTE` int(5) DEFAULT NULL,
  `IDINFORMACIONCOMPONENTE` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoaprobacion`
--

CREATE TABLE `estadoaprobacion` (
  `IDESTADOAPROBACION` int(5) NOT NULL,
  `DETALLEESTADOAPROBACION` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocliente`
--

CREATE TABLE `estadocliente` (
  `IDESTADOCLIENTE` int(5) NOT NULL,
  `DETALLEESTADOCLIENTE` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoequipo`
--

CREATE TABLE `estadoequipo` (
  `IDESTADOEQUIPO` int(10) NOT NULL,
  `DETALLEESTADOEQUIPO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoorden`
--

CREATE TABLE `estadoorden` (
  `IDESTADOORDEN` int(5) NOT NULL,
  `DETALLEESTADOORDEN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopagos`
--

CREATE TABLE `estadopagos` (
  `IDESTADOPAGOS` int(5) NOT NULL,
  `DETALLEESTADOPAGOS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantia`
--

CREATE TABLE `garantia` (
  `IDGARANTIA` int(5) NOT NULL,
  `DETALLEGARANTIA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacioncomponente`
--

CREATE TABLE `informacioncomponente` (
  `IDINFORMACIONCOMPONENTE` int(5) NOT NULL,
  `IDCOMPONENTE` int(5) DEFAULT NULL,
  `MODELO` varchar(15) DEFAULT NULL,
  `SERIE` varchar(10) DEFAULT NULL,
  `MARCA` varchar(20) DEFAULT NULL,
  `NOTAS` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `informacioncomponente`
--

INSERT INTO `informacioncomponente` (`IDINFORMACIONCOMPONENTE`, `IDCOMPONENTE`, `MODELO`, `SERIE`, `MARCA`, `NOTAS`) VALUES
(19, 6, 'sfd', 'xv', 'fg', ''),
(20, 6, 'gfg', 'cbv', 'dfg', ''),
(21, 1, 'sdd', 'sdd', 'sdd', NULL),
(22, 1, 'as', 'as', 'as', 'nota placa base 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordentrabajo`
--

CREATE TABLE `ordentrabajo` (
  `IDORDENTRABAJO` int(5) NOT NULL,
  `IDESTADOEQUIPO` int(5) DEFAULT NULL,
  `IDEMPRESA` int(5) DEFAULT NULL,
  `IDUSUARIO` int(5) DEFAULT NULL,
  `IDEQUIPOCLIENTE` int(5) DEFAULT NULL,
  `IDCLIENTE` int(5) DEFAULT NULL,
  `IDPRESUPUESTO` int(5) DEFAULT NULL,
  `IDABONOS` int(5) DEFAULT NULL,
  `IDTECNICO` int(5) DEFAULT NULL,
  `IDESTADOAPROBACION` int(5) DEFAULT NULL,
  `IDESTADOORDEN` int(5) DEFAULT NULL,
  `HORAINGRESO` datetime NOT NULL,
  `FECHATENTATIVAENTREGA` datetime NOT NULL,
  `DIAGNOSTICO` varchar(100) NOT NULL,
  `FECHASALIDA` datetime NOT NULL,
  `HORASALIDA` datetime NOT NULL,
  `DANOREPORTADO` varchar(100) NOT NULL,
  `NOTA` varchar(100) NOT NULL,
  `SUBTOTAL` float(8,2) NOT NULL,
  `DESCUENTO` float(8,2) NOT NULL,
  `IMPORTE` float(8,2) NOT NULL,
  `IVA` float(8,2) NOT NULL,
  `TOTAL` float(8,2) NOT NULL,
  `SALDO` float(8,2) NOT NULL,
  `FECHAINGRESO` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `IDPRESUPUESTO` int(5) NOT NULL,
  `IDCLIENTE` int(5) DEFAULT NULL,
  `IDEQUIPOCLIENTE` int(5) DEFAULT NULL,
  `IDDETALLEPRESUPUESTO` int(5) DEFAULT NULL,
  `IMPORTE` float(8,2) DEFAULT NULL,
  `DESCUENTOS` float(8,2) DEFAULT NULL,
  `SUBTOTAL` float(8,2) DEFAULT NULL,
  `IVA` float(8,2) DEFAULT NULL,
  `TOTAL` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `IDTECNICO` int(5) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `TELEFONO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopagos`
--

CREATE TABLE `tipopagos` (
  `IDTIPOSPAGOS` int(5) NOT NULL,
  `DETALLETIPOPAGOS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDUSUARIO` int(5) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `DOMICILIO` varchar(20) DEFAULT NULL,
  `CI` int(10) DEFAULT NULL,
  `E_MAIL` varchar(20) DEFAULT NULL,
  `TELEFONO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`IDABONOS`),
  ADD KEY `FK_TIENE19` (`IDESTADOPAGOS`),
  ADD KEY `FK_TIENE20` (`IDTIPOSPAGOS`),
  ADD KEY `FK_TIENE21` (`IDCLIENTE`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDCLIENTE`);

--
-- Indices de la tabla `componente`
--
ALTER TABLE `componente`
  ADD PRIMARY KEY (`IDCOMPONENTE`);

--
-- Indices de la tabla `detalleequipos`
--
ALTER TABLE `detalleequipos`
  ADD PRIMARY KEY (`IDDETALLEEQUIPOS`);

--
-- Indices de la tabla `detallepresupuesto`
--
ALTER TABLE `detallepresupuesto`
  ADD PRIMARY KEY (`IDDETALLEPRESUPUESTO`),
  ADD KEY `FK_TIENE17` (`IDGARANTIA`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IDEMPRESA`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`IDEQUIPO`);

--
-- Indices de la tabla `equipocliente`
--
ALTER TABLE `equipocliente`
  ADD PRIMARY KEY (`IDEQUIPOCLIENTE`),
  ADD KEY `FK_TIENE10` (`IDINFORMACIONCOMPONENTE`),
  ADD KEY `FK_TIENE7` (`IDDETALLEEQUIPOS`),
  ADD KEY `FK_TIENE8` (`IDCOMPONENTE`);

--
-- Indices de la tabla `estadoaprobacion`
--
ALTER TABLE `estadoaprobacion`
  ADD PRIMARY KEY (`IDESTADOAPROBACION`);

--
-- Indices de la tabla `estadocliente`
--
ALTER TABLE `estadocliente`
  ADD PRIMARY KEY (`IDESTADOCLIENTE`);

--
-- Indices de la tabla `estadoequipo`
--
ALTER TABLE `estadoequipo`
  ADD PRIMARY KEY (`IDESTADOEQUIPO`);

--
-- Indices de la tabla `estadoorden`
--
ALTER TABLE `estadoorden`
  ADD PRIMARY KEY (`IDESTADOORDEN`);

--
-- Indices de la tabla `estadopagos`
--
ALTER TABLE `estadopagos`
  ADD PRIMARY KEY (`IDESTADOPAGOS`);

--
-- Indices de la tabla `garantia`
--
ALTER TABLE `garantia`
  ADD PRIMARY KEY (`IDGARANTIA`);

--
-- Indices de la tabla `informacioncomponente`
--
ALTER TABLE `informacioncomponente`
  ADD PRIMARY KEY (`IDINFORMACIONCOMPONENTE`);

--
-- Indices de la tabla `ordentrabajo`
--
ALTER TABLE `ordentrabajo`
  ADD PRIMARY KEY (`IDORDENTRABAJO`),
  ADD UNIQUE KEY `IDESTADOEQUIPO` (`IDESTADOEQUIPO`),
  ADD UNIQUE KEY `IDEMPRESA` (`IDEMPRESA`),
  ADD UNIQUE KEY `IDUSUARIO` (`IDUSUARIO`),
  ADD UNIQUE KEY `IDEQUIPOCLIENTE` (`IDEQUIPOCLIENTE`),
  ADD UNIQUE KEY `IDPRESUPUESTO` (`IDPRESUPUESTO`),
  ADD UNIQUE KEY `IDCLIENTE_2` (`IDCLIENTE`),
  ADD UNIQUE KEY `IDABONOS` (`IDABONOS`),
  ADD UNIQUE KEY `IDESTADOAPROBACION` (`IDESTADOAPROBACION`),
  ADD UNIQUE KEY `IDESTADOORDEN` (`IDESTADOORDEN`),
  ADD KEY `IDCLIENTE` (`IDCLIENTE`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`IDPRESUPUESTO`),
  ADD KEY `FK_TIENE14` (`IDCLIENTE`),
  ADD KEY `FK_TIENE15` (`IDEQUIPOCLIENTE`),
  ADD KEY `FK_TIENE16` (`IDDETALLEPRESUPUESTO`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`IDTECNICO`);

--
-- Indices de la tabla `tipopagos`
--
ALTER TABLE `tipopagos`
  ADD PRIMARY KEY (`IDTIPOSPAGOS`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUSUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `IDABONOS` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDCLIENTE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `componente`
--
ALTER TABLE `componente`
  MODIFY `IDCOMPONENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `detalleequipos`
--
ALTER TABLE `detalleequipos`
  MODIFY `IDDETALLEEQUIPOS` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `detallepresupuesto`
--
ALTER TABLE `detallepresupuesto`
  MODIFY `IDDETALLEPRESUPUESTO` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `IDEMPRESA` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `IDEQUIPO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `equipocliente`
--
ALTER TABLE `equipocliente`
  MODIFY `IDEQUIPOCLIENTE` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadoaprobacion`
--
ALTER TABLE `estadoaprobacion`
  MODIFY `IDESTADOAPROBACION` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadocliente`
--
ALTER TABLE `estadocliente`
  MODIFY `IDESTADOCLIENTE` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadoequipo`
--
ALTER TABLE `estadoequipo`
  MODIFY `IDESTADOEQUIPO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadoorden`
--
ALTER TABLE `estadoorden`
  MODIFY `IDESTADOORDEN` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadopagos`
--
ALTER TABLE `estadopagos`
  MODIFY `IDESTADOPAGOS` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `garantia`
--
ALTER TABLE `garantia`
  MODIFY `IDGARANTIA` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacioncomponente`
--
ALTER TABLE `informacioncomponente`
  MODIFY `IDINFORMACIONCOMPONENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `IDTECNICO` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipopagos`
--
ALTER TABLE `tipopagos`
  MODIFY `IDTIPOSPAGOS` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUSUARIO` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `FK_TIENE19` FOREIGN KEY (`IDESTADOPAGOS`) REFERENCES `estadopagos` (`IDESTADOPAGOS`),
  ADD CONSTRAINT `FK_TIENE20` FOREIGN KEY (`IDTIPOSPAGOS`) REFERENCES `tipopagos` (`IDTIPOSPAGOS`),
  ADD CONSTRAINT `FK_TIENE21` FOREIGN KEY (`IDCLIENTE`) REFERENCES `cliente` (`IDCLIENTE`);

--
-- Filtros para la tabla `detalleequipos`
--
ALTER TABLE `detalleequipos`
  ADD CONSTRAINT `detalleequipos_ibfk_1` FOREIGN KEY (`IDEQUIPO`) REFERENCES `equipo` (`IDEQUIPO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informacioncomponente`
--
ALTER TABLE `informacioncomponente`
  ADD CONSTRAINT `informacioncomponente_ibfk_1` FOREIGN KEY (`IDCOMPONENTE`) REFERENCES `componente` (`IDCOMPONENTE`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
