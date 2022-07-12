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

 Date: 12/07/2022 10:54:21
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
  `clubeAnoFundacao` int(11) NOT NULL,
  `clubeFundadores` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clubeEstadio` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`clubeId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clubes
-- ----------------------------
INSERT INTO `clubes` VALUES (1, 'Sporting', 'images/ClubesNovo/sporting.jpg', 2000, ' eu', 'luz');
INSERT INTO `clubes` VALUES (2, 'FC Arouca', 'images/ClubesNovo/benfica.jpg', 2001, 'eu', 'luz');
INSERT INTO `clubes` VALUES (3, 'Moreirense', 'images/ClubesNovo/benfica.jpg', 2002, 'eu', 'luz');
INSERT INTO `clubes` VALUES (4, 'MarÃ­timo', 'images/ClubesNovo/benfica.jpg', 2003, ' eu', 'luz');
INSERT INTO `clubes` VALUES (5, 'CD Tondela', 'images/ClubesNovo/benfica.jpg', 2004, 'eu', 'luz');
INSERT INTO `clubes` VALUES (6, 'VitÃ³ria SC', 'images/ClubesNovo/benfica.jpg', 2005, ' eu', 'luz');
INSERT INTO `clubes` VALUES (7, 'FC Porto', 'images/ClubesNovo/benfica.jpg', 2006, 'eu', 'luz');
INSERT INTO `clubes` VALUES (8, 'PaÃ§os de Ferreira', 'images/ClubesNovo/benfica.jpg', 2007, ' eu', 'luz');
INSERT INTO `clubes` VALUES (9, 'Gil Vicente', 'images/ClubesNovo/benfica.jpg', 2008, 'eu', 'luz');
INSERT INTO `clubes` VALUES (10, 'FC Vizela', 'images/ClubesNovo/benfica.jpg', 2009, 'eu', 'luz');
INSERT INTO `clubes` VALUES (11, 'Estoril Praia', 'images/ClubesNovo/benfica.jpg', 2010, 'eu', 'luz');
INSERT INTO `clubes` VALUES (12, 'Benfica', 'images/ClubesNovo/benfica.jpg', 2011, 'eu', 'luz');
INSERT INTO `clubes` VALUES (13, 'SC Braga', 'images/ClubesNovo/benfica.jpg', 2012, 'eu', 'luz');
INSERT INTO `clubes` VALUES (14, 'Santa Clara', 'images/ClubesNovo/benfica.jpg', 2013, 'eu', 'luz');
INSERT INTO `clubes` VALUES (15, 'Portimonense', 'images/ClubesNovo/benfica.jpg', 2014, 'eu', 'luz');
INSERT INTO `clubes` VALUES (16, 'B SAD', 'images/ClubesNovo/benfica.jpg', 2015, 'eu', 'luz');
INSERT INTO `clubes` VALUES (17, 'FC FamalicÃ£o', 'images/ClubesNovo/benfica.jpg', 2016, ' eu', 'luz');
INSERT INTO `clubes` VALUES (18, 'Boavista', 'images/ClubesNovo/benfica.jpg', 2017, 'eu', 'luz');

-- ----------------------------
-- Table structure for epocas
-- ----------------------------
DROP TABLE IF EXISTS `epocas`;
CREATE TABLE `epocas`  (
  `epocaId` int(11) NOT NULL AUTO_INCREMENT,
  `epocaNome` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2021/2022',
  PRIMARY KEY (`epocaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of epocas
-- ----------------------------
INSERT INTO `epocas` VALUES (1, '2022/2023');

-- ----------------------------
-- Table structure for jogadorclubes
-- ----------------------------
DROP TABLE IF EXISTS `jogadorclubes`;
CREATE TABLE `jogadorclubes`  (
  `jogadorClubeClubeId` int(11) NOT NULL,
  `jogadorClubeJogadorId` int(11) NOT NULL,
  `jogadorClubeEpocaId` int(11) NOT NULL,
  `jogadorClubeNumero` int(11) NOT NULL,
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
  `jogadorDataNascimento` date NOT NULL,
  PRIMARY KEY (`jogadorId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogadores
-- ----------------------------
INSERT INTO `jogadores` VALUES (3, 'Otamendiddd', 'images/jogadores/otamendi.jpg', '1989-07-07');
INSERT INTO `jogadores` VALUES (4, 'Odysseas Vlachodimos', 'images/jogadores/vlacodimos.png', '1997-08-15');
INSERT INTO `jogadores` VALUES (5, 'Helton Leite', 'images/jogadores/helton.png', '1990-03-19');
INSERT INTO `jogadores` VALUES (6, 'Mendes', 'images/jogadores/rioAve.jpg', '2016-07-05');

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
  `jogoJornada` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`jogoId`) USING BTREE,
  INDEX `casa_idx`(`jogoCasaClubeId`) USING BTREE,
  INDEX `fora_idx`(`jogoForaClubeId`) USING BTREE,
  CONSTRAINT `casa` FOREIGN KEY (`jogoCasaClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fora` FOREIGN KEY (`jogoForaClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogos
-- ----------------------------
INSERT INTO `jogos` VALUES (1, 1, 10, '2022-08-06', '20:00:00', 1);
INSERT INTO `jogos` VALUES (2, 2, 11, '2022-08-07', '20:00:00', 1);
INSERT INTO `jogos` VALUES (3, 3, 12, '2022-08-07', '20:00:00', 1);
INSERT INTO `jogos` VALUES (4, 4, 13, '2022-08-07', '20:00:00', 1);
INSERT INTO `jogos` VALUES (5, 5, 14, '2022-08-08', '20:00:00', 1);
INSERT INTO `jogos` VALUES (6, 6, 15, '2022-08-08', '20:00:00', 1);
INSERT INTO `jogos` VALUES (7, 7, 16, '2022-08-08', '20:00:00', 1);
INSERT INTO `jogos` VALUES (8, 8, 17, '2022-08-08', '20:00:00', 1);
INSERT INTO `jogos` VALUES (9, 9, 18, '2022-08-09', '20:00:00', 1);
INSERT INTO `jogos` VALUES (10, 11, 6, '2022-08-13', '20:00:00', 2);
INSERT INTO `jogos` VALUES (11, 10, 5, '2022-08-14', '20:00:00', 2);
INSERT INTO `jogos` VALUES (12, 12, 2, '2022-08-14', '20:00:00', 2);
INSERT INTO `jogos` VALUES (13, 13, 1, '2022-08-14', '20:00:00', 2);
INSERT INTO `jogos` VALUES (14, 15, 9, '2022-08-15', '20:00:00', 2);
INSERT INTO `jogos` VALUES (15, 17, 7, '2022-08-15', '20:00:00', 2);
INSERT INTO `jogos` VALUES (16, 14, 3, '2022-08-15', '20:00:00', 2);
INSERT INTO `jogos` VALUES (17, 18, 8, '2022-08-16', '20:00:00', 2);
INSERT INTO `jogos` VALUES (18, 16, 4, '2022-08-16', '20:00:00', 2);
INSERT INTO `jogos` VALUES (19, 2, 17, '2022-08-20', '20:00:00', 3);
INSERT INTO `jogos` VALUES (20, 3, 13, '2022-08-20', '20:00:00', 3);
INSERT INTO `jogos` VALUES (21, 9, 12, '2022-08-21', '20:00:00', 3);
INSERT INTO `jogos` VALUES (22, 1, 16, '2022-08-21', '20:00:00', 3);
INSERT INTO `jogos` VALUES (23, 5, 15, '2022-08-22', '20:00:00', 3);
INSERT INTO `jogos` VALUES (24, 4, 7, '2022-08-22', '20:00:00', 3);
INSERT INTO `jogos` VALUES (25, 6, 10, '2022-08-22', '20:00:00', 3);
INSERT INTO `jogos` VALUES (26, 8, 11, '2022-08-23', '20:00:00', 3);
INSERT INTO `jogos` VALUES (27, 18, 14, '2022-08-23', '20:00:00', 3);
INSERT INTO `jogos` VALUES (28, 16, 3, '2022-08-27', '20:00:00', 4);
INSERT INTO `jogos` VALUES (29, 11, 4, '2022-08-27', '20:00:00', 4);
INSERT INTO `jogos` VALUES (30, 10, 18, '2022-08-28', '20:00:00', 4);
INSERT INTO `jogos` VALUES (31, 7, 2, '2022-08-28', '20:00:00', 4);
INSERT INTO `jogos` VALUES (32, 17, 1, '2022-08-28', '20:00:00', 4);
INSERT INTO `jogos` VALUES (33, 12, 5, '2022-08-29', '20:00:00', 4);
INSERT INTO `jogos` VALUES (34, 13, 6, '2022-08-29', '20:00:00', 4);
INSERT INTO `jogos` VALUES (35, 15, 8, '2022-08-29', '20:00:00', 4);
INSERT INTO `jogos` VALUES (36, 14, 9, '2022-08-29', '20:00:00', 4);
INSERT INTO `jogos` VALUES (37, 8, 13, '2022-09-11', '20:00:00', 5);
INSERT INTO `jogos` VALUES (38, 14, 12, '2022-09-11', '20:00:00', 5);
INSERT INTO `jogos` VALUES (39, 1, 7, '2022-09-11', '20:00:00', 5);
INSERT INTO `jogos` VALUES (40, 3, 17, '2022-09-12', '20:00:00', 5);
INSERT INTO `jogos` VALUES (41, 18, 15, '2022-09-12', '20:00:00', 5);
INSERT INTO `jogos` VALUES (42, 9, 10, '2022-09-12', '20:00:00', 5);
INSERT INTO `jogos` VALUES (43, 6, 16, '2022-09-12', '20:00:00', 5);
INSERT INTO `jogos` VALUES (44, 4, 2, '2022-09-13', '20:00:00', 5);
INSERT INTO `jogos` VALUES (45, 5, 11, '2022-09-13', '20:00:00', 5);

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias`  (
  `noticiaId` int(11) NOT NULL AUTO_INCREMENT,
  `noticiaTitulo` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaData` date NOT NULL,
  `noticiaFotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`noticiaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (3, 'Ricardo Horta assina por 3 Ã©pocas', '2022-07-11', 'images/noticias/noticia1.jpg', '<p style=\"text-align: justify;\">O Benfica recusou uma oferta do Rennes para a contrata&ccedil;&atilde;o de Morato. Quarto classificado na &uacute;ltima Ligue 1 e por isso qualificado para a fase de grupos da Liga Europa, o clube franc&ecirc;s ofereceu &euro;10 milh&otilde;es, com valor acrescido de objetivos, pelo defesa-central brasileiro de 21 anos. As &aacute;guias, por&eacute;m, consideram pouco &euro;10 milh&otilde;es por um jogador no qual investiram &euro;7,5 milh&otilde;es (85 por cento do passe), incluindo servi&ccedil;os de intermedia&ccedil;&atilde;o, no ver&atilde;o de 2019 e que j&aacute; respondeu bem ao mais alto n&iacute;vel.</p>\r\n<p style=\"text-align: justify;\">Na &uacute;ltima &eacute;poca, por exemplo, foi utilizado 25 vezes na equipa principal (20 como titular) e marcou um golo ao Bayern, na fase de grupos da Liga dos Campe&otilde;es, em Munique. Com excesso de defesas-centrais, o Benfica admite negociar Morato, desejado por Ant&oacute;nio Salvador, presidente do SC Braga, no neg&oacute;cio de eventual transfer&ecirc;ncia de Ricardo Horta para a Luz.</p>\r\n<p style=\"text-align: justify;\">O Rennes esteve perto de contratar Samuel Umtiti ao Barcelona, mas a transfer&ecirc;ncia n&atilde;o &eacute; consensual no clube, segundo o treinador Bruno Genesio. O Benfica poder&aacute; ser sens&iacute;vel a oferta de &euro;15 milh&otilde;es. E o Rennes estuda nesta momento a possibilidade de subir a parada para esse valor.</p>');
INSERT INTO `noticias` VALUES (4, 'Schmitd encanta a Luz', '2022-07-12', 'images/noticias/noticia2.jpg', '<p style=\"text-align: justify;\">Um carrossel em alta voltagem. &Agrave; medida que os treinos se intensificam come&ccedil;am a ficar claras e cada vez mais assimiladas as ideias de como Roger Schmidt, 55 anos, pretende ver o Benfica a jogar.</p>\r\n<p style=\"text-align: justify;\">Pela amostra do que aconteceu com o Reading, no s&aacute;bado, naquele que foi o primeiro jogo de treino da &eacute;poca, percebeu-se que os jogadores j&aacute; interiorizaram o que lhes &eacute; exigido. Ainda nem tudo sai na perfei&ccedil;&atilde;o, mas o trabalho leva &agrave; dignifica&ccedil;&atilde;o da tarefa.</p>\r\n<p style=\"text-align: justify;\">E nesse sentido h&aacute; um trio que come&ccedil;a a destacar-se e a ganhar protagonismo: David Neres, Jo&atilde;o M&aacute;rio e Rafa s&atilde;o os homens por quem Schmidt tem puxado para o carrossel ofensivo que quer ver funcionar nas costas do avan&ccedil;ado, que at&eacute; agora tem sido Henrique Ara&uacute;jo.</p>');

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
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pontos
-- ----------------------------
INSERT INTO `pontos` VALUES (1, 1, 1, 'V', 3);
INSERT INTO `pontos` VALUES (2, 1, 10, 'D', 0);
INSERT INTO `pontos` VALUES (3, 2, 2, 'D', 0);
INSERT INTO `pontos` VALUES (4, 2, 11, 'V', 3);
INSERT INTO `pontos` VALUES (5, 3, 3, 'D', 0);
INSERT INTO `pontos` VALUES (6, 3, 12, 'V', 3);
INSERT INTO `pontos` VALUES (7, 4, 4, 'D', 0);
INSERT INTO `pontos` VALUES (8, 4, 13, 'V', 3);
INSERT INTO `pontos` VALUES (9, 5, 5, 'V', 3);
INSERT INTO `pontos` VALUES (10, 5, 14, 'D', 0);
INSERT INTO `pontos` VALUES (11, 6, 6, 'D', 0);
INSERT INTO `pontos` VALUES (12, 6, 15, 'V', 3);
INSERT INTO `pontos` VALUES (13, 7, 7, 'V', 3);
INSERT INTO `pontos` VALUES (14, 7, 16, 'D', 0);
INSERT INTO `pontos` VALUES (15, 8, 8, 'V', 3);
INSERT INTO `pontos` VALUES (16, 8, 17, 'D', 0);
INSERT INTO `pontos` VALUES (17, 9, 9, 'V', 3);
INSERT INTO `pontos` VALUES (18, 9, 18, 'D', 0);
INSERT INTO `pontos` VALUES (19, 10, 11, 'E', 1);
INSERT INTO `pontos` VALUES (20, 10, 6, 'E', 1);
INSERT INTO `pontos` VALUES (21, 11, 10, 'V', 3);
INSERT INTO `pontos` VALUES (22, 11, 5, 'D', 0);
INSERT INTO `pontos` VALUES (23, 12, 12, 'V', 3);
INSERT INTO `pontos` VALUES (24, 12, 2, 'D', 0);
INSERT INTO `pontos` VALUES (25, 13, 13, 'D', 0);
INSERT INTO `pontos` VALUES (26, 13, 1, 'V', 3);
INSERT INTO `pontos` VALUES (27, 14, 15, 'D', 0);
INSERT INTO `pontos` VALUES (28, 14, 9, 'V', 3);
INSERT INTO `pontos` VALUES (29, 15, 17, 'D', 0);
INSERT INTO `pontos` VALUES (30, 15, 7, 'V', 3);
INSERT INTO `pontos` VALUES (31, 16, 14, 'E', 1);
INSERT INTO `pontos` VALUES (32, 16, 3, 'E', 1);
INSERT INTO `pontos` VALUES (33, 17, 18, 'V', 3);
INSERT INTO `pontos` VALUES (34, 17, 8, 'D', 0);
INSERT INTO `pontos` VALUES (35, 18, 16, 'D', 0);
INSERT INTO `pontos` VALUES (36, 18, 4, 'V', 3);
INSERT INTO `pontos` VALUES (37, 19, 2, 'V', 3);
INSERT INTO `pontos` VALUES (38, 19, 17, 'D', 0);
INSERT INTO `pontos` VALUES (39, 20, 3, 'D', 0);
INSERT INTO `pontos` VALUES (40, 20, 13, 'V', 3);
INSERT INTO `pontos` VALUES (41, 21, 9, 'D', 0);
INSERT INTO `pontos` VALUES (42, 21, 12, 'V', 3);
INSERT INTO `pontos` VALUES (43, 22, 1, 'V', 3);
INSERT INTO `pontos` VALUES (44, 22, 16, 'D', 0);
INSERT INTO `pontos` VALUES (45, 23, 5, 'D', 0);
INSERT INTO `pontos` VALUES (46, 23, 15, 'V', 3);
INSERT INTO `pontos` VALUES (47, 24, 4, 'E', 1);
INSERT INTO `pontos` VALUES (48, 24, 7, 'E', 1);
INSERT INTO `pontos` VALUES (49, 25, 6, 'V', 3);
INSERT INTO `pontos` VALUES (50, 25, 10, 'D', 0);
INSERT INTO `pontos` VALUES (51, 26, 8, 'D', 0);
INSERT INTO `pontos` VALUES (52, 26, 11, 'V', 3);
INSERT INTO `pontos` VALUES (53, 27, 18, 'V', 3);
INSERT INTO `pontos` VALUES (54, 27, 14, 'D', 0);
INSERT INTO `pontos` VALUES (55, 28, 16, 'E', 1);
INSERT INTO `pontos` VALUES (56, 28, 3, 'E', 1);
INSERT INTO `pontos` VALUES (57, 29, 11, 'V', 3);
INSERT INTO `pontos` VALUES (58, 29, 4, 'D', 0);
INSERT INTO `pontos` VALUES (59, 30, 10, 'E', 1);
INSERT INTO `pontos` VALUES (60, 30, 18, 'E', 1);
INSERT INTO `pontos` VALUES (61, 31, 7, 'V', 3);
INSERT INTO `pontos` VALUES (62, 31, 2, 'D', 0);
INSERT INTO `pontos` VALUES (63, 32, 17, 'E', 1);
INSERT INTO `pontos` VALUES (64, 32, 1, 'E', 1);
INSERT INTO `pontos` VALUES (65, 33, 12, 'V', 3);
INSERT INTO `pontos` VALUES (66, 33, 5, 'D', 0);
INSERT INTO `pontos` VALUES (67, 34, 13, 'E', 1);
INSERT INTO `pontos` VALUES (68, 34, 6, 'E', 1);
INSERT INTO `pontos` VALUES (69, 35, 15, 'D', 0);
INSERT INTO `pontos` VALUES (70, 35, 8, 'V', 3);
INSERT INTO `pontos` VALUES (71, 36, 14, 'V', 3);
INSERT INTO `pontos` VALUES (72, 36, 9, 'D', 0);
INSERT INTO `pontos` VALUES (73, 37, 8, 'E', 1);
INSERT INTO `pontos` VALUES (74, 37, 13, 'E', 1);
INSERT INTO `pontos` VALUES (75, 38, 14, 'D', 0);
INSERT INTO `pontos` VALUES (76, 38, 12, 'V', 3);
INSERT INTO `pontos` VALUES (77, 39, 1, 'E', 1);
INSERT INTO `pontos` VALUES (78, 39, 7, 'E', 1);
INSERT INTO `pontos` VALUES (79, 40, 3, 'E', 1);
INSERT INTO `pontos` VALUES (80, 40, 17, 'E', 1);
INSERT INTO `pontos` VALUES (81, 41, 18, 'E', 1);
INSERT INTO `pontos` VALUES (82, 41, 15, 'E', 1);
INSERT INTO `pontos` VALUES (83, 42, 9, 'E', 1);
INSERT INTO `pontos` VALUES (84, 42, 10, 'E', 1);
INSERT INTO `pontos` VALUES (85, 43, 6, 'E', 1);
INSERT INTO `pontos` VALUES (86, 43, 16, 'E', 1);
INSERT INTO `pontos` VALUES (87, 44, 4, 'E', 1);
INSERT INTO `pontos` VALUES (88, 44, 2, 'E', 1);
INSERT INTO `pontos` VALUES (89, 45, 5, 'D', 0);
INSERT INTO `pontos` VALUES (90, 45, 11, 'V', 3);

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
INSERT INTO `resultados` VALUES (1, 3, 0);
INSERT INTO `resultados` VALUES (2, 0, 2);
INSERT INTO `resultados` VALUES (3, 1, 2);
INSERT INTO `resultados` VALUES (4, 0, 2);
INSERT INTO `resultados` VALUES (5, 3, 0);
INSERT INTO `resultados` VALUES (6, 0, 1);
INSERT INTO `resultados` VALUES (7, 2, 0);
INSERT INTO `resultados` VALUES (8, 2, 0);
INSERT INTO `resultados` VALUES (9, 3, 0);
INSERT INTO `resultados` VALUES (10, 0, 0);
INSERT INTO `resultados` VALUES (11, 2, 1);
INSERT INTO `resultados` VALUES (12, 2, 0);
INSERT INTO `resultados` VALUES (13, 1, 2);
INSERT INTO `resultados` VALUES (14, 0, 1);
INSERT INTO `resultados` VALUES (15, 1, 2);
INSERT INTO `resultados` VALUES (16, 2, 2);
INSERT INTO `resultados` VALUES (17, 3, 0);
INSERT INTO `resultados` VALUES (18, 1, 2);
INSERT INTO `resultados` VALUES (19, 2, 1);
INSERT INTO `resultados` VALUES (20, 2, 3);
INSERT INTO `resultados` VALUES (21, 0, 2);
INSERT INTO `resultados` VALUES (22, 2, 0);
INSERT INTO `resultados` VALUES (23, 0, 3);
INSERT INTO `resultados` VALUES (24, 1, 1);
INSERT INTO `resultados` VALUES (25, 4, 0);
INSERT INTO `resultados` VALUES (26, 1, 3);
INSERT INTO `resultados` VALUES (27, 2, 0);
INSERT INTO `resultados` VALUES (28, 1, 1);
INSERT INTO `resultados` VALUES (29, 2, 1);
INSERT INTO `resultados` VALUES (30, 1, 1);
INSERT INTO `resultados` VALUES (31, 3, 0);
INSERT INTO `resultados` VALUES (32, 1, 1);
INSERT INTO `resultados` VALUES (33, 2, 1);
INSERT INTO `resultados` VALUES (34, 0, 0);
INSERT INTO `resultados` VALUES (35, 0, 1);
INSERT INTO `resultados` VALUES (36, 1, 0);
INSERT INTO `resultados` VALUES (37, 0, 0);
INSERT INTO `resultados` VALUES (38, 0, 5);
INSERT INTO `resultados` VALUES (39, 1, 1);
INSERT INTO `resultados` VALUES (40, 2, 2);
INSERT INTO `resultados` VALUES (41, 1, 1);
INSERT INTO `resultados` VALUES (42, 2, 2);
INSERT INTO `resultados` VALUES (43, 0, 0);
INSERT INTO `resultados` VALUES (44, 2, 2);
INSERT INTO `resultados` VALUES (45, 1, 2);

SET FOREIGN_KEY_CHECKS = 1;
