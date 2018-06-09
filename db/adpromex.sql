-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2018 a las 10:52:30
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
-- Estructura de tabla para la tabla `cusCustomers`
--

CREATE TABLE `cusCustomers` (
  `cusCustomers_Id` int(11) NOT NULL,
  `sysIdioms_Id` int(11) NOT NULL,
  `cusCustomers_Name` varchar(50) NOT NULL,
  `cusCustomers_Address` varchar(50) NOT NULL,
  `cusCustomers_Phone` varchar(50) NOT NULL,
  `cusCustomers_Email` varchar(50) NOT NULL,
  `cusCustomers_RFC` varchar(50) NOT NULL,
  `cusCustomers_FacAddress` varchar(50) NOT NULL,
  `cusCustomers_FacEmail` varchar(50) NOT NULL,
  `cusCustomers_FacPC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cusMessages`
--

CREATE TABLE `cusMessages` (
  `cusMessages_Id` int(11) NOT NULL,
  `sysUsers_Id` int(11) NOT NULL,
  `cusCustomers_Id` int(11) NOT NULL,
  `cusMessagesSta_Code` varchar(50) NOT NULL,
  `cusMessages_Messages` varchar(50) NOT NULL,
  `cusMessages_Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cusMessagesSta`
--

CREATE TABLE `cusMessagesSta` (
  `cusMessagesSta_Code` int(50) NOT NULL,
  `cusMessagesSta_Name` int(50) NOT NULL,
  `sysIdioms_Id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacCategoriesDescriptions`
--

CREATE TABLE `pacCategoriesDescriptions` (
  `pacCategories_id` int(11) NOT NULL,
  `sysIdioms_Id` int(11) NOT NULL,
  `pacCategoriesDescriptions_Name` varchar(50) NOT NULL,
  `pacCategoriesDescriptions_NameSEO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacCategoryes`
--

CREATE TABLE `pacCategoryes` (
  `pacCategoryes_Id` int(1) NOT NULL,
  `pacCategoryes_Code` varchar(50) NOT NULL,
  `pacCategoryes_IsPublic` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacPackages`
--

CREATE TABLE `pacPackages` (
  `pacPackages_Id` int(11) NOT NULL,
  `pacCategories_Id` int(1) NOT NULL,
  `pacPackages_Code` varchar(50) NOT NULL,
  `pacPackages_Price` float(10,2) NOT NULL,
  `pacPackages_Img` varchar(50) NOT NULL,
  `pacPackages_Video` varchar(50) NOT NULL,
  `pacPackages_IsNew` int(1) NOT NULL,
  `pacPackages_ImgNew` varchar(50) NOT NULL,
  `pacPackages_IsBanner` int(1) NOT NULL,
  `pacPackages_ImgBanner` varchar(50) NOT NULL,
  `pacPackages_IsPublic` int(1) NOT NULL,
  `IsDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacPackagesDescriptions`
--

CREATE TABLE `pacPackagesDescriptions` (
  `pacPackages_Id` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacSubscriptions`
--

CREATE TABLE `pacSubscriptions` (
  `pacSubscriptions_Code` varchar(50) NOT NULL,
  `cusCustomers_Id` int(11) NOT NULL,
  `pacPackages_Id` int(11) NOT NULL,
  `pacSubscriptionsSta_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacSubscriptionsSta`
--

CREATE TABLE `pacSubscriptionsSta` (
  `pacSubscriptionsSta_Code` varchar(50) NOT NULL,
  `pacSubscriptionsSta_Name` varchar(50) NOT NULL,
  `sysIdioms_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payMethods`
--

CREATE TABLE `payMethods` (
  `payMethods_Id` int(11) NOT NULL,
  `payMethods_Name` varchar(50) NOT NULL,
  `sysIdioms_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payMethodsDescriptions`
--

CREATE TABLE `payMethodsDescriptions` (
  `payMethods_Id` int(11) NOT NULL,
  `payMethodsDescriptions_Code` varchar(50) NOT NULL,
  `payMethodsDescriptions_Value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payPayments`
--

CREATE TABLE `payPayments` (
  `payPayments_Id` int(11) NOT NULL,
  `pacSubscriptions_Id` int(11) NOT NULL,
  `payMethods_Id` int(11) NOT NULL,
  `cusCustomers_Id` int(11) NOT NULL,
  `payPaymentsSta_Code` varchar(50) NOT NULL,
  `payPayments_DateStart` datetime NOT NULL,
  `payPayments_DateEnd` datetime NOT NULL,
  `payPayments_DatePay` datetime NOT NULL,
  `pacPackages_Price` decimal(10,2) NOT NULL,
  `payPayments_Pay` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payPaymentsSta`
--

CREATE TABLE `payPaymentsSta` (
  `payPaymentsSta_Code` varchar(50) NOT NULL,
  `payPaymentsSta_Name` varchar(50) NOT NULL,
  `sysIdioms_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sysEnterprise`
--

CREATE TABLE `sysEnterprise` (
  `sysIdioms_Id` int(11) NOT NULL,
  `sysEnterprise_Name` varchar(50) NOT NULL,
  `sysEnterprise_Address` varchar(50) NOT NULL,
  `sysEnterprise_Phone` varchar(50) NOT NULL,
  `sysEnterprise_Email` varchar(50) NOT NULL,
  `sysEnterprise_Schedules` varchar(50) NOT NULL,
  `sysEnterprise_Logo` varchar(50) NOT NULL,
  `sysEnterprise_Slogan` varchar(50) NOT NULL,
  `sysEnterprise_PaymentMethods` varchar(50) NOT NULL,
  `sysEnterprise_PaymentMethodsAudio` varchar(50) NOT NULL,
  `sysEnterprise_Tips` varchar(50) NOT NULL,
  `sysEnterprise_TipsAudio` varchar(50) NOT NULL,
  `sysEnterprise_Questions` varchar(50) NOT NULL,
  `sysEnterprise_QuestionsAudio` varchar(50) NOT NULL,
  `sysEnterprise_AboutUs` varchar(50) NOT NULL,
  `sysEnterprise_AboutUsAudio` varchar(50) NOT NULL,
  `sysEnterprise_NoticePrivacy` varchar(50) NOT NULL,
  `sysEnterprise_NoticePrivacyAudio` varchar(50) NOT NULL,
  `sysEnterprise_MissionVision` varchar(50) NOT NULL,
  `sysEnterprise_MissionVisionAudio` varchar(50) NOT NULL,
  `sysEnterprise_History` varchar(50) NOT NULL,
  `sysEnterprise_HistoryAudio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sysEnterprise`
--

INSERT INTO `sysEnterprise` (`sysIdioms_Id`, `sysEnterprise_Name`, `sysEnterprise_Address`, `sysEnterprise_Phone`, `sysEnterprise_Email`, `sysEnterprise_Schedules`, `sysEnterprise_Logo`, `sysEnterprise_Slogan`, `sysEnterprise_PaymentMethods`, `sysEnterprise_PaymentMethodsAudio`, `sysEnterprise_Tips`, `sysEnterprise_TipsAudio`, `sysEnterprise_Questions`, `sysEnterprise_QuestionsAudio`, `sysEnterprise_AboutUs`, `sysEnterprise_AboutUsAudio`, `sysEnterprise_NoticePrivacy`, `sysEnterprise_NoticePrivacyAudio`, `sysEnterprise_MissionVision`, `sysEnterprise_MissionVisionAudio`, `sysEnterprise_History`, `sysEnterprise_HistoryAudio`) VALUES
(1, 'adpromex/es', 'c 25 # 457 entre uno y otro/es', '99999999', 'email@email.com', '9:00am a 9:00pm', './img/logo.png', 'para un mejor futuro/es', 'metodos de pago/en', './audio/pagos.mp3', 'tips empresas/es', '', 'pregutas frecuentes/es', '', 'nosotros/ es ', '', 'privasidad / es', '', 'mision vision /es', '', 'historia / es', ''),
(2, 'adpromex', 'c 25 # 457 entre uno y otro/en', '88888888', 'email@email.com', '8:am a 2:pm', 'logo/en', '', 'metodoas de pagos es/en', '', 'tips/en', '', 'preguntas/en', '', 'nosotros/en', '', 'privacidad /en', '', 'mision vision /en', '', 'historia /en', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sysIdioms`
--

CREATE TABLE `sysIdioms` (
  `sysIdioms_Id` int(11) NOT NULL,
  `sysIdioms_Name` varchar(50) NOT NULL,
  `sysIdioms_Code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sysIdioms`
--

INSERT INTO `sysIdioms` (`sysIdioms_Id`, `sysIdioms_Name`, `sysIdioms_Code`) VALUES
(1, 'Español', 'es'),
(2, 'ingles', 'en');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sysProfiles`
--

CREATE TABLE `sysProfiles` (
  `sysProfiles_Id` int(11) NOT NULL,
  `sysProfiles_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sysUsers`
--

CREATE TABLE `sysUsers` (
  `sysUsers_Id` int(11) NOT NULL,
  `sysProfiles_Id` int(11) NOT NULL,
  `sysUsers_Users` varchar(50) NOT NULL,
  `sysUsers_Password` varchar(50) NOT NULL,
  `sysUsers_Name` varchar(50) NOT NULL,
  `sysUsers_Descriptions` text NOT NULL,
  `sysUsers_Email` varchar(50) NOT NULL,
  `sysUsers_Phone` varchar(50) NOT NULL,
  `sysUsers_IsActive` int(1) NOT NULL,
  `sysUsers_OnLine` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cusCustomers`
--
ALTER TABLE `cusCustomers`
  ADD PRIMARY KEY (`cusCustomers_Id`);

--
-- Indices de la tabla `cusMessages`
--
ALTER TABLE `cusMessages`
  ADD PRIMARY KEY (`cusMessages_Id`);

--
-- Indices de la tabla `pacCategoryes`
--
ALTER TABLE `pacCategoryes`
  ADD PRIMARY KEY (`pacCategoryes_Id`);

--
-- Indices de la tabla `pacPackages`
--
ALTER TABLE `pacPackages`
  ADD PRIMARY KEY (`pacPackages_Id`);

--
-- Indices de la tabla `pacPackagesDescriptions`
--
ALTER TABLE `pacPackagesDescriptions`
  ADD PRIMARY KEY (`pacPackages_Id`);

--
-- Indices de la tabla `payMethods`
--
ALTER TABLE `payMethods`
  ADD PRIMARY KEY (`payMethods_Id`),
  ADD KEY `payMethods_Id` (`payMethods_Id`);

--
-- Indices de la tabla `payPayments`
--
ALTER TABLE `payPayments`
  ADD PRIMARY KEY (`payPayments_Id`);

--
-- Indices de la tabla `sysIdioms`
--
ALTER TABLE `sysIdioms`
  ADD PRIMARY KEY (`sysIdioms_Id`);

--
-- Indices de la tabla `sysProfiles`
--
ALTER TABLE `sysProfiles`
  ADD PRIMARY KEY (`sysProfiles_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cusCustomers`
--
ALTER TABLE `cusCustomers`
  MODIFY `cusCustomers_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cusMessages`
--
ALTER TABLE `cusMessages`
  MODIFY `cusMessages_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pacCategoryes`
--
ALTER TABLE `pacCategoryes`
  MODIFY `pacCategoryes_Id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pacPackages`
--
ALTER TABLE `pacPackages`
  MODIFY `pacPackages_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pacPackagesDescriptions`
--
ALTER TABLE `pacPackagesDescriptions`
  MODIFY `pacPackages_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `payPayments`
--
ALTER TABLE `payPayments`
  MODIFY `payPayments_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sysIdioms`
--
ALTER TABLE `sysIdioms`
  MODIFY `sysIdioms_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sysProfiles`
--
ALTER TABLE `sysProfiles`
  MODIFY `sysProfiles_Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
