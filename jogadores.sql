-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Dez-2022 às 17:44
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `probase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE IF NOT EXISTS `jogadores` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `nivel` varchar(2) NOT NULL,
  `time` varchar(100) NOT NULL,
  `inicio_contrato` date NOT NULL,
  `fim_contrato` date NOT NULL,
  `valor_jogador` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`ID`, `nome`, `data_nasc`, `nivel`, `time`, `inicio_contrato`, `fim_contrato`, `valor_jogador`) VALUES
(1, 'Olivier Giroud    ', '1986-09-30', '82', 'Milan    ', '2021-07-03', '2024-01-01', 'Â£13.500.000    '),
(2, 'Sofyan Amrabat  ', '1996-08-21', '79', 'Fiorentina  ', '2020-01-11', '2024-03-11', 'Â£9.000.000  '),
(7, 'Dominik LivakoviÄ‡  ', '1995-01-09', '83', 'Dinamo Zagreb  ', '2015-01-01', '2024-01-01', 'Â£22.500.000  '),
(6, 'Sofiane Boufal ', '1993-09-17', '77', 'Angers SCO ', '2020-01-01', '2024-08-01', 'Â£7.500.000 '),
(8, 'Lionel AndrÃ©s Messi Cuccittini', '1987-07-24', '91', 'Paris Saint Germain', '2021-01-01', '2023-01-01', 'Â£54.000.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
