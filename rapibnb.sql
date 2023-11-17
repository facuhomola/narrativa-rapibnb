-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 04:59:13
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contrasenia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario`, `contrasenia`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `nombre_admin` varchar(250) NOT NULL,
  `contrasenia_admin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `nombre_admin`, `contrasenia_admin`) VALUES
(1, 'administrador', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE `alquileres` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `servicios` varchar(250) NOT NULL,
  `costo` int(11) NOT NULL,
  `tminimo` date NOT NULL,
  `tmaximo` date NOT NULL,
  `cupo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `estado_alquiler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`id`, `titulo`, `descripcion`, `ubicacion`, `servicios`, `costo`, `tminimo`, `tmaximo`, `cupo`, `id_user`, `estado_alquiler`) VALUES
(27, 'departamentos la punta', 'departamentos en ciudad la punta', 'la punta san luis', 'cochera', 50000, '2023-11-10', '2023-11-16', 400000, 28, 0),
(28, 'departamentos juana koslay', 'deptos en jk ', 'juana koslay san luis', 'cochera desayuno ', 600000, '2023-11-10', '2023-11-14', 2, 28, 0),
(29, 'departamento en mapi', 'depto de 2 habitaciones en maipu', 'Maipu Mendoza', 'desayuno lavarropa ', 430000, '2023-11-11', '2023-11-15', 2, 29, 0),
(30, 'Depto Ciudad de La Punta', 'Departamento monoambiente ciudad de La Punta', 'La Punta - San Luis', 'lavaropa - desayuno', 60500, '2023-11-13', '2023-11-17', 2, 28, 0),
(31, 'Depto en Godoy Cruz', 'departamento en godoy cruz.\r\nmonoambiente', 'godoy cruz - mendoza', 'desayuno cochera lavarropa ', 82500, '2023-11-14', '2023-11-20', 2, 29, 2),
(32, 'depto potrero los funes', 'departamento 3 habitaciones', 'San Luis', 'cochera desayuno ', 900000, '2023-11-14', '2023-11-21', 4, 31, 0),
(33, 'depto ciudad la punta', 'departamento ciudad la punta', 'san luis - la punta', 'desayuno cochera', 500000, '2023-11-14', '2023-11-20', 2, 28, 0),
(34, 'deptos sl vm', 'departamentos villa mercedes', 'villa mercedes', 'cochera lavarropa', 50000, '2023-11-15', '2023-11-21', 3, 28, 0),
(35, 'Cabañas La Florida', 'complejo de cabañas en la florida', 'La Florida - San Luis', 'desayuno televisión internet cambio sabanas ', 650000, '2023-11-16', '2023-11-19', 4, 31, 0),
(36, 'deptos Maipu', 'departamentos en ciudad maipu', 'Maipu Mendoza', 'televisión internet yacusi  cambio sabanas ', 70000, '2023-11-17', '2023-11-21', 4, 28, 0),
(37, 'Departamentos Las Heras', 'departamento 3 habitaciones en las heras', 'Mendoza - Las Heras', 'desayuno cochera lavarropa internet ', 920000, '2023-11-16', '2023-11-20', 4, 29, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `id_alquiler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_foto`, `nombre`, `id_alquiler`) VALUES
(9, 'img3.jpg', 27),
(10, 'img2.jpg', 27),
(11, 'img1.jpg', 27),
(12, 'img3.jpg', 28),
(13, 'img2.jpg', 28),
(14, 'img1.jpg', 28),
(15, 'img3.jpg', 29),
(16, 'img2.jpg', 29),
(17, 'img10.jpg', 30),
(18, 'img9.jpg', 30),
(19, 'img8.jpg', 30),
(20, 'img7.jpg', 30),
(21, 'img9.jpg', 31),
(22, 'img8.jpg', 31),
(23, 'img7.jpg', 31),
(24, 'img8.jpg', 32),
(25, 'img7.jpg', 32),
(26, 'img2.jpg', 32),
(27, 'img9.jpg', 33),
(28, 'img8.jpg', 33),
(29, 'img7.jpg', 33),
(30, 'img13.jpg', 34),
(31, 'img12.jpeg', 34),
(32, 'img10.jpg', 34),
(33, 'img10.jpg', 35),
(34, 'img9.jpg', 35),
(35, 'img7.jpg', 35),
(36, 'img13.jpg', 36),
(37, 'img12.jpeg', 36),
(38, 'img10.jpg', 36),
(39, 'img13.jpg', 37),
(40, 'img12.jpeg', 37),
(41, 'img10.jpg', 37),
(42, 'img8.jpg', 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_alquiler` int(11) NOT NULL,
  `solicitante` varchar(250) NOT NULL,
  `duenio` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_alquiler`, `solicitante`, `duenio`, `estado`) VALUES
(1, 28, 'raul1960', 'silvia60', 2),
(2, 31, 'silvia60', 'raul1960', 2),
(3, 31, 'alvaro20', 'raul1960', 2),
(4, 31, 'silvia60', 'raul1960', 3),
(5, 28, 'alvaro20', 'silvia60', 2),
(6, 29, 'alvaro20', 'raul1960', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`) VALUES
(1, 'desayuno'),
(2, 'cochera'),
(3, 'lavarropa'),
(4, 'televisión'),
(5, 'internet'),
(6, 'yacusi '),
(7, 'cambio sabanas'),
(8, 'cocina'),
(9, 'pileta'),
(10, 'jabon | shampoo');

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
(28, 'Silvia Sanchez', 63, '2443009212', 'alquileres en ciudad de san luis centro', 'descarga.png', 'silvia60', 'silvia60'),
(29, 'Raul Homola', 63, '2665220011', 'alquileres en mendoza capital', 'perfil1.png', 'raul1960', 'raul1960'),
(30, 'Jose Sanchez', 30, '2664220011', 'alquileres en villa mercedes san luis', 'perfil1.png', 'jose90', 'jose90'),
(31, 'Alvaro Morata', 30, '2110920011', 'alquileres en la rioja', 'perfil1.png', 'alvaro20', 'alvaro20'),
(32, 'Guido Rodriguez', 29, '2443220099', 'alquileres en buenos aires capital', 'perfil1.png', 'guido2022', 'guido2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificadas`
--

CREATE TABLE `verificadas` (
  `id_cuenta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `fotodni` varchar(250) NOT NULL,
  `estado_cuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `verificadas`
--

INSERT INTO `verificadas` (`id_cuenta`, `id_user`, `dni`, `fotodni`, `estado_cuenta`) VALUES
(1, 28, 14296377, 'perfil1.png', 2),
(2, 28, 142221990, 'perfil1.png', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_alquiler` (`id_alquiler`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `verificadas`
--
ALTER TABLE `verificadas`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `verificadas`
--
ALTER TABLE `verificadas`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD CONSTRAINT `alquileres_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_alquiler`) REFERENCES `alquileres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
