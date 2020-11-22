-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2020 a las 05:53:32
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musicworld`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `email`, `nombre`, `apellido`, `password`) VALUES
(1, 'admin@email.com', NULL, NULL, '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id_tema` int(11) UNSIGNED NOT NULL,
  `portada` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `grupo` varchar(200) NOT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `genero_id` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id_tema`, `portada`, `descripcion`, `grupo`, `duracion`, `link`, `genero_id`) VALUES
(1, 'thriller.jpg', 'Thriller', 'Michael Jackson', '3.58', 'https://www.youtube.com/watch?v=sOnqjkJTMaA', 4),
(2, 'queen.jpg', 'We are the champions', 'Queen', '3.04', 'https://www.youtube.com/watch?v=04854XqcfCY', 1),
(3, 'cindy.jpg', 'Girls just wanna have fun', 'Cindy Lauper', '3.55', 'https://www.youtube.com/watch?v=PIb6AZdTr-A', 2),
(4, 'sabbath.jpg', 'Paranoid', 'Black Sabbath', '2.47', 'https://www.youtube.com/watch?v=uk_wUT1CvWM', 3),
(5, 'bonjovi.jpg', 'Living on a prayer', 'Bon Jovi', '4.10', 'https://www.youtube.com/watch?v=lDK9QqIzhwk', 10),
(6, 'joanjett.jpg', 'I love rock and roll', 'Joan Jett', '2.56', 'https://www.youtube.com/watch?v=d9jhDwxt22Y', 1),
(7, 'wham.jpg', 'Wake me up before you go-go', 'Wham!', '3.54', 'https://www.youtube.com/watch?v=pIgZ7gMze7A', 2),
(8, 'whitney.jpg', 'I wanna dance with somebody', 'Whitney Houston', '4.52', 'https://www.youtube.com/watch?v=eH3giaIzONA', 2),
(9, 'scorpions.jpg', 'Rock you like a hurricane', 'Scorpions', '4.15', 'https://www.youtube.com/watch?v=6yP1tcy9a10', 3),
(10, 'leppard.jpg', 'Pour some sugar on me', 'Deff Lepard', '4.34', 'https://www.youtube.com/watch?v=0UIB9Y4OFPs', 3),
(11, 'madonna.jpg', 'Like a virgin', 'Madonna', '3.56', 'https://www.youtube.com/watch?v=s__rX_WL100', 2),
(12, 'police.jpg', 'Every breath you take', 'The Police', '3.52', 'https://www.youtube.com/watch?v=s__rX_WL100', 1),
(13, 'aerosmith.jpg', 'Dude looks like a lady', 'Aerosmith', '4.24', 'https://www.youtube.com/watch?v=nf0oXY4nDxE', 7),
(14, 'nirvana.jpg', 'Smell like a teen spirit', 'Nirvana', '4.38', 'https://www.youtube.com/watch?v=hTWKbfoikeg', 6),
(15, 'greenday.jpg', 'Dry ice', 'Green day', '3.44', 'https://www.youtube.com/watch?v=kmsqg3Aevlo', 5),
(16, 'guns.jpg', 'Welcome to the jungle', 'Guns and roses', '4.39', 'https://www.youtube.com/watch?v=o1tj2zJ2Wvg', 7),
(17, 'warrant.jpg', 'Cherry pie', 'Warrant', '4.39', 'https://www.youtube.com/watch?v=OjyZKfdwlng', 10),
(18, 'neworder.jpg', 'Blue monday', 'New order', '7.26', 'https://www.youtube.com/watch?v=FYH8DsU2WCk', 9),
(19, 'smiths.jpg', 'Please let me get what I want', 'The Smiths', '1.52', 'https://www.youtube.com/watch?v=w3qPMe_cCJk', 8),
(21, 'bounce.jpg', 'all about loving you', 'Bon Jovi', '3.44', 'https://www.youtube.com/watch?v=eb1oFIqBVzA', 7),
(22, 'eminem.jpg', 'Lose yourself', 'Eminem', '5.23', 'https://www.youtube.com/watch?v=_Yhyp-_hX2s', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` tinyint(3) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Heavy metal'),
(4, 'Hip hop'),
(5, 'Punk'),
(6, 'Grunge'),
(7, 'Glam rock'),
(8, 'alternativo'),
(9, 'Electro'),
(10, 'Glam metal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id_tema`),
  ADD KEY `genero_id` (`genero_id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_tema` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
