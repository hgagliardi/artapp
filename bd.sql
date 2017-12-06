-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-12-2017 a las 21:11:44
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `mbajour`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categorias_id` int(11) NOT NULL,
  `categorias_nombre` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categorias_id`, `categorias_nombre`) VALUES
(1, 'Categoría 1'),
(2, 'Categoría 2'),
(3, 'Categoría 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `items_id` int(11) NOT NULL,
  `items_proyecto` int(11) NOT NULL,
  `items_titulo` varchar(200) NOT NULL,
  `items_descripcion` text NOT NULL,
  `items_filename` varchar(100) NOT NULL,
  `items_fecha` datetime NOT NULL,
  `items_activo` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`items_id`, `items_proyecto`, `items_titulo`, `items_descripcion`, `items_filename`, `items_fecha`, `items_activo`) VALUES
(2, 1, '', '', 'Screen_Shot_2017-12-05_at_10_45_002.png', '2017-12-05 00:00:00', 0),
(3, 1, '', '', 'Screen_Shot_2017-12-05_at_10_45_003.png', '2017-12-05 00:00:00', 0),
(4, 1, '', '', 'Screen_Shot_2017-12-05_at_10_45_004.png', '2017-12-05 00:00:00', 0),
(5, 1, '', '', 'Screen_Shot_2017-12-05_at_10_45_005.png', '2017-12-05 00:00:00', 0),
(6, 1, '', '', 'Screen_Shot_2017-12-05_at_10_44_30.png', '2017-12-05 00:00:00', 0),
(7, 1, '', '', 'Screen_Shot_2017-12-05_at_10_44_301.png', '2017-12-05 16:57:52', 0),
(8, 1, '', '', 'placaAgusfb.png', '2017-12-05 16:58:12', 0),
(9, 1, '', '', 'a7b7f2d6-d401-4792-a6ac-d08e84471bdd.jpeg', '2017-12-05 17:01:25', 0),
(10, 1, '', '', '1.png', '2017-12-05 17:08:56', 0),
(11, 1, '', '', '2.png', '2017-12-05 17:08:56', 0),
(12, 1, '', '', '3.png', '2017-12-05 17:08:56', 0),
(13, 1, '', '', '4.png', '2017-12-05 17:08:56', 0),
(14, 1, '', '', '5.png', '2017-12-05 17:08:56', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `proyectos_id` int(11) NOT NULL,
  `proyectos_nombre` varchar(250) NOT NULL,
  `proyectos_descripcion` text NOT NULL,
  `proyectos_principal` int(11) NOT NULL,
  `proyectos_activo` tinyint(4) NOT NULL DEFAULT '1',
  `proyectos_subido` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`proyectos_id`, `proyectos_nombre`, `proyectos_descripcion`, `proyectos_principal`, `proyectos_activo`, `proyectos_subido`) VALUES
(1, 'proyecto de pruebita', 'Descripción de proy 1asdfsdfsdfsdf', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_categorias`
--

CREATE TABLE `proyectos_categorias` (
  `proyectoscategorias_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos_categorias`
--

INSERT INTO `proyectos_categorias` (`proyectoscategorias_id`, `proyecto_id`, `categoria_id`) VALUES
(11, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarios_id` int(11) NOT NULL,
  `usuarios_nombre` varchar(150) NOT NULL,
  `usuarios_mail` varchar(200) NOT NULL,
  `usuarios_pass` varchar(200) NOT NULL,
  `usuarios_activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categorias_id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`proyectos_id`);

--
-- Indices de la tabla `proyectos_categorias`
--
ALTER TABLE `proyectos_categorias`
  ADD PRIMARY KEY (`proyectoscategorias_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarios_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categorias_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `proyectos_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `proyectos_categorias`
--
ALTER TABLE `proyectos_categorias`
  MODIFY `proyectoscategorias_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarios_id` int(11) NOT NULL AUTO_INCREMENT;
