-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2023 a las 18:01:52
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flowribera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ALUMNO` int(11) NOT NULL,
  `APELLIDOS` varchar(40) DEFAULT NULL,
  `NOMBRE` varchar(23) DEFAULT NULL,
  `SEXO` varchar(14) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL,
  `NIE` varchar(8) DEFAULT NULL,
  `FECHA_NACIMIENTO` varchar(10) DEFAULT NULL,
  `LOCALIDAD_NACIMIENTO` varchar(29) DEFAULT NULL,
  `PROVINCIA_NACIMIENTO` varchar(21) DEFAULT NULL,
  `NOMBRE_CORRESPONDENCIA` varchar(48) DEFAULT NULL,
  `DOMICILIO` varchar(54) DEFAULT NULL,
  `LOCALIDAD` varchar(29) DEFAULT NULL,
  `PROVINCIA` varchar(21) DEFAULT NULL,
  `TELEFONO` varchar(9) DEFAULT NULL,
  `MOVIL` varchar(16) DEFAULT NULL,
  `CODIGO_POSTAL` varchar(11) DEFAULT NULL,
  `TUTOR1` varchar(33) DEFAULT NULL,
  `DNI_TUTOR1` varchar(13) DEFAULT NULL,
  `TUTOR2` varchar(28) DEFAULT NULL,
  `DNI_TUTOR2` varchar(13) DEFAULT NULL,
  `PAIS` varchar(25) DEFAULT NULL,
  `NACIONALIDAD` varchar(20) DEFAULT NULL,
  `EMAIL_ALUMNO` varchar(46) DEFAULT NULL,
  `EMAIL_TUTOR2` varchar(40) DEFAULT NULL,
  `EMAIL_TUTOR1` varchar(37) DEFAULT NULL,
  `TELEFONOTUTOR1` varchar(10) DEFAULT NULL,
  `TELEFONOTUTOR2` varchar(13) DEFAULT NULL,
  `MOVILTUTOR1` varchar(10) DEFAULT NULL,
  `MOVILTUTOR2` varchar(13) DEFAULT NULL,
  `APELLIDO1` varchar(22) DEFAULT NULL,
  `APELLIDO2` varchar(20) DEFAULT NULL,
  `TIPODOM` varchar(2) DEFAULT NULL,
  `NTUTOR1` varchar(23) DEFAULT NULL,
  `NTUTOR2` varchar(23) DEFAULT NULL,
  `NSS` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ALUMNO`, `APELLIDOS`, `NOMBRE`, `SEXO`, `DNI`, `NIE`, `FECHA_NACIMIENTO`, `LOCALIDAD_NACIMIENTO`, `PROVINCIA_NACIMIENTO`, `NOMBRE_CORRESPONDENCIA`, `DOMICILIO`, `LOCALIDAD`, `PROVINCIA`, `TELEFONO`, `MOVIL`, `CODIGO_POSTAL`, `TUTOR1`, `DNI_TUTOR1`, `TUTOR2`, `DNI_TUTOR2`, `PAIS`, `NACIONALIDAD`, `EMAIL_ALUMNO`, `EMAIL_TUTOR2`, `EMAIL_TUTOR1`, `TELEFONOTUTOR1`, `TELEFONOTUTOR2`, `MOVILTUTOR1`, `MOVILTUTOR2`, `APELLIDO1`, `APELLIDO2`, `TIPODOM`, `NTUTOR1`, `NTUTOR2`, `NSS`) VALUES
(1, 'Blanco Sosa', 'Luis', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(2, 'Casado de la Rocha', 'Nacho', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(3, 'Cespedes', 'Raul', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(4, 'de Castro Ramos', 'Manuel', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(5, 'Díaz Élez', 'Alejandro', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(6, 'Dobre', 'Gianina', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(7, 'Espinosa Hormigos', 'Alberto', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(8, 'González Riesco', 'Ricardo', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(9, 'González Stéfani', 'Eduardo', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(10, 'Martín Lara', 'Alberto', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(11, 'Mateos Hernández', 'Miguel Ángel', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(12, 'Méndez Sánchez', 'Iván', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(13, 'Pascual Cárdenas', 'Álvaro', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(14, 'Sánchez García', 'Germán', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(15, 'Sanz González', 'Mario', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(16, 'Valdesoiro Gil', 'Mario', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(17, 'Valls Fernández', 'Olga', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL'),
(18, 'Villalba Quintanilla', 'Nicolás', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NU', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `ALUMNO` int(11) DEFAULT NULL,
  `APELLIDOS` varchar(40) DEFAULT NULL,
  `NOMBRE` varchar(23) DEFAULT NULL,
  `MATRICULA` int(11) NOT NULL,
  `ETAPA` int(4) DEFAULT NULL,
  `ANNO` int(4) DEFAULT NULL,
  `TIPO` varchar(1) DEFAULT NULL,
  `ESTUDIOS` varchar(77) DEFAULT NULL,
  `GRUPO` varchar(8) DEFAULT NULL,
  `REPETIDOR` varchar(1) DEFAULT NULL,
  `FECHAMATRICULA` varchar(10) DEFAULT NULL,
  `CENTRO` int(8) DEFAULT NULL,
  `PROCEDENCIA` varchar(8) DEFAULT NULL,
  `ESTADOMATRICULA` varchar(14) DEFAULT NULL,
  `FECHARESMATRICULA` varchar(10) DEFAULT NULL,
  `NUM_EXP_CENTRO` int(7) DEFAULT NULL,
  `PROGRAMA_2` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`ALUMNO`, `APELLIDOS`, `NOMBRE`, `MATRICULA`, `ETAPA`, `ANNO`, `TIPO`, `ESTUDIOS`, `GRUPO`, `REPETIDOR`, `FECHAMATRICULA`, `CENTRO`, `PROCEDENCIA`, `ESTADOMATRICULA`, `FECHARESMATRICULA`, `NUM_EXP_CENTRO`, `PROGRAMA_2`) VALUES
(1, 'Blanco Sosa', 'Luis', 1, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(2, 'Casado de la Rocha', 'Nacho', 2, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(3, 'Cespedes', 'Raul', 3, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(4, 'de Castro Ramos', 'Manuel', 4, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(5, 'Díaz Élez', 'Alejandro', 5, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(6, 'Dobre', 'Gianina', 6, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(7, 'Espinosa Hormigos', 'Alberto', 7, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(8, 'González Riesco', 'Ricardo', 8, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(9, 'González Stéfani', 'Eduardo', 9, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(10, 'Martín Lara', 'Alberto', 10, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(11, 'Mateos Hernández', 'Miguel Ángel', 11, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(12, 'Méndez Sánchez', 'Iván', 12, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(13, 'Pascual Cárdenas', 'Álvaro', 13, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(14, 'Sánchez García', 'Germán', 14, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(15, 'Sanz González', 'Mario', 15, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(16, 'Valdesoiro Gil', 'Mario', 16, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(17, 'Valls Fernández', 'Olga', 17, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL'),
(18, 'Villalba Quintanilla', 'Nicolás', 18, 0, 0, 'N', 'Administración de Sistemas Informáticos en Red', 'ASIR', 'N', 'NULL', 0, 'NULL', 'NULL', 'NULL', 0, 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `SALIDA` int(11) NOT NULL,
  `ALUMNO` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `MOTIVO` varchar(255) NOT NULL,
  `RESPONSABLE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`SALIDA`, `ALUMNO`, `FECHA`, `MOTIVO`, `RESPONSABLE`) VALUES
(1, 15, '2023-03-04', 'Medico', 'Antonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(45) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `pass`) VALUES
('admin', '23906315b20875ef23bde6bafc912a49f05cfe63933585128f2c9ed1bcbfa56e972b1c58baba3792a114ee648261f5432dd942bad5f0338b95665bcea9411891');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ALUMNO`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`MATRICULA`),
  ADD KEY `FK_MATRICULA_ALUMNO` (`ALUMNO`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`SALIDA`),
  ADD KEY `FK_SALIDA_ALUMNO` (`ALUMNO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ALUMNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `MATRICULA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `SALIDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `FK_MATRICULA_ALUMNO` FOREIGN KEY (`ALUMNO`) REFERENCES `alumnos` (`ALUMNO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `FK_SALIDA_ALUMNO` FOREIGN KEY (`ALUMNO`) REFERENCES `alumnos` (`ALUMNO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
