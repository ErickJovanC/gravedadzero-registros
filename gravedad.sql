-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-04-2019 a las 21:19:17
-- Versión del servidor: 10.3.13-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gravedad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `sucursal` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `cajainicial` decimal(5,0) NOT NULL,
  `venta` decimal(6,0) NOT NULL,
  `internet` decimal(6,0) NOT NULL,
  `recargas` int(4) NOT NULL,
  `registros` int(3) NOT NULL,
  `gastos` decimal(6,0) NOT NULL,
  `concepto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cajafinal` decimal(5,0) NOT NULL,
  `entregado` decimal(6,0) NOT NULL,
  `diferencia` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `fecha`, `sucursal`, `cajainicial`, `venta`, `internet`, `recargas`, `registros`, `gastos`, `concepto`, `cajafinal`, `entregado`, `diferencia`) VALUES
(4, '2019-01-02', 'Centro', 361, 133, 138, 420, 10, 0, '', 475, 600, 19),
(6, '2019-01-03', 'Centro', 475, 174, 70, 140, 4, 0, '', 505, 400, 79),
(7, '2019-01-04', 'Centro', 505, 127, 111, 300, 5, 0, '', 523, 550, 25),
(8, '2019-01-05', 'Centro', 0, 0, 50, 290, 5, 0, '', 0, 0, 0),
(9, '2019-01-06', 'Centro', 1050, 158, 98, 540, 8, 20, 'comida de  dulce', 881, 1100, 147),
(10, '2019-01-07', 'Centro', 881, 93, 103, 960, 14, 10, 'comida de dulce', 728, 1400, 88),
(11, '2019-01-08', 'Centro', 728, 468, 314, 530, 10, 20, 'azucar', 731, 1600, 300),
(12, '2019-01-09', 'Centro', 731, 98, 198, 390, 9, 0, '', 620, 1000, 195),
(13, '0019-01-10', 'Centro', 620, 210, 151, 190, 4, 47, 'comida,guantes y rollo', 754, 500, 127),
(14, '2019-01-11', 'Centro', 753, 73, 161, 360, 8, 0, '', 440, 900, -15),
(15, '2019-01-12', 'Centro', 440, 228, 147, 240, 5, 350, 'pago de laura', 463, 500, 154),
(16, '2019-01-13', 'Centro', 463, 82, 139, 520, 9, 50, 'andrea', 456, 700, -2),
(17, '2019-01-14', 'Centro', 461, 243, 172, 350, 5, 50, 'comida,Internet caja ', 613, 770, 202),
(18, '2019-01-15', 'Centro', 613, 264, 76, 700, 11, 10, ' internet', 667, 1000, 13),
(19, '2019-01-16', 'Centro', 667, 141, 177, 550, 8, 0, '', 700, 900, 58),
(20, '2019-01-17', 'Centro', 700, 4, 263, 290, 7, 394, 'préstamo a don berna ', 667, 350, 149),
(21, '0019-01-18', 'Centro', 668, 91, 162, 410, 12, 0, '', 367, 1000, 29),
(22, '2019-01-19', 'Centro', 367, 49, 146, 550, 11, 0, '', 619, 600, 96),
(23, '2019-01-20', 'Centro', 619, 105, 183, 600, 8, 100, 'pago de dulce', 643, 800, 29),
(24, '2019-01-21', 'Centro', 643, 154, 167, 220, 5, 0, '', 570, 671, 52),
(25, '2019-01-22', 'Centro', 571, 93, 169, 650, 147, 70, 'fabuloso,rollo, bolsa de basura', 608, 900, 82),
(26, '2019-01-23', 'Centro', 608, 207, 71, 470, 12, 0, '', 583, 850, 66),
(27, '0019-01-24', 'Centro', 587, 197, 106, 720, 13, 122, 'gasto de eric, bolsa de basura,tenedor', 574, 970, 33),
(28, '2019-01-25', 'Centro', 574, 248, 160, 140, 3, 2, 'internet', 513, 605, 5),
(29, '2019-01-26', 'Centro', 512, 7, 113, 580, 10, 102, 'pago dulce, internet ', 522, 600, 2),
(30, '2019-01-27', 'Centro', 522, 38, 154, 750, 10, 20, 'comida de dulce', 467, 1000, 14),
(31, '2019-01-28', 'Centro', 467, 119, 233, 660, 12, 0, '', 237, 1240, -13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `email`, `tipo`, `status`) VALUES
(1, 'Erick', '$2y$10$edvd3ZgdefmS9LnVt5nhT.pmefxwU1NnhhpfOPIkxRh2XadS4mbHC', '', 'admin', 1),
(8, 'Carlos', '$2y$10$G9NQvc29uq0b.ho66AgGuOqF6GFsLHqDNPA7LsxhWY60SmnKrvHuC', 'm@m', 'user', 0),
(9, 'Javier', '$2y$10$boSLWe27sqa1DIMMY/d5c.1yvAcnQ7sqAve3h16wXO5Mr5lXkLlYS', 'q@q', 'user', 1),
(10, 'laura andrea', '$2y$10$TaOh1TY.qg1wg9wAx/EnjO3.8K0BatFRjeBwIXNO8JVPRTsxkUyxq', 'lilia_19931@outlook.com', 'user', 1),
(11, 'Pepe', '$2y$10$bBXotn1W9BM53CEfUoHGQOt16cGEVmfXOs9K9itQahRX5OqOZGN9G', 'm@m', 'user', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
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
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
