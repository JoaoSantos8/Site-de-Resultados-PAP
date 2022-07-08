/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : 127.0.0.1:3306
 Source Schema         : pap2022joao

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 07/07/2022 14:51:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clubes
-- ----------------------------
DROP TABLE IF EXISTS `clubes`;
CREATE TABLE `clubes`  (
  `clubeId` int(11) NOT NULL AUTO_INCREMENT,
  `clubeNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clubeLogoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`clubeId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clubes
-- ----------------------------

-- ----------------------------
-- Table structure for epocas
-- ----------------------------
DROP TABLE IF EXISTS `epocas`;
CREATE TABLE `epocas`  (
  `epocaId` int(11) NOT NULL AUTO_INCREMENT,
  `epocaNome` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2021/2022',
  PRIMARY KEY (`epocaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of epocas
-- ----------------------------

-- ----------------------------
-- Table structure for jogadorclubes
-- ----------------------------
DROP TABLE IF EXISTS `jogadorclubes`;
CREATE TABLE `jogadorclubes`  (
  `jogadorClubeClubeId` int(11) NOT NULL,
  `jogadorClubeJogadorId` int(11) NOT NULL,
  `jogadorClubeEpocaId` int(11) NOT NULL,
  PRIMARY KEY (`jogadorClubeClubeId`, `jogadorClubeJogadorId`, `jogadorClubeEpocaId`) USING BTREE,
  INDEX `fk_clubes_has_jogadores_jogadores1_idx`(`jogadorClubeJogadorId`) USING BTREE,
  INDEX `fk_clubes_has_jogadores_clubes_idx`(`jogadorClubeClubeId`) USING BTREE,
  INDEX `fk_clubes_has_jogadores_epocas1_idx`(`jogadorClubeEpocaId`) USING BTREE,
  CONSTRAINT `fk_clubes_has_jogadores_clubes` FOREIGN KEY (`jogadorClubeClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_clubes_has_jogadores_epocas1` FOREIGN KEY (`jogadorClubeEpocaId`) REFERENCES `epocas` (`epocaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_clubes_has_jogadores_jogadores1` FOREIGN KEY (`jogadorClubeJogadorId`) REFERENCES `jogadores` (`jogadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogadorclubes
-- ----------------------------

-- ----------------------------
-- Table structure for jogadores
-- ----------------------------
DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE `jogadores`  (
  `jogadorId` int(11) NOT NULL AUTO_INCREMENT,
  `jogadorNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jogadorFotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`jogadorId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogadores
-- ----------------------------

-- ----------------------------
-- Table structure for jogos
-- ----------------------------
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE `jogos`  (
  `jogoId` int(11) NOT NULL AUTO_INCREMENT,
  `jogoCasaClubeId` int(11) NOT NULL,
  `jogoForaClubeId` int(11) NOT NULL,
  `jogoData` date NOT NULL,
  `jogoHora` time NOT NULL,
  PRIMARY KEY (`jogoId`) USING BTREE,
  INDEX `casa_idx`(`jogoCasaClubeId`) USING BTREE,
  INDEX `fora_idx`(`jogoForaClubeId`) USING BTREE,
  CONSTRAINT `casa` FOREIGN KEY (`jogoCasaClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fora` FOREIGN KEY (`jogoForaClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogos
-- ----------------------------

-- ----------------------------
-- Table structure for pontos
-- ----------------------------
DROP TABLE IF EXISTS `pontos`;
CREATE TABLE `pontos`  (
  `pontosId` int(11) NOT NULL AUTO_INCREMENT,
  `pontosJogoId` int(11) NOT NULL,
  `pontosClubeId` int(11) NOT NULL,
  `pontosResultado` enum('V','E','D') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'E',
  `pontosValor` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`pontosId`) USING BTREE,
  INDEX `fk_vitorias_jogos1_idx`(`pontosJogoId`) USING BTREE,
  INDEX `fk_vitorias_clubes1_idx`(`pontosClubeId`) USING BTREE,
  CONSTRAINT `fk_vitorias_clubes1` FOREIGN KEY (`pontosClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_vitorias_jogos1` FOREIGN KEY (`pontosJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pontos
-- ----------------------------

-- ----------------------------
-- Table structure for resultados
-- ----------------------------
DROP TABLE IF EXISTS `resultados`;
CREATE TABLE `resultados`  (
  `resultadoJogoId` int(11) NOT NULL,
  `resultadoGolosCasa` int(11) NOT NULL,
  `resultadoGolosFora` int(11) NOT NULL,
  PRIMARY KEY (`resultadoJogoId`) USING BTREE,
  INDEX `fk_resultados_jogos1_idx`(`resultadoJogoId`) USING BTREE,
  CONSTRAINT `fk_resultados_jogos1` FOREIGN KEY (`resultadoJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resultados
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
