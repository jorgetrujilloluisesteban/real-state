-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2018 a las 15:00:58
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `real-state`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `descripcion` text NOT NULL,
  `person-in-charge` text NOT NULL,
  `price` int(11) NOT NULL,
  `telephone` text NOT NULL,
  `photo1` varchar(30) NOT NULL,
  `photo2` varchar(30) NOT NULL,
  `logo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `property`
--

INSERT INTO `property` (`id`, `name`, `address`, `descripcion`, `person-in-charge`, `price`, `telephone`, `photo1`, `photo2`, `logo`) VALUES
(1, 'Studio flat', 'Ferry Street, Bristol', 'Furnished studio apartment close to the City Centre with private balcony. This pleasant studio provides a good sized living/sleeping area with built-in cupboards providing plenty of storage. The kitchen contains a range of wall and base units ', 'by Sarah Luis Property Consultants, Bristol', 700, '0117 407 0111', '1-1.jpg', '1-2.jpg', ''),
(2, '3 bedroom flat', 'Ernest Barker Close-BS5', 'Let`s Rent Are Pleased To Offer This Lovely 3 Bedroom Flat, Situated On Ernest Barker Close , BARTON HILL, This Flat Is Fully Furnished With Bedroom Furniture and Beds, Chest Of Drawers & Wardrobes, This Flat Comprises of a Open Plan Kitchen & Lounge Area, X3 Good Sized Double Bedroom, Gas Centra...\r\n', 'Reduced today by Lets Rent Bristol Ltd, Bristol', 725, '0117 407 0022\r\n', '2-1.jpg', '2-2.jpg', ''),
(3, '2 bedroom apartment', 'Apollo Apartments, City Centre, Bristol', 'Gough Quarters are proud to present this fantastic two bedroom luxury apartment in central Bristol on Baldwin street. Located with a first-class view over the bustling street below but with the highest quality sound proof windows. This apartment is front facing and therefore has one of the (con...\r\n', 'Reduced today by Gough Quarters, Clifton', 1200, '0117 407 2127', '3-1.jpg', '3-2.jpg', ''),
(4, '1 bedroom house share', 'Station Road, Filton,', 'FURNISHED DOUBLE ROOM AVAILABLE FOR A PROFESSIONAL in homely terraced house. Situated on the first floor, at the front of the property. For sole occupancy only - rent includes, GAS, WATER, COUNCIL TAX & ELECTRIC. Accommodation comprises of a FITTED KITCHEN which has a WASHING MACHINE FRIDGE/FREE...\r\n', 'Added yesterday by The Property Outlet, North Bristol - Lettings & Propert', 445, '0117 407 0147', '4-1.jpg', '4-2.jpg', ''),
(5, '1 bedroom town house', 'Filton Avenue, Filton', 'Single bedroom available in a four bedroom shared house. Furnished. Fully fitted kitchen. Lounge with additional dining room. Large garden and garage. Suitable for a single professional. .... Agency fee: 42% of 1 months rent = £97.00 inc VAT\r\n', 'Added yesterday by City Property Lets, Bristol', 230, '0117 407 2148', '5-1.jpg', '5-2.jpg', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
