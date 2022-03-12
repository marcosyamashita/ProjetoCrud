CREATE DATABASE  IF NOT EXISTS `testeBackEnd` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `testeBackEnd`;
-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: testeBackEnd
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fornecedores` (
  `id_fornecedor` int NOT NULL AUTO_INCREMENT,
  `nome_fornecedor` varchar(200) NOT NULL,
  `email_fornecedor` varchar(100) NOT NULL,
  `cnpj_fornecedor` varchar(30) NOT NULL,
  `razaoSocial_fornecedor` varchar(200) NOT NULL,
  `nomeFantasia_fornecedor` varchar(200) NOT NULL,
  `telefone_fornecedor` varchar(20) NOT NULL,
  `celular_vendedor` varchar(20) NOT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedores`
--

LOCK TABLES `fornecedores` WRITE;
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` VALUES (2,'Mais Barato Atacadista','atacadista@teste.com','12132456000100','Mais Barato Atacadista LTDA','Mais Barato','6122224444','61999998888'),(5,'Atacadão','atacadao@teste.com','654987621654121','Atacadão LTDA','Atacadão','2121001122','61977775555'),(6,'Mercado SuperBarato','superbarato@teste.com','0122334455000122','Mercado SuperBarato LTDA','SuperBarato','6133334444','619987654321'),(7,'Sacolão da Rua 7','sacolaorua7@teste.com','00112233445881','Sacolão da Rua 7 LTDA','Sacolão','2130304040','61989887575'),(8,'Mercadinho do Zé','zedomercado@teste.com','1122333455000154','Mercadinho do Seu Zé LTDA','Mercadinho do Zé','3440100010','34988887777');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(200) NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `peso_produto` varchar(45) NOT NULL,
  `quantidadeEstoque_produto` varchar(20) NOT NULL,
  `id_fornecedor` varchar(20) NOT NULL,
  PRIMARY KEY (`id_produto`,`id_fornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Arroz',16.00,'5kg','10','2'),(2,'Feijão',8.00,'1kg','5','2'),(5,'Farinha',6.00,'2Kg','5','5'),(6,'Macarrão',3.00,'2Kg','20','5'),(7,'Mandioca',3.00,'2,5kg','10','7'),(8,'Tomate',6.00,'5kg','30','7'),(9,'Maionese',8.00,'1kg','3','8'),(10,'Café',15.00,'1kg','5','8'),(11,'Pão Francês',9.00,'2,8kg','20','6'),(12,'Refrigerante',9.00,'2lts','12','6');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-12  4:15:13
