-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2018 a las 13:35:32
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adpromex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacPackagesDescriptions`
--

CREATE TABLE `pacPackagesDescriptions` (
  `pacPackagesDescriptions_Id` int(11) NOT NULL DEFAULT '0',
  `pacPackages_Id` int(11) NOT NULL DEFAULT '0',
  `sysIdioms_Id` int(11) NOT NULL,
  `pacPackagesDescriptions_Name` varchar(50) NOT NULL,
  `pacPackagesDescriptions_NameSEO` varchar(50) NOT NULL,
  `pacPackagesDescriptions_ImgSEO` varchar(50) NOT NULL,
  `pacPackagesDescriptions_DescriptionsSEO` text NOT NULL,
  `pacPackagesDescriptions_Descriptions` text NOT NULL,
  `pacPackagesDescriptions_VideoSEO` varchar(50) NOT NULL,
  `pacPackagesDescriptions_ImgNewSEO` varchar(50) NOT NULL,
  `pacPackagesDescriptions_ImgBannerSEO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacPackagesDescriptions`
--
ALTER TABLE `pacPackagesDescriptions`
  ADD PRIMARY KEY (`pacPackagesDescriptions_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
