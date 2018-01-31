-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2018 a las 12:31:54
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anunsah`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empre_user`
--

CREATE TABLE `empre_user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_anunciante`
--

CREATE TABLE `tb_anunciante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nit` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_anunciante`
--

INSERT INTO `tb_anunciante` (`id`, `nombre`, `nit`, `email`, `pass`, `telefono`, `direccion`, `ciudad`, `departamento`, `pais`) VALUES
(1, 'prueba', '12121', 'prueba@hotmail.com', '123', '154545', 'calle', 'sahagun', 'cordoba', 'colombia'),
(2, 'leonel', '106394780', 'leonel@hotmail.com', '123456', '7878454', 'calle 15', 'sahagun', 'cordoba', 'colombia'),
(3, 'probando', '', 'probando@hotmail.com', 'carrera 11', '7777', '', 'sahagun', 'cordoba', 'colombia'),
(4, 'saurtidora', '106487854', 'sutidora@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7745482', 'calle 8 # 25 - 25', 'monteria', 'cordoba', 'colombia'),
(5, 'ferreteria sabana', '7845128-8', 'sabana@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7772525', 'calle 14 # 2 -  12', 'sahagun', 'cordoba', 'colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categ`
--

CREATE TABLE `tb_categ` (
  `id_cat` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_categ`
--

INSERT INTO `tb_categ` (`id_cat`, `nombre`) VALUES
(1, 'Ropa'),
(2, 'Calzado'),
(3, 'Entretenimiento'),
(4, 'Comidas'),
(5, 'Salud y Belleza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_compra`
--

CREATE TABLE `tb_compra` (
  `id` int(11) NOT NULL,
  `id_oferta` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cond_serv`
--

CREATE TABLE `tb_cond_serv` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `contenido` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empr_public`
--

CREATE TABLE `tb_empr_public` (
  `id` int(11) NOT NULL,
  `nit` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `rasonSocial` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_infemp`
--

CREATE TABLE `tb_infemp` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `eslogon` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_oferta`
--

CREATE TABLE `tb_oferta` (
  `id_oferta` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `id_condicion` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `fecha_incio` datetime NOT NULL,
  `fecha_cierre` datetime NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_publicidad`
--

CREATE TABLE `tb_publicidad` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `anuncio` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `identificacion` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `departamento` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nombre`, `apellidos`, `identificacion`, `email`, `pass`, `direccion`, `ciudad`, `departamento`, `pais`, `telefono`) VALUES
(1, 'prueba', 'prueba', 1065457445, 'lbgleonel_007@hotmail.com', '123456', 'calle 25 ', 'sahagun', 'cordoba', 'colombia', '3004548878'),
(2, 'leonel', '', 10646464, 'lbg@hormail.com', '123', 'calle 12', 'sahagun', 'cordoba', 'colombia', '300124578'),
(3, 'leonel', 'bula gomez', 10646464, 'lbg@hormail.com', '123', 'calle 12', 'sahagun', 'cordoba', 'colombia', '300124578'),
(4, 'jose', 'solano arroyo', 7824545, 'jose@gmail.com', '123', 'calle 45 #25 - 24', 'monteria', 'cordoba', 'colombia', '7854578'),
(5, '', '', 0, '', '', '', '', '', '', ''),
(6, '', '', 0, '', '', '', '', '', '', ''),
(7, '', '', 0, '', '', '', '', '', '', ''),
(8, 'meivis', 'bula', 164464, 'meivis@hotmail.com', '123', 'calle21', 'sahagun', 'cordoba', 'colombia', '333333'),
(9, 'meivis', 'bula', 164464, 'meivis@hotmail.com', '123', 'calle21', 'sahagun', 'cordoba', 'colombia', '333333'),
(10, 'juan', 'rios', 124545, 'juan@gmail.com', '147852', 'calle 25', 'sahagun', 'cordoba', 'colombia', '7887888');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_user_anuc`
--

CREATE TABLE `tb_user_anuc` (
  `id` int(11) NOT NULL,
  `id_inf` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empre_user`
--
ALTER TABLE `empre_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_anunciante`
--
ALTER TABLE `tb_anunciante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_categ`
--
ALTER TABLE `tb_categ`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `tb_compra`
--
ALTER TABLE `tb_compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_cond_serv`
--
ALTER TABLE `tb_cond_serv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_empr_public`
--
ALTER TABLE `tb_empr_public`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_infemp`
--
ALTER TABLE `tb_infemp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_oferta`
--
ALTER TABLE `tb_oferta`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `tb_publicidad`
--
ALTER TABLE `tb_publicidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `tb_user_anuc`
--
ALTER TABLE `tb_user_anuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empre_user`
--
ALTER TABLE `empre_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_anunciante`
--
ALTER TABLE `tb_anunciante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tb_categ`
--
ALTER TABLE `tb_categ`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tb_compra`
--
ALTER TABLE `tb_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_empr_public`
--
ALTER TABLE `tb_empr_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_infemp`
--
ALTER TABLE `tb_infemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_oferta`
--
ALTER TABLE `tb_oferta`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_publicidad`
--
ALTER TABLE `tb_publicidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tb_user_anuc`
--
ALTER TABLE `tb_user_anuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
