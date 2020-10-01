-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-09-2020 a las 17:46:42
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sicc2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bombero`
--

create database db_sicc2;
use db_sicc2;



CREATE TABLE `tbl_bombero` (
  `id_bombero` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `run` varchar(12) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `id_compania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cargo`
--

CREATE TABLE `tbl_cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`id_cargo`, `nombre`) VALUES
(1, 'Bombero V'),
(2, 'Bombero H'),
(3, 'Ayudante'),
(4, 'Secretario'),
(5, 'Tesorero'),
(6, 'Director'),
(7, 'Capitan'),
(8, 'Teniente 1°'),
(9, 'Teniente 2°'),
(10, 'Teniente 3°'),
(11, 'Comandante 1°'),
(12, 'Comandante 2°'),
(13, 'Inspector C°'),
(14, 'Ayudante C°'),
(15, 'Secretario Grl.'),
(16, 'Vicesuperintendente'),
(17, 'Superintendente'),
(18, 'Tesorero Grl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carros`
--

CREATE TABLE `tbl_carros` (
  `id_carros` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `id_compania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compania`
--

CREATE TABLE `tbl_compania` (
  `id_compania` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cursos`
--

CREATE TABLE `tbl_cursos` (
  `id_cursos` int(11) NOT NULL,
  `tipo_curso` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_cursos`
--

INSERT INTO `tbl_cursos` (`id_cursos`, `tipo_curso`) VALUES
(1, 'Bombero Inicial'),
(2, 'Bombero Operativo'),
(3, 'Bombero Profesional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_especialidad`
--

CREATE TABLE `tbl_especialidad` (
  `id_especialidad` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grupo_sanguineo`
--

CREATE TABLE `tbl_grupo_sanguineo` (
  `id_grupo_sanguineo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_info_personal`
--

CREATE TABLE `tbl_info_personal` (
  `id_info_personal` int(11) NOT NULL,
  `familiar_contacto` varchar(45) DEFAULT NULL,
  `tel_contacto` varchar(45) DEFAULT NULL,
  `maquinista` varchar(45) DEFAULT NULL,
  `fotografia` varchar(100) DEFAULT NULL,
  `id_bombero` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_cursos` int(11) NOT NULL,
  `id_salud` int(11) NOT NULL,
  `id_grupo_sanguineo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prevision`
--

CREATE TABLE `tbl_prevision` (
  `id_prevision` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_registro_bombero`
--

CREATE TABLE `tbl_registro_bombero` (
  `id_registro` int(11) NOT NULL,
  `h_entrada` datetime DEFAULT NULL,
  `h_salida` datetime DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `id_bombero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_registro_tono`
--

CREATE TABLE `tbl_registro_tono` (
  `id_tono` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_compania` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bombero`
--
ALTER TABLE `tbl_bombero`
  ADD PRIMARY KEY (`id_bombero`),
  ADD KEY `fk_tbl_bombero_tbl_compania1_idx` (`id_compania`);

--
-- Indices de la tabla `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `tbl_carros`
--
ALTER TABLE `tbl_carros`
  ADD PRIMARY KEY (`id_carros`),
  ADD KEY `id_compania_idx` (`id_compania`);

--
-- Indices de la tabla `tbl_compania`
--
ALTER TABLE `tbl_compania`
  ADD PRIMARY KEY (`id_compania`);

--
-- Indices de la tabla `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
  ADD PRIMARY KEY (`id_cursos`);

--
-- Indices de la tabla `tbl_especialidad`
--
ALTER TABLE `tbl_especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `tbl_grupo_sanguineo`
--
ALTER TABLE `tbl_grupo_sanguineo`
  ADD PRIMARY KEY (`id_grupo_sanguineo`);

--
-- Indices de la tabla `tbl_info_personal`
--
ALTER TABLE `tbl_info_personal`
  ADD PRIMARY KEY (`id_info_personal`),
  ADD KEY `id_especialidad_idx` (`id_especialidad`),
  ADD KEY `id_cargo_idx` (`id_cargo`),
  ADD KEY `id_cursos_idx` (`id_cursos`),
  ADD KEY `id_salud_idx` (`id_salud`),
  ADD KEY `id_grupo_sanguineo_idx` (`id_grupo_sanguineo`),
  ADD KEY `fk_tbl_info_personal_tbl_bombero1_idx` (`id_bombero`);

--
-- Indices de la tabla `tbl_prevision`
--
ALTER TABLE `tbl_prevision`
  ADD PRIMARY KEY (`id_prevision`);

--
-- Indices de la tabla `tbl_registro_bombero`
--
ALTER TABLE `tbl_registro_bombero`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `fk_tbl_bombero_compania_tbl_bombero1_idx` (`id_bombero`);

--
-- Indices de la tabla `tbl_registro_tono`
--
ALTER TABLE `tbl_registro_tono`
  ADD PRIMARY KEY (`id_tono`),
  ADD KEY `fk_tbl_registro_tono_tbl_compania1_idx` (`id_compania`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bombero`
--
ALTER TABLE `tbl_bombero`
  MODIFY `id_bombero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_compania`
--
ALTER TABLE `tbl_compania`
  MODIFY `id_compania` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cursos`
--
ALTER TABLE `tbl_cursos`
  MODIFY `id_cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_especialidad`
--
ALTER TABLE `tbl_especialidad`
  MODIFY `id_especialidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_grupo_sanguineo`
--
ALTER TABLE `tbl_grupo_sanguineo`
  MODIFY `id_grupo_sanguineo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_info_personal`
--
ALTER TABLE `tbl_info_personal`
  MODIFY `id_info_personal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_prevision`
--
ALTER TABLE `tbl_prevision`
  MODIFY `id_prevision` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_registro_bombero`
--
ALTER TABLE `tbl_registro_bombero`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_bombero`
--
ALTER TABLE `tbl_bombero`
  ADD CONSTRAINT `fk_tbl_bombero_tbl_compania1` FOREIGN KEY (`id_compania`) REFERENCES `tbl_compania` (`id_compania`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_carros`
--
ALTER TABLE `tbl_carros`
  ADD CONSTRAINT `id_compania` FOREIGN KEY (`id_compania`) REFERENCES `tbl_compania` (`id_compania`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_info_personal`
--
ALTER TABLE `tbl_info_personal`
  ADD CONSTRAINT `fk_tbl_info_personal_tbl_bombero1` FOREIGN KEY (`id_bombero`) REFERENCES `tbl_bombero` (`id_bombero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_cargo` FOREIGN KEY (`id_cargo`) REFERENCES `tbl_cargo` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_cursos` FOREIGN KEY (`id_cursos`) REFERENCES `tbl_cursos` (`id_cursos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_especialidad` FOREIGN KEY (`id_especialidad`) REFERENCES `tbl_especialidad` (`id_especialidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_grupo_sanguineo` FOREIGN KEY (`id_grupo_sanguineo`) REFERENCES `tbl_grupo_sanguineo` (`id_grupo_sanguineo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_salud` FOREIGN KEY (`id_salud`) REFERENCES `tbl_prevision` (`id_prevision`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_registro_bombero`
--
ALTER TABLE `tbl_registro_bombero`
  ADD CONSTRAINT `fk_tbl_bombero_compania_tbl_bombero1` FOREIGN KEY (`id_bombero`) REFERENCES `tbl_bombero` (`id_bombero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_registro_tono`
--
ALTER TABLE `tbl_registro_tono`
  ADD CONSTRAINT `fk_tbl_registro_tono_tbl_compania1` FOREIGN KEY (`id_compania`) REFERENCES `tbl_compania` (`id_compania`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
