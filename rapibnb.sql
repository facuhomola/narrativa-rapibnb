-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 02:50:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rapibnb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE `alquileres` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `fotos` varchar(250) NOT NULL,
  `servicios` varchar(250) NOT NULL,
  `costo` int(11) NOT NULL,
  `tminimo` int(11) NOT NULL,
  `tmaximo` int(11) NOT NULL,
  `cupo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`id`, `titulo`, `descripcion`, `ubicacion`, `fotos`, `servicios`, `costo`, `tminimo`, `tmaximo`, `cupo`, `id_user`) VALUES
(1, 'Monoambiente JK', 'Monoambiente Juana Koslay San Luis\r\n1 habitación baño comedor', 'Juana Koslay - San Luis', 'perfil1.png', 'lavaropa - limpieza - desayuno', 20000, 1, 3, 2, 1),
(2, 'alquiler sl', 'alquiler en sl 1 habitacion', 'san luis capital', 'foto-alquiler.jpeg', 'desayuno - cochera - frigobar', 50000, 2, 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre`, `edad`, `telefono`, `descripcion`, `imagen`, `user`, `pass`) VALUES
(26, 'Rauly Sanchez', 30, '2332122109', 'alquileres deptos san luis capital', '', 'rauly92', 'rauly92'),
(27, 'Facundo Homola', 28, '2643220099', 'alquileres en ciudad de San Luis', '', 'facu22', '12345'),
(28, 'Silvia Sanchez', 63, '2443009212', 'alquileres en ciudad de san luis centro', 'descarga.png', 'silvia60', 'silvia60');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD CONSTRAINT `alquileres_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
