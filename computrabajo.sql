-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2024 a las 16:14:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computrabajo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_re` varchar(100) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `ruc` varchar(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `rol` int(11) NOT NULL COMMENT '1: admin, 2: empresa, 3: postulantes, 4: supervisor',
  `user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `archivo_cv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_re`, `dni`, `ruc`, `correo`, `celular`, `rol`, `user`, `password`, `archivo_cv`) VALUES
(1, 'Cristhian Edy Llanque Tipo', '', '', '', '', 0, '', '$2y$10$.ZinshSvdOuFvQikRp.kPu4HPPcIOdm8.z5BqMuy10HDRWnpPd0R.', 'uploads/Cristhian Edy.pdf'),
(2, 'ARTURO', '4341224', '1242134234', 'nsoe@gmail.com', '972234465', 3, 'arturo', '$2y$10$VM4Q4QWUEbKUs.a/tCJo5OP4iFgp4Eax2MBbDS1SYNCw7eoYsGZHy', 'uploads/Diagrama de Conceptos Clave en Administración.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
