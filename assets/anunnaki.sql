-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2022 a las 11:43:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anunnaki`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id-product` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `owned-by` varchar(50) NOT NULL,
  `location` varchar(60) NOT NULL,
  `description` mediumtext NOT NULL,
  `pre-builtd` varchar(75) NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user-login`
--

CREATE TABLE `user-login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='login';

--
-- Volcado de datos para la tabla `user-login`
--

INSERT INTO `user-login` (`id`, `email`, `password`) VALUES
(1, 'ezequielz@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users-info`
--

CREATE TABLE `users-info` (
  `first-name` varchar(20) NOT NULL,
  `last-name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(14) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `rol` varchar(10) NOT NULL,
  `id-product` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='private users data';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id-product`);

--
-- Indices de la tabla `user-login`
--
ALTER TABLE `user-login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users-info`
--
ALTER TABLE `users-info`
  ADD KEY `foreign key2` (`id-product`),
  ADD KEY `users-info_ibfk_1` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id-product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user-login`
--
ALTER TABLE `user-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users-info`
--
ALTER TABLE `users-info`
  ADD CONSTRAINT `foreign key2` FOREIGN KEY (`id-product`) REFERENCES `products` (`id-product`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users-info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user-login` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
