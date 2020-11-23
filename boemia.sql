-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2020 às 12:47
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `tabela_convidados` (
  `email_usuario` varchar(30) NOT NULL,
  `id_convidado` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `telefone` int(11) NOT NULL,
  `verificado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_convidados`
--

INSERT INTO `tabela_convidados` (`email_usuario`, `id_convidado`, `nome`, `sobrenome`, `telefone`, `verificado`) VALUES
('b', 1, 'a', 'a', 33, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_evento`
--

CREATE TABLE `tabela_evento` (
  `email_usuario` varchar(30) NOT NULL,
  `texto_convite` text NOT NULL,
  `data_hora` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_evento`
--

INSERT INTO `tabela_evento` (`email_usuario`, `texto_convite`, `data_hora`, `local`) VALUES
('a', 'a', 'a', 'a'),
('q', 'asas', 'sas', 'sasa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_evento_profissional`
--

CREATE TABLE `tabela_evento_profissional` (
  `email_usuario` varchar(30) NOT NULL,
  `id_profissional` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_evento_profissional`
--

INSERT INTO `tabela_evento_profissional` (`email_usuario`, `id_profissional`) VALUES
('a', 1),
('a', 3),
('a', 6),
('elza.mp@hotmail.com', 1),
('elza.mp@hotmail.com', 2),
('q', 7),
('q', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_orcamento`
--

CREATE TABLE `tabela_orcamento` (
  `email_usuario` varchar(30) NOT NULL,
  `qtd_adultos` int(10) NOT NULL,
  `qtd_criancas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_orcamento`
--

INSERT INTO `tabela_orcamento` (`email_usuario`, `qtd_adultos`, `qtd_criancas`) VALUES
('a', 3, 3),
('q', 454, 49);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_profissionais`
--

CREATE TABLE `tabela_profissionais` (
  `id_funcionario` int(5) NOT NULL,
  `tipo_servico` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `valor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_profissionais`
--

INSERT INTO `tabela_profissionais` (`id_funcionario`, `tipo_servico`, `nome`, `cidade`, `cep`, `telefone`, `valor`) VALUES
(1, 'fotografia', 'Joana Fontes', 'São Paulo', '78909-000', '129011290', 300),
(2, 'fotografia', 'Isadora Flores', 'São Paulo', '78909-000', '(12201290', 300),
(3, 'fotografia', 'Carlos Nogueira', 'São Paulo', '78909-000', '(1290-1290', 300),
(4, 'dj', 'Luana Telles', 'São Paulo', '78909-000', '1920129', 600),
(5, 'dj', 'Lucca Trigo', 'São Paulo', '78909-000', '120120', 500),
(6, 'dj', 'Marcia Conde', 'São Paulo', '78909-000', '20120', 300),
(7, 'decoracao', 'Flávia Antunes', 'São Paulo', '78909-000', '1201290', 700),
(8, 'decoracao', 'Rosana Gomes', 'São Paulo', '78909-000', '120190', 300),
(9, 'decoracao', 'Marina Braga', 'São Paulo', '78909-000', '190120', 900);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_usuario`
--

CREATE TABLE `tabela_usuario` (
  `nome_usuario` varchar(100) NOT NULL,
  `sobrenome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_usuario`
--

INSERT INTO `tabela_usuario` (`nome_usuario`, `sobrenome_usuario`, `email_usuario`, `senha_usuario`) VALUES
('a', 'a', 'a', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe'),
('a', 'a', 'b', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe'),
('a', 'a', 'elza.mp@hotmail.com', '0bdc9d2d256b3ee9daae347be6f4dc835a467ffe'),
('q', 'q', 'q', '8a5db4b913228fd0cc16f2cb3feacc56d0ff09a7');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela_convidados`
--
ALTER TABLE `tabela_convidados`
  ADD PRIMARY KEY (`id_convidado`);

--
-- Índices para tabela `tabela_evento`
--
ALTER TABLE `tabela_evento`
  ADD PRIMARY KEY (`email_usuario`);

--
-- Índices para tabela `tabela_evento_profissional`
--
ALTER TABLE `tabela_evento_profissional`
  ADD PRIMARY KEY (`email_usuario`,`id_profissional`);

--
-- Índices para tabela `tabela_orcamento`
--
ALTER TABLE `tabela_orcamento`
  ADD PRIMARY KEY (`email_usuario`);

--
-- Índices para tabela `tabela_profissionais`
--
ALTER TABLE `tabela_profissionais`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `tabela_usuario`
--
ALTER TABLE `tabela_usuario`
  ADD PRIMARY KEY (`email_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_convidados`
--
ALTER TABLE `tabela_convidados`
  MODIFY `id_convidado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
