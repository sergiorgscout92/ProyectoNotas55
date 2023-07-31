-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2023 a las 01:35:37
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notas2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `Nombredoc` varchar(60) NOT NULL,
  `Apellidodoc` varchar(60) NOT NULL,
  `Documentodoc` varchar(12) NOT NULL,
  `Correodoc` varchar(60) NOT NULL,
  `Materiadoc` varchar(40) NOT NULL,
  `Usuariodoc` varchar(60) NOT NULL,
  `Passworddoc` varchar(60) NOT NULL,
  `Perfil` varchar(30) NOT NULL,
  `Estadodoc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `Nombredoc`, `Apellidodoc`, `Documentodoc`, `Correodoc`, `Materiadoc`, `Usuariodoc`, `Passworddoc`, `Perfil`, `Estadodoc`) VALUES
(18, 'Jhon', 'Moreno', '12345', 'jhonmorenog@gmail.com', 'Sistemas', 'jmorenog', '1234567890', 'Docente', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_Estudiante` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `documento` varchar(12) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `docente` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_Estudiante`, `nombre`, `apellido`, `documento`, `correo`, `materia`, `docente`) VALUES
(5, 'Angel', 'Gonzalez', '135689533', 'agonzalez@gmail.com', 'Redes', 'Oswaldo'),
(6, 'Sergio', 'Romero', '1015482850', 'saromero058@soy.sena.edu.co', 'Programación', 'Jhon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `Nombremate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `Nombremate`) VALUES
(1, 'Redes'),
(2, 'Programación'),
(3, 'Sistemas'),
(4, 'Emprendimiento'),
(5, 'Comunicación'),
(6, 'Inglés');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_estudiante_materia`
--

CREATE TABLE `notas_estudiante_materia` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `Puntaje` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombreusu` varchar(60) NOT NULL,
  `Apellidousu` varchar(60) NOT NULL,
  `Usuario` varchar(40) NOT NULL,
  `Passwordusu` varchar(80) NOT NULL,
  `Perfil` varchar(30) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombreusu`, `Apellidousu`, `Usuario`, `Passwordusu`, `Perfil`, `Estado`) VALUES
(8, 'Tomas', 'Cachope', 'dia2023', '$2y$10$wrVyN9Yqt2kP4jhZrKxBg.3KdebhmIHWV0yS/waMocX8CcaQL4mvm', 'Administrador', 'Activo'),
(9, 'aaaa', 'bbbb', 'dia2024', '$2y$10$WNGUIVXlQifk08.B0aGMkO3jseo2MyvfTDgaN9GxcMY0tU8JGoFzG', 'Docente', 'Activo'),
(10, 'Edwin', 'Niño', 'enino', '$2y$10$avpXqL9i0ZADUUblVhRlFOJPYyQeaUYlLkpiFx81KmmukgVC/GU.S', 'Administrador', 'Activo'),
(11, 'Johanna', 'Martinez', 'cifuentes0903', '$2y$10$od26/4TKxio5kq.jdOux9eAt902Jaf84yrXMxtR6hHS/e8y06gtPK', 'Docente', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`),
  ADD UNIQUE KEY `Usuariodoc` (`Usuariodoc`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_Estudiante`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `notas_estudiante_materia`
--
ALTER TABLE `notas_estudiante_materia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `notas_estudiante_materia`
--
ALTER TABLE `notas_estudiante_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas_estudiante_materia`
--
ALTER TABLE `notas_estudiante_materia`
  ADD CONSTRAINT `notas_estudiante_materia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_Estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_estudiante_materia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_estudiante_materia_ibfk_3` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
