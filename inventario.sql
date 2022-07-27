-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2016 a las 19:21:14
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--
CREATE DATABASE IF NOT EXISTS `inventario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `cod_prod` int(5) NOT NULL,
  `nom_prod` varchar(20) NOT NULL,
  `cant_prod` int(20) NOT NULL,
  `prec_prod` int(20) NOT NULL,
  `prov_prod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_prod`, `nom_prod`, `cant_prod`, `prec_prod`, `prov_prod`) VALUES
(1, 'Cuadernos', 800, 2990, 'Valentina Aguero'),
(3, 'Ventilador', 100, 5990, 'Victor Gomez'),
(2, 'Tijeras', 100, 990, 'Rodolfo Olguin'),
(5, 'Lapiz', 2500, 2990, 'Catalina Olguin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `rut_prov` int(10) NOT NULL,
  `nom_prov` varchar(30) NOT NULL,
  `dir_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`rut_prov`, `nom_prov`, `dir_prov`) VALUES
(172512224, 'Catalina Olguin', 'Paradero 5, Buin'),
(182222515, 'Valentina Aguero', 'Ahumada # 131'),
(182547855, 'Rodolfo Olguin', 'Acapulco 683, Cerrillos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(20) NOT NULL,
  `clave_usuario` varchar(10) NOT NULL,
  `tipo_perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nom_usuario`, `clave_usuario`, `tipo_perfil`) VALUES
(1, 'admin', '123', 'adm'),
(2, 'user', '123', 'user'),
(3, 'rolguinh', '123', 'adm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`rut_prov`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
