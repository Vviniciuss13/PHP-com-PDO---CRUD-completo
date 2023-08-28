-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Jun-2022 às 03:24
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ods_4`
--
CREATE DATABASE IF NOT EXISTS `ods_4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ods_4`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email_aluno` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ano` int DEFAULT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `ddd_aluno` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `matriculado` bit(1) NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `email_aluno`, `ano`, `celular`, `ddd_aluno`, `matriculado`) VALUES
(19, 'iveli', 'iveli@gmail.com', 8, '94238-4325', '15', b'1'),
(13, 'Sofia', 'sofia@gmail.com', 4, '55435-4323', '12', b'1'),
(14, 'Julia', 'julia@gmail.com', 7, '54345-3213', '12', b'1'),
(16, 'jose', 'ze@gmail.com', 7, '97654-3245', '15', b'1'),
(18, 'saul', 'saul@gmail.com', 7, '99423-4213', '15', b'0'),
(20, 'tinoco', 'tinoco@gmail.com', 4, '85341-2315', '15', b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

DROP TABLE IF EXISTS `escola`;
CREATE TABLE IF NOT EXISTS `escola` (
  `id_escola` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `ddd` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id_escola`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`id_escola`, `nome`, `email`, `site`, `telefone`, `ddd`) VALUES
(10, 'Maria Jose', 'majo@gmail.com', 'https://majo.com', '4324-4321', '12'),
(12, 'altina', 'altina@gov.com.br', 'https://altina.com.br', '3251-7605', '15'),
(13, 'chico pereira', 'chico@gov.com.br', 'https://chico.com.br', '3259-6549', '15'),
(14, 'Deocles', 'deocles@gov.com.br', 'https://deocles.com.br', '3215-5432', '32'),
(15, 'Elenice', 'elenice@gov.com.br', 'https://elenice.com', '5432-4213', '15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

DROP TABLE IF EXISTS `matricula`;
CREATE TABLE IF NOT EXISTS `matricula` (
  `id_aluno` int NOT NULL,
  `id_escola` int NOT NULL,
  `id_matricula` int NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  PRIMARY KEY (`id_matricula`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`id_aluno`, `id_escola`, `id_matricula`, `data`) VALUES
(13, 10, 27, '2022-04-05'),
(15, 11, 26, '2022-04-05'),
(14, 13, 28, '2022-06-01'),
(16, 14, 31, '2022-06-03'),
(19, 16, 30, '2022-06-03'),
(21, 18, 33, '2022-06-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
