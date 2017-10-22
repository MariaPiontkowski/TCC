/*
 Navicat MySQL Data Transfer

 Source Server         : Padrão
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : sportteams

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 22/10/2017 19:46:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for imagem
-- ----------------------------
DROP TABLE IF EXISTS `imagem`;
CREATE TABLE `imagem`  (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data` datetime(0) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_imagem`) USING BTREE,
  INDEX `fk_usuario`(`fk_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senha` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'Kevin Katzer', 'kevinka999@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');
INSERT INTO `usuario` VALUES (2, 'Teste', 'teste@teste.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');
INSERT INTO `usuario` VALUES (3, 'ljiiljoij', 'teste@teste.com.br', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');
INSERT INTO `usuario` VALUES (4, 'Teste SESSION', 'teste@teste.com.br', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- ----------------------------
-- Table structure for usuario_esporte
-- ----------------------------
DROP TABLE IF EXISTS `usuario_esporte`;
CREATE TABLE `usuario_esporte`  (
  `id_usuario` int(11) NOT NULL,
  `posicao_volei` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `posicao_basquete` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `posicao_futebol` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  CONSTRAINT `FK_USUARIO_ESPORTE` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario_esporte
-- ----------------------------
INSERT INTO `usuario_esporte` VALUES (1, 'oposto', 'libero', 'saida');
INSERT INTO `usuario_esporte` VALUES (2, 'Líbero', 'NULL', 'NULL');
INSERT INTO `usuario_esporte` VALUES (3, 'Líbero', 'NULL', 'NULL');
INSERT INTO `usuario_esporte` VALUES (4, 'NULL', 'PivÃ´', 'NULL');

-- ----------------------------
-- Table structure for usuario_info
-- ----------------------------
DROP TABLE IF EXISTS `usuario_info`;
CREATE TABLE `usuario_info`  (
  `id_usuario` int(11) NOT NULL,
  `peso` double NOT NULL,
  `altura` double NOT NULL,
  `sexo` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `estado` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cidade` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE,
  CONSTRAINT `FK_USUARIO_INFO` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario_info
-- ----------------------------
INSERT INTO `usuario_info` VALUES (1, 50, 190, 'm', '2017-10-10', 'santa catarina', 'blumenau');
INSERT INTO `usuario_info` VALUES (2, 50, 1.85, 'f', '1997-06-11', 'Blumenau', 'Santa catarina');
INSERT INTO `usuario_info` VALUES (3, 60, 1.7, 'm', '1997-06-11', 'Blumenau', 'Santa catarina');
INSERT INTO `usuario_info` VALUES (4, 70, 1.7, 'f', '1990-12-12', 'Manaus', 'Amazona');

-- ----------------------------
-- Procedure structure for sp_in_usuario
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_in_usuario`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_in_usuario`(
  IN p_nome VARCHAR(100),
  IN p_email VARCHAR(100),
  IN p_senha VARCHAR(100),
  IN p_peso DOUBLE,
  IN p_altura DOUBLE,
  IN p_sexo CHAR(1),
  IN p_data_nasc DATE,
  IN p_estado VARCHAR(100),
  IN p_cidade VARCHAR(100),
  IN p_posicao_volei VARCHAR(100),
  IN p_posicao_basquete VARCHAR(100),
  IN p_posicao_futebol VARCHAR(100)
)
BEGIN

  INSERT INTO usuario VALUES(
    NULL, 
    p_nome,
    p_email,
    p_senha
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


END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
