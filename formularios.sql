-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2022 a las 18:40:27
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
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularios`
--

CREATE TABLE `formularios` (
  `id` int(11) NOT NULL,
  `problema` varchar(100) NOT NULL,
  `fecha` varchar(60) NOT NULL,
  `hora` varchar(60) NOT NULL,
  `escuela` varchar(90) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formularios`
--

INSERT INTO `formularios` (`id`, `problema`, `fecha`, `hora`, `escuela`, `estado`) VALUES
(1, 'a', '', '', '', 'pendiente'),
(2, 'a', '10/09/22', '', '', 'pendiente'),
(3, 'a', '10/09/22', '20:29:46', '', 'pendiente'),
(4, 'a', '10/09/22', '20:33:25', '', 'pendiente'),
(5, 'a', '10/09/22', '20:34:17', '', 'pendiente'),
(6, 'a', '10/09/22', '21:07:37', '', 'pendiente'),
(7, 'Hola', '10/09/22', '21:10:26', '', 'pendiente'),
(8, '1', '10/09/22', '21:11:25', '', 'pendiente'),
(9, 'asdasd', '10/09/22', '21:40:27', '12345', 'pendiente'),
(10, 'me duele la pija', '10/09/22', '21:43:03', '12345', 'pendiente'),
(11, 'Ayuda me pegue', '10/09/22', '23:39:02', '12345', 'pendiente'),
(12, '\"js:alert', '10/09/22', '23:56:43', '12345', 'pendiente'),
(13, 'javascript:alert(\"hello world\");', '10/09/22', '23:56:54', '12345', 'pendiente'),
(14, '\"javascript:alert(\"hello world\");', '10/09/22', '23:56:59', '12345', 'pendiente'),
(15, 'adasdasda', '11/09/22', '04:22:42', '12345', 'pendiente'),
(16, 'me duele la pija', '11/09/22', '05:02:30', '12345', 'pendiente'),
(17, 'php me da miedo', '13/09/22', '02:08:59', '54321', 'pendiente'),
(18, 'Pude solucionarlo!', '13/09/22', '02:27:53', '12345', 'pendiente'),
(19, 'dato123', '13/09/22', '02:33:12', '12345', 'pendiente'),
(20, 'no lo se ', '14/09/22', '02:10:28', '12345', 'pendiente'),
(21, 'que se yo', '14/09/22', '02:40:01', '12345', 'pendiente'),
(22, 'le digo hola y me dice goodbye', '16/09/22', '01:11:15', '12345', 'pendiente'),
(23, 'gdfgdfgdf', '17/09/22', '16:45:29', '12345', 'pendiente'),
(24, 'AYUDA PORFAVOR AS DASOID A', '19/09/22', '17:01:20', '12345', 'pendiente'),
(25, 'bueno', '19/09/22', '17:06:04', '12345', 'visto'),
(26, '', '', '', '', 'pendiente'),
(27, '', '', '', '', 'visto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formularios`
--
ALTER TABLE `formularios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
