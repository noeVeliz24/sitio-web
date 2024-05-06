-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 15:27:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre`, `foto`, `descripcion`) VALUES
(1, 'Body Massage', 'about.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eos perspiciatis voluptatem vitae'),
(3, 'Body Massage', 'about.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eos perspiciatis voluptatem vitae'),
(4, 'Body Massage', 'about.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eos perspiciatis voluptatem vitae'),
(5, 'Body Massage', 'about.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eos perspiciatis voluptatem vitae'),
(6, 'Body Massage', 'about.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eos perspiciatis voluptatem vitae'),
(7, 'asd', 'service-2.jpg', 'qdqd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
