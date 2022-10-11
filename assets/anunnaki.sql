-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 20:31:58
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
  `id` int(11) NOT NULL,
  `id-user` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `pre-build` varchar(50) NOT NULL,
  `size` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `id-user`, `title`, `description`, `location`, `pre-build`, `size`, `price`, `img`) VALUES
(1, 1, 'Space art', 'Space gallety art, where you can sell and buy NFTs and have fun!', 'Andromeda ', 'Constucted', 280, 5000, 'assets\\img\\a90032f1-1c4a-4860-80d0-ab2feb689b92.jpg'),
(2, 2, 'Luxury building', 'Complete building for sell, it contains 20 floors with 40 office and a dining room for events.', 'Barcelona', 'Constucted', 302, 9000, 'assets\\img\\a90032f1-1c4a-4860-80d0-ab2feb689b92.jpg'),
(3, 1, 'Art galery', 'A tropical art galery that will make ypu spend money inside. ', 'Bali', 'Constructed', 75, 1200, 'assets\\img\\9dff0614-4567-4b15-a393-a1c85ead0479.jpg'),
(4, 1, 'Villegion', 'Small villege where you can walk and buy NFT, enjoy', 'China', 'Constructed', 125, 2500, 'assets\\img\\5d6312a5-204b-4abd-b603-8260dfdfb7d2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `first-name` varchar(50) NOT NULL,
  `last-name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(10) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `userdata`
--

INSERT INTO `userdata` (`id`, `first-name`, `last-name`, `age`, `phone`, `city`) VALUES
(1, 'Admin', '', 0, 0, ''),
(2, 'Alex', 'Balaguer', 30, 677147018, 'Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user-id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user-id`, `email`, `password`, `roll`) VALUES
(1, 'admin@admin.com', '000000', 'admin'),
(2, 'bala@gmail.com', '000000', 'client');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-user` (`id-user`);

--
-- Indices de la tabla `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD KEY `user-id` (`user-id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id-user`) REFERENCES `userdata` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user-id`) REFERENCES `userdata` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
