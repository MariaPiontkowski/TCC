-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Nov-2017 às 01:30
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_in_usuario` (IN `p_nome` VARCHAR(100), IN `p_email` VARCHAR(100), IN `p_senha` VARCHAR(100), IN `p_imagem` VARCHAR(100), IN `p_peso` DOUBLE, IN `p_altura` DOUBLE, IN `p_sexo` CHAR(1), IN `p_data_nasc` DATE, IN `p_estado` VARCHAR(100), IN `p_cidade` VARCHAR(100), IN `p_posicao_volei` VARCHAR(100), IN `p_posicao_basquete` VARCHAR(100), IN `p_posicao_futebol` VARCHAR(100))  BEGIN

  INSERT INTO usuario VALUES(
    NULL, 
    p_nome,
    p_email,
    p_senha,
    p_imagem
  );

  SET @id = LAST_INSERT_ID();

  INSERT INTO usuario_info VALUES(
    @id,
    p_peso,
    p_altura,
    p_sexo,
    p_data_nasc,
    p_estado,
    p_cidade
  );

  INSERT INTO usuario_esporte VALUES(
    @id,
    p_posicao_volei,
    p_posicao_basquete,
    p_posicao_futebol
  );


END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `nome_time` varchar(80) DEFAULT NULL,
  `cidade_time` varchar(80) DEFAULT NULL,
  `estado_time` varchar(80) DEFAULT NULL,
  `time_esporte` varchar(50) DEFAULT NULL,
  `imagem_time` varchar(100) DEFAULT NULL,
  `fk_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `time`
--

INSERT INTO `time` (`id`, `nome_time`, `cidade_time`, `estado_time`, `time_esporte`, `imagem_time`, `fk_usuario`) VALUES
(6, 'Karasuno', 'Blumenau', 'Santa Catarina', 'Volei', '6280f06275b3a759717721c85b4e6a99.png', 11),
(7, 'Futeba Foda', 'Santa Catarina', 'Blumenau', 'Futebol', '6526f546ce3c3dc90ddc0bff0cb11ae3.jpg', 13),
(8, 'Cidade Completa', 'Zambube', 'Xurisso', 'Volei', 'b1f69790fca25f939e256ad9d97f01ee.jpg', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `time_usuarios`
--

CREATE TABLE `time_usuarios` (
  `id_time` int(11) NOT NULL,
  `fk_usuario` int(11) DEFAULT NULL,
  `fk_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `time_usuarios`
--

INSERT INTO `time_usuarios` (`id_time`, `fk_usuario`, `fk_time`) VALUES
(1, 11, 6),
(2, 13, 6),
(3, 11, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `imagem`) VALUES
(11, 'Kevin Katzer', 'kevinka999@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '380d07fb38591e5158413d2dda7dfa9b.jpg'),
(12, 'Joao Saidel', 'joaosaidel@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6cf256f2bf7b2c129ce5da7206315044.jpg'),
(13, 'Fabricio da Silva', 'fabriciosilva@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '64296a772120b99940f033615f3b8232.jpg'),
(14, 'Miguel Santo', 'miguels@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '6eba1976b5188a34249728d79072468c.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_esporte`
--

CREATE TABLE `usuario_esporte` (
  `id_usuario` int(11) NOT NULL,
  `posicao_volei` varchar(100) NOT NULL,
  `posicao_basquete` varchar(100) NOT NULL,
  `posicao_futebol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `usuario_esporte`
--

INSERT INTO `usuario_esporte` (`id_usuario`, `posicao_volei`, `posicao_basquete`, `posicao_futebol`) VALUES
(11, 'Levantador', 'NULL', 'NULL'),
(12, 'Oposto', 'NULL', 'Meio Campo'),
(13, 'Central', 'NULL', 'Meio Campo'),
(14, 'LÃ­bero', 'Ala-pivo', 'NULL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_info`
--

CREATE TABLE `usuario_info` (
  `id_usuario` int(11) NOT NULL,
  `peso` double NOT NULL,
  `altura` double NOT NULL,
  `sexo` char(1) NOT NULL,
  `data_nasc` date NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `usuario_info`
--

INSERT INTO `usuario_info` (`id_usuario`, `peso`, `altura`, `sexo`, `data_nasc`, `estado`, `cidade`) VALUES
(11, 90, 1.9, 'm', '1999-03-06', 'Blumenau', 'Santa catarina'),
(12, 70, 1.82, 'm', '1999-12-12', 'Blumenau', 'Santa catarina'),
(13, 80, 1.91, 'm', '1999-01-12', 'Blumenau', 'Santa catarina'),
(14, 60, 1.7, 'm', '1999-12-12', 'Blumenau', 'Santa catarina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_time_usuario` (`fk_usuario`);

--
-- Indexes for table `time_usuarios`
--
ALTER TABLE `time_usuarios`
  ADD PRIMARY KEY (`id_time`),
  ADD KEY `FK_time_usuarios_usuario` (`fk_usuario`),
  ADD KEY `FK_time_usuarios_time` (`fk_time`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `usuario_esporte`
--
ALTER TABLE `usuario_esporte`
  ADD PRIMARY KEY (`id_usuario`) USING BTREE;

--
-- Indexes for table `usuario_info`
--
ALTER TABLE `usuario_info`
  ADD PRIMARY KEY (`id_usuario`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `time_usuarios`
--
ALTER TABLE `time_usuarios`
  MODIFY `id_time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `time`
--
ALTER TABLE `time`
  ADD CONSTRAINT `FK_time_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `time_usuarios`
--
ALTER TABLE `time_usuarios`
  ADD CONSTRAINT `FK_time_usuarios_time` FOREIGN KEY (`fk_time`) REFERENCES `time` (`id`),
  ADD CONSTRAINT `FK_time_usuarios_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `usuario_esporte`
--
ALTER TABLE `usuario_esporte`
  ADD CONSTRAINT `FK_USUARIO_ESPORTE` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuario_info`
--
ALTER TABLE `usuario_info`
  ADD CONSTRAINT `FK_USUARIO_INFO` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
