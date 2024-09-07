-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Abr-2024 às 01:48
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `secretaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armario`
--

CREATE TABLE IF NOT EXISTS `armario` (
  `cd` int(11) NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(45) DEFAULT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `armario`
--

INSERT INTO `armario` (`cd`, `tamanho`, `valor`, `status`) VALUES
(1, 'P', '50.00', ''),
(2, 'P', '50.00', ''),
(3, 'P', '50.00', 'vencido'),
(4, 'P', '50.00', ''),
(5, 'P', '50.00', 'ocupado'),
(6, 'P', '50.00', ''),
(7, 'P', '50.00', ''),
(8, 'P', '50.00', ''),
(9, 'P', '50.00', ''),
(10, 'P', '50.00', ''),
(11, 'P', '50.00', ''),
(12, 'P', '50.00', ''),
(13, 'P', '50.00', ''),
(14, 'P', '50.00', ''),
(15, 'P', '50.00', ''),
(16, 'P', '50.00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
