-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2015 a las 06:48:16
-- Versión del servidor: 5.0.51b-community-nt-log
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crazzyfood`
--
CREATE DATABASE IF NOT EXISTS `crazzyfood` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `crazzyfood`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda`
--

DROP TABLE IF EXISTS `ayuda`;
CREATE TABLE IF NOT EXISTS `ayuda` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mensaje` varchar(500) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
-- Volcado de datos para la tabla `ayuda`
--

INSERT INTO `ayuda` (`Id`, `Nombre`, `Email`, `Mensaje`) VALUES
(4, 'andres', 'wqeqw@hotmail.com', 'qwewqeqwewqe'),
(5, 'wqewqe', 'wqeqw@hotmail.com', 'asdsadsadsadsadasdwseqwewesdsadasd'),
(6, 'wqewqe', 'wqeqw@hotmail.com', 'asdsadsadsadsadasdwseqwewesdsadasd'),
(7, 'wqewqe', 'wqeqw@hotmail.com', 'xzcsadsadsad');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabecera_orden`
--

DROP TABLE IF EXISTS `cabecera_orden`;
CREATE TABLE IF NOT EXISTS `cabecera_orden` (
  `Id` int(11) NOT NULL auto_increment,
  `Direccion_Entrega` varchar(300) NOT NULL,
  `Referencia` varchar(100) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Usuario_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `fk_Cabecera_Orden_Usuario1_idx` (`Usuario_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

--
-- Volcado de datos para la tabla `cabecera_orden`
--

INSERT INTO `cabecera_orden` (`Id`, `Direccion_Entrega`, `Referencia`, `Telefono`, `Usuario_Id`) VALUES
(1, 'Acuarela', 'Autopista Terminal Pascuales', '33322244', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id`, `Nombre`) VALUES
(1, 'Cafe'),
(2, 'Pizza'),
(3, 'Carnes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `Nombre`) VALUES
(1, 'Quito'),
(2, 'Cuenca'),
(3, 'Guayaquil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Numero_tarjeta` varchar(45) NOT NULL,
  `Tipo_Cliente_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `fk_Cliente_Tipo_Cliente_idx` (`Tipo_Cliente_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id`, `Nombre`, `Apellido`, `Email`, `Numero_tarjeta`, `Tipo_Cliente_Id`) VALUES
(1, 'Carlos', 'Leon', 'ac@gmail.com', '22233344', 1),
(2, 'andres', 'moreira', 'mor@hotmail.com', '1236745', 1);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

DROP TABLE IF EXISTS `detalle_orden`;
CREATE TABLE IF NOT EXISTS `detalle_orden` (
  `Id` int(11) NOT NULL auto_increment,
  `Linea` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `Total` double NOT NULL,
  `Cabecera_Orden_Id` int(11) NOT NULL,
  `Plato_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `fk_Detalle_Orden_Cabecera_Orden1_idx` (`Cabecera_Orden_Id`),
  KEY `fk_Detalle_Orden_Plato1_idx` (`Plato_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `detalle_orden`
--

INSERT INTO `detalle_orden` (`Id`, `Linea`, `cantidad`, `Total`, `Cabecera_Orden_Id`, `Plato_Id`) VALUES
(1, 1, 2, 3.04, 1, 2),
(2, 2, 3, 3.75, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

DROP TABLE IF EXISTS `direccion`;
CREATE TABLE IF NOT EXISTS `direccion` (
  `Id` int(11) NOT NULL auto_increment,
  `secuencia` int(11) NOT NULL,
  `Parroquia` varchar(100) NOT NULL,
  `Calle_principal` varchar(100) NOT NULL,
  `numero_domicilio` varchar(100) NOT NULL,
  `descripcion` varchar(300) default NULL,
  `Cliente_Id` int(11) NOT NULL,
  `Ciudad_id` int(11) NOT NULL,
  `Sucursal_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`,`secuencia`),
  KEY `fk_Direccion_Cliente1_idx` (`Cliente_Id`),
  KEY `fk_Direccion_Ciudad1_idx` (`Ciudad_id`),
  KEY `fk_Direccion_Sucursal1_idx` (`Sucursal_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `ID` int(11) NOT NULL auto_increment,
  `Hora_Entrada` date NOT NULL,
  `Hora_Cierre` date NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `Id` int(11) NOT NULL auto_increment,
  `Id_sucursal` int(11) NOT NULL,
  `Id_plato` int(11) NOT NULL,
  `Sucursal_Id` int(11) NOT NULL,
  `Plato_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`,`Id_sucursal`,`Id_plato`),
  KEY `fk_Menu_Sucursal1_idx` (`Sucursal_Id`),
  KEY `fk_Menu_Plato1_idx` (`Plato_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `Id` int(11) NOT NULL auto_increment,
  `Linea` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `Total` double NOT NULL,
  `Cabecera_Orden_Id` int(11) NOT NULL,
  `Plato_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `fk_Pedido_Cabecera_Orden1_idx` (`Cabecera_Orden_Id`),
  KEY `fk_Pedido_Plato1_idx` (`Plato_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Id`, `Linea`, `cantidad`, `Total`, `Cabecera_Orden_Id`, `Plato_Id`) VALUES
(1, 1, 2, 3.04, 1, 2),
(2, 2, 3, 3.75, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

DROP TABLE IF EXISTS `plato`;
CREATE TABLE IF NOT EXISTS `plato` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(100) NOT NULL,
  `Precio` double NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `imagen` varchar(45) default NULL,
  `Categoria_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `fk_Plato_Categoria1_idx` (`Categoria_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`Id`, `Nombre`, `Precio`, `Descripcion`, `imagen`, `Categoria_Id`) VALUES
(2, 'Mocachino', 1.52, 'Cafe con chocolate', 'mocachino.jpg', 1),
(3, 'Americana', 12.52, 'Queso y Jamon', NULL, 2),
(4, 'Vegetariana', 15.22, 'Sin carne, saludable', NULL, 2),
(5, 'Capuchino', 1.25, 'Cafe con leche', 'capuchino.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE IF NOT EXISTS `sucursal` (
  `Id` int(11) NOT NULL auto_increment,
  `Ruc` varchar(13) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Horario_ID` int(11) NOT NULL,
  `Marca_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `fk_Sucursal_Horario1_idx` (`Horario_ID`),
  KEY `fk_Sucursal_Marca1_idx` (`Marca_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE IF NOT EXISTS `telefono` (
  `id` int(11) NOT NULL auto_increment,
  `Secuencia` int(11) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Cliente_Id` int(11) NOT NULL,
  `Sucursal_Id` int(11) NOT NULL,
  PRIMARY KEY  (`id`,`Secuencia`),
  KEY `fk_Telefono_Cliente1_idx` (`Cliente_Id`),
  KEY `fk_Telefono_Sucursal1_idx` (`Sucursal_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

DROP TABLE IF EXISTS `tipo_cliente`;
CREATE TABLE IF NOT EXISTS `tipo_cliente` (
  `Id` int(11) NOT NULL auto_increment,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`Id`, `Descripcion`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(11) NOT NULL auto_increment,
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Cliente_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `fk_Usuario_Cliente1_idx` (`Cliente_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Usuario`, `Contraseña`, `Cliente_Id`) VALUES
(1, 'carlos', 'leon', 1),
(2, 'qqwewqe', 'wqeqwew', 2);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
