-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2025 a las 17:01:26
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
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `codigo` int(3) NOT NULL,
  `nombre_ciudad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`codigo`, `nombre_ciudad`) VALUES
(10, 'bogota'),
(12, 'bucaramanga '),
(1, 'Bogota'),
(2, 'Medellin'),
(1, 'Bogota'),
(2, 'Medellin'),
(1, 'Bogota'),
(2, 'Medellin'),
(3, 'Cartagena'),
(4, 'Santa Marta'),
(3, 'Cartagena'),
(4, 'Santa Marta'),
(5, 'Barranquilla '),
(6, 'Villavicencio'),
(5, 'Barranquilla '),
(6, 'Villavicencio'),
(7, 'San Gil '),
(8, 'San Gil'),
(7, 'San Gil '),
(8, 'San Gil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `profesion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`cedula`, `nombre`, `apellido`, `direccion`, `ciudad`, `edad`, `profesion`) VALUES
(123, 'cristian', 'g', 'av 39', 1, 18, 'ingeniero'),
(1020121054, 'Kevin Santiago', 'Alfonso Romero', 'Kra10a este #47-05 s', 1, 19, 'ingeniero');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
