-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-09-2013 a las 23:32:22
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `memoriadb`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `autores`
-- 

CREATE TABLE `autores` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `unidadinvestigacione_id` int(11) NOT NULL,
  `profesione_id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email_primario` varchar(400) NOT NULL,
  `telefono_primario` varchar(11) NOT NULL,
  `email_secundario` varchar(400) default NULL,
  `telefono_secundario` varchar(11) default NULL,
  `telefono_otro` varchar(11) default NULL,
  `linea_investigacion` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_autores_users1_idx` (`user_id`),
  KEY `fk_autores_unidadinvestigaciones1_idx` (`unidadinvestigacione_id`),
  KEY `fk_autores_profesiones1_idx` (`profesione_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `autores`
-- 

INSERT INTO `autores` VALUES (1, 1, 1, 1, 'Wuilliam', 'Lacruz', 'wuilliam321@gmail.com', '04247332770', '', '', '', 'Desarrollo de Aplicaciones con Inteligencia Artificial');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `autores_publicaciones`
-- 

CREATE TABLE `autores_publicaciones` (
  `id` int(11) NOT NULL auto_increment,
  `publicacione_id` int(11) NOT NULL,
  `autore_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_autores_publicaciones_publicaciones1_idx` (`publicacione_id`),
  KEY `fk_autores_publicaciones_autores1_idx` (`autore_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `autores_publicaciones`
-- 

INSERT INTO `autores_publicaciones` VALUES (1, 1, 1);
INSERT INTO `autores_publicaciones` VALUES (2, 2, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `comentarios`
-- 

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL auto_increment,
  `publicacione_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_comentarios_publicaciones1_idx` (`publicacione_id`),
  KEY `fk_comentarios_users1_idx` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `comentarios`
-- 

INSERT INTO `comentarios` VALUES (1, 1, 1, 'Esto es una prueba de comentario');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `etiquetas`
-- 

CREATE TABLE `etiquetas` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `etiquetas`
-- 

INSERT INTO `etiquetas` VALUES (1, 'PHP');
INSERT INTO `etiquetas` VALUES (2, 'Inteligencia Artificial');
INSERT INTO `etiquetas` VALUES (3, 'Desarrollo de Aplicaciones');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `etiquetas_publicaciones`
-- 

CREATE TABLE `etiquetas_publicaciones` (
  `id` int(11) NOT NULL auto_increment,
  `etiqueta_id` int(11) NOT NULL,
  `publicacione_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_etiquetas_publicaciones_etiquetas1_idx` (`etiqueta_id`),
  KEY `fk_etiquetas_publicaciones_publicaciones1_idx` (`publicacione_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `etiquetas_publicaciones`
-- 

INSERT INTO `etiquetas_publicaciones` VALUES (1, 2, 1);
INSERT INTO `etiquetas_publicaciones` VALUES (2, 1, 2);
INSERT INTO `etiquetas_publicaciones` VALUES (3, 3, 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `groups`
-- 

CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `groups`
-- 

INSERT INTO `groups` VALUES (1, 'Investigadores');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `institutos`
-- 

CREATE TABLE `institutos` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `institutos`
-- 

INSERT INTO `institutos` VALUES (1, 'ULA');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `otroestudios`
-- 

CREATE TABLE `otroestudios` (
  `id` int(11) NOT NULL auto_increment,
  `autore_id` int(11) NOT NULL,
  `otroestudiotipo_id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_otroestudios_autores1_idx` (`autore_id`),
  KEY `fk_otroestudios_otroestudiotipos1_idx` (`otroestudiotipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `otroestudios`
-- 

INSERT INTO `otroestudios` VALUES (1, 1, 1, 'Inteligencia Artificial');
INSERT INTO `otroestudios` VALUES (2, 1, 2, 'Maestria en Desarrollo de Aplicaicones con Inteligencia Artificial aplicada en animales');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `otroestudiotipos`
-- 

CREATE TABLE `otroestudiotipos` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `otroestudiotipos`
-- 

INSERT INTO `otroestudiotipos` VALUES (1, 'Especializacion');
INSERT INTO `otroestudiotipos` VALUES (2, 'Maestria');
INSERT INTO `otroestudiotipos` VALUES (3, 'Doctorado');
INSERT INTO `otroestudiotipos` VALUES (4, 'Postdoctorado');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `profesiones`
-- 

CREATE TABLE `profesiones` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `profesiones`
-- 

INSERT INTO `profesiones` VALUES (1, 'Tecnico Superior en Informatica');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `publicaciones`
-- 

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` text NOT NULL,
  `descripcion_corta` text,
  `contenido` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `publicaciones`
-- 

INSERT INTO `publicaciones` VALUES (1, 'Investigacion Sobre Inteligencia Artifical en Ratones', 'Buscando nuevos horizontes', '<a href="#" class="image image-full"><img src="img/n33-robot-invader.jpg" alt=""></a>\r\n<p>\r\n				<strong>Probando!</strong> probando enlaces <a href="http://html5up.net/striped/">Striped</a>, esto es un texto de prueba <a href="http://n33.co/">AJ</a>\r\n				Todo va de maravilla <a href="http://html5up.net/">HTML5 UP</a> luego esto hay que hacerlo correcto html, con un editor\r\n			</p>\r\n			<p>\r\n				De esta forma podemos editar todo adecuadamente </p>', '2013-08-25 09:59:33', '2013-08-25 13:28:55');
INSERT INTO `publicaciones` VALUES (2, 'Desarrollo de aplicaciones web', 'Una forma unica de ver la web', '<a href="#" class="image image-full"><img src="img/fotogrph-dark-stairwell.jpg" alt=""></a>\r\nEsto es una prueba de contenido, donde podemos ver como se crea una pagina web usando php, mysql, html y otras herramientas\r\n\r\njava script, javascript, otras cosas, web', '2013-09-26 10:05:33', '2013-09-26 10:05:33');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `recursomultimedias`
-- 

CREATE TABLE `recursomultimedias` (
  `id` int(11) NOT NULL auto_increment,
  `recursomultimediatipo_id` int(11) NOT NULL,
  `publicacione_id` int(11) NOT NULL,
  `ruta` text NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text,
  PRIMARY KEY  (`id`),
  KEY `fk_recursomultimedias_recursomultimediatipos_idx` (`recursomultimediatipo_id`),
  KEY `fk_recursomultimedias_publicaciones1_idx` (`publicacione_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `recursomultimedias`
-- 

INSERT INTO `recursomultimedias` VALUES (1, 1, 1, 'http://facebook7.bligoo.com.co/media/users/23/1186110/images/public/336225/inteligencia_artificial.jpg?v=1351127823215', 'Logo de inteligencia artificial', '');
INSERT INTO `recursomultimedias` VALUES (2, 2, 1, 'http://www.youtube.com/watch?v=Q5bMm-19iNQ', 'Video de inteligencia artificial y robotica', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `recursomultimediatipos`
-- 

CREATE TABLE `recursomultimediatipos` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `recursomultimediatipos`
-- 

INSERT INTO `recursomultimediatipos` VALUES (1, 'Imagen');
INSERT INTO `recursomultimediatipos` VALUES (2, 'Video');
INSERT INTO `recursomultimediatipos` VALUES (3, 'Audio');
INSERT INTO `recursomultimediatipos` VALUES (4, 'Archivo Comprimido');
INSERT INTO `recursomultimediatipos` VALUES (5, 'Documento de Texto');
INSERT INTO `recursomultimediatipos` VALUES (6, 'Presentacion');
INSERT INTO `recursomultimediatipos` VALUES (7, 'Hoja de Calculo');
INSERT INTO `recursomultimediatipos` VALUES (8, 'Base de Datos');
INSERT INTO `recursomultimediatipos` VALUES (9, 'Texto Plano');
INSERT INTO `recursomultimediatipos` VALUES (10, 'Otro');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `unidadinvestigaciones`
-- 

CREATE TABLE `unidadinvestigaciones` (
  `id` int(11) NOT NULL auto_increment,
  `instituto_id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_unidadinvestigaciones_institutos1_idx` (`instituto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `unidadinvestigaciones`
-- 

INSERT INTO `unidadinvestigaciones` VALUES (1, 1, 'Unidad de Estudios Avanzados');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_users_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `users`
-- 

INSERT INTO `users` VALUES (1, 1, 'wuilliam321', '123321');

-- 
-- Filtros para las tablas descargadas (dump)
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
