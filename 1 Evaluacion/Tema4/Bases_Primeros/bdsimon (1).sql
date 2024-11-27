-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 25-11-2024 a las 14:26:14
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
-- Base de datos: `bdsimon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdsimon`
--

CREATE TABLE `bdsimon` (
  `Id` int(11) NOT NULL,
  `Us` text NOT NULL,
  `Contr` text NOT NULL,
  `Rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `bdsimon`
--

INSERT INTO `bdsimon` (`Id`, `Us`, `Contr`, `Rol`) VALUES
(1, 'Jugador', 'Jugador', 'Jugador'),
(1, 'Juan', 'Juan', 'Jugador'),
(1, 'Pepe', 'Pepe', 'Jugador'),
(1, 'Marc', 'Marc', 'Jugador');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
