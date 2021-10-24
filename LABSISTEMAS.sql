-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: LABSISTEMAS
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.21.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CARGO`
--

DROP TABLE IF EXISTS `CARGO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CARGO` (
  `ID_CARGO` bigint NOT NULL AUTO_INCREMENT,
  `CARGO_FUNC` varchar(60) NOT NULL,
  `LOJA_FUNC` int NOT NULL,
  `SALARIO_FUNC` float NOT NULL,
  PRIMARY KEY (`ID_CARGO`),
  CONSTRAINT `CARGO_fk0` FOREIGN KEY (`ID_CARGO`) REFERENCES `PESSOA_FISICA` (`ID_PI`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CARGO`
--

LOCK TABLES `CARGO` WRITE;
/*!40000 ALTER TABLE `CARGO` DISABLE KEYS */;
INSERT INTO `CARGO` VALUES (1,'Assistente de TI',1,2500);
/*!40000 ALTER TABLE `CARGO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `CARGO_FUNCIONARIO`
--

DROP TABLE IF EXISTS `CARGO_FUNCIONARIO`;
/*!50001 DROP VIEW IF EXISTS `CARGO_FUNCIONARIO`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `CARGO_FUNCIONARIO` AS SELECT 
 1 AS `MATRICULA`,
 1 AS `NOME`,
 1 AS `SOBRENOME`,
 1 AS `CARGO`,
 1 AS `LOJA`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `DADOS_PRODUTO`
--

DROP TABLE IF EXISTS `DADOS_PRODUTO`;
/*!50001 DROP VIEW IF EXISTS `DADOS_PRODUTO`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `DADOS_PRODUTO` AS SELECT 
 1 AS `CODIGO_INTERNO`,
 1 AS `CODIGO_BARRA`,
 1 AS `NOME_PRODUTO`,
 1 AS `PRECO_PRODUTO`,
 1 AS `CUSTO_PRODUTO`,
 1 AS `LUCRO`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `ESTOQUE`
--

DROP TABLE IF EXISTS `ESTOQUE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ESTOQUE` (
  `ID_ESTOQUE` bigint NOT NULL AUTO_INCREMENT,
  `EAN_PRODUTO` bigint NOT NULL,
  `NOME_PRODUTO` varchar(100) NOT NULL,
  `PRECO_PRODUTO` float NOT NULL,
  `CUSTO_PRODUTO` float NOT NULL,
  `VALIDADE_PRODUTO` date NOT NULL,
  `FABRICACAO_PRODUTO` date NOT NULL,
  `ID_FABRICANTE` bigint NOT NULL,
  PRIMARY KEY (`ID_ESTOQUE`),
  KEY `ESTOQUE_fk0` (`ID_FABRICANTE`),
  CONSTRAINT `ESTOQUE_fk0` FOREIGN KEY (`ID_FABRICANTE`) REFERENCES `FABRICANTE` (`ID_FABRICANTE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ESTOQUE`
--

LOCK TABLES `ESTOQUE` WRITE;
/*!40000 ALTER TABLE `ESTOQUE` DISABLE KEYS */;
INSERT INTO `ESTOQUE` VALUES (1,4564778956,'Dipirona',2.5,0.85,'2021-12-12','2020-12-12',1);
/*!40000 ALTER TABLE `ESTOQUE` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`viktor`@`localhost`*/ /*!50003 TRIGGER `INSERIR_ESTOQUE_PRODUTO` AFTER INSERT ON `ESTOQUE` FOR EACH ROW BEGIN 
            	INSERT INTO PRODUTO
                		(
                        	EAN_PRODUTO, NOME_PRODUTO, PRECO_PRODUTO,
                          	CUSTO_PRODUTO, VALIDADE_PRODUTO, 
                          	FABRICACAO_PRODUTO
                        )
				VALUES 
                		(
                        	NEW.EAN_PRODUTO, NEW.NOME_PRODUTO, NEW.PRECO_PRODUTO,
                          	NEW.CUSTO_PRODUTO, NEW.VALIDADE_PRODUTO, 
                          	NEW.FABRICACAO_PRODUTO
                         );
                         
                END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `FABRICANTE`
--

DROP TABLE IF EXISTS `FABRICANTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FABRICANTE` (
  `ID_FABRICANTE` bigint NOT NULL AUTO_INCREMENT,
  `RAZAO_SOCIAL_FABRICANTE` varchar(254) NOT NULL,
  `NOME_FANTASIA_FABRICANTE` varchar(254) NOT NULL,
  `CNPJ_FABRICANTE` varchar(19) NOT NULL,
  `NUM_RUA_FABRICANTE` bigint NOT NULL,
  `ENDERECO_FABRICANTE` varchar(150) NOT NULL,
  `TELEFONE_FABRICANTE` varchar(12) NOT NULL,
  `EMAIL_FABRICANTE` varchar(50) NOT NULL,
  `OBSERVACAO_FABRICANTE` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID_FABRICANTE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FABRICANTE`
--

LOCK TABLES `FABRICANTE` WRITE;
/*!40000 ALTER TABLE `FABRICANTE` DISABLE KEYS */;
INSERT INTO `FABRICANTE` VALUES (1,'Organizações Tabajara','Tabajara Tech','50.020.780/9713-00',25,'Rua da zueira','1192424-6969','tabajara@zueira.com','Próximo a rua da sua mãe');
/*!40000 ALTER TABLE `FABRICANTE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FUNCIONARIO`
--

DROP TABLE IF EXISTS `FUNCIONARIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `FUNCIONARIO` (
  `ID_FUNC` bigint NOT NULL AUTO_INCREMENT,
  `CPF_FUNC` varchar(14) NOT NULL,
  `NOME_FUNC` varchar(30) NOT NULL,
  `SOBRENOME_FUNC` varchar(50) NOT NULL,
  `NASCIMENTO_FUNC` date NOT NULL,
  PRIMARY KEY (`ID_FUNC`),
  UNIQUE KEY `CPF_FUCN` (`CPF_FUNC`),
  CONSTRAINT `FUNCIONARIO_fk0` FOREIGN KEY (`ID_FUNC`) REFERENCES `PESSOA_FISICA` (`ID_PI`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FUNCIONARIO`
--

LOCK TABLES `FUNCIONARIO` WRITE;
/*!40000 ALTER TABLE `FUNCIONARIO` DISABLE KEYS */;
INSERT INTO `FUNCIONARIO` VALUES (1,'456.477.298-86','Viktor','Santos Moitinho','1996-05-13');
/*!40000 ALTER TABLE `FUNCIONARIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LOGIN_ADM`
--

DROP TABLE IF EXISTS `LOGIN_ADM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LOGIN_ADM` (
  `ID_LOGIN_ADM` bigint NOT NULL AUTO_INCREMENT,
  `USER_ADM` varchar(100) NOT NULL,
  `SENHA_ADM` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_LOGIN_ADM`),
  UNIQUE KEY `USER_ADM` (`USER_ADM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LOGIN_ADM`
--

LOCK TABLES `LOGIN_ADM` WRITE;
/*!40000 ALTER TABLE `LOGIN_ADM` DISABLE KEYS */;
/*!40000 ALTER TABLE `LOGIN_ADM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LOGIN_LOJA`
--

DROP TABLE IF EXISTS `LOGIN_LOJA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LOGIN_LOJA` (
  `ID_LOGIN` bigint NOT NULL AUTO_INCREMENT,
  `SENHA_LOJA` varchar(150) NOT NULL,
  PRIMARY KEY (`ID_LOGIN`),
  CONSTRAINT `LOGIN_LOJA_fk0` FOREIGN KEY (`ID_LOGIN`) REFERENCES `LOJAS` (`ID_LOJA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LOGIN_LOJA`
--

LOCK TABLES `LOGIN_LOJA` WRITE;
/*!40000 ALTER TABLE `LOGIN_LOJA` DISABLE KEYS */;
/*!40000 ALTER TABLE `LOGIN_LOJA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LOJAS`
--

DROP TABLE IF EXISTS `LOJAS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LOJAS` (
  `ID_LOJA` bigint NOT NULL AUTO_INCREMENT,
  `ENDERECO_LOJA` varchar(150) NOT NULL,
  `ENDERECO_NUM_LOJA` bigint NOT NULL,
  `CNPJ_LOJA` varchar(19) NOT NULL,
  `TELEFONE_LOJA` varchar(12) NOT NULL,
  `EMAIL_LOJA` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_LOJA`),
  UNIQUE KEY `CNPJ_LOJA` (`CNPJ_LOJA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LOJAS`
--

LOCK TABLES `LOJAS` WRITE;
/*!40000 ALTER TABLE `LOJAS` DISABLE KEYS */;
INSERT INTO `LOJAS` VALUES (1,'Rua UM',1,'00.000.000/0000-02','1193466-3995','loja01@loja.com.br');
/*!40000 ALTER TABLE `LOJAS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PESSOA_FISICA`
--

DROP TABLE IF EXISTS `PESSOA_FISICA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PESSOA_FISICA` (
  `ID_PI` bigint NOT NULL AUTO_INCREMENT,
  `CPF_FUNC` varchar(14) NOT NULL,
  `NOME_FUNC` varchar(30) NOT NULL,
  `SOBRENOME_FUNC` varchar(60) NOT NULL,
  `NASCIMENTO_FUNC` date NOT NULL,
  `CARGO_FUNC` varchar(60) NOT NULL,
  `LOJA_FUNC` bigint NOT NULL,
  `SALARIO_FUNC` float NOT NULL,
  PRIMARY KEY (`ID_PI`),
  UNIQUE KEY `CPF_FUNC` (`CPF_FUNC`),
  KEY `PESSOA_FISICA_fk0` (`LOJA_FUNC`),
  CONSTRAINT `PESSOA_FISICA_fk0` FOREIGN KEY (`LOJA_FUNC`) REFERENCES `LOJAS` (`ID_LOJA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PESSOA_FISICA`
--

LOCK TABLES `PESSOA_FISICA` WRITE;
/*!40000 ALTER TABLE `PESSOA_FISICA` DISABLE KEYS */;
INSERT INTO `PESSOA_FISICA` VALUES (1,'456.477.298-86','Viktor','Santos Moitinho','1996-05-13','Assistente de TI',1,2500);
/*!40000 ALTER TABLE `PESSOA_FISICA` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'IGNORE_SPACE,ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`viktor`@`localhost`*/ /*!50003 TRIGGER `INSERIR_FUNC_CARGO` AFTER INSERT ON `PESSOA_FISICA` FOR EACH ROW BEGIN	
                	INSERT INTO FUNCIONARIO
							(CPF_FUNC, NOME_FUNC,SOBRENOME_FUNC,NASCIMENTO_FUNC) 
					VALUES 
                    		(NEW.CPF_FUNC,NEW.NOME_FUNC,NEW.SOBRENOME_FUNC,NEW.NASCIMENTO_FUNC);
                            
                    INSERT INTO CARGO 
                    		(CARGO_FUNC,LOJA_FUNC,SALARIO_FUNC)
					VALUES 
                    		(NEW.CARGO_FUNC, NEW.LOJA_FUNC,NEW.SALARIO_FUNC);
                 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `PRODUTO`
--

DROP TABLE IF EXISTS `PRODUTO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PRODUTO` (
  `ID_PRODUTO` bigint NOT NULL AUTO_INCREMENT,
  `EAN_PRODUTO` bigint NOT NULL,
  `NOME_PRODUTO` varchar(100) NOT NULL,
  `PRECO_PRODUTO` float NOT NULL,
  `CUSTO_PRODUTO` float NOT NULL,
  `VALIDADE_PRODUTO` date NOT NULL,
  `FABRICACAO_PRODUTO` date NOT NULL,
  PRIMARY KEY (`ID_PRODUTO`),
  UNIQUE KEY `EAN_PRODUTO` (`EAN_PRODUTO`),
  CONSTRAINT `PRODUTO_fk0` FOREIGN KEY (`ID_PRODUTO`) REFERENCES `ESTOQUE` (`ID_ESTOQUE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRODUTO`
--

LOCK TABLES `PRODUTO` WRITE;
/*!40000 ALTER TABLE `PRODUTO` DISABLE KEYS */;
INSERT INTO `PRODUTO` VALUES (1,4564778956,'Dipirona',2.5,0.85,'2021-12-12','2020-12-12');
/*!40000 ALTER TABLE `PRODUTO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `CARGO_FUNCIONARIO`
--

/*!50001 DROP VIEW IF EXISTS `CARGO_FUNCIONARIO`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`viktor`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `CARGO_FUNCIONARIO` AS select `PESSOA_FISICA`.`ID_PI` AS `MATRICULA`,`PESSOA_FISICA`.`NOME_FUNC` AS `NOME`,`PESSOA_FISICA`.`SOBRENOME_FUNC` AS `SOBRENOME`,`PESSOA_FISICA`.`CARGO_FUNC` AS `CARGO`,`PESSOA_FISICA`.`LOJA_FUNC` AS `LOJA` from `PESSOA_FISICA` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `DADOS_PRODUTO`
--

/*!50001 DROP VIEW IF EXISTS `DADOS_PRODUTO`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`viktor`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `DADOS_PRODUTO` AS select `ESTOQUE`.`ID_ESTOQUE` AS `CODIGO_INTERNO`,`ESTOQUE`.`EAN_PRODUTO` AS `CODIGO_BARRA`,`ESTOQUE`.`NOME_PRODUTO` AS `NOME_PRODUTO`,`ESTOQUE`.`PRECO_PRODUTO` AS `PRECO_PRODUTO`,`ESTOQUE`.`CUSTO_PRODUTO` AS `CUSTO_PRODUTO`,(`ESTOQUE`.`PRECO_PRODUTO` / `ESTOQUE`.`CUSTO_PRODUTO`) AS `LUCRO` from `ESTOQUE` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-23 20:26:30
