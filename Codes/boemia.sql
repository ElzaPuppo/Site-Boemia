-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Set-2020 às 23:03
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `boemia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_convidados`
--

DROP TABLE IF EXISTS `tabela_convidados`;
CREATE TABLE IF NOT EXISTS `tabela_convidados` (
  `email_usuario` varchar(30) NOT NULL,
  `id_convidado` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `verificado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_convidado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_evento`
--

DROP TABLE IF EXISTS `tabela_evento`;
CREATE TABLE IF NOT EXISTS `tabela_evento` (
  `email_usuario` varchar(30) NOT NULL,
  `texto_convite` text NOT NULL,
  `data_hora` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  PRIMARY KEY (`email_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_evento_profissional`
--

DROP TABLE IF EXISTS `tabela_evento_profissional`;
CREATE TABLE IF NOT EXISTS `tabela_evento_profissional` (
  `email_usuario` varchar(30) NOT NULL,
  `id_profissional` int(5) NOT NULL,
  PRIMARY KEY (`email_usuario`,`id_profissional`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_orcamento`
--

DROP TABLE IF EXISTS `tabela_orcamento`;
CREATE TABLE IF NOT EXISTS `tabela_orcamento` (
  `email_usuario` varchar(30) NOT NULL,
  `qtd_adultos` int(10) NOT NULL,
  `qtd_criancas` int(10) NOT NULL,
  PRIMARY KEY (`email_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_profissionais`
--

DROP TABLE IF EXISTS `tabela_profissionais`;
CREATE TABLE IF NOT EXISTS `tabela_profissionais` (
  `id_funcionario` int(5) NOT NULL,
  `tipo_servico` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_usuario`
--

DROP TABLE IF EXISTS `tabela_usuario`;
CREATE TABLE IF NOT EXISTS `tabela_usuario` (
  `nome_usuario` varchar(100) NOT NULL,
  `sobrenome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`email_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_usuario`
--

INSERT INTO `tabela_usuario` (`nome_usuario`, `sobrenome_usuario`, `email_usuario`, `senha_usuario`) VALUES
('q', 'q', 'q', '8a5db4b913228fd0cc16f2cb3feacc56d0ff09a7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
