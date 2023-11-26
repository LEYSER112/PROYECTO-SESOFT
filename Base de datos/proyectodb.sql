-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 22:43:02
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE `colegios` (
  `id_colegios` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `total_estudiantes` int(11) NOT NULL,
  `tipo_de_colegio` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `logo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`id_colegios`, `nombre`, `total_estudiantes`, `tipo_de_colegio`, `direccion`, `logo`) VALUES
(1, 'INSTITUCION EDUCATIVA INTEGRADO DE SOACHA', 1230, 'OFICIAL', 'SOACHA', 'logos/COLEGIO_LOGO_INSTITUCION EDUCATIVA INTEGRADO DE SOACHA.jpg'),
(2, 'INSTITUCION EDUCATIVA CAZUCA', 760, 'NO OFICIAL', 'CAZUCA', 'logos/COLEGIO_LOGO_INSTITUCION EDUCATIVA CAZUCA.png'),
(4, 'SAN MATEO', 780, 'OFICIAL', 'SAN MATEO SOACHA', 'logos/COLEGIO_LOGO_SAN MATEO.png'),
(5, 'INSTITUTO TECNOLOGICO LOS ANDES', 850, 'NO OFICIAL', 'LOS ANDES', 'logos/COLEGIO_LOGO_INSTITUTO TECNOLOGICO LOS ANDES.jpg'),
(6, 'COLEGIO MIGUEL DE CERVANTES', 830, 'NO OFICIAL', 'SOACHA COMPARTIR', 'logos/COLEGIO_LOGO_COLEGIO MIGUEL DE CERVANTES.png'),
(7, 'INSTITUCION EDUCATIVA LAS VILLAS', 1460, 'OFICIAL', 'SOACHA CENTRO', 'logos/COLEGIO_LOGO_INSTITUCION EDUCATIVA LAS VILLAS.png'),
(8, 'INSTITUCION EDUCATIVA EL BOSQUE', 1300, 'OFICIAL', 'SOACHA', 'logos/COLEGIO_LOGO_INSTITUCION EDUCATIVA EL BOSQUE.png'),
(9, 'CUNDINAMARCA', 1000, 'OFICIAL', 'SOACHA', 'logos/COLEGIO_LOGO_CUNDINAMARCA.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_cienciasn`
--

CREATE TABLE `colegios_icfes_prom_cienciasn` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `promedio_ciencias_naturales` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios_icfes_prom_cienciasn`
--

INSERT INTO `colegios_icfes_prom_cienciasn` (`id`, `id_colegios`, `promedio_ciencias_naturales`) VALUES
(1, 4, 47),
(2, 5, 69),
(3, 1, 72),
(4, 2, 89),
(5, 6, 0),
(6, 7, 0),
(7, 8, 0),
(8, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_cienciasn_5_años`
--

CREATE TABLE `colegios_icfes_prom_cienciasn_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `prom_cienciasn_2021` int(11) DEFAULT NULL,
  `prom_cienciasn_2020` int(11) DEFAULT NULL,
  `prom_cienciasn_2019` int(11) DEFAULT NULL,
  `prom_cienciasn_2018` int(11) DEFAULT NULL,
  `prom_cienciasn_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_global`
--

CREATE TABLE `colegios_icfes_prom_global` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `tipo_de_colegio` varchar(50) NOT NULL,
  `promedio_global` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios_icfes_prom_global`
--

INSERT INTO `colegios_icfes_prom_global` (`id`, `id_colegios`, `tipo_de_colegio`, `promedio_global`) VALUES
(2, 4, '', 293),
(3, 5, '', 316),
(4, 1, '', 300),
(5, 2, '', 290),
(6, 6, '', 0),
(7, 7, '', 0),
(8, 8, '', 0),
(9, 9, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_global_5_años`
--

CREATE TABLE `colegios_icfes_prom_global_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `prom_global_2021` int(11) DEFAULT NULL,
  `prom_global_2020` int(11) DEFAULT NULL,
  `prom_global_2019` int(11) DEFAULT NULL,
  `prom_global_2018` int(11) DEFAULT NULL,
  `prom_global_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_ingles`
--

CREATE TABLE `colegios_icfes_prom_ingles` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `promedio_ingles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios_icfes_prom_ingles`
--

INSERT INTO `colegios_icfes_prom_ingles` (`id`, `id_colegios`, `promedio_ingles`) VALUES
(1, 4, 31),
(2, 5, 61),
(3, 1, 60),
(4, 2, 30),
(5, 6, 0),
(6, 7, 0),
(7, 8, 0),
(8, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_ingles_5_años`
--

CREATE TABLE `colegios_icfes_prom_ingles_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `prom_ingles_2021` int(11) DEFAULT NULL,
  `prom_ingles_2020` int(11) DEFAULT NULL,
  `prom_ingles_2019` int(11) DEFAULT NULL,
  `prom_ingles_2018` int(11) DEFAULT NULL,
  `prom_ingles_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_lectura`
--

CREATE TABLE `colegios_icfes_prom_lectura` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `promedio_lectura` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios_icfes_prom_lectura`
--

INSERT INTO `colegios_icfes_prom_lectura` (`id`, `id_colegios`, `promedio_lectura`) VALUES
(1, 4, 56),
(2, 5, 74),
(3, 1, 50),
(4, 2, 30),
(5, 6, 0),
(6, 7, 0),
(7, 8, 0),
(8, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_lectura_5_años`
--

CREATE TABLE `colegios_icfes_prom_lectura_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `prom_lectura_2021` int(11) DEFAULT NULL,
  `prom_lectura_2020` int(11) DEFAULT NULL,
  `prom_lectura_2019` int(11) DEFAULT NULL,
  `prom_lectura_2018` int(11) DEFAULT NULL,
  `prom_lectura_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_matematicas`
--

CREATE TABLE `colegios_icfes_prom_matematicas` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `promedio_matematicas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios_icfes_prom_matematicas`
--

INSERT INTO `colegios_icfes_prom_matematicas` (`id`, `id_colegios`, `promedio_matematicas`) VALUES
(1, 4, 70),
(2, 5, 84),
(3, 1, 70),
(4, 2, 70),
(5, 6, 0),
(6, 7, 0),
(7, 8, 0),
(8, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_matematicas_5_años`
--

CREATE TABLE `colegios_icfes_prom_matematicas_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `prom_matematicas_2021` int(11) DEFAULT NULL,
  `prom_matematicas_2020` int(11) DEFAULT NULL,
  `prom_matematicas_2019` int(11) DEFAULT NULL,
  `prom_matematicas_2018` int(11) DEFAULT NULL,
  `prom_matematicas_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_sociales`
--

CREATE TABLE `colegios_icfes_prom_sociales` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `promedio_ciencias_sociales` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegios_icfes_prom_sociales`
--

INSERT INTO `colegios_icfes_prom_sociales` (`id`, `id_colegios`, `promedio_ciencias_sociales`) VALUES
(1, 4, 62),
(2, 5, 72),
(3, 1, 66),
(4, 2, 60),
(5, 6, 0),
(6, 7, 0),
(7, 8, 0),
(8, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios_icfes_prom_sociales_5_años`
--

CREATE TABLE `colegios_icfes_prom_sociales_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `prom_sociales_2021` int(11) DEFAULT NULL,
  `prom_sociales_2020` int(11) DEFAULT NULL,
  `prom_sociales_2019` int(11) DEFAULT NULL,
  `prom_sociales_2018` int(11) DEFAULT NULL,
  `prom_sociales_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_completa`
--

CREATE TABLE `jornada_completa` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `estudiantes_completa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_completa`
--

INSERT INTO `jornada_completa` (`id`, `id_colegios`, `estudiantes_completa`) VALUES
(1, 1, 0),
(2, 2, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 100),
(9, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_completa_5_años`
--

CREATE TABLE `jornada_completa_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `completa_2021` int(11) DEFAULT NULL,
  `completa_2020` int(11) DEFAULT NULL,
  `completa_2019` int(11) DEFAULT NULL,
  `completa_2018` int(11) DEFAULT NULL,
  `completa_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_manana`
--

CREATE TABLE `jornada_manana` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `estudiantes_manana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_manana`
--

INSERT INTO `jornada_manana` (`id`, `id_colegios`, `estudiantes_manana`) VALUES
(1, 1, 723),
(2, 2, 430),
(4, 4, 0),
(5, 5, 467),
(6, 6, 330),
(7, 7, 660),
(8, 8, 450),
(9, 9, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_manana_5_años`
--

CREATE TABLE `jornada_manana_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `manana_2021` int(11) DEFAULT NULL,
  `manana_2020` int(11) DEFAULT NULL,
  `manana_2019` int(11) DEFAULT NULL,
  `manana_2018` int(11) DEFAULT NULL,
  `manana_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_manana_5_años`
--

INSERT INTO `jornada_manana_5_años` (`id`, `id_colegios`, `manana_2021`, `manana_2020`, `manana_2019`, `manana_2018`, `manana_2017`) VALUES
(1, 1, 708, 624, 540, 598, 749);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_noche`
--

CREATE TABLE `jornada_noche` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `estudiantes_noche` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_noche`
--

INSERT INTO `jornada_noche` (`id`, `id_colegios`, `estudiantes_noche`) VALUES
(1, 1, 0),
(2, 2, 60),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 100),
(8, 8, 0),
(9, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_noche_5_años`
--

CREATE TABLE `jornada_noche_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `noche_2021` int(11) DEFAULT NULL,
  `noche_2020` int(11) DEFAULT NULL,
  `noche_2019` int(11) DEFAULT NULL,
  `noche_2018` int(11) DEFAULT NULL,
  `noche_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_sabatina`
--

CREATE TABLE `jornada_sabatina` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `estudiantes_sabatina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_sabatina`
--

INSERT INTO `jornada_sabatina` (`id`, `id_colegios`, `estudiantes_sabatina`) VALUES
(1, 1, 0),
(2, 2, 0),
(4, 4, 0),
(5, 5, 40),
(6, 6, 0),
(7, 7, 100),
(8, 8, 0),
(9, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_sabatina_5_años`
--

CREATE TABLE `jornada_sabatina_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `sabatina_2021` int(11) DEFAULT NULL,
  `sabatina_2020` int(11) DEFAULT NULL,
  `sabatina_2019` int(11) DEFAULT NULL,
  `sabatina_2018` int(11) DEFAULT NULL,
  `sabatina_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_tarde`
--

CREATE TABLE `jornada_tarde` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `estudiantes_tarde` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_tarde`
--

INSERT INTO `jornada_tarde` (`id`, `id_colegios`, `estudiantes_tarde`) VALUES
(1, 1, 507),
(2, 2, 270),
(4, 4, 0),
(5, 5, 383),
(6, 6, 500),
(7, 7, 600),
(8, 8, 500),
(9, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_tarde_5_años`
--

CREATE TABLE `jornada_tarde_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `tarde_2021` int(11) DEFAULT NULL,
  `tarde_2020` int(11) DEFAULT NULL,
  `tarde_2019` int(11) DEFAULT NULL,
  `tarde_2018` int(11) DEFAULT NULL,
  `tarde_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jornada_tarde_5_años`
--

INSERT INTO `jornada_tarde_5_años` (`id`, `id_colegios`, `tarde_2021`, `tarde_2020`, `tarde_2019`, `tarde_2018`, `tarde_2017`) VALUES
(1, 1, 472, 576, 540, 531, 520);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_estudiantes_5_años`
--

CREATE TABLE `total_estudiantes_5_años` (
  `id` int(11) NOT NULL,
  `id_colegios` int(11) DEFAULT NULL,
  `total_2021` int(11) DEFAULT NULL,
  `total_2020` int(11) DEFAULT NULL,
  `total_2019` int(11) DEFAULT NULL,
  `total_2018` int(11) DEFAULT NULL,
  `total_2017` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `total_estudiantes_5_años`
--

INSERT INTO `total_estudiantes_5_años` (`id`, `id_colegios`, `total_2021`, `total_2020`, `total_2019`, `total_2018`, `total_2017`) VALUES
(3, 1, 1180, 1200, 1080, 1130, 1270),
(4, 2, 780, 730, 690, 710, 670);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `foto_de_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `contraseña`, `cedula`, `telefono`, `foto_de_perfil`) VALUES
(1, 'William Arley Gómez', 'admin@gmail.com', '$2y$10$WTGujiRkaiJov.QwAu/k3eVmyQvGp7Nz68BTu/teWc0Q1oCtaL4ka', '1003482560', '3133616992', 'logos-perfil/FOTO_PERFIL_Arley.jpg'),
(2, 'sotelo', 'sotelo@gmail.com', '$2y$10$OWwW0D6HUtn.Zb9LthD2y.IlqDE8f1RlnRtEsUBx.DzNXS8GjfDEq', '1234567', '3134567890', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colegios`
--
ALTER TABLE `colegios`
  ADD PRIMARY KEY (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_cienciasn`
--
ALTER TABLE `colegios_icfes_prom_cienciasn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_cienciasn_5_años`
--
ALTER TABLE `colegios_icfes_prom_cienciasn_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_global`
--
ALTER TABLE `colegios_icfes_prom_global`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_global_5_años`
--
ALTER TABLE `colegios_icfes_prom_global_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_ingles`
--
ALTER TABLE `colegios_icfes_prom_ingles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_ingles_5_años`
--
ALTER TABLE `colegios_icfes_prom_ingles_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_lectura`
--
ALTER TABLE `colegios_icfes_prom_lectura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_lectura_5_años`
--
ALTER TABLE `colegios_icfes_prom_lectura_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_matematicas`
--
ALTER TABLE `colegios_icfes_prom_matematicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_matematicas_5_años`
--
ALTER TABLE `colegios_icfes_prom_matematicas_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_sociales`
--
ALTER TABLE `colegios_icfes_prom_sociales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `colegios_icfes_prom_sociales_5_años`
--
ALTER TABLE `colegios_icfes_prom_sociales_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_completa`
--
ALTER TABLE `jornada_completa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_completa_5_años`
--
ALTER TABLE `jornada_completa_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_manana`
--
ALTER TABLE `jornada_manana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_manana_5_años`
--
ALTER TABLE `jornada_manana_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_noche`
--
ALTER TABLE `jornada_noche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_noche_5_años`
--
ALTER TABLE `jornada_noche_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_sabatina`
--
ALTER TABLE `jornada_sabatina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_sabatina_5_años`
--
ALTER TABLE `jornada_sabatina_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_tarde`
--
ALTER TABLE `jornada_tarde`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `jornada_tarde_5_años`
--
ALTER TABLE `jornada_tarde_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `total_estudiantes_5_años`
--
ALTER TABLE `total_estudiantes_5_años`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_colegios` (`id_colegios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colegios`
--
ALTER TABLE `colegios`
  MODIFY `id_colegios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_cienciasn`
--
ALTER TABLE `colegios_icfes_prom_cienciasn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_cienciasn_5_años`
--
ALTER TABLE `colegios_icfes_prom_cienciasn_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_global`
--
ALTER TABLE `colegios_icfes_prom_global`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_global_5_años`
--
ALTER TABLE `colegios_icfes_prom_global_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_ingles`
--
ALTER TABLE `colegios_icfes_prom_ingles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_ingles_5_años`
--
ALTER TABLE `colegios_icfes_prom_ingles_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_lectura`
--
ALTER TABLE `colegios_icfes_prom_lectura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_lectura_5_años`
--
ALTER TABLE `colegios_icfes_prom_lectura_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_matematicas`
--
ALTER TABLE `colegios_icfes_prom_matematicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_matematicas_5_años`
--
ALTER TABLE `colegios_icfes_prom_matematicas_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_sociales`
--
ALTER TABLE `colegios_icfes_prom_sociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `colegios_icfes_prom_sociales_5_años`
--
ALTER TABLE `colegios_icfes_prom_sociales_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jornada_completa`
--
ALTER TABLE `jornada_completa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `jornada_completa_5_años`
--
ALTER TABLE `jornada_completa_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jornada_manana`
--
ALTER TABLE `jornada_manana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `jornada_manana_5_años`
--
ALTER TABLE `jornada_manana_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jornada_noche`
--
ALTER TABLE `jornada_noche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `jornada_noche_5_años`
--
ALTER TABLE `jornada_noche_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jornada_sabatina`
--
ALTER TABLE `jornada_sabatina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `jornada_sabatina_5_años`
--
ALTER TABLE `jornada_sabatina_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jornada_tarde`
--
ALTER TABLE `jornada_tarde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `jornada_tarde_5_años`
--
ALTER TABLE `jornada_tarde_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `total_estudiantes_5_años`
--
ALTER TABLE `total_estudiantes_5_años`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colegios_icfes_prom_cienciasn`
--
ALTER TABLE `colegios_icfes_prom_cienciasn`
  ADD CONSTRAINT `colegios_icfes_prom_cienciasn_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_cienciasn_5_años`
--
ALTER TABLE `colegios_icfes_prom_cienciasn_5_años`
  ADD CONSTRAINT `colegios_icfes_prom_cienciasn_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_global`
--
ALTER TABLE `colegios_icfes_prom_global`
  ADD CONSTRAINT `colegios_icfes_prom_global_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_global_5_años`
--
ALTER TABLE `colegios_icfes_prom_global_5_años`
  ADD CONSTRAINT `colegios_icfes_prom_global_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_ingles`
--
ALTER TABLE `colegios_icfes_prom_ingles`
  ADD CONSTRAINT `colegios_icfes_prom_ingles_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_ingles_5_años`
--
ALTER TABLE `colegios_icfes_prom_ingles_5_años`
  ADD CONSTRAINT `colegios_icfes_prom_ingles_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_lectura`
--
ALTER TABLE `colegios_icfes_prom_lectura`
  ADD CONSTRAINT `colegios_icfes_prom_lectura_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_lectura_5_años`
--
ALTER TABLE `colegios_icfes_prom_lectura_5_años`
  ADD CONSTRAINT `colegios_icfes_prom_lectura_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_matematicas`
--
ALTER TABLE `colegios_icfes_prom_matematicas`
  ADD CONSTRAINT `colegios_icfes_prom_matematicas_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_matematicas_5_años`
--
ALTER TABLE `colegios_icfes_prom_matematicas_5_años`
  ADD CONSTRAINT `colegios_icfes_prom_matematicas_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_sociales`
--
ALTER TABLE `colegios_icfes_prom_sociales`
  ADD CONSTRAINT `colegios_icfes_prom_sociales_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `colegios_icfes_prom_sociales_5_años`
--
ALTER TABLE `colegios_icfes_prom_sociales_5_años`
  ADD CONSTRAINT `colegios_icfes_prom_sociales_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_completa`
--
ALTER TABLE `jornada_completa`
  ADD CONSTRAINT `jornada_completa_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_completa_5_años`
--
ALTER TABLE `jornada_completa_5_años`
  ADD CONSTRAINT `jornada_completa_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_manana`
--
ALTER TABLE `jornada_manana`
  ADD CONSTRAINT `jornada_manana_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_manana_5_años`
--
ALTER TABLE `jornada_manana_5_años`
  ADD CONSTRAINT `jornada_manana_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_noche`
--
ALTER TABLE `jornada_noche`
  ADD CONSTRAINT `jornada_noche_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_noche_5_años`
--
ALTER TABLE `jornada_noche_5_años`
  ADD CONSTRAINT `jornada_noche_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_sabatina`
--
ALTER TABLE `jornada_sabatina`
  ADD CONSTRAINT `jornada_sabatina_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_sabatina_5_años`
--
ALTER TABLE `jornada_sabatina_5_años`
  ADD CONSTRAINT `jornada_sabatina_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_tarde`
--
ALTER TABLE `jornada_tarde`
  ADD CONSTRAINT `jornada_tarde_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `jornada_tarde_5_años`
--
ALTER TABLE `jornada_tarde_5_años`
  ADD CONSTRAINT `jornada_tarde_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;

--
-- Filtros para la tabla `total_estudiantes_5_años`
--
ALTER TABLE `total_estudiantes_5_años`
  ADD CONSTRAINT `total_estudiantes_5_años_ibfk_1` FOREIGN KEY (`id_colegios`) REFERENCES `colegios` (`id_colegios`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
