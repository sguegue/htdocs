-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2019 a las 07:26:05
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd23`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestroarticulos`
--

CREATE TABLE `maestroarticulos` (
  `codArt` varchar(10) NOT NULL,
  `descrip` varchar(30) NOT NULL,
  `unidadMedida` varchar(3) NOT NULL,
  `precioUnit` int(3) NOT NULL,
  `saldo` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maestroarticulos`
--

INSERT INTO `maestroarticulos` (`codArt`, `descrip`, `unidadMedida`, `precioUnit`, `saldo`) VALUES
('1', 'Coca-Cola', 'lt', 50, 2),
('4', 'Leche', 'lt', 25, 5),
('10', 'Jabon', 'gr', 12, 3),
('28', 'Fideos', 'kg', 23, 6),
('52', 'Pan', 'kg', 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientodestock`
--

CREATE TABLE `movimientodestock` (
  `idRemito` int(3) NOT NULL,
  `codArt` varchar(10) NOT NULL,
  `tipoMov` varchar(3) NOT NULL,
  `cantidadUnidades` int(3) NOT NULL,
  `PrecioUnitario` int(3) NOT NULL,
  `Total` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `movimientodestock`
--

INSERT INTO `movimientodestock` (`idRemito`, `codArt`, `tipoMov`, `cantidadUnidades`, `PrecioUnitario`, `Total`) VALUES
(1, '1', 'Ent', 2, 12, 24),
(2, '4', 'Sal', 5, 23, 115),
(3, '10', 'Sal', 25, 9, 225),
(4, '28', 'Ent', 300, 10, 3000),
(5, '1', 'Sal', 5, 10, 50),
(6, '28', 'Ent', 2, 10, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `NOMBRE` varchar(20) NOT NULL,
  `APELLIDO` varchar(20) NOT NULL,
  `LEGAJO` int(11) NOT NULL,
  `MAIL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `planta`
--

INSERT INTO `planta` (`NOMBRE`, `APELLIDO`, `LEGAJO`, `MAIL`) VALUES
('Santiago', 'Gongora', 1337, 'sgongora@sgg.com'),
('Gian', 'Marco', 7074, 'gmarco@sgg.com'),
('Julia', 'Mendez', 7234, 'jmendez@sgg.com'),
('Waly', 'Torres', 45678, 'wtorres@sgg.com'),
('Leonardo', 'Perez', 89674, 'lperez@sgg.com'),
('Diego', 'Scippo', 435195, 'dscippo@sgg.com'),
('Agustin', 'Lozano', 895000, 'alozano@sgg.com'),
('Andrea', 'Vermu', 951354, 'avermu@sgg.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
(1, 'Botella', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'santi', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `maestroarticulos`
--
ALTER TABLE `maestroarticulos`
  ADD PRIMARY KEY (`codArt`);

--
-- Indices de la tabla `movimientodestock`
--
ALTER TABLE `movimientodestock`
  ADD PRIMARY KEY (`idRemito`);

--
-- Indices de la tabla `planta`
--
ALTER TABLE `planta`
  ADD UNIQUE KEY `LEGAJO` (`LEGAJO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movimientodestock`
--
ALTER TABLE `movimientodestock`
  MODIFY `idRemito` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
