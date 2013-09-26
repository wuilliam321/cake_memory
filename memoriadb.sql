-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-09-2013 a las 10:23:22
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `memoriadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `unidadinvestigacione_id` int(11) NOT NULL,
  `profesione_id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email_primario` varchar(400) NOT NULL,
  `telefono_primario` varchar(11) NOT NULL,
  `email_secundario` varchar(400) DEFAULT NULL,
  `telefono_secundario` varchar(11) DEFAULT NULL,
  `telefono_otro` varchar(11) DEFAULT NULL,
  `linea_investigacion` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_autores_users1_idx` (`user_id`),
  KEY `fk_autores_unidadinvestigaciones1_idx` (`unidadinvestigacione_id`),
  KEY `fk_autores_profesiones1_idx` (`profesione_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `user_id`, `unidadinvestigacione_id`, `profesione_id`, `nombres`, `apellidos`, `email_primario`, `telefono_primario`, `email_secundario`, `telefono_secundario`, `telefono_otro`, `linea_investigacion`) VALUES
(1, 1, 1, 1, 'Wuilliam', 'Lacruz', 'wuilliam321@gmail.com', '04247332770', '', '', '', 'Desarrollo de Aplicaciones con Inteligencia Artificial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores_publicaciones`
--

CREATE TABLE IF NOT EXISTS `autores_publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publicacione_id` int(11) NOT NULL,
  `autore_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_autores_publicaciones_publicaciones1_idx` (`publicacione_id`),
  KEY `fk_autores_publicaciones_autores1_idx` (`autore_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `autores_publicaciones`
--

INSERT INTO `autores_publicaciones` (`id`, `publicacione_id`, `autore_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publicacione_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comentarios_publicaciones1_idx` (`publicacione_id`),
  KEY `fk_comentarios_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `publicacione_id`, `user_id`, `texto`) VALUES
(1, 1, 1, 'Esto es una prueba de comentario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE IF NOT EXISTS `etiquetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`id`, `nombre`) VALUES
(1, 'PHP'),
(2, 'Inteligencia Artificial'),
(3, 'Desarrollo de Aplicaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas_publicaciones`
--

CREATE TABLE IF NOT EXISTS `etiquetas_publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etiqueta_id` int(11) NOT NULL,
  `publicacione_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_etiquetas_publicaciones_etiquetas1_idx` (`etiqueta_id`),
  KEY `fk_etiquetas_publicaciones_publicaciones1_idx` (`publicacione_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `etiquetas_publicaciones`
--

INSERT INTO `etiquetas_publicaciones` (`id`, `etiqueta_id`, `publicacione_id`) VALUES
(1, 2, 1),
(2, 1, 2),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Investigadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institutos`
--

CREATE TABLE IF NOT EXISTS `institutos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `institutos`
--

INSERT INTO `institutos` (`id`, `nombre`) VALUES
(1, 'ULA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otroestudios`
--

CREATE TABLE IF NOT EXISTS `otroestudios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autore_id` int(11) NOT NULL,
  `otroestudiotipo_id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_otroestudios_autores1_idx` (`autore_id`),
  KEY `fk_otroestudios_otroestudiotipos1_idx` (`otroestudiotipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `otroestudios`
--

INSERT INTO `otroestudios` (`id`, `autore_id`, `otroestudiotipo_id`, `nombre`) VALUES
(1, 1, 1, 'Inteligencia Artificial'),
(2, 1, 2, 'Maestria en Desarrollo de Aplicaicones con Inteligencia Artificial aplicada en animales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otroestudiotipos`
--

CREATE TABLE IF NOT EXISTS `otroestudiotipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `otroestudiotipos`
--

INSERT INTO `otroestudiotipos` (`id`, `nombre`) VALUES
(1, 'Especializacion'),
(2, 'Maestria'),
(3, 'Doctorado'),
(4, 'Postdoctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesiones`
--

CREATE TABLE IF NOT EXISTS `profesiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `profesiones`
--

INSERT INTO `profesiones` (`id`, `nombre`) VALUES
(1, 'Tecnico Superior en Informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `contenido` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `contenido`, `created`, `modified`) VALUES
(1, 'Investigacion Sobre Inteligencia Artifical en Ratones', 'Aqui el contenido de la inteligencia artificial en los ratones, realizada en merida, por la ula', '2013-09-26 09:59:33', '2013-09-26 09:59:33'),
(2, 'Desarrollo de aplicaciones web', 'Esto es una prueba de contenido, donde podemos ver como se crea una pagina web usando php, mysql, html y otras herramientas\r\n\r\njava script, javascript, otras cosas, web', '2013-09-26 10:05:33', '2013-09-26 10:05:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursomultimedias`
--

CREATE TABLE IF NOT EXISTS `recursomultimedias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recursomultimediatipo_id` int(11) NOT NULL,
  `publicacione_id` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`),
  KEY `fk_recursomultimedias_recursomultimediatipos_idx` (`recursomultimediatipo_id`),
  KEY `fk_recursomultimedias_publicaciones1_idx` (`publicacione_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `recursomultimedias`
--

INSERT INTO `recursomultimedias` (`id`, `recursomultimediatipo_id`, `publicacione_id`, `ruta`, `nombre`, `descripcion`) VALUES
(1, 1, 1, 'http://facebook7.bligoo.com.co/media/users/23/1186110/images/public/336225/inteligencia_artificial.jpg?v=1351127823215', 'Logo de inteligencia artificial', ''),
(2, 2, 1, 'http://www.youtube.com/watch?v=Q5bMm-19iNQ', 'Video de inteligencia artificial y robotica', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursomultimediatipos`
--

CREATE TABLE IF NOT EXISTS `recursomultimediatipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `recursomultimediatipos`
--

INSERT INTO `recursomultimediatipos` (`id`, `nombre`) VALUES
(1, 'Imagen'),
(2, 'Video'),
(3, 'Audio'),
(4, 'Archivo Comprimido'),
(5, 'Documento de Texto'),
(6, 'Presentacion'),
(7, 'Hoja de Calculo'),
(8, 'Base de Datos'),
(9, 'Texto Plano'),
(10, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadinvestigaciones`
--

CREATE TABLE IF NOT EXISTS `unidadinvestigaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instituto_id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_unidadinvestigaciones_institutos1_idx` (`instituto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `unidadinvestigaciones`
--

INSERT INTO `unidadinvestigaciones` (`id`, `instituto_id`, `nombre`) VALUES
(1, 1, 'Unidad de Estudios Avanzados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`) VALUES
(1, 1, 'wuilliam321', '123321');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autores`
--
ALTER TABLE `autores`
  ADD CONSTRAINT `fk_autores_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_autores_unidadinvestigaciones1` FOREIGN KEY (`unidadinvestigacione_id`) REFERENCES `unidadinvestigaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_autores_profesiones1` FOREIGN KEY (`profesione_id`) REFERENCES `profesiones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autores_publicaciones`
--
ALTER TABLE `autores_publicaciones`
  ADD CONSTRAINT `fk_autores_publicaciones_publicaciones1` FOREIGN KEY (`publicacione_id`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_autores_publicaciones_autores1` FOREIGN KEY (`autore_id`) REFERENCES `autores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentarios_publicaciones1` FOREIGN KEY (`publicacione_id`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comentarios_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `etiquetas_publicaciones`
--
ALTER TABLE `etiquetas_publicaciones`
  ADD CONSTRAINT `fk_etiquetas_publicaciones_etiquetas1` FOREIGN KEY (`etiqueta_id`) REFERENCES `etiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_etiquetas_publicaciones_publicaciones1` FOREIGN KEY (`publicacione_id`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `otroestudios`
--
ALTER TABLE `otroestudios`
  ADD CONSTRAINT `fk_otroestudios_autores1` FOREIGN KEY (`autore_id`) REFERENCES `autores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_otroestudios_otroestudiotipos1` FOREIGN KEY (`otroestudiotipo_id`) REFERENCES `otroestudiotipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recursomultimedias`
--
ALTER TABLE `recursomultimedias`
  ADD CONSTRAINT `fk_recursomultimedias_recursomultimediatipos` FOREIGN KEY (`recursomultimediatipo_id`) REFERENCES `recursomultimediatipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_recursomultimedias_publicaciones1` FOREIGN KEY (`publicacione_id`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidadinvestigaciones`
--
ALTER TABLE `unidadinvestigaciones`
  ADD CONSTRAINT `fk_unidadinvestigaciones_institutos1` FOREIGN KEY (`instituto_id`) REFERENCES `institutos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
