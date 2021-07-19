-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2021 a las 23:57:23
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manual_tec`
--

CREATE TABLE `manual_tec` (
  `id` int(11) NOT NULL,
  `ruta` varchar(60) NOT NULL,
  `id_r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `manual_tec`
--

INSERT INTO `manual_tec` (`id`, `ruta`, `id_r`) VALUES
(1, 'Repositorios/WhatsApp Image 2021-07-17 at 9.00.05 PM.jpeg/Ma', 1),
(2, 'Repositorios/Unidad 2 tema 2.2 Modelado de data warehouse..p', 1),
(5, 'Repositorios/Estado de cuenta.pdf/ManualTecnico', 1),
(6, 'Repositorios/WhatsApp Image 2021-07-17 at 9.00.05 PM.jpeg/Ma', 1),
(7, 'Repositorios/18307084_Leticia_Aguirre_temario.pdf/ManualTecn', 1),
(8, 'Repositorios/Vacunacion Mamá.pdf/ManualTecnico', 1),
(9, 'Repositorios/WhatsApp Image 2021-07-15 at 8.33.56 PM.jpeg/Ma', 1),
(10, 'Repositorios/PMBOK_5ta_Edicion_Espanol__1_.pdf/ManualTecnico', 1),
(11, 'Repositorios/Gestión de la producción.pdf/ManualTecnico', 1),
(12, 'Repositorios/Memoria de estadia - Daniel Flores Peralta.docx', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manual_usu`
--

CREATE TABLE `manual_usu` (
  `id` int(11) NOT NULL,
  `ruta` varchar(60) NOT NULL,
  `id_r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `manual_usu`
--

INSERT INTO `manual_usu` (`id`, `ruta`, `id_r`) VALUES
(1, 'Repositorios/WhatsApp Image 2021-07-17 at 9.00.05 PM.jpeg/Ma', 1),
(2, 'Repositorios/Unidad 2 tema 2.2 Modelado de data warehouse..p', 1),
(5, 'Repositorios/Estado de cuenta.pdf/ManualUsuario', 1),
(6, 'Repositorios/WhatsApp Image 2021-07-17 at 9.00.05 PM.jpeg/Ma', 1),
(7, 'Repositorios/18307084_Leticia_Aguirre_temario.pdf/ManualUsua', 1),
(8, 'Repositorios/Vacunacion Mamá.pdf/ManualUsuario', 1),
(9, 'Repositorios/WhatsApp Image 2021-07-15 at 8.33.56 PM.jpeg/Ma', 1),
(10, 'Repositorios/PMBOK_5ta_Edicion_Espanol__1_.pdf/ManualUsuario', 1),
(11, 'Repositorios/Gestión de la producción.pdf/ManualUsuario', 1),
(12, 'Repositorios/Memoria de estadia - Daniel Flores Peralta.docx', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repositorios`
--

CREATE TABLE `repositorios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `ruta` varchar(60) NOT NULL,
  `nombre_a` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `tipo_proyecto` varchar(50) NOT NULL,
  `nivel_proyecto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `repositorios`
--

INSERT INTO `repositorios` (`id`, `nombre`, `ruta`, `nombre_a`, `descripcion`, `carrera`, `tipo_proyecto`, `nivel_proyecto`) VALUES
(1, 'FFFFF', 'Repositorios/WhatsApp Image 2021-07-17 at 9.00.05 PM.jpeg/', 'FGGG', 'FFFFF', 'TI', 'Estadia', 'Ingenieria'),
(2, 'ggggg', 'Repositorios/Unidad 2 tema 2.2 Modelado de data warehouse..p', 'ggggg', 'gggggg', 'TI', 'Especial', 'TSU'),
(5, 'RE UTCGG', 'Repositorios/Estado de cuenta.pdf/', 'Daniel', 'HOLA WACHOS XD', 'TI', 'Especial', 'TSU'),
(6, 'OLVIO', 'Repositorios/WhatsApp Image 2021-07-17 at 9.00.05 PM.jpeg/', 'OLIVO', 'DLPV', 'TI', 'Integradora', 'Ingenieria'),
(7, 'PRUEBA', 'Repositorios/18307084_Leticia_Aguirre_temario.pdf/', 'PRUEBA', 'PRUEBA', 'TI', 'Integradora', 'TSU'),
(8, 'ASDFSDFDGT', 'Repositorios/Vacunacion Mamá.pdf/', 'ASDASDAS', 'TTYJTYUTYU', 'TI', 'Estadia', 'TSU'),
(9, 'dfgfdgdfgdfg', 'Repositorios/WhatsApp Image 2021-07-15 at 8.33.56 PM.jpeg/', 'asdasdasdsada', 'hgjghjghj', 'TI', 'Integradora', 'TSU'),
(10, 'Sistema administrativo conjunto de PHP y MYSQL', 'Repositorios/PMBOK_5ta_Edicion_Espanol__1_.pdf/', 'Flowers', 'Se ha desarrollado un sistema de seguridad implementado por la wea de la wea de la wea jajaja xd', 'TI', 'Estadia', 'Ingenieria'),
(11, '', 'Repositorios/Gestión de la producción.pdf/', '', 'La mama de la mama de la mama de la mama de la mama de la mama de la mama de la mama de la  mama de la mama de la mama de la mama de la  mama de la ma', 'TI', 'Integradora', 'TSU'),
(12, 'HOLA', 'Repositorios/Memoria de estadia - Daniel Flores Peralta.docx', 'Prueba archivo', 'La mama de la mama de la mama de la mama de la mama de la mama de la mama de la mama de la  mama de la mama de la mama de la mama de la  mama de la ma', 'TI', 'Integradora', 'TSU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_alumnos`
--

CREATE TABLE `tb_alumnos` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tipo_user` int(11) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `cuatri` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_alumnos`
--

INSERT INTO `tb_alumnos` (`id`, `username`, `password`, `nombre`, `apellidos`, `tipo_user`, `carrera`, `cuatri`) VALUES
(1, 'olivo', 'olivo', 'Daniel', 'Olivo P', 3, 'TI', 9),
(2, 'yopli', 'yopli', 'yopli', 'flowers', 3, 'TI', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_docente`
--

CREATE TABLE `tb_docente` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `tipo_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `rol_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `rol_id`) VALUES
(1, 'dany', 'dany', 1),
(2, 'yo', 'yo', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `manual_tec`
--
ALTER TABLE `manual_tec`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manual_usu`
--
ALTER TABLE `manual_usu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repositorios`
--
ALTER TABLE `repositorios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_alumnos`
--
ALTER TABLE `tb_alumnos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `tb_docente`
--
ALTER TABLE `tb_docente`
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
-- AUTO_INCREMENT de la tabla `manual_tec`
--
ALTER TABLE `manual_tec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `manual_usu`
--
ALTER TABLE `manual_usu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `repositorios`
--
ALTER TABLE `repositorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_alumnos`
--
ALTER TABLE `tb_alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_docente`
--
ALTER TABLE `tb_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
