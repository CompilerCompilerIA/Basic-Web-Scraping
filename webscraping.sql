-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2022 a las 18:02:23
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webscraping`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` longtext CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(2000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`ID`, `titulo`, `contenido`, `descripcion`) VALUES
(1, 'Microsoft Compra Activision Blizzard Por 68.7 Mil MIllones De Dólares', 'Microsoft anunció hoy, 18 de enero de 2022, sus planes de adquirir a Activision Blizzard, famosos por franquicias como Call of Duty, Diablo, World of Warcraft, Candy Crush, entre otros. La compra no solo busca mejorar la posición de Microsoft en la industria de videojuegos, también es una apuesta de $68.7 mil millones de dólares (en efectivo) para seguir construyendo el metaverso.\r\n\r\nDentro del comunicado de prensa también se anunció que Phil Spencer pasa de ser Vicepresidente Ejecutivo de Microsoft Gaming a CEO de la misma división. Desde que Satya Nadella se convirtió en CEO, Xbox y videojuegos en general, se han convertido en parte clave de la estrategia de cloud + services de Microsoft y ahora son uno de los pilares en su visión del metaverso.\r\n\r\nPara poner en perspectiva el peso de los videojuegos en la industria del entretenimiento: Disney adquirió Fox por $71.3 mil millones de dólares. Cuando finalice la compra en el junio-julio del 2023, Microsoft se volverá, en términos de ingresos, la tercera compañí­a más grande de videojuegos por detrás de Tencent y Sony. Tendrá poco más de 30 estudios first-party y talentos de clase mundial en la producción y ligas de esports.\r\n\r\n¿Qué implica para los videojuegos de Activision Blizzard?\r\nLos juegos de Activision Blizzard serán parte del portafolio de Game Pass, que ya tiene más de 25 millones de suscriptores. Los futuros lanzamientos estarán disponibles desde el primer dí­a en Game Pass.\r\n\r\nEso podrí­a afectar positivamente a diversas franquicias populares y de nicho. Por el modelo de negocios de Game Pass las expectativas financieras cambian. Los juegos no tienen que ser lanzamientos multimillonarios, sino darle valor y contenido a los suscriptores.\r\n\r\nLa compra de Activision por parte Microsoft es la mayor en la historia de la industria de los videojuegos, un negocio que se ha disparado con la pandemia. Además de la Zynga por Take-Two ya apuntada, en 2016 el gigante chino Tencent compró más del 80% de la finlandesa Supercell por 8.600 millones de dólares. A ellas se suman las ya anotadas de Bethesda y Mojang por parte de Microsoft. Se estima que más de 3.000 millones de personas juegan a videojuegos en todo el mundo.\r\n\r\nLas otras grandes adquisiciones llevadas a cabo por el creador de Windows son la de la red social profesional LinkedIn, por 26.200 millones de dólares, en 2016; la de Nuance el pasado año por 19.700 millones, una operación con la que busca crecer en tecnologí­a de voz y en el sector financiero; Skype, en 2011, una compra por 8.500 millones de dólares con la que desafió a las telecos y plantó cara en internet;  ZeniMax (7.500 millones); GitHub, el mayor repositorio de código abierto del mundo, al que compró por 7.500 millones en 2019; la unidad de telí©fonos móviles de Nokia (7.200 millones) y aQuantive (6.300  millones). Con esta íºltima operación en 2007 retaba a Google y Yahoo en el negocio de la publicidad online.\r\n\r\nLa adquisición de Activision Blizzard se produce en un momento complicado para la compañí­a, que desde el pasado julio ha sufrido reiteradas denunciadas de empleados por acoso sexual y una cultura de trabajo tóxica. Su propio CEO se ha visto involucrado por supuestas malas conductas y por complicidad con lo que ocurrí­a en la empresa. Las acciones de Activision habí­an caí­do un 30% desde entonces. Microsoft se ha comprometido a mejorar la cultura de la compañí­a.\r\n\r\n', 'Microsoft anunció hoy, 18 de enero de 2022, sus planes de adquirir a Activision Blizzard, famosos por franquicias como Call of Duty, Diablo, World of Warcraft, Candy Crush, entre otros. La compra no solo busca mejorar la posición de Microsoft en la industria de videojuegos, también es una apuesta de $68.7 mil millones de dólares (en efectivo) para seguir construyendo el metaverso.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptores`
--

CREATE TABLE `suscriptores` (
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `suscriptores`
--

INSERT INTO `suscriptores` (`nombre`, `email`, `contrasena`) VALUES
('Ignacio', 'erickmallea@outlook.com', '$2y$10$tN230r/lUPxCm7Zxsw7IqOekXvYwOOljeHrfFWzkyaEMyVkIUXkmu'),
('Luciano', 'upb_api@api.com', '$2y$10$2I3EOuUyJdGj7Exzj5L.duK2Pjj2AzxRHCILjvYlfqyrqiUWRTCG.'),
('luciano paniagua', 'upb_api@api.com', '$2y$10$xsJ2QbYQL7Frf1CjtPgujuQRd9ClLbA8H/ToWZxXng.uFomnPo9X2'),
('Luciano123456', 'upb_api@api.com', '$2y$10$KwArUfAYi8aXTqhPOmhB0OVnhyfBs3KPS6OhwetYKtU53ta5KdJAa'),
('Lucky1523', 'erickmalleae@hotmail.com', '$2y$10$RS56MSRjcvEpSgJXiZCYwOYiG8AWtznE9zanR8x2Bap2SAYwiT/s.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `suscriptores`
--
ALTER TABLE `suscriptores`
  ADD PRIMARY KEY (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
