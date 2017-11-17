-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Nov-2017 às 01:48
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scriptbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `IdEndereco` int(11) NOT NULL,
  `Logradouro` varchar(50) NOT NULL,
  `Numero` smallint(6) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `CEP` int(11) NOT NULL,
  `Complemento` varchar(30) DEFAULT NULL,
  `CodigoIbge` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`IdEndereco`, `Logradouro`, `Numero`, `Bairro`, `Cidade`, `CEP`, `Complemento`, `CodigoIbge`) VALUES
(1, 'RUA MINAS GERAIS', 1200, 'Cristo', 'PATOS DE MINAS', 38700262, 'Perto do bar', 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidadefederativa`
--

CREATE TABLE `unidadefederativa` (
  `CodigoIbge` tinyint(4) NOT NULL,
  `Sigla` varchar(3) NOT NULL,
  `NomeEstado` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidadefederativa`
--

INSERT INTO `unidadefederativa` (`CodigoIbge`, `Sigla`, `NomeEstado`) VALUES
(12, 'AC', 'Acre'),
(27, 'AL', 'Alagoas'),
(13, 'AM', 'Amazonas'),
(16, 'AP', 'Amapá'),
(29, 'BA', 'Bahia'),
(23, 'CE', 'Ceará'),
(53, 'DF', 'Distrito Federal'),
(32, 'ES', 'Espírito Santo'),
(52, 'GO', 'Goiás'),
(21, 'MA', 'Maranhão'),
(31, 'MG', 'Minas Gerais'),
(50, 'MS', 'Mato Grosso do Sul'),
(51, 'MT', 'Mato Grosso'),
(15, 'PA', 'Pará'),
(25, 'PB', 'Paraíba'),
(26, 'PE', 'Pernambuco'),
(22, 'PI', 'Piauí'),
(41, 'PR', 'Paraná'),
(33, 'RJ', 'Rio de Janeiro'),
(24, 'RN', 'Rio Grande do Norte'),
(11, 'RO', 'Rondônia'),
(14, 'RR', 'Roraima'),
(43, 'RS', 'Rio Grande do Sul'),
(42, 'SC', 'Santa Catarina'),
(28, 'SE', 'Sergipe'),
(35, 'SP', 'São Paulo'),
(17, 'TO', 'Tocantins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`IdEndereco`),
  ADD KEY `unidadefederativa_endereco_fk` (`CodigoIbge`);

--
-- Indexes for table `unidadefederativa`
--
ALTER TABLE `unidadefederativa`
  ADD PRIMARY KEY (`CodigoIbge`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `IdEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
