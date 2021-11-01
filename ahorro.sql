-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2021 a las 03:00:55
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ahorro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ahorro`
--

CREATE TABLE `ahorro` (
  `id` int(100) NOT NULL,
  `numero` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ahorro`
--

INSERT INTO `ahorro` (`id`, `numero`, `cantidad`, `fecha`) VALUES
(2, 1, 2, '2021-10-18'),
(3, 2, 4, '2021-10-19'),
(4, 3, 6, '2021-10-20'),
(5, 4, 8, '2021-10-08'),
(6, 8, 16, '2021-10-05'),
(7, 9, 18, '2021-10-02'),
(8, 10, 20, '2021-10-11'),
(9, 13, 26, '2021-10-26'),
(10, 14, 28, '2021-10-21'),
(11, 15, 30, '2021-10-22'),
(12, 20, 40, '2021-10-04'),
(13, 22, 44, '2021-10-29'),
(14, 24, 48, '2021-10-09'),
(15, 30, 60, '2021-10-12'),
(16, 31, 62, '2021-10-01'),
(17, 33, 66, '2021-10-06'),
(18, 34, 68, '2021-10-13'),
(19, 37, 74, '2021-10-15'),
(20, 44, 88, '2021-10-17'),
(21, 47, 94, '2021-10-03'),
(22, 57, 114, '2021-10-16'),
(23, 65, 130, '2021-10-23'),
(24, 71, 142, '2021-10-07'),
(25, 81, 162, '2021-10-28'),
(26, 91, 182, '2021-10-24'),
(27, 94, 188, '2021-10-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ahorro`
--
ALTER TABLE `ahorro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ahorro`
--
ALTER TABLE `ahorro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
