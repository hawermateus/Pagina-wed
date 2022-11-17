-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 22:58:56
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paginabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(14) NOT NULL,
  `desc_categoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `desc_categoria`) VALUES
(12, 'categoria1'),
(34, 'categoria2'),
(56, 'categoria3'),
(78, 'categoria4'),
(91, 'categoria5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coment_not`
--

CREATE TABLE `coment_not` (
  `id_comentario` int(14) NOT NULL,
  `nombre_lector` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `correo_lector` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `wed_lector` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `texto_not` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_com` date DEFAULT NULL,
  `id_noticia` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coment_not`
--

INSERT INTO `coment_not` (`id_comentario`, `nombre_lector`, `correo_lector`, `wed_lector`, `texto_not`, `fecha_com`, `id_noticia`) VALUES
(1, 'sofia', 'sofia@gmail.com', 'microsoft edge', 'hola1', '2004-05-31', 12),
(2, 'alejandra', 'ale@gmail.com', 'google', 'hola2', '2003-05-07', 13),
(3, 'paula', 'pau@gmail.com', 'fire_fox', 'hola3', '2002-06-25', 14),
(4, 'maria', 'maria@gmail.com', 'opera_gx', 'hola4', '2005-03-17', 15),
(5, 'luna', 'lunama@gmail.com', 'google', 'hola5', '2006-03-20', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_dia`
--

CREATE TABLE `noticias_dia` (
  `id_noticia` int(14) NOT NULL,
  `titulo_not` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `detalle_not` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_academica` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fecha_not` date DEFAULT NULL,
  `descarg_not` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id_categoria` int(14) DEFAULT NULL,
  `html_not` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias_dia`
--

INSERT INTO `noticias_dia` (`id_noticia`, `titulo_not`, `detalle_not`, `fecha_academica`, `fecha_not`, `descarg_not`, `id_categoria`, `html_not`) VALUES
(12, 'tecnico', 'detalle1', '05/07/2022', '2004-05-31', '456', 12, '1'),
(13, 'tecnologo', 'detalle2', '05/07/2022', '2003-05-07', '856', 34, '5'),
(14, 'tecnico', 'detalle3', '05/07/2022', '2002-06-25', '346', 56, '4'),
(15, 'tecnologo', 'detalle4', '05/07/2022', '2005-03-17', '731', 78, '3'),
(16, 'tecnico', 'detalle5', '05/07/2022', '0000-00-00', '912', 91, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `id_tipo` int(15) NOT NULL,
  `desc_tipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id_usuario` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_sis`
--

CREATE TABLE `usuarios_sis` (
  `id_usuario` int(14) NOT NULL,
  `correo_usu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `pass_usu` date DEFAULT NULL,
  `fech_activ` date DEFAULT NULL,
  `nro_identidad` int(20) DEFAULT NULL,
  `id_tipo` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `coment_not`
--
ALTER TABLE `coment_not`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_noticia` (`id_noticia`);

--
-- Indices de la tabla `noticias_dia`
--
ALTER TABLE `noticias_dia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD PRIMARY KEY (`id_tipo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios_sis`
--
ALTER TABLE `usuarios_sis`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `coment_not`
--
ALTER TABLE `coment_not`
  MODIFY `id_comentario` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `noticias_dia`
--
ALTER TABLE `noticias_dia`
  MODIFY `id_noticia` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  MODIFY `id_tipo` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_sis`
--
ALTER TABLE `usuarios_sis`
  MODIFY `id_usuario` int(14) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coment_not`
--
ALTER TABLE `coment_not`
  ADD CONSTRAINT `coment_not_ibfk_1` FOREIGN KEY (`id_noticia`) REFERENCES `noticias_dia` (`id_noticia`);

--
-- Filtros para la tabla `noticias_dia`
--
ALTER TABLE `noticias_dia`
  ADD CONSTRAINT `noticias_dia_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD CONSTRAINT `tipo_usu_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios_sis` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
