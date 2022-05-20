-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2022 às 06:04
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestao_atm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `id` int(11) NOT NULL,
  `numero_conta` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `data_abertura` datetime NOT NULL,
  `saldo` int(11) NOT NULL,
  `ATMPin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id`, `numero_conta`, `nome`, `data_abertura`, `saldo`, `ATMPin`) VALUES
(1, 100121, 'Dinis Matavele', '2022-05-19 03:21:13', 53510, 81),
(2, 100122, 'Dennylson Guambe', '2022-05-19 03:21:13', 66000, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `credelec`
--

CREATE TABLE `credelec` (
  `cred_id` int(11) NOT NULL,
  `valor_credelec` int(11) NOT NULL,
  `data_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `idConta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `credito`
--

CREATE TABLE `credito` (
  `cre_id` int(11) NOT NULL,
  `valor_credito` int(11) NOT NULL,
  `data_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `idConta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `levantamento`
--

CREATE TABLE `levantamento` (
  `lev_id` int(11) NOT NULL,
  `valor_levantamento` int(11) NOT NULL,
  `data_levantamento` datetime NOT NULL DEFAULT current_timestamp(),
  `idConta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacoes`
--

CREATE TABLE `transacoes` (
  `TraID` int(11) NOT NULL,
  `TraData` datetime NOT NULL DEFAULT current_timestamp(),
  `idConta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `transacoes`
--

INSERT INTO `transacoes` (`TraID`, `TraData`, `idConta`) VALUES
(1, '0000-00-00 00:00:00', 1),
(2, '0000-00-00 00:00:00', 1),
(3, '0000-00-00 00:00:00', 1),
(4, '0000-00-00 00:00:00', 1),
(5, '0000-00-00 00:00:00', 1),
(6, '0000-00-00 00:00:00', 1),
(7, '0000-00-00 00:00:00', 1),
(8, '0000-00-00 00:00:00', 1),
(9, '0000-00-00 00:00:00', 1),
(10, '0000-00-00 00:00:00', 1),
(11, '0000-00-00 00:00:00', 1),
(12, '0000-00-00 00:00:00', 1),
(13, '0000-00-00 00:00:00', 1),
(14, '0000-00-00 00:00:00', 1),
(15, '0000-00-00 00:00:00', 1),
(16, '0000-00-00 00:00:00', 1),
(17, '0000-00-00 00:00:00', 1),
(18, '0000-00-00 00:00:00', 1),
(19, '0000-00-00 00:00:00', 1),
(20, '0000-00-00 00:00:00', 1),
(21, '0000-00-00 00:00:00', 1),
(22, '0000-00-00 00:00:00', 1),
(23, '0000-00-00 00:00:00', 1),
(24, '0000-00-00 00:00:00', 1),
(25, '0000-00-00 00:00:00', 1),
(26, '0000-00-00 00:00:00', 1),
(27, '0000-00-00 00:00:00', 1),
(28, '0000-00-00 00:00:00', 1),
(29, '0000-00-00 00:00:00', 1),
(30, '0000-00-00 00:00:00', 1),
(31, '0000-00-00 00:00:00', 1),
(32, '0000-00-00 00:00:00', 1),
(33, '0000-00-00 00:00:00', 1),
(34, '0000-00-00 00:00:00', 1),
(35, '0000-00-00 00:00:00', 1),
(36, '0000-00-00 00:00:00', 1),
(37, '0000-00-00 00:00:00', 1),
(38, '0000-00-00 00:00:00', 1),
(39, '0000-00-00 00:00:00', 1),
(42, '0000-00-00 00:00:00', 1),
(43, '0000-00-00 00:00:00', 1),
(44, '0000-00-00 00:00:00', 1),
(45, '0000-00-00 00:00:00', 1),
(46, '0000-00-00 00:00:00', 1),
(47, '0000-00-00 00:00:00', 1),
(48, '0000-00-00 00:00:00', 1),
(49, '2020-05-22 12:24:25', 1),
(50, '2020-05-22 12:24:35', 1),
(51, '2020-05-22 12:24:46', 1),
(52, '2020-05-22 12:32:33', 1),
(53, '2020-05-22 12:35:32', 1),
(54, '2020-05-22 12:37:32', 1),
(55, '2020-05-22 02:51:05', 1),
(56, '2020-05-22 03:04:17', 1),
(57, '2020-05-22 03:05:27', 1),
(58, '2020-05-22 03:06:09', 1),
(59, '2020-05-22 03:06:17', 1),
(60, '2020-05-22 03:06:49', 1),
(61, '0000-00-00 00:00:00', 2),
(62, '2020-05-22 03:23:55', 1),
(63, '2020-05-22 03:24:07', 1),
(64, '2020-05-22 03:42:11', 1),
(65, '2020-05-22 03:42:19', 1),
(66, '2020-05-22 03:44:00', 1),
(67, '2020-05-22 03:44:47', 1),
(68, '2020-05-22 03:45:06', 1),
(69, '2022-05-19 13:58:42', 1),
(70, '2022-05-19 14:06:03', 1),
(71, '0000-00-00 00:00:00', 1),
(72, '2022-05-19 14:10:01', 1),
(73, '2020-05-22 04:14:04', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `credelec`
--
ALTER TABLE `credelec`
  ADD PRIMARY KEY (`cred_id`);

--
-- Índices para tabela `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`cre_id`);

--
-- Índices para tabela `levantamento`
--
ALTER TABLE `levantamento`
  ADD PRIMARY KEY (`lev_id`);

--
-- Índices para tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD PRIMARY KEY (`TraID`),
  ADD KEY `idTra` (`idConta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `credito`
--
ALTER TABLE `credito`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `levantamento`
--
ALTER TABLE `levantamento`
  MODIFY `lev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `transacoes`
--
ALTER TABLE `transacoes`
  MODIFY `TraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD CONSTRAINT `transacoes_ibfk_1` FOREIGN KEY (`idConta`) REFERENCES `conta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
