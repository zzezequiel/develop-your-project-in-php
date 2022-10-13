-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 10:16:01
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
  `id_user` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(50) NOT NULL,
  `pre_build` varchar(50) NOT NULL,
  `size` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `id_user`, `title`, `description`, `location`, `pre_build`, `size`, `price`, `img`) VALUES
(1, 1, 'Space art', 'Space gallety art, where you can sell and buy NFTs and have fun!', 'Andromeda ', 'Constucted', 280, 5000, 'assets\\img\\a90032f1-1c4a-4860-80d0-ab2feb689b92.jpg'),
(2, 2, 'HELIX Founder Pass', 'The Founder Pass  is the best way to take full advantage of one of the most immersive Metaverse experiences on the Blockchain. The Founder Pass is 5000 NFTs that grant 3 months early access to play HELIX. Founder Pass holders will be entitled to exclusive airdrops, free land, exclusive designer clothes, supercars, and much more.', 'Helluland', 'Constucted', 302, 9000, 'assets\\img\\ciudad-virtual-gettyimages-1135935658.webp'),
(3, 1, 'Sandbox\'s LANDs', 'The Sandbox is a community-driven platform where creators can monetize voxel assets and gaming experiences on the blockchain. The Sandbox metaverse comprises a map made up of 166,464 LANDS. LAND owners can host contests and events, stake SAND to earn and customize assets, monetize assets and experiences, vote in the metaverse governance, play games that you or others create, and more! Trade the collection and keep your eyes peeled for future drops.', 'Markland', 'Constructed', 75, 1200, 'assets\\img\\Metaverse-Featured.jpg'),
(4, 1, 'Villegion', 'A partnership between Probably Nothing and Warner Records, a new type of record label aimed at redefining IP ownership in the music industry, utilizing Web3 technology. This is the first time that a traditional major label joins forces with a leading NFT culture brand to build an ecosystem that enables artists to create freely using blockchain technology.', 'Nalesh', 'Constructed', 125, 2500, 'assets\\img\\5d6312a5-204b-4abd-b603-8260dfdfb7d2.jpg'),
(5, 5, 'MutantApeYachtClub', 'The MUTANT APE YACHT CLUB is a collection of up to 20,000 Mutant Apes that can only be created by exposing an existing Bored Ape to a vial of MUTANT SERUM or by minting a Mutant Ape in the public sale. ', 'Titan', 'Structure', 300, 7500, 'assets\\img\\ciudad-metaverso.jpeg'),
(6, 3, 'YuGiYn', 'Set inside the skyscraper called “¥u-Gi-¥n” located in city of Shibuya in the near future, ¥u-Gi-¥n is a virtual world building project that provides entertainment such as games, manga, anime, fashion and music. There are 4 districts in the virtual world and players can go back and forth between different districts and interact with each other. We are building a digital economic zone through TOKYO CULTURE.', 'Orion', 'Constucted', 870, 21000, 'assets\\img\\vista-azotea-metaverso-city-3d-render_84831-468.webp'),
(7, 4, 'Otherdeed', 'Otherdeed is the key to claiming land in Otherside. Each have a unique blend of environment and sediment — some with resources, some home to powerful artifacts. And on a very few, a Koda roams.', 'Vinland', 'Constucted', 100, 4500, 'assets\\img\\AdobeStock_488878875-scaled.jpeg'),
(8, 1, 'Impostors Genesis Aliens', 'The Impostors Genesis Aliens represent the foundational NFT collection of the Impostors ecosystem, and serve as passes the Impostors Genesis Season which will play host to seven unique events. Only 10,420 of these intergalactic creatures will ever exist! Each Genesis Character has a combination of over 200 traits and will provide stat-based advantages in various metaverse game modes.', 'Helluland', 'Structure', 230, 1000, 'assets\\img\\iStock-1382275104-e1658241751265.jpg'),
(9, 3, 'Cyber Factory 2', 'Cyber is a metaverse like no other. In under 5 clicks, anyone can create a digital experience with their NFTs. \r\n\r\nHolding an item from this collection allows you to use it as a 3D exhibition space for your digital assets oncyber.io/create', 'Jirayder', 'Structure', 210, 2400, 'assets\\img\\44.webp'),
(10, 2, 'Potatoz', 'The Potatoz is a collection of 9,999 utility-enabled PFPs. Each Potatoz is your entry ticket into the great Memeland ecosystem. They make for a great side dish, but some may feel a calling to become the main course. Rumour has it they are secretly related to the Memelist, $MEME, MVP, and more! ', 'Faroang', 'Constucted', 80, 300, 'assets\\img\\33.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(10) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `userdata`
--

INSERT INTO `userdata` (`id`, `first_name`, `last_name`, `age`, `phone`, `city`) VALUES
(1, 'Admin', '', 0, 0, ''),
(2, 'Alex', 'Balaguer', 30, 677147018, 'Barcelona'),
(3, 'Ezequiel', 'Zvirgzdins', 19, 689982172, 'Barcelona'),
(4, 'Marta', 'Punset', 34, 696969696, 'Barcelona'),
(5, 'Alvaro', 'Alonso', 27, 661723881, 'Granada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `roll`) VALUES
(1, 'admin@admin.com', '000000', 'admin'),
(2, 'bala@gmail.com', '000000', 'client'),
(5, 'alvaro@gmail.com', '000000', 'client'),
(3, 'zeta@gmail.com', '000000', 'client'),
(4, 'marta@gmail.com', '00000', 'client');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-user` (`id_user`);

--
-- Indices de la tabla `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD KEY `user-id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userdata` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userdata` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
