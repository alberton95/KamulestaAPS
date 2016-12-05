-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Dez-2016 às 16:22
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aps`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `matricula` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `confSenha` varchar(50) NOT NULL,
  `observacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnh` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `observacoes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `fabricante` varchar(50) NOT NULL,
  `nChassis` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `capacidade` varchar(50) NOT NULL,
  `quantEixos` varchar(50) NOT NULL,
  `nPlaca` varchar(50) NOT NULL,
  `anoFabricacao` varchar(50) NOT NULL,
  `numFrota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`fabricante`, `nChassis`, `modelo`, `capacidade`, `quantEixos`, `nPlaca`, `anoFabricacao`, `numFrota`) VALUES
('wdwd', 'dwdwd', 'wdw', 'dwdwdw', '7', 'wdwdw', '2016-12-03', 'wdwd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculomotorista`
--

CREATE TABLE `veiculomotorista` (
  `cod` int(11) NOT NULL,
  `cnh` varchar(50) NOT NULL,
  `numFrota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`cnh`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`numFrota`(20));

--
-- Indexes for table `veiculomotorista`
--
ALTER TABLE `veiculomotorista`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veiculomotorista`
--
ALTER TABLE `veiculomotorista`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
