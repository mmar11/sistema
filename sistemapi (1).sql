-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2022 às 00:44
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemapi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_admin`
--

CREATE TABLE `cad_admin` (
  `id` int(11) NOT NULL,
  `login` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `senha1` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `cad_admin`
--

INSERT INTO `cad_admin` (`id`, `login`, `email`, `tel`, `senha1`) VALUES
(2, 'mmm', 'sdwqd@dsqafda.ca', 345, '111'),
(3, 'mmm', 'sdwqd@dsqafda.ca', 345, '111'),
(4, 'mmm', 'sdwqd@dsqafda.ca', 345, '111'),
(5, 'mmm', 'sdwqd@dsqafda.ca', 345, '444'),
(6, 'mmm', 'sdwqd@dsqafda.ca', 345, '444'),
(7, 'mmm', 'sdwqd@dsqafda.ca', 345, '333'),
(8, 'mmm', 'sdwqd@dsqafda.ca', 345, '555'),
(9, 'marcelomariano11@gmail.com', 'sdwqd@dsqafda.ca', 345, '$2y$10$WyvbNzjyyfireW9cJszRCOa3nZ6M0sbZzA0.4USpzpSsKFlO3zXhO'),
(10, 'teste', 'sdwqd@dsqafda.ca', 345, '$2y$10$ykhXVndZxchkcFr6kd7TLutBAWYBQnM7vBdwHb76K.nCxACqcNN.O');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_alunos`
--

CREATE TABLE `cad_alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `escolaridade` int(11) NOT NULL,
  `nivel` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `matricula` int(11) NOT NULL,
  `telefone` bigint(14) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `cad_alunos`
--

INSERT INTO `cad_alunos` (`id`, `nome`, `data_nasc`, `endereco`, `escolaridade`, `nivel`, `matricula`, `telefone`, `email`, `cpf`) VALUES
(2, 'Marcelo Mariano', '1999-11-12', 'paripe', 8, 'fundamental', 35245, 71985477878, 'marcelo@gmail.com', '2147483647'),
(3, 'Italo', '1994-04-18', 'saramandaia', 2, 'médio', 35246, 71988555588, 'italo@gmail.com', '2136578498'),
(4, 'Fernando', '1990-05-12', 'Horto Florestal', 7, 'fundamental', 35247, 71932121329, 'fernando@gmail.com', '2147483647'),
(5, 'Felipe', '2004-05-13', 'Horto Florestal', 1, 'fundamental', 35248, 71984547878, 'felipe@yahoo.com', '214578458'),
(7, 'Eduardo', '2001-03-23', 'massaranduba', 2, 'médio', 35250, 71321548754, 'eduardo@hotmail.com', '2147483647'),
(9, 'Natalia', '2002-06-21', 'cajazeiras', 4, 'fundamental', 35214, 7198989898, 'natalia@gmail.com', '321245789'),
(11, 'Paulo Guima', '1985-12-12', 'Brotas', 3, 'fundamental', 35216, 71945457812, 'paulo.g@gmail.com', '321298456'),
(13, 'Paulo Cesar', '1979-12-21', 'Barra', 6, 'fundamental', 35218, 719457812, 'paulo.c@gmail.com', '67298487412'),
(14, 'Luiz Otávio', '1978-12-17', 'rua colmeia', 4, 'fundamental', 321458, 71984875487, 'luiz@yahoo.com', '67584578500'),
(15, 'Luiz Otávio', '1978-12-17', 'rua colmeia', 4, 'fundamental', 321458, 71984875487, 'luiz@yahoo.com', '67584578500'),
(25, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(32, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(33, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(34, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(35, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(36, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(37, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(38, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(39, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(40, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(41, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(42, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(43, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(44, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(45, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(46, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111'),
(47, 'dffdddf', '2022-06-23', 'effdseefsd', 8, 'medio', 99999, 999998855, 'sdwqd@dsqafda.ca', '11111111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagens`
--

CREATE TABLE `linguagens` (
  `id` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `css` int(11) NOT NULL,
  `php` int(11) NOT NULL,
  `uxui` int(11) NOT NULL,
  `github` int(11) NOT NULL,
  `id_alunos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_admin`
--
ALTER TABLE `cad_admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cad_alunos`
--
ALTER TABLE `cad_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `linguagens`
--
ALTER TABLE `linguagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idalunoFK` (`id_alunos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_admin`
--
ALTER TABLE `cad_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `cad_alunos`
--
ALTER TABLE `cad_alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `linguagens`
--
ALTER TABLE `linguagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `linguagens`
--
ALTER TABLE `linguagens`
  ADD CONSTRAINT `idalunoFK` FOREIGN KEY (`id_alunos`) REFERENCES `cad_alunos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
