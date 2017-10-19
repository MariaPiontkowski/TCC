-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Out-2017 às 14:21
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportteams`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `esporte`
--

CREATE TABLE `esporte` (
  `id_esporte` int(11) NOT NULL,
  `volei` varchar(100) NOT NULL,
  `basquete` varchar(100) NOT NULL,
  `futebol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `esporte`
--

INSERT INTO `esporte` (`id_esporte`, `volei`, `basquete`, `futebol`) VALUES
(1, 'oposto', 'libero', 'saida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `data` datetime NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_usuario`
--

CREATE TABLE `info_usuario` (
  `id_info` int(11) NOT NULL,
  `peso` double NOT NULL,
  `altura` double NOT NULL,
  `sexo` char(1) NOT NULL,
  `data_nasc` date NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `fk_esporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `info_usuario`
--

INSERT INTO `info_usuario` (`id_info`, `peso`, `altura`, `sexo`, `data_nasc`, `estado`, `cidade`, `fk_esporte`) VALUES
(1, 50, 190, 'm', '2017-10-10', 'santa catarina', 'blumenau', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tp_usuario` int(11) NOT NULL,
  `fk_info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `senha`, `tp_usuario`, `fk_info`) VALUES
(1, 'Kevin Katzer', 'kevinka999@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `esporte`
--
ALTER TABLE `esporte`
  ADD PRIMARY KEY (`id_esporte`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indexes for table `info_usuario`
--
ALTER TABLE `info_usuario`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `fk_esporte` (`fk_esporte`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_info` (`fk_info`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `esporte`
--
ALTER TABLE `esporte`
  MODIFY `id_esporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info_usuario`
--
ALTER TABLE `info_usuario`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `info_usuario`
--
ALTER TABLE `info_usuario`
  ADD CONSTRAINT `info_usuario_ibfk_1` FOREIGN KEY (`fk_esporte`) REFERENCES `esporte` (`id_esporte`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_info`) REFERENCES `info_usuario` (`id_info`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
