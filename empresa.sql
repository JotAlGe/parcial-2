-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2021 at 01:08 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `Legajo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Departamento` varchar(250) NOT NULL,
  `Sueldo` float NOT NULL,
  PRIMARY KEY (`Legajo`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`Legajo`, `Nombre`, `Departamento`, `Sueldo`) VALUES
(1, 'Juan', 'Marketing', 100),
(2, 'Antonio', 'Marketing', 500),
(3, 'Jorge', 'Compras', 300),
(4, 'JosÃ© Rodriguez', 'Ventas', 550),
(5, 'FabiÃ¡n Arredondo', 'Marketing', 530),
(6, 'Roberto Pereyra', 'Ventas', 420),
(7, 'Ernesto Rosales', 'Marketing', 280),
(8, 'MarÃ­a Lopez', 'Ventas', 325),
(9, 'Julia Zalazar', 'Ventas', 660),
(10, 'Mariano GonzÃ¡lez', 'Compras', 370),
(11, 'Juliana GonzÃ¡lez', 'Ventas', 280),
(12, 'Mario Aguirre', 'Marketing', 580),
(13, 'Gilberto Suarez', 'Ventas', 410),
(14, 'Mabel Yacante', 'Marketing', 120),
(15, 'Melisa Salas', 'Ventas', 132);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
