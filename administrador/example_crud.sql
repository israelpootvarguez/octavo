-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2017 a las 21:08:15
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `example_crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bulletins`
--

CREATE TABLE `bulletins` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `image_movil` text NOT NULL,
  `image_success` text NOT NULL,
  `message_error` varchar(255) NOT NULL,
  `message_existence` varchar(255) NOT NULL,
  `message_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bulletins`
--

INSERT INTO `bulletins` (`id`, `image`, `isActive`, `image_movil`, `image_success`, `message_error`, `message_existence`, `message_content`) VALUES
(1, './files/bulletins/20170218054433.jpg', 1, './files/bulletins/20170218054437.jpg', './files/bulletins/20170218054441.jpg', 'error3', 'existe3', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`) VALUES
(1, 'Español', 'es'),
(2, 'English', 'en');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `type`, `name`, `value`) VALUES
(3, '', 'name', '1a'),
(4, '', 'description', '2a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `isExternal` tinyint(1) NOT NULL,
  `sort` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `link`, `isExternal`, `sort`, `isActive`) VALUES
(2, 'http://google.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders_languages`
--

CREATE TABLE `sliders_languages` (
  `id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `slider_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders_languages`
--

INSERT INTO `sliders_languages` (`id`, `language_id`, `slider_id`, `title`, `image`) VALUES
(3, 1, 2, 'es2', './files/sliders/20170218084524.jpg'),
(4, 2, 2, 'en2', './files/sliders/20170218084518.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `password`) VALUES
(1, 'Administrador', 'admin', 'd6383d35a8c11149e13c1729dcfa072b'),
(2, 'soporte', 'isra', 'd6383d35a8c11149e13c1729dcfa072b'),
(3, 'usuario1', 'a', 'd6383d35a8c11149e13c1729dcfa072b'),
(4, 'usuario2', 'b', 'd6383d35a8c11149e13c1729dcfa072b'),
(5, 'usuario3', 'c', 'd6383d35a8c11149e13c1729dcfa072b'),
(6, 'usuario4', 'd', 'd6383d35a8c11149e13c1729dcfa072b'),
(7, 'usuario5', 'e', 'd6383d35a8c11149e13c1729dcfa072b'),
(8, 'usuario6', 'f', 'd6383d35a8c11149e13c1729dcfa072b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bulletins`
--
ALTER TABLE `bulletins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders_languages`
--
ALTER TABLE `sliders_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bulletins`
--
ALTER TABLE `bulletins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sliders_languages`
--
ALTER TABLE `sliders_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
