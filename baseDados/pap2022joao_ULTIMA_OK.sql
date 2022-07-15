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

 Date: 15/07/2022 15:52:12
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
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of clubes
-- ----------------------------
INSERT INTO `clubes` VALUES (1, 'Sporting Clube de Portugal', 'images/ClubesNovo/sporting.jpg', 1906, '  JosÃ© Alvalade', 'EstÃ¡dio JosÃ© Alvalade');
INSERT INTO `clubes` VALUES (2, 'Futebol Clube de Arouca', 'images/ClubesNovo/arouca.jpg', 1952, ' Carlos Pinho', 'EstÃ¡dio Municipal de Arouca');
INSERT INTO `clubes` VALUES (3, 'Moreirense Futebol Clube', 'images/ClubesNovo/moreirense.jpg', 1914, 'Sr. Amadeu Andrade', 'Comendador Joaquim de Almeida Freitas\r\nComendador Joaquim de Almeida Freitas\r\nComendador Joaquim de Almeida Freitas\r\nComendador Joaquim de Almeida Freitas');
INSERT INTO `clubes` VALUES (4, 'Club Sport MarÃ­timo', 'images/ClubesNovo/Maritimo.jpg', 1910, 'Cândido Gouveia', 'Estádio do Maritimo');
INSERT INTO `clubes` VALUES (5, 'Clube Desportivo de Tondela', 'images/ClubesNovo/Tondela.jpg', 1933, 'João Cardoso', 'Estádio João Cardoso');
INSERT INTO `clubes` VALUES (6, 'VitÃ³ria Sport Clube', 'images/ClubesNovo/GuimarÃ£es.jpg', 1922, 'Um grupo de jovens estudantes', 'Estádio D. Afonso Henriques');
INSERT INTO `clubes` VALUES (7, 'Futebol Clube do Porto', 'images/ClubesNovo/porto.jpg', 1893, ' António Nicolau d\'Almeida', 'Estádio do Dragão');
INSERT INTO `clubes` VALUES (8, 'Futebol Clube PaÃ§os de Ferreira', 'images/ClubesNovo/pacoferreira.jpg', 1950, 'Paulo Meneses', 'Capital do Móvel');
INSERT INTO `clubes` VALUES (9, 'Gil Vicente Futebol Clube', 'images/ClubesNovo/GilVicente.jpg', 1924, 'Largo do Teatro', 'Estádio Cidade de Barcelos');
INSERT INTO `clubes` VALUES (10, 'Futebol Clube de Vizela', 'images/ClubesNovo/Vizela.jpg', 1939, 'Armando Camelo, João Sousa e Costa Madureira', 'Estádio do Futebol Clube de Vizela');
INSERT INTO `clubes` VALUES (11, 'Grupo Desportivo Estoril Praia', 'images/ClubesNovo/estoril.jpg', 1939, 'Fausto Cardoso de Figueiredo', 'António Coimbra da Mota');
INSERT INTO `clubes` VALUES (12, 'Sport Lisboa e Benfica', 'images/ClubesNovo/benfica.jpg', 1904, 'João José Pires', 'Estádio da Luz');
INSERT INTO `clubes` VALUES (13, 'Sporting Clube de Braga', 'images/ClubesNovo/braga.jpg', 1925, 'Celestino Lobo, Carlos JosÃ© de Morais, os irmÃ£os Carvalho, Eurico Sameiro, Costinha, JoÃ£o Gomes', 'Estádio da pedreira');
INSERT INTO `clubes` VALUES (14, 'Clube Desportivo Santa Clara', 'images/ClubesNovo/SantaClara.jpg', 1927, 'Rodrigo Neto', 'Estádio de São Miguel');
INSERT INTO `clubes` VALUES (15, 'Portimonense Sporting Clube', 'images/ClubesNovo/portimonense.jpg', 1914, 'Um grupo de amigos', 'Estádio Municipal de Portimão');
INSERT INTO `clubes` VALUES (16, 'Clube de Futebol \"Os Belenenses\"', 'images/ClubesNovo/belenenses.jpg', 1919, 'Artur José Pereira', 'Estádio do Restelo');
INSERT INTO `clubes` VALUES (17, 'Futebol Clube de FamalicÃ£o', 'images/ClubesNovo/famalicao.jpg', 1931, 'José Alves Marinho, Floriano Portela, Hildebrando Portela, Luis Pinto, Joaquim Mesquita Jr. e Vergálio Pinto de Azevedo', 'Estádio Municipal de Famalicão');
INSERT INTO `clubes` VALUES (18, 'Boavista Futebol Clube', 'images/ClubesNovo/boavista.jpg', 1903, ' Major Valentim Loureiro', 'EstÃ¡dio do Bessa SÃ©culo XXI');

-- ----------------------------
-- Table structure for epocas
-- ----------------------------
DROP TABLE IF EXISTS `epocas`;
CREATE TABLE `epocas`  (
  `epocaId` int(11) NOT NULL AUTO_INCREMENT,
  `epocaNome` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2021/2022',
  PRIMARY KEY (`epocaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jogadorclubes
-- ----------------------------
INSERT INTO `jogadorclubes` VALUES (12, 148, 1, 77);
INSERT INTO `jogadorclubes` VALUES (12, 149, 1, 99);
INSERT INTO `jogadorclubes` VALUES (12, 150, 1, 1);
INSERT INTO `jogadorclubes` VALUES (12, 151, 1, 45);
INSERT INTO `jogadorclubes` VALUES (12, 152, 1, 2);
INSERT INTO `jogadorclubes` VALUES (12, 153, 1, 34);
INSERT INTO `jogadorclubes` VALUES (12, 154, 1, 4);
INSERT INTO `jogadorclubes` VALUES (12, 155, 1, 72);
INSERT INTO `jogadorclubes` VALUES (12, 156, 1, 5);
INSERT INTO `jogadorclubes` VALUES (12, 157, 1, 30);
INSERT INTO `jogadorclubes` VALUES (12, 158, 1, 89);
INSERT INTO `jogadorclubes` VALUES (12, 159, 1, 91);
INSERT INTO `jogadorclubes` VALUES (12, 160, 1, 97);
INSERT INTO `jogadorclubes` VALUES (12, 161, 1, 57);
INSERT INTO `jogadorclubes` VALUES (12, 162, 1, 3);
INSERT INTO `jogadorclubes` VALUES (12, 163, 1, 22);
INSERT INTO `jogadorclubes` VALUES (12, 164, 1, 76);
INSERT INTO `jogadorclubes` VALUES (12, 165, 1, 28);
INSERT INTO `jogadorclubes` VALUES (12, 166, 1, 61);
INSERT INTO `jogadorclubes` VALUES (12, 167, 1, 68);
INSERT INTO `jogadorclubes` VALUES (12, 168, 1, 21);
INSERT INTO `jogadorclubes` VALUES (12, 169, 1, 11);
INSERT INTO `jogadorclubes` VALUES (12, 170, 1, 55);
INSERT INTO `jogadorclubes` VALUES (12, 171, 1, 20);
INSERT INTO `jogadorclubes` VALUES (12, 172, 1, 49);
INSERT INTO `jogadorclubes` VALUES (12, 173, 1, 83);
INSERT INTO `jogadorclubes` VALUES (12, 174, 1, 17);
INSERT INTO `jogadorclubes` VALUES (12, 175, 1, 47);
INSERT INTO `jogadorclubes` VALUES (12, 176, 1, 10);
INSERT INTO `jogadorclubes` VALUES (12, 177, 1, 23);
INSERT INTO `jogadorclubes` VALUES (12, 178, 1, 39);
INSERT INTO `jogadorclubes` VALUES (12, 179, 1, 9);
INSERT INTO `jogadorclubes` VALUES (12, 180, 1, 14);
INSERT INTO `jogadorclubes` VALUES (12, 181, 1, 15);
INSERT INTO `jogadorclubes` VALUES (12, 182, 1, 18);
INSERT INTO `jogadorclubes` VALUES (12, 183, 1, 88);
INSERT INTO `jogadorclubes` VALUES (12, 184, 1, 95);
INSERT INTO `jogadorclubes` VALUES (12, 185, 1, 7);
INSERT INTO `jogadorclubes` VALUES (12, 186, 1, 31);
INSERT INTO `jogadorclubes` VALUES (12, 187, 1, 96);
INSERT INTO `jogadorclubes` VALUES (12, 188, 1, 27);

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
) ENGINE = InnoDB AUTO_INCREMENT = 189 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jogadores
-- ----------------------------
INSERT INTO `jogadores` VALUES (148, 'Helton Leite', 'images/jogadores/168622_20210901182311_helton_leite.png', '1991-07-09');
INSERT INTO `jogadores` VALUES (149, 'Odysseas Vlachodimos', 'images/jogadores/197106_20210901182629_odysseas_vlachodimos.png', '1994-06-04');
INSERT INTO `jogadores` VALUES (150, 'Mile Svilar', 'images/jogadores/423229_20210905103238_mile_svilar.png', '2000-01-27');
INSERT INTO `jogadores` VALUES (151, 'Lï¿½o Kokubo', 'images/jogadores/696613_20201001181257_leo_kokubo.png', '2001-06-10');
INSERT INTO `jogadores` VALUES (152, 'Gilberto', 'images/jogadores/134600_20210905115853_gilberto.png', '1993-07-22');
INSERT INTO `jogadores` VALUES (153, 'Andrï¿½ Almeida', 'images/jogadores/74377_20210905120428_andre_almeida.png', '1991-03-07');
INSERT INTO `jogadores` VALUES (154, 'Lucas Verï¿½ssimo', 'images/jogadores/491981_20210905113913_lucas_verissimo.png', '1996-07-25');
INSERT INTO `jogadores` VALUES (155, 'Tomï¿½s Araï¿½jo', 'images/jogadores/520353_20210905120712_tomas_araujo.png', '2002-07-23');
INSERT INTO `jogadores` VALUES (156, 'Jan Vertonghen', 'images/jogadores/32809_20210905113512_jan_vertonghen.png', '1987-03-24');
INSERT INTO `jogadores` VALUES (157, 'Nicolï¿½s Otamendi', 'images/jogadores/67588_20210905114704_nicolas_otamendi.png', '1988-05-04');
INSERT INTO `jogadores` VALUES (158, 'Pedro ï¿½lvaro', 'images/jogadores/372435_20220706141246_pedro_alvaro.jpg', '2000-06-24');
INSERT INTO `jogadores` VALUES (159, 'Morato', 'images/jogadores/681311_20210905114928_morato.png', '2001-01-24');
INSERT INTO `jogadores` VALUES (160, 'Ferro', 'images/jogadores/214368_20220217120748_ferro.jpg', '1997-07-28');
INSERT INTO `jogadores` VALUES (161, 'Sandro Cruz', 'images/jogadores/423979_20220127152520_sandro_cruz.jpg', '2001-05-03');
INSERT INTO `jogadores` VALUES (162, 'ï¿½lex Grimaldo', 'images/jogadores/214579_20210901225257_alex_grimaldo.png', '1996-04-16');
INSERT INTO `jogadores` VALUES (163, 'Valentino Lï¿½zaro', 'images/jogadores/287013_20210905114403_valentino_lazaro.png', '1996-03-06');
INSERT INTO `jogadores` VALUES (164, 'Martim Neto', 'images/jogadores/586713_20201002190141_martim_neto.png', '2003-03-12');
INSERT INTO `jogadores` VALUES (165, 'Julian Weigl', 'images/jogadores/395624_20210901185757_julian_weigl.png', '1996-05-03');
INSERT INTO `jogadores` VALUES (166, 'Florentino Luï¿½s', 'images/jogadores/166229_20220525095239_florentino_luis.jpg', '2000-03-04');
INSERT INTO `jogadores` VALUES (167, 'Rafael Brito', 'images/jogadores/503779_20220629105259_rafael_brito.jpg', '2002-01-08');
INSERT INTO `jogadores` VALUES (168, 'Pizzi', 'images/jogadores/51004_20220208143951_pizzi.jpg', '1990-04-11');
INSERT INTO `jogadores` VALUES (169, 'Soualiho Meitï¿½', 'images/jogadores/197672_20210901184214_soualiho_meite.png', '1994-01-21');
INSERT INTO `jogadores` VALUES (170, 'Paulo Bernardo', 'images/jogadores/489055_20210901185147_paulo_bernardo.png', '2002-07-27');
INSERT INTO `jogadores` VALUES (171, 'Joï¿½o Mï¿½rio', 'images/jogadores/56560_20210901183812_joao_mario.png', '1993-07-02');
INSERT INTO `jogadores` VALUES (172, 'Adel Taarabt', 'images/jogadores/29772_20210905104018_adel_taarabt.png', '1989-01-17');
INSERT INTO `jogadores` VALUES (173, 'Gedson Fernandes', 'images/jogadores/372419_20220703021214_gedson_fernandes.jpg', '1999-03-06');
INSERT INTO `jogadores` VALUES (174, 'Diogo Gonï¿½alves', 'images/jogadores/155278_20210905115505_diogo_goncalves.png', '1997-04-21');
INSERT INTO `jogadores` VALUES (175, 'Tiago Gouveia', 'images/jogadores/155479_20200919143634_tiago_gouveia.png', '2001-04-10');
INSERT INTO `jogadores` VALUES (176, 'Luca Waldschmidt', 'images/jogadores/330694_20210830190738_luca_waldschmidt.png', '1996-04-19');
INSERT INTO `jogadores` VALUES (177, 'Nemanja Radonjic', 'images/jogadores/421026_20220707103141_nemanja_radonjic.jpg', '1996-05-17');
INSERT INTO `jogadores` VALUES (178, 'Henrique Araï¿½jo', 'images/jogadores/238031_20210901225532_henrique_araujo.png', '2002-02-05');
INSERT INTO `jogadores` VALUES (179, 'Darwin Nï¿½ï¿½ez', 'images/jogadores/606157_20220614191628_darwin_nunez.png', '1999-06-13');
INSERT INTO `jogadores` VALUES (180, 'Haris Seferovic', 'images/jogadores/102379_20210901225015_haris_seferovic.png', '1992-05-18');
INSERT INTO `jogadores` VALUES (181, 'Roman Yaremchuk', 'images/jogadores/414421_20210905103720_roman_yaremchuk.png', '1996-02-09');
INSERT INTO `jogadores` VALUES (182, 'Rodrigo Pinho', 'images/jogadores/392306_20210905103457_rodrigo_pinho.png', '1991-02-09');
INSERT INTO `jogadores` VALUES (183, 'Gonï¿½alo Ramos', 'images/jogadores/428376_20210901185536_goncalo_ramos.png', '2001-07-23');
INSERT INTO `jogadores` VALUES (184, 'Carlos Vinï¿½cius', 'images/jogadores/520581_20211224202305_carlos_vinicius.jpg', '1995-07-23');
INSERT INTO `jogadores` VALUES (185, 'Everton', 'images/jogadores/392484_20220620191344_everton.png', '1996-01-21');
INSERT INTO `jogadores` VALUES (186, 'Gil Dias', 'images/jogadores/368221_20210901183344_gil_dias.png', '1997-01-08');
INSERT INTO `jogadores` VALUES (187, 'Diego Moreira', 'images/jogadores/722999_20220512115736_diego_moreira.jpg', '2005-06-10');
INSERT INTO `jogadores` VALUES (188, 'Rafa Silva', 'images/jogadores/261061_20210901224828_rafa_silva.png', '1993-05-10');

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
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (3, 'Ricardo Horta assina por 3 Ã©pocas', '2022-07-11', 'images/noticias/noticia1.jpg', '<p style=\"text-align: justify;\">O Benfica recusou uma oferta do Rennes para a contrata&ccedil;&atilde;o de Morato. Quarto classificado na &uacute;ltima Ligue 1 e por isso qualificado para a fase de grupos da Liga Europa, o clube franc&ecirc;s ofereceu &euro;10 milh&otilde;es, com valor acrescido de objetivos, pelo defesa-central brasileiro de 21 anos. As &aacute;guias, por&eacute;m, consideram pouco &euro;10 milh&otilde;es por um jogador no qual investiram &euro;7,5 milh&otilde;es (85 por cento do passe), incluindo servi&ccedil;os de intermedia&ccedil;&atilde;o, no ver&atilde;o de 2019 e que j&aacute; respondeu bem ao mais alto n&iacute;vel.</p>\r\n<p style=\"text-align: justify;\">Na &uacute;ltima &eacute;poca, por exemplo, foi utilizado 25 vezes na equipa principal (20 como titular) e marcou um golo ao Bayern, na fase de grupos da Liga dos Campe&otilde;es, em Munique. Com excesso de defesas-centrais, o Benfica admite negociar Morato, desejado por Ant&oacute;nio Salvador, presidente do SC Braga, no neg&oacute;cio de eventual transfer&ecirc;ncia de Ricardo Horta para a Luz.</p>\r\n<p style=\"text-align: justify;\">O Rennes esteve perto de contratar Samuel Umtiti ao Barcelona, mas a transfer&ecirc;ncia n&atilde;o &eacute; consensual no clube, segundo o treinador Bruno Genesio. O Benfica poder&aacute; ser sens&iacute;vel a oferta de &euro;15 milh&otilde;es. E o Rennes estuda nesta momento a possibilidade de subir a parada para esse valor.</p>');
INSERT INTO `noticias` VALUES (4, 'Schmitd encanta a Luz', '2022-07-12', 'images/noticias/noticia2.jpg', '<p style=\"text-align: justify;\">Um carrossel em alta voltagem. &Agrave; medida que os treinos se intensificam come&ccedil;am a ficar claras e cada vez mais assimiladas as ideias de como Roger Schmidt, 55 anos, pretende ver o Benfica a jogar.</p>\r\n<p style=\"text-align: justify;\">Pela amostra do que aconteceu com o Reading, no s&aacute;bado, naquele que foi o primeiro jogo de treino da &eacute;poca, percebeu-se que os jogadores j&aacute; interiorizaram o que lhes &eacute; exigido. Ainda nem tudo sai na perfei&ccedil;&atilde;o, mas o trabalho leva &agrave; dignifica&ccedil;&atilde;o da tarefa.</p>\r\n<p style=\"text-align: justify;\">E nesse sentido h&aacute; um trio que come&ccedil;a a destacar-se e a ganhar protagonismo: David Neres, Jo&atilde;o M&aacute;rio e Rafa s&atilde;o os homens por quem Schmidt tem puxado para o carrossel ofensivo que quer ver funcionar nas costas do avan&ccedil;ado, que at&eacute; agora tem sido Henrique Ara&uacute;jo.</p>');
INSERT INTO `noticias` VALUES (5, 'Pepa despedido do VitÃ³ria SC', '2022-07-13', 'images/noticias/pepa.jpg', '<p style=\"text-align: justify;\">Pepa foi afastado pelo presidente da SAD do Vit&oacute;ria, Ant&oacute;nio Miguel Cardoso, do comando t&eacute;cnico dos minhotos.</p>\r\n<p style=\"text-align: justify;\">A not&iacute;cia foi comunicada atrav&eacute;s do site oficial do Vit&oacute;ria. &laquo;Com efeitos imediatos e permanentes&raquo;, l&ecirc;-se na mesma nota, Moreno Teixeira &eacute; promovido e passa a assumir o cargo.</p>\r\n<p style=\"text-align: justify;\">At&eacute; agora respons&aacute;vel pela equipa B, o antigo atleta assume a responsabilidade de orientar a equipa deixada por Pepa e &eacute; uma aposta para levar at&eacute; ao fim, de acordo com o que foi poss&iacute;vel saber. V&aacute;rios elementos contactados pelo zerozero falam de &laquo;diverg&ecirc;ncias insan&aacute;veis&raquo; entre a estrat&eacute;gia assumida pela SAD e a idealizada por Pepa.</p>\r\n<p style=\"text-align: justify;\">A dire&ccedil;&atilde;o assumira, j&aacute; no programa eleitoral, a necessidade de &laquo;reduzir substancialmente o or&ccedil;amento&raquo; para o futebol profissional e o treinador esteve a par de tudo, desde o primeiro instante. Mesmo assim, segundo foi poss&iacute;vel saber, Pepa n&atilde;o foi sens&iacute;vel &agrave; &laquo;necessidade de encontrar um equil&iacute;brio financeiro&raquo; e em &laquo;apostar nos melhores valores da forma&ccedil;&atilde;o&raquo;, o que tornou a conviv&ecirc;ncia &laquo;imposs&iacute;vel&raquo;. O primeiro diretor desportivo da nova dire&ccedil;&atilde;o, Diogo Boa Alma, foi dispensado um m&ecirc;s e meio depois de ser anunciado .</p>\r\n<p style=\"text-align: justify;\">Ant&oacute;nio Miguel Cardoso foi eleito em mar&ccedil;o e encontrou um clube mergulhado em problemas financeiros. Atrav&eacute;s de algumas vendas e rescis&otilde;es, o dirigente assumiu estar &agrave; procura de liquidez e estabilidade para os cofres do clube. Gui (Almeria), Rochinha (Sporting), Sacko (Montpellier), Poha (Sion), Pedro Henrique (LC Sailors), e Foster (Westerlo) permitir&atilde;o ao Vit&oacute;ria receber alguns milh&otilde;es de euros, mas grande parte da verba servir&aacute; para cumprir responsabilidades assumidas pelas anteriores dire&ccedil;&otilde;es. A SAD do Vit&oacute;ria dar&aacute; mais explica&ccedil;&otilde;es sobre o afastamento de Pepa e a aposta em Moreno numa confer&ecirc;ncia de imprensa, agendada para as 14 horas de quarta-feira.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>');
INSERT INTO `noticias` VALUES (6, 'o padre', '2022-07-15', 'images/noticias/img02.jpg', '');

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
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

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
