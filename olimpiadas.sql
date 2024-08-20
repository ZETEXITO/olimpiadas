-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2024 a las 04:58:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `olimpiadas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `ID_Compra` int(125) NOT NULL,
  `ID_Usuario` int(125) NOT NULL,
  `ID_Producto` int(125) NOT NULL,
  `Nombre_Producto` varchar(125) NOT NULL,
  `Cantidad_Compra` int(125) NOT NULL,
  `Precio_Total` int(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `ID_Pago` int(11) NOT NULL,
  `ID_Compra` int(11) NOT NULL,
  `Forma_de_Pago` int(11) NOT NULL,
  `Precio_Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Producto` int(125) NOT NULL,
  `Imagen_Producto` varchar(125) NOT NULL,
  `Nombre_Producto` varchar(125) NOT NULL,
  `Descripcion` text NOT NULL,
  `Genero` varchar(125) NOT NULL,
  `Valor_Producto` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_Producto`, `Imagen_Producto`, `Nombre_Producto`, `Descripcion`, `Genero`, `Valor_Producto`) VALUES
(1, '15000.00', '15000.00', '', '15000.00', ''),
(2, '', 'Pelota de Futbol', 'Está nueva', 'pelotas', '15000.00'),
(3, '', 'asd', 'asd', 'pelotas', '1232'),
(4, '', '123', 'qwd', 'botines', '123'),
(5, '', 'asfdqwe', 'asfqew', 'soporte_prote', '123'),
(6, '', 'asd', '23432', 'pelotas', '1213'),
(7, '', 'asd', '12321', 'pelotas', '1231'),
(8, '', 'asd', 'asd', 'botines', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(125) NOT NULL,
  `Nombre` varchar(125) NOT NULL,
  `Imagen` varchar(125) NOT NULL,
  `Email` varchar(125) NOT NULL,
  `Contraseña` varchar(125) NOT NULL,
  `Admin` int(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Nombre`, `Imagen`, `Email`, `Contraseña`, `Admin`) VALUES
(1, 'Tomás', '', 'tomi.roca06@gmail.com', '0', 0),
(2, 'Tomás', '', 'tomi.roca06@gmail.com', '0', 0),
(3, 'Tomás', '', 'tomi.roca06@gmail.com', 'H0la', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`ID_Compra`,`ID_Usuario`,`ID_Producto`,`Nombre_Producto`),
  ADD KEY `ID_Producto` (`ID_Producto`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`ID_Pago`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Producto`,`Nombre_Producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `ID_Compra` int(125) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `ID_Pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Producto` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
