-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2018 a las 23:48:10
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratorio_18`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `identificacion`, `nombres`, `apellidos`, `especialidad`, `telefono`, `correo`) VALUES
(1, '78976543', 'Carlos', 'Camacho', 'Pediatra', '32190786', 'carlos@hotmail.com'),
(2, '7689654', 'Mauricio', 'Munoz', 'Ortopedista', '310890432', 'mauricio@gmail.com'),
(3, '78976542', 'Felipe', 'Cardenas', 'Neurocirujia', '31530987', 'felipe@gmail.com'),
(4, '8976543', 'Pedro', 'Martinez', 'Pediatra', '3118907654', 'pedro@gmail.com'),
(5, '789067543', 'camilo', 'Galindez', 'Urologo', '325908765', 'camilo@gmail.com'),
(6, '17890654', 'Fernando', 'Jimenez', 'Ginecologo', '305567890', 'fernando@gmail.com'),
(7, '1098654', 'David', 'PeÃ±a', 'Pediatra', '309876534', 'david@hotmail.com'),
(8, '10786542', 'Fredy', 'Canisalez', 'Odontologo', '3006785410', 'fredy@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fehaNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `identificacion`, `nombres`, `apellidos`, `fehaNacimiento`) VALUES
(1, '7734567', 'Federico', 'Ladino', '1989-03-06'),
(2, '76569012', 'Jesus', 'Hernandez', '0200-03-06'),
(3, '10895672', 'Jheny', 'Aguilar', '2004-03-06'),
(4, '56789531', 'Tatiana', 'Mendez', '1995-03-06'),
(5, '77432189', 'Alex', 'Giron', '2008-03-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `correo`, `usuario`, `clave`, `telefono`) VALUES
(1, 'ilder', 'Aguilar', 'ilder@gmail.com', 'ilder', '1234', '3216549087'),
(2, 'Andres', 'Marcos', 'andres@gmail.com', 'andres', '1234', '321890456'),
(3, 'Jasmin', 'Ladino', 'jasmin@hotmail.com', 'jasmin', '1234', '321890546'),
(4, 'Sergio', 'Jimenez', 'sergio@hotmail.com', 'sergio', '1234', '30978654'),
(5, 'Daniela', 'Linares', 'daniela@gmail.com', 'daniela', '1234', '321890765'),
(6, 'Mariano', 'Perez', 'mariano@gmail.com', 'mariano', '1234', '34567890');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
