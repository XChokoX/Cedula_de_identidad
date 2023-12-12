-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2023 a las 04:06:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco_de_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carnet`
--

CREATE TABLE `carnet` (
  `id` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellido_paterno` varchar(20) NOT NULL,
  `apellido_materno` varchar(20) NOT NULL,
  `rut` int(11) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `archivo` text NOT NULL,
  `lugar_de_nacimiento` varchar(20) NOT NULL,
  `profesion` varchar(20) NOT NULL,
  `discapacidad` varchar(20) NOT NULL,
  `donante` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carnet`
--

INSERT INTO `carnet` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `rut`, `nacionalidad`, `genero`, `fecha_nacimiento`, `archivo`, `lugar_de_nacimiento`, `profesion`, `discapacidad`, `donante`) VALUES
(18, 'dasdas', 'asdas', 'asdas', 21123214, 'chileno', 'Hombre', '2023-12-15', 'img/download.jpg', 'fdasdasd', 'dassad', 'no', 'no'),
(19, '13213213', 'asdas', 'asdas', 21123214, 'chileno', 'Hombre', '2023-12-15', 'img/download.jpg', 'hth', '353553', 'no', 'no'),
(20, 'Mario', 'Jorquera ', 'Florente', 21312312, 'extranjero', 'Hombre', '2023-12-29', 'img/download.jpg', 'Arica', 'Enfermero', 'si', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carnet`
--
ALTER TABLE `carnet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carnet`
--
ALTER TABLE `carnet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
