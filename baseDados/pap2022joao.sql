/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 80021
Source Host           : localhost:3306
Source Database       : pap2022joao

Target Server Type    : MYSQL
Target Server Version : 80021
File Encoding         : 65001

Date: 2022-04-07 10:32:18
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `clubes`
-- ----------------------------
DROP TABLE IF EXISTS `clubes`;
CREATE TABLE `clubes` (
  `clubeId` int NOT NULL AUTO_INCREMENT,
  `clubeNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clubeLogoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`clubeId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clubes
-- ----------------------------
INSERT INTO clubes VALUES ('5', 'Braga', 'images/ClubesNovo/Braga.png');
INSERT INTO clubes VALUES ('6', 'Benfica', 'images/ClubesNovo/Benfica.png');

-- ----------------------------
-- Table structure for `epocas`
-- ----------------------------
DROP TABLE IF EXISTS `epocas`;
CREATE TABLE `epocas` (
  `epocaId` int NOT NULL AUTO_INCREMENT,
  `epocaNome` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2021/2022',
  PRIMARY KEY (`epocaId`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of epocas
-- ----------------------------

-- ----------------------------
-- Table structure for `jogadorclubes`
-- ----------------------------
DROP TABLE IF EXISTS `jogadorclubes`;
CREATE TABLE `jogadorclubes` (
  `jogadorClubeClubeId` int NOT NULL,
  `jogadorClubeJogadorId` int NOT NULL,
  `jogadorClubeEpocaId` int NOT NULL,
  PRIMARY KEY (`jogadorClubeClubeId`,`jogadorClubeJogadorId`,`jogadorClubeEpocaId`) USING BTREE,
  KEY `fk_clubes_has_jogadores_jogadores1_idx` (`jogadorClubeJogadorId`) USING BTREE,
  KEY `fk_clubes_has_jogadores_clubes_idx` (`jogadorClubeClubeId`) USING BTREE,
  KEY `fk_clubes_has_jogadores_epocas1_idx` (`jogadorClubeEpocaId`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of jogadorclubes
-- ----------------------------

-- ----------------------------
-- Table structure for `jogadores`
-- ----------------------------
DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE `jogadores` (
  `jogadorId` int NOT NULL AUTO_INCREMENT,
  `jogadorNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jogadorFotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`jogadorId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jogadores
-- ----------------------------

-- ----------------------------
-- Table structure for `jogos`
-- ----------------------------
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE `jogos` (
  `jogoId` int NOT NULL AUTO_INCREMENT,
  `jogoClubeCasa` varchar(45) NOT NULL,
  `jogoClubeFora` varchar(45) NOT NULL,
  `jogoData` date NOT NULL,
  `jogoHora` time NOT NULL,
  `jogoClubeCasaFotoURL` varchar(255) NOT NULL,
  `jogoClubeForaFotoURL` varchar(255) NOT NULL,
  PRIMARY KEY (`jogoId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jogos
-- ----------------------------
INSERT INTO jogos VALUES ('1', 'Benfica', 'Braga', '0000-00-00', '20:00:00', '', '');
INSERT INTO jogos VALUES ('2', 'Benfica', 'Braga', '0000-00-00', '20:00:00', '', '');
INSERT INTO jogos VALUES ('3', 'Benfica', 'Braga', '0000-00-00', '20:00:00', '', '');
INSERT INTO jogos VALUES ('4', 'Benfica', 'Braga', '0000-00-00', '21:00:00', '', '');
INSERT INTO jogos VALUES ('5', 'Benficas', 'Bragas', '0000-00-00', '20:00:00', 'images/ClubesNovo/Benfica.png', 'images/ClubesNovo/Braga.png');
