-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jun-2019 às 20:20
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `ISBN` int(13) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editora` varchar(80) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `ano` int(4) NOT NULL,
  `qtdPaginas` int(11) NOT NULL,
  `classificacao` varchar(50) NOT NULL,
  `sinopse` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `livro`:
--

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `ISBN`, `autor`, `editora`, `genero`, `ano`, `qtdPaginas`, `classificacao`, `sinopse`) VALUES
(2, 'Quatro Vidas de um Cachorro', 2147483647, 'W. Bruce Cameron', 'HarperCollins Brasil', 'FicÃ§Ã£o', 2016, 200, 'Abandonei', 'Esta Ã© a inesquecÃ­vel histÃ³ria de um cÃ£o...');

-- --------------------------------------------------------

--
-- Estrutura da tabela `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `livro` varchar(300) NOT NULL,
  `dataInicio` date NOT NULL,
  `dataFinal` date NOT NULL,
  `pgResultado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `meta`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nomeCompleto` varchar(150) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONSHIPS FOR TABLE `usuario`:
--

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nomeCompleto`, `sexo`, `dataNascimento`, `cidade`, `estado`, `email`) VALUES
(5, 'Maria Regina Cerbaro', 'F', '2000-08-30', 'Interior', 'Rio Grande do Sul', '172979@upf.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
