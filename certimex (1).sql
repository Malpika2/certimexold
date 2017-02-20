-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2017 a las 10:07:31
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `certimex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id_carrusel` int(10) NOT NULL,
  `encabezado` varchar(1000) NOT NULL,
  `contenido` varchar(5000) NOT NULL,
  `complemento` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`id_carrusel`, `encabezado`, `contenido`, `complemento`) VALUES
(13, 'CERTIFICADORA Mexicana de Productos y Procesos EcolÃ³gicos', 'Constituida con la finalidad de contribuir en el desarrollo de la producciÃ³n mediante la inspecciÃ³n y certificaciÃ³n de calidad de los procesos y productos agrÃ­colas, pecuarios, agroindustriales y forestales.', '#'),
(14, 'Convocatoria 1', 'CURSO BÃ¡sico para la formaciÃ³n de inspectores para \r\nla certificaciÃ³n de productos orgÃ¡nicos.\r\nMercado nacional e internacional.', 'http://www.certimexsc.com/docs/solicitud_inspectores.docx'),
(17, 'encabezado 2', 'contenido encabezado2', 'www.google.com'),
(18, 'encabezado 3', 'contenido 3', 'www.ungato.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_carrusel`
--

CREATE TABLE `imagenes_carrusel` (
  `id_imgcarrusel` int(10) NOT NULL,
  `id_carrusel` int(10) DEFAULT NULL,
  `nombre` varchar(2000) NOT NULL,
  `url` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_carrusel`
--

INSERT INTO `imagenes_carrusel` (`id_imgcarrusel`, `id_carrusel`, `nombre`, `url`) VALUES
(15, 13, 'go-valentines_0.jpg', '../Imagenes/go-valentines_0.jpg'),
(16, 14, 'bc57cb45d49ec18_ba1407a28936eb3fc647b13c7cdfeef7.jpg', '../Imagenes/google.jpg'),
(19, 17, 'google.jpg', '../Imagenes/google.jpg'),
(20, 18, 'gato.jpg', '../Imagenes/gato.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_noticias`
--

CREATE TABLE `img_noticias` (
  `id_img` int(10) NOT NULL,
  `id_noticias` int(10) DEFAULT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `img_noticias`
--

INSERT INTO `img_noticias` (`id_img`, `id_noticias`, `url`) VALUES
(11, 13, '../Imagenes_Noticias/gato.jpg'),
(12, 14, '../Imagenes_Noticias/bc57cb45d49ec18_ba1407a28936eb3fc647b13c7cdfeef7.jpg'),
(13, 15, '../Imagenes_Noticias/lol.jpg'),
(14, 16, '../Imagenes_Noticias/consumelocal.jpg'),
(15, 17, '../Imagenes_Noticias/1612849.jpg'),
(16, 18, '../Imagenes_Noticias/go-valentines_0.jpg'),
(17, 19, '../Imagenes_Noticias/1612849.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id_informacion` int(5) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `informacion` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id_informacion`, `titulo`, `informacion`) VALUES
(1, 'yasser', 'CERTIMEX, Certificadora Mexicana de Productos y Procesos EcolÃ³gicos es una sociedad civil -legalmente registrada bajo el NÃºm. 164/97-, constituida con la finalidad de contribuir en el desarrollo de la producciÃ³n mediante la inspecciÃ³n y certificaciÃ³n de calidad de los procesos y productos agrÃ­colas, pecuarios, agroindustriales y forestales.\r\n\r\n\r\nCERTIMEX ha definido su polÃ­tica empresarial con base en los siguientes objetivos:\r\n\r\nGarantizar a productores, procesadores, comercializadores y consumidores la realizaciÃ³n de actividades de inspecciÃ³n y certificaciÃ³n de productos y procesos con competencia, independencia e imparcialidad.\r\n\r\nDesarrollar un sistema de calidad, tanto para la inspecciÃ³n como para la certificaciÃ³n, que estÃ© adecuado al contexto nacional pero equivalente a las exigencias internacionales.\r\n\r\nDesarrollar sistemas de certificaciÃ³n nacionales que econÃ³micamente estÃ©n al alcance de todos los interesados, pero que ademÃ¡s le permita a CERTIMEX obtener los ingresos necesarios para asegurar la continuidad e independencia de su trabajo. Hoy sustentamos nuestra tarea en la oportunidad, la fortaleza, la fertilidad, el movimiento y el comercio justo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticias` int(10) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticias`, `titulo`, `contenido`, `fecha`) VALUES
(13, 'El oso panda', 'El panda, oso panda o panda gigante es una especie de mamÃ­fero del orden de los carnÃ­voros y aunque hay una gran controversia al respecto, los Ãºltimos estudios de su ADN lo engloban entre los miembros ..', '2017-02-05'),
(14, 'El gato3', 'El gato o gato domÃ©stico y coloquialmente llamado minino, micho, mizo o miz es una subespecie de mamÃ­fero carnÃ­voro de la familia Felidae.', '2017-02-06'),
(15, 'League of Legends', 'League of Legends es un videojuego de gÃ©nero multiplayer online battle arena desarrollado por Riot Games para Microsoft Windows y OS X.', '2017-02-07'),
(16, 'Consume local', 'Si realmente quieres lucirte en un evento de gala, porque no hacerlo con un bordado del Istmo, de Quielana o Tlahuitoltepec. Por otro lado tambiÃ©n es una buena opciÃ³n para hacer un regalo.', '2017-02-07'),
(17, 'El nintendo switch', 'DespuÃ©s de rumores sobre el precio de la nueva consola de Nintendo, este jueves se confirmÃ³ el costo para MÃ©xico, ademÃ¡s de informar sobre el servicio "online" de pago a nivel mundial.\r\n\r\nEn la preventa de Amazon MÃ©xico, se confirma que el precio oficial del Nintendo Switch serÃ¡ de 9 mil 999 pesos, sÃ³lo por la consola.', '2017-02-08'),
(18, 'pokemon Go', 'La compaÃ±Ã­a creadora de PokÃ©mon Go, Niantic, acaba de anunciar una nueva dinÃ¡mica para el DÃ­a de San ValentÃ­n.\r\n\r\nA partir de hoy y hasta el 15 de febrero, los jugadores recibirÃ¡n el doble de dulces cuando atrapen PokÃ©mon, eclosionen huevos, transfieran PokÃ©mon o al encontrar dulces con un compaÃ±ero PokÃ©mon.\r\n\r\nPokÃ©mon rosados, incluyendo a Chansey, Clefable y Porygon tendrÃ¡n una mayor probabilidad de aparecer y los jugadores tambiÃ©n tendrÃ¡n mayor probabilidad de eclosionar PokÃ©m', '2017-02-09'),
(19, 'Google Maps ', 'No es suficiente saber a dÃ³nde vas, sino que es necesario encontrar la forma mÃ¡s eficiente de hacerlo.\r\n\r\nAfortunadamente Google entiende esta necesidad y acaba de actualizar su aplicaciÃ³n Google Maps en Android, prometiendo brindar informaciÃ³n Ãºtil en tiempo real al fondo de tu pantalla.\r\n\r\nA partir de hoy, si deslizas el dedo hacia arriba, la aplicaciÃ³n te mostrarÃ¡ tres pestaÃ±as diferentes: lugares, conducir y trÃ¡nsito. De esa forma, la aplicaciÃ³n te guiarÃ¡ a un restaurante cercano,', '2017-02-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicios` int(10) NOT NULL,
  `nombre` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(2000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicios`, `nombre`, `descripcion`, `imagen`) VALUES
(5, 'Servicio 1', '24 service description', '24-hours-delivery.png'),
(6, 'servicio 3', 'Children of the sun, see your time has just begun, searching for your ways, through adventures every day. Every day and night, with the condor in flight, with all your friends in tow, you search for the Cities of Gold. Ah-ah-ah-ah-ah... wishing for The Cities of Gold. Ah-ah-ah-ah-ah... some day we will find The Cities of Gold. Do-do-do-do ah-ah-ah, do-do-do-do, Cities of Gold. Do-do-do-do, Cities of Gold. Ah-ah-ah-ah-ah... some day we will find The Cities of Gold.\r\n\r\n', 'clipboard-verification-symbol.png'),
(7, 'abcdef', 'desadokasdokaodsaksdoadadadadsda', '24-hours-phone-service.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(10) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario`, `contrasena`) VALUES
(1, 'admin', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`id_carrusel`);

--
-- Indices de la tabla `imagenes_carrusel`
--
ALTER TABLE `imagenes_carrusel`
  ADD PRIMARY KEY (`id_imgcarrusel`),
  ADD KEY `id_carrusel` (`id_carrusel`);

--
-- Indices de la tabla `img_noticias`
--
ALTER TABLE `img_noticias`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_noticias` (`id_noticias`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticias`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `id_carrusel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `imagenes_carrusel`
--
ALTER TABLE `imagenes_carrusel`
  MODIFY `id_imgcarrusel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `img_noticias`
--
ALTER TABLE `img_noticias`
  MODIFY `id_img` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id_informacion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticias` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicios` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes_carrusel`
--
ALTER TABLE `imagenes_carrusel`
  ADD CONSTRAINT `imagenes_carrusel_ibfk_1` FOREIGN KEY (`id_carrusel`) REFERENCES `carrusel` (`id_carrusel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `img_noticias`
--
ALTER TABLE `img_noticias`
  ADD CONSTRAINT `img_noticias_ibfk_1` FOREIGN KEY (`id_noticias`) REFERENCES `noticias` (`id_noticias`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
