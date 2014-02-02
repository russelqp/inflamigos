-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2012 at 11:29 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `armatuevento`
--

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(2500) NOT NULL,
  `celular` int(20) NOT NULL,
  `nextel` int(20) NOT NULL,
  `telefono` int(20) NOT NULL,
  `url` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `descripcion`, `celular`, `nextel`, `telefono`, `url`, `email`, `twitter`, `facebook`, `direccion`, `categoria`, `imagen`) VALUES
(1, 'Yareni', 'Aplicación de uñas de acrilico.', 2147483647, 0, 0, 'http://', '############', '########', '########', '###################', 'unas-de-acrilico', 'imagen-yareni'),
(2, 'Jax Sound', 'Luz y Sonido', 2147483647, 0, 0, 'http://', '####', '@Mau', '####', '', 'luz-y-sonido', 'imagen-jax-sound');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
