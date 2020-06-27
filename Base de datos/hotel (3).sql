-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2020 a las 21:05:50
-- Versión del servidor: 8.0.20-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `HABITACION`
--

CREATE TABLE `HABITACION` (
  `habitacion_id` int UNSIGNED NOT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `costo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `HABITACION`
--

INSERT INTO `HABITACION` (`habitacion_id`, `categoria`, `estado`, `costo`) VALUES
(1, 'Estandar', 'disponible', 1000),
(2, 'Estandar', 'disponible', 1000),
(3, 'Estandar-frigobar', 'disponible', 1500),
(4, 'Estandar', 'disponible', 1000),
(5, 'Estandar-frigobar', 'disponible', 1500),
(6, 'Estandar', 'disponible', 1000),
(101, 'Estandar-frigobar', 'disponible', 1500),
(102, 'Estandar', 'disponible', 1000),
(103, 'Estandar-frigobar', 'disponible', 1500),
(104, 'Estandar-frigobar', 'disponible', 1500),
(105, 'Estandar-frigobar', 'disponible', 1500),
(106, 'Estandar', 'disponible', 1000),
(201, 'Estandar-frigobar', 'disponible', 1500),
(202, 'Estandar', 'disponible', 1000),
(203, 'Estandar-frigobar', 'disponible', 1500),
(204, 'Estandar-frigobar', 'disponible', 1500),
(205, 'Estandar-frigobar', 'disponible', 1500),
(206, 'Estandar', 'disponible', 1000),
(301, 'Estandar-frigobar', 'disponible', 1500),
(302, 'Estandar', 'disponible', 1000),
(303, 'Estandar-frigobar', 'disponible', 1500),
(304, 'Estandar-frigobar', 'disponible', 1500),
(305, 'Estandar-frigobar', 'disponible', 1500),
(306, 'Estandar', 'disponible', 1000),
(401, 'Junior suite', 'disponible', 3000),
(402, 'Junior suite', 'disponible', 3000),
(403, 'Junior suite', 'disponible', 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HUESPED`
--

CREATE TABLE `HUESPED` (
  `huesped_id` int UNSIGNED NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_paterno` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_materno` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `REGISTRO_PAGO`
--

CREATE TABLE `REGISTRO_PAGO` (
  `huesped_id` int UNSIGNED NOT NULL,
  `usuario_id` int NOT NULL,
  `reserva_id` int UNSIGNED NOT NULL,
  `registro_id` int NOT NULL,
  `descripción` varchar(75) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RESERVA`
--

CREATE TABLE `RESERVA` (
  `reserva_id` int UNSIGNED NOT NULL,
  `usuario_id` int NOT NULL,
  `huesped_id` int UNSIGNED NOT NULL,
  `habitacion_id` int UNSIGNED NOT NULL,
  `check-in` datetime NOT NULL,
  `check-out` datetime NOT NULL,
  `numero_huespedes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `usuario_id` int NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_paterno` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_materno` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`usuario_id`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo`, `password`, `cargo`) VALUES
(1, 'Don', 'Hospedaje', '', 'correopruebahotel@gmail.com', '1234', 'gerente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `HABITACION`
--
ALTER TABLE `HABITACION`
  ADD PRIMARY KEY (`habitacion_id`);

--
-- Indices de la tabla `HUESPED`
--
ALTER TABLE `HUESPED`
  ADD PRIMARY KEY (`huesped_id`);

--
-- Indices de la tabla `REGISTRO_PAGO`
--
ALTER TABLE `REGISTRO_PAGO`
  ADD PRIMARY KEY (`registro_id`);

--
-- Indices de la tabla `RESERVA`
--
ALTER TABLE `RESERVA`
  ADD PRIMARY KEY (`reserva_id`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `HABITACION`
--
ALTER TABLE `HABITACION`
  MODIFY `habitacion_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=406;

--
-- AUTO_INCREMENT de la tabla `HUESPED`
--
ALTER TABLE `HUESPED`
  MODIFY `huesped_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `REGISTRO_PAGO`
--
ALTER TABLE `REGISTRO_PAGO`
  MODIFY `registro_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `RESERVA`
--
ALTER TABLE `RESERVA`
  MODIFY `reserva_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
