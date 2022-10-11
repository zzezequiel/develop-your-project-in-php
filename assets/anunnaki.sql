-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 15:41:13
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
  `location` varchar(60) NOT NULL,
  `description` mediumtext NOT NULL,
  `pre-build` varchar(75) NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id-product`, `title`, `location`, `description`, `pre-build`, `size`, `price`, `img`) VALUES
(3, 'Space art', 'Andromeda ', 'Space gallety art, where you can sell and buy NFTs and have fun!', 'Structure', 280, 5000, 'assets\\img\\a90032f1-1c4a-4860-80d0-ab2feb689b92.jpg'),
(4, 'Luxury building', 'Barcelona', 'Complete building for sell, it contains 20 floors with 40 office and a dining room for events.', 'Constucted', 302, 9000, 'assets\\img\\0ce72485-cc4b-4fa0-b15c-2c78e2d7d954.jpg'),
(5, 'villege', 'china', 'Small villege where you can walk and buy NFT, enjoy', 'Constructed', 125, 2500, 'assets\\img\\5d6312a5-204b-4abd-b603-8260dfdfb7d2.jpg'),
(6, 'Art galery', 'Bali', 'A tropical art galery that will make ypu spend money inside. ', 'Constructed', 75, 1200, 'assets\\img\\9dff0614-4567-4b15-a393-a1c85ead0479.jpg'),
(7, 'Land ', 'Brazil', 'Spacious Land, perfect to construct and sell it for more!', 'Not Constructed', 500, 6000, 'assets\\img\\9e9af59d-05a3-4bf3-8c0e-d8d0b6ce8950.jpg'),
(8, 'Rap Show', 'Madrid', 'The first rap show on metaverse!\r\nenter for free and lisen all your favourites artist', 'Constucted', 150, 2000, 'assets\\img\\live-shows.ea533806.jpg'),
(9, 'Wood fire', 'Foorest Tronçais', 'Have a dream camping in the metaverse with all your friends, and it\'s free!', 'Constructed', 600, 11000, 'assets\\img\\ada8e34f-1692-4520-a3d2-447ca2babe78.jpg'),
(10, 'Golf club', 'Cordoba Argentina', 'Play a competitive golf in the metaverse!\r\njoin now with friends', 'Constructed', 355, 4580, 'assets\\img\\afacda0f-aea1-41dc-b8af-22a3a0cb4f8c.jpg'),
(11, 'Labyrinth ', 'Antartic', 'Resolve this labyrinth, only the smarter\'s ones could get to the end!', 'Constucted', 112, 450, 'assets\\img\\b2c75276-67b7-4daa-85e5-c841e4611c59.jpg'),
(12, 'Luxury Art Galery', 'Milano', 'Buy exclusive NFT in the metaverse!', 'Constructed', 75, 6000, 'assets\\img\\ff647161-429d-4f37-8fbe-c8a1bf1ec5dd.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `roll` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='login';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `roll`) VALUES
(1, 'ezequielz@gmail.com', '123456', 'client'),
(3, 'bala@gmail.com', '456123', ''),
(4, 'marta@gmail.com', '789456', 'client'),
(5, 'alvaro@gmail.com', '2080', 'client'),
(6, 'admin@gmail.com', '000000', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usersdata`
--

CREATE TABLE `usersdata` (
  `first-name` varchar(20) NOT NULL,
  `last-name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(14) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
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
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usersdata`
--
ALTER TABLE `usersdata`
  ADD KEY `foreign key2` (`id-product`),
  ADD KEY `users-info_ibfk_1` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id-product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usersdata`
--
ALTER TABLE `usersdata`
  ADD CONSTRAINT `foreign key2` FOREIGN KEY (`id-product`) REFERENCES `products` (`id-product`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usersdata_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
